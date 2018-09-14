@extends('layouts.base')

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<h1 class="title">{{ $about->getText('about.main_koptekst') }}</h1>
		
		<div class="introduction">
			<div class="introduction__topline">
				<svg class="introduction__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="0 100 0 0 1920 0 0 100" style="fill:#fff"/></svg>
			</div>
			<div class="introduction__content">
				<div class="wrapper">
					<div class="introduction__block">
						<h2 class="introduction__title introduction__title--blue">{!! $about->getStructuredText('about.intro_titel')->asHtml() !!}</h2>
						{!! $about->getStructuredText('about.intro_content')->asHtml() !!}
					</div>
				</div>
			</div>
			<div class="introduction__bottomline">
				<svg class="introduction__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#fff"/></svg>
			</div>
			<div class="introduction__houses-left"></div>
			<div class="introduction__houses-right"></div>
		</div>
		
		<div class="team">
			<div class="wrapper">
				<h2 class="team__title">{!! $about->getText('about.team_titel') !!}</h2>
				<div class="members">

					@foreach($members as $member)
					<div class="members__item">
						<div class="member">
							<div class="member__avatar">
								{!! $member->getImage('profielfoto')->asHtml() !!}
							</div>
							<h3 class="member__name">{!! $member->getStructuredText('naam')->asHtml() !!}</h3>
							<p class="member__function">{{ $member->getText('functie') }}</p>
							<a class="button button--purple button--external" target="_blank" href="{{ $member->getText('linkedin_link') }}">
								<img class="button__icon" src="/images/social/linkedin.svg" width="20" height="20"> Linkedin
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="points">
				<div class="points__topline">
					<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
				</div>
				<div class="points__content">
					<div class="wrapper">
						<h2 class="team__title">{!! $about->getText('about.partner_title') !!}</h2>
						<div class="members">
		
							@foreach($partners as $partner)
							<div class="members__item">
								<div class="member">
									<div class="member__avatar">
										{!! $partner->getImage('logo')->asHtml() !!}
									</div>
									<h3 class="member__name">{!! $partner->getStructuredText('name')->asHtml() !!}</h3>
									<p class="member__function">{{ $partner->getText('description') }}</p>
									{{--<a class="button button--purple button--external" target="_blank" href="{{ $partner->getText('website') }}">{{ $about->getText('about.visit_website') }}</a>--}}
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="points__bottomline">
					<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="0 100 0 0 1920 0 0 100" style="fill:#ebf4fb"/></svg>
				</div>
			</div>
		
		<div class="calculator" id="calculator">
			@include('partials/calculator')
		</div>
	</div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop