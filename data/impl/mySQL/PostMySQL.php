<?php

/**
 * Description of PostMySQL
 *
 * @author alex
 */
class PostMySQL implements Post {

    private $ID;
    private $title;
    private $text;
    private $date;
    protected $dirty;
    protected $dataLayer;
    private $adminID;
    private $admin;
    private $images;
    private $comments;

    public function __construct(MaraneDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(MaraneDataLayer $dataLayer) {

        $this->ID = 0;
        $this->title = "";
        $this->text = "";
        $this->date = null;

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->adminID = 0;
        $this->admin = null;
        $this->images = null;
        $this->comments = null;
    }

    private function constructorDataAndResult(MaraneDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->title = $resultSet["title"];
        $this->text = $resultSet["text"];
        $this->date = new MyDate($resultSet["date"]);

        $this->adminID = (int) $resultSet["adminID"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getTitle() {
        return $this->title;
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

    public function setTitle($title) {
        $this->title = $title;
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

    public function getAdmin() {
        if ($this->adminID > 0 && MyUtils::isEmpty($this->admin)) {
            $this->admin = $this->dataLayer->getAdmin($this->adminID);
        }
        return $this->admin;
    }

    public function getImages() {
        if (MyUtils::isEmpty($this->images)) {
            $this->images = $this->dataLayer->getImages($this);
        }
        return $this->images;
    }

    public function getComments() {
        if (MyUtils::isEmpty($this->comments)) {
            $this->comments = $this->dataLayer->getComments($this);
        }
        return $this->comments;
    }

    public function setAdmin(Admin $admin) {
        $this->adminID = $admin->getID();
        $this->admin = $admin;
        $this->dirty = true;
        return $this;
    }

    public function setImages(array $images) {
        $this->images = $images;
        $this->dirty = true;
        return $this;
    }

    public function setComments(array $comments) {
        $this->comments = $comments;
        $this->dirty = true;
        return $this;
    }

    // COPY FROM
    // ========================================================================

    public function copyFrom(Post $post) {

        $this->ID = $post->getID();
        $this->title = $post->getTitle();
        $this->text = $post->getText();
        $this->date = $post->getDate();

        if (!MyUtils::isEmpty($post->getAdmin())) {
            $this->adminID = $post->getAdmin()->getID();
        }
        unset($this->admin);
        $this->admin = null;

        unset($this->comments);
        unset($this->images);
        $this->comments = null;
        $this->images = null;

        $this->dirty = true;

        return $this;
    }

}
