<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="1" />
                <p>Inserisci un commento</p>
                <input name="author" placeholder="username" />
                <textarea name="text" placeholder="text"></textarea>
                <input name="postID" placeholder="postID" />
                <button type="submit">inserisci</button>
            </form>
        </div>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="2" />
                <p>Inserisci un'immagine</p>
                <input name="URL" placeholder="realName" />
                <textarea name="description" placeholder="description (optional)"></textarea>
                <input name="name" placeholder="name" />
                Banner: <input type="checkbox" name="banner" value="1" />
                <button type="submit">inserisci</button>
            </form>
        </div>
        <div>
            <form action="InsertTest.php" method="POST">
                <input type="hidden" name="what" value="3" />
                <p>Inserisci un post</p>
                <input name="title" placeholder="title" />
                <textarea name="text" placeholder="text"></textarea>
                <input name="adminID" placeholder="adminID" />
                <button type="submit">inserisci</button>
            </form>
        </div>


        <br />
        <hr />
        <hr />
        <hr />
        <br />
        <div>
            <form action="SelectAllTest.php" method="POST">
                <p>Cosa vuoi vedere?</p>
                <button type="submit" name="what" value="1">Commenti</button>
                <button type="submit" name="what" value="2">Immagini</button>
                <button type="submit" name="what" value="3">Post</button>
                <button type="submit" name="what" value="4">Admin</button>
            </form>
        </div>
    </body>
</html>
