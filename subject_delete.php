<?
require('conn.php');
$sub_no = $_POST["sub_no"];
$sub_num = $_POST["sub_num"];

$sql="delete from ������
where �������ȣ=$sub_no and �й�=$sub_num";
$re=oci_execute($result);
oci_close($conn);
?>