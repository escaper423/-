<?php
 require('conn.php');

$id = $_POST["id"];
$passwd = $_POST["pw"];

$sql = "select * from �л� where �й� = '$id' and ��й�ȣ = '$passwd'";
$result = oci_parse($conn, $sql);

$re = oci_execute($result);
$row_num = oci_fetch_all($result, &$row);

oci_free_statement($result);
oci_close($conn);

if($row_num==1) {
setcookie("stu_id",$id);
setcookie("stu_pw",$pw);
 echo(" <meta http-equiv='Refresh' content='0; URL=stu.html'>");
}
else{
  echo("�α��ο� �����߽��ϴ�.<br>");
  exit;
 }
?>