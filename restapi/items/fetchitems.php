<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');

$sql = "select item_id, item_name from tbl_items order by item_name";
$result = mysqli_query($conn,$sql);
$json = array();
$json["item"] = array();
while($row = mysqli_fetch_array($result)) {
    $jsonArray= array(
    'capture' => true,
    'itemid' => $row['item_id'],
    'itemname' => $row['item_name']
    );
    array_push($json["item"], $jsonArray);  
}
echo json_encode($json);

?>