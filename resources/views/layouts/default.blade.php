<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="Search for issues in Github">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>@yield('title')</title>
	
	@include('inc.public.libraries_css')	
	@yield('extra_css_libraries')
	<link rel="stylesheet" type="text/css" href="{{config('custom.site_url')}}css/custom.css">
	@include('inc.public.dynamic_css')
	@include('inc.public.ga')

</head>

<body class="content">
	@include('inc.header')
    @yield('content')

	@include('inc.footer')

	@include('inc.public.libraries_js')	
	@yield('extra_js_libraries')
	<script src="{{config('custom.site_url')}}js/custom.js"></script>
</body>