
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
	<!--书目查询-->
<div class="container">
<div class="bs-example" data-example-id="simple-horizontal-form">
	<form name="input" action="find.php" method="post">
	<legend>查询校友</legend>
      <div class="form-group">
        <label class="col-sm-1 control-label">姓名</label>
        <div class="col-sm-5">
       <input type="text" name="name" id="name" class="form-control" placeholder="姓名"> <br/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-1 control-label">Email</label>
        <div class="col-sm-5">
       <input type="text" name="email" id="email" class="form-control" placeholder="Email"> <br/>
        </div>
      </div>
        <div class="form-group">
        <label class="col-sm-1 control-label">毕业年份</label>
        <div class="col-sm-5">
       <input type="text" name="graduateTime" id="graduateTime" class="form-control" placeholder="毕业年份"> <br/>
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
          
        <br/>
       <legend>选择排序方式</legend>
		<input type="radio" name="order" value="graduateTime" checked>毕业时间&nbsp
		<input type="radio" name="order" value="name" >姓名&nbsp
		<input type="radio" name="order" value="email" >Email&nbsp
		<input type="radio" name="order" value="destination">毕业去向&nbsp
		<input type="radio" name="order" value="phone">电话&nbsp 

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <br/>
          <button type="submit" class="btn btn-default">查询</button>
        </div>
      </div>
	</form> 
<br/>
</div>
</div>
<br/>
<br/>
	<!--查找结果-->
	<script type="text/javascript">
            var pageSize = 10;    //每页显示的记录条数
             var curPage=0;        //当前页
             var lastPage;        //最后页
             var direct=0;        //方向
            var len;            //总行数
            var page;            //总页数
            var begin;
            var end;

                
            $(document).ready(function display(){   
                len =$("#mytable tr").length - 1;    // 求这个表的总行数，剔除第一行介绍
                page=len % pageSize==0 ? len/pageSize : Math.floor(len/pageSize)+1;//根据记录条数，计算页数
                // alert("page==="+page);
                curPage=1;    // 设置当前为第一页
                displayPage(1);//显示第一页

                document.getElementById("btn0").innerHTML="当前 " + curPage + "/" + page + " 页    每页10条";    // 显示当前多少页
                document.getElementById("sjzl").innerHTML="数据总量 " + len + "";        // 显示数据量
                document.getElementById("pageSize").value = pageSize;

                

                $("#btn1").click(function firstPage(){    // 首页
                    curPage=1;
                    direct = 0;
                    displayPage();
                });
                $("#btn2").click(function frontPage(){    // 上一页
                    direct=-1;
                    displayPage();
                });
                $("#btn3").click(function nextPage(){    // 下一页
                    direct=1;
                    displayPage();
                });
                $("#btn4").click(function lastPage(){    // 尾页
                    curPage=page;
                    direct = 0;
                    displayPage();
                });
                $("#btn5").click(function changePage(){    // 转页
                    curPage=document.getElementById("changePage").value * 1;
                    if (!/^[1-9]\d*$/.test(curPage)) {
                        alert("请输入正整数");
                        return ;
                    }
                    if (curPage > page) {
                        alert("超出数据页面");
                        return ;
                    }
                    direct = 0;
                    displayPage();
                });

                
                $("#pageSizeSet").click(function setPageSize(){    // 设置每页显示多少条记录
                    pageSize = document.getElementById("pageSize").value;    //每页显示的记录条数
                    if (!/^[1-9]\d*$/.test(pageSize)) {
                        alert("请输入正整数");
                        return ;
                    }
                    len =$("#mytable tr").length - 1;
                    page=len % pageSize==0 ? len/pageSize : Math.floor(len/pageSize)+1;//根据记录条数，计算页数
                    curPage=1;        //当前页
                     direct=0;        //方向
                     firstPage();
                });
            });

            function displayPage(){
                if(curPage <=1 && direct==-1){
                    direct=0;
                    alert("已经是第一页了");
                    return;
                } else if (curPage >= page && direct==1) {
                    direct=0;
                    alert("已经是最后一页了");
                    return ;
                }

                lastPage = curPage;

                // 修复当len=1时，curPage计算得0的bug
                if (len > pageSize) {
                    curPage = ((curPage + direct + len) % len);
                } else {
                    curPage = 1;
                }

                
                document.getElementById("btn0").innerHTML="当前 " + curPage + "/" + page + " 页    每页10条";        // 显示当前多少页

                begin=(curPage-1)*pageSize + 1;// 起始记录号
                end = begin + 1*pageSize - 1;    // 末尾记录号

                
                if(end > len ) end=len;
                $("#mytable tr").hide();    // 首先，设置这行为隐藏
                $("#mytable tr").each(function(i){    // 然后，通过条件判断决定本行是否恢复显示
                    if((i>=begin && i<=end) || i==0 )//显示begin<=x<=end的记录
                        $(this).show();
                });
             }
    </script>
	<div class="container">
 	<legend>查找结果</legend>
<div class="bs-example" data-example-id="contextual-table" style="border: 1px solid #eee">
    <table class="table" id="mytable" align="center">
      <thead>
        <tr>
          <th>#</th>
          <th>姓名</th>
          <th>Email</th>
          <th>毕业时间</th>
          <th>毕业去向</th>
          <th>电话</th>
        </tr>
      </thead>
     <tbody>
    <?php 
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库
if (!$con){
	//die('Could not connect: '.mysql_error());
}

mysql_select_db("AlumnusFind",$con);

$sql="select *
from NESC
where name like '%" .$_POST['name']. "%'
and email like '%" .$_POST['email']. "%'
and graduateTime like '%" .$_POST['graduateTime']. "%'
and destination like '%" .$_POST['destination']. "%'
and phone like '%" .$_POST['phone']. "%'
order by ".$_POST['order'];
$result=mysql_query($sql);
$count=0;
while($row = mysql_fetch_array($result))
{$count++;
echo "<tr>"; 
echo "<th>"."$count"."</th>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['graduateTime'] . "</td>";
echo "<td>" . $row['destination'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);


?> 
     
      </tbody>
    </table>
  </div>

 <div class="container">
    <div class="page">  
      <a id="btn0"></a>
<a id="pageSize" type="text" size="1" maxlength="2" value="getDefaultValue()"/></a>
<a href="#" id="pageSizeSet"></a> 
<a id="sjzl"></a> 
<a  href="#" id="btn1">首页</a>
<a  href="#" id="btn2">上一页</a>
<a  href="#" id="btn3">下一页</a>
<a  href="#" id="btn4">尾页</a> 
<a>转到 </a>
<input id="changePage" type="text" size="1" maxlength="4"/>
<a>页 </a>
<a  href="#" id="btn5">跳转</a>
    </div>
</div>


<br/>
<br/>
	</div>
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