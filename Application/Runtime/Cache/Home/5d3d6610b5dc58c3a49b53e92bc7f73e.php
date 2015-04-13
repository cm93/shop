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
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/shop/home/index/user" class=mhelp>个人资料</a></span>
<span onmouseover="$(this).addClass('active')"  class="active"><a href="/shop/home/index/user_message" class=mmessage>我的消息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/shop/home/index/user_collection" class=mpay>我的收藏</a></span>
</div>
</div>	
<div class="right-wrap">
<div class=UserPath>您的位置：<a href="./member">会员中心</a> >> <a href=User_Message>短信中心</a></div><table width='100%' cellpadding=3 cellspacing=1 class=td30><tr><td valign=top colspan=2>
<form action='?W=&Page=' name=myform method=POST>
<DIV class=area_cz>
<table width=600 border=0 cellspacing=0 cellpadding=0>
<tr><td width=28>&nbsp;</td>
<td width=48><a href=User_Message><img align=middle title=收件箱 src="http://www.qqershou.com/Member/img/msg_take.gif" border=0></a></td>
<td width=58><a href=User_Message>收件箱</a></td>
<td width=48><a href=?W=Sender><img align=middle title=发件箱 src="http://www.qqershou.com/Member/img/msg_send.gif" border=0></a></td>
<td width=58><a href=?W=Sender>发件箱</a></td>
<td width=48><a href=?Action=Send><img align=middle title=写邮件 src="http://www.qqershou.com/Member/img/msg_write.gif" border=0></a></td>
<td width=58><a href=?Action=Send>写邮件</a></td>
<td>&nbsp;</td>
</tr></table>
</DIV>
<DIV class=c></DIV>
<TABLE class=basetb cellSpacing=0 cellPadding=0 width='100%'>
<TBODY>
<TR id=tablehead>
<TH width=28>&nbsp; </TH>
<TH width=28>&nbsp; </TH>
<TH width=90> 
发件人</TH><TH>消息内容 </TH>
<TH width=140>时间 </TH>
<TH width=60>操作 </TH></TR>
</TBODY></TABLE>
</td></tr>
<tr><td>
<DIV class=area_cz4><input name='chkall' type='checkbox' id='chkall' value='select' onclick="CheckAll(this.form)" style='border:0'>全选　<input type=hidden name=Action value=Del><input type='submit' name='submit' value='批量删除' class='btn-v3'></DIV>
</td><td>
</DIV>
</td></tr></Form></Table>
</div>
</DIV>



<div class="footer-box">
<div class="footer-table">
<div class="footer-copy">
<a href='#' title='关于我们' target=_blank>关于我们</a>| <a href='#' title='有问题请与全球二手网客服进行对话' class=fduihua>联系客服</a>| <a href='#' title='VIP会员' target=_blank>VIP会员</a>| <A href='#' target=_blank>我要删除信息</A>| <a href='#' target=_blank>免责声明</a> | <a href='#' target=_blank>帮助中心</a>| <a href='#' target=_blank>广告服务</a>| <a href=/Area target=_blank>分站列表</a>| <a href='#' target=_blank> 不良信息举报</a>| <a href='#' target=_blank>我要提建议</a><br>
Copyright &copy; 2010-2016 全球二手网 Inc. All rights reserved. <script src=http://s11.cnzz.com/stat.php?id=2193493&web_id=2193493 language=JavaScript></script><br>
<span class="credit icon1"></span><span class="credit icon2"></span><span class="credit icon3"></span>
</div></div></div>
<script language="JavaScript" src="http://www.qqershou.com/JS/jquery.js"></script><script type="text/javascript" src="http://www.qqershou.com/JS/backtop.js"></script>
</body>

</html>