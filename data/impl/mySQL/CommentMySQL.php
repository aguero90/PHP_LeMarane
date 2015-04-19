<?php

/**
 * Description of CommentMySQL
 *
 * @author alex
 */
class CommentMySQL implements Comment {

    private $ID;
    private $author;
    private $text;
    private $date;
    protected $dirty;
    protected $dataLayer;
    private $postID;
    private $post;

    public function __construct(MaraneDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(MaraneDataLayer $dataLayer) {

        $this->ID = 0;
        $this->author = "";
        $this->text = "";
        $this->date = null;

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->postID = 0;
        $this->post = null;
    }

    private function constructorDataAndResult(MaraneDataLayer $dataLayer, array $resultSet) {

        var_dump($resultSet);

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->author = $resultSet["author"];
        $this->text = $resultSet["text"];
        $this->date = new MyDate($resultSet["date"]);

        $this->postID = (int) $resultSet["postID"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getText() {
        return $this->text;
    }

    public function getDate() {
        return $this->date;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function setAuthor($author) {
        $this->author = $author;
        $this->dirty = true;
        return $this;
    }

    public function setText($text) {
        $this->text = $text;
        $this->dirty = true;
        return $this;
    }

    public function setDate(MyDate $date) {
        $this->date = $date;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    // RELAZIONI
    // ========================================================================

    public function getPost() {
        if ($this->postID > 0 && MyUtils::isEmpty($this->post)) {
            $this->post = $this->dataLayer->getPost($this->postID);
        }
        return $this->post;
    }

    public function setPost(Post $post) {
        $this->postID = $post->getID();
        $this->post = $post;
        $this->dirty = true;
        return $this;
    }

    // COPY FROM
    // ========================================================================

    public function copyFrom(Comment $comment) {

        echo '======================';
        var_dump($comment);

        $this->ID = $comment->getID();
        $this->author = $comment->getAuthor();
        $this->text = $comment->getText();
        $this->date = $comment->getDate();

        if (!MyUtils::isEmpty($comment->getPost())) {
            $this->postID = $comment->getPost()->getID();
        }
        unset($this->post);
        $this->post = null;

        $this->dirty = true;

        return $this;
    }

}
