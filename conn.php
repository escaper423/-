<?
 $server = "127.0.0.1/XE";
 $user_name = "db13";
 $password = "db131234";
 $conn =@oci_connect($user_name, $password, $server) or die ('not connect:');
 // ���⿡�� system �κ��� system ID(�⺻������ system)�̰�,
 // admin �̶�� �κ��� ���� ���̵�(�⺻������ system)�� ��ȣ�̰�,
 // XE �κ��� SID(Security ID)�μ� oragle 10g express edtion������ �⺻������ XE �̴�.
 // Ȥ�� XE�� �� �ȴٵ���, �ڽ��� SID�� �˰��� �ϸ� �� PHP source code �Ʒ��� 
 // ��(SID��?)�� �����ϱ� �ٶ���.
?>