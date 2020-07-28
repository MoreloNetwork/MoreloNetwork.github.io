# MORELO Official WebSite http://morelo-network.com/

## http://morelo-network.com/

Created with Bootstrap 3.4.1 and Angular 10.0.6.

In order to develop:
1. Install Angular with `npm install -g @angular/cli`
2. Install project depediencies with `npm install`

Run developement server with `ng serve`.
Build with `ng build`, add `--prod` flag for production build.

In order to translate:
1. Go to src/assets/i18n
2. Copy existing `en.json` file to `<ISO 3166-1 alpha-2 lowercase language code>.json`
3. Replace translations with desired ones
4. Add required info to language array in src/app/parts/header/header.component.ts. There are already some languages commented-out.
5. Add ISO language code to src/app/app.component.ts in lines 13 and 19.
We recommend using Babel Edit.

## For more information please contact MORELO team at:

- Website: http://morelo-network.com/
- Discord: https://discord.gg/eRZUjdG
- Telegram: https://t.me/morelomrl
- Twitter:  https://twitter.com/MoreloMrl
