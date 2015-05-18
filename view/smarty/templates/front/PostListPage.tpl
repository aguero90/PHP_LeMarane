
<!-- NEWS LIST
============================================================================ -->
<div id="postListContainer" class="container-fluid no-padding with-margin">

    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Lista news</h1>
        </div>
    </div>

    {if $posts|@count > 0}

        <div id="myCarousel" class="postListCarousel">
            <div id="carouselSlider">
                {foreach $posts as $post}

                    {if $post@iteration % $itemsForPage === 1}
                        <!-- Se è il primo della nuova pagina, ricreo la tabella -->

                        <div id="page{(($post@iteration - 1) / $itemsForPage) + 1}" class="page" data-number="{(($post@iteration - 1) / $itemsForPage) + 1}">

                        {/if}

                        {include file=$postStructure}

                        {if $post@iteration % $itemsForPage === 0 || $post@last}
                            <!-- Se ho appena stampato l'ultima riga, chiudo la tabella -->
                        </div>
                    {/if}
                {/foreach}
            </div> <!-- /#carouselSlider -->
            {include file=$pagination}
        </div><!-- /#newsCarousel -->

    {else}
        <div class="noContentFront">
            <p>
                <span>Oops...</span>
                In questo momento non sono presenti news :(
            </p>
        </div>
    {/if}


</div>


<script>
    window.addEventListener("load", function () {

        if (document.getElementById("paginationContainer")) {

            // se non esiste la paginazione è inutile avviare lo script
            // "sparagnamo" xD
            document.getElementById("myCarousel").myCarousel();
        }


    });
</script>





