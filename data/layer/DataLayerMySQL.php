<?php

/**
 * Description of DataLayerMySQL
 *
 * @author alex
 */
class DataLayerMySQL implements DataLayer {

    const MYSQL_DRIVER_NAME = "mysql:host=localhost;dbname=";

    private $username = "root";
    private $password = "";
    private $databaseName = "marane";
    protected $connection;

    public function __construct() {

        $this->connection = null;
    }

    public function init() {
        try {

            $this->connection = new PDO(self::MYSQL_DRIVER_NAME . $this->databaseName, $this->username, $this->password);
        } catch (PDOException $ex) {

            // errore nella connessione
        }
    }

    public function destroy() {

    }

}
