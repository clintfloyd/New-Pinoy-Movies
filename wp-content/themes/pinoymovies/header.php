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
<?php
	if(is_home()){	?>	
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/homepage.css" type="text/css" media="screen" />	
<?php	
	}	
?>

<link rel="alternate" type="application/rss+xml" title="New Pinoy Movies RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="New Pinoy Movies Atom Feed" href="<?php bloginfo('atom_url'); ?>" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<?php remove_action( 'wp_head', 'wp_generator'); wp_head(); ?>


<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript"> jQuery.noConflict(); </script>
<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/lazyload.js"></script>
</head>

<body>
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

<?php //include("extrabar.php"); ?>

<div class="main-container">
	<!--//header//-->
	<div class="main-header">
		<div class="top">
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>" title="Home | New Pinoy Movies"><img border="0" src="<?php bloginfo('stylesheet_directory'); ?>/images/logov4.png" alt="New Pinoy Movies" /></a>
				<br />
				<span>Watch New Pinoy Movies Online. Free Movies.</span>
			</div>
			
			<div class="linkad">
				<ul class="links">
					<li style="margin-top:-10px;">
						<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Z9K5DJJAWLXVJ" title="Support this site by donating" target="_blank" rel="nofollow"><img src="<?php bloginfo("url"); ?>/images/paypal_donate.gif" alt="Paypal Donation" /></a>
					</li>
					<li style="margin-left:10px;">
						<!-- Place this tag in your head or just before your close body tag -->
						<script type="text/javascript" src="https://apis.google.com/js/plusone.js">	</script>


						<!-- Place this tag where you want the +1 button to render -->
						<g:plusone size="small"></g:plusone>
					</li>
					<li class="separator"><a href="http://www.tagalogmoviesonline.com/" target="_blank">Tagalog Movie Online</a></li>
					<li class="separator"><a href="javascript:void(0);">Help</a></li>
					<li><a href="<?php bloginfo('url');?>/about">About</a></li>
					<li><a href="<?php bloginfo('url'); ?>/disclaimer">Disclaimer</a></li>
					<li><a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a></li>
				</ul>
			</div>
			<br clear="all" />
		</div>
		
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
					<label id="lblSearch">Search movies here</label>
					<input type="text" name="s" id="txtboxsearch" class="inactive" />
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
	</div>		<?php		//include_once("announcements.php");		?>

