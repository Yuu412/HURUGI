<!-- headerの読み込み -->
<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
<div id="main" class="col-md-9">
  <h1>記事一覧</h1>
  <hr>
  <?php
  if ( have_posts() ) :
      while ( have_posts() ) : the_post();
  ?>
      <h2>
        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <section>
        <p>作成日時：<?php the_time('Y年n月j日'); ?></p>
        <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
      </section>
      <hr>
  <?php
      endwhile;
  endif;
  ?>

<!-- sidebarの読み込み -->
<!-- サイドバーはsidebar.phpないに記述する -->
<div id="sidebar" class="col-md-3">
   <?php get_sidebar(); ?>

 </div>

</div>

        <!-- footerを読み込む部分 -->
        <?php get_footer(); ?>
</body>

</html>
