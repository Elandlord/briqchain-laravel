<template>
    <transition name="fade">
        <div v-if="activePlatform !== null && isVisible" >
            <div class="text-center pt-20">
                <span class="block">Click for other:</span>
                <span @click="setActive(name)" class="pointer" :class="{ 'font-bold': name === activePlatform.supporter_title.toLowerCase()}" v-for="(platform, name) in platforms"> {{ name }}</span>
            </div>

            <div class="container mx-auto text-center md:pt-20 lg:pt-20">
                <h1> {{ activePlatform.supporter_title }} </h1>

                <p class="text-sm"> {{ activePlatform.supporter_description }} </p>
            </div>

            <platforms :json-platforms="activePlatform"></platforms>
        </div>
    </transition>

</template>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>

<script>
    export default {
        props: ['jsonPlatforms'],

        data() {
            return {
                platforms: [],
                activePlatform: null,
                isVisible: true,
            }
        },

        mounted() {
            this.platforms = JSON.parse(this.jsonPlatforms);
            this.activePlatform = this.platforms.supporter;
        },

        methods: {
            setActive(name) {
                this.isVisible = false;

                this.activePlatform = collect(this.platforms).filter(function(platform, index) {
                    return index === name;
                }).first();

                setTimeout(() => {
                    this.isVisible = true;
                }, 0);
            }
        }

    }
</script>