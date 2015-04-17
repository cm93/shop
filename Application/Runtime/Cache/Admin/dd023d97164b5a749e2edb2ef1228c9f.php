<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理-管理员登录</title>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo CSS; ?>pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>admin.css">
    <script src="<?php echo JS; ?>jquery.js"></script>
    <script src="<?php echo JS; ?>pintuer.js"></script>
    <script src="<?php echo JS; ?>respond.js"></script>
    <script src="<?php echo JS_URL; ?>jquery-1.7.2.min.js"></script>
    
</head>
<body>
<script type="text/javascript">
    $(function(){
        $("#sub").click(function(e){
            e.preventDefault();
            $.ajax({    
                    url:'<?php echo ADMIN;?>User/login',
                    data:$('#admin').serialize(),
                    type:'post',    
                    cache:false,    
                    dataType:'json',    
                    success:function(data) { 
                        if(data.status ==1){
                            location.href='<?php echo ADMIN;?>';
                        }else{
                            $(".input-help").remove();
                            $("#error").append('<div class="input-help"><ul><li>密码错误</li></ul></div>');
                            $('#err').addClass("check-error");
                        }
                     },    
                });
});
        $(".container").ready(function(e){
            $(".container").animate({top:'20%',opacity:'show'}, 1000);
        })
    })
</script>
<iframe src="<?php echo ADMIN;?>User/back" style="position:absolute;width:100%;height:100%;" id="back"></iframe>
<div class="container" style="position:absolute;top:0%;left:30%;display:none">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <form action="<?php echo ADMIN;?>/User/login" method="post" id="admin">
            <div class="panel">
                <div class="panel-head"><strong>登录后台管理系统</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="admin" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求" />
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group" id="err">
                        <div class="field field-icon-right" id="error">
                            <input type="password" class="input" name="password" placeholder="登录密码" data-validate="required:请填写密码,length#>=5:密码长度不符合要求" />
                            <span class="icon icon-key" ></span>
                        </div>
                    </div>
                </div>
                <div class="panel-foot text-center"><button class="button button-block bg-main text-big" id="sub">立即登录后台</button></div>
            </div>
            </form>
            
        </div>
    </div>
</div>

</body>

</html>