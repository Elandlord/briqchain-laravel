@extends('layouts.base')

@section('page_title')
    <title>{{ $bounty->page_title }}</title>
@endSection

@section('meta_description')
    <meta name="description" content="{{ $bounty->page_description }}">
@endSection

@section('content')
    <div class="frame">
        <div class="frame__row">
            @include('partials.header', ['light' => true])
        </div>

        {{-- <div class="container mx-auto">
            <countdown message="{{ $bounty->getText('bounty.private_launch_countdown_title') }}" countdowndate="2018-11-01"></countdown>
        </div> --}}

        <div class="frame__row frame__row--expand">
            <div class="last-action">


                <div class="last-action__topline">
                    <svg class="last-action__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none">
                        <polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/>
                    </svg>
                </div>


                <div class="last-action__content">
                    <div class="wrapper wrapper--small">
                        <div class="last-action__block">

                            {{--badge--}}
                            <div class="last-action__badge">
                                <span class="last-action__badge-title mt-2">Social Contest</span>
                                <span class="last-action__badge-content">Briqchain </span>
                            </div>

                            {{--card label--}}
                            <span class="last-action__label">{{ $bounty->getText('bounty.voorinschrijving') }}</span>

                            {{--aanmeld titel--}}
                            <h2 class="text-center bold text-4xl mt-20 mb-10">{{ $bounty->getText('bounty.private_launch_title') }}</h2>

                            {{--aanmeld text--}}
                            <p class="italic text-left">{{ $bounty->getText('bounty.private_launch_instruction') }}</p>

                            {{--Aanmeld formulier --}}
                            <div id="vyper-contest-6786"></div>

                            {{--aanmeld subtext--}}
                            <p class="">{{ $bounty->getText('bounty.private_launch_investment') }} </p>
                        </div>
                    </div>

                    <div class="mt-10 mb-10 sm:mb-0 md:mb-0 lg:mb-0">
                        <div class="wrapper wrapper--small">
                            <h2 class="border-solid border-dark-blue px-6 py-4 mb-10 border-l-6  text-dark-blue">{{ $bounty->getText('bounty.private_launch_how_it_works') }}</h2>

                            @foreach($bounty->questions() as $index => $question)
                                <div class="question question-aanmelden">
                                    <input id="question_{{ $index }}"
                                           class="question__checkbox question__checkbox_aanmelden" type="checkbox">
                                    <label for="question_{{ $index }}"
                                           class="question__label question__label_aanmelden">
                                        <h3>{{ $question->getText('question') }}</h3></label>
                                    <div class="question__answer question__answer_aanmelden">
                                        {!! $question->getStructuredText('answer')->asHtml() !!}
                                    </div>

                                    @if($question->getText('answer2') != "")
                                        <div class="border-solid border-blue-grey border-2"></div>
                                        <div class="question__answer question__answer_aanmelden">
                                            {{ $question->getText('answer2') }}
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


            </div>

        </div>

        {{-- <div class="frame__row frame__row--expand">
            <div class="fondsen">
                <div class="fondsen__content">
                    <div class="wrapper">
                        <div class="fonds">

                            <div class="fonds__content">
                                <div class="fonds__omschrijving" style="border-top: none;">
                                    <h2 class="fonds__omschrijving-title">{!! $bounty->getStructuredText('bounty.bounty_title')->asHtml() !!}</h2>
                                    <div class="fonds__omschrijving-paragraphs">
                                        {!! $bounty->getStructuredText('bounty.bounty_description')->asHtml() !!}
                                    </div>
                                </div>

                                <div class="fonds__omschrijving">
                                    <h2 class="fonds__omschrijving-title">{!! $bounty->getStructuredText('bounty.contest_explanation_title')->asHtml() !!}</h2>
                                    <div class="fonds__omschrijving-paragraphs">
                                        {!! $bounty->getStructuredText('bounty.contest_explanation_description')->asHtml() !!}
                                    </div>
                                </div>

                                <div class="fonds__omschrijving">
                                    <h2 class="fonds__omschrijving-title">{!! $bounty->getStructuredText('bounty.contest_rules_title')->asHtml() !!}</h2>
                                    <div class="fonds__omschrijving-paragraphs">
                                        <ul>
                                            @foreach($bounty->getGroup('bounty.contest_rules')->getArray() as $rule)
                                                <li>{!! $rule->getStructuredText('rule')->asHtml() !!}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <div class="frame__row">
            @include('partials/footer')
        </div>
    </div>
@stop

@section('scripts')
<script src="https://vyper.io/contest-js/contest-6786.js"></script>
<script type="text/javascript">
    setTimeout(function(){ 
        
        $("#gdpr_checkbox a").attr({
            "href": "https://www.briqchain.com/terms-and-conditions",
            "target": "_blank"
        });

        $("#gdpr_checkbox a").click(function(){
            $("#terms").hide();
        });


        function checkWidth() {
            width = document.getElementById('vyper-6786-button').offsetWidth;
            if(width === 0){
                return document.getElementById('vyper-6786-login').offsetWidth + 100;
            }
            return width + 100;
        }

        var login = $('#vyper-6786-login');
        var button = $('#vyper-6786-button');
        var already_signed_up = $('#already_signed_up');

        $(already_signed_up).click(function() {
            $(already_signed_up).css({
                'left': checkWidth()
            });
        });

        $(already_signed_up).css({
            'background': '#304fc9',
            'left': checkWidth()
        });

        $(already_signed_up).hover(function(){
            $(this).css("background", "#304fc9");
        }, function(){    
            $(this).css("background", "#2e4aad");
        });

        $(already_signed_up).insertAfter(login);
    }, 50);
</script>
@endsection