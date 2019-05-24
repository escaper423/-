<?php
require('conn.php');
$sub_no= $_POST["sub_no"];
$sub_num = $_POST["sub_num"];
$stu_id =  $HTTP_COOKIE_VARS["stu_id"]; 
$grade = '미입력';
$query="SELECT 요일,시간 from 교과목 where 교과목번호 = '$sub_no' and 분반 = '$sub_num'";
$res = oci_parse($conn,$query);
oci_define_by_name($res,'요일',$date);
oci_define_by_name($res,'시간',$time);
oci_execute($res);
$one = oci_fetch_all($res,$chk);
if(!$one) { echo "존재하지 않는 과목입니다.";}
else{
$query2="SELECT 교과목번호,분반 from 수강 where 학번 = '$stu_id' and 교과목번호 = '$sub_no'";
$query3="SELECT 요일,시간 from 수강 where 학번 = '$stu_id' and 요일 = '$date' and 시간 = '$time'";
$res2 = oci_parse($conn,$query2);
$res3 = oci_parse($conn,$query3);
$r = oci_execute($res2);
$r2 = oci_execute($res3);
$two = oci_fetch_array($res2,OCI_ASSOC);
$three = oci_fetch_array($res3,OCI_ASSOC);
if($two["교과목번호"])
{
	echo("같은 과목이 이미 존재합니다.");
	oci_close($conn);
}
else if($three["요일"] && $three["시간"])
{
	echo("같은 시간대에 듣는 과목이 이미 존재합니다.");
	oci_close($conn);
}
else
{
 	
	$sql="insert into 수강(교과목번호, 분반, 학번, 요일, 시간, 성적) values (:sub_no, :sub_num, :stu_num, :date_t, :time_t, :grade)";
	$result=oci_parse($conn, $sql);
	oci_bind_by_name($result, ":sub_no", $sub_no);
	oci_bind_by_name($result, ":sub_num", $sub_num);
	oci_bind_by_name($result, ":stu_num", $stu_id);
	oci_bind_by_name($result, ":date_t", $date);
	oci_bind_by_name($result, ":time_t", $time);
	oci_bind_by_name($result, ":grade", $grade);

	$re=oci_execute($result);	
	oci_close($conn);
	echo("과목이 정상적으로 추가되었습니다.");
}
}
?>