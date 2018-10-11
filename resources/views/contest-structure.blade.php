@extends('layouts.base')


@section('page_title')
    <title>{{ $page->page_title }}</title>
@endSection

@section('meta_description')
    <meta name="description" content="{{ $page->page_description }}">
@endSection


@section('content')
    <div class="frame">
        <div class="frame__row">
            @include('partials.header', ['light' => true])
        </div>

        <div class="mt-20">

            <svg class="last-action__line-svg " viewBox="0 0 1920 100" preserveAspectRatio="none">
                <polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/>
            </svg>

            <div class="bg-blue-grey md:pb-10 lg:pb-10">

                <div class="contest-structure-body relative container mx-auto text-center mb-20 ">
                    
                    <div class="w-5/6 relative shadow-md bg-white rounded mx-auto p-24 md:p-32 lg:p-32">
                        <div class="absolute pin-t pin-l w-full">
                            <div class="flex items-center">
                                <div class="flex-1 lg:block md:block hidden">
                                    <p class="ml-12 uppercase text-grey-lighter bold text-xs text-left">{{ $page->card_label }}</p>
                                </div>
                                <div class="flex-1 float-right lg:block md:block hidden">
                                    <p class="w-full pl-4 uppercase text-grey bold text-xs text-right">{{ $page->click_guidelines_text }}</p>
                                </div>
                                <div class="flex-1 lg:mt-0 md:mt-0 mt-6 text-center">
                                    <a href="#platform-switcher" class="button button--green" type="submit">
                                            {{ $page->click_guidelines_button }}
                                    </a>
                                </div>
                            </div>
                        </div>


                        <h1 class="xs:mt-20"> {{ $page->about_title }} </h1>

                        <p class="mx-auto">
                            {{ $page->about_paragraph }}
                        </p>

                        <h1 class="mt-20"> {{ $page->token_description_title }} </h1>

                        <p class="mx-auto">
                            {{ $page->token_description_paragraph }}
                        </p>

                    </div>
                </div>

            </div>

        </div>





        <platforms-switcher id="platform-switcher" json-platforms="{{ $platforms }}"></platforms-switcher>

        <div class="frame__row">
            @include('partials/footer')
        </div>
    </div>
@stop