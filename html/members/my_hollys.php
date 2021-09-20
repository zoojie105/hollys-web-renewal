<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
$s_name = isset($_SESSION["s_name"])? $_SESSION["s_name"]:"";
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
    <link rel="stylesheet" type="text/css" href="../../css/my_hollys.css">
    <link rel="shortcut icon" type="images/x-icon" href="../favicon.ico"/>

    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
    <script type="text/javascript" src="../../js/my_hollys.js"></script>


    <script type="text/javascript">
    function log_out(){
        var ck = confirm("로그아웃 하시겠습니까?");
        if(ck == true){
            location.href="logout.php";
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
        <dd class="lnb1"><a href="../membership.php">스마트 오더</a></dd>
        <dd class="lnb2"><a href="#">멤버십 혜택 안내</a></dd>
        <dd class="lnb3"><a href="#">My Hollys</a></dd>
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
    <li class="locate4"><a href="my_hollys.php">My 멤버십</a></li>
</ul>
</aside>
<div class="content_top">
<section class="content1">
    <h2>MY 멤버십</h2>
    <ul>
        <li>
            <ul class="txt1_wrap">
            <li class="txt1"><?php echo $s_name; ?>님은 현재 Silver입니다.</li>
            <li class="mem_info"><a href="#" title="멤버십 혜택 보기"></a></li>
            </ul>
        </li> 
        <li class="txt2">등급 유지 기간 2021.08.02 ~ 2022. 08.01</li>
        <li class="txt3">Free 쿠폰까지 <span>11개</span> 의 크라운을 채워주세요</li>
        <li class="crown">1/12</li>
        <li>(현재 1개의 크라운 적립)</li>
        <li class="coupon"><a href="#">사용가능한 0개의 쿠폰이 있습니다.</a></li>
    </ul>
</section>

<section class="content2">
    <h2>유의사항</h2>
    <ul>
        <li>- 영수증 1개당 결제금액으로 크라운이 적립됩니다.<br>(4천원 이상 1만원 미만이면 1개 적립 / 1만원 이상 1만원 미만이면 1개 적립)</li>
        <li>- CROWN(크라운)의 유효기간은 적립일로부터 1년간 유지되며 이후 소멸됩니다.</li>
        <li>- 골드 / 레드 멤버십 등급은 조건 달성 후 즉시 반영되며 유지기간은 승급일로부터 1년간 유지됩니다.</li>
        <li>- CROWN 추후 적립의 경우 당일에 한하며, 해당 매장에 영수증을 지참하시어 방문하시면 적립 가능합니다.</li>
        <li>- 2021년 다이아몬드 등급의 유지기간은 12월 31일 까지입니다.</li>
        <li>- 자동충전이란? 할리스 카드의 잔액기 설정하신 기준 잔액보다 낮아지면 즉시 자동충전 되는 기능힙니다.<br>(혜택은 1회 충전 금액에 한해 적용됩니다.</li>
    </ul>
</section>  
</div>  
<div class="tab_cont_wrap">
<div class="tab_cont">
    <div class="tab_title">
        <h2 class="blind">MY 멤버십 탭 메뉴</h2>
        <ul>
            <li class="tab_title1"><a href="#none">크라운 내역</a></li>
            <li class="tab_title2"><a href="#none">멤버십 카드 관리</a></li>
        </ul>
    </div>
    <section class="tab_cont1">
    <h2 class="blind">크라운 내역</h2>
    <h3 class="blind">크라운 내역 탭메뉴</h3>
    <div class="inner_title">
    <ul>
        <li class="inner_title1"><a href="#none">히스토리</a></li>
        <li class="inner_title2"><a href="#none">소멸예정</a></li>
    </ul>
    <div class="line"></div>
    </div>
    <div class=inner_tab1>
        <h3 class=blind>히스토리</h3>
        <div class="inner_tab1_1">
        <p>* 최신 3개월 이력 조회 가능합니다.</p>
        <ul class="sort">
            <li class="sort1"><a href="#none">전체</a></li>
            <li class="sort2"><a href="#none">적립</a></li>
            <li class="sort3"><a href="#none">사용</a></li>
            <li class="sort4"><a href="#none">소멸</a></li>
        </ul>
        <table class="t1">
            <tr>
                <th>이용 CROWN</th>
                <th>구분</th>
                <th>적립일</th>
                <th>사용 / 소멸일</th>
                <th>매장명</th>
                <th>카드명</th>
            </tr>
            <tr>
                <td class="crown">+1</td>
                <td>적립</td>
                <td>2021.07.02</td>
                <td>2022.07.01</td>
                <td>할리스아산 우체국점</td>
                <td>멤버십 카드</td>
            </tr>
        </table>
        </div>
     

        <h3 class="blind">소멸예정</h3>
        <div class="inner_tab1_2">
        <p>* 3개월 내 소멸 예정인 크라운입니다. / 크라운은 적립일로부터 1년 후 소멸 예정입니다.</p>
        <table class="t2">
            <tr>
                <th>소멸 예정 포인트</th>
                <th>소멸 예정일</th>
            </tr>
            <tr>
                <td>0</td>
                <td>2022.07.02</td>
            </tr>
        </table>
        </div>
    </div> 
    </section> 

    <section class="tab_cont2">
        <h2 class="blind">멤버십 카드 관리</h2>
        <ul class=inner_tab2>
            <li class="txt1">모바일 카드 재발급<a href="#" class="go">바로가기</a></li>
            <li class="txt2">실물 카드 등록<a href="#" class="go">바로가기</a></li>
            <li class="txt3">멤버십 카드 사용중지<a href="#" class="go">바로가기</a></li>
            <li><a class="info" href="#">멤버십 카드 사용을 일시중지하실 수 있으며, 해제하시면 정상적으로 사용하실 수 있습니다.</a></li>
        </ul>
    </section>
</div>
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