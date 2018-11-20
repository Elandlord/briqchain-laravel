@extends('layouts.base')

@section('page_title')
	<title>{{ $zoWerktHet->main_titel }}</title>
@endSection

@section('meta_description')
	<meta name="description" content="{{ $zoWerktHet->main_omschrijving }}">
@endSection

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<h1 class="title">{{ $zoWerktHet->getText('zo_werkt_het.main_koptekst') }}</h1>
		<div class="sub-intro">
			<div class="wrapper wrapper--middle">
				<div class="split-content">
					<div style="width: 100%;"  class="split-content__left split-content--half">
						<img style="width: 100%" src="{{ $zoWerktHet->getImage('zo_werkt_het.infographic')->getUrl() }}" />
					</div>
					<div class="split-content__right split-content--half">
						<h2 class="split-content__title split-content__title--blue">{!! $zoWerktHet->getStructuredText('zo_werkt_het.intro_titel')->asHtml() !!}</h2>
						{!! $zoWerktHet->getStructuredText('zo_werkt_het.intro_content')->asHtml() !!}
					</div>
				</div>
			</div>


			<div class="text-center pt-10">
				@foreach($zoWerktHet->knoppen() as $button)
					@if(strtolower($button->getText('color')) == 'groen')
						@php $color = 'green'; @endphp
					@elseif(strtolower($button->getText('color')) == 'blauw')
						@php $color = 'blue'; @endphp
					@endif
					<a class="button button--{{ $color }}"
					   href="{{ $button->getLink('link')->getUrl() }}">{{ $button->getText('name') }}</a>
				@endforeach
			</div>


		</div>

		<div class="points">
			<div class="points__topline">
				<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
					<polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/>
				</svg>
			</div>
			<div class="points__content">
			<h1 class="text-center split-content__title split-content__title--purple"> {{ $zoWerktHet->getText('zo_werkt_het.video_title') }}</h1>
				<div class="wrapper text-center">
					<iframe id="briq_video" class="sub-intro__video" src="https://player.vimeo.com/video/249152130?color=4d31f2&title=0&byline=0&portrait=0" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>

		</div>

		<div class="blockchain">
			<div class="wrapper wrapper--middle">
				<div class="split-content">
					<div class="split-content__pane split-content__left">
						<h2 class="split-content__title split-content__title--green">{!! $zoWerktHet->getStructuredText('zo_werkt_het.costs_title')->asHtml() !!}</h2>
						{!! $zoWerktHet->getStructuredText('zo_werkt_het.costs_content')->asHtml() !!}
					</div>
					<div class="split-content__pane split-content__right split-content__pane--mobile-first">
						<div class="blockchain-icon">
							{{-- {!! $page->getImage('zo_werkt_het.het_nieuwe_beleggen_image')->asHtml() !!} --}}
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="intro">
			<div class="wrapper wrapper--middle">
				<div class="split-content">
					<div class="split-content__left">
						<div class="house-icon">
							{{-- {!! $home->getImage('home.onze_visie_image')->asHtml() !!} --}}
						</div>
					</div>
					<div class="split-content__right">
						<h2 class="split-content__title split-content__title--purple">{!! $zoWerktHet->getStructuredText('zo_werkt_het.benefits_title')->asHtml() !!}</h2>

						{!! $zoWerktHet->getStructuredText('zo_werkt_het.benefits_content')->asHtml() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		@include('partials/footer')
	</div>
</div>


@stop