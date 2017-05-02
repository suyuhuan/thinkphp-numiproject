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
						<span class="user_name"><?php echo ($_SESSION['user']['username']); ?></span>
						<span class="user_info">尚未绑定手机号</span>
						<a href="">立即绑定</a>
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
	<div class="user_main_cont">
		<!--订单详情-->
		<div class="user_detail">
			<h3>
			 <span>订单详情</span>
			 <a class="fr" href="">返回订单列表</a>
		    </h3>
            <!--订单支付-->
		    <div class="user_detai_pay">  	
		    		<span>当前状态:</span>
		    		<span class="pay">未支付</span>
		    		<a class="btn fl" href="">付款</a>
		    		<a class="del fr" href="del/id/<?php echo ($orders["id"]); ?>">删除订单</a>  
		    		<div class="clear"></div>	
		    </div>
		    <!--订单信息-->
		    <div class="user_detai_info">
		    	<h4>订单信息</h4>
		    	<ul>
		    		<li class="fl">订单编号:<?php echo ($orders["order_num"]); ?></li>
		    		<li class="fl">下单时间:<?php echo ($orders["order_time"]); ?></li>
		    	</ul>
		    	<div class="clear"></div>
		    </div>
		    <!--团购信息-->
		    <div class="user_detai_group">
		    	<h4>团购信息</h4>
               <table cellpadding='0' cellspacing='0'>
               	 <thead>
               	 	<tr>
               	 		<th>团购项目</th>
               	 		<th>单元(元)</th>
               	 		<th>数量</th>
               	 		<th>小计</th>
               	 	</tr>
               	 </thead>
               	 <tbody>

               	 	<tr>
               	 		<td><a href=""><?php echo ($orders["name"]); ?></a></td>
               	 		<td>￥<?php echo ($orders["price"]); ?></td>
               	 		<td><?php echo ($orders["number"]); ?></td>
               	 		<td style=color:red>￥<?php echo ($orders["sumprice"]); ?></td>
               	 	</tr>
               	 
               	 	<tr>
               	 		<td colspan='4' class='total'>
                          
               	 			实付金额
               	 			<span>￥<?php echo ($orders["sumprice"]); ?></span>
               	 		</td>
               	 	</tr>
               	 </tbody>
               </table>
			
		    </div>

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

</html>