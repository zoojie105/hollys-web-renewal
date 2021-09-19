<?php
include "../../inc/admin_check.php";
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";

include "../../inc/dbcon.php";

$g_idx = $_GET["idx"];
$sql = "delete from members where idx=$g_idx;";
mysqli_query($dbcon, $sql);
mysqli_close($dbcon);

echo "
<script type\"text=javascript\">
alert(\"처리되었습니다.\")
location.href=\"admin.php\";
</script>";
?>