<?
require('conn.php');
$pf_num = $_POST["pf_num"];
$pf_ssn = $_POST["pf_ssn"];
$pf_phone = $_POST["pf_phone"];

$sql="select ������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ 
 from ���� 
 where ������ȣ = :pf_num and �ֹε�Ϲ�ȣ = :pf_ssn and ��ȭ��ȣ = :pf_phone";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":pf_num", $pf_num);
oci_bind_by_name($result, ":pf_ssn", $pf_ssn);
oci_bind_by_name($result, ":pf_phone", $pf_phone);
$re=oci_execute($result);
$row = oci_fetch_array($result, OCI_NUM);

echo "<table border=1 border color='#0033FF' align=center>";
echo "<tr><th> ������ȣ <th> ��й�ȣ <th> �����̸� <th> �ֹε�Ϲ�ȣ <th> �а��ڵ� <th> ��ȭ��ȣ ";
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[3] <td> $row[4] <td> $row[5]<br>");
echo "</table>";
oci_free_statement($result);
oci_close($conn);
?>