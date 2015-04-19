<?php

/**
 *
 * @author alex
 */
interface Comment {

    public function getID();

    public function getAuthor();

    public function setAuthor($author);

    public function getText();

    public function setText($text);

    public function getDate();

    public function setDate(MyDate $date);

    public function isDirty();

    public function setDirty($isDirty);

    public function copyFrom(Comment $comment);



    /* =========================================================================
      RELAZIONI
      ======================================================================== */

    public function getPost();

    public function setPost(Post $post);
}
