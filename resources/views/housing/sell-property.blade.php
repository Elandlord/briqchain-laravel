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
                                        <div class="fonds__name uppercase">
                                            WONING VERKOPEN
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
                            <section>
                                <p>Wil je jouw woning verkopen aan briqchain zonder kosten en wanneer het jou uitkomt? Een eerlijke prijs gebaseerd op de waardebepaling van een onafhankelijke taxateur? Stuur ons nu een bericht en wij nemen binnen 24 uur contact met je op.</p>
                            
                                <h3>Jouw gegevens</h3>

                                <div class="flex mb-4 items-center">
                                    <div class="w-2/5">
                                        <label for="name" class="form-label trn">Naam:</label>
                                    </div>
                                    <div class="w-3/5">
                                        <input type="text" name="name" placeholder="Naam" class="w-full text-grey outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="name" value="" required>
                                    </div>
                                </div>

                                <div class="flex mb-4 items-center">
                                    <div class="w-2/5">
                                        <label for="tel" class="form-label trn">Telefoon:</label>
                                    </div>
                                    <div class="w-3/5">
                                        <input type="tel" name="tel" placeholder="Telefoon" class="w-full text-grey outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="tel" value="" required>
                                    </div>
                                </div>

                                <div class="flex mb-4 items-center">
                                    <div class="w-2/5">
                                        <label for="email" class="form-label trn">E-mail:</label>
                                    </div>
                                    <div class="w-3/5">
                                        <input type="email" name="email" placeholder="Emailadres" class="w-full text-grey outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="email" value="" required>
                                    </div>
                                </div>

                                <h4 class="trn">Adres van de woning</h4>
                                
                                <div class="flex mb-4 items-center">
                                    <div class="w-2/5">
                                        <label for="street" class="form-label trn">Straat:</label>
                                    </div>
                                    <div class="w-3/5">
                                        <input type="text" name="street" placeholder="Straat" class="w-full text-grey outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="street" value="" required>
                                    </div>
                                </div>

                                <div class="flex mb-4 items-center">
                                    <div class="w-2/5">
                                        <label for="house_number" class="form-label trn">Huisnummer:</label>
                                    </div>
                                    <div class="w-3/5">
                                        <input type="number" name="house_number" placeholder="Huisnummer" class="w-full text-grey outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="house_number" value="" required>
                                    </div>
                                </div>
                                
                                <div class="flex mb-4 items-center">
                                    <div class="w-2/5">
                                        <label for="zipcode" class="form-label trn">Postcode:</label>
                                    </div>
                                    <div class="w-3/5">
                                        <input type="text" name="zipcode" placeholder="Postcode" class="w-full text-grey outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="zipcode" value="" required>
                                    </div>
                                </div>

                                <div class="flex mb-8 items-center">
                                    <div class="w-2/5">
                                        <label for="city" class="form-label trn">Plaats:</label>
                                    </div>
                                    <div class="w-3/5">
                                        <input type="text" placeholder="Plaats" name="city" class="w-full text-grey outline-none shadow px-6 py-4 rounded mr-2 font-merriweather regular" id="city" value="" required>
                                    </div>
                                </div>

                                <div class="flex mb-4">
                                    <div class="w-full">
                                        <button type="submit" id="submit-button" class="button button--green float-right">Verstuur</button>
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
        </div>
    </div>
	<div class="frame__row">
		@include('partials/footer')
	</div>
</div>
@stop