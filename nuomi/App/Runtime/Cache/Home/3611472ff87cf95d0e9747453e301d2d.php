<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="/nuomi/Public/home/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/templet.css">
	
	
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/detail.css">
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/css.css">

	
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
	
	<div class="p-detail clearfix">
			<div class="w-bread-crumb">
				<ul class="p-bread-crumb">
					<li class="curmb">
						<a href="#">团购</a>
						<span>></span>
					</li>
					<li class="curmb">
						<a href="#"><?php echo ($pid["name"]); ?></a>
						<span>></span>
					</li>
					<li class="curmb">
						<a href="#"><?php echo ($cate["name"]); ?></a>
						<span>></span>
					</li>
					<li class="curmb  crumb-last">
						<a href="#"><?php echo ($good['name']); ?></a>
					</li>
				</ul>
			</div>
		<form id="form" action="/nuomi/index.php/Getorder/index" method="post" enctype="multipart/form-data" >
			<div class="p-item-info clearfix">
				<div class="w-item-info clearfix">
					<input type="hidden" name="price" value="<?php echo ($good['price']); ?>">
					<input type="hidden" name="id" value="<?php echo ($good['id']); ?>">
					<input type="hidden" name="name" value="<?php echo ($good['name']); ?>">
					<input type="hidden" name="img" value="<?php echo ($good['img']); ?>">
					<input type="hidden" name="descr" value="<?php echo ($good['descr']); ?>">
					<h2><?php echo ($good['name']); ?></h2>
					<div class="item-list">
					<span class="text-main"><?php echo ($good['descr']); ?></span>
				</div>


			<!--图片左边-->
				<div class="ii-images clearfix">
					<div class="item-image">
						<div class="item-status clearfix">
						<div class="ico-status ico-multideal">
							<img src="/nuomi/Public/home/images/ico_freeappointment_60974ec.png"/>
						</div>
						</div>
						<img src="/nuomi/Public/<?php echo ($good['img']); ?>"/>
					</div>
					<!--缩略图部分breviary-->
					<ul class="breviary-pic">
						<li><a href="#"><img width="112px" height="66px" src="/nuomi/Public/<?php echo ($good['img']); ?>"/></a></li>
					</ul>
					<div class="collect-share">
						<a href="" class="collect-l" style="border-right:1px solid #ccc;">
							<i class="collect"></i>
							<span>收藏</span>
						</a>
						<a href="#" class="share-r" style="margin-left:20px;">
							<i class="share"></i>
							<span>分享</span>
						</a>
					</div>
					
				</div>
			
				
				<!--图片右边-->
				<div class="ii-intro">
					<div class="price-area clearfix">
						<!--现价-->
						<div class="match-price-area">
							<span class="unit">￥</span>
							<span class="real-price"><?php echo ($good['price']); ?></span>
						</div>
						
						<!--折扣-->
						<div class="current-price-area discount">
							<span class="current-price">3.3折</span>
							<span class="discount">折扣</span>
						</div>
						<!--原价-->
						<div class="market-price-area">
							<del class="market-price">￥<?php echo ($good['oldprice']); ?></del>
							<span class="market-area-a">价值</span>
						</div>
					</div>
					<div class="ul-ugc-strategy-area">
						<ul class="ugc-strategy-area">
							<li class="item-bought">
								<span class="intro-strong">180</span>
								人已团购
							</li>
							<li id="j-ugc-grade" class="ugc-grade">
								<!--小星星-->
								<div class="ugc-star clearfix">
									<div class="star"></div>
									<div class="star-num">4.3</div>
								</div>
								<!--几条评论-->
								<div class="ug-num">
									<span class="intro-strong">7</span>
									条评论
								</div>
							</li>
							<li class="heart">
								<i class="like"></i>
								<span><a href="#">随便退</a></span>
							</li>
						</ul>
					</div>
					<div class="buy-panel-wrap">
						<div class="item-countdown-row clearfix">
							<span class="name">有效期至</span>
							<span class="value">2015-12-17</span>
						</div>
						<div class="select-num clearfix">
							<div class="j-item-buycount-row clearfix">
								<span class="name">数&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量</span>
							</div>
							<div class="buycount-ctrl">
								<span href="#" class="dec" onclick="decr(this)">-</span>
								<input type="text" name="num" value=1>
								<span href="#" class="add" onclick="add(this)">+</span>
							</div>
						</div>
						<div class="divbuttom">
							<a href="javascript:sub()" id="buy">立即购买</a>
						</div>
					</div>
		
				</div>
	</form>		</div>
			
		</div>
			<div class="p-item-info-more">
				<div class="iim-wrapper clearfix">
					<!--详情左边-->
					<div class="info-detail">
						<!--套餐-->
						<div class="set-meal">
							<div class="set-meal-title">
								<span>速8酒店郑州火车站店其他热卖套餐</span>
								<div class="more">
									<span><a href="#">查看更多</a></span>
									<i class="ico-more"></i>
								</div>
							</div>
							<div class="sg-wrapper">
								<ul class="sg-list">
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									
								</ul>
								<ul class="hidden-ul" style="display:none;">
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<span class="sg-col sg-price">￥158</span>
											<span class="sg-col sg-discount">7.9折</span>
											<span class="sg-col sg-title">速8酒店郑州火车站店标准双床房入住1晚</span>
											<span class="sg-col sg-bought">151人团购</span>
										</a>
									</li>
									
								</ul>
							</div>
						<div id="j-cellingRecent" class="clearfix">
							<div class="j-cellingRecent-title">
								<span>买了又买</span>
								<div class="j-cellingRecent-title-r">
									<span>换一换</span>
									<i class="j-cellingRecent-ico"></i>
								</div>
							</div>
							<div class="buy2buy-item">
								<div class="buy2buy-item-f">
									<?php if(is_array($mlmgood)): foreach($mlmgood as $key=>$mlm): ?><a href="/nuomi/index.php/Details/index/id/<?php echo ($mlm["id"]); ?>.html" class="first">
											<img src="/nuomi/Public/<?php echo ($mlm["img"]); ?>"/>
											<span class="title"><?php echo ($mlm["name"]); ?></span>
											<div class="price-sold clearfix">
												<div class="price">
													<span class="current">¥<?php echo ($mlm["price"]); ?></span>
												</div>
												<div class="sold">
													<span class="name">已售</span>
													<span class="current">93</span>
												</div>
											</div>
										</a><?php endforeach; endif; ?>
									
								</div>				
							</div>
							<div class="grade">
								<div class="grade-title">
									<span>会员评分</span>
									<div class="grade-title-r">
										<span>查看全部评论</span>
										<i class="grade-ico"></i>
									</div>
								</div>
								<div class="grade-content clearfix">
									<div class="score fl">4.6</div>
									<div class="score-star fl">
										<div class="star ugc-star-wrap ">
											<div class="star ugc-star-grade"> </div>
										</div>
									</div>
									<div class="text fl">
										共有3977人评价，满意率
										<span>96.31%</span>
									</div>
								</div>
							</div>
							<div class="detail-menu">
								<ul class="detail-ul">
									<li class="detail-ul-li" style="color:#fff;">
										<a href="#detail">本单详情</a>
									</li>
									<li>
										<a href="#prompt">消费提示</a>
									</li>
									<li>
										<a href="#introduce">商家介绍</a>
									</li>
									<li>
										<a href="#member">会员评价</a>
									</li>
								</ul>
								<div class="hidden-menu">
									<div class="cb-price">
										<span>￥</span>
										49
									</div>
									<a href="#">
										立即抢购
									</a>
								</div>
							</div>
							<div class="annex-info" >
								<span class="annex-info-title">分店信息</span>
								<div class="annex-info-content">
									<div class="annex-info-map">
										<img src="/nuomi/Public/home/images/map.jpg"/>
									</div>
									<div class="annex-screen">
										<!--筛选-->
										<div class="j-area-filter">
											<div class="w-area-filter">
												<label>筛选:</label>
												<select id="j-af-1" class="af-content" name="city">
													<option selected="" value="2000010000">郑州市</option>
												</select>
												<select id="j-af-2" class="af-content" name="district">
													<option selected="">全部城区</option>
													<option value="6707">新郑市</option>
												</select>
											</div>
										</div>
										<!--筛选信息-->
										<div class="branch-list-content">
											<ul>
												<li>
													<a href="#">速8酒店火车站分店</a>
													<p>郑州火车站大同路与福寿街交叉口向北50米 紧邻火车站</p>
													<p>0371-65078888</p>
													<div class="brandch-ico">
														<div class="brandch-ico-map">
															<i class="map-ico"></i>
															<span>查询地图</span>
														</div>
														<div class="brandch-ico-buy">
															<i class="buy-ico"></i>
															<span>公交/驾车去这里</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									
								</div>
							</div>
							
							<div class="clearfix"></div>
							<!--内容套餐-->
							<div class="w-rich-text">
								<div class="w-rich-text-title">
									<span><a name="detail">套餐内容</a></span>
								</div>
								<div class="w-rich-text-content">
									<p>
										适用门店：
										郑州好如家酒店杜岭街店
										预约电话: -0371-66205888
										地址:杜岭街153号

										房型信息：
										大床房
										• 1 张床(2*1.8)
										• 有窗
										标准间
										• 2 张床(2*1.2)
										• 有窗

										入住提示:
										• 当日6点后入住，需次日12点前退房。
										• 以酒店收费标准为主

										购买须知:
										• 需提前至少1 天 致电商家预约。
										• 需携带有效证件（除驾驶证）办理入住。
										• 入住需缴纳100元押金。
										• 不可加床。
										• 使用多张券可连续入住。
										• 损坏房间内的物品，需照价赔偿。
										• 不能同时享受酒店其他优惠。
										• 请不要携带宠物入住 。
										• 加价信息：
										–加价信息请咨询商家。

										如需发票，请咨询商家。

										此产品由去哪儿网提供。
										
										
									</p>
								</div>
							</div>
							<div class="w-rich-text">
								<div class="w-rich-text-title">
									<span><a name="prompt">消费提示</a></span>
								</div>
								<div class="w-rich-text-content">
									<p>
										1、请携带有效证件办理入住登记；
										2、驾驶证不是有效证件；
										3、每位入住的客人都需要登记；
										4、如不小心损坏房间内的物品，需照价赔偿；
										*本团单由【去哪儿】提供，请联系商户时说明
										
									</p>
								</div>
							</div>
							<div class="w-rich-text">
								<div class="w-rich-text-title">
									<span><a name="introduce">团购详情</a></span>
								</div>
								<div class="w-rich-text-content">
									<img src="/nuomi/Public/home/images/bed.jpg"/>
								</div>
							</div>
							<!--评价部分-->
							<div style="height:125px;border-bottom:1px solid #ccc;">
								<div class="evaluate clearfix">
									<!--4.3星星-->
									<div class="score">
										<div class="score-top">
											<div class="score-num">
												4.3
											</div>
											<div class="list clearfix">
												<div class="list-star-bj">
													
												</div>
											</div>
										</div>
										<div class="score-bottom">
											此团单共67人评论
										</div>
									</div>
									<!--好中差评-->
									<div class="comment-level">
										<div class="comment-level-co">
											<!--好评-->
											<div class="good-reputation">
												<span class="g-reputation">好评</span>
												<span class="g-line"></span>
												<span class="g-num">54条</span>
											</div>
											<!--中评-->
											<div class="good-reputation">
												<span class="g-reputation">中评</span>
												<span class="g-line"></span>
												<span class="g-num">54条</span>
											</div>
											<!--差评-->
											<div class="good-reputation">
												<span class="g-reputation">差评</span>
												<span class="g-line"></span>
												<span class="g-num">54条</span>
											</div>
										</div>
									</div>
									<!--我要评价-->
									<div class="status">
										<div class="status-buy">
											我在百度糯米买过此单
										</div>
										<a href="#">我要评价</a>
									</div>
								</div>
							</div>
							<!--大家都在说-->
							<div class="say clearfix">
								<div class="say-title">
									<span>大家都在说</span>
								</div>
								<div class="say-content clearfix fl">
									<a href="#">房间条件不错（5）</a>
									<a href="#">酒店环境不错（5）</a>
									<a href="#">酒店服务周到（5）</a>
									<a href="#">房间条件还行（5）</a>
									<a href="#">服务态度良好（5）</a>
									<a href="#">酒店环境还行（5）</a>
								</div>
							</div>
							<!--评价-->
							
							<div class="valuation">
								<div class="valuation-title">
									<span><a name="member">全部评论</a></span>
								</div>
							<div class="ajax_box">
								<div class="valuation-content">
									<ul>
								    <?php if(is_array($info)): foreach($info as $key=>$vol): ?><div class="photo">
			                         	<img src="/nuomi/Public/Uploads/user/<?php echo ($vol["image"]); ?>?id/<?php echo rand();?>"/>
				                        <span><?php echo ($vol["username"]); ?></span>
			                          </div>
			                          <?php if(is_array($vol['comt'])): foreach($vol['comt'] as $key=>$vos): ?><div class="time">
												<?php if($vos["stute"] == 1): ?>追评：<?php endif; ?>
												<?php echo date('Y-m-d H:i:s',$vos['comtime']);?> 说：
											<div class="publish-star">

												<div id="pub-star" class="pub-star">
													<!-- {} -->
													<?php if($vos['goodpoint'] == 1): ?><div style="width:14px" class="light-star"></div>
													 <?php elseif($vos['goodpoint'] == 2): ?>
													 	<div style="width:28px" class="light-star"></div> 
													 <?php elseif($vos['goodpoint'] == 3): ?>
													 	<div style="width:42px" class="light-star"></div>
													  <?php elseif($vos['goodpoint'] == 4): ?>
													  	<div style="width:56px" class="light-star"></div> 
													  <?php elseif($vos['goodpoint'] == 5): ?>
													  	<div style="width:70px" class="light-star"></div><?php endif; ?>
												</div>
											</div>
										    </div>
				                            <li>
				                            	<?php echo ($vos['content']); ?>
				                            </li><?php endforeach; endif; endforeach; endif; ?>

									</ul>
								</div>
								<!--分页-->
								
								<div class="uipage" style="height:25px;margin-top:5px;text-align:right">
										<?php echo ($page); ?>
								</div>
						</div>
								<div class="bottom-buy">
									<div class="bottom-buy-cont">
										<ul class="bb-info-list clearfix">
											<li class="info-price">
												<span>￥</span>
												108
											</li>
											<li class="info-ori">
												<span>价值</span>
												<del>238</del>
											</li>
											<li class="info-discount">
												<span>折扣</span>
												<span>4.5折</span>
											</li>
											<li class="info-saving">
												<span>节省</span>
												<span>￥130</span>
											</li>
										</ul>
										<a href="#">立即购买</a>
									</div>
								</div>
								<div class="scan-history">
									<div class="scan-history-title">
										<span>
											根据您浏览历史的相关推荐
										</span>
										<div class="more">
											<span><a href="#">换一换</a></span>
											<i class="ico-more"></i>
										</div>
									</div>
									<div class="scan-history-content clearfix">
										<a href="#" class="first">
											<img src="/nuomi/Public/home/images/buy2buy-item-f.jpg"/>
											<span class="title">速8酒店郑州火车站店</span>
											<div class="price-sold clearfix">
												<div class="price">
													<span class="current">¥48</span>
												</div>
												<div class="sold">
													<span class="name">已售</span>
													<span class="current">93</span>
												</div>
											</div>
										</a>
										<a href="#" class="first">
											<img src="/nuomi/Public/home/images/buy2buy-item-f.jpg"/>
											<span class="title">速8酒店郑州火车站店</span>
											<div class="price-sold clearfix">
												<div class="price">
													<span class="current">¥48</span>
												</div>
												<div class="sold">
													<span class="name">已售</span>
													<span class="current">93</span>
												</div>
											</div>
										</a>
										<a href="#" class="first">
											<img src="/nuomi/Public/home/images/buy2buy-item-f.jpg"/>
											<span class="title">速8酒店郑州火车站店</span>
											<div class="price-sold clearfix">
												<div class="price">
													<span class="current">¥48</span>
												</div>
												<div class="sold">
													<span class="name">已售</span>
													<span class="current">93</span>
												</div>
											</div>
										</a>
										<a href="#" class="first">
											<img src="/nuomi/Public/home/images/buy2buy-item-f.jpg"/>
											<span class="title">速8酒店郑州火车站店</span>
											<div class="price-sold clearfix">
												<div class="price">
													<span class="current">¥48</span>
												</div>
												<div class="sold">
													<span class="name">已售</span>
													<span class="current">93</span>
												</div>
											</div>
										</a>
									</div>
									<div class="soon-scan">
										<div class="soon-scan-title">
											<span>最近浏览历史</span>
										</div>
										<div class="soon-scan-content">
											<div class="goods-item-recent-view">
												<a href="#">
													<img src="/nuomi/Public/home/images/soon-scan-img.jpg"/>
													<span>￥42</span>
												</a>
												<a href="#">
													<img src="/nuomi/Public/home/images/soon-scan-img.jpg"/>
													<span>￥42</span>
												</a>
												<a href="#">
													<img src="/nuomi/Public/home/images/soon-scan-img.jpg"/>
													<span>￥42</span>
												</a>
												<a href="#">
													<img src="/nuomi/Public/home/images/soon-scan-img.jpg"/>
													<span>￥42</span>
												</a>
												<a href="#">
													<img src="/nuomi/Public/home/images/soon-scan-img.jpg"/>
													<span>￥42</span>
												</a>
												<a href="#">
													<img src="/nuomi/Public/home/images/soon-scan-img.jpg"/>
													<span>￥42</span>
												</a>
												<a href="#">
													<img src="/nuomi/Public/home/images/soon-scan-img.jpg"/>
													<span>￥42</span>
												</a>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						</div>
						
					</div>
					
				
					
					<!--详情右边看了又看-->
					<div class="recommend-area clearfix">
						<div class="recommend-area-title clearfix">
							<span>看了又看</span>
							<div class="recommend-area-title-r">
								<span>换一换</span>
								<i class="circle"></i>
							</div>
						</div>
					
						<div class="recommend-area-content clearfix">
							<ul class="recommend-area-content-block clearfix">
							<?php if(is_array($klkgood)): foreach($klkgood as $key=>$klk): ?><li class="clearfix">
									<a href="/nuomi/index.php/Details/index/id/<?php echo ($mlm["id"]); ?>.html">
										<div class="content-img clearfix">
											<img src="/nuomi/Public/<?php echo ($klk["img"]); ?>"/>
										</div>
										<div class="content-writing">
											<span class="hotel-title">
												<?php echo ($klk["name"]); ?>
											</span>
											<div class="hotel-price">
												<span>￥<?php echo ($klk["price"]); ?></span>
												<del>￥<?php echo ($klk["oldprice"]); ?></del>
											</div>
										</div>
									</a>
								</li><?php endforeach; endif; ?>
							</ul>
							<ul class="recommend-area-content-none">
								
							</ul>
						</div>
					
						
					</div>
				</div>
			</div>
		</div>
		<script src="/nuomi/Public/home/js/detail.js"></script>
		<script type="text/javascript">
			function sub(){
				$('#form').submit();
			}

			$('.pagination').addClass('Yahoo');
			$('.pagination li').css('float','left');

			$('.pagination li>a').live('click',function(){
				var href = $(this).attr('href');
				$(this).attr('href','javascript:');
				 $.get(href,function(data){
					$('.ajax_box').html(data); 
				 })
			})

		</script>



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