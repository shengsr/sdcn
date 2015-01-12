<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>

<head>
	<title> SDCN user log in </title>
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel=stylesheet type=text/css href="/sdcn/Public/css/regist.css"/>
	<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<html> 
	<body>
	<div class ="page">
		<form class="regist_form" action="/sdcn/index.php/Home/Index/login" method="post"  >
		<h1>SDCN</h1>
		<dl>
		<dt class="Row">
			<label for="username">用户名或邮箱</label>		
			<div id="email-wrapper">
				<input id="username" class="TextInput TextInput_large" type="text" name="name" >
			</div>
		</dt>
		<dt class="Row">
			<label for="password">密码</label>		
			<div id="password-wrapper">
				<input id="password" class="TextInput TextInput_large" type="password" name="password" >
			</div>
		</dt>	
		<!--
		<dt class="Row">
			<label for="verification">ÑéÖ€Âë</label>
			<div id="verification-wrapper">
				<input id="verify" type="verification" name="verification">
			</div>
		</dt> 
		-->
		<dt class="Row">
			<span class="errmsg"><?php echo ($errmsg); ?></span></br></br>
			<input id="login" class="Btn Btn_emph Btn_super" type="submit" value="登录" name="login">
			<a class="no-account" target="_top" href="regist.html"> 新用户注册</a><br>
			<a class="forgot-password" target="_top" href="regist.html">忘记密码</a>
		</dt>
		</dl>
	    </form>
	</div>
    </body>
</html>