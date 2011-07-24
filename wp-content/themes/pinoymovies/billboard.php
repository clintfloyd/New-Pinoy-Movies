<div class="billboard-container" id="thebillboard">
	<div class="billboard-content" id="thebillboardcontent">
		<?php
		wp_reset_query();
		$xy =1;
		$style_new = "";
		add_filter('posts_fields', 'featured_fields');
		add_filter('posts_join', 'featured_join');
		add_filter('posts_where', 'featured_where_featured');
		$featuredPosts = new WP_Query();
		$featuredPosts->query('showposts=7');
		$x=0;
		$controller=0;
		while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
		$xy++;
		?>
			<div class="bbcont" id="newpinoymoviesbillboard<?php echo $xy; ?>" style="background:url('<?php echo get_post_meta(get_the_ID(), '_video_thumbnail',true) ?>');">
				<div style="float:right";>
					<div class="bbtitle">
						<a href="<?php the_permalink(); ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies"><h1><?php the_title(); ?></h1></a>
					</div><br clear="all" />
					<div class="bbexcerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		remove_filter('posts_where', 'featured_where_featured');
		?>
	</div>
	<div class="billboard-menu" class="featured" id="thebillboardmenu">
		<?php
		wp_reset_query();
		$xy = 1;
		$style_new = "";
		add_filter('posts_fields', 'featured_fields');
		add_filter('posts_join', 'featured_join');
		add_filter('posts_where', 'featured_where_featured');
		$featuredPosts = new WP_Query();
		$featuredPosts->query('showposts=7');
		$x=0;
		$controller=0;
		while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
		$xy++;
		?>
			<div class="featthumb">
				<a href="#newpinoymoviesbillboard<?php echo $xy; ?>" rel="<?php echo $xy; ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies">
					<img style="" src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="new pinoy movies, watch online, <?php echo the_title(); ?>" border="0" />
				</a>
			</div>
		<?php
		endwhile;
		remove_filter('posts_where', 'featured_where_featured');
		?>
		<br clear="all" />
	</div>
</div>