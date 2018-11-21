@extends('layouts.base')

@section('page_title')
	<title>{{ $zoWerktHet->main_titel }}</title>
@endsection

@section('meta_description')
	<meta name="description" content="{{ $zoWerktHet->main_omschrijving }}">
@endsection

@section('content')
<div class="frame">
	<div class="frame__row">
		@include('partials.header', ['light' => true])
	</div>
	<div class="frame__row frame__row--expand">
		<div class="fondsen">
			<div class="fondsen__content">
				<div class="wrapper">
					<div class="fonds fonds-exception">
						<div class="fonds__content">
							<div class="fonds__all-details">
								<div class="fonds__all-detail fonds__all-detail--stretch">
									<div class="fonds__details">
										<h2 class="fonds__details-title" style="padding: 0px;">{!! $zoWerktHet->getStructuredText('zo_werkt_het.intro_titel')->asHtml() !!}</h2>
                                        {!! $zoWerktHet->getStructuredText('zo_werkt_het.intro_content')->asHtml() !!}
                                        
                                        <div class="text-center">
                                            <iframe id="briq_video" class="sub-intro__video" src="https://player.vimeo.com/video/249152130?color=4d31f2&title=0&byline=0&portrait=0" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        </div>
									</div>
								</div>
							</div>
							<div class="fonds__omschrijving">
								<h2 class="fonds__omschrijving-title">{!! $zoWerktHet->getStructuredText('zo_werkt_het.costs_title')->asHtml() !!}</h2>
								<div class="fonds__omschrijving-paragraphs" style="margin-bottom: 30px;">
                                        {!! $zoWerktHet->getStructuredText('zo_werkt_het.costs_content')->asHtml() !!}
								</div>
                                <h2 class="fonds__omschrijving-title">{!! $zoWerktHet->getStructuredText('zo_werkt_het.benefits_title')->asHtml() !!}</h2>
                                <div class="fonds__omschrijving-paragraphs check-ul" style="margin-bottom: 30px;">
                                        {!! $zoWerktHet->getStructuredText('zo_werkt_het.benefits_content')->asHtml() !!}
                                </div>
                                <h2 class="fonds__omschrijving-title">{!! $zoWerktHet->getStructuredText('zo_werkt_het.risks_title')->asHtml() !!}</h2>
                                <div class="fonds__omschrijving-paragraphs check-ul">
                                        {!! $zoWerktHet->getStructuredText('zo_werkt_het.risks_content')->asHtml() !!}
                                </div>
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
	</div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop