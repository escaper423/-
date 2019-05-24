<?
require('conn.php');
$sub_num = $_POST["sub_num"];
$sub_bunban = $_POST["sub_bunban"];

$sql="select 수강.교과목번호, 수강.분반, 수강.학번, 학생.이름 from 수강, 학생 
where 학생.학번=수강.학번 and 교과목번호 = :sub_num and 분반 = $sub_bunban";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":sub_num", $sub_num);
$re=oci_execute($result);

echo "<table border=1 border color='#0033FF'>";
echo "<tr><th> 교과목번호 <th> 분반 <th> 학번 <th> 이름 ";
while(($row = oci_fetch_array($result, OCI_NUM))){
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[3] <br>");
}
echo "</table><br>";
oci_free_statement($result);
oci_close($conn);
?>