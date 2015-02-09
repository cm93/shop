<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
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
								<script type="text/javascript">
									$(function(){
									    var $cart = $('#cart');
									        $('#clickme').click(function(e) {
									         e.stopPropagation();
									       if ($cart.is(":hidden")) {
									           $cart.slideDown("slow");
									       } else {
									           $cart.slideUp("slow");
									       }
									    });
									    $(document.body).click(function () {
									       if ($cart.not(":hidden")) {
									           $cart.slideUp("slow");
									       } 
									    });
									    });
								</script>
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="#"><span id="clickme"> </span></a></li>
								<!---start-cart-bag---->
								<div id="cart">Your Cart is Empty <span>(0)</span></div>
								<!---start-cart-bag---->
								<li><a class="info" href="#"><span> </span></a></li>
							</ul>
						</div>
						<div class="top-header-center">
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
								<li><a href="../user/login.html">登录</a><span> </span></li>
								<li><a href="../user/register.html">注册</a></li>
							</ul>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-left">
							<form>
								<input type="text" placeholder="What Are You Looking for?" />
							</form>
						</div>
						<div class="mid-grid-right">
							<a class="logo" href="index.html"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
				<!----start-bottom-header---->
				<div class="header-bottom">
					<div class="wrap">
					<!-- start header menu -->
							<ul class="megamenu skyblue">
								<li class="grid"><a class="color2" href="#">MEN</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>popular</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">login</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">man</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="#">accessories</a></li>
														<li><a href="#">kids</a></li>
														<li><a href="#">style videos</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>style zone</h4>
													<ul>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">brands</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>style zone</h4>
													<ul>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">brands</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1 men">
												<div class="men-pic">
													<img src="<?php echo IMG_URL; ?>men.png" title="" />
												</div>
											</div>
										</div>
									</div>
									</li>
					  			<li class="active grid"><a class="color4" href="#">women</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>shop</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">brands</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4>help</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>my company</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>												
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>account</h4>
													<ul>
														<li><a href="products.html">login</a></li>
														<li><a href="products.html">create an account</a></li>
														<li><a href="products.html">create wishlist</a></li>
														<li><a href="products.html">my shopping bag</a></li>
														<li><a href="products.html">brands</a></li>
														<li><a href="products.html">create wishlist</a></li>
													</ul>	
												</div>						
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>my company</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>popular</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1 women">
												<div class="women-pic">
													<img src="<?php echo IMG_URL; ?>women.png" title="" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col2"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
										</div>
					    				</div>
									</li>				
									<li><a class="color5" href="#">KIDS</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>popular</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">login</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">man</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>style zone</h4>
													<ul>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">brands</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1 kids">
												<div class="kids-pic">
													<img src="<?php echo IMG_URL; ?>kids1.png" title="" />
												</div>
											</div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
										</div>
									</div>
									</li>
									<li><a class="color6" href="#">SPORTS</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>shop</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">brands</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4 class="top">my company</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>												
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>man</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>						
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>help</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1 sports">
												<div class="sports-pic">
													<img src="<?php echo IMG_URL; ?>sport.png" title="" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col2"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
										</div>
									</div>
									</li>
									<li><a class="color7" href="#">NIKE SPORTSWEAR</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>shop</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">brands</a></li>
													</ul>	
												</div>		
												<div class="h_nav">
													<h4>my company</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>					
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>help</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>my company</h4>
													<ul>
														<li><a href="products.html">trends</a></li>
														<li><a href="products.html">sale</a></li>
														<li><a href="products.html">style videos</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>												
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>account</h4>
													<ul>
														<li><a href="products.html">login</a></li>
														<li><a href="products.html">create an account</a></li>
														<li><a href="products.html">create wishlist</a></li>
														<li><a href="products.html">my shopping bag</a></li>
														<li><a href="products.html">brands</a></li>
														<li><a href="products.html">create wishlist</a></li>
													</ul>	
												</div>						
											</div>
											<div class="col1 nike">
												<div class="nike-pic">
													<img src="<?php echo IMG_URL; ?>nike.png" title="" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col2"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
										</div>
					    				</div>
									</li>
									<li><a class="color8" href="#">NIKEiD</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>style zone</h4>
													<ul>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">women</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">brands</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>popular</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">men</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">login</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">man</h4>
													<ul>
														<li><a href="products.html">new arrivals</a></li>
														<li><a href="products.html">accessories</a></li>
														<li><a href="products.html">kids</a></li>
														<li><a href="products.html">style videos</a></li>
													</ul>	
												</div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
										</div>
									</div>
									</li>
							</ul>

					</div>
				</div>
				</div>
				<!----//End-bottom-header---->
			<!---//End-header---->
		<!--- start-content---->
<script> 
$(function(){ 
$(":input.required").each(function(){ 
var $required = $("<label>*</label>"); 
});
$(":input.required").click(function(){
$(this).removeAttr("placeholder");
});
$(":input.required").blur(function(){ 
//判断一下鼠标离开谁了 
if($(this).is("#username")){ 
$(".formtip").remove(); 
//按照用户名的规则去验证 
reg=/^[a-zA-Z][a-zA-Z0-9_]{3,15}$/;
if(this.value==""){ 
	$(this).attr('placeholder',"用户名已字母开头，长度为4-16");
}else if(!reg.test(this.value)){
	var errMsg = "<span class='formtip' ><font color='#FF0000'>用户名必须已字母开头，不能小于4个字符</font></span>";
	$(this).parent().append(errMsg);
}else{ 
var msg = "<span class='formtip'><img src='http://www.qqershou.com/Member/Img/ok_07.gif'></span>"; 
$(this).parent().append(msg); 
} 
} 
//判断一下如果是email的话,应该按照email的规则去验证 
if($(this).is("#me")){ 
$(".emailtip").remove(); 
//按照email的规则去验证 
var reg = /^\w{1,}@\w+\.\w+$/; 
var $email = $("#me").val();
if(this.value==""){ 
	$(this).attr('placeholder',"请输入有效的邮件地址");}
else if(!reg.test($email)){ 
var errMsg = "<span class='emailtip'><font color='#FF0000'>请输入正确的邮箱号码</font></span>"; 
$(this).parent().append(errMsg); 
}else{ 
var msg = "<span class='emailtip'><img src='http://www.qqershou.com/Member/Img/ok_07.gif'></span>";  
$(this).parent().append(msg); 
}
}
//判断电话
if(this.value==""){ 
	$(this).attr('placeholder',"请输入正确的手机号码");}
else if($(this).is("#phonenumber")){
	$(".numbertip").remove(); 
	var reg =/^1\d{10}$/
	if(!reg.test(this.value)){
	var errMsg = "<span class='numbertip' ><font color='#FF0000'>请输入正确的手机号码</font></span>"; 
	$(this).parent().append(errMsg); 
	}else{
	var msg = "<span class='numbertip'><img src='http://www.qqershou.com/Member/Img/ok_07.gif'></span>";  
	$(this).parent().append(msg);	
	}}
//判断密码

}); 
}) 
</script>	
		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>会员注册</h1>
					<div class="register-grids">
						<form> 
								<div class="register-top-grid">
										<div>
											<span >用户名<label>*</label></span>
											<input type="text" name="username" id="username" class="required" placeholder="用户名已字母开头，长度为4-16">
										</div>
										<div>
											<span>电子邮箱<label>*</label></span>
											<input type="text" name="email" id="me" class="required" placeholder="请输入有效的邮件地址"> 
										</div>
										<div>
											<span>手机号码<label>*</label></span>
											<input type="text" name="phonenumber" id="phonenumber" class="required" placeholder="请输入正确的手机号码"> 
										</div>
										
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<div>
											<span>密码<label>*</label></span>
											<input type="password" name="password" id="password" class="required" autocomplete="off" placeholder="密码长度必须为 6-20">
										</div>
										
										<div>
											<span>确认密码<label>*</label></span>
											<input type="password" name="confirm" id="confirm" class="required" autocomplete="off" placeholder="再次确认你的密码">
										</div>
										<div>
											<textarea class="textarea1" name="TK" style="width:99%" rows="10" readonly="">⒈ 二手网服务条款
二手网立足于商务，为客户提供全方位的服务。
二手网的各项电子服务的所有权和运作权归二手网所有。二手网提供的服务将完全按照其发布的章程、服务条款和操作规则严格执行。会员若完全同意所有服务条款，并完成注册程序，即可成为二手网的正式会员。
⒉ 基本条件
二手网以自己的操作系统，通过互联网络为会员提供网络服务。为此，会员须具备以下基本条件：
⑴　自行配备上网所需设备，包括电脑、调制解调器或其它必备上网装置。
⑵　自行负担商家上网所需支付的与此服务有关的电话费用、网络费用。
⒊ 服务条件
基于二手网提供的网络服务的商业性和时效性：
⑴　会员对其发布的信息负责，应提供详尽、真实、准确的商家资料，不得发布不真实的、有歧义的信息，绝对禁止发布误导性的、恶意的消息。
⑵　随时更新注册资料，以符合及时、详尽、准确的要求。
⑶　二手网向会员提供的会员帐号及密码只供会员使用。如果会员将帐号或密码丢失或被盗，应及时重新登记并重新设置密码。会员造成的帐号失密，应自行承担责任。
⑷　会员若发现二手网发布的信息不准确或发生错误，以及其它错误行为，应及时通知本网。若问题未能及时解决，可进入本网的投诉程序。
⑸　二手网向会员提供的商品信息之编辑、编制、传播的版权和知识产权，全部由二手网拥有；未经二手网事先以书面表示同意，任何人不得以各种形式复制、散布、出售、出版、广播、转播该商品信息。
⑹　二手网如发现会员提供的资料包含有不正确的信息，将发出警告，并保留停止或终止其会员资格的权利。
⑺　会员如违反本协议而造成二手网的经济损失，本网有权追究其经济责任与法律责任。
⒋ 会员权利与义务
会员的所有行为必须符合国家法律的规定。请仔细阅读“交易须知”中的有关条款，如违反国家法律规定和本协议，出现任何纠纷及不良结果，将由行为人独立承担所有责任。
会员可随时对二手网的服务提出批评、建议。
</textarea>
										</div>
								</div>
								<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>确认注册条款<font color="#FF0000">(注册时必须勾选)</font></label>
											</a>
										<div class="clear"> </div>
								<input type="submit" value="快速注册" />
						</form>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
        $(function () {
            $('input:password').keyup(function () {
                var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
                var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                var enoughRegex = new RegExp("(?=.{6,}).*", "g");

                $(".passtip").remove();
                if (false == enoughRegex.test($(this).val())) {
                	var msg = "<span class='passtip'><img src='<?php echo IMG_URL; ?>none.jpg'></span>";  
                	$(this).parent().append(msg);
                    //$('#passstrength').html('小于六位的时候'); //密码小于六位的时候，密码强度图片都为灰色
                }
                 else if (strongRegex.test($(this).val())) {
                	 var msg = "<span class='passtip'><img src='<?php echo IMG_URL; ?>strong.jpg'></span>";  
                 	$(this).parent().append(msg);                  
                    //$('#passstrength').html('强!');  //密码为八位及以上并且字母数字特殊字符三项都包括
                }
                else if (mediumRegex.test($(this).val())) {
                	 var msg = "<span class='passtip'><img src='<?php echo IMG_URL; ?>middle.jpg'></span>";  
                  	$(this).parent().append(msg);
                    //$('#passstrength').html('中!');  //密码为七位及以上并且字母、数字、特殊字符三项中有两项，强度是中等
                }
                 else {
                	 $(".formtip").remove();
                	 var msg = "<span class='passtip'><img src='<?php echo IMG_URL; ?>week.jpg'></span>";  
                   	$(this).parent().append(msg);
                    //$('#passstrength').html('弱!');   //如果密码为6为及以下，就算字母、数字、特殊字符三项都包括，强度也是弱的
                }
                return true;
            });
            
        })
    </script>
<script type="text/javascript">
var nowid;
var totalid;
var can1press = false;
var emailafter;
var emailbefor;
$(document).ready(function(){	
    $("#me").focus(function(){ //文本框获得焦点，插入Email提示层
        $("#myemail").remove();
	$(this).after("<div id='myemail' style='width:170px; height:auto; background:#fff; color:#6B6B6B; position:absolute; left:"+$(this).get(0).offsetLeft+"px; top:"+($(this).get(0).offsetTop+$(this).height()+2)+"px; border:1px solid #ccc;z-index:5px; '></div>");
        if($("#myemail").html()){
             $("#myemail").css("display","block");
	$(".newemail").css("width",$("#myemail").width());
		can1press = true;
        } else {
             $("#myemail").css("display","none");
		can1press = false;
        }		
    }).keyup(function(){ //文本框输入文字时，显示Email提示层和常用Email
		var press = $("#me").val();
		if (press!="" || press!=null){
		var emailtxt = "";			
		var emailvar = new Array("@163.com","@126.com","@yahoo.com","@qq.com","@sina.com","@gmail.com","@hotmail.com","@foxmail.com");
		totalid = emailvar.length;
			var emailmy = "<div class='newemail' style='width:170px; color:#6B6B6B; overflow:hidden;'><font color='#D33022'>" + press + "</font></div>";
			if(!(isEmail(press))){
			    for(var i=0; i<emailvar.length; i++) {
				    emailtxt = emailtxt + "<div class='newemail' style='width:170px; color:#6B6B6B; overflow:hidden;'><font color='#D33022'>" + press + "</font>" + emailvar[i] + "</div>"
			    }
			} else {
			    emailbefor = press.split("@")[0];
			    emailafter = "@" + press.split("@")[1];
			    for(var i=0; i<emailvar.length; i++) {
			         var theemail = emailvar[i];
			         if(theemail.indexOf(emailafter) == 0)
			         {
				         emailtxt = emailtxt + "<div class='newemail' style='width:170px; color:#6B6B6B; overflow:hidden;'><font color='#D33022'>" + emailbefor + "</font>" + emailvar[i] + "</div>"
				     }
			    }
			}
			$("#myemail").html(emailmy+emailtxt);
			if($("#myemail").html()){
				 $("#myemail").css("display","block");
				 $(".newemail").css("width",$("#myemail").width());
				 can1press = true;
			} else {
				 $("#myemail").css("display","none");
				 can1press = false;
			}
			beforepress = press;
		}
		if (press=="" || press==null){
		    $("#myemail").html("");		
		     $("#myemail").css("display","none");    
		}				
    })
	$(document).click(function(){ //文本框失焦时删除层
        if(can1press){
			$("#myemail").remove();
			can1press = false;	
			if($("#me").focus()){
			    can1press = false;
			}
		}
    })
    $(".newemail").live("mouseover",function(){ //鼠标经过提示Email时，高亮该条Email
        $(".newemail").css("background","#FFF");
        $(this).css("background","#CACACA");		
		$(this).focus();
		nowid = $(this).index();
    }).live("click",function(){ //鼠标点击Email时，文本框内容替换成该条Email，并删除提示层
        var newhtml = $(this).html();
        newhtml = newhtml.replace(/<.*?>/g,"");
        $("#me").val(newhtml); 
        $("#myemail").remove();
    })
	$(document).bind("keydown",function(e)  
	{     
		if(can1press){
			switch(e.which)     
			{            
				case 38:
				if (nowid > 0){		
					$(".newemail").css("background","#FFF");
					$(".newemail").eq(nowid).prev().css("background","#CACACA").focus();
					nowid = nowid-1;		
				}
				if(!nowid){
					nowid = 0;
					$(".newemail").css("background","#FFF");
					$(".newemail").eq(nowid).css("background","#CACACA");		
					$(".newemail").eq(nowid).focus();				
				}
				break;       
		
				case 40:
				if (nowid < totalid){				
					$(".newemail").css("background","#FFF");
					$(".newemail").eq(nowid).next().css("background","#CACACA").focus();	
					nowid = nowid+1;			
				}
				if(!nowid){
					nowid = 0;
					$(".newemail").css("background","#FFF");
					$(".newemail").eq(nowid).css("background","#CACACA");		
					$(".newemail").eq(nowid).focus();				
				}
				break;  
		
				case 13:
				var newhtml = $(".newemail").eq(nowid).html();
				newhtml = newhtml.replace(/<.*?>/g,"");
				$("#me").val(newhtml); 
				$("#myemail").remove();
			}
		}   
	})
}) 
//检查email邮箱
function isEmail(str){
    if(str.indexOf("@") > 0)     
    {     
        return true;
    } else {
        return false;
    }
}
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