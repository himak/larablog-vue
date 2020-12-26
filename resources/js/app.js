// let's rock
import './bootstrap'

// components
import FlashMessage from './components/FlashMessage.vue'
import Comment from './components/Comment.vue'

// vue
new Vue({
    el: '#app',
    components: {
        FlashMessage,
        Comment
    },
    mounted() {
        if (location.hash) {
            setTimeout( () => {

                let el = location.hash.replace('scroll-to-', '')

                document
                    .querySelector(el)
                    .scrollIntoView({ behavior: 'smooth' })

            }, 150)

        }
    }
});
