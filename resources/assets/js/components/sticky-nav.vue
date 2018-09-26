<template>

    <transition name="fade">
        <div v-if="isVisible" class=" sticky-nav w-full px-6  flex fixed pin-t flex-row justify-between py-4 shadow-md">
            <a href="https://briqchain.com" class="flex-start flex">
                <img src="https://briqchain.com/static/img/logo-white.svg" width="150" alt="Briqchain logo"
                     class="logo__img"/>
            </a>

            <div class="float-right flex-end flex justify-center items-center">
                <a href="/" class="text-white no-underline uppercase bold text-xs inline-block px-6"> Home </a>
                <a href="/funds" class="text-white no-underline uppercase bold text-xs inline-block px-6"> Briq
                    fonds </a>
                <a href="/how-it-works" class="text-white no-underline uppercase bold text-xs inline-block px-6"> Zo
                    werkt het </a>
                <a href="/about" class="text-white no-underline uppercase bold text-xs mr-2 inline-block px-6 "> Over
                    ons </a>
                <a href="/sign-up"
                   class="text-white rounded no-underline uppercase bold text-xs inline-block bg-jade py-2 px-4"> Claim
                    je plek</a>
            </div>
        </div>

    </transition>
</template>

<style lang="scss">

    @media screen AND (max-width: 1000px) {
        .sticky-nav {
            display: hidden;
        }
    }

    @media screen AND (min-width: 1000px) {
        .sticky-nav {
            z-index: 2000;
            background: #3C3C82;
        }
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity .4s cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity: 0;
    }
</style>

<script>
    export default {

        data() {
            return {
                isVisible: false,
                scrollingPosition: 0,
            }
        },
        watch: {
            scrollingPosition: function(value) {

                if(window.innerWidth < 1000) {
                    this.isVisible = false;
                    if (this.scrollingPosition > 90) {
                        this.isVisible = true;
                        document.getElementsByClassName('header')[0].setAttribute("style", "position: fixed; background: #3C3C82; width: 100%;");
                        document.getElementsByClassName('sticky-nav')[0].setAttribute("style", "box-shadow: none;");
                        
                    } else {
                        document.getElementsByClassName('header')[0].setAttribute("style", "position: relative");
                        this.isVisible = false;
                    }

                } else {
                    if (this.scrollingPosition > 90) {
                        this.isVisible = true;
                    } else {
                        this.isVisible = false;
                    }
                }
            }
        },
        created() {
            window.addEventListener('scroll', this.handle);
        },

        destroyed() {
            window.removeEventListener('scroll', this.handle)
        },

        methods: {
            handle() {
                this.scrollingPosition = window.scrollY;
            }
        }


    }
</script>