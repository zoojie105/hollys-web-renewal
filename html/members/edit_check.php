<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";

$user_pwd = $_POST["user_pwd"];

include "../../inc/dbcon.php";
$sql = "select user_pwd from members where idx = $s_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

if($user_pwd != $array["user_pwd"]){
    echo "
        <script type=\"text/javascript\">
        alert(\"비밀번호가 일치하지 않습니다.\")
        history.back();
        </script>
    ";
    exit;
}else{

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
    location.href=\"edit2.php\";
    </script>
";
};
?>