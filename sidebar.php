<div class="side-box">

	<div class="profile">
		<div class="p-title">PROFILE</div>
		<div class="p-img"><img src="<?php bloginfo('template_url'); ?>/img/profile.jpg" alt="プロフィール画像"></div>
		<div class="p-content">

		</div>
	</div>

		<div class="search">
				<div class="se-title">SEARCH</div>
		<div class="s-window">

		</div>
	</div>

		<div class="ranking-side">

				<div class="r-title-side">RANKING</div>
				<div class="r-content-side">
				<!-- テンプレートファイル  -->
				<?php if ( is_active_sidebar('main-sidebar') ) : ?>
				  <ul class="menu">
					<?php dynamic_sidebar('main-sidebar'); ?>
				  </ul>
				<?php endif; ?>

		</div>
		</div>
			<div class="category-side">
					<div class="c-title-side">CATEGORY</div>
					<div class="r-content-side">

					</div>
			</div>
</div>
