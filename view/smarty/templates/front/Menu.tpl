
<!-- MENU'
============================================================================ -->
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
            <span id="brandIcon" class="fa fa-html5 fa-2x"></span>
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