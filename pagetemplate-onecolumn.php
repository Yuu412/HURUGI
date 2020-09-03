<?php
/**
 * Template Name: 1カラムテンプレート
 * Description: 1カラムレイアウト用のテンプレート
 */
 ?>

<!-- headerの読み込み -->
<?php get_header(); ?>

<div id="main" class="col-md-10 col-md-offset-1">

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
    <h1><?php the_title(); ?></h1>
    <section>
      <?php the_content(); ?>
    </section>
<?php
    endwhile;
endif;
?>

</div>

<!-- sidebarの読み込み -->


        <!-- footerを読み込む部分 -->
        <?php get_footer(); ?>
</body>

</html>
