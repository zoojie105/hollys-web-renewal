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
    <title>Hollys Mall</title>
    <link rel="stylesheet" type="text/css" href="../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/com/header_txt.css">
    <link rel="stylesheet" type="text/css" href="../css/com/quick_footer.css">
   <link rel="stylesheet" type="text/css" href="../css/hollys_mall_card.css">
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
    $(document).ready(function(){
        $(".tab_title > ul > li").click(function(){
            var idx = $(this).index();
            // alert(idx);
            $(".tab_cont > div").not($(".tab_cont > div").eq(idx)).hide();
            $(".tab_cont > div").eq(idx).show();
        });
    });
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
                        <li><a href="menu/dessert/dessert_egg.php">디저트·식사</a></li>
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
    <dl class="lnb_cont">
        <dt>HOLLYS Mall</dt>
        <dd class="lnb1"><a href="hollys_mall.php">할리스콘</a></dd>
        <dd class="lnb2"><a href="hollys_mall_card.php">할리스카드</a></dd>
        <dd class="lnb3"><a href="#">구매내역</a></dd>
    </dl>
    </article>
    </div>


    <aside class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="index.php">Home</a></li>
        <li class="locate2"><a href="hollys_mall.php">HOLLYS Mall</a></li>
        <li class="locate3"><a href="hollys_mall_card.php">할리스카드</a></li>
    </ul>
    </aside>

    <div class="cont1_wrap">
    
    <section class="cont1">
        <h2>할리스카드</h2>
        <p>할리스 전 매장에서 현금처럼 사용이 가능한 충전식 선불카드 입니다.</p>
    <div class="tab_title">
        <ul>
            <li class="title1"><a href="#none" title="할리스 카드등록 및 사용안내">할리스 카드안내</a></li>
            <li class="title2"><a href="#none" title="할리스 카드 충전 및 구매방법">자동 충전 안내</a></li>
        </ul>
        </div>
        <div class="tab_cont">
        <div class="tab1">
            <h3 class="blind">할리스카드 안내</h3>
            <dl>
                <dt>카드등록 및 사용안내</dt>
                <dd class="step1">STEP1</dd>
                <dd class="step2">STEP2</dd>
                <dd class="step3">STEP3</dd>
                <dd class="step4">STEP4</dd>
            </dl>
        </div>
        <div class="tab2">
            <h3 class="blind">자동 충전 안내</h3>
            <dl>
                <dt class="tab2_title1">카드 충전방법</dt>
                <dd class="step1">STEP1</dd>
                <dd class="step2">STEP2</dd>
            </dl> 
            <dl>
                <dt class="tab2_title2">카드 구매방법</dt>
                <dd class="step3">STEP1</dd>
                <dd class="step4">STEP2</dd>
            </dl> 
        </div>
    </div>
    </section>
    </div>
    <div class="cont2_wrap">
    <section class="cont2">
        <h3>이용안내</h3>
        <ul>
            <li>할리스카드로 할리스의 모든 제품을 구매할 수 있습니다. (단, 유가증권 및 현금 교환 불가)</li>
            <li>할리스카드는 신용(체크)카드, 현금 등 다른 결제수단과 함께 결제할 수 있습니다.</li>
            <li>할리스카드로 결제하신 금액에 대해 소득공제 혜택을 받을 수 있습니다.</li>
        </ul>
        <h3>결제안내</h3>
        <ul>
            <li>할리스카드에 충전할 수 있는 최소 충전금액은 1만원입니다.</li>
            <li>구매 및 충전은 1만원~10만원까지 1만원 단위로 가능합니다.</li>
            <li>할인 가능한 신용카드로 할리스카드 구매 및 충전 시, 할인이 적용되지 않습니다.</li>
            <li>할리스카드 구매 및 충전 시에는 소득공제를 받을 수 없습니다.</li>
        </ul>
        <h3>유의사항</h3>
        <ul>
            <li>할리스 매장에서 구매한 카드도 등록하여 사용할 수 있습니다.</li>
            <li>할리스카드는 스마트오더 및 할리스 전 매장에서 사용이 가능합니다. (일부매장 불가)</li>
            <li>할리스카드로 결제 시 자동으로 크라운이 적립됩니다.</li>
            <li>할리스카드는 본인 및 친구에게 선물할 수 있습니다.</li>
            <li>구매 또는 충전하신 할리스카드는 사용하지 않은 상태에 한하여 구매 취소가 가능합니다.</li>
            <li>구매/충전한 할리스카드 결제취소를 하실 경우 HOLLYS Mall > 구매내역에서 취소하실 수 있습니다.</li>
            <li>할리스카드를 비정상적, 불법적인 방법으로 사용하실 경우에 대해 당사는 책임지지 않습니다.</li>
            <li>고객센터 02-2188-7100 (운영시간 : 평일 09:30~12:00, 13:00~17:00 / 토,일,공휴일 휴무)</li>
        </ul>
        <div class="info">
        <h3>현금영수증 등록 안내</h3>
        <ul>
            <li>현금영수증 발급 정보를 저장해 놓으시면 매장에서 사용 시 현금영수증이 자동 발급 됩니다.</li>
            <li>MY HOLLYS> 회원정보 관리에서 설정하실 수 있습니다.</li>
        </ul>
        </div>
        <div class="btn_wrap">
        <button type="button" name="buy">구매하기</button>
        <button type="button" name="refund">환불하기</button>
        </div>
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