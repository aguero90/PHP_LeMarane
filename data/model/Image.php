<?php

/**
 *
 * @author alex
 */
interface Image {

    public function getID();

    public function getRealName();

    public function setRealName($realName);

    public function getFakeName();

    public function setFakeName($fakeName);

    public function getDescription();

    public function setDescription($description);

    public function isDirty();

    public function setDirty($isDirty);

    public function copyFrom(Image $image);
}
