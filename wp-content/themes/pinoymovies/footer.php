<div id="chatboxcontainer"><a href="javascript:void(0);" id="clickheretochat">>>> Click Here to Chat <<<</a></div>
<div class="listing-container-line"></div>				
		<div style="margin:auto auto; width:790px;">		
		</div>				
		<div class="semi-footer">			
			<div class="boxes">
				<div>
					<h2>Recently Added Movies</h2>
				</div>				
				<div>					
					<ul class="ul-link-sidebar">						
						<?php get_archives('postbypost', 20); ?>					
					</ul>				
				</div>			
			</div>			
			<div class="boxes">	
				<div>					
					<h2>Movie Categories</h2>				
				</div>				
				<div>					
					<ul>						
						<?php wp_list_categories('hide_empty=1&show_count=0&title_li='); ?>						
						<li id="tvprog">Show/Hide TV Programs</a>					
					</ul>				
				</div>			
			</div>			
			<div class="boxes no-border">				
				<div>					
					<h2>Pages</h2>				
				</div>				
				<div style="max-height:300px; overflow:hidden;">				
					<?php wp_list_pages('title_li= ' ); ?>				
				</div>				
				<?php				
					wp_reset_query();				
					if($_SERVER['SERVER_NAME'] == "newpinoymovies.com" ||  $_SERVER['SERVER_NAME']=="www.newpinoymovies.com"){
						if(!is_single()){ ?>					
							<div>						
								<h2>Pinoy Radio</h2>					
							</div>					
							<div class="cat" style="padding-top:20px;">						
								<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/radio.js"></script>				
							</div>				
					<?php } } ?>			
			</div>			
			<br clear="all" />		
		</div>		
		<div class="listing-container-line"></div>		
		<br />		
		<div class="tagcloudfooter">		
			<?php wp_tag_cloud('smallest=8&largest=22'); ?>		
		</div>
		<br />		
		<div class="listing-container-line"></div>				
		<div class="footer">			
			<div class="">				
				<a href="<?php bloginfo('url'); ?>" title="New Pinoy Movies | Watch New Pinoy Movies Online">
					<img border="0" src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-logo.png" alt="New Pinoy Movies | Watch New Pinoy Movies Online" />
				</a>
			</div>			
			<div class="links">				
				<ul>					
					<li>
						<a href="<?php bloginfo('url'); ?>" title="New Pinoy Movies | Watch New Pinoy Movies Online">New Pinoy Movies &copy; 2010-2011</a>
					</li>					
					<li>
						<a href="<?php bloginfo('url'); ?>" title="New Pinoy Movies | Watch New Pinoy Movies Online">Home</a>
					</li>					
					<li>
						<a href="<?php bloginfo('url'); ?>/category/pinoy-movies" title="New Pinoy Movies | Watch New Pinoy Movies Online">Pinoy Movies</a>
					</li>					
					<li>
						<a href="<?php bloginfo('url'); ?>/category/tv-programs" title="New Pinoy Movies | Watch New Pinoy Movies Online">TV Programs</a>
					</li>					
					<li>
						<a href="<?php bloginfo('url'); ?>/sitemap.xml" title="New Pinoy Movies | Watch New Pinoy Movies Online">Sitemap</a>
					</li>					
					<li>
						<a href="<?php bloginfo('url'); ?>/privacy-policy" title="New Pinoy Movies | Watch New Pinoy Movies Online">Privacy Policy</a>
					</li>					
					<li>
						<a href="<?php bloginfo('url'); ?>/contact-us/" title="New Pinoy Movies | Watch New Pinoy Movies Online">Contact Us</a>
					</li>					
					<li>
						<a href="http://www.moviewatchlist.com/moviedownloads" title="Divx movies">Divx movies</a>
					</li>					
					<li>
						<a href="http://www.moviesfunzone.com/" title="online movies">online movies</a>
					</li>					
					<li>
						<a href="http://www.edogo.com/" title="watch Tv shows Free">watch Tv shows Free</a>
					</li>					
					<li>
						<a href="http://so-you-think-you-can-dance.download-tvshows.com/" title="so you think you can dance">so you think you can dance</a>
					</li>					
					<li>
						<a href="http://ratedmovies.net" title="Download Full Movies">download full movies</a>
					</li> 
					<li>
						<a href="http://www.watchpinoytvseries.com">Watch Pinoy TV Series</a>
					</li>
					<li>
						<a href="http://frustratedkid.com/" title="Putlocker Movies">Putlocker Movies</a>
					</li>
					<li>
						<a href="http://www.stagevu-movies.com"  title="Stagevu Movies">Stagevu Movies</a>
					</li>
					<li>
						<a href="http://www.tagalogmoviesonline.com"  title="Tagalog Movies Online">Tagalog Movies Online</a>
					</li>
					<li>
						<script type="text/javascript" src="http://widgets.amung.us/small.js"></script>
						<script type="text/javascript">WAU_small('a0eb16g6gcpc')</script>
					</li>					
					<li>
						<script type="text/javascript" src="http://widgets.amung.us/small.js"></script>
						<script type="text/javascript">WAU_small('liugt588hczo')</script>
					</li>					
					<li>
						<!-- Begin BlogToplist tracker code -->
						<a  rel="nofollow" href="http://www.blogtoplist.com/entertainment/" title="Entertainment">
							<img src="http://www.blogtoplist.com/tracker.php?u=128392" alt="Entertainment" border="0" />
						</a>
						<noscript>
							<a  rel="nofollow" href="http://www.mobiltbredband.net">bredband</a>
						</noscript>
						<!-- End BlogToplist tracker code -->
					</li>					
					<br clear="all" />				
				</ul>			
			</div>			
		<div>					
		<br clear="all" />			
		Disclaimer: The movies, films and video clips found on this site is not hosted on our server. We just embed and link movies from the other sites.<br />			
		If  you have problems regarding the movies, please contacts us for immediate deletion of a certain movies or contact the respective owner or webhost where the movies are located.			
	</div>
	<div class="links2">				
		<?php global $post_title;				
			if(isset($post_title) && $post_title != ""){				
		?>				
				<a href="<?php bloginfo('url'); ?><?php echo $_SERVER['REQUEST_URI']; ?>">
					<h1>Watch <?php global $post_title; echo $post_title; ?> Movie Online</h1>
				</a>				
		<?php
			}else{				
		?>				
		<a href="<?php bloginfo('url'); ?><?php echo $_SERVER['REQUEST_URI']; ?>"><h1>Watch New Pinoy Movies Online</h1></a>				
		<?php } ?>			
	</div>		
	</div>	
</div>		
</body>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/lazyload.js"></script>	
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/norightclick.js"></script>
<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/searchbar.js"></script>
<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/homemenu.js"></script>

<?php if(is_home()){?>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/prototype.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/effects.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/glider.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/hometab.js"></script>
<?php } ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 	

</html>