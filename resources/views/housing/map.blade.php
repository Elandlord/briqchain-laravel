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
                                    <a href="{{ route('properties') }}" class="button button--green"> 
                                        <img class="button__img button__briqs" 
                                        src="https://briqchain.com/static/img/button-logo.svg" width="19" height="20" alt="Briqs">
                                             Terug 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="fonds__content">
                            <!-- CONTENT -->
                            <section>
                                <div class="flex">
                                    <div class="w-2/5">
                                        <!-- Map -->
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2067.1657602206997!2d4.49462114106253!3d51.96516987839702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5cc907f951773%3A0xc85768b21895c23a!2sVoorhout%2C+3055+ES+Rotterdam!5e0!3m2!1snl!2snl!4v1539246951021" class="w-full" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                    <div class="w-3/5">
                                        <div class="grey-gradient-container w-full h-full">
                                            <h3 class="text-center pt-8 pb-6">Vind je huis</h3>
                                            <div class="text-center mb-4">
                                                <input class="py-4 px-4 w-3/5 h-full text-grey border border-grey-lightest border-solid" 
                                                placeholder="Zoek op straat, stad of postcode" type="text">
                                            </div>
                                            <div class="text-center mb-4">
                                                <select class="py-4 px-4 w-3/5 h-full text-grey border border-grey-lightest border-solid" data-placeholder="Status">
                                                    <option>Status</option>
                                                    <option value="all">Alle (gehele portefeuille)</option>
                                                    <option value="to_buy">Te Koop</option>
                                                    <option value="to_rent">Te Huur</option>
                                                    <option value="in_preparation">In voorbereiding</option>
                                                </select>
                                            </div>
                                            <div class="text-center mb-4">
                                                <select class="py-4 px-4 w-3/5 h-full text-grey border border-grey-lightest border-solid"
                                                        data-placeholder="Type">
                                                    <option class="trn">Type</option>
                                                    <option class="trn">Alle</option>
                                                    <option class="trn">Appartement</option>
                                                    <option class="trn">Huis</option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button class="rounded text-white w-3/5 py-4 bg-navbar-blue">
                                                    Zoeken
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- END CONTENT -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="fondsen__houses-left"></div>
            <div class="fondsen__houses-right"></div>
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyCZrLeH3TvM0Z73g4-RbwOFI2up_gVQU3E&amp;language=en"
            type="text/javascript"></script>
        </div>
    </div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop