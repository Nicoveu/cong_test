<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/Webphp/App/Tpl/index/css/pintuer.css">
<link rel="stylesheet" href="/Webphp/App/Tpl/index/css/admin.css">
<script src="/Webphp/App/Tpl/index/js/jquery.js"></script>
<script src="/Webphp/App/Tpl/index/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-key"></span> 添加课程信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action=<?php echo U('/Manager/modifyInfo');?>>
        
      <div class="form-group">
        <div class="label">
          <label for="sitename">周次：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="weekth" name="weekth" size="50" placeholder="请输入周次" data-validate="required:请输入周次" />       

        </div>
        <div class="label">
          <label for="sitename">日期：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="date" name="date" size="50" placeholder="请输入日期" data-validate="required:请输入日期" />       

        </div>
        <div class="label">
          <label for="sitename">星期：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="week" name="week" size="50" placeholder="请输入星期" data-validate="required:请输入星期" />       

        </div>
        <div class="label">
          <label for="sitename">课程名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="CouName" name="CouName" size="50" placeholder="请输入课程名称" data-validate="required:请输入课程名称" />       

        </div>
        <div class="label">
          <label for="sitename">授课方式：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="courseway" name="courseway" size="50" placeholder="请输入授课方式" data-validate="required:请输入授课方式" />       

        </div>
        <div class="label">
          <label for="sitename">授课教师：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="TeaName" name="TeaName" size="50" placeholder="请输入授课教师" data-validate="required:请输入授课教师" />       

        </div>
        <div class="label">
          <label for="sitename">学时：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="learnTime" name="learnTime" size="50" placeholder="请输入学时" data-validate="required:请输入学时" />       

        </div>
        <div class="label">
          <label for="sitename">上课地点：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="place" name="place" size="50" placeholder="请输入上课地点" data-validate="required:请输入上课地点" />       

        </div>
        <div class="label">
          <label for="sitename">专业班级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="Profession" name="Profession" size="50" placeholder="请输入专业班级" data-validate="required:请输入专业班级" />       

        </div>
        <div class="label">
          <label for="sitename">上课内容：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="content" name="content" size="50" placeholder="请输入上课内容" data-validate="required:请输入上课内容" />       

        </div>
        <div class="label">
          <label for="sitename">年级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="Grade" name="Grade" size="50" placeholder="请输入年级" data-validate="required:请输入年级" />       

        </div>
        <div class="label">
          <label for="sitename">节次：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="session" name="session" size="50" placeholder="请输入节次" data-validate="required:请输入节次" />       

        </div>
        <div class="label">
          <label for="sitename">上课班级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="classes" name="classes" size="50" placeholder="请输入上课班级" data-validate="required:请输入上课班级" />       

        </div>
      </div>      
      
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
      
          <button class="button bg-main icon-check-square-o" type="submit" value="确定" name="ok" onclick="" value="Display alert box"> 提交</button>   

        </div>
      </div>      
    </form>
  </div>

 



</div>
</body></html>