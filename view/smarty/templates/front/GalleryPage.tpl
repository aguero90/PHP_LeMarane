
<!-- GALLERY
============================================================================ -->
<div class="container-fluid no-padding">
    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Galleria</h1>
        </div>
    </div>

    <div id="myCarousel" class="galleryCarousel">

        <div id="carouselSlider">

            {for $i=0 to ($numberOfPages - 1)}

                <div id="page{$i + 1}" class="page " data-number="{$i + 1}">

                    <div class="galleryColumn colonna1 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        {for $j=0 to ($itemsForPage - 1)}
                            {if ($i * $itemsForPage + $j) < sizeof($images) && ($i * $itemsForPage + $j) % 4 === 1}
                                {include file=$imageStructure}
                            {/if}
                        {/for}
                    </div> <!-- /.colonna1 -->

                    <div class="galleryColumn colonna2 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        {for $j=0 to ($itemsForPage - 1)}
                            {if ($i * $itemsForPage + $j) < sizeof($images) &&  ($i * $itemsForPage + $j) % 4 === 2}
                                {include file=$imageStructure}
                            {/if}
                        {/for}
                    </div> <!-- /.colonna2 -->

                    <div class="galleryColumn colonna3 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        {for $j=0 to ($itemsForPage - 1)}
                            {if ($i * $itemsForPage + $j) < sizeof($images) &&  ($i * $itemsForPage + $j) % 4 === 3}
                                {include file=$imageStructure}
                            {/if}
                        {/for}
                    </div> <!-- /.colonna3 -->

                    <div class="galleryColumn colonna4 col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        {for $j=0 to ($itemsForPage - 1)}
                            {if ($i * $itemsForPage + $j) < sizeof($images) && ($i * $itemsForPage + $j) % 4 === 0}
                                {include file=$imageStructure}
                            {/if}
                        {/for}
                    </div> <!-- /.colonna4 -->
                </div> <!-- /.page -->

            {/for}

        </div> <!-- /#carouselSlider -->

        {include file=$pagination}

    </div> <!-- /#galleryCarousel -->
</div>


<!-- TEMPLATE PER IMMAGINE FULLSCREEN -->
<div id="JS_fullScreenContainer" class="not-mobile">
    <span id="JS_fullScreenCloseButton" data-toggle="tooltip" data-placement="left" title="Chiudi fullscreen" class="closeFullScreen glyphicon glyphicon-remove" aria-hidden="true"></span>
    <img id="JS_fullScreenImage" />
</div>

<script>

    window.addEventListener("load", function (e) {


        if (window.innerWidth < 768) {

            // se siamo su mobile non dobbiamo mettere nulla full-screen
            // perciò non carichiamo nulla
            return;
        }




        if (document.getElementById("paginationContainer")) {

            // se non esiste la paginazione è inutile avviare lo script
            // "sparagnamo" xD
            document.getElementById("myCarousel").myCarousel();
        }

        // TOOLTIP
        // =====================================================================

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        // FULLSCREEN
        // =====================================================================

        var containers = document.querySelectorAll(".imageContainer");

        var fullScreen = {
            container: document.getElementById("JS_fullScreenContainer"),
            closeButton: document.getElementById("JS_fullScreenCloseButton"),
            image: document.getElementById("JS_fullScreenImage")
        };

        for (var i = 0; i < containers.length; i++) {

            containers[i].addEventListener("click", showImageFullScreen);
        }

        fullScreen.closeButton.addEventListener("click", closeImageFullScreen);

        function showImageFullScreen(e) {

            fullScreen.image.setAttribute("src", this.firstElementChild.getAttribute("src"));
            fullScreen.image.setAttribute("alt", this.firstElementChild.getAttribute("alt"));
            fullScreen.container.addClass("showFullScreen");
        }

        function closeImageFullScreen(e) {

            setTimeout(clearImageData, 500);
            fullScreen.container.removeClass("showFullScreen");
        }


        function clearImageData() {
            fullScreen.image.removeAttribute("src");
            fullScreen.image.removeAttribute("alt");
        }

    });

</script>