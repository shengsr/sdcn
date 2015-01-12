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
								<h5>欢迎来到我们的网站</h5>
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
			<div class="row">
				<div class="span3">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
							<li class="nav-header">
								<a href="../Index/index.html">系统首页</a>							
							</li>
							<li class="nav-header">
								各节点缓存信息
							</li>
							<li>
								<a href="contentdistribution.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i> 缓存内容分布</a>
							</li>
							<li>
								<a href="cacherequest.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i> 缓存请求数</a>
							</li>
							<li>
								<a href="cachehit.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i> 缓存命中率</a>
							</li>
							<li>
								<a href="splitoutflow.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i> 缓存吐出流量</a>
							</li>
							<li>
								<a href="splitinflow.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i> 缓存流入流量</a>
								
							</li>						
							<li class="nav-header">
								各节点流量信息
							</li>
							<li>
								<a href="overallflow.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i> 总体流量</a>
							</li>
							<li>
								<a href="httpflow.html?ip=<?php echo (session('ip')); ?>"><i class="icon-picture"></i> http流量</a>
							</li>
							<li>
								<a href="pictureflow.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i> 图片类流量</a>
							</li>
							<li>
								<a href="appflow.html?ip=<?php echo (session('ip')); ?>"><i class="icon-picture"></i>App类流量</a>
							</li>
							<li>
								<a href="flowdistribution.html?ip=<?php echo (session('ip')); ?>"><i class="icon-stop"></i>流量分布</a>
							</li>
							<li class="nav-header">
								内容热度信息
							</li>
							<li>
								<a href="contentfrequence.html?ip=<?php echo (session('ip')); ?>"><i class="icon-picture"></i> 内容访问频次</a>
							</li>
						</ul>
					</div>
				</div>


	<div class="span9" id="cachehit" /></div>
<script>
$(function () {
    $('#cachehit').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'cache hit times'
        },
        xAxis:{
			categories:<?php echo $x_label?>
        },
        yAxis: {
            min: 0,
            title: {
                text: 'times'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series:[{
            name: 'request times',
			data: <?php echo $data_request;?>  
        },
        {
            name: 'hit times',
			data: <?php echo $data_hit;?> 
        }]
    });
});
</script>
	</div>
</div>
</body>