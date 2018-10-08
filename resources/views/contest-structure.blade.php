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


        <div class="container mx-auto text-center pb-20 md:py-20 lg:py-20">
            <h1> {{ $page->supporter_title }} </h1>

            <p class="text-sm"> {{ $page->supporter_description }} </p>

            @foreach($page->platforms() as $platform)
                <button class="inline-block bg-jade px-5 py-2 text-xs font-bold rounded text-white mx-2 my-2">
                    {{ $platform->getText('name') }}
                </button>
            @endforeach
        </div>


        <div class="bg-white md:py-20 lg:py-20">

            <div class="contest__platform-left container mx-auto flex flex-col md:flex-row lg:flex-row mt-10 mb-10">
                <div class="w-full md:w-2/5 lg:2/5  rounded bg-white shadow-md">
                    <div class="w-full shadow-md bg-deep-blue rounded-t relative">
                        <div class="contest__structure-rewards-circle">
                            <p>19</p>
                            <p>points</p>
                        </div>
                        <p class="m-0 text-grey-lighter text-xl font-bold py-6 text-center"> Rewards </p>
                    </div>

                    <div class="px-10 py-8 rounded-b">
                        <p class="m-0 text-xs mb-2 "> How do I earn points </p>

                        <p class="m-0 text-lg"> Like us on Facebook</p>
                        <p class="m-0 text-lg"> Comment on a Facebook post</p>
                        <p class="m-0 mb-10 text-lg"> Share your referral link to Facebook</p>

                        <p class="m-0 text-xs mb-2 "> Rewards </p>

                        <p class="m-0 text-lg "> 19 points available </p>

                    </div>
                </div>

                <div class="w-full md:w-3/5 lg:w-3/5 p-8 pl-8 md:p-10 md:pl-20 lg:p-10 lg:pl-20">

                    <h2 class="text-jade text-center md:text-left lg:text-left"> Facebook </h2>

                    <p class="text-base"> Earn entries for sharing, engaging, and commenting, on Facebook </p>

                    <p class="text-xs font-bold ">Guidelines</p>

                    <p class="text-xs">
                        Follow and like the official Briqchain's Facebook page. <br>
                        Your Facebook account must have at least 200 friends. <br>
                        All posts AND profiles will be reviewed by bounty campaign managers. <br>
                        MAXIMUM 5 POSTS WEEKLY <br>
                        MAXIMUM 5 FACEBOOK SHARES WEEKLY. <br>
                        MAXIMUM 15 SHARES EARNED WEEKLY. <br>
                    </p>

                </div>

            </div>
        </div>


        <div class="bg-blue-grey md:py-20 lg:py-20">

            <div class="contest__platform-right container mx-auto flex flex-col md:flex-row lg:flex-row mt-10 mb-10">


                <div class="w-full md:w-3/5 lg:w-3/5 p-8 pl-8 md:p-10 md:pl-20 lg:p-10 lg:pl-20">

                    <h2 class="text-jade text-center md:text-left lg:text-left"> Twitter </h2>

                    <p class="text-base"> Earn entries for sharing, engaging, and commenting, on Facebook </p>

                    <p class="text-xs font-bold ">Guidelines</p>

                    <p class="text-xs">
                        Follow and like the official Briqchain's Facebook page. <br>
                        Your Facebook account must have at least 200 friends. <br>
                        All posts AND profiles will be reviewed by bounty campaign managers. <br>
                        MAXIMUM 5 POSTS WEEKLY <br>
                        MAXIMUM 5 FACEBOOK SHARES WEEKLY. <br>
                        MAXIMUM 15 SHARES EARNED WEEKLY. <br>
                    </p>

                </div>

                <div class="w-full md:w-2/5 lg:2/5  rounded bg-white shadow-md">
                    <div class="w-full shadow-md bg-deep-blue rounded-t relative">
                        <div class="contest__structure-rewards-circle">
                            <p>19</p>
                            <p>points</p>
                        </div>
                        <p class="m-0 text-grey-lighter text-xl font-bold py-6 text-center"> Rewards </p>
                    </div>

                    <div class="px-10 py-8 rounded-b">
                        <p class="m-0 text-xs mb-2 "> How do I earn points </p>

                        <p class="m-0 text-lg"> Like us on Facebook</p>
                        <p class="m-0 text-lg"> Comment on a Facebook post</p>
                        <p class="m-0 mb-10 text-lg"> Share your referral link to Facebook</p>

                        <p class="m-0 text-xs mb-2 "> Rewards </p>

                        <p class="m-0 text-lg "> 19 points available </p>

                    </div>
                </div>

            </div>
        </div>


        <div class="frame__row">
            @include('partials/footer')
        </div>
    </div>
@stop