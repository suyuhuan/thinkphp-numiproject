<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="/nuomi/Public/home/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/templet.css">
	
	
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/Home/css/hotel.css">
	

	
	<script type="text/javascript"charset="utf-8">
		
		$("#click").toggle(function(){
          	$(this).find("div").show();
		
        },function(){
        	$(this).find("div").hide();
        });
    
        $("#hidden-hotel-click").toggle(function(){
        	$(this).find("div").show();
        },function(){
        	$(this).find("div").hide();
        });
		
		
		//显示具体位置
		$(".goods-area-li").hover(function(){
			$(this).find(".block").show();
		},function(){
		$(".block").fadeOut();
		});
		
		

	</script>

</head>
<body>
			<!-- 广告 -->
	
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
	
	<div class="search-hotle clearfix">
			<div class="input-wrap-area input-wrap l">
				<label>入住城市</label>
				<div class="hidden-city" id="click">
					<input type="text" name=""value="郑州" />
				<!--隐藏城市-->
					<div id="j-city-list" style="display:none">
						<div class="city-list">
							<div class="city-list-l">
								<ul class="city-list-ul">
									<li style=" background:#ff5e89;color:#fff; font-family:'微软雅黑'"><a href="#" style="color:#fff">热门城市</a></li>
									<li><a href="#">A-G</a></li>
									<li><a href="#">M-T</a></li>
									<li><a href="#">H-L</a></li>
									<li><a href="#">W-Z</a></li>
								</ul>
								
								
							</div>
							<div class="city-list-r">
								X
							</div>
						</div>
					</div>
				</div>
				
			</div>
	
	
	
	
	
	
	
			<div class="input-wrap-hotle input-wrap l">
				
					<label>酒店位置</label>
					<div class="hidden-hotel" id="hidden-hotel-click">
					<input type="text" name=""value="不限"/>
					<div id="j-area-list" style="display:none">
						sssssssss
					</div>
				</div>
			</div>
			
			
			
			
			
			
			<div class="input-wrap-hot r">
				<h5 class="l">当季热门:</h5>
				<a href="#" class="item l">成都</a>
				<a href="#" class="item l">西安</a>
				<a href="#" class="item l">杭州</a>
				<a href="#" class="item l">天津</a>
				<a href="#" class="item l">上海</a>
				<a href="#" class="item l">北京</a>
			</div>
		</div>
		<!--分类-->
		<div class="classify">
			<div class="classify-all">
				<div class="classify-all-fl">
					<h5>分类</h5>
					<span class="bgcolor">全部</span>
					<span class="area-all">
						<?php if(is_array($type)): foreach($type as $key=>$type): ?><a href="/nuomi/index.php/Link/id/<?php echo ($type["id"]); ?>"><?php echo ($type["type"]); ?></a><?php endforeach; endif; ?>
						
					</span>
				</div>
			</div>
			<!--酒店区域-->
			<div class="hotel-area">
				<div class="hotel-area-qy clearfix">
					<h5>区域</h5>
					<span class="hotel-area-all">全部</span>
					<span class="region">
						<a href="#"><b>行政区</b></a>
						<div class="triange-region">
							<i class="triange"></i>
							<div class="region-hotel">
								<div class="district-list-ab clearfix">
								<?php if(is_array($area)): foreach($area as $key=>$area): ?><a href="/nuomi/index.php/Link/id/<?php echo ($area["id"]); ?>"><?php echo ($area["area"]); ?></a><?php endforeach; endif; ?>
									
									
								</div>
							</div>
						</div>
							
							
						</div>
					</span>
				</div>
				<div class="hotel-price clearfix">
					<h5>价格</h5>
					<span class="bjprice">全部</span>
					<span class="filter-items-ab">
						<a href="">0-50元</a>
						<a href="">50-100元</a>
						<a href="">100-200元</a>
						<a href="">200-300元</a>
						<a href="">300元以上</a>
					</span>
				</div>
				<div class="w-hotel-crumbs">
					<span class="infor">
						共找到郑州酒店团购
						<span class="hotel-number">6786</span>
						个
					</span>
				</div>
				
			</div>
			<div class="normal">
				<span class="sort-area">
					<a href="#" class="sort-default sort-normal">默认</a>
					<a href="#" class="price-default">
						<span>价格</span>
						<i class="price-default-ico"></i>
					</a>
					<a href="#" class="sort-up">
						<span>折扣</span>
						<i class="sort-up-ico"></i>
					</a>
					<a href="#" class="sort-new">
						<span>最新发布</span>
						<i class="sort-new-ico"></i>
					</a>
				</span>
				<span class="filter-area">
					<div class="filter-checkbox">
						<input type="checkbox" name=""/>免预约
					</div>
					<div class="filter-checkbox">
						<input type="checkbox" name=""/>抵用卷
					</div>
					<div class="filter-checkbox ">
						<input type="checkbox" name=""/>
						<span class="filter-checkbox-ico">全网最低</span>
						<span class="hot-tip">
							
						</span>
					</div>
				</span>
				<span class="sortbar-right">
					<div class="w-search" style="display:block;">
						<input type="text" name="" value="酒店"/>
						<input type="submit" name="" value=""/>
					</div>
					<div class="page-area">
						<a href="#">
							<span><</span>
						</a>
							<span class="pagg-number" style="color:#000;font-size:12px;">
								<span class="current">
									<strong style="color:red;font-size:12px;">1</strong>
								</span>
								/1
							</span>
							
						<a href="#">
							<span>></span>
						</a>
					</div>
				</span>
			</div>
			
		</div>
		<div id="j-goods-area">
			<div class="goods-area clearfix">
			  <?php if(is_array($goods)): foreach($goods as $key=>$good): ?><ul class="goods-area-ul clearfix">
					<li class="goods-area-li clearfix">
						<a href="/nuomi/index.php/Details/index/id/<?php echo ($good["id"]); ?>">
							<div class="imgbox">
								<div style="display:none;" class="block">
									<div class="range-area"></div>
									<div class="range-inner">
										<span class="locate-iconfont"></span>
										<p><?php echo ($good["cate_id"]); ?></p>
									</div>
								</div>
								<div class="borderbox">
									<img width="224px" height="135px" src="/nuomi/Public/<?php echo ($good["img"]); ?>"/>
								</div>
								<div class="contentbox">
									<a href="#">
										<div class="header-title clearfix">
											<h4>【<?php echo ($good["id"]); ?>】<?php echo ($good["name"]); ?></h4>
										</div>
										<p><?php echo ($good["descr"]); ?></p>
									</a>
									<div class="add-info">
										<span class="promo"><?php echo ($good['is_best'] == '1' ? "精品":""); ?></span>
									</div>
									<div class="pinfo clearfix">
										<span class="price">
											<span class="moneyico">¥</span>
											<?php echo ($good["price"]); ?>
										</span>
										<span class="ori-price">
											价值
											<span class="price-line">
												¥
												<del><?php echo ($good["oldprice"]); ?></del>
											</span>
										</span>
									</div>
									<div class="footer clearfix">
										<span class="comment-disable">暂无评分</span>
										<span class="sold">新单</span>
										<div class="bottom-border"></div>
									</div>
								</div>
							</div>
						</a>
					</li>
				</ul><?php endforeach; endif; ?>
			</div>
			<!--分页-->
			<div class="w-channel-pager clearfix">
				<div class="pager-info">
					共
					<span class="good-total ml5 mr5">6792</span>
					条/每页
					<span class="ml5 mr5">80</span>
					条
				</div>
				<div class="ui-pager">
					<a href="#" class="pager-f">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">6</a>
					<a href="#">7</a>
					<a href="#">8</a>
					<a href="#">9</a>
					<a href="#">10</a>
					<a href="#">11</a>
					
				</div>
			</div>
		</div>
       


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

	<script type="text/javascript"charset="utf-8">
		
		$("#click").toggle(function(){
          	$(this).find("div").show();
		
        },function(){
        	$(this).find("div").hide();
        });
    
        $("#hidden-hotel-click").toggle(function(){
        	$(this).find("div").show();
        },function(){
        	$(this).find("div").hide();
        });
		
		
		//显示具体位置
		$(".goods-area-li").hover(function(){
			$(this).find(".block").show();
		},function(){
		$(".block").fadeOut();
		});
		
		

	</script>

</html>