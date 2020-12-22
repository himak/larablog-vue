<script>
export default {

    name: 'Comment',

    props: ['comment-data'],    // data about comment from blade

    data() {
        return {
            editing: false,
            newText: '',
            oldText: ''
        }
    },

    mounted() {
      this.oldText = this.newText = this.commentData.text
    },

    methods: {
        startEditing() {
            this.editing = true
            this.selectText()
        },

        resetText() {
            this.editing = false
            this.$refs.input.innerText = this.oldText
        },

        textChanged() {
            this.newText = this.$refs.input.innerText
        },

        updateComment() {
            this.editing = false

            axios.patch('/comments/' + this.commentData.id, {
                text: this.newText
            })

            this.oldText = this.newText
        },

        deleteComment() {
            if (window.confirm('are you sure ???')) {
                axios.delete('/comments/' + this.commentData.id)
                this.$el.remove()
            }
        },

        selectText() {
            setTimeout(() => {
                let p = this.$refs.input,
                    s = window.getSelection(),
                    r = document.createRange()
                r.setStart(p, 0)
                r.setEnd(p, 1)
                s.removeAllRanges()
                s.addRange(r)
                p.focus()
            }, 0)
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
