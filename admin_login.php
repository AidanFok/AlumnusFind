<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
					<li><a href="index.php">用户登录</a></li> 
					<li><a href="admin_login.php">管理员登录</a></li>
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
<!--typo start here-->
<div class="typrography">
	<div class="container">
	<div class="page">
		<h3 class="typo1">管理员登录</h3>
	<!--Forms-->
	<div class="page-header">
      </div>
  <div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal" name="input" action="admin_login_check.php" method="post">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
       <input type="text" name="a_id" class="form-control" placeholder="ID">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">password</label>
        <div class="col-sm-10">
          <input type="password" name="a_pwd" class="form-control" placeholder="password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
  </div>
	<!--//forms-->
	</div>
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