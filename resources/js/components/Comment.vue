<script>
export default {

    name: 'Comment',

    props: ['comment-data'],

    data() {
        return {
            editing: false
        }
    },

    mounted() {
      console.log(this.commentData)
    },

    methods: {
        updateComment() {
            axios.patch('/comments/' + this.commentData.id, {
                text: 'lol lol hacked comment'
            })

            this.editing = false
        },

        deleteComment() {
            axios.delete('/comments/' + this.commentData.id)
            this.$el.remove()
        }
    }
}
</script>



<style lang="scss" scoped>
    [contenteditable='true'] {
        box-shadow: 0 2px 0 #fff;
        outline: none;
    }
</style>
