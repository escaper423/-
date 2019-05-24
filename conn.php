<?
 $server = "127.0.0.1/XE";
 $user_name = "db13";
 $password = "db131234";
 $conn =@oci_connect($user_name, $password, $server) or die ('not connect:');
 // 여기에서 system 부분은 system ID(기본적으로 system)이고,
 // admin 이라는 부분은 위의 아이디(기본적으로 system)의 암호이고,
 // XE 부분은 SID(Security ID)로서 oragle 10g express edtion에서는 기본적으로 XE 이다.
 // 혹시 XE로 안 된다든지, 자신의 SID를 알고자 하면 이 PHP source code 아래의 
 // 글(SID란?)을 참조하기 바란다.
?>