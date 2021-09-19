<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

$email = $_POST["email"];

include "../../inc/dbcon.php";

$sql = "select email from members where user_name='$email';"; 
$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);

$retun_val = "";
    if(!$num){
        $return_val = "존재하지 않는 이메일입니다.";
    } else{
        $return_val = "";
    };

    echo $return_val;

?>