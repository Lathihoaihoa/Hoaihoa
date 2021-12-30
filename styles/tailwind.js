const configs = require('./config')
const mode = process.env.npm_lifecycle_event === 'start' ? 'jit' : "jit";
console.log('\n Mode: ', mode)
module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js'
    ]
  },
  mode,
  darkMode: false,
  theme: {
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
      montserrat: ['Montserrat', 'sans-serif'],
      syncopate: ['Syncopate', 'sans-serif']
    },
    backgroundImage: {
      'banner': "url('../images/emcompass/banner.png')",
      'bannerimg': "url('../images/emcompass/bannerimg.png')",
      'footer': "url('../images/emcompass/footer.png')",
      'footer768': "url('../images/emcompass/footer768.png')",
      'footer1024': "url('../images/emcompass/footer-1024.png')",
      'footer1440': "url('../images/emcompass/footer-1440.png')",
      'footer1920': "url('../images/emcompass/footer-1920.png')",
      'laptop': "url('../images/emcompass/laptop.png')",
      'backgroundimg': "url('../images/emcompass/backgroundimg.png')",
    },
    spacing: configs.spaces,
    maxWidth: configs.maxWidths,
    screens: configs.Screes,
    backgroundPosition: configs.backgroundPositions,
    backgroundSize: configs.backgroundSizes,
    borderRadius: configs.radiusBorder,
    borderWidth: configs.widthBorder,
    cursor: configs.Cursors,
    fontSize: configs.fontSizes,
    fontWeight: configs.fontWeights,
    letterSpacing: configs.letterSpacings,
    lineHeight: configs.lineHeights,
    listStyleType: configs.listStyleTypes,
    minHeight: configs.minHeights,
    minWidth: configs.minWidths,
    opacity: configs.opacitys,
    order: configs.Orders,
    transformOrigin: configs.transformOrigins,
    rotate: configs.rotates,
    scale: configs.scales,
    zIndex: configs.zindexs,
    inset: configs.insets,
    extend: {
      maxHeight: configs.maxHeights,
      transitionDuration: configs.transitionDurations,
      transitionProperty: configs.transitionPropertys,
      transitionTimingFunction: configs.transitionTimingFunctions,
      keyframes: {
        opacity: {
          'from': { opacity: '0' },
          'to': { opacity: '1' }
        }
      },

      animation: {
        opacity: 'opacity 1s ease-in-out'
      },


      colors: configs.Colors
    }
  },
  variants: {
    extend: {
      translate: ['motion-safe'],
      display: ['responsive', 'hover', 'focus', 'group-hover'],
      borderRadius: ['hover']
    }

  },
  corePlugins: {
    container: false,
    objectFit: false,
    objectPosition: false,
    overscrollBehavior: false,
    gridTemplateColumns: false,
    gridColumn: false,
    gridColumnStart: false,
    gridColumnEnd: false,
    gridTemplateRows: false,
    gridRow: false,
    gridRowStart: false,
    gridRowEnd: false,
    gridAutoFlow: false,
    gridAutoColumns: false,
    gridAutoRows: false,
    space: false,
    divideOpacity: false,
    divideWidth: false,
    divideColor: false,
    gradientColorStops: false,
    boxDecorationBreak: false,
    filter: false,
    blur: false,
    brightness: false,
    contrast: false,
    dropShadow: false,
    grayscale: false,
    hueRotate: false,
    invert: false,
    scale: false,
    skew: false,
    translate: false,
    saturate: false,
    sepia: false,
    backdropFilter: false,
    backdropBlur: false,
    backdropBrightness: false,
    backdropContrast: false,
    backdropGrayscale: false,
    backdropHueRotate: false,
    backdropInvert: false,
    backdropOpacity: false,
    backdropSaturate: false,
    backdropSepia: false,
    isolation: false,
    mixBlendMode: false,
    backgroundBlendMode: false
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen md': {
            maxWidth: '700px'
          },
          '@screen xl': {
            maxWidth: '1000px'
          },
          '@screen 2xl': {
            maxWidth: '1300px'
          },
          '@screen 2k': {
            maxWidth: '1310px'
          }
        }
      })
    }
  ]
}
