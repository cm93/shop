<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link href="<?php echo CSS_URL; ?>css/fontello.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo CSS_URL; ?>input.css" rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=kAXgZwzRM2TtOln0LcZ31Kll"></script>
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
						<div class="top-header-center" style="width:750px">
							<div class="top-header-center-alert-left">
								<h3>FREE DELIVERY</h3>
							</div>
							<div class="top-header-center-alert-right" >
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
				$(".top-header-right").append('<ul><li><a href="/shop/home/user/login">登录</a><span> </span></li><li><a href="/shop/home/user/register">注册</a></li></ul>')
			}else{
				html = "<ul ><li>欢迎会员:</li><li><font color='#FF0000'>"+username+"</font></li></ul><ul><li>[<a href='/shop/home/index/member'>用户中心</a>,<a href='/shop/home/user/logout'>退出</a>]<li></ul>";
				$(".top-header-right").append(html);
			}
		})
		
	</script>
				<!----start-mid-head---->
				<div class="mid-header">
					<div class="wrap">
						<div class="mid-grid-left" style="padding-top:50px;">
							<form method="post" action="#">
								<input type="search" placeholder="请输入搜素文字" />	
							</form>
						</div>
						<div class="mid-grid-right">
							<a class="logo" href="../index"><span> </span></a>
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
								<li class="grid"><a class="color2" href="#"><i class="icon-monitor"></i>&nbsp;家用电器</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4> &nbsp;</h4>
													<ul>
														<li><a href="../goods/products">按摩器</a></li>
														<li><a href="../goods/products">压力锅</a></li>
														<li><a href="../goods/products">电吹风</a></li>
														<li><a href="../goods/products">吸尘器</a></li>
														<li><a href="../goods/products">电熨斗</a></li>
														<li><a href="../goods/products">太阳能/热水器</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">热水壶</a></li>
														<li><a href="../goods/products">家用搅拌机</a></li>
														<li><a href="../goods/products">果蔬解毒机</a></li>
														<li><a href="../goods/products">咖啡机/壶</a></li>
														<li><a href="../goods/products">家用净水器</a></li>
														<li><a href="../goods/products">消毒柜</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4> &nbsp;</h4>
													<ul>
														<li><a href="../goods/products">微波炉/电烤箱</a></li>
														<li><a href="../goods/products">净水器/加湿器</a></li>
														<li><a href="../goods/products">电热杯</a></li>
														<li><a href="../goods/products">豆浆机</a></li>
														<li><a href="../goods/products">电饼铛</a></li>
														<li><a href="../goods/products">电磁炉</a></li>
													</ul>	
												</div>							
												<div class="h_nav">
													<h4 class="top"> &nbsp;</h4>
													<ul>
														<li><a href="../goods/products">冰箱/冷藏柜</a></li>
														<li><a href="../goods/products">电风扇</a></li>
														<li><a href="../goods/products">榨汁机/面包机</a></li>
														<li><a href="../goods/products">电视机</a></li>
														<li><a href="../goods/products">电饭煲</a></li>
														<li><a href="../goods/products">油烟机</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1 men">
												<div class="men-pic">
													<img style="width:350px;height:400px" src="<?php echo IMG_URL; ?>dianqi.jpg" title="" />
												</div>
											</div>
										</div>
									</div>
									</li>
					  			<li class="active grid"><a class="color4" href="#"><i class="icon-camera"></i>&nbsp;电脑数码</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">音响</a></li>
														<li><a href="../goods/products">电脑附件</a></li>
														<li><a href="../goods/products">显示器</a></li>
														<li><a href="../goods/products">耳机</a></li>
														<li><a href="../goods/products">单片机</a></li>
														<li><a href="../goods/products">内存条</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">录音笔</a></li>
														<li><a href="../goods/products">小灵通</a></li>
														<li><a href="../goods/products">固定电话</a></li>
														<li><a href="../goods/products">数据线</a></li>
														<li><a href="../goods/products">手写笔</a></li>
														<li><a href="../goods/products">充电器</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">麦克风</a></li>
														<li><a href="../goods/products">学习机</a></li>
														<li><a href="../goods/products">移动硬盘</a></li>
														<li><a href="../goods/products">摄像头</a></li>
														<li><a href="../goods/products">U盘/内存卡</a></li>
														<li><a href="../goods/products">手机</a></li>
													</ul>	
												</div>												
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">MP3/MP4/MP5</a></li>
														<li><a href="../goods/products">照相机</a></li>
														<li><a href="../goods/products">打印机</a></li>
														<li><a href="../goods/products">复印机</a></li>
														<li><a href="../goods/products">台式电脑</a></li>
														<li><a href="../goods/products">笔记本</a></li>
													</ul>	
												</div>						
											</div>
											<div class="col1 men">
												<div class="men-pic">
													<img style="width:400px;height:400px" src="<?php echo IMG_URL; ?>shuma.png" title="" />
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
									<li><a class="color5" href="#"><i class="icon-cab"></i>&nbsp;汽车装饰</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">汽车配件</a></li>
														<li><a href="../goods/products">二手车</a></li>
														<li><a href="../goods/products">二手摩托车</a></li>
														<li><a href="../goods/products">牵引车</a></li>
														<li><a href="../goods/products">半挂车</a></li>
														<li><a href="../goods/products">电动车/自行车</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">内饰</a></li>
														<li><a href="../goods/products">外饰</a></li>
														<li><a href="../goods/products">GPS</a></li>
														<li><a href="../goods/products">保养</a></li>
														<li><a href="../goods/products">视听</a></li>
														<li><a href="../goods/products">其他</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1">
												<div class="h_nav">
												</div>
											</div>
											<div class="col1 men">
												<div class="men-pic">
													<img style="width:400px;height:200px" src="<?php echo IMG_URL; ?>car.png" title="" />
												</div>
											</div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
											<div class="col1"></div>
										</div>
									</div>
									</li>
									<li><a class="color6" href="#"><i class="icon-home" style="font-size:17px;"></i>&nbsp;家居家饰</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">灯具</a></li>
														<li><a href="../goods/products">梳妆用品</a></li>
														<li><a href="../goods/products">沐浴用品</a></li>
														<li><a href="../goods/products">棋牌麻将</a></li>
														<li><a href="../goods/products">厨房用品</a></li>
														<li><a href="../goods/products">家纺</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">充气床</a></li>
														<li><a href="../goods/products">鞋柜</a></li>
														<li><a href="../goods/products">吧台</a></li>
														<li><a href="../goods/products">床头柜</a></li>
														<li><a href="../goods/products">视听柜</a></li>
														<li><a href="../goods/products">休闲桌</a></li>
													</ul>	
												</div>												
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">衣架/日用</a></li>
														<li><a href="../goods/products">沙发/座椅</a></li>
														<li><a href="../goods/products">电脑桌</a></li>
														<li><a href="../goods/products">床</a></li>
														<li><a href="../goods/products">茶具</a></li>
														<li><a href="../goods/products">梳妆台/首饰架</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">餐桌</a></li>
														<li><a href="../goods/products">窗帘/珠帘</a></li>
														<li><a href="../goods/products">清洁用品</a></li>
														<li><a href="../goods/products">手电筒</a></li>
														<li><a href="../goods/products">床垫</a></li>
														<li><a href="../goods/products">其他</a></li>
													</ul>	
												</div>						
											</div>
											<div class="col1 men">
												<div class="men-pic">
													<img style="width:500px;height:350px" src="<?php echo IMG_URL; ?>jiaju.png" title="" />
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
									<li><a class="color7" href="#"><i class="icon-fax"></i>&nbsp;办公用品</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">设备耗材</a></li>
														<li><a href="../goods/products">办公电器</a></li>
														<li><a href="../goods/products">文件夹册</a></li>
														<li><a href="../goods/products">办公家具</a></li>
														<li><a href="../goods/products">商务用品</a></li>
														<li><a href="../goods/products">日用/劳保</a></li>
													</ul>	
												</div>		
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">装订用品</a></li>
														<li><a href="../goods/products">测绘用品</a></li>
														<li><a href="../goods/products">修正辅助</a></li>
														<li><a href="../goods/products">资料管理</a></li>
														<li><a href="../goods/products">桌面用品</a></li>
														<li><a href="../goods/products">记事本/簿</a></li>
													</ul>	
												</div>					
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="../goods/products">财务用品</a></li>
														<li><a href="../goods/products">办公用笔</a></li>
														<li><a href="../goods/products">办公用纸</a></li>
														<li><a href="../goods/products">办公数码</a></li>
														<li><a href="../goods/products">办公设备</a></li>
														<li><a href="../goods/products">办公软件</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1 men">
												<div class="men-pic">
													<img style="width:500px;height:350px" src="<?php echo IMG_URL; ?>bangong.jpg" title="" />
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
									<li><a class="color8" href="#"><i class="icon-spin4 animate-spin"></i>&nbsp;其他分类</a>
									<div class="megapanel">
										<div class="row">
											<div class="col1">
												<div class="h_nav">
													<h4><i class="icon-soccer-ball"></i>&nbsp;旅游运动</h4>
													<ul>
														<li><a href="../goods/products">户外服装</a></li>
														<li><a href="../goods/products">野营用品</a></li>
														<li><a href="../goods/products">探险用品</a></li>
														<li><a href="../goods/products">户外包</a></li>
														<li><a href="../goods/products">攀岩装备</a></li>
														<li><a href="../goods/products">望远镜</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top"><i class="icon-lifebuoy"></i>&nbsp;古董收藏</h4>
													<ul>
														<li><a href="../goods/products">趣味</a></li>
														<li><a href="../goods/products">收藏</a></li>
														<li><a href="../goods/products">古董</a></li>
														<li><a href="../goods/products">书画</a></li>
														<li><a href="../goods/products">邮票</a></li>
														<li><a href="../goods/products">纪念</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4><i class="icon-guidedog"></i>&nbsp;宠物宝贝</h4>
													<ul>
														<li><a href="../goods/products">狗狗</a></li>
														<li><a href="../goods/products">猫咪</a></li>
														<li><a href="../goods/products">小鸟</a></li>
														<li><a href="../goods/products">宠物用品</a></li>
														<li><a href="../goods/products">宠物食粮</a></li>
														<li><a href="../goods/products">其他</a></li>
													</ul>	
												</div>
										</div>
									</div>
									</div>
									</li>
									
									
							</ul>

					</div>
				</div>
				</div>
				<!----//End-bottom-header---->
			<!---//End-header---->
		<!----start-image-slider---->
		<div class="content contact-main">
			<!----start-contact---->
			<div class="contact-info">
					<div class="map">
					 	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
					 </div>
					 <div class="wrap">
					 <div class="contact-grids">
							 <div class="col_1_of_bottom span_1_of_first1">
								    <h5>Address</h5>
								    <ul class="list3">
										<li>
											<img src="<?php echo IMG_URL; ?>home.png" alt="">
											<div class="extra-wrap">
											 <p>Lorem ipsum  consectetu,<br>dolor sit amet,.</p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="col_1_of_bottom span_1_of_first1">
								    <h5>Phones</h5>
									<ul class="list3">
										<li>
											   <img src="<?php echo IMG_URL; ?>phone.png" alt="">
											<div class="extra-wrap">
												<p><span>Telephone:</span>+1 800 258 2598</p>
											</div>
												<img src="<?php echo IMG_URL; ?>fax.png" alt="">
											<div class="extra-wrap">
												<p><span>FAX:</span>+1 800 589 2587</p>
											</div>
										</li>
									</ul>
								</div>
								<div class="col_1_of_bottom span_1_of_first1">
									 <h5>Email</h5>
								    <ul class="list3">
										<li>
											<img src="<?php echo IMG_URL; ?>email.png" alt="">
											<div class="extra-wrap">
											  <p><span class="mail"><a href="mailto:yoursite.com">info(at)spikeshoe.com</a></span></p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="clear"></div>
					 </div>
					 	<form method="post" action="contact-post.html">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
								 	<input type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
								 	<input type="text" class="text" value="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject...';}">
								</div>
								<div class="text2">
				                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
				                </div>
				               <span><input type="submit" class="" value="Submit"></span>
				                <div class="clear"></div>
				               </div>
				           </form>
							</div>
			</div>
			<!----//End-contact---->
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