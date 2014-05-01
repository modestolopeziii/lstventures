
		$(document).ready(function() {
			activeMenu();
			 $(window).bind('scroll',function(){
				activeMenu();
			   });
		
			$('a.about-navigation').click(function(e){
					$('html, body').stop(true,false).animate({
					scrollTop:$('#about-section').offset().top
					}, 1000);
				e.preventDefault();
			});
		
			$('a.product-navigation').click(function(e){
				$('html, body').stop(true,false).animate({
					scrollTop:$('#product-section').offset().top
					}, 1000);
				e.preventDefault();
			  });

			$('a.contact-navigation').click(function(e){
					$('html, body').stop(true,false).animate({
					scrollTop:$('#contact-section').offset().top
				}, 1000);
			e.preventDefault();
				}); 
		});


		function activeMenu(){
			var menu1 =  0;
			
			var menu2 =  $('#product-section').offset().top - (($('#contact-section').offset().top - $('#product-section').offset().top) / 2);
			
			var menu3 =  $('#contact-section').offset().top - (($(document).height() - $('#contact-section').offset().top) / 2);
		
			if($(document).scrollTop() >= menu1 && $(document).scrollTop() < menu2) {
				//$('.menu-navigation ul li .about-navigation').css('border-bottom','2px solid #FFFFFF');
				//$('.menu-navigation').css('-webkit-box-shadow','1px 1px 1px 1px #FFFFFF');
			}	

			else if ($(document).scrollTop() >= menu2 && $(document).scrollTop < menu3) {
				//$('.menu-navigation ul li .product-navigation').css('border-bottom','2px solid #FFFFFF');
				//$('.menu-navigation').css('-webkit-box-shadow','1px 1px 10px -5px #3F3F3F');
			}

			else if ($(document).scrollTop() >= menu3) {
				//$('.menu-navigation ul li .contact-navigation').css('border-bottom','2px solid #FFFFFF');	
				//$('.menu-navigation').css('-webkit-box-shadow','1px 1px 10px -5px #3F3F3F');
			}
		
		}
	
	$(document).ready(function(){
		// if($('#mobile-icon-button').click()) {
		$('#mobile-icon-button').click(function(){
			$('.mobile-sidebar-container').toggle("slide");
			$('.mobile-menu-navigation').css('margin-left','-30px');
		});
		// }
	});
	
	
	
	$(document).ready(function(){
		$('.common-navigation').click(function(){
			$('.mobile-sidebar-container').toggle("slide");
			$('.mobile-menu-navigation').css('margin-left','-20px');
		});
	});