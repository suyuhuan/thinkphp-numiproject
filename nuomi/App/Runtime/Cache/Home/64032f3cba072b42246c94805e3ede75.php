<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="/nuomi/Public/home/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/templet.css"/>
	<link rel="stylesheet" href="/nuomi/Public/home/css/ucore.css" type="text/css"/>
</head>
<body>
	<!--网页头-->
	<div id="header">	
		<div class="header-bar">
				<div class="w">
				<div class="header-inner">
					<ul class="inner-left">
						<li><a href="">北京</a><span class="sep-lines"></span></li>	
						<li class="list"><a href="">切换城市</a>
							<ul class="city">
								<li><a href="">北京</a></li>
								<li><a href="">上海</a></li>
								<li><a href="">广州</a></li>
								<li><a href="">深圳</a></li>
								<li><a href="">天津</a></li>
								<li><a href="">杭州</a></li>
								<li><a href="">西安</a></li>
								<li><a href="">成都</a></li>
								<li><a href="">郑州</a></li>
								<li><a href="">厦门</a></li>
								<li><a href="">青岛</a></li>
								<li><a href="">太原</a></li>
								<li><a href="">重庆</a></li>
								<li><a href="">武汉</a></li>
								<li><a href="">南京</a></li>
								<li><a href="">沈阳</a></li>
								<li><a href="">济南</a></li>
								<li><a href="">哈尔滨</a></li>

								<li><a class="more-link" href="">更多城市>></a></li>
							</ul>
						</li>	
					</ul>
					<ul class="inner-right">
						 <?php if(isset($_SESSION['user']['username'])): ?><li>欢迎<a href="/nuomi/index.php/User"><?php echo ($_SESSION['user']['name']); ?></a><span class="sep-lines"></span></li>
                        	 <li><a href="/nuomi/index.php/UserLogin/loginOut">退出</a><span class="sep-lines"></span></li>
						
                         <?php else: ?>
                           <li><a href="/nuomi/index.php/UserLogin">登录</a><span class="sep-lines"></span></li>
						   <li><a href="/nuomi/index.php/UserReg">注册</a><span class="sep-lines"></span></li><?php endif; ?>
						<li class="list"><a href="">手机糯米</a><span class="sep-lines"></span></li>
						<li><a href="">我的订单</a><span class="sep-lines"></span></li>
						<li class="list"><a href="/nuomi/index.php/Order" >我的糯米</a><span class="sep-lines"></span>
							<ul class="two-menu">
								<li><a href="">我的订单</a></li>
								<li><a href="">选座订单</a></li>
								<li><a href="">我的收藏</a></li>
								<li><a href="">我的评价</a></li>
								<li><a href="">我的余额</a></li>
								<li><a href="">我抵用券</a></li>
								<li><a href="">账户设置</a></li>
								<li><a href="">我的百度</a></li>
							</ul>
						</li>
						<li class="list"><a href="">最近浏览</a><span class="sep-lines"></span></li>
						<li class="list"><a href="/nuomi/index.php/shop">我是商家</a><span class="sep-lines"></span>
							<ul class="two-menu">
								<li><a href="">商户中心</a></li>
								<li><a href="">我想合作</a></li>
							</ul>
						</li>
						<li><a href="">帮助中心</a><span class="sep-lines"></span></li>
						<li class="list"><a href="">关注</a><span class="sep-lines"></span></li>
						<li><a href="">收藏</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="search-bar">
			<div class="w">
				<div class="logo-area">
					<a class="logo" href="/nuomi/index.php/index"><img src="/nuomi/Public/home/images/index-logo.jpg"></a>
				</div>
				<div class="search-area">
						<form action="" method="get">
							<input id="searchInput" type="text" value="" name="k" placeholder="王府井">
							<div class="searchbtn-wrap">
								<input id="searchBtn" type="submit" value="">
							</div>
						</form>
				</div>
				<div class="utils">
					<div class="first"></div>
					<div class="mid"></div>
					<div class="last"></div>
				</div>
			</div>
		</div>

		<div class="nav-bar">
			<div class="w">
				<div class="nav-inner">
					<ul class="nav-list">
						<li class="nav-item">全部分类</li>
						<li><a class="item" href="/nuomi/index.php/index" target="_top">首页</a></li>
						<li><a class="item" href="" target="_top">电影</a></li>
						<li><a class="item" href="" target="_top">酒店</a></li>
						<li><a class="item" href="" target="_top">今日新单</a></li>
						<li><a class="item" href="" target="_top">购物</a></li>
						<li><a class="item" href="" target="_top">去外卖</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--用户主体-->
	<div id="continer">
		<!--信息横-->
		<div class="bar">
					<div class="bar_user fl">
						<span class="user_name" style="color:red;"><?php echo ($_SESSION['user']['name']); ?></span>
						<?php if($_SESSION["user"]["phone"] == ""): ?><span class="user_info">尚未绑定手机号</span>
						<a href="/nuomi/index.php/User/userSet.html">立即绑定</a>
					   <?php else: ?>
					     <span class="user_info"><?php echo substr_replace($_SESSION["user"]["phone"],'****',3,5);?></span>
					     <a href="/nuomi/index.php/User/userSet.html">修改</a><?php endif; ?>
						
					</div>
					<ul class="user_money fr">
						<li>
							<span>我的余额</span>
						    <span class="mi">¥0</span>
						</li>
						<li>
							<span>抵用卷</span>
							<span class="mi">0</span>
						</li>			
					</ul>
		</div>
		<!--内容-->
		<div class="content">
					<!--侧栏-->
					<div class="user_sidebar fl" id="">
						<ul>
							<li>
								<a href="#">我的订单</a>
								<ul>
									<li>
										<a href="/nuomi/index.php/Order/">
                                           <span>.</span>
											团购订单
										</a>
									</li>
									<li>
										<a href="#">
											<span>.</span>
											储值卡
										</a>
									</li>
									<li>
										<a href="#">
											<span>.</span>
											物流单
										</a>
									</li>
									<li>
										<a href="#">
											<span>.</span>
											电影选座
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">我的评价</a>
								<ul>
									<li>
										<a href="#">
											<span>.</span>
											待评价
										</a>
									</li>
									<li>
										<a href="#">
											<span>.</span>
											已评价
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">我的收藏</a>
							</li>
							<li>
								<a href="#">我的账户</a>
								<ul>
									<li>
										<a href="/nuomi/index.php/user/">
											<span>.</span>账户设置
										</a>
									</li>
									<li>
										<a href="#">
											<span>.</span>我的余额
										</a>
									</li>
									<li>
										<a href="#">
											<span>.</span>抵用券
										</a>
									</li>
									<li>
										<a href="#">
											<span>.</span>百度钱包余额
										</a>
									</li>
								</ul>
							</li>
						</ul>
						<div class="user_sidebar_phone">
							<h3>4006-888-887</h3>
							<p>客服电话免长途费</p>
							<p>
								 周一至周日 9:00-22:00
							</p>
					    </div>
					</div>
					 <!--主体-->
					 
<div class="user_main fr">
	<div class="user_main_head">
		<ul>
			<li>
			  基本信息 
			</li>
			<li>
			  用户资料
			</li>
			<li>
			  收货地址
			</li>
		</ul>
	</div>	
		<!--账户设置-->
	<div class="user_main_cont">
		<ul class="user_info">
						<li>
							<span class="lg">用户名:</span>
							<span class="lg_1"><?php echo ($user['username']); ?></span>
							<span>
								<a href="/nuomi/index.php/User/userset.html">百度账号设置</a>
							</span>
						</li>
						<br/>
						<li>
							<span class="lg">密&nbsp;&nbsp;码:</span>
							<span class="lg_1">******</span>
							<span>
							 	<a href="/nuomi/index.php/User/userset.html">修改密码</a>
							</span>
						</li>
						<br/>
						<li>
							<span class="lg">手机号:</span>
							<?php if(empty($user['phone'])): ?><span class="lg_1">尚未绑定手机号</span>
								<span>
									<a href="/nuomi/index.php/User/User/userSet.html">立即绑定</a>
								</span>
							<?php else: ?>
								<span class="lg_1"><?php echo substr_replace($user['phone'],'****',3,5);?></span>
								<span>
									<a href="/nuomi/index.php/User/userSet">修改</a>
								</span><?php endif; ?>
						
					    </li>
					    <br/>
		 </ul>
		 <ul class="user_info">
						<li>
							<span class="lg">可用余额:</span>
							<span>
							 	   	 		<a href="">查询|</a>
							 	   	 		<a href="">充值|</a>
							 	   	 		<a href="">体现|</a></span>
							<span>原糯米余额提现事宜，请拨打客服电话4006-888-887</span>
						</li>
		 </ul>	
	</div>
		<!--用户基本信息-->
	<div class="user_main_cont" style="display:none;">
	    <div class="user_main_addr">
			<h4>个人中心</h4>
			<span><i></i>基本信息</span>
			<form action="" method="">
				<table class="table_set">
					<tr>
						<td align="center">
							<span>*</span>
							用户名:
						</td>
						<td>
							<?php echo ($user["username"]); ?>
						</td>
					</tr>
					<tr>
						<td align="center">
							<span>*</span>
							昵称:
						</td>
						<td>
							<?php echo ($user["name"]); ?>
						</td>
					</tr>
					<tr>
						<td  align="center">
							<span>*</span>
							图像:
						</td>
						<td>
							<img style="width:65px;height:65px" src="/nuomi/Public/Uploads/user/<?php echo ($user["image"]); ?>?id/<?php echo rand();?>" width="80"/>
						</td>
					</tr>
					<tr>
						<td  align="center">
							<span>*</span>
							电子邮箱:
						</td>
						<td>
							<?php echo ($user["email"]); ?>
						</td>
					</tr>
					<tr>
						<td align="center">
							<span>*</span>
							 手机号码:
						</td>
						<td>
							<?php echo substr_replace($user['phone'],'****',3,5);?>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<button type="submit">修改</button>
						</td>
					</tr>

				</table>
			</form>
		</div>
	</div>	
		<!--收货地址-->
	<div class="user_main_cont" style="display:none;">
		<div class="user_main_addr">
			<h4>收货地址</h4>
			<span><i></i>添加收货地址</span>
			<form action="" method="">
				<table>
					<tr>
						<td align="right">
							<span>*</span>
							所在地区:
						</td>
						<td>
							<?php echo ($xxoo); ?>
							<select name="" id="">
								<option value="">省份</option>
							</select>
							<select name="" id="">
								<option value="">城市</option>
							</select>
							<select name="" id="">
								<option value="">区域</option>
							</select>
						</td>
					</tr>
					<tr>
						<td align="right">
							<span>*</span>
							街道地址:
						</td>
						<td>
							<input class="lg" type="text">
						</td>
					</tr>
					<tr>
						<td align="right">
							<span>*</span>
							邮政编码:
						</td>
						<td>
							<input type="text">
							<a href="">邮政查询</a>
						</td>
					</tr>
					<tr>
						<td align="right">
							<span>*</span>
							收货人姓名:
						</td>
						<td>
							<input type="text">
						</td>
					</tr>
					<tr>
						<td align="right">
							<span>*</span>
							 手机号码:
						</td>
						<td>
							<input type="text">
						</td>
					</tr>
					<tr>
						<td align="right">
							<span>*</span>
							电话号码:
						</td>
						<td>
							<input class="sx" type="text">—
							<input class="sx" type="text">—
							<input class="sx" type="text">
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<button type="submit">保存</button>
							<button>取消</button>
						</td>
					</tr>

				</table>
			</form>
		</div>
	</div>
</div>

		</div>
		<div class="clear"></div>
	</div>

	<!--尾部-->   
	<div id="footer">
		     <div class="clear"></div>
				<div class="foot">
					<div class="foot_1">
						<h3>用户帮助</h3>
						<ul>
							<li>
								<a href="">常见团购问题</a>
							</li>
							<li>
								<a href="">开放API</a>
							</li>
							<li>
								<a href="">站点地图</a>
							</li>
						</ul>
					</div>
					<div class="foot_2">
						<h3>手机百度助手</h3>
						<ul>
							<li>
								<a href="">百度糯米触屏版</a>
							</li>
							<li>
								<a href="">下载手机版</a>
							</li>			
						</ul>
					</div>
					<div class="foot_2">
						<h3>商务合作</h3>
						<ul>
							<li>
								<a href="">友情链接</a>
							</li>
							<li>
								<a href="">市场合作</a>
							</li>			
						</ul>
					</div>
					<div class="foot_2">
						<h3>公司信息</h3>
						<ul>
							<li>
								<a href="">关于百度糯米</a>
							</li>
							<li>
								<a href="">百度糯米新浪微博</a>
							</li>	
							<li>
								<a href="">违规投诉&廉政举报</a>
							</li>		
						</ul>
					</div>
					<div class="foot_3">
						<h3>4006-888-887</h3>
						<ul>
							<li>
								周一至周日 9:00-22:00
							</li>
							<li>
								客服电话 免长途费
							</li>	
							<li>
								<a href="#" class="btn">手机专享优惠</a>
							</li>		
						</ul>
					</div>
				</div>
				<div class="clear"></div>
	</div>
	<!--声明信息-->
	<div id="copy-info">
				<span>c</span>
				2015nuomi.com
				<a href="" target="_blank">
					京ICP证030173
				</a>
				京公网安备11010802014106号
				<a href="">互联网药品信息服务资格证编号(京-经营性-2011-0009)</a>
				<a href="">营业执照信息</a>
	</div>
		     
                                                                                            
</body>
<script src="/nuomi/Public/home/js/header.js" type="text/javascript">		
</script>

<script>
	 $(function(){
	$(".user_main .user_main_head ul >li:first").addClass("active");
	$(".user_main .user_main_cont").not(":first").hide();
	$(".user_main .user_main_head ul>li").unbind("click").bind("click", function(){
		$(this).siblings("li").removeClass("active").end().addClass("active");
		var index = $(".user_main .user_main_head ul >li").index( $(this) );
		$(".user_main .user_main_cont").eq(index).siblings(".user_main .user_main_cont").hide().end().fadeIn("slow");
   });
});	
</script>

</html>