
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>


<!-- NEWS LIST
============================================================================ -->
<div class="container-fluid no-padding">
    {foreach $posts as $post}
        <div class="post col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <span class="only-mobile"><a href="index.php?sid=1&pid={$post->getID()}"></a></span>
            <header class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>{$post->getTitle()}</h1>
                </div>
            </header>
            <div class="row postText">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>{$post->getText()}</p>
                </div>
            </div>
            <footer class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p>{$post->getDate()->toString()}</p>
                </div>
                <div class="goToPost col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="index.php?sid=1&pid={$post->getID()}">Leggi</a>
                </div>
            </footer>
        </div>
    {/foreach}
</div>





