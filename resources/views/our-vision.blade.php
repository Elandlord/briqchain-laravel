@extends('layouts.base')

@section('page_title')
    <title>{{ $page->getText('onze_visie.page_title') }}</title>
@endSection

@section('meta_description')
    <meta name="description" content="{{ $page->getText('onze_visie.page_title') }}">
@endSection

@section('content')
<div class="frame">
    <div class="frame__row">
        @include('partials.header', ['light' => true])
    </div>
    <div class="frame__row frame__row--expand">
        <h1 class="title">{{ $page->getText('onze_visie.title') }}</h1>
        
        <div class="introduction">
            <div class="introduction__topline">
                <svg class="introduction__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="0 100 0 0 1920 0 0 100" style="fill:#fff"/></svg>
            </div>
            <div class="introduction__content">
                <div class="wrapper">
                    <div class="introduction__block">
                        <h2 class="introduction__title introduction__title--blue">{!! $page->getStructuredText('onze_visie.take_care_title')->asHtml() !!}</h2>
                        {!! $page->getStructuredText('onze_visie.take_care_description')->asHtml() !!}

                        <div class="mt-20"></div>

                        <h2 class="introduction__title introduction__title--blue">{!! $page->getStructuredText('onze_visie.everyone_benefits_title')->asHtml() !!}</h2>
                        {!! $page->getStructuredText('onze_visie.everyone_benefits_description')->asHtml() !!}
                        <a class="button button--green" href="{{ $page->getLink('onze_visie.take_care_url')->getUrl() }}">{{ $page->getText('onze_visie.take_care_button') }}</a>
                        <a class="button button--blue" href="{{ $page->getLink('onze_visie.everyone_benefits_url')->getUrl() }}">{{ $page->getText('onze_visie.everyone_benefits_button') }}</a>
                    </div>
                </div>
            </div>
            <div class="introduction__bottomline">
                {{-- <svg class="introduction__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#fff"/>
                </svg> --}}
            </div>
            <div class="introduction__houses-left"></div>
            <div class="introduction__houses-right"></div>
        </div>
    </div>
    <div class="frame__row">
        @include('partials/footer')
    </div>
</div>
@endsection