<template>
    <v-app
            id="main"
            :style="{background: $vuetify.theme.themes[theme].background}"
    >
        <v-content transition="slide-x-transition">
            <router-view></router-view>
        </v-content>
    </v-app>
</template>

<script>
export default {
    name: 'App',
    computed: {
        theme() {
            return this.$vuetify.theme.dark ? 'dark' : 'light';
        }
    }
};
</script>

<style></style>
