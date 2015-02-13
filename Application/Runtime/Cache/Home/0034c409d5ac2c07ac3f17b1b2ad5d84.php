<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
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
<span onmouseover="$(this).addClass('active')" class="active"><a href="/Member/" class=mc>个人中心</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/Member/User_Product" class=mpost>闲置物品</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/Member/User_ClassADD" class=mpost>分类信息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')" class=""><a href="/Member/User_EditInfo" class=mhelp>个人资料</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/Member/User_Message" class=mmessage>我的消息</a></span>
<span onmouseover="$(this).addClass('active')" onmouseout="$(this).removeClass('active')"><a href="/Member/User_Collection" class=mpay>我的收藏</a></span>

</div>
</div>	
<div class="right-wrap">
<div class="userinfo">
<div class="user-photo">
<div class="photo"><img alt="头像" title="头像" src="http://www.qqershou.com/Images/Face/Image0.gif"><s></s></div>
<span><a href="/Member/User_EditInfo">完善个人资料</a></span></div>
<div class="user-info">
<div class="index-user">
<strong>a88953360</strong>
<span>于2015-2-9 9:43:33注册 登陆：3 次</span>
</div>
<div class="jifen-user">积分：<span id="mypoint">26</span>分 余额：<span>0.00</span>元  <a href="PayOnline">去充值&gt;&gt;</a></div>
<div class="renzheng-user">
<span class="email-norz" title="邮箱未认证"></span><a href="User_RZ?Action=Email&Email=243844647@qq.com">邮箱未认证</a>
<span class="idcard-norz" title="身份证未认证"></span><a href="User_RZ?Action=ID">身份证未认证</a>
</div></div>
</div>
<div class="quickroad">
<span class="quickroad-title">快速通道：</span>
<div class="quickroad-a">
<a href="User_ClassADD">我的信息</a><a href="User_ConsumeList?Type=3">我的积分</a><a href="PayOnline?Action=MingXi">我的余额</a><a href="PayOnline">我要充值</a><a href="/Member/User_Message">我的消息</a><a href="/VIP/" style="color:#FF6600" target=_blank>升级VIP</a><a href="/Member/User_Yi?Action=jingjia" target=_blank>我的推广</a></div></div>
<script type="text/javascript">
function tab_qiche(elementID,listName,n) {
var elem = document.getElementById(elementID);
var elemlist = elem.getElementsByTagName("h3");
for (var i=0; i<elemlist.length; i++) {
elemlist[i].className = "normal";
var m = i+1;
document.getElementById(listName+"_"+m).className = "normal";
}
var elem2 = document.getElementById(listName+"_"+n);
var elemlist2 = elem2.getElementsByTagName("img");
if(n > 1) {
for (var j=0; j<elemlist2.length; j++) {
if(elemlist2[j].src == '') elemlist2[j].src = elemlist2[j].getAttribute("src1");
}
}
elemlist[n-1].className = "current";
document.getElementById(listName+"_"+n).className = "current";
}
</script>
<div id='qiche_tab' class='menu'>
<h3 class=current  onmouseover="tab_qiche(&#39;qiche_tab&#39;,&#39;qiche_info&#39;,1);" href="javascript:;">您最新登记的物品</h3><h3 class=normal  onmouseover="tab_qiche(&#39;qiche_tab&#39;,&#39;qiche_info&#39;,2);" href="javascript:;">您最新发布的信息</td><td class=sec3 width=376>&nbsp;</h3>
</div>
<div class="menu_text">
<div id="qiche_info_1" class="current">
<TABLE class="basetb " cellSpacing=0 cellPadding=0 width='100%'>
<TBODY>
<TR id=tablehead>
<TH width=78>图片</TH>
<TH >名称 </TH>
<TH width=150>发布时间 </TH>
<TH width=50>状态 </TH>
<TH width=80>竞价排名 </TH>
</TR>
</TBODY></TABLE>
</div>
<div id='qiche_info_2' class='normal'>
<TABLE class=basetb cellSpacing=0 cellPadding=0 width='100%' id='qiche_info_2'>
<TBODY>
<TR id=tablehead>
<TH >信息标题</TH>
<TH width=130>发布时间 </TH>
<TH width=45>状态 </TH>
<TH width=45>推荐 </TH>
<TH width=100>管理 </TH>
<TH width=130>推广 </TH>
</TR>
</TBODY></TABLE>
</div></div>
</div>
</DIV>

<div class="footer-box">
<div class="footer-table">
<div class="footer-copy">
<a href='#' title='关于我们' target=_blank>关于我们</a>| <a href='#' title='有问题请与全球二手网客服进行对话' class=fduihua>联系客服</a>| <a href='#' title='VIP会员' target=_blank>VIP会员</a>| <A href='#' target=_blank>我要删除信息</A>| <a href='#' target=_blank>免责声明</a> | <a href='#' target=_blank>帮助中心</a>| <a href='#' target=_blank>广告服务</a>| <a href=/Area target=_blank>分站列表</a>| <a href='#' target=_blank 不良信息举报</a>| <a href='#' target=_blank>我要提建议</a><br>
Copyright &copy; 2010-2016 全球二手网 Inc. All rights reserved. <script src=http://s11.cnzz.com/stat.php?id=2193493&web_id=2193493 language=JavaScript></script><br>
<span class="credit icon1"></span><span class="credit icon2"></span><span class="credit icon3"></span>
</div></div></div>
<script language="JavaScript" src="http://www.qqershou.com/JS/jquery.js"></script><script type="text/javascript" src="/JS/backtop.js"></script>
</body>

</html>