<template>
    <v-app
        id="main"
        :style="{ background: $vuetify.theme.themes[theme].background }"
    >
        <app-navigation></app-navigation>
        <v-content transition="slide-x-transition">
            <router-view></router-view>
        </v-content>
    </v-app>
</template>

<script>
import AppNavigation from './components/AppNavigation';

export default {
    name: 'App',
    components: {
        AppNavigation
    },
    computed: {
        theme() {
            return this.$vuetify.theme.dark ? 'dark' : 'light';
        }
    }
};
</script>

<style></style>
