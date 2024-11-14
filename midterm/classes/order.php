<?php 

include('connection.php');
$GLOBALS['connection'] = $connection;



class Orders{
    private $connection;
    function __construct()
    {
        $this->connection = $GLOBALS['connection'];
    }

    public function processTransaction(){
        $data = $this->connection->query('SELECT * FROM online_order ')->fetchAll();
        // print_r($data);
        return $data;
    }
    public function insertquery($Item_Number, $Order_Number, $Transaction_ID, $quantity, $name, $price,$payment,$delivery,$total) {
        $insert = $this->connection->prepare("INSERT INTO `online_order` (`item_no`, `order_no`, `transaction_id`, `quantity`,`name`,`price`,`payment`,`delivery`,`total`) VALUES (?, ?, ?, ?,?,?,?,?,?)");
        $insert->execute([$Item_Number, $Order_Number, $Transaction_ID, $quantity,$name, $price,$payment,$delivery,$total]);
        

        return $insert;
    }
    public function getTotalSum() {
        $stmt = $this->connection->query("SELECT SUM(price * quantity) AS total_sum FROM online_order");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total_sum'];
    }
}




?>