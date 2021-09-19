<?php
header("Content-Type: text/html; charset=UTF-8");

$user_name = $_POST["user_name"];
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
    <title>아이디 찾기</title>
    <link rel="stylesheet" type="text/css" href="../../css/com/reset.css">
    <style type="text/css">
    .main_wrap{margin:30px}
    .main{width: 326px;margin:auto}
    h2{font-size:24px; font-weight:bold}
    li{margin-bottom:20px}
    .txt1{margin-bottom:25px}
    .txt2{height:30px;font-size:18px;margin-bottom:20px}
    .txt3{height:30px;font-size:18px;margin-bottom:40px}
    span{font-weight:bold;font-size:20px}
    .btn_wrap{height:35px;width:230px; margin:auto}
    button[name="find_pwd"]{border:0;width:120px; height: 35px; font-size: 16px; color:#fff; background:#ba000d;border-radius:5px; float:left; margin-right:10px}
    button[name="go_login"]{border:0;width:100px; height: 35px; font-size: 16px; color:#fff; background:#ba000d;border-radius:5px; float:left}
    </style>

    <script type="text/javascript">
    function go_login(){

        window.close();
    };

    function go_find_pw(){
        window.open("find_pw.php", "fpw", "width=550, height=320, left=600, top=200")
        window.close();
    };
    </script>

</head>
<body>
<main id="main" class="main_wrap">
    <section class="main">
    <h1 class="blind">아이디 찾기 결과</h1>  
    <h2>아이디 찾기</h2>
    <p class="txt1">아이디 검색 결과 입니다.</p>
    <p class="txt2">가입일: <?php echo $array["reg_date"];?></p>
    <p class="txt3">아이디: <span><?php echo $array["user_id"];?></span></p>

    <div class="btn_wrap">
    <button name="find_pwd" onclick="go_find_pw()">비밀번호 찾기</button>
    <button name="go_login" onclick="go_login()">로그인하기</button>
    </div>
    </section>
</main>
</body>
</html>