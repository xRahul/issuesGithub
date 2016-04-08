<?php

return [

	'site_url' => env('APP_SITE_URL_PREFIX'),
	'image_url' => env('APP_IMAGE_URL_PREFIX'),


	'temp_image_path' => env('IMAGE_PATH_TEMP', '/images/tmp/'), // in storage/app
	'inc_image_path' => env('IMAGE_PATH_INC', '/images/inc/'), // in storage/app

];