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
    <title>JOIN HOLLYS</title>
    <link rel="stylesheet" type="text/css" href="../../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../../css/join_info.css">
    <link rel="shortcut icon" type="images/x-icon" href="../favicon.ico"/>

    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
    <script type="text/javascript">
        function form_check(){
            var user_id = document.getElementById("user_id");
            var user_pwd = document.getElementById("user_pwd");
            var repwd = document.getElementById("repwd");
            var user_name = document.getElementById("user_name");
            var dob = document.getElementById("dob");
            var mobile = document.getElementById("mobile");
            var email_id = document.getElementById("email_id");
            var email_dns = document.getElementById("email_dns");
            var addr = document.getElementById("postalCode");

            

            if(!user_id.value){
                var txt = document.querySelector(".user_id_err");
                //alert("아이디를 입력하세요");
                txt.textContent = "아이디를 입력하세요";
                user_id.focus();
                return false;
            };

            var user_id_len = user_id.value.length;
            if(user_id_len < 4 || user_id_len > 12){
                var txt = document.querySelector(".user_id_err");
                txt.textContent = "아이디는 4~12글자만 입력할 수 있습니다."
                user_id.focus();
                return false;
            };

            if(!user_pwd.value){
                var txt = document.querySelector(".user_pwd_err");
                txt.textContent = "비밀번호를 입력하세요";
                user_pwd.focus();
                return false;
            };
            
            var pwd_len = user_pwd.value.length;
            if(pwd_len < 8){
                var txt =document.querySelector(".pwd_info");
                txt.textContent = "비밀번호는 최소 8자리 이상입니다.";
                user_pwd.focus();
                return false;                
            };

            if(repwd.value != user_pwd.value){
                var txt =document.querySelector(".repwd_err");
                txt.textContent = "비밀번호가 일치하지 않습니다.";
                repwd.focus();
                return false;      
            };

            if(!user_name.value){
                var txt = document.querySelector(".user_name_err");
                txt.textContent = "이름을 입력하세요";
                user_name.focus();
                return false;
            };

            if(!dob.value){
                var txt = document.querySelector(".dob_err");
                txt.textContent = "생년월일을 입력하세요";
                dob.focus();
                return false;
            };

            if(!mobile.value){
                var txt = document.querySelector(".mobile_err");
                txt.textContent = "전화번호를 입력하세요";
                mobile.focus();
                return false;
            };
            
            var reg = /^[0-9]+$/g;
            if(!reg.test(mobile.value)){
                var txt = document.querySelector(".mobile_err");
                txt.textContent = "전화번호는 숫자만 입력할 수 있습니다.";
                mobile.focus();
                return false;
            };
        
            if(!email_id.value && email_dns.value){
                var txt = document.querySelector(".email_err");
                txt.textContent = "생년월일을 입력하세요";
                email_id.focus();
                return false;
            };

            if(!email_id.value){
                var txt = document.querySelector(".email_err");
                txt.textContent = "이메일을 입력하세요";
                email_id.focus();
                return false;
            };
            if(!email_dns.value){
                var txt = document.querySelector(".email_err");
                txt.textContent = "이메일을 입력하세요";
                email_sel.focus();
                return false;
            };
            if(!addr.value){
                var txt = document.querySelector(".addr_err");
                txt.textContent = "주소를 입력하세요";
                addr.focus();
                return false;
            };

            return true;
        };

        function email_change(){
        var email_dns = document.getElementById("email_dns")
        var email_sel = document.getElementById("email_sel")        
        var idx = email_sel.options.selectedIndex;
        var get_text = email_sel.options[idx].value;

            email_dns.value = get_text;
        };
        
        function search_address(){
            window.open("addr_search.html", "", "width=400, height=400, left=0, top=0");
        };

        function search_id(){
            window.open("search_id.php", "sid", "width=600, height=250, left=0, top=0");
        };

        $(document).ready(function(){
            // $(".btn_idCheck").click(function(){
                $(".user_id").keyup(function(){
                var user_id = $(".user_id").val();
                if(!user_id){
                    $(".user_id_err").html("아이디를 입력하세요.");
                    $(".user_id").focus();
                    return false;
                } else if(user_id.length < 4 || user_id.length > 12){
                    $(".user_id_err").html("아이디는 4~12글자만 입력할 수 있습니다.");
                    $(".user_id").focus();
                    return false;
                } else{
                    $.ajax({
                        url:"../ajax/search_id_result.php",
                        type:"post",
                        data:{user_id:user_id},
                        success:function(data){
                            if((data) == "사용할 수 없는 아이디입니다."){
                                $(".user_id_err").html(data);
                                $(".user_id").focus();
                                return false;
                            } else{
                                $(".user_id_err").html(data);
                            };
                        },
                        error:function(){
                            $(".user_id_err").html("ERROR");
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
                <li class="menu"><a href="../menu_coffee.php">메뉴</a>
                    <ul class="sub">
                        <li><a href="../menu_coffee.php">커피</a></li>
                        <li><a href="../menu_bev.php">음료</a></li>
                        <li><a href="../menu_dessert.php">디저트·식사</a></li>
                        <li><a href="../menu_md">MD상품</a></li>
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
                <li class="login"><a href="login.php">로그인</a></li>
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
        <li class="locate1"><a href="index.php">Home</a></li>
        <li class="locate2"><a href="#">회원가입</a></li>
    </ul>
    </aside>

<section class="join_wrap">
    <h2 class="join_title">할리스 멤버십 회원가입</h2>

    <div class="join3">
    <dl class="join3_pro">
        <dt class="blind">회원가입 단계</dt>
            <dd class="join3_pro1"><span>01.</span> 약관동의</dd>
            <dd class="join3_pro2"><span>02.</span> 회원 정보 입력</dd>
            <dd class="join3_pro3"><span>03.</span> 가입 완료</dd>
        </dl>

<form name="join_info_form" action="insert.php" method="post" onsubmit="return form_check()">
<fieldset>
    
    <legend class="blind">회원 정보 입력</legend>
    <div class="join3_top">
    <p class="txt1">회원 정보 입력</p>
    <p class="txt2">할리스 회원가입에 필요한 고객님의 정보를 아래의 입력란에 정확히 입력해주세요.</p>
    <p class="txt3">*표시 되어진 부분은 필수 항목으로 반드시 작성하셔야 합니다.</p>
    </div>
    
    <div class="join3_bottom">
    <p class="user_id_wrap">
        <label for="user_id">아이디<span class="rq">*</span></label>
        <input type="text" name="user_id" id="user_id" class="user_id" >
        <button type="button" name="user_id" class="btn_idCheck">중복확인</button><br>
        <span class="user_id_err err"></span>
    </p>
    <p class="user_pwd">
        <label for="user_pwd">비밀번호<span class="rq">*</span></label>
        <input type="password" name="user_pwd" id="user_pwd"><br>
        <span class="pwd_info">비밀번호는 최소 8자리 이상입니다.</span><br>
        <span class="user_pwd_err"></span>

    </p>

    <p class="repwd">
        <label for="repwd">비밀번호 확인<span class="rq">*</span></label>
        <input type="password" name="repwd" id="repwd"><br>
        <span class="repwd_err"></span>
    </p>
    
    <p class="user_name">
        <label for="user_name">이름<span class="rq">*</span></label>
        <input type="text" name="user_name" id="user_name"><br>
        <span class="user_name_err"></span>
    </p>
    <p class="dob">
        <label for="dob">생년월일<span class="rq">*</span></label>
        <input type="date" name="dob" id="dob"><br>
        <span class="dob_info">멤버십 등급에 따른 쿠폰을 받아보실 수 있습니다.</span><br>
        <span class="dob_err"></span>
    </p>
    <p class="mobile">
        <label for="mobile">휴대폰<span class="rq">*</span></label>
        <input type="mobile" name="mobile" id="mobile"><br>
        <span class="mobile_txt">' - ' 없이 숫자만 입력</span><br>
        <span class="mobile_err"></span>
        <div class="mobile_check">
            <input type="checkbox" name="mobile_check" id="mobile_check">
            <label for="mobile_check">(선택) 문자를 통한 이벤트 소식 수신에 동의합니다.</label><br>
        </div>
        <span class="mobile_info">할리스의 이벤트 소식, 구매내역 등을 받아보실 수 있습니다.</span>
    </p>

    <p class="email">
        <label for="email_id">이메일<span class="rq">*</span></label>
        <input type="text" name="email_id" id="email_id"><span class="at">@</span><br>
        <input type="text" name="email_dns" id="email_dns">
        <select name="email_sel" id="email_sel" onchange="email_change()">
            <option value="">직접 입력</option>
            <option value="naver.com">네이버</option>
            <option value="hanmail.net">다음</option>
            <option value="gmail.com">구글</option>
        </select><br>
        <span class="email_err"></span>
    </p>

    <p class="addr">
        <label for="postalCode">주소</label>
        <input type="text" name="postalCode" id="postalCode"  readonly>
        <button type="button" name="addr_search" onclick="search_address()">주소 검색</button><br>
        <input type="text" name="addr1" id="addr1" readonly><br>
        <input type="text" name="addr2" id="addr2" size="40" placeholder="상세주소"><br>
        <span class="add_info">등록하신 주소 근처 매장에서 진행하는 이벤트 소식을 알려드립니다.</span><br>
        <span class="addr_err"></span>
    </p>
        
    <button type="submit" name="join">회원가입</button>
    </div>
</fieldset>
</form>
   </div>

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
    
<footer id="footer" class="footer_wrap">
    <div class="footer">
    <h2 class="blind">사이트 이용안내</h2>
    <h3 class="blind">약관 및 정책</h3>
    <ul class="footer_top">
        <li class="foot_txt1"><a href="#">개인정보 처리방침</a></li>
        <li class="foot_txt2"><a href="#">서비스 이용약관</a><li>
        <li class="foot_txt3"><a href="#">멤버십 이용약관</a></li>
        <li class="foot_txt4"><a href="#">고객문의</a></li>
        <li class="foot_txt5"><a href="#">고객 설문</a></li>
        <li class="foot_txt6"><a href="#">사이트맵</a></li>
        <li class="foot_txt7"><a href="#">채용정보</a></li>
    </ul>

    <div class="footer_bottom">
        <div class="foot_txt_wrap1">
        <p class="foot_bottom_txt1">법인명:(주) 할리스에프앤비</p>
        <p class="foot_bottom_txt2">대표자: 신유정</p>
        <p class="foot_bottom_txt3">사업자 등록번호:    211-87-61044</p>
        <p class="foot_bottom_txt4">통신판매업:제2019-서울  종로-0193호</p>
        </div>

        <div class="foot_txt_wrap2">
        <address><a href="#">주소: 서울 특별시 종로구 율곡로 88 삼환빌딩 8층 (운니동)</a></address>
        <p class="foot_bottom_txt5">대표전화:02-2188-7100 (가맹문의:02-6350-7229)</p>
        </div>
        <p class="foot_bottom_txt6">OPYRIGHT (C) HOLLYS COFFE Co., Ltd. All Right Reserved.</p>

    </div>
</div>
</footer>

    
</body>
</html>