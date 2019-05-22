<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/pintuer.css">
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/admin.css">
    <script src="/Webphp/App/Tpl/index/js/jquery.js"></script>
    <script src="/Webphp/App/Tpl/index/js/pintuer.js"></script>  
</head>
<body style="overflow-x: hidden; word-wrap:break-word;">

<div class="panel admin-panel">
	<!--<div id="topnav"><font size="5">空闲教室</font>
			<hr color="#3333FF">
        </div>-->

    <div>  
      <div align="left" font-size: 20px>
	        <?php if(is_array($list['flag'])): $i = 0; $__LIST__ = $list['flag'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo != 1): echo ($vo); ?>&nbsp;&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>

   </div>
</div>
</div>
</body></html>