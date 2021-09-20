<?php
session_start();
header("Content-Type: text/html; Charset=UTF-8");

$user_id = $_POST["user_id"];
$user_pwd = $_POST["user_pwd"];


include "../../inc/dbcon.php";

$sql = "select user_pwd from members where user_id = '$user_id';";

$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);

$return_val = "";
    if($user_pwd != $array["user_pwd"]){
        $return_val = "비밀번호가 일치하지 않습니다.";
    }else{
        $return_val = "";
    }
        echo $return_val;

?>