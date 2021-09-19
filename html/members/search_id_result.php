<?php 
$user_id = $_POST["user_id"];

include "../../inc/dbcon.php";

$sql = "select user_id from members where user_id = '$user_id';";

$result = mysqli_query($dbcon,$sql);

$num = mysqli_num_rows($result);

    $retun_val = "";
    if(!$num){
        $return_val = "사용할 수 있는 아이디입니다.";
    } else{
        $return_val = "사용할 수 없는 아이디입니다.";
    };

    echo $return_val;
?>