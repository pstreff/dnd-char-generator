<template>
    <v-toolbar app color="brown lighten-4" light>
        <v-toolbar-side-icon
            class="hidden-md-and-up"
            @click="drawer = !drawer"
        >
        </v-toolbar-side-icon>
        <v-spacer class=hidden-md-and-up></v-spacer>
        <v-toolbar-title>{{ appTitle }}</v-toolbar-title>
        <v-btn
            class="hidden-sm-and-down"
            flat
        >
            Menu
        </v-btn>
        <v-spacer class="hidden-sm-and-down"></v-spacer>
        <v-btn class="hidden-sm-and-down" flat>SIGN IN</v-btn>
        <v-btn class="hidden-sm-and-down" color="brown lighten-3">JOIN</v-btn>
    </v-toolbar>
</template>

<script>
export default {
    name: 'AppNavigation',
    data() {
        return {
            appTitle: 'D&D Character Generator'
        }
    }
};
</script>

<style scoped></style>
