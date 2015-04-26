<!DOCTYPE html>
<html>
    <!-- NOTA: bootstrap include già normalize.css quindi non c'è bisogno del reset -->
    <head>
        <!-- To ensure proper rendering and touch zooming -->
        <!-- maximum-scale=1, user-scalable=no <-- per far sì che l'utente non possa zoomare -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset=UTF-8>
        <title>{$app_name}</title>

        <link rel="stylesheet" type="text/css" href="view/lib/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/bootstrap/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/animate/animate.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/myFormFramework/main.min.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/front.css"/>
    </head>
    <body>

        <!-- HEADER
        ====================================================================
        <header id="outlineHeader">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p>outlineHeader</p>
                    </div>
                </div> <!-- /row --
            </div> <!-- /container --
        </header>
        -->


        <!-- MENU'
        ==================================================================== -->
        <nav id="outlineMenu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Brand</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-navbar-collapse">

                    <ul class="nav navbar-nav">
                        <li {if isset($sid) && $sid==1}class="active"{/if} >
                            <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                        </li>
                        <li {if isset($sid) && $sid==2}class="active"{/if} >
                            <a href="index.php?sid=3"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Gallery</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div> <!-- /container -->
        </nav>

        <!-- BODY
        ==================================================================== -->
        <div id="outlineBody">
            {include file=$contentTemplate}
        </div>

        <!-- FOOTER
        ==================================================================== -->
        <footer id="outlineFooter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <h1>About Us</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <h1>Contatti</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <h1>Credits</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div> <!-- /row -->
            </div> <!-- /container -->
        </footer>



        <!-- JAVASCRIPT
        ==================================================================== -->
        <script type="text/javascript" src="view/lib/jQuery/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="view/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="view/lib/myFormFramework/myFormFramework.min.js"></script>
    </body>
</html>