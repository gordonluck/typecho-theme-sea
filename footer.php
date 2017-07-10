<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}
?>
        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<?php if (!is_pjax()) { ?>
<footer>
    <div class="container">

        <p>
            ©<?php 
echo date('Y');
?> <a href="<?php 
$this->options->siteUrl();
?>"><?php 
$this->options->title();
?></a>. <?php 
_e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动');
?>.
Theme <a href="https://github.com/zhic16/typecho-theme-sea">Sea</a> by <a href="https://bwcx.site">Zhic16</a>
        </p>
</br>
    </div>
</footer><!-- end #footer -->
<?php } ?>
<?php $this->footer();?>
</body>
</html>