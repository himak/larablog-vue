<template>
    <transition name="fade">
        <div class="notification is-primary" v-show="visible">
            <button class="delete" @click="hide()"></button>
            {{ message }}
        </div>
    </transition>
</template>



<script>
    export default {
        props: [
            'text'  // session variable from blade
        ],

        data() {
            return {
                visible: false,
                message: ''
            }
        },

        created() {
            // if have any text from session, visible component
            if(this.text) {
                this.message = this.text
                this.show();
            }

            this.$root.$on('flash', message => {
                this.message = message
                this.show();
            })
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
