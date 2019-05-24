<?
require('conn.php');
$sub_num = $_POST["sub_num"];
$sub_bunban = $_POST["sub_bunban"];

$sql="select * from 수강 
where 교과목번호 = :sub_num and 분반 = $sub_bunban";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_num", $sub_num);
$re=oci_execute($result);

echo "<table border=1 border color='#0033FF'>";
echo "<tr><th> 교과목번호 <th> 분반 <th> 학번 <th> 성적";
while(($row = oci_fetch_array($result, OCI_NUM))){
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[5]<br>");
}
echo "</table><br>";
oci_free_statement($result);
oci_close($conn);
?>