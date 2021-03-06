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
                <a class="button button-little bg-yellow" id="logout" href="<?php echo ADMIN; ?>user/logout">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li class="active"><a href="<?php echo ADMIN; ?>Index/index" class="icon-home"> 开始</a>
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
                <li><a href="<?php echo ADMIN; ?>Index/content" class="icon-file-text">求购</a>
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
                <li><a href="<?php echo ADMIN; ?>" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	
                <div class="panel-foot bg-back border-back">您好，<?php echo cookie('admin');?>，这是您第<?php echo cookie('times');?>次登录，上次登录为<?php echo cookie('lastlogin');?>。</div>
            </div>
            <br />
        	<div class="panel">
            	<div class="panel-head"><strong>站点统计</strong></div>
                <ul class="list-group">
                	<li><span class="float-right badge bg-red"><?php echo $count['user']; ?></span><span class="icon-user"></span> 会员</li>
                    <li><span class="float-right badge bg-main"><?php echo $count['goods']; ?></span><span class="icon-shopping-cart"></span> 商品</li>
                    <li><span class="float-right badge bg-main"><?php echo $count['want']; ?></span><span class="icon-file-text"></span> 求购</li>
                </ul>
            </div>
            <br />
        </div>
        <div class="xm9">
            <div class="panel">
            	<div class="panel-head"><strong>系统信息</strong></div>
                <table class="table">
                	<tr>
                        <th colspan="2">服务器信息</th>
                        <th colspan="2">用户系统信息</th>
                    </tr>
                    <tr>
                        <td width="110" align="right">操作系统：</td><td><?php echo PHP_OS;?></td>
                        <td width="90" align="right">用户系统：</td><td><?php echo $server['os']; ?></td>
                    </tr>
                    <tr>
                        <td align="right">Web服务器：</td>
                        <td>Apache</td>
                        <td align="right">游览器：</td>
                        <td><?php echo $server['browser']; ?></td>
                    </tr>
                    <tr>
                        <td align="right">程序语言：</td>
                        <td>PHP <?php echo PHP_VERSION; ?></td>
                        <td align="right">IP地址：</td>
                        <td><?php echo $server['ip']; ?></td>
                    </tr>
                    <tr>
                        <td align="right">数据库：</td>
                        <td>MySQL</td>
                        <td align="right">占用端口：</td>
                        <td><?php echo $_SERVER['REMOTE_PORT'];?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
    <br />
</div>


</html>