<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>高校上课信息实时查询系统</title>  
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/pintuer.css">
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/admin.css">
    <script src="/Webphp/App/Tpl/index/js/jquery.js"></script>   
</head>
<body>

<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 课表信息</strong></div>
  
  <font size="2">

  <table align="center" width="95%" border="1" > </br>
    <tr>
    <td><div align="center">周次</div></td>
    <td><div align="center">日期</div></td>
    <td><div align="center">星期</div></td>
    <td><div align="center">课程名称</div></td>
    <td><div align="center">授课方式</div></td>
    <td><div align="center">主讲教师</div></td>
    <td><div align="center">学时</div></td>
    <td><div align="center">节次</div></td>
    <td><div align="center">地点</div></td>
    <td><div align="center">专业班级</div></td>
    <td><div align="center">讲授内容</div></td>
  </tr>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td align="center"><?php echo ($vo["weekth"]); ?></td>
    <td align="center"><?php echo ($vo["date"]); ?></td>
    <td align="center"><?php echo ($vo["week"]); ?></td>
    <td align="center"><?php echo ($vo["CouName"]); ?></td>
    <td align="center"><?php echo ($vo["courseway"]); ?></td>
    <td align="center"><?php echo ($vo["TeaName"]); ?></td>
    <td align="center"><?php echo ($vo["learnTime"]); ?></td>
    <td align="center"><?php echo ($vo["session"]); ?></td>
     <td align="center"><?php echo ($vo["place"]); ?></td>
    <td align="center"><?php echo ($vo["Profession"]); ?></td>
    <td align="center"><?php echo ($vo["content"]); ?></td>
   <!--
    <td><a href="<?php echo U("/Course/edit/CouNo/$vo[CouNo]");?>">编辑</a> <a href="<?php echo U("/Course/delete/CouNo/$vo[CouNo]");?>" onclick="return confirm('确定删除?')">删除</a></td>
    -->
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </volist>
 
  </table>
  </br>
   </font>
  </div>
</div>
</body>
</html>