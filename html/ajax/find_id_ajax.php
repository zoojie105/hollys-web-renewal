<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

$user_id = $_POST["user_id"];

include "../../inc/dbcon.php";

$sql = "select user_id from members where user_id='$user_id';"; 
$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);

$retun_val = "";
    if(!$num){
        $return_val = "존재하지 않는 아이디입니다.";
    } else{
        $return_val = "";
    };

    echo $return_val;

?>