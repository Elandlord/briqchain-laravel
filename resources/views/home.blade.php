@extends('layouts.base')

@section('page_title')
    <title>{{ $home->main_titel }}</title>
@endSection

@section('meta_description')
    <meta name="description" content="{{ $home->main_omschrijving }}">
@endSection

@section('content')
    <div class="frame">
        <div class="frame__row">
            <div class="hero">
                @include('partials.header', ['light' => false])

                <div class="hero__container">
                    <div class="hero__content ">
                        <h1 class="hero__title">{{ $home->hero_titel }}</h1>
                        <p class="hero__paragraph m-0 mb-10">{{ $home->hero_subtitle }}</p>

                        <div class="hero__buttons">
                            @foreach($home->hero_knoppen() as $button)
                                @if(strtolower( $button->getText('kleur')) == 'groen')
                                    @php $color = 'green'; @endphp
                                @elseif(strtolower($button->getText('kleur')) == 'blauw')
                                    @php $color = 'blue'; @endphp
                                @endif
                                <a class="button button--{{ $color }}"
                                   href="{{ $button->getLink('link')->getUrl() }}">{{ $button->getText('naam') }}</a>
                            @endforeach
                        </div>


                    </div>

                </div>

                <div class="badge">
                    <div class="badge__content">
                        <div class="badge__title"><span
                                    class="badge__currency">{{ $home->badge_valuta }}</span>{{ $home->badge_prijs }}
                        </div>
                        <div class="badge__description">
                            {{ $home->badge_omschrijving }}
                        </div>
                    </div>
                </div>
                <div class="hero__houses-left"></div>
                <div class="hero__houses-right"></div>
                <div style="position: relative; z-index: 1;" class="hero__round">
                    <svg class="hero__round-svg" viewBox="0 0 1919 49" preserveAspectRatio="none">
                        <path d="M1920,50H0V0A9241,9241,0,0,0,1920,0Z" style="fill:#fff; stroke:#fff;"/>
                    </svg>
                </div>
            </div>
        </div>

        {{--Media articles--}}
        <div class="mt-10">
            <p class="mb-10 text-center"> Featured on </p>
            <media-slider media-articles="{{ json_encode($mediaArticles)  }}"></media-slider>
        </div>

        <div class="frame__row frame__row--expand">
            <div class="intro">
                <div class="wrapper wrapper--middle">
                    <div class="split-content">
                        <div class="split-content__left">
                            <div class="house-icon">
                                {!! $home->getImage('home.intro_afbeelding')->asHtml() !!}
                            </div>
                        </div>
                        <div class="split-content__right">
                            <h2 class="split-content__title split-content__title--purple">{!! $home->intro_titel !!}</h2>

                            {!! $home->intro_content !!}
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
                        <div class="points__holder">
                            @foreach($home->punten() as $point)

                                <div class="point">
                                    <div class="point__icon">
                                        {!! $point->getImage('afbeelding')->asHtml() !!}
                                    </div>
                                    <h2 class="point__title">{!! $point->getStructuredText('titel')->asText() !!}</h2>
                                    {!! $point->getStructuredText('content')->asHtml() !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="points__bottomline">
                    <svg class="points__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
                        <polygon points="0 100 0 0 m1920 0 0 100" style="fill:#ebf4fb"/>
                    </svg>
                </div>
            </div>

            <div class="blockchain">
                <div class="wrapper wrapper--middle">
                    <div class="split-content">
                        <div class="split-content__pane split-content__left">
                            <h2 class="split-content__title split-content__title--green">{!! $home->blockchain_titel !!}</h2>
                            {!! $home->blockchain_content !!}
                        </div>
                        <div class="split-content__pane split-content__right split-content__pane--mobile-first">
                            <div class="blockchain-icon">
                                {!! $home->blockchain_afbeelding->asHtml() !!}
                            </div>
                        </div>
                    </div>
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