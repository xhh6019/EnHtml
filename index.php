<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/ui.css" type="text/css" rel="stylesheet" />
<script src="jss/reg.js" type="text/javascript"></script>
<title>˹ͼ����Ӣ��</title>
</head>
<body>
	<center>
		<div class="main" id="id_main">
			<div id="id_title_div">
				<img id="id_title_img" class="img_title" src="img/logo.png" /> <span>
					<strong id="id_sologan_text" class="sologan_text">˹ͼ����Ӣ���Ӣ��ѡ��</strong>
					<span> <strong id="id_tel_text" class="tel_text">��ϵ�绰��400-***-***</strong>
			
			</div>
			<div class="navigation" id="id_navigation_main">
				<ul>
					<li><a href="index.php">��ҳ</a></li>
					<li><a href="#Ϊʲôѡ��˹ͼ����">Ϊʲôѡ��˹ͼ����</a></li>
					<li><a href="#�γ�����">�γ�����</a></li>
					<li><a href="#ѧԱ���">ѧԱ���</a></li>
					<li><a href="#��Ա�Ż�">��Ա�Ż�</a></li>		
				</ul>
			</div>

			<table class="swanregister" id="id_swanregister">
				<tr>
					<td>
						<div class="switchimg" id="id_switchimg_main">
							<a href="index.php"> <img src="img/0.jpg" width="500px"
								height="400px" />
							</a>
						</div>
					</td>
					<td>
						<div class="register" id="id_register_main">
							<form name="RegForm" method="post" action="php/reg.php"
								onSubmit="return InputCheck(this)" id="id_register_form">
								<p>
									<label for="username" class="label">�û�����</label> <input
										id="username" name="username" type="text" class="input" />
								</p>
								<p>
									<label for="tel" class="label">�ֻ���</label> <input id="tel"
										name="tel" type="text" class="input" />
								</p>
								<p>
									<label for="email" class="label">���䣺</label> <input id="email"
										name="email" type="text" class="input" />
								</p>
								<p>
									<input type="submit" name="submit" value="  �ύע��  "
										class="left" />
								</p>
							</form>
					
					</td>
				</tr>
			</table>

			<table class="ditials" id="id_ditials_main">
				<tr>
					<?php
	  for($i=0;$i<5;$i++){?>
					<td>
						<div class="ditials_item">
							<a class="ditials_item" href="#" >
							��<?php echo $i;?>��Ŀ����������
							<br />
							<img src="img/<?php echo $i;?>.jpg" /></a>
							</td><?php } ?>
				
				</tr>
			</table>
			<div class="otherinfo" id="id_otherinfo_main">
				<a href="index.php">������˼����˹ͼ������ѵѧУ ��Ȩ���� ��ICP��******��</a> <br /> <a
					href="index.php">�������ĵ�ַ��*****����ϵ�绰��0592-****</a>
			</div>
		</div>
	</center>
</body>
</html>
