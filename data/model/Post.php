<?php

/**
 *
 * @author alex
 */
interface Post {

    public function getID();

    public function getTitle();

    public function setTitle($title);

    public function getText();

    public function setText($text);

    public function getDate();

    public function setDate(MyDate $date);

    public function isDirty();

    public function setDirty($isDirty);

    public function copyFrom(Post $post);


    /* =======================================================================
      RELAZIONI
      ======================================================================== */

    public function getAdmin();

    public function setAdmin(Admin $admin);

    public function getImage();

    public function setImage(Image $image);

    public function getImages();

    public function setImages(array $images);
}
