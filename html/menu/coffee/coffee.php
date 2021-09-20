<?php
session_start();
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOLLYS MENU</title>
    <link rel="stylesheet" type="text/css" href="../../../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/com/header_txt.css">
    <link rel="stylesheet" type="text/css" href="../../../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../../../css/menu/coffee/coffee.css">
    <link rel="shortcut icon" type="images/x-icon" href="../../favicon.ico"/>

    <script type="text/javascript" src="../../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../../js/header.js"></script>

    <script type="text/javascript">
    function log_out(){
        var ck = confirm("로그아웃 하시겠습니까?");
        if(ck == true){
            location.href="../../members/logout.php";
        };
    };
    </script>
</head>
<body>
<div class="header_wrap">
    <header id="header">
    
    <div class="header_bottom">
        <h1><a href="../../index.php">할리스 커피</a></h1>

        <nav class="gnb">
        <h2 class="blind">주요 메뉴</h2>
        <ul>
            <li class="menu"><a href="coffee.php">메뉴</a>
                <ul class="sub">
                    <li><a href="coffee.php">커피</a></li>
                    <li><a href="../bev/bev.php">음료</a></li>
                    <li><a href="../dessert/dessert.php">디저트·식사</a></li>
                    <li><a href="../md/md.php">MD상품</a></li>
                </ul>
            </li>
            <li class= "mall"><a href="../../hollys_mall.php">할리스 몰</a>
                <ul class="sub">
                    <li><a href="../../hollys_mall.php">할리스콘</a></li>
                    <li><a href="../../hollys_mall_card.php">할리스카드</a></li>
                    <li><a href="#">구매내역</a></li>
                </ul>
            </li>
            <li class="member"><a href="../../membership.php">멤버십</a>
                <ul class="sub">
                    <li><a href="../../membership.php">스마트오더</a></li>
                    <li><a href="#">멤버십 혜택 안내</a></li>
                    <li><a href="#">My Hollys</a></li>
                </ul>
            </li>
            <li class="news"><a href="../../Hollys_news.php">할리스 뉴스</a>
                <ul class="sub">
                    <li><a href="../../Hollys_news.php">이벤트</a></li>
                    <li><a href="#">공지사항</a></li>
                    <li><a href="#">보도자료</a></li>
                </ul>
            </li>
            <li class="about"><a href="../../about.php">할리스 소개</a>
                <ul class="sub">
                    <li><a href="../../about.php">할리스소개</a></li>
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
            <li class="login"><a href="../../members/login.php">로그인</a></li>
            <li class="register"><a href="../../members/join_term.php">멤버십 가입</a></li>
            <?php }else if($s_id == "admin"){?>
            <li class="login"><a href="../../admin/admin.php">관리자 페이지</a></li>
            <li class="login"><a href="#" title="로그아웃" onclick="log_out()">로그아웃</a></li>
            <?php }else{?>
            <li class="login"><a href="../../members/my_hollys.php">마이페이지</a></li>
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


<main id="main">
    <div class="lnb_wrap">
    <article class="lnb">
    <h2 class="blind">서브메뉴</h2>
    <dl>
        <div class="lnb_top">
        <dt>커피</dt>
        <dd class="main_txt">자체 로스팅한 신선한 원두로 만든 커피</dd>
        </div>
        <div class="lnb_bottom">
        <dd class="lnb1"><a href="coffee.php">커피</a></dd>
        <dd class="lnb2"><a href="../bev/bev.php">음료</a></dd>
        <dd class="lnb3"><a href="../dessert/dessert.php">디저트·식사</a></dd>
        <dd class="lnb4"><a href="../md/md.php">MD 상품</a></dd>  
        </div>
    </dl>
    </article>
    </div>
    
    <div class="tab_wrap">
    <article class="tab">
    <h2 class="blind">탭 메뉴</h2>
    <ul>
        <li class="tab1"><a href="#">전체</a></li>
        <li class="tab2"><a href="coffee_ame.php">아메리카노</a></li>
        <li class="tab3"><a href="coffee_latte.php">라떼</a></li>
        <li class="tab4"><a href="coffee_brew.php">콜드브루</a></li>
    </ul>
    </article>
    </div>

<div class="coffee">
    <aside class="locate">
        <h2 class="blind">사용자 위치</h2>
        <ul>
            <li class="locate1"><a href="../../index.php">Home</a></li>
            <li class="locate2"><a href="#">메뉴</a></li>
            <li class="locate3"><a href="#">커피</a></li>
            <li class="locate4"><a href="#">전체</a></li>
        </ul>
    </aside>

<section class="coffee_all">
    <h2 class="blind">전체</h2>
    <ul>
        <div class="coffee1">
        <li class="coffee1_1">
            <ul>
            <li><a href="ame_preame.php">프리미엄 블렌드 아메리카노</a>
            </ul>
        </li>
        <li class="coffee1_2">
            <ul>
            <li><a href="brew_delight.php">콜드브루딜라이트</a></li> 
            </ul>
        </li>
        <li class="coffee1_3">
            <ul>
            <li><a href="latte_deep.php">프리미엄 블렌드 딥 라떼</a></li>
            </ul>
        </li>
        <li class="coffee1_4">
            <ul>
            <li><a href="latte_double.php">더블샷 바닐라 딜라이트</a></li>
            </ul>
        </li>
        <li class="coffee1_5">
            <ul>
            <li><a href="latte_vanilla.php">바닐라 딜라이트</a></li>
            </ul>
        </li>
        </div>

        <div class="coffee2">
        <li class="coffee2_1">
            <ul>
            <li><a href="latte_ristretto.php">리스트레또 딜라이트</a></li>
            </ul>
        </li>
        <li class="coffee2_2">
            <ul>
            <li><a href="brew_latte.php">콜드브루 라떼</a></li>
            </ul>
        </li>
        <li class="coffee2_3">
            <ul>
            <li><a href="brew_coldbrew.php">콜드브루</a></li>
            </ul>
        </li>
        <li class="coffee2_4">
            <ul>
            <li><a href="latte_machiato.php">카라멜 마키아또</a></li>
            </ul>
        </li>
        <li class="coffee2_5">
            <ul>
            <li><a href="latte_mocha.php">카페모카</a></li>
            </ul>
        </li>
        </div>

        <div class="coffee3">
        <li class="coffee3_1">
            <ul>
            <li><a href="latte_cappuccino.php">카푸치노</a></li>
            </ul>
        </li>
        <li class="coffee3_2">
            <ul>
            <li><a href="latte_latte.php">카페라떼</a></li>
            </ul>
        </li>
        <li class="coffee3_3">
            <ul>
            <li><a href="ame_americano.php">아메리카노</a></li>
            </ul>
        </li>
        <li class="coffee3_4">
            <ul>
            <li><a href="ame_affogato.php">아포카토</a></li>
            </ul>
        </li>
        <li class="coffee3_5">
            <ul>
            <li><a href="ame_espresso.php">에스프레소</a></li>
            </ul>
        </li>
        </div>
    </ul>
</section>
</div>


<div class="quick_wrap">
<section class="quick">
    <h2>QUICK MENU</h2>
    <ul>
        <li class="quick_txt1"><a href="coffee.php">메뉴</a></li>
        <li class="quick_txt2"><a href="#">가맹문의</a></li>
        <li class="quick_txt3"><a href="#">할리스 아카데미<a></li>
        <li class="quick_txt4"><a href="#">기업특판</a></li>
        <li class="quick_txt5"><a href="../../Hollys_news.php">이벤트<a></li>
    </ul>
</section>
</div>
</main>

<footer id="footer" class="footer_wrap">
<div class="footer">
    <ul class="footer_top">
    <h2 class="blind">사이트 이용안내</h2>
    <h3 class="blind">약관 및 정책</h3>
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