<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>Welcome to SDCN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/sdcn/Public/css/bootstrap.min.css" rel="stylesheet">
		<link href="/sdcn/Public/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="/sdcn/Public/css/site.css" rel="stylesheet">
		<link href="/sdcn/Public/css/index.css" rel="stylesheet">
		<script src="/sdcn/Public/js/jquery.min.js"></script>
		<script src="/sdcn/Public/js/bootstrap.min.js"></script>
		<script src="/sdcn/Public/js/site.js"></script>
		<script src="/sdcn/Public/js/highcharts.js"></script>
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
						 <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">SDCN</a>
						<div class="nav-collapse">
							<ul class="nav">
								<h5>欢迎来到我们的网站！</h5>
							</ul>
							<ul class="nav pull-right">
								<li class="dropdown">
									<a href="profile.html" class="dropdown-toggle" data-toggle="dropdown"><?php echo (session('name')); ?> <b 										class="caret"></b></a>
									<ul class="dropdown-menu" >
										<li><a href="../User/accountinformation">用户信息</a></li>
										<li><a href="../User/passwordmodify">修改密码</a></li>
									</ul>
								</li>
								<li>
									<a href="../User/logout">退出</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
<div class="span9">
<table class="table table-bordered table-striped" style="position:relative;left:16%;top:200px">
	<caption><b>该节点的内容信息</b></caption>
	<thead>
		<tr valign="middle">
			<th >url</th>
			<th >所在节点</th>
			<th>入库时间</th>
			<th>最后一次操作时间</th>
			<th>内容状态</th>
		</tr>		
	</thead>
	<tbody>
		<?php if(is_array($content_info)): $k = 0; $__LIST__ = $content_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr text-align="center">
			<td width="40px"><?php echo ($vo["url"]); ?></td>
			<td><?php echo ($vo["ip"]); ?></td>
			<td><?php echo ($vo["add_time"]); ?></td>
			<td><?php echo ($vo["add_time"]); ?></td>
			<td><?php echo ($vo["status"]); ?></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
</div>
</div>
</body>