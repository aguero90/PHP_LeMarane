<?php

/**
 *
 * @author alex
 */
interface MaraneDataLayer {

    // CREATE
    // ========================================================================

    public function createAdmin();

    public function createImage();

    public function createPost();


    // GET
    // ========================================================================

    /**
     * come usarlo:
     *      - getAdmin($adminID)
     *      - getAdmin($post)
     *      - getAdmin($username, $password)
     */
    public function getAdmin($arg1, $arg2 = null);

    public function getAdmins();

    public function getPost($postID);

    /**
     * come usarlo:
     *      - getPosts($image)
     *      - getPosts($admin)
     *      - getPosts() -> restituisce tutti i post
     */
    public function getPosts($arg1 = null);

    /**
     * come usarlo:
     *      - getImage($imageID)
     *      - getImage($post)
     */
    public function getImage($arg);

    /**
     * come usarlo:
     *      - getImages($post)
     *      - getImages()
     */
    public function getImages(Post $post = null);

    // STORE
    // ========================================================================

    public function storeAdmin(Admin $admin);

    public function storePost(Post $post);

    public function storeImage(Image $image);

    // DELETE
    // ========================================================================

    public function removeAdmin(Admin $admin);

    public function removePost(Post $post);

    public function removeImage(Image $image);
}
