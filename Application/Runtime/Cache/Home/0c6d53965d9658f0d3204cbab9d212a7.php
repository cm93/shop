<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK rel=stylesheet type=text/css href="http://www.qqershou.com/Member/style.css">
<LINK rel=stylesheet type=text/css href="http://www.qqershou.com/Member/rechargeindex/Payrecords.css">
<title>支付记录</title>
</head>
<body>
<br>

<TABLE cellSpacing=0 cellPadding=0 width=750  align=center border=0><TBODY>
<TR><TD>
			<div class="myjf">
						<strong><?php print_r(session('username'));?></strong>，目前您的余额：<b class="red">0</b>元<span class="ico_jf"></span>
		</div>				
			<div class="c"></div>
	  	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbmyinfo">
	  	<tr>
				<th width="490">详情</th>
						    <th width="60">余额变化</th>
						    <th style="width:140px">日期</th>
		  </tr>	

	  	<tr>
				<th colspan="3" align="right">本页小计：</th>
	      </tr>
<tr><td colspan=3 height="35"><div align="center"></div></td></tr>
   		</table>
</TD></TR>
</TBODY></TABLE>

<!-- right end -->

</body>
</html>