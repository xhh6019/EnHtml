<?php
     $conn = mysql_connect( "localhost","root" ,"" );
     if (!$conn) {
           die("�������ݿ�ʧ��:".mysql_error());
     }
     mysql_select_db("stytuser");
     mysql_query("set character set 'utf-8'");
     mysql_query("set names 'utf-8'");
?>
