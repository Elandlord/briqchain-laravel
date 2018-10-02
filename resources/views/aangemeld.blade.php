@extends('layouts.base')

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>

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

						{{--aanmeld titel--}}
						<h2 class="text-center bold text-4xl mt-20 mb-10">{{ $aangemeld->getText('aangemeld.titel') }}</h2>

						{{--aanmeld text--}}
						<p class="italic text-left">{{ $aangemeld->getText('aangemeld.description') }}</p>

						<div class="text-center mb-20">
							<a href="/" class="button button--green">{{ $aangemeld->getText('aangemeld.link_home') }}</a>
						</div>

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