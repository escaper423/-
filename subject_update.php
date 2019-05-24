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

$sql="update 교과목 
set 학년=:sub_grade, 교과목번호:=sub_no, 교과목명:sub_name, 분반:sub_num, 학점:sub_hakjum, 학과코드:sub_dept, 시간:sub_time, 년도:sub_year, 학기:sub_semester, 요일:sub_day, 교수이름:sub_pf, 교수번호:sub_pfnum, 건물번호:sub_structure, 강의실번호:sub_classroom)
where 교과목번호=$sub_no and 분반=$sub_num";
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
oci_bind_by_name($result, ":sub_pfnum", $sub_pfnum);
oci_bind_by_name($result, ":sub_structure", $sub_structure);
oci_bind_by_name($result, ":sub_classroom", $sub_classroom);
$re=oci_execute($result);
oci_close($conn);
?>