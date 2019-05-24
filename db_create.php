<?
require('conn.php');
$sql0="create table ������ (
	������ID varchar2(10), 
	�����ڹ�ȣ varchar2(10),
	��й�ȣ varchar2(8), 
	primary key(������ID)
)";
$sql1="insert into ������ (������ID, �����ڹ�ȣ, ��й�ȣ) values ('admin', '0000', '1234')";
$sql2="create table �а�(
	�а��ڵ� varchar2(10), 
	�а��̸� varchar2(30), 
	primary key(�а��ڵ�)
)";
$sql3="insert into �а� (�а��ڵ�, �а��̸�) values ('245', '������ǻ�Ͱ��к�')";
$sql4="insert into �а� (�а��ڵ�, �а��̸�) values ('220', '�����к�')";
$sql5="insert into �а� (�а��ڵ�, �а��̸�) values ('225', 'ȭ��������к�')";
$sql6="insert into �а� (�а��ڵ�, �а��̸�) values ('241', '������а�')";
$sql7="insert into �а� (�а��ڵ�, �а��̸�) values ('420', '�����к�')";
$sql8="create table ���� (
	������ȣ varchar2(10), 
	��й�ȣ varchar2(10), 
	�����̸� varchar2(10), 
	�ֹε�Ϲ�ȣ varchar2(20),
	�а��ڵ� varchar2(10), 
	��ȭ��ȣ varchar2(20), 
	primary key(������ȣ),
	unique(�ֹε�Ϲ�ȣ),
	foreign key(�а��ڵ�) references �а�
)";
$sql9="create table ���� (
	������ȣ varchar2(10), 
	��й�ȣ varchar2(8), 
	�����̸� varchar2(10), 
	�а��ڵ� varchar2(10),  
	primary key(������ȣ), 
	foreign key(�а��ڵ�) references �а�
)";
$sql10="create table �л� (
	�й� varchar2(10), 
	��й�ȣ varchar2(8), 
	�̸� varchar2(10), 
	�ֹε�Ϲ�ȣ varchar2(20),
	�г� varchar2(5), 
	�ּ� varchar2(150), 
	��ȭ��ȣ varchar2(20),
	�а��ڵ� varchar2(10), 
	�������� varchar2(10), 
	primary key(�й�), 
	unique(�ֹε�Ϲ�ȣ),
	foreign key(�а��ڵ�) references �а�
)";
$sql11="create table �ǹ� (
	�ǹ���ȣ varchar2(10), 
	�ǹ��̸� varchar2(20), 
	primary key(�ǹ���ȣ)
)";
$sql11_1="insert into �ǹ� (�ǹ���ȣ, �ǹ��̸�) values ('201', '������')";
$sql11_2="insert into �ǹ� (�ǹ���ȣ, �ǹ��̸�) values ('301', '�ι���')";
$sql11_3="insert into �ǹ� (�ǹ���ȣ, �ǹ��̸�) values ('401', '��ȸ��')";
$sql12="create table ���ǽ� (
	�ǹ���ȣ varchar2(10),
	���ǽǹ�ȣ varchar2(10), 
	primary key(���ǽǹ�ȣ), 
	foreign key(�ǹ���ȣ) references �ǹ�
)";
$sql12_1="insert into ���ǽ� (�ǹ���ȣ, ���ǽǹ�ȣ) values ('201', '6503')";
$sql12_2="insert into ���ǽ� (�ǹ���ȣ, ���ǽǹ�ȣ) values ('201', '6504')";
$sql12_3="insert into ���ǽ� (�ǹ���ȣ, ���ǽǹ�ȣ) values ('201', '6505')";
$sql12_4="insert into ���ǽ� (�ǹ���ȣ, ���ǽǹ�ȣ) values ('301', '1203')";
$sql12_5="insert into ���ǽ� (�ǹ���ȣ, ���ǽǹ�ȣ) values ('401', '2307')";

$sql12_10="create table ���� (
	���� varchar2(10),
	primary key(����)
)";
$sql12_11="insert into ���� (����) values ('��')";
$sql12_12="insert into ���� (����) values ('ȭ')";
$sql12_13="insert into ���� (����) values ('��')";
$sql12_14="insert into ���� (����) values ('��')";
$sql12_15="insert into ���� (����) values ('��')";

$sql12_20="create table �ð� (
	�ð� varchar2(10),
	primary key(�ð�)
)";

$sql12_21="insert into �ð� (�ð�) values ('1')";
$sql12_22="insert into �ð� (�ð�) values ('2')";
$sql12_23="insert into �ð� (�ð�) values ('3')";
$sql12_24="insert into �ð� (�ð�) values ('4')";
$sql12_25="insert into �ð� (�ð�) values ('5')";
$sql12_26="insert into �ð� (�ð�) values ('6')";
$sql12_27="insert into �ð� (�ð�) values ('7')";
$sql12_28="insert into �ð� (�ð�) values ('8')";
$sql12_29="insert into �ð� (�ð�) values ('9')";

$sql13="create table ������ (
	�г� varchar2(10), 
	�������ȣ varchar2(10), 
	������� varchar2(30),
	�й� varchar2(10), 
	���� varchar2(10), 
	�а��ڵ� varchar2(10),
	�ð� varchar2(10), 
	�⵵ varchar2(10), 
	�б� varchar2(5), 
	���� varchar2(10), 
	�����̸� varchar2(10),
	������ȣ varchar2(10),
	�ǹ���ȣ varchar2(10),
	���ǽǹ�ȣ varchar2(10),
	primary key(�������ȣ, �й�),
	foreign key(�а��ڵ�) references �а�, 
	foreign key(�ǹ���ȣ) references �ǹ�,
	foreign key(���ǽǹ�ȣ) references ���ǽ�,
	foreign key(����) references ����,
	foreign key(�ð�) references �ð�,
	foreign key(������ȣ) references ����
)";
$sql14="create table ���� (
	�������ȣ varchar2(10),
	�й� varchar2(10),
	�й� varchar2(10),
	���� varchar2(10),
	�ð� varchar2(10),
	���� varchar2(10),
	primary key(�������ȣ, �й�, �й�),
	foreign key(�������ȣ, �й�) references ������,
	foreign key(�й�) references �л�,
	foreign key(����) references ����,
	foreign key(�ð�) references �ð�
)";
$sql15="create table �����ð�ǥ (
	�������ȣ varchar2(10),
	�й� varchar2(10),
	������ȣ varchar2(10),
	���� varchar2(10),
	�ð� varchar2(10),
	primary key(�������ȣ, �й�, ������ȣ),
	foreign key(�������ȣ, �й�) references ������,
	foreign key(������ȣ) references ����,
	foreign key(����) references ����,
	foreign key(�ð�) references �ð�
)";
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
$result11_1=oci_parse($conn, $sql11_1);
$result11_2=oci_parse($conn, $sql11_2);
$result11_3=oci_parse($conn, $sql11_3);
$result12=oci_parse($conn, $sql12);
$result12_1=oci_parse($conn, $sql12_1);
$result12_2=oci_parse($conn, $sql12_2);
$result12_3=oci_parse($conn, $sql12_3);
$result12_4=oci_parse($conn, $sql12_4);
$result12_5=oci_parse($conn, $sql12_5);
$result12_10=oci_parse($conn, $sql12_10);
$result12_11=oci_parse($conn, $sql12_11);
$result12_12=oci_parse($conn, $sql12_12);
$result12_13=oci_parse($conn, $sql12_13);
$result12_14=oci_parse($conn, $sql12_14);
$result12_15=oci_parse($conn, $sql12_15);
$result12_20=oci_parse($conn, $sql12_20);
$result12_21=oci_parse($conn, $sql12_21);
$result12_22=oci_parse($conn, $sql12_22);
$result12_23=oci_parse($conn, $sql12_23);
$result12_24=oci_parse($conn, $sql12_24);
$result12_25=oci_parse($conn, $sql12_25);
$result12_26=oci_parse($conn, $sql12_26);
$result12_27=oci_parse($conn, $sql12_27);
$result12_28=oci_parse($conn, $sql12_28);
$result12_29=oci_parse($conn, $sql12_29);
$result13=oci_parse($conn, $sql13);
$result14=oci_parse($conn, $sql14);
$result15=oci_parse($conn, $sql15);
$re0=oci_execute($result0);
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
$re11_1=oci_execute($result11_1);
$re11_2=oci_execute($result11_2);
$re11_3=oci_execute($result11_3);
$re12=oci_execute($result12);
$re12_1=oci_execute($result12_1);
$re12_2=oci_execute($result12_2);
$re12_3=oci_execute($result12_3);
$re12_4=oci_execute($result12_4);
$re12_5=oci_execute($result12_5);
$re12_10=oci_execute($result12_10);
$re12_11=oci_execute($result12_11);
$re12_12=oci_execute($result12_12);
$re12_13=oci_execute($result12_13);
$re12_14=oci_execute($result12_14);
$re12_15=oci_execute($result12_15);
$re12_20=oci_execute($result12_20);
$re12_21=oci_execute($result12_21);
$re12_22=oci_execute($result12_22);
$re12_23=oci_execute($result12_23);
$re12_24=oci_execute($result12_24);
$re12_25=oci_execute($result12_25);
$re12_26=oci_execute($result12_26);
$re12_27=oci_execute($result12_27);
$re12_28=oci_execute($result12_28);
$re12_29=oci_execute($result12_29);
$re13=oci_execute($result13);
$re14=oci_execute($result14);
$re15=oci_execute($result15);
oci_close($conn);
echo(" <meta http-equiv='Refresh' content='0; URL=index.html'>");
?>