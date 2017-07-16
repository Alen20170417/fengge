<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf8" http-equiv="Content-Type">  
<link rel="shortcut icon" href="http://maileden.com/img/favicon.ico" type="image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="show出你的峰の格，博客分享，技术交流，资料下载，紧跟技术前沿，行业最新动态，分享技术族之间的生活">
<meta name="keywords" content="峰の格，期待你show出自己的峰の格">
<meta name="author" content="Allen">
<title>峰の格</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/general.css')}}">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body style="overflow: hidden;">

<section class="g-main">
<div class="container">
		<div class="m-logo">
			<a href="http://www.aree-community.info/"><img src="{{asset('img/logo-web2x.png')}}" alt="maileden" width="99" height="19"></a>
		</div>
		<ul class="m-nav"> 
                    <li><a href="{{ route('fgg')}}">峰の格</a> </li>
                    <li><a href="{{ route('example')}}?user=1">项目案例</a> </li>
                    <li><a href="{{ route('blog')}}">博客分享</a> </li>
                    <li><a href="{{ route('commnunicate') }}">技术交流</a> </li>
                    <li><a href="{{ route('download') }}">资料专区</a> </li>
                    <li><a href="{{ route('life') }}">峰の生活</a> </li>
                    <li><a href="{{ route('contact') }}">联系我</a> </li>
		</ul>
		<div class="dropdown header-resp">
		  <a id="dLabel" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="fa fa-bars"></span>
		  </a>
		 <ul class="dropdown-menu .header-menu-r" aria-labelledby="dLabel">
			 <li><a href="{{ route('fgg')}}">峰の格</a> </li>
                        <li><a href="{{ route('example')}}?user=1">项目案例</a> </li>
                        <li><a href="{{ route('blog')}}">博客分享</a> </li>
                        <li><a href="{{ route('commnunicate') }}">技术交流</a> </li>
                        <li><a href="{{ route('download') }}">资料专区</a> </li>
                        <li><a href="{{ route('life') }}">峰の生活</a> </li>
                        <li><a href="{{ route('contact') }}">联系我</a> </li>
			 <li class="header-menu-rs2"><a href="{{ route('login') }}"> 登陆</a></li>
			 <li class="header-menu-rs"><a href="{{ route('register') }}"> 注册 </a></li> 
		 </ul>  
		</div> 
		<ul class="m-btn"> <li class="login"><a href="{{ route('login') }}">登陆</a></li> <li class=""><a href="{{ route('register') }}" class="menu-btn">注册</a></li> </ul>

		<div class="m-sec">
		<h2> Design and Develop <br> emails visually </h2>
		<p>Build dynamic, responsive emails without writing code. Send with a click, and enjoy the fastest, most reliable email solution...</p>
		<div class="btn-respo-main">
		<a href="{{route('ufgg')}}" class="sec-btn2">Yours 峰の格</a>
		<a href="{{route('share')}}" class="sec-btn">技术or资料分享</a>
			</div>
		</div>
</div>
<div class="a-illustation"><img src="{{asset('img/illustration2x.png')}}" style="margin-top: 75px;margin-right: 60px;" width="758" height="600"></div>
<div class="a-illustation2"><img src="{{asset('img/illustration2.png')}}"></div>
</section>

</body>
<script src="js/jquery-ui.js"></script>
<script src="js/retina.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$('.dropdown').dropdown();
$('.dropdown2').dropdown();
</script>

</html>