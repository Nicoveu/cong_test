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
   <h3 align="center"><font size="4">课程查询&emsp;&emsp;</font></h3>
    <hr color="#FFCC66">
  <form action=<?php echo U('/Manager/queryCourse');?> method="post" align="center">
  <p>
   <font size="4">请输入课程名称:</font>
  <input type="text" name="password" size="18"/>
  <script type="text/javascript"> 
/** 
 * 判断年份是否为润年 
 *  
 * @param {Number} year 
 */ 
function isLeapYear(year) { 
    return (year % 400 == 0) || (year % 4 == 0 && year % 100 != 0); 
} 
/** 
 * 获取某一年份的某一月份的天数 
 *  
 * @param {Number} year 
 * @param {Number} month 
 */ 
function getMonthDays(year, month) { 
    return [31, null, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month] || (isLeapYear(year) ? 29 : 28); 
} 
function clickHandler() { 
    var y = $('year').value, 
        m = $('month').value, 
        d = $('day').value; 
 
    var now = new Date(y, m - 1, d), 
        year = now.getFullYear(), 
        month = now.getMonth(), 
        days = now.getDate(); 
 
    //那一天是那一年中的第多少天 
    for (var i = 0; i < month; i++) { 
        days += getMonthDays(year, i); 
    } 
    //那一年第一天是星期几 
    var yearFirstDay = new Date(year, 0, 1).getDay() || 7; 
    var week = null; 
    if (yearFirstDay == 1) { 
        week = Math.ceil(days/yearFirstDay); 
    } else { 
        days -= (7 - yearFirstDay + 1); 
        week = Math.ceil(days/7) + 1; 
        days = Math.max(days, 1); 
    } 
   // alert(y + "年" + m + "月" + d + "日是" + year + "年的\n\n第" + days + "天  第" + week + "周"); 
 
} 
</script> 
<div align="center">
<!--<font size="5">选择日期 </font></br>-->
<form action=<?php echo U('/Manager/queryCourse');?> method="post">
   <!-- <select name="test">
        <option value="test">test</option>
    </select>   -->
    </br><font size="4">起始日期：</font>
  <select name="year" id="year"></select>

  <label for="year"><font size="4">年</font></label>
  <select name="month" id="month"></select>

  <label for="month"><font size="4">月</font></label> 
  <select name="day" id="day"></select>

  <label for="day"><font size="4">日</font></label> 

    </br><font size="4">结束日期：</font>
  <select name="yearsec" id="year1"></select>

  <label for="year"><font size="4">年</font></label> 
  <select name="monthsec" id="month1"></select>

  <label for="month"><font size="4">月</font></label> 
  <select name="daysec" id="day1"></select>

  <label for="day"><font size="4">日</font></label> 

    </br>
    </br>
  <!--<button style='margin-left:30px;'>确定</button> -->
     <button class="button bg-main icon-check-square-o" type="submit" value="确定" name="ok" onclick="display_alert()"
value="Display alert box">确定</button>   
 </form>
 </div>
<script type="text/javascript"> 
function $(id) { 
    return typeof id === 'string' ? document.getElementById(id) : id; 
} 
function addOptions(id, start, end) { 
    var opt = null, 
        frag = document.createDocumentFragment(); 
         
    for (var i = start; i <= end ; i++) { 
        opt = document.createElement("option"); 
        opt.value = i; 
        opt.innerHTML = i; 
        frag.appendChild(opt); 
    } 
     
    $(id).appendChild(frag); 
} 
function setDays(y, m) { 
    addOptions('day', 1, getMonthDays(y, m - 1)); 
} 

function setDays1(y, m) { 
    addOptions('day1', 1, getMonthDays(y, m - 1)); 
} 
function changeDays() { 
    var val = $('day').value; 
     
    $('day').options.length = 0; 
 
    var y = $('year').value, 
        m = $('month').value; 
 
    setDays(y, m); 
 
    if (val) { 
        var maxDay = getMonthDays(y, m - 1); 
 
        $('day').value = (val > maxDay) ? maxDay : val; 
    } 
 
} 

function changeDays1() { 
    var val = $('day1').value; 
     
    $('day1').options.length = 0; 
 
    var y = $('year1').value, 
        m = $('month1').value; 
 
    setDays1(y, m); 
 
    if (val) { 
        var maxDay = getMonthDays(y, m - 1); 
 
        $('day1').value = (val > maxDay) ? maxDay : val; 
    } 
 
} 
addOptions('year', 2012, 2017); 
addOptions('month', 1, 12); 
changeDays(); 


 
//默认设置为本地时间 
!(function() { 
    var now = new Date(); 
    $('year').value = now.getFullYear(); 
    $('month').value = now.getMonth() + 1; 
    $('day').value = now.getDate(); 
})(); 
$('year').onchange = changeDays; 
$('month').onchange = changeDays; 
//document.getElementsByTagName("button")[0].onclick = clickHandler; 

addOptions('year1', 2012, 2017); 
addOptions('month1', 1, 12); 
changeDays1(); 
!(function() { 
    var now = new Date(); 
    $('year1').value = now.getFullYear(); 
    $('month1').value = now.getMonth() + 1; 
    $('day1').value = now.getDate(); 
})(); 
$('year1').onchange = changeDays1; 
$('month1').onchange = changeDays1; 

//document.getElementsByTagName("button")[0].onclick = clickHandler; 
</script> 
 


   </form>
</div>
</body></html>