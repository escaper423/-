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

$sql="update ������ 
set �г�=:sub_grade, �������ȣ:=sub_no, �������:sub_name, �й�:sub_num, ����:sub_hakjum, �а��ڵ�:sub_dept, �ð�:sub_time, �⵵:sub_year, �б�:sub_semester, ����:sub_day, �����̸�:sub_pf, ������ȣ:sub_pfnum, �ǹ���ȣ:sub_structure, ���ǽǹ�ȣ:sub_classroom)
where �������ȣ=$sub_no and �й�=$sub_num";
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