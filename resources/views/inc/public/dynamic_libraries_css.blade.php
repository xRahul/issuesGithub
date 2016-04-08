@if(App::environment('production'))

	@if($library == 'bootstrap-datepicker')
		{{-- bootstrap-datepicker.css 1.5.0 --}}
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
	@endif

	@if($library == 'dropzone')
		{{-- bootstrap-datepicker.css 1.5.0 --}}
		<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.css" rel="stylesheet" type="text/css" />
	@endif


@else


	@if($library == 'bootstrap-datepicker')
		<link rel="stylesheet" type="text/css" href="{{config('custom.site_url')}}css/bootstrap-datepicker.min.css"/>
	@endif

	@if($library == 'dropzone')
		<link rel="stylesheet" type="text/css" href="{{config('custom.site_url')}}css/dropzone.css">
	@endif

@endif