<?php 
class DataBaseManager {

private $url;
private $dbName;
private $user;
private $password;

private $link;

 public function __construct($url, $dbName, $user, $password) {
    $this->url = $url;
    $this->dbName = $dbName;
    $this->user = $user;
    $this->password = $password;

    $this->link = null;
}

public function connect() {
    try {
        $this->link = new PDO('mysql:host=' . $this->url . ';dbname=' . $this->dbName . ';charset=utf8', $this->user, $this->password);
        $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    } catch (PDOException $e) {
        die('Erreur de connexion : ' . $e->getMessage());
    }
}

public function query($query) {
    try {
        $result = $this->link->query($query);
        return $result;
    } catch (PDOException $e) {
        die('Erreur de requête : ' . $e->getMessage());
    }
}

public function disconnect() {
    $this->link = null;
}
}

?>
