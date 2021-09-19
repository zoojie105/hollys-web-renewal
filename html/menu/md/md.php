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
    <title>HOLLYS Dessert</title>
    <link rel="stylesheet" type="text/css" href="../../../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/com/header_txt.css">
    <link rel="stylesheet" type="text/css" href="../../../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../../../css/menu/md/md.css">
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
            <li class="menu"><a href="../coffee/coffee.php">메뉴</a>
                <ul class="sub">
                    <li><a href="../coffee/coffee.php">커피</a></li>
                    <li><a href="../bev/bev.php">음료</a></li>
                    <li><a href="../dessert/dessert.php">디저트·식사</a></li>
                    <li><a href="md.php">MD상품</a></li>
                </ul>
            </li>
            <li class="adv sub">
                <a href="../coffee/latte_vanilla.php">1초에 한잔씩 판매되는 할리스 넘버원 라떼 바닐라 딜라이트</a>
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
            <dt>MD 상품</dt>
            <dd class="lnb1"><a href="../coffee/coffee.php">커피</a></dd>
            <dd class="lnb2"><a href="../bev/bev_latte.php">음료</a></dd>
            <dd class="lnb3"><a href="../dessert/dessert.php">디저트·식사</a></dd>
            <dd class="lnb4"><a href="md.php">MD 상품</a></dd>  
        </dl>
        </article>
        </div>
        
        <div class="tab_wrap">
        <article class="tab">
        <h2 class="blind">탭 메뉴</h2>
        <ul>
            <li class="tab1"><a href="md.php">전체</a></li>
            <li class="tab2"><a href="md_mug.php">머그</a></li>
            <li class="tab3"><a href="md_thum.php">텀블러</a></li>
            <li class="tab4"><a href="md_coffee.php">커피</a></li>
            <li class="tab5"><a href="md_etc.php">기타 상품</a></li>
        </ul>
        </article>
        </div>

<div class="all">
<article class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="../../index.php">Home</a></li>
        <li class="locate2"><a href="../coffee/coffee.php">메뉴</a></li>
        <li class="locate3"><a href="#">MD상품</a></li>
        <li class="locate4"><a href="#">전체</a></li>

    </ul>
</article>

<section class="md_all">
    <h2 class="blind">전체</h2>
    <div class="all1">
    <ul>
        <li class="all1_1">
            <a href="#">투-톤 글라스<br>컵_핑크</a>
        </li>
        <li class="all1_2">
            <a href="#">하프 더블 월 글라스<br>컵_옐로우</a>
        </li>
        <li class="all1_3">
            <ul>
            <li><a href="#">하프 더블 월 글라스<br>컵_그린</a></li>
            </ul>
        </li>
        <li class="all1_4">
            <a href="#">더블 월 스테인리스<br> 머그_브론즈</a>
        </li>
        <li class="all1_5">
            <a href="#">킨토 알프레스코 <br>컵_베이지</a>
        </li>
    </ul>
    </div>
    <div class="all2">
    <ul>
        <li class="all2_1">
            <a href="#">킨토 알프레스코<br> 컵_블랙</a>
        </li> 
        <li class="all2_2">
            <a href="#">킨토 알프레스코<br> 머그_베이지</a>
        </li>
        <li class="all2_3">
            <a href="#">킨토 알프레스코<br> 머그_블랙</a>
        </li>
        <li class="all2_4">
            <a href="bing_snow2.php">데일리 머그</a>
        </li>
        <li class="all2_5">
            <a href="dessert_cream.php">글라스 머그 R</a>
        </li>
    </ul>
    </div>
    <div class="all3">
        <ul>
            <li class="all3_1">
                <a href="dessert_house.php">글라스 머그 G</a>
            </li>
            <li class="all3_2">
                <a href="dessert_ice.php">시그니처 머그<br> R_화이트</a>
            </li>
            <li class="all3_3">
                <a href=".php">시그니처 머그<br> R_레드</a>
            </li>
            <li class="all3_4">
                <a href="dessert_blueberry.php">시그니처 머그<br> G_레드</a>
            </li>
            <li class="all3_5">
                <a href=".php">에스프레소 잔 세트</a>
            </li>
        </ul>
    </div>
    <div class="all4">
        <ul>
            <li class="all4_1">
                <a href="dessertewyork.">우디 보틀 <br>텀블러_라벤더</a>
            </li>
            <li class="all4_2">
                <a href=".php">우디 트라이앵글 <br>텀블러_라벤더</a>
            </li>
            <li class="all4_3">
                <a href=".php">미르 컵 텀블러<br> 16oz_레드</a>
            </li>
            <li class="all4_4">
                <a href=".php">미르 와이드 마우스<br> 텀블러 16oz_화이트</a>
            </li>
            <li class="all4_5">
                <a href="">미르 컵 텀블러<br> 12oz_블랙</a>
            </li>
        </ul>
    </div>
    <div class="all5">
        <ul>
            <li class="all5_1">
                <a href="dessert_egg.php">할리스 월머그 슬릭 L 시그니처_화이트</a>
            </li>
            <li class="all5_2">
                <a href="dessert_honey.php">할리스 월머그 슬릭 L 시그니처_레드</a>
            </li>
            <li class="all5_3">
                <a href="dessert_chipscone.php">할리스 월머그 슬릭 시그니처</a>
            </li>
            <li class="all5_4">
                <a href="dessert_berryscrone.php">할리스 월머그 슬릭 굿데이</a>
            </li>
            <li class="all5_5">
                <a href="meal_halfegg.php">디카페인<br>아메리카노 30T</a>
            </li>
        </ul>
    </div>
    <div class="all6">
        <ul>
            <li class="all6_1">
                <a href="meal_beef.php">디카페인<br> 아메리카노 12T</a>
            </li>
            <li class="all6_2">
                <a href="meal_rice.php">아이스 콜드브루 30T</a>
            </li>
            <li class="all6_3">
                <ul>
                <li><a href="meal_chicken.php">아이스 콜드브루</a></li>
                </ul>
            </li>
            <li class="all6_4">
                <a href="meal_meatball.php">바닐라 딜라이트</a>
            </li>
            <li class="all6_5">
                <a href="meal_olive.php">리얼 벨지안<br> 초코 라떼</a>
            </li>
        </ul>
    </div>
    <div class="all7">
        <ul>
            <li class="all7_1">
                <a href="meal_seafood.php">카페라떼</a>
            </li>
            <li class="all7_2">
                <a href="meal_chicken.php">시그니처<br>아메리카노</a>
            </li>
            <li class="all7_3">
                <a href="meal_meatball.php">헤이즐넛<br>아메리카노</a>
            </li>
            <li class="all7_4">
                <a href="meal_pesto.php">시그니처<br>에스프레소 블렌드</a>
            </li>
            <li class="all7_5">
                <a href="meal_olive.php">시그니처 드립백</a>
            </li>
        </ul>
    </div>
    <div class="all8">
        <ul>
            <li class="all8_1">
                <a href="meal_seafood.php">데이드림 드립백</a>
            </li>
            <li class="all8_2">
                <a href="meal_risotto.php">이클립스 드립백</a>
            </li>
            <li class="all8_3">
                <a href="meal_croque.php">리버스 마이크로 <br>커피 드립퍼</a>
            </li>
            <li class="all8_4">
                <a href="meal_soup.php">킨토 알프레스코<br> 플레이트_베이지</a>
            </li>
            <li class="all8_5">
                <a href="meal_soup.php">킨토 알프레스코<br> 플레이트_블랙</a>
            </li>
        </ul>
    </div>
</section>
</div>







<div class="quick_wrap">
<section class="quick">
    <h2>QUICK MENU</h2>
    <ul>
        <li class="quick_txt1"><a href="../coffee/coffee.php">메뉴</a></li>
        <li class="quick_txt2"><a href="#">가맹문의</a></li>
        <li class="quick_txt3"><a href="#">할리스 아카데미<a></li>
        <li class="quick_txt4"><a href="#">기업특판</a></li>
        <li class="quick_txt5"><a href="../../Hollys_news.php">이벤트<a></li>
    </ul>
</section>
</div>
</main>

<div class="footer_wrap">
<footer id="footer">
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
</div>

</body>
</html>