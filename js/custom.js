jQuery(document).ready(function() {
	
	
/* Flecha home */

var posFlecha;
posFlecha=new Array(130,460,775);
jQuery('.home .moduls article:first-child').addClass("activo");
jQuery('.home .moduls article:first-child').addClass("activo");

function updateFlecha(){
	
	screenWidth = jQuery(window).width();

	if(screenWidth>=970){
		posFlecha=new Array(130,460,775);
		jQuery('.flecha_home').css('display', 'block');
	}
	
	if(screenWidth>=783 && screenWidth< 970){
		posFlecha=new Array(100,370,630);
		jQuery('.flecha_home').css('display', 'block');
	}
	if(screenWidth<783){
		jQuery('.flecha_home').css('display', 'none');
	}
	
	indexArticle = jQuery('.home .moduls article.activo').index();
	jQuery('.flecha_home').css('left', posFlecha[indexArticle-1]);
		
	
}


jQuery('.home .moduls article .imagen').mouseenter(function() {
	jQuery('.home  .moduls article').removeClass("activo");
	jQuery(this).parent().parent('article').addClass("activo");
	
	indexArticle = jQuery('.home .moduls article.activo').index();
	//-- flecha
	jQuery('.flecha_home').css('left', posFlecha[indexArticle-1]);
	//-- info
	jQuery('.home .success .container').css('display', "none");
	jQuery('.home .success .container').eq(indexArticle-1).css('display', "block");
})

jQuery(window).bind("resize", function() {updateFlecha();});
updateFlecha();

/* fin flecha */



jQuery('.portfolio article .imagen').mouseenter(function() {
  jQuery('.hover', this).fadeIn("fast");
});
jQuery('.portfolio article .imagen').mouseleave(function() {
  jQuery('.hover', this).fadeOut("fast");
});
/* end Portfolio Filter */



/* View portfolio*/
jQuery('.work-view .image').mouseenter(function() {
	jQuery('.light_big', this).fadeIn("fast");
}).mouseleave(function() {
	jQuery('.light_big', this).fadeOut("fast");
});



/* Banner-mostrar-econder flechas */
jQuery('.oneByOne1, .oneByOne1_v2').mouseenter(function() {
	jQuery('.arrowButton .prevArrow').fadeIn();
	jQuery('.arrowButton .nextArrow').fadeIn();
}).mouseleave(function() {
	jQuery('.arrowButton .prevArrow').fadeOut();
	jQuery('.arrowButton .nextArrow').fadeOut();
});



/* Clients*/

jQuery('.clients li').mouseenter(function() {
	jQuery('img', this).fadeOut();
	jQuery('img.color', this).fadeIn();
}).mouseleave(function() {
	jQuery('img', this).fadeIn();
	jQuery('img.color', this).fadeOut();
});




/* Home portfolio*/
screenWidth = jQuery(window).width();
canvi=783;
if(screenWidth>=canvi){res_actual='gran';}else{res_actual='petit';}

var total=jQuery('.page section .projects .contenedor article').length;
jQuery('.page section .projects .contenedor').css('width',500*total)
pag=1;
calc_pag();
estilo_pag(pag);

jQuery('.botright').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag();
	if(pag!=maxpag){
		pag++;
		estilo_pag(pag);
		if(screenWidth>=canvi){
			if(pag==maxpag){
				if(ultima==0){mou==100;}
				else{mou=(ultima/3)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .projects .contenedor').animate({'left': '-='+mou+'%'}, "slow");
	}
})

jQuery('.botleft').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag();
	if(pag!=1){
		pag--;
		estilo_pag(pag);
		if(screenWidth>=canvi){
			if(pag==1){
				if(ultima==0){mou==100;}
				else{mou=(ultima/3)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .projects .contenedor').animate({'left': '+='+mou+'%'}, "slow");
	}
})

jQuery('.botright').mouseenter(function() {if(pag!=maxpag){jQuery('.botright').removeClass('off')}}).mouseleave(function() {jQuery('.botright').addClass('off')})
jQuery('.botleft').mouseenter(function() {if(pag!=1){jQuery('.botleft').removeClass('off')}}).mouseleave(function() {jQuery('.botleft').addClass('off')})

function calc_pag(){
	if(screenWidth>=canvi){
		maxpag=Math.ceil(total/3);
		ultima=total%3;
	}else{
		maxpag=total;
		ultima=total;
	}
}

function estilo_pag(pag){
	if(pag==1){jQuery('.botleft').css('opacity', 0.4); jQuery('.botright').css('opacity', 1);}
	else if(pag==ultima){jQuery('.botright').css('opacity', 0.4); jQuery('.botleft').css('opacity', 1);}
	else{jQuery('.botright').css('opacity', 1); jQuery('.botleft').css('opacity', 1);}
};

function updateporfolio(){
	screenWidth = jQuery(window).width();

	if(screenWidth>=canvi){
		if(res_actual=='petit'){reset_porfolio()}
		res_actual='gran';
	}else{
		if(res_actual=='gran'){reset_porfolio()}
		res_actual='petit';
	}
	
		
}

function reset_porfolio(){
	pag=1;
	pagT=1;
	pagC=1;
	jQuery('.page section .projects .contenedor').css('left','0px')
	jQuery('.page section .testimonials .contenedor').css('left','0px')
	jQuery('.page section .clients ul').css('left','0px')
	estilo_pag(1)
	estilo_pag_cli(1)
	estilo_pag_test(1)
}

jQuery(window).bind("resize", function() {updateporfolio();});

// testimonials services
var totalT=jQuery('.page section .testimonials .contenedor article').length;
jQuery('.page section .testimonials .contenedor').css('width',500*totalT)
pagT=1;
calc_pag_test();
estilo_pag_test(pagT);

function calc_pag_test(){
	if(screenWidth>=canvi){
		maxpagT=Math.ceil(totalT/3);
		ultimaT=totalT%3;
	}else{
		maxpagT=totalT;
		ultimaT=totalT;
	}
}

function estilo_pag_test(pagT){
	if(pagT==1){jQuery('.botleft2').css('opacity', 0.4); jQuery('.botright2').css('opacity', 1);}
	else if(pagT==maxpagT){jQuery('.botright2').css('opacity', 0.4); jQuery('.botleft2').css('opacity', 1);}
	else{jQuery('.botright2').css('opacity', 1); jQuery('.botleft2').css('opacity', 1);}
};

jQuery('.botright2').mouseenter(function() {if(pagT!=maxpagT){jQuery('.botright2').removeClass('off')}}).mouseleave(function() {jQuery('.botright2').addClass('off')})
jQuery('.botleft2').mouseenter(function() {if(pagT!=1){jQuery('.botleft2').removeClass('off')}}).mouseleave(function() {jQuery('.botleft2').addClass('off')})

jQuery('.botright2').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_test();
	if(pagT!=maxpagT){
		pagT++;
		estilo_pag_test(pagT);
		if(screenWidth>=canvi){
			if(pagT==maxpagT){
				if(ultimaT==0){mou==100;}
				else{mou=(ultimaT/3)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .testimonials .contenedor').animate({'left': '-='+mou+'%'}, "slow");
	}
})

jQuery('.botleft2').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_test();
	if(pagT!=1){
		pagT--;
		estilo_pag_test(pagT);
		if(screenWidth>=canvi){
			if(pagT==1){
				if(ultimaT==0){mou==100;}
				else{mou=(ultimaT/3)*100;}
			}
			else{mou=100;}
		}else{
			mou=100;
		}
		jQuery('.page section .testimonials .contenedor').animate({'left': '+='+mou+'%'}, "slow");
	}
})

//clients services

var totalC=jQuery('.page section .clients ul li').length;
/*jQuery('.page section .clients ul').css('width',500*totalC)*/
pagC=1;
calc_pag_cli();
estilo_pag_cli(pagC);

function calc_pag_cli(){
	if(screenWidth>=canvi){
		maxpagC=Math.ceil(totalC/5);
		ultimaC=totalC%5;
	}else{
		maxpagC=Math.ceil(totalC/2);
		ultimaC=totalC%2;
	}
}

function estilo_pag_cli(pagC){
	if(pagC==1){jQuery('.botleft3').css('opacity', 0.4); jQuery('.botright3').css('opacity', 1);}
	else if(pagC==maxpagC){jQuery('.botright3').css('opacity', 0.4); jQuery('.botleft3').css('opacity', 1);}
	else{jQuery('.botright3').css('opacity', 1); jQuery('.botleft3').css('opacity', 1);}
};

jQuery('.botright3').mouseenter(function() {if(pagC!=maxpagC){jQuery('.botright3').removeClass('off')}}).mouseleave(function() {jQuery('.botright3').addClass('off')})
jQuery('.botleft3').mouseenter(function() {if(pagC!=1){jQuery('.botleft3').removeClass('off')}}).mouseleave(function() {jQuery('.botleft3').addClass('off')})

jQuery('.botright3').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_cli();
	if(pagC!=maxpagC){
		pagC++;
		estilo_pag_cli(pagC);
		if(screenWidth>=canvi){
			if(pagC==maxpagC){
				if(ultimaC==0){mou==100;}
				else{mou=(ultimaC/5)*100;}
			}
			else{mou=100;}
		}else{
			if(pagC==maxpagC){
				if(ultimaC==0){mou==100;}
				else{mou=(ultimaC/2)*100;}
			}
			else{mou=100;}
		}
		jQuery('.page section .clients ul').animate({'left': '-='+mou+'%'}, "slow");
	}
})

jQuery('.botleft3').click(function(){
	screenWidth = jQuery(window).width();
	calc_pag_cli();
	if(pagC!=1){
		pagC--;
		estilo_pag_cli(pagC);
		if(screenWidth>=canvi){
			if(pagC==1){
				if(ultimaC==0){mou==100;}
				else{mou=(ultimaC/5)*100;}
			}
			else{mou=100;}
		}else{
			if(pagC==maxpagC){
				if(ultimaC==0){mou==100;}
				else{mou=(ultimaC/2)*100;}
			}
			else{mou=100;}
		}
		jQuery('.page section .clients ul').animate({'left': '+='+mou+'%'}, "slow");
	}
})



/* home hover*/
	jQuery('.page article .imagen, .page article .imagen2').mouseenter(function() {
	  jQuery('.hover', this).fadeIn("fast");
/*	  jQuery('.hover .lupa',this).css('right','5%');
	  jQuery('.hover .lupa',this).animate({'right': '30%'}, "fast");
  	  jQuery('.hover .link',this).css('top','15%');
	  jQuery('.hover .link',this).animate({'top': '38%'}, "fast");*/
	});
	
	jQuery('.page article .imagen, .page article .imagen2').mouseleave(function() {
	  jQuery('.hover', this).fadeOut("fast");
/*	  jQuery('.hover .lupa',this).css('right','30%');
	  jQuery('.hover .lupa',this).animate({'right': '5%'}, "fast");
	  jQuery('.hover .link',this).css('top','38%');
	  jQuery('.hover .link',this).animate({'top': '5%'}, "fast");*/
	});

/* Menu line*/
	jQuery('.myMenu .lineamenu').css('width',(jQuery('.myMenu .active').width()))

/* Menu hover*/

	jQuery('.menu ul li.nomenu').mouseenter(function() {
		jQuery(this).addClass('selected')
	}).mouseleave(function() {
		jQuery(this).removeClass('selected')
	});

/* Search */

	jQuery('.search input:text').focus(function(){
		jQuery(this).attr('value','');
	});
	
	jQuery("#search").focusout(function() {
		if(jQuery(this).val() == ''){jQuery(this).attr('value','search');}
	})


/* menu responsive*/

    jQuery(function(){
      // bind change event to select
      jQuery('.navegation_resp').bind('change', function () {
          var url = jQuery(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });


/* faq */

	jQuery('.question').click(function(){
		if(jQuery(this).hasClass('qclosed')){
			jQuery('.qopen').parent().find('.answer').slideUp('fast');
			jQuery('.qopen').removeClass('qopen').addClass('qclosed');
			jQuery(this).removeClass('qclosed').addClass('qopen');
			jQuery(this).parent().find('.answer').slideDown('fast');
		}else{
			jQuery(this).removeClass('qopen').addClass('qclosed');
			jQuery(this).parent().find('.answer').slideUp('fast');
		}
	})
	
//hover team

	jQuery('.team li').mouseenter(function(){
		jQuery('.color',this).css('display','block')
		jQuery('.grisos',this).css('display','none')
	}).mouseleave(function() {
		jQuery('.color',this).css('display','none')
		jQuery('.grisos',this).css('display','block')
	})
        
        
      /*  
	var top = jQuery('div.cabecera').offset().top - parseFloat(jQuery('div.cabecera').css('margin-top').replace(/auto/, 0));
var larg = jQuery(window).width();

if(larg > 776){
var top = jQuery('div.franja').offset().top - parseFloat(jQuery('div.cabecera').css('margin-top').replace(/auto/, 0));
jQuery(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = jQuery(this).scrollTop();
      if (y >= top) {
                jQuery('div.cabecera').addClass('fixed'),
                jQuery('div.cabecera').fadeIn('swing'),
                jQuery('div.cabecera').find('ul').removeClass('unfixed').addClass('fixed');
                jQuery('div.cabecera img').height(70);
                jQuery('li.lineamenu').css('display', 'none');
                
      }
      else {
                jQuery('div.cabecera').removeClass('fixed'),
                jQuery('div.cabecera').find('ul').removeClass('fixed').addClass('unfixed');
                jQuery('div.cabecera img').height('auto');
                
                jQuery('li.lineamenu').css('display', 'block');
      }

    });
}else{

    jQuery('.logo').style('margin-top','0px');
}
*/
});

