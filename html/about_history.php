<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/com/header_txt.css">
    <link rel="stylesheet" type="text/css" href="../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/about_history.css">
    <link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>

    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/header.js"></script>
    
    <script type="text/javascript">
    function log_out(){
        var ck = confirm("로그아웃 하시겠습니까?");
        if(ck == true){
            location.href="members/logout.php";
        };
    };
    </script>

</head>
<body>

<div class="header_wrap">
        <header id="header">
        <div class="header_bottom">
            <h1><a href="index.php">할리스 커피</a></h1>
    
            <nav class="gnb">
            <h2 class="blind">주요 메뉴</h2>
            <ul>
                <li class="menu"><a href="menu/coffee/coffee.php">메뉴</a>
                    <ul class="sub">
                        <li><a href="menu/coffee/coffee.php">커피</a></li>
                        <li><a href="menu/bev/bev.php">음료</a></li>
                        <li><a href="menu/dessert/dessert.php">디저트·식사</a></li>
                        <li><a href="menu/md/md.php">MD상품</a></li>
                    </ul>
                </li>
                <li class= "mall"><a href="hollys_mall.php">할리스 몰</a>
                    <ul class="sub">
                        <li><a href="hollys_mall.php">할리스콘</a></li>
                        <li><a href="hollys_mall_card.php">할리스카드</a></li>
                        <li><a href="#">구매내역</a></li>
                    </ul>
                </li>
                <li class="member"><a href="membership.php">멤버십</a>
                    <ul class="sub">
                        <li><a href="membership.php">스마트오더</a></li>
                        <li><a href="#">멤버십 혜택 안내</a></li>
                        <li><a href="members/my_hollys.php">My Hollys</a></li>
                    </ul>
                </li>
                <li class="news"><a href="Hollys_news.php">할리스 뉴스</a>
                    <ul class="sub">
                        <li><a href="Hollys_news.php">이벤트</a></li>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">보도자료</a></li>
                    </ul>
                </li>
                <li class="about"><a href="about.php">할리스 소개</a>
                    <ul class="sub">
                        <li><a href="about.php">할리스소개</a></li>
                        <li><a href="#">매장 검색</a></li>
                        <li><a href="about_academy.php">할리스 아카데미</a></li>
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
            <li class="login"><a href="members/login.php">로그인</a></li>
            <li class="register"><a href="members/join_term.php">멤버십 가입</a></li>
            <?php }else if($s_id == "admin"){?>
            <li class="login"><a href="admin/admin.php">관리자 페이지</a></li>
            <li class="login"><a href="#" title="로그아웃" onclick="log_out()">로그아웃</a></li>
            <?php }else{?>
            <li class="login"><a href="members/my_hollys.php">마이페이지</a></li>
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
    <div class="lnb_wrap">
    <article class="lnb">
    <h2 class="blind">서브메뉴</h2>
    <dl>
        <dt>ABOUT</dt>
        <dd class="lnb1"><a href="#">할리스 소개</a></dd>
        <dd class="lnb2"><a href="#none">매장 검색</a></dd>
        <dd class="lnb3"><a href="about_academy.php">할리스 아카데미</a></dd>
        <dd class="lnb4"><a href="#none">채용 안내</a></dd>
        <dd class="lnb5"><a href="#none">가맹 문의</a></dd>
        <dd class="lnb6"><a href="#none">B2B사업 문의</a></dd>
    </dl>
    </article>
    </div>

    <div class="tap_wrap">
    <article class="tap">
    <h2 class="blind">탭 메뉴</h2>
    <ul>
        <li class="tap1"><a href="about.php">할리스 소개</a></li>
        <li class="tap2"><a href="#">HISTORY</a></li>
        <li class="tap3"><a href="#none">BI 소개</a></li>
    </ul>
    </article>
    </div>

    <aside class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="index.php">Home</a></li>
        <li class="locate2"><a href="#none">ABOUT</a></li>
        <li class="locate3"><a href="#none">HISTORY</a></li>
    </ul>
    </aside>

    <div class="cont_wrap">
    <section class="cont_top">
    <h2>HISTORY</h2>
    <h3>할리스의 탄생 그리고 오늘</h3>
    <ul>
        <li>할리스(Hollys)는 1998년 6월 서울 강남에 한국 최초로 에스프레소 전문점을 오픈한 커피 브랜드 입니다.</li>
        <li>부드럽고 깊은 커피 맛을 선호하는 한국 사람들의 입맛에 맞게 오픈 초창기부터 원두를 독자적으로 로스팅해 고객들의 사랑을 받고 있으며,</li>
        <li>할리스만의 시그니처 메뉴 확립은 물론, 소비자가 시간대별로 다양하게 즐길 수 있는 베이커리나 플레이트 등 메뉴 라인업을 확장하고 있습니다.</li>
        <li>또한 소비자 이용행태를 반영해 상권 별로 1인 좌석, 그룹석, 드라이브 스루 등 맞춤화된 매장을 선보이고 있습니다. 현재 약 510개의 매장을 운영하고 있으며,<br> 트렌드를 선도하는 다양한 활동으로 해마다 두 자릿수 성장을 이어가며 대한민국 대표 커피전문기업으로 자리매김하고 있습니다.</li>
    </ul>    
    </section>
    
    <section class="cont_bottom">
    <h2>history of hollys</h2>
    <div class="line">
    <div class="cont1_wrap">
    <ul class="cont1">
        <li class="year">1988년</li>
        <li class="txt1">할리스 회사창립</li>
        <li class="txt2">1호점 '강남점' 오픈</li>
    </ul>
    </div>
    <ul class="cont2">
        <li class="year">2003년</li>
    </ul>
    <ul class="cont3">
        <li class="year_s">2005년</li>
        <li class="txt1">50호점 오픈</li>
    </ul>
    <ul class="cont4">
        <li class="year_s">2007년</li>
        <li class="txt1">100호점 오픈</li>
    </ul>
    <ul class="cont5">
        <li class="year">2008년</li>
    </ul>
    <div class="cont6_wrap">
    <ul class="cont6">
        <li class="year_s">2009년</li>
        <li class="txt1">로스팅 센터 오픈</li>
        <li class="txt2">200호점 오픈</li>
    </ul>
    </div>
    <ul class="cont7">
        <li class="year_s">2011년</li>
        <li class="txt1">커피 아카데미 서울 캠퍼스 오픈</li>
    </ul>
    <div class="cont8_wrap">
    <ul class="cont8">
        <li class="year_s">2012년</li>
        <li class="txt1">커피 아카데미 부산 캠퍼스 오픈</li>
        <li class="txt2">곤지암 물류센터 오픈</li>
        <li class="txt3">멤버십 서비스 론칭</li>
    </ul>
    </div>
    <ul class="cont9">
        <li class="year">2013년</li>
        <li class="txt1">창립 15주년</li>
    </ul>
    <div class="cont10_wrap">
    <ul class="cont10">
        <li class="year_s">2014년</li>
        <li class="txt1">할리스 페스티벌 개최</li>
        <li class="txt2">할리스 클럽 1호점 론칭</li>
    </ul>
    </div>
    <ul class="cont11">
        <li class="year">2015년</li>
        <li class="txt1">할리스 멤버십 앱(APP)서비스 론칭</li>
    </ul>
    <ul class="cont12">
        <li class="year_s">2016년</li>
        <li class="txt1">장애인 일자리 창출 서울시장 표창</li>
        <li class="txt2">제 1회 할리스타 챔피언십 개최</li>
    </ul>
    <div class="cont13_wrap">
    <ul class="cont13">
        <li class="year_s">2017년</li>
        <li class="txt1">직영점 100개점 돌파</li>
        <li class="txt2">드라이브스루(Drive Thru) 대전도안 DT점 오픈</li>
    </ul>
    </div>
    <div class="cont14_wrap">
    <ul class="cont14">
        <li class="year_s">2018년</li>
        <li class="txt1">창립 20주년</li>
    </ul>
    </div>
    </div>
    <img src="../images/sub/about/history/2018.png" alt="할리스 텀블러 이미지"/>
    </section>
    </div>
    

    <div class="quick_wrap">
    <section class="quick">
        <h2>QUICK MENU</h2>
        <ul>
            <li class="quick_txt1"><a href="menu/coffee/coffee.php">메뉴</a></li>
            <li class="quick_txt2"><a href="#">가맹문의</a></li>
            <li class="quick_txt3"><a href="about_academy.php">할리스 아카데미</a></li>
            <li class="quick_txt4"><a href="#">기업특판</a></li>
            <li class="quick_txt5"><a href="Hollys_news.php">이벤트</a></li>
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
    </div>
    </footer>
    
</body>
</html>