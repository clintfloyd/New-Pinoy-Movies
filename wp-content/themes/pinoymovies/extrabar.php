<div class="extrabutton" id="extrabutton"></div>



<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#extrabutton").click(function(){
			jQuery('#extrabutton').animate({
				left: '-=50'
			  }, 150, function() {
				// Animation complete.
			  });
		});
	});
</script>