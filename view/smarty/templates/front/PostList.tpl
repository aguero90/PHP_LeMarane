
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>


<!-- NEWS LIST
============================================================================ -->
<div class="container-fluid no-padding with-margin">
    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Lista news</h1>
        </div>
    </div>
    {foreach $posts as $post}
        <div class="postContainer col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="post">
                <span class="only-mobile"><a href="index.php?sid=1&pid={$post->getID()}"></a></span>
                <header class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="flag">{$post->getTitle()}</h1>
                    </div>
                </header>
                <div class="row postImage">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="uploads/logo.jpg" alt="img" />
                    </div>
                </div>
                <div class="row postText">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>{$post->getText()|truncate:512:" ... "}</p>
                    </div>
                </div>
                <footer class="row">
                    <div class="postDate col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <p class="flag">{$post->getDate()->getDayOfMonth()}/{$post->getDate()->getMonth()}/{$post->getDate()->getYear()}</p>
                    </div>
                    <div class="goToPost col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <a href="index.php?sid=1&pid={$post->getID()}" class="handlebarsButton">Leggi</a>
                    </div>
                </footer>
            </div>
        </div>
    {/foreach}
</div>





