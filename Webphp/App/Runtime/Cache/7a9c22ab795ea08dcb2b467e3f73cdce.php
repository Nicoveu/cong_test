<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>高校上课信息实时查询系统</title>  
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/pintuer.css">
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/test.css">
    <script src="/Webphp/App/Tpl/index/js/jquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/Webphp/App/Tpl/index/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />高校上课信息实时查询系统</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="javascript:history.back();" target="_blank"><span class="icon-home">
  </span> 返回</a> &nbsp;&nbsp;
  <!--<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a>--> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo U('/Index/index');?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-pencil-square-o"></span>功能菜单</h2>
  <ul style="display:block">
    <li><a href="/Webphp/index.php/Manager/TodayCourse.html" target="right"><span class="icon-caret-right"></span>今日课程</a></li>
    <li><a href="/Webphp/index.php/Manager/modify.html" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="/Webphp/index.php/Manager/timesegModifyInfo.html" target="right"><span class="icon-caret-right"></span>上课信息管理</a></li>  
    <li><a href="/Webphp/index.php/Student/timesetRoom.html" target="right"><span class="icon-caret-right"></span>空闲教室查询</a></li>  
    <li><a href="/Webphp/index.php/Manager/teacherInfo.html" target="right"><span class="icon-caret-right"></span>教师课程查询</a></li>
    <li><a href="/Webphp/index.php/Manager/studentInfo.html" target="right"><span class="icon-caret-right"></span>学生课程查询</a></li>   
    <li><a href="/Webphp/index.php/Manager/courseInfo.html" target="right"><span class="icon-caret-right"></span>课程查询</a></li>   
    <li><a href="/Webphp/index.php/Manager/classInfo.html" target="right"><span class="icon-caret-right"></span>班级课程查询</a></li> 
    <li><a href="/Webphp/index.php/Manager/departmentInfo.html" target="right"><span class="icon-caret-right"></span>学院课程查询</a></li>     
    <li><a href="/Webphp/index.php/Manager/timesegInfo.html" target="right"><span class="icon-caret-right"></span>时间段查询</a></li>      
    <!--<li><a href="book.html" target="right"><span class="icon-caret-right"></span>留言管理</a></li>     
    <li><a href="column.html" target="right"><span class="icon-caret-right"></span>栏目管理</a></li>-->
  </ul>   
  <h2><span class="icon-user"></span>用户信息</h2>
  <ul>
    <!--<li><a href="list.html" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>分类管理</a></li>  -->
         <li><a target="right"><span class="icon-caret-right"></span>工号: <?php echo (session('no')); ?></a></li>
         <li><a target="right"><span class="icon-caret-right"></span>姓名: <?php echo (session('name')); ?></a></li>
         <li><a target="right"><span class="icon-caret-right"></span>身份: 管理员</a></li>     
  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
      $(this).next().slideToggle(200);  
      $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
        $("#a_leader_txt").text($(this).text());
        $(".leftnav ul li a").removeClass("on");
        $(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo U('Manager/todayCourse');?>" target="right" class="icon-home"> 首页</a></li>
  <li><a  id="a_leader_txt">我的课表</a></li>
  <!--<li><b>当前语言：</b><span style="color:red;">中文</php></span>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>-->
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="/Webphp/index.php/Manager/todayCourse.html" name="right" width="100%" height="100%"></iframe>
 
</div>
</body>
<script language="javascript"> 
function autoRefresh() 
{ 
window.location.reload(); 
} 
setTimeout('autoRefresh',1000);//指定一秒刷新一次 
</script>
</html>