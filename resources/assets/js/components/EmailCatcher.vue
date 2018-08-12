<template>
    <div v-show="visible" class="catcher__overlay absolute pin-l pin-t w-full h-full z-50 flex justify-center items-center">
        <div class="catcher__container shadow rounded overflow-hidden bg-white">
            <form id="newsletterForm">

                <div class="catcher__close_button"></div>

                <div class="catcher__top_container bg-blue-grey py-10 px-16">

                    <p class="catcher__annotation uppercase m-0 bold text-grey text-xs">Nieuwsbrief</p>

                    <div class="catcher__title_container mt-5 flex items-center">
                        <i class="catcher__icon material-icons mr-5"> email </i>
                        <h1 class="catcher__title inline-block text-2xl"> Sorry dat we je ophouden</h1>
                    </div>

                    <p class="catcher__description text-xs mb-0">
                        We zien dat je onze website wilt verlaten,
                        schrijf je in voor onze nieuwsbrief om op de
                        hoogte te blijven van Briqchain.
                    </p>

                </div>

                <div class="catcher__bottom_container px-16 py-10 ">

                    <div class="flex flex-row mb-10">

                        <div class="catcher__input_container w-1/2 pr-2">
                            <label class="catcher__input_label text-deep-blue-lighter mb-2 block text-xs">Naam</label>

                            <div class="catcher__input border-blue-grey border-solid border rounded flex ">
                                <div class="border-r border-blue-grey border-solid inline-block py-2 px-2">
                                    <i class="catcher__input_icon material-icons text-dark-blue">
                                        person
                                    </i>
                                </div>
                                <input type="text" class="py-2 inline-block w-full outline-none" name="name">
                            </div>

                        </div>


                        <div class="catcher__input_container w-1/2 pl-2">
                            <label class="catcher__input_label text-deep-blue-lighter mb-2 block text-xs">E-mailadres</label>

                            <div class="catcher__input border-blue-grey border-solid border rounded flex ">
                                <div class="border-r border-blue-grey border-solid inline-block py-2 px-2">
                                    <i class="catcher__input_icon material-icons text-dark-blue">
                                        email
                                    </i>
                                </div>
                                <input type="text" class="py-2 inline-block w-full outline-none" name="name">
                            </div>

                        </div>

                    </div>

                    <div class="flex items-center justify-end ">

                        <div @click="checked = !checked"
                             class="cursor-pointer catcher__checkbox border-blue-grey border-solid border-2 rounded px-1 mr-2">
                            <i v-if="checked" class="catcher__checkbox_icon text-grey material-icons text-dark-blue">
                                check
                            </i>
                        </div>

                        <a class="catcher__cookies_and_terms mr-4 text-xs no-underline text-deep-blue-lighter" href="#">
                            Cookiebeleid & Algemene voorwaarden</a>

                        <button @click.prevent="confirmCookie()"
                                class="catcher__subscribe_button text-xs float-right px-10 py-3 rounded shadow hover:shadow-md catcher__transition  hover:bg-jade-light bg-jade text-white">
                            Inschrijven
                        </button>
                    </div>

                    <p v-if="!checked && showMessage" class="catcher__error_message text-center w-full ">
                        U bent nog niet akkoord gegaan met ons cookiebeleid en onze algemene voorwaarden.
                    </p>

                </div>
            </form>

        </div>
    </div>
</template>

<style lang="scss">
    .catcher__overlay {
        background: rgba(0, 0, 0, .4);
    }

    .catcher__container {
        width: 600px;
        height: 500px;
    }

    .catcher__transition {
        transition-property: all;
        transition-duration: .5s;
    }

    .catcher__input div i {
        position: relative;
        top: 3px;

    }

    .catcher__icon {
        font-size: 40px;
    }

    .catcher__input_icon {
        font-size: 17px;
    }

    .catcher__checkbox {
        width: 20px;
        height: 20px;
    }

    .catcher__checkbox_icon {
        font-size: 10px;
        position: relative;
        bottom: 4px;
        right: 1px;
    }

    .catcher__error_message {
        font-size: 12px;
        color: red;
        position: relative;
        bottom: 20px;
    }



</style>

<script>
    export default {
        props: {
            ipaddress: null,
        },

        data() {
            return {
                visible: false,
                checked: false,
                showMessage: false,
            }
        },

        mounted() {

            // show e-mailcatcher when the user moves its mouse from the page.
            $(document).bind("mouseleave", (e) => {
                if (e.pageY - $(window).scrollTop() <= 1) {
                    this.visible = true;
                }
            });
        },

        methods: {
            showEmailCatcher() {
                this.visible = true;
            },

            hideEmailCatcher() {
                this.visible = false;
            },

            confirmCookie() {
                if (this.checked) {
                    $('#newsletterForm').submit();
                } else {
                    this.showMessage = true;
                }

            }


        }

    }
</script>
