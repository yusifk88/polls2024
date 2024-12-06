
<template>

    <v-row>
        <v-col cols="12" sm="4" class="mx-auto">
            <v-card>
                <v-card-title>Login</v-card-title>
                <v-card-text>
                    <v-form ref="loginForm">
                        <v-label>Email</v-label>
                        <v-text-field v-model="email" :rules="rules" type="email"></v-text-field>

                        <v-label>Password</v-label>
                        <v-text-field type="password" v-model="password" :rules="rules"></v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-btn @click="login" :loading="loading" block variant="flat">Login</v-btn>
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
</template>

<script>
export default {
    name: "LoginPage",
    data(){
        return{
            rules: [
                value => {
                    if (value) return true

                    return 'This is required.'
                },
            ],
            email:"",
            password:"",
            loading:false
        }
    },
    methods:{

        async login(){

        const {valid} = await this.$refs.loginForm.validate();

        if (valid) {

            this.loading=true;
            axios.get('/sanctum/csrf-cookie').then(response => {

                const data = {
                    email: this.email,
                    password: this.password
                };

                axios.post("/login", data)
                    .then(res => {

                        // if (window.location.pathname.includes('login')) {
                        //     window.location = "/";
                        //
                        // } else {
                        //     window.location.reload();
                        // }

                        this.loading = false;

                    })
                    .catch(() => {
                        this.loading = false;

                    })
            })
        }

        }
    }
}
</script>

<style scoped>

</style>
