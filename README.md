# heroku-multipack-nodejs-php-example

This sample application for Heroku shows how [ddollar/heroku-buildpack-multi](https://github.com/ddollar/heroku-buildpack-multi) can be used to combine the [Node.js](https://github.com/heroku/heroku-buildpack-nodejs) and [PHP](https://github.com/heroku/heroku-buildpack-php) buildpacks, which allows using Node from inside the PHP buildpack's `bin/compile`.

In this example, we're using [Bower](http://bower.io) in a [Composer](http://getcomposer.org) [post-install-cmd](https://getcomposer.org/doc/articles/scripts.md) to install [Bootstrap](http://getbootstrap.com).

To try this, clone this repo, `heroku create --buildpack https://github.com/ddollar/heroku-buildpack-multi`, then `git push heroku master`.

Example: [http://heroku-multipack-nodejs-php-ex.herokuapp.com/](http://heroku-multipack-nodejs-php-ex.herokuapp.com/)
