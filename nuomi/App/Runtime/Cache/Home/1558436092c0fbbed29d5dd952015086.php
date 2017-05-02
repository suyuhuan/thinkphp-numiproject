<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title>百度糯米-登录页</title>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/userLogin.css">
</head>
<body>
	<div id="header">
		<div class="w">
			<div class="logo">
				<a href="/nuomi/index.php/index.html"><img src="/nuomi/Public/home/images/logo.jpg"/></a>
			</div>
			
			<div class="login-text">登录</div>
			<div class="reg-area">
				你还没有百度糯米账号
				<a class="reg-btn" href="/nuomi/index.php/userReg">注册</a>
			</div>
		</div>
	</div>

<div id="main">
	<div class="w">
		<div class="login-logo"></div>
		<div class="login-area">
			<div class="title">登录百度糯米</div>
			<div clss="login-form">
				<form action="/nuomi/index.php/UserLogin/index" method="post">
					<p ><a class="msg" href="">短信快捷登录</a></p>
					<p><input class="login-place1" type="text" name="name" placeholder="手机/邮箱/用户名/糯米账号"/></p>
					<p><input class="login-place2" type="password" name="pwd" placeholder="密码"/></p>
					<p class="login-check"><input  type="checkbox" name="memberPass" checked="checked">下次自动登录</p>
					<p><input class="login-submit" name='sub' type="submit" value="登　录"/></p>
				</form>
			</div>
		</div>
	</div>
	<div clear="both"></div>
</div>
<div id="footer">
	<div class="w">
		<div class="links">
			<a class="link" href="">关于百度糯米</a>
			<span>|</span>
			<a class="link" href="">常见问题</a>
			<span>|</span>
			<a class="link" href="">违规投诉&廉政举报</a>
			<span>|</span>
			<a class="link" href="">开放平台</a>
			<span>|</span>
			<a class="link" href="">用户协议</a>
			<span>|</span>
			客服电话:
			<span class="tel">4006-888-887</span>
			(每天9:00-22:00)
		</div>

		<div class="site-info">
			©2015 nuomi.com 
			<a class="link" target="_blank" href="">京ICP证030173号</a> 京公网安备11010802014106号  <a class="link" href="" target="_blank">互联网药品信息服务资格证编号（京-经营性-2011-0009）</a> </div>
	</div>
</div>
                                                                                            
</body>
</html>