<?php

/**
 *
 * @author alex
 */
interface Image {

    public function getID();

    public function getURL();

    public function setURL($URL);

    public function getDescription();

    public function setDescription($description);

    public function getName();

    public function setName($name);

    public function isBanner();

    public function setBanner($isBanner);

    public function isDirty();

    public function setDirty($isDirty);

    public function copyFrom(Image $image);



    /* =========================================================================
      RELAZIONI
      ======================================================================== */

    public function getPosts();

    public function setPosts(array $posts);
}
