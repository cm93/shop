<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link href="<?php echo CSS_URL; ?>css/fontello.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo CSS_URL; ?>input.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo CSS_URL; ?>style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		
		<!----//webfonts---->
		<!----start-alert-scroller---->
		<script src="<?php echo JS_URL; ?>jquery.min.js"></script>
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
		<!---slider---->
		<link rel="stylesheet" href="<?php echo CSS_URL; ?>slippry.css">
		<script src="<?php echo JS_URL; ?>jquery-ui.js" type="text/javascript"></script>
		<script src="<?php echo JS_URL; ?>scripts-f0e4e0c2.js" type="text/javascript"></script>
		<script>
			  jQuery('#jquery-demo').slippry({
			  // general elements & wrapper
			  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			  // options
			  adaptiveHeight: false, // height of the sliders adapts to current slide
			  useCSS: false, // true, false -> fallback to js if no browser support
			  autoHover: false,
			  transition: 'fade'
			});
		</script>
		<!----start-pricerage-seletion---->
		<script type="text/javascript" src="<?php echo JS_URL; ?>jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>jquery-ui.css">
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function(){
			 $( "#slider-range" ).slider({
			            range: true,
			            min: 0,
			            max: 500,
			            values: [ 100, 400 ],
			            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			            }
			 });
			$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			
			});//]]>  
		</script>
		<!----//End-pricerage-seletion---->
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
						<div class="top-header-center" style="width:800px">
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
							<a class="logo" href="/shop/home/index"><span> </span></a>
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
														<li><a href="/shop/home/goods/products">按摩器</a></li>
														<li><a href="/shop/home/goods/products">压力锅</a></li>
														<li><a href="/shop/home/goods/products">电吹风</a></li>
														<li><a href="/shop/home/goods/products">吸尘器</a></li>
														<li><a href="/shop/home/goods/products">电熨斗</a></li>
														<li><a href="/shop/home/goods/products">太阳能/热水器</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">热水壶</a></li>
														<li><a href="/shop/home/goods/products">家用搅拌机</a></li>
														<li><a href="/shop/home/goods/products">果蔬解毒机</a></li>
														<li><a href="/shop/home/goods/products">咖啡机/壶</a></li>
														<li><a href="/shop/home/goods/products">家用净水器</a></li>
														<li><a href="/shop/home/goods/products">消毒柜</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4> &nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">微波炉/电烤箱</a></li>
														<li><a href="/shop/home/goods/products">净水器/加湿器</a></li>
														<li><a href="/shop/home/goods/products">电热杯</a></li>
														<li><a href="/shop/home/goods/products">豆浆机</a></li>
														<li><a href="/shop/home/goods/products">电饼铛</a></li>
														<li><a href="/shop/home/goods/products">电磁炉</a></li>
													</ul>	
												</div>							
												<div class="h_nav">
													<h4 class="top"> &nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">冰箱/冷藏柜</a></li>
														<li><a href="/shop/home/goods/products">电风扇</a></li>
														<li><a href="/shop/home/goods/products">榨汁机/面包机</a></li>
														<li><a href="/shop/home/goods/products">电视机</a></li>
														<li><a href="/shop/home/goods/products">电饭煲</a></li>
														<li><a href="/shop/home/goods/products">油烟机</a></li>
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
														<li><a href="/shop/home/goods/products">音响</a></li>
														<li><a href="/shop/home/goods/products">电脑附件</a></li>
														<li><a href="/shop/home/goods/products">显示器</a></li>
														<li><a href="/shop/home/goods/products">耳机</a></li>
														<li><a href="/shop/home/goods/products">单片机</a></li>
														<li><a href="/shop/home/goods/products">内存条</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">录音笔</a></li>
														<li><a href="/shop/home/goods/products">小灵通</a></li>
														<li><a href="/shop/home/goods/products">固定电话</a></li>
														<li><a href="/shop/home/goods/products">数据线</a></li>
														<li><a href="/shop/home/goods/products">手写笔</a></li>
														<li><a href="/shop/home/goods/products">充电器</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">麦克风</a></li>
														<li><a href="/shop/home/goods/products">学习机</a></li>
														<li><a href="/shop/home/goods/products">移动硬盘</a></li>
														<li><a href="/shop/home/goods/products">摄像头</a></li>
														<li><a href="/shop/home/goods/products">U盘/内存卡</a></li>
														<li><a href="/shop/home/goods/products">手机</a></li>
													</ul>	
												</div>												
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">MP3/MP4/MP5</a></li>
														<li><a href="/shop/home/goods/products">照相机</a></li>
														<li><a href="/shop/home/goods/products">打印机</a></li>
														<li><a href="/shop/home/goods/products">复印机</a></li>
														<li><a href="/shop/home/goods/products">台式电脑</a></li>
														<li><a href="/shop/home/goods/products">笔记本</a></li>
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
														<li><a href="/shop/home/goods/products">汽车配件</a></li>
														<li><a href="/shop/home/goods/products">二手车</a></li>
														<li><a href="/shop/home/goods/products">二手摩托车</a></li>
														<li><a href="/shop/home/goods/products">牵引车</a></li>
														<li><a href="/shop/home/goods/products">半挂车</a></li>
														<li><a href="/shop/home/goods/products">电动车/自行车</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">内饰</a></li>
														<li><a href="/shop/home/goods/products">外饰</a></li>
														<li><a href="/shop/home/goods/products">GPS</a></li>
														<li><a href="/shop/home/goods/products">保养</a></li>
														<li><a href="/shop/home/goods/products">视听</a></li>
														<li><a href="/shop/home/goods/products">其他</a></li>
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
														<li><a href="/shop/home/goods/products">灯具</a></li>
														<li><a href="/shop/home/goods/products">梳妆用品</a></li>
														<li><a href="/shop/home/goods/products">沐浴用品</a></li>
														<li><a href="/shop/home/goods/products">棋牌麻将</a></li>
														<li><a href="/shop/home/goods/products">厨房用品</a></li>
														<li><a href="/shop/home/goods/products">家纺</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">充气床</a></li>
														<li><a href="/shop/home/goods/products">鞋柜</a></li>
														<li><a href="/shop/home/goods/products">吧台</a></li>
														<li><a href="/shop/home/goods/products">床头柜</a></li>
														<li><a href="/shop/home/goods/products">视听柜</a></li>
														<li><a href="/shop/home/goods/products">休闲桌</a></li>
													</ul>	
												</div>												
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">衣架/日用</a></li>
														<li><a href="/shop/home/goods/products">沙发/座椅</a></li>
														<li><a href="/shop/home/goods/products">电脑桌</a></li>
														<li><a href="/shop/home/goods/products">床</a></li>
														<li><a href="/shop/home/goods/products">茶具</a></li>
														<li><a href="/shop/home/goods/products">梳妆台/首饰架</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">餐桌</a></li>
														<li><a href="/shop/home/goods/products">窗帘/珠帘</a></li>
														<li><a href="/shop/home/goods/products">清洁用品</a></li>
														<li><a href="/shop/home/goods/products">手电筒</a></li>
														<li><a href="/shop/home/goods/products">床垫</a></li>
														<li><a href="/shop/home/goods/products">其他</a></li>
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
														<li><a href="/shop/home/goods/products">设备耗材</a></li>
														<li><a href="/shop/home/goods/products">办公电器</a></li>
														<li><a href="/shop/home/goods/products">文件夹册</a></li>
														<li><a href="/shop/home/goods/products">办公家具</a></li>
														<li><a href="/shop/home/goods/products">商务用品</a></li>
														<li><a href="/shop/home/goods/products">日用/劳保</a></li>
													</ul>	
												</div>		
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">装订用品</a></li>
														<li><a href="/shop/home/goods/products">测绘用品</a></li>
														<li><a href="/shop/home/goods/products">修正辅助</a></li>
														<li><a href="/shop/home/goods/products">资料管理</a></li>
														<li><a href="/shop/home/goods/products">桌面用品</a></li>
														<li><a href="/shop/home/goods/products">记事本/簿</a></li>
													</ul>	
												</div>					
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="/shop/home/goods/products">财务用品</a></li>
														<li><a href="/shop/home/goods/products">办公用笔</a></li>
														<li><a href="/shop/home/goods/products">办公用纸</a></li>
														<li><a href="/shop/home/goods/products">办公数码</a></li>
														<li><a href="/shop/home/goods/products">办公设备</a></li>
														<li><a href="/shop/home/goods/products">办公软件</a></li>
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
														<li><a href="/shop/home/goods/products">户外服装</a></li>
														<li><a href="/shop/home/goods/products">野营用品</a></li>
														<li><a href="/shop/home/goods/products">探险用品</a></li>
														<li><a href="/shop/home/goods/products">户外包</a></li>
														<li><a href="/shop/home/goods/products">攀岩装备</a></li>
														<li><a href="/shop/home/goods/products">望远镜</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top"><i class="icon-lifebuoy"></i>&nbsp;古董收藏</h4>
													<ul>
														<li><a href="/shop/home/goods/products">趣味</a></li>
														<li><a href="/shop/home/goods/products">收藏</a></li>
														<li><a href="/shop/home/goods/products">古董</a></li>
														<li><a href="/shop/home/goods/products">书画</a></li>
														<li><a href="/shop/home/goods/products">邮票</a></li>
														<li><a href="/shop/home/goods/products">纪念</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4><i class="icon-guidedog"></i>&nbsp;宠物宝贝</h4>
													<ul>
														<li><a href="/shop/home/goods/products">狗狗</a></li>
														<li><a href="/shop/home/goods/products">猫咪</a></li>
														<li><a href="/shop/home/goods/products">小鸟</a></li>
														<li><a href="/shop/home/goods/products">宠物用品</a></li>
														<li><a href="/shop/home/goods/products">宠物食粮</a></li>
														<li><a href="/shop/home/goods/products">其他</a></li>
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
		<div class="img-slider">
			<div class="wrap">
			<ul id="jquery-demo">
			  <li>
			    <a target="_blank" href="http://www.taobao.com/market/2015dacu/game-hc.php?spm=2007.1000261.638273021.2.YKzMWW">
			      <img style="width:800px;height:400px; margin:50px 0 50px 0" src="<?php echo IMG_URL; ?>cheap.png" alt="" />
			    </a>
			    <div class="slider-detils">
			    	<a class="slide-btn" href="/shop/home/goods/release" ><span>处理闲置<i style="font-size:18px;color:green;" class="icon-right-dir"></i></span></a>
			   		<a class="slide-btn" href="/shop/home/goods/details" ><span>发布信息<i style="font-size:18px;color:green;" class="icon-right-dir"></i></span></a>
			    </div>
			  </li>
			  <li>
			    <a target="_blank" href="http://sz.58.com/pingguo.shtml">
			      <img style="width:800px;height:400px; margin:50px 0 50px 0" src="<?php echo IMG_URL; ?>apple.png"  alt="" />
			    </a>
			     <div class="slider-detils">
			    	<a class="slide-btn" href="/shop/home/goods/release" ><span>处理闲置<i style="font-size:18px;color:green;" class="icon-right-dir"></i></span></a>
			   		<a class="slide-btn" href="/shop/home/goods/details" ><span>发布信息<i style="font-size:18px;color:green;" class="icon-right-dir"></i></span></a>
			    </div>
			  </li>
			  <li>
			    <a target="_blank" href="http://hi.taobao.com/market/hi/detail2014.php?spm=2007.1000261.638273021.3.YKzMWW&id=11914">
			      <img style="width:800px;height:400px; margin:50px 0 50px 0"  src="<?php echo IMG_URL; ?>baby.png" alt="" />
			    </a>
			     <div class="slider-detils">
			    	<a class="slide-btn" href="/shop/home/goods/release" ><span>处理闲置<i style="font-size:18px;color:green;" class="icon-right-dir"></i></span></a>
			   		<a class="slide-btn" href="/shop/home/goods/details" ><span>发布信息<i style="font-size:18px;color:green;" class="icon-right-dir"></i></span></a>
			    </div>
			  </li>
			</ul>
			</div>
		</div>
		<div class="clear"> </div>
		<!----//End-image-slider---->
		<!----start-price-rage--->
		<div class="wrap">
			<div class="price-rage">
				<div id="slider-range">
				</div>
			</div>
		</div>
		<!----//End-price-rage--->
		<!--- start-content---->
		<div class="content">
			<div class="wrap">
				<div class="content-left">
						<div class="content-left-top-grid">
							<div class="content-left-price-selection">
								<h4>Select Price:</h4>
								<div class="price-selection-tree">
									<span class="col_checkbox">
										<input id="10" class="css-checkbox10" type="checkbox">
										<label class="normal"><i for="10" name="demo_lbl_10"  class="css-label10"> </i> 400</label>
									</span>
									<span class="col_checkbox">
										<input id="11" class="css-checkbox11" type="checkbox">
										<label class="active1"><i for="11" name="demo_lbl_11"  class="css-label11"> </i>350</label>
									</span>
									<span class="col_checkbox">
										<input id="12" class="css-checkbox12" type="checkbox">
										<label class="normal"><i for="12" name="demo_lbl_12"  class="css-label12"> </i> 300</label>
									</span>
									<span class="col_checkbox">
										<input id="13" class="css-checkbox13" type="checkbox">
										<label class="normal"><i for="13" name="demo_lbl_13"  class="css-label13"> </i>250</label>
									</span>
									<span class="col_checkbox">
										<input id="14" class="css-checkbox14" type="checkbox">
										<label class="normal"><i for="14" name="demo_lbl_14"  class="css-label14"> </i> 200</label>
									</span>
									<span class="col_checkbox">
										<input id="15" class="css-checkbox15" type="checkbox">
										<label class="normal"><i for="15" name="demo_lbl_15"  class="css-label15"> </i>150</label>
									</span>
								</div>
								
						</div>
						</div>
						<div class="content-left-bottom-grid">
							<h4>Boys Football:</h4>
							<div class="content-left-bottom-grids">
								<div class="content-left-bottom-grid1">
									<img src="<?php echo IMG_URL; ?>foot-ball.jpg" title="football" />
									<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
									<span> Football</span>
									<label>&#163; 375</label>
								</div>
								<div class="content-left-bottom-grid1">
									<img src="<?php echo IMG_URL; ?>jarse.jpg" title="jarse" />
									<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
									<span> Football</span>
									<label>&#163; 375</label>
								</div>
							</div>
						</div>
				</div>
				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<script src="<?php echo JS_URL; ?>jstarbox.js"></script>
							<link rel="stylesheet" href="<?php echo CSS_URL; ?>jstarbox.css" type="text/css" media="screen" charset="utf-8" />
							<script type="text/javascript">
								jQuery(function() {
									jQuery('.starbox').each(function() {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function(event, value) {
											if(starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' '+val);
												return val;
											} 
										})
									});
								});
							</script>
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
						<div onClick="location.href='details.html';" class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="<?php echo IMG_URL; ?>product2.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 380</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onClick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="<?php echo IMG_URL; ?>product1.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 375</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onClick="location.href='details.html';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="<?php echo IMG_URL; ?>product3.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 350</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onClick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="<?php echo IMG_URL; ?>product4.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 370</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onClick="location.href='details.html';"  class="product-grid fade">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="<?php echo IMG_URL; ?>product5.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 355</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div onClick="location.href='details.html';"  class="product-grid fade last-grid">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img src="<?php echo IMG_URL; ?>product6.jpg" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span>Men's Firm-Ground Football Boot</span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">&#163; 390</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
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