<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');
if(isset($_GET['table'])) {
    $table = trim($_GET['table']);
    $sql1 = "insert into tbl_history(table_no, item, quantity)(select table_no, item, quantity from tbl_orders where table_no = ".$table.")";
    mysqli_query($conn,$sql1);

    $sql2 = "delete from tbl_orders where table_no = ".$table;
    mysqli_query($conn,$sql2);

    $json = array();
    $json["response"] = array(  
        "status" => true
    );
    echo json_encode($json);
}

?>