<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>admin.css">
    <script src="<?php echo JS; ?>jquery.js"></script>
    <script src="<?php echo JS; ?>pintuer.js"></script>
    <script src="<?php echo JS; ?>respond.js"></script>

    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="lefter">
    <div class="logo"><img src="<?php echo IMG; ?>llgo.png" alt="后台管理系统" /></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
                <a class="button button-little bg-main" href="/shop/" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="<?php echo Admin; ?>user/login">注销登录</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="<?php echo Admin; ?>index/index" class="icon-home"> 开始</a>
                    <ul><li><a href="<?php echo Admin; ?>index/system">系统设置</a></li>
                    <li><a href="<?php echo Admin; ?>index/content">求购管理</a></li>
                    <li><a href="<?php echo Admin; ?>index/goods">商品管理</a></li>
                    <li><a href="<?php echo Admin; ?>index/member">会员管理</a></li>
                    <li><a href="#">文件管理</a></li>
                    <li><a href="#">栏目管理</a></li></ul>
                </li>
                <li><a href="<?php echo Admin; ?>index/system" class="icon-cog"> 系统</a>
                    <ul><li><a href="#">全局设置</a></li>
                    <li class="active"><a href="#">系统设置</a>
                    </li><li><a href="#">会员设置</a></li>
                    <li><a href="#">积分设置</a></li></ul>
                </li>
                <li class="active"><a href="<?php echo Admin; ?>index/content" class="icon-file-text">求购</a>
                    <ul><li><a href="#">添加内容</a></li>
                    <li class="active"><a href="#">内容管理</a></li>
                    <li><a href="#">分类设置</a></li>
                    <li><a href="#">链接管理</a></li></ul>
                </li>
                <li><a href="<?php echo Admin; ?>index/goods" class="icon-shopping-cart">商品</a></li>
                <li><a href="<?php echo Admin; ?>index/member" class="icon-user"> 会员</a></li>
                <li><a href="#" class="icon-file"> 文件</a></li>
                <li><a href="#" class="icon-th-list"> 栏目</a></li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo cookie('admin');?>，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="<?php echo Admin; ?>index/index" class="icon-home"> 开始</a></li>
                <li><a href="<?php echo Admin; ?>index/content">求购</a></li>
                <li>求购管理</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
    <form method="post">
    <div class="panel admin-panel">
        <div class="panel-head"><strong>求购列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
            <input type="button" class="button button-small border-green" value="添加求购" />
            <input type="button" class="button button-small border-yellow" value="批量删除" />
        </div>
        <table class="table table-hover">
            <tr>
                <th width="45">选择</th>
                <th width="120">分类</th>
                <th width="*">名称</th>
                <th width="100">时间</th>
                <th width="100">操作</th>
            </tr>
            <?php foreach ($data as $key => $value) { ?>
            <tr>
                <td><input type="checkbox" name="id" value="1" /></td>
                <td><?php echo $value['2']; ?></td>
                <td><?php echo $value['1']; ?></td>
                <td><?php echo explode(" ", $value['10'])[0]; ?></td>
                <td><a class="button border-blue button-little" href="#example" data-toggle="modal" data-target="#myModal">修改</a> <a class="button border-yellow button-little" href="#" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td>
            </tr>
              <?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       ggggg
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </table>
        <div class="panel-foot text-center">
            <?php echo $page; ?>
        </div>
    </div>
    </form>
    <br />
</div>
</body>
</html>