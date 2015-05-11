<?php

/**
 * Description of SecurityLayer
 *
 * @author alex
 */
class SecurityLayer {

    /**
     *
     * @return bool - <b>true</b> se la sessione esiste, è attiva e non è stata resettata
     *                <b>false</b> altrimenti
     */
    public static function checkSession() {

        // session_status() === PHP_SESSION_ACTIVE non piace ad altervista xD
        return (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["MAID"]));
    }

}
