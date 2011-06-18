<?php get_header(); ?>
		<!--//header end//-->
	
		<div class="doublecontent">
			<div class="left">
			<?php 
				wp_reset_query();
				if (have_posts()) : ?>
				<?php
				while (have_posts()) : the_post();
				global $post;
				global $post_title;
				$post_id_link = get_post_meta($post->ID, '_video_id',true);
				$post_title = get_the_title();
				if(get_post_meta($post->ID, '_video_id',true)){
	
				$c = '<script type="text/javascript"> document.write(unescape("'.get_post_meta($post->ID, '_video_portal',true).' '.get_post_meta($post->ID, '_video_id',true).'")); </script>';
				}
				?>
				<div class="titlecontainer">
					<div class="thetitle">
						<h1><?php the_title();?></h1>
					</div>
					<br clear="all" />
				</div>
				<div class="undertitle">
					<ul>
						<li>Added: <?php the_date(); ?></li>
					</ul>
					<br clear="all" />
				</div>
				<div class="thecontent">
				<?php the_content(); ?>
				</div>
				<!--//
				<div class="extracontent">
					
				</div>
				//-->
			<?php endwhile; ?>
			<?php else : ?>
				Movie Not Found. It may have been deleted due to some complaints. If you have further question, please contact us.
			<?php endif; ?>
			</div>
			<?php include("sidebarpage.php"); ?>
			<br clear="all" />
		</div>
		
		
<?php get_footer(); ?>