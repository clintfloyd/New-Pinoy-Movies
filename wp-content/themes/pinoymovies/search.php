<?php get_header(); ?>
		<!--//header end//-->
	
		<div class="doublecontent">
			<div class="left">
			<?php 
				wp_reset_query();
				if (have_posts()) : ?>
				  <h2>Search result for '<?php echo $_GET['s']; ?>'</h2>

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
				
				<h2>
				No result found.
				</h2>
				
				
			<?php endif; ?>
			</div>
			<?php include("sidebarpage.php"); ?>
			<br clear="all" />
		</div>
		
		
<?php get_footer(); ?>