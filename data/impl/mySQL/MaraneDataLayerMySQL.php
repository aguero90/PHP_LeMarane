<?php

/**
 * Description of MaraneDataLayerMySQL
 *
 * @author alex
 */
class MaraneDataLayerMySQL extends DataLayerMySQL implements MaraneDataLayer {

    private $sAdminByID, $sAdminByUsernameAndPassword, $sAdminByPost, $sAdmins,
            $iAdmin,
            $uAdmin,
            $dAdmin;
    private $sPostByID, $sPostByComment, $sPostsByAdmin, $sPostsByImage, $sPosts,
            $iPost,
            $uPost,
            $dPost;
    private $sImageByID, $sImagesByPost, $sImages,
            $iImage,
            $uImage,
            $dImage;
    // Relationship without attribute
    private $iPostImage,
            $dPostImage;

    public function init() {
        try {

            parent::init();

            // Admin
            $this->sAdminByID = $this->connection->prepare("SELECT * FROM e_admin WHERE ID=?");
            $this->sAdminByUsernameAndPassword = $this->connection->prepare("SELECT ID FROM e_admin WHERE username=? AND password=?");
            $this->sAdminByPost = $this->connection->prepare("SELECT adminID FROM e_post WHERE ID=?");
            $this->sAdmins = $this->connection->prepare("SELECT ID FROM e_admin");
            $this->iAdmin = $this->connection->prepare("INSERT INTO e_admin (username, password) VALUES (?, ?)");
            $this->uAdmin = $this->connection->prepare("UPDATE e_admin SET username=?, password=? WHERE ID=?");
            $this->dAdmin = $this->connection->prepare("DELETE FROM e_admin WHERE ID=?");


            // Post
            $this->sPostByID = $this->connection->prepare("SELECT * FROM e_post WHERE ID=?");
            $this->sPostByComment = $this->connection->prepare("SELECT postID FROM e_comment WHERE ID=?");
            $this->sPostsByAdmin = $this->connection->prepare("SELECT ID FROM e_post WHERE adminID=?");
            $this->sPostsByImage = $this->connection->prepare("SELECT postID FROM r_post_image WHERE imageID=?");
            $this->sPosts = $this->connection->prepare("SELECT ID FROM e_post");
            $this->iPost = $this->connection->prepare("INSERT INTO e_post (title, text, date, adminID) VALUES (?, ?, ?, ?)");
            $this->uPost = $this->connection->prepare("UPDATE e_post SET title=?, text=?, date=?, adminID=? WHERE ID=?");
            $this->dPost = $this->connection->prepare("DELETE FROM e_post WHERE ID=?");

            // Image
            $this->sImageByID = $this->connection->prepare("SELECT * FROM e_image WHERE ID=?");
            $this->sImageByPost = $this->connection->prepare("SELECT imageID FROM e_post WHERE ID=?");
            $this->sImagesByPost = $this->connection->prepare("SELECT imageID FROM r_post_image WHERE postID=?");
            $this->sImages = $this->connection->prepare("SELECT ID FROM e_image");
            $this->iImage = $this->connection->prepare("INSERT INTO e_image (realName, fakeName, description) VALUES (?, ?, ?)");
            $this->uImage = $this->connection->prepare("UPDATE e_image SET realName=?, fakeName=?, description=? WHERE ID=?");
            $this->dImage = $this->connection->prepare("DELETE FROM e_image WHERE ID=?");


            // Relationship without attribute
            $this->iPostImage = $this->connection->prepare("INSERT INTO r_post_image (postID, imageID) VALUES (?, ?)");
            $this->dPostImage = $this->connection->prepare("DELETE FROM r_post_image WHERE postID=? AND imageID=?");
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // CREATE
    // ========================================================================

    public function createAdmin() {
        return new AdminMySQL($this);
    }

    public function createImage() {
        return new ImageMySQL($this);
    }

    public function createPost() {
        return new PostMySQL($this);
    }

    // GET
    // ========================================================================

    /**
     * come usarlo:
     *      - getAdmin($adminID)
     *      - getAdmin($post)
     *      - getAdmin($username, $password)
     */
    public function getAdmin($arg1, $arg2 = null) {

        if (!MyUtils::isEmpty($arg2)) {
            return $this->selectAdminByUsernameAndPassword($arg1, $arg2);
        } elseif (is_int($arg1)) {
            return $this->selectAdminByID($arg1);
        } else {
            return $this->selectAdminByPost($arg1);
        }
    }

    // sAdminByID = SELECT * FROM e_admin WHERE ID=?
    private function selectAdminByID($adminID) {
        $result = null;
        try {

            $this->sAdminByID->bindValue(1, $adminID);
            $this->sAdminByID->execute();
            // la variabile $rs contiene la "prossima riga" del resultset
            // se questa riga non esite viene restituito FALSE
            //
            // in questo caso ci aspettiamo un'unica riga nel resultset, per questo l'if()
            //
            // tramite PDO::FETCH_ASSOC diciamo che la riga la deve essere trasformata in un
            // array associativo in cui l'indice corrisponde al nome della colonna sul DB
            if (($rs = $this->sAdminByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new AdminMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sAdminByPost = SELECT adminID FROM e_post WHERE ID=?
    private function selectAdminByPost(Post $post) {

        $result = null;
        try {

            $this->sAdminByPost->bindValue(1, $post->getID());
            $this->sAdminByPost->execute();

            if (($rs = $this->sAdminByPost->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getAdmin((int) $rs["adminID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sAdminByUsernameAndPassword = SELECT ID FROM e_admin WHERE username=? AND password=?
    private function selectAdminByUsernameAndPassword($username, $password) {

        $result = null;
        try {

            $this->sAdminByUsernameAndPassword->bindValue(1, $username);
            $this->sAdminByUsernameAndPassword->bindValue(2, $password);
            $this->sAdminByUsernameAndPassword->execute();
            // la variabile $rs contiene la "prossima riga" del resultset
            // se questa riga non esite viene restituito FALSE
            //
            // in questo caso ci aspettiamo un'unica riga nel resultset, per questo l'if()
            //
            // tramite PDO::FETCH_ASSOC diciamo che la riga la deve essere trasformata in un
            // array associativo in cui l'indice corrisponde al nome della colonna sul DB
            if (($rs = $this->sAdminByUsernameAndPassword->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = $this->getAdmin((int) $rs["ID"]);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getAdmins() {
        return $this->selectAdmins();
    }

    // sAdmins = SELECT ID FROM e_admin
    private function selectAdmins() {

        $result = array();
        try {
            $this->sAdmins->execute();
            while (($rs = $this->sAdmins->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getAdmin((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    /**
     * come usarlo:
     *      - getImage($imageID)
     *      - getImage($post)
     */
    public function getImage($arg) {

        if (is_int($arg)) {
            return $this->selectImageByID($arg);
        } else {
            return $this->selectImageByPost($arg);
        }
    }

    // sImageByID = SELECT * FROM e_image WHERE ID=?
    private function selectImageByID($imageID) {

        $result = null;
        try {

            $this->sImageByID->bindValue(1, $imageID);
            $this->sImageByID->execute();

            if (($rs = $this->sImageByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new ImageMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sImageByPost = SELECT imageID FROM e_post WHERE ID=?
    private function selectImageByPost(Post $post) {

        $result = null;
        try {

            $this->sImageByPost->bindValue(1, $post->getID());
            $this->sImageByPost->execute();

            if (($rs = $this->selectImageByPost->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new ImageMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    /**
     * come usarlo:
     *      - getImages($post)
     *      - getImages()
     */
    public function getImages(Post $post = null) {

        if (MyUtils::isEmpty($post)) {
            return $this->selectImages();
        } else {
            return $this->selectImagesByPost($post);
        }
    }

    // sImagesByPost = SELECT imageID FROM r_post_image WHERE postID=?
    private function selectImagesByPost(Post $post) {

        $result = array();
        try {
            $this->sImagesByPost->bindValue(1, $post->getID());
            $this->sImagesByPost->execute();

            while (($rs = $this->sImagesByPost->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getImage((int) $rs["imageID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sImages = SELECT ID FROM e_image
    private function selectImages() {

        $result = array();
        try {
            $this->sImages->execute();

            while (($rs = $this->sImages->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getImage((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    public function getPost($postID) {

        return $this->selectPostByID($postID);
    }

    // sPostByID = SELECT * FROM e_post WHERE ID=?
    private function selectPostByID($postID) {

        $result = null;
        try {

            $this->sPostByID->bindValue(1, $postID);
            $this->sPostByID->execute();

            if (($rs = $this->sPostByID->fetch(PDO::FETCH_ASSOC)) !== false) {
                $result = new PostMySQL($this, $rs);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    /**
     * come usarlo:
     *      - getPosts($image)
     *      - getPosts($admin)
     *      - getPosts() -> restituisce tutti i post
     */
    public function getPosts($arg1 = null) {

        if (MyUtils::isEmpty($arg1)) {
            return $this->selectPosts();
        } elseif ($arg1 instanceof Admin) {
            return $this->selectPostsByAdmin($arg1);
        } else {
            return $this->selectPostsByImage($arg1);
        }
    }

    // sPostsByAdmin = SELECT ID FROM e_post WHERE adminID=?
    private function selectPostsByAdmin(Admin $admin) {

        $result = array();
        try {
            $this->sPostsByAdmin->bindValue(1, $admin->getID());
            $this->sPostsByAdmin->execute();

            while (($rs = $this->sPostsByAdmin->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getPost((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sPostsByImage = SELECT postID FROM r_post_image WHERE imageID=?
    private function selectPostsByImage(Image $image) {

        $result = array();
        try {
            $this->sPostsByImage->bindValue(1, $image->getID());
            $this->sPostsByImage->execute();

            while (($rs = $this->sPostsByImage->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getPost((int) $rs["postID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // sPosts = SELECT ID FROM e_post
    private function selectPosts() {

        $result = array();
        try {
            $this->sPosts->execute();

            while (($rs = $this->sPosts->fetch(PDO::FETCH_ASSOC)) !== false) {
                array_push($result, $this->getPost((int) $rs["ID"]));
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
        return $result;
    }

    // STORE
    // ========================================================================

    public function storeAdmin(Admin $admin) {

        try {
            if ($admin->getID() > 0) {
                // update
                return $admin->isDirty() ? $this->updateAdmin($admin) : $admin;
            } else {
                // insert
                return $this->insertAdmin($admin);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // iAdmin = INSERT INTO e_admin (username, password) VALUES (?, ?)
    private function insertAdmin(Admin $admin) {

        try {

            $this->iAdmin->bindValue(1, $admin->getUsername());
            $this->iAdmin->bindValue(2, $admin->getPassword());
            $this->iAdmin->execute();

            $admin->copyFrom($this->getAdmin((int) $this->connection->lastInsertId()));
            $admin->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $admin;
    }

    // uAdmin = UPDATE e_admin SET username=?, password=? WHERE ID=?
    private function updateAdmin(Admin $admin) {

        try {

            $this->uAdmin->bindValue(1, $admin->getUsername());
            $this->uAdmin->bindValue(2, $admin->getPassword());
            $this->uAdmin->bindValue(3, $admin->getID());
            $this->uAdmin->execute();

            $admin->copyFrom($this->getAdmin($admin->getID()));
            $admin->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $admin;
    }

    public function storeImage(Image $image) {

        try {
            if ($image->getID() > 0) {
                // update
                return $image->isDirty() ? $this->updateImage($image) : $image;
            } else {
                // $comment
                return $this->insertImage($image);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // iImage = INSERT INTO e_image (realName, fakeName, description) VALUES (?, ?, ?)
    private function insertImage(Image $image) {

        try {

            $this->iImage->bindValue(1, $image->getRealName());
            $this->iImage->bindValue(2, $image->getFakeName());
            $this->iImage->bindValue(3, $image->getDescription());
            $this->iImage->execute();

            $ID = (int) $this->connection->lastInsertId();

            // save relationship
            foreach ($image->getPosts() as $post) {
                $this->insertPostImage($post->getID(), $ID);
            }

            $image->copyFrom($this->getImage($ID));
            $image->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $image;
    }

    // uImage = UPDATE e_image SET realName=?, fakeName=?, description=? WHERE ID=?
    private function updateImage(Image $image) {

        try {

            $this->uImage->bindValue(1, $image->getRealName());
            $this->uImage->bindValue(2, $image->getFakeName());
            $this->uImage->bindValue(3, $image->getDescription());
            $this->uImage->bindValue(4, $image->getID());
            $this->uImage->execute();

            // save relationship
            $memoryPosts = $image->getPosts();
            $DBPosts = $this->getPosts($image);
            // inseriamo la relazione $post $product per tutti quei prodotti
            // che sono in memoria ma non nel DB
            foreach (array_diff($memoryPosts, $DBPosts) as $post) {
                $this->insertPostImage($post->getID(), $image->getID());
            }
            // eliminiamo la relazione $post $product per tutti quei prodotti
            // che sono nel DB ma non in memoria
            foreach (array_diff($DBPosts, $memoryPosts) as $post) {
                $this->deletePostImage($post->getID(), $image->getID());
            }

            $image->copyFrom($this->getImage($image->getID()));
            $image->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $image;
    }

    public function storePost(Post $post) {

        try {
            if ($post->getID() > 0) {
                // update
                return $post->isDirty() ? $this->updatePost($post) : $post;
            } else {
                // $comment
                return $this->insertPost($post);
            }
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }
    }

    // iPost = INSERT INTO e_post (title, text, date, adminID) VALUES (?, ?, ?, ?)
    private function insertPost(Post $post) {

        try {

            $this->iPost->bindValue(1, $post->getTitle());
            $this->iPost->bindValue(2, $post->getText());
            $this->iPost->bindValue(3, (new MyDate())->toStringForDB());
            $this->iPost->bindValue(4, $post->getAdmin()->getID());
            $this->iPost->execute();

            $ID = (int) $this->connection->lastInsertId();

            // save relationship
            foreach ($post->getImages() as $image) {
                $this->insertPostImage($ID, $image->getID());
            }

            $post->copyFrom($this->getPost($ID));
            $post->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $post;
    }

    // uPost = UPDATE e_post SET title=?, text=?, date=?, adminID=? WHERE ID=?
    private function updatePost(Post $post) {

        try {

            $this->uPost->bindValue(1, $post->getTitle());
            $this->uPost->bindValue(2, $post->getText());
            $this->uPost->bindValue(3, $post->getDate()->toStringForDB());
            $this->uPost->bindValue(4, $post->getAdmin()->getID());
            $this->uPost->bindValue(5, $post->getID());
            $this->uPost->execute();

            // save relationship
            $memoryImages = $post->getImages();
            $DBImages = $this->getImages($post);
            // inseriamo la relazione $post $product per tutti quei prodotti
            // che sono in memoria ma non nel DB
            foreach (array_diff($memoryImages, $DBImages) as $image) {
                $this->insertPostImage($post->getID(), $image->getID());
            }
            // eliminiamo la relazione $post $product per tutti quei prodotti
            // che sono nel DB ma non in memoria
            foreach (array_diff($DBImages, $memoryImages) as $image) {
                $this->deletePostImage($post->getID(), $image->getID());
            }

            $post->copyFrom($this->getPost($post->getID()));
            $post->setDirty(false);
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $post;
    }

    // REMOVE
    // ========================================================================

    public function removeAdmin(Admin $admin) {
        return $this->deleteAdmin($admin);
    }

    // dAdmin = DELETE FROM e_admin WHERE ID=?
    private function deleteAdmin(Admin $admin) {

        try {

            $this->dAdmin->bindValue(1, $admin->getID());
            $this->dAdmin->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $admin;
    }

    public function removeImage(Image $image) {
        return $this->deleteImage($image);
    }

    // dImage = DELETE FROM e_image WHERE ID=?
    private function deleteImage(Image $image) {

        try {

            $this->dImage->bindValue(1, $image->getID());
            $this->dImage->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $image;
    }

    public function removePost(Post $post) {
        return $this->deletePost($post);
    }

    // dPost = DELETE FROM e_post WHERE ID=?
    private function deletePost(Post $post) {

        try {

            $this->dPost->bindValue(1, $post->getID());
            $this->dPost->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $post;
    }

    // RELATIONSHIP
    // ========================================================================
    // iPostImage = INSERT INTO r_post_image (postID, imageID) VALUES (?, ?)
    private function insertPostImage($postID, $imageID) {

        try {

            $this->iPostImage->bindValue(1, $postID);
            $this->iPostImage->bindValue(2, $imageID);
            $this->iPostImage->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

    // dPostImage = DELETE FROM r_post_image WHERE postID=? AND imageID=?
    private function deletePostImage($postID, $imageID) {

        try {

            $this->dPostImage->bindValue(1, $postID);
            $this->dPostImage->bindValue(2, $imageID);
            $this->dPostImage->execute();
        } catch (PDOException $ex) {
            echo "PDOEXCEPTION ===========================";
            var_dump($ex);
        }

        return $this;
    }

}
