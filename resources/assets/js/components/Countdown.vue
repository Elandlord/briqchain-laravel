<template>

        <div class="bg-deep-blue-dark px-10 py-4 sm:py-6 rounded shadow-md countdown__box flex flex-wrap sm:flex-no-wrap flex-row w-full lg:w-3/5 lg:mx-auto">
            <div class="text-white inline-block px-5 w-1/2 sm:w-full lg:w-1/2"> <span class="text-jade sm:block md:inline-block lg:inline-block">{{ this.days }} </span> days</div>
            <div class="text-white inline-block px-5 w-1/2 sm:w-full lg:w-1/2"> <span class="text-jade sm:block md:inline-block lg:inline-block">{{ this.hours}} </span> hours</div>
            <div class="text-white inline-block px-5 w-1/2 sm:w-full lg:w-1/2"> <span class="text-jade sm:block md:inline-block lg:inline-block">{{ this.minutes }} </span> minutes</div>
            <div class="text-white inline-block px-5 w-1/2 sm:w-full lg:w-1/2"> <span class="text-jade sm:block md:inline-block lg:inline-block">{{ this.seconds }} </span> seconds</div>
        </div>

</template>

<style lang="scss">
    .countdown__box {
        position: relative;
        bottom: 40px;
        z-index: 3;
        border: 5px solid white;

    }

    @media (min-width: 992px) {
        .countdown__box {
            position: relative;
            top: 60px;
            z-index: 3;


        }
    }

    @media (min-width: 1200px) {
        .countdown__box {
            position: relative;
            top: 60px;
            z-index: 3;


        }
    }
</style>

<script>
    let moment = require('moment');

    export default {
        props: ['countdowndate'],
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
                this.date = moment("2018-09-21");
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