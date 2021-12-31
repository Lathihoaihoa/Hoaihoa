const { rem, lineHeight } = require('../utils')
const fontSize = {
  xs: ['0.75rem', { lineHeight: '1' }],
  sm: ['0.875rem', { lineHeight: '1.25' }],
  // base: ['1rem', { lineHeight: '1.44' }],
  base: ['18px', { lineHeight: '1.33' },],
  lg: ['1.125rem', { lineHeight: '1.75' }],
  xl: ['1.25rem', { lineHeight: '1.75' }],
  '2xl': ['1.5rem', { lineHeight: '2' }],
  '3xl': ['1.875rem', { lineHeight: '2.25' }],
  '4xl': ['2.25rem', { lineHeight: '2.5' }],
  '5xl': ['3rem', { lineHeight: '1' }],
  '6xl': ['3.75rem', { lineHeight: '1' }],
  '7xl': ['4.5rem', { lineHeight: '1' }],
  '8xl': ['6rem', { lineHeight: '1' }],
  '9xl': ['8rem', { lineHeight: '1' }],
  // 'h1': ['1.875rem', { lineHeight: '1.13333'}],
  'h1': ['55px', { lineHeight: '1.09'}],
  // 'h2': [rem(24), { lineHeight: lineHeight(24, 32) }],
  'h2': ['48px', { lineHeight: '0.88' }],
  // 'h3': ['1.25rem', { lineHeight: '1.13333' }],
  'h3': ['36px', { lineHeight: '1.33' }],
  // 'h4': ['1.375rem', { lineHeight: '1.3' }],
  'h4': ['28px', { lineHeight: '1.21' }],
  // 'h5': ['1.375rem', { lineHeight: '1.45455' }],
  'h5': ['24px', { lineHeight: '1.17' }],
  // 'h6': ['1.125rem', { lineHeight: '1.27778' }],
  'h6': ['20px', { lineHeight: '1.4' }],
  'li': ['17px', { lineHeight: '1.24' }],
  'li-footer': ['16px', { lineHeight: '1.38' }],
  'h1-md': ['3.125rem', { lineHeight: '1.04' }],
  'h2-md': ['1.875rem', { lineHeight: '1.08333' }],
  'h3-md': ['1.625rem', { lineHeight: '1.38462' }],
  'h4-md': ['1.75rem', { lineHeight: '1.21429' }],
  'h5-md': ['1.5rem', { lineHeight: '1.33333' }],
  'h6-md': ['1.25rem', { lineHeight: '1.35' }],
  'li-xl': ['18px', { lineHeight: '1.22' }],
  // 'btn': ['.875em', { lineHeight: '1.2' }],
  'btn': ['16px', { lineHeight: '1.38' }],
  'a': ['16px', { lineHeight: '1.75' }],
  '14': ['14px', { lineHeight: '1.43' }],
  '16': ['16px', { lineHeight: '1.38' }],
  '26': ['26px', { lineHeight: '1' }],
  '30': ['30px', { lineHeight: '1.2' }],
  '34': ['34px'],
  '35': ['35px'],
  '36': ['36px', { lineHeight: '1.17' }],
  '36-btn': ['36px'],
  '43': ['43px'],
  '50': ['50px'],
  '64': ['64px'],
  '70': ['70px'],
  '73': ['73px'],
  '128': ['128px'],
  '148': ['148px'],
  '150': ['150px'],
  '153': ['153px'],
  '156': ['156px'],
  '176': ['176px'],
  '180': ['180px'],

}
module.exports = {
  fontSize
}