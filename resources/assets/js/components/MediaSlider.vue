<template>
    <div class="w-full relative">
        <div class="bg-blue-grey absolute w-full py-6 pin-b "></div>

        <div class="container mx-auto flex items-center justify-center relative">


            <transition v-if="smallScreen" name="fade">
                <a v-if="active && activeElement !== null"
                   class="block slide media__hover--activator no-underline w-full md:w-1/4 lg:w-1/4 text-center relative"
                   target="_blank"
                   rel="nofollow" :href="activeElement.website">

                    <div style="height: 65.5px" class="flex items-center">
                        <img :src="activeElement.logo" class="media__button--image w-1/2 mx-auto opacity-50 "/>
                    </div>

                    <p class="font-light text-xs m-0 my-3"> {{ activeElement.name }} </p>

                    <div style=" height: 200px; "
                         class="media__button--container pointer absolute pin-b flex items-center justify-center mx-auto w-full">
                        <p class=" font-bold absolute pin-b uppercase shadow text-center text-white bg-jade rounded no-underline px-4 py-2 text-xs">
                            Bekijk
                            artikel</p>
                    </div>
                </a>
            </transition>

            <a v-for="mediaArticle in innerMediaArticles" v-if="!smallScreen"
               class="block slide media__hover--activator no-underline w-1/4 text-center relative" target="_blank"
               rel="nofollow" :href="mediaArticle.website">

                <div style="height: 65.5px" class="flex items-center">
                    <img :src="mediaArticle.logo" class="media__button--image w-1/2 mx-auto opacity-50 "/>
                </div>

                <p class="font-light text-xs m-0 my-3"> {{ mediaArticle.name }} </p>

                <div style=" height: 200px; "
                     class="media__button--container pointer absolute pin-b flex items-center justify-center mx-auto w-full">
                    <p class="media__button font-bold absolute pin-b uppercase shadow text-center text-white bg-jade rounded no-underline px-4 py-2 text-xs">
                        Bekijk
                        artikel</p>
                </div>
            </a>


        </div>
    </div>
</template>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s;
    }

    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity: 0;
    }

</style>

<script>
    export default {
        props: [
            'mediaArticles'
        ],

        data() {
            return {
                count: 0,
                slides: [],
                innerMediaArticles: JSON.parse(this.mediaArticles),
                active: false,
                activeElement: null,
                smallScreen: false,
            }
        },

        mounted() {
            if (window.innerWidth < 1000) {
                this.smallScreen = true;
            }

            this.activeElement = this.innerMediaArticles[0];
            this.active = true;

            setInterval(() => {
                this.next();
            }, 5000);

        },

        methods: {
            next() {
                this.active = false;
                this.count++;
                if (this.count >= this.innerMediaArticles.length) {
                    this.count = 0;
                }

                this.activeElement = this.innerMediaArticles[this.count];
                setTimeout(() => {
                    this.active = true;
                })

            }
        }

    }
</script>