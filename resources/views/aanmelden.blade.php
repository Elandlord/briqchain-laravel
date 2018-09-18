@extends('layouts.base')

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>

	<div class="container mx-auto">
		<countdown countdowndate="2018-10-01"></countdown>
	</div>

	<div class="frame__row frame__row--expand">
		<div class="last-action">


			<div class="last-action__topline">
				<svg class="last-action__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
			</div>


			<div class="last-action__content">
				<div class="wrapper wrapper--small">
					<div class="last-action__block">

						{{--badge--}}
						<div class="last-action__badge">
							<span class="last-action__badge-title mt-2">Private Launch</span>
							<span class="last-action__badge-content">1 oktober </span>
						</div>

						{{--card label--}}
						<span class="last-action__label">{{ $aanmelden->getText('aanmelden.voorinschrijving') }}</span>

						{{--aanmeld titel--}}
						<h2 class="text-center bold text-4xl mt-20 mb-10">Claim je plek</h2>

						{{--aanmeld text--}}
						<p class="italic text-left">{{ $aanmelden->getText('aanmelden.private_launch_instruction') }}</p>

						{{--Aanmeld formulier --}}
						<form method="post" action="sign-up/mail">
							@csrf
							<div class="flex items-center justify-center mt-24">
								<div class="w-1/2 mr-2">
									<input class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" placeholder="email address" type="email" id="email_address" name="email" required="required">
								</div>
								<div class="">
									<button class="button button--green" type="submit">{{ $aanmelden->getText('aanmelden.bevestig') }}</button>
								</div>
							</div>
						</form>

						{{--aanmeld subtext--}}
						<p class="">Indien jij meer dan 500 euro investeert via ons platform in de maand Oktober, dan ontvang jij als onze early investor 5% cashback over je gehele inleg.
							Dus een direct uitgekeerd rendement die je zelfs direct kan herbeleggen voor nog meer rendement. </p>
					</div>
				</div>

				<div class="mt-10 mb-10 sm:mb-0 md:mb-0 lg:mb-0">
					<div class="wrapper wrapper--small">
						<h2 class="border-solid border-dark-blue px-6 py-4 mb-10 border-l-6  text-dark-blue">Hoe werkt het</h2>

						@foreach($questions as $index => $question)
							<div class="question question-aanmelden">
								<input id="question_{{ $index }}" class="question__checkbox question__checkbox_aanmelden" type="checkbox">
								<label for="question_{{ $index }}" class="question__label question__label_aanmelden"><h3>{{ $question->getText('question') }}</h3></label>
								<div class="question__answer question__answer_aanmelden">
									{{ $question->getText('answer') }}
								</div>
							</div>
						@endforeach
					</div>
				</div>

			</div>



		</div>

	</div>



	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop