<?php
session_start();
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
if($s_id != "admin"){
    echo "
    <script type='text/javascript'>
    alert('관리자만 이용 가능합니다.')
    location.href='../index.php'
    </script>
    ";
};
?>