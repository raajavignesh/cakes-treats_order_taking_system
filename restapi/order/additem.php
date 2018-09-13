<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');

if(isset($_GET['table']) && isset($_GET['item']) && isset($_GET['quantity'])) {
    $table = trim($_GET['table']);
    $item = trim($_GET['item']);
    $quantity = trim($_GET['quantity']);

    $sql = "insert into tbl_temp(table_no, item, quantity) values (".$table.", '".$item."', ".$quantity.")";
    mysqli_query($conn,$sql);

    $json = array();
    $json["response"] = array(  
        "status" => true
    );
    echo json_encode($json);
}

?>