<?
require('conn.php');
$stu_num = $HTTP_COOKIE_VARS["stu_id"]; 

echo ("<h1><center>시간표</h1>");
?>
<style type="text/css">
td 
{
    height:50px; 
    width:130px;
}

#centerTable td 
{
    text-align:center; 
    vertical-align:middle;
}
</style>
<?
/* 시간표 변수들을 받아온다. 노가다 */
$sql11 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '1'";
$result11 = oci_parse($conn,$sql11);
$res11 = oci_execute($result11);
$row11 = oci_fetch_array($result11, OCI_ASSOC);

$sql12 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '2'";
$result12 = oci_parse($conn,$sql12);
$res12 = oci_execute($result12);
$row12 = oci_fetch_array($result12, OCI_ASSOC);

$sql13 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '3'";
$result13 = oci_parse($conn,$sql13);
$res13 = oci_execute($result13);
$row13 = oci_fetch_array($result13, OCI_ASSOC);

$sql14 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '4'";
$result14 = oci_parse($conn,$sql14);
$res14 = oci_execute($result14);
$row14 = oci_fetch_array($result14, OCI_ASSOC);

$sql15 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '5'";
$result15 = oci_parse($conn,$sql15);
$res15 = oci_execute($result15);
$row15 = oci_fetch_array($result15, OCI_ASSOC);

$sql16 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '6'";
$result16 = oci_parse($conn,$sql16);
$res16 = oci_execute($result16);
$row16 = oci_fetch_array($result16, OCI_ASSOC);

$sql17 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '7'";
$result17 = oci_parse($conn,$sql17);
$res17 = oci_execute($result17);
$row17 = oci_fetch_array($result17, OCI_ASSOC);

$sql18 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '8'";
$result18 = oci_parse($conn,$sql18);
$res18 = oci_execute($result18);
$row18 = oci_fetch_array($result18, OCI_ASSOC);

$sql19 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '월' and 수강.시간 = '9'";
$result19 = oci_parse($conn,$sql19);
$res19 = oci_execute($result19);
$row19 = oci_fetch_array($result19, OCI_ASSOC);

$sql21 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '1'";
$result21 = oci_parse($conn,$sql21);
$res21 = oci_execute($result21);
$row21 = oci_fetch_array($result21, OCI_ASSOC);

$sql22 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '2'";
$result22 = oci_parse($conn,$sql22);
$res22 = oci_execute($result22);
$row22 = oci_fetch_array($result22, OCI_ASSOC);

$sql23 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '3'";
$result23 = oci_parse($conn,$sql23);
$res23 = oci_execute($result23);
$row23 = oci_fetch_array($result23, OCI_ASSOC);

$sql24 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '4'";
$result24 = oci_parse($conn,$sql24);
$res24 = oci_execute($result24);
$row24 = oci_fetch_array($result24, OCI_ASSOC);

$sql25 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '5'";
$result25 = oci_parse($conn,$sql25);
$res25 = oci_execute($result25);
$row25 = oci_fetch_array($result25, OCI_ASSOC);

$sql26 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '6'";
$result26 = oci_parse($conn,$sql26);
$res26 = oci_execute($result26);
$row26 = oci_fetch_array($result26, OCI_ASSOC);

$sql27 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '7'";
$result27 = oci_parse($conn,$sql27);
$res27 = oci_execute($result27);
$row27 = oci_fetch_array($result27, OCI_ASSOC);

$sql28 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '8'";
$result28 = oci_parse($conn,$sql28);
$res28 = oci_execute($result28);
$row28 = oci_fetch_array($result28, OCI_ASSOC);

$sql29 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '화' and 수강.시간 = '9'";
$result29 = oci_parse($conn,$sql29);
$res29 = oci_execute($result29);
$row29 = oci_fetch_array($result29, OCI_ASSOC);

$sql31 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '1'";
$result31 = oci_parse($conn,$sql31);
$res31 = oci_execute($result31);
$row31 = oci_fetch_array($result31, OCI_ASSOC);

$sql32 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '2'";
$result32 = oci_parse($conn,$sql32);
$res32 = oci_execute($result32);
$row32 = oci_fetch_array($result32, OCI_ASSOC);

$sql33 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '3'";
$result33 = oci_parse($conn,$sql33);
$res33 = oci_execute($result33);
$row33 = oci_fetch_array($result33, OCI_ASSOC);

$sql34 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '4'";
$result34 = oci_parse($conn,$sql34);
$res34 = oci_execute($result34);
$row34 = oci_fetch_array($result34, OCI_ASSOC);

$sql35 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '5'";
$result35 = oci_parse($conn,$sql35);
$res35 = oci_execute($result35);
$row35 = oci_fetch_array($result35, OCI_ASSOC);

$sql36 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '6'";
$result36 = oci_parse($conn,$sql36);
$res36 = oci_execute($result36);
$row36 = oci_fetch_array($result36, OCI_ASSOC);

$sql37 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '7'";
$result37 = oci_parse($conn,$sql37);
$res37 = oci_execute($result37);
$row37 = oci_fetch_array($result37, OCI_ASSOC);

$sql38 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '8'";
$result38 = oci_parse($conn,$sql38);
$res38 = oci_execute($result38);
$row38 = oci_fetch_array($result38, OCI_ASSOC);

$sql39 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '수' and 수강.시간 = '9'";
$result39 = oci_parse($conn,$sql39);
$res39 = oci_execute($result39);
$row39 = oci_fetch_array($result39, OCI_ASSOC);

$sql41 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '1'";
$result41 = oci_parse($conn,$sql41);
$res41 = oci_execute($result41);
$row41 = oci_fetch_array($result41, OCI_ASSOC);

$sql42 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '2'";
$result42 = oci_parse($conn,$sql42);
$res42 = oci_execute($result42);
$row42 = oci_fetch_array($result42, OCI_ASSOC);

$sql43 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '3'";
$result43 = oci_parse($conn,$sql43);
$res43 = oci_execute($result43);

$sql44 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '4'";
$result44 = oci_parse($conn,$sql44);
$res44 = oci_execute($result44);
$row44 = oci_fetch_array($result44, OCI_ASSOC);

$sql45 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '5'";
$result45 = oci_parse($conn,$sql45);
$res45 = oci_execute($result45);
$row45 = oci_fetch_array($result45, OCI_ASSOC);

$sql46 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '6'";
$result46 = oci_parse($conn,$sql46);
$res46 = oci_execute($result46);
$row46 = oci_fetch_array($result46, OCI_ASSOC);

$sql47 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '7'";
$result47 = oci_parse($conn,$sql47);
$res47 = oci_execute($result47);
$row47 = oci_fetch_array($result47, OCI_ASSOC);

$sql48 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '8'";
$result48 = oci_parse($conn,$sql48);
$res48 = oci_execute($result48);
$row48 = oci_fetch_array($result48, OCI_ASSOC);

$sql49 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '목' and 수강.시간 = '9'";
$result49 = oci_parse($conn,$sql49);
$res49 = oci_execute($result49);
$row49 = oci_fetch_array($result49, OCI_ASSOC);

$sql51 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '1'";
$result51 = oci_parse($conn,$sql51);
$res51 = oci_execute($result51);
$row51 = oci_fetch_array($result51, OCI_ASSOC);

$sql52 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '2'";
$result52 = oci_parse($conn,$sql52);
$res52 = oci_execute($result52);
$row52 = oci_fetch_array($result52, OCI_ASSOC);

$sql53 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '3'";
$result53 = oci_parse($conn,$sql53);
$res53 = oci_execute($result53);
$row53 = oci_fetch_array($result53, OCI_ASSOC);

$sql54 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '4'";
$result54 = oci_parse($conn,$sql54);
$res54 = oci_execute($result54);
$row54 = oci_fetch_array($result54, OCI_ASSOC);

$sql55 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '5'";
$result55 = oci_parse($conn,$sql55);
$res55 = oci_execute($result55);
$row55 = oci_fetch_array($result55, OCI_ASSOC);

$sql56 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '6'";
$result56 = oci_parse($conn,$sql56);
$res56 = oci_execute($result56);
$row56 = oci_fetch_array($result56, OCI_ASSOC);

$sql57 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '7'";
$result57= oci_parse($conn,$sql57);
$res57 = oci_execute($result57);
$row57 = oci_fetch_array($result57, OCI_ASSOC);

$sql58 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '8'";
$result58 = oci_parse($conn,$sql58);
$res58 = oci_execute($result58);
$row58 = oci_fetch_array($result58, OCI_ASSOC);

$sql59 = "select 교과목.교과목명,교과목.교수이름,수강.교과목번호,수강.분반 from 수강,교과목 where 수강.교과목번호 = 교과목.교과목번호 and 수강.학번 = '$stu_num' and 수강.요일 = '금' and 수강.시간 = '9'";
$result59 = oci_parse($conn,$sql59);
$res59 = oci_execute($result59);
$row59 = oci_fetch_array($result59, OCI_ASSOC);

echo "<table border=1 border color='#0033FF' align='center' class='centerTable'>";
echo "<tr><th>교시/요일<th><b>월</b><th><b>화</b><th><b>수</b><th><b>목</b><th><b>금</b>";
echo("<tr><td><b>1</b><td>$row11[교과목명]<br>$row11[교수이름]<br>($row11[교과목번호] - $row11[분반])<td>$row21[교과목명]<br>$row21[교수이름]<br>($row21[교과목번호] - $row21[분반])<td>$row31[교과목명]<br>$row31[교수이름]<br>($row31[교과목번호] - $row31[분반])<td>$row41[교과목명]<br>$row41[교수이름]<br>($row41[교과목번호] - $row41[분반])<td>$row51[교과목명]<br>$row51[교수이름]<br>($row51[교과목번호] - $row51[분반])");
echo("<tr><td><b>2</b><td>$row12[교과목명]<br>$row12[교수이름]<br>($row12[교과목번호] - $row12[분반])<td>$row22[교과목명]<br>$row22[교수이름]<br>($row22[교과목번호] - $row22[분반])<td>$row32[교과목명]<br>$row32[교수이름]<br>($row32[교과목번호] - $row32[분반])<td>$row42[교과목명]<br>$row42[교수이름]<br>($row42[교과목번호] - $row42[분반])<td>$row52[교과목명]<br>$row52[교수이름]<br>($row52[교과목번호] - $row52[분반])");
echo("<tr><td><b>3</b><td>$row13[교과목명]<br>$row13[교수이름]<br>($row13[교과목번호] - $row13[분반])<td>$row23[교과목명]<br>$row23[교수이름]<br>($row23[교과목번호] - $row23[분반])<td>$row33[교과목명]<br>$row33[교수이름]<br>($row33[교과목번호] - $row33[분반])<td>$row43[교과목명]<br>$row43[교수이름]<br>($row43[교과목번호] - $row43[분반])<td>$row53[교과목명]<br>$row53[교수이름]<br>($row53[교과목번호] - $row53[분반])");
echo("<tr><td><b>4</b><td>$row14[교과목명]<br>$row14[교수이름]<br>($row14[교과목번호] - $row14[분반])<td>$row24[교과목명]<br>$row24[교수이름]<br>($row24[교과목번호] - $row24[분반])<td>$row34[교과목명]<br>$row34[교수이름]<br>($row34[교과목번호] - $row34[분반])<td>$row44[교과목명]<br>$row44[교수이름]<br>($row44[교과목번호] - $row44[분반])<td>$row54[교과목명]<br>$row54[교수이름]<br>($row54[교과목번호] - $row54[분반])");
echo("<tr><td><b>5</b><td>$row15[교과목명]<br>$row15[교수이름]<br>($row15[교과목번호] - $row15[분반])<td>$row25[교과목명]<br>$row25[교수이름]<br>($row25[교과목번호] - $row25[분반])<td>$row35[교과목명]<br>$row35[교수이름]<br>($row35[교과목번호] - $row35[분반])<td>$row45[교과목명]<br>$row45[교수이름]<br>($row45[교과목번호] - $row45[분반])<td>$row55[교과목명]<br>$row55[교수이름]<br>($row55[교과목번호] - $row55[분반])");
echo("<tr><td><b>6</b><td>$row16[교과목명]<br>$row16[교수이름]<br>($row16[교과목번호] - $row16[분반])<td>$row26[교과목명]<br>$row26[교수이름]<br>($row26[교과목번호] - $row26[분반])<td>$row36[교과목명]<br>$row36[교수이름]<br>($row36[교과목번호] - $row36[분반])<td>$row46[교과목명]<br>$row46[교수이름]<br>($row46[교과목번호] - $row46[분반])<td>$row56[교과목명]<br>$row56[교수이름]<br>($row56[교과목번호] - $row56[분반])");
echo("<tr><td><b>7</b><td>$row17[교과목명]<br>$row17[교수이름]<br>($row17[교과목번호] - $row17[분반])<td>$row27[교과목명]<br>$row27[교수이름]<br>($row27[교과목번호] - $row27[분반])<td>$row37[교과목명]<br>$row37[교수이름]<br>($row37[교과목번호] - $row37[분반])<td>$row47[교과목명]<br>$row47[교수이름]<br>($row47[교과목번호] - $row47[분반])<td>$row57[교과목명]<br>$row57[교수이름]<br>($row57[교과목번호] - $row57[분반])");
echo("<tr><td><b>8</b><td>$row18[교과목명]<br>$row18[교수이름]<br>($row18[교과목번호] - $row18[분반])<td>$row28[교과목명]<br>$row28[교수이름]<br>($row28[교과목번호] - $row28[분반])<td>$row38[교과목명]<br>$row38[교수이름]<br>($row38[교과목번호] - $row38[분반])<td>$row48[교과목명]<br>$row48[교수이름]<br>($row48[교과목번호] - $row48[분반])<td>$row58[교과목명]<br>$row58[교수이름]<br>($row58[교과목번호] - $row58[분반])");
echo("<tr><td><b>9</b><td>$row19[교과목명]<br>$row19[교수이름]<br>($row19[교과목번호] - $row19[분반])<td>$row29[교과목명]<br>$row29[교수이름]<br>($row29[교과목번호] - $row29[분반])<td>$row39[교과목명]<br>$row39[교수이름]<br>($row39[교과목번호] - $row39[분반])<td>$row49[교과목명]<br>$row49[교수이름]<br>($row49[교과목번호] - $row49[분반])<td>$row59[교과목명]<br>$row59[교수이름]<br>($row59[교과목번호] - $row59[분반])");
echo("</table>");
oci_close($conn);
?>
