<html>
<body>

<?php 
//error_reporting(~E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED); 
if ($_POST['name']==""){
	echo "<script>alert('姓名不能为空');window.location.href='insert.php';</script>";
	exit;
}
$con=mysql_connect("localhost","root","");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
if (!$con){
	die('Could not connect: '.mysql_error());
}
mysql_select_db("AlumnusFind",$con);
$sql="insert into NESC values('$_POST[name]','$_POST[email]','$_POST[graduateTime]','$_POST[destination]','$_POST[phone]')";

if (!mysql_query($sql)){
echo "<script>alert('姓名重复');window.location.href='insert.php';</script>";
mysql_close($con);
exit;
}else{
mysql_close($con);
echo "<script>alert('添加成功');window.location.href='insert.php';</script>";
}
?> <br />

</body>
</html>