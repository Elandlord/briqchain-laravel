<template>
    <div>
        <slot></slot>
    </div>
</template>

<style lang="scss">
    .sticky_pin_to_top {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        z-index: 2000;

    }
</style>

<script>
    import {throttle} from 'lodash';

    export default {
        props: ['cssStateWhenFixed', 'disablePages'],
        mounted() {

            if (this.pageIsNotInExcludeUrls()) {
                let bar = this.$el;
                let originalOffsetTop = this.$el.offsetTop + this.$el.clientHeight;

                window.addEventListener(
                    'scroll',
                    throttle(function () {
                        bar.classList.toggle('sticky_pin_to_top', window.scrollY >= originalOffsetTop);

                        this.cssStateWhenFixed.split(" ").forEach(function (element) {
                            bar.classList.toggle(element, window.scrollY >= originalOffsetTop);
                        });

                    }, 100).bind(this)
                );
            }
        },

        methods: {
            pageIsNotInExcludeUrls() {
                let explodedURL = window.location.href.split("/");

                return this.disablePages.split("|").indexOf(explodedURL[explodedURL.length - 1]) === -1;

            },
        }
    }
</script>