<?
require('conn.php');
$pf_num = $_POST["pf_num"];
$pf_pw = $_POST["pf_pw"];
$pf_name = $_POST["pf_name"];
$pf_ssn = $_POST["pf_ssn"];
$pf_deptno = $_POST["pf_deptno"];
$pf_phone = $_POST["pf_phone"];

$sql="insert into ����(������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) values (:pf_num, :pf_pw, :pf_name, :pf_ssn, :pf_deptno, :pf_phone)";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":pf_num", $pf_num);
oci_bind_by_name($result, ":pf_pw", $pf_pw);
oci_bind_by_name($result, ":pf_name", $pf_name);
oci_bind_by_name($result, ":pf_ssn", $pf_ssn);
oci_bind_by_name($result, ":pf_deptno", $pf_deptno);
oci_bind_by_name($result, ":pf_phone", $pf_phone);
$re=oci_execute($result);
oci_close($conn);
?>