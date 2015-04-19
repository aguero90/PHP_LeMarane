<?php

/**
 *
 * @author alex
 */
interface MaraneDataLayer {

    // CREATE
    // ========================================================================

    public function createAdmin();

    public function createComment();

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

    /**
     * come usarlo:
     *      - getPost($postID)
     *      - getPost($comment)
     */
    public function getPost($arg1);

    /**
     * come usarlo:
     *      - getPosts($image)
     *      - getPosts($admin)
     *      - getPosts() -> restituisce tutti i post
     */
    public function getPosts($arg1 = null);

    public function getComment($commentID);

    /**
     * come usarlo:
     *      - getComments($post)
     *      - getComments()
     */
    public function getComments(Post $post = null);

    public function getImage($imageID);

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

    public function storeComment(Comment $comment);

    public function storeImage(Image $image);

    // DELETE
    // ========================================================================

    public function removeAdmin(Admin $admin);

    public function removePost(Post $post);

    public function removeComment(Comment $comment);

    public function removeImage(Image $image);
}
