<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
<?php if (!is_pjax()) { ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php 
$this->options->charset();
?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php 
$this->archiveTitle(array('category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章')), '', ' - ');
$this->options->title();
?></title>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php 
$this->options->themeUrl('/css/grid.css');
?>">
    <link rel="stylesheet" href="<?php 
$this->options->themeUrl('/css/style.css');
?>">

    <script src="/usr/themes/Sea/js/pace.min.js"></script>
    <link href="/usr/themes/Sea/css/pace.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- 通过自有函数输出HTML头部信息 -->

    <script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/usr/themes/Sea/js/jquery.pjax.js"></script>

<script>
jQuery(document).ready(function(){
    var $=jQuery; 
        //绑定链接
    $.pjax({
        selector: "a[href^='<?php $this->options->siteUrl();?>']",
        container: '.row', //内容替换的容器
        show: 'slide',  //展现的动画，支持默认和fade, 可以自定义动画方式，这里为自定义的function即可。
        cache: false,  //是否使用缓存
        storage: true,  //是否使用本地存储
        titleSuffix: ' - 初心', //标题后缀
        filter: function(){},
        callback: function(status){
            $("#nav-menu").addClass("animated fadeInUp");
        }
    }); 
        //绑定跳转开始事件
    $(".row").bind("pjax.start",
         function() { 
            $(".row").css("opacity","0.6");
            $(".spinner").css("opacity","1");
            $(".spinner").show();               
            
     });
        //绑定跳转结束事件
    $(".row").bind("pjax.end",
         function() {  
            $(".spinner").hide();
            $(".row").css("opacity","1");
            // Main
	    initHeader();
	    addListeners();
	    if (navigator.userAgent.indexOf('Firefox') >= 0){
		document.documentElement.scrollTop=120;
	    }
	    else
		{
	        $('body').animate({scrollTop: 120});
	    }
     }); 
}); 
</script>

    <?php 
$this->header();
?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php 
_e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>');
?>.</div>
<![endif]-->

<!-- header start -->
<header>
    <div class="container clearfix">
        <div class="logo left">
            <a id=logo href="<?php 
$this->options->siteUrl();
?>" title="<?php 
$this->options->title();
?>">
                <?php 
$this->options->title();
?>
            </a>
        </div>
        <div class="search left">
        </div>
        <div class="nav nav-user right">
            <div class="toggle-menu"></div>
            <ul>
       <?php 
$this->widget('Widget_Contents_Page_List')->to($pages);
?>
       <?php 
while ($pages->next()) {
    ?>
       <li> <a<?php 
    if ($this->is('page', $pages->slug)) {
        ?> class="current"<?php 
    }
    ?> href="<?php 
    $pages->permalink();
    ?>" title="<?php 
    $pages->title();
    ?>"><?php 
    $pages->title();
    ?></a></li>
       <?php 
}
?>
            <li><a href="https://bwcx.site/admin" class="button-login">登录</a></li>      
            </ul>
        </div>
    </div>
</header>
<!-- header end -->
<?php } ?>
<div id="body">
    <div class="container">
        <div class="row">