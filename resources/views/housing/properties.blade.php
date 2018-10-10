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
                                    <button id="search-on-maps" class="button button--green" href="map.php"
                                            style="background-color:#07d174;"><img alt="Briqs"
                                                                                   class="button__img button__briqs trn"
                                                                                   height="20"
                                                                                   src="https://briqchain.com/static/img/button-logo.svg"
                                                                                   width="19"> <span class="trn">Zoek op maps</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="fonds__content">
                            <!-- CONTENT -->
                            <section class="search margin-bottom-50">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <!-- Title -->
                                            <h3 class="search-title trn">Zoeken</h3><!-- Form -->
                                            <div class="main-search-box no-shadow">
                                                <!-- Row With Forms -->
                                                <div class="row with-forms">
                                                    <!-- Status -->
                                                    <div class="col-md-3">
                                                        <select id="filter-status" class="chosen-select-no-single"
                                                                data-placeholder="Status">
                                                            <option class="trn">Status</option>
                                                            <option class="trn" value="all">Alle (gehele portefeuille)</option>
                                                            <option class="trn" value="to_buy">Te Koop</option>
                                                            <option class="trn" value="to_rent">Te Huur</option>
                                                            <option class="trn" value="in_preparation">In voorbereiding</option>
                                                        </select>
                                                    </div><!-- Property Type -->
                                                    <div class="col-md-3">
                                                        <select id="filter-house-type" class="chosen-select-no-single"
                                                                data-placeholder="Type">
                                                            <option class="trn">Type</option>
                                                            <option class="trn">Alle</option>
                                                            <option class="trn">Appartement</option>
                                                            <option class="trn">Huis</option>
                                                        </select>
                                                    </div><!-- Main Search Input -->
                                                    <div class="col-md-6">
                                                        <div class="main-search-input">
                                                            <input class="trn" id="filter-search" data-trn-holder="zoek op straat"
                                                                   placeholder="Zoek op straat, stad of postcode"
                                                                   type="text" value="">
                                                            <button id="btnAnyStatus" class="button"
                                                                    style="background-color: #36349D;"><span class="trn">Zoeken</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div><!-- Row With Forms / End -->
                                            </div><!-- Box / End -->
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Content                                ================================================== -->
                            <div class="row fullwidth-layout">
                                <div class="col-md-14">
                                    <!-- Sorting / Layout Switcher -->
                                    <div class="row margin-bottom-15">
                                        <div class="col-md-6">
                                            <!-- Sort by -->
                                            <div class="sort-by">
                                                <label><span class="trn">Sorteren op: </span></label>
                                                <div class="sort-by-select">
                                                    <select class="chosen-select-no-single"
                                                            data-placeholder="Default order">
                                                        <option class="trn">Willekeurig</option>
                                                        <option class="trn">Prijs, Hoog naar Laag</option>
                                                        <option class="trn">Prijs, Laag naar Hoog</option>
                                                        <option class="trn">Nieuwste</option>
                                                        <option class="trn">Oudste</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Layout Switcher -->
                                            <div class="layout-switcher">
                                                <a class="grid-three active" href="#"
                                                   style="background-color: #36349D;"><i class="fa fa-th"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- Listings -->
                                    <div class="listings-container grid-layout-three rls-listing"
                                         style="font-size: 13.1px;">

                                    </div>
                                </div>
                            </div>
                            <!-- Listings Container / End -->


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