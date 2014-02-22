<?php
if (!isset($_POST['submit'])){
	exit("非法访问");
}
$username = $_POST['username'];
$tel = $_POST['tel'];
$email = $_POST['email'];
//注册信息判断
if (!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	exit('错误：用户名不符合规定。<a href="javascript:history.back(-1)">返回</a>');
}
if (strlen($tel) < 11){
	exit('错误：电话少于11位。<a href="javascript:history.back(-1)">返回</a>');
}

include 'conn.php';
//检查用户名是否存在
$check_query = mysql_query("select tel from user where username='$username' limit 1");
if (mysql_fetch_array($check_query)){
	echo '错误:用户名 '.$username.'已经存在。<a href="javascript:history.back(-1)">返回</a>';
	exit();	
}
//写入数据
$regdate = time();
$sql = "insert into user(username,tel,email,regdate) values('$username','$tel','$email','$regdate')";
if (mysql_query($sql)){
	exit('注册成功！我们会尽快联系你！！！ 点击<a href="../index.php">返回</a>');
}else {
	echo '添加失败'.mysql_error().'<br>';
	echo ('点击返回<a href="javascript:history.back(-1)">返回</a>');
}
?>