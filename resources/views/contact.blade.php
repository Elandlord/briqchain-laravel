@extends('layouts.base')

@section('page_title')
    <title>{{ $contactPage->main_titel }}</title>
@endSection

@section('meta_description')
    <meta name="description" content="{{ $contactPage->main_omschrijving }}">
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
            
            <div class="absolute pin-t w-full text-center mt-10">
                <h1 class="title pt-8 sm:pt-10 md:pt-10 lg:pt-20">{{ $contactPage->page_title }}</h1>
            </div>

            <div class="wrapper flex flex-wrap">

                <div class="w-full flex justify-center">
                    <p class="w-2/3 text-center">
                        {{ $contactPage->page_intro }}
                    </p>
                </div>

                {{--contactform--}}

                <form class="w-full" action="{{ route('contact-us') }}" method="post" >
                    <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 xs:w-full flex flex-col mt-10 mb-20">
                        @csrf

                        <h2 class="mb-6"> {{ $contactPage->contactform_title  }} </h2>

                        <input name="name" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->name_placeholder_text }}" required>
                        <input name="phone" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->phone_number_placeholder_text }}">
                        <input name="email" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->email_placeholder_text }}" required>
                        <input name="subject" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->subject_placeholder_text }}" required>
                        <textarea name="body" rows="6" class="my-2 shadow-md outline-none px-4 py-3 rounded" name="" placeholder="{{ $contactPage->question_placeholder_text }}" required ></textarea>

                        <div class="mt-4">
                            <input class="button button--green" type="submit" value="{{ $contactPage->submit_button_text }}"/>
                            <div class="lg:mt-0 md:mt-0 sm:mt-0 mt-4 lg:inline-block md:inline-block sm:inline-block block"></div>                        
                            <a class="button button--blue" onclick="openTawk()" >Live chat</a>
                        </div>
                    </div>
                </form>

            </div>

            <div class="faq">
                <div class="faq__topline">
                    <svg class="faq__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
                        <polygon points="0 0 1920 0 1920 100 0 0" style="fill:#fff"/>
                    </svg>
                </div>
                <div class="faq__content">
                    <div class="wrapper wrapper--small">
                        <h2 class="faq__title">{!! $zoWerktHet->getStructuredText('zo_werkt_het.faq_titel')->asHtml() !!}</h2>

                        @foreach($zoWerktHet->faq_vragen() as $index => $question)
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
        </div>
        <div class="frame__row">
            @include('partials/footer')
        </div>
    </div>
@stop