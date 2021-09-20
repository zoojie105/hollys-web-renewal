<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
    <link rel="stylesheet" type="text/css" href="../../css/com/reset.css">
    <link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>
    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <style type="text/css">
    form{margin:30px}
    fieldset{border:0;width: 340px;margin:auto}
    legend{font-size:24px; font-weight:bold}
    li{margin-bottom:20px}
    .txt1{margin-bottom:25px}
    .txt2{height:40px;font-size:18px;margin-bottom:20px}
    .txt3{height:40px;font-size:18px;margin-bottom:40px}

    input{width:200px; height:25px; margin-left:5px}
    .user_id_err{font-size: 14px; color: #ba000d; margin-left: 60px}
    .email_err{font-size: 14px; color: #ba000d; margin-left: 60px}

    button{border:0;width:120px; height: 35px; font-size: 16px; color:#fff; background:#ba000d;border-radius:5px; margin-left:113px}
    </style>

    <script type="text/javascript">
        function form_check(){
            var user_id = document.querySelector("#user_id");
            var email = document.querySelector("#email");

            if(!user_id.value){
                var txt = document.querySelector(".user_id_err")
                txt.textContent = "아이디를 입력하세요.";
                user_id.focus();
                return false;
            };
            
            if(!email.value){
                var txt = document.querySelector(".email_err")
                txt.textContent = "이메일을 입력하세요.";
                email.focus();
                return false;
            };
            

            return true;
        };

        $(document).ready(function(){
        
            // $(".btn_find").click(function(){
                $("#user_id").keyup(function(){
                var user_id = $("#user_id").val();
                if(!user_id){
                    $(".user_id_err").html("아이디를 입력하세요.");
                    $("#user_id").focus();
                    return false;
                } else{
                    $.ajax({
                        url:"../ajax/find_id_ajax.php",
                        type:"post",
                        data:{user_id:user_id},
                        success:function(data){
                                $(".user_id_err").html(data);
                        },
                        error:function(){
                            $(".user_id_err").html("ERROR");
                        }
                    });
                };
            });
                $("#email").keyup(function(){
                var email = $("#email").val();
                if(!email){
                    $(".email_err").html("이메일을 입력하세요.");
                    $("#email").focus();
                    return false;
                } else{
                    $.ajax({
                        url:"find_email_ajax.php",
                        type:"post",
                        data:{email:email},
                        success:function(data){
                                $(".email_err").html(data);
                        },
                        error:function(){
                            $(".email_err").html("ERROR");
                        }
                    });
                };
    
            });
            });


    </script>
</head>
<body>
    <form name="find_id_form" action="find_pw_result.php" method="post" onsubmit="return form_check()">
        <fieldset>
            <legend>비밀번호 찾기</legend>
            <ul>
                <li class="txt1">회원가입시 입력한 아이디와 이메일주소를 입력해주세요.</li>
                <li class="txt2">
                    <label for="user_id">아이디</label>
                    <input type="text" name="user_id" id="user_id"><br>
                    <span class="user_id_err"></span>
                </li>
                <li class="txt3">
                    <label for="email">이메일</label>
                    <input type="text" name="email" id="email"><br>
                    <span class="email_err"></span>
                </li>
                <li>
                    <button type="submit" name="btn_find" class="btn_find">비밀번호 찾기</button>
                </li>
            </ul>
        </fieldset>
    </form>
</body>
</html>