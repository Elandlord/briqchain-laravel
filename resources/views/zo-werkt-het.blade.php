@extends('layouts.base')

@section('page_title')
	<title>{{ $zoWerktHet->main_titel }}</title>
@endsection

@section('meta_description')
	<meta name="description" content="{{ $zoWerktHet->main_omschrijving }}">
@endsection

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<svg class="points__line-header" viewBox="0 0 1920 350" preserveAspectRatio="none">
			<polygon points="0,200 0,0 1920,0 1920,350" style="fill:#EAF4FB"/>
		</svg>
		
		<div class="absolute pin-t w-full text-center">
			<h1 class="title pt-8 sm:pt-10 md:pt-10 lg:pt-20">{!! $zoWerktHet->getStructuredText('zo_werkt_het.intro_titel')->asHtml() !!}</h1>
		</div>

		<div class="intro" style="padding-top: 50px;">
			<div class="wrapper wrapper--middle">
				<div class="split-content">
					<div class="split-content__left">
						<div class="house-icon">
							<div class="text-center" style="min-width: 480px;">
								<iframe id="briq_video" class="sub-intro__video" src="https://player.vimeo.com/video/249152130?color=4d31f2&title=0&byline=0&portrait=0" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="split-content__right">
						<h2 class="split-content__title split-content__title--purple">{!! $zoWerktHet->getStructuredText('zo_werkt_het.new_intro_title')->asHtml() !!}</h2>

						{!! $zoWerktHet->getStructuredText('zo_werkt_het.new_intro_content')->asHtml() !!}
					</div>
				</div>
			</div>
		</div>

		<div class="points">
			<div class="points__topline">
				<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
					<polygon points="0 0 1920 100 1920 100 0 100" style="fill:#ebf4fb"/>
				</svg>
			</div>
			<div class="points__content">
				<div class="wrapper wrapper--large">
					<h2 class="text-center" style="font-size: 34px; font-weight: 300;">{!! $zoWerktHet->getStructuredText('zo_werkt_het.title')->asHtml() !!}</h2>
					<div class="flex">
						@foreach($zoWerktHet->steps() as $step)
							<div class="flex-1 text-center">
								<img class="img-responsive" style="width: 100px; height:100px;" src="{!! $step->getImage('image')->getUrl() !!}" alt="{{ $step->getText('content') }}" />
								<h2 class="fonds__omschrijving-title">
									{!! $step->getStructuredText('title')->asHtml() !!}
								</h2>
								{!! $step->getStructuredText('content')->asHtml() !!}	
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="points__bottomline">
				<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
					<polygon points="0 0 1920 0 1920 100 0 0" style="fill:#ebf4fb"/>
				</svg>
			</div>
		</div>

		<div class="intro">
			<div class="wrapper wrapper--middle">
				<div class="split-content">
					<div class="split-content__left">
						<div class="house-icon">
							<div class="text-center">
								{!! $zoWerktHet->getImage('zo_werkt_het.risks_image')->asHtml() !!}
							</div>
						</div>
					</div>
					<div class="split-content__right check-ul">
						<h2 class="split-content__title split-content__title--purple">{!! $zoWerktHet->getStructuredText('zo_werkt_het.risks_title')->asHtml() !!}</h2>

						{!! $zoWerktHet->getStructuredText('zo_werkt_het.risks_content')->asHtml() !!}
					</div>
				</div>
			</div>
		</div>

		<div class="points">
			<div class="points__topline">
				<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
					<polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/>
				</svg>
			</div>
			<div class="points__content">
				<div class="wrapper wrapper--large">
					<h2 class="text-center" style="font-size: 34px; font-weight: 300;">{!! $zoWerktHet->getStructuredText('zo_werkt_het.benefits_title')->asHtml() !!}</h2>
					<div class="points__holder">
						@foreach($home->nieuwe_punten() as $point)

							<div class="point">
								<div class="point__icon">
									{!! $point->getImage('image')->asHtml() !!}
								</div>
								{!! $point->getStructuredText('punt_title')->asHtml() !!}
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="points__bottomline">
				<svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
					<polygon points="0 100 0 0 1920 0 0 100" style="fill:#ebf4fb"/>
				</svg>
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
							{!! $zoWerktHet->getImage('zo_werkt_het.costs_image')->asHtml() !!}
						</div>
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