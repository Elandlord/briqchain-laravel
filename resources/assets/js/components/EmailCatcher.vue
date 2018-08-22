<template>
    <div v-show="visible"
         class="catcher__overlay fixed pin-l pin-t w-full h-full z-2000 flex justify-center items-center">
        <div class="catcher__container shadow rounded overflow-hidden bg-white relative">

            <div @click="close()"
                 class="catcher__close_button absolute rounded-full mt-6 mr-6 pin-r pin-t bg-deep-blue-lighter cursor-pointer">
                <i class="material-icons text-white text-xs">
                    close
                </i>
            </div>

            <div class="catcher__top_container bg-blue-grey py-10 px-16">

                <p class="catcher__annotation uppercase m-0 bold text-grey ">{{ newsletter }}</p>

                <div class="catcher__title_container mt-5 flex items-center">
                    <i class="catcher__icon material-icons mr-5"> email </i>
                    <h1 class="catcher__title inline-block text-2xl"> {{ title }}</h1>
                </div>

                <p class="catcher__description text-xs mb-0 tracking-wide">
                    {{ description }}
                </p>

            </div>

            <div class="catcher__bottom_container px-16 py-10 ">

                <div class="flex flex-row mb-10">

                    <div class="catcher__input_container w-1/2 pr-2">
                        <label class="catcher__input_label text-deep-blue-lighter mb-2 block text-xs">{{ name }}</label>

                        <div class="catcher__input border-blue-grey border-solid border rounded flex ">
                            <div class="border-r border-blue-grey border-solid inline-block py-2 px-2">
                                <i class="catcher__input_icon material-icons text-dark-blue">
                                    person
                                </i>
                            </div>
                            <input type="text" class="py-2 pl-4 inline-block w-full outline-none"
                                   v-model="emailSubscriber.name">
                        </div>

                    </div>


                    <div class="catcher__input_container w-1/2 pl-2">
                        <label class="catcher__input_label text-deep-blue-lighter mb-2 block text-xs">{{ email }}</label>

                        <div class="catcher__input border-blue-grey border-solid border rounded flex ">
                            <div class="border-r border-blue-grey border-solid inline-block py-2 px-2">
                                <i class="catcher__input_icon material-icons text-dark-blue">
                                    email
                                </i>
                            </div>
                            <input type="text" class="py-2 pl-4 inline-block w-full outline-none"
                                   v-model="emailSubscriber.email_address">
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

                    <a class="catcher__cookies_and_terms mr-4 no-underline text-deep-blue-lighter" href="#">
                        {{ cookie }}</a>

                    <button @click.prevent="checkIfCookieConfirmed()"
                            class="outline-none catcher__subscribe_button text-xs float-right px-10 py-3 rounded shadow hover:shadow-md catcher__transition  hover:bg-jade-light bg-jade text-white">
                        {{ signup }}
                    </button>
                </div>

                <p v-if="!checked && showMessage" class="catcher__error_message text-center w-full ">
                    {{ error }}
                </p>

                <p v-if="success" class="catcher__success_message text-center w-full ">
                    {{ catcher_success }}
                </p>

            </div>

        </div>
    </div>
</template>

<style lang="scss">
    .catcher__overlay {
        background: rgba(0, 0, 0, .5);
    }

    .catcher__annotation {
        font-size: 0.65rem;
    }

    .catcher__close_button {
        padding: 0px 5px 0px 6px;
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
        font-size: 2.5rem;
    }

    .catcher__input_icon {
        font-size: 1.1rem;
    }

    .catcher__checkbox {
        width: 20px;
        height: 20px;
    }

    .catcher__checkbox_icon {
        font-size: 0.6rem;
        position: relative;
        bottom: 4px;
        right: 1px;
    }

    .catcher__error_message {
        font-size: 0.6rem;
        color: red;
        position: relative;
        bottom: 20px;
    }

    .catcher__success_message {
        font-size: 0.6rem;
        color: green;
        position: relative;
        bottom: 20px;
    }

    .catcher__cookies_and_terms {
        font-size: 0.6rem;
        position: relative;
        top: 2px;
    }

    .z-2000 {
        z-index: 2000;
    }


</style>

<script>
    export default {
        props: {
            display: null,
            emailcatcher: null,
            newsletter: null,
            title: null,
            description: null,
            name: null,
            email: null,
            cookie: null,
            signup: null,
            error: null,
            catcher_success: null,
        },

        data() {
            return {
                visible: false,
                checked: false,
                success: false,
                showMessage: false,
                emailSubscriber: {
                    name: null,
                    email_address: null,
                },
                emailCatcher: JSON.parse(this.emailcatcher),
            }
        },

        mounted() {
            // show e-mailcatcher when the user moves its mouse from the page.
            if (this.display)
                document.addEventListener("mouseleave", this.showOnPageLeave, true);
        },

        watch: {
            visible(visible) {
                if(visible) {
                    document.body.style.setProperty('overflow', 'hidden');
                } else {
                    document.body.style.removeProperty('overflow');
                }
            }
        },

        methods: {
            showOnPageLeave(e) {
                if (e.pageY - $(window).scrollTop() <= 1) {
                    this.visible = true;
                    this.updateLastPopUpDate();
                }
            },

            close() {
                document.removeEventListener("mouseleave", this.showOnPageLeave, true);

                this.visible = false;
            },

            checkIfCookieConfirmed() {
                if (this.checked) {
                    document.removeEventListener("mouseleave", this.showOnPageLeave, true);

                    this.storeSubscription();
                    this.notifyUser();
                } else {

                    this.showMessage = true;
                }
            },

            updateLastPopUpDate() {
                axios.put('/emailCatchers/' + this.emailCatcher.id, {}).then((response) => {
                });
            },

            storeSubscription() {
                axios.post('/emailSubscriptions', {
                    name: this.emailSubscriber.name,
                    email_address: this.emailSubscriber.email_address,
                    ip_address: this.emailCatcher.ip_address,
                    opt_in: 1,
                    opt_in_type: "Vinkje",
                    terminology: "Akkoord gegaan door middel van klikken op een vinkje op de pop-up."
                }).then(() => {

                });

            },

            notifyUser() {
                this.success = true;

                setTimeout(() => {
                    this.visible = false;
                }, 2000);
            }



        }

    }
</script>
