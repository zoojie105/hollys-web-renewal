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
   <link rel="stylesheet" type="text/css" href="../css/hollys_mall.css">
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
                        <li><a href="menu/dessert/dessert_egg.php">디저트·식사</a></li>
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

<main id="main">
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



<div class="hollys_con">
    <aside class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="index.php">Home</a></li>
        <li class="locate2"><a href="hollys_mall.php">HOLLYS Mall</a></li>
        <li class="locate3"><a href="hollys_mall.php">할리스콘</a></li>
    </ul>
    </aside>

    <section class="con_all">
        <h2 class="blind">할리스콘</h2>

        <div class="con1">
        <dl class="con1_1">
            <dt><a href="#">아메리카노</a></dt>
            <dd>4,100원</dd>
        </dl>
        <dl class="con1_2">
            <dt><a href="#">바닐라 딜라이트</a></dt>
            <dd>5,300원</dd>
            
        </dl>
        <dl class="con1_3">
            <dt><a href="#">리스트레또<br> 딜라이트 R</a></dt>
            <dd>5,400원</dd>            
        </dl>
        <dl class="con1_4">
            <dt><a href="#">콜드브루 R</a></dt>
            <dd>4,500원</dd>            
        </dl>
        <dl class="con1_5">
            <dt><a href="#">콜드브루<br> 딜라이트</a></dt>
            <dd>5,800원</dd>            
        </dl>
        </div>

        <div class="con2">
        <dl class="con2_1">
            <dt><a href="#">콜드브루 라떼 R</a></dt>
            <dd>5,000원</dd>        
        </dl>
        <dl class="con2_2">
            <dt><a href="#">카페라떼 R</a></dt>
            <dd>4,000원</dd>            
        </dl>
        <dl class="con2_3">
            <dt><a href="#">카라멜<br>마키아또 R</a></dt>
            <dd>5,500원</dd>
           
        </dl>
        <dl class="con2_4">
            <dt><a href="#">카페모카 R</a></dt>
            <dd>5,100원</dd>            
        </dl>
        <dl class="con2_5">
            <dt><a href="#">더 진한 딸기<br>스무디</a></dt>
            <dd>6,800원</dd>        
        </dl>
        </div>

        <div class="con3">
        <dl class="con3_1">
            <dt><a href="#">딸기 듬뿍 요거트 할리치노</a></dt>
            <dd>6,500원</dd>            
        </dl>
        <dl class="con3_2">
            <dt><a href="#">딸기 레몬티</a></dt>
            <dd>5,800원</dd>            
        </dl>
        <dl class="con3_3">
            <dt><a href="#">딸기 라떼</a></dt>
            <dd>5,800원</dd>           
        </dl>
        <dl class="con3_4">
            <dt><a href="#">생딸기 주스</a></dt>
            <dd>6,300원</dd>           
        </dl>
        <dl class="con3_5">
            <dt><a href="#">딸기 스무디</a></dt>
            <dd>5,700원</dd>            
        </dl>
        </div>

        <div class="con4">
        <dl class="con4_1">
            <dt><a href="#">망고오렌지<br>스무디</a></dt>
            <dd>6,700원</dd>
            
        </dl>
        <dl class="con4_2">
            <dt><a href="#">우리 고구마 라떼</a></dt>
            <dd>5,500원</dd>            
        </dl>
        <dl class="con4_3">
            <dt><a href="#">그린티라떼 R</a></dt>
            <dd>5,800원</dd>            
        </dl>
        <dl class="con4_4">
            <dt><a href="#">밀크티 라떼 R</a></dt>
            <dd>6,500원</dd>            
        </dl>
        <dl class="con4_5">
            <dt><a href="#">화이트 초코 R</a>
            <dd>5,200원</dd>
            </dt>
        </dl>
        </div>

        <div class="con5">
        <dl class="con5_1">
            <dt><a href="#">그린티 할리치노 R</a></dt>
            <dd>5,900원</dd>            
        </dl>    
        <dl class="con5_2">
            <dt><a href="#">밀크티 할리치노 R</a></dt>
            <dd>5,900원</dd>            
        </dl> 
        <dl class="con5_3">
            <dt><a href="#">히비스커스 후르츠</a></dt>
            <dd>4,500원</dd>            
        </dl> 
        <dl class="con5_4">
            <dt><a href="#">레몬 그라스</a></dt>
            <dd>4,500원</dd>            
        </dl> 
        <dl class="con5_5">
            <dt><a href="#">유자 캐모마일 R</a> </dt>
            <dd>5,500원</dd>           
        </dl> 
        </div> 

        <div class="con6">
        <dl class="con6_1">
             <dt><a href="#">복숭아 얼그레이 R</a></dt>
             <dd>4,800원</dd>             
        </dl>    
        <dl class="con6_2">
            <dt><a href="#">제주 한라봉<br>감귤차 R</a></dt>
            <dd>5,900원</dd>            
        </dl>    
        <dl class="con6_3">
            <dt><a href="#">바삭 불고기&트리플<br>치즈 치킨 퀘사디아 R</a></dt>
            <dd>5,800원</dd>            
        </dl>    
        <dl class="con6_4">
            <dt><a href="#">매콤 닭갈비&바베큐<br>포크 퀘사디아</a></dt>
            <dd>5,800원</dd>            
        </dl>    
        <dl class="con6_5">
            <dt><a href="#">오곡 에그마요</a></dt>
            <dd>5,500원</dd>            
        </dl>    
        </div>

        <div class="con7">
        <dl class="con7_1">
            <dt><a href="#">에그마요</a></dt>
            <dd>4,800원</dd>            
        </dl>
        </div>
    </section>
</div>



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