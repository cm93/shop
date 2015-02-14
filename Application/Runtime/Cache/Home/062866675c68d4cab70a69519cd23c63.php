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
<div class="bar-right"><a href=""> <?php print_r(session('username'));?></a>&nbsp;&nbsp;用户中心&nbsp;&nbsp;|&nbsp;<a href="/Login?Action=Logout">退出</a>&nbsp;</div>
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
<span style="float:right; font-size:12px; width:140px;color:#FFFFFF"><a href="/home/help.Html" style="color:#FFFFFF" target=_blank>帮助中心</a> | <a style="color:#FFFFFF" href="/VIP/" target=_blank>我要推广</a></span>
<li id="h"><a href="/" target="_blank">网站首页</a></li>
<li id="h_index" class="active"><a href="/Member/">用户中心</a></li>
<li id="h_account" class="noactive"><a href="/Member/User_EditInfo">我的账户</a></li>
<li id="h_security" class="noactive"><a href="/Member/User_RZ">安全中心</a></li>
<li id="h_e" class="noactive"><a href="/Member/User_Yi?Action=jingjia">我的推广</a></li>
<li class="noactive"><a href="/VIP/">申请VIP</a></li>
</ul></div></div>
<DIV class="body-wrap">
<div class="left-wrap">
<div class="left-menu">
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" ><a href="/shop/home/index/member/" class=mc>个人中心</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user_product" class=mpost>闲置物品</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user_classADD" class=mpost>分类信息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user" class=mhelp>个人资料</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/shop/home/index/user_message" class=mmessage>我的消息</a></span>
<span onmouseover="$(this).addClass('active')"  class="active"><a href="/shop/home/index/user_collection" class=mpay>我的收藏</a></span>
</div>
</div>	
<div class="right-wrap">
<div class=UserPath>您的位置：<a href="./member">会员中心</a> >> <a href=User_Collection.asp>收藏管理</a></div><table width='100%' cellpadding=0 cellspacing=1 class=td1>
<tr><td colspan=2 class=td4><strong>收藏管理</strong></td></tr>
<tr><td width='15%' valign=top>　 <a href="#"><strong style="font-size:14px;line-height:180%">所有收藏</strong></a><br>　 <a href=?Type=%CE%C4%D5%C2%CA%D5%B2%D8><strong style="font-size:14px;line-height:180%">文章收藏</strong></a><br>　 <a href=?Type=%D0%C5%CF%A2%CA%D5%B2%D8><strong style="font-size:14px;line-height:180%">信息收藏</strong></a><br>　 <a href=?Type=%B5%EA%C6%CC%CA%D5%B2%D8><strong style="font-size:14px;line-height:180%">店铺收藏</strong></a><br>　 <a href=?Type=%D3%C5%BB%DD%C8%AF%CA%D5%B2%D8><strong style="font-size:14px;line-height:180%">优惠券收藏</strong></a><br>　 <a href=?Type=%B2%FA%C6%B7%CA%D5%B2%D8><strong style="font-size:14px;line-height:180%">产品收藏</strong></a><br>　 <a href=?Type=%CD%C5%B9%BA%CA%D5%B2%D8><strong style="font-size:14px;line-height:180%">团购收藏</strong></a><br><hr size=1 color=#cccccc><form action='?Type=&Page=&Action=Add' name=myform method=POST>
<input type='text' name='sort' size=10><input type='submit' name='submit' value='添加'></form>
</td><td width='85%' valign=top><table width='100%' cellpadding=2 cellspacing=1 border=0 align=center class=td1>
<tr align=center>
<td class=td3>名称</td>
<td class=td3 width='15%'>操作</td></tr>
<tr><td colspan=3>还没有任何收藏</td></tr></table>
</td></tr>
</Table>
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