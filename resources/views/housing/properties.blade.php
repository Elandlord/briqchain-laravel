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
                                            <strong class="trn">AANBOD</strong>
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
                            <div class="fonds__item">
                                <div class="fonds__actions">
                                    <a class="button button--green" href="{{ route('map') }}">
                                            <img alt="Briqs"class="button__img button__briqs trn"
                                                height="20" src="https://briqchain.com/static/img/button-logo.svg"
                                                width="19"> 
                                            <span class="trn">Zoek op maps</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="fonds__content">
                            <!-- CONTENT -->
                            <section class="grey-gradient-container px-10 py-10">
                                <h3>Zoeken</h3>

                                <form method="POST" action="">
                                    <div class="flex my-10">
                                        <div class="w-1/5 pr-2">
                                            <select class="py-4 px-4 w-full h-full text-grey border border-grey-lightest border-solid" data-placeholder="Status">
                                                <option>Status</option>
                                                <option value="all">Alle (gehele portefeuille)</option>
                                                <option value="to_buy">Te Koop</option>
                                                <option value="to_rent">Te Huur</option>
                                                <option value="in_preparation">In voorbereiding</option>
                                            </select>
                                        </div>
                                        <div class="w-1/5 pr-2">
                                            <select class="py-4 px-4 w-full h-full text-grey border border-grey-lightest border-solid"
                                                    data-placeholder="Type">
                                                <option class="trn">Type</option>
                                                <option class="trn">Alle</option>
                                                <option class="trn">Appartement</option>
                                                <option class="trn">Huis</option>
                                            </select>
                                        </div>
                                        <div class="w-2/5 pr-2">
                                            <input class="py-4 px-4 w-full h-full text-grey border border-grey-lightest border-solid" 
                                            placeholder="Zoek op straat, stad of postcode" type="text">
                                        </div>
                                        <div class="w-1/5">
                                            <button class="rounded text-white w-full h-full bg-navbar-blue">
                                                Zoeken
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </section>

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