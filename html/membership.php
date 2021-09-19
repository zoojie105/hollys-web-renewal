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
    <title>Hollys Membership</title>
    <link rel="stylesheet" type="text/css" href="../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/com/header_txt.css">
    <link rel="stylesheet" type="text/css" href="../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/membership.css">
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
                <li class="adv sub">
                    <a href="latte_vanilla.php">1초에 한잔씩 판매되는 할리스 넘버원 라떼 바닐라 딜라이트</a>
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
<div class="background">
    <div class="lnb_back">
    <article class="lnb">
    <h2 class="blind">서브메뉴</h2>
    <dl>
        <dt>MEMBERSHIP</dt>
        <li class="lnb1"><a href="membership.php">스마트 오더</a></li>
        <li class="lnb2"><a href="#">멤버십 혜택 안내</a></li>
        <li class="lnb3"><a href="members/my_hollys.php">My Hollys</a></li>
    </dl>
    </article>
    <div class="lnb_box"></div>
    </div>


    <aside class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="index.php">Home</a></li>
        <li class="locate2"><a href="#">MEMBERSHIP</a></li>
        <li class="locate3"><a href="#">스마트 오더</a></li>
    </ul>
    </aside>
    
    <section class="order">
    <h2>스마트오더</h2>
        <ul>
        <li class="order_txt1">간편하고 빠르게 주문하고싶다면</li>
        <li class="order_txt2">나만의 모바일 오더 서비스</li>
        <li class="order_txt3">주문과 결제, 멤버십 혜택까지<br>더 빠르고 간편하게 할리스커피를 즐기세요</li>
        </ul>
        <div class="bar1"></div>
        <div class="bar2"></div>
    </section>
    
    <section class="order_process">
        <div class="order1">
        <h2>01</h2>
        <p><span>다양한 옵션</span>을<br>간편하게 즐기고 싶다면,<br><span>나만의 메뉴</span>를 등록하세요</p>
        <dl>
            <dt>옵션 선택</dt>
            <dd class="option1">샷</dd>
            <dd class="option2">시럽</dd>
            <dd class="option3">우유</dd>
            <dd class="option4">토핑<br>·기타</dd>
        </dl>
        <ul class="option_img">
        <li class="option_img1">나만의 메뉴</li>
            <li class="option_img2">주문 현황</li>
        </ul>
        
        </div>

        <div class="order2">
        <h2>02</h2>
        <p><span>내 위치와 가까운 매장</span>을<br>찾아보고, <span>자주 방문하는<br>매장도 등록</span>하세요</p>
        </div>

        <div class="order3">
        <h2>03</h2>
        <P><span>대표카드 설정</span>하고,<br>현금처럼 <span>편리하게<br>결제</span>하세요</P>
        </div>

        <div class="order4">
        <h2>04</h2>
        <p>주문 전<span>내가 선택한 메뉴</span>의<br><span>영양정보를 확인</span>하세요</p>
        <div class="order_img4_1"></div>
        <div class="arrow"></div>
        </div>
    </section>

    <div class="down_wrap">
    <section class="down">
        <h2>DOWNLOAD</h2>
        <ul>
            <li class="down_txt">지금 바로<span>할리스 APP을</span> 다운받고<br> 편리한 <span>스마트오더 서비스</span>를 경험하세요</li>
            <div class="store">
            <li class="down_button1"><a href="https://play.google.com/store/apps/details?id=com.kr.hollyscoffee" target="blank">구글 플레이스토어</a></li>
            <li class="down_button2"><a href="https://apps.apple.com/kr/app/apple-store/id956138792" target="blank">앱스토어</a></li>
            </div>
        </ul>
        <div class="line"></div>
    </section>
    </div>


<div class="quick_wrap">
    <section class="quick">
        <h2>QUICK MENU</h2>
        <ul>
            <li class="quick_txt1"><a href="menu/coffee/coffee.php">메뉴</a></li>
            <li class="quick_txt2"><a href="#">가맹문의</a></li>
            <li class="quick_txt3"><a href="#">할리스 아카데미<a></li>
            <li class="quick_txt4"><a href="#">기업특판</a></li>
            <li class="quick_txt5"><a href="Hollys_news.php">이벤트<a></li>
        </ul>
    </section>
    </div>
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