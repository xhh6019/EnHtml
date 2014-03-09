<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="../css/ui.css" type="text/css" rel="stylesheet" />
<title>斯图亚特英语--精品课程</title>
</head>

<body>
	<body>
		<center>
			<div class="main" id="id_main">
				<div id="id_title_div">
					<img id="id_title_img" class="img_title" src="../img/styt_logo.jpg" />
					<span> <img id="id_title_slogan_img" class="img_title"
						src="../img/logo.jpg" /> <span> 
						<a href="http://weibo.com/stuartenglish" target="_blank" class="weibobtn" ><img src="../img/weibobt.jpg" class="weibobtn_img"/></a>
				
				</div>
				<div class="navigation" id="id_navigation_main">
					<ul>
					<li><a href="../index.php">首页</a></li>
					<li><a href="whystyt.php">为什么选择斯图亚特</a></li>
					<li><a href="aboutclass.php">精品课程</a></li>
					<li><a href="aboutstudents.php">学员风采</a></li>
					<li><a href="aboutqa.php">常见问题</a></li>		
					</ul>
				</div>



				<div class="main_whystyt" id="id_main_whystyt">
					<table class="main_whystyt_table" id="id_main_whystyt_table">
						<tr>
						
							<td class="content_list" id="id_content_list">
								<ul >
									<li><a href="#1">兄弟会</a></li>
									<li><a href="#2">初高中导优班</a></li>
									<li><a href="#3">四六级全程班</a></li>
									<li><a href="#4">商务英语强化班</a></li>
									<li><a href="#5">新概念精品班</a></li>
									<li><a href="#6">零基础美国口语班</a></li>
									<li><a href="#7">高端私人定制</a></li>
									<li><a href="#getin">联系方式</a></li>
								</ul>
							</td>
						
							<td>
								<div class="data_content" id="id_data_content">
									<p>精品课程</p>
									<p>
										<?php
										for($i=1;$i<8;$i++){
											echo '<a name="'.$i.'"></a>';
											$filename= '../txt/aboutclass'.$i.'.txt';
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
										}
										
	 									?>
									</p>
									<a name="getin"></a>
									<?php
										$filename= "../txt/getin.txt";
										if (!file_exists ($filename)) {
          									$fp=fopen($filename, "w");
          									fclose($fp);         
     									}
     									$fp=fopen($filename, "r");     									
     									$text=true;
     									while($text){
	 									$text=fgets($fp);
	 									echo '<p><strong>'.$text.'</strong></p>';
	 									}
	 									?>	
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
