<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>  
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/pintuer.css">
    <link rel="stylesheet" href="/Webphp/App/Tpl/index/css/test.css">

    <script src="/Webphp/App/Tpl/index/js/jquery.js"></script>
    <script type="text/javascript">
           verifyURL = '<?php echo U("Index/verify",'','');?>';
    </script>
    <script src="/Webphp/App/Tpl/index/js/pintuer.js"></script>  
   <!-- <script src="/Webphp/App/Tpl/index/js/login.js"></script>-->

</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:100px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action=<?php echo U('/Index/checkLogin');?> method="post">
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>高校上课信息实时查询系统登录</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="username" placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <select type="text" class="input input-big" name="role">

                             <option value="student">学生
                             <option value="teacher">老师
                             <option value="manager">管理员
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group">
                       <div class="field">
                        <input type="code" class="len250" name="code" placeholder="验证码"/> <img src="<?php echo U('Index/verify');?>" id="code"><a href="javascript:void(change_code(this));">看不大清</a>
                        </div>
                    </div>
                </div>
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>

</body>
</html>