<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');

$sql1 = "insert into tbl_orders(table_no, item, quantity)(select table_no, item, quantity from tbl_temp)";
mysqli_query($conn,$sql1);

$sql2 = "delete from tbl_temp";
mysqli_query($conn,$sql2);

$json = array();
$json["response"] = array(  
    "status" => true
);
echo json_encode($json);

?>