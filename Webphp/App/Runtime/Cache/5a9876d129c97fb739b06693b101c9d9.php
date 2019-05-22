<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
<script type="text/javascript">
function display_alert()
  {
  alert("密码修改成功，请记住你的新密码!!! ")
  }
</script>
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
  <div class="panel-head"><strong><span class="icon-key"></span> 修改用户密码</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action=<?php echo U('/Teacher/modifyDo');?>>
      <div class="form-group">
        <div class="label">
          <label for="sitename">教师工号：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">

          <ul>
          <li><a target="right"><?php echo (session('TeatNo')); ?></a></li>
           <ul>
          </label>
        </div>
      </div> 
       <form action=<?php echo U('/Teacher/modifyDo');?> method="post">    
      <div class="form-group">
        <div class="label">
          <label for="sitename">原始密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="mpass" name="mpass" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="password" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">确认新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="renewpass" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#password:两次输入的密码不一致" />          
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit" value="确定" name="ok" onclick=""
value="Display alert box"> 提交</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
</body></html>