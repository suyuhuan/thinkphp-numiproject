<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="/nuomi/Public/home/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/templet.css">
	
	
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/Home/css/movieDetail.css">

	
	<script src="/nuomi/Public/home/js/movieDetail.js"></script>

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
						<li><a href="/nuomi/index.php/order">我的订单</a><span class="sep-lines"></span></li>
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
						<li class="list"><a href="/nuomi/index.php/ShopLogin">我是商家</a><span class="sep-lines"></span>
							<ul class="two-menu">
								<li><a href="#">商户中心</a></li>
								<li><a href="/nuomi/index.php/cooperate">我想合作</a></li>
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
					<a class="logo" href="/nuomi/index.php/Index"><img src="/nuomi/Public/home/images/index-logo.jpg" /></a>
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
						<li><a class="item" href="/nuomi/index.php/movie" target="_top">电影</a></li>
						<li><a class="item" href="" target="_top">酒店</a></li>
						<li><a class="item" href="" target="_top">今日新单</a></li>
						<li><a class="item" href="" target="_top">购物</a></li>
						<li><a class="item" href="" target="_top">去外卖</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
     <div class="clear"></div>
    <!--主体部分-->
	
		<div id="movie-details-main">	
		<div class="movie-head">
			<div class="box wrap">
				<ul>
					<li><a class="hover" href="">电影首页</a></li>
					<li><a href="">电影院</a></li>
					<li><a href="">电影票团购</a></li>
					<li><a href="">在线选座</a></li>
				</ul>
			</div>
		</div>

		<?php if(is_array($details)): foreach($details as $key=>$detail): ?><div class="wrap">
				<foreach name="details" item="detail">
					<div class="path">
					<ul>
						<li><a href="">团购 ></a></li>
						<li><a href="">电影 ></a></li>
						<li style="color:#ff4883"><?php echo ($detail["title"]); ?> ></li>
					</ul>
					</div><?php endforeach; endif; ?>
					<div class="detail-main-left">
						<img class="left-img" src="/nuomi/Public/home/images/thumbnails.jpg">
						<?php if(is_array($details)): foreach($details as $key=>$detail): ?><div class="content">
								<h2><?php echo ($detail["title"]); ?></h2>
								<div class="de">
									<p>
										<span>导演:</span><?php echo ($detail["director"]); ?>
									</p>

									<p>
										<span>主演:</span><?php echo ($detail["performer"]); ?>
									</p>
									<p>
										<span>类型:</span>动作,冒险,惊悚
									</p>
										<ul>
											<li>
												<span>国家:</span>中国大陆
											</li>
											<li>
												<span>首映:</span><?php echo ($detail["first_time"]); ?>
											</li>
											<li>
												<span>片长:</span><?php echo ($detail["len"]); ?>分钟
											</li>
										</ul>
									
									<p class="intro">
											<span>剧情:</span>
											<span class="c">
												<?php echo ($detail["content"]); ?>
												<a id="j-summary-open"style="cursor:pointer">展开</a>
											</span>
											<span id="j-summary-more" class="c" style="display:none;">
												<?php echo ($detail["hide"]); ?>
												<a  id="j-summary-fold" style="cursor:pointer">收起</a>
											</span>

											</div>
									</p>
							</div><?php endforeach; endif; ?>
						<div class="spec-nav">
							<ul>
								<li><a href="" style="background:#ff4883;color:#fff">上映影院</a></li>
								<li><a href="">热门影评</a></li>
								<li><a href="">剧情海报</a></li>
							</ul>
						</div>

						<div class="w-filter">
							<div class="filter-date">
								<ul>
									<li class="first">放映时间:</li>
									<li><a class="all" href="">全部</a></li>
									<li><a href="">11.13(周五)</a></li>
									<li><a href="">11.14(周六)</a></li>
									<li><a href="">11.15(周日)</a></li>
									<li><a href="">11.16(周一)</a></li>
									<li><a href="">11.17(周二)</a></li>
									<li><a href="">11.18(周三)</a></li>
									<li><a href="">11.19(周四)</a></li>
								</ul>
							</div>
							<div class="filter-date">
								<ul>
									<li class="first">区域:</li>
									<li><a class="all">全部</a></li>
									<li><a href="">二七区</a></li>
									<li><a href="">金水区</a></li>
									<li><a href="">中原区</a></li>
									<li><a href="">上街区</a></li>
									<li><a href="">中牟区</a></li>
									<li><a href="">巩义区</a></li>
									<li><a href="">新密区</a></li>
									<li><a href="">新密区</a></li>
									<li><a href="">新密区</a></li>
									<li><a href="">新密区</a></li>
									<li><a href="">新密区</a></li>
									<li><a href="">新密区</a></li>
								</ul>
							</div>
							<div class="filter-date">
								<ul>
									<li class="first">影院:</li>
									<li><a class="all" href="">全部</a></li>
									<li><a href="">保利国际影城</a></li>
									<li><a href="">万达国际影城</a></li>
									<li><a href="">耀莱成龙国际影城</a></li>
									<li><a href="">奥斯卡国际影城</a></li>
									<li><a href="">其他</a></li>		
								</ul>
							</div>
							<div class="filter-date">
								<ul>
									<li class="first">排序:</li>
									<li><a class="all" href="">默认</a></li>
									<li><a href="">电影院评级</a></li>
									<li><a href="">有选座</a></li>
									<li><a href="">有团购</a></li>
									
								</ul>
							</div>
						</div>

						<div class="filter-box">

									<div class="ci-basic">
										<div class="basic-top">
											<h3>郑州欢乐国际影城</h3>
											<h5>2.1分</h5>
										</div>
										<div class="basic-bottom">
											<h3 style="font-size:13px;">郑州市航空港区沃金商业广场三层</h3>
											<h5>查看地图</h5>
										</div>
									</div>

									<div class="ci-buy">
										<div class="buy-top"><span class="ci-price">&yen29起</span><span class="tuangou"><a href="">团购购票</a></span></div>
										<div class="buy-bottom"><span class="price">&yen31起</span><span class="gou"><a href="">选座购票</a></span></div>
									</div>
						</div>

						<div class="filter-box">

									<div class="ci-basic">
										<div class="basic-top">
											<h3>郑州欢乐国际影城</h3>
											<h5>2.1分</h5>
										</div>
										<div class="basic-bottom">
											<h3 style="font-size:13px;">郑州市航空港区沃金商业广场三层</h3>
											<h5>查看地图</h5>
										</div>
									</div>

									<div class="ci-buy">
										<div class="buy-top"><span class="ci-price">&yen29起</span><span class="tuangou"><a href="">团购购票</a></span></div>
										<div class="buy-bottom"><span class="price">&yen31起</span><span class="gou"><a href="">选座购票</a></span></div>
									</div>
						</div>
						<div class="filter-box">

									<div class="ci-basic">
										<div class="basic-top">
											<h3>郑州欢乐国际影城</h3>
											<h5>2.1分</h5>
										</div>
										<div class="basic-bottom">
											<h3 style="font-size:13px;">郑州市航空港区沃金商业广场三层</h3>
											<h5>查看地图</h5>
										</div>
									</div>

									<div class="ci-buy">
										<div class="buy-top"><span class="ci-price">&yen29起</span><span class="tuangou"><a href="">团购购票</a></span></div>
										<div class="buy-bottom"><span class="price">&yen31起</span><span class="gou"><a href="">选座购票</a></span></div>
									</div>
						</div>
						<div class="filter-box">

									<div class="ci-basic">
										<div class="basic-top">
											<h3>郑州欢乐国际影城</h3>
											<h5>2.1分</h5>
										</div>
										<div class="basic-bottom">
											<h3 style="font-size:13px;">郑州市航空港区沃金商业广场三层</h3>
											<h5>查看地图</h5>
										</div>
									</div>

									<div class="ci-buy">
										<div class="buy-top"><span class="ci-price">&yen29起</span><span class="tuangou"><a href="">团购购票</a></span></div>
										<div class="buy-bottom"><span class="price">&yen31起</span><span class="gou"><a href="">选座购票</a></span></div>
									</div>
						</div>
						<div class="filter-box">

									<div class="ci-basic">
										<div class="basic-top">
											<h3>郑州欢乐国际影城</h3>
											<h5>2.1分</h5>
										</div>
										<div class="basic-bottom">
											<h3 style="font-size:13px;">郑州市航空港区沃金商业广场三层</h3>
											<h5>查看地图</h5>
										</div>
									</div>

									<div class="ci-buy">
										<div class="buy-top"><span class="ci-price">&yen29起</span><span class="tuangou"><a href="">团购购票</a></span></div>
										<div class="buy-bottom"><span class="price">&yen31起</span><span class="gou"><a href="">选座购票</a></span></div>
									</div>
						</div>
						<div class="filter-box">

									<div class="ci-basic">
										<div class="basic-top">
											<h3>郑州欢乐国际影城</h3>
											<h5>2.1分</h5>
										</div>
										<div class="basic-bottom">
											<h3 style="font-size:13px;">郑州市航空港区沃金商业广场三层</h3>
											<h5>查看地图</h5>
										</div>
									</div>

									<div class="ci-buy">
										<div class="buy-top"><span class="ci-price">&yen29起</span><span class="tuangou"><a href="">团购购票</a></span></div>
										<div class="buy-bottom"><span class="price">&yen31起</span><span class="gou"><a href="">选座购票</a></span></div>
									</div>
						</div>
						<div class="filter-box">

									<div class="ci-basic">
										<div class="basic-top">
											<h3>郑州欢乐国际影城</h3>
											<h5>2.1分</h5>
										</div>
										<div class="basic-bottom">
											<h3 style="font-size:13px;">郑州市航空港区沃金商业广场三层</h3>
											<h5>查看地图</h5>
										</div>
									</div>

									<div class="ci-buy">
										<div class="buy-top"><span class="ci-price">&yen29起</span><span class="tuangou"><a href="">团购购票</a></span></div>
										<div class="buy-bottom"><span class="price">&yen31起</span><span class="gou"><a href="">选座购票</a></span></div>
									</div>
						</div>
					</div>


					<div class="detail-main-right">
						<h3>电影排行榜</h3>
						<div class="movie-panel">
							<img src="/nuomi/Public/home/images/621714-765jchkgbx-41465408023937296.jpg">
							<div class="text">奥斯卡大上海20元</div>
							<span class="price">&yen;20</span>
							<span class="ori-price">原价&yen;50</sapn>
							<span class="sold">已售80630</span>
						</div>
						<div class="movie-panel">
							<img src="/nuomi/Public/home/images/621714-765jchkgbx-41465408023937296.jpg">
							<div class="text">奥斯卡大上海20元</div>
							<span class="price">&yen;20</span>
							<span class="ori-price">原价&yen;50</sapn>
							<span class="sold">已售80630</span>
						</div>
						<div class="movie-panel">
							<img src="/nuomi/Public/home/images/621714-765jchkgbx-41465408023937296.jpg">
							<div class="text">奥斯卡大上海20元</div>
							<span class="price">&yen;20</span>
							<span class="ori-price">原价&yen;50</sapn>
							<span class="sold">已售80630</span>
						</div>
					</div>
					</div>
					
				</div>
			</div>
		
		</div>
		</div>
		<div class="clear"></div>
	
                                                                                            
</body>


    <div class="clear"></div>
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
								<a href="/nuomi/index.php/Link/index.html">友情链接</a>
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

	<script src="/nuomi/Public/home/js/movieDetail.js"></script>

</html>