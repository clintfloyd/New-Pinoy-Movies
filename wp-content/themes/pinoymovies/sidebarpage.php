<div class="right">
	<div class="sidebarad">
		<!-- Begin: adBrite, Generated: 2011-01-26 22:48:31  -->
		<script type="text/javascript">
		var AdBrite_Title_Color = '191919';
		var AdBrite_Text_Color = '000000';
		var AdBrite_Background_Color = 'FFFFFF';
		var AdBrite_Border_Color = 'FFFFFF';
		var AdBrite_URL_Color = '999999';
		try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
		</script>
		<script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1810633&zs=3330305f323530&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
		<div><a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1810633&afsid=1" style="font-weight:bold;font-family:Arial;font-size:13px;">Your Ad Here</a></div>
		<!-- End: adBrite -->
	</div>
	<div class="sidebarcomments">
		<h2>Recent Comments</h2>
		<?php
		global $wpdb;
		$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
		comment_post_ID, comment_author, comment_date_gmt, comment_approved,
		comment_type,comment_author_url,
		SUBSTRING(comment_content,1,33) AS com_excerpt
		FROM $wpdb->comments
		LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
		$wpdb->posts.ID)
		WHERE comment_approved = '1' AND comment_type = '' AND
		post_password = ''
		ORDER BY comment_date_gmt DESC
		LIMIT 10";
		$comments = $wpdb->get_results($sql);
		$output = $pre_HTML;
		$output .= "\n<ul>";
		foreach ($comments as $comment) {
		$output .= "\n<li>".strip_tags($comment->comment_author)
		.":" . " <a href=\"" . get_permalink($comment->ID) .
		"#comment-" . $comment->comment_ID . "\" title=\"on " .
		$comment->post_title . "\">" . strip_tags($comment->com_excerpt)
		."</a></li>";
		}
		$output .= "\n</ul>";
		$output .= $post_HTML;
		echo $output;?>
	</div>
	<div class="facebook-fanpage" id="fbDiv">
		<h2>Facebook Fan Page</h2>
		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.newpinoymovies.com%2F&amp;layout=button_count&amp;show_faces=true&amp;width=200&amp;action=recommendation&amp;font=tahoma&amp;colorscheme=light&amp;height=21&amp;ref=http://www.freepinoymovies.com/" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>

		<iframe src="http://www.facebook.com/plugins/recommendations.php?site=http://www.newpinoymovies.com&amp;width=300&amp;height=500&amp;header=true&amp;colorscheme=light" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:500px;" allowTransparency="true"></iframe>

	</div>
	<div class="sidebarad">
		<!-- Begin: adBrite, Generated: 2011-01-26 22:48:31  -->
		<script type="text/javascript">
		var AdBrite_Title_Color = '191919';
		var AdBrite_Text_Color = '000000';
		var AdBrite_Background_Color = 'FFFFFF';
		var AdBrite_Border_Color = 'FFFFFF';
		var AdBrite_URL_Color = '999999';
		try{var AdBrite_Iframe=window.top!=window.self?2:1;var AdBrite_Referrer=document.referrer==''?document.location:document.referrer;AdBrite_Referrer=encodeURIComponent(AdBrite_Referrer);}catch(e){var AdBrite_Iframe='';var AdBrite_Referrer='';}
		</script>
		<script type="text/javascript">document.write(String.fromCharCode(60,83,67,82,73,80,84));document.write(' src="http://ads.adbrite.com/mb/text_group.php?sid=1810633&zs=3330305f323530&ifr='+AdBrite_Iframe+'&ref='+AdBrite_Referrer+'" type="text/javascript">');document.write(String.fromCharCode(60,47,83,67,82,73,80,84,62));</script>
		<div><a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=1810633&afsid=1" style="font-weight:bold;font-family:Arial;font-size:13px;">Your Ad Here</a></div>
		<!-- End: adBrite -->
	</div>
	<div class="cat" style="">
		<h2>Chatzone</h2>
		<p>
		Please do not send links, email addresses or personal informations while using this chatbox
		</p>
		<object width="300" height="400" id="obj_1277131236381"><param name="movie" value="http://newpinoymovies16.chatango.com/group"/><param name="AllowScriptAccess" VALUE="always"/><param name="AllowNetworking" VALUE="all"/><param name="AllowFullScreen" VALUE="true"/><param name="flashvars" value="cid=1277131236381&a=000000&b=100&c=FFFFFF&d=CCCCCC&k=666666&l=333333&m=000000&n=FFFFFF&r=100&s=1"/><embed id="emb_1277131236381" src="http://newpinoymovies16.chatango.com/group" width="300" height="400" allowScriptAccess="always" allowNetworking="all" type="application/x-shockwave-flash" allowFullScreen="true" flashvars="cid=1277131236381&a=000000&b=100&c=FFFFFF&d=CCCCCC&k=666666&l=333333&m=000000&n=FFFFFF&r=100&s=1"></embed></object>
	</div>
</div>