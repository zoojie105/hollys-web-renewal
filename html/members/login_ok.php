<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

$user_id = $_POST["user_id"];
$user_pwd = $_POST["user_pwd"];

include "../../inc/dbcon.php";

$sql = "select idx, user_id, user_pwd, user_name from members where user_id='$user_id';"; 
$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);

if(!$num){
    echo 
    "<script type=\"text/javascript\">
    alert(\"존재하지 않는 아이디입니다..\");
    history.back();
    </script>";
    exit;
} else{
    $array = mysqli_fetch_array($result);
    if($user_pwd != $array["user_pwd"]){
        echo "
        <script type = \"text/javascript\">
        alert(\"비밀번호가 일치하지 않습니다.\");
        history.back();
        </script>";
        exit;
    };
    
    $_SESSION["s_idx"] = $array["idx"];
    $_SESSION["s_id"] = $array["user_id"];
    $_SESSION["s_name"] = $array["user_name"];


    mysqli_close($dbcon);

    echo"
    <script type=\"text/javascript\">
    location.href = '../index.php';
    </script>";
};

?>