<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/dbc.inc.php');

if(isset($_GET['tid'])) {
    $tid = trim($_GET['tid']);
    
    $sql = "delete from tbl_temp where temp_id = ".$tid;
    mysqli_query($conn,$sql);

    $json = array();
    $json["response"] = array(  
        "status" => true
    );
    echo json_encode($json);
}

?>