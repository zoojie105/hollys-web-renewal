<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
if($s_idx){
    echo "
    <script type='text/javascript'>
    alert('이미 로그인이 되어있습니다.')
    location.href='../index.php'
    </script>
    ";
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hollys Coffee Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    <link rel="shortcut icon" type="images/x-icon" href="../favicon.ico"/>

    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
    <script>
        function form_check(){
            var user_id = document.getElementById("user_id");
            var user_pwd = document.getElementById("user_pwd");
            var txt = document.querySelector(".err");

            if(!user_id.value){
                txt.textContent = "아이디를 입력하세요.";
                user_id.focus();
                return false;
            };
            if(!user_pwd.value){
                txt.textContent = "비밀번호를 입력하세요.";
                user_pwd.focus();
                return false;
            };
            return true;
        };
        function find_id(){
            window.open("find_id.php", "fid", "width=550, height=320, left=600, top=200");
        };
        function find_pw(){
            window.open("find_pw.php", "fpw", "width=550, height=320, left=600, top=200");
        };
        
        $(document).ready(function(){
            $(".user_id").keyup(function(){
                var user_id = $(".user_id").val();
                if(!user_id){
                    $(".err").html("아이디를 입력해주세요");
                    $(".user_id").focus();
                    return false;
                }else{
                    $.ajax({
                        url:"../ajax/login_id_ajax.php",
                        type:"post",
                        data:{user_id:user_id},
                        success:function(data){
                            $(".err").html(data);                      
                        },
                        err:function(){
                            $(".err").html("ERROR");
                        }
                    });
                };
            });
            $(".user_pwd").keyup(function(){
                var user_id = $(".user_id").val();
                var user_pwd = $(".user_pwd").val();
                if(!user_pwd){
                    $(".err").html("비밀번호를 입력해주세요");
                    $(".user_pwd").focus();
                    return false;
                }else{
                    $.ajax({
                        url:"../ajax/login_pwd_ajax.php",
                        type:"post",
                        data:{user_pwd:user_pwd, user_id:user_id},
                        success:function(data){
                            $(".err").html(data);                      
                        },
                        err:function(){
                            $(".err").html("ERROR");
                        }
                    });
                };
            });




        });
    
       
    </script>
</head>
<body>    
    
<div class="header_wrap">
        <header id="header">
        
        <div class="header_bottom">
            <h1><a href="../index.php">할리스 커피</a></h1>
    
            <nav class="gnb">
            <h2 class="blind">주요 메뉴</h2>
            <ul>
                <li class="menu"><a href="../menu/coffee/coffee.php">메뉴</a>
                    <ul class="sub">
                        <li><a href="../menu/coffee/coffee.php">커피</a></li>
                        <li><a href="../menu/bev/bev.php">음료</a></li>
                        <li><a href="../menu/dessert/dessert.php">디저트·식사</a></li>
                        <li><a href="../menu/md/md.php">MD상품</a></li>
                    </ul>
                </li>
                <li class= "mall"><a href="../hollys_mall.php">할리스 몰</a>
                    <ul class="sub">
                        <li><a href="../hollys_mall.php">할리스콘</a></li>
                        <li><a href="../hollys_mall_card.php">할리스카드</a></li>
                        <li><a href="#">구매내역</a></li>
                    </ul>
                </li>
                <li class="member"><a href="../membership.php">멤버십</a>
                    <ul class="sub">
                        <li><a href="../membership.php">스마트오더</a></li>
                        <li><a href="#">멤버십 혜택 안내</a></li>
                        <li><a href="my_hollys.php">My Hollys</a></li>
                    </ul>
                </li>
                <li class="news"><a href="../Hollys_news.php">할리스 뉴스</a>
                    <ul class="sub">
                        <li><a href="../Hollys_news.php">이벤트</a></li>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">보도자료</a></li>
                    </ul>
                </li>
                <li class="about"><a href="../about.php">할리스 소개</a>
                    <ul class="sub">
                        <li><a href="../about.php">할리스소개</a></li>
                        <li><a href="#">매장 검색</a></li>
                        <li><a href="#">할리스 아카데미</a></li>
                        <li><a href="#">채용안내</a></li>
                        <li><a href="#">가맹 문의</a></li>
                        <li><a href="#">B2B사업 소개</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        </div>
    
        <div class="header_top">
            <div class="top_menu">
            <h2  class="blind">사용자 메뉴</h2>
            <ul>
                <li class="login"><a href="#">로그인</a></li>
                <li class="register"><a href="join_term.php">멤버십 가입</a></li>
                <li class="customer"><a href="#">고객센터</a></li>
                <li class="fran"><a href="#">창업 설명회</a></li>
            </ul>
            </div>
        </div>
    
        </header>
    <div class="sub_box"></div>
</div>


<main id="main">
    <aside class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="../index.php">Home</a></li>
        <li class="locate2"><a href="#">멤버십 로그인</a></li>
    </ul>
    </aside>
  
    <section class="cont">
    <form name="login_form" action="login_ok.php" method="post" onsubmit="return form_check()">
    <h2 class="blind">로그인</h2>
    <h3>WELCOM</h3>
            <label for="user_id" class="blind">ID</label><br>
            <input type="text" name="user_id" id="user_id" class="user_id">
            <label for="user_pwd" class="blind">Password</label><br>
            <input type="password" name="user_pwd" id="user_pwd" class="user_pwd"><br>
            <span class="err"></span>
        <button type="submit" name="login" value="login" class="btn_login">로그인</button>
        
        <ul>
            <li class="txt1">
                <input type="checkbox" name="sve" id="save_id" class="save_id" onclick="save()">
                <label for="save_id">아이디 저장</label>
            </li>

            <li class="txt2"><a href="#none" onclick="find_id()">아이디 찾기</a></li>
            <li class="txt3"><a href="#none" onclick="find_pw()">비밀번호 찾기</a></li>
            <li class="join"><a href="join_term.php">회원가입</a></li>
        </ul>
    </form>  
    </section>
    
    <div class="quick_wrap">
        <section class="quick">
            <h2>QUICK MENU</h2>
            <ul>
                <li class="quick_txt1"><a href="../menu/coffee/coffee.php">메뉴</a></li>
                <li class="quick_txt2"><a href="#">가맹문의</a></li>
                <li class="quick_txt3"><a href="#">할리스 아카데미</a></li>
                <li class="quick_txt4"><a href="#">기업특판</a></li>
                <li class="quick_txt5"><a href="../Hollys_news.php">이벤트</a></li>
            </ul>
        </section>
        </div>
</main>
<div class="footer_wrap">
<footer id="footer"class="footer">
    <h2 class="blind">사이트 이용안내</h2>
    <h3 class="blind">약관 및 정책</h3>
        <ul class="footer_top">
        <li class="foot_txt1"><a href="#">개인정보 처리방침</a></li>
        <li class="foot_txt2"><a href="#">서비스 이용약관</a></li>
        <li class="foot_txt3"><a href="#">멤버십 이용약관</a></li>
        <li class="foot_txt4"><a href="#">고객문의</a></li>
        <li class="foot_txt5"><a href="#">고객 설문</a></li>
        <li class="foot_txt6"><a href="#">사이트맵</a></li>
        <li class="foot_txt7"><a href="#">채용정보</a></li>
        </ul>

    <div class="footer_bottom">
        <div class="foot_txt_wrap1">
        <p class="foot_bottom_txt1">법인명:(주)할리스에프앤비</p>
        <p class="foot_bottom_txt2">대표자: 신유정</p>
        <p class="foot_bottom_txt3">사업자 등록번호: 211-87-61044</p>
        <p class="foot_bottom_txt4">통신판매업:제2019-서울 종로-0193호</p>
        </div>

        <div class="foot_txt_wrap2">
        <address><a href="#">주소: 서울 특별시 종로구 율곡로 88 삼환빌딩 8층 (운니동)</a></address>
        <p class="foot_bottom_txt5">대표전화:02-2188-7100(가맹문의:02-6350-7229)</p>
        </div>
        <p class="foot_bottom_txt6">OPYRIGHT (C) HOLLYS COFFE Co., Ltd. All Right Reserved.</p>
        
    </div>
</footer>
</div>
</body>
</html>