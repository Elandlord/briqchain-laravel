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
                                            <strong class="trn">INSCHRIJVEN</strong>
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
                            
                            <p class="trn">Schrijf je hieronder in en wij houden je automatisch op de hoogte indien er nieuw aanbod beschikbaar is of komt die voldoet aan jouw wensen. Inschrijven is gratis en geheel vrijblijvend. Met jouw inschrijving draag je tevens bij aan het aankoopbeleid van briqchain. </p>

                            <!-- CONTENT -->

                            <article class="content">

                                <h3 class="trn">Mijn gegevens</h3>

                                <form method="post" action="/housing/sign-up">
                                    @csrf

                                    <div>
                                        <label for="first_name">Voornaam:</label>
                                        <input type="text" name="first_name" placeholder="Voornaam" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="first_name" value=""  required="required">
                                    </div>
                                    
                                    <div>
                                        <label for="last_name" class="form-label trn">Achternaam:</label>
                                        <input type="text" name="last_name" placeholder="Achternaam" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="last_name" value="" required="required">
                                    </div>

                                    <div>
                                        <label for="telephone" class="form-label trn">Telefoon:</label>
                                        <input type="tel" pattern="^[0-9\-\+\s\(\)]*$" placeholder="Telefoon" name="telephone" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="telephone" value="" required="required">
                                    </div>

                                    <div>
                                        <label for="emailaddress" class="form-label trn">E-mail:</label>
                                        <input  type="email" placeholder="Emailadres" name="emailaddress" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="emailaddress" value="" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required">
                                    </div>

                                    <h4 class="trn">Ik ben op zoek naar</h4>

                                    <div>
                                        <label for="city" class="form-label trn">Plaats:</label>
                                        <input type="text" placeholder="Plaats" name="city" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="city" value="" required="required">
                                    </div>

                                    <div>
                                        <label for="bedrooms" class="form-label trn">Slaapkamers:</label>
                                        <input type="number" placeholder="Aantal slaapkamers" name="bedrooms" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="bedrooms" value="" required="required">
                                    </div>

                                    <div>
                                        <label for="persons" class="form-label trn">Personen:</label>
                                        <input type="number" placeholder="Aantal personen" name="persons" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="persons" value="" required="required">
                                    </div>

                                    <div>
                                        <label for="minimum_price" class="form-label trn">Minimale prijs:</label>
                                        <input type="number" placeholder="Minimale prijs" name="minimum_price" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="minimum_price" value="" required="required">
                                    </div>

                                    <div>
                                        <label for="max_price" class="form-label trn">Maximale prijs:</label>
                                        <input type="number" placeholder="Aantal personen" name="max_price" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="max_price" value="" required="required">
                                    </div>

                                    <div>
                                        <input type="checkbox"name="terms" id="input-terms" class="input" value="1" required="required">
                                        <label for="input-terms" required="required" class="trn">Ik ga akkoord met de algemene voorwaarden</label>
                                    </div>

                                    <div>
                                        <button type="submit" name="send" class="button button--green">Verstuur</button>
                                    </div>

                                </form>

                            </article>

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