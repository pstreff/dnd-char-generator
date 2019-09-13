import Vue from 'vue';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import colors from 'vuetify/lib/util/colors';

Vue.use(Vuetify, {
    iconfont: 'md',
    theme: {
        themes: {
            light: {
                background: colors.amber.lighten4
            },
            dark: {
                background: colors.amber.lighten4
            }
        }
    }
});
