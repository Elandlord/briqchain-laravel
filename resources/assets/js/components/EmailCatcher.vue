<template>
    <div>

    </div>
</template>

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
