<?
 session_start();
 require('conn.php');

$id = $_POST["id"];
$passwd = $_POST["pw"];

$sql = "select * from 조교 where 조교번호 = '$id' and 비밀번호 = '$passwd'";
$result = oci_parse($conn, $sql);

$re = oci_execute($result);
$row_num = oci_fetch_all($result, &$row);

oci_free_statement($result);
oci_close($conn);

if($row_num==1) {
 $_SESSION["id"] = $id;
 $_SESSION["passwd"] = $passwd;
 echo(" <meta http-equiv='Refresh' content='0; URL=assis.html'>");
}
else{
  echo("fail<br>");
  exit;
 }
?>