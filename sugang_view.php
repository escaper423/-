<?
require('conn.php');
$sql="select * from 교과목";
$result=oci_parse($conn, $sql);
$re=oci_execute($result);
echo "<h2>수강 편람</h2><br><br>";
echo "<table border=1 border color='#0033FF' align=center>";
echo "<tr><th> 학년<th> 교과목번호 <th> 교과목명 <th> 분반 <th> 학점 <th> 학과코드 <th> 시간 <th> 년도 <th> 학기 <th> 요일 <th> 교수이름 <th> 건물번호 <th> 강의실번호";
while(($row = oci_fetch_array($result, OCI_NUM))){
echo("<tr><td>$row[0] <td> $row[1] <td> $row[2] <td> $row[3] <td> $row[4] <td> $row[5] <td> $row[6] <td> $row[7] <td> $row[8] <td> $row[9] <td> $row[10] <td> $row[11] <td> $row[12]<br>");
}
echo "</table><br>";
oci_close($conn);
?>