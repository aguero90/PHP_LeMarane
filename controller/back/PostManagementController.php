<?php

/**
 * Description of NewsController
 *
 * @author alex
 */
class PostManagementController extends MaraneBaseController {

    const ITEMS_FOR_PAGE = 15;

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (!SecurityLayer::checkSession()) {

            // la sessione è scaduta
            $this->sessionExpired();
            return;
        }

        // La sessione NON è scaduta e possiamo vedere cosa dobbiamo fare
        //
        // se sono qui è stata effettuata una semplice redirezione
        // cioè sto solamente navigando
        $this->goToPostManagement();
    }

    public function processRequestGET() {

        if (!SecurityLayer::checkSession()) {

            // la sessione è scaduta
            $this->sessionExpired();
            return;
        }


        // la sessione NON è scaduta e possiamo analizzare i dati
        // ricevuti in GET
        //
        // Al momento, per quanto riguarda le news, ci aspettiamo i dati in GET
        // solo per la redirezione
        // => redirigiamo alla gestione delle news
        $this->goToPostManagement();
    }

    public function processRequestPOST() {

        if (!SecurityLayer::checkSession()) {

            // la sessione è scaduta
            $this->sessionExpired();
            return;
        }

        // la sessione NON è scaduta e possiamo analizzare i dati
        // ricevuti in POST

        if (isset($_POST["ip"])) {

            // se nella POST esiste il campo "ip", cioè "INSERT POST"
            // => prendo i dati ed aggiungo il post
            $this->storePost();
        } elseif (isset($_POST["ep"])) {

            // se nella POST esiste il campo "ep", cioè "EDIT POST"
            // => prendo i dati e modifico il post
            $this->editPost();
        } elseif (isset($_POST["rp"])) {

            // se nella POST esiste il campo "rp", cioè "REMOVE POST"
            // => rimuovo la news
            $this->removePost();
        } else {

            // mi è arrivato qualcosa di strano
            // GESTIRE
        }

        $this->goToPostManagement();
    }

    private function storePost() {

        $post = $this->getDataLayer()->createPost();

        // SANITIZZAZIONE
        $post->setTitle(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
        $post->setText(filter_input(INPUT_POST, "text", FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $post->setAdmin($this->getDataLayer()->getAdmin($_SESSION["MAID"]));




        if (isset($_POST["iid"]) && !MyUtils::isEmpty($_POST["iid"])) {

            // l'utente ha selezionato un'immagine esistente
            $image = $this->getDataLayer()->getImage(filter_input(INPUT_POST, "iid", FILTER_SANITIZE_NUMBER_INT));
        } else {

            // l'utente ha inserito una nuova immagine
            $image = $this->getDataLayer()->createImage();
            $image->setRealName(filter_input(INPUT_POST, "imageRealName", FILTER_SANITIZE_STRING));
            $image->setFakeName(filter_input(INPUT_POST, "imageFakeName", FILTER_SANITIZE_URL));
            $image->setDescription(filter_input(INPUT_POST, "imageDescription", FILTER_SANITIZE_STRING));
        }


        $post->setImage($image);

        $this->getDataLayer()->storePost($post);
    }

    private function editPost() {

        $post = $this->getDataLayer()->getPost(filter_input(INPUT_POST, "pid", FILTER_SANITIZE_NUMBER_INT));

        $post->setTitle(filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING));
        $post->setText(filter_input(INPUT_POST, "text", FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        $post->getImage()->setRealName(filter_input(INPUT_POST, "imageRealName", FILTER_SANITIZE_STRING));
        $post->getImage()->setFakeName(filter_input(INPUT_POST, "imageFakeName", FILTER_SANITIZE_URL));
        $post->getImage()->setDescription(filter_input(INPUT_POST, "imageDescription", FILTER_SANITIZE_STRING));

        $this->getDataLayer()->storePost($post);
    }

    private function removePost() {

        $this->getDataLayer()->removePost($this->getDataLayer()->getPost(filter_input(INPUT_POST, "pid", FILTER_SANITIZE_NUMBER_INT)));
    }

    private function goToPostManagement() {

        // prendiamo tutti i post nel DB
        $posts = $this->getDataLayer()->getPosts();
        $this->getSmarty()->assign("posts", $posts);
        $this->getSmarty()->assign("numberOfPages", sizeof($posts) / self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("itemsForPage", self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("sid", 1);

        // per la selezione dell'immagine
        $images = $this->getDataLayer()->getImages();
        $this->getSmarty()->assign("images", $images);



        $this->getSmarty()->assign("contentTemplate", "back/PostManagement.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->assign("pagination", "back/Pagination.tpl");
        $this->getSmarty()->display("back/Outline.tpl"); // mostriamo il template
    }

    private function sessionExpired() {

        // la sessione è scaduta
        // => rediregiamo al login
        $loginController = new LoginController();
        $loginController->processRequest();
    }

}
