<?php
if (!isset($_POST['submit'])){
	exit("�Ƿ�����");
}
$username = $_POST['username'];
$tel = $_POST['tel'];
$email = $_POST['email'];
//ע����Ϣ�ж�
if (!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	exit('�����û��������Ϲ涨��<a href="javascript:history.back(-1)">����</a>');
}
if (strlen($tel) < 11){
	exit('���󣺵绰����11λ��<a href="javascript:history.back(-1)">����</a>');
}

include 'conn.php';
//����û����Ƿ����
$check_query = mysql_query("select tel from user where username='$username' limit 1");
if (mysql_fetch_array($check_query)){
	echo '����:�û��� '.$username.'�Ѿ����ڡ�<a href="javascript:history.back(-1)">����</a>';
	exit();	
}
//д������
$regdate = time();
$sql = "insert into user(username,tel,email,regdate) values('$username','$tel','$email','$regdate')";
if (mysql_query($sql)){
	exit('ע��ɹ������ǻᾡ����ϵ�㣡���� ���<a href="../index.php">����</a>');
}else {
	echo '���ʧ��'.mysql_error().'<br>';
	echo ('�������<a href="javascript:history.back(-1)">����</a>');
}
?>