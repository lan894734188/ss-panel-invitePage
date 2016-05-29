<?php
date_default_timezone_set("Asia/Shanghai");
$conn = new mysqli('127.0.0.1:3306','root','tset','database') or die("哎呀出错了啦");
$conn->query("SET NAMES utf8");
$stmt_getdata=$conn->prepare("SELECT id,code from ss_invite_code where user_id='用户ID' Order by id ASC  LIMIT 100");
$stmt_getdata->execute();
$res_data=$stmt_getdata->get_result();
while ($rows = mysqli_fetch_array($res_data))
echo $rows['code'],"<br/>";
exit();
?>