<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>404</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/404style.css') }}">
</head>
<body>
	<div id="container" class="container">
		<ul id="scene" class="scene">
			<li class="layer" data-depth="1.00"><img src="{{ asset('images/404/404-01.png') }}"></li>
			<li class="layer" data-depth="0.60"><img src="{{ asset('images/404/shadows-01.png') }}"></li>
			<li class="layer" data-depth="0.20"><img src="{{ asset('images/404/monster-01.png') }}"></li>
			<li class="layer" data-depth="0.40"><img src="{{ asset('images/404/text-01.png') }}"></li>
			<li class="layer" data-depth="0.10"><img src="{{ asset('images/404/monster-eyes-01.png') }}"></li>
		</ul>
		<a href="/" class="btn">返回首页</a>
	</div>
</body>
<!-- Scripts -->
	<script src="{{ asset('js/parallax.js') }}"></script>
	<script>
	// Pretty simple huh?
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
	</script>
</html>
