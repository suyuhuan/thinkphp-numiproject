<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="/nuomi/Public/home/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/templet.css">
	
	
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/index.css">

	
	<script>
	    $('.advert>h3').click(function(){
	    	$('.advert').css('display','none');
	    });
	   
	</script>

</head>
<body>
			<!-- 广告 -->
	
	<div class="advert" id="adv">
		<a href="<?php echo ($tgg["url"]); ?>">
        	<img src="/nuomi/Public/<?php echo ($tgg["image"]); ?>" alt="<?php echo ($tgg["title"]); ?>" width="1263px" height="80px"/>
        	<img src="/nuomi/Public/<?php echo ($tgg["image"]); ?>" alt="<?php echo ($tgg["title"]); ?>" width="1263px" height="80px" style="display:none;"/>
        	<img src="/nuomi/Public/<?php echo ($tgg["image"]); ?>" alt="<?php echo ($tgg["title"]); ?>" width="1263px" height="80px" style="display:none;"/>
        </a>
        	<h3>X</h3>
        </div>

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
	
	
	<div id="index-main">
		<div class="w">
			
	<div class="left-menu">
		<?php if(is_array($category)): foreach($category as $key=>$categorys): if($categorys['pid'] == 0): ?><div class="level-item">
					<ul>
						<li class="title"><a href="/nuomi/index.php/goodslist/index/id/<?php echo ($categorys["id"]); ?>"><?php echo ($categorys["name"]); ?></a></li>
						<!--li class="list"><a href="">精选品牌</a></li-->
						<!--li class="list"><a href="">小吃快餐</a></li-->
					</ul>
					<div class="second-menu">
						<ul>			
							<?php if(is_array($category)): foreach($category as $key=>$categorys_child): if($categorys_child['pid'] == $categorys['id']): ?><li class="second-menu-list">
										<a href="/nuomi/index.php/menu/id/<?php echo ($categorys_child["id"]); ?>"><?php echo ($categorys_child["name"]); ?></a>
										<span class="sep-lines">
									</li><?php endif; endforeach; endif; ?>								
						</ul>
					</div>
				</div><?php endif; endforeach; endif; ?>		
	</div>
			
			<div class="mid-menu">
				<div class="mid-menu-img">
					<div id="imgs">
						<?php if(is_array($adv)): foreach($adv as $key=>$advs): ?><a href="<?php echo ($advs["url"]); ?>"><img class="img" alt="<?php echo ($advs["title"]); ?>" src="/nuomi/Public/<?php echo ($advs["image"]); ?>"/></a><?php endforeach; endif; ?> 
					<!-- <a href=""><img class="img" src="/nuomi/Public/home/images/index-main2.jpg"></a> 
					<a href=""><img class="img" src="/nuomi/Public/home/images/2015-11-14_162720.jpg"></a>  -->
				</div>
				</div>
				<div class="mid-menu-lbox">
					<ul>
						<li class="mid-menu-title">热门团购</li>
						<li class="mid-menu-list"><a href="">电影</a></li>
						<li class="mid-menu-list"><a href="">自助餐</a></li>
						<li class="mid-menu-list"><a href="">KTV</a></li>
						<li class="mid-menu-list"><a href="">火锅</a></li>
						<li class="mid-menu-list"><a href="">蛋糕</a></li>
						<li class="mid-menu-list"><a href="">酒店</a></li>
						<li class="mid-menu-list"><a href="">小吃快餐</a></li>
						<li class="mid-menu-list"><a href="">西餐</a></li>
					</ul>
				</div>
				<div class="mid-menu-mbox">
					<ul>
						<li class="mid-menu-title">热门团购</li>
						<li class="mid-menu-list"><a href="">电影</a></li>
						<li class="mid-menu-list"><a href="">自助餐</a></li>
						<li class="mid-menu-list"><a href="">KTV</a></li>
						<li class="mid-menu-list"><a href="">火锅</a></li>
						<li class="mid-menu-list"><a href="">蛋糕</a></li>
						<li class="mid-menu-list"><a href="">酒店</a></li>
						<li class="mid-menu-list"><a href="">小吃快餐</a></li>
						<li class="mid-menu-list"><a href="">西餐</a></li>
					</ul>
				</div>
				<div class="mid-menu-rbox">
					<ul>
						<li class="mid-menu-title">热门团购</li>
						<li class="mid-menu-list"><a href="">电影</a></li>
						<li class="mid-menu-list"><a href="">自助餐</a></li>
						<li class="mid-menu-list"><a href="">KTV</a></li>
						<li class="mid-menu-list"><a href="">火锅</a></li>
						<li class="mid-menu-list"><a href="">蛋糕</a></li>
						<li class="mid-menu-list"><a href="">酒店</a></li>
						<li class="mid-menu-list"><a href="">小吃快餐</a></li>
						<li class="mid-menu-list"><a href="">西餐</a></li>
					</ul>
				</div>
			</div>
		
			<div class="right-menu">
				<div class="right-menu-tbox">
					<a href="<?php echo ($dj["url"]); ?>"><img src="/nuomi/Public/<?php echo ($dj["image"]); ?>" height="260px" width="248px"/></a>
				</div>
				<div class="right-menu-box">
					<a href="<?php echo ($xgg["url"]); ?>"><img src="/nuomi/Public/<?php echo ($xgg["image"]); ?>" height="150px" width="248px"></a>
				</div>
			</div>	
			<div class="clear"></div>


			<div class="lw">
				<div class="jingxuanpp">
					<div class="jingxuanpp-nav">
						<span>精选品牌-<span class="litle">抢购频道</span></span>
						<a href="">全部 >></a></div>
					<div class="jingxuanpp-content">
						<ul>
							<li class="no-left-margin">
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/267f9e2f07082838890f9423be99a9014c08f183.jpg" /></a>
									<div class="header"><h4>王婆大虾</h4></div>
									<div class="pinfo">
										<span class="price">&yen;420</span>
										<span class="ori-price">&yen;500</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/267f9e2f07082838890f9423be99a9014c08f183.jpg"/></a>
									<div class="header"><h4>王婆大虾</h4></div>
									<div class="pinfo">
										<span class="price">&yen;420</span>
										<span class="ori-price">&yen;500</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/267f9e2f07082838890f9423be99a9014c08f183.jpg"/></a>
									<div class="header"><h4>王婆大虾</h4></div>
									<div class="pinfo">
										<span class="price">&yen;420</span>
										<span class="ori-price">&yen;500</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/267f9e2f07082838890f9423be99a9014c08f183.jpg"/></a>
									<div class="header"><h4>王婆大虾</h4></div>
									<div class="pinfo">
										<span class="price">&yen;420</span>
										<span class="ori-price">&yen;500</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>			
					
				<div class="today-recom">
					<div class="today-recom-nav"><h3>今日推荐</h3></div>
					<div class="today-recom-content">
						<ul>
							<li class="no-left-margin">
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/50da81cb39dbb6fd97cac01e0f24ab18972b3770.jpg" height="138px" width="225px"/>
									</div>
								</a>
								<div class="contentbox">
									<a href="">
										<div class="header">
											<h4>王鼎汇砂</h4>
											<span class="collected">精选</span>
										</div>
										<p>曼哈顿店100元代金券!可叠加使用，提供免费WiFi，节假日通用!</p>
									</a>
										<div class="add-info">
											<span class="promo">立减10元</span>
										</div>
										<div class="pinfo">
											<span class="price">&yen;84</span>
											<span class="ori-price">价值&yen;100</span>
										</div>
										<div class="footer">
											<span class="comment">4.4分</span>
											<span class="sold">已售2078</span>
										</div>
								</div>
								
							</li>	
							<li>
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/50da81cb39dbb6fd97cac01e0f24ab18972b3770.jpg" />
									</div>
								</a>
								<div class="contentbox">
									<a href="">
										<div class="header">
											<h4>王鼎汇砂</h4>
											<span class="collected">精选</span>
										</div>
										<p>曼哈顿店100元代金券!可叠加使用，提供免费WiFi，节假日通用!</p>
									</a>
										<div class="add-info">
											<span class="promo">立减10元</span>
										</div>
										<div class="pinfo">
											<span class="price">&yen;84</span>
											<span class="ori-price">价值&yen;100</span>
										</div>
										<div class="footer">
											<span class="comment">4.4分</span>
											<span class="sold">已售2078</span>
										</div>
									</div>
								
							</li>	
							<li>
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/50da81cb39dbb6fd97cac01e0f24ab18972b3770.jpg"/>
									</div>
								</a>
								<div class="contentbox">
									<a href="">
										<div class="header">
											<h4>王鼎汇砂</h4>
											<span class="collected">精选</span>
										</div>
										<p>曼哈顿店100元代金券!可叠加使用，提供免费WiFi，节假日通用!</p>
									</a>
										<div class="add-info">
											<span class="promo">立减10元</span>
										</div>
										<div class="pinfo">
											<span class="price">&yen;84</span>
											<span class="ori-price">价值&yen;100</span>
										</div>
										<div class="footer">
											<span class="comment">4.4分</span>
											<span class="sold">已售2078</span>
										</div>
									</div>
									
							</li>	
							<li>
								<a href="">
									<div class="imgbox">
										<img src="/nuomi/Public/home/images/50da81cb39dbb6fd97cac01e0f24ab18972b3770.jpg"/>
									</div>
								</a>
								<div class="contentbox">
									<a href="">
										<div class="header">
											<h4>王鼎汇砂</h4>
											<span class="collected">精选</span>
										</div>
										<p>曼哈顿店100元代金券!可叠加使用，提供免费WiFi，节假日通用!</p>
									</a>
										<div class="add-info">
											<span class="promo">立减10元</span>
										</div>
										<div class="pinfo">
											<span class="price">&yen;84</span>
											<span class="ori-price">价值&yen;100</span>
										</div>
										<div class="footer">
											<span class="comment">4.4分</span>
											<span class="sold">已售2078</span>
										</div>
									</div>
									
							</li>					
						</ul>
					</div>
				</div>

			<div class=""></div>	
	<div id="goods-list">
			<?php if(is_array($goods)): foreach($goods as $gg=>$good): ?><div class="today-recom-nav"><h3><?php echo ($gg); ?></h3></div>
					
						
						<div class="goods-content">
						
						<ul class="clearfix">
								<?php if(is_array($good)): foreach($good as $key=>$list): ?><a href="/nuomi/index.php/Details/index/id/<?php echo ($list["id"]); ?>">
							<li class="ul-list">
									<div class="imgbox">
										<img src="/nuomi/Public/<?php echo ($list["img"]); ?>"/>
									</div>								
								<div class="contentbox">								
										<div class="header">
											<h4>【<?php echo ($list["id"]); ?>】<?php echo ($list["name"]); ?></h4>
										</div>
										<p><?php echo ($list["descr"]); ?></p>								
										<div class="add-info">
											
											<span <?php if($list['is_best'] == 1): ?>class="promo"<?php endif; ?>><?php echo ($list['is_best'] == '1' ? "精品" : ''); ?></span>

											<span <?php if($list['is_phone'] == 1): ?>class="phone"<?php endif; ?>>	<span <?php if($list['is_phone'] == 1): ?>class="text"<?php endif; ?>></span><?php echo ($list['is_phone'] =='1'?'手机专享':''); ?></span>
										</div>

										<div class="pinfo clearfix">
											<span class="price">&yen;<?php echo ($list["price"]); ?></span>
											<span class="ori-price">价值&yen;<?php echo ($list["oldprice"]); ?></span>
										</div>
										
										<div class="footer">
											<span class="comment">4.4分</span>
											<span class="sold">已售2078</span>
										</div>
									</div>
								</li>	
							</a><?php endforeach; endif; ?>
										
							</ul>
					
						</div>
						
					
					<div class="more" style="margin-bottom:20px;"><a href="">查看全部团购 ></a></div><?php endforeach; endif; ?>
				</div>
				
				<div class="clear"></div>
			</div>
				

			<div class="rw">
				<div class="hot-area">
					<h2>热门专题</h2>
					<ul>
						<li>
							<a href="">
								<div class="left-content">
									<h3>味蕾诱惑</h3>
									<p>性感美食等你来</p>
									<span class="sold-info">已售144496513</span>
								</div>
								<div class="right-pic">
									<img src="/nuomi/Public/home/images/8cb1cb1349540923171a84f09758d109b2de49c9.jpg">
								</div>
							</a>
						</li>

						<li>
							<a href="">
								<div class="left-content">
									<h3>味蕾诱惑</h3>
									<p>性感美食等你来</p>
									<span class="sold-info">已售144496513</span>
								</div>
								<div class="right-pic">
									<img src="/nuomi/Public/home/images/8cb1cb1349540923171a84f09758d109b2de49c9.jpg">
								</div>
							</a>
						</li>

						<li>
							<a href="">
								<div class="left-content">
									<h3>味蕾诱惑</h3>
									<p>性感美食等你来</p>
									<span class="sold-info">已售144496513</span>
								</div>
								<div class="right-pic">
									<img src="/nuomi/Public/home/images/8cb1cb1349540923171a84f09758d109b2de49c9.jpg">
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="rw">
				<div class="panel">
					<h2>排行榜</h2>
					<ul class="nav">
						<li><a href="" class="active">美食</a></li>
						<li><a href="">电影</a></li>
						<li><a href="">娱乐</a></li>
						<li><a href="">生活</a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
					</ul>
					<div class="clear"></div>
					<ul class="panellist">
						<li>
							<a href="">
								<div class="img-holder">
									<img src="/nuomi/Public/home/images/f703738da97739126d759599fd198618377ae2f3.jpg">
								</div>
								<div class="content">
									<h4>大鸭梨</h4>
									<p>100元代金券！可叠加使用</p>
									<span class="price">&yen;85</span>
									<span class="ori-price">价值&yen;100</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="img-holder">
									<img src="/nuomi/Public/home/images/f703738da97739126d759599fd198618377ae2f3.jpg">
								</div>
								<div class="content">
									<h4>大鸭梨</h4>
									<p>100元代金券！可叠加使用</p>
									<span class="price">&yen;85</span>
									<span class="ori-price">价值&yen;100</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="img-holder">
									<img src="/nuomi/Public/home/images/f703738da97739126d759599fd198618377ae2f3.jpg">
								</div>
								<div class="content">
									<h4>大鸭梨</h4>
									<p>100元代金券！可叠加使用</p>
									<span class="price">&yen;85</span>
									<span class="ori-price">价值&yen;100</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="rw">
				<div class="panel">
					<h2>猜你喜欢</h2>
					<ul class="nav">
						<li><a href="" class="active">美食</a></li>
						<li><a href="">电影</a></li>
						<li><a href="">娱乐</a></li>
						<li><a href="">生活</a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
						<li style="display:none"><a href=""></a></li>
					</ul>
					<div class="clear"></div>
					<ul class="panellist">
						<li>
							<a href="">
								<div class="img-holder">
									<img src="/nuomi/Public/home/images/f703738da97739126d759599fd198618377ae2f3.jpg">
								</div>
								<div class="content">
									<h4>大鸭梨</h4>
									<p>100元代金券！可叠加使用</p>
									<span class="price">&yen;85</span>
									<span class="ori-price">价值&yen;100</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="img-holder">
									<img src="/nuomi/Public/home/images/f703738da97739126d759599fd198618377ae2f3.jpg">
								</div>
								<div class="content">
									<h4>大鸭梨</h4>
									<p>100元代金券！可叠加使用</p>
									<span class="price">&yen;85</span>
									<span class="ori-price">价值&yen;100</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="img-holder">
									<img src="/nuomi/Public/home/images/f703738da97739126d759599fd198618377ae2f3.jpg">
								</div>
								<div class="content">
									<h4>大鸭梨</h4>
									<p>100元代金券！可叠加使用</p>
									<span class="price">&yen;85</span>
									<span class="ori-price">价值&yen;100</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
	<div class="clear"></div>


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

	<script>
	    $('.advert>h3').click(function(){
	    	$('.advert').css('display','none');
	    });
	   
	</script>

</html>