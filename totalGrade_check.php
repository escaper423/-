<?
require('conn.php');
$sub_num = $_POST["sub_num"];
$sub_bunban = $_POST["sub_bunban"];

$sql="select * from ���� 
where �������ȣ = :sub_num and �й� = $sub_bunban";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_num", $sub_num);
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