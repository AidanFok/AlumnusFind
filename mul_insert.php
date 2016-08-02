<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con=mysql_connect("localhost","root","");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
if (!$con){
  die('Could not connect: '.mysql_error());
}
mysql_select_db("AlumnusFind",$con);

$flag=1;

$myfile = fopen($_FILES["bk_file"]["tmp_name"], "r") or die("Unable to open file!");
while(!feof($myfile)) {
  $arr=explode(",",fgets($myfile),5);
  $sql="insert into NESC values('$arr[0]','$arr[1]','$arr[2]','$arr[3]',$arr[4])";
    if (!mysql_query($sql)) $flag=0;
  }
fclose($myfile);

mysql_close($con);
if ($flag==1) echo "<script>alert('全部添加成功');window.location.href='insert.php';</script>";
else echo "<script>alert('部分添加成功');window.location.href='insert.php';</script>";
?>