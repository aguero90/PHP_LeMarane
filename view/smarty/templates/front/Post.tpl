Post.tpl

<div id="postCard">
    <header>
        <h1>{$post->getTitle()}</h1>
    </header>
    <div>
        <p>{$post->getText()}</p>
    </div>
    <footer>
        <p>{$post->getDate()->toString()}</p>
    </footer>
</div>

<div id="comments">
    <header>
        <h1>Commenti</h1>
    </header>

    {foreach $post->getComments() as $comment}
        <div class="post">
            <header>
                <h1>{$comment->getAuthor()}</h1>
            </header>
            <div>
                <p>{$comment->getText()}</p>
            </div>
            <footer>
                <p>{$comment->getDate()->toString()}</p>
            </footer>
        </div>
    {/foreach}
</div>

<div id="insertComment">
    Form inserimento commento
</div>