<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="utf-8">
	
	<title>{{ $page_title }}</title>
	<meta name="description" content="{{ $meta_description }}">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700">
	<link rel="shortcut icon" type="image/x-icon" href="{{ env('APP_URL') }}/static/img/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	
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

	<div id="app">
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

	<script>

		let windowHeight = $( window ).width();
		let targetLink = $('#targetLink');
		let dropdown = $('#dropdown');

		if(windowHeight > 1001) {

			targetLink.on('mouseenter', function() {
				dropdown.show();
			});

			targetLink.on('mouseleave', function(event) {
				if(dropdown.is(':hover')) {

				}else {
					dropdown.hide();
				}
			});
			
			setInterval(() => {
				if(dropdown.is(':hover') || targetLink.is(':hover')) {

				}else {
					dropdown.hide();
				}
			}, 1);

		} else {
			targetLink.on('click', function() {
				if(dropdown.is(':visible')) {
					dropdown.hide()
				} else {
					dropdown.show();
				}
			});

			$("body").click(function(e) {
				if(e.target.id !== "targetLink" && e.target.id !== "dropdown") {
					dropdown.hide();
				}
			});


		}

	</script>

</body>
</html>