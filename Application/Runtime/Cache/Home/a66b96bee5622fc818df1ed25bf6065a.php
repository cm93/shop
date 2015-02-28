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
var json = [
	{"name":"衣服" , "id" : "1" , "pid" : 0},
	{"name":"裤子" , "id" : "2" , "pid" : 0},
	{"name":"鞋子" , "id" : "3" , "pid" : 0},
	
	{"name":"衬衣" , "id" : "4" , "pid" : 1},
	{"name":"毛衣" , "id" : "5" , "pid" : 1},
	{"name":"内衣" , "id" : "6" , "pid" : 1},
	
	{"name":"大" , "id" : "10" , "pid" : 6},
	{"name":"大" , "id" : "11" , "pid" : 7},
	{"name":"大" , "id" : "7" , "pid" : 4},
	{"name":"中" , "id" : "8" , "pid" : 4},
	{"name":"小" , "id" : "9" , "pid" : 4}
];
treeRoot : document.getElementById("classifyTree"),//dom树根
btn : document.getElementById("cid1"),
btnText : document.getElementById("cid1Text"),
btnClick : document.getElementById("classifyClick"),
json : this.json,
rootId : 0,//一级分类ID
//根据json建立dom树
setDomTree : function(){
	function creatEl(name){return document.createElement(name);}//创建标签
	var ul = creatEl("ul");
	//先建立根节点
	for(var i=0;i<this.json.length;i++){
		if(this.json[i].pid==this.rootId){
			var li =  creatEl("li");
			var span = creatEl("span");
			span.alt = this.json[i].id;
			span.innerHTML = this.json[i].name;
			li.appendChild(span);
			ul.appendChild(li);
			this.json.splice(i,1);//已经载入页面删除当前数组		
			i--;//数组删除，下次循环继续查询当前位置
		}
	}													
	this.treeRoot.appendChild(ul);

	this.addNodes(this.treeRoot.getElementsByTagName("ul")[0]);//获取插入的根ul,再查询是否有子类
}
alert(setDomTree(json));
</script>
		<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
					<h1>发布信息</h1>
					<div class="register-grids">
						<form action="./register" method="post"> 
								<div class="register-top-grid">
										<div>
											<span ><label>*</label>发布规则：</span>
											<span style="padding-left:75px;">1、内容【涉嫌广告】，物品描述含有网址，图片带有水印等；</span>
											<span style="padding-left:75px;">2、内容【违法违禁】，违背国家法律法规；</span>
											<span style="padding-left:75px;">3、没提供【实物照片】或是【虚拟物品】；</span>
											<span style="padding-left:75px;">4、【标题】【照片】与描述内容严重不符。</span>
										</div>
										<div>
											<span>手机号码<label>*</label></span>
											<input type="text" name="phonenumber" id="phonenumber" class="required" placeholder="请输入正确的手机号码" required="required"> 
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
										<div>
											<textarea class="textarea1" name="rule" style="width:99%" rows="10" readonly="readonly">⒈ 二手网服务条款
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