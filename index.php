<!-- headerの読み込み -->
<?php get_header(); ?>

 <div id="main" class="col-md-9">

 </div>
 <!-- サイトトップ部分--------------------------------------------->
  <!--------------------------------------------------------------->
	 <div class="top-box">
		<div class="top-img-box"></div>
		 <div class="top-img0"><?php echo do_shortcode('[metaslider id="88"]'); ?></div>
		 <!--<div class="top-img0"><img src="<?php bloginfo('template_url'); ?>/img/udatsu1.jpg" alt="トップ画像"></div>-->
		<div class="top-img"><img src="<?php bloginfo('template_url'); ?>/img/back3.png" alt="トップ画像"></div>
		 <div class="top-img2"><?php echo do_shortcode('[metaslider id="84"]'); ?></div>
		 <!--<div class="top-img2"><img src="<?php bloginfo('template_url'); ?>/img/018.jpg" alt="トップ画像"></div>-->
	</div>

	   <!-- サイドバー部分--------------------------------------------->
  <!--------------------------------------------------------------->
 <!-- sidebarの読み込み -->
 <!-- サイドバーはsidebar.phpないに記述する -->
	<div id="sidebar" class="col-md-3">
   		<?php get_sidebar(); ?>

			   <!-- SNSバー部分--------------------------------------------->
  <!--------------------------------------------------------------->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="social">
          <ul>
              <li><a href="https://twitter.com/gian_michelle">Twitter <i class="fa fa-twitter"></i></a></li>
              <li><a href="https://facebook.com/">Facebook <i class="fa fa-facebook"></i></a></li>
              <li><a href="http://dribbble.com/gian_michelle">Dribbble <i class="fa fa-dribbble"></i></a></li>
              <li><a href="https://www.instagram.com/r_y_ugram">Instagram <i class="fa fa-behance"></i></a></li>
          </ul>
      </nav>

  <!-- サイトメイン部分--------------------------------------------->
  <!--------------------------------------------------------------->

	 <div class ="main-box">
			 <div class="s-title">
				 MY FASHION
			 </div>
		 <div id="article-box-b"></div>
			 <div id="article-box">
				 <?php if ( have_posts() ) : ?>
				 <?php while ( have_posts() ) : the_post(); ?>
				 <div class="icatch-img">

					 <?php
					 if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
						 the_post_thumbnail( array(200,280));
					 }
					 ?>
					 <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
					 <div class="short-post">
						 <?php the_excerpt(); ?>
					 </div>
				 </div>
				 <?php endwhile;?>
				 <?php else : ?>
				 記事が1件も見つからなかったときの処理
				 <?php endif; ?>
				 <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			 </div>



  <!-- 広告部分------------------------------------------------->
  <!--------------------------------------------------------------->

		 <div class="adv-back-box">
		 	<div class="dot-adv"></div>
		 </div>
		 		 <!--
		 <div class="adv-box">
		 	<div class="adv1"><a href="https://px.a8.net/svt/ejp?a8mat=3BBFC1+BZ1WAQ+4HZ4+5ZMCH" rel="nofollow">
<img border="0" width="300" height="250" alt="" src="https://www29.a8.net/svt/bgt?aid=200407393724&wid=003&eno=01&mid=s00000020992001006000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www14.a8.net/0.gif?a8mat=3BBFC1+BZ1WAQ+4HZ4+5ZMCH" alt=""></div>
			<div class="adv1"><a href="https://px.a8.net/svt/ejp?a8mat=3BBFC1+BXV136+4E1Q+HWI5T" rel="nofollow">
<img border="0" width="300" height="250" alt="" src="https://www29.a8.net/svt/bgt?aid=200407393722&wid=003&eno=01&mid=s00000020483003007000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3BBFC1+BXV136+4E1Q+HWI5T" alt=""></div>
			 </div>

		 <div class="adv-box2">
		 	<div class="adv2"></div>
			<div class="adv2"></div>
		 </div>
		-->
		 </div>
		<div class="treat-box"></div>


    <!-- ランキング部分------------------------------------------------->
    <!-------------------------------------------------------------------->
		<div class="r-title">
		RANKING
	</div>
		<div class="ranking-box">
			<!-- テンプレートファイル  -->
			<?php if ( is_active_sidebar('Ranking Widgets') ) : ?>
			<ul class="menu">
				<?php dynamic_sidebar('ranking-widgets'); ?>
			</ul>
			<?php endif; ?>
		</div>

    <!-- 作品部分------------------------------------------------->
    <!--------------------------------------------------------------->

    <!-- コンタクト部分------------------------------------------------->
    <!--------------------------------------------------------------->

	 </div>


	 </div>
<p id="page-top"><a href="#wrap">PAGE TOP</a></p>
<?php get_template_part('footer-custom-field');//カスタムフィールドの挿入（カスタムフィールド名：footer_custom）?>
        <!-- footerを読み込む部分 -->
        <?php get_footer(); ?>
</body>

</html>
