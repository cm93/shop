<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK rel=stylesheet type=text/css href="http://www.qqershou.com/Member/Images/Index.css">
<LINK rel=stylesheet type=text/css href="http://www.qqershou.com/Member/rechargeindex/rechare.css" media=all>
<LINK rel=stylesheet type=text/css href="http://www.qqershou.com/Member/rechargeindex/boxy20120515.css">
<SCRIPT type=text/javascript src="http://www.qqershou.com/Member/rechargeindex/payrecharge20120515.js"></SCRIPT>
<SCRIPT type=text/javascript src="http://www.qqershou.com/Member/rechargeindex/jquery.boxy.js"></SCRIPT>
<SCRIPT type=text/javascript src="http://www.qqershou.com/Member/rechargeindex/showbox.js"></SCRIPT>
<script language='JavaScript' src='http://www.qqershou.com/Member/User.js'></script>
<title>无标题文档</title>
</head>
<body>
<br>

<TABLE cellSpacing=0 cellPadding=0   align=center border=0><TBODY>
<TR><TD>
<DIV class=paytype id=paytit1 onclick=pay1()>支付宝</DIV>
<DIV class=paytype1 id=paytit3 onclick=pay3()>银行汇款</DIV></TD></TR>
<TR><TD>
<form id=ybpayform method="post" action="/trade_create_by_buyer_asp_gb/index"  name=payform target=_blank>
<DIV class=pay id=payid1><DIV class=pay1><DIV class=pay2>

<input name=TypeID type=hidden value=0>
<input name=Remark type=hidden value='账户冲值'>
<input name=Pay type=hidden value="支付宝" />
<input name=out_trade_no type=hidden value=2015295598>
<input name=UserName type=hidden value=a88953360>
<input name=receive_address type=hidden value=>
<input name=receive_phone type=hidden value=>
<input name=receive_mobile type=hidden value=11111111111>
<TABLE class="tblist ">
  <TBODY>
  <TR>
    <TH class=t>输入充值金额 </TH>
    <TD><INPUT  id=yeeOrderMoney class=inp-jf type=text name=orderMoney onkeyup="this.value=this.value.replace(/\D/g,'')"> 元(人民币)<span id=Email1></span></TD></TR>
  <TR>
    <TD>&nbsp; </TD>
    <TD><LABEL id=butt class=butt><INPUT id=btnSubmit class=btns onclick=changePayForm() border=0 value=提交支付 type=button name=btnSubmit><SPAN 
      id=txtSubmitInfo></SPAN> </LABEL><SPAN id=txtSubmitInfo></SPAN> 
<p class='tsxy'><input type=checkbox CHECKED value=1 id=chkProtocolonlinetreat name=chkProtocol> 我已仔细阅读过《<a href='/home/16.html' target='_blank'>全球二手网信息审核规范</a>》，并同意充值后帖子自行删除或违反版规被删除，全球二手网将不予退款。</p>
</TD></TR></TBODY></TABLE>
</DIV></DIV></DIV>
<INPUT id=formid type=hidden> <INPUT id=modelid type=hidden>
</FORM>
<SCRIPT language=javascript> 
/*选中何种方式支付*/
function changePayForm(){ 
	checkAndSubmitForYeeAndBill("ybpayform","yeeOrderMoney","1","onlinetreat"); 
}
</SCRIPT>

<DIV class=pay id='payid2' style="DISPLAY: none">
<DIV class=pay1>
<DIV class=pay2>
<DIV>选择一个银行并确保您已经在银行柜台开通了网上支付功能，否则将无法支付成功 <SPAN id=tip_span_select_bank><SPAN class=validatorMsg>&nbsp;</SPAN></SPAN></DIV>
<DIV class=select_bank_div><LABEL><INPUT class=bank_name value=ICBC-NET type=radio name=bank_name> <IMG alt=工商银行 src='http://www.qqershou.com/Member/Img/1.gif'> 
</LABEL><LABEL><INPUT class=bank_name value=CMBCHINA-NET type=radio name=bank_name> <IMG alt=招商银行 src='http://www.qqershou.com/Member/Img/2.gif'> 
</LABEL><LABEL><INPUT class=bank_name value=BOC-NET type=radio name=bank_name> <IMG alt=中国银行 src='http://www.qqershou.com/Member/Img/3.gif'>
</LABEL><BR><LABEL><INPUT class=bank_name value=CCB-NET type=radio name=bank_name> <IMG alt=建设银行 src='http://www.qqershou.com/Member/Img/4.gif'>
</LABEL><LABEL><INPUT class=bank_name value=ABC-NET type=radio name=bank_name> <IMG alt=农业银行 src='http://www.qqershou.com/Member/Img/7.gif'></LABEL><BR></DIV>
<br><table class='tblist'><tbody>
<tr><th class='t'> 输入充值金额 </th><td>
<input type='text' name='orderMoney' value='' class='inp-jf'>元(人民币)
</td></tr>
<tr><td >&nbsp;  </td>
<td><label id='butt' class='butt'>
<input border=0 type=button value='提交支付' class='btns' name='btnSubmit'>
<span id='txtSubmitInfo'></span></label>
<span id='txtSubmitInfo'></span>
<p class='tsxy'><input type='checkbox' checked='' value='1' id='chkProtocolonlinetreat' name='chkProtocol'> 我已仔细阅读过《<a href='/home/16.html' target='_blank'>全球二手网信息审核规范</a>》，并同意充值后帖子自行删除或违反版规被删除，全球二手网将不予退款。</p>
</td></tr></tbody></table>
</DIV></DIV></DIV>


<DIV class=pay id="payid3" style="DISPLAY: none">
<DIV class="pay1">
<DIV class="pay2">

<h3 class="gray">银行汇款充值</h3>
<div class="line"></div>
<div class="step">
<span class="red">请您在汇款成功后与客服联系：18258022898</span>
<ul class="clearfix">
<li><strong>第一步</strong><br />银行汇款，为了方便查账，请尽量在汇款后多加几元或几角。 </li>
<li><strong>第二步</strong><br />拨打客服热线18258022898，告知<span class='red'>需要充值的账户类型</span>、汇款的金额、汇款人姓名、汇出银行（需精确到支行）、汇入银行、用户名等信息。 </li>
<li><strong>第三步</strong><br />全球二手网客服人员确认汇款到账，并为您指定的全球二手网用户名进行充值。 </li></ul></div>
<div class="line"></div>
<div class="company">
<h3>公司账户</h2>
<dl class="clearfix">
<dt><img src='http://www.qqershou.com/Member/rechargeindex/bank_gdfz.gif' width='130' height='52' alt='招商银行' /></dt>
<dd class="win440">中国建设银行股份有限公司滨州滨城支行</dd>
<dd class="win220">账号：<strong>xxxxxxxxxxxxxxxxxxxxx</strong></dd>
<dd class="win220">开户名：滨州易诚网络科技有限公司</dd>
</dl>
</DIV></DIV></DIV>
</TD></TR>
</TBODY></TABLE>

<!-- right end -->

</body>
</html>