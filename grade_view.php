<?
require('conn.php');
$stu_num = $HTTP_COOKIE_VARS["stu_id"];
$sql = "select ������.�⵵, ������.�������, ����.�й�, ����.���� from ������,���� where ������.�������ȣ = ����.�������ȣ and ������.�й� = ����.�й� and ����.�й� = '$stu_num'";
$result = oci_parse($conn,$sql);
$res = oci_execute($result);

echo "<table border=1 border color='#aaaaaa' align='center'>";
echo "<center><h1>���� ��ȸ</h1></center><br><right>�й� : $stu_num </right><br>";
echo "<tr><th>�⵵<th>�����<th>�й�<th>����";
while(($row = oci_fetch_array($result, OCI_ASSOC))){
echo "<tr><td>$row[�⵵]<td>$row[�������]<td>$row[�й�]<td>$row[����]";}
echo"</table><br><br>";
?>
<form action="grade_view_by_year.php" method="POST">
<center>
�⵵: <input type="text" name="year_no"> <input type="submit" value="�˻�">
</center>
<?
oci_free_statement($result);
oci_close($conn);
?>