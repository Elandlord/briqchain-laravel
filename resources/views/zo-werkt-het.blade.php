@extends('layouts.base')

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
					<div class="split-content__left split-content--half">
						<iframe class="sub-intro__video" src="https://player.vimeo.com/video/249152130?color=4d31f2&title=0&byline=0&portrait=0" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="split-content__right split-content--half">
						<h2 class="split-content__title split-content__title--blue">{!! $zoWerktHet->getStructuredText('zo_werkt_het.intro_titel')->asHtml() !!}</h2>
						{!! $zoWerktHet->getStructuredText('zo_werkt_het.intro_content')->asHtml() !!}
					</div>
				</div>
			</div>
		</div>

		<div class="faq">
			<div class="faq__topline">
				<svg class="faq__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="0 100 0 0 1920 0 0 100" style="fill:#fff"/></svg>
			</div>
			<div class="faq__content">
				<div class="wrapper wrapper--small">
					<h2 class="faq__title">{!! $zoWerktHet->getStructuredText('zo_werkt_het.faq_titel')->asHtml() !!}</h2>
					
					@foreach($questions as $index => $question)
					<div class="question">
						<input id="question_{{ $index }}" class="question__checkbox" type="checkbox">
						<label for="question_{{ $index }}" class="question__label"><h3>{{ $question->getText('vraag') }}</h3></label>
						<div class="question__answer">
							{!! $question->getStructuredText('antwoord')->asHtml() !!}
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="faq__houses-left"></div>
			<div class="faq__houses-right"></div>
		</div>
		
		<div class="calculator calculator--overflow" id="calculator">
			@include('partials/calculator')
		</div>
	</div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop