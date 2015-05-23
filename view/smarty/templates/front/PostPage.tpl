
<!-- POST
============================================================================ -->
<div class="container-fluid no-padding">
    <div id="postCardContainer" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="postCard">
            <header class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="hooked">{$post->getTitle()}</h1>
                </div>
            </header>
            <div class="row postImage">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="{$post->getImage()->getFakeName()}" alt="{$post->getImage()->getRealName()}" />
                </div>
            </div>
            <div class="mobilePostContent">
                <div class="row postCardText">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div>{$post->getText()|unescape:"html"}</div>
                    </div>
                </div>
                <footer class="row">
                    <div class="postCardDate col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <p class="flag">{$post->getDate()->getDayOfMonth()}/{$post->getDate()->getMonth()}/{$post->getDate()->getYear()}</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>