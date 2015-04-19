<?php

/**
 * Description of ImageMySQL
 *
 * @author alex
 */
class ImageMySQL implements Image {

    private $ID;
    private $URL;
    private $description;
    private $name;
    private $banner;
    protected $dirty;
    protected $dataLayer;
    private $posts;

    public function __construct(MaraneDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(MaraneDataLayer $dataLayer) {

        $this->ID = 0;
        $this->URL = "";
        $this->description = "";
        $this->name = "";
        $this->banner = false;

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->posts = null;
    }

    private function constructorDataAndResult(MaraneDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->URL = $resultSet["URL"];
        $this->description = $resultSet["description"];
        $this->name = $resultSet["name"];
        $this->banner = (bool) $resultSet["banner"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getURL() {
        return $this->URL;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getName() {
        return $this->name;
    }

    public function isBanner() {
        return $this->banner;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function setURL($URL) {
        $this->URL = $URL;
        $this->dirty = true;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        $this->dirty = true;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        $this->dirty = true;
        return $this;
    }

    public function setBanner($banner) {
        $this->banner = $banner;
        $this->dirty = true;
        return $this;
    }

    public function setDirty($dirty) {
        $this->dirty = $dirty;
        return $this;
    }

    // RELAZIONI
    // ========================================================================

    public function getPosts() {
        if (MyUtils::isEmpty($this->posts)) {
            $this->posts = $this->dataLayer->getPosts($this);
        }
        return $this->posts;
    }

    public function setPosts(array $posts) {
        $this->posts = $posts;
        $this->dirty = true;
        return $this;
    }

    // COPY FROM
    // ========================================================================

    public function copyFrom(Image $image) {

        $this->ID = $image->getID();
        $this->URL = $image->getURL();
        $this->description = $image->getDescription();
        $this->name = $image->getName();
        $this->banner = $image->isBanner();

        unset($this->posts);
        $this->posts = null;

        $this->dirty = true;

        return $this;
    }

}
