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
    <div class="panel-head"><strong><span class="icon-key"></span> 修改课程信息</strong></div>
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="body-content">
    <form method="post" class="form-x" action=<?php echo U('/Manager/modifynewInfo');?>>

        <input type="hidden" id="count" name="session1" value="<?php echo ($vo["session"]); ?>"/> 
        <input type="hidden" id="count" name="date1" value="<?php echo ($vo["date"]); ?>"/>
        <input type="hidden" id="count" name="classes1" value="<?php echo ($vo["classes"]); ?>"/>

      <div class="form-group">
        <div class="label">
          <label for="sitename">周次：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="weekth" value="<?php echo ($vo["weekth"]); ?>" name="weekth" size="50" placeholder="请输入周次" data-validate="required:请输入周次" />       

        </div>
        <div class="label">
          <label for="sitename">日期：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="date" name="date" value="<?php echo ($vo["date"]); ?>" size="50" placeholder="请输入日期" data-validate="required:请输入日期" />       

        </div>
        <div class="label">
          <label for="sitename">星期：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="week" name="week" value="<?php echo ($vo["week"]); ?>" size="50" placeholder="请输入星期" data-validate="required:请输入星期" />       

        </div>
        <div class="label">
          <label for="sitename">课程名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="CouName" name="CouName" value="<?php echo ($vo["CouName"]); ?>" size="50" placeholder="请输入课程名称" data-validate="required:请输入课程名称" />       

        </div>
        <div class="label">
          <label for="sitename">授课方式：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="courseway" name="courseway" value="<?php echo ($vo["courseway"]); ?>" size="50" placeholder="请输入授课方式" data-validate="required:请输入授课方式" />       

        </div>
        <div class="label">
          <label for="sitename">授课教师：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="TeaName" name="TeaName" value="<?php echo ($vo["TeaName"]); ?>" size="50" placeholder="请输入授课教师" data-validate="required:请输入授课教师" />       

        </div>
        <div class="label">
          <label for="sitename">学时：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="learnTime" name="learnTime" value="<?php echo ($vo["learnTime"]); ?>" size="50" placeholder="请输入学时" data-validate="required:请输入学时" />       

        </div>
        <div class="label">
          <label for="sitename">上课地点：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="place" name="place" value="<?php echo ($vo["place"]); ?>" size="50" placeholder="请输入上课地点" data-validate="required:请输入上课地点" />       

        </div>
        <div class="label">
          <label for="sitename">专业班级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="Profession" name="Profession" value="<?php echo ($vo["Profession"]); ?>" size="50" placeholder="请输入专业班级" data-validate="required:请输入专业班级" />       

        </div>
        <div class="label">
          <label for="sitename">上课内容：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="content" name="content" value="<?php echo ($vo["content"]); ?>" size="50" placeholder="请输入上课内容" data-validate="required:请输入上课内容" />       

        </div>
        <div class="label">
          <label for="sitename">年级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="Grade" name="Grade" value="<?php echo ($vo["Grade"]); ?>" size="50" placeholder="请输入年级" data-validate="required:请输入年级" />       

        </div>
        <div class="label">
          <label for="sitename">节次：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="session" name="session" value="<?php echo ($vo["session"]); ?>" size="50" placeholder="请输入节次" data-validate="required:请输入节次" />       

        </div>
        <div class="label">
          <label for="sitename">上课班级：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="classes" name="classes" value="<?php echo ($vo["classes"]); ?>" size="50" placeholder="请输入上课班级" data-validate="required:请输入上课班级" />       

        </div>
      </div>      
      
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
      
      <a href="<?php echo U("/Manager/modifynewInfo/date/$vo[date]/session/$vo[session]/classes/$vo[classes]");?>"> <button class="button bg-main icon-check-square-o" type="submit" value="确定" name="ok" onclick="" value="Display alert box"> 提交</button></a>   

          <!--  <a href="<?php echo U("/Manager/modifynewInfo/date1/$vo[date]/session1/$vo[session]/classes1/$vo[classes]");?>">提交</a>  --> 

        </div>

      </div>      
    </form>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</body></html>