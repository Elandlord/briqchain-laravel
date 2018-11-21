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
            <h1 class="text-center text-4xl mt-10">{{ $contactPage->page_title }}</h1>

            <div class="wrapper flex flex-wrap">

                <div class="w-full flex justify-center">
                    <p class="w-2/3 text-center">
                        {{ $contactPage->page_intro }}
                    </p>
                </div>

                {{--contactform--}}

                <form class="w-full" action="{{ route('contact-us') }}" method="post" >
                    <div class="w-1/2 flex flex-col mt-10 mb-20">
                        @csrf

                        <h2 class="mb-6"> {{ $contactPage->contactform_title  }} </h2>

                        <input name="name" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->name_placeholder_text }}">
                        <input name="phone_number" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->phone_number_placeholder_text }}">
                        <input name="email" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->email_placeholder_text }}">
                        <input name="subject" class="my-2 shadow-md outline-none px-4 py-3 rounded" type="text" placeholder="{{ $contactPage->subject_placeholder_text }}">
                        <textarea name="question" rows="6" class="my-2 shadow-md outline-none px-4 py-3 rounded" name="" placeholder="{{ $contactPage->question_placeholder_text }}" ></textarea>

                        <div class="">
                            <input name="submit" class="mt-4 px-4 py-3 rounded shadow-md inline-block bg-jade text-white" type="submit" value="{{ $contactPage->submit_button_text }}" />
                        </div>
                    </div>
                </form>

            </div>

            <div class="faq">
                <div class="faq__topline">
                    <svg class="faq__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="0 100 0 0 1920 0 0 100" style="fill:#fff"/></svg>
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