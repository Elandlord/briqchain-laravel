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
                            
                            <p>Wil je jouw woning verkopen aan briqchain zonder kosten en wanneer het jou uitkomt? Een eerlijke prijs gebaseerd op de waardebepaling van een onafhankelijke taxateur? Stuur ons nu een bericht en wij nemen binnen 24 uur contact met je op.</p>

                            <article class="content">

                                <div class="wrap">

                                    <h1 class="trn">Jouw gegevens</h1>

                                    <section class="contact-form">

                                        <article class="form-text">



                                        </article>



                                        <form method="post" action="woning_verkopen_mail.php" id="contact-form" class="no-placeholders">

                                            <div>
                                                <label for="name" class="form-label trn">Naam:</label>
                                                <input type="text" name="name" class="input" id="name" value="" required>
                                            </div>

                                            <div>
                                                <label for="tel" class="form-label trn">Telefoon:</label>
                                                <input type="tel" name="tel" class="input" id="tel" value="" required>
                                            </div>

                                            <div>
                                                <label for="email" class="form-label trn">E-mail:</label>
                                                <input type="email" name="email" class="input" id="email" value="" required>
                                            </div>

                                            <h4 class="trn">Adres van de woning</h4>

                                            <div>
                                                <label for="street" class="form-label trn">Straat:</label>
                                                <input type="text" name="street" class="input" id="street" value="" required>
                                            </div>

                                            <div>
                                                <label for="house_number" class="form-label trn">Huisnummer:</label>
                                                <input type="number" name="house_number" class="input" id="house_number" value="" required>
                                            </div>

                                            <div>
                                                <label for="zipcode" class="form-label trn">Postcode:</label>
                                                <input type="text" name="zipcode" class="input" id="zipcode" value="" required>
                                            </div>

                                            <div>
                                                <label for="city" class="form-label trn">Plaats:</label>
                                                <input type="text" name="city" class="input" id="city" value="" required>
                                            </div>

                                            <div>
                                                <button type="submit" id="submit-button" class="button button--green">Verstuur</button>
                                            </div>
                                        </form>
                                    </section>
                                </div>
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