<?
require('conn.php');
$sql1="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) 
values ('100','111','��漮','701212-1871111','245', '010-0000-0000')";
$sql2="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) 
values ('200','222','�Ѽ���','711212-1871111','420', '010-0000-0000')";
$sql3="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) 
values ('300','333','Ź����','721212-1871113','245', '010-0000-0000')";
$sql4="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) 
values ('400','444','������','731212-1861113','245', '010-0000-0000')";
$sql5="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) 
values ('500','555','��ȣ��','741212-1851113','245', '010-0000-0000')";
$sql6="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) 
values ('600','666','������','751212-1861113','245', '010-0000-0000')";
$sql7="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �ֹε�Ϲ�ȣ, �а��ڵ�, ��ȭ��ȣ) 
values ('700','777','����ö','761212-1871113','245', '010-0000-0000')";
$sql8="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �а��ڵ�) 
values ('1000', '1111', '�߽ż�', '245')";
$sql9="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �а��ڵ�) 
values ('1111', '1111', '������', '420')";
$sql10="insert into ���� (������ȣ, ��й�ȣ, �����̸�, �а��ڵ�) 
values ('2222', '2222', '����ȯ', '220')";
$sql11="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007111', '1111', '������', '810000-1800001', '1', '�λ�', '010-0000-0000', '245', '����')";
$sql12="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007222', '1111', 'ȫ����', '820000-1800001', '2', 'â��', '010-0000-0000', '245', '����')";
$sql13="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007333', '1111', '�̴�ȣ', '830000-1800001', '2', '����', '010-0000-0000', '245', '����')";
$sql14="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007444', '1111', 'ȫ�浿', '840000-1800001', '3', '���', '010-0000-0000', '245', '����')";
$sql15="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007555', '1111', '����ȣ', '850000-1800001', '4', '����', '010-0000-0000', '245', '����')";
$sql16="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007666', '1111', '��ö��', '860000-1800001', '2', '�뱸', '010-0000-0000', '245', '����')";
$sql17="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007777', '1111', '��ö��', '870000-1800001', '3', '����', '010-0000-0000', '420', '����')";
$sql18="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007888', '1111', '�迵��', '880000-1800001', '2', '����', '010-0000-0000', '420', '����')";
$sql19="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2007999', '1111', '�����', '890000-1800001', '3', '�뿵', '010-0000-0000', '245', '����')";
$sql20="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2008111', '1111', '������', '900000-1800001', '2', '����', '010-0000-0000', '245', '����')";
$sql21="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2008222', '1111', '�ƹ���', '910000-1800001', '3', '����', '010-0000-0000', '245', '����')";
$sql22="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2008333', '1111', '�����', '920000-1800001', '4', '�λ�', '010-0000-0000', '245', '����')";
$sql23="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2008444', '1111', '�վƼ�', '930000-1800001', '4', '�λ�', '010-0000-0000', '245', '����')";
$sql24="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2008555', '1111', '���ؿ�', '790000-1800001', '3', 'â��', '010-0000-0000', '245', '����')";
$sql25="insert into �л� (�й�, ��й�ȣ, �̸�, �ֹε�Ϲ�ȣ, �г�, �ּ�, ��ȭ��ȣ, �а��ڵ�, ��������) 
values ('2008666', '1111', '�ڱ���', '800000-1800001', '2', '����', '010-0000-0000', '245', '����')";
$sql26="insert into ������ (�г�, �������ȣ, �������, �й�, ����, �а��ڵ�, �ð�, �⵵, �б�, ����, �����̸�, ������ȣ, �ǹ���ȣ, ���ǽǹ�ȣ) 
values ('3','CP100','�����ͺ��̽�','059','3','245','3','2013','2','��', '��漮', '100' ,'201','6503')";
$sql27="insert into ������ (�г�, �������ȣ, �������, �й�, ����, �а��ڵ�, �ð�, �⵵, �б�, ����, �����̸�, ������ȣ, �ǹ���ȣ, ���ǽǹ�ȣ) 
values ('3','CP200','��ǻ�;˰���','060','3','245','2','2013','2','ȭ', '������', '400' ,'201','6504')";
$sql28="insert into ������ (�г�, �������ȣ, �������, �й�, ����, �а��ڵ�, �ð�, �⵵, �б�, ����, �����̸�, ������ȣ, �ǹ���ȣ, ���ǽǹ�ȣ) 
values ('1','CP300','�����ذ���','004','3','245','5','2013','2','��','Ź����', '300' ,'201','6505')";
$sql29="insert into ������ (�г�, �������ȣ, �������, �й�, ����, �а��ڵ�, �ð�, �⵵, �б�, ����, �����̸�, ������ȣ, �ǹ���ȣ, ���ǽǹ�ȣ) 
values ('3','CP400','��ǻ�ͳ�Ʈ��ũ','060','3','245','6','2013','2','��','Ź����','300','201','6505')";
$sql30="insert into ������ (�г�, �������ȣ, �������, �й�, ����, �а��ڵ�, �ð�, �⵵, �б�, ����, �����̸�, ������ȣ, �ǹ���ȣ, ���ǽǹ�ȣ) 
values ('2','EC500','����Ͻ�������','003','3','420','7','2013','2','��','�Ѽ���','200','301','1203')";
$sql31="insert into ������ (�г�, �������ȣ, �������, �й�, ����, �а��ڵ�, �ð�, �⵵, �б�, ����, �����̸�, ������ȣ, �ǹ���ȣ, ���ǽǹ�ȣ) 
values ('2','EC600','��ġ�������̷�','004','3','420','9','2013','2','ȭ','�Ѽ���','200','401','2307')";
$sql32="insert into ������ (�г�, �������ȣ, �������, �й�, ����, �а��ڵ�, �ð�, �⵵, �б�, ����, �����̸�, ������ȣ, �ǹ���ȣ, ���ǽǹ�ȣ) 
values ('4','CP700','�����͸��̴�','061','3','245','7','2013','2','��','������','400','201','6505')";
$sql33="insert into ���� 
values ('CP100', '059', '2007111', '��', '3', 'A0')";
$sql34="insert into ���� 
values ('CP100', '059', '2007222', '��', '3', 'B+')";
$sql35="insert into ���� 
values ('CP100', '059', '2007333', '��', '3', 'B0')";
$sql36="insert into ���� 
values ('CP100', '059', '2007444', '��', '3', 'F')";
$sql37="insert into ���� 
values ('CP100', '059', '2007555', '��', '3', 'C+')";
$sql38="insert into ���� 
values ('CP100', '059', '2007666', '��', '3', 'A+')";
$sql39="insert into ���� 
values ('CP100', '059', '2007777', '��', '3', 'F')";
$sql40="insert into ���� 
values ('CP100', '059', '2007888', '��', '3', 'C0')";
$sql41="insert into ���� 
values ('CP100', '059', '2007999', '��', '3', 'D+')";
$sql42="insert into ���� 
values ('CP100', '059', '2008111', '��', '3', 'B0')";
$sql43="insert into ���� 
values ('CP200', '060', '2007222', 'ȭ', '3', 'B+')";
$sql44="insert into ���� 
values ('CP200', '060', '2007333', 'ȭ', '3', 'D0')";
$sql45="insert into ���� 
values ('CP200', '060', '2007444', 'ȭ', '3', 'A0')";
$sql46="insert into ���� 
values ('CP200', '060', '2007555', 'ȭ', '3', 'D+')";
$sql47="insert into ���� 
values ('CP200', '060', '2007666', 'ȭ', '3', 'B0')";
$sql48="insert into ���� 
values ('CP200', '060', '2008222', 'ȭ', '3', 'B+')";
$sql49="insert into ���� 
values ('CP200', '060', '2008333', 'ȭ', '3', 'C0')";
$sql50="insert into ���� 
values ('CP200', '060', '2008444', 'ȭ', '3', 'B0')";
$sql51="insert into ���� 
values ('CP200', '060', '2008555', 'ȭ', '3', 'B+')";
$sql52="insert into ���� 
values ('CP200', '060', '2008666', 'ȭ', '3', 'A+')";
$sql53="insert into �����ð�ǥ 
values ('CP100', '059', '100', '��', '3')";
$sql54="insert into �����ð�ǥ 
values ('CP200', '060', '400', 'ȭ', '2')";
$sql55="insert into �����ð�ǥ 
values ('CP300', '004', '300', '��', '5')";
$sql56="insert into �����ð�ǥ 
values ('CP400', '060', '300', '��', '6')";
$sql57="insert into �����ð�ǥ 
values ('EC500', '003', '200', '��', '7')";
$sql58="insert into �����ð�ǥ 
values ('EC600', '004', '200', 'ȭ', '9')";
$sql59="insert into �����ð�ǥ 
values ('CP700', '061', '400', '��', '7')";
$result0=oci_parse($conn, $sql0);
$result1=oci_parse($conn, $sql1);
$result2=oci_parse($conn, $sql2);
$result3=oci_parse($conn, $sql3);
$result4=oci_parse($conn, $sql4);
$result5=oci_parse($conn, $sql5);
$result6=oci_parse($conn, $sql6);
$result7=oci_parse($conn, $sql7);
$result8=oci_parse($conn, $sql8);
$result9=oci_parse($conn, $sql9);
$result10=oci_parse($conn, $sql10);
$result11=oci_parse($conn, $sql11);
$result12=oci_parse($conn, $sql12);
$result13=oci_parse($conn, $sql13);
$result14=oci_parse($conn, $sql14);
$result15=oci_parse($conn, $sql15);
$result16=oci_parse($conn, $sql16);
$result17=oci_parse($conn, $sql17);
$result18=oci_parse($conn, $sql18);
$result19=oci_parse($conn, $sql19);
$result20=oci_parse($conn, $sql20);
$result21=oci_parse($conn, $sql21);
$result22=oci_parse($conn, $sql22);
$result23=oci_parse($conn, $sql23);
$result24=oci_parse($conn, $sql24);
$result25=oci_parse($conn, $sql25);
$result26=oci_parse($conn, $sql26);
$result27=oci_parse($conn, $sql27);
$result28=oci_parse($conn, $sql28);
$result29=oci_parse($conn, $sql29);
$result30=oci_parse($conn, $sql30);
$result31=oci_parse($conn, $sql31);
$result32=oci_parse($conn, $sql32);
$result33=oci_parse($conn, $sql33);
$result34=oci_parse($conn, $sql34);
$result35=oci_parse($conn, $sql35);
$result36=oci_parse($conn, $sql36);
$result37=oci_parse($conn, $sql37);
$result38=oci_parse($conn, $sql38);
$result39=oci_parse($conn, $sql39);
$result40=oci_parse($conn, $sql40);
$result41=oci_parse($conn, $sql41);
$result42=oci_parse($conn, $sql42);
$result43=oci_parse($conn, $sql43);
$result44=oci_parse($conn, $sql44);
$result45=oci_parse($conn, $sql45);
$result46=oci_parse($conn, $sql46);
$result47=oci_parse($conn, $sql47);
$result48=oci_parse($conn, $sql48);
$result49=oci_parse($conn, $sql49);
$result50=oci_parse($conn, $sql50);
$result51=oci_parse($conn, $sql51);
$result52=oci_parse($conn, $sql52);
$result53=oci_parse($conn, $sql53);
$result54=oci_parse($conn, $sql54);
$result55=oci_parse($conn, $sql55);
$result56=oci_parse($conn, $sql56);
$result57=oci_parse($conn, $sql57);
$result58=oci_parse($conn, $sql58);
$result59=oci_parse($conn, $sql59);
$re1=oci_execute($result1);
$re2=oci_execute($result2);
$re3=oci_execute($result3);
$re4=oci_execute($result4);
$re5=oci_execute($result5);
$re6=oci_execute($result6);
$re7=oci_execute($result7);
$re8=oci_execute($result8);
$re9=oci_execute($result9);
$re10=oci_execute($result10);
$re11=oci_execute($result11);
$re12=oci_execute($result12);
$re13=oci_execute($result13);
$re14=oci_execute($result14);
$re15=oci_execute($result15);
$re16=oci_execute($result16);
$re17=oci_execute($result17);
$re18=oci_execute($result18);
$re19=oci_execute($result19);
$re20=oci_execute($result20);
$re21=oci_execute($result21);
$re22=oci_execute($result22);
$re23=oci_execute($result23);
$re24=oci_execute($result24);
$re25=oci_execute($result25);
$re26=oci_execute($result26);
$re27=oci_execute($result27);
$re28=oci_execute($result28);
$re29=oci_execute($result29);
$re30=oci_execute($result30);
$re31=oci_execute($result31);
$re32=oci_execute($result32);
$re33=oci_execute($result33);
$re34=oci_execute($result34);
$re35=oci_execute($result35);
$re36=oci_execute($result36);
$re37=oci_execute($result37);
$re38=oci_execute($result38);
$re39=oci_execute($result39);
$re40=oci_execute($result40);
$re41=oci_execute($result41);
$re42=oci_execute($result42);
$re43=oci_execute($result43);
$re44=oci_execute($result44);
$re45=oci_execute($result45);
$re46=oci_execute($result46);
$re47=oci_execute($result47);
$re48=oci_execute($result48);
$re49=oci_execute($result49);
$re50=oci_execute($result50);
$re51=oci_execute($result51);
$re52=oci_execute($result52);
$re53=oci_execute($result53);
$re54=oci_execute($result54);
$re55=oci_execute($result55);
$re56=oci_execute($result56);
$re57=oci_execute($result57);
$re58=oci_execute($result58);
$re59=oci_execute($result59);
oci_close($conn);
echo(" <meta http-equiv='Refresh' content='0; URL=index.html'>");
?>