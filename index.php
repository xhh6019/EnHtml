<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="css/ui.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jss/jquery.min.js"></script>
<script src="jss/reg.js" type="text/javascript"></script>
<script type="text/javascript" src="jss/sl.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  	$.focus("#focus001");
	});
</script>
<title>斯图亚特英语</title>
</head>
<body>
	<center>
		<div class="main" id="id_main">
			<div id="id_title_div">
				<img id="id_title_img" class="img_title" src="img/styt_logo.jpg" /> <span>
				<img id="id_title_slogan_img" class="img_title" src="img/logo.jpg" /> 
				<a href="http://weibo.com/stuartenglish" target="_blank" class="weibobtn" ><img src="img/weibobt.jpg" class="weibobtn_img"/></a>
			
			</div>
			<div class="navigation" id="id_navigation_main">
				<ul>
					<li><a href="index.php">首页</a></li>
					<li><a href="html/whystyt.php">为什么选择斯图亚特</a></li>
					<li><a href="html/aboutclass.php">精品课程</a></li>
					<li><a href="html/aboutstudents.php">学员风采</a></li>
					<li><a href="html/aboutqa.php">常见问题</a></li>		
				</ul>
			</div>

			<table class="swanregister" id="id_swanregister">
				<tr>
					<td >
						<div class="switchimg" id="id_switchimg_main">
							<div class="focus" id="focus001">
								<ul class="focus_ul">
									<li class="focus_li"><a href="#" target="_blank"><img src="img/1.jpg" alt="1" /></a></li>
									<li class="focus_li"><a href="#" target="_blank"><img src="img/04.jpg" alt="2" /></a></li>
									<li class="focus_li"><a href="#" target="_blank"><img src="img/02.jpg" alt="3" /></a></li>
									<li class="focus_li"><a href="#" target="_blank"><img src="img/03.jpg" alt="4" /></a></li>
									<li class="focus_li"><a href="#" target="_blank"><img src="img/1.jpg" alt="5" /></a></li>
									<li class="focus_li"><a href="#" target="_blank"><img src="img/1.jpg" alt="6" /></a></li>
								</ul>
							</div>
						</div>
					</td>
					<td>
						<div class="register" id="id_register_main">
							<strong>输入信息立刻领取免费试听机会：</strong>
							<form name="RegForm" method="post" action="php/reg.php"
								onSubmit="return InputCheck(this)" id="id_register_form">
								<p>
									<label for="username" class="label">用户名：</label> <input
										id="username" name="username" type="text" class="input" />
								</p>
								<p>
									<label for="tel" class="label"> 手  机 ：</label> <input id="tel"
										name="tel" type="text" class="input" />
								</p>
								<p>
									<label for="email" class="label"> 邮  箱 ：</label> <input id="email"
										name="email" type="text" class="input" />
								</p>
								<p>
									<input type="submit" name="submit" value="  提交注册  "
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
							第<?php echo $i;?>项目的文字描述
							<br />
							<img src="img/<?php echo $i;?>.jpg" /></a>
							</td><?php } ?>
				
				</tr>
			</table>
			<div class="otherinfo" id="id_otherinfo_main">
				<a href="index.php">厦门市思明区斯图亚特培训学校 版权所有 粤ICP备******号</a> <br /> <a
					href="index.php">厦门中心地址：*****。联系电话：0592-****</a>
			</div>
		</div>
	</center>
</body>
</html>
