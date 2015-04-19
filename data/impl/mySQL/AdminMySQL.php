<?php

/**
 * Description of AdminMySQL
 *
 * @author alex
 */
class AdminMySQL implements Admin {

    private $ID;
    private $username;
    private $password;
    protected $dirty;
    protected $dataLayer;
    private $posts;

    public function __construct(MaraneDataLayer $dataLayer, array $resultSet = null) {

        MyUtils::isEmpty($resultSet) ? $this->constructorData($dataLayer) : $this->constructorDataAndResult($dataLayer, $resultSet);
    }

    private function constructorData(MaraneDataLayer $dataLayer) {

        $this->ID = 0;
        $this->username = "";
        $this->password = "";

        $this->dirty = false;
        $this->dataLayer = $dataLayer;

        $this->posts = null;
    }

    private function constructorDataAndResult(MaraneDataLayer $dataLayer, array $resultSet) {

        $this->constructorData($dataLayer);

        $this->ID = (int) $resultSet["ID"];
        $this->username = $resultSet["username"];
        $this->password = $resultSet["password"];
    }

    public function getID() {
        return $this->ID;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function isDirty() {
        return $this->dirty;
    }

    public function setUsername($username) {
        $this->username = $username;
        $this->dirty = true;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
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

    public function copyFrom(Admin $admin) {

        $this->ID = $admin->getID();
        $this->username = $admin->getUsername();
        $this->password = $admin->getPassword();

        unset($this->posts);
        $this->posts = null;

        $this->dirty = true;

        return $this;
    }

}
