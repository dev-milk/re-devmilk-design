<div id="re-top">
  <a href="#top" class="gotop">TOP</a>
</div>
<footer id="footer">
  <div class="content">
    <section class="item">
      <p class="footer-title">Contents</p>
      <a href="<?php echo esc_url(home_url()); ?>"><p><span>-Home-</span></p></a>
      <a href="<?php echo esc_url(home_url('/category/affinity-photo/')); ?>"><p><span>-Affinity Photo-</span></p></a>
      <a href="<?php echo esc_url(home_url('/category/affinity-designer/')); ?>"><p><span>-Affinity Designer-</span></p></a>
      <a href="<?php echo esc_url(home_url('/category/affinity-publisher/')); ?>"><p><span>-Affinity Publisher-</span></p></a>
      <a href="<?php echo esc_url(home_url('/category/other-method/')); ?>"><p><span>-Other-</span></p></a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>"><p><span>-Contact-</span></p></a>
    </section>
    <section class="item-tag">
    <p class="footer-title">Tag</p>
    <?php wp_tag_cloud('smallest=10 & largest=10'); ?>
    </section>
    <section class="item">
      <div class="item-logo">
        <a href="https://devcosmo.biz/portfolio/">
        <img src="<?php echo get_theme_file_uri('img/folio.jpg'); ?>" alt="ポートフォリオ" />
        </a>
      </div>
    </section>
  </div>
  <div class="bottom-area">
  <div class="copyright">© devmilk.biz</a></div>
  </div>
</footer>
</body>

</html>
<?php wp_footer(); ?>
