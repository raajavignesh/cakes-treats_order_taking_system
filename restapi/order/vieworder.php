<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');

$sql = "select table_no, item, quantity from tbl_orders group by table_no";
$result = mysqli_query($conn,$sql);
$json = array();
$json["order"] = array();
while($row = mysqli_fetch_array($result)) {
    $jsonArray= array(
    'capture' => true,
    'table' => $row['table_no'],
    'item' => $row['item'],
    'quantity' => $row['quantity']
    );
    array_push($json["order"], $jsonArray);  
}
echo json_encode($json);

?>