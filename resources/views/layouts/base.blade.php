<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">

	@yield('page_title')
	@yield('meta_description')


	{{--Lanuage--}}
	<meta http-equiv="language" content="NL">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P4DMQXK');</script>
	<!-- End Google Tag Manager -->

	{{--Favicon--}}
	<link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') }}/static/img/favicon.png">

	{{--Fonts--}}
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	{{--styles--}}
	<link rel="stylesheet" type="text/css" href="/css/app.css?1.0.3">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
	<meta name="format-detection" content="telephone=no">

	{{--Social media open graph--}}
	<meta property="og:image" content="{{ env('APP_URL') }}/static/img/facebook_preview.png">
	<meta name="twitter:image" content="{{ env('APP_URL') }}/static/img/facebook_preview.png" />

	{{--CSRF --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="theme-color" content="#3C3A6C" />
</head>
<body @if($lightBlue == true) class="body--light-blue" @endif>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4DMQXK"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="app">

        <email-catcher
				display="{{ $should_pop_up }}"
				emailcatcher="{{ $emailCatcher }}"
				ipaddress="{{ $ip_address }}"
				newsletter="{{ $siteWide->getText('site_breed.newsletter') }}"
				title="{{ $siteWide->getText('site_breed.title')  }}"
				description="{{ $siteWide->getText('site_breed.description') }}"
				cookie="{{ $siteWide->getText('site_breed.cookie') }}"
				name="{{ $siteWide->getText('site_breed.name') }}"
				email="{{ $siteWide->getText('site_breed.email') }}"
				signup="{{ $siteWide->getText('site_breed.submit') }}"
				error="{{ $siteWide->getText('site_breed.error_catcher') }}"
				catcher_success="{{ $siteWide->getText('site_breed.success_catcher') }}"
		></email-catcher>

		@if (Session::has('message'))
			@include('partials.message', ['message' => Session::get('message')])
		@endif

		@if ($errors->any())
			@foreach ($errors->all() as $error)
				@include('partials.error', ['message' => $error])
			@endforeach
		@endif

		@yield('content')
	</div>


	{{--Javascript scripts--}}
	@include('partials.scripts')
</body>
</html>