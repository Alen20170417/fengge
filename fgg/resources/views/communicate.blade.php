<!DOCTYPE html>
<html><head>
<title>用户登录</title> 
<meta content="text/html; charset=utf8" http-equiv="Content-Type">  
<link rel="shortcut icon" href="http://maileden.com/img/favicon.ico" type="image/x-icon">  
<meta name="viewport" content="width=device-width, initial-scale=0">
<meta name="description" content="show出你的峰の格，博客分享，技术交流，资料下载，紧跟技术前沿，行业最新动态，分享技术族之间的生活">
<meta name="keywords" content="峰の格，期待你show出自己的峰の格">
<meta name="author" content="Allen">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/style1.css')}}">
<link rel="stylesheet" href="{{asset('css/layui.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

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
					<div class="logo"><a href="http://www.aree-community.info/"><img src="{{asset('img/logo.gif')}}"></a></div>
					<div class="nav">
						<ul>
							<li><a href="http://www.aree-community.info/">首页</a></li>
							<li><a href="#">峰の格</a>
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
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
		<div class="wp cl">
<div class="wrap">
<div class="content">
<div class="fly-tab fly-tab-index">
<span>
<a href="http://www.aree-community.com/index.php">最新帖子</a>
<a href="http://www.aree-community.com/choice.html">精帖</a>
<a href="http://www.aree-community.com/user/index.html">我的帖子</a>
</span>
<form action="/search.html" class="layui-form fly-search">
<input placeholder="搜索" name="ks" required="" lay-verify="required" autocomplete="off" class="layui-input" type="text">
<button lay-submit="" class="search-btn-1" type="submit"><i class="glyphicon glyphicon-search"></i></button>
</form>
<a href="http://www.aree-community.com/add.html" class="layui-btn jie-add">发表帖子</a>
</div>
<ul class="fly-list fly-list-top">
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/1.html" class="fly-list-avatar">
<img src="{{asset('img/100_005.jpg')}}" alt="Templet360">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/32.html">本程序可以免费使用，但请不要删除版权和链接，如需要可以联系作者授权</a>
<span class="fly-tip-stick">置顶</span>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/1.html">Templet360</a></span>
<span>2017-03-15 04:20:45</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i> 6<i class="glyphicon glyphicon-eye-open" title="人气"></i> 997</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/1.html" class="fly-list-avatar">
<img src="{{asset('img/100_005.jpg')}}" alt="Templet360">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/3.html">添加Windows IIS，Apache和Nginx伪静态规则</a>
<span class="fly-tip-stick">置顶</span>
<span class="fly-tip-jing">精帖</span></h2>
<p>
<span><a href="http://www.aree-community.com/home/1.html">Templet360</a></span>
<span>2017-01-11 05:55:55</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 8<i class="glyphicon glyphicon-eye-open" title="人气"></i> 1585</span>
</p>
</li>
</ul>
<ul class="fly-list">
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/166.html" class="fly-list-avatar">
<img src="{{asset('img/100_011.jpg')}}" alt="">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/86.html">昵称不能修改，也不显示</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/166.html"></a></span>
<span>2017-06-14 10:24:40</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 0<i class="glyphicon glyphicon-eye-open" title="人气"></i> 7</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/1.html" class="fly-list-avatar">
<img src="{{asset('img/100_005.jpg')}}" alt="Templet360">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/84.html">[ Thinkphp5 ]实现QQ互联一键登录代码教程</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/1.html">Templet360</a></span>
<span>2017-06-13 12:10:52</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 0<i class="glyphicon glyphicon-eye-open" title="人气"></i> 205</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/118.html" class="fly-list-avatar">
<img src="{{asset('img/100.gif')}}" alt="攻城尸">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/83.html">为什么没有关注用户功能？</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/118.html">攻城尸</a></span>
<span>2017-06-12 10:58:48</span>
<span><a href="http://www.aree-community.com/view/2.html">意见建议</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 1<i class="glyphicon glyphicon-eye-open" title="人气"></i> 47</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/155.html" class="fly-list-avatar">
<img src="{{asset('img/100_017.jpg')}}" alt="七">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/82.html">怎么关闭调试模式</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/155.html">七</a></span>
<span>2017-06-04 07:58:49</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 2<i class="glyphicon glyphicon-eye-open" title="人气"></i> 83</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/42.html" class="fly-list-avatar">
<img src="{{asset('img/100_004.jpg')}}" alt="Dubhe">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/81.html">发布文章后 和点击以前的文章 链接都失效</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/42.html">Dubhe</a></span>
<span>2017-06-02 04:56:49</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 1<i class="glyphicon glyphicon-eye-open" title="人气"></i> 86</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/145.html" class="fly-list-avatar">
<img src="{{asset('img/100_015.jpg')}}" alt="小辰子奕">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/79.html">想测试一下这个问答系统</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/145.html">小辰子奕</a></span>
<span>2017-05-27 09:32:54</span>
<span><a href="http://www.aree-community.com/view/2.html">意见建议</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 5<i class="glyphicon glyphicon-eye-open" title="人气"></i> 166</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/114.html" class="fly-list-avatar">
<img src="{{asset('img/100_013.jpg')}}" alt="一个馒头">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/76.html">话说，这个系统，有没有一个完整的说明性的文档啊？</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/114.html">一个馒头</a></span>
<span>2017-05-14 03:42:08</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 5<i class="glyphicon glyphicon-eye-open" title="人气"></i> 288</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/114.html" class="fly-list-avatar">
<img src="{{asset('img/100_013.jpg')}}" alt="一个馒头">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/75.html">这个貌似没有   数据库备份  的选项啊。</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/114.html">一个馒头</a></span>
<span>2017-05-14 03:40:40</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 1<i class="glyphicon glyphicon-eye-open" title="人气"></i> 100</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/127.html" class="fly-list-avatar">
<img src="{{asset('img/100_016.jpg')}}" alt="皓月当空">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/74.html">为什么一直提示这个数据库的错误？</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/127.html">皓月当空</a></span>
<span>2017-05-13 12:02:08</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 2<i class="glyphicon glyphicon-eye-open" title="人气"></i> 109</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/126.html" class="fly-list-avatar">
<img src="{{asset('img/100.jpg')}}" alt="6789网络">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/73.html">IIS6 WIN2003 伪静态问题</a>
<span class="fly-tip-jing">精帖</span></h2>
<p>
<span><a href="http://www.aree-community.com/home/126.html">6789网络</a></span>
<span>2017-05-12 07:43:16</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 2<i class="glyphicon glyphicon-eye-open" title="人气"></i> 115</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/1.html" class="fly-list-avatar">
<img src="{{asset('img/100_005.jpg')}}" alt="Templet360">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/72.html">关于友言评论出现问题，可以换成畅言或者网易云跟贴</a>
<span class="fly-tip-jing">精帖</span></h2>
<p>
<span><a href="http://www.aree-community.com/home/1.html">Templet360</a></span>
<span>2017-05-09 10:00:43</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 4<i class="glyphicon glyphicon-eye-open" title="人气"></i> 163</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/122.html" class="fly-list-avatar">
<img src="{{asset('img/100_007.jpg')}}" alt="微凉徒眸意.">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/71.html">评论插件无故不在了</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/122.html">微凉徒眸意.</a></span>
<span>2017-05-07 01:54:04</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 4<i class="glyphicon glyphicon-eye-open" title="人气"></i> 107</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/121.html" class="fly-list-avatar">
<img src="{{asset('img/100_012.jpg')}}" alt="夜雨声烦">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/70.html">希望用户能删除自己的帖子和评论</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/121.html">夜雨声烦</a></span>
<span>2017-05-07 07:25:19</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 1<i class="glyphicon glyphicon-eye-open" title="人气"></i> 63</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/119.html" class="fly-list-avatar">
<img src="{{asset('img/5f2938d2jw1e8qgp5bmzyj2050050aa8.jpg')}}" alt="刘建新新">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/69.html">后台系统管理-网站配置-常用设置中的标签删除不了也添加不了！</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/119.html">刘建新新</a></span>
<span>2017-05-05 04:25:48</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 6<i class="glyphicon glyphicon-eye-open" title="人气"></i> 109</span>
</p>
</li>
<li class="fly-list-li">
<a href="http://www.aree-community.com/home/118.html" class="fly-list-avatar">
<img src="{{asset('img/100.gif')}}" alt="攻城尸">
</a>
<h2 class="fly-tip">
<a href="http://www.aree-community.com/thread/68.html">请问什么时候支持图片批量上传？</a>
</h2>
<p>
<span><a href="http://www.aree-community.com/home/118.html">攻城尸</a></span>
<span>2017-05-05 09:40:28</span>
<span><a href="http://www.aree-community.com/view/1.html">技术问答</a></span>
<span class="fly-list-hint"> 
<i class="glyphicon glyphicon-comment" title="回答"></i></i> 1<i class="glyphicon glyphicon-eye-open" title="人气"></i> 84</span>
</p>
</li>
</ul>
<div class="pages"><ul class="pagination"><li class="disabled"><span>上一页</span></li> <li class="active"><span>1</span></li><li><a href="http://www.aree-community.com/?page=2">2</a></li><li><a href="http://www.aree-community.com/?page=3">3</a></li><li><a href="http://www.aree-community.com/?page=4">4</a></li><li><a href="http://www.aree-community.com/?page=5">5</a></li><li><a href="http://www.aree-community.com/?page=6">6</a></li> <li><a href="http://www.aree-community.com/?page=2">下一页</a></li></ul></div>
</div>
</div>
<link rel="stylesheet" href="{{asset('css/right.css')}}">
<div class="edge">
<div class="fly-panel leifeng-rank"> 
<h3 class="fly-panel-title">最新会员</h3>
<dl>
<dd>
<a href="http://www.aree-community.com/home/169.html"><img src="{{asset('img/100_003.jpg')}}"><cite>10</cite><i>名流装饰</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/168.html"><img src="{{asset('img/100_002.gif')}}"><cite>10</cite><i>keke</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/167.html"><img src="{{asset('img/100_008.jpg')}}"><cite>10</cite><i>葡小萄</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/166.html"><img src="{{asset('img/100_011.jpg')}}"><cite>17</cite><i></i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/165.html"><img src="{{asset('img/100_003.gif')}}"><cite>21</cite><i>小蓝兔</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/164.html"><img src="{{asset('img/100.png')}}"><cite>10</cite><i>??? ?? ??</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/163.html"><img src="{{asset('img/100_002.png')}}"><cite>12</cite><i>＆☆阿逗仔＆★</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/162.html"><img src="{{asset('img/100_002.jpg')}}"><cite>12</cite><i>[17|6|键盘]麦子菲菲</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/161.html"><img src="{{asset('img/100_009.jpg')}}"><cite>10</cite><i>           倾心#</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/160.html"><img src="{{asset('img/100_010.jpg')}}"><cite>14</cite><i>清淡若水</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/159.html"><img src="{{asset('img/100_006.jpg')}}"><cite>10</cite><i>L?ng.C</i></a>
</dd>
<dd>
<a href="http://www.aree-community.com/home/158.html"><img src="{{asset('img/100_014.jpg')}}"><cite>14</cite><i>拾柒</i></a>
</dd>
</dl>
</div>
<div class="fly-panel fly-link leifeng-rank" style="padding-bottom: 0;"> 
<h3 class="fly-panel-title">板块列表</h3>
<ul>
<li><a href="http://www.aree-community.com/view/1.html">技术问答</a></li>
<li><a href="http://www.aree-community.com/view/2.html">意见建议</a></li>
<li><a href="http://www.aree-community.com/view/3.html">BUG反馈</a></li>
</ul>
</div>
<dl class="fly-panel fly-list-one"> 
<dt class="fly-panel-title">精选帖子</dt>
<dd>
<a href="http://www.aree-community.com/thread/73.html">IIS6 WIN2003 伪静态问题</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 115</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/72.html">关于友言评论出现问题，可以换成畅言或者网易云跟贴</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 163</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/61.html">Tpt-Forum1.1bata 20170501更新，之后下载新程序的可不用更新</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 228</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/49.html">基于TP5加Layui的轻社区系统 Tpt-Forum1.1 beta版 欢迎测试安装</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 497</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/24.html">有奖征集主题样式（对主题有需求的同学可以回帖提交自己想要的主题）</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 287</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/20.html">无法安装数据库的可以选择手工导入，如何导入？</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 453</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/14.html">关于程序的目录安全 以WIN2008举例</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 255</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/9.html">基于ThinkPHP加Layui的博客管理系统，交流QQ群： 423348395</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 785</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/3.html">添加Windows IIS，Apache和Nginx伪静态规则</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 1585</span>
</dd>
</dl>
<dl class="fly-panel fly-list-one"> 
<dt class="fly-panel-title">热门帖子</dt>
<dd>
<a href="http://www.aree-community.com/thread/32.html">本程序可以免费使用，但请不要删除版权和链接，如需要可以联系作者授权</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 997</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/81.html">发布文章后 和点击以前的文章 链接都失效</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 86</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/67.html">只有一个分类。。其实完全可以去掉分类，改为tag形式</a>
<span><i class="glyphicon glyphicon-eye-open"> </i>s 85</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/58.html">感觉能不能把博客跟社区，合并起来</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 84</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/68.html">请问什么时候支持图片批量上传？</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 84</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/82.html">怎么关闭调试模式</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 83</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/9.html">基于ThinkPHP加Layui的博客管理系统，交流QQ群： 423348395</a>
<span><i class="glyphicon glyphicon-eye-open"> </i>785</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/2.html">程序正式上线运营请把index.php里面调试模式关闭</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 751</span>
</dd>
<dd>
<a href="http://www.aree-community.com/thread/59.html">博客栏目 目录 弄成产品后无法添加</a>
<span><i class="glyphicon glyphicon-eye-open"> </i> 74</span>
</dd>
</dl>
<div class="fly-panel fly-link"> 
<h3 class="fly-panel-title">友情链接</h3>
<dl>
<dd>
<a href="https://www.baidu.com/" target="_blank">百度一下</a>
</dd>
</dl>
</div>
</div>
</div>
		
	</div>
</div>
<div class="g-footer">
	<div class="m-copy">
		<ul>
			<li>Copyright? 2014-2017</li>
			<li>Powered by Allen</li>
		</ul>
		<ul>
			<li>蜀ICP备14014694号-9</li>
			<li>QQ:398334077</li>
		</ul>
	</div>
</div>

<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript">
function check_form(){
	var login_form=document.login_form;
	//alert(login_form);
	//alert(login_form.InnerHTML);
	var username=login_form.username.value;
	var password=login_form.password.value;
	var vcode=login_form.vcode.value;
	
	$("#username-info").html('');
	$("#password-info").html('');
	$("#vcode-info").html('');
	if(username==""){
			$("#username-info").html('<span class="dager"><span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">请输入您的账号</font></span>');
			return false;
	}
	if(password==""){
			$("#password-info").html('<span class="dager"><span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">请输入您的密码</font></span>');
			return false;
	}
	if(vcode==""){
			$("#vcode-info").html('<span class="dager"><span class="glyphicon glyphicon-remove">&nbsp;</span><font color="#333">请输入验证吗</font></span>');
			return false;
	}
	
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

</body></html>