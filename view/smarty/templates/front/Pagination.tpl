
<!-- PAGINAZIONE -->
{if $numberOfPages > 1}
    <div class="row not-mobile">
        <nav id="paginationContainer">
            <ul class="pagination">
                <li id="goToPreviousPage">
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                {for $i=1 to $numberOfPages}

                    <li class="paginationItem {if $i === 1}active{/if}" data-number="{$i}">
                        <a href="#" >{$i}</a>
                    </li>

                {/for}

                <li id="goToNextPage">
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
{/if}