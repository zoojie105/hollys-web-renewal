<meta charset="ute-8">
<?php
$user_id = $_POST["user_id"];
$user_pwd = $_POST["user_pwd"];
$user_name = $_POST["user_name"];
$dob = $_POST["dob"];
$mobile = $_POST["mobile"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$reg_date = date("y-m-d");

include "../../inc/dbcon.php";

$sql = "insert into members(user_id, user_pwd, user_name, dob, mobile, email, postalCode, addr1, addr2, reg_date, level) values('$user_id', '$user_pwd', '$user_name', '$dob', '$mobile', '$email', '$postalCode', ',$addr1', '$addr2', '$reg_date', 'SILVER');";

mysqli_query($dbcon,$sql);

mysqli_close($dbcon);

echo "
    <script type=\"text/javascript\">
    location.href=\"join_ok.php\";
    </script>
";