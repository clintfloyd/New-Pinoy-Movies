<div class="featured-cont">
		<div class="featured-container">
			<h1>Drama</h1>
			<?php
				wp_reset_query();
				query_posts('showposts=6&category_name=drama&orderby=date');
				$x=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					if($x<=0){
					$title =  get_the_title();
					$desc  = get_the_excerpt();
					$link  = get_permalink();
					}else{
						$other_titles[$x] = array("title"=>get_the_title(),"link"=>get_permalink());
					}
					$x++;
				endwhile; else:
				endif;
			?>			
			<div class="top">
				<div class="thumb">
					<img src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="Watch <?php echo $title;?> movie online" />
				</div>
				<div class="title">
					<div class="the-title">
						<a href="<?php echo $link; ?>" title="Watch <?php echo $title; ?> Movie Online | New Pinoy Movies"><h1><?php echo $title; ?>  &raquo;</h1></a>
					</div>
					<div class="the-description">
						<?php echo $desc; ?>
					</div>
				</div>
				<br clear="all" />
			</div>
			<div class="bottom">
				<ul>
					<?php 
					$x=0;
					$total=count($other_titles);
					foreach($other_titles as $ot){ 
					$x++;
					if($x >= $total){
						$noborder=" class=\"no-border\"";
					}else{
						$noborder="";
					}
					?>
					<li <?php echo $noborder; ?>><a href="<?php echo $ot['link']; ?>" title="Watch <?php echo $ot['title']; ?> Movie Online | New Pinoy Movies"><h2><?php echo $ot['title']; ?></h2></a></li>
					<?php } ?>
				</li>
			</div>
		</div>
		
		
		<div class="featured-container">
			<h1>Action</h1>
			<?php
				wp_reset_query();
				query_posts('showposts=6&category_name=action&orderby=date');
				$x=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					if($x<=0){
					$title =  get_the_title();
					$desc  = get_the_excerpt();
					$link  = get_permalink();
					}else{
						$other_titles[$x] = array("title"=>get_the_title(),"link"=>get_permalink());
					}
					$x++;
				endwhile; else:
				endif;
			?>			
			<div class="top">
				<div class="thumb">
					<img src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="Watch <?php echo $title;?> movie online" />
				</div>
				<div class="title">
					<div class="the-title">
						<a href="<?php echo $link; ?>" title="Watch <?php echo $title; ?> Movie Online | New Pinoy Movies"><h1><?php echo $title; ?>  &raquo;</h1></a>
					</div>
					<div class="the-description">
						<?php echo $desc; ?>
					</div>
				</div>
				<br clear="all" />
			</div>
			<div class="bottom">
				<ul>
					<?php 
					$x=0;
					$total=count($other_titles);
					foreach($other_titles as $ot){ 
					$x++;
					if($x >= $total){
						$noborder=" class=\"no-border\"";
					}else{
						$noborder="";
					}
					?>
					<li <?php echo $noborder; ?>><a href="<?php echo $ot['link']; ?>" title="Watch <?php echo $ot['title']; ?> Movie Online | New Pinoy Movies"><h2><?php echo $ot['title']; ?></h2></a></li>
					<?php } ?>
				</li>
			</div>
		</div>
		
		
		<div class="featured-container no-margin">
			<h1>Comedy</h1>
			<?php
				wp_reset_query();
				query_posts('showposts=6&category_name=comedy&orderby=date');
				$x=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					if($x<=0){
					$title =  get_the_title();
					$desc  = get_the_excerpt();
					$link  = get_permalink();
					}else{
						$other_titles[$x] = array("title"=>get_the_title(),"link"=>get_permalink());
					}
					$x++;
				endwhile; else:
				endif;
			?>			
			<div class="top">
				<div class="thumb">
					<img src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="Watch <?php echo $title;?> movie online" />
				</div>
				<div class="title">
					<div class="the-title">
						<a href="<?php echo $link; ?>" title="Watch <?php echo $title; ?> Movie Online | New Pinoy Movies"><h1><?php echo $title; ?>  &raquo;</h1></a>
					</div>
					<div class="the-description">
						<?php echo $desc; ?>
					</div>
				</div>
				<br clear="all" />
			</div>
			<div class="bottom">
				<ul>
					<?php 
					$x=0;
					$total=count($other_titles);
					foreach($other_titles as $ot){ 
					$x++;
					if($x >= $total){
						$noborder=" class=\"no-border\"";
					}else{
						$noborder="";
					}
					?>
					<li <?php echo $noborder; ?>><a href="<?php echo $ot['link']; ?>" title="Watch <?php echo $ot['title']; ?> Movie Online | New Pinoy Movies"><h2><?php echo $ot['title']; ?></h2></a></li>
					<?php } ?>
				</li>
			</div>
		</div>
		
		
		
		<div class="featured-container">
			<h1>Horror</h1>
			<?php
				wp_reset_query();
				query_posts('showposts=6&category_name=horror&orderby=date');
				$x=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					if($x<=0){
					$title =  get_the_title();
					$desc  = get_the_excerpt();
					$link  = get_permalink();
					}else{
						$other_titles[$x] = array("title"=>get_the_title(),"link"=>get_permalink());
					}
					$x++;
				endwhile; else:
				endif;
			?>			
			<div class="top">
				<div class="thumb">
					<img src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="Watch <?php echo $title;?> movie online" />
				</div>
				<div class="title">
					<div class="the-title">
						<a href="<?php echo $link; ?>" title="Watch <?php echo $title; ?> Movie Online | New Pinoy Movies"><h1><?php echo $title; ?>  &raquo;</h1></a>
					</div>
					<div class="the-description">
						<?php echo $desc; ?>
					</div>
				</div>
				<br clear="all" />
			</div>
			<div class="bottom">
				<ul>
					<?php 
					$x=0;
					$total=count($other_titles);
					foreach($other_titles as $ot){ 
					$x++;
					if($x >= $total){
						$noborder=" class=\"no-border\"";
					}else{
						$noborder="";
					}
					?>
					<li <?php echo $noborder; ?>><a href="<?php echo $ot['link']; ?>" title="Watch <?php echo $ot['title']; ?> Movie Online | New Pinoy Movies"><h2><?php echo $ot['title']; ?></h2></a></li>
					<?php } ?>
				</li>
			</div>
		</div>
		
		<div class="featured-container">
			<h1>Love Story</h1>
			<?php
				wp_reset_query();
				query_posts('showposts=6&category_name=love story&orderby=date');
				$x=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					if($x<=0){
					$title =  get_the_title();
					$desc  = get_the_excerpt();
					$link  = get_permalink();
					}else{
						$other_titles[$x] = array("title"=>get_the_title(),"link"=>get_permalink());
					}
					$x++;
				endwhile; else:
				endif;
			?>			
			<div class="top">
				<div class="thumb">
					<img src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="Watch <?php echo $title;?> movie online" />
				</div>
				<div class="title">
					<div class="the-title">
						<a href="<?php echo $link; ?>" title="Watch <?php echo $title; ?> Movie Online | New Pinoy Movies"><h1><?php echo $title; ?>  &raquo;</h1></a>
					</div>
					<div class="the-description">
						<?php echo $desc; ?>
					</div>
				</div>
				<br clear="all" />
			</div>
			<div class="bottom">
				<ul>
					<?php 
					$x=0;
					$total=count($other_titles);
					foreach($other_titles as $ot){ 
					$x++;
					if($x >= $total){
						$noborder=" class=\"no-border\"";
					}else{
						$noborder="";
					}
					?>
					<li <?php echo $noborder; ?>><a href="<?php echo $ot['link']; ?>" title="Watch <?php echo $ot['title']; ?> Movie Online | New Pinoy Movies"><h2><?php echo $ot['title']; ?></h2></a></li>
					<?php } ?>
				</li>
			</div>
		</div>
		
		
		<div class="featured-container no-margin">
			<h1>Fantasy</h1>
			<?php
				wp_reset_query();
				query_posts('showposts=6&category_name=fantasy&orderby=date');
				$x=0;
				$other_titles = array();
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					if($x<=0){
					$title =  get_the_title();
					$desc  = get_the_excerpt();
					$link  = get_permalink();
					}else{
						$other_titles[$x] = array("title"=>get_the_title(),"link"=>get_permalink());
					}
					$x++;
				endwhile; else:
				endif;
			?>			
			<div class="top">
				<div class="thumb">
					<img src="<?php echo get_post_meta(get_the_ID(), '_video_thumbnail_small',true)?>" alt="Watch <?php echo $title;?> movie online" />
				</div>
				<div class="title">
					<div class="the-title">
						<a href="<?php echo $link; ?>" title="Watch <?php echo $title; ?> Movie Online | New Pinoy Movies"><h1><?php echo $title; ?>  &raquo;</h1></a>
					</div>
					<div class="the-description">
						<?php echo $desc; ?>
					</div>
				</div>
				<br clear="all" />
			</div>
			<div class="bottom">
				<ul>
					<?php 
					$x=0;
					$total=count($other_titles);
					foreach($other_titles as $ot){ 
					$x++;
					if($x >= $total){
						$noborder=" class=\"no-border\"";
					}else{
						$noborder="";
					}
					?>
					<li <?php echo $noborder; ?>><a href="<?php echo $ot['link']; ?>" title="Watch <?php echo $ot['title']; ?> Movie Online | New Pinoy Movies"><h2><?php echo $ot['title']; ?></h2></a></li>
					<?php } ?>
				</li>
			</div>
		</div>
		
		
		<br clear="all" />
		</div>