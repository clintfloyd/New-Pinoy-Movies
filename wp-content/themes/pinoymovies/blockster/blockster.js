/* ------------------
| NAMESPACE
------------------ */

blockster = function(params) { 
	
	/* ------------------
	| validate params. If anything not set, use defaults. If no or invalid holder, die.
	------------------ */
	
	if (!params.holder || $(params.holder).length != 1) {
		console.log("Blockster error: could not find holder element '"+params.holder+"'");
		return false;
	}
	params.holder = $(params.holder);
	if (!params.pause || !parseInt(params.pause)) params.pause = blockster.conf.pause;
	if (!params.blockAnimSpeed || !parseInt(params.blockAnimSpeed)) params.blockAnimSpeed = blockster.conf.blockAnimSpeed;
	if (!params.rows || !parseInt(params.rows)) params.rows = blockster.conf.blocks.rows;
	if (!params.cols || !parseInt(params.cols)) params.cols = blockster.conf.blocks.cols;
	
	
	/* ------------------
	| PREP
	------------------ */
	
	params.holder.dimensions = {width: params.holder.width(), height: params.holder.height()};
	params.dimensions = {
		width: Math.ceil(params.holder.dimensions.width / params.cols),
		height: Math.ceil(params.holder.dimensions.height / params.rows)
	};
	params.holder.children('div').not(':first-child').hide(); //to start with, hide all slides but first
	

	/* ------------------
	| if params OK, start interval
	------------------ */		
	
	setInterval(function() {
			blockster.func(params);
		},
		params.pause + ((params.rows * params.cols) * params.blockAnimSpeed)
	);
};


/* ------------------
| CONFIG DEFAULTS
------------------ */

blockster.conf = {}; //config
blockster.conf.blocks = {rows: 10, cols: 10} //how many blocks do you want involved in the transition? (default 3 * 4, = 12)
blockster.conf.pause = 3500; //miliseconds between slide transitions
blockster.conf.animType = 'fade'; //how the blocks appear - 'simple' or 'fade'
blockster.conf.blockAnimSpeed = 50; //miliseconds between each block transition


/* ------------------
| MAIN FUNC
------------------ */

blockster.func = function(params) {

	
	/* ------------------
	| ascertain current and next slides (find :visible <div>, then next is either is prev sibling or, if none, parent's last child)
	------------------ */
	
	var currentSlide = params.holder.children('div:visible');
	var nextSlide = currentSlide.nextAll().length != 0 ? currentSlide.next() : params.holder.children('div').first();
	
	
	/* ------------------
	| Iterate over number of required blocks to be built. For each...
	------------------ */
	
	for(var u=0; u<(params.rows * params.cols); u++) {
		
		
		/* ------------------
		| ...DOM-script the block and style/position it (position depends on number of rows/cols and block dimensions, worked out at top)
		| Remember to start each block as hidden, so we can bring them in randomly when all are ready.
		------------------ */
		
		var block = document.createElement('div');
		with($(block)) {
			css({
				width: params.dimensions.width,
				height: params.dimensions.height,
				left: (u % params.cols) * params.dimensions.width,
				top: Math.floor(u / params.cols) * params.dimensions.height,
				zIndex: 10000,
				overflow: 'hidden',
				position: 'absolute'
			});
			hide();
			addClass('block');
		}


		/* ------------------
		| ...clone next slide and append it to the block, positioning it so only the right part of it shows (hence overflow:hidden on blocks)
		| Remember to unhide it!
		------------------ */		
		var nextSlide_clone = nextSlide.get(0).cloneNode(true);
		with($(nextSlide_clone)) {
			show();
			css({height: params.holder.height(), width: params.holder.width(), position: 'relative', left: -parseInt($(block).css('left')), top: -parseInt($(block).css('top'))});
		}
		
		$(block).append(nextSlide_clone);
			
		
		/* ------------------
		| ...append it to holder
		------------------ */
		
		params.holder.append($(block));
		
		
	}
	
	
	/* ------------------
	| ANIMATION - with all blocks built, set an interval to turn them all on, one by one.
	| When all blocks in position, and all have finished anim (if fade rather than simple)
	|	- kill int
	|	- shuffle slides so the one our blocks contain parts of is genuinely topmost
	|	- remove blocks
	------------------ */
	
	var animInt = setInterval(function() {
		if(params.holder.children('.block:not(:visible)').length > 0) {
			var blocks = params.holder.children('.block:not(:visible)');
			with($(blocks.get(!params.random ? 0 : Math.floor(Math.random() * blocks.length)))) params.animType == 'simple' ? show() : fadeIn();
		}
		else if ($('.block:animated').length == 0) {
			clearInterval(animInt);
			currentSlide.hide();
			nextSlide.show();
			params.holder.find('.block').remove();
		}
	}, params.blockAnimSpeed);
	
}