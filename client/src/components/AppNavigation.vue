<template>
    <v-app-bar app color="brown lighten-4">
        <v-app-bar-nav-icon
            class="hidden-md-and-up"
            @click="drawer = !drawer"
        >
        </v-app-bar-nav-icon>
        <v-spacer class=hidden-md-and-up></v-spacer>
        <v-btn
            class="hidden-sm-and-down myBtn"
            text
        >
            Menu
        </v-btn>
        <v-divider class="verticalDivider" vertical inset></v-divider>
        <!--<v-spacer class="hidden-sm-and-down"></v-spacer>-->
        <v-toolbar-title>{{ appTitle }}</v-toolbar-title>
        <v-spacer class="hidden-sm-and-down"></v-spacer>
        <v-btn class="hidden-sm-and-down" color="brown lighten-3">SIGN IN</v-btn>
        <v-divider class="verticalDivider" vertical inset></v-divider>
        <v-btn class="hidden-sm-and-down" color="brown lighten-3">JOIN</v-btn>
    </v-app-bar>
</template>

<script>
export default {
    name: 'AppNavigation',
    props: {
        appTitle: String
    }
};
</script>

<style scoped>
    >>>.verticalDivider {
        margin-left: 16px;
        margin-right: 16px;
    }

    /*my hidden-sm-and-down*/
    @media only screen and (max-width: 959px) {
        .v-application .verticalDivider {
            display: none !important;
        }
    }
</style>
