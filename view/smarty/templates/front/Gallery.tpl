
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid not-mobile">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>




<!-- GALLERY
============================================================================ -->
<div class="container-fluid no-padding">
    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Galleria</h1>
        </div>
    </div>
    {foreach $images as $image}
        <div class="imageContainer col-xs-3 col-sm-3 col-md-3 col-lg-2">
            <div class="image">
                <img src="{$image->getURL()}" alt="{$image->getName()}" />
            </div>
        </div>
    {/foreach}
</div>