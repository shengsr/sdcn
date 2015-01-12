<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>

<head>
	<title> SDCN user registration </title>
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
		<form class="regist_form" action="/sdcn/index.php/Home/Index/regist" method="post"  >
		<h1>SDCN</h1>
		<dl>
		<dt class="Row">
			<label for="username">用户名</label>
			<div id="email-wrapper">
				<input id="username" class="TextInput TextInput_large" type="text" name="name" >
				<script type="text/javascript">
					setTimeout(function(){try{var z=document.getElementById('username');z.focus();z.select();}catch(e){}},1);
				</script>
			</div>
		</dt>
		<dt class="Row">
			<label for="email">邮箱</label>
			<div id="email-wrapper">
				<input id="email" class="TextInput TextInput_large" type="text" name="email" >
			</div>
		</dt>
		<dt class="Row">
			<label for="password">密码</label>
			<div id="password-wrapper">
				<input id="password" class="TextInput TextInput_large" type="password" name="password" >
			</div>
		</dt>	
		<dt>
			<input id="login" class="Btn Btn_emph Btn_super" type="submit" value="注册" name="login">
			<span><?php echo ($errmsg); ?></span>
		</dt>
		</dl>
		</form>
	</div>
	</body>
</html>