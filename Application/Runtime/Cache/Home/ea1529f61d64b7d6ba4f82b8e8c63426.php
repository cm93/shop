<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link href='http://www.qqershou.com/Member/Images/Head.css' rel='stylesheet' type='text/css'>
		<link href='http://www.qqershou.com/Member/Images/Index.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo JS_URL;?>jquery.min.js"></script>
		<script language='JavaScript' src='http://www.qqershou.com/Member/User.js'></script>
	</head>
<body>
<div class="topbar">
<div class="topbarnav">
<div class="bar-right"><a href=""> <?php print_r(session('username'));?></a>&nbsp;&nbsp;用户中心&nbsp;&nbsp;|&nbsp;<a href="<?php echo HOME;?>user/logout">退出</a>&nbsp;</div>
</div></div>
<div class="head"><div class="head-left">
<a href="/" target="_blank" class="logo"><img src="http://www.qqershou.com/Member/images/logo.png" alt=全球二手网></a><span>用户中心</span></div>
<a class="ask-price fr" href="/Member/User_ClassADD?Action=Add" title="发布信息" target="_blank">发布信息</a><a class="ask-xianzhi fr" href="/Product/Post" title="处理闲置" target="_blank">处理闲置</a>
<div class="ali-search fr">
<form action="/Search/Search" name="searchform" method="POST" target="_blank">
<input name="City" type=hidden value=0>
<input name="Type" type=hidden value="class">
<input id="alisearch-keywords" class="empty" accesskey="s" maxlength="50" name="Key" value="请输入想查询的关键字" onclick="if(this.value=='请输入想查询的关键字'){this.value='';this.style.color='#333333'}" onKeyUp="searchajax(this.value,Type.value,'<?php echo ($InstallDir); ?>')" autocomplete=off >
<button type="submit" id="alisearch-submit" class="">搜 索</button></form>
</div></div>
<div class="memnav"><div class="module"><ul>
<span style="float:right; font-size:12px; width:140px;color:#FFFFFF"><a href="#" style="color:#FFFFFF" >帮助中心</a> | <a style="color:#FFFFFF" href="#">我要推广</a></span>
<li id="h"><a href="<?php echo HOME;?>" >网站首页</a></li>
<li id="h_index" class="active"><a href="<?php echo HOME;?>index/Member/">用户中心</a></li>
<li id="h_account" class="noactive"><a href="<?php echo HOME;?>index/user">我的账户</a></li>
<li id="h_security" class="noactive"><a href="#">安全中心</a></li>
<li id="h_e" class="noactive"><a href="#">我的推广</a></li>
<li class="noactive"><a href="/VIP/">申请VIP</a></li>
</ul></div></div>
<DIV class="body-wrap">
<div class="left-wrap">
<div class="left-menu">
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="<?php echo HOME;?>index/member/" class=mc>个人中心</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="<?php echo HOME;?>index/user_product" class=mpost>闲置物品</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="<?php echo HOME;?>index/user_classADD" class=mpost>分类信息</a></span>
<span onmouseover="$(this).addClass('active')"  class="active"><a href="<?php echo HOME;?>index/user" class=mhelp>个人资料</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="<?php echo HOME;?>index/user_message" class=mmessage>我的消息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="<?php echo HOME;?>index/user_collection" class=mpay>我的收藏</a></span>
</div>
</div>	
<div class="right-wrap">
<SCRIPT language=JavaScript src="http://www.qqershou.com/Inc/Site.Js"></SCRIPT>
<div class=UserPath>您的位置：<a href="<?php echo HOME;?>index/member">会员中心</a> >> <a href='<?php echo HOME;?>index/user'>修改资料</a></div><DIV class=right_top>
<SPAN class='button'><A class=btn-b href='?'>修改资料</A></SPAN>
<SPAN class='button on'><A class=btn-b href='?Action=Face'>修改头像</A></SPAN>
<SPAN class='button'><A class=btn-b href='?Action=Pass'>修改密码</A></SPAN>
<SPAN class='button'><A class=btn-b href='?Action=Adress'>收货地址</A></SPAN>
</DIV>
<table width="100%" border="0" cellspacing="1" cellpadding="0" class=td30 align=center>
<form method="POST" action="?Action=FaceSave" name=myform >
<tr><td class=td40 height=30 colspan=2>修改头像</td></tr>
<tr><td height=30px colspan=2></td></tr>
<script type="text/javascript">
	$(function(){
		$(".selector").change(function(){
			var a = $(".selector").find("option:selected").val();
			$("#PicShow").src = a; 
		})
	})
</script>
<tr><td width='20%' align=center valign=top><div class=Edit_face><Img Src='<?php echo $data[14];?>' ID=PicShow width=100px height=100px></div></td><td width='80%' valign=top>从列表中选择：<select name='Face' class="selector" onChange="document.images['PicShow'].src=options[selectedIndex].value;Pic.value=options[selectedIndex].value">
<option value='http://www.qqershou.com/Images/Face/Image0.gif' selected>Image0.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image1.gif'>Image1.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image2.gif'>Image2.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image3.gif'>Image3.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image4.gif'>Image4.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image5.gif'>Image5.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image6.gif'>Image6.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image7.gif'>Image7.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image8.gif'>Image8.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image9.gif'>Image9.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image10.gif'>Image10.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image11.gif'>Image11.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image12.gif'>Image12.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image13.gif'>Image13.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image14.gif'>Image14.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image15.gif'>Image15.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image16.gif'>Image16.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image17.gif'>Image17.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image18.gif'>Image18.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image19.gif'>Image19.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image20.gif'>Image20.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image21.gif'>Image21.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image22.gif'>Image22.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image23.gif'>Image23.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image24.gif'>Image24.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image25.gif'>Image25.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image26.gif'>Image26.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image27.gif'>Image27.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image28.gif'>Image28.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image29.gif'>Image29.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image30.gif'>Image30.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image31.gif'>Image31.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image32.gif'>Image32.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image33.gif'>Image33.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image34.gif'>Image34.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image35.gif'>Image35.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image36.gif'>Image36.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image37.gif'>Image37.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image38.gif'>Image38.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image39.gif'>Image39.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image40.gif'>Image40.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image41.gif'>Image41.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image42.gif'>Image42.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image43.gif'>Image43.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image44.gif'>Image44.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image45.gif'>Image45.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image46.gif'>Image46.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image47.gif'>Image47.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image48.gif'>Image48.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image49.gif'>Image49.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image50.gif'>Image50.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image51.gif'>Image51.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image52.gif'>Image52.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image53.gif'>Image53.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image54.gif'>Image54.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image55.gif'>Image55.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image56.gif'>Image56.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image57.gif'>Image57.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image58.gif'>Image58.gif</option>
<option value='http://www.qqershou.com/Images/Face/Image59.gif'>Image59.gif</option>
</select><br>
<br><input type="submit" class=fb_an value="确定修改"></td></tr>
</form>
</table>
</div>
</DIV>
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