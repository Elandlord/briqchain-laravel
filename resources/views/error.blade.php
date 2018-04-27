<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<div class="wrapper">
			<div class="error">
				<h1 class="error__title">{{ $this->titel }}</h1>
				<p class="error__paragraph">{{ $this->omschrijving }}</p>
				<a class="button button--green" href="{{ $this->url }}/">Terug naar home</a>
			</div>
		</div>
	</div>
	<div class="frame__row">
		@include('partials.footer')
	</div>
</div>