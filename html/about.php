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
    <link rel="stylesheet" type="text/css" href="../css/about.css">
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
        <dd class="lnb1"><a href="about.php">할리스 소개</a></dd>
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
        <li class="tap1"><a href="#">할리스 소개</a></li>
        <li class="tap2"><a href="about_history.php">HISTORY</a></li>
        <li class="tap3"><a href="#none">BI 소개</a></li>
    </ul>
    </article>
    </div>

    <aside class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="index.php">Home</a></li>
        <li class="locate2"><a href="#none">ABOUT</a></li>
        <li class="locate3"><a href="#none">할리스 소개</a></li>
    </ul>
    </aside>

    <div class="intro_wrap">
    <section class="intro">
    <h2>커피의 즐거움을 만드는<br><span>'작은 차이의 미학'</span></h2>
    <p>할리스는 ‘의미 있는 작은 차이가 <br>평범함과 특별함을 가르는 기준이 된다’고 생각합니다.</p>
    
    <ul>
    <li>원두에 숨겨진 이러한 커피의 비밀을 하나 하나 밝혀가면서 많은 사람들이 커피와 함께 소중한 순간을 즐기도록 해주는 것이
    바로 할리스가 추구하는 ‘커피의 즐거움’입니다.</li>
    
    <li class="intro_txt">오늘도 할리스는 전세계의 커피 산지를 연구하고, 원두 본연의 맛을 살리기 위한 수많은 블랜딩을 개발하는 등 다양한
    노력을 지속하고 있습니다. 커피가 주는 아름다움을 보다 많은 고객들이 즐길 수있도록, 매 순간 의미 있는작은 차이를
    만들어가는 할리스가 되겠습니다.</li>
    </ul>
    <div class="line"></div>
    </section>
       
    <section class="intro1">
    <h2>01. 커피를 알아가는 즐거움</h2>
    <ul>
    <li class="intro1_txt1">세상에 같은 사람이 존재할 수 없듯이 똑같은 원두도 존재하지 않습니다. 숙련된 바리스타는 산지에 따라 각기 다른 
    원두의 비밀을 밝혀내고 고객의 입맛과 성향을 이해한 후 자신만의 커피 미학으로 섬세하게 커피를 내립니다. 
    그 결과 커피가 줄 수 있는 최상의 즐거움을 제공합니다.</li>

    <li class="intro1_txt2">이 즐거움을 위해 할리스는 1998년 국내 최초 에스프레소 커피 전문점의 문을 연 이래 지속적으로 커피 시장을
    이끄는 새로운 시도를 해왔습니다.할리스연구소에서는 국제공인인증 커피 감별사인 큐그레이더가 커핑 테스트를 
    통해 생두를 엄선하고, 자체 로스팅 공장에서는 각 원산지의 특성을 고려한 프로파일로 로스팅하여 맛의 차이를 
    만듭니다.</li>

    <li class="intro1_txt3">더불어 원두를 태워 강한 맛을 내는 강배전 로스팅으로 그저 진하기만 한 커피를 만드는 대신, 할리스 고유의 로스팅 
    기법과 더블샷을 적용하여 원두고유의 풍부한 향미를 살리고 있습니다. 이로써 할리스는 모두의 일상 깊숙이 들어온
    커피 한 잔의 가치를 높입니다.</li>

    <li class="intro1_txt4">또한 2011년 업계 최초로 학원 인가를 취득, 운영 중인 할리스 아카데미는 많은 커피 애호가 및 창업 희망자를 위한 
    프로그램으로 수준 높은 커피 문화를 만드는 데 기여하고 있습니다. 지식은 쉽게 얻지만, 지혜를 얻는 데는 시간이 
    필요한 법입니다.1998년 이후 이렇듯 성실하게 한 길만 걸으며 체득한 커피에 대한 지혜는 무엇과도 바꿀 수 없는 
    할리스의 소중한 자산임을 자부합니다.</li>
    </ul>
    </section>

    <section class="intro2">
    <h2>02. 커피를 함께하는 즐거움</h2>
    <ul>
    <li class="intro2_txt1">커피는 혼자 즐길 때, 또는 사람들과 함께 할 때 각기 다른 즐거움을 줍니다. 
    할리스에서는 친구, 연인, 가족과 함께 일상 속 즐거운 순간들을 만끽하셔도 좋고, 가끔은 
    혼자만의 시간을 누리셔도 좋습니다. 이를 위해 할리스는 편안하고 여유로운 공간에 
    그 이상의 가치를 담으려 다양한 노력을 하고 있습니다.</li>

    <li class="intro2_txt2">할리스는 강연 프로그램인 ‘School in HOLLYS’를 여는 등 점차 문화와 예술의 공간으로 
    확장되고 있습니다. 책을 가까이 즐길 수 있는 합정 북카페 매장, 자연과 어우러져 이색적인
    풍경을 즐길 수 있는 부산 달맞이 매장과 경주 보불로 매장 등은 새로운 공간으로의 변화를 
    시도하는 할리스의 열정과 의지를 보여줍니다.공간뿐만 아니라 커피와 어우러져 즐거움을 
    주는 요소로서 엄선된 재료로 만든 다양한 디저트 메뉴 또한 할리스의 자랑입니다. 100% 
    국내산 고구마와 고흥 유자 등의 과일, 마다가스카르산 바닐라, 스리랑카산 딤블라 홍차 등 
    커피와 어우러지는 디저트의 재료 역시 커피 원두만큼 깐깐하게 관리되기에 믿을 수 있습니다.
    이 디저트들은 개발단계에서부터 할리스의 음료와의 조화로움을 염두에 둔 덕분에 함께할 때 
    더욱 풍부한 맛을 즐기실 수 있습니다.</li>

    <li class="intro2_txt3">이처럼 할리스는 고객님께 최고의 즐거움과 특별함을 선사하기 위한 노력을 멈추지 않을 것입니다. 특별함을 위한 작은 차이는 이러한 노력에서 비롯됩니다.</li>
    </ul>
    <div class="img"></div>
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