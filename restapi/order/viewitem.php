<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');

$sql = "select table_no, item, quantity from tbl_temp";
$result = mysqli_query($conn,$sql);
$json = array();
$json["item"] = array();
while($row = mysqli_fetch_array($result)) {
    $jsonArray= array(
    'capture' => true,
    'table' => $row['table_no'],
    'item' => $row['item'],
    'quantity' => $row['quantity']
    );
    array_push($json["item"], $jsonArray);  
}
echo json_encode($json);

?>