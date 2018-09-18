<template>
        <div  class="w-4/6 mx-auto countdown bg-dark flex flex-col sm:flex-row md:flex-row lg:flex-row justify-center items-center">

            <!-- countdown -->
            <h1 class=" sm:border-solid md:border-solid lg:border-solid sm:border-blue-grey md:border-blue-grey lg:border-blue-grey sm:border-l-6 md:border-l-6 lg:border-l-6 py-2 px-2 sm:pl-10 md:pl-l0 lg:pl-10text-dark-blue text-center sm:text-left md:text-left lg:text-left">Private Sales starts in </h1>

            <div class=" px-10 py-4 sm:py-6 rounded countdown__box flex flex-wrap sm:flex-no-wrap flex-row ">
                <div class="text-dark-blue font-bold text-center inline-block px-5 "> days <span class=" block">{{ this.days }} </span> </div>
                <div class="text-dark-blue font-bold text-center inline-block px-5 "> hours <span class=" block">{{ this.hours }} </span> </div>
                <div class="text-dark-blue font-bold text-center inline-block px-5 "> minutes<span class=" block">{{ this.minutes }} </span> </div>
            </div>
        </div>

</template>

<style lang="scss">
    .countdown {
        position: relative;
        z-index: 3;
    }
</style>

<script>
    let moment = require('moment');

    export default {
        props: ['countdowndate', 'message'],
        data() {
            return {
                days: 0,
                hours: 0,
                minutes: 0,
                seconds: 0,
                date: null,
            }
        },
        mounted() {
            this.setup();

            this.interval = setInterval(() => {
                this.calculateTimeDifference();
            }, 1000);
        },

        methods: {
            setup() {
                this.date = moment(this.countdowndate);
                console.log(this.date);
                this.calculateTimeDifference();
            },

            calculateTimeDifference() {
                this.getDifferenceInDays();
                this.getDifferenceInHours();
                this.getDifferenceInMinutes();
                this.getDifferenceInSeconds();
            },

            getDifferenceInDays() {
                this.days = Math.floor(this.getDifference() / 86400);
                return this.days;
            },

            getDifferenceInHours() {

                let remainder = (this.getDifference() - (this.days * 86400));

                this.hours = Math.floor(remainder / 3600);
                return this.hours;
            },

            getDifferenceInMinutes() {
                let remainder = this.getDifference() - (this.days * 86400) - (this.hours * 3600);
                this.minutes = Math.floor(remainder / 60);
                return this.minutes;
            },

            getDifferenceInSeconds() {
                this.seconds = this.getDifference() - (this.days * 86400) - (this.hours * 3600) - (this.minutes * 60 );
                return this.seconds;
            },

            getDifference() {
                return this.date.diff(moment(), 'seconds');
            }

        }


    }
</script>