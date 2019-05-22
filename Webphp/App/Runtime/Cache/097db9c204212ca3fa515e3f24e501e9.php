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
   <!-- <form method="post" class="form-x" action=<?php echo U('/Manager/modifyInfo');?>>-->
        
      <div class="form-group">
       <font size="2">

  <table id="table1" align="center" width="95%" border="1" > </br>
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


  </volist>
  </volist>
 
  </table>
  </br>
   </font>
      </div>      
      
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field" align="center">
      
          <button class="button bg-main icon-check-square-o" type="submit" value="确定" name="ok" onclick="" value="Display alert box">提交</button> 
          <button class="button bg-main icon-check-square-o" type="submit" value="确定" name="ok" onclick="add();" value="Display alert box">添加新一栏</button>   
          <button class="button bg-main icon-check-square-o" type="submit" value="确定" name="ok" onclick="print();" value="Display alert box">打印测试</button> 

        </div>
      </div>      
   <!-- </form>-->
  </div>

 



</div>
</body>
<script type="text/javascript">
   function add(){
      //alert("Nicoveu");
      var tab=document.getElementById("table1");
      var tr=tab.innerHTML;
      tr+= "<tr>";
      for(var i=0;i<11;i++){
        tr+="<td><div align='center'>";
        tr+="<div align='center'><input type='text' id=i size='9' style='text-align:center;font-size: 15px;width:90px;'/></div>";
        tr+="</div></td>";
      }
      tr+="</tr>";

      table1.innerHTML = tr; 
      //alert(tr);
   }

   function print(){
     var tab=document.getElementById("table1");
     alert(tab.innerHTML);
   }
</script>
</html>