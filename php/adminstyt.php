<html>
<head>
<title> 查询用户数据</title >
</head>
<body>
     <?php
     $id = mysql_connect( "localhost","root" ,"" );
     if ($id) {
           echo "链接成功！<br>";
     }else {
           echo "链接失败！<br>";
           exit;
     }

     if (!mysql_select_db( "stytuser")) {
           echo "数据库选择失败！<br>";
           exit;
     }

     echo "数据库选择成功！<br>" ;

     $query="SELECT * FROM user;";
     $result=mysql_query($query);
     $num = mysql_num_rows($result);
     $page_id = @$_GET["page_id" ];//获取要显示的页码
     if ($page_id == "" ){
           $page_id=1;
     }
     $page_size= "7";
     $page_num=ceil($num/$page_size); //获取总页数
     echo "共有" .$num."条记录！" ;
     echo "每页" .$page_size."条记录！<br>";
     for ($i = 1; $i <= $page_num; $i++) {
           echo "[<a href=?page_id=$i >$i</a>] ";
     }
     $start=($page_id -1)*$page_size;
     $query2= "SELECT * FROM user limit $start,$page_size;";
     //echo $query2. "<br>";
     $result2=mysql_query($query2);
     ?>
     <table width= "500" height ="192" border="1">
           <?php
          $n=0;
           while ($info = @mysql_fetch_array($result2,MYSQL_ASSOC)){
     $n++;?>
           <tr>
               <td> <?php echo "第".$n."条"?></ td>
               <td> <?php echo $info["username"]?> </td>
			   <td> <?php echo $info["tel" ]?> </td>
               <td> <?php echo $info["email" ]?> </td>
			   <td> <?php echo date("Y-m-d H:i:s",$info["regdate"])?> </td>
           </tr>
           <?php } ?>
     </table >
     <?php
     if (mysql_close($id)) {
          echo "数据库连接关闭！<br>";;
    }?>
</body>
</html>
