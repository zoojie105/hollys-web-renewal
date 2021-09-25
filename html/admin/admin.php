<?php
include "../../inc/admin_check.php";
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
$s_id = isset($_SESSION["s_id"])? $_SESSION["s_id"]:"";
include "../../inc/dbcon.php";

$sql = "select * from members;";

$result = mysqli_query($dbcon, $sql);
$num = mysqli_num_rows($result);
$list_num = 10;
$page_num = 5;
$page = isset($_GET["page"])? $_GET["page"] : 1;
$total_page = ceil($num / $list_num);
$total_block = ceil($total_page/$page_num);
$now_block = ceil($page / $page_num);
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};
$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
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
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <link rel="shortcut icon" type="images/x-icon" href="../favicon.ico"/>

    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
    <script>
        function form_check(){
            var user_pwd = document.getElementById("user_pwd");
            if(!user_pwd.value){
                alert("비밀번호를 입력하세요");
                user_pwd.focus();
                return false;

            };
            return true;
        };

    </script>
    <script type="text/javascript">
    function log_out(){
        var ck = confirm("로그아웃 하시겠습니까?");
        if(ck == true){
            location.href="../members/logout.php";
        };
    };
    function del_mem(idx){
        var ck = confirm("정말 해당 회원을 삭제하시겠습니까?\삭제된 회원은 복구할 수 없습니다."); 
        if(ck == true){
            location.href="delete.php?idx="+idx;
        }
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
            <li class="login"><a href="../members/login.php">로그인</a></li>
            <li class="register"><a href="../members/join_term.php">멤버십 가입</a></li>
            <?php }else if($s_id == "admin"){?>
            <li class="login"><a href="admin.php">관리자 페이지</a></li>
            <li class="login"><a href="#" title="로그아웃" onclick="log_out()">로그아웃</a></li>
            <?php }else{?>
            <li class="login"><a href="../members/my_hollys.php">마이페이지</a></li>
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
        <dt>관리자 페이지</dt>
        <div class="lnb_bottom">
        <dd class="lnb1"><a href="#">홈페이지 관리</a></dd>
        <dd class="lnb2"><a href="#">관리자 페이지</a></dd>
        <dd class="lnb3"><a href="#">게시판 관리</a></dd>
        <dd class="lnb4"><a href="admin.php">회원 관리</a></dd>
        </div>
    </dl>
    </article>
</div>

<aside class="locate">
<h2 class="blind">사용자 위치</h2>
<ul>
    <li class="locate1"><a href="../index.php">Home</a></li>
    <li class="locate2"><a href="../membership.php">관리자 페이지</a></li>
    <li class="locate3"><a href="../my_hollys.php">회원 관리</a></li>
</ul>
</aside>
<div class="mem_list_wrap">
<section class="mem_list">
    <h2>회원 관리</h2>
    <table>
        <tr class="t_title">
            <th class="mem_idx">회원<br>번호</th>
            <th class="mem_name bor">이름</th>
            <th class="mem_id bor">아이디</th>
            <th class="mem_dob bor">생년월일</th>
            <th class="mem_mobile bor">전화번호</th>
            <th class="mem_email bor">이메일</th>
            <th class="mem_addr bor">주소</th>
            <th class="mem_date bor">가입일</th>
            <th class="mem_level bor">등급</th>
            <th class="mem_receipt bor">현금영수증 정보</th>
            <th class="mem_modi bor">수정</th>
            <th class="mem_del bor">삭제</th>
        </tr>
        <?php
        $start = ($page - 1) * $list_num;
        $sql = "select * from members limit $start, $list_num;";
        $result = mysqli_query($dbcon, $sql);
        $cnt = $start + 1;
        while($array = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $cnt;?></td>
            <td class="bor"><?php echo $array["user_name"];?></td>
            <td class="bor"><?php echo $array["user_id"];?></td>
            <td class="bor"><?php echo $array["dob"];?></td>
            <td class="bor"><?php echo $array["mobile"];?></td>
            <td class="bor"><?php echo $array["email"];?></td>
            <td class="bor addr">
            <?php echo $array["postalCode"];?>
            <?php echo $array["addr1"];?>
            <?php echo $array["addr2"];?>
            </td>
            <td class="bor"><?php echo $array["reg_date"]; ?></td>
            <td class="bor"><?php echo $array["level"];?></td>
            <td class="bor"><?php echo $array["receipt"];?></td>
            <td class="bor"><a href="edit.php?g_idx=<?php echo $array["idx"]; ?>">수정</a></td>
            <td class="bor"><a href="#" onclick="del_mem(<?php echo $array['idx']; ?>)">삭제</a></td>
        </tr>
        <?php 
            $cnt = $cnt + 1;
        }; 
        ?>
    </table>

    <p class="pager">

    <?php if($page <= 1){ ?>
    <a href="admin.php?page=1">이전</a>
    <?php }else{ ?>
    <a href="admin.php?page=<?php echo ($page-1); ?>">이전</a>
    <?php }; ?>

    <?php for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){ ?>
    <span><a href="admin.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a></span>
    <?php }; ?>
    
    <?php if($page >= $total_page){ ?>
    <a href="admin.php?page=<?php echo $total_page; ?>">다음</a>
    <?php }else{ ?>
    <a href="admin.php?page=<?php echo ($page+1); ?>">다음</a>
    <?php }; ?>
    </p>
    
</section>
</div>



<div class="quick_wrap">
    <section class="quick">
        <h2>QUICK MENU</h2>
        <ul>
            <li class="quick_txt1"><a href="../menu/coffee/coffee.php">메뉴</a></li>
            <li class="quick_txt2"><a href="#">가맹문의</a></li>
            <li class="quick_txt3"><a href="#">할리스 아카데미<a></li>
            <li class="quick_txt4"><a href="#">기업특판</a></li>
            <li class="quick_txt5"><a href="../Hollys_news.php">이벤트<a></li>
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