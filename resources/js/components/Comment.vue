<template>
    <div>

        <p>{{ comments.length}} comments</p>

        <li
            v-for="comment in comments"
            :key="comment.id"
        >
            {{ comment.text }}


            <button @click="comments.pop()">delete</button>
        </li>

    </div>
</template>

<script>
export default {
    name: 'Comment',

    data() {
        return {
            comments: [
                {
                    id: 1,
                    text: 'Provident eum minima quis officia deleniti ea ad.'

                },
                {
                    id: 2,
                    text: 'Dicta hic enim et consequatur culpa nesciunt sit distinctio.'

                },
                {
                    id: 3,
                    text: 'ed libero aliquam exercitationem alias aspernatur recusandae.'

                }
            ]
        }
    }
}
</script>

<style scoped>

</style>
