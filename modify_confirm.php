<!DOCTYPE HTML>
<html>
<head>
<title>Administrater login</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta name="keywords" content="Civil Engineer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--banner start here-->
<div class="banner-two">
  <div class="header">
	<div class="container">
		 <div class="header-main">
				<div class="logo">
				<h1><a>浙江大学网络传感与控制研究组校友查询管理系统</a></h1>
				</div>
				<div class="top-nav">
					<span class="menu"> <img src="images/icon.png" alt=""/></span>
				 <nav class="cl-effect-1">
					<ul class="res">
					<li><a href="admin.php">管理员界面</a></li> 
					<li><a href="userManage.php">用户管理</a></li> 
					<li><a href="insert.php">添加校友</a></li> 
					<li><a href="find.php">查询校友</a></li> 
					<li><a href="modify.php">修改校友</a></li> 
					<li><a href="delete.php">删除校友</a></li> 
				   </ul>
				 </nav>
					<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		        <!-- /script-for-menu -->
				</div>
			 <div class="clearfix"> </div>
		 </div>
	  </div>
	 </div>
 </div>
<!--banner end here-->
</br>
<div class="container">
 <form name="input" action="logout.php" method="post">

<?php
	session_start();
	if (isset($_SESSION['aid'])==0){
		echo "<script>alert('请先登录');window.location.href='index.php';</script>";
		exit;
	}
	else {
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect("localhost","root","");
		mysql_query("set character set 'utf8'");//读库 
        mysql_query("set names 'utf8'");//写库
		if (!$con){
			die('Could not connect: '.mysql_error());
		}
		mysql_select_db("AlumnusFind",$con);

		$sql="select name
		from admin
		where adminID='$_SESSION[aid]'";

		$result=mysql_query($sql);
		$row = mysql_fetch_array($result);

		echo "你好，".$row['name']."&nbsp&nbsp&nbsp&nbsp";
		mysql_close($con);
	}
    ?>
    		<input type="submit" class="btn btn-danger" name="button" value="注销" />
        </form>
    </div>
   

<!--typo start here-->
<div class="typrography">
	<div class="container">
	<div class="page">
	<h3 class="typo1">管理员界面</h3>
	</div>
	<!--Forms-->
	<!--校友查询-->

	<div class="container">
<div class="bs-example">
    <legend>校友信息</legend>
    <label class="col-sm-2 control-label">姓名</label>
    <div>
    <label class="col-sm-6 control-label" id="name_old"></label> 
    </div>
</div>
</div>
<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">邮箱</label>
    <div>
    <label class="col-sm-6 control-label" id="email_old"></label> 
    </div>
</div>
</div>

<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">毕业时间</label>
    <div>
    <label class="col-sm-6 control-label" id="graduateTime_old"></label> 
    </div>
</div>
</div>

<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">毕业去向</label>
    <div>
    <label class="col-sm-6 control-label" id="destination_old"></label> 
    </div>
</div>
</div>

<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">电话</label>
    <div>
    <label class="col-sm-6 control-label" id="phone_old"></label> 
    </div>
</div>
</div>
</br></br></br>
<div class="container">
<div class="bs-example" data-example-id="simple-horizontal-form">
	<form name="input" action="modify_confirm_check.php" method="post">

	<br />
	<legend>修改为：</legend>
      <div class="form-group">
        <label class="col-sm-1 control-label">姓名</label>
        <div class="col-sm-5">
       <input type="text" name="name" id="name" class="form-control" placeholder="姓名" readOnly="true"> <br/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">邮箱</label>
        <div class="col-sm-5">
       <input type="text" name="email" id="email" class="form-control" placeholder="邮箱"> <br/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">毕业时间</label>
        <div class="col-sm-5">
       <input type="text" name="graduateTime" id="graduateTime" class="form-control" placeholder="毕业时间"> <br/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">毕业去向</label>
        <div class="col-sm-5">
       <input type="text" name="destination" id="destination" class="form-control" placeholder="毕业去向"> <br/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">电话</label>
        <div class="col-sm-5">
       <input type="text" name="phone" id="phone" class="form-control" placeholder="电话"> <br/>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <br/>
          <button type="submit" value ="修改" class="btn btn-default">点击修改</button>
        </div>
      </div>
	</form> 
	&nbsp
</div>
</div>

<br/><br/><br/><br/><br/>
<?php 
error_reporting(0);
if ($_POST['name']==""){
	echo "<script>alert('姓名不能为空');window.location.href='modify.php';</script>";
	exit;
}
$con=mysql_connect("localhost","root","");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
if (!$con){
	//die('Could not connect: '.mysql_error());
}
mysql_select_db("AlumnusFind",$con);

$sql="select *
from NESC
where name ='$_POST[name]'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
if(!$row){
echo "<script>alert('信息不存在');window.location.href='user.php';</script>";
}else{
echo "<script>document.getElementById('name_old').textContent = '".$row['name']."';</script>";
echo "<script>document.getElementById('email_old').textContent = '".$row['email']."';</script>";
echo "<script>document.getElementById('graduateTime_old').textContent = '".$row['graduateTime']."';</script>";
echo "<script>document.getElementById('destination_old').textContent = '".$row['destination']."';</script>";
echo "<script>document.getElementById('phone_old').textContent = '".$row['phone']."';</script>";
echo "<script>document.getElementById('name').value = '".$row['name']."';</script>";
echo "<script>document.getElementById('email').value = '".$row['email']."';</script>";
echo "<script>document.getElementById('graduateTime').value = '".$row['graduateTime']."';</script>";
echo "<script>document.getElementById('destination').value = '".$row['destination']."';</script>";
echo "<script>document.getElementById('phone').value = '".$row['phone']."';</script>";
}

mysql_close($con);

?> 
	<!--//forms-->
</div>
</div>
<!--typo end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
				<div class="col-md-4 ftr-gd">
					<h3>Follow me</h3>
					<ul>
						<li><a href="https://www.facebook.com/aidan.fok" class="fa"> </a></li>
						<li><a href="https://www.twitter.com/aidanfok" class="tw"> </a></li>
						<li><a href="https://myaccount.google.com" class="g"> </a></li>
					</ul>
				</div>
                <div class="col-md-4 ftr-gd">
					<h3>AuthorInfo</h3>
					<p>霍浩钧 Aidanfok</p>
					<p>College of Control Science and Engineering</p>
					<p>Zhejiang University</p>
					<p>Email:aidanfok@outlook.com</p>
				</div>
				<div class="col-md-4 ftr-gd">
					<h3>Address</h3>
					<p>Dorm 7-2074, Yuquan Campus,</p>
					<p>Zhejiang University, Hangzhou,</p>
					<p>310027, P.R.China</p>
					<p>Phone :+86-186-6819-8693</p>
				</div>
			<div class="clearfix"> </div>
		</div>
		<script type="text/javascript">
										$(document).ready(function() {
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div>
</div>
<!--footer end here-->
</body>
</html>