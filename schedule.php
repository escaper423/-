<?
require('conn.php');
$stu_num = $HTTP_COOKIE_VARS["stu_id"]; 

echo ("<h1><center>�ð�ǥ</h1>");
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
/* �ð�ǥ �������� �޾ƿ´�. �밡�� */
$sql11 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '1'";
$result11 = oci_parse($conn,$sql11);
$res11 = oci_execute($result11);
$row11 = oci_fetch_array($result11, OCI_ASSOC);

$sql12 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '2'";
$result12 = oci_parse($conn,$sql12);
$res12 = oci_execute($result12);
$row12 = oci_fetch_array($result12, OCI_ASSOC);

$sql13 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '3'";
$result13 = oci_parse($conn,$sql13);
$res13 = oci_execute($result13);
$row13 = oci_fetch_array($result13, OCI_ASSOC);

$sql14 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '4'";
$result14 = oci_parse($conn,$sql14);
$res14 = oci_execute($result14);
$row14 = oci_fetch_array($result14, OCI_ASSOC);

$sql15 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '5'";
$result15 = oci_parse($conn,$sql15);
$res15 = oci_execute($result15);
$row15 = oci_fetch_array($result15, OCI_ASSOC);

$sql16 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '6'";
$result16 = oci_parse($conn,$sql16);
$res16 = oci_execute($result16);
$row16 = oci_fetch_array($result16, OCI_ASSOC);

$sql17 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '7'";
$result17 = oci_parse($conn,$sql17);
$res17 = oci_execute($result17);
$row17 = oci_fetch_array($result17, OCI_ASSOC);

$sql18 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '8'";
$result18 = oci_parse($conn,$sql18);
$res18 = oci_execute($result18);
$row18 = oci_fetch_array($result18, OCI_ASSOC);

$sql19 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '9'";
$result19 = oci_parse($conn,$sql19);
$res19 = oci_execute($result19);
$row19 = oci_fetch_array($result19, OCI_ASSOC);

$sql21 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '1'";
$result21 = oci_parse($conn,$sql21);
$res21 = oci_execute($result21);
$row21 = oci_fetch_array($result21, OCI_ASSOC);

$sql22 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '2'";
$result22 = oci_parse($conn,$sql22);
$res22 = oci_execute($result22);
$row22 = oci_fetch_array($result22, OCI_ASSOC);

$sql23 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '3'";
$result23 = oci_parse($conn,$sql23);
$res23 = oci_execute($result23);
$row23 = oci_fetch_array($result23, OCI_ASSOC);

$sql24 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '4'";
$result24 = oci_parse($conn,$sql24);
$res24 = oci_execute($result24);
$row24 = oci_fetch_array($result24, OCI_ASSOC);

$sql25 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '5'";
$result25 = oci_parse($conn,$sql25);
$res25 = oci_execute($result25);
$row25 = oci_fetch_array($result25, OCI_ASSOC);

$sql26 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '6'";
$result26 = oci_parse($conn,$sql26);
$res26 = oci_execute($result26);
$row26 = oci_fetch_array($result26, OCI_ASSOC);

$sql27 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '7'";
$result27 = oci_parse($conn,$sql27);
$res27 = oci_execute($result27);
$row27 = oci_fetch_array($result27, OCI_ASSOC);

$sql28 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '8'";
$result28 = oci_parse($conn,$sql28);
$res28 = oci_execute($result28);
$row28 = oci_fetch_array($result28, OCI_ASSOC);

$sql29 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = 'ȭ' and ����.�ð� = '9'";
$result29 = oci_parse($conn,$sql29);
$res29 = oci_execute($result29);
$row29 = oci_fetch_array($result29, OCI_ASSOC);

$sql31 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '1'";
$result31 = oci_parse($conn,$sql31);
$res31 = oci_execute($result31);
$row31 = oci_fetch_array($result31, OCI_ASSOC);

$sql32 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '2'";
$result32 = oci_parse($conn,$sql32);
$res32 = oci_execute($result32);
$row32 = oci_fetch_array($result32, OCI_ASSOC);

$sql33 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '3'";
$result33 = oci_parse($conn,$sql33);
$res33 = oci_execute($result33);
$row33 = oci_fetch_array($result33, OCI_ASSOC);

$sql34 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '4'";
$result34 = oci_parse($conn,$sql34);
$res34 = oci_execute($result34);
$row34 = oci_fetch_array($result34, OCI_ASSOC);

$sql35 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '5'";
$result35 = oci_parse($conn,$sql35);
$res35 = oci_execute($result35);
$row35 = oci_fetch_array($result35, OCI_ASSOC);

$sql36 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '6'";
$result36 = oci_parse($conn,$sql36);
$res36 = oci_execute($result36);
$row36 = oci_fetch_array($result36, OCI_ASSOC);

$sql37 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '7'";
$result37 = oci_parse($conn,$sql37);
$res37 = oci_execute($result37);
$row37 = oci_fetch_array($result37, OCI_ASSOC);

$sql38 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '8'";
$result38 = oci_parse($conn,$sql38);
$res38 = oci_execute($result38);
$row38 = oci_fetch_array($result38, OCI_ASSOC);

$sql39 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '9'";
$result39 = oci_parse($conn,$sql39);
$res39 = oci_execute($result39);
$row39 = oci_fetch_array($result39, OCI_ASSOC);

$sql41 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '1'";
$result41 = oci_parse($conn,$sql41);
$res41 = oci_execute($result41);
$row41 = oci_fetch_array($result41, OCI_ASSOC);

$sql42 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '2'";
$result42 = oci_parse($conn,$sql42);
$res42 = oci_execute($result42);
$row42 = oci_fetch_array($result42, OCI_ASSOC);

$sql43 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '3'";
$result43 = oci_parse($conn,$sql43);
$res43 = oci_execute($result43);

$sql44 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '4'";
$result44 = oci_parse($conn,$sql44);
$res44 = oci_execute($result44);
$row44 = oci_fetch_array($result44, OCI_ASSOC);

$sql45 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '5'";
$result45 = oci_parse($conn,$sql45);
$res45 = oci_execute($result45);
$row45 = oci_fetch_array($result45, OCI_ASSOC);

$sql46 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '6'";
$result46 = oci_parse($conn,$sql46);
$res46 = oci_execute($result46);
$row46 = oci_fetch_array($result46, OCI_ASSOC);

$sql47 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '7'";
$result47 = oci_parse($conn,$sql47);
$res47 = oci_execute($result47);
$row47 = oci_fetch_array($result47, OCI_ASSOC);

$sql48 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '8'";
$result48 = oci_parse($conn,$sql48);
$res48 = oci_execute($result48);
$row48 = oci_fetch_array($result48, OCI_ASSOC);

$sql49 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '9'";
$result49 = oci_parse($conn,$sql49);
$res49 = oci_execute($result49);
$row49 = oci_fetch_array($result49, OCI_ASSOC);

$sql51 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '1'";
$result51 = oci_parse($conn,$sql51);
$res51 = oci_execute($result51);
$row51 = oci_fetch_array($result51, OCI_ASSOC);

$sql52 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '2'";
$result52 = oci_parse($conn,$sql52);
$res52 = oci_execute($result52);
$row52 = oci_fetch_array($result52, OCI_ASSOC);

$sql53 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '3'";
$result53 = oci_parse($conn,$sql53);
$res53 = oci_execute($result53);
$row53 = oci_fetch_array($result53, OCI_ASSOC);

$sql54 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '4'";
$result54 = oci_parse($conn,$sql54);
$res54 = oci_execute($result54);
$row54 = oci_fetch_array($result54, OCI_ASSOC);

$sql55 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '5'";
$result55 = oci_parse($conn,$sql55);
$res55 = oci_execute($result55);
$row55 = oci_fetch_array($result55, OCI_ASSOC);

$sql56 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '6'";
$result56 = oci_parse($conn,$sql56);
$res56 = oci_execute($result56);
$row56 = oci_fetch_array($result56, OCI_ASSOC);

$sql57 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '7'";
$result57= oci_parse($conn,$sql57);
$res57 = oci_execute($result57);
$row57 = oci_fetch_array($result57, OCI_ASSOC);

$sql58 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '8'";
$result58 = oci_parse($conn,$sql58);
$res58 = oci_execute($result58);
$row58 = oci_fetch_array($result58, OCI_ASSOC);

$sql59 = "select ������.�������,������.�����̸�,����.�������ȣ,����.�й� from ����,������ where ����.�������ȣ = ������.�������ȣ and ����.�й� = '$stu_num' and ����.���� = '��' and ����.�ð� = '9'";
$result59 = oci_parse($conn,$sql59);
$res59 = oci_execute($result59);
$row59 = oci_fetch_array($result59, OCI_ASSOC);

echo "<table border=1 border color='#0033FF' align='center' class='centerTable'>";
echo "<tr><th>����/����<th><b>��</b><th><b>ȭ</b><th><b>��</b><th><b>��</b><th><b>��</b>";
echo("<tr><td><b>1</b><td>$row11[�������]<br>$row11[�����̸�]<br>($row11[�������ȣ] - $row11[�й�])<td>$row21[�������]<br>$row21[�����̸�]<br>($row21[�������ȣ] - $row21[�й�])<td>$row31[�������]<br>$row31[�����̸�]<br>($row31[�������ȣ] - $row31[�й�])<td>$row41[�������]<br>$row41[�����̸�]<br>($row41[�������ȣ] - $row41[�й�])<td>$row51[�������]<br>$row51[�����̸�]<br>($row51[�������ȣ] - $row51[�й�])");
echo("<tr><td><b>2</b><td>$row12[�������]<br>$row12[�����̸�]<br>($row12[�������ȣ] - $row12[�й�])<td>$row22[�������]<br>$row22[�����̸�]<br>($row22[�������ȣ] - $row22[�й�])<td>$row32[�������]<br>$row32[�����̸�]<br>($row32[�������ȣ] - $row32[�й�])<td>$row42[�������]<br>$row42[�����̸�]<br>($row42[�������ȣ] - $row42[�й�])<td>$row52[�������]<br>$row52[�����̸�]<br>($row52[�������ȣ] - $row52[�й�])");
echo("<tr><td><b>3</b><td>$row13[�������]<br>$row13[�����̸�]<br>($row13[�������ȣ] - $row13[�й�])<td>$row23[�������]<br>$row23[�����̸�]<br>($row23[�������ȣ] - $row23[�й�])<td>$row33[�������]<br>$row33[�����̸�]<br>($row33[�������ȣ] - $row33[�й�])<td>$row43[�������]<br>$row43[�����̸�]<br>($row43[�������ȣ] - $row43[�й�])<td>$row53[�������]<br>$row53[�����̸�]<br>($row53[�������ȣ] - $row53[�й�])");
echo("<tr><td><b>4</b><td>$row14[�������]<br>$row14[�����̸�]<br>($row14[�������ȣ] - $row14[�й�])<td>$row24[�������]<br>$row24[�����̸�]<br>($row24[�������ȣ] - $row24[�й�])<td>$row34[�������]<br>$row34[�����̸�]<br>($row34[�������ȣ] - $row34[�й�])<td>$row44[�������]<br>$row44[�����̸�]<br>($row44[�������ȣ] - $row44[�й�])<td>$row54[�������]<br>$row54[�����̸�]<br>($row54[�������ȣ] - $row54[�й�])");
echo("<tr><td><b>5</b><td>$row15[�������]<br>$row15[�����̸�]<br>($row15[�������ȣ] - $row15[�й�])<td>$row25[�������]<br>$row25[�����̸�]<br>($row25[�������ȣ] - $row25[�й�])<td>$row35[�������]<br>$row35[�����̸�]<br>($row35[�������ȣ] - $row35[�й�])<td>$row45[�������]<br>$row45[�����̸�]<br>($row45[�������ȣ] - $row45[�й�])<td>$row55[�������]<br>$row55[�����̸�]<br>($row55[�������ȣ] - $row55[�й�])");
echo("<tr><td><b>6</b><td>$row16[�������]<br>$row16[�����̸�]<br>($row16[�������ȣ] - $row16[�й�])<td>$row26[�������]<br>$row26[�����̸�]<br>($row26[�������ȣ] - $row26[�й�])<td>$row36[�������]<br>$row36[�����̸�]<br>($row36[�������ȣ] - $row36[�й�])<td>$row46[�������]<br>$row46[�����̸�]<br>($row46[�������ȣ] - $row46[�й�])<td>$row56[�������]<br>$row56[�����̸�]<br>($row56[�������ȣ] - $row56[�й�])");
echo("<tr><td><b>7</b><td>$row17[�������]<br>$row17[�����̸�]<br>($row17[�������ȣ] - $row17[�й�])<td>$row27[�������]<br>$row27[�����̸�]<br>($row27[�������ȣ] - $row27[�й�])<td>$row37[�������]<br>$row37[�����̸�]<br>($row37[�������ȣ] - $row37[�й�])<td>$row47[�������]<br>$row47[�����̸�]<br>($row47[�������ȣ] - $row47[�й�])<td>$row57[�������]<br>$row57[�����̸�]<br>($row57[�������ȣ] - $row57[�й�])");
echo("<tr><td><b>8</b><td>$row18[�������]<br>$row18[�����̸�]<br>($row18[�������ȣ] - $row18[�й�])<td>$row28[�������]<br>$row28[�����̸�]<br>($row28[�������ȣ] - $row28[�й�])<td>$row38[�������]<br>$row38[�����̸�]<br>($row38[�������ȣ] - $row38[�й�])<td>$row48[�������]<br>$row48[�����̸�]<br>($row48[�������ȣ] - $row48[�й�])<td>$row58[�������]<br>$row58[�����̸�]<br>($row58[�������ȣ] - $row58[�й�])");
echo("<tr><td><b>9</b><td>$row19[�������]<br>$row19[�����̸�]<br>($row19[�������ȣ] - $row19[�й�])<td>$row29[�������]<br>$row29[�����̸�]<br>($row29[�������ȣ] - $row29[�й�])<td>$row39[�������]<br>$row39[�����̸�]<br>($row39[�������ȣ] - $row39[�й�])<td>$row49[�������]<br>$row49[�����̸�]<br>($row49[�������ȣ] - $row49[�й�])<td>$row59[�������]<br>$row59[�����̸�]<br>($row59[�������ȣ] - $row59[�й�])");
echo("</table>");
oci_close($conn);
?>
