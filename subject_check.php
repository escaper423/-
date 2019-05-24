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
$sub_structure = $_POST["sub_structure"];
$sub_classroom = $_POST["sub_classroom"];

$sql="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 건물번호, 강의실번호) 
values (:sub_grade, :sub_no, :sub_name, :sub_num, :sub_hakjum, :sub_dept, :sub_time, :sub_year, :sub_semester, :sub_day, :sub_pf, :sub_structure, :sub_classroom)";
$result=oci_parse($conn, $sql);
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
oci_bind_by_name($result, ":sub_structure", $sub_structure);
oci_bind_by_name($result, ":sub_classroom", $sub_classroom);
$re=oci_execute($result);
oci_close($conn);
?>