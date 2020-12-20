<template>
    <transition name="fade">
        <div class="notification is-primary" v-show="visible">
            <button class="delete" @click="hide()"></button>
            {{ text }}
        </div>
    </transition>
</template>



<script>
    export default {
        props: [
            'text'
        ],

        data() {
            return {
                visible: false
            }
        },

        created() {
            this.show();
        },

        methods: {
            show() {
                this.visible = true;
                setTimeout(() => this.hide(), 3000);
            },
            hide() {
                this.visible = false
            }
        }
    }
</script>


<style>
    .notification {
        font-size: 1.2rem;
        position: fixed;
        right: 2em;
        bottom: 2em;
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity .35s;
    }
    .fade-enter,
    .fade-leave-to {
        opacity: 0;
    }
</style>
