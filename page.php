<!-- headerの読み込み -->
<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
<div id="main" class="col-md-9">

    <h1><?php the_title(); ?></h1>
    <section>
      <?php the_content(); ?>
    </section>
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
