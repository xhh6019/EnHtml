<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="../css/ui.css" type="text/css" rel="stylesheet" />
<title>为什么选择斯图亚特英语</title>
</head>

<body>
	<body>
		<center>
			<div class="main" id="id_main">
				<div id="id_title_div">
					<img id="id_title_img" class="img_title" src="../img/styt_logo.jpg" />
					<span> <img id="id_title_slogan_img" class="img_title"
						src="../img/logo.jpg" /> <span> <strong id="id_tel_text"
							class="tel_text">联系电话：400-***-***</strong>
				
				</div>
				<div class="navigation" id="id_navigation_main">
					<ul>
						<li><a href="../index.php">首页</a></li>
						<li><a href="#为什么选择斯图亚特">为什么选择斯图亚特</a></li>
						<li><a href="#课程体验">课程体验</a></li>
						<li><a href="#学员风采">学员风采</a></li>
						<li><a href="#会员优惠">会员优惠</a></li>
					</ul>
				</div>



				<div class="main_whystyt" id="id_main_whystyt">
					<table class="main_whystyt_table" id="id_main_whystyt_table">
						<tr>
						<!--
							<td>
								<ul class="whystyt_list">
									<li><a href="">关于斯图亚特</a></li>
									<li><a href="2">理念</a></li>
								</ul>
							</td>
						-->
							<td>
								<div class="whystyt_content" id="id_whystyt_content">
									<p>关于斯图亚特</p>
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
									<p>理念</p>
									<img src="../img/wyytf.png" alt="五位一体教学法" />
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
					<a href="index.php">厦门市思明区斯图亚特培训学校 版权所有 粤ICP备******号</a> <br /> <a
						href="index.php">厦门中心地址：*****。联系电话：0592-****</a>
				</div>
			</div>
		</center>
	</body>
</body>
</html>
