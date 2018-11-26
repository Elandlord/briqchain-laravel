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
        <svg class="points__line-header" viewBox="0 0 1920 350" preserveAspectRatio="none">
            <polygon points="0,200 0,0 1920,0 1920,350" style="fill:#EAF4FB"/>
        </svg>
        
        <div class="absolute pin-t w-full text-center">
            <h1 class="title pt-8 sm:pt-10 md:pt-10 lg:pt-20">{!! $page->getStructuredText('het_nieuwe_beleggen.title')->asHtml() !!}</h1>
        </div>

		<div class="intro" style="padding-top: 50px;">
            <div class="wrapper wrapper--middle">
                <div class="split-content">
                    <div class="split-content__left">
                        <div class="house-icon">
                            <img style="width: 400px;" src="{!! $page->getImage('het_nieuwe_beleggen.no_banks_image')->getUrl() !!}" />
                        </div>
                    </div>
                    <div class="split-content__right">
                        <h2 class="split-content__title split-content__title--purple">{!! $page->getStructuredText('het_nieuwe_beleggen.no_banks_title')->asHtml() !!}</h2>

                        {!! $page->getStructuredText('het_nieuwe_beleggen.no_banks_content')->asHtml() !!}
                        <a class="button button--green" href="{{ $page->getLink('het_nieuwe_beleggen.no_banks_url')->getUrl() }}">{{ $page->getText('het_nieuwe_beleggen.no_banks_button') }}</a>
                        <a class="button button--blue" href="{{ $page->getLink('het_nieuwe_beleggen.invest_in_briqs_url')->getUrl() }}">{{ $page->getText('het_nieuwe_beleggen.invest_in_briqs_button') }}</a>
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
                        <a class="button button--green" href="{{ $page->getLink('het_nieuwe_beleggen.blockchain_url')->getUrl() }}">{{ $page->getText('het_nieuwe_beleggen.blockchain_button') }}</a>
                        <a class="button button--blue" href="{{ $page->getLink('het_nieuwe_beleggen.invest_in_briqs_url')->getUrl() }}">{{ $page->getText('het_nieuwe_beleggen.invest_in_briqs_button') }}</a>
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
					<polygon points="0 0 1920 100 1920 100 0 100" style="fill:#ebf4fb"/>
				</svg>
			</div>
			<div class="points__content">
				<h1 class="text-center split-content__title split-content__title--purple"> {!! $page->getStructuredText('het_nieuwe_beleggen.play_video')->asHtml() !!}</h1>
				<div class="wrapper text-center">
					<iframe id="briq_video" class="sub-intro__video" src="https://player.vimeo.com/video/249152130?color=4d31f2&title=0&byline=0&portrait=0" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="mt-4"></div>
                <div class="wrapper text-center">
                    <a class="block button button--green text-center" href="{{ $page->getLink('het_nieuwe_beleggen.invest_in_briqs_url')->getUrl() }}">{{ $page->getText('het_nieuwe_beleggen.invest_in_briqs_button') }}</a>                
                </div>
			</div>

		</div>
    </div>
    <div>
        @include('partials/footer')
    </div>
</div>
@endsection