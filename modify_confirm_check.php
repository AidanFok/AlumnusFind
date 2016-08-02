<html>
<body>

<?php 
//error_reporting(~E_ALL);
error_reporting(E_ALL ^ E_DEPRECATED); 
$con=mysql_connect("localhost","root","");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
if (!$con){
	die('Could not connect: '.mysql_error());
}
mysql_select_db("AlumnusFind",$con);
$sql="update NESC set email='$_POST[email]',graduateTime='$_POST[graduateTime]',destination='$_POST[destination]',phone='$_POST[phone]' where name='$_POST[name]'";
mysql_query($sql);
mysql_close($con);
echo "<script>alert('修改成功');window.location.href='modify.php';</script>";


?> <br />

</body>
</html>