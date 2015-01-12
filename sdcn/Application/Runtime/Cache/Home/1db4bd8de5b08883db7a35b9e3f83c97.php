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
								<h5>æ¬¢è¿Žæ¥åˆ°æˆ‘ä»¬çš„ç½‘ç«™ï¼</h5>
							</ul>
							<ul class="nav pull-right">
								<li class="dropdown">
									<a href="profile.html" class="dropdown-toggle" data-toggle="dropdown"><?php echo (session('name')); ?> <b 										class="caret"></b></a>
									<ul class="dropdown-menu" >
										<li><a href="accountinformation.html">ç”¨æˆ·ä¿¡æ¯</a></li>
										<li><a href="passwordmodify.html">ä¿®æ”¹å¯†ç </a></li>
									</ul>
								</li>
								<li>
									<a href="logout.html">é€€å‡º</a>
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
								<a href="../Index/index">ÏµÍ³Ê×Ò³</a>								
							</li>
							<li class="nav-header">
								½Úµã»º´æÐÅÏ¢
							</li>
							
							<li>
								<a href="cacherequest.html?ip=<?php echo ($ip); ?>"><i class="icon-stop"></i> »º´æÇëÇóÊý</a>
							</li>
							<li>
								<a href="cachehit.html"><i class="icon-stop"></i> »º´æÃüÖÐÂÊ</a>
							</li>
							<li>
								<a href="splitoutflow.html"><i class="icon-stop"></i> »º´æÍÂ³öÁ÷Á¿</a>
							</li>
							<li>
								<a href="splitinflow.html"><i class="icon-stop"></i> »º´æÁ÷ÈëÁ÷Á¿</a>
							</li>
							<li>
								<a href="contentdistribution.html?ip=<?php echo ($ip); ?>"><i class="icon-stop"></i> »º´æÄÚÈÝ·Ö²¼</a>
							</li>
							<li class="nav-header">
								¸÷½ÚµãÁ÷Á¿ÐÅÏ¢
							</li>
							<li>
								<a href="overallflow.html"><i class="icon-stop"></i> ×ÜÌåÁ÷Á¿</a>
							</li>
							<li>
								<a href="httpflow.html"><i class="icon-picture"></i> httpÁ÷Á¿</a>
							</li>
							<li>
								<a href="pictureflow.html"><i class="icon-stop"></i> Í¼Æ¬ÀàÁ÷Á¿</a>
							</li>
							<li>
								<a href="appflow.html"><i class="icon-picture"></i>AppÀàÁ÷Á¿</a>
							</li>
							<li>
								<a href="flowdistribution.html"><i class="icon-stop"></i>Á÷Á¿·Ö²¼</a>
							</li>
							<li class="nav-header">
								ÄÚÈÝÈÈ¶ÈÐÅÏ¢
							</li>
							<li>
								<a href="contentfrequence.html"><i class="icon-picture"></i> ÄÚÈÝ·ÃÎÊÆµ´Î</a>
							</li>
						</ul>
					</div>
				</div>
		</div>

</div>
	</body>