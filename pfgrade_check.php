<?
require('conn.php');
$stu_num = $_POST["stu_num"];

$sql="select * from ���� where �й� = $stu_num";
$result=oci_parse($conn, $sql);
$re=oci_execute($result);

echo "<table border=1 border color='#0033FF'>";
echo "<tr><th> �������ȣ <th> �й� <th> �й� <th> ����";
while(($row = oci_fetch_array($result, OCI_NUM))){
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[5]<br>");
}
echo "</table><br>";
oci_free_statement($result);
oci_close($conn);
?>