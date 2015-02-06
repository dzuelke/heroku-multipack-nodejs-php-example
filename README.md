# heroku-multipack-nodejs-php-example

This sample application for Heroku shows how [heroku/heroku-buildpack-multi](https://github.com/heroku/heroku-buildpack-multi) can be used to combine the [Node.js](https://github.com/heroku/heroku-buildpack-nodejs) and [PHP](https://github.com/heroku/heroku-buildpack-php) buildpacks, which allows using Node from inside the PHP buildpack's `bin/compile`.

In this example, we're using [Bower](http://bower.io) in a [Composer](http://getcomposer.org) [post-install-cmd](https://getcomposer.org/doc/articles/scripts.md) to install [Bootstrap](http://getbootstrap.com).

To try it out, clone this repo, run `heroku create --buildpack https://github.com/heroku/heroku-buildpack-multi`, then `git push heroku master`. If you want to port this to an existing app, you'll need to `heroku config:set BUILDPACK_URL=https://github.com/heroku/heroku-buildpack-multi`.

You can also quickly deploy a version of this example to Heroku by clicking the button below:

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

Example: [http://heroku-multipack-nodejs-php-ex.herokuapp.com/](http://heroku-multipack-nodejs-php-ex.herokuapp.com/)

## How it works

1. The file `.buildpacks` instructs the Multi Buildpack which buildpacks to run in sequence
1. The Node.js buildpack installs Bower using NPM (see `package.json`/`npm-shrinkwrap.json`)
1. The Node.js buildpack makes its binaries available to the next buildpack in the chain
1. The PHP buildpack runs and installs dependencies using Composer
1. As part of the composer install step, the `post-install-cmd` scripts run
1. That executes `$(npm bin -q)/bower install` - `bower install` would work too, as `node_modules/.bin` is on `$PATH` on Heroku, but it would likely not work on local development environments, hence the more portable use of prefixing the result from `npm bin -q` to retrieve said directory name.
1. Bower installs Bootstrap
1. Done!