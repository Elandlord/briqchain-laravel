<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	
	<title>{{ $page_title }}</title>
	<meta name="description" content="{{ $meta_description }}">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P4DMQXK');</script>
	<!-- End Google Tag Manager -->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') }}/static/img/favicon.png">

	<link rel="stylesheet" type="text/css" href="/css/app.css?<?php echo microtime(); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
	<meta name="format-detection" content="telephone=no">
	<meta property="og:image" content="{{ env('APP_URL') }}/static/img/facebook_preview.png">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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

		@yield('content')
	</div>

	@if((env('ANALYTICS')) != null)
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php env('ANALYTICS') ?>', 'auto');
			ga('send', 'pageview');
		</script>
	@endif
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/collect.js/4.0.19/collect.min.js"></script>
	<script type="text/javascript" src="js/app.js?<?php echo microtime(); ?>"></script>




	<!-- Start of Sleeknote signup and lead generation tool - www.sleeknote.com -->
	<script id="sleeknoteScript" type="text/javascript">
        (function (){
            var sleeknoteScriptTag=document.createElement("script");
            sleeknoteScriptTag.type="text/javascript";
            sleeknoteScriptTag.charset="utf-8";
            sleeknoteScriptTag.src=("//sleeknotecustomerscripts.sleeknote.com/13839.js");
            var s=document.getElementById("sleeknoteScript");
            s.parentNode.insertBefore(sleeknoteScriptTag, s);
        })(); </script>
	<!-- End of Sleeknote signup and lead generation tool - www.sleeknote.com -->



	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5a33ca3df4461b0b4ef88ee0/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->

	{{-- <script type="text/javascript" src="js/calculator.js"></script> --}}

	<script
	src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
	crossorigin="anonymous"></script>

	{{--<script>--}}

		{{--let windowHeight = $( window ).width();--}}
		{{--let targetLink = $('#targetLink');--}}
		{{--let dropdown = $('#dropdown');--}}

		{{--if(windowHeight > 1001) {--}}

			{{--targetLink.on('mouseenter', function() {--}}
				{{--dropdown.show();--}}
			{{--});--}}

			{{--targetLink.on('mouseleave', function(event) {--}}
				{{--if(dropdown.is(':hover')) {--}}

				{{--}else {--}}
					{{--dropdown.hide();--}}
				{{--}--}}
			{{--});--}}

			{{--setInterval(() => {--}}
				{{--if(dropdown.is(':hover') || targetLink.is(':hover')) {--}}

				{{--}else {--}}
					{{--dropdown.hide();--}}
				{{--}--}}
			{{--}, 1);--}}

		{{--} else {--}}
			{{--targetLink.on('click', function() {--}}
				{{--if(dropdown.is(':visible')) {--}}
					{{--dropdown.hide()--}}
				{{--} else {--}}
					{{--dropdown.show();--}}
				{{--}--}}
			{{--});--}}

			{{--$("body").click(function(e) {--}}
				{{--if(e.target.id !== "targetLink" && e.target.id !== "dropdown") {--}}
					{{--dropdown.hide();--}}
				{{--}--}}
			{{--});--}}


		{{--}--}}

	{{--</script>--}}

	<script src="/js/frontier.js?<?php echo microtime(); ?>"></script>
</body>
</html>