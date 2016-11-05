        /* ---------------------------------------------------------------------- */
	/*	Portfolio Filter
	/* ---------------------------------------------------------------------- */

jQuery(window).load(function(){

	var jQuerycontainer = jQuery('.portfolio');
	jQuerycontainer.isotope({
		filter: '*',
		layoutMode : 'fitRows',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
	});

	jQuery('nav.primary ul a').click(function(){
		var selector = jQuery(this).attr('data-filter');
		jQuerycontainer.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
			}
		});

		//centro el porfolio		
		total=jQuery('.portfolio article').filter(selector).length;
		var p=0;
		while(p<=total){
			switch(p%3)
			{
			case 0: clase = "leftal";
			break;
			case 1: clase = "cental";
			break;
			default: clase ="rightal";
			}
			
			switch(p%2)
			{
			case 0: clase2col = "leftal";
			break;
			case 1: clase2col = "rightal";
			break;
			}
			
			jQuery('.portfolio article').filter(selector).eq(p).children('.posicio').removeClass('leftal cental rightal').addClass(clase);
			jQuery('.portfolio article').filter(selector).eq(p).children('.posicio2col').removeClass('leftal rightal').addClass(clase2col);
			p++;
		}		
		
		//jQuery('.portfolio article'+selector+':nth-child(3n+1)').css('background','#000')
		//alert(jQuery('.portfolio article').filter(selector+':nth-child(3n+1)').length )
	  return false;
	});

	var jQueryoptionSets = jQuery('nav.primary ul'),
	       jQueryoptionLinks = jQueryoptionSets.find('a');
	 
	       jQueryoptionLinks.click(function(){
	          var jQuerythis = jQuery(this);
		  // don't proceed if already selected
		  if ( jQuerythis.hasClass('selected') ) {
		      return false;
		  }
	   var jQueryoptionSet = jQuerythis.parents('nav.primary ul');
	   jQueryoptionSet.find('.selected').removeClass('selected');
	   jQueryoptionSet.find('.sel_left').remove()
	   jQueryoptionSet.find('.sel_right').remove()
	   jQuerythis.addClass('selected'); 
	   jQuerythis.parent().append('<span class="sel_left"></span>');
	   jQuerythis.parent().prepend('<span class="sel_right"></span>');		   
	   
	});

});