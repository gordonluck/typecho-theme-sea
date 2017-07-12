<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
$this->need('header.php');
?>
    <div class="col-mb-12 col-8" id="main" role="main">
        <h3 class="archive-title"><?php 
$this->archiveTitle(array('category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章')), '', '');
?></h3>
        <?php 
if ($this->have()) {
    ?>
    	<?php 
    while ($this->next()) {
        ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php 
        $this->permalink();
        ?>"><?php 
        $this->title();
        ?></a></h2>
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
        $this->content('- Read More -');
        ?>
                </div>
    		</article>
    	<?php 
    }
    ?>
        <?php 
} else {
    ?>
            <article class="post">
                <h2 class="post-title"><?php 
    _e('没有找到内容');
    ?></h2>
            </article>
        <?php 
}
?>

        <?php 
$this->pageNav('&laquo; 前一页', '后一页 &raquo;');
?>
    </div><!-- end #main -->
	<?php 
$this->need('footer.php');