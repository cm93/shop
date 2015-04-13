<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
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
		<script src="<?php echo JS_URL; ?>jquery.min.js"></script>
		<script src="<?php echo JS_URL; ?>jquery.fly.min.js"></script>
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
		<!-- Owl Carousel Assets -->
		<link href="<?php echo CSS_URL; ?>owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="<?php echo JS_URL; ?>owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 3,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="top-header" >
					<div class="wrap">
						<div class="top-header-left">
							<ul>
								<!---cart-tonggle-script---->
								<script type="text/javascript">
									$(function(){
										$("#del").click(function(){
											alert("hh");
										})
									})

								jQuery(function($) {
								var offset = $("#clickme").offset(); 
								 $("#fly").click(function(event){
								  var flyer=$('<i class="icon-basket" id="flying"></i>');
								  flyer.fly({ 
            start: { 
                left: event.pageX, //开始位置（必填）#fly元素会被设置成position: fixed 
                top: event.pageY //开始位置（必填） 
            }, 
            end: { 
                left: offset.left, //结束位置（必填） 
                top: offset.top, //结束位置（必填） 
                width: 80, //结束时宽度 
                height: 80 //结束时高度 
            }, 
            onEnd: function(){
            $('#flying').remove();
            } 
        });
			
		
    }); 
}); 
</script>
<script type="text/javascript">
	$(function(){
	$("#fly").one('click',function(){
   $.ajax({    
				    url:'./cart',
					data:{    
             image : $(".etalage_thumb_image").attr("src"),
             name : "<?php echo $data[4]; ?>",
             price : "<?php echo $data[8]; ?>",
             gid: "<?php echo $data[0]; ?>"
    },
				    cache:false,  
				    type:'post',  
				    dataType:'json',  
				    success:function(data) {
				    	$("#cart").empty();
				    	for (var i=0;i<data.length;i++)
{
	var imformation = '<div class="goods" style="margin-bottom:10px;"><img src="'+data[i][1]+'" style="width:66px;height:66px;"><a href="http://localhost/shop/home/goods/details?id='+data[i][6]+'" style="color:white;position:absolute;padding-left:10px;">'+data[i][2]+'</a><span class="deletegoods"  style="padding-left:10px;"><a id="del"  name="'+data[i][0]+'">删除</a><span style="margin-left:90px;">¥'+data[i][3]+'</span></span></div>'
	$("#cart").append(imformation);
}
cartlen();
$("#cart").append('<a href="#"><button type="button" class="btnn" style="background-color:gray;width:250px">去结账</button></a>')
				     }, 
				});
});
	function cartlen(){
		len = $(".goods").length;
		$("#clickme").append('<strong id="Num" style="display: block;position: absolute;left: 15px;padding: 0 4px;min-width: 8px;height: 16px;line-height: 14px;text-align: center;color: #fff;font-size: 11px;font-weight: 400;background: #F40;border-radius: 8px;">'+len+'</strong>');
		if(len == 0){
			$("#cart").empty().append("你的购物车是空的")
		}

	}

})


</script>
<script type="text/javascript">
</script>
								<!---//cart-tonggle-script---->
								<li><a class="cart" href="#"><span id="clickme"> </span></a></li>
								<!---start-cart-bag---->
								<div id="cart" style="position:absoulte;z-index:5555;">
								你的购物车是空的

								</div>
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
							<form id="search" method="post"  action="/shop/home/goods/products">
								<input id="sear" name="search"  type="search" placeholder="请输入搜素文字" />	
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
		<!--- start-content---->
		<div class="content details-page">
			<div class="product-details">
				<div class="wrap">
					<ul class="product-head">
						<li><a href="#"><?php echo $data[2] ?></a> <span>::</span></li>
						<li class="active-page"><a href="#"><?php echo $data[3] ?></a></li>
						<div class="clear"> </div>
					</ul>
				<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="<?php echo CSS_URL; ?>etalage.css">
					<script src="<?php echo JS_URL; ?>jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								source_image_width: 900,
								source_image_height: 1000,
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<div class="details-left">
					<div class="details-left-slider" style="height:200x;">
						<ul id="etalage">
						<?php
 if($data[12]){ $img = explode(' ',rtrim($data[12])); foreach ($img as $value) { echo '
							<li>
								<img class="etalage_thumb_image" src="'.$value.'"/>
								<img class="etalage_source_image" src="'.$value.'" />
							</li>'; } }else{ echo '
							<li>
								<img class="etalage_thumb_image" src="..."/>
								<img class="etalage_source_image" src="..." />
							</li>'; } ?>
							
						</ul>
					</div>
					<div class="details-left-info">
						<div class="details-right-head">
						<h1><?php echo $data[1];?></h1>
						<ul class="pro-rate">
							<li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
						</ul>
						<p class="product-detail-info">名称:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[4]; ?></p>
						<p class="product-detail-info">成色:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[5]; ?></p>
						<p class="product-detail-info">区域:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[15]; ?></p>
						<p class="product-detail-info">卖家:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[14]; ?></p>
						<p class="product-detail-info">联系:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[10]; ?>&nbsp;&nbsp;<?php echo $data[11]; ?></p>
						<p class="product-detail-info">数量:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[7]; ?></p>
						
						<a class="learn-more" href="#details"><h3>详细信息..</h3></a>
						<div class="product-more-details">
							<ul class="price-avl">
								<li class="price"><span>原价:¥<?php echo $data[6]; ?></span><label>二手价:¥<?php echo $data[8]; ?></label></li>
								<div class="clear"> </div>
							</ul>
							<!--
							<ul class="product-colors">
								<h3>available Colors ::</h3>
								<li><a class="color1" href="#"><span> </span></a></li>
								<li><a class="color2" href="#"><span> </span></a></li>
								<li><a class="color3" href="#"><span> </span></a></li>
								<li><a class="color4" href="#"><span> </span></a></li>
								<li><a class="color5" href="#"><span> </span></a></li>
								<li><a class="color6" href="#"><span> </span></a></li>
								<li><a class="color7" href="#"><span> </span></a></li>
								<li><a class="color8" href="#"><span> </span></a></li>
								<div class="clear"> </div>
							</ul>
							-->
							<div><a style="margin-left:300px;" href=""><button type="button" class="btnn">立即购买</button></a></div>
							<div><a style="margin-left:300px;" ><button type="button" class="btnn" id="fly"><i class="icon-basket" ></i>加入购物车</button></a></div>
							<script type="text/javascript">
								$(function(){
									$(".btnn").mouseover(function(){
										 $(this).css("background-color","#C80C06");
									}).mouseleave(function(){
										$(this).css("background-color","#d9534f");
									})
								})

							</script>
							<ul class="product-share">
								<h3>分享到</h3>
								<ul>
									<li><a class="share-face" href="#"><span> </span> </a></li>
									<li><a class="share-twitter" href="#"><span> </span> </a></li>
									<li><a class="share-google" href="#"><span> </span> </a></li>
									<li><a class="share-rss" href="#"><span> </span> </a></li>
									<div class="clear"> </div>
								</ul>
							</ul>
							<div style="color:gray;"><i class="icon-clock"></i>&nbsp;<?php echo $data[16]; ?></div>
							<div style="color:gray;"><i class=" icon-user"></i>&nbsp;0</span></div>
						</div>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="details-right">
				</div>
				<div class="clear"> </div>
			</div>
			<!----product-rewies---->
			<div class="product-reviwes">
				<div class="wrap">
				<!--vertical Tabs-script-->
				<!---responsive-tabs---->
					<script src="<?php echo JS_URL; ?>easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							 $('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true,   // 100% fit in a container
									closed: 'accordion', // Start closed if in accordion view
									activate: function(event) { // Callback function if tab is switched
									var $tab = $(this);
									var $info = $('#tabInfo');
									var $name = $('span', $info);
										$name.text($tab.text());
										$info.show();
									}
								});
													
							 $('#verticalTab').easyResponsiveTabs({
									type: 'vertical',
									width: 'auto',
									fit: true
								 });
						 });
					</script>
				<!---//responsive-tabs---->
				<!--//vertical Tabs-script-->
				<!--vertical Tabs-->
        		<div id="verticalTab">
		            <ul class="resp-tabs-list">
		                <li id="details">详细内容</li>
		                <li>顾客评论</li>
		            </ul>
		            <div class="resp-tabs-container vertical-tabs">
		                <div>
		                	<?php echo $data[13]; ?>
		                	<ul>
		                	<?php
 if($data[12]){ $img = explode(' ',rtrim($data[12])); foreach ($img as $value) { echo '
							<li>
								<img style="width:300px;height:300px;" src="'.$value.'"/>
							</li>'; } } ?>
						</ul>

		                </div>
		             
		                <div>
		                	<p>还没有人评论</p>
		                </div>
		            </div>
       		</div>
       		<div class="clear"> </div>

       		<div class="similar-products">
       			<div class="similar-products-left">
       				<h3>还有更多卖家在转让“<?php echo $data[3]; ?>”</h3>
       			</div>
       			<div class="similar-products-right">
       				
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
					       <div id="owl-demo" class="owl-carousel">
					       <?php foreach ($other as $key => $value) {?>
				                <div class="item" onclick="location.href='/shop/home/goods/details?id=<?php echo $value[0]; ?>';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img style="width:240px;height:150px" src="<?php echo explode(" ", $value[12])[0]; ?>" title="product-name" /></a>
											<p>
											<a href="#" style="margin-top:5px;height:30px;" ><?php echo $value[1]; ?></a>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">详细信息</a>
											</div>
											<div class="product-info-price">
												<a href="#">￥ <?php echo $value[8] ?></a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <?php } ?>
			              </div>
				<!----//End-img-cursual---->
       			</div>
       			<div class="clear"> </div>
       		</div>
       		<!--- //End-similar-products--->
			</div>
			</div>
			<div class="clear"> </div>
			<!--//vertical Tabs-->
			<!----//product-rewies---->
			<!---//End-product-details--->
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