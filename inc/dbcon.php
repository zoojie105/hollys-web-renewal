<?php
// $dbcon = mysqli_connect("localhost", "zoojie", "wlgp010501!", "zoojie") or die("DB 접속 실패");
$dbcon = mysqli_connect("localhost", "root", "", "front") or die("DB 접속 실패");

mysqli_set_charset($dbcon, "utf8");

?>