<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>Welcome to SDCN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="/SDCN/public/css/bootstrap.min.css" rel="stylesheet">
		<link href="/SDCN/public/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="/SDCN/public/css/site.css" rel="stylesheet">
		<link href="/SDCN/public/css/index.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
	
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">SDCN</a>
						<div class="nav-collapse">
							<ul class="nav">
								<h5>��ӭ�������ǵ���վ��</h5>
							</ul>
							<ul class="nav pull-right">
								<li class="dropdown">
									<a href="profile.html" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($username); ?> <b class="caret"></b></a>
									<ul class="dropdown-menu" >
										<li><a href="accountinformation.html">�û���Ϣ</a></li>
										<li><a href="passwordmodify.html">�޸�����</a></li>
									</ul>
								</li>
								<li>
									<a href="login.html">�˳�</a>
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
								�����û�����
							</li>
							<li class="active">
								<a href="userinformation.html"><i class="icon-white icon-home"></i> �û���Ϣ</a>
							</li>
							<li>
								<a href="usermanagement.html"><i class="icon-folder-open"></i>�û����� </a>
							</li>
							<li>
								<a href="usergroupinformation.html"><i class="icon-check"></i> �û�����Ϣ</a>
							</li>
							<li>
								<a href="usergroupmanagement.html"><i class="icon-envelope"></i> �û������</a>
							</li>
							<li class="nav-header">
								�������
							</li>
							<li>
								<a href="nodeinformation.html"><i class="icon-picture"></i> �ڵ���Ϣ</a>
							</li>
							<li>
								<a href="nodemanagement.html"><i class="icon-stop"></i> �ڵ����</a>
							</li>
							<li class="nav-header">
								��·�豸����
							</li>
							<li>
								<a href="facilityinformation.html"><i class="icon-picture"></i> �豸��Ϣ</a>
							</li>
							<li>
								<a href="facilitymanagement.html"><i class="icon-stop"></i> �豸����</a>
							</li>
						</ul>
					</div>
				</div>
	<div>
	<h1 align="center"> welcome! </h1>
	<span>�����ఴť������վ����</span>
</div>
			</div>
		</div>
	</div>
		<script src="/SDCN/public/js/jquery.min.js"></script>
		<script src="/SDCN/public/js/bootstrap.min.js"></script>
		<script src="/SDCN/public/js/site.js"></script>
	</body>