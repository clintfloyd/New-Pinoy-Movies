<?php get_header(); ?>
		<!--//header end//-->
	
		<div class="doublecontent">
			<div class="left">
			<?php 
				wp_reset_query();
				if (have_posts()) : ?>
				  <?php /* If this is a category archive */ if (is_category()) { ?>
					<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
				  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
				  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
				  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
				  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
				  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h2 class="pagetitle">Author Archive</h2>
				  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h2 class="pagetitle">Blog Archives</h2>
				  <?php } ?>

				<?php
				while (have_posts()) : the_post();
				?>
				
				<div class="cat-div">
					<div class="thumb">
					</div>
					<div class="content">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<hr />
						<?php the_excerpt(); ?>
						<p>
						<a href="<?php the_permalink(); ?>">Watch <?php the_title(); ?> Movie Online Now!</a>
						</p>
					</div>
					<br clear="all" />
				</div>
				
				
				<?php endwhile; ?>
				<div style="padding-top:50px; height:30px; margin:0 auto; text-align:center;" class="navi">
					<div class="alignleft pre"><?php previous_posts_link('&laquo; Previous'); ?></div>    
					<div class="alignright next"><?php next_posts_link('Next &raquo;') ?></div>
				</div>
				<?php else : ?>
				Movie Not Found. It may have been deleted due to some complaints. If you have further question, please contact us.
			<?php endif; ?>
			</div>
			<?php include("sidebarpage.php"); ?>
			<br clear="all" />
		</div>
		
		
<?php get_footer(); ?>