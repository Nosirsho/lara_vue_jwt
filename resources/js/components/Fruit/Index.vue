<template>
    <div class="w-50">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr v-if="fruits" v-for="fruit in fruits">
                <td>{{ fruit.id }}</td>
                <td>{{ fruit.name }}</td>
                <td>{{ fruit.price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",

    data() {
        return {
            fruits: null
        }
    },

    mounted() {
        this.getFruits()
    },

    methods: {
        getFruits() {
            axios.get('/api/fruits').then(res => {
                    this.fruits = res.data.data
                }
            )
        }
    }
}
</script>

<style scoped>

</style>
