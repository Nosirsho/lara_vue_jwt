<template>
    <div class="w-25">
        <div>
            <input v-model="email" type="email" placeholder="email" class="mb-3 mt-3 form-control">
        </div>
        <div>
            <input v-model="password" type="password" placeholder="password" class="mb-3 form-control">
        </div>
        <div>
            <input type="submit" @click.prevent="login" value="Login" class="mb-3 btn btn-primary">
        </div>
    </div>
</template>

<script>
export default {
    name: "Login",

    data() {
        return {
            email: null,
            password: null
        }
    },
    methods: {
        login() {
            axios.post('/api/auth/login', {email: this.email, password: this.password})
                .then(res => {
                    localStorage.acces_token = res.data.access_token
                })
        }
    }
}
</script>

<style scoped>

</style>
