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
                    <div class="w-5/6 shadow-md bg-white rounded mx-auto p-10 md:p-32 lg:p-32">

                        <h1 class=""> {{ $page->about_title }} </h1>

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





        <platforms-switcher json-platforms="{{ $platforms }}"></platforms-switcher>

        <div class="frame__row">
            @include('partials/footer')
        </div>
    </div>
@stop