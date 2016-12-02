<?php
if ($_SERVER['SERVER_NAME'] == 'ouzoframework.org') {
    $production = true;
} else {
    $production = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ouzo PHP Framework - MVC - ORM</title>
    <meta name="description"
          content="PHP MVC Framework with built-in ORM. Ouzo is the PHP framework, which makes writing web applications FUN again.">
    <meta name="keywords" content="php unit testing tests orm mvc framework">
    <meta name="author" content="Ouzo">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/font-family.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="overlay"></div>

<nav class="navbar" role="navigation">
    <a href="https://github.com/letsdrink/ouzo">
        <img style="position: absolute; top: 0; right: 0; border: 0;"
             src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67"
             alt="Fork me on GitHub"
             data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png">
    </a>

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
        <a class="navbar-brand" href="#">Ouzo Framework</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
            <li>
                <a href="#why-use">WHY USE</a>
            </li>
            <li>
                <a href="#what-you-need">NEEDED</a>
            </li>
            <li>
                <a href="#start">QUICK START</a>
            </li>
            <li class="home">
                <a href="#">
                    <img src="img/logo.png" alt="Home">
                </a>
            </li>
            <li>
                <a href="http://ouzo.readthedocs.org">DOCS</a>
            </li>
            <li>
                <a href="http://blog.ouzoframework.org/">BLOG</a>
            </li>
            <li>
                <a href="https://packagist.org/packages/letsdrink/ouzo">DOWNLOAD</a>
            </li>
        </ul>
    </div>

</nav>

<section id="home">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <div class="visible-xs">
                    <img src="img/logo.png" class="logo" alt="Home">
                </div>
            </div>
            <div class="col-sm-12">
                <p class="text-extra-large">
                    We value unit testing and beautiful design.
                    <br class="uk-hidden-small">
                    We believe in clean code and simplicity.
                </p>
            </div>
        </div>
    </div>

</section>

<section id="why-use">
    <div class="why-use-overlay">
        <div class="container">

            <div class="row text-center">
                <div class="col-sm-12">
                    <h1 class="heading-large section-color-1">Why use Ouzo Framework</h1>
                </div>
                <div class="col-sm-12">
                    <p class="text-large section-color-1">
                        Ouzo is the PHP framework, which makes writing web applications FUN again.<br>
                        It is an MVC framework with built-in ORM.
                    </p>
                </div>
            </div>

            <div class="row text-center big-links">

                <a href="http://ouzo.readthedocs.org/en/latest/tutorials/project_structure_explained.html"
                   class="col-sm-6 col-lg-3 why-use-item">
                    <div>
                        <i class="fa fa-gears"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">MVC</h3>

                        <p class="section-color-1">
                            Build coherent apps with Ouzo's Models, Views and Controllers. Multi-language
                            support included.
                        </p>
                    </div>
                </a>

                <a href="http://ouzo.readthedocs.org/en/latest/documentation/orm.html" class="col-sm-6 col-lg-3 why-use-item">
                    <div>
                        <i class="fa fa-sitemap"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">ORM</h3>

                        <p class="section-color-1">
                            No more awkward sql. Get everything you need with a simple and elegant query builder.
                        </p>
                        <pre style="width: 81%;">User::where(['login' => 'ouzo'])->fetch();</pre>
                    </div>
                </a>

                <a href="http://ouzo.readthedocs.org/en/latest/documentation/routes.html" class="col-sm-6 col-lg-3 why-use-item">
                    <div>
                        <i class="fa fa-random"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">REST</h3>

                        <p class="section-color-1">
                            Simply map all REST actions for your resource.<br/><br/>
                        </p>
                        <pre style="width: 82%;">Route::resource('users');</pre>
                    </div>
                </a>

                <a href="http://ouzo.readthedocs.org/en/latest/documentation/tests.html" class="col-sm-6 col-lg-3 why-use-item">
                    <div>
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">Tests</h3>

                        <p class="section-color-1">
                            Fluent assertions, mocking, build-in support for testing controllers and models.<br/><br/>
                        </p>
                        <pre style="width: 82%;">Assert::thatArray($array)->contains('ouzo');</pre>
                    </div>
                </a>

            </div>

        </div>
    </div>
</section>

<section id="what-you-need">
    <div class="container">

        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="heading-large section-color-2">WHAT YOU NEED</h1>
            </div>
            <div class="col-sm-12">
                <p class="text-large">
                    PHP 5.3+ and Apache
                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6 col-lg-3 why-use-item">
                <h3>PHP 5.3+</h3>

                <p>Ouzo supports PHP version 5.3 or later. Builds are running continuously on 5.3, 5.4 and 5.5.
                    Check out our <a href="https://travis-ci.org/letsdrink/ouzo">travis site</a>.</p>
            </div>

            <div class="col-sm-6 col-lg-3 why-use-item">
                <h3>HTTP Server</h3>

                <p>Apache is supported out-of-box, but you need mod_rewrite enabled.
                    It should be fairly easy to run your app under different web server. If you happen to do so, let us
                    know!</p>
            </div>

            <div class="col-sm-6 col-lg-3 why-use-item">
                <h3>Database (optional)</h3>

                <p>Ouzo is database agnostic. Currently it supports PostgreSQL, MySQL / MariaDB and SQLite.
                    With its flexible dialect system we are able to add support to other databases as well.</p>
            </div>

            <div class="col-sm-6 col-lg-3 why-use-item">
                <h3>License</h3>

                <p><a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
                    Use Ouzo wherever you need, fork us, basically do whatever you want :) Full source code
                    is available on <a href="https://github.com/letsdrink/ouzo">Github</a>.</p>
            </div>

        </div>

        <div class="col-sm-12">
            <div class="row text-center">
                <a href="https://github.com/letsdrink/ouzo-app" class="btn btn-2">5 minutes tutorial</a>

                <div style="width:80px;height: 10px;display:inline-block"></div>
                <a href="https://github.com/letsdrink/ouzo" class="btn btn-2">Source code @ Github</a>

                <div style="width:80px;height: 10px;display:inline-block"></div>
                <a href="https://travis-ci.org/letsdrink/ouzo" class="btn btn-2">Continuous integration</a>
            </div>
        </div>

        <div class="col-sm-12" style="margin-top: 70px;">
            <div class="row text-center">
                <h3>- Commercial break - Ouzo is sponsored by -</h3>
            </div>
            <div class="row text-center">
                <a href="http://thulium.eu"><img src="img/thulium.png" style="margin-top: 20px;"/></a>
            </div>
        </div>

    </div>

</section>

<section id="start">
    <div class="start-overlay">
        <div class="container">

            <div class="row text-center">
                <div class="col-sm-12">
                    <h1 class="heading-large section-color-1">QUICK START</h1>
                </div>
                <div class="col-sm-12">
                    <p class="text-large section-color-1">
                        It takes only 4 steps to set up sample project and start experiencing Ouzo.<br>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="section-color-1">

                    <h2>1. Set up project</h2>

                    <p>We recommend using composer (<a href="http://getcomposer.org">http://getcomposer.org</a>):</p>
                    <pre>composer.phar create-project letsdrink/ouzo-app:1.6.0 myproject</pre>
                    <p><br/>Change <code>myproject</code> to your project's name.</p>
                </div>
            </div>
            <br/>
            <br/>

            <div class="row">
                <div class="col-sm-12">
                    <p class="section-color-1">

                    <h2>2. Database Configuration</h2>

                    <p>After download is completed you will be asked to select a database for your project:</p>

                    <div style="text-align: center;">
                        <img src="img/composer.png" style="border: 6px solid black; border-radius: 6px;"
                             alt="Composer - screen"/>
                    </div>
                    <p><br/>Config files (<code>config/prod/config.php</code> and <code>config/test/config.php</code>)
                        will be created. You can
                        change your database configuration at any time.</p>

                    <p>Next step is to create your database and user and update config files accordingly.</p>
                </div>
            </div>
            <br/>
            <br/>

            <div class="row">
                <div class="col-sm-12">
                    <p class="section-color-1">

                    <h2>3. Migrations</h2>

                    <p>Your database is empty at the beginning. To demonstrate Ouzo capabilities we have created a
                        sample database.
                        Use <code>db.sh</code> (or <code>db.bat</code> under Windows) to apply migrations:</p>

                    <div style="text-align: center;">
                        <img src="img/migration.png" style="border: 6px solid black; border-radius: 6px;"
                             alt="Ruckusing migration - screen"/>
                    </div>
                    <p>
                        <br/>Ouzo uses Ruckusing framework for migrations (
                        <a href="https://github.com/ruckus/ruckusing-migrations">ruckusing-migrations</a>).
                    </p>
                </div>
            </div>
            <br/>
            <br/>

            <div class="row">
                <div class="col-sm-12">
                    <p class="section-color-1">

                    <h2>4. Web server</h2>

                    <p>All you need is Apache HTTP Server with mod_rewrite enabled.
                        Change <code>DocumentRoot</code> to your Ouzo project (e.g. <code>myproject</code>).</p>

                    <p>Open browser e.g. <code>http://localhost/myproject</code> and enjoy!</p>
                </div>
            </div>
            <br/>
            <br/>

            <div class="row text-center">
                <div class="col-sm-12">
                    <h2>For more information <b>check out:</b></h2>
                    <a href="https://github.com/letsdrink/ouzo-app" class="btn btn-2">
                        5 minutes tutorial
                    </a>

                    <div style="width:80px;height: 10px;display:inline-block"></div>
                    <a href="http://ouzo.readthedocs.org/en/latest/tutorials/project_structure_explained.html" class="btn btn-2">
                        Skeleton app explained
                    </a>

                    <div style="width:80px;height: 10px;display:inline-block"></div>
                    <a href="http://ouzo.readthedocs.org/en/latest/index.html" class="btn btn-2">
                        Ouzo documentation
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<footer>
    <div class="container text-center">

        <div class="row">
            <div class="col-sm-12">
                <ul class="subnav list-inline">
                    <li><a href="#why-use">WHY USE</a></li>
                    <li><a href="#what-you-need">WHAT YOU NEED</a></li>
                    <li><a href="#start">QUICK START</a></li>
                    <li><a href="https://github.com/letsdrink/ouzo">DOWNLOAD</a></li>
                </ul>
            </div>

            <div class="col-sm-12">
                <p>
                    made by <a href="https://github.com/letsdrink/ouzo">Ouzo developers</a><br>
                </p>
            </div>
        </div>

    </div>
</footer>

<?php if ($production): ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php else: ?>
    <script src="js/jquery.js"></script>
<?php endif; ?>
<script src="js/bootstrap.js"></script>

<?php if ($production): ?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-48479903-1', 'ouzoframework.org');
        ga('send', 'pageview');
    </script>
<?php endif; ?>

</body>
</html>
