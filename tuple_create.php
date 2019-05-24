<?
require('conn.php');
$sql1="insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('100','111','김경석','701212-1871111','245', '010-0000-0000')";
$sql2="insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('200','222','한성일','711212-1871111','420', '010-0000-0000')";
$sql3="insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('300','333','탁성우','721212-1871113','245', '010-0000-0000')";
$sql4="insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('400','444','류광렬','731212-1861113','245', '010-0000-0000')";
$sql5="insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('500','555','김호원','741212-1851113','245', '010-0000-0000')";
$sql6="insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('600','666','이정태','751212-1861113','245', '010-0000-0000')";
$sql7="insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('700','777','권혁철','761212-1871113','245', '010-0000-0000')";
$sql8="insert into 조교 (조교번호, 비밀번호, 조교이름, 학과코드) 
values ('1000', '1111', '추신수', '245')";
$sql9="insert into 조교 (조교번호, 비밀번호, 조교이름, 학과코드) 
values ('1111', '1111', '류현진', '420')";
$sql10="insert into 조교 (조교번호, 비밀번호, 조교이름, 학과코드) 
values ('2222', '2222', '오승환', '220')";
$sql11="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007111', '1111', '이종욱', '810000-1800001', '1', '부산', '010-0000-0000', '245', '재학')";
$sql12="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007222', '1111', '홍성흔', '820000-1800001', '2', '창원', '010-0000-0000', '245', '재학')";
$sql13="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007333', '1111', '이대호', '830000-1800001', '2', '서울', '010-0000-0000', '245', '재학')";
$sql14="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007444', '1111', '홍길동', '840000-1800001', '3', '울산', '010-0000-0000', '245', '재학')";
$sql15="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007555', '1111', '강민호', '850000-1800001', '4', '뉴욕', '010-0000-0000', '245', '재학')";
$sql16="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007666', '1111', '김철수', '860000-1800001', '2', '대구', '010-0000-0000', '245', '재학')";
$sql17="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007777', '1111', '이철수', '870000-1800001', '3', '진해', '010-0000-0000', '420', '재학')";
$sql18="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007888', '1111', '김영희', '880000-1800001', '2', '마산', '010-0000-0000', '420', '재학')";
$sql19="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007999', '1111', '김수미', '890000-1800001', '3', '통영', '010-0000-0000', '245', '재학')";
$sql20="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008111', '1111', '김유정', '900000-1800001', '2', '거제', '010-0000-0000', '245', '재학')";
$sql21="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008222', '1111', '아무개', '910000-1800001', '3', '서울', '010-0000-0000', '245', '재학')";
$sql22="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008333', '1111', '김시진', '920000-1800001', '4', '부산', '010-0000-0000', '245', '재학')";
$sql23="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008444', '1111', '손아섭', '930000-1800001', '4', '부산', '010-0000-0000', '245', '재학')";
$sql24="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008555', '1111', '전준우', '790000-1800001', '3', '창원', '010-0000-0000', '245', '재학')";
$sql25="insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008666', '1111', '박기혁', '800000-1800001', '2', '진해', '010-0000-0000', '245', '재학')";
$sql26="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('3','CP100','데이터베이스','059','3','245','3','2013','2','월', '김경석', '100' ,'201','6503')";
$sql27="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('3','CP200','컴퓨터알고리즘','060','3','245','2','2013','2','화', '류광렬', '400' ,'201','6504')";
$sql28="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('1','CP300','문제해결기법','004','3','245','5','2013','2','월','탁성우', '300' ,'201','6505')";
$sql29="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('3','CP400','컴퓨터네트워크','060','3','245','6','2013','2','수','탁성우','300','201','6505')";
$sql30="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('2','EC500','비즈니스경제학','003','3','420','7','2013','2','수','한성일','200','301','1203')";
$sql31="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('2','EC600','정치경제학이론','004','3','420','9','2013','2','화','한성일','200','401','2307')";
$sql32="insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('4','CP700','데이터마이닝','061','3','245','7','2013','2','목','류광렬','400','201','6505')";
$sql33="insert into 수강 
values ('CP100', '059', '2007111', '월', '3', 'A0')";
$sql34="insert into 수강 
values ('CP100', '059', '2007222', '월', '3', 'B+')";
$sql35="insert into 수강 
values ('CP100', '059', '2007333', '월', '3', 'B0')";
$sql36="insert into 수강 
values ('CP100', '059', '2007444', '월', '3', 'F')";
$sql37="insert into 수강 
values ('CP100', '059', '2007555', '월', '3', 'C+')";
$sql38="insert into 수강 
values ('CP100', '059', '2007666', '월', '3', 'A+')";
$sql39="insert into 수강 
values ('CP100', '059', '2007777', '월', '3', 'F')";
$sql40="insert into 수강 
values ('CP100', '059', '2007888', '월', '3', 'C0')";
$sql41="insert into 수강 
values ('CP100', '059', '2007999', '월', '3', 'D+')";
$sql42="insert into 수강 
values ('CP100', '059', '2008111', '월', '3', 'B0')";
$sql43="insert into 수강 
values ('CP200', '060', '2007222', '화', '3', 'B+')";
$sql44="insert into 수강 
values ('CP200', '060', '2007333', '화', '3', 'D0')";
$sql45="insert into 수강 
values ('CP200', '060', '2007444', '화', '3', 'A0')";
$sql46="insert into 수강 
values ('CP200', '060', '2007555', '화', '3', 'D+')";
$sql47="insert into 수강 
values ('CP200', '060', '2007666', '화', '3', 'B0')";
$sql48="insert into 수강 
values ('CP200', '060', '2008222', '화', '3', 'B+')";
$sql49="insert into 수강 
values ('CP200', '060', '2008333', '화', '3', 'C0')";
$sql50="insert into 수강 
values ('CP200', '060', '2008444', '화', '3', 'B0')";
$sql51="insert into 수강 
values ('CP200', '060', '2008555', '화', '3', 'B+')";
$sql52="insert into 수강 
values ('CP200', '060', '2008666', '화', '3', 'A+')";
$sql53="insert into 교수시간표 
values ('CP100', '059', '100', '월', '3')";
$sql54="insert into 교수시간표 
values ('CP200', '060', '400', '화', '2')";
$sql55="insert into 교수시간표 
values ('CP300', '004', '300', '월', '5')";
$sql56="insert into 교수시간표 
values ('CP400', '060', '300', '수', '6')";
$sql57="insert into 교수시간표 
values ('EC500', '003', '200', '수', '7')";
$sql58="insert into 교수시간표 
values ('EC600', '004', '200', '화', '9')";
$sql59="insert into 교수시간표 
values ('CP700', '061', '400', '목', '7')";
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