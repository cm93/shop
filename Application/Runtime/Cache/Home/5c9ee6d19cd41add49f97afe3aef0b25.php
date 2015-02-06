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
									 <li>Applies to orders of $50 or more. <label>Returns are always free.</label></li>
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
		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>LOGIN OR CREATE AN ACCOUNT</h1>
					<div class="login-left">
						<h3>NEW CUSTOMERS</h3>
						<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
						<a class="acount-btn" href="register.html">Creat an Account</a>
					</div>
					<div class="login-right">
						<h3>REGISTERED CUSTOMERS</h3>
						<p>If you have an account with us, please log in.</p>
						<form>
							<div>
								<span>Email Address<label>*</label></span>
								<input type="text"> 
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input type="text"> 
							</div>
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login" />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
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