<?
require('conn.php');
$pf_num = $_POST["pf_num"];
$pf_ssn = $_POST["pf_ssn"];
$pf_phone = $_POST["pf_phone"];

$sql="select 교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호 
 from 교수 
 where 교수번호 = :pf_num and 주민등록번호 = :pf_ssn and 전화번호 = :pf_phone";
$result=oci_parse($conn, $sql);
oci_bind_by_name($result, ":pf_num", $pf_num);
oci_bind_by_name($result, ":pf_ssn", $pf_ssn);
oci_bind_by_name($result, ":pf_phone", $pf_phone);
$re=oci_execute($result);
$row = oci_fetch_array($result, OCI_NUM);

echo "<table border=1 border color='#0033FF' align=center>";
echo "<tr><th> 교수번호 <th> 비밀번호 <th> 교수이름 <th> 주민등록번호 <th> 학과코드 <th> 전화번호 ";
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[3] <td> $row[4] <td> $row[5]<br>");
echo "</table>";
oci_free_statement($result);
oci_close($conn);
?>