<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
    <script type="text/javascript" src="/shop/Public/ume/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/shop/Public/ume/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/shop/Public/ume/umeditor.min.js"></script>
    <script type="text/javascript" src="/shop/Public/ume/lang/zh-cn/zh-cn.js"></script>
    

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
				var fenlei=["音响","电脑附件","显示器","耳机","单片机","内存条","录音笔","小灵通","固定电话","数据线","手写笔","充电器","麦克风","学习机","移动硬盘","摄像头","U盘/内存卡","手机","MP3/MP4/MP5","照相机","打印机","复印机","台式电脑","笔记本"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
				}
			}else if($("#all").val() == "汽车装饰"){
				$("#classlist").children().remove();
				var fenlei=["汽车配件","二手车","二手摩托车","牵引车","半挂车","电动车/自行车","内饰","外饰","GPS","保养","视听","其他"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
				}
			}else if($("#all").val() == "家居家饰"){
				$("#classlist").children().remove();
				var fenlei=["灯具","梳妆用品","沐浴用品","棋牌麻将","厨房用品","家纺","充气床","鞋柜","吧台","床头柜","视听柜","休闲桌","衣架/日用","沙发/座椅","电脑桌","床","茶具","梳妆台/首饰架","餐桌","窗帘/珠帘","清洁用品","手电筒","床垫","其他"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
				}
			}else if($("#all").val() == "办公用品"){
				$("#classlist").children().remove();
				var fenlei=["设备耗材","办公电器","文件夹册","办公家具","商务用品","日用/劳保","装订用品","测绘用品","修正辅助","资料管理","桌面用品","记事本/簿","财务用品","办公用笔","办公用纸","办公数码","办公设备","办公软件"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
				}
			}else if($("#all").val() == "旅游运动"){
				$("#classlist").children().remove();
				var fenlei=["户外服装","野营用品","探险用品","户外包","攀岩装备","望远镜"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
				}
			}else if($("#all").val() == "古董收藏"){
				$("#classlist").children().remove();
				var fenlei=["趣味","收藏","古董","书画","邮票","纪念"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
				}
			}else if($("#all").val() == "宠物宝贝"){
				$("#classlist").children().remove();
				var fenlei=["狗狗","猫咪","小鸟","宠物用品","宠物食粮","其他"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
				}
			}else if($("#all").val() == "家用电器"){
				$("#classlist").children().remove();
				var fenlei=["家用电器","按摩器","压力锅","电吹风","吸尘器","电熨斗","太阳能/热水器","热水壶","家用搅拌机","果蔬解毒机","咖啡机/壶","家用净水器","消毒柜","微波炉/电烤箱","净水器/加湿器","电热杯","豆浆机","电饼铛","电磁炉","冰箱/冷藏柜","电风扇","榨汁机/面包机","电视机","电饭煲","油烟机"];
				for(var i=0;i<fenlei.length;i++){
					$("#classlist").append("<option value='"+fenlei[i]+"'>"+fenlei[i]+"</option>")
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
						<form action="" method="post" enctype="multipart/form-data" id="imgform" > 
								<div class="register-top-grid">
										<div>
											<span ><label>*</label>发布规则：</span>
											<span style="padding-left:75px;">1、内容【涉嫌广告】，物品描述含有网址，图片带有水印等；</span>
											<span style="padding-left:75px;">2、内容【违法违禁】，违背国家法律法规；</span>
											<span style="padding-left:75px;">3、没提供【实物照片】或是【虚拟物品】；</span>
											<span style="padding-left:75px;">4、【标题】【照片】与描述内容严重不符。</span>
										</div>
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
											<span ><label>*</label>物品名称：</span>
											<input type="text" name="name" id="name" class="required"  required="required"> 
										</div>
										<div>
											<span ><label>*</label>新旧程度：</span>
											<select id="new" name="new" style="margin-left:75px;height:30px;border-color:#EEE;width:150px">
      											<option value="全新">全新</option>
										      	<option value="九成新">九成新</option>
										      	<option value="八成新">八成新</option>
										      	<option value="压力锅">七成新</option>
										      	<option value="七成新">六成新</option>
										      	<option value="五成新">五成新</option>
										      	<option value="很旧了">很旧了</option>
										      	
										    </select>请如实选择新旧程度，避勉不必要的纠纷
										</div>
										<div>
											<span ><label>*</label>物品原价：</span>
											<input type="text" name="price" id="price" class="required"  required="required" onkeyup="value=value.replace(/[^\d]/g,'')" style="width:100px;margin-left:75px;text-align:right"> 元
										</div>
										<div>
											<span ><label>*</label>二手价格：</span>
											<input type="text" name="newprice" id="newprice" class="required"  required="required" onkeyup="value=value.replace(/[^\d]/g,'')" style="width:100px;margin-left:75px;text-align:right"> 元
										</div>
										<div>
											<span ><label>*</label>运费：</span>
											<input type="text" name="sendprice" id="sendprice" class="required"  required="required" onkeyup="value=value.replace(/[^\d]/g,'')" style="width:100px;margin-left:75px;text-align:right"> 元
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
											<span ><label></label>物品数量：</span>
											<input type="text" name="sum" id="sum" class="required"  required="required" onkeyup="value=value.replace(/[^\d]/g,'')" style="width:100px;margin-left:75px;text-align:right" value="1"> 
										</div>
										<div>
											<span ><label>*</label>物品图片：</span>
											<input type="file" id="image1" value="游览" name="image1" onchange="uploadImg()" style="margin-left:75px;">
										</div>
										<div id="imgshow"></div>
										<div>
											<span ><label>*</label>物品描述：</span>
											
										</div>
										<iframe src="http://localhost/shop/public/ume/" style="width:1050px;height:320px;" name="describe" scrolling="no" id="describe">
										</iframe>
										<input type="hidden" name="area" value="<?php print_r($area);?>">
										<input type="submit" value="快速发布" id="sub" style="margin-left:75px;"/>
						</form>
						<iframe style="display:none" name='hidden_frame' id="hidden_frame"></iframe>
					</div>
				</div>
			</div>
		</div>

<script type="text/javascript">
function uploadImg() {
	if($(".row").length>=5){
		alert("最多上传5张");
		return;
	}else{
	$("#imgform").attr("action","/shop/index.php/Home/Goods/upload");
	 $("#imgform").attr("target","hidden_frame");
	$("#imgform").submit();
	}
	
}
	
	function callback(message,success,time) { 
if(success==false) 
{ 
	alert(message); 
} 
else{
$("#imgshow").append('<div class="row"><div class="col-sm-6 col-md-4" style="width:500px;"><div class="thumbnail"><img src="'+message+'" style="height:150px"><div class="caption"><p><button type="button" class="btn btn-danger" style="margin-left:65px;"  id="del" value="'+time+'">删除</button> </p><input type="hidden" class="img" name="images'+time+'" value="'+message+' "></div></div></div></div>');
} 
}
$(function(){
	$("#del").live("click",function(){
	   $(this).parent().parent().parent().parent().parent().empty();
  })
	$("#sub").live("click",function(){
	   describe = $(window.frames["describe"].document).find("#myEditor").html();
	   value ="";
		$(".img").each(function(){ 
			value += $(this).val();
		})
		$("#imgform").append("<input type='hidden' name='images' value='"+value+"'>");
	   $("#imgform").append("<input type='hidden' name='describe' value='"+describe+"'>");
	   $("#imgform").attr("action","/shop/index.php/Home/Goods/commit");
	   $("#imgform").removeAttr("target");
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