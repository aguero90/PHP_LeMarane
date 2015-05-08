
<div class="postContainer col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="post">
        <span class="only-mobile">
            <a href="index.php?sid=1&pid={$post->getID()}">
                <span class="fa fa-angle-right"></span>
            </a>
        </span>
        <header class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="flag">{$post->getTitle()}</h1>
            </div>
        </header>
        <div class="row postImage">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="{$post->getImage()->getFakeName()}" alt="{$post->getImage()->getRealName()}" />
            </div>
        </div>
        <div class="row postText">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div>{$post->getText()|unescape:"htmlall"|truncate:512:" ... "}</div>
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