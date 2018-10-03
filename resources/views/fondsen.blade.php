@extends('layouts.base')

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<div class="fondsen">
			<div class="fondsen__content">
				<div class="wrapper">
					<div class="fonds">
						<div class="fonds__header">
							<div class="fonds__item">
								<div class="fonds__id">
									<div class="fonds__icon">
										<img class="fonds__img" src="/images/fonds.svg" width="89" height="69" alt="{{ $fondsen->getText('fondsen.fonds_titel') }}">
									</div>
									<div class="fonds__title">
										<div class="fonds__name">
											{!! $fondsen->getStructuredText('fondsen.fonds_titel')->asHtml() !!}
										</div>
									</div>
								</div>
							</div>
							<div class="fonds__item">
								<div class="fonds__datum">
								<div class="fonds__datum-label">{{ $fondsen->getText('fondsen.fonds_opening_label') }}</div>
									<div class="fonds__datum-value">{{ $fondsen->getText('fondsen.fonds_opening') }}</div>
								</div>
							</div>
							<div class="fonds__item">
								<div class="fonds__datum">
									<div class="fonds__datum-label">{{ $fondsen->getText('fondsen.fonds_sluiting_label') }}</div>
									<div class="fonds__datum-value">{{ $fondsen->getText('fondsen.fonds_sluiting') }}</div>
								</div>
							</div>
							<div class="fonds__item">
								<div class="fonds__actions">
									<a href="sign-up" class="button button--green">
										<img class="button__img button__briqs" src="images/button-logo.svg" width="19" height="20" alt="Briqs">
										{{ $fondsen->getText('fondsen.buy_briqs') }}
									</a>
								</div>
							</div>
						</div>
						<div class="fonds__content">
							<div class="fonds__all-details">
								<div class="fonds__all-detail fonds__all-detail--stretch">
									<div class="fonds__details">
										<h2 class="fonds__details-title">{!! $fondsen->getStructuredText('fondsen.fonds_details_label')->asHtml() !!}</h2>
										<table class="fonds__details-table" border="0" cellspacing="0" cellpadding="0">
											@foreach($details as $detail)
												<tr>
													<th>{{ $detail->getText('titel') }}</th>
													<td>{{ $detail->getText('omschrijving') }}</td>
												</tr>
											@endforeach
											<tr>
												<th>{{ $fondsen->getText('fondsen.title') }}</th>
												<td>
													<ul class="list-reset">
														@foreach($fondsen->getGroup('fondsen.files')->getArray() as $file)
															<li>
																<a href="{{ $file->getLink('file_url')->getUrl() }}" target="_blank">
																	{{ $file->getText('file_name') }}
																</a>
															</li>
														@endforeach
													</ul>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="fonds__all-detail">
									<div class="fonds__points">
										<div class="fonds__point fonds__point--first">
											<div class="fonds__point-label">{{ $fondsen->getText('fondsen.fonds_uitgever_label') }}</div>
											<div class="fonds__point-value fonds__point-value--smaller">{{ $fondsen->getText('fondsen.fonds_uitgever') }}</div>
										</div>
										<div class="fonds__point">
											<div class="fonds__point-label">{{ $fondsen->getText('fondsen.fonds_totale_briq_supply_label') }}</div>
											<div class="fonds__point-value">
												<img class="fonds__point-img" src="/images/input-logo.svg" width="19" height="20" alt="Briqs">
												{{ $fondsen->getText('fondsen.fonds_totale_briq_supply') }}
											</div>
										</div>
										<div class="fonds__point">
											<div class="fonds__point-label">{{ $fondsen->getText('fondsen.fonds_totale_uitgifte_label') }}</div>
											<div class="fonds__point-value">
												<span class="fonds__point-sign">€</span>
												{{ $fondsen->getText('fondsen.fonds_totale_uitgifte') }}
											</div>
										</div>
										<div class="fonds__point fonds__point--last">
											<div class="fonds__point-label">{{ $fondsen->getText('fondsen.fonds_prijs_per_briq_label') }}</div>
											<div class="fonds__point-value">
												<span class="fonds__point-sign">€</span>
												{{ $fondsen->getText('fondsen.fonds_prijs_per_briq') }}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="fonds__omschrijving">
								<h2 class="fonds__omschrijving-title">{!! $fondsen->getStructuredText('fondsen.fonds_omschrijving_label')->asHtml() !!}</h2>
								<div class="fonds__omschrijving-paragraphs">
									{!! $fondsen->getStructuredText('fondsen.fonds_omschrijving')->asHtml() !!}
								</div>
							</div>

							<div class="text-center pt-10">
								@foreach($buttons as $button)
									@if(strtolower($button->getText('color')) == 'groen')
										@php $color = 'green'; @endphp
									@elseif(strtolower($button->getText('color')) == 'blauw')
										@php $color = 'blue'; @endphp
									@endif
									<a class="button button--{{ $color }}"
									   href="{{ $button->getLink('link')->getUrl() }}">{{ $button->getText('name') }}</a>
								@endforeach
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="fondsen__houses-left"></div>
			<div class="fondsen__houses-right"></div>
		</div>
		
		<div class="calculator" id="calculator">
			@include('partials/calculator')
		</div>
		
		<div class="afm">
			<div class="afm__desktop">
				<img src="/images/afm/afm2_vrijstelling_dubbel-1768x122.jpg" width="884" height="61" alt="Let op! U belegt buiten AFM-toezicht.">
			</div>
			<div class="afm__mobile">
				<img src="/images/afm/afm6_vrijstelling_dubbel-420x254.jpg" width="420" height="254" alt="Let op! U belegt buiten AFM-toezicht.">
			</div>
		</div>
	</div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop