# terranean wp starter
<em>terranean starter theme originally based on [Air Light](https://github.com/digitoimistodude/starter-terranean-wp)</em>


## Requirements:
- Node version : 18.14.2

## Additions:
- [TailwindCSS](https://tailwindcss.com/)
- [Slick](https://kenwheeler.github.io/slick/)
- [Preline Components](https://preline.co/index.html)

## How-To:

### Add Custom Javascript
1. Add module file to /js/src/terranean
2. Import module and call it in /js/src/front-end.js (or whichever is applicable)

### Work With Preline Components
## Adding JS for each component
1. Look at list of module exports in /js/src/modules/terranean/preline-src/index
2. Import necessary modules and call them in /js/src/front-end.js (or whichever is applicable)

## Issues:
- gulp watch does not work