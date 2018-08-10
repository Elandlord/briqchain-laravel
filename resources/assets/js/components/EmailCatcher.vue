<template>
    <div class="catcher__overlay">
        <div class="catcher__container">

            <div class="catcher__close_button"></div>

            <div class="catcher__top_container">

                <p class="catcher__annotation">Nieuwsbrief</p>

                <div class="catcher__title_container">
                    <i class="catcher__icon">  </i>
                    <h1 class="catcher__title"> Sorry dat we je ophouden</h1>
                </div>

                <p class="catcher__description">
                    We zien dat je onze website wilt verlaten,
                    schrijf je in voor onze nieuwsbrief om op de
                    hoogte te blijven van Briqchain.
                </p>

            </div>

            <div class="catcher__bottom_container">

                 <div class="catcher__input_container">
                     <label class="catcher__input_label"></label>

                     <div class="catcher__input">
                         <i class="material-icons">
                             person
                         </i>
                         <input type="text" name="name">
                     </div>
                 </div>
            </div>

            <a class="catcher__cookies_and_terms" href="#"></a>

            <button class="catcher__subscribe_button">
                Inschrijven
            </button>


        </div>
    </div>
</template>

<style lang="scss">


</style>

<script>
    export default {
        props: {
            ipaddress: null,
        },

        data() {
            return {
                visible: false,
            }
        },

        mounted() {

        },

        methods: {
            showEmailCatcher(){
                this.visible = true;
            },

            hideEmailCatcher(){
                this.visible = false;
            }
        }

    }
</script>
