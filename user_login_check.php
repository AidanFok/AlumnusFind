<?php session_start(); ?>
<html>
<body>

<?php 
error_reporting(E_ALL ^ E_DEPRECATED);

$con=mysql_connect("localhost","root","");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
if (!$con){
	die('Could not connect: '.mysql_error());
}

mysql_select_db("AlumnusFind",$con);

$sql="select *
from user
where userID='$_POST[u_id]' and password='$_POST[u_pwd]'";

$result=mysql_query($sql);

if (!$result){
  mysql_close($con);
  exit;
}

if (mysql_fetch_array($result)){
	$_SESSION['uid']=$_POST["u_id"];
	header("Location: user.php"); 
	exit;
}
else {
	echo "<script>alert('此人不存在或密码错误');window.location.href='index.php';</script>";
	exit;
}

mysql_close($con);


?> 



</body>
</html>