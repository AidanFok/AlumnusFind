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
from NESC
where name='$_POST[name]'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
if ($row){
	$sql="delete from NESC where name='$_POST[name]'";
	mysql_query($sql);
	mysql_close($con);
	echo "<script>alert('删除成功');window.location.href='delete.php';</script>";
}
else {
	mysql_close($con);
	echo "<script>alert('此人不存在');window.location.href='delete.php';</script>";
}

?> 
<br />

</body>
</html>