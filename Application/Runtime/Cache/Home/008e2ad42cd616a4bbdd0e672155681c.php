<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link href='http://www.qqershou.com/Member/Images/Head.css' rel='stylesheet' type='text/css'>
		<link href='http://www.qqershou.com/Member/Images/Index.css' rel='stylesheet' type='text/css'>
		<script language='JavaScript' src='http://www.qqershou.com/Member/User.js'></script>
	</head>
<body>
<div class="topbar">
<div class="topbarnav">
<div class="bar-right"><a href=""> <?php print_r(session('username'));?></a>&nbsp;&nbsp;用户中心&nbsp;&nbsp;|&nbsp;<a href="/shop/home/user/logout">退出</a>&nbsp;</div>
</div></div>
<div class="head"><div class="head-left">
<a href="/" target="_blank" class="logo"><img src="http://www.qqershou.com/Member/images/logo.png" alt=全球二手网></a><span>用户中心</span></div>
<a class="ask-price fr" href="/Member/User_ClassADD?Action=Add" title="发布信息" target="_blank">发布信息</a><a class="ask-xianzhi fr" href="#" title="处理闲置" target="_blank">处理闲置</a>
<div class="ali-search fr">
<form action="/Search/Search" name="searchform" method="POST" target="_blank">
<input name="City" type=hidden value=0>
<input name="Type" type=hidden value="class">
<input id="alisearch-keywords" class="empty" accesskey="s" maxlength="50" name="Key" value="请输入想查询的关键字" onclick="if(this.value=='请输入想查询的关键字'){this.value='';this.style.color='#333333'}" onKeyUp="searchajax(this.value,Type.value,'<?php echo ($InstallDir); ?>')" autocomplete=off >
<button type="submit" id="alisearch-submit" class="">搜 索</button></form>
</div></div>
<div class="memnav"><div class="module"><ul>
<span style="float:right; font-size:12px; width:140px;color:#FFFFFF"><a href="#" style="color:#FFFFFF" >帮助中心</a> | <a style="color:#FFFFFF" href="#">我要推广</a></span>
<li id="h"><a href="./">网站首页</a></li>
<li id="h_index" class="active"><a href="./member">用户中心</a></li>
<li id="h_account" class="noactive"><a href="./user">我的账户</a></li>
<li id="h_security" class="noactive"><a href="#">安全中心</a></li>
<li id="h_e" class="noactive"><a href="#">我的推广</a></li>
<li class="noactive"><a href="#">申请VIP</a></li>
</ul></div></div>
<DIV class="body-wrap">
<div class="left-wrap">
<div class="left-menu">
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/member/" class=mc>个人中心</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user_product" class=mpost>闲置物品</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user_classADD" class=mpost>分类信息</a></span>
<span onmouseover="$(this).addClass('active')"  class="active"><a href="/shop/home/index/user" class=mhelp>个人资料</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/shop/home/index/user_message" class=mmessage>我的消息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/shop/home/index/user_collection" class=mpay>我的收藏</a></span>
</div>
</div>	
<div class="right-wrap">
<SCRIPT language=JavaScript src="http://www.qqershou.com/Inc/Site.Js"></SCRIPT>
<div class=UserPath>您的位置：<a href="./member">会员中心</a> >> <a href='./user'>修改资料</a></div><DIV class=right_top>
<SPAN class='button on'><A class=btn-b href='?'>修改资料</A></SPAN>
<SPAN class='button'><A class=btn-b href='?Action=Face'>修改头像</A></SPAN>
<SPAN class='button'><A class=btn-b href='?Action=Pass'>修改密码</A></SPAN>
<SPAN class='button'><A class=btn-b href='?Action=Adress'>收货地址</A></SPAN>
</DIV>
<table width="100%" border="0" cellspacing="1" cellpadding="0" align=center>
<form method="POST" action="./user" name=myform>      
<input name=Area_ id="Area" type=hidden value='<?php echo $data[11];?>'>
<tr><td class=td40 height=35 colspan=2>基本资料</td></tr>
 <tr><td width="30%" height=40><div align="right" class=f14>真实姓名：</div></td><td><input class="h_input" name="TrueName" type="text" maxlength=50 value='<?php echo $data[7];?>'>
</td></tr>
  <tr><td><div align="right" class=f14>性别：</div></td><td><input name="Sex" id="boy" type="radio" value=0 checked Class=radio>男　<input name="Sex" id="girl" type="radio" value=1 Class=radio>女 <font Class=Font2>*</font></td></tr>
  <tr><td class=td40 height=35 colspan=2>联系方式</td></tr>
  <tr><td height=45><div align="right">电子邮箱：</div></td><td><input class="h_input" name="email" type="text" maxlength="50" value='<?php echo $data[5];?>'>
 <font Class=Font2>*</font></td></tr>
  <tr><td height=45><div align="right">电话：</div></td><td><input class="h_input" name="Tel" type="text"  maxlength="50" value='<?php echo $data[9];?>'><font color=red style="font-size:14px;">电话、QQ必须填写其中一项</font></td></tr>
  <tr><td height=45><div align="right" class=f14>手机：</div></td><td><input class="h_input" name="phonenumber" id="Mobile" type="text"  maxlength="50" value='<?php echo $data[3];?>'><font Class=Font2>*</font></td></tr>
  <tr><td height=45><div align="right" class=f14>QQ：</div></td><td><input class="h_input" name="QQ" id="QQ" type="text"  maxlength="50" value='<?php echo $data[10];?>'></td></tr>
  <tr><td><div align="right" class=f14>所在地：</div></td><td>您当前选择的城市为：<b><font color=red id="city">您还没有选择城市</font></b><br><script language=JavaScript src="<?php echo JS_URL; ?>area.Js"></Script><font color=red style="font-size:14px;">不改请不要动</font></td></tr>
  <tr><td><div align="right" class=f14>联系地址：</div></td><td><input name="AddRess" type="text" class="h_input w300" maxlength="200" value='<?php echo $data[12];?>'><font Class=Font2>*</font></td></tr>
  <tr><td></td><td height=50>
<input class=fb_an type="submit" value="确定修改">
</td></tr>
</form>
</table>
</div>
</DIV>
<script type="text/javascript">
	$(function(){
		if	(<?php echo $data[8];?> == 1){
			$("#boy").removeAttr("checked");
			$("#girl").attr("checked","checked");
		}
	})
</script>
<div class="footer-box">
<div class="footer-table">
<div class="footer-copy">
<a href='#' title='关于我们' target=_blank>关于我们</a>| <a href='#' title='有问题请与全球二手网客服进行对话' class=fduihua>联系客服</a>| <a href='#' title='VIP会员' target=_blank>VIP会员</a>| <A href='#' target=_blank>我要删除信息</A>| <a href='#' target=_blank>免责声明</a> | <a href='#' target=_blank>帮助中心</a>| <a href='#' target=_blank>广告服务</a>| <a href=/Area target=_blank>分站列表</a>| <a href='#' target=_blank 不良信息举报></a>| <a href='#' target=_blank>我要提建议</a><br>
Copyright &copy; 2010-2016 全球二手网 Inc. All rights reserved. <script src=http://s11.cnzz.com/stat.php?id=2193493&web_id=2193493 language=JavaScript></script><br>
<span class="credit icon1"></span><span class="credit icon2"></span><span class="credit icon3"></span>
</div></div></div>
<script language="JavaScript" src="http://www.qqershou.com/JS/jquery.js"></script><script type="text/javascript" src="http://www.qqershou.com/JS/backtop.js"></script>
</body>

</html>