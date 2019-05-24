<?
require('conn.php');
$stu_num = $HTTP_COOKIE_VARS["stu_id"];
$yr = $_POST["year_no"];
if(!$yr)
{ 
	echo ("<meta http-equiv='Redirect' content='0'; URL='grade_view.php'>");
}

$sql = "select 교과목.년도, 교과목.교과목명, 수강.분반, 수강.성적 from 교과목,수강 where 교과목.교과목번호 = 수강.교과목번호 and 교과목.분반 = 수강.분반 and 수강.학번 = '$stu_num' and 교과목.년도 = '$yr'";
$result = oci_parse($conn,$sql);
$res = oci_execute($result);

echo "<table border=1 border color='#aaaaaa' align='center'>";
echo "<center><h1>성적 조회</h1></center><br>학번 : $stu_num <br>";
echo "<tr><th>년도<th>과목명<th>분반<th>성적";
while(($row = oci_fetch_array($result, OCI_ASSOC)))
{
	echo("<tr><td>$row[년도]<td>$row[교과목명]<td>$row[분반]<td>$row[성적]");
}
echo"</table><br><br>";
?>
<form action="grade_view_by_year.php" method="POST">
<center>
년도: <input type="text" name="year_no"> <input type="submit" value="검색">
</center>
<?
oci_free_statement($result);
oci_close($conn);

?>