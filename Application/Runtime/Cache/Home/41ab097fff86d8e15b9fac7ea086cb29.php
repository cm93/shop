<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>二手网</title>
		<link rel="stylesheet" type="text/css" href="http://c.58cdn.com.cn/ui6/detail/detail_v20150203194344.css">
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
	var imformation = '<div class="goods" style="margin-bottom:10px;"><img src="'+data[i][1]+'" style="width:66px;height:66px;"><a href="<?php echo HOME;?>goods/details?id='+data[i][6]+'" style="color:white;position:absolute;padding-left:10px;">'+data[i][2]+'</a><span class="deletegoods"  style="padding-left:10px;"><a id="del"  name="'+data[i][0]+'">删除</a><span style="margin-left:90px;">¥'+data[i][3]+'</span></span></div>'
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
								<input id="sear" name="search"  type="search" placeholder="请输入搜素文字" />	
							</form>
						</div>
						<div class="mid-grid-right">
							<a class="logo" href="<?php echo HOME;?>"><span> </span></a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-mid-head---->
				<!----start-bottom-header---->
				</div>
		<div class="w headline">
	<h1><?php echo $data[1];?></h1>
    <div class="other">
    发布时间：<?php echo $data[10];?>
    浏览<em id="totalcount"><?php echo $data[11];?></em>次</div>
</div>
<div id="action"></div>
<div id="sbar1"></div>
<div class="w">
	<div class="conleft">
			<div class="info_h" name="data_1">
			  <p class="parainfo">
			  				  		<span>
				  						  			<?php echo $data[0];?>
				  					  		</span>
			  		<i class="r">|</i>
			  			<?php if($data[3]){ echo '<em class="b">'.$data[3].'-'.$data[4].'</em>元'; }else{ echo '<em class="b">面议</em>'; };?>		    		 			    				    	<i class="r">|</i>
			  				</p>
			    			       <div id="newuser" name="data_1"><ul class="userinfo"><ul class="vcard">  <li><i>联  系 人：</i>     <?php echo $data[6]; ?>      </li></ul></ul></div>
							    
			    			    <ul class="contactlist hideclasses">    
																  	  
					      					      	  <li><i class="tit">联系电话：</i><span class="tel" id="t_phone">
								  <?php echo $data[5]; ?>
					      	  </span>
					          		
					      					      
					 					 
										<li class="call_2">
	<i>咨询：</i>
			<span id="bangbangWrapBox" class="qqbbWrapBox onlybangbang" onclick="clickLog('from=ES_bangbang_message');">
            <img id="imgbang6006169623047" name="iconbang" class="qqbbiconimg" width="82px" height="26px" src="http://img.58cdn.com.cn/bangbang/res/images/online.gif">
        </span>
	</li>
  				    														        				</ul>
				  			</div>
        <div class="clear" name="data_1"></div>    
    
        <div class="maincon" name="data_2"><?php echo $data[8]; ?></div>
        
        <div class="caozuo1" name="data_1">
       
                </div>
        
		<div id="readmore" class="readmore" style="display:none;"></div>
        			          <div class="nav" name="data_2">如果您对这个信息不满意，您可以：
        <a href="./wanted">查看最新二手求购信息»</a>
        <a href="./want">发布一条二手求购信息»</a>
        </div>
          								

        
<div style="display:none;" id="search_list_ui_position" class="beinterest"></div>

        <div class="clear"></div>
            
    </div>
    <div class="conright">
    
    
	        
    	<div class="itemBox pb20">
    		<div class="guild f12">
           
            </div>
        </div>
    
	

								


		<div class="itemBox pb20">
    		<div class="guild f12">
            <h2 class="c_58">网友监督<span class="c_999 fn">（投诉/举报/建议）</span></h2>
            <ul class="gl_list">
            <li><i class="i_b3"></i><a target="_blank" href="http://about.58.com/info/deleteinfo.aspx" onclick="_gaq.push(['pageTracker._trackEvent', '58_detail', 'right_supervision', 'link_complaints']);">投诉电话被其冒用</a></li>
            <li><i class="i_b3"></i><a href="javascript:setbg('举报该信息',380,300,'http://about.58.com/Complain.aspx?infoid=21573271174296')" onclick="_gaq.push(['pageTracker._trackEvent', '58_detail', 'right_supervision', 'link_report']);">举报该信息虚假/违法</a></li>
           
            </ul>
            </div>
        </div>
        <div class="rightbox pb50" id="search_box_ui_position" style="display:none;"></div>
    	<div id="sideAD"></div> 
    	<div id="a102" style="display:none"></div>
        <div id="smallAd"></div>
    </div>
    <div class="clear"></div>
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