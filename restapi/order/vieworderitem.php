<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');

$sql = "select temp_id, table_no, item, quantity from tbl_temp";
$result = mysqli_query($conn,$sql);
$json = array();
$json["orderitem"] = array();
while($row = mysqli_fetch_array($result)) {
    $jsonArray= array(
    'capture' => true,
    'tid' => $row['temp_id'],
    'table' => $row['table_no'],
    'item' => $row['item'],
    'quantity' => $row['quantity']
    );
    array_push($json["orderitem"], $jsonArray);  
}
echo json_encode($json);

?>