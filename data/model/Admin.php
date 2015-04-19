<?php

/**
 *
 * @author alex
 */
interface Admin {

    public function getID();

    public function getUsername();

    public function setUsername($username);

    public function getPassword();

    public function setPassword($password);

    public function isDirty();

    public function setDirty($isDirty);

    /**
     * usiamo il <type hinting> per essere sicuri
     * che il parametro passato sia di tipo <Admin>
     */
    public function copyFrom(Admin $admin);




    /* =======================================================================
      RELAZIONI
      ======================================================================== */

    public function getPosts();

    public function setPosts(array $posts);
}
