<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
$this->need('header.php');
?>
<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php 
$this->permalink();
?>"><?php 
$this->title();
?></a></h1>
        <ul class="post-meta">
            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php 
_e(' 时间: ');
?><time datetime="<?php 
$this->date('c');
?>" itemprop="datePublished"><?php 
$this->date();
?></time></li>
            <li><i class="fa fa-bookmark-o" aria-hidden="true"></i><?php 
_e(' 分类: ');
$this->category(',');
?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php 
$this->content();
?>
        </div>
        <p itemprop="keywords" class="tags"><i class="fa fa-tag" aria-hidden="true"></i><?php 
_e(' 标签: ');
$this->tags(', ', true, 'none');
?></p>
    </article>

    <?php 
$this->need('comments.php');
?>

    <ul class="post-near">
        <li>上一篇: <?php 
$this->thePrev('%s', '没有了');
?></li>
        <li>下一篇: <?php 
$this->theNext('%s', '没有了');
?></li>
    </ul>
</div><!-- end #main-->
<?php 
$this->need('footer.php');