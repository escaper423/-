<?
require('conn.php');
$sql0="create table 관리자 (
	관리자ID varchar2(10), 
	관리자번호 varchar2(10),
	비밀번호 varchar2(8), 
	primary key(관리자ID)
)";
$sql1="insert into 관리자 (관리자ID, 관리자번호, 비밀번호) values ('admin', '0000', '1234')";
$sql2="create table 학과(
	학과코드 varchar2(10), 
	학과이름 varchar2(30), 
	primary key(학과코드)
)";
$sql3="insert into 학과 (학과코드, 학과이름) values ('245', '정보컴퓨터공학부')";
$sql4="insert into 학과 (학과코드, 학과이름) values ('220', '기계공학부')";
$sql5="insert into 학과 (학과코드, 학과이름) values ('225', '화공생명공학부')";
$sql6="insert into 학과 (학과코드, 학과이름) values ('241', '전기공학과')";
$sql7="insert into 학과 (학과코드, 학과이름) values ('420', '경제학부')";
$sql8="create table 교수 (
	교수번호 varchar2(10), 
	비밀번호 varchar2(10), 
	교수이름 varchar2(10), 
	주민등록번호 varchar2(20),
	학과코드 varchar2(10), 
	전화번호 varchar2(20), 
	primary key(교수번호),
	unique(주민등록번호),
	foreign key(학과코드) references 학과
)";
$sql9="create table 조교 (
	조교번호 varchar2(10), 
	비밀번호 varchar2(8), 
	조교이름 varchar2(10), 
	학과코드 varchar2(10),  
	primary key(조교번호), 
	foreign key(학과코드) references 학과
)";
$sql10="create table 학생 (
	학번 varchar2(10), 
	비밀번호 varchar2(8), 
	이름 varchar2(10), 
	주민등록번호 varchar2(20),
	학년 varchar2(5), 
	주소 varchar2(150), 
	전화번호 varchar2(20),
	학과코드 varchar2(10), 
	학적상태 varchar2(10), 
	primary key(학번), 
	unique(주민등록번호),
	foreign key(학과코드) references 학과
)";
$sql11="create table 건물 (
	건물번호 varchar2(10), 
	건물이름 varchar2(20), 
	primary key(건물번호)
)";
$sql11_1="insert into 건물 (건물번호, 건물이름) values ('201', '제도관')";
$sql11_2="insert into 건물 (건물번호, 건물이름) values ('301', '인문관')";
$sql11_3="insert into 건물 (건물번호, 건물이름) values ('401', '사회관')";
$sql12="create table 강의실 (
	건물번호 varchar2(10),
	강의실번호 varchar2(10), 
	primary key(강의실번호), 
	foreign key(건물번호) references 건물
)";
$sql12_1="insert into 강의실 (건물번호, 강의실번호) values ('201', '6503')";
$sql12_2="insert into 강의실 (건물번호, 강의실번호) values ('201', '6504')";
$sql12_3="insert into 강의실 (건물번호, 강의실번호) values ('201', '6505')";
$sql12_4="insert into 강의실 (건물번호, 강의실번호) values ('301', '1203')";
$sql12_5="insert into 강의실 (건물번호, 강의실번호) values ('401', '2307')";

$sql12_10="create table 요일 (
	요일 varchar2(10),
	primary key(요일)
)";
$sql12_11="insert into 요일 (요일) values ('월')";
$sql12_12="insert into 요일 (요일) values ('화')";
$sql12_13="insert into 요일 (요일) values ('수')";
$sql12_14="insert into 요일 (요일) values ('목')";
$sql12_15="insert into 요일 (요일) values ('금')";

$sql12_20="create table 시간 (
	시간 varchar2(10),
	primary key(시간)
)";

$sql12_21="insert into 시간 (시간) values ('1')";
$sql12_22="insert into 시간 (시간) values ('2')";
$sql12_23="insert into 시간 (시간) values ('3')";
$sql12_24="insert into 시간 (시간) values ('4')";
$sql12_25="insert into 시간 (시간) values ('5')";
$sql12_26="insert into 시간 (시간) values ('6')";
$sql12_27="insert into 시간 (시간) values ('7')";
$sql12_28="insert into 시간 (시간) values ('8')";
$sql12_29="insert into 시간 (시간) values ('9')";

$sql13="create table 교과목 (
	학년 varchar2(10), 
	교과목번호 varchar2(10), 
	교과목명 varchar2(30),
	분반 varchar2(10), 
	학점 varchar2(10), 
	학과코드 varchar2(10),
	시간 varchar2(10), 
	년도 varchar2(10), 
	학기 varchar2(5), 
	요일 varchar2(10), 
	교수이름 varchar2(10),
	교수번호 varchar2(10),
	건물번호 varchar2(10),
	강의실번호 varchar2(10),
	primary key(교과목번호, 분반),
	foreign key(학과코드) references 학과, 
	foreign key(건물번호) references 건물,
	foreign key(강의실번호) references 강의실,
	foreign key(요일) references 요일,
	foreign key(시간) references 시간,
	foreign key(교수번호) references 교수
)";
$sql14="create table 수강 (
	교과목번호 varchar2(10),
	분반 varchar2(10),
	학번 varchar2(10),
	요일 varchar2(10),
	시간 varchar2(10),
	성적 varchar2(10),
	primary key(교과목번호, 분반, 학번),
	foreign key(교과목번호, 분반) references 교과목,
	foreign key(학번) references 학생,
	foreign key(요일) references 요일,
	foreign key(시간) references 시간
)";
$sql15="create table 교수시간표 (
	교과목번호 varchar2(10),
	분반 varchar2(10),
	교수번호 varchar2(10),
	요일 varchar2(10),
	시간 varchar2(10),
	primary key(교과목번호, 분반, 교수번호),
	foreign key(교과목번호, 분반) references 교과목,
	foreign key(교수번호) references 교수,
	foreign key(요일) references 요일,
	foreign key(시간) references 시간
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