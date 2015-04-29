<?php

/**
 * Description of ImageMySQL
 *
 * @author alex
 */
class ImageMySQL implements Image {

    private $ID;
    private $realName;
    private $fakeName;
    private $description;
    protected $dirty;
    protected $dataLayer;
    private $posts;

    public function __construct(MaraneDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(MaraneDataLayer $dataLayer) {

        $this->ID = 0;
        $this->realName = "";
        $this->fakeName = "";
        $this->description = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->posts = null;
    }

    private function constructorDataAndResult(MaraneDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->realName = $resultSet["realName"];
        $this->fakeName = $resultSet["fakeName"];
        $this->description = $resultSet["description"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getRealName() {
        return $this->realName;
    }

    public function getFakeName() {
        return $this->fakeName;
    }

    public function getDescription() {
        return $this->description;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function setRealName($name) {
        $this->realName = $name;
        $this->dirty = true;
        return $this;
    }

    public function setFakeName($URL) {
        $this->fakeName = $URL;
        $this->dirty = true;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
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
        $this->realName = $image->getRealName();
        $this->fakeName = $image->getFakeName();
        $this->description = $image->getDescription();

        unset($this->posts);
        $this->posts = null;

        $this->dirty = true;

        return $this;
    }

}
