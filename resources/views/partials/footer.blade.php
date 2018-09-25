<div class="footer">
	<div class="footer__content">
		<div class="footer__content-item footer__content-item--left">
			<div class="address" style="margin-top: 10px;">
				<div class="address__row" style="margin-bottom: 10px;">
					<a class="address__link" href="mailto:{{ $siteWide->getText('site_breed.emailadres') }}"><span class="address__icon"><img class="address__img" src="{{ env('APP_URL') }}/static/img/email.svg" width="15" height="11" alt="E-mailadres"></span> {{ $siteWide->getText('site_breed.emailadres') }}</a>
				</div>
				<div>
					<span>
						<div style="display: inline-block;">
							<a href="/language/nl-nl" rel="canonical">
								<img style="width: 40px; height: 40px;" src="images/netherlands.png" />
							</a>
						</div>
					</span>
					<span>
						<div style="display: inline-block; margin-left: 5px;">
							<a href="/language/en-us" rel="nofollow">
								<img style="width: 40px; height: 40px;" src="images/usa.png" />
							</a>
						</div>
					</span>
				</div>
			</div>
		</div>
		
		<div class="footer__content-item footer__content-item--center">
			<ul class="social">
				<li class="social__item">
					<a class="social__link" href="{{ $siteWide->getText('site_breed.facebook_link') }}" target="_blank">
						<img class="social__img" src="{{ env('APP_URL') }}/static/img/social/facebook.svg" width="23" height="23" alt="Facebook">
					</a>
				</li>
				<li class="social__item">
					<a class="social__link" href="{{ $siteWide->getText('site_breed.twitter_link') }}" target="_blank">
						<img class="social__img" src="{{ env('APP_URL') }}/static/img/social/twitter.svg" width="27" height="22" alt="Twitter">
					</a>
				</li>
				
				<li class="social__item">
					<a class="social__link" href="{{ $siteWide->getText('site_breed.linkedin_link') }}" target="_blank">
						<img class="social__img" src="{{ env('APP_URL') }}/static/img/social/linkedin.svg" width="23" height="23" alt="Linkedin">
					</a>
				</li>
				<li class="social__item">
					<a class="social__link" href="{{ $siteWide->getText('site_breed.vimeo_link') }}" target="_blank">
						<img class="social__img" src="{{ env('APP_URL') }}/static/img/social/vimeo.svg" width="23" height="23" alt="Vimeo">
					</a>
				</li>
			</ul>
		</div>					
		
		<div class="footer__content-item footer__content-item--right">
			<a class="footer__logo" href="{{ env('APP_URL') }}">
				<img class="logo__img" src="{{ env('APP_URL') }}/static/img/logo-white.svg" width="172" height="42" alt="Briqchain logo">
			</a>
		</div>
	</div>
</div>