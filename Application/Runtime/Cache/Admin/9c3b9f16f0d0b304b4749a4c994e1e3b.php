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
                    <ul><li><a href="<?php echo ADMIN; ?>Index/system">系统设置</a></li>
                    <li><a href="<?php echo ADMIN; ?>Index/content">求购管理</a></li>
                    <li><a href="<?php echo ADMIN; ?>Index/goods">商品管理</a></li>
                    <li><a href="<?php echo ADMIN; ?>Index/member">会员管理</a></li>
                    <li><a href="#">文件管理</a></li>
                    <li><a href="#">栏目管理</a></li></ul>
                </li>
                <li><a href="<?php echo ADMIN; ?>Index/system" class="icon-cog"> 系统</a>
                    <ul><li><a href="#">全局设置</a></li>
                    <li class="active"><a href="#">系统设置</a>
                    </li><li><a href="#">会员设置</a></li>
                    <li><a href="#">积分设置</a></li></ul>
                </li>
                <li class="active"><a href="<?php echo ADMIN; ?>Index/content" class="icon-file-text">求购</a>
                    <ul><li><a href="#">添加内容</a></li>
                    <li class="active"><a href="#">内容管理</a></li>
                    <li><a href="#">分类设置</a></li>
                    <li><a href="#">链接管理</a></li></ul>
                </li>
                <li><a href="<?php echo ADMIN; ?>Index/goods" class="icon-shopping-cart">商品</a></li>
                <li><a href="<?php echo ADMIN; ?>Index/member" class="icon-user"> 会员</a></li>
                <li><a href="#" class="icon-file"> 文件</a></li>
                <li><a href="#" class="icon-th-list"> 栏目</a></li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo cookie('admin');?>，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="<?php echo ADMIN; ?>Index/index" class="icon-home"> 开始</a></li>
                <li><a href="<?php echo ADMIN; ?>Index/content">求购</a></li>
                <li>求购管理</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
    <div class="panel admin-panel">
        <div class="panel-head"><strong>求购列表</strong></div>
        <div class="padding border-bottom">
            <div class="tab-body">
        <br>
        <div class="tab-panel active" id="tab-set">
            <form method="post" class="form-x" action="<?php echo ADMIN; ?>goods/content_update">
                <div class="form-group">
                    <div class="label"><label for="title">标题</label></div>
                    <div class="field">
                        <input type="text" class="input" id="title" name="title" value="<?php echo $data[1]; ?>" size="50" placeholder="标题" data-validate="required:请填写标题">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="price1">求购价格</label></div>
                    <div class="field">
                        <input type="text" style="width:10%;display:inline;" class="input" id="price1" name="price1" size="50" placeholder="价格" data-validate="required:请填写价格" onkeyup="value=value.replace(/[^\d]/g,'')" value="<?php echo $data[3]; ?>">
                        <p></p>
                        <input type="text" style="width:10%;float:left;" class="input" id="price2" name="price2" size="50" placeholder="价格" data-validate="required:价格"  onkeyup="value=value.replace(/[^\d]/g,'') " value="<?php echo $data[4]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="phonenumber">手机号码</label></div>
                    <div class="field">
                        <input type="text" class="input" id="phonenumber" name="phonenumber" size="40" placeholder="请填写手机号码" data-validate="required:请填写手机号码" onkeyup="value=value.replace(/[^\d]/g,'')" value="<?php echo $data[5]; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="label"><label for="truename">真实姓名</label></div>
                    <div class="field">
                        <input type="text" class="input" id="truename" name="truename" size="40" placeholder="请填写真实姓名" data-validate="required:请填写真实姓名"  value="<?php echo $data[6]; ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="label"><label for="desc">描述</label></div>
                    <div class="field">
                        <textarea class="input" rows="5" cols="50" placeholder="请填写描述信息" name="describe" data-validate="required:请填写描述信息" value="<?php echo $data[8];?>"></textarea>
                    </div>
                </div>
                        <input  type="hidden" name="id" value="<?php echo $data[0]; ?>"/>
                <div class="form-button"><button class="button bg-main" type="submit">提交</button></div>
            </form>
        </div>
      </div>
        </div>
    </div>
    </form>
    <br />
</div>
</body>
</html>