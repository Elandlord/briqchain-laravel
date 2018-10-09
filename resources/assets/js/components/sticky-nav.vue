<template>

    <transition name="fade">
        <div v-if="isVisible" class=" sticky-nav w-full px-6  flex fixed pin-t flex-row justify-between py-4 shadow-md">
            <a href="https://briqchain.com" class="flex-start flex">
                <img src="https://briqchain.com/static/img/logo-white.svg" width="150" alt="Briqchain logo"
                     class="logo__img"/>
            </a>

            <div class="float-right flex-end flex justify-center items-center">
                <a :href="innerNavLinks.home.url"
                   class="text-white no-underline uppercase bold text-xs inline-block px-6">
                    {{innerNavLinks.home.linkName}} </a>
                <a :href="innerNavLinks.fonds.url"
                   class="text-white no-underline uppercase bold text-xs inline-block px-6">
                    {{innerNavLinks.fonds.linkName}} </a>
                <a :href="innerNavLinks.zo_werkt_het.url"
                   class="text-white no-underline uppercase bold text-xs inline-block px-6">
                    {{innerNavLinks.zo_werkt_het.linkName}}</a>
                <a :href="innerNavLinks.about.url"
                   class="text-white no-underline uppercase bold text-xs mr-2 inline-block px-6 ">
                    {{innerNavLinks.about.linkName}}</a>
                <a :href="innerNavLinks.sign_up.url"
                   class="text-white rounded no-underline uppercase bold text-xs inline-block bg-jade py-2 px-4">
                    {{innerNavLinks.sign_up.linkName}}</a>
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
        props: ['navLinks', 'light'],
        data() {
            return {
                isVisible: false,
                scrollingPosition: 0,
                innerNavLinks: [],
                exceptPages: [
                    'sign-up',
                    'contest',
                ],
                activePage: this.getActivePage(),
            }
        },

        mounted() {
            this.innerNavLinks = JSON.parse(this.navLinks);
        },

        watch: {
            scrollingPosition: function (value) {

                if (this.scrollingPosition > 90 && !this.isCurrentPageAnException()) {
                    this.isVisible = true;
                } else {
                    this.isVisible = false;
                }

                if (window.innerWidth < 1000) {
                    this.configureMobileNav();
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
            },

            getActivePage() {
                let explodedURL = window.location.href.split("/");
                return explodedURL[explodedURL.length - 1];
            },

            isCurrentPageAnException() {
                if(this.exceptPages.indexOf(this.activePage) !== -1){
                    return true;
                }
                return false;
            },

            configureMobileNav() {
                let header = document.getElementsByClassName('header')[0];
                let logo = document.getElementsByClassName('logo__img')[1];
                let stickyNav = document.getElementsByClassName('sticky-nav')[0];
                let nav_hamburger = document.getElementsByClassName('nav__hamburger')[0];

                if (this.scrollingPosition > 90 && !this.isCurrentPageAnException()) {

                    if (header !== undefined) {
                        header.setAttribute("style", "position: fixed; background: #3C3C82; width: 100%;");
                    }

                    if(this.light == '1') {
                        nav_hamburger.setAttribute('style', 'stroke: white;')
                    }

                    if (stickyNav !== undefined) {
                        stickyNav.setAttribute("style", "box-shadow: none;");
                    }

                    if (logo !== undefined) {
                        logo.src = "https://briqchain.com/static/img/logo-white.svg";
                    }

                    return;
                }

                if (logo !== undefined && this.light == '1') {
                    logo.src = "https://briqchain.com/static/img/logo.svg";
                    nav_hamburger.setAttribute('style', 'stroke: #373698;')
                }

                if (header !== undefined) {
                    header.setAttribute("style", "position: relative");
                }

            },


        }


    }
</script>