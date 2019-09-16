import Vuetify from 'vuetify/lib'
import colors from 'vuetify/lib/util/colors';
import 'material-design-icons-iconfont/dist/material-design-icons.css'
//import 'vuetify/src/stylus/app.styl'

const opts = {
  icons: {
    iconfont: 'md',
  },
  theme: {
    themes: {
      light: {
        background: colors.amber.lighten4
      }
    },
    options: {
      customProperties: true,
    },
  },
}

export default new Vuetify(opts)
