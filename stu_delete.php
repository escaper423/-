<?
require('conn.php');
$stu_num = $_POST["stu_num"];
$stu_pw = $_POST["stu_pw"];

$sql="delete from �л�
where �й�=$stu_num and ��й�ȣ=$stu_pw";
$result=oci_parse($conn, $sql);
$re=oci_execute($result);
oci_close($conn);
?>