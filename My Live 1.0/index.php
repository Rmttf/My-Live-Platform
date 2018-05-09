<!DOCTYPE html>
<html>

	<head>
		<title>直播页面</title>
		<meta charset='UTF-8'>
		<meta content='True' name='HandheldFriendly'>
		<meta content='width=device-width, initial-scale=1.0' name='viewport'>
		<meta name="keywords" content="直播页面" />
		<meta name="description" content="直播页面" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link href='http://www.startbbs.com' rel='canonical'>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">		<link href="http://10.1.254.10/static/common/css/style.css" media="screen" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			var baseurl = 'http://10.1.254.10/';
			var siteurl = 'http://10.1.254.10/index.php';
			var sitedomain = '254.10';
		</script>
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>		<!--[if lt IE 9]>
		
		<![endif]-->
		<script src="http://10.1.254.10/static/common/js/topic.js" type="text/javascript"></script>
		<script src="http://10.1.254.10/static/common/js/plugins.js" type="text/javascript"></script>
		<script src="http://10.1.254.10/static/common/js/jquery.upload.js" type="text/javascript"></script>
		<script src="http://10.1.254.10/static/common/js/local.file.js" type="text/javascript"></script>

		<script>
			var xmlHttp; //定义XMLHttpRequest对象
			function createXmlHttpRequestObject() {
				if(window.ActiveXObject) { //如果在internet Explorer下运行
					try {
						xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
					} catch(e) {
						xmlHttp = false;
					}
				} else {
					try { //如果在Mozilla或其他的浏览器下运行
						xmlHttp = new XMLHttpRequest();
					} catch(e) {
						xmlHttp = false;
					}
				}
				if(!xmlHttp) //返回创建的对象或显示错误信息
					alert("返回创建的对象或显示错误信息");
				else
					return xmlHttp;
			}

			function showsimple() { //创建主控制函数
				createXmlHttpRequestObject();
				//var us = document.getElementById("Name").value; //获取表单提交的值    us == ""&&
				var nu = document.getElementById("content").value;
				
				if(nu == "") { //判断表单提交的值不能为空
					alert('添加的数据不能为空！');
					return false;
				}
				var post_method = "content=" + nu; //构造URL参数

				xmlHttp.open("POST", "study.php", true); //调用指定的添加文件
				xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;"); //设置请求头信息
				xmlHttp.onreadystatechange = StatHandler; //判断URL调用的状态值并处理
				xmlHttp.send(post_method); //将数据发送给服务器

			}

			function StatHandler() { //定义处理函数
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200) { //判断如果执行成功，则输出下面内容
					if(xmlHttp.responseText != "") {
						//alert("数据添加成功！");
						//将服务器返回的数据定义到DIV中
						document.getElementById("webpage").innerHTML = xmlHttp.responseText;
					}
					/*else {
					alert("添加失败！"); //如果返回值为空
				}*/
				}
			}
		</script>
		<script>
			window.onload = function() {
				var s = setInterval("sc()", 100);
			}

			function sc() {
				var div = document.getElementById("div1");
				div1.scrollTop = div1.scrollHeight;
			}
		</script>

		<link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
		<script src="http://vjs.zencdn.net/5.8.8/video.js"></script>
		<!-- If you'd like to support IE8 -->
		<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

	</head>

	<body name="top">
		<div id="navbar-wrapper">
			<div id="navigation" class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
                		</button>
						<a class="navbar-brand" href="http://10.1.254.10/index.php">冰炫<span class='green'>互联</span></a>
						<!--<a class=".btn .btn-default navbar-btn collapsed" data-target=".navbar-collapse" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><a href="http://10.1.254.10/index.php" class="brand">Start<span class="green">BBS</span></a>-->
					</div>

					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="http://10.1.254.10/index.php">首页</a>
							</li>
							<li>
								<a href="http://10.1.254.10/index.php/node">节点</a>
							</li>
							<li>
								<a href="http://10.1.254.10/index.php/user">会员</a>
							</li>
							<li>
								<a href="http://10.1.254.10/index.php/tag">标签</a>
							</li>
							<li>
								<a href="http://10.1.254.10/index.php/topic/add">发表</a>
							</li>
						</ul>

						<form action="http://10.1.254.10/index.php/search" method="post" accept-charset="utf-8" class="navbar-form navbar-left" target="_blank" role="search">
							<div style="display:none">
								<input type="hidden" name="stb_csrf_token" value="264a4092ef8819826238977797295a6c" />
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="keyword" placeholder="输入关键字回车">
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">

							<li>
								<a href="http://10.1.254.10/index.php/message"><span class="glyphicon glyphicon-envelope"></span> </a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-user'></span> more <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<a href="http://10.1.254.10/index.php/user/profile/35548">个人主页</a>
									</li>
									<li>
										<a href="http://10.1.254.10/index.php/message">站内信</a>
									</li>
									<li>
										<a href="http://10.1.254.10/index.php/settings">设置</a>
									</li>
									<li class="divider"></li>
									
									<li>
										<a href="http://10.1.254.10/index.php/user/logout">退出</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->

				</div>
			</div>

		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div id="main-container" class="con">
						<div id="room-head" class="panel-heading topic-detail-heading">
							<div class="pull-right">
								<a href="http:// "><img src="http://10.1.254.10/uploads/avatar/2/92/19992_normal.png" alt="';?>"></a>
							</div>
							<p>
								<a href="http://10.1.254.10/">首页</a> /
								<a href="http:">内网直播</a>
								<h2 class="panel-title">直播用户名</h2>

							</p>
							<p></p>
						</div>
						
						<div id="room-player-box">
							<video id="my-video" class="video-js" controls preload="auto" width="616" height="450" poster="MY_VIDEO_POSTER.jpg" data-setup="{}" autoplay="autoplay">
								<source src="rtmp://10.1.13.111:1935/live/livestream" type='rtmp/flv'>

								<p class="vjs-no-js">
									To view this video please enable JavaScript, and consider upgrading to a web browser that
									<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
								</p>
							</video>

						</div>
					</div>
					<div class="panel-footer"></div>
					<!--空白条幅-->

					<div id="error"></div>

				</div>
				<!-- /.col-md-8 -->

				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">直播聊天</div>
						<div id="div1" class="panel-body" style="height:300px;overflow-y:auto" >
							<ul>
								<li>
									<p name="con-out">
										<span><!-- 聊天内容 -->
										<script>

											function showsimple2() { //创建主控制函数
												createXmlHttpRequestObject();
												
												xmlHttp.open("POST", "select.php", true); //调用指定的添加文件
												xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;"); //设置请求头信息
												xmlHttp.onreadystatechange = StatHandler; //判断URL调用的状态值并处理
												xmlHttp.send(null); //将数据发送给服务器
												
											}
									
											function StatHandler() { //定义处理函数
												if(xmlHttp.readyState == 4 && xmlHttp.status == 200) { //判断如果执行成功，则输出下面内容
													if(xmlHttp.responseText != "") {
														//alert("数据添加成功！");
														//将服务器返回的数据定义到DIV中
														document.getElementById("webpage2").innerHTML = xmlHttp.responseText;
														
													} /*else {
														alert("添加失败！"); //如果返回值为空
													}*/
												}
											}
											setInterval("showsimple2()",1000);
											
										</script>
										<div id="webpage2"></div>
									</span>
									</p>
								</li>
							</ul>
						</div>
					</div>

					<form id="searchform" name="searchform" method="post" action="#">

						<input id="content" name="content" type="text"  size="20" />
						<input type="reset" name="Submit" value="发送" onclick="showsimple();" />

					</form>

					<div id="webpage"></div>

				</div>
				<!-- /.col-md-4 -->

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

		<footer class="small">
			<div class="container">
				<div class="row">
					<p>冰炫互联 统计代码 </p>
					<p>Powered by
						<a href="http://10.1.254.10" class="text-muted" target="_blank">很奔放</a>
						V1.0 2006-2017 Some rights reserved 页面执行时间: 0.0468s</p>
				</div>
			</div>
		</footer>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	</body>

</html>