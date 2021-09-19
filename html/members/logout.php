<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");

unset($_SESSION["s_idx"]);
unset($_SESSION["s_id"]);
unset($_SESSION["s_name"]);

echo"
<script type=\"text/javascript\">
alert(\"로그아웃 되었습니다\");
location.href=\"../index.php\"
</script>";
?>