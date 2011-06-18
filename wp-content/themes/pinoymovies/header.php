<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<link rel="SHORTCUT ICON" href="/favicon.ico"/>
	<link rel="alternate" title="Subscribe to our RSS Feed" href="<?php echo get_bloginfo('rss2_url'); ?>" type="application/rss+xml" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="new pinoy movies, filipino movies, free tagalog movies, free movies, live stream, watch pinoy movies online, online radio, e-radio, radio portal, radio live stream, live streaming, pinoy tv, tfc, filipino channel, live tv" />
	<meta name="description" content="New Pinoy Moves, Watch new pinoy movies online, Pinoy Movies, Watch Tagalog Movies Online, Filipino movies, Free Pinoy Movies ABC-CBN, GMA, Filipino Channel, Pinoy TV, Pinoy Chat" />
	<meta name="Robots" content="index,follow" />
	<meta name="Author" content="newpinoymovies@gmail.com" /> 
	<meta name="revisit-after" content="1 days"> 
	<title><?php wp_title(' |', true, 'right'); ?>New Pinoy Movies - Watch Free Tagalog Movie, Pinoy Movie, Filipino Movie, ABS-CBN, GMA, TFC, Pinoy TV, Melason, Pinoy Big Brother, Filipino Channel, Pinoy Chat</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />


	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js" type="text/javascript"></script>
	
	<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
	<script type="text/javascript">
		jQuery.noConflict();

		function doClear(theText) {
		 if (theText.value == theText.defaultValue) {
			 theText.value = ""
		 }
		}
		jQuery(document).ready(function(){
			jQuery("#tvprog").click(function(){
				jQuery(".children").toggle();
			});

jQuery.ajax({
  type: "GET",
  url: "/chatbox.htm",
  cache: true,
  beforeSend: function(html){
     jQuery("#chatboxcontainer").html("Please wait while the Chat Box is loading...");
  },
  success: function(html){
     jQuery("#chatboxcontainer").html(html);
  },
  statusCode:{
     404: function(){
      jQuery("#chatboxcontainer").html("<h1>404/File Not Found</h1>");
     }
  }
});


		});
	</script>
	<?php remove_action( 'wp_head', 'wp_generator'); wp_head(); ?>
	
	
</head>
<body>
		<script type="text/javascript">document.write(unescape('%3C%73%63%72%69%70%74%20%6C%61%6E%67%75%61%67%65%3D%4A%61%76%61%53%63%72%69%70%74%3E%0A%3C%21%2D%2D%0A%0A%2F%2F%44%69%73%61%62%6C%65%20%72%69%67%68%74%20%63%6C%69%63%6B%20%73%63%72%69%70%74%20%49%49%49%2D%20%42%79%20%52%65%6E%69%67%61%64%65%20%28%72%65%6E%69%67%61%64%65%40%6D%65%64%69%61%6F%6E%65%2E%6E%65%74%29%0A%2F%2F%46%6F%72%20%66%75%6C%6C%20%73%6F%75%72%63%65%20%63%6F%64%65%2C%20%76%69%73%69%74%20%68%74%74%70%3A%2F%2F%77%77%77%2E%64%79%6E%61%6D%69%63%64%72%69%76%65%2E%63%6F%6D%0A%0A%76%61%72%20%6D%65%73%73%61%67%65%3D%22%22%3B%0A%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%0A%66%75%6E%63%74%69%6F%6E%20%63%6C%69%63%6B%49%45%28%29%20%7B%69%66%20%28%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%29%20%7B%28%6D%65%73%73%61%67%65%29%3B%72%65%74%75%72%6E%20%66%61%6C%73%65%3B%7D%7D%0A%66%75%6E%63%74%69%6F%6E%20%63%6C%69%63%6B%4E%53%28%65%29%20%7B%69%66%20%0A%28%64%6F%63%75%6D%65%6E%74%2E%6C%61%79%65%72%73%7C%7C%28%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%26%26%21%64%6F%63%75%6D%65%6E%74%2E%61%6C%6C%29%29%20%7B%0A%69%66%20%28%65%2E%77%68%69%63%68%3D%3D%32%7C%7C%65%2E%77%68%69%63%68%3D%3D%33%29%20%7B%28%6D%65%73%73%61%67%65%29%3B%72%65%74%75%72%6E%20%66%61%6C%73%65%3B%7D%7D%7D%0A%69%66%20%28%64%6F%63%75%6D%65%6E%74%2E%6C%61%79%65%72%73%29%20%0A%7B%64%6F%63%75%6D%65%6E%74%2E%63%61%70%74%75%72%65%45%76%65%6E%74%73%28%45%76%65%6E%74%2E%4D%4F%55%53%45%44%4F%57%4E%29%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%63%6C%69%63%6B%4E%53%3B%7D%0A%65%6C%73%65%7B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%75%70%3D%63%6C%69%63%6B%4E%53%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%63%6C%69%63%6B%49%45%3B%7D%0A%0A%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%6E%65%77%20%46%75%6E%63%74%69%6F%6E%28%22%72%65%74%75%72%6E%20%66%61%6C%73%65%22%29%0A%2F%2F%20%2D%2D%3E%20%0A%3C%2F%73%63%72%69%70%74%3E'));</script>
	<?php if($_SERVER['SERVER_NAME'] == "newpinoymovies.com" ||  $_SERVER['SERVER_NAME']=="www.newpinoymovies.com"){?>
		<!-- BEGIN EFFECTIVE MEASURE CODE -->
<!-- COPYRIGHT EFFECTIVE MEASURE -->
<script type="text/javascript">
	(function() {
		var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
		em.src = ('https:' == document.location.protocol ? 'https://ph-ssl' : 'http://ph-cdn') + '.effectivemeasure.net/em.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
	})();
</script>
<noscript>
	<img src="//ph.effectivemeasure.net/em_image" alt="" style="position:absolute; left:-5px;" />
</noscript>
<!--END EFFECTIVE MEASURE CODE -->
		<!-- Start of Analytics -->
		<script type="text/javascript">
		window.google_analytics_uacct = "UA-11576669-4";
		</script>
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-11576669-4");
		pageTracker._setDomainName(".newpinoymovies.com");
		pageTracker._trackPageview();
		} catch(err) {}</script>
		<!-- Start Quantcast tag -->
		<script type="text/javascript">
		_qoptions={
		qacct:"p-cew9piqJ0W7cE"
		};
		</script>
		<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
		<noscript>
		<img src="http://pixel.quantserve.com/pixel/p-cew9piqJ0W7cE.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
		</noscript>
		<!-- End Quantcast tag -->
	<?php }?>

	<div class="main-container">
		<!--//header//-->
		<div class="main-header">
			<div class="top">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>" title="Home | New Pinoy Movies"><img border="0" src="<?php bloginfo('stylesheet_directory'); ?>/images/logov4.png" alt="New Pinoy Movies" /></a>
					<br />
					<span>Watch New Pinoy Movies Online. Free Movies.</span>
				</div>
				<div class="ad">				
				<?php if($_SERVER['SERVER_NAME'] == "newpinoymovies.com" ||  $_SERVER['SERVER_NAME']=="www.newpinoymovies.com"){?>
					<script type="text/javascript">
					//interstitial ad
					clicksor_enable_inter = true; clicksor_maxad = -1;	 
					clicksor_hourcap = -1; clicksor_showcap = 2;
					clicksor_enable_adhere = false;
					//default pop-under house ad url
					clicksor_enable_pop = false; 
					clicksor_frequencyCap = -1;
					durl = 'http://www.newpinoymovies.com';
					//default banner house ad url 
					clicksor_default_url = 'http://www.pinoy-movies.info/sites/images-01/leaderboard.php';
					clicksor_banner_border = '#f2da00'; clicksor_banner_ad_bg = '#FFFFFF';
					clicksor_banner_link_color = '#000000'; clicksor_banner_text_color = '#666666';
					clicksor_banner_image_banner = true; clicksor_banner_text_banner = true;
					clicksor_layer_border_color = '';
					clicksor_layer_ad_bg = ''; clicksor_layer_ad_link_color = '';
					clicksor_layer_ad_text_color = ''; clicksor_text_link_bg = '';
					clicksor_text_link_color = '#ff630c'; clicksor_enable_text_link = true;
					</script>
					<script type="text/javascript" src="http://ads.clicksor.com/showAd.php?nid=1&amp;pid=86254&amp;adtype=1&amp;sid=195131"></script>
					<noscript><a href="http://www.yesadvertising.com">affiliate marketing</a></noscript>
				<?php } ?>
				</div>
				<br clear="all" />
			</div>
			
			<script type="text/javascript">
				jQuery(document).ready(function(){
				
					jQuery('#home').mouseover(function() {
						jQuery(this).addClass('active');
					});
					jQuery('#home').mouseout(function() {
						jQuery(this).removeClass('active');
					});
					jQuery('#2').mouseover(function() {
						jQuery(this).addClass('active');
						jQuery("#head-pinoy").addClass('active');
					});
					jQuery('#2').mouseout(function() {
						jQuery(this).removeClass('active');
						jQuery("#head-pinoy").removeClass('active');
					});
					jQuery('#3').mouseover(function() {
						jQuery(this).addClass('active');
						jQuery("#head-tv").addClass('active');
					});
					jQuery('#3').mouseout(function() {
						jQuery(this).removeClass('active');
						jQuery("#head-tv").removeClass('active');
					});
					jQuery('#4').mouseover(function() {
						jQuery(this).addClass('active');
					});
					jQuery('#4').mouseout(function() {
						jQuery(this).removeClass('active');
					});
					
					jQuery('#5').click(function() {
						jQuery('#chat-zone').toggle();
					});
					
					
					jQuery('#head-pinoy').mouseover(function() {
						jQuery('#2').addClass('active');
						jQuery(this).addClass('active');
					});
					jQuery('#head-pinoy').mouseout(function() {
						jQuery('#2').removeClass('active');
						jQuery(this).removeClass('active');
					});
					
					jQuery('#head-tv').mouseover(function() {
						jQuery('#3').addClass('active');
						jQuery(this).addClass('active');
					});
					jQuery('#head-tv').mouseout(function() {
						jQuery('#3').removeClass('active');
						jQuery(this).removeClass('active');
					});

				});
				function txtbox(id){
					idVal = id.value;
					if(idVal = "search your movies here!"){
						id.value="";
						jQuery("#txtboxsearch").removeClass("inactive");
						jQuery("#txtboxsearch").addClass("active");
					}else{
						alert("no object found!");
					}
				}
			</script>
			
			<div class="bottom">
				<div class="menu-container">
					<ul>
						<li id="home"><a href="<?php bloginfo('url'); ?>">HOME</a></li>
						<li id="2" class="dropdown"><a href="<?php bloginfo('url'); ?>/category/pinoy-movies">PINOY MOVIES &raquo;</a></li>
						<li id="3" class="dropdown"><a href="<?php bloginfo('url'); ?>/category/tv-programs">TV PROGRAMS &raquo;</a></li>
						<li id="home"><a href="<?php bloginfo('url'); ?>/category/metro-manila-film-festival-2" title="Metro Manila Film Festival Movies">MMFF Movies</a></li>
						
						<?php
						if(is_home()){
						?>
						<li id="5"><a href="javascript:void(0);">CHAT ZONE</a></li>
						<?php
						}else{
						?>
						<li id="4"><a href="<?php bloginfo('url'); ?>/how-to-watch-movies">HOW TO WATCH MOVIES</a></li>
						<?php
						}
						?>
						<br clear="all" />
					</ul>
				</div>
				<div class="search-container">
					<form method="get" action="/">
						<input type="text" name="s" id="txtboxsearch" value="search your movies here!" class="inactive" onclick="javascript:txtbox(this);" />
					</form>
				</div>
				<br clear="all" />
			</div>
			<div class="the-menu" id="head-pinoy">
				<div class="the-border">
					<div>
						<div>
							<h1>Pinoy Movies</h1>
						</div>
						<div>
							<ul>
							<?php
								wp_reset_query();
								query_posts('showposts=30&category_name=pinoy movies&orderby=date');
								$x=0;
								$other_titles = array();
								if ( have_posts() ) : while ( have_posts() ) : the_post();
							?>
								<li><a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies"><?php the_title(); ?></a></li>
							<?php endwhile; else:
								endif;?>
							</ul>
						</div>
					</div>
					<div>
					</div>
				</div>
			</div>
			<div class="the-menu" id="head-tv">
				<div class="the-border">
					<div>
						<div>
							<h1>TV Programs</h1>
						</div>
						<div>
							<ul>
							<?php
								wp_reset_query();
								query_posts('showposts=30&category_name=tv programs&orderby=date');
								$x=0;
								$other_titles = array();
								if ( have_posts() ) : while ( have_posts() ) : the_post();
							?>
								<li><a href="<?php the_permalink() ?>" title="Watch <?php the_title(); ?> Online | New Pinoy Movies"><?php the_title(); ?></a></li>
							<?php endwhile; else:
								endif;?>
							</ul>
						</div>
					</div>
					<div>
					</div>
				</div>
			</div>
<?php /*
			<div style="width:1000px; height:90px; text-align:center; margin-top:5px; margin-bottom:5px; background:#000">
<object height="90" width="728" type="application/x-shockwave-flash" data="http://www.earthhour.org/assets/flash/tools/banners/EarthHour_728x90_2011_countdown.swf"><param value="http://www.earthhour.org/assets/flash/tools/banners/EarthHour_728x90_2011_countdown.swf" name="movie" /><param value="transparent" name="wmode" /><param value="true" name="allowFullScreen" /><param value="always" name="allowscriptaccess" /></object>
</div> */ ?>
			<?php
			wp_reset_query();
			if(is_home()){
			?>
			<div class="the-menu" id="chat-zone" style="height:600px;">
				<div class="the-border">
					<div>
						<object width="990" height="600" id="obj_1277131236381"><param name="movie" value="http://newpinoymovies16.chatango.com/group"/><param name="AllowScriptAccess" VALUE="always"/><param name="AllowNetworking" VALUE="all"/><param name="AllowFullScreen" VALUE="true"/><param name="flashvars" value="cid=1277131236381&a=000000&b=100&c=FFFFFF&d=CCCCCC&k=666666&l=333333&m=000000&n=FFFFFF&r=100&s=1"/><embed id="emb_1277131236381" src="http://newpinoymovies16.chatango.com/group" width="990" height="600" allowScriptAccess="always" allowNetworking="all" type="application/x-shockwave-flash" allowFullScreen="true" flashvars="cid=1277131236381&a=000000&b=100&c=FFFFFF&d=CCCCCC&k=666666&l=333333&m=000000&n=FFFFFF&r=100&s=1"></embed></object>
					</div>
					<div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>		<?php		include_once("announcements.php");		?>