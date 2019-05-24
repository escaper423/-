<?
require('conn.php');
$sub_grade = $_POST["sub_grade"];
$sub_no = $_POST["sub_no"];
$sub_name = $_POST["sub_name"];
$sub_num = $_POST["sub_num"];
$sub_hakjum = $_POST["sub_hakjum"];
$sub_dept = $_POST["sub_dept"];
$sub_time = $_POST["sub_time"];
$sub_year = $_POST["sub_year"];
$sub_semester = $_POST["sub_semester"];
$sub_day = $_POST["sub_day"];
$sub_pf = $_POST["sub_pf"];
$sub_pfnum = $_POST["sub_pfnum"];
$sub_structure = $_POST["sub_structure"];
$sub_classroom = $_POST["sub_classroom"];

$sql="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values (:sub_grade, :sub_no, :sub_name, :sub_num, :sub_hakjum, :sub_dept, :sub_time, :sub_year, :sub_semester, :sub_day, :sub_pf, :sub_pfnum, :sub_structure, :sub_classroom)";
$sql0="insert into 교수시간표 (교과목번호, 분반, 교수번호, 요일, 시간) values (:sub_no, :sub_num, :sub_pfnum, :sub_day, :sub_time)";
$result=oci_parse($conn, $sql);
$result0=oci_parse($conn, $sql0);
oci_bind_by_name($result, ":sub_grade", $sub_grade);
oci_bind_by_name($result, ":sub_no", $sub_no);
oci_bind_by_name($result, ":sub_name", $sub_name);
oci_bind_by_name($result, ":sub_num", $sub_num);
oci_bind_by_name($result, ":sub_hakjum", $sub_hakjum);
oci_bind_by_name($result, ":sub_dept", $sub_dept);
oci_bind_by_name($result, ":sub_time", $sub_time);
oci_bind_by_name($result, ":sub_year", $sub_year);
oci_bind_by_name($result, ":sub_semester", $sub_semester);
oci_bind_by_name($result, ":sub_day", $sub_day);
oci_bind_by_name($result, ":sub_pf", $sub_pf);
oci_bind_by_name($result, ":sub_pfnum", $sub_pfnum);
oci_bind_by_name($result, ":sub_structure", $sub_structure);
oci_bind_by_name($result, ":sub_classroom", $sub_classroom);

oci_bind_by_name($result0, ":sub_no", $sub_no);
oci_bind_by_name($result0, ":sub_num", $sub_num);
oci_bind_by_name($result0, ":sub_pfnum", $sub_pfnum);
oci_bind_by_name($result0, ":sub_day", $sub_day);
oci_bind_by_name($result0, ":sub_time", $sub_time);
$re=oci_execute($result);
$re1=oci_execute($result0);
oci_close($conn);
?>