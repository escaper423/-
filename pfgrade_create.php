<?
require('conn.php');
$sub_num = $_POST["sub_num"];
$stu_num = $_POST["stu_num"];
$grade = $_POST["grade"];

$sql="update 수강 set 성적=:grade 
where 교과목번호=:sub_num and 학번=$stu_num";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_num", $sub_num);
oci_bind_by_name($result, ":grade", $grade);
$re=oci_execute($result);
oci_close($conn);
?>