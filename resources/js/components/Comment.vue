<script>
export default {

    name: 'Comment',

    data() {
        return {
            editing: false
        }
    },

    methods: {
        updateComment() {
            alert('SAVED!')
            this.editing = false
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
