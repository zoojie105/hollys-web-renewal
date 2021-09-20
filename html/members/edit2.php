<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";

include "../../inc/dbcon.php";
$sql = "select * from members where idx = $s_idx;";
$result = mysqli_query($dbcon,$sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);

if(!$s_idx){
    echo "
    <script type='text/javascript'>
    alert('로그인 후 이용 가능합니다')
    location.href='login.php'
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
    <title>My Hollys</title>
    <link rel="stylesheet" type="text/css" href="../../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/header_txt.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../../css/edit2.css">
    <link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>

    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
    <script type="text/javascript" src="../../js/edit2.js"></script>

    <script>
        function form_check(){
            var user_pwd = document.getElementById("user_pwd");
            var re_pwd = document.getElementById("re_pwd");

            if(user_pwd.value){
                if(user_pwd.value != re_pwd.value){
                alert("비밀번호를 확인해주세요");
                re_pwd.focus();
                return false;
                };
            };

            return true;
        };
        
        function select_email(){
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");
            var idx = email_sel.options.selectedIndex;
            var rtn_val = email_sel.options[idx].value;
            email_dns.value = rtn_val;
        };
        function search_addr(){
            window.open("addr_search.html", "addr", "width=500, height=400, left=0, top=0");
        };
        
    </script>
    <script type="text/javascript">
    function log_out(){
        var ck = confirm("로그아웃 하시겠습니까?");
        if(ck == true){
            location.href="logout.php";
        };
    };
    function del_mem(){
        var ck = confirm("정말 탈퇴하시겠습니까?\n탈퇴한 아이디는 다시 사용하실 수 없습니다.");
        if(ck){
            location.href="delete.php";
        };
    };
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
            <?php if(!$s_id){?>
            <li class="login"><a href="login.php">로그인</a></li>
            <li class="register"><a href="join_term.php">멤버십 가입</a></li>
            <?php }else if($s_id == "admin"){?>
            <li class="login"><a href="admin/admin.php">관리자 페이지</a></li>
            <li class="login"><a href="#" title="로그아웃" onclick="log_out()">로그아웃</a></li>
            <?php }else{?>
            <li class="login"><a href="my_hollys.php">마이페이지</a></li>
            <li class="login"><a href="#" title="로그아웃" onclick="log_out()">로그아웃</a></li>
            <?php }; ?>
                <li class="customer"><a href="#">고객센터</a></li>
                <li class="fran"><a href="#">창업 설명회</a></li>
            </ul>
            </div>
        </div>
    
        </header>
    <div class="sub_box"></div>
</div>

<main id="main" class="main">
<div class="lnb_back">
    <article class="lnb">
    <h2 class="blind">서브메뉴</h2>
    <dl>
        <dt>MEMBERSHIP</dt>
        <div class="lnb_bottom">
        <dd class="lnb1"><a href="../membership.php">스마트 오더</a></dd>
        <dd class="lnb2"><a href="#">멤버십 혜택 안내</a></dd>
        <dd class="lnb3"><a href="#">My Hollys</a></dd>
        </div>
    </dl>
    </article>
    <div class="lnb_box"></div>
    </div>

<div class="tab_wrap">
<article class="tab">
<h2 class="blind">탭 메뉴</h2>
<ul>
    <li class="tab1"><a href="my_hollys.php">MY 멤버십</a></li>
    <li class="tab2"><a href="#">MY 쿠폰</a></li>
    <li class="tab3"><a href="#">MY 할리스카드</a></li>
    <li class="tab4"><a href="#">MY 매장</a></li>
    <li class="tab5"><a href="edit1.php">회원정보 관리</a></li>
</ul>
</article>
</div>

<aside class="locate">
<h2 class="blind">사용자 위치</h2>
<ul>
    <li class="locate1"><a href="../index.php">Home</a></li>
    <li class="locate2"><a href="../membership.php">MEMBERSHIP</a></li>
    <li class="locate3"><a href="my_hollys.php">My Hollys</a></li>
    <li class="locate4"><a href="edit1.php">회원정보 관리</a></li>
</ul>
</aside>

<form name="edit2_form" action="edit_insert.php" method="post" onsubmit="return form_check()">
<fieldset>
<legend><img src="../../images/sub/Membership/my_hollys/tab5/title.jpg" alt="회원정보 관리"></legend>
<div class="tab_cont">
<div class="title">
    <ul>
        <li class="title1"><a href="#none">회원 정보 확인 및 수정</a></li>
        <li class="title2"><a href="#none">회원 탈퇴</a></li>
    </ul>
    <div class="top_line"></div>
</div>
<section class="modify_info">
    <h2 class="blind">회원 정보 확인 및 수정</h2>
    <div class="modify_info1">
    <h3>기본 정보</h3>
        <ul>
            <li class="th info1">이름<span><?php echo $array["user_name"];?></span></li>
            <li class="th info2">휴대폰 번호<span><?php echo $array["mobile"];?></span></li>
            <li class="info2_1">이름, 휴대폰 번호 수정은 본인명의 휴대폰 인증 후 수정 가능합니다.</li>
        </ul>
        <button type="button" name="modify_small">수정</button>
        <ul>
            <li class="th info3">아이디<span><?php echo $array["user_id"];?></span></li>
            <li class="th info4">
                <label for="user_pwd" class="txt1">비밀번호 변경</label>
                <input type="password" name="user_pwd" id="user_pwd">
                <a href="#none" title="영문, 특수기호, 숫자 조합으로 8자이상"></a>
            </li>
            <li class="th info5">
                <label for="re_pwd" class="txt2">비밀번호 확인</label>
                <input type="password" name="re_pwd" id="re_pwd">
            </li>
        </ul>
    </div>

    <div class="modify_info2">
        <h3>부가정보</h3>
        <ul>
            <li class="th info1">
                <?php
                $email = $array["email"];
                $email= explode("@", $email);
                ?>
                <label for="email_id">이메일</label>
                <input type="text" name="email_id" id="email_id" value="<?php echo $email[0]?>"><span class="at"><span>@</span>
                <input type="text" name="email_dns" id="email_dns" value="<?php echo $email[1]?>">
                <select name="email_sel" id="email_sel" onchange="select_email()">
                <option value="">직접 입력</option>
                <option value="naver.com">네이버</option>
                <option value="hanmail.net">다음</option>
                <option value="gmail.com">구글</option>
                </select><br>
            </li>
            <li class="th info2">
                <label for="postalCode">주소</label>
                <input type="text" name="postalCode" id="postalCode" readonly value="<?php echo $array["postalCode"];?>">
                <button type="button" name="addr_search" onclick="search_addr()">주소 검색</button><br>
                <input type="text" name="addr1" id="addr1" readonly value="<?php echo $array["addr1"];?>"><br>
                <input type="text" name="addr2" id="addr2" size="40" value="<?php echo $array["addr2"];?>"><br>
            </li>
            <li class="th info3">
                <label for="dob">생년월일</label>
                <input type="date" name="dob" id="dob" value="<?php echo $array["dob"];?>"><br>
            </li>
            <li class="th info4">
                현금영수증 
                <span class="txt1">현금영수증 발급 정보를 저장해 놓으면 결제시 현금영수증이 자동 발급됩니다.</span><br>
                <input type="radio" name="check" value="none" id="cash" checked>
                <label for="cash" class="txt2">미발행</label><br>

                <input type="radio" name="check" class = "check" value="per:" id="per">
                <label for="per" class="txt3">개인 소득공제(휴대폰 번호)</label><br>
                <input type="text" name="per" class="per_txt per1" readonly><br>

                <input type="radio" name="check" class = "check" value="biz:" id="biz">
                <label for="biz" class="txt4">사업자 지출증빙용(사업자등록 번호)</label><br>              
                <input type="text" name="biz" class="biz1" readonly><br>
                <span class="txt5">* '-'하이폰 없이 입력</span>
            </li>
        </ul>
        <div class="btn_wrap">
            <button type="submit" name="modify">수정</button>
            <button type="button" name="cancel" onclick="history.back()">취소</button>
        </div>
    </div>
  
</section>

<section class="del_info">
    <h2 class="blind">회원 탈퇴</h2>
    <div class="del_info1">
    <p class="txt1">그동안 저희 할리스 웹사이트를 이용해주셔서 감사합니다.</p>
    <p class="txt2">사이트 이용에 불편하셨던 점 사과드리며, 앞으로 더욱 좋은 서비스로 보답할 수 있도록 노력하겠습니다.</p>
        <dl>
            <dt>회원탈퇴 유의사항</dt>
            <dd>- 회원 탈퇴 후 재가입으로 인한 부정 사용 및 피해 예방을 위하여 30일 이내 재가입이 어렵습니다.</dd>
            <dd>- 회원 탈퇴시, 보유하신 멤버십 적립 내용 및 헤택이 모두 소멸되며, 할리스 홈페이지의 모든 서비스를 이용하실 수 없습니다.</dd>
            <dd>- 소멸된 내용은 복구가 불가능하오니 신중하게 결정해 주시기 바랍니다.</dd>
            <dd>- 탈퇴 후 30일간 재가입 방지 및 포인트 불법 이용 및 부정행위를 방지하기 위해 회원님의 아이디를 포함한 회원 정보가 보존됩니다.</dd>
            <dd class="txt3">(회원가입 시 동의하신 개인정보 처리방침에 명시한 파기절차와 방법에 따라 30일 후 회원 정보를 지체없이 파기합니다.)</dd>
        </dl>
    </div>
    <div class="del_info2">
        <ul>
            <li class="th info1">아이디<span><?php echo $array["user_id"]?></span></li>
            <li class="th info2"><label for="del_pwd">비밀번호</label>
                <input type="password" name="del_pwd" class="del_pwd">
            </li>
            <li>
                <ul>
                    <li class="th info3">탈퇴사유
                        <span>탈퇴 사유를 입력해주세요</span><br>
                        <input type="text" name="reason" class="reason">
                    </li>
                </ul>
            </li>
        </ul>
        <div class="btn_wrap">
            <button type="button" name="delete" onclick="del_mem()">탈퇴</button>
            <button type="button" name="cancel">취소</button>
        </div> 
    </div>

</section>
</div>
</fieldset>
</form> 


<div class="quick_wrap">
    <section class="quick">
        <h2>QUICK MENU</h2>
        <ul>
            <li class="quick_txt1"><a href="../menu/coffee/coffee.php">메뉴</a></li>
            <li class="quick_txt2"><a href="#">가맹문의</a></li>
            <li class="quick_txt3"><a href="#">할리스 아카데미<a></li>
            <li class="quick_txt4"><a href="#">기업특판</a></li>
            <li class="quick_txt5"><a href="../Hollys_news.php">이벤트<a></li>
        </ul>
    </section>
    </div>

</main>
   
<div class="footer_wrap">
<footer id="footer" class="footer">
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
</footer>
</div>
    

</body>
</html>