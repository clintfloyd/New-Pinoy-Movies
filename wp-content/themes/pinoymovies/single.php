<?php get_header(); ?>
		<!--//header end//-->
		<?php wp_reset_query(); ?>
		<div class="doublecontent">
			<div class="left">
			<?php 
				if (have_posts()) : ?>
				<?php
				while (have_posts()) : the_post();
				global $post;
				global $post_title;
				$post_id_link = get_post_meta($post->ID, '_video_id',true);
				$post_title = get_the_title();
				if(get_post_meta($post->ID, '_video_id',true)){
	
					$c = '['.get_post_meta($post->ID, '_video_portal',true).' '.get_post_meta($post->ID, '_video_id',true).' nolink]';
				}
				?>
				<div class="titlecontainer">
					<div class="thetitle">
						<a href="<?php the_permalink(); ?>"><h1><?php the_title();?></h1></a>
					</div>
					<br clear="all" />
				</div>
				<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
				<div class="undertitle">
					<ul>
						<li style="float:left; background:#fff; width:465px; height:20px; -moz-border-radius:0; -moz-box-shadow:none;">
<div style="float:left">
<g:plusone></g:plusone>
</div>
<div style="float:left">
<iframe width="300" height="25" src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode($_SERVER['SCRIPT_URI']); ?>&layout=standard&show_faces=true&width=300&height=25&action=like&font=tahoma&colorscheme=light" frameborder="0"></iframe>
</div>
<br clear="all" />
</li>
						<li>Added: <?php the_date(); ?></li>
						<li>Tags
							<ul>
								<li><?php the_tags(); ?></li>
								<br clear="all" />
							</ul>
						</li>
					</ul>
					<br clear="all" />
				</div>
				
					<iframe width="660" scrolling="no" height="311" frameborder="0" src="http://pinoyonlineportal216.blogspot.com/"></iframe>

				<div id="movcontainermain">
				<?php echo embeddedvideo_plugin($c); ?>
				</div>
				
				<div>
				<?php
					$tmpredirectURL = $_SERVER['SCRIPT_URI'];
					$tmpredirectURL = str_replace("www.newpinoymovies.com","www.newpinoymovies.info",$tmpredirectURL);
				?>
<?php /*
				<a href="<?php echo $tmpredirectURL; ?>" target="_blank"><img src="http://img153.imageshack.us/img153/3199/watchh.gif" alt="Watch Now" border="0" /></a>*/ ?>
				</div>

				<div class="thecontent">
				<img style="width:145px; height:150px; float:right;" src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="new pinoy movies, watch online, <?php echo the_title(); ?>" border="0" />
				<?php the_content(); ?>
				<br />
				<a href="http://www.newpinoymovies.info/" target="_blank">Watch Now!</a>
				</div>
				
				<div style="padding:5px; line-height:20px; font-size:12px;">
<p>
	<strong>Watch <?php the_title(); ?> online</strong> only at New Pinoy Movies (<a href="http://www.newpinoymovies.com/" title="New Pinoy Movies">www.newpinoymovies.com</a>).
</p>
<p>
	This website provides entertainment for all Pinoys on the Philippines and abroad -- free! New Pinoy Movies provides free tagalog movies online for overseas filipino workers and all over the world. Catch the latest tagalog movies on internet today. We will bring you to the latest pinoy movies that could be watch online for free. New Pinoy Movies has one of the largest collections of Filipino movies from the 90s up to present or even 80s!
</p>
<p>
	If this movie is not available, deleted or not loading, please refer to our <a href="http://www.newpinoymovies.com/how-to-watch-movies">How to watch movies</a> page.
</p>
<p>
	Please be aware that we don't hosts, upload or even save the movies physically on this server. We only EMBED the source on this site. For any concerns, please contact us through Contact Us page.
</p>
<p>
	We strive hard to deliver you the most quality movies on the net, we update whenever the <strong>movies</strong> are available. Please be reminded that we don't get any for this, so please, if you like this site bookmark us, and tell everybody by sending out our link. That's the only thing we can ask in return.
</p>
</div>
					
				
			
			<?php endwhile; ?>
				
				<script type="text/javascript">
					$(document).ready( function(){
						var to=setTimeout("showMovie()",15000);        
					});
					
					function showMovie()
					{
						$("#movcontainermain").show("slow");
					}
				
				</script>
				<div class="commenth1">
				<br />
				Comments
				</div>
				<div>
				<?php comments_template(); ?>
				</div>
			
			<?php else : ?>
				Movie Not Found. It may have been deleted due to some complaints. If you have further question, please contact us.
			<?php endif; ?>
			</div>
			<?php include("sidebarpage.php"); ?>
			<br clear="all" />
		</div>
		
		
<?php get_footer(); ?>