<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link href="<?php echo CSS_URL; ?>pagination.css" rel='stylesheet' type='text/css' />
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
						<div class="mid-grid-left" style="padding-top:50px;">
							<form id="search" method="post"  action="<?php echo HOME;?>goods/products">
								<input id="sear" name="search"  type="search" value="<?php echo $_POST['search']; ?>" valplaceholder="请输入搜素文字" />	
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
														<li><a href="#">按摩器</a></li>
														<li><a href="#">压力锅</a></li>
														<li><a href="#">电吹风</a></li>
														<li><a href="#">吸尘器</a></li>
														<li><a href="#">电熨斗</a></li>
														<li><a href="#">太阳能/热水器</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="#">热水壶</a></li>
														<li><a href="#">家用搅拌机</a></li>
														<li><a href="#">果蔬解毒机</a></li>
														<li><a href="#">咖啡机/壶</a></li>
														<li><a href="#">家用净水器</a></li>
														<li><a href="#">消毒柜</a></li>
													</ul>	
												</div>
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4> &nbsp;</h4>
													<ul>
														<li><a href="#">微波炉/电烤箱</a></li>
														<li><a href="#">净水器/加湿器</a></li>
														<li><a href="#">电热杯</a></li>
														<li><a href="#">豆浆机</a></li>
														<li><a href="#">电饼铛</a></li>
														<li><a href="#">电磁炉</a></li>
													</ul>	
												</div>							
												<div class="h_nav">
													<h4 class="top"> &nbsp;</h4>
													<ul>
														<li><a href="#">冰箱/冷藏柜</a></li>
														<li><a href="#">电风扇</a></li>
														<li><a href="#">榨汁机/面包机</a></li>
														<li><a href="#">电视机</a></li>
														<li><a href="#">电饭煲</a></li>
														<li><a href="#">油烟机</a></li>
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
														<li><a href="#">音响</a></li>
														<li><a href="#">电脑附件</a></li>
														<li><a href="#">显示器</a></li>
														<li><a href="#">耳机</a></li>
														<li><a href="#">单片机</a></li>
														<li><a href="#">内存条</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="#">录音笔</a></li>
														<li><a href="#">小灵通</a></li>
														<li><a href="#">固定电话</a></li>
														<li><a href="#">数据线</a></li>
														<li><a href="#">手写笔</a></li>
														<li><a href="#">充电器</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="#">麦克风</a></li>
														<li><a href="#">学习机</a></li>
														<li><a href="#">移动硬盘</a></li>
														<li><a href="#">摄像头</a></li>
														<li><a href="#">U盘/内存卡</a></li>
														<li><a href="#">手机</a></li>
													</ul>	
												</div>												
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="#">MP3/MP4/MP5</a></li>
														<li><a href="#">照相机</a></li>
														<li><a href="#">打印机</a></li>
														<li><a href="#">复印机</a></li>
														<li><a href="#">台式电脑</a></li>
														<li><a href="#">笔记本</a></li>
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
														<li><a href="#">汽车配件</a></li>
														<li><a href="#">二手车</a></li>
														<li><a href="#">二手摩托车</a></li>
														<li><a href="#">牵引车</a></li>
														<li><a href="#">半挂车</a></li>
														<li><a href="#">电动车/自行车</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="#">内饰</a></li>
														<li><a href="#">外饰</a></li>
														<li><a href="#">GPS</a></li>
														<li><a href="#">保养</a></li>
														<li><a href="#">视听</a></li>
														<li><a href="#">其他</a></li>
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
														<li><a href="#">灯具</a></li>
														<li><a href="#">梳妆用品</a></li>
														<li><a href="#">沐浴用品</a></li>
														<li><a href="#">棋牌麻将</a></li>
														<li><a href="#">厨房用品</a></li>
														<li><a href="#">家纺</a></li>
													</ul>	
												</div>	
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="#">充气床</a></li>
														<li><a href="#">鞋柜</a></li>
														<li><a href="#">吧台</a></li>
														<li><a href="#">床头柜</a></li>
														<li><a href="#">视听柜</a></li>
														<li><a href="#">休闲桌</a></li>
													</ul>	
												</div>												
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="#">衣架/日用</a></li>
														<li><a href="#">沙发/座椅</a></li>
														<li><a href="#">电脑桌</a></li>
														<li><a href="#">床</a></li>
														<li><a href="#">茶具</a></li>
														<li><a href="#">梳妆台/首饰架</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="#">餐桌</a></li>
														<li><a href="#">窗帘/珠帘</a></li>
														<li><a href="#">清洁用品</a></li>
														<li><a href="#">手电筒</a></li>
														<li><a href="#">床垫</a></li>
														<li><a href="#">其他</a></li>
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
														<li><a href="#">设备耗材</a></li>
														<li><a href="#">办公电器</a></li>
														<li><a href="#">文件夹册</a></li>
														<li><a href="#">办公家具</a></li>
														<li><a href="#">商务用品</a></li>
														<li><a href="#">日用/劳保</a></li>
													</ul>	
												</div>		
												<div class="h_nav">
													<h4 class="top">&nbsp;</h4>
													<ul>
														<li><a href="#">装订用品</a></li>
														<li><a href="#">测绘用品</a></li>
														<li><a href="#">修正辅助</a></li>
														<li><a href="#">资料管理</a></li>
														<li><a href="#">桌面用品</a></li>
														<li><a href="#">记事本/簿</a></li>
													</ul>	
												</div>					
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4>&nbsp;</h4>
													<ul>
														<li><a href="#">财务用品</a></li>
														<li><a href="#">办公用笔</a></li>
														<li><a href="#">办公用纸</a></li>
														<li><a href="#">办公数码</a></li>
														<li><a href="#">办公设备</a></li>
														<li><a href="#">办公软件</a></li>
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
														<li><a href="#">户外服装</a></li>
														<li><a href="#">野营用品</a></li>
														<li><a href="#">探险用品</a></li>
														<li><a href="#">户外包</a></li>
														<li><a href="#">攀岩装备</a></li>
														<li><a href="#">望远镜</a></li>
													</ul>	
												</div>
												<div class="h_nav">
													<h4 class="top"><i class="icon-lifebuoy"></i>&nbsp;古董收藏</h4>
													<ul>
														<li><a href="#">趣味</a></li>
														<li><a href="#">收藏</a></li>
														<li><a href="#">古董</a></li>
														<li><a href="#">书画</a></li>
														<li><a href="#">邮票</a></li>
														<li><a href="#">纪念</a></li>
													</ul>	
												</div>							
											</div>
											<div class="col1">
												<div class="h_nav">
													<h4><i class="icon-guidedog"></i>&nbsp;宠物宝贝</h4>
													<ul>
														<li><a href="#">狗狗</a></li>
														<li><a href="#">猫咪</a></li>
														<li><a href="#">小鸟</a></li>
														<li><a href="#">宠物用品</a></li>
														<li><a href="#">宠物食粮</a></li>
														<li><a href="#">其他</a></li>
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
		<script type="text/javascript">
		$(function(){

		var color2=["家用电器","按摩器","压力锅","电吹风","吸尘器","电熨斗","太阳能/热水器","热水壶","家用搅拌机","果蔬解毒机","咖啡机/壶","家用净水器","消毒柜","微波炉/电烤箱","净水器/加湿器","电热杯","豆浆机","电饼铛","电磁炉","冰箱/冷藏柜","电风扇","榨汁机/面包机","电视机","电饭煲","油烟机"];
	var color4=["电脑数码","音响","电脑附件","显示器","耳机","单片机","内存条","录音笔","小灵通","固定电话","数据线","手写笔","充电器","麦克风","学习机","移动硬盘","摄像头","U盘/内存卡","手机","MP3/MP4/MP5","照相机","打印机","复印机","台式电脑","笔记本"];
	var color5=["汽车装饰","汽车配件","二手车","二手摩托车","牵引车","半挂车","电动车/自行车","内饰","外饰","GPS","保养","视听","其他"];
	var color6=["家居家饰","灯具","梳妆用品","沐浴用品","棋牌麻将","厨房用品","家纺","充气床","鞋柜","吧台","床头柜","视听柜","休闲桌","衣架/日用","沙发/座椅","电脑桌","床","茶具","梳妆台/首饰架","餐桌","窗帘/珠帘","清洁用品","手电筒","床垫","其他"];
	var color7=["办公用品","设备耗材","办公电器","文件夹册","办公家具","商务用品","日用/劳保","装订用品","测绘用品","修正辅助","资料管理","桌面用品","记事本/簿","财务用品","办公用笔","办公用纸","办公数码","办公设备","办公软件"];
	var color8=["其他分类","户外服装","野营用品","探险用品","户外包","攀岩装备","望远镜","趣味","收藏","古董","书画","邮票","纪念","狗狗","猫咪","小鸟","宠物用品","宠物食粮","其他"];
	
			var get ="<?php echo $_GET['class']; ?>";
			var obj = {a:color2,b:color4,c:color5,d:color6,e:color7,f:color8};
			if(get.length == "1"){
				$("#sort").append(obj.<?php echo $_GET['class']; ?>[0]);
				for(i=1;i<obj.<?php echo $_GET['class']; ?>.length;i++){
					var a ='<li><a class="category" href="">'+obj.<?php echo $_GET['class']; ?>[i]+'</a></li>';
					$("#products").append(a);
				}
			}else{
				for(var p in obj){
					if(obj[p].indexOf(get) != -1){
						$("#sort").append(obj[p][0]+"::<span style='color:#E45D5D'>"+get+"</span>");
						for(i=1;i<obj[p].length;i++){
								if(i == obj[p].indexOf(get)){
									var a ='<li><a class="category" style="color:#E45D5D" href="">'+obj[p][i]+'</a></li>';
								$("#products").append(a);
								}else{
									var a ='<li><a class="category" href="">'+obj[p][i]+'</a></li>';
								$("#products").append(a);
								}
						}
					}
				}
				
			}
			$(".category").click(function(){
		$(this).attr("href","<?php echo HOME;?>goods/products?class="+$(this).html())
	})
	$("#<?php echo $_GET['price']; ?>").css("color","#E45D5D");
});
		</script>
		<script type="text/javascript">
		$(function(){
			var get ="<?php echo $_GET['class']; ?>";
			if(get.length == 0){
				$(".product-box-head").remove();
				$(".content-left").remove();
				$(".product-grids").css("margin-top","50px");
				totle = "共搜索到<?php echo $totle; ?>件商品";
				$("#totle").append(totle);
			}
		})
		</script>
		<div class="content product-box-main">
			<div class="wrap">
				<div class="content-left">
					<div class="content-left-top-brands">
						<h3 style="width:200px" id="sort"></h3>
						<ul id="products">
						</ul>
					</div>
						
				</div>
				<div class="content-right product-box">
					<div class="product-box-head">
							<div class="product-box-head-left">
							</div>
							<div class="product-box-head-right">
								<ul>
									<li><a id="asc" href="/shop/products?class=<?php echo $_GET['class']; ?>&price=asc">价格从低到高</a></li>
									<li><a id="desc" href="/shop/products?class=<?php echo $_GET['class']; ?>&price=desc">价格从高到低</a></li>
								</ul>
							</div>
							<div class="clear"> </div>
					</div>
					<div id="totle" style="color:red"></div>
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
						<?php foreach ($goods as $key => $value) {?>
							
						<div onClick="location.href='<?php if(!session('username')){echo HOME.'user/login';}else{echo HOME.'goods/details?id='.$value[0];}?>';" <?php if($key == 2 || $key== 5 || $key ==8){ echo 'class="product-grid fade last-grid"'; }else{ echo 'class="product-grid fade"'; } ?>>
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (0)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href="#"><img style="width:240px;height:150px" src="<?php echo explode(" ", $value[12])[0]; ?>" title="product-name" /></a>
								<p>
								<a href="#" style="margin-top:5px;height:30px;" ><?php echo str_replace($search,"<font color='red'>".$search."</font>",$value[1]); ?></a>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">详细信息</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">￥ <?php echo $value[8] ?></a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<span> </span>
							</div>
						</div>
						<?php } ?>
						
						<div class="clear"> </div>
					</div>
					<!----start-load-more-products---->
					<div class="pagination pagination-large"><?php echo ($page); ?></div>
					<!----//End-load-more-products---->
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