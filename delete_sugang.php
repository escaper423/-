<?php
require("conn.php");
$stu_num = $HTTP_COOKIE_VARS["stu_id"]; 
$sub_no = $_POST["sub_no"];
$dist_no = $_POST["dist_no"];

$sql="delete from ���� where �й� = :stu_num and �������ȣ = :sub_no and �й� = :dist_no";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_no", $sub_no);
oci_bind_by_name($result, ":dist_no", $dist_no);
oci_bind_by_name($result, ":stu_num", $stu_num);
$re=oci_execute($result);
oci_close($conn);
echo(" <meta http-equiv='Refresh' content='0'; URL='sugang_check.php'>");
?>
