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
                            
                            <p>Schrijf je hieronder in en wij houden je automatisch op de hoogte indien er nieuw aanbod beschikbaar is of komt die voldoet aan jouw wensen. Inschrijven is gratis en geheel vrijblijvend. Met jouw inschrijving draag je tevens bij aan het aankoopbeleid van briqchain. </p>

                            <!-- CONTENT -->

                            <article class="content">

                                <h3 class="my-2">Mijn gegevens</h3>

                                <form method="post" action="/housing/sign-up">
                                    @csrf

                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="first_name py-4">Voornaam:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="text" name="first_name" placeholder="Voornaam" class="w-full outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="first_name" value=""  required="required">
                                        </div>
                                    </div>
                                    
                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="last_name" class="form-label trn">Achternaam:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="text" name="last_name" placeholder="Achternaam" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="last_name" value="" required="required">
                                        </div>
                                    </div>

                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="telephone" class="form-label trn">Telefoon:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="tel" pattern="^[0-9\-\+\s\(\)]*$" placeholder="Telefoon" name="telephone" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="telephone" value="" required="required">
                                        </div>
                                    </div>

                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="emailaddress" class="form-label trn">E-mail:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input  type="email" placeholder="Emailadres" name="emailaddress" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="emailaddress" value="" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required">
                                        </div>
                                    </div>

                                    <h4 class="my-2">Ik ben op zoek naar</h4>

                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="city" class="form-label trn">Plaats:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="text" placeholder="Plaats" name="city" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="city" value="" required="required">
                                        </div>
                                    </div>

                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="bedrooms" class="form-label trn">Slaapkamers:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="number" placeholder="Aantal slaapkamers" name="bedrooms" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="bedrooms" value="" required="required">
                                        </div>
                                    </div>

                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="persons" class="form-label trn">Personen:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="number" placeholder="Aantal personen" name="persons" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="persons" value="" required="required">
                                        </div>
                                    </div>

                                    <div class="flex mb-4 items-center">
                                        <div class="w-2/5">
                                            <label for="minimum_price" class="form-label trn">Minimale prijs:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="number" placeholder="Minimale prijs" name="minimum_price" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="minimum_price" value="" required="required">
                                        </div>
                                    </div>

                                    <div class="flex mb-8 items-center">
                                        <div class="w-2/5">
                                            <label for="max_price" class="form-label trn">Maximale prijs:</label>
                                        </div>
                                        <div class="w-3/5">
                                            <input type="number" placeholder="Aantal personen" name="max_price" class="w-full  outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="max_price" value="" required="required">
                                        </div>
                                    </div>

                                    <div class="flex mb-8 items-center">
                                        <div class="w-full">
                                            <input type="checkbox"name="terms" id="input-terms" class="float-right mt-1 ml-2" value="1" required="required">
                                            <label for="input-terms" class="float-right" required="required" class="trn">Ik ga akkoord met de algemene voorwaarden</label>
                                        </div>
                                    </div>

                                    <div class="flex mb-4">
                                        <div class="w-full">
                                            <button type="submit" name="send" class="button button--green float-right">Verstuur</button>
                                        </div>
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