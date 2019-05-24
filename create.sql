connect db13/db131234;

drop table 교수시간표;
drop table 수강;
drop table 교과목;
drop table 시간;
drop table 요일;
drop table 강의실;
drop table 건물;
drop table 학생;
drop table 조교;
drop table 교수;
drop table 관리자;
drop table 학과;

create table 관리자 (
	관리자ID varchar2(10), 
	관리자번호 varchar2(10),
	비밀번호 varchar2(8), 
	primary key(관리자ID)
);

insert into 관리자 (관리자ID, 관리자번호, 비밀번호) values ('admin', '0000', '1234');

create table 학과(
	학과코드 varchar2(10), 
	학과이름 varchar2(30), 
	primary key(학과코드)
);

insert into 학과 (학과코드, 학과이름) values ('245', '정보컴퓨터공학부');
insert into 학과 (학과코드, 학과이름) values ('220', '기계공학부');
insert into 학과 (학과코드, 학과이름) values ('225', '화공생명공학부');
insert into 학과 (학과코드, 학과이름) values ('241', '전기공학과');
insert into 학과 (학과코드, 학과이름) values ('420', '경제학부');

create table 교수 (
	교수번호 varchar2(10), 
	비밀번호 varchar2(10), 
	교수이름 varchar2(10), 
	주민등록번호 varchar2(20),
	학과코드 varchar2(10), 
	전화번호 varchar2(20), 
	primary key(교수번호),
	unique(주민등록번호),
	foreign key(학과코드) references 학과
);

insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('100','111','김경석','701212-1871111','245', '010-0000-0000');
insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('200','222','한성일','711212-1871111','420', '010-0000-0000');
insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('300','333','탁성우','721212-1871113','245', '010-0000-0000');
insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('400','444','류광렬','731212-1861113','245', '010-0000-0000');
insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('500','555','김호원','741212-1851113','245', '010-0000-0000');
insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('600','666','이정태','751212-1861113','245', '010-0000-0000');
insert into 교수 (교수번호, 비밀번호, 교수이름, 주민등록번호, 학과코드, 전화번호) 
values ('700','777','권혁철','761212-1871113','245', '010-0000-0000');


create table 조교 (
	조교번호 varchar2(10), 
	비밀번호 varchar2(8), 
	조교이름 varchar2(10), 
	학과코드 varchar2(10),  
	primary key(조교번호), 
	foreign key(학과코드) references 학과
);

insert into 조교 (조교번호, 비밀번호, 조교이름, 학과코드) 
values ('1000', '1111', '추신수', '245');
insert into 조교 (조교번호, 비밀번호, 조교이름, 학과코드) 
values ('1111', '1111', '류현진', '420');
insert into 조교 (조교번호, 비밀번호, 조교이름, 학과코드) 
values ('2222', '2222', '오승환', '220');

create table 학생 (
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
);

insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007111', '1111', '이종욱', '810000-1800001', '1', '부산', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007222', '1111', '홍성흔', '820000-1800001', '2', '창원', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007333', '1111', '이대호', '830000-1800001', '2', '서울', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007444', '1111', '홍길동', '840000-1800001', '3', '울산', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007555', '1111', '강민호', '850000-1800001', '4', '뉴욕', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007666', '1111', '김철수', '860000-1800001', '2', '대구', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007777', '1111', '이철수', '870000-1800001', '3', '진해', '010-0000-0000', '420', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007888', '1111', '김영희', '880000-1800001', '2', '마산', '010-0000-0000', '420', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2007999', '1111', '김수미', '890000-1800001', '3', '통영', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008111', '1111', '김유정', '900000-1800001', '2', '거제', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008222', '1111', '아무개', '910000-1800001', '3', '서울', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008333', '1111', '김시진', '920000-1800001', '4', '부산', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008444', '1111', '손아섭', '930000-1800001', '4', '부산', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008555', '1111', '전준우', '790000-1800001', '3', '창원', '010-0000-0000', '245', '재학');
insert into 학생 (학번, 비밀번호, 이름, 주민등록번호, 학년, 주소, 전화번호, 학과코드, 학적상태) 
values ('2008666', '1111', '박기혁', '800000-1800001', '2', '진해', '010-0000-0000', '245', '재학');

create table 건물 (
	건물번호 varchar2(10), 
	건물이름 varchar2(20), 
	primary key(건물번호)
);

insert into 건물 (건물번호, 건물이름) values ('201', '제도관');
insert into 건물 (건물번호, 건물이름) values ('301', '인문관');
insert into 건물 (건물번호, 건물이름) values ('401', '사회관');

create table 강의실 (
	건물번호 varchar2(10),
	강의실번호 varchar2(10), 
	primary key(강의실번호), 
	foreign key(건물번호) references 건물
);

insert into 강의실 (건물번호, 강의실번호) values ('201', '6503');
insert into 강의실 (건물번호, 강의실번호) values ('201', '6504');
insert into 강의실 (건물번호, 강의실번호) values ('201', '6505');
insert into 강의실 (건물번호, 강의실번호) values ('301', '1203');
insert into 강의실 (건물번호, 강의실번호) values ('401', '2307');

create table 요일 (
	요일 varchar2(10),
	primary key(요일)
);

insert into 요일 (요일) values ('월');
insert into 요일 (요일) values ('화');
insert into 요일 (요일) values ('수');
insert into 요일 (요일) values ('목');
insert into 요일 (요일) values ('금');

create table 시간 (
	시간 varchar2(10),
	primary key(시간)
);

insert into 시간 (시간) values ('1');
insert into 시간 (시간) values ('2');
insert into 시간 (시간) values ('3');
insert into 시간 (시간) values ('4');
insert into 시간 (시간) values ('5');
insert into 시간 (시간) values ('6');
insert into 시간 (시간) values ('7');
insert into 시간 (시간) values ('8');
insert into 시간 (시간) values ('9');

create table 교과목 (
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
);

insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('3','CP100','데이터베이스','059','3','245','3','2013','2','월', '김경석', '100' ,'201','6503');
insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('3','CP200','컴퓨터알고리즘','060','3','245','2','2013','2','화', '류광렬', '400' ,'201','6504');
insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('1','CP300','문제해결기법','004','3','245','5','2013','2','월','탁성우', '300' ,'201','6505');
insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('3','CP400','컴퓨터네트워크','060','3','245','6','2013','2','수','탁성우','300','201','6505');
insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('2','EC500','비즈니스경제학','003','3','420','7','2013','2','수','한성일','200','301','1203');
insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('2','EC600','정치경제학이론','004','3','420','9','2013','2','화','한성일','200','401','2307');
insert into 교과목 (학년, 교과목번호, 교과목명, 분반, 학점, 학과코드, 시간, 년도, 학기, 요일, 교수이름, 교수번호, 건물번호, 강의실번호) 
values ('4','CP700','데이터마이닝','061','3','245','7','2013','2','목','류광렬','400','201','6505');

create table 수강 (
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
);

insert into 수강 
values ('CP100', '059', '2007111', '월', '3', 'A0');
insert into 수강 
values ('CP100', '059', '2007222', '월', '3', 'B+');
insert into 수강 
values ('CP100', '059', '2007333', '월', '3', 'B0');
insert into 수강 
values ('CP100', '059', '2007444', '월', '3', 'F');
insert into 수강 
values ('CP100', '059', '2007555', '월', '3', 'C+');
insert into 수강 
values ('CP100', '059', '2007666', '월', '3', 'A+');
insert into 수강 
values ('CP100', '059', '2007777', '월', '3', 'F');
insert into 수강 
values ('CP100', '059', '2007888', '월', '3', 'C0');
insert into 수강 
values ('CP100', '059', '2007999', '월', '3', 'D+');
insert into 수강 
values ('CP100', '059', '2008111', '월', '3', 'B0');
insert into 수강 
values ('CP200', '060', '2007222', '화', '3', 'B+');
insert into 수강 
values ('CP200', '060', '2007333', '화', '3', 'D0');
insert into 수강 
values ('CP200', '060', '2007444', '화', '3', 'A0');
insert into 수강 
values ('CP200', '060', '2007555', '화', '3', 'D+');
insert into 수강 
values ('CP200', '060', '2007666', '화', '3', 'B0');
insert into 수강 
values ('CP200', '060', '2008222', '화', '3', 'B+');
insert into 수강 
values ('CP200', '060', '2008333', '화', '3', 'C0');
insert into 수강 
values ('CP200', '060', '2008444', '화', '3', 'B0');
insert into 수강 
values ('CP200', '060', '2008555', '화', '3', 'B+');
insert into 수강 
values ('CP200', '060', '2008666', '화', '3', 'A+');

create table 교수시간표 (
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
);

insert into 교수시간표 
values ('CP100', '059', '100', '월', '3');
insert into 교수시간표 
values ('CP200', '060', '400', '화', '2');
insert into 교수시간표 
values ('CP300', '004', '300', '월', '5');
insert into 교수시간표 
values ('CP400', '060', '300', '수', '6');
insert into 교수시간표 
values ('EC500', '003', '200', '수', '7');
insert into 교수시간표 
values ('EC600', '004', '200', '화', '9');
insert into 교수시간표 
values ('CP700', '061', '400', '목', '7');