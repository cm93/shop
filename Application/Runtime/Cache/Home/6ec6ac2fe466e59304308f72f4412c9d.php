<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
    <script type="text/javascript" src="/Public/ume/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ume/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ume/umeditor.min.js"></script>
    <script type="text/javascript" src="/Public/ume/lang/zh-cn/zh-cn.js"></script>
    

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link href="<?php echo CSS_URL; ?>style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		
		<!----//webfonts---->
		<script src="<?php echo JS_URL; ?>jquery-1.7.2.min.js"></script>
		<script src="<?php echo JS_URL; ?>ajaxFile.js"></script>
		<!----start-alert-scroller---->
		<script type="text/javascript" src="<?php echo JS_URL; ?>jquery.easy-ticker.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
		</script>
		<!----start-alert-scroller---->
		<!-- start menu -->
		<link href="<?php echo CSS_URL; ?>megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo JS_URL; ?>megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="<?php echo JS_URL; ?>menu_jquery.js"></script>
		<!-- //End menu -->
		<!---move-top-top---->
		<script type="text/javascript" src="<?php echo JS_URL; ?>move-top.js"></script>
		<script type="text/javascript" src="<?php echo JS_URL; ?>easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<!---//move-top-top---->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="top-header">
					<div class="wrap">
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="#"><span id="clickme"> </span></a></li>
								<!---start-cart-bag---->
								<div id="cart">Your Cart is Empty <span>(0)</span></div>
								<!---start-cart-bag---->
								<li><a class="info" href="#"><span> </span></a></li>
							</ul>
						</div>
						<div class="top-header-center" style="width:750px">
							<div class="top-header-center-alert-left">
								<h3>FREE DELIVERY</h3>
							</div>
							<div class="top-header-center-alert-right">
								<div class="vticker">
								  <ul>
								  <li>QQ:<label>243844647</label>
                                      <li>github:<label>https://github.com/cm93</label></li>
								  </ul>
								</div>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="top-header-right">
							
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<script type="text/javascript">
		username = "<?php print_r(session('username'));?>";
		$(function(){
			if(username == ""){
				$(".top-header-right").append('<ul><li><a href="<?php echo HOME;?>user/login">登录</a><span> </span></li><li><a href="<?php echo HOME;?>user/register">注册</a></li></ul>')
			}else{
				html = "<ul ><li>欢迎会员:</li><li><font color='#FF0000'>"+username+"</font></li></ul><ul><li>[<a href='<?php echo HOME;?>index/member'>用户中心</a>,<a href='<?php echo HOME;?>user/logout'>退出</a>]<li></ul>";
				$(".top-header-right").append(html);
			}
		})
		
	</script>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-right">
							<a class="logo" href="<?php echo HOME;?>"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>

		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>求购信息</h1>
					<div class="register-grids">
						<form action="./want_post" method="post" enctype="multipart/form-data" id="imgform" > 
								<div class="register-top-grid">
										<div>
											<span ><label>*</label>标题：</span>
											<input type="text" name="title" id="title" class="required"  required="required"> 
										</div>
										<div id="selecter">
										<span ><label>*</label>选择分类：</span>
											 <select id="all" name="all" style="margin-left:75px;height:30px;border-color:#EEE;width:150px">
      											<option value="家用电器">家用电器</option>
										      	<option value="电脑数码">电脑数码</option>
										      	<option value="电脑数码">汽车装饰</option>
										      	<option value="家居家饰">家居家饰</option>
										      	<option value="办公用品">办公用品</option>
										      	<option value="旅游运动">旅游运动</option>
										      	<option value="宠物宝贝">宠物宝贝</option>
										      	<option value="古董收藏">古董收藏</option>
										  	</select>
										  	
										</div>
										
										<div>
											<span ><label>*</label>求购价格：</span>
											<input type="text" name="price1" id="price" class="required"   onkeyup="value=value.replace(/[^\d]/g,'')" style="width:100px;margin-left:75px;text-align:right"> &nbsp;&nbsp;-
											<input type="text" name="price2" id="price" class="required"   onkeyup="value=value.replace(/[^\d]/g,'')" style="width:100px;margin-left:15px;text-align:right"> 元
										</div>

										<div >
											<span ><label>*</label>联系方式：</span>
											<label  for="phonenumber" style="margin-top:4px;left: 150px;position: absolute;color: #666;line-height: 24px;text-align: center;vertical-align: middle;cursor: pointer;white-space: nowrap;font: 18px/1.5 tahoma,arial,'Hiragino Sans GB',\5b8b\4f53,sans-serif;">手机号：</label>
 											<input type="text" name="phonenumber" id="phonenumber" class="required"  required="required"style="padding-left:72px;width:225px" onkeyup="value=value.replace(/[^\d]/g,'')">
 											<label  for="truename" style="margin-top:4px;left: 375px;position: absolute;color: #666;line-height: 24px;text-align: center;vertical-align: middle;cursor: pointer;white-space: nowrap;font: 18px/1.5 tahoma,arial,'Hiragino Sans GB',\5b8b\4f53,sans-serif;">姓名：</label>
 											<input type="text" name="truename" id="truename" class="required"  required="required"style="padding-left:48px;width:225px" >
										</div>
										<div >
											<span style="margin:20px 0 20px 0;"><label></label>所在地：<?php print_r($area);?></span>

										</div>
										
										<div>
											<span ><label>*</label>物品描述：</span>
											
										</div>
										<iframe src="<?php echo SITE_URL; ?>Public/ume/" style="width:1050px;height:320px;" name="describe" scrolling="no" id="describe">
										</iframe>
										<input type="hidden" name="area" value="<?php print_r($area);?>">
										<input type="submit" value="发布求购" id="sub" style="margin-left:75px;"/>
						</form>
						<iframe style="display:none" name='hidden_frame' id="hidden_frame"></iframe>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$(function(){
	$("#sub").live("click",function(){
	   describe = $(window.frames["describe"].document).find("#myEditor").html();
	   value ="";
		
	   $("#imgform").append("<input type='hidden' name='describe' value='"+describe+"'>");

  })
})
		</script>
		<div class="bottom-grids" style="margin-top:50px;">
			<div class="bottom-top-grids">
				<div class="wrap">
					<div class="bottom-top-grid">
						<h4>帮助</h4>
						<ul>
							<li><a href="contact">联系我们</a></li>
							<li><a href="#">购物</a></li>
						</ul>
					</div>
					<div class="bottom-top-grid">
						<h4>订单</h4>
						<ul>
							<li><a href="#">支付方式</a></li>
							<li><a href="#">送货服务</a></li>
							<li><a href="#">退换商品</a></li>
						</ul>
					</div>
					<div class="bottom-top-grid last-bottom-top-grid">
						<h4>注册</h4>
						<p>创建一个帐户来管理你的二手商品，从您的喜爱来推荐你喜欢的商品</p>
						<a class="learn-more" href="#">了解更多</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="bottom-bottom-grids">
				<div class="wrap">
					<div class="bottom-bottom-grid">
						<h6>电子邮件注册</h6>
						<p>了解更多新产品</p>
						<a class="learn-more" href="#">立即注册</a>
					</div>
					<div class="bottom-bottom-grid">
						<h6>礼品卡</h6>
						<p>给你最适合的礼物</p>
						<a class="learn-more" href="#">点击查看</a>
					</div>
					<div class="bottom-bottom-grid last-bottom-bottom-grid">
						<h6>合作伙伴</h6>
						<p><a href="http://www.55usedcar.com/">二手车交易网</a></p>
                        <p><a href="http://www.9chew.com/">二手车交易市场</a></p>
						<a class="learn-more" href="#">更多..</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---- //End-bottom-grids---->
		<!--- //End-content---->
		<!---start-footer---->
		<div class="footer" align="center">
			<div class="wrap" >
				<div class="footer-left" align="center">
					<ul>
						<li><a href="#">关于我们</a> <span> </span></li>
						<li><a href="#">联系客服</a> <span> </span></li>
						<li><a href="#">VIP</a> <span> </span></li>
						<li><a href="#">帮助中心</a> <span> </span></li>
						<li><a href="#">分站列表</a> <span> </span></li>
						<li><a href="#">我要提建议</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="footer-right">
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-footer---->
		<!---//End-wrap---->
	</body>
</html>