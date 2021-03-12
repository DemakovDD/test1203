<template>
    <v-container>
        <v-layout align-stretch justify-center>
            <v-flex xs12 sm8 md6>
                <v-card
                    elevation="7"
                    outlined
                    shaped
                >
                    <v-form
                        ref="form"
                        lazy-validation
                        class="ma-5"
                    >
                        <v-card-title>
                            Напишите нам
                        </v-card-title>
                        <v-alert
                            prominent
                            type="error"
                            v-if="error"
                        >
                            <v-row align="center">
                                <v-col class="grow">
                                    Заполните, пожалуйста, все поля правильно.
                                </v-col>
                            </v-row>
                        </v-alert>
                        <v-alert
                            type="success"
                            v-if="!error && response"
                        >
                            <v-row align="center">
                                <v-col class="grow">
                                    Ваше обращение принято. Мы обязательно свяжемся с Вами.
                                </v-col>
                            </v-row>
                        </v-alert>
                        <v-divider></v-divider>
                        <v-text-field
                            v-model="form.name"
                            label="Имя"
                            required
                        ></v-text-field>

                        <v-text-field
                            v-model="form.number"
                            label="Номер телефона"
                            required
                        ></v-text-field>

                        <v-textarea
                            v-model="form.message"
                            clearable
                            clear-icon="mdi-close-circle"
                            label="Обращение"
                        ></v-textarea>

                        <v-btn
                            color="success"
                            class="mr-4"
                            @click.prevent="addMessage"
                        >
                            Отправить
                        </v-btn>

                        <v-btn
                            color="error"
                            class="mr-4"
                            @click="reset"
                        >
                            Очистить
                        </v-btn>

                    </v-form>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
    import axios from 'axios';

    export default {
        data () {
            return {
                form: {
                    name: '',
                    number: '',
                    message: ''
                },
                error: false,
                response: false
            }
        },
        methods: {
            reset () {
                this.$refs.form.reset()
            },
            addMessage() {
                axios.post('/api/file', this.form, {
                    headers: {
                        "Content-Type":"application/json"
                    }
                })
                    .then(
                    response => {
                        console.log(response);
                        this.response = true;
                        this.error = false
                    })
                    .catch(err => {
                        console.log(err);
                        this.error = true;
                    })
            }
        }
    }
</script>

<style scoped>

</style>
