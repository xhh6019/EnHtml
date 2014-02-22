<?php
     $conn = mysql_connect( "localhost","root" ,"" );
     if (!$conn) {
           die("连接数据库失败:".mysql_error());
     }
     mysql_select_db("stytuser");
     mysql_query("set character set 'utf-8'");
     mysql_query("set names 'utf-8'");
?>
