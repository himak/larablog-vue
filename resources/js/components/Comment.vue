<script>
export default {

    name: 'Comment',

    props: ['comment-data'],    // data about comment from blade

    data() {
        return {
            editing: false,
            newText: ''
        }
    },

    mounted() {
      this.newText = this.commentData.text
    },

    methods: {
        textChanged() {
            this.newText = this.$refs.input.innerText
        },

        updateComment() {
            this.editing = false

            axios.patch('/comments/' + this.commentData.id, {
                text: this.newText
            })
        },

        deleteComment() {
            if (window.confirm('are you sure ???')) {
                axios.delete('/comments/' + this.commentData.id)
                this.$el.remove()
            }
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
