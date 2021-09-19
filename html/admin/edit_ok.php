<?php
include "../../inc/admin_check.php";
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";

$g_idx = $_POST["g_idx"];
$user_pwd = $_POST["user_pwd"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$dob = $_POST["dob"];
$check = $_POST["check"].$_POST["per"].$_POST["biz"];
$level = $_POST["level"];


include "../../inc/dbcon.php";

if($user_pwd){
    $sql = "update members set
    user_pwd = '$user_pwd',
    email = '$email',
    addr1 = '$addr1',
    addr2 = '$addr2',
    dob = '$dob',
    receipt = '$check',
    level = '$level'
    where idx=$g_idx;";
}else{
    $sql = "update members set
    email = '$email',
    addr1 = '$addr1',
    addr2 = '$addr2',
    dob = '$dob',
    receipt = '$check',
    level = '$level'
    where idx=$g_idx;";
};

mysqli_query($dbcon,$sql);
mysqli_close($dbcon);

echo"
<script type=\"text/javascript\">
alert(\"수정되었습니다.\");
location.href=\"admin.php\";
</script>
";
?>
