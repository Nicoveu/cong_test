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
    <center>

  <script> 
  function show(){ 
  var date = new Date(); //日期对象 
  var now = ""; 
  now = date.getFullYear()+"年"; //读英文就行了 
  now = now + (date.getMonth()+1)+"月"; //取月的时候取的是当前月-1如果想取当前月+1就可以了 
  now = now + date.getDate()+"日"; 
  now = now + date.getHours()+"时"; 
  now = now + date.getMinutes()+"分"; 
  now = now + date.getSeconds()+"秒"; 
  document.getElementById("nowDiv").innerHTML = now; //div的html是now这个字符串 
  setTimeout("show()",1000); //设置过1000毫秒就是1秒，调用show方法 
  } 
</script> 
<body onload="show()"> <!-- 网页加载时调用一次 以后就自动调用了--> 
<div id="nowDiv"></div> 
</body>
  <script language="javascript">           <!--  显示系统时间 -->
           setInterval("linkweb.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);                             
             </script>

<script language="JavaScript" type="text/javascript"> 
var today=new Date(); 
//var strDate=(" "+today.getYear()+"年"+(today.getMonth()+1)+"月"+today.getDate()+"日"); 
var strDate="";
var n_day=today.getDay(); 
switch(n_day){ 
case 0: 
{strDate=strDate+" 星期日 "}break; 
case 1: 
{strDate=strDate+" 星期一 "}break; 
case 2: 
{strDate=strDate+" 星期二 "}break; 
case 3: 
{strDate=strDate+" 星期三 "}break; 
case 4: 
{strDate=strDate+" 星期四 "}break; 
case 5: 
{strDate=strDate+" 星期五 "}break; 
case 6: 
{strDate=strDate+" 星期六 "}break; 
case 7: 
{strDate=strDate+" 星期日 "}break; 
} 
document.write(strDate); 
</script> 
  <div align="center"><font size="4">今天是本学期第<?php echo ($weekth); ?>周</font></div>
  <div align="center"><font size="5"><?php echo ($printInfo); ?></font></div>

  <table width="50%" border="1" >
  <tr>
    <td><div align="center">课程编号</div></td>
    <td><div align="center">课程名称</div></td>
    <td><div align="center">上课老师</div></td>
    <td><div align="center">学分</div></td>
    <td><div align="center">上课时间</div></td>
    <td><div align="center">单双周</div></td>
    <!--
    <td><div align="center">操作</div></td>
    -->
    <td><div align="center">上课地点</div></td>
    <td><div align="center">班级</div></td>
  </tr>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td align="center"><?php echo ($vo["CouNo"]); ?></td>
    <td align="center"><?php echo ($vo["CouName"]); ?></td>
    <td align="center"><?php echo ($vo["Teacher"]); ?></td>
    <td align="center"><?php echo ($vo["Credit"]); ?></td>
    <td align="center"><?php echo ($vo["SchoolTime"]); ?></td>
     <td align="center"><?php echo ($vo["flag"]); ?></td>
     <td align="center"><?php echo ($vo["place"]); ?></td>
    <td align="center"><?php echo ($vo["class"]); ?></td>
   
   <!--
    <td><a href="<?php echo U("/Course/edit/CouNo/$vo[CouNo]");?>">编辑</a> <a href="<?php echo U("/Course/delete/CouNo/$vo[CouNo]");?>" onclick="return confirm('确定删除?')">删除</a></td>
    -->
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  </center>
    </div>
</div>
</body>
</html>