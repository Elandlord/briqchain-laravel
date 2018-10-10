@extends('layouts.base')

@section('page_title')
	<title>Woningen</title>
@endSection

@section('meta_description')
	<meta name="description" content="Omschrijving">
@endSection

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
                                    <div class="fonds__icon"><img alt="BRIQ UITGIFTE serie 1" class="fonds__img"
                                                                  height="69"
                                                                  src="https://briqchain.com/static/img/fonds.svg"
                                                                  width="89"></div>
                                    <div class="fonds__title">
                                        <div class="fonds__name">
                                            <strong class="trn">HUREN OF KOPEN</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fonds__item">
                                <div class="fonds__datum">
                                    <div class="fonds__datum-label"></div>
                                    <div class="fonds__datum-value"></div>
                                </div>
                            </div>
                            <div class="fonds__item">
                                <div class="fonds__datum">
                                    <div class="fonds__datum-label"></div>
                                    <div class="fonds__datum-value"></div>
                                </div>
                            </div>
                        </div>
                        <div class="fonds__content">
                            <!-- CONTENT -->
                            <h2 class="fonds__omschrijving-title">Woning <strong>huren</strong></h2>
                            <div class="fonds__omschrijving-paragraphs">
                                <p>
                                    Iedereen kan huren bij briqchain, mits je uiteraard aan de gestelde huurvoorwaarden voldoet zoals inkomenseisen. Beleg jij in briqs, dan krijg jij voorrang op andere geinteresseerde huurders. Hierbij geldt dat degene met de meeste briqs in bezit, 
                                    als eerste in aanmerking komt voor een bezichtiging. Schrijf je </span><a class="trn" href="/inschrijven.php">hier</a> <span class="trn"> gratis en vrijblijvend in en wij houden jou graag op de hoogte wanneer er woningen beschikbaar komen voor verhuur.
                                </p>
                                
                                <h3>Woning kopen</h3>
                                <p>Het uiteindelijke doel van briqchain is om de woningen ook weer te verkopen en daarbij heeft verkoop aan de huurder en/of briq belegger de voorkeur. Hierbij is het ook mogelijk jouw briqs geheel of gedeeltelijk tussentijds aflossen zodat je deze kunt aanwenden voor je hypotheek bij de bank.</p>
                            </div>
                            

                            <!-- END CONTENT -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="fondsen__houses-left"></div>
            <div class="fondsen__houses-right"></div>
        </div>
    </div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop