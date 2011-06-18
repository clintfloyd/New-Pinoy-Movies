<?php
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
		<?php //include('billboard.php'); ?>
		<!--//billboard end//-->
		
		<?php //include('featured.php'); ?>
		
		<div class="wholecontent">
			<h1 class="error">
			Not Found!
			</h1>
			<p>
			Ouchie! The page you are trying to view is not found on our server and the reason may be the following:
			</p>
			<ul>
				<li>You may have accidentally clicked or entered an invalid link. To resolve, use our menu, it may help you.</li>
				<li>We have moved out the page or renamed it and we're not yet changed the link. You can contact us regarding this matter.</li>
				<li>Our server is going nuts because King Kong jumped off our servers</li>
			</ul>
			<p>
			Anyways, no matter what reason it is, you can still watch your favorite movies. We suggest you watch our newly added movies, click on below. Enjoy!
			</p>
		</div>
		<div>
		<h1>Featured Movies</h1>
		<?php
			wp_reset_query();
			query_posts('showposts=5&category_name=pinoy movies&orderby=date');
			$x=0;
			$other_titles = array();
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
			<div class="cat-div">
					<div class="thumb">
						<a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies"><img style="width:145px; height:150px;" src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="new pinoy movies, free tagalog movies, <?php echo the_title(); ?>" border="0" /></a>
					</div>
					<div class="content2">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<hr />
						<?php the_excerpt(); ?>
						<p>
						<a href="<?php the_permalink(); ?>">Watch <?php the_title(); ?> Movie Online Now!</a>
						</p>
					</div>
					<br clear="all" />
				</div>
		<?php endwhile; else:
			endif;?>
		</div>
		
		
		<?php get_footer(); ?>
		
	</div>
</body>
</html>