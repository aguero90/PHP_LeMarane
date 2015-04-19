<?php

/**
 * Description of MyUtils
 *
 * @author alex
 */
class MyUtils {

    // creo questa funzione di utility perchè a quanto pare
    // empty non può funzionare con un valore restituito da una
    // funzione (che è un riferimento alla variabile)
    //
    // in questo modo la variabile viene copiata in $var
    // e poichè a me non interessa modificarla ma solo verificare che
    //      1) esista
    //      2) non sia null
    // va bene
    public static function isEmpty($var) {
        return empty($var);
    }

    // come per isEmpty(), ma qui verifichiamo solo che la variabile esista
    // non ci interessa se è null o meno
    public static function exist($var) {
        return isset($var);
    }

}
