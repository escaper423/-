<?php
require('conn.php');
$stu_num = $HTTP_COOKIE_VARS["stu_id"]; 

$sql="select * from ���� where �й� = $stu_num";
$result=oci_parse($conn, $sql);
$re=oci_execute($result);

echo "<table border=1 border color='#0033FF' align=center>";
echo "<tr><th> �������ȣ <th> �й� <th> �й� <th> ���� <th> �ð�";
while(($row = oci_fetch_array($result, OCI_NUM))){
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[3] <td> $row[4]<br>");
}
echo "</table><br>";
?>
<form action="delete_sugang.php" method="POST">
<center>
������: <input type="text" name="sub_no"> �й�: <input type="text" name="dist_no" > <input type="submit" value = "����">
</center>
<?php
oci_free_statement($result);
oci_close($conn);
?>