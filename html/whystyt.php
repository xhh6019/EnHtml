<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="../css/ui.css" type="text/css" rel="stylesheet" />
<title>Ϊʲôѡ��˹ͼ����Ӣ��</title>
</head>

<body>
	<body>
		<center>
			<div class="main" id="id_main">
				<div id="id_title_div">
					<img id="id_title_img" class="img_title" src="../img/styt_logo.jpg" />
					<span> <img id="id_title_slogan_img" class="img_title"
						src="../img/logo.jpg" /> <span> <strong id="id_tel_text"
							class="tel_text">��ϵ�绰��400-***-***</strong>
				
				</div>
				<div class="navigation" id="id_navigation_main">
					<ul>
						<li><a href="../index.php">��ҳ</a></li>
						<li><a href="#Ϊʲôѡ��˹ͼ����">Ϊʲôѡ��˹ͼ����</a></li>
						<li><a href="#�γ�����">�γ�����</a></li>
						<li><a href="#ѧԱ���">ѧԱ���</a></li>
						<li><a href="#��Ա�Ż�">��Ա�Ż�</a></li>
					</ul>
				</div>



				<div class="main_whystyt" id="id_main_whystyt">
					<table class="main_whystyt_table" id="id_main_whystyt_table">
						<tr>
						<!--
							<td>
								<ul class="whystyt_list">
									<li><a href="">����˹ͼ����</a></li>
									<li><a href="2">����</a></li>
								</ul>
							</td>
						-->
							<td>
								<div class="whystyt_content" id="id_whystyt_content">
									<p>����˹ͼ����</p>
									<p>
										<?php
										$filename= "../txt/aboutstyt.txt";
										if (!file_exists ($filename)) {
          									$fp=fopen($filename, "w");
          									fclose($fp);         
     									}
     									$fp=fopen($filename, "r");     									
     									$text=true;
     									while($text){
	 									$text=fgets($fp);
	 									echo '<p>'.$text.'</p>';
	 									}
	 									?>
									</p>
									<p>����</p>
									<img src="../img/wyytf.png" alt="��λһ���ѧ��" />
									<p>
										<?php
										$filename= "../txt/linian.txt";
										if (!file_exists ($filename)) {
          									$fp=fopen($filename, "w");
          									fclose($fp);         
     									}
     									$fp=fopen($filename, "r");     									
     									$text=true;
     									while($text){
	 									$text=fgets($fp);
	 									echo '<p>'.$text.'</p>';
	 									}
	 									?>
									</p>

								</div>
							</td>
						</tr>
					</table>

				</div>
				<div class="otherinfo" id="id_otherinfo_main">
					<a href="index.php">������˼����˹ͼ������ѵѧУ ��Ȩ���� ��ICP��******��</a> <br /> <a
						href="index.php">�������ĵ�ַ��*****����ϵ�绰��0592-****</a>
				</div>
			</div>
		</center>
	</body>
</body>
</html>
