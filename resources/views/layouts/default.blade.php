<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Sample') - Laravel学习</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/home.css">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- 引入头部文件 -->
	@include('layouts._header')
	
	<!-- 引入闪存文件信息 -->
	@include('users.shared._message')

	@yield('content')

	<!-- 引入底部文件 -->
	@include('layouts._footer')
</body>
</html>