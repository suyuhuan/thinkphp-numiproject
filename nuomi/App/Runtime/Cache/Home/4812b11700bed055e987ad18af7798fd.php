<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title>百度糯米-注册页</title>
	<link rel="stylesheet" type="text/css" href="/nuomi/Public/home/css/userReg.css">
	<script src="/nuomi/Public/home/js/jquery.js"></script>
</head>
<body>
	<div id="header">
		<div class="w">
			<div class="logo">
				<a href="/nuomi/index.php/index.html"><img src="/nuomi/Public/home/images/logo.jpg"/></a>
			</div>
			<div class="login-area">
				我已注册，现在就
				<a class="login-btn" href="/nuomi/index.php/userLogin">登录</a>
			</div>
		</div>
	</div>

	<div id="main">
		<div class="w">
			<div class="reg-content">
			<form action="/nuomi/index.php/UserReg/index" method="POST">
				<p>用 户 名 <input class="reg-place input-text" type="text" placeholder="用户名" name="username">
					<span class="uerror" style="color:red;font-size:12px;display:none;"></span>
				</p>
				<p>密　　码 <input class="reg-place input-text" type="password" placeholder="密码" name="pwd">
					<span class="perror" style="color:red;font-size:12px;display:none;"></span>
				</p>
				<p>重复密码 <input class="reg-place input-text" type="password" name="repwd">
					<span class="rperror" style="color:red;font-size:12px;display:none;"></span>
				</p>
				<p>验 证 码 <input class="reg-code input-text" type="text" placeholder="验证码" name="code"><img id="code" width="120" height="40" style="margin-left:20px" src="/nuomi/index.php/UserReg/regcode" /></p>
				<p class="reg-check">	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked"> 阅读并接受<a href="">《百度用户协议》</a></p>
				<p>	&nbsp;	&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input class="reg-submit" type="submit" value="注册" name="sub"></p>
			</form>
		</div>
		<div class="reg-sms">
			<div class="reg-sms-title">手机快速注册</div>
			<div class="reg-sms-content">
				<p class="reg-sms-p-text">请使用中国大陆手机号，编辑短信:</p>
				<p class="reg-sms-p-warn">6-14位字符(支持数字/字母/符号)</p>
				<p class="reg-sms-p-text">作为登录密码，发送至:</p>
				<p class="reg-sms-p-warn">1069 80000 36590</p>
				<p class="reg-sms-p-last">即可注册成功，手机号即为登录账号。</p>
			</div>
		</div>
		</div>
		
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
			<a class="link" target="_blank" href="">京ICP证030173号</a> 京公网安备11010802014106号  <a class="link" href="" target="_blank">互联网药品信息服务资格证编号（京-经营性-2011-0009）</a> 
		</div>
	</div>
</div>
                                                                                            
</body>
<script>

	$("#code").click(function(){
		this.src = this.src+"?"+Math.random();
	});
    //判断用户
    $("input[name='username']").blur(function(){
    	var user = $("input[name='username']").val();
    	if(user==''){
    		$(".uerror").show();
    		$(".uerror").text('*用户名不能为空！');
    	}else{
    		if(user.length < 4 || user.length > 18){
    			$(".uerror").show();
    			$(".uerror").text('*用户名须4-18个字符！');
    		}else{
    			$.ajax({
    				'type':'post',
    				'url':'/nuomi/index.php/UserReg/checkUsername',
    				'data':{'username':user},
    				'success':function(data){
    					if(data == 1){
    						$('.uerror').show();
    						$('.uerror').text('*用户名已存在!');
    					}
    				},'async':false});
    			}
    		}
    }).focus(function(){
    	$('.uerror').text('');
    	$('.uerror').hide();
    });
    //判断密码
    $("input[name='pwd']").blur(function(){
    	var pass = $("input[name='pwd']").val();
    	if(pass==''){
    		$(".perror").show();
        	$(".perror").text('*密码不能为空!');
    	}else{
	        if(pass.length < 4 ||pass.length > 16){
	        	$(".perror").show();
	        	$(".perror").text('*密码长度须在4-16之间!');
	        }
        }
    }).focus(function(){
    	$(".perror").text('');
    	$(".perror").hide();
    });
    $("input[name='repwd']").blur(function(){
    	var pass = $("input[name='pwd']").val();
    	var repass = $("input[name='repwd']").val();
    	if(repass != pass){
    		$('.rperror').show();
    		$('.rperror').text('两次密码不一致！');
    	}
    }).focus(function(){
    	$(".rperror").text('');
    	$(".rperror").hide();
    })
</script>
</html>