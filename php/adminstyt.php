<html>
<head>
<title> ��ѯ�û�����</title >
</head>
<body>
     <?php
     $id = mysql_connect( "localhost","root" ,"" );
     if ($id) {
           echo "���ӳɹ���<br>";
     }else {
           echo "����ʧ�ܣ�<br>";
           exit;
     }

     if (!mysql_select_db( "stytuser")) {
           echo "���ݿ�ѡ��ʧ�ܣ�<br>";
           exit;
     }

     echo "���ݿ�ѡ��ɹ���<br>" ;

     $query="SELECT * FROM user;";
     $result=mysql_query($query);
     $num = mysql_num_rows($result);
     $page_id = @$_GET["page_id" ];//��ȡҪ��ʾ��ҳ��
     if ($page_id == "" ){
           $page_id=1;
     }
     $page_size= "7";
     $page_num=ceil($num/$page_size); //��ȡ��ҳ��
     echo "����" .$num."����¼��" ;
     echo "ÿҳ" .$page_size."����¼��<br>";
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
               <td> <?php echo "��".$n."��"?></ td>
               <td> <?php echo $info["username"]?> </td>
			   <td> <?php echo $info["tel" ]?> </td>
               <td> <?php echo $info["email" ]?> </td>
			   <td> <?php echo date("Y-m-d H:i:s",$info["regdate"])?> </td>
           </tr>
           <?php } ?>
     </table >
     <?php
     if (mysql_close($id)) {
          echo "���ݿ����ӹرգ�<br>";;
    }?>
</body>
</html>
