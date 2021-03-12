<template>
    <v-app>
        <v-navigation-drawer app
                             v-model="drawer"
                             :mini-variant.sync="mini"
                             permanent
        >
            <v-list-item class="px-2">
                <v-list-item-avatar>
                    <v-img src="https://randomuser.me/api/portraits/men/85.jpg"></v-img>
                </v-list-item-avatar>

                <v-list-item-title>Name</v-list-item-title>

                <v-btn
                    icon
                    @click.stop="mini = !mini"
                >
                    <v-icon>mdi-chevron-left</v-icon>
                </v-btn>
            </v-list-item>

            <v-divider></v-divider>

            <v-list dense>
                <v-list-item
                    v-for="link in links"
                    :key="link.title"
                    :to="link.url"
                    link
                >
                    <v-list-item-icon>
                        <v-icon>{{ link.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>{{ link.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <!-- Sizes your content based upon application components -->
        <v-main
        >
            <!-- Provides the application the proper gutter -->
            <v-container
                fluid
            >
                <router-view></router-view>
            </v-container>
        </v-main>

        <v-footer app>
            <!-- -->
        </v-footer>
    </v-app>
</template>

<script>
    export default {
        name: "App",
        data () {
            return {
                drawer: false,
                mini: true,
                links: [
                    {title: 'Feedback', icon: 'mdi-email-open-outline', url: '/feedback'}
                ]
            }
        }
    }
</script>

<style scoped>

</style>
