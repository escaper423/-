<?
 session_start();
 require('conn.php');

$id = $_POST["id"];
$passwd = $_POST["pw"];

$sql = "select * from 교수 where 교수번호 = '$id' and 비밀번호 = '$passwd'";
$result = oci_parse($conn, $sql);

$re = oci_execute($result);
$row_num = oci_fetch_all($result, &$row);

oci_free_statement($result);
oci_close($conn);

if($row_num==1) {
 $_SESSION["id"] = $id;
 $_SESSION["passwd"] = $passwd;
 echo(" <meta http-equiv='Refresh' content='0; URL=pf.html'>");
}
else{
  echo("로그인에 실패했습니다.<br>");
  exit;
 }
?>