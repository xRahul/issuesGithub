<?php

namespace App\Http\Controllers;

use GitHub;
use Validator;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(Request $request)
    {
        // Validate the url
    	$validator = Validator::make($request->all(), [
            'url' => 'url'
        ]);
        // Validation fails, then return to previous page with errors
        if ($validator->fails()) 
        {
            return back()->withErrors($validator);
        }

        // get username and repository from the url
    	$url = $request->url;
        preg_match("/[gGiItThHuUbB]*\.[a-zA-Z]*\/([^\/]*)\/([^\/]*)/", $url, $user_repo);
        $user = $user_repo[1];
        $repo = $user_repo[2];

        // initialize required variables
        $page = 1;
        $open_issues = array();
        $now24hours = Carbon::now()->subDay();
        $now7days = Carbon::now()->subDays(7);
        $totalIssues = $lessThan24 = $moreThan24LessThan7 = $moreThan7 = 0;

        // get issues in 100 per page.
        $issues_page = GitHub::api('issue')->all($user, $repo, ['state'=>'open', 'sort'=>'created', 'direction'=>'desc', 'page'=>$page, 'per_page'=>100]);
        
        while( !empty($issues_page) )
        {
            // count all the stats required
            foreach ($issues_page as $issue)
            {
                // convert date to Carbon instance for easier manipulation
                $cDate = Carbon::createFromFormat('Y-m-d\TH:i:sZ', $issue['created_at'], 'UTC');
                $totalIssues++;
                if( $cDate->gte($now24hours) )
                    $lessThan24++;
                else if( $cDate->gte($now7days) && $cDate->lt($now24hours) )
                    $moreThan24LessThan7++;
                else
                    $moreThan7++;
            }
            // get the next page
            $page++;
            $issues_page = GitHub::api('issue')->all($user, $repo, ['state'=>'open', 'sort'=>'created', 'direction'=>'desc', 'page'=>$page, 'per_page'=>100]);
        }

        // stats we require
        $result = array(
                    'total' => $totalIssues,
                    'nowto24hours' => $lessThan24,
                    '24hoursto7days' => $moreThan24LessThan7,
                    'morethan7days' => $moreThan7
                );
        return view('controllers.pages.homepage', compact('url', 'result'));
    }
}
