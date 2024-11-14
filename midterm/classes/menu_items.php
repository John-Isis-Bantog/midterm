<?php 

require_once('connection.php');
$GLOBALS['connection'] = $connection;

class MenuItems{
    private $db;

    function __construct()
    {
        $this->db = $GLOBALS['connection'];
    }

    public function viewMenu(){
        $menus = $this->db->query('SELECT * FROM menu ')->fetchAll();
        return $menus;  
    }
   
    
}

?>