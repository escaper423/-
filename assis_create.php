<?
require('conn.php');
$assis_num = $_POST["assis_num"];
$assis_pw = $_POST["assis_pw"];
$assis_name = $_POST["assis_name"];
$assis_deptno = $_POST["assis_deptno"];

$sql="insert into 조교(조교번호, 비밀번호, 조교이름, 학과코드) values (:assis_num, :assis_pw, :assis_name, :assis_deptno)";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":assis_num", $assis_num);
oci_bind_by_name($result, ":assis_pw", $assis_pw);
oci_bind_by_name($result, ":assis_name", $assis_name);
oci_bind_by_name($result, ":assis_deptno", $assis_deptno);
$re=oci_execute($result);
oci_close($conn);
?>