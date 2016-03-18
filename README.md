# heroku-multipack-nodejs-php-example

This sample application for Heroku shows how Heroku's [support for multiple buildpacks](https://devcenter.heroku.com/articles/using-multiple-buildpacks-for-an-app) can be used to run both the [Node.js](https://github.com/heroku/heroku-buildpack-nodejs) and [PHP](https://github.com/heroku/heroku-buildpack-php) buildpacks during a deploy, which allows using Node from inside the PHP buildpack's `bin/compile`.

In this example, we're using [Bower](http://bower.io) in a [Composer](http://getcomposer.org) [post-install-cmd](https://getcomposer.org/doc/articles/scripts.md) to install [Bootstrap](http://getbootstrap.com).

To try it out, clone this repo, run `heroku create`, then `heroku buildpacks:add heroku/nodejs` followed by `heroku buildpacks:add heroku/php`, and finally deploy using `git push heroku master`. If you want to port this to an existing app, you'll need to use a combination of `heroku buildpacks:set` and `heroku buildpacks:add` to set the correct buildpack order.

You can also quickly deploy a version of this example to Heroku by clicking the button below:

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

Example: [http://heroku-multipack-nodejs-php-ex.herokuapp.com/](http://heroku-multipack-nodejs-php-ex.herokuapp.com/)

## How it works

1. The `heroku buildpacks:add` command is used to set multiple buildpacks on an app (see `heroku buildpacks`)
1. The Node.js buildpack installs Bower using NPM (see `package.json`/`npm-shrinkwrap.json`)
1. The Node.js buildpack makes its binaries available to the next buildpack in the chain
1. The PHP buildpack runs and installs dependencies using Composer
1. As part of the composer install step, the `post-install-cmd` scripts run
1. That executes `$(npm bin -q)/bower install` - `bower install` would work too, as `node_modules/.bin` is on `$PATH` on Heroku, but it would likely not work on local development environments, hence the more portable use of prefixing the result from `npm bin -q` to retrieve said directory name.
1. Bower installs Bootstrap
1. Done!