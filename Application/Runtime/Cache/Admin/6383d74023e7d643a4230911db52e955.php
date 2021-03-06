<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS; ?>pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>admin.css">
    <script src="<?php echo JS; ?>jquery.js"></script>
    <script src="<?php echo JS; ?>pintuer.js"></script>
    <script src="<?php echo JS; ?>respond.js"></script>
</head>
<body>
<div class="lefter">
    <div class="logo"><img src="<?php echo IMG; ?>llgo.png" alt="后台管理系统" /></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
                <a class="button button-little bg-main" href="<?php echo SITE_URL; ?>" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" id="logout" href="<?php echo ADMIN; ?>User/logout">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="<?php echo ADMIN; ?>" class="icon-home"> 开始</a>
                    <ul>
                        <li><a href="<?php echo ADMIN; ?>Index/system">系统设置</a></li>
                        <li><a href="<?php echo ADMIN; ?>Index/content">求购管理</a></li>
                        <li><a href="<?php echo ADMIN; ?>Index/goods">商品管理</a></li>
                        <li><a href="<?php echo ADMIN; ?>Index/member">会员管理</a></li>
                        <li class="active"><a href="#">文件管理</a></li>
                        <li><a href="#">栏目管理</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo ADMIN; ?>Index/system" class="icon-cog"> 系统</a>
                    <ul><li><a href="#">全局设置</a></li>
                    <li class="active"><a href="#">系统设置</a>
                    </li><li><a href="#">会员设置</a></li>
                    <li><a href="#">积分设置</a></li></ul>
                </li>
                <li><a href="<?php echo ADMIN; ?>Index/content" class="icon-file-text">求购</a>
                    <ul><li><a href="#">添加内容</a></li>
                    <li class="active"><a href="#">内容管理</a></li>
                    <li><a href="#">分类设置</a></li>
                    <li><a href="#">链接管理</a></li></ul>
                </li>
                <li class="active"><a href="<?php echo ADMIN; ?>Index/goods" class="icon-shopping-cart">商品</a>
                    <ul>
                    <li><a href="#">添加内容</a></li>
                    <li class="active"><a href="#">商品管理</a></li>
                    <li><a href="#">分类设置</a></li>
                    <li><a href="#">链接管理</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo ADMIN; ?>Index/member" class="icon-user"> 会员</a></li>
                <li><a href="#" class="icon-file"> 文件</a></li>
                <li><a href="#" class="icon-th-list"> 栏目</a></li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo cookie('admin');?>，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="<?php echo ADMIN; ?>" class="icon-home"> 开始</a></li>
                <li><a href="<?php echo ADMIN; ?>Index/goods">商品</a></li>
                <li>商品管理</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
    <form method="post" id="dels" action="<?php echo ADMIN; ?>goods/del_more">
    <div class="panel admin-panel">
        <div class="panel-head"><strong>求购列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
            <input type="button" class="button button-small border-green" value="添加求购" />
            <input type="button" id="del" class="button button-small border-yellow" value="批量删除"  />
        </div>
            </form>
        <script type="text/javascript">
        $(function(){

            $("#del").click(function(){
                if(confirm('确认删除?')){
                    values = new Array();
                $(":checked").each(function(){
                    values += $(this).val()+",";
                })
                $("#dels").append("<input type='hidden' name='dels' value="+values+">");
                if(values.length != 0){
                     $("#dels").submit();

                }

                }else
                {return false;}
            })
            $(".id").click(function(){
                if($(this).attr("check") == "checked"){
                    $(this).removeAttr("check")
                }else{
                     $(this).attr("check","checked");
                }
            })
        })
        </script>
        <table class="table table-hover">
            <tr>
                <th width="45">选择</th>
                <th width="120">分类</th>
                <th width="150">图片</th>
                <th width="*">名称</th>
                <th width="100">时间</th>
                <th width="100">操作</th>
            </tr>
            <?php foreach ($goods as $key => $value) { ?>
            <tr class="center">
                <td style="padding-top:3%;"><input type="checkbox" name="id" class="id" value="<?php echo $value[0]; ?>"  /></td>
                <td style="padding-top:3%;"><?php echo $value['2']; ?></td>
                <td><img src="<?php echo explode(' ', $value['12'])[0];?>" class="images"></td>
                <td style="padding-top:3%;"><?php echo $value['1']; ?></td>
                <td style="padding-top:3%;"><?php echo explode(" ", $value['16'])[0]; ?></td>
                <td style="padding-top:3%;"><a class="button border-blue button-little" href="<?php echo HOME; ?>goods/updata?id=<?php echo $value[0]; ?>" >修改</a> <a class="button border-yellow button-little" href="<?php echo ADMIN;?>goods/del_goods?del=<?php echo $value[0]; ?>" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td>
            </tr>
              <?php } ?>
        </table>

        <div class="panel-foot text-center">
            <?php echo $page; ?>
        </div>
    </div>

    <br />
</div>
</body>
</html>