<template>
    <div class="w-25">
        <div>
            <input v-model="name" type="text" placeholder="Name" class="mb-3 mt-3 form-control">
        </div>
        <div>
            <input v-model="email" type="email" placeholder="Email" class="mb-3 form-control">
        </div>
        <div>
            <input v-model="password" type="password" placeholder="Password" class="mb-3 form-control">
        </div>
        <div>
            <input v-model="password_confirmation" type="password" placeholder="Password confirmation"
                   class="mb-3 form-control">
        </div>
        <div>
            <input type="submit" @click.prevent="store" value="Registration" class="mb-3 btn btn-primary">
        </div>
    </div>
</template>

<script>
export default {
    name: "Registration",

    data() {
        return {
            name: null,
            email: null,
            password: null,
            password_confirmation: null
        }
    },

    methods: {
        store() {
            axios.post('/api/users', {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            }).then(res => {
                console.log(res);
            });
        }
    }


}
</script>

<style scoped>

</style>
