<?php
header("Content-Type: text/html; charset=UTF-8");

$user_id = $_POST["user_id"];
$email = $_POST["email"];

include "../../inc/dbcon.php";
$sql = "select * from members where email = '$email';";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);

if(!$num){
    echo 
    "<script type= 'text/javascript'>
    alert('존재하지 않는 회원정보입니다. 다시 입력해주세요.');
    history.back();
    </script>";
    exit;
};

mysqli_close($dbcon);


?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
    <link rel="stylesheet" type="text/css" href="../../css/com/reset.css">
    <style type="text/css">
    .main_wrap{margin:30px}
    .main{width: 326px;margin:auto}
    h2{font-size:24px; font-weight:bold;margin-bottom:30px}
    li{margin-bottom:20px}
    .txt1{font-size:18px;margin-bottom:10px}
    .txt2{font-size:16px;margin-bottom:5px}
    .txt3{margin-bottom:50px}


    span{font-weight:bold;font-size:20px}
    .btn_wrap{width:100px; margin:auto}
    button{border:0;width:100px; height:35px; font-size: 16px; color:#fff; background:#ba000d;border-radius:5px}
    </style>

    <script type="text/javascript">
    function go_login(){

        window.close();
    };
    </script>

</head>
<body>
<main id="main" class="main_wrap">
    <section class="main">
    <h1 class="blind">비밀번호 찾기 결과</h1>  
    <h2>비밀번호 찾기</h2>
    <p class="txt1">입력하신 <span><?php echo $array["email"];?></span>로 <br>비밀번호 재설정 메일을 발송하였습니다.</p>
    <p class="txt2">메일을 받지 못하셨습니까?</p>
    <p class="txt3"><a href="#">메일 다시 발송하기</a></p>

    <div class="btn_wrap">
    <button name="go_login" onclick="go_login()">로그인하기</button>
    </div>
    </section>
</main>
</body>
</html>