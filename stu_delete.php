<?
require('conn.php');
$stu_num = $_POST["stu_num"];
$stu_pw = $_POST["stu_pw"];

$sql="delete from 학생
where 학번=$stu_num and 비밀번호=$stu_pw";
$result=oci_parse($conn, $sql);
$re=oci_execute($result);
oci_close($conn);
?>