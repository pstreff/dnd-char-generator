<template>
    <v-app id="main">
        <app-navigation app-title="D&D Character Generator"></app-navigation>
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

<style>
    #main {
        background-color: var(--v-background-base);
    }
</style>
