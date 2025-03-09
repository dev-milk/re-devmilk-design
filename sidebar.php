<aside id="sidebar">
  <section class="author">
    <img src="<?php echo esc_url(get_theme_file_uri('img/auther.svg')); ?>" alt="作者プロフィール">
    <h3 class="side-title">Auther</h3>
    <p class="profile">
    歴史とデザインが好きなふつうのサラリーウーマンです。ローコスト＆クオリティキープの制作を目指してこれからも記事を書いていきます。<br>
    本ブログは<a href="https://note.com/devsugar_biz/m/mb6df505b9ef5">noteに移動しています。</a></p>
      <p>
     <a href="https://note.com/devsugar_biz/m/mb6df505b9ef5">
      <img src="<?php echo get_theme_file_uri('img/note-btn.png'); ?>" alt="note">
     </a>
     <a href="https://jp.pinterest.com/devmilk_biz/">
      <img src="<?php echo get_theme_file_uri('img/pinterest-btn.png'); ?>" alt="ピンタレスト">
     </a>
      </p>
  </section>

  <section class="archive">
  <?php get_search_form(); ?>
  </section>

  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>

  <section class="archive">
  <h3 class="side-title">Contact</h3>
  <a href="https://devcosmo.biz/form/" target="_blank">
  <img src="<?php echo get_theme_file_uri('img/mail.png'); ?>" alt="メール">
     </a>
  </section>

  <section class="archive">
  <h3 class="side-title">Privacy Policy</h3>
  <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">
      プライバシーポリシー
     </a>
  </section>
</aside>


