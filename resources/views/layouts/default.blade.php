<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Sample') - Laravel学习</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/home.css">
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