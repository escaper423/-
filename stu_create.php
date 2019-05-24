<?
require('conn.php');
$stu_num = $_POST["stu_num"];
$stu_pw = $_POST["stu_pw"];
$stu_name = $_POST["stu_name"];
$stu_ssn = $_POST["stu_ssn"];
$stu_grade = $_POST["stu_grade"];
$stu_address = $_POST["stu_address"];
$stu_phone = $_POST["stu_phone"];
$stu_deptno = $_POST["stu_deptno"];
$stu_status = $_POST["stu_status"];

$sql="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values (:stu_num, :stu_pw, :stu_name, :stu_ssn, :stu_grade, :stu_address, :stu_phone, :stu_deptno, :stu_status)";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":stu_num", $stu_num);
oci_bind_by_name($result, ":stu_pw", $stu_pw);
oci_bind_by_name($result, ":stu_name", $stu_name);
oci_bind_by_name($result, ":stu_ssn", $stu_ssn);
oci_bind_by_name($result, ":stu_grade", $stu_grade);
oci_bind_by_name($result, ":stu_address", $stu_address);
oci_bind_by_name($result, ":stu_phone", $stu_phone);
oci_bind_by_name($result, ":stu_deptno", $stu_deptno);
oci_bind_by_name($result, ":stu_status", $stu_status);
$re=oci_execute($result);
oci_close($conn);
?>