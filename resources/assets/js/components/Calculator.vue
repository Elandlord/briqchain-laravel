<template>
    <div>
        <div class="calculator__topline">
            <svg class="calculator__line-svg" viewBox="0 0 1920 100" preserveAspectRatio="none"><polygon points="1920 0 1920 100 0 100 1920 0" style="fill:#ebf4fb"/></svg>
        </div>
        <div class="calculator__content">
            <div class="wrapper wrapper--small">
                <div class="calculator__block">
                    <h2 class="calculator__title">{{ calculatortitle }}</h2>
                    <div class="calculator__badges">
                        <div class="calculator__large-badge">
                            <span class="calculator__badge-title">4<span class="calculator__badge-title-sign">%</span></span>
                            <span class="calculator__badge-content">{{ interest }}</span>
                        </div>
                        <div class="calculator__small-badge">
                            <span class="calculator__badge-title">&euro;<span class="calculator__badge-title-sign" style="position: relative; bottom: 3px; font-size: 27px;">10</span></span>
                            <span class="calculator__badge-content">{{ bonus }}</span>
                        </div>
                    </div>			
                    <div class="calculator__form-wrapper">
                        <div class="calculator__form">
                            <div class="calculator__form-group">
                                <label class="calculator__form-label" for="calculator_inleg_in_euros">{{ investment }} <span style="padding-left: 50px; color: #ADB9CB;">{{ andor }}</span></label>
                                <div class="calculator__input-holder">
                                    <div class="calculator__input-icon">
                                        <img class="calculator__input-img" :src="url + '/static/img/input-euro.svg'" width="10" height="12" alt="Euro">
                                    </div>
                                    <input class="calculator__form-input" @change="calculate()"  v-model="initialInvestment" type="number" id="calculator_inleg_in_euros" name="calculator_inleg_in_euros" required="required" value="500" step="10" min="0">
                                </div>
                            </div>
                            <div class="calculator__form-group">
                                <label class="calculator__form-label" for="calculator_maandelijkse_inleg">{{ monthlyinvestment }}</label>
                                <div class="calculator__input-holder">
                                    <div class="calculator__input-icon">
                                        <img class="calculator__input-img" :src="url + '/static/img/input-euro.svg'" width="10" height="12" alt="Briqs">
                                    </div>
                                    <input class="calculator__form-input" @change="calculate()" v-model="monthlyAdditionalInvestment" type="number" id="calculator_maandelijkse_inleg" name="calculator_maandelijkse_inleg" required="required" value="100" step="10" min="0">
                                </div>
                            </div>
                            <div class="calculator__form-group">
                                <label class="calculator__form-label" for="calculator_aantal_briqs">{{ reinvestinterest }}</label>
                                    <!--<div class="calculator__input-icon">
                                        <img class="calculator__input-img" :src="url + '/static/img/input-logo.svg'" width="19" height="20" alt="Briqs">
                                    </div>
                                    <input class="calculator__form-input" type="number" id="calculator_rente_herbeleggen" name="calculator_rente_herbeleggen" required="required"> -->
                                <div class=" padding-radio-buttons">                            
                                    <div class="checkbox-holder" :class="{ 'bg-main': reinvest == 'true' }">
                                        <div class="padding-inside-radio">
                                            <input type="radio" @change="calculate()" v-model="reinvest" value="true" checked="checked" id="calculator_rente_herbeleggen_on" name="calculator_rente_herbeleggen" /> <label class="pointer text-light bold" :class="{ 'text-main': reinvest == 'false' }" for="calculator_rente_herbeleggen_on">Aan</label>
                                        </div>
                                    </div>
                                    <div class="checkbox-holder bold" :class="{ 'bg-main': reinvest == 'false' }">
                                        <div class="padding-inside-radio">
                                            <input type="radio" @change="calculate()" v-model="reinvest" value="false" id="calculator_rente_herbeleggen_off" name="calculator_rente_herbeleggen" /> <label class="pointer" :class="{ 'text-light': reinvest == 'false' }" for="calculator_rente_herbeleggen_off">Uit</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__results">
                        <div class="calculator__result calculator__result--first">
                            <div class="calculator__result-label">{{ month }}</div>
                            <div class="calculator__result-value">
                                <span class="calculator__result-sign">€</span>
                                <span class="calculator__result-amount" id="calculator_per_maand">
                                    <span v-if="permaand && !loading">{{ permaand }}</span>
                                    <span v-else>
                                        <img width="20" height="20" src="/images/oval.svg" />                                        
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="calculator__result">
                            <div class="calculator__result-label">
                                <span >{{ year }}</span>
                            </div>
                            <div class="calculator__result-value">
                                <span class="calculator__result-sign">€</span>
                                <span class="calculator__result-amount" id="calculator_per_paar">
                                    <span v-if="perjaar && !loading">{{ perjaar }}</span>
                                    <span v-else>
                                        <img width="20" height="20" src="/images/oval.svg" />
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="calculator__result calculator__result--last">
                            <div class="calculator__result-label">
                                <label for="select_years">{{ fiveyears }}</label>
                                <select @change="calculate()" v-model="duration" id="select_years" class="select_box_year">
                                    <option value="1" class="option_box">1 {{ durationtime }}</option>
                                    <option value="5" class="option_box" selected>5 {{ durationtime }}</option>
                                    <option value="10" class="option_box">10 {{ durationtime }}</option>
                                    <option value="20" class="option_box">20 {{ durationtime }}</option>
                                    <option value="30" class="option_box">30 {{ durationtime }}</option>
                                </select>
                            </div>
                            <div class="calculator__result-value">
                                <span class="calculator__result-sign">€</span>
                                <span class="calculator__result-amount calculator__result-amount--light" id="calculator_per_vijf_paar">
                                    <span v-if="eindkapitaal && !loading">{{ eindkapitaal }},-</span>
                                    <span v-else>
                                        <img width="20" height="20" src="/images/oval.svg" />      
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="calculator__extra-note">
                        {{ redeem }}
                    </div> -->
                    <div class="calculator__footer">
                        <ul class="calculator__bullets">
                            <li v-html="exclusive"></li>
                            <li>{{ rights }}</li>
                        </ul>
                        <div class="calculator__footer-action">
                            <a onclick="ga('send', 'event', 'Calculator', 'Clicking the buy Briqs button');" href="https://invest.briqchain.com/" class="button button--green">
                                <img class="button__img button__briqs" :src="url + '/static/img/button-logo.svg'" width="19" height="20" alt="Briqs">
                                {{ buybriqs }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            calculatortitle: null,
            bonus: null,
            interest: null,
            investment: null,
            andor: null,
            url: null,
            amountbriqs: null,
            month: null,
            year: null,
            fiveyears: null,
            redeem: null,
            exclusive: null,
            rights: null,
            buybriqs: null,
            monthlyinvestment: null,
            reinvestinterest: null,
            durationtime: null,
        },

        data() {
            return {
                initialInvestment: 500,
                monthlyAdditionalInvestment: 100,
                reinvest: 'true',
                duration: 5,
                results: null,
                permaand: null,
                perjaar: null,
                eindkapitaal: null,
                loading: false,
            }
        },

        mounted() {
            this.calculate();
        },

        methods: {
            calculate(){
                this.loading = true;
                var data = {
                    'startkapitaal': this.initialInvestment,
                    'inlegPerMaand': this.monthlyAdditionalInvestment,
                    'herbeleggen': this.reinvest.toString(),
                    'looptijden': '1,5,10,20,30',
                    'rendement': 4,
                };
                axios.post('/calculate/return', data).then((response) => {
                    let jaren = collect(response.data.results.jaren);
                    let result = jaren.firstWhere('looptijd', this.duration.toString())
                    

                    let perjaar = parseFloat((result.rendementAbs / result.looptijd)).toFixed(2).toString().replace(".", ",");
                    let permaand = parseFloat((result.rendementAbs / result.looptijd / 12)).toFixed(2).toString().replace(".", ",");

                    perjaar = this.parseToDotNumber(perjaar.split(",")[0]).concat(",").concat(perjaar.split(",")[1]);
                    permaand = this.parseToDotNumber(permaand.split(",")[0]).concat(",").concat(permaand.split(",")[1])
                    this.eindkapitaal = this.parseToDotNumber(Math.round(result.eindkapitaal));

                    if(perjaar.split(",")[1] == "00"){
                        this.perjaar = perjaar.split(",")[0].concat(",-");
                    }else{
                        this.perjaar = perjaar;
                    }

                    if(permaand.split(",")[1] == "00"){
                        this.permaand = permaand.split(",")[0].concat(",-");
                    }else{
                        this.permaand = permaand;
                    }

                    this.loading = false;
                });
            },

            parseToDotNumber(numberBeforeComma)
            {
                numberBeforeComma += '';
                var x = numberBeforeComma.split('.');
                var x1 = x[0];
                var x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + '.' + '$2');
                }
                return x1 + x2;
            }
        }
    }
</script>
