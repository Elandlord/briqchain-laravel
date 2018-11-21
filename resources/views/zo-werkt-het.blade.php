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
							<div class="fonds_omschrijving">
								<h2 class="fonds__omschrijving-title">{!! $zoWerktHet->getStructuredText('zo_werkt_het.new_intro_title')->asHtml() !!}</h2>
								<div class="fonds__omschrijving-paragraphs">
									{!! $zoWerktHet->getStructuredText('zo_werkt_het.new_intro_content')->asHtml() !!}
								</div>
								
								<div class="text-center mb-20">
									<iframe id="briq_video" class="sub-intro__video" src="https://player.vimeo.com/video/249152130?color=4d31f2&title=0&byline=0&portrait=0" width="480" height="270" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
							</div>

							<div class="fonds__omschrijving" style="padding-bottom: 30px;">
								<h2 class="fonds__omschrijving-title">{!! $zoWerktHet->getStructuredText('zo_werkt_het.title')->asHtml() !!}</h2>
								<div class="flex">
									@foreach($zoWerktHet->steps() as $step)
										<div class="flex-1 text-center">
											<img class="img-responsive" style="width: 100px; height:100px;" src="{!! $step->getImage('image')->getUrl() !!}" alt="{{ $step->getText('content') }}" />
											<h2 class="fonds__omschrijving-title">
												{!! $step->getStructuredText('title')->asHtml() !!}
											</h2>
											{!! $step->getStructuredText('content')->asHtml() !!}	
										</div>
									@endforeach
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