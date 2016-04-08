@if(App::environment('production'))
	{{-- jquery-1.11.3.min.js --}}
	<script charset="utf-8" type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	{{-- bootstrap.min.js 3.3.6 --}}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

@else
    <script src="{{config('custom.site_url')}}js/jquery-1.11.3.min.js"></script>
	<script src="{{config('custom.site_url')}}js/bootstrap.min.js"></script>
@endif