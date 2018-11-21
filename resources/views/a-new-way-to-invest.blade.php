@extends('layouts.base')

@section('page_title')
    <title>{{ $page->getText('het_nieuwe_beleggen.page_title') }}</title>
@endSection

@section('meta_description')
    <meta name="description" content="{{ $page->getText('het_nieuwe_beleggen.page_description') }}">
@endSection

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<div class="intro">
            <div class="wrapper wrapper--middle">
                <div class="split-content">
                    <div class="split-content__left">
                        <div class="house-icon">
                            {!! $page->getImage('het_nieuwe_beleggen.no_banks_image')->asHtml() !!}
                        </div>
                    </div>
                    <div class="split-content__right">
                        <h2 class="split-content__title split-content__title--purple">{!! $page->getStructuredText('het_nieuwe_beleggen.no_banks_title')->asHtml() !!}</h2>

                        {!! $page->getStructuredText('het_nieuwe_beleggen.no_banks_content')->asHtml() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="blockchain">
            <div class="wrapper wrapper--middle">
                <div class="split-content">
                    <div class="split-content__pane split-content__left">
                        <h2 class="split-content__title split-content__title--green">{!! $page->getStructuredText('het_nieuwe_beleggen.blockchain_title')->asHtml() !!}</h2>
                        {!! $page->getStructuredText('het_nieuwe_beleggen.blockchain_content')->asHtml() !!}
                    </div>
                    <div class="split-content__pane split-content__right split-content__pane--mobile-first">
                        <div class="blockchain-icon">
                            {!! $page->getImage('het_nieuwe_beleggen.blockchain_image')->asHtml() !!}
                        </div>
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
				<h1 class="text-center split-content__title split-content__title--purple"> {!! $page->getStructuredText('het_nieuwe_beleggen.play_video')->asHtml() !!}</h1>
				<div class="wrapper text-center">
					<iframe id="briq_video" class="sub-intro__video" src="https://player.vimeo.com/video/249152130?color=4d31f2&title=0&byline=0&portrait=0" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>

		</div>
    </div>
    <div>
        @include('partials/footer')
    </div>
</div>
@endsection