<?
require('conn.php');
$stu_num = $_POST["stu_num"];

$sql="select �й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, �������� from �л� where �й� = $stu_num";
$result=oci_parse($conn, $sql);
$re=oci_execute($result);
$row = oci_fetch_array($result, OCI_NUM);

echo "<table border=1 border color='#0033FF' align=center>";
echo "<tr><th> �й� <th> ��й�ȣ <th> �̸� <th> �ֹε�Ϲ�ȣ <th> �г� <th> �ּ� <th> ��ȭ��ȣ <th> �а��ڵ� <th> �������� ";
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[3] <td> $row[4] <td> $row[5] <td> $row[6] <td> $row[7] <td> $row[8]<br>");
echo "</table>";
oci_free_statement($result);
oci_close($conn);
?>