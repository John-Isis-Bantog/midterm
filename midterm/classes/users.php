<?php
require_once('connection.php');
$GLOBALS['connection'] = $connection;

class Users {
    private $dbconn;

    function __construct($db) {
        $this->dbconn = $db;
        
    }

    public function login($username, $password) {
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function createAccount($full_name, $username, $password) {
        $password = md5($password); // Password encryption
        if ($full_name != "" && $username != "" && $password != "") {
            $sql = "INSERT INTO user (full_name, username, password) VALUES (:full_name, :username, :password)";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $res = $stmt->execute();

            return $res;
        } else {
            return false;
        }
    }

   
}
?>