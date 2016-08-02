<?php session_start(); 
if(isset($_SESSION['aid']))
unset($_SESSION['aid']);
if(isset($_SESSION['uid']))
unset($_SESSION['uid']);
	echo "<script>alert('注销成功');window.location.href='index.php';</script>";
?>