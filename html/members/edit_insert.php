<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";

$user_pwd = $_POST["user_pwd"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$dob = $_POST["dob"];
$check = $_POST["check"].$_POST["per"].$_POST["biz"];


include "../../inc/dbcon.php";

if($user_pwd){
    $sql = "update members set
    user_pwd = '$user_pwd',
    email = '$email',
    addr1 = '$addr1',
    addr2 = '$addr2',
    dob = '$dob',
    receipt = '$check'
    where idx=$s_idx;";
}else{
    $sql = "update members set
    email = '$email',
    addr1 = '$addr1',
    addr2 = '$addr2',
    dob = '$dob',
    receipt = '$check'
    where idx=$s_idx;";
};
echo $sql;
mysqli_query($dbcon,$sql);
mysqli_close($dbcon);

// echo"
// <script type=\"text/javascript\">
// location.href=\"edit_ok.php\";
// </script>
// ";
?>
