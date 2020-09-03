<!-- headerの読み込み -->
<?php get_header(); ?>


<!-- sidebarの読み込み -->
<!-- サイドバーはsidebar.phpないに記述する -->
<div id="sidebar" class="col-md-3">
   <?php get_sidebar(); ?>

 </div>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
<div id="main" class="col-md-9">
<div id="main-box">
    <h1><?php the_title(); ?></h1>
	<div class="icatch-top"><?php the_post_thumbnail(array(300,500)); ?></div>

	<!-- Custom Field   recomend-box -->
<?php
  $recomend = get_post_meta($post->ID, 'recomend', true);
  if($recomend){ ?>
	<div class="recomend-box">
	<h2>こんな方におすすめ</h2>
		<div class="recomend-content"><? echo $recomend; ?></div>
	</div>
    <?php
  } else {
    echo "";
} ?>

		<?php
	$picPrace = get_post_meta($post->ID, 'picPrace', true);
  if($picPrace){ ?>
	<div class="pic-prace-box">
		<img src="<?php bloginfo('template_url'); ?>/img/udatsu.jfif" alt="うだつの町並みの画像">
		<div class="pic-prace-text">写真はここで撮影</div>
		<div class="pic-prace-title">うだつの町並み</div>
		<div class="pic-prace-subtitle">住所</div>
		<div class="pic-prace-content">徳島県美馬市</div>
		<div class="pic-prace-subtitle">電話番号</div>
		<div class="pic-prace-content">0120-224-100</div>
		<div class="pic-prace-subtitle">アクセス</div>
		<div class="pic-prace-content">JR徳島線貞光駅から徒歩30分</div>
	</div>
    <?php
	 } else {
    echo "";
} ?>

	<div class="article-title">各アイテムの注目ポイント</div>

	<div class="article-box-left">

	<?php
	$itemtitle1 = get_post_meta($post->ID, 'itemtitle1', true);
  if($itemtitle1){ ?>
    <?php
  } else {
    echo "";
} ?>

		<?php
	$buyPrace1 = get_post_meta($post->ID, 'buyPrace1', true);
  if($buyPrace1){ ?>
		<div class="buyPrace1-box"><? echo $buyPrace1; ?></div>
    <?php
  } else {
    echo "";
} ?>

    <section>
		<div class="content-box"><?php the_content(); ?></div>
    </section>
<?php
    endwhile;
endif;
?>
	</div>
	</div>

</div>

        <!-- footerを読み込む部分 -->
        <?php get_footer(); ?>
</body>

</html>
