<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

$user_name = $_POST["user_name"];

include "../../inc/dbcon.php";

$sql = "select user_name from members where user_name='$user_name';"; 
$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);

$retun_val = "";
    if(!$num){
        $return_val = "존재하지 않는 이름입니다.";
    } else{
        $return_val = "";
    };

    echo $return_val;

?>