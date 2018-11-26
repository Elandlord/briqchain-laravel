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
                        <h1 class="hero__title">{{ $home->getText('home.hero_titel') }}</h1>
                        <p class="hero__paragraph m-0 mb-10">{{ $home->getStructuredText('home.hero_subtitle')->asText() }}</p>

                        <div class="hero__buttons">
                            @foreach($home->hero_knoppen() as $button)
                                @if(strtolower($button->getText('kleur')) == 'groen')
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
                                    class="badge__currency">{{ $home->getText('home.badge_valuta') }}</span>{{ $home->getNumber('home.badge_prijs')->getValue() }}
                        </div>
                        <div class="badge__description">
                            {{ $home->getText('home.badge_omschrijving') }}
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

        <div class="mx-auto container flex flex-row items-center justify-center lg:px-32 md:px-10 sm:px-10 px-20 pt-20">
            <div class="afm__desktop">
                <img src="/images/afm/afm2_vrijstelling_dubbel-1768x122.jpg" class="w-full" height="61" alt="Let op! U belegt buiten AFM-toezicht.">
            </div>
            <div class="afm__mobile">
                <img src="/images/afm/afm6_vrijstelling_dubbel-420x254.jpg" class="w-full" height="154" alt="Let op! U belegt buiten AFM-toezicht.">
            </div>
        </div>

        <div class="frame__row frame__row--expand">
            {{-- <div class="intro">
                <div class="wrapper wrapper--middle">
                    <div class="split-content">
                        <div class="split-content__left">
                            <div class="house-icon">
                                {!! $home->getImage('home.intro_afbeelding')->asHtml() !!}
                            </div>
                        </div>
                        <div class="split-content__right">
                            <h2 class="split-content__title split-content__title--purple">{!! $home->getStructuredText('home.intro_titel')->asHtml() !!}</h2>

                            {!! $home->getStructuredText('home.intro_content')->asHtml() !!}
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="intro">
                <div class="wrapper wrapper--middle">
                    <div class="split-content">
                        <div class="split-content__left">
                            <div class="house-icon">
                                {!! $home->getImage('home.zo_werkt_het_afbeelding')->asHtml() !!}
                            </div>
                        </div>
                        <div class="split-content__right">
                            <h2 class="split-content__title split-content__title--purple">{!! $home->getStructuredText('home.zo_werkt_het_titel')->asHtml() !!}</h2>

                            {!! $home->getStructuredText('home.zo_werkt_het_content')->asHtml() !!}

                            <a class="button button--green" href="{{ $home->getLink('home.zo_werkt_het_link')->getUrl() }}">{{ $home->getText('home.zo_werkt_het_button_text') }}</a>
                            <a class="button button--blue" href="{{ $home->getLink('home.invest_in_briqs_url')->getUrl() }}">{{ $home->getText('home.invest_in_briqs_button') }}</a>
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
					    <h2 class="text-center" style="font-size: 34px; font-weight: 300;">{!! $home->getStructuredText('home.punt_block_title')->asHtml() !!}</h2>
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
                            <h2 class="split-content__title split-content__title--green">{!! $home->getStructuredText('home.het_nieuwe_beleggen_title')->asHtml() !!}</h2>
                            {!! $home->getStructuredText('home.het_nieuwe_beleggen_content')->asHtml() !!}

                            <a class="button button--green" href="{{ $home->getLink('home.het_nieuwe_beleggen_link')->getUrl() }}">{{ $home->getText('home.het_nieuwe_beleggen_button_text') }}</a>
                        </div>
                        <div class="split-content__pane split-content__right split-content__pane--mobile-first">
                            <div class="blockchain-icon">
                                {!! $home->getImage('home.het_nieuwe_beleggen_image')->asHtml() !!}
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
                                {!! $home->getImage('home.onze_visie_image')->asHtml() !!}
                            </div>
                        </div>
                        <div class="split-content__right">
                            <h2 class="split-content__title split-content__title--purple">{!! $home->getStructuredText('home.onze_visie_title')->asHtml() !!}</h2>

                            {!! $home->getStructuredText('home.onze_visie_content')->asHtml() !!}

                            <a class="button button--green" href="{{ $home->getLink('home.onze_visie_link')->getUrl() }}">{{ $home->getText('home.onze_visie_button_text') }}</a>
                            <a class="button button--blue" href="{{ $home->getLink('home.invest_in_briqs_url')->getUrl() }}">{{ $home->getText('home.invest_in_briqs_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            {{--Media articles--}}
            <div class="mt-10">
                <h2 class="split-content__title-media-articles text-center bold">Featured on </h2>
                <media-slider button-text="{{ $home->read_more }}" media-articles="{{ json_encode($mediaArticles)  }}"></media-slider>
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