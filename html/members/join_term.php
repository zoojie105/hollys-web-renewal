<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])? $_SESSION["s_idx"]:"";
if($s_idx){
    echo "
    <script type='text/javascript'>
    alert('이미 로그인이 되어있습니다.')
    location.href='../index.php'
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
    <title>JOIN HOLLYS</title>
    <link rel="stylesheet" type="text/css" href="../../css/com/reset.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/header.css">
    <link rel="stylesheet" type="text/css" href="../../css/com/quick_footer.css">
    <link rel="stylesheet" type="text/css" href="../../css/join_term.css">
    <link rel="shortcut icon" type="images/x-icon" href="../favicon.ico"/>

    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/header.js"></script>
    <script>
        function form_check(){
        var check1 = document.getElementById("term1_agr");
        var check2 = document.getElementById("term2_agr");
        var check3 = document.getElementById("term3_agr");
        var check_all = document.getElementById("agree_all");

            if(!check1.checked){
            alert("이용약관 동의가 필요합니다.");
            check1.focus();
            return false;
            };

            if(!check2.checked){
            alert("개인정보 수집 및 이용 동의가 필요합니다.");
            check2.focus();
            return false;
            };

            if(!check3.checked){
            alert("멤버십 이용약관 동의가 필요합니다.");
            check3.focus();
            return false;
            };

            return true;
        
        };

        function all_check(){
        var check1 = document.getElementById("term1_agr");
        var check2 = document.getElementById("term2_agr");
        var check3 = document.getElementById("term3_agr");
        var check_all = document.getElementById("agree_all");

            if(check_all.checked){
                check1.checked = true;
                check2.checked = true;
                check3.checked = true;
            } else{
                check1.checked = false;
                check2.checked = false;
                check3.checked = false;
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
                <li class="adv sub">
                    <a href="../menu/coffee/latte_vanilla.php">1초에 한잔씩 판매되는 할리스 넘버원 라떼 바닐라 딜라이트</a>
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
                <li class="login"><a href="login.php">로그인</a></li>
                <li class="register"><a href="join_term.php">멤버십 가입</a></li>
                <li class="customer"><a href="#">고객센터</a></li>
                <li class="fran"><a href="#">창업 설명회</a></li>
            </ul>
            </div>
        </div>
    
        </header>
    <div class="sub_box"></div>
</div> 

<main id="main">
    <aside class="locate">
    <h2 class="blind">사용자 위치</h2>
    <ul>
        <li class="locate1"><a href="../index.php">Home</a></li>
        <li class="locate2"><a href="join_term.php">회원가입</a></li>
    </ul>
    </aside>

<section class="join_wrap">
    <h2 class="join_title">할리스 멤버십 회원가입</h2>

    <div class="join2">

<dl class="join2_pro">
        <dt class="blind">회원가입 단계</dt>
            <dd class="join2_pro1"><span>01.</span> 약관동의</dd>
            <dd class="join2_pro2"><span>02.</span> 회원 정보 입력</dd>
            <dd class="join2_pro3"><span>03.</span> 가입 완료</dd>
</dl>
<form name="join_term_form" action="join_info.php" method="post" onsubmit="return form_check()">
<fieldset>
    <legend class="blind">약관 동의</legend>
    <div class="join2_top">
    <dl>
        <dt>할리스 약관 동의</dt>
        <dd class="txt1">회원에 가입하실 분들은 먼저 이용약관을 읽어보신 후, 동의 해주세요.</dd>
        <dd>할리스의 멤버십 회원이 되시면 홈페이지의 부가 서비스*를 이용하실 수 있습니다.</dd>
        <dd>(* 부가서비스 : 할리스몰, 할리스카드 구매, 멤버십 서비스 확인 등)</dd>
        <dd>아래의 이용약관을 읽어보신 후, 동의하신 다음 필요한 정보를 입력하시면 됩니다.</dd>
        <dd>각 회원의 신상정보에 대해서는 “신용정보의 이용 및 보호에 관한 법률”에 의거 완벽한 보안을 유지할 것입니다.</dd>
    </dl>
</div>

<section class="term">
    <div class="term1_wrap">
    <h2>이용약관(필수)</h2>
    <div class="term1">
        <p>[제1장 총칙]</p>

        <dl>
        <dt>제1조 목적</dt>
        <dd>이 약관은 ㈜케이지할리스에프앤비(이하 "회사"라 합니다)가 제공하는 인터넷상의 정보 서비스(이하 "서비스"라 합니다)의 이용과 관련하여 기본적인 사항을 규정함을 목적으로 합니다.</dd>
        </dl>

        <dl>
        <dt>제2조 약관의 효력 및 변경</dt>
        <dd>1. 이 약관의 공지 및 변경사항은 회사의 지정된 홈페이지(http://www.hollys.co.kr) 및 모바일 멤버십 사이트(http://m.hollys.co.kr)에 공지합니다. 이 약관의 내용은 서비스 화면에 게시하거나 제1항의 방법으로 회원에게 공지함으로써 효력을 발생합니다.</dd>
        <dd>2. 회사는 합당한 사유가 발생할 경우에는 이 약관을 변경할 수 있으며, 약관이 변경된 경우에는 변경 된 약관을 제1항과 동일한 방법으로 공지함으로써 효력을 발생합니다. 회원의 권리 또는 의무 등 중요한 개정은 시행일로부터 최소 1주일 전에 공지합니다. 다만, 회원에게 불리한 내용으로 약관을 개정하는 경우에는 적용일로부터30일전까지 홈페이지에 공시하고 회원이 입력한 가장 최근의 e-mail로 전송하는 방법으로 회원에게 고지합니다. 변경된 약관은 공시하거나 고지한 적용일로부터 효력이 발생합니다.</dd>
        </dl>

        <dl>
        <dt>제3조 약관 외 준칙</dt>
        <dd>1. 회사의 홈페이지(http://www.hollys.co.kr) 및 모바일 멤버십 사이트(http://m.hollys.co.kr)에 게재된 개인정보처리방침, 저작권정책, 책임의 한계와 법적고지는 이 약관과 상충되지 아니하는 한 회원에게 적용됩니다.</dd>
        <dd>2. 전항에서 정하지 아니한 사항은 대한민국의 법령에 따릅니다.</dd>
        </dl>

        <dl>
        <dt>제4조 용어의 정의</dt>
        <dd>이 약관에서 정의하는 용어는 다음과 같습니다.
        <ol>
            <li>1) 회원: 회사와 서비스 이용계약을 체결하고 이용자 아이디를 부여 받은 자</li>
            <li>2) 아이디(ID): 회원의 식별과 회원의 서비스 이용을 위하여 회원이 만들고 회사가 승인하는 문자와 숫자의 조합</li>
            <li>3) 비밀번호: 회원의 비밀 보호를 위하여 회원 자신이 설정한 문자와 숫자의 조합</li>
            <li>4) 운영자: 서비스의 전반적인 관리와 원활한 운영을 위하여 회사에서 선정한 사람</li>
            <li>5) 해지: 이용자가 서비스 개통 후 이용계약을 해약하는 것</li>
            <li>6) 이용정지: 회사가 정한 일정한 요건에 따라 일정 기간 동안 서비스 이용을 보류하는 것</li>
        </ol>
        </dd>
        </dl>

        <p>[제2장 서비스 이용 계약]</p>
        
        <dl>
        <dt>제5조 이용 계약의 성립</dt>
        <dd>
        <ol>
            <li>1. 회원가입은 회사가 정한 소정의 등록절차를 걸쳐 '회원 가입' 버튼을 클릭하면 이 약관과 함께 이에 동의하는 것으로 간주합니다.</li>
            <li>2. 이용계약은 회원의 이용신청에 대하여 회사가 승낙함으로써 성립합니다.</li>
        </ol>
        </dd>
        </dl>

        <dl>
        <dt>제6조 이용 신청</dt>
        <dd>이용신청은 온라인으로 다음 사항을 가입신청 양식에 기록하여 신청합니다.
        <ol>
        <li>1. 아이디(ID)</li>
        <li>2. 비밀번호</li>
        <li>3. 이름</li>
        <li>4. 생년월일</li>
        <li>5. 연락처</li>
        <li>6. 이메일</li>
        <li>7. 주소(선택)</li>
        </ol>
        </dd>
        </dl>
        
        <dl>
        <dt>제7조 이용신청의 승낙</dt>
        <dd>
        <ul>
            <li>1. 회사는 회원이 제6조에서 정한 모든 사항을 정확히 기재하여 이용신청을 하였을 때 회사가 그 기재사항 등을 검토하여 이용신청에 대하여 승낙할 수 있습니다.</li>
            <li>2. 회사는 다음 각 호에 해당하는 경우에는 이용신청에 대한 승낙을 거절할 수 있습니다.
                <ul>
                <li>1) 주민등록표상의 본인실명과 다르게 이용신청을 하였을 경우</li>
                <li>2) 다른 사람의 명의를 사용하여 신청한 경우</li>
                <li>3) 이용신청 시 필요내용을 허위로 기재하여 신청한 경우</li>
                <li>4) 사회의 안녕질서 또는 미풍양속에 반할 우려가 있다고 명백히 인정될 경우</li>
                <li>5) 기타 회사가 정한 이용신청 요건이 미비되었을 때</li>
                </ul>
            </li>
            <li>3.회사는 다음 각 호에 해당하는 경우에는 이용신청에 대한 승낙을 유보할 수 있습니다.
                <ul>
                <li>1) 설비용량에 현실적인 여유가 없는 경우</li>
                <li>2) 서비스를 제공하기에는 기술적으로 문제가 있다고 판단되는 경우</li>
                <li>3) 기타 회사가 재정적 또는 기술적으로 필요하다고 인정되는 경우</li>
                </ul>
            </li>
        </ul>
        </dd>
        </dl>
        
        <dl>
        <dt>제8조 계약사항의 변경</dt>
        <dd>회원은 이용신청 시 기재한 사항이 변경되었을 경우에는 바로 온라인으로 수정해야 합니다.</dd>
        </dl>

        <dl>
        <dt>제 9조 휴면계정 관리</dt>

        <dd>1. 회사는 회원이 최종접속일로부터 12개월 이상 할리스 웹사이트에 로그인 하지 않을 경우, 휴면계정으로 간주하고 회사가 제공하는 서비스 이용을 제한/상실시킬 수 있습니다. 회사는 휴면 계정으로 전환되기 1개월 전 E-mail을 통해 안내합니다.
        단, 할리스 멤버십 회원은 본 약관 휴면계정에도 불구하고, 홈페이지 또는 모바일 애플리케이션에 12개월 이상 로그인 하지 않고, 계정에 등록된 멤버십 카드로 12개월 이상 이용내역이 없는 경우 휴면계정으로 구분됩니다.
        <ul>
            <li>- 휴면계정 전환일: 할리스 웹사이트 최종접속일로부터 12개월 이상 로그인하지 않은 경우</li>
            <li>- 서비스 이용 제한: 웹사이트 로그인 불가, 웹사이트 관련 멤버십 서비스 전면 중단</li>
            <li>- 휴면계정으로 전환을 원치 않을 경우 12개월이 되기 전 1회 이상 로그인 필요</li>
        </ul>
        </dd>
        <dd>2. 휴면계정으로 전환될 경우, 할리스 웹사이트 서비스 일체 이용하실 수 없습니다. 이후 서비스를 재개하려면 본인 인증 절차를 거쳐야 합니다. 단, 휴면계정 전환일로부터 5년간 로그인 하지 않으실 경우 회원 탈퇴 및 보관 중인 개인정보는 파기됩니다.
        </dd>
        </dl>

        <p>[제3장 계약당사자의 의무]</p>
    
        <dl>
        <dt>제10조 개인정보의 보호</dt>
        <dd>회사는 관련법령이 정하는 바에 따라서 이용자 등록정보를 포함한 이용자의 개인정보를 보호하기 위하여 노력합니다. 이용자의 개인정보보호에 관해서는 관련법령 및 회사가 정하는 "개인정보처리방침"에 정한 바에 의합니다.
        </dd>

        <dt>제11조 회원 이름, 아이디와 비밀번호 관리에 대한 의무</dt>
        <dd>이름, 아이디, 비밀번호에 관한 모든 관리책임은 회원에게 있습니다. 회원에게 부여된 이름, 별명과 비밀번호의 관리 소홀, 부정사용에 의하여 발생하는 모든 결과에 대한 책임은 회원에게 있습니다. 또한 자신의 이름, 아이디와 비밀번호가 부정하게 사용되고 있음을 인지한 경우 회원은 반드시 회사에 그 사실을 통보하고 회사의 안내가 있는 경우에는 그에 따라야 합니다.
        </dd>
        </dl>

        <dl>
        <dt>제12조 서비스 전반에 관한 회원의 의무</dt>
        <dd>1. 회원은 서비스를 이용할 때 다음 각 호의 행위를 하지 않아야 합니다.
        <ol>
            <li>1) 다른 회원의 아이디를 부정하게 사용하는 행위</li>
            <li>2) 제3자의 저작권 등 기타 권리를 침해하는 행위</li>
            <li>3) 공공질서/미풍양속에 위반되는 내용의 정보, 문장, 도형, 음성 등을 타인에게 유포 하는 행위</li>
            <li>4) 범죄와 결부된다고 객관적으로 판단되는 행위</li>
            <li>5) 타인이 명예를 손상시키거나 불이익을 주는 행위</li>
            <li>6) 기타 관계법령에 위배되는 행위</li>
            <li>7) 기타 서비스의 정상적 운영, 유지 등을 방해하거나 지연시키는 행위</li>
        </ol>
        </dd>

        <dd>2. 회원은 이 약관에서 규정하는 사항과 서비스 이용안내 또는 주의사항을 준수하여야 합니다.</dd>
        <dd>3. 회원은 내용별로 회사가 서비스 공지사항에 게시하거나 별도로 공지한 이용제한 사항을 준수하여야 합니다.</dd>
        <dd>4. 회원은 회사의 사전승낙 없이는 서비스를 이용하여 영업활동을 할 수 없으며, 영업활동의 결과와 회원이 약관에 위반한 영업활동을 이용하여 발생한 결과에 대하여 회사는 책임을 지지 않습니다.</dd>
        <dd>5. 회원은 서비스의 이용권한, 기타 이용계약상 지위를 타인에게 양도, 증여할 수 없으며, 이를 담보로 제공할 수 없습니다.</dd>
        </dl>


        <p>[제4장 서비스 이용]</p>
        
        <dl>
        <dt>제13조 정보의 제공</dt>
        <dd>회사는 회원이 서비스 이용 중 필요가 있다고 인정되는 다양한 정보에 대해서 전자우편이나 문자서비스, 어플리케이션 알림, 우편 등의 방법으로 회원에게 제공할 수 있습니다.</dd>
        </dl>

        <dl>
        <dt>제14조 회원의 게시물</dt>
        <dd>회사는 회원이 게시하거나 등록하는 서비스내의 내용물이 다음 각 호에 해당한다고 판단되는 경우에 사전 통지 없이 삭제할 수 있습니다.
            <ol>
            <li>1. 다른 회원 또는 제3자를 비방하거나 중상모략으로 명예를 손상시키는 내용인 경우</li>
            <li>2. 공공질서 및 미풍양속에 위반되는 내용인 경우</li>
            <li>3. 범죄적 행위에 결부된다고 인정되는 내용인 경우</li>
            <li>4. 회사의 저작권, 제3자의 저작권 등 기타 권리를 침해하는 내용인 경우</li>
            <li>5. 불건전한 자료를 홍보할 경우</li>
            <li>6. 게시판의 성격과 맞지 않는 게시물인 경우</li>
            <li>7. 기타 관계법령에 위반된다고 판단되는 경우</li>
            </ol>
        </dd>
        </dl>

        <dl>
        <dt>제15조 게시물의 저작권과 소유권 서비스에 게재된 자료에 대한 권리</dt>
        <dd>
        <ol>
            <li>1. 게시물에 대한 저작권과 책임은 게시자에게 있으며 회사는 해당 게시물의 소유권을 갖습니다.</li>
            <li>2. 회원은 서비스를 이용하여 얻은 정보를 회원의 비영리적인 이용 이외의 목적으로 복제, 출판, 방송 등에 사용하거나 제3자에게 판매하는 등 상업적으로 사용할 수 없습니다.</li>
        </ol>
        </dd>
        </dl>

        <dl>
        <dt>제16조 서비스 이용 시간</dt>
        <dd>1. 서비스의 이용은 회사의 업무상 또는 기술상 특별한 지장이 없는 한 연중무휴 1일24시간을 원칙으로 합니다. 다만, 회사의 업무나 기술상의 이유, 천재지변 등으로 서비스가 일시 중지될 수 있고, 운영상의 목적으로 회사가 정한 기간에는 서비스가 일시 중지될 수 있습니다. 이때 회사는 미리 해당 내용을 공지하며, 부득이하면 사후에 통보할 수 있습니다.</dd>
        <dd>2. 회사는 서비스를 일정범위로 분할하여 각 범위별로 이용가능 시간을 별도로 정할 수 있습니다. 이 경우 그 내용을 사전에 공지합니다.</dd>
        </dl>

        <dl>
        <dt>제17조 서비스 제공의 중지</dt>
        <dd>회사는 다음 각 호에 해당하는 경우 서비스 제공을 중지하거나 제한할 수 있습니다.
        <ol>
            <li>1. 회원이 서비스의 운영을 고의 또는 과실로 방해하는 경우</li>
            <li>2. 서비스용 설비의 점검, 보수 또는 공사로 인한 부득이한 경우</li>
            <li>3. 전기통신사업법에 규정된 기간통신사업자가 전기통신 서비스를 중지했을 경우</li>
            <li>4. 회원이 이 약관에서 정한 의무를 위반한 경우</li>
            <li>5. 국가비상사태, 서비스 설비의 장애 또는 서비스 이용 폭주 등으로 서비스 이용에 지장이 있을 경우</li>
            <li>6. 기타 중대한 사유로 인하여 서비스 제공을 지속하는 것이 부적당하다고 판단되는 경우</li>
        </ol>
        </dd>
        </dl>

        <p>[제5장 계약 해지 및 이용 제한]</p>
       
        <dl>
        <dt>제18조 계약 해지 및 이용 제한</dt>
        <dd>1. 회원이 이용계약을 해지하고자 하는 때에는 회원탈퇴 메뉴를 이용하여 해지합니다.</dd>
        <dd>2. 회사는 회원이 다음 각 호에 해당하는 행위를 하였을 경우 사전동의 없이 이용계약을 해지하거나 또는 기간을 정하여 서비스 이용을 중지할 수 있습니다.
        <ol>
            <li>1) 타인의 이름, 아이디 및 비밀번호를 도용한 경우</li>
            <li>2) 서비스 운영을 고의로 방해한 경우</li>
            <li>3) 가입한 이름이 실명이 아닌 경우</li>
            <li>4) 같은 사용자가 이중등록을 한 경우</li>
            <li>5) 공공질서 및 미풍양속에 저해되는 내용을 고의로 유포시킨 경우</li>
            <li>6) 회원이 국익 또는 사회적 공익을 저해할 목적으로 서비스 이용을 계획 또는 실행하는 경우</li>
            <li>7) 타인의 명예를 손상시키거나 불이익을 주는 행위를 한 경우</li>
            <li>8) 제3자의 지적재산권을 침해하는 경우</li>
            <li>9) 회사의 서비스 정보를 이용하여 얻은 정보를 회사의 사전 승낙없이 복제 또는 유통시키거나 상업적으로 이용하는 경우</li>
            <li>10) 기타 회사가 정한 이용조건에 위반한 경우</li>
        </ol></dd>
        </dl>

        <p>[제6장 손해배상 등]</p>
      

        <dl>
        <dt>제19조 손해배상</dt>
        <dd>
        회사는 서비스 이용과 관련하여 무료 서비스의 경우에 한하여 회원에게 발생한 어떠한 손해에 관하여도 책임을 지지 않습니다.</dd>
        </dl>

        <dl>
        <dt>제20조 면책조항</dt>
        <dd>1. 회사는 천재지변 또는 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 관한 책임을 지지 않습니다.</dd>
        <dd>2. 회사는 회원의 귀책사유로 인한 서비스 이용의 장애에 대하여 책임을 지지 않습니다.</dd>
        <dd>3. 회사는 회원이 서비스를 이용하여 기대하는 수익을 상실한 것에 대하여 책임을 지지 않으며 그밖에 서비스를 통하여 얻은 자료로 인한 손해에 관하여 책임을 지지 않습니다.</dd>
        <dd>4. 회사는 회원이 서비스에 게재한 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 관하여는 책임을 지지 않습니다.</dd>
        </dl>

        <dl>
        <dt>제21조 관할법원</dt>
        <dd>서비스 이용으로 발생한 분쟁에 대해 소송이 제기될 경우 서울중앙지방법원을 관할법원으로 합니다.</dd>
        </dl>

        <ul>
        <li>[부칙]</li>
        <li>(변경일) 이 약관은 2021년 1월 29일부터 시행합니다.</li>
        </ul>
        
    </div>
    <p class="check">
        <input type="checkbox" name="agree" id="term1_agr">
        <label for="term1_agr">위 내용에 동의합니다.</label>
    </p>
    </div>  

    <div class="term2_wrap">
    <h2>개인정보 수집 및 이용동의(필수)</h2>
    <div class="term2">
    <dl>
    <dt>■ 수집하는 개인정보 항목</dt>
    <dd>회사는 회원가입, 할리스 멤버십카드 등록 및 조회, 고객 문의 사항 처리, 가맹상담, 아카데미 수강신청 등의 서비스 신청을 위해 아래와 같은 개인정보를 수집하고 있습니다.
    <ul>
    <li>◦ 개인정보 수집항목
    <ul class="txt">
        <li>- 필수 : 이름, 생년월일, 성별, 아이디, 비밀번호, 휴대전화번호</li>
        <li>- 선택 : 주소, E-mail</li>
    </ul></li>
    
    <li>◦ 서비스 이용과정 및 사업 처리과정에서 수집될 수 있는 개인정보
    <ul class="txt">
        <li>- 서비스이용기록, 접속로그, 쿠키, 접속IP정보, 결제기록, 이용정지기록, 멤버십 카드 번호, 할리스카드 번호, 할리스카드 PIN번호, 단말기 정보(OS종류, PUSH용 토큰, 디바이스 ID), DI</li>
    </ul></li>

    <li>◦ 개인정보 수집방법
    <ul class="txt">
        <li>- 회원가입, 고객문의, 고객설문, 가맹점 상담신청, 아카데미 수강신청, 이벤트 참여, 모바일앱 이용</li>

        <li>- 로그 분석 프로그램을 통한 생성 정보 수집</li>
        <li>- 쿠키에 의한 정보 수집</li>
    </ul></li>
    </ul></dd></dl>

    <dl>
    <dt>■ 개인정보의 수집 및 이용목적</dt>
    <dd>회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.

    <ul>
    <li>◦ 멤버십 회원 관리
    <ul>
        <li>- 멤버십 서비스 이용을 위한 본인 확인, 이벤트 참여, 불만처리 등 고객 문의, 고객 설문, 할리스콘 및 할리스카드 구입ㆍ선물</li>
    </ul></li>

    <li>◦ 가맹 상담 신청</li>

    <li>◦ 마케팅 및 광고에 활용
    <ul>
        <li>- 신규 서비스(제품) 개발 및 특화, 이벤트 등 광고성 정보 전달, 인구통계학적 특성에 따른 서비스 제공 및 광고 게재, 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계</li>
    </ul></li>

    <li>◦ 기타
    <ul>
        <li>- 각종 서비스 공지 및 이벤트 홍보 안내를 위한 문자메시지 및 이메일 전달
        (단, 별도 마케팅 및 프로모션 정보 수신 동의한 이용자에 한함)</li>
    </ul></li>
    </ul></dd></dl>

    <dl>
    <dt>■ 개인정보의 보유 및 이용기간</dt>
    <dd>
    <ul>
    <li>회사는 이용자의 개인정보제공일로부터 서비스를 제공하는 기간 동안에 한하여 이용자의 개인정보를 보유 및 이용하게 됩니다. 회사는 회원이 탈퇴를 요청하거나 개인정보 수집 및 이용에 대한 동의를 철회하는 경우, 개인정보 수집 및 이용목적이 달성된 후, 보유 및 이용기간이 종료된 후에는 예외 없이 해당 정보를 지체 없이 파기합니다.</li>

    <li>다만, 모바일앱 이용자의 경우, 그 앱을 삭제 한다하여도 자동 탈퇴 처리가 되지 않으니, 탈퇴를 원하실 경우 모바일앱 메인 화면 하단의 ‘회원탈퇴’를 통한 별도의 탈퇴 요청이 필요합니다.</li>

    <li>다만, 아래와 같은 경우 일정기간 동안 예외적으로 수집한 회원정보의 전부 또는 일부를 보관할 수 있습니다.</li>
    </ul>

    <ul>
        <li>◦ 보유항목: 아이디, 이름, DI</li>
        <li>◦ 보유이유: 무분별한 회원탈퇴 및 재가입으로 인한 부정 사용 및 피해예방</li>
        <li>◦ 보유기간: 회원 탈퇴 후 30일간</li>
        
        <li>전자상거래 등에서의 소비자 보호에 관한 법률, 전자금융거래법, 통신비밀보호법 등 법령에서 일정기간 정보의 보관을 규정하는 경우는 아래와 같습니다. 회사는 이 기간 동안 법령의 규정에 따라 개인정보를 보관하며, 본 정보를 다른 목적으로는 절대 이용하지 않습니다.</li>
    </ul>

    <dl>
        <dt>가. 전자상거래 등에서 소비자 보호에 관한 법률</dt>
        <dd>◦ 계약 또는 청약철회 등에 관한 기록: 5년</dd>
        <dd>◦ 대금 결제 및 재화 등의 공급에 관한 기록: 5년</dd>
        <dd>◦ 소비자의 불만 또는 분쟁처리에 관한 기록: 3년</dd>
        <dd>◦ 표시/광고에 관한 기록 : 6개월</dd>
    </dl>
    <dl>
        <dt>나. 전자금융거래법</dt>
        <dd>◦ 전자금융에 관한 기록: 5년 보관</dd>
    </dl>
    <dl>
        <dt>다. 통신비밀보호법</dt>
        <dd>◦ 접속로그, 접속IP정보, 서비스이용기록: 3개월</dd>
    </dl>
    </dd></dl>

    <dl>
        <dt>■ 개인정보의 파기절차 및 방법</dt>
        <dd>회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.
        <ul>
        <li>◦ 파기절차
            <ul>
            <li>
            - 회사는 회원탈퇴, 서비스 종료, 이용자에게 동의 받은 개인정보 보유기간의 도래와같이 개인정보의 수집 및 이용목적이 달성된 개인정보는 재생이 불가능한 방법으로파기하고 있습니다. 법령에서 보존의무를 부과한 정보에 대해서도 해당 기간 경과 후지체 없이 재생이 불가능한 방법으로 파기합니다.</li>
        </ul></li>

        <li>◦ 파기방법
        <ul>
        <li>- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 완전하게 삭제하고, 출력물 등은 분쇄기로 분쇄하거나 소각하는 방식 등으로 파기합니다.</li>
        </ul></li>
        </ul></dd></dl>
    </div>
    <p class="check">
        <input type="checkbox" name="agree" id="term2_agr">
        <label for="term2_agr">위 내용에 동의합니다.</label>
    </p>
    </div>

    <div class="term3_wrap">
    <h2>멤버십 이용약관(필수)</h2>
    <div class="term3">
    <dl>
        <dt>제 1장 할리스 멤버십 이용약관 총칙</dt>
            
            <dd>제1조 (카드명칭)
                <ul>
                <li>본 회원 카드의 명칭은 할리스멤버십카드(이하 “카드”라함)입니다.</li>
                </ul>
            </dd>
            <dd>제2조 (운영)
                <ul>
                <li>본 카드는 ㈜케이지할리스에프앤비(이하 “당사”) 에서 운영하며, 서비스는 본 약관에 동의한 회원으로 구성됩니다.</li>
                </ul>
            </dd>
            <dd>제3조 (목적)
            <ul><li>본 약관은 ㈜케이지할리스에프앤비가 제공하는 멤버십 서비스의 이용과 관련하여 필요한 이용 조건, 절차 및 ‘당사’와 ‘회원’간의 권리, 의무 등 기본적인 사항을 규정하는 것을 목적으로 합니다.</li></ul>
            </dd>
            <dd>제4조 (용어의 정의)
            <ul>
                <li>1.“할리스멤버십 서비스”라 함은 회원을 위해 당사가 제공하는 서비스로서 그 개요는 본 약관 5조에 기술한 바와 같습니다.</li>
                <li>2. “할리스 멤버십회원(이하 “회원”)”이라 함은 할리스 매장에서 멤버십 카드 발급 또는 간편가입 후, 당사의 약관을 승인하여 할리스 홈페이지 및 모바일앱을 통해 회원가입신청을 통해 멤버십 카드를 등록한 개인을 말합니다.</li>
                <li>3. “단말기”라 함은 당사가 매장에 적립서비스를 제공할 수 있도록 설치한 정보통신용 기기를 말하며, 신용카드 단말기와 POS가 있습니다.</li>
                <li>4. “카드번호”라 함은 회원의 식별과 회원의 서비스 이용을 위해 당사가 부여한 고유숫자의 조합으로 총 16자리로 구성됩니다.</li>
                <li>5. “CROWN(크라운)”이란 회원이 당사의 제품을 구매할 경우 당사가 고지한 방침에 따라 부여되는 혜택을 말합니다.</li>
                <li>6. “모바일앱”이란 할리스멤버십 서비스, 스마트오더 서비스 등을 이용하기 위한 애플리케이션입니다.</li>
                <li>7. “스마트오더”란 회원이 매장에 직접 방문하지 않고 모바일앱을 통해 상품을 주문(회원이 스마트오더로 결제를 실시간으로 발주하는 것)하는 전자상거래 서비스입니다.</li>
            </ul>
            </dd>
    </dl>
    
    <dl> 
        <dt>제 2장 할리스 멤버십 서비스</dt>    
        <dd>제5조 (할리스멤버십 서비스 개요)
            <ul>
            <li>1. 당사가 본 약관에 정해진 바에 따라 회원에게 제공하는 혜택은 아래와 같으며 할리스 멤버십 서비스를 이용하고자 하는 고객은 본 약관에 정해진 제반 절차를 거쳐 회원으로 가입하여야 합니다. 단, 개별 서비스의 특성에 따라 일부 서비스의 이용조건, 이용범위 등이 제한되거나 회원에게 일정한 자격요건이 요구될 수 있으며, 이 경우 당사는 그 제한 사항 및 자격요건을 회원에게 고지해 드립니다.
            <ul>
            <li>①) 적립 서비스
                <ul>
                <li>- 회원은 매장에서 상품/서비스를 구입하고 멤버십카드를 제시하면 ”크라운”를 적립 받을 수 있습니다. 단, “크라운”은 매장에서 상품/서비스를 구입한 시점의 매출금액에 대한 현장(매장)적립을 원칙으로 합니다.</li>
                <li>- 회원이 매장에서 상품/서비스를 구입하고 할리스 멤버십 카드를 제시하였음에도 불구하고 카드 마그네틱 손상 등 현장 적립이 불가능 할 경우, 할리스 멤버십 운영정책에 따라 할리스 멤버십 회원정보에 등록된 정보와 회원이 제시한 정보가 일치할 경우에 한하여 휴대전화번호 등 고객의 개인식별정보로 할리스 멤버십 카드를 대신할 수 있습니다.</li>
                </ul>
            </li>
            <li>②) 결제(사용) 서비스
                <ul>
                <li>- 휴게소점은 멤버십 적립은 가능하지만, 멤버십 추가 혜택(사이즈업, 샷/시럽 추가) 및 멤버십 쿠폰 사용 등의 서비스가 불가할 수 있습니다.</li>
                <li>- 단, 일부 휴게소점 및 특수매장의 경우 멤버십 적립 및 멤버십 혜택 서비스 등의 제한(또는 불가)이 있을 수 있습니다.</li></ul>
            </li>


            <li>③) 스마트오더 서비스
                <ul><li>- 회원은 모바일앱을 통해 제공되는 스마트오더 서비스를 이용할 수 있습니다.</li></ul>
            </li>
            </ul>
            </li></ul>
        </dd>

        <dd>제 6조(회원탈퇴 및 자격정지)
        <ul>
            <li>1. 회원은 언제든지 홈페이지 내 정보수정 페이지를 통해 회원탈퇴를 할 수 있습니다. 단, 회원탈퇴 시, 멤버십 카드에 저장된 모든 혜택은 자동 소멸되며, 소멸된 혜택은 다시 복구할 수 없습니다.</li>
            <li>2. 회원이 다음 각 호의 사유에 해당하는 경우, 당사는 회원의 자격을 상실시키거나 정지시킬 수 있습니다. 단, ③호의 경우에는 별도의 통보 없이 자동으로 자격이 상실 됩니다.
                <ul>
                <li>① 회원가입 신청 시에 허위의 내용을 기재한 경우</li>
                <li>② 부정적립, 부정사용 등 할리스 멤버십 카드를 부정한 방법 또는 목적으로 이용한 경우
                <ul>
                    <li>- 부정적립이란 매장에서 회원이 실제로 상품을 구매하지 않았음에도 불구하고(해당 매장에서 상품을 구매한 당사자의 동의가 있는 경우는 제외) 해당 회원에게 크라운이 적립된 경우를 말합니다.</li>
                    <li>- 부정 적립된 크라운은 회원 자격 상실 통보와 동시에 소멸하고 이에 대하여 회원은 어떠한 권리도 주장할 수 없습니다. 또한 부당이익을 취한 부분 즉, 부정 적립한 크라운을 통해 쿠폰 등의 서비스를 제공받은 경우 회원 당사자 또는 부정적립 동조자가 민형사상의 책임을 집니다.</li>
                    <li>- 부정사용이란 회원이 부정적립한 크라운을 통해 생성된 무료쿠폰을 사용하거나, 타회원의 동의없이 타회원의 쿠폰 등을 임의로 사용한 경우를 말합니다.</li>
                    <li>- 부정사용의 사유가 자신의 고의 또는 과실에 기한 것이 아님을 소명할 수 있습니다. 이 경우 당사는 회원의 소명 내용을 심사하여 회원의 주장이 타당하다고 판단하는 경우 회원으로 하여금 정상적으로 할리스 멤버십 카드의 서비스를 이용할 수 있도록 합니다.</li>
                </ul>
                </li>
                <li>③ 회원이 사망한 경우</li>
                <li>④ 다른 회원의 할리스 멤버십 카드 홈페이지 이용을 방해하거나 그 정보를 도용하는 등 전자상거래질서를 위협하는 경우</li>
                <li>⑤ 기타 본 약관에 규정된 회원의 의무를 위반한 경우</li>
                </ul></li>

            <li>3. 본 조 제1항에 의한 회원탈퇴 또는 제2항에 의한 회원자격상실이 확정되는 시점은 아래와 같습니다.
                <ul>
                <li>① 회원탈퇴 요청일 또는 회원자격상실 통보일에 회원탈퇴 또는 자격상실이 확정됩니다. 단, 회원 탈퇴 시 탈퇴를 요청한 회원 또는 자격을 상실한 회원은 잔여 크라운 및 소유한 쿠폰에 대한 권리를 포기한다는 의사를 표시한 것으로 간주합니다.</li>
                <li>② 사망으로 인한 자격상실의 경우에는 회원 사망일에 자격상실이 확정됩니다.</li>
                </ul>
            </li>
    
            <li>4. 본 조 제1항에 의한 회원탈퇴 시 잔여 크라운 및 모든 혜택은 자동으로 소멸되며, 소멸 시점은 본 조 제 3항에서 정한 회원탈퇴 시점 및 회원 자격 상실 시점에 따릅니다.</li>
        </ul>
        </dd>
    </dl>

    <dl>
        <dt>제 3장 할리스 멤버십 카드</dt>
        <dd>제7조 (회원가입 및 할리스멤버십 카드 발급)
            <ul>
            <li>1.회원으로 가입하고자 하는 고객은 당사 홈페이지 또는 모바일 앱에서 정해진 약관과 ‘개인정보의 수집, 제공 및 활용에 관한 동의’ 기타 동의가 필요한 사항에 동의함으로써 회원 가입을 신청합니다. 단, 만 14세 미만의 경우 가입하실 수 없습니다.</li>
            <li>2. 카드발급은 할리스 모바일 앱 및 홈페이지에서 회원가입 시 자동 발급 됩니다.</li>
            <li>3. 회원은 회원자격을 타인에게 양도하거나 대여 또는 담보의 목적으로 이용할 수 없습니다.</li>
            <li>4. 본 조 제 1항에 따른 가입신청에 있어 ‘당사’는 ‘회원’의 종류에 따라 인증전문기관을 통한 본인인증을 요청할 수 있으며, 본 조 제1항 및 제2항에 따라 가입된 회원 중 개인정보를 잘못 기입했거나 이름 등이 법적 절차에 의해 변경되었을 경우 증빙자료 제출/심사 후 명의를 변경할 수 있습니다.</li>
            <li>5. 카드의 분실/파손/사용정지 등의 상태 변경은 회원 자격에 영향을 미치지 않습니다.</li>
            </ul>
        </dd>
        <dd>제8조 (할리스멤버십 카드의 이용 및 운용)
            <ul>
            <li>1. “회원”은 “매장”에서 제품 및 상품을 구매하고, “할리스 멤버십 카드”를 제시할 경우 (할리스 멤버십 운영정책에 따라 회원 앞으로 등록된 휴대전화번호가 “할리스 멤버십 카드”를 대신할 수 있습니다.) 영수증 1개당 결제 금액이 4,000원 이상 10,000원 미만일 경우 1개의 크라운 적립, 1만원 부터 5,000원 단위로 크라운 1개가 적립됩니다. (V.A.T포함) 단, 당사의 프로모션에 따라 크라운 적립이 제외되는 제품 및 상품이 있을 수 있습니다.</li>
            <li>2. 멤버십 회원 등록을 완료하였거나, “멤버십 서비스”를 1회라도 이용한 “간편가입회원”은 본 약관의 모든 사항에 동의한 것으로 간주합니다.</li>
            <li>3. “회원”은 카드를 타인에게 양도 또는 담보의 목적으로 이용할 수 없으며 선량한 관리자로서의 주의를 다하여 카드를 이용, 관리하여야 합니다.</li>
            <li>4. “회원”은 카드를 분실하였을 경우 홈페이지 또는 모바일 앱에서 카드 사용 중단 처리 후, 매장 방문 또는 온라인을 통해 재발급 할 수 있으며, 그렇지 않아 발생되는 손실에 대한 책임은 모두 회원에게 있습니다.</li>
            <li>5. 당사가 정한 회원의 필수정보 (이름, 생년월일, 연락처, 이메일 등)가 누락되어 있을 경우 멤버십 서비스 이용에 제한이 있을 수 있습니다.</li>
            <li>6. 적립된 크라운의 유효기간은 적립일로부터 1년이며, 이 기간 내에 사용하지 않은 크라운은 1년 초과일에 자동 소멸됩니다. 단, 회원의 자격은 계속 유지됩니다.</li>
            <li>7. 프로모션 및 행사 운영 방침에 따라 크라운 적립은 기타 할인 및 쿠폰과 중복이 되지 않을 수 있습니다.</li>
            <li>8. 적립된 크라운의 개수에 따라 등급이 나뉘며, 등급별로 다양한 혜택을 제공해 드립니다. 각 등급의 혜택은 당사의 마케팅 정책에 따라 달라질 수 있으며, 자세한 내용은 홈페이지 또는 멤버십 리플렛을 통해 확인 가능합니다.</li>
            </ul>
        </dd>
        <dd>제9 조 (적립포인트 및 크라운의 관리 및 권리)
            <ul>
            <li>1. 멤버십 이용에 따른 적립크라운은 카드발급 후 최초 적립하는 시점부터 누적되어 적용됩니다.</li>
            <li>2. 적립된 크라운은 회원에게 귀속된 권리이므로, 당사는 이를 제 3자에게 제공할 수 없습니다.</li>
            <li>3. “크라운” 적립에 오류가 있을 경우 “회원”은 오류 발생 시점에서 30일 이내에 “당사”에 정정신청을 하여야 하며, “당사”는 “회원”의 정정요청일로부터 30일 이내에 조정을 할 수 있습니다. 단, “회원”은 이를 증명할 수 있는 구매 영수증이나 기타 자료를 제시하여야 합니다.</li>
            <li>4. 적립된 크라운의 조회는 당사의 인터넷 홈페이지, 모바일앱 또는 각 매장에서 설치된 POS 단말기를 통해 가능합니다.</li>
            </ul>
        </dd>
        <dd>제 10 조(카드의 분실 및 재발급)
            <ul>
            <li>1. 회원이 카드를 분실, 파•훼손하였을 경우 할리스 홈페이지 또는 모바일앱에 로그인 후 멤버십카드 재발급을 통해 가능합니다. 재발급 시 기존 카드는 정지되며, 기존 카드에 적립되어 있던 크라운은 신규 카드로 이관됩니다.
            </li></ul>
        </dd>
        <dd>제 11조(회원탈퇴 및 자격정지)
            <ul>
            <li>1. 할리스 멤버십 카드의 서비스를 중단하고자 할 때는 당사는 중단시점 최소 3개월 이전에 제 6조에 의거하여 회원에게 통보합니다.</li>
            <li>2. 할리스 멤버십 카드 서비스의 종료기준일은 회원에게 송부된 게시물에 명시된 일자로 합니다.</li>
            </ul>
        </dd>
    </dl>

    <dl>
        <dt>제4장 스마트오더 서비스</dt>
        <dd>제12조 (스마트오더 서비스)
        <ul>
            <li>1. 회원은 모바일앱을 통해 제공되는 스마트오더 서비스를 이용할 수 있으며, 제공되는 서비스는 아래와 같습니다.
                <ul>
                <li>① 애플리케이션을 통한 주문 및 결제 서비스
                    <ul>
                    <li>1) 애플리케이션을 통하여 회원과 당사(매장을 포함함) 간에 주문 및 결제 등 상품 매매가 이루어질 수 있도록 온라인 거래 서비스를 제공</li>
                    <li>2) 회원의 위치정보(GPS)를 기반으로 2km 반경 내, 매장별 실시간 주문 가능 수량을 확인하여 온라인으로 주문</li>
                    </ul></li>

                <li>② 회원 전용 서비스
                    <ul>
                    <li>1) 회원 위치 정보에 따라 매장을 설정하는 서비스</li>
                    <li>2) 회원이 선호하는 메뉴는 “나만의 메뉴”로 등록</li>
                    <li>3) 멤버십 혜택에 따라 주문 시 크라운 자동 적립 서비스</li>
                    </ul>
                </li>
                </ul>
            </li>

            <li>2. 서비스의 이용
                <ul>
                <li>① 스마트오더 서비스는 할리스 멤버십 등록 회원에게만 제공됩니다.</li>
                <li>② 스마트오더 서비스시간 기준은 매장의 영업시간을 원칙으로 합니다. 다만, 스마트오더의 주문 전송과 주문 수령 가능 시간은 매장의 상황에 따라 상이할 수 있습니다.</li>
                <li>③ 스마트오더로 주문할 수 있는 상품은 제조음료 및 베이커리, MD 등 입니다. 단, 매장 별 취급 메뉴가 일부 상이할 수 있으므로 주문 시 반드시 확인하도록 합니다.</li>
                <li>④ 당사는 서비스를 일정 범위로 분할하여 각 범위 별로 이용 가능한 시간을 별도로 정할 수 있으며, 이 경우 그 내용을 서비스 내 공지사항 등으로 공지합니다.</li>
                </ul>
            </li>

            <li>3. 결제 및 주문 취소 등
                <ul>
                <li>① 스마트오더 서비스 내 상품의 주문 신청에 따른 회원의 결제 의사표시에 대해 당사가 주문 완료를 통해 승낙의 의사표시를 함으로써 당사와 회원 사이에 해당 상품에 대한 매매계약이 성립합니다.</li>
                <li>② 당사는 전항의 구매신청에 대해 다음 각 호에 해당될 경우 주문을 승낙하지 않을 수 있습니다.
                    <ul>
                    <li>1) 스마트오더로 주문이 불가능한 상품이나 매장을 선택한 경우</li>
                    <li>2) 구매 신청을 승낙하는 것이 당사의 기술상 현저히 지장이 있다고 판단되는 경우</li>
                    <li>3) 매장 내 재고 미보유, 운영 상황 등에 따라 상품 제공이 불가능한 경우</li>
                    <li>4) 기타 회원의 귀책사유로 승인이 불가능하다고 판단되는 경우</li>
                    </ul>
                </li>
                <li>③ 회원은 제 1항 당사의 승낙여부 확인 통지를 받은 경우, 의사표시와 다른 경우에는 승낙 여부 확인 통지를 받은 즉시 주문 건에 대한 변경 및 취소를 요청할 수 있습니다. 이 때 당사는 가능한 회원의 요청을 수용하기 위해 노력하되, 다만, 결제를 완료한 이후에는 본 조 8항에 준하여 구매변경 및 결제취소가 불가할 수 있습니다.</li>
                <li>④ 회원은 본 서비스의 결제에 따른 대금 지급 방법은 다음 각호의 방법 중 가용한 방법으로 지급 할 수 있습니다. 이 경우 당사는 회원에게 지급방법에 대하여 어떠한 명목의 수수료도 추가하여 징수하지 않습니다. 단 당사의 사정에 따라 지급방법은 변경될 수 있습니다.
                    <ul>
                    <li>1) 신용카드 등 신용카드와 동일한 결제 수단</li>
                    <li>2) 할리스카드</li>
                    <li>3) 할리스콘 등 모바일쿠폰</li>
                    <li>4) 쿠폰함에 등록된 쿠폰</li>
                    </ul>
                </li>
                <li>⑤ 회원은 스마트오더를 통해 상품 등의 구매 시, 전 항의 결제 수단을 사용함에 있어 반드시 본인 명의의 결제 수단을 사용하여야 하며, 타인의 결제 수단을 임의 사용함으로써 발생하는 당사, 결제 수단의 적법한 소유자, 결제 관련 제 3자의 손실과 손해에 대한 책임은 회원에게 있습니다.</li>
                <li>⑥ 당사는 상품 등의 결제의 취소 및 환불과 관련하여 전자상거래법 등 관계 법령을 준수합니다.</li>
                <li>⑦ 회원이 상품 등을 수령 후, 이물질 등 명백한 제조 과정 상의 하자가 확인되는 경우, 회원은 매장에 환불 요청을 할 수 있으며, 환불 요청 시 매장은 즉시 하자에 대한 조치를 취하여야 합니다.</li>
                <li>⑧ 스마트오더 주문 서비스 이용 시, 회원의 귀책 사유로 인한 주문 결제 건에 대한 변경 또는 취소는 결제 및 주문 전송 이후 일체 불가합니다.</li>
                <li>⑨ 회원이 스마트오더를 통해 주문한 상품 수령이 가능해진 경우, 해당 매장에서 회원에게 PUSH 알림을 통해 제조완료 및 픽업 요청을 전달합니다. 매장의 제조완료 및 픽업 요청에도 불구하고 수령 대기시간(20분)을 초과하여 상품을 수령하지 않을 시, 회원은 결제하였다는 이유로 제조 상품의 경우 제조를 다시 요청할 수 없으며, 회원의 결제취소가 받아들여지지 아니할 수 있으며, 이로 인하여 회원에게 발생하는 손해에 대하여 당사는 고의 또는 과실이 없는 한 책임을 부당하지 않습니다</li>
                </ul>
            </li>
        </ul>
        </dd>
    </dl>

    <dl>
        <dt>제 5장 기타</dt>
            <dd>제13조 (저작권의 귀속 및 이용제한)
                <ul>
                <li>1. 당사가 작성한 저작물에 대한 저작권 기타 지적재산권은 당사에 귀속합니다.</li>
                <li>2. 회원은 당사 홈페이지를 이용함으로써 얻은 정보를 당사의 사전 승낙없이 복제, 송신, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제 3자에게 이용하게 하여서는 안됩니다.</li>
                </ul>
            </dd>

            <dd>제14조(약관개정)
            <ul>
            <li>1. 본 약관은 수시로 개정될 수 있으며 약관을 개정하고자 할 경우 당사는 개정된 약관을 적용하고자 하는 날(이하 "효력 발생일"이라고 합니다)로부터 30일 이전에 약관이 개정된다는 사실과 개정된 내용 등을 아래에 규정된 방법 중 1가지 이상의 방법으로 회원에게 고지하여 드립니다.
                <ul>
                <li>① SMS</li>
                <li>② 할리스 홈페이지(www.hollys.co.kr) 내 게시</li>
                <li>③ 할리스 모바일 홈페이지(m.hollys.co.kr) 내 게시</li>
                </ul>
            </li>
            <li>2. 당사가 SMS고지의 방법으로 본 약관이 개정된 사실 및 개정된 내용을 회원에게 고지하는 경우에는 회원이 당사에 기제공한 가장 최근에 제공된 휴대폰전화번호로 고지하며, 회원가입시 SMS 수신 동의에 체크한 회원에 한해 발송됩니다.</li>
            <li>3. 본 조의 규정에 의하여 개정된 약관(이하 "개정약관")은 원칙적으로 그 효력 발생일로부터 장래를 향하여 유효합니다.</li>
            <li>4. 본 약관의 개정과 관련하여 이의가 있는 회원은 당사에게 통보함으로써 회원탈퇴를 할 수 있습니다. 단, 이의가 있음에도 불구하고 본 조 제1항 내지 제2항에 정해진 바에 따른 당사의 고지가 있은 후 30일 이내에 회원탈퇴를 하지 않은 회원은 개정 약관에 동의한 것으로 봅니다.</li>
            <li>5. 본 조의 통지방법 및 통지의 효력은 본 약관의 각 조항에서 규정하는 개별적인 또는 전체적인 통지의 경우에 이를 준용합니다</li>
            </ul>
            </dd>

            <dd>제15조(분쟁조정 및 관할 법원)
            <ul>
            <li>본 약관에 따른 분쟁의 조정은 일반 상관례에 따라 회원과 당사가 상호 협의하여 결정하되 합의가 안될 경우에는 본 약관과 관련한 제반 분쟁 및 소송은 서울중앙지방법원 또는 회원의 주소지 관할법원을 제1심 관할 법원으로 합니다.</li>
            </ul>
            </dd>
    </dl>
    <dl>
        <dt>[부칙]</dt>
        <dd>본 약관은 2020년 1월 1일부터 효력이 발생되며, 기존 약관에 동의한 고객은 제 7조에 따른 고지를 받은 날로부터 30일 이내에 반대의 의사표시를 하지 않은 경우 본 약관에 동의하신 것으로 간주합니다.</dd>
    </dl>
    </div>
    <p class="check">
        <input type="checkbox" name="agree" id="term3_agr">
        <label for="term3_agr">위 내용에 동의합니다.</label>
    </p>
    </div>

    <p class="check_all">
        <input type="checkbox" name="agree_all" id="agree_all" onclick = "all_check()">
        <label for="agree_all">위 모든 이용약관에 동의합니다.</label>
    </p>

    <button type="submit" name="next">다음단계</button>
</section>

</fieldset>
</form> 
    </div>

</section>

<div class="quick_wrap">
    <section class="quick">
        <h2>QUICK MENU</h2>
        <ul>
            <li class="quick_txt1"><a href="../menu/coffee/coffee.php">메뉴</a></li>
            <li class="quick_txt2"><a href="#">가맹문의</a></li>
            <li class="quick_txt3"><a href="#">할리스 아카데미</a></li>
            <li class="quick_txt4"><a href="#">기업특판</a></li>
            <li class="quick_txt5"><a href="../Hollys_news.php">이벤트</a></li>
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