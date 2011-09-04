	jQuery(document).ready(function(){
    
    var my_glider = new Glider('thebillboard', {duration:0.5, autoGlide: true, frequency: 5});
    
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