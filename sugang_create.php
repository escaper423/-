<?php
require('conn.php');
$sub_no= $_POST["sub_no"];
$sub_num = $_POST["sub_num"];
$stu_id =  $HTTP_COOKIE_VARS["stu_id"]; 
$grade = '���Է�';
$query="SELECT ����,�ð� from ������ where �������ȣ = '$sub_no' and �й� = '$sub_num'";
$res = oci_parse($conn,$query);
oci_define_by_name($res,'����',$date);
oci_define_by_name($res,'�ð�',$time);
oci_execute($res);
$one = oci_fetch_all($res,$chk);
if(!$one) { echo "�������� �ʴ� �����Դϴ�.";}
else{
$query2="SELECT �������ȣ,�й� from ���� where �й� = '$stu_id' and �������ȣ = '$sub_no'";
$query3="SELECT ����,�ð� from ���� where �й� = '$stu_id' and ���� = '$date' and �ð� = '$time'";
$res2 = oci_parse($conn,$query2);
$res3 = oci_parse($conn,$query3);
$r = oci_execute($res2);
$r2 = oci_execute($res3);
$two = oci_fetch_array($res2,OCI_ASSOC);
$three = oci_fetch_array($res3,OCI_ASSOC);
if($two["�������ȣ"])
{
	echo("���� ������ �̹� �����մϴ�.");
	oci_close($conn);
}
else if($three["����"] && $three["�ð�"])
{
	echo("���� �ð��뿡 ��� ������ �̹� �����մϴ�.");
	oci_close($conn);
}
else
{
 	
	$sql="insert into ����(�������ȣ, �й�, �й�, ����, �ð�, ����) values (:sub_no, :sub_num, :stu_num, :date_t, :time_t, :grade)";
	$result=oci_parse($conn, $sql);
	oci_bind_by_name($result, ":sub_no", $sub_no);
	oci_bind_by_name($result, ":sub_num", $sub_num);
	oci_bind_by_name($result, ":stu_num", $stu_id);
	oci_bind_by_name($result, ":date_t", $date);
	oci_bind_by_name($result, ":time_t", $time);
	oci_bind_by_name($result, ":grade", $grade);

	$re=oci_execute($result);	
	oci_close($conn);
	echo("������ ���������� �߰��Ǿ����ϴ�.");
}
}
?>