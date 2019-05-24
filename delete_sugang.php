<?php
require("conn.php");
$stu_num = $HTTP_COOKIE_VARS["stu_id"]; 
$sub_no = $_POST["sub_no"];
$dist_no = $_POST["dist_no"];

$sql="delete from 수강 where 학번 = :stu_num and 교과목번호 = :sub_no and 분반 = :dist_no";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_no", $sub_no);
oci_bind_by_name($result, ":dist_no", $dist_no);
oci_bind_by_name($result, ":stu_num", $stu_num);
$re=oci_execute($result);
oci_close($conn);
echo(" <meta http-equiv='Refresh' content='0'; URL='sugang_check.php'>");
?>
