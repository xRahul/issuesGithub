<!-- Javascript loader -->
@if($library == 'parsley')
    <script type="text/javascript">
      	window.ParsleyConfig = {
      		animate: true,
			animateDuration: 300,
			validateIfUnchanged: false,
			successClass: "has-success",
			errorClass: "has-error",
			classHandler: function(el) {
				return el.$element.closest(".form-group");
			},
			errorsContainer: function(el) {
				return el.$element.closest(".form-group");
			},
			errorsWrapper: "<span class='help-block'></span>",
			errorTemplate: "<span></span>"
		};
    </script>
@endif


@if(App::environment('production'))
	
	@if($library == 'bootstrap-datepicker')
		{{-- bootstrap-datepicker.min.js 1.5.0 --}}
		<script charset="utf-8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
	@endif

	@if($library == 'parsley')
		{{-- parsley.min.js 2.2.0-rc4 --}}
		<script charset="utf-8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.2.0-rc4/parsley.min.js"></script>
	@endif

	@if($library == 'dropzone')
		{{-- dropzone.min.js 4.2.0 --}}
		<script charset="utf-8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
	@endif


@else


	@if($library == 'bootstrap-datepicker')
		<script src="{{config('custom.site_url')}}js/bootstrap-datepicker.min.js"></script>
	@endif
	
	@if($library == 'parsley')
	    <script src="{{config('custom.site_url')}}js/parsley.min.js"></script>
	@endif

	@if($library == 'dropzone')
		<script src="{{config('custom.site_url')}}js/dropzone.js"></script>
	@endif

@endif