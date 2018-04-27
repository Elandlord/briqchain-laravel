@extends('layouts.base')

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<div class="wrapper">
			<div class="aanmelden">
				<h1 class="aanmelden__title">{{ $aangemeld->getText('aangemeld.titel') }}</h1>
				<p class="aanmelden__paragraph">{{ $aangemeld->getText('aangemeld.titel') }}</p>
				<a class="button button--green" href="/">{{ $aangemeld->getText('aangemeld.link_home') }}</a>
			</div>
		</div>
	</div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop