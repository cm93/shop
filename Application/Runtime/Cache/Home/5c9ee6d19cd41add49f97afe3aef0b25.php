<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link href="<?php echo CSS_URL; ?>style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		
		<!----//webfonts---->
		<script src="<?php echo JS_URL; ?>jquery.min.js"></script>
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
						<div class="top-header-center" width:750px>
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
							<ul>
								<li><a href="./login">登录</a><span> </span></li>
								<li><a href="./register">注册</a></li>
							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-right">
							<a class="logo" href="<?php echo HOME;?>"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
				<!----start-bottom-header---->
		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>LOGIN OR CREATE AN ACCOUNT</h1>
					<div class="login-left">
						<h3>NEW CUSTOMERS</h3>
						<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
						<a class="acount-btn" href="register.html">Creat an Account</a>
						<img alt="" src="http://www.qqershou.com/UpFile/Img/201207/1207041655581360.gif">
					</div>
					<div class="login-right" style="width:435px">
						<h3>会员登录</h3>
						<form method="post" action="./login" id="login">
							<div>
								<span>用户名<label>*</label></span>
								<input type="text" name="username" required="required"> 
							</div>
							<div>
								<span>密码<label>*</label></span>
								<input type="password" name="password" required="required"> 
							</div>
							<div id="verify">
								<span>验证码<label>*</label></span>
								<input type="text" style="width:100px" id = "code" name="code">
								<img src="<?php echo HOME; ?>user/verifyIMG"  alt="" style="position: absolute;margin:0 0 0 15px; " onclick="this.src='<?php echo HOME; ?>user/verifyIMG';"/>
							</div>
							<a class="forgot" href="#">忘记密码？</a>
							<input type="submit" value="登录" id="submit"/>
						</form>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
<script type="text/javascript">
	$(function(){
		code = false;
		$("#code").bind('input propertychange',function(e){
				$("#false").remove();
				if($("#code").val().length == 4){
				$.ajax({    
				    url:'./check_verify',
					data:$('#code').serialize(),
					type:'post',    
				    cache:false,    
				    dataType:'json',    
				    success:function(data) { 
				    	if(data == false){
				    		$("#verify").append("<span id='false'><font color='#FF0000'>验证不正确</font></span>");
				    	}else{
				    		$("#verify").append("<span id='false'><img src='http://www.qqershou.com/Member/Img/ok_07.gif'></span>");
							code = true		    	
				    	}
				     },    
				});
				}
		})
		
	a="<?php print_r($_GET["release"]); ?>";
		$("#submit").click(function(e){
			e.preventDefault();
			if(code){
				$.ajax( {    
				    url:'./login',
				    data:$('#login').serialize(),
				    type:'post',    
				    cache:false,    
				    dataType:'json',    
				    success:function(data) { 
				    	if(data.status == 1){
				    		if(a == 1){
				    			location.href="../goods/release"
				    		}
				    		else{
				    		 	location.href = "../index/index";
				    		}
				    	}else{
				    		alert("密码错误");  	
				    	}
				     },    
				});
			}
		})
	})
</script>
		<!---- start-bottom-grids---->
		<div class="bottom-grids">
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