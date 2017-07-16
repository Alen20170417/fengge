<!DOCTYPE html>
<html><head>
<title>用户注册</title> 
<meta content="text/html; charset=utf8" http-equiv="Content-Type">  
<link rel="shortcut icon" href="http://maileden.com/img/favicon.ico" type="image/x-icon">  
<meta name="viewport" content="width=device-width, initial-scale=0">
<meta name="description" content="show出你的峰の格，博客分享，技术交流，资料下载，紧跟技术前沿，行业最新动态，分享技术族之间的生活">
<meta name="keywords" content="峰の格，期待你show出自己的峰の格">
<meta name="author" content="Allen">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style1.css')}}">
<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!--[if (gte IE 6)&(lte IE 8)]>
      <script type="text/javascript" src="/v2016/js/selectivizr.js"></script>
<![endif]-->
</head>
<body>

<div class="g-header">
	<div class="container" style="margin-top:0px">
		<div class="row">
			<div class="col-sm-12">
				<div class="m-head-nav">
					<div class="logo"><a href="{{route('index')}}"><img src="{{asset('img/logo.gif')}}"></a></div>
					<div class="nav">
						<ul>
							<li><a href="{{route('index')}}">首页</a></li>
							<li><a href="{{route('index')}}">峰の格</a>
								<div class="nav-static-text">
									<ul>
										<li><strong>唯美图片</strong><a href="#tp/">唯美</a><a href="#xiaoqingxin/">小清新</a><a href="#lomo/">lomo</a><a href="#qmt/">文字</a><a href="#nvdr/">女生</a><a href="#shangan/">伤感</a><a href="#aiqing/" target="_blank" class="dq">爱情</a><a href="#keai/">可爱</a><a href="#fzl/">非主流</a><a href="#zipai/">美女</a></li>
										<li><strong>卡通图片</strong><a href="#dongman/">动漫</a><a href="#2ciyuan/">二次元</a><a href="#kttp/">卡通</a><a href="#gufeng/">古风</a><a href="#tag/%E6%8F%92%E7%94%BB/">插画</a><a href="#tag/%E6%89%8B%E7%BB%98/">手绘</a><a href="#tag/%E5%8D%A1%E5%93%87%E4%BC%8A/">卡哇伊</a><a href="#tag/%E6%80%A7%E6%84%9F%E5%8A%A8%E6%BC%AB%E7%BE%8E%E5%A5%B3/">美少女</a><a href="#tag/%E8%90%9D%E8%8E%89/">萝莉</a><a href="#tag/%E7%A6%8F%E5%88%A9/">福利</a></li>
										<li><strong>清新好看</strong><a href="#tag/%E5%A5%B3%E5%AD%A9/">女孩</a><a href="#tag/%E5%B8%86%E5%B8%83%E9%9E%8B/">帆布鞋</a><a href="#tag/%E8%8A%B1%E6%B5%B7/">花海</a><a href="#tag/%E6%82%B2%E4%BC%A4/">悲伤</a><a href="#tag/%E6%B5%B7%E8%BE%B9/">海边</a><a href="#tag/%E5%8D%83%E7%BA%B8%E9%B9%A4/" target="_blank" class="dq">千纸鹤</a><a href="#tag/%E7%B3%96%E6%9E%9C/">糖果</a><a href="#tag/%E6%AF%95%E4%B8%9A%E5%AD%A3/">毕业季</a><a href="#tag/%E4%BA%B2%E5%90%BB/">亲吻</a><a href="#tag/%E6%B2%BB%E6%84%88/">治愈系</a></li>
										<li><strong>头像图片</strong><a href="#tx/">女生</a><a href="#nstx/">男生</a><a href="#qltx/">情侣</a><a href="#omtx/">欧美</a><a href="#kttx/">卡通</a><a href="#katx/">可爱</a></li>
										<li><strong>说说图片</strong><a href="#sgshuoshuo/">伤感</a><a href="#aqshuoshuo/">爱情</a><a href="#xqshuoshuo/">心情</a><a href="#gxshuoshuo/">搞笑</a><a href="#jdshuoshuo/">经典</a><a href="#tpshuoshuo/">带图</a></li>
										<li><strong>其他图片</strong><a href="#gaoxiao/">搞笑</a><a href="#fengjing/">风景</a><a href="#dongwu/">动物</a><a href="#zhiwu/">植物</a><a href="#meishi/">美食</a><a href="#games/">游戏</a><a href="#oumei/">欧美</a><a href="#wenshen/">纹身</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#p/">最新案例</a></li>
							<li><a href="#tags/">博客分享</a></li>
							<li><a href="#albums/">技术交流</a> </li>
							<li><a href="#albums/">资料专区</a> </li>
							<li><a href="#pic/%E6%96%97%E5%9B%BE/">峰の生活 </a> </li>
						</ul>
					</div>
					<div class="search">
						<form action="/search/" id="form1" method="post">
							<input id="kw" name="kw" class="text" autocomplete="off" placeholder="请输入要搜索的内容" type="text">
							<input name="type" id="type" value="0" type="hidden">
							<div class="search-btn"><span class="glyphicon glyphicon-search"></span></div>
						</form>
					</div>
					<div class="login">
						<a href="#user/login">登陆</a> | <a href="#user/reg">注册</a>
					</div>
							
				</div>
			</div>
		</div>
	</div>
</div>
<div class="g-body" style="min-height: 480px;">
	<div class="container" style="margin-top: 0px;">
		<div class="m-register">
			<h4 class="title">用户注册</h4>
			<div class="row">
				<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
					<form class="form-horizontal login-form" role="form" method="post" name="reg_form" id="reg_form" action="{{route('reg')}}" onsubmit="return check_form()">
					  <div class="form-group">
						<label for="username" class="col-sm-3 control-label">帐号：</label>
						<div class="col-sm-6">
						  <input class="form-control" id="username" name="username" placeholder="请输入不小于6位的账号" type="text">
						</div>
					  </div>
					  <div class="form-group login-info">
						<div class="col-sm-offset-3 col-sm-10" id="username-info">
						  
						</div>
					  </div>
					  <div class="form-group">
						<label for="password" class="col-sm-3 control-label">密码：</label>
						<div class="col-sm-6">
						  <input class="form-control" id="password" name="password" placeholder="请输入6-18位的密码" type="password">
						</div>
					  </div>
					  <div class="form-group login-info">
						<div class="col-sm-offset-3 col-sm-10" id="password-info">
						  <span class="dager">
							<!-- <span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">您输入的账号格式不正确</font> -->
						  </span>
						</div>
					  </div>
                                          <div class="form-group">
						<label for="password1" class="col-sm-3 control-label">确认密码：</label>
						<div class="col-sm-6">
						  <input class="form-control" id="password1" name="password1" placeholder="请确认一次您的密码" type="password">
						</div>
					  </div>
					  <div class="form-group login-info">
						<div class="col-sm-offset-3 col-sm-10" id="password1-info">
						  <span class="dager">
							<!-- <span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">您输入的账号格式不正确</font> -->
						  </span>
						</div>
					  </div>
                                          <div class="form-group">
						<label for="password1" class="col-sm-3 control-label">邮箱：</label>
						<div class="col-sm-6">
						  <input class="form-control" id="email" name="email" placeholder="请输入您的邮箱" type="text">
						</div>
					  </div>
                                          <div class="form-group login-info">
						<div class="col-sm-offset-3 col-sm-10" id="email-info">
						  <span class="dager">
							<!-- <span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">您输入的账号格式不正确</font> -->
						  </span>
						</div>
					  </div>
                                          <div class="form-group">
						<label for="password1" class="col-sm-3 control-label">手机：</label>
						<div class="col-sm-6">
						  <input class="form-control" id="phone" name="phone" placeholder="请输入您的手机" type="text">
						</div>
					  </div>
                                          <div class="form-group login-info">
						<div class="col-sm-offset-3 col-sm-10" id="phone-info">
						  <span class="dager">
							<!-- <span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">您输入的账号格式不正确</font> -->
						  </span>
						</div>
					  </div>
                                          <div class="form-group">
						<label for="area" class="col-sm-3 control-label">目前所在地：</label>
						<div class="col-sm-6">
						  <input class="form-control" id="area" name="area" placeholder="请输入您的所在地" type="text">
						</div>
					  </div>
					  <div class="form-group login-info">
						<div class="col-sm-offset-3 col-sm-10" id="area-info">
						  <span class="dager">
							<!-- <span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">您输入的账号格式不正确</font> -->
						  </span>
						</div>
					  </div>
                                          <input type="hidden" name="_token" value="{{csrf_token()}}" />
					  <div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
						  <button type="submit" class="btn btn-success">注册</button>
						</div>
					  </div>
					  
					</form>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div style="border-left:1px solid #ccc;width:95%;min-height:380px;margin:25px 0px">
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="g-footer">
	<div class="m-copy">
		<ul>
			<li>Copyright© 2014-2017</li>
			<li>Powered by Allen</li>
		</ul>
		<ul>
			<li>粤ICP备17076284号-1</li>
			<li>QQ:398334077</li>
		</ul>
	</div>
</div>


<script type="text/javascript">
function check_form(){
	var reg_form=document.reg_form;
	var username=reg_form.username.value;
	var password=reg_form.password.value;
	
	$("#username-info").html('');
	$("#password-info").html('');

	if(username==""){
			$("#username-info").html('<span class="dager"><span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">请输入您的账号</font></span>');
			return false;
	}
	if(password==""){
			$("#password-info").html('<span class="dager"><span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">请输入您的密码</font></span>');
			return false;
	}

	$.post("{{route('regcheckform')}}",$('#reg_form').serialize(),function(data){
		if(data.m=='success'){
			reg_form.submit();
		}else{
			$("#"+data.m+"-info").html('<span class="dager"><span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">'+data.mess+'</font></span>');
		}
		return false;
	},'json');
	
	return false;
}

function checkbrowse() {
    var ua = navigator.userAgent.toLowerCase();
    var is = (ua.match(/\b(chrome|opera|safari|msie|firefox)\b/) || ['', 'mozilla'])[1];
    var r = '(?:' + is + '|version)[\\/: ]([\\d.]+)';
    var v = (ua.match(new RegExp(r)) || [])[1];
    return {
        'is': is,
        'ver': v
    }
}
</script>
<!--
<script type="text/javascript" src="{{asset('js/login.js')}}"></script>     -->

</body></html>