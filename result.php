
<!DOCTYPE HTML>
<html>
<head>
<title>Alumnus Searching</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/function.js"></script>
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
					 <li><a href="user.php">查询校友</a></li> 
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
<!--typo start here-->
<!--startprint-->
<div class="container">
<div class="bs-example">
    <legend>校友信息</legend>
    <label class="col-sm-2 control-label">姓名</label>
    <div>
    <label class="col-sm-6 control-label" id="name"></label> 
    </div>
</div>
</div>

<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">邮箱</label>
    <div>
    <label class="col-sm-6 control-label" id="email"></label> 
    </div>
</div>
</div>

<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">毕业时间</label>
    <div>
    <label class="col-sm-6 control-label" id="graduateTime"></label> 
    </div>
</div>
</div>

<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">毕业去向</label>
    <div>
    <label class="col-sm-6 control-label" id="destination"></label> 
    </div>
</div>
</div>

<div class="container">
<div class="bs-example">
    <label class="col-sm-2 control-label">电话</label>
    <div>
    <label class="col-sm-6 control-label" id="phone"></label> 
    </div>
</div>
</div>
<!--endprint-->
<script language=javascript>
function doPrint() { 
bdhtml=window.document.body.innerHTML; 
sprnstr="<!--startprint-->"; 
eprnstr="<!--endprint-->"; 
prnhtml=bdhtml.substr(bdhtml.indexOf(sprnstr)+17); 
prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr)); 
window.document.body.innerHTML=prnhtml; 
window.print(); 
}
</script>
<div class="container">
<div class="bs-example" data-example-id="simple-horizontal-form">
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <br/>
          <button type="submit" class="btn btn-default" a href="javascript:;" onClick="doPrint()">打印</button>
        </div>
      </div>
	&nbsp
	<form name="input" action="user.php" method="post">
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <br/>
          <button type="submit" class="btn btn-default">返回</button>
        </div>
      </div>
	</form> 
</div>
</div>
<br />



<?php 
error_reporting(0);
if ($_POST['name']==""){
	echo "<script>alert('姓名不能为空');window.location.href='user.php';</script>";
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
where name like '%" .$_POST['name']. "%'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
if(!$row){
echo "<script>alert('信息不存在');window.location.href='user.php';</script>";
}else{
echo "<script>document.getElementById('name').textContent = '".$row['name']."';</script>";
echo "<script>document.getElementById('email').textContent = '".$row['email']."';</script>";
echo "<script>document.getElementById('graduateTime').textContent = '".$row['graduateTime']."';</script>";
echo "<script>document.getElementById('destination').textContent = '".$row['destination']."';</script>";
echo "<script>document.getElementById('phone').textContent = '".$row['phone']."';</script>";
}
mysql_close($con);

?> 

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