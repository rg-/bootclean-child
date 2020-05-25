+function(t){ 

/*

	data-toggle="collapse-custom"

*/

$.fn.collapseCustom = function(options) {
		
		var self = $(this); 
		var defaults = {  };

		var settings = $.extend(defaults, options);

		var overlay = $('#collapse-custom-overlay');

		var close = function(target){
			$('body').removeClass('side-menu-visible'); 
			target.removeClass('opened');
			overlay.removeClass('opened');
		}
		var open = function(target){
			$('body').addClass('side-menu-visible'); 
			target.addClass('opened');
			overlay.addClass('opened');
		}

		return self.each(function(){ 
			var me = $(this);
	 		var target = me.data('target'); 
 			target = $(target); 
	 		me.on('click', function (e) {
	 			e.preventDefault();
	 			if(!target.hasClass('opened')){
	 				open(target);
				}else{
					close(target);
				}
	 		});
	 		target.find('a').click(function(e){   
	 			close(target); 
	 		});
	 		overlay.on('click', function (e) {
	 			e.preventDefault();
	 			close(target);
	 		}); 
		});

	};

	$('[data-toggle="collapse-custom"]').collapseCustom(); 

	$(document).on('click','.scroll-to',function(){
		if($('body').hasClass('side-menu-visible')){
			$('#collapse-custom-overlay').trigger('click');
		}
	});
	$(window).on('resize',function(){
		var n_e = 'xs';
		var navbar_expand = $('[data-toggle="collapse-custom"]').closest('.navbar-expand-aside'); 
		$.each(bc_config.breakpoints, function(i, breakpoint) {
		  if( navbar_expand.hasClass('navbar-expand-'+i) ){
				n_e = i;
			}
		}); 
		if( $('body').hasClass('side-menu-visible') && get_window_sizes('w') > bc_config.breakpoints[n_e] ){
			$('#collapse-custom-overlay').trigger('click');
		}
	});

}(jQuery); 