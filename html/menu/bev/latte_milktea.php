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
    <title>HOLLYS Beverage</title>
    <link rel="stylesheet" type="text/css" href="../../../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/com/header_txt.css">
    <link rel="stylesheet" type="text/css" href="../../../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../../../css/menu/bev/bev_details.css">
    <link rel="shortcut icon" type="images/x-icon" href="../../favicon.ico"/>

    <script type="text/javascript" src="../../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../../js/header.js"></script>

    <link rel="stylesheet" type="text/css" href="../../../css/com/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../../../js/jquery.bxslider.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.other1').bxSlider({
            auto: false,
            pager: false,
            conrtrols:true,
            speed: 1000,

            minSlides : 4,
            maxSlides : 4,
            slideWidth : 700,
            slideMargin : 90,
            touchEnabled: (navigator.maxTouchPoints>0)
            
        });
    });
    </script>
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
                    <li><a href="bev.php">음료</a></li>
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
                    <li><a href="../../about_academy.php">할리스 아카데미</a></li>
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
        <dt>음료</dt>
        <dd class="main_txt">
            <p>할리스커피의 특별한 레시피로 완성된 다양한 음료</dd>
        </div>
        <div class="lnb_bottom">
        <dd class="lnb1"><a href="../coffee/coffee.php">커피</a></dd>
        <dd class="lnb2"><a href="bev.php">음료</a></dd>
        <dd class="lnb3"><a href="../dessert/dessert.php">디저트·식사</a></dd>
        <dd class="lnb4"><a href="../md/md.php">MD 상품</a></dd>  
    </dl>
    </article>
</div>
<div class="tab_wrap">
    <article class="tab">
    <h2 class="blind">탭 메뉴</h2>
    <ul>
        <li class="tab0"><a href="bev.php">전체</a></li>
        <li class="tab1"><a href="bev_latte.php">라떼·초콜릿</a></li>
        <li class="tab2"><a href="bev_tea.php">티(TEA)</a></li>
        <li class="tab3"><a href="bev_spa.php">스파클링</a></li>
        <li class="tab4"><a href="bev_holly.php">할리치노</a></li>
        <li class="tab5"><a href="bev_smo.php">스무디·주스</a></li>
    </ul>
    </article>
</div>


<div class="latte3_wrap">
    <aside class="locate">
        <h2 class="blind">사용자 위치</h2>
        <ul>
            <li class="locate1"><a href="../../index.php">Home</a></li>
            <li class="locate2"><a href="../coffee/coffee.php">메뉴</a></li>
            <li class="locate3"><a href="bev.php">음료</a></li>
            <li class="locate4"><a href="bev_latte.php">라떼·초콜릿</a></li>
        </ul>
    </aside>
    
    <section class="latte3">
    <h2>밀크티라떼</h2>
    <p class="txt1">Milk Tea Latte</p>
    <p class="txt2">향긋한 홍차에 우유의 고소함과 부드러움을 더한 티라떼</p>
    
    <dl class="info">
        <dt>제품 영양정보</dt>
        <dd class="info1">1회 제공량</dd>
        <dd class="info2">Regular</dd>
        <dd class="info3">354ml 기준(Grande/472ml)</dd>
    </dl>
    
    <table>
    <tr class="table_top">
        <th class="blind">구분</th>
        <th>칼로리</th>
        <th>당류</th>
        <th>단백질</th>
        <th>포화지방</th>
        <th>나트륨</th>
        <th>카페인</th>
    </tr>
    <tr class="hot">
        <td>HOT</td>
        <td>256kcal</td>
        <td>32g/32%</td>
        <td>9g/16%</td>
        <td>6.3g/42%</td>
        <td>142mg/7%</td>
        <td>72mg</td>
    </tr>
    <tr class="iced">
        <td>ICED</td>
        <td>197kcal</td>
        <td>27g/27%</td>
        <td>6g/11%</td>
        <td>4.2g/28%</td>
        <td>95mg/5%</td>
        <td>72mg</td>
    </tr>
    </table>
    </section>
</div>


<div class="other_wrap bev">
    <section class="other">
    <h2>다른 제품 둘러보기</h2>
    <ul class="other1">
        <li class="other1_2"><a href="latte_greentea.php">그린티라떼</a></li>
        <li class="other1_3"><a href="#">밀크티라떼</a></li>
        <li class="other1_4"><a href="latte_sweet.php">우리 고구마라떼</a></li>
        <li class="other2_2"><a href="latte_white.php">화이트초코</a></li>

        <li class="other2_3"><a href="latte_hot.php">핫초코</a></li>
        <li class="other2_4"><a href="latte_mint.php">민트초코</a></li>
        <li class="other3_4"><a href="tea_yuzu.php">유자 캐모마일</a></li>
        <li class="other4_1"><a href="tea_peach.php">복숭아 얼그레이</a></li>

        <li class="other4_2"><a href="tea_grapfruit.php">홍자몽차</a></li>
        <li class="other4_4"><a href="tea_jeju.php">제주 한라봉<br>감귤차</a></li>
        <li class="other5_1"><a href="tea_goheung.php">고흥 유자차</a></li>
        <li class="other5_2"><a href="tea_greentea.php">해남 녹차</a></li>

        <li class="other5_3"><a href="tea_peppermint.php">페퍼민트</a></li>
        <li class="other5_4"><a href="tea_chamomile.php">캐모마일</a></li>
        <li class="other6_1"><a href="tea_earlgrey.php">얼그레이</a></li>
        <li class="other6_2"><a href="spa_double.php">더블베리<br>스파클링</a></li>
        
        <li class="other6_3"><a href="spa_peach.php">복숭아 자두<br>스파클링</a></li>
        <li class="other6_4"><a href="spa_grapefruit.php">자몽 파인<br>스파클링</a></li>
        <li class="other7_1"><a href="spa_grape.php">청포도 스파클링</a></li>
        <li class="other7_2"><a href="holly_strawberry.php">딸기 치즈케익 할리치노</a></li>
        
        <li class="other7_3"><a href="holly_coldbrew.php">콜드브루<br>할리치노</a></li>
        <li class="other7_4"><a href="holly_mocha.php">콜드브루 모카<br> 할리치노</a></li>
        <li class="other8_1"><a href="holly_chocochip.php">다크초코칩<br>할리치노</a></li>
        <li class="other8_2"><a href="holly_mint.php">민트초코<br>할리치노</a></li>

        <li class="other8_3"><a href="holly_greentea.php">그린티 할리치노</a></li>
        <li class="other8_4"><a href="holly_blueberry.php">블루베리 요거트<br> 할리치노</a></li>
        <li class="other9_1"><a href="holly_plain.php">플레인 요거트<br> 할리치노</a></li>
        <li class="other9_2"><a href="holly_milktea.php">밀크티 할리치노</a></li>

        <li class="other9_3"><a href="smo_peach.php">피치 딸기<br>크러쉬</a></li>
        <li class="other10_1"><a href="smo_apple.php">애플망고 스무디</a></li>
        <li class="other10_2"><a href="smo_strawberry.php">딸기스무디</a></li>
        <li class="other10_3"><a href="smo_beet.php">사과 비트 <br>착즙 주스</a></li>
        
        <li class="other10_4"><a href="smo_orange.php">오렌지 당근<br>착즙주스</a></li>
        <li class="other11_4"><a href="smo_grape.php">청포도케일<br>착즙주스</a></li>
    </ul>
    </section>
</div>


<div class="quick_wrap">
<section class="quick">
    <h2>QUICK MENU</h2>
    <ul>
        <li class="quick_txt1"><a href="../coffee/menu_coffee.php">메뉴</a></li>
        <li class="quick_txt2"><a href="#">가맹문의</a></li>
        <li class="quick_txt3"><a href="../../about_academy.php">할리스 아카데미<a></li>
        <li class="quick_txt4"><a href="#">기업특판</a></li>
        <li class="quick_txt5"><a href="../../Hollys_news.php">이벤트<a></li>
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