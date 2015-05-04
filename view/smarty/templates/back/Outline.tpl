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
        <link rel="stylesheet" type="text/css" href="view/lib/summernote/summernote.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/fontAwsome/css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/front.css"/>
    </head>
    <body>


        <div class="fillTheContainer container-fluid no-padding">
            <div class=" fullHeight row">

                <!-- LEFT COL
                ==================================================================== -->

                <div id="leftCol" class="col-xs-3 col-sm-2 col-md-2 col-lg-2">

                    <ul class="nav nav-pills nav-stacked">
                        <li {if isset($sid) && $sid==1} class="active" {/if}><a href="?sid=1">News</a></li>
                        <li {if isset($sid) && $sid==2} class="active" {/if}><a href="?sid=2">Immagini</a></li>
                        <li {if isset($sid) && $sid==3} class="active" {/if}><a href="?sid=3">Amministratori</a></li>
                        <li><a href="index.php">Sito</a></li>
                    </ul>
                </div>




                <!-- BODY
                ==================================================================== -->
                <div id="outlineBodyBack" class="col-xs-9 col-sm-10 col-md-10 col-lg-10">
                    {include file=$contentTemplate}
                </div>

            </div>
        </div>


        <!-- JAVASCRIPT
        ==================================================================== -->
        <script type="text/javascript" src="view/lib/jQuery/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="view/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="view/lib/summernote/summernote.js"></script>
        <script type="text/javascript" src="view/lib/summernote/summernote-it-IT.js"></script>
        <script type="text/javascript" src="view/js/MyCarousel.js"></script>
    </body>
</html>