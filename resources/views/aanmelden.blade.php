@extends('layouts.base')

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<div class="last-action">
			<div class="last-action__topline">
				<svg class="last-action__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
			</div>
			<div class="last-action__content">
				<div class="wrapper wrapper--small">
					<div class="last-action__block">
						<div class="last-action__badge">
							<span class="last-action__badge-title">{{ $aanmelden->getText('aanmelden.kwartaal_aanvang') }}</span>
							<span class="last-action__badge-content">{{ $aanmelden->getText('aanmelden.kwartaal') }}</span>
						</div>
						<span class="last-action__label">{{ $aanmelden->getText('aanmelden.voorinschrijving') }}</span>
						<h2 class="last-action__title">{{ $siteWide->getText('site_breed.aanmelden_titel') }}</h2>
						{!! $siteWide->getStructuredText('site_breed.aanmelden_content')->asHtml() !!}
						<form method="post" action="sign-up/mail">
							@csrf
							<div class="last-action__form">
								<div class="last-action__form-group">
									<label class="last-action__form-label" for="name">{{ $aanmelden->getText('aanmelden.naam') }}</label>
									<input class="last-action__form-input" type="text" id="name" name="name" required="required">
								</div>
								<div class="last-action__form-group">
									<label class="last-action__form-label" for="email_address">{{ $aanmelden->getText('aanmelden.emailadres') }}</label>
									<input class="last-action__form-input" type="email" id="email_address" name="email_address" required="required">
								</div>
								<div class="last-action__form-group">
									<button class="last-action__form-button button button--green" type="submit">{{ $aanmelden->getText('aanmelden.bevestig') }}</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop