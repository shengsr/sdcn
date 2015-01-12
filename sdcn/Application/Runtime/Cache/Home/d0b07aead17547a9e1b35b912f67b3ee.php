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
										<li><a href="accountinformation.html">用户信息</a></li>
										<li><a href="passwordmodify.html">修改密码</a></li>
									</ul>
								</li>
								<li>
									<a href="logout.html">退出</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
							<li class="nav-header">
								用户管理
							</li>
							<li class="active">
								<a href="userinformation.html"><i class="icon-white icon-home"></i> 管理用户</a>
							</li>
							<li>
								<a href="usermanagement.html"><i class="icon-folder-open"></i>管理用户组</a>
							</li>
							<li class="nav-header">
								在线内容节点管理
							</li>
							<li>
								<a href="nodeinformation.html"><i class="icon-picture"></i> 节点管理</a>
							</li>
							<li>
								<a href="nodemanagement.html"><i class="icon-stop"></i> 状态维护</a>
							</li>
							<li class="nav-header">
								流量和缓存信息
							</li>
							<li>
								<a href="facilityinformation.html"><i class="icon-picture"></i> 缓存内容管理</a>
							</li>
							<li>
								<a href="facilitymanagement.html"><i class="icon-stop"></i> 总体流量信息</a>
							</li>
							<li>
								<a href="facilityinformation.html"><i class="icon-picture"></i> http流量信息</a>
							</li>
							<li>
								<a href="facilitymanagement.html"><i class="icon-stop"></i> 图片类流量信息</a>
							</li>
							<li>
								<a href="facilityinformation.html"><i class="icon-picture"></i>App类流量信息</a>
							</li>
							<li>
								<a href="facilitymanagement.html"><i class="icon-stop"></i> 各协议的流量分布信息</a>
							</li>
							<li>
								<a href="facilitymanagement.html"><i class="icon-stop"></i> 缓存请求数</a>
							</li>
							<li>
								<a href="facilitymanagement.html"><i class="icon-stop"></i> 缓存命中率</a>
							</li>
							<li>
								<a href="facilitymanagement.html"><i class="icon-stop"></i> 缓存吐出流量</a>
							</li>
							<li class="nav-header">
								内容热度信息
							</li>
							<li>
								<a href="nodeinformation.html"><i class="icon-picture"></i> 内容访问频次</a>
							</li>
							<li class="nav-header">
								SDCN-C 提供服务统计
							</li>
							<li>
								<a href="nodeinformation.html"><i class="icon-picture"></i> 服务展示</a>
							</li>
						</ul>
					</div>
				</div>

	
			</div>
		</div>
	</div>
		<script src="/sdcn/Public/js/jquery.min.js"></script>
		<script src="/sdcn/Public/js/bootstrap.min.js"></script>
		<script src="/sdcn/Public/js/site.js"></script>
	</body>