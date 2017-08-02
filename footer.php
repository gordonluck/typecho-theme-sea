<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
</body>
</html>
<?php if (!is_pjax()) { ?>
<footer>
<nav class="navbar navbar-default navbar-static-top">
</nav>
    <div class="container">
      <p>
        <span class='left'><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date(' Y');?>  <a href="<?php $this->options->siteUrl();?>"><?php $this->options->title();?></a> .<?php 
_e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动');
?> .</span>
        <span class='right'>Theme <a href="https://github.com/zhic16/typecho-theme-sea" target="_blank">Sea</a> by <a href="https://bwcx.site" target="_blank">Zhic16</a></span>
</br></br>
      </p>

    </div>
</footer><!-- end #footer -->
<?php } ?>
<?php $this->footer();?>