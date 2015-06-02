<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/tp/Public/blog_files/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/tp/Public/blog_files/blog.css">
<title>博文内容</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/tp/index.php/Home/Login/login">LOGIN</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="/tp/index.php/Home/Blog/blog">Home</a></li>
					<li><a href="/tp/index.php/Home/Upload/upload">upload</a></li>
				</ul>
				<form action=".blog.html/search" class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" name="kw" class="form-control" placeholder="关键字" />
					</div>
					<button type="submit" class="btn btn-default">搜索</button>
				</form>
			</div>
		</div>
	</div>
    <div class="container-fluid blog-container"><div class="row">
	<div class="col-md-9 blog-container-list">

<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ol class="breadcrumb">
<li><a href="/tp/index.php/Home/Blog/blog">Home</a></li><li class="active">"<?php echo ($vo["title"]); ?>"</li></ol>    </div>
<nr></br>
	<div class="page-header">
	<h2><?php echo ($vo["name"]); ?></h2>
</div>
<div class="panel">
	<div class="panel-body"><?php echo ($vo["content"]); ?>
	</div>
	<div class="panel-footer">
		<span></span>
		创建于：<?php echo ($vo["date"]); ?>

	</div>

</div>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v["id"] == $vo['id']): echo ($v["id"]); ?>--<?php echo ($v["data"]); ?><br/><?php endif; endforeach; endif; else: echo "" ;endif; ?>


</div>


<form action="/tp/index.php/Home/blog/upload" method="post">
<p><input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" /></p>
<p>评论: <input type="text" name="data" /></p>
<p><input type="submit" value=" 提交 " /></p>
</form><?php endforeach; endif; else: echo "" ;endif; ?>

</div></div></div>
	<div class="container-fluid text-center">
		&copy; 2014 - 2015		Toruneko. All rights reserved.
		Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.        <a href="http://sae.sina.com.cn/">
            <img title="Sae App Engine" alt="Sae App Engine" width="117" height="12" src="http://sae.sina.com.cn/doc/_images/poweredby-117x12px.gif"/>
	    </a>
    </div>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/main/blog.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
var offset = 20;

var current = window.location.href;
$('.nav li').each(function(){
    var href = $(this).find('a').attr('href');
    if(href == current){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }else if(current.match('^'+href+'.*')){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }
});


var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e259f8f91c0fa95b00c128e2cb9c9503";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

/*]]>*/
</script>
</body>
</html>