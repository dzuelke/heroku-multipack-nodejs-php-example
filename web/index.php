<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heroku Multipack Test</title>

    <!-- Bootstrap -->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container">
    <h1>Hello, world! <small>PHP + Node.js on Heroku</small></h1>
    
    <p>Running <strong class="text-success">PHP/<?=PHP_VERSION?></strong> on Heroku using the <a href="https://github.com/heroku/heroku-buildpack-php">standard PHP buildpack</a>, serving a site using <a href="http://getbootstrap.com">Bootstrap</a> which was downloaded by <a href="http://bower.io">Bower</a>, which in turn was installed by the <a href="https://github.com/heroku/heroku-buildpack-nodejs">standard Node.js buildpack</a>.</p>
    
    <p>Both put together using <a href="https://github.com/heroku/heroku-buildpack-multi">heroku/heroku-buildpack-multi</a>.</p>
    
    <p>Source: <a href="https://github.com/dzuelke/heroku-multipack-nodejs-php-example">dzuelke/heroku-multipack-nodejs-php-example</a>
  </body>
</html>