<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="/nuomi/Public/home/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/templet.css">
	
		<link rel="stylesheet" type="text/css" href="/nuomi/Public/Home/css/hotle.css">
	
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
			<div class="warp">	<div id="nav">			<li class="shouye">				<a href="#">电影首页</a>			</li>			<li>				<a href="#">电影院</a>			</li>			<li>				<a href="#">电影票团购</a>			</li>			<li>				<a href="#">在线选座</a>			</li>	</div>		<div id="m-index">			<!--此处为四张轮播图片-->			<div id="j-ad">				<img src="/nuomi/Public/home//images/j-ad.jpg"/>			</div>			<!--正在热映-->			<div id="m-side">				<ul>					<li class="now"><a href="#">正在热映</a></li>					<li><a href="#">即将上映</a></li>				</ul>				<!--圈圈-->				<div id="num-side">					<a href="#" class="border-radius"></a>					<a href="#"></a>					<a href="#"></a>					<a href="#"></a>				</div>			</div>			<!--产品轮播-->			<div id="item-box">				<div class="item-list">					<ul>						<li class="ul-list">							<a href="/nuomi/index.php/moviedetail">								<img src="/nuomi/Public/home//images/wszr_03.jpg"/>								<h5>我是证人</h5>								<div class="start-box">									<div class="start-box-bj">										<div class="start-box-cc">																					</div>									</div>									<div class="star-right">										<em>8</em>										<span class="">.6</span>									</div>								</div>								<div class="ticket">购票</div>							</a>						</li>					</ul>					<ul>						<li>							<a href="#">								<img src="/nuomi/Public/home//images/wszr_03.jpg"/>								<h5>我是证人</h5>								<div class="start-box">									<div class="start-box-bj">										<div class="start-box-cc">																					</div>									</div>									<div class="star-right">										<em>8</em>										<span class="">.6</span>									</div>								</div>								<div class="ticket">购票</div>							</a>						</li>					</ul>					<ul>						<li>							<a href="#">								<img src="/nuomi/Public/home//images/wszr_03.jpg"/>								<h5>我是证人</h5>								<div class="start-box">									<div class="start-box-bj">										<div class="start-box-cc">																					</div>									</div>									<div class="star-right">										<em>8</em>										<span class="">.6</span>									</div>								</div>								<div class="ticket">购票</div>							</a>						</li>					</ul>					<ul>						<li>							<a href="#">								<img src="/nuomi/Public/home//images/wszr_03.jpg"/>								<h5>我是证人</h5>								<div class="start-box">									<div class="start-box-bj">										<div class="start-box-cc">																					</div>									</div>									<div class="star-right">										<em>8</em>										<span class="">.6</span>									</div>								</div>								<div class="ticket">购票</div>							</a>						</li>					</ul>					<ul>						<li>							<a href="#">								<img src="/nuomi/Public/home//images/wszr_03.jpg"/>								<h5>我是证人</h5>								<div class="start-box">									<div class="start-box-bj">										<div class="start-box-cc">																					</div>									</div>									<div class="star-right">										<em>8</em>										<span class="">.6</span>									</div>								</div>								<div class="ticket">购票</div>							</a>						</li>					</ul>					<ul>						<li>							<a href="#">								<img src="/nuomi/Public/home//images/wszr_03.jpg"/>								<h5>我是证人</h5>								<div class="start-box">									<div class="start-box-bj">										<div class="start-box-cc">																					</div>									</div>									<div class="star-right">										<em>8</em>										<span class="">.6</span>									</div>								</div>								<div class="ticket">购票</div>							</a>						</li>					</ul>				</div>							</div>		</div>				<!--热门影院-->		<div id="content-box" class="clearfix">			<!--左侧热门电影-->			<div id="content-box-list" class="clearfix">				<!--热门电影menu-->				<div id="header-hot-cinema">					<h3>热门影院</h3>					<ul class="filter-hot-cinema">						<li class="hot-cinema-all"><a href="#">全部</a></li>						<li><a href="#">中原区</a></li>						<li><a href="#">中牟县</a></li>						<li><a href="#">二七区</a></li>						<li class="hot-cinema-more"><a href="#">更多》</a></li>					</ul>				</div>				<!--电影门票内容-->								<div class="movies-content">					<ul>						<li class="movies-content-border no-border">							<div class="mov-content-hot">								<a href="">									<h4>奥斯卡国际影城(大上海店)</h4>									<div class="movie-price">										<span class="yuan">￥</span>										<span class="price-num">11.8</span>										起									</div>									<div class="ico-tuan"></div>									<div class="ico-zuo"></div>								</a>							</div>							<p class="hc-address"> 郑州东太康路24号大上海城6层(百货大楼东侧) </p>						</li>						<li class="movies-content-border">							<div class="mov-content-hot">								<a href="">									<h4>奥斯卡国际影城(大上海店)</h4>									<div class="movie-price">										<span class="yuan">￥</span>										<span class="price-num">11.8</span>										起									</div>									<div class="ico-tuan"></div>									<div class="ico-zuo"></div>								</a>							</div>							<p class="hc-address"> 郑州东太康路24号大上海城6层(百货大楼东侧) </p>						</li>						<li class="movies-content-border no-border">							<div class="mov-content-hot">								<a href="#">									<h4>奥斯卡国际影城(大上海店)</h4>									<div class="movie-price">										<span class="yuan">￥</span>										<span class="price-num">11.8</span>										起									</div>									<div class="ico-tuan"></div>									<div class="ico-zuo"></div>								</a>							</div>							<p class="hc-address"> 郑州东太康路24号大上海城6层(百货大楼东侧) </p>						</li>						<li class="movies-content-border">							<div class="mov-content-hot">								<a href="#">									<h4>奥斯卡国际影城(大上海店)</h4>									<div class="movie-price">										<span class="yuan">￥</span>										<span class="price-num">11.8</span>										起									</div>									<div class="ico-tuan"></div>									<div class="ico-zuo"></div>								</a>							</div>							<p class="hc-address"> 郑州东太康路24号大上海城6层(百货大楼东侧) </p>						</li>					</ul>				</div>				<div style="clear:both;"></div>				<!--电影票团购-->				<div class="team-buying">					<ul class="team-buying-title">						<li class="team-buying-ticket">							<a href="#">电影票团购</a>						</li>						<li>							<a href="#">在线选座</a>						</li>					</ul>																																																																						<div class="area-wrap">						<div class="area">							<h5 class="area-label">区域</h5>							<div class="area-name">								<a href="#" class="area-all">全部</a>								<a href="#" class="area-item">									二七区									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									管城区									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									金水区									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									中原区									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									其他									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									上街区									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									惠济区									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									中牟县									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									巩义市									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									荥阳市									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									新密市									<span class="area-count">24</span>								</a>								<a href="#" class="area-item">									登封市									<span class="area-count">24</span>								</a>																							</div>							<span class="sanjiao">									<img src="/nuomi/Public/home//images/snajiao_03.png"/>								</span>						</div>												<div style="clear:both"></div>						<!--排序搜索-->						<div class="sort">							<h5>排序</h5>							<ul class="sort-list">								<li class="def">									<a href="#">										默认																			</a>								</li>								<li class="sales">									<a href="#">										销量																			</a>																	</li>								<li class="price">									<a href="#">										价格																			</a>																	</li>								<li class="discount">									<a href="#">										折扣																			</a>																	</li>								<li class="publish">									<a href="a">										最新发布																			</a>																	</li>								<li class="order">									<input type="checkbox" name="order[]" value=""/>									<a href="#">免预约</a>								</li>								<li class="order">									<input type="checkbox" name="order[]" value=""/>									<a href="">代金券</a>								</li>								<li class="order">									<input type="checkbox" name="order[]" value=""/>									<a href="#">全网低价</a>									<span class="hot">&nbsp;&nbsp;</span>								</li>																							</ul>						</div>						<div style="clear:both"></div>						<div class="list">							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>							<a href="/nuomi/index.php/detail">								<img src="/nuomi/Public/home//images/movie.jpg"/>								<span class="goods-content">									<span class="goods-title">【多城市】奥斯卡国际影城</span>									<span class="goods-desc"> 											新郑店单人影票（含3D）！节假日通用，提供免费WiFi、停车位！									</span>																																													<ins class="current-pric">										<span class="preferential">											<span>优惠价</span>											<i></i>										</span>										<span class="symbol">￥</span>31.9																			</ins>																		<div class="buy-team">										<span class="team-price">											团购价											<del>￥27</del>										</span>										<span class="prices">											价值											<del>￥80</del>										</span>									</div>									<div class="buy-now">										立即购买									</div>																		<div class="goods-foot">										<div class="dec">立减</div>										<span>本市售1000</span>									</div>																																			</span>							</a>													</div>											</div>																								</div>			</div>			<!--右侧电影排行-->			<div id="content-box-price" class="clearfix">				<div class="dijia">					<a href="#"><img src="/nuomi/Public/home//images/dijia.jpg"/></a>				</div>				<div class="movie-list">					<h3>电影票排行榜</h3>					<div class="box">						<a href="#">							<img class="goods-img" src="/nuomi/Public/home/images/good-img.jpg"/>							<span class="good-content-tiny">								<span class="good-tiny-title">奥斯卡大上海20元</span>								<span class="sale-count">									已售									<span class="sale-num">80639</span>								</span>							<ins class="current-pric">¥20</ins>							<del class="original-pric">¥50</del>							</span>						</a>					</div>					<!--list-->					<div class="box">						<a href="#">							<img class="goods-img" src="/nuomi/Public/home/images/good-img.jpg"/>							<span class="good-content-tiny">								<span class="good-tiny-title">奥斯卡大上海20元</span>								<span class="sale-count">									已售									<span class="sale-num">80639</span>								</span>							<ins class="current-pric">¥20</ins>							<del class="original-pric">¥50</del>							</span>						</a>					</div>					<div class="box">						<a href="#">							<img class="goods-img" src="/nuomi/Public/home/images/good-img.jpg"/>							<span class="good-content-tiny">								<span class="good-tiny-title">奥斯卡大上海20元</span>								<span class="sale-count">									已售									<span class="sale-num">80639</span>								</span>							<ins class="current-pric">¥20</ins>							<del class="original-pric">¥50</del>							</span>						</a>					</div>					<div class="box">						<a href="#">							<img class="goods-img" src="/nuomi/Public/home/images/good-img.jpg"/>							<span class="good-content-tiny">								<span class="good-tiny-title">奥斯卡大上海20元</span>								<span class="sale-count">									已售									<span class="sale-num">80639</span>								</span>							<ins class="current-pric">¥20</ins>							<del class="original-pric">¥50</del>							</span>						</a>					</div>					<div class="box">						<a href="#">							<img class="goods-img" src="/nuomi/Public/home/images/good-img.jpg"/>							<span class="good-content-tiny">								<span class="good-tiny-title">奥斯卡大上海20元</span>								<span class="sale-count">									已售									<span class="sale-num">80639</span>								</span>							<ins class="current-pric">¥20</ins>							<del class="original-pric">¥50</del>							</span>						</a>					</div>									</div>			</div>					</div></div>

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

</html>