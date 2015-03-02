<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
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
							<a class="logo" href="../index"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
<script type="text/javascript">
	$(function(){
		$("#all").change(function(e){
			if ($("#all").val() == "电脑数码"){
				$("#classlist").children().remove();
				var shuma=["音响","电脑附件","显示器"];
				for(var i=0;i<shuma.length;i++){
					$("#classlist").append("<option value='"+shuma[i]+"'>"+shuma[i]+"</option>")
				}
			}
			
		})
	})
</script>
		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>发布信息</h1>
					<div class="register-grids">
						<form action="./show" method="post"> 
								<div class="register-top-grid">
										<div>
											<span ><label>*</label>发布规则：</span>
											<span style="padding-left:75px;">1、内容【涉嫌广告】，物品描述含有网址，图片带有水印等；</span>
											<span style="padding-left:75px;">2、内容【违法违禁】，违背国家法律法规；</span>
											<span style="padding-left:75px;">3、没提供【实物照片】或是【虚拟物品】；</span>
											<span style="padding-left:75px;">4、【标题】【照片】与描述内容严重不符。</span>
										</div>
										<div id="selecter">
										<span ><label>*</label>选择分类：</span>
											 <select id="all" name="all" style="margin-left:75px;height:30px;border-color:#EEE;width:150px">
      											<option value="家用电器">家用电器</option>
										      	<option value="电脑数码">电脑数码</option>
										      	<option value="家居家饰">家居家饰</option>
										      	<option value="办公用品">办公用品</option>
										      	<option value="旅游运动">旅游运动</option>
										      	<option value="宠物宝贝">宠物宝贝</option>
										      	<option value="古董收藏">古董收藏</option>
										  	</select>
										  	<select id="classlist" name="classlist" style="margin-left:25px;height:30px;border-color:#EEE;width:150px">
      											<option value="按摩器">按摩器</option>
										      	<option value="压力锅">压力锅</option>
										      	<option value="电吹风">电吹风</option>
										      	<option value="吸尘器">吸尘器</option>
										      	<option value="电熨斗">电熨斗</option>
										      	<option value="太阳能/热水器">太阳能/热水器</option>
										      	<option value="热水壶">热水壶</option>
										      	<option value="家用搅拌机">家用搅拌机</option>
												<option value="果蔬解毒机">果蔬解毒机</option>
												<option value="咖啡机/壶">咖啡机/壶</option>
												<option value="家用净水器">家用净水器</option>
												<option value="消毒柜">消毒柜</option>
												<option value="微波炉/电烤箱">微波炉/电烤箱</option>
												<option value="净水器/加湿器">净水器/加湿器</option>
												<option value="电热杯">电热杯</option>
												<option value="豆浆机">豆浆机</option>
												<option value="电饼铛">电饼铛</option>
												<option value="电磁炉">电磁炉</option>
												<option value="冰箱/冷藏柜">冰箱/冷藏柜</option>
												<option value="电风扇">电风扇</option>
												<option value="榨汁机/面包机">榨汁机/面包机</option>
												<option value="电视机">电视机</option>
												<option value="电饭煲">电饭煲</option>
												<option value="油烟机">油烟机</option>
										  	</select>
										</div>
										<div>
											<span>手机号码<label>*</label></span>
											<input type="text" name="phonenumber" id="phonenumber" class="required" placeholder="请输入正确的手机号码" required="required"> 
										</div>
										<div class="classifyBox">
    <div id="classifyClick">
        <input type="text" id="cid1Text"/>
        <div class="arrowBorder">
            <div class="downArrow"></div>
        </div>    
    </div>
    <div id="classifyTree">
    </div>  
</div>
										
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<div>
											<span>密码<label>*</label></span>
											<input type="password" name="password" id="password" class="required" autocomplete="off" placeholder="密码长度必须为 6-20" required="required">
										</div>
										
										<div>
											<span>确认密码<label>*</label></span>
											<input type="password" name="confirm" id="confirm" class="required" autocomplete="off" placeholder="再次确认你的密码" required="required">
										</div>
								</div>
								<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" value="true" >确认注册条款<i id="check"> </i><font color="#FF0000">(注册时必须勾选)</font></label>
											</a>
										<div class="clear"> </div>
								<input type="submit" value="快速注册" id="sub"/>
						</form>
					</div>
				</div>
			</div>
		</div>
				
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