<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

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
									<a href="../User/login">退出</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

<div  class="span9" style="position: relative;left:16%;top:40px" >
<form action="/sdcn/index.php/Home/Index/index_form" method="post">
	<input type="url" name="content_url" size="50" placeholder="输入所查询内容的url" />
	<input type="submit" value="查询" />
</form>
<table class="table table-bordered table-striped"  >
	<caption> <b>节点信息表</b></caption>
	<thead>
		<tr valign="middle">
			<th >序号</th>
			<th >节点ip地址</th>
			<th>节点类型</th>
			<th>节点状态(0为不活跃,1为活跃)</th>		
			<th>缓存文件个数</th>			
			<th>缓存总空间(G)</th>
			<th>缓存使用率</th>
		</tr>
		
	</thead>
	<tbody>
		<?php if(is_array($node_list)): $k = 0; $__LIST__ = $node_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr text-align="center">
			<td width="30px"><?php echo ($k); ?></td>
			<td><a href="../Node/contentdistribution?ip=<?php echo ($vo["ip"]); ?>"><?php echo ($vo["ip"]); ?></a></td>
			<td><?php echo ($vo["node_type"]); ?></td>
			<td width="60px"><?php echo ($vo["status"]); ?></td>
			<td><?php echo ($vo["total_cache_num"]); ?></td>					
			<td ><?php echo ($vo["total_cache_size"]); ?></td>
			<td><?php echo ($vo["cache_used_rate"]); ?></td>		
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
 </div>
 </div>
 </body>