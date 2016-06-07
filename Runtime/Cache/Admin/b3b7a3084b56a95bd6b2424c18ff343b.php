<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>部门人数柱状统计图</title>
        <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
		<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
        <script src="/Public/Admin/js/highcharts.js"></script>
        <script src="/Public/Admin/js/exporting.js"></script>

        <script type="text/javascript">
            $(function () {
                var chart = $('#container').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: '部门人数柱状统计图'
                    },
                    subtitle: {
                        text: '数据来自: <a href="http://www.cccs.com">My WebSite</a>'
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: '人数 (人)'
                        }
                    },
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        pointFormat: '截止目前: <b>{point.y:.0f} 人</b>'
                    },
                    series: [{
                        name: 'Population',
                        data: <?php echo ($data); ?>,
                        dataLabels: {
                            enabled: true,
                            rotation: -90,
                            color: '#FFFFFF',
                            align: 'right',
                            format: '{point.y:.0f}', // one decimal
                            y: 10, // 10 pixels down from the top
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    }]
                });
            });
        </script>
	</head>
	<body>
        <div class="topbar-wrap white">
            <div class="topbar-inner clearfix">
            <div class="topbar-logo-wrap clearfix">
                <h1 class="topbar-logo none"><a href="../index.html" class="navbar-brand">后台管理</a></h1>
                <ul class="navbar-list clearfix">
                    <li><a class="on" href="../index.html">首页</a></li>
                    <li><a href="http://www.mycodes.net/" target="_blank">网站首页</a></li>
                </ul>
            </div>
            <div class="top-info-wrap">
                <ul class="top-info-list clearfix">
                    <li><a href="#">管理员</a></li>
                    <li><a href="#">修改密码</a></li>
                    <li><a href="#">退出</a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="container clearfix">
            <div class="sidebar-wrap">
                <div class="sidebar-title">
                    <h1>菜单</h1>
                </div>
                <div class="sidebar-content">
                    <ul class="sidebar-list">
                        <li>
                            <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                            <ul class="sub-menu">
                                <li><a href="design.html"><i class="icon-font">&#xe008;</i>家居管理</a></li>
                                <li><a href="design.html"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                                <li><a href="design.html"><i class="icon-font">&#xe005;</i>职位管理</a></li>
                                <li><a href="javascript:;" date-src="<?php echo U('User/showList');?>"><i class="icon-font">&#xe005;</i>用户管理</a></li>
                                <li><a href="design.html"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                                <li><a href="design.html"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                            <ul class="sub-menu">
                                <li><a href="../system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                                <li><a href="../system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                                <li><a href="../system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                                <li><a href="../system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/sidebar-->
            <div class="main-wrap">
                 <div class="crumb-wrap">
                    <div class="crumb-list">
                        <i class="icon-font"></i>
                        <a href="../index.html">首页</a>
                        <span class="crumb-step">&gt;</span>
                        <span class="crumb-name">职员管理</span>
                        <span class="crumb-step">&gt;</span>
                        <span>部门人数统计表</span>
                        <input class="btn btn6" onclick="history.go(-1)" value="返回上一页" type="button">
                        <a href="/index.php/Admin/User/showList" class="btn btn6">返回职员信息列表</a>
                    </div>
                 </div>
                 <div id="container"></div>
            </div>
        </div>
	</body>
</html>