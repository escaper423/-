<?
require('conn.php');
$sub_no = $_POST["sub_no"];
$sub_num = $_POST["sub_num"];

$sql="delete from 교과목
where 교과목번호=$sub_no and 분반=$sub_num";
$re=oci_execute($result);
oci_close($conn);
?>