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
    <title>Hollys Coffee</title>
    <link rel="stylesheet" type="text/css" href="../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>

    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/index_gnb.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/com/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/jquery.bxslider.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.slider').bxSlider({
        auto: true,
        autoHover:true,
        pager: true,
        conrtrols:false,
        speed: 700,

        });
       
        $('.sns_img_wrap').bxSlider({
            minSlides : 4,
            maxSlides : 4,
            slideWidth : 150,
            slideMargin : 45,
            auto: true,
            autoHover:true,
            speed: 700,
            touchEnabled: (navigator.maxTouchPoints>0),
            
        });

        $('.service_slider').bxSlider({
            slideWidth : 1000,
            auto: false,
            autoHover:true,
            speed: 700,
            touchEnabled: (navigator.maxTouchPoints>0)

        });
    });

    </script>   
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
<header id="header" class="header">
<div class="header_bottom">
    <h1>
        <a href="#"><img src="../images/logo.jpg" alt="할리스커피 로고"/></a>
    </h1>
    <nav class="gnb">
        <h2 class="blind">주요 메뉴</h2>
        <ul class="gnb_wrap">
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
            <li class="academy"><a href="#">아카데미</a></li>
            <li class="language">
                <a href="#none">
                Language <span class="down">선택하기</span>
                </a>
                <ul>
                <li class="lang1"><a href="#">English</a></li>
                <li class="lang2"><a href="#">中文</a></li>
                <li class="lang3"><a href="#">한국어</a></li>
                </ul>
            </li>
            <li class="fran"><a href="#">창업 설명회</a></li>
        </ul>
    </div>
</div>
<div class="sub_box"></div>
</header>
</div>

    <main id="main">
    <section class="main_img">
       <h2  class="blind">주요 소식</h2> 
        <ul class="slider">
            <li class="main_img1">
                <img src="../images/main_img1.jpg" alt="싱그러운 봄, 생딸기주스, 딸기라떼, 딸기 레몬티"/>
            </li>
            <li class="main_img2">
                <img src="../images/main_img2.jpg" alt="딸기 가득한 봄"/>
            </li>
            <li class="main_img3">
                <img src="../images/main_img3.jpg" alt="할리스 시그니처 케이크로 담다, 딸기 치즈케이크, 딸기 치즈게익 할리치노" />
            </li>
        </ul>
    </section>

    <div class="best_wrap">
    <section class="best">
        <h2>베스트 메뉴</h2>
        <p>할리스커피의 인기메뉴</p>
        <img src="../images/circle.png" alt="애니메이션" class="circle">
       
        <dl class="best1">
            <dt><a href="menu/coffee/latte_vanilla.php">best 1</a></dt>
            <dd>바닐라 딜라이트</dd>
        </dl>
        <div class="best_no">
        <dl class="best2">
            <dt><a href="menu/bev/holly_strawberry.php">best 2</a></dt>
            <dd>딸기 치즈케잌<br> 할리치노</dd>
        </dl>

        <dl class="best3">
            <dt><a href="menu/coffee/latte_machiato.php">best 3</a></dt>
            <dd>카라멜 마키아또</dd>
        </dl>

        <dl class="best4">
            <dt><a href="menu/bev/latte_sweet.php">best 4</a></dt>
            <dd>우리 고구마 라떼</dd>
        </dl>
        </div>
    </section>
    </div>
    
    <div class="sevice_wrap">
    <section class="service">
        <h2 class="blind">할리스 서비스</h2>
        <div class="service_slider">
        <div class="slider1">
            <dl class="slider1_1">
            <dt>Membership</dt>
                <dd class="center_txt1">할리스 커피 멤버십</dd>
                <dd class="center_txt2">할리스 커피 멤버십 'CROWN'으로<br> 다양한 혜택을 즐겨보세요</dd>
                <dd><a href="#"><img src="../images/service_member_center.jpg" alt="멤버십 크라운"/></a></dd>
            </dl>
            <dl class="slider1_2">
            <dt >franchise</dt>
                <dd class="txt1">가맹문의</dd>
                <dd class="txt2">할리스 비전과 미래에<br> 동참해주실 점주님을 모십니다.</dd>
                <dd><a href="#"><img src="../images/service_franchise.jpg" alt="할리스 매장"/></a></dd>
            </dl>
            <dl class="slider1_3">
            <dt>Gift Card</dt>
                <dd class="txt1">할리스카드</dd>
                <dd class="txt2">할리스카드로 쉽고 간편하게<br> 소중한 사람들에게 마음을 전하세요</dd>
                <dd><a href="hollys_mall_card.php"><img src="../images/service_card.jpg" alt="할리스 카드"/></a></dd>
            </dl>
        </div>
        <div class="slider2">
            <dl class="slider2_1">
            <dt>Gift Card</dt>
                <dd class="center_txt1">할리스카드</dd>
                <dd class="center_txt2">할리스카드로 쉽고 간편하게<br> 소중한 사람들에게 마음을 전하세요</dd>
                <dd><a href="hollys_mall_card.php"><img src="../images/service_card_center.jpg" alt="할리스 카드"/></a></dd>
            </dl>
            <dl class="slider2_2">
            <dt>Membership</dt>
                <dd class="txt1">할리스 커피 멤버십</dd>
                <dd class="txt2">할리스 커피 멤버십 'CROWN'으로<br> 다양한 혜택을 즐겨보세요</dd>
                <dd><a href="#"><img src="../images/service_member.jpg" alt="멤버십 크라운"/></a></dd>
            </dl>
            </dl>
            <dl class="slider2_3">
            <dt >franchise</dt>
                <dd class="txt1">가맹문의</dd>
                <dd class="txt2">할리스 비전과 미래에<br> 동참해주실 점주님을 모십니다.</dd>
                <dd><a href="#"><img src="../images/service_franchise.jpg" alt="할리스 매장"/></a></dd>
        </div>
        <div class="slider3">
            <dl class="slider3_1">
            <dt >franchise</dt>
                <dd class="center_txt1">가맹문의</dd>
                <dd class="center_txt2">할리스 비전과 미래에<br> 동참해주실 점주님을 모십니다.</dd>
                <dd><a href="#"><img src="../images/service_franchise_center.jpg" alt="할리스 매장"/></a></dd>
            </dl>
            <dl class="slider3_2">
            <dt>Gift Card</dt>
                <dd class="txt1">할리스카드</dd>
                <dd class="txt2">할리스카드로 쉽고 간편하게<br> 소중한 사람들에게 마음을 전하세요</dd>
                <dd><a href="hollys_mall_card.php"><img src="../images/service_card.jpg" alt="할리스 카드"/></a></dd>            
            </dl>
            <dl class="slider3_3">
            <dt>Membership</dt>
                <dd class="txt1">할리스 커피 멤버십</dd>
                <dd class="txt2">할리스 커피 멤버십 'CROWN'으로<br> 다양한 혜택을 즐겨보세요</dd>
                <dd><a href="#"><img src="../images/service_member.jpg" alt="멤버십 크라운"/></a></dd>
            </dl>
        </div>
        </div>
    </section>
    </div>

    <div class="order_wrap">
    <section class="order">
        <h2>스마트오더</h2>
        <dl>
            <dt>편리한 주문 서비스</dt>
                <dd class="order_txt1">스마트오더</dd>
                <dd class="order_txt2">주문과 결제, 멤버십 혜택까지<br> 더 빠르고 더 간편하게   할리스커피를 즐기세요</dd>
                <dd class="order_txt3">지금 바로 할리스 APP을 다운받고<br> 편리한 스마트 오더 서비스를 경험하세요</dd>
                <dd class="order_img"><a href="membership.php">스마트 오더 사용방법</a></dd>
                <dd class="order_download">
                    <p>DOWNLOAD</p>
                <a href="https://play.google.com/store/apps/details?id=com.kr.hollyscoffee" class="google" target="blank">플레이 스토어</a>
                <a href="https://apps.apple.com/kr/app/apple-store/id956138792" class="app" target="blank">앱 스토어</a>
                </dd>
        </dl>
    </section>
    </div>

    <div class="store_wrap">
    <section class="store">
        <h2 class="blind">매장 찾기</h2>
        <p class="store_txt1">지금 바로 가까이에서 경험해보세요</p>
        <p class="store_txt2">고객님과 가장 가까이 있는 <span>할리스 커피 매장 찾기</span></p> 
        <ul class="store_txt">
            <li>편하게 대화할 수 있는 <span class="store_txt3">'할리스 사랑방'</span></li>
            <li>다수의 1~2인석으로 공부하''기 좋은 <span class="store_txt4">'할리스 도서관'</span></li>
            <li>다수의 그룹석으로 업무나 미팅하기 좋은 <span class="store_txt5">'할리스 오피스'</span></li>
            <li>간편하고 맛있는 식사를 즐길 수 있는 <span class="store_tx6">'할리스 레스토랑'</span></li>
        </ul>
        <button type="button" name="store">매장 찾기</button>
    </section>
    </div>

    <section class="sns">
        <h2>Connect with <span>HOLLYS Coffee</span></h2>
        <ul class="sns_icon">
            <li class="sns_face"><a href="https://www.facebook.com/EnjoyHollys" target="blank">페이스북</a></li>
            <li class="sns_insta"><a href="https://www.instagram.com/hollyscoffee.official/" target="blank">인스타그램</a></li>
            <li class="sns_naver"><a href="https://m.blog.naver.com/PostList.nhn?blogId=hollyskr" target="blank">네이버 블로그</a></li>
        </ul>

        <div class="sns_img">
        <ul class="sns_img_wrap">
            <li class="sns_img1 m"><a href="https://www.instagram.com/p/CTBmwphJXg7/" target="blank">
                <img src="../images/sns_img1.jpg" alt="할리스 샌드위치 출시"/></a>
            </li>
            <li class="sns_img2 m"><a href="https://www.instagram.com/p/CTMNYK1JC5E/" target="blank">
                <img src="../images/sns_img2.jpg" alt="할리스 샐러드 출시"/></a>
            </li>
            <li class="sns_img3 m"><a href="https://www.instagram.com/p/CSgIvY7ppNM/" target="blank">
                <img src="../images/sns_img3.jpg" alt="할리스 콤부차 출시"/></a>
            </li>
            <li class="sns_img4 m"><a href="https://www.instagram.com/p/CSqboPaJHXm/" target="blank">
                <img src="../images/sns_img4.jpg" alt="할리스_꿀조합"/></a>
            </li>
            <li class="sns_img5 m"><a href="https://www.instagram.com/p/CSdjvkdpM77/" target="blank">
                <img src="../images/sns_img5.jpg" alt="달콤한 트리플 초콜릿 라운드의 매력"/></a>
            </li>
            <li class="sns_img6 m"><a href="https://www.instagram.com/p/CSYaHbKpYXA/" target="blank">
                <img src="../images/sns_img6.jpg" alt="달콤몽실 치즈 무스 크림과 바삭! 촉촉! 쿠키의 만남"/></a>
            </li>
            <li class="sns_img7 m"><a href="https://www.instagram.com/p/CSOTK3Qpvtw/" target="blank">
                <img src="../images/sns_img7.jpg" alt="천도복숭아요거트라떼"/></a>
            </li>
            <li class="sns_img8 m"><a href="https://www.instagram.com/p/CSLqdpgp6eD/" target="blank">
                <img src="../images/sns_img8.jpg" alt="천도복숭아스무디 8월 6일 출시!"/></a>
            </li>
            <li class="sns_img9 m"><a href="https://www.instagram.com/p/CSDzx4Fp7Vw/" target="blank">
                <img src="../images/sns_img9.jpg" alt="지금 쿠팡이츠로 할리스 주문하면 최대 9천원 할인!"/></a>
            </li>
            <li class="sns_img10 m"><a href="https://www.instagram.com/p/CR8pf4MJT7r/" target="blank">
                <img src="../images/sns_img10.jpg" alt="언제 어디든 고객이 원하는 곳으로 이동하는 할리스 무빙딜라이트 오픈"/></a>
            </li>
            <li class="sns_img11 m"><a href="https://www.instagram.com/p/CRVdaPJrbUX/" target="blank">
                <img src="../images/sns_img11.jpg" alt="할리스 추천 꿀조합, 우리눈꽃팥빙수 & 콜드브루"/></a>
            </li>
            <li class="sns_img12 m"><a href="https://www.instagram.com/p/CRDAYspLpSe/" target="blank">
                <img src="../images/sns_img12.jpg" alt="할리스와 함께하는 모닝 이벤트"/></a>
            </li>
            <li class="sns_img13 m"><a href="https://www.instagram.com/p/CQ70TIILwS3/" target="blank">
                <img src="../images/sns_img13.jpg" alt="할리스 진한 마스카포네 티라미스"/></a>
            </li>
            <li class="sns_img14"><a href="https://www.instagram.com/p/CQh9fXHg1B3/" target="blank">
                <img src="../images/sns_img14.jpg" alt="잇 해피 커트러리 세트"/></a>
            </li>
        </ul>
        </div>
    </section>

    <div class="quick_wrap">
    <section class="quick">
        <h2>QUICK MENU</h2>
        <ul>
            <li class="quick_txt1"><a href="menu/coffee/coffee.php">메뉴</a></li>
            <li class="quick_txt2"><a href="#">가맹문의</a></li>
            <li class="quick_txt3"><a href="#">할리스 아카데미</a></li>
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