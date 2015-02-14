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
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active') class=""><a href="/shop/home/index/member/" class=mc>个人中心</a></span>
<span onmouseover="$(this).addClass('active')"  class="active"><a href="/shop/home/index/user_product" class=mpost>闲置物品</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user_classADD" class=mpost>分类信息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user" class=mhelp>个人资料</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/shop/home/index/user_message" class=mmessage>我的消息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/shop/home/index/user_collection" class=mpay>我的收藏</a></span>
</div>
</div>	
<div class="right-wrap">
<div class=UserPath>您的位置：<a href="./member">会员中心</a> >> <a href=User_Product>闲置物品</a></div><table width='100%' cellpadding=3 cellspacing=1><tr><td valign=top colspan=2>
<form action='?Page=' name=myform method=POST>
<DIV class=area_cz>
<B>&nbsp;闲置物品</B>
</DIV>
<DIV class=c></DIV>
<TABLE class=basetb cellSpacing=0 cellPadding=0 width='100%'>
<TBODY>
<TR id=tablehead>
<TH width=78>图片</TH>
<TH >名称 </TH>
<TH width=140>发布时间 </TH>
<TH width=110>状态 </TH>
<TH width=100>推广 </TH>
<TH width=110>操作 </TH></TR>
</TBODY></TABLE>
<table width=100% border=0 cellspacing=0 cellpadding=0>
<tr>
<td>
<DIV class=noteread>
<B>说明：</B> <br>
1、刷新：将您的物品靠前显示，相当于新发一条，2个二手币/条，相当于0.2元/条。每件物品可免费刷新3次。<br>
2、竞价排名：将您的物品固定排在页面最顶部，不会被其他信息挤下去，出价越高排名越靠前。<br>
3、下架：下架中的物品除了您自己外，其他人无法看到。</DIV>
</td></tr>
</table>
<tr><td align=right height=40>
</td></tr></Form>
</td></tr></Table>
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