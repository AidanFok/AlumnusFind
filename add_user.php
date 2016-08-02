<html>
<body>

<?php 

if ($_POST['u_id']==""){
	echo "<script>alert('ID不能为空');window.location.href='userManage.php';</script>";
	exit;
}
if ($_POST['u_pwd']==""){
	echo "<script>alert('密码不能为空');window.location.href='userManage.php';</script>";
	exit;
}
if ($_POST['u_name']==""){
	echo "<script>alert('姓名不能为空');window.location.href='userManage.php';</script>";
	exit;
}

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
where userID='$_POST[u_id]'";

$result=mysql_query($sql);

$row = mysql_fetch_array($result);
if ($row){
	mysql_close($con);
	echo "<script>alert('此ID已经存在');window.location.href='userManage.php';</script>";
}
else {
	$sql="insert into user value('$_POST[u_id]','$_POST[u_pwd]','$_POST[u_name]')";
	mysql_query($sql);
	mysql_close($con);
	echo "<script>alert('添加成功');window.location.href='userManage.php';</script>";
}

?> <br />

</body>
</html>