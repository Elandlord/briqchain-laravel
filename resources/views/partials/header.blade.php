<div class="header<?php if($light === true): ?> header--light<?php endif; ?>">
	<div class="header__left">
		<a class="logo" href="/">
			<img class="logo__img" src="https://briqchain.com/static/img/logo<?php if($light !== true): ?>-white<?php endif; ?>.svg" width="222" height="43" alt="Briqchain logo">
			<span class="logo__payoff">
				<span class="logo__payoff-powered">Powered by</span>
				<span class="logo__payoff-name">blockchain</span>
			</span>
		</a>
	</div>
	<div class="header__right">
		<div class="nav">
			<input class="nav__toggle" id="menu-toggle" type="checkbox">
			<label for="menu-toggle" class="nav__hamburger">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
					<g fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10">
						<path d="m1 1h18"></path>
						<path d="m1 8h18"></path>
						<path d="m1 15h18"></path>
					</g>
				</svg>
			</label>
			
			<div class="nav__menu">
				<label for="menu-toggle" class="nav__cross">
					<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"><g fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" shape-rendering="crispEdges"><path d="m1 14l13-13"/><path d="m1 1l13 13"/></g></svg>
				</label>
				
				<ul class="navigation">
					<div id="horizontalmenu">
						<li class="navigation__item">
							<a class="navigation__link" href="{{ Config('url') }}/">{{ $siteWide->getText('site_breed.home') }}</a>
						</li>
						<li class="navigation__item">
							<a class="navigation__link" href="{{ Config('url') }}/funds">{{ $siteWide->getText('site_breed.fonds') }}</a>
						</li>
						<li class="navigation__item">
							<a class="navigation__link" href="{{ Config('url') }}/how-it-works">{{ $siteWide->getText('site_breed.zo_werkt_het') }}</a>
						</li>
						<li class="navigation__item">
							<a class="navigation__link" href="{{ Config('url') }}/about">{{ $siteWide->getText('site_breed.about') }}</a>
						</li>
						{{--<li class="navigation__item">--}}
							{{--<a id="targetLink" class="navigation__link" href="#">{{ $siteWide->getText('site_breed.woningen') }}</a>--}}
							{{--<ul id="dropdown">--}}
								{{--<li class="navigation__item">--}}
									{{--<a class="navigation__link" href="http://woningen.briqchain.com/aanbod">{{ $siteWide->getText('site_breed.aanbod') }}</a>--}}
								{{--</li>--}}
								{{--<li class="navigation__item">--}}
									{{--<a class="navigation__link" href="http://woningen.briqchain.com/huren-of-kopen">{{ $siteWide->getText('site_breed.huren_of_kopen') }}</a>--}}
								{{--</li>--}}
								{{--<li class="navigation__item">--}}
									{{--<a class="navigation__link" href="http://woningen.briqchain.com/inschrijven">{{ $siteWide->getText('site_breed.inschrijven') }}</a>--}}
								{{--</li>--}}
								{{--<li class="navigation__item">--}}
									{{--<a class="navigation__link" href="http://woningen.briqchain.com/woning-verkopen">{{ $siteWide->getText('site_breed.woning_verkopen') }}</a>--}}
								{{--</li>--}}
							{{--</ul>--}}
						{{--</li>--}}
					</div>
				</ul>
				
				<div class="header__call-to-action">
					<a class="button header__button" href="{{ Config('url') }}/sign-up">{{ $siteWide->getText('site_breed.aanmelden') }}</a>
				</div>
			</div>													
		</div>
	</div>
</div>