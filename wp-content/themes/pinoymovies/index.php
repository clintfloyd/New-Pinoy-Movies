<?php
	global $wpdb;
	global $cat_name;
	
	$cat_name = "pinoy movies";
	$req_url = $_SERVER['REQUEST_URI'];
	$path_translated = explode("/",$req_url);
	$cat_name = $path_translated[1];
	if($cat_name == "page"){
		$cat_name = "pinoy movies";
	}elseif($cat_name == "" || $cat_name == NULL){
		$cat_name ="pinoy movies";
	}else{
		//$cat_name =str_replace("-"," ",$cat_name);
		$cat_name ="pinoy movies";
	}
?>
<?php get_header(); ?>
		<!--//header end//-->
		
		<!--//billboard//-->
		<?php include('billboard.php'); ?>
		<!--//billboard end//-->
		
		<?php include('featured.php'); ?>
		
		<?php include('extras.php'); ?>
		
		<div class="movie-menu">
			<ul>
				<li id="pinoymovies" class="menu"><a href="javascript:void(0);"><h1>Pinoy Movies</h1></a><span><a href="<?php bloginfo('url'); ?>/category/pinoy-movies/feed/rss"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" alt="rss" /></a></span></li>
				<li id="tvprograms" class="menu disabled"><a href="javascript:void(0);"><h1>TV Programs</h1></a></li>
				<li id="asianhorror" class="menu disabled"><a href="javascript:void(0);"><h1>Asian Horror Movies</h1></a></li>
				<li id="contactus" class="menu red"><a href="/contact-us/"><h1>Contact Us</h1></a></li>
				<br clear="all" />
			</ul>
		</div>
		<br />
		<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("#pinoymovies").click(function(){
				jQuery("#pmov").show();
				jQuery("#tvprog").hide();
				jQuery("#pinoymovies").removeClass("disabled");
				jQuery("#tvprograms").addClass("disabled");
				jQuery("#asianhorror").addClass("disabled");
			});
			jQuery("#tvprograms").click(function(){
				jQuery("#pmov").hide();
				jQuery("#tvprog").show();
				jQuery("#pinoymovies").addClass("disabled");
				jQuery("#tvprograms").removeClass("disabled");
				jQuery("#asianhorror").addClass("disabled");
			});
			jQuery("#asianhorror").click(function(){
				jQuery("#pmov").hide();
				jQuery("#tvprog").hide();
				jQuery("#asianhorror").show();
				jQuery("#pinoymovies").addClass("disabled");
				jQuery("#tvprograms").addClass("disabled");
				jQuery("#asianhorror").removeClass("disabled");
			});
		});
		</script>
		
		<div id="pmov" class="listing-container">
			<div>
			<?php
			wp_reset_query();
			if (have_posts()) : 
			$counter=0;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			query_posts('category_name='.$cat_name.'&paged='.$paged);
			$xxx=0;
			while (have_posts()) : the_post(); 
			$counter++;
			$xxx++;
			if($xxx >= 5){
				$style=" nomargin";
				$xxx=0;
			}else{
				$style="";
			}
			?>
		
		
			<div class="mov-container <?php echo $style; ?>">
				<?php
				$current_date 	  = date("F j, Y");
				$last_3_days 	  = date("F j, Y", strtotime("-3 days"));
				$post_date_var 	  = the_date("F j, Y",'','',false);
				
				$new_post_date = isset($post_date_var) || $post_date_var != "" || $post_date_var != NULL ? $post_date_var : $new_post_date;
				
				$post_date_var = $new_post_date;
				
				
				$current_date_string = strtotime($current_date);
				$post_date_string = strtotime($post_date_var);
				$last_3_days_string = strtotime($last_3_days);
				
				if($post_date_string >= $last_3_days_string){	
				?>
					<img src="/new.png" alt="new pinoy movies" border="0" class="newItem" />
				<?php
				}
				$tmpThumb = get_post_meta(get_the_ID(), '_video_thumbnail_small',true);
				$thumbnailsource = isset($tmpThumb) && $tmpThumb != "" ? get_post_meta(get_the_ID(), '_video_thumbnail_small',true) : "/noimage.png";
				
				$commentscount = get_comments_number();

				if($commentscount == 1 || $commentscount == 0 ): $commenttext = 'comment'; endif;
				if($commentscount > 1 ): $commenttext = 'comments'; endif;
				
				$xpert = get_the_excerpt();
				$xpert = str_replace("[...]","",$xpert);
				$xpert = str_replace("<p>","",$xpert);
				$xpert = str_replace("</p>","",$xpert);
				
				?>
				<span class="commentcount"><a rel="nofollow" style="color:#fff;text-decoration:none;" href="<?php the_permalink(); ?>#comments"><?php echo $commentscount; ?><span class="innerspan"> <?php echo $commenttext; ?></span></a></span>
				<div class="mov-thumb">
					<a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Movie Online | New Pinoy Movies"><img style="width:183px; height:183px;" src="<?php echo $thumbnailsource;?>" alt="new pinoy movies, free tagalog movies, <?php echo the_title(); ?> | <?php echo $xpert; ?>" border="0" /></a>
				</div>
				<div class="mov-title">
					<a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Movie Online | New Pinoy Movies">
						<h1><?php the_title(); ?></h1>
					</a>
				</div>
			</div>
			
			
			<?php endwhile; ?>
			<br clear="all" />
			</div>
			
			<div style="padding-top:50px; width:300px; height:30px; margin:0 auto; text-align:center;" class="navi">
				<div class="alignleft pre"><?php previous_posts_link('&laquo; Previous'); ?></div>    
				<div class="alignright next"><?php next_posts_link('Next &raquo;') ?></div>
			</div>
			
			
			<?php else : ?>
			Sorry, no movie available as of this moment
			<?php endif; ?>
			
			<br clear="all" />
			
		</div>
		
		<div id="tvprog" class="listing-container" style="display:none;">
			
			<?php
				wp_reset_query();
				query_posts('showposts=27&category_name=tv programs&orderby=date');
				$x=0;
				$xxx=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				$xxx++;
				if($xxx >= 5){
					$style=" nomargin";
					$xxx=0;
				}else{
					$style="";
				}
				$tmpThumb = get_post_meta(get_the_ID(), '_video_thumbnail_small',true);
				$thumbnailsource = isset($tmpThumb) && $tmpThumb != "" ? get_post_meta(get_the_ID(), '_video_thumbnail_small',true) : "/noimage.png";
				
				$xpert = get_the_excerpt();
				$xpert = str_replace("[...]","",$xpert);
				$xpert = str_replace("<p>","",$xpert);
				$xpert = str_replace("</p>","",$xpert);
			?>
		
				<div class="mov-container<?php echo $style;?>">
					<div class="mov-thumb">
						<a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies"><img style="width:183px; height:183px;" src="<?php echo $thumbnailsource;?>" alt="new pinoy movies, free tagalog movies, <?php echo the_title(); ?> | <?php echo $xpert; ?>" border="0" /></a>
					</div>
					<div class="mov-title">
						<a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies">
							<h1><?php the_title(); ?></h1>
						</a>
					</div>
				</div>
			
			<?php endwhile; else:
				endif;?>
			<br clear="all" />
			
		</div>
		
		
		<div id="tvprog" class="listing-container" style="display:none;">
			
			<?php
				wp_reset_query();
				query_posts('showposts=27&category_name=Asian Horror Movies&orderby=date');
				$x=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
		
				<div class="mov-container">
					<div class="mov-thumb">
						<a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies"><img style="width:183px; height:183px;" src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="new pinoy movies, free tagalog movies, <?php echo the_title(); ?>" border="0" /></a>
					</div>
					<div class="mov-title">
						<a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies">
							<h1><?php the_title(); ?></h1>
						</a>
					</div>
				</div>
			
			<?php endwhile; else:
				endif;?>
			<br clear="all" />
			
		</div>
		
		
		<br />
		
		
		<?php get_footer(); ?>