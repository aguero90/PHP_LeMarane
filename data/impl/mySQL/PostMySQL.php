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
    private $imageID;
    private $image;

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
        $this->imageID = 0;
        $this->image = null;
    }

    private function constructorDataAndResult(MaraneDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->title = $resultSet["title"];
        $this->text = $resultSet["text"];
        $this->date = new MyDate($resultSet["date"]);

        $this->adminID = (int) $resultSet["adminID"];
        $this->imageID = (int) $resultSet["imageID"];
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

    public function getImage() {
        if ($this->imageID > 0 && MyUtils::isEmpty($this->image)) {
            $this->image = $this->dataLayer->getImage($this->imageID);
        }
        return $this->image;
    }

    public function setAdmin(Admin $admin) {
        $this->adminID = $admin->getID();
        $this->admin = $admin;
        $this->dirty = true;
        return $this;
    }

    public function setImage(Image $image) {
        $this->imageID = $image->getID();
        $this->image = $image;
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

        if (!MyUtils::isEmpty($post->getImage())) {
            $this->imageID = $post->getImage()->getID();
        }
        unset($this->image);
        $this->image = null;

        $this->dirty = true;

        return $this;
    }

}
