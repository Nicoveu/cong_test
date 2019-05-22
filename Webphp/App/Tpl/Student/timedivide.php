<?php
  date_default_timezone_set("PRC");
  $nowtime = time();
  $rq = date("Y-m-d",$nowtime);
?>
<!doctype html>
<html>
<script language="JavaScript" src="/Webphp/index.php/index/js/mydate.js"></script>
<head>
<meta charset="utf-8">
<title>学生首页</title>
<style type="text/css">
<!--

body{
	background-color:#FFF;}
#all{
	background-color:#ECF5FF;
	width:1200px;
	height:580px;
	margin:0px 20px 0px;}
#head{
	background-color: #66B3FF;
	text-align:center;
	height:50px;
	font-size:36px;
	padding:8px;
}
.style1{
	font-family: "宋体";
	text-align:center;
	font-size: x-large;
	background-color:#FFFCEC;
	margin-top:0px;
	padding-top:5px;
	height:35px;
	color:#000}
.style2{
	text-align:right;
	margin-top:10px;
	margin-right:10px;
	color:#FFF;}
#top{
	margin-top:10px;
	margin-right:10px;
	top: 10px;
	right: 10px;
	color: #F0F;
	float: right;
	}
#left{
	background-color:#ECF5FF;
	margin-left:10px;
	margin-top:40px;
	width:350px;
	height:420px;}
.box{
	background-color:#ECFFFF;
	text-align:left;
	width:300px;
	margin-top:20px;
	margin-left:20px;
	padding-top:10px;
	}
#right{
	background-color:#FFF;
	text-align:center;
	height: 250px;
	width: 700px;
	margin-top:-20px;
	margin-right:0px;
	color:#90F;
	float:right;
	position:absolute;
	top:250px;
	right:140px;
	}
#topnav{
	text-align:center;
	background-color:#FFF;
	font-size:24px;
	}
#man{
	font-size: 24px;
	font-style: large;
	margin-left:10px;
	height:30px;
	padding:10px;

}
#skin{
	font-size:24px;
	color:#9F0;
}
#hr{
	color:#FF3;
}
-->
</style>
</head>

<body>
<div id="all" >
	<div id="head">
		<font color="#8600FF">学生首页</font>
	</div>
    <div class="style1">学生课程查询系统</div>
        
		<div id="top"><a style="text-decoration:none" href="{:U('Index/index')}">学校主页</a>
			 <a style="text-decoration:none" href="#">教务处</a>
			 <a style="text-decoration:none" href="#">学生处</a>
			 <a style="text-decoration:none" href="#">课程信息</a>
		</div>
   <div id="left">
<div class="box">
        	<h3>学生页面</h3>
               <ul>用户信息
			     <li>学号: {$Think.session.StuNo}</li>
				 <li>姓名: {$Think.session.StuName}</li>
				 <li>角色: 学生</li>
			   </ul>
        </div>


<div class="box">
        	<h3>友情链接</h3>
            <ul>
            	<li><a style="text-decoration:none" href="http://www.baidu.com/">使用方法</a></li>
                <li><a style="text-decoration:none" href="http://www.baidu.com/">常见问题</a></li>
                <li><a style="text-decoration:none" href="http://www.baidu.com/">联系我们</a></li>
            </ul>
</div>
		  <div class="box">
        	<h3>校园链接</h3>
            <ul>
            	<li><a style="text-decoration:none" href="http://www.hactcm.edu.cn/">河南中医药大学</a></li>
            </ul>
        </div>
    </div>
    <div id="right">
		<div id="topnav">时间段课程查询

			<hr color="#3333FF">
开始时间:<input type="text" name="starttime" onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>">
结束时间:<input type="text" name="endtime" onfocus="MyCalendar.SetDate(this)" value="<?php echo $rq;?>">
</div>
</div>

</body>
</html>
