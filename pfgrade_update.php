<?
require('conn.php');
$sub_num = $_POST["sub_num"];
$stu_num = $_POST["stu_num"];
$grade = $_POST["grade"];

$sql="update ���� set ����=:grade 
where �������ȣ=:sub_num and �й�=$stu_num";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_num", $sub_num);
oci_bind_by_name($result, ":grade", $grade);
$re=oci_execute($result);
oci_close($conn);
?>