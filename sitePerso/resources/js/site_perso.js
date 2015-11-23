$(document).ready(function() {

	// redirection si width de l'écran trop basse
	if ($(window).width() < 600){
		window.location.href = "index_site_mobile.php"
	}

	$('#fullpage').fullpage({
    	anchors:['Home', 'About', 'Cv', 'Projects'],

    	paddingTop: '20px',

    	paddingBottom: '20px',
		
		/* callback : exécuté après chaque nouvelle action */
		afterLoad: function(anchorLink, index) {
			$('#miniMenuItem'+anchorLink).addClass('miniMenuItemActive');
		},

		onLeave: function(index, nextIndex, direction) {
			if (nextIndex == 1) {
				$('#miniMenu').hide();
				$('#miniMenuItemHome').hide();
				$('#miniMenuItemAbout').hide();
				$('#miniMenuItemCv').hide();
				$('#miniMenuItemProjects').hide();
			}
			else {
				$('#miniMenu').show(500);
				$('#miniMenuItemHome').fadeIn(500);
				$('#miniMenuItemAbout').fadeIn(1000);
				$('#miniMenuItemCv').fadeIn(1500);
				$('#miniMenuItemProjects').fadeIn(2000);
			}
			$('#miniMenu > div').removeClass('miniMenuItemActive');
		},

		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
			$('#projectsMenu'+slideAnchor).addClass('projectsMenuItemActive');
		},

		onSlideLeave: function( anchorLink, index, slideIndex, direction, nextSlideIndex) {
			$('#projectsMenuslide'+(slideIndex+1)).removeClass('projectsMenuItemActive');
		}
	});

	$('.carousel').carousel({
	    interval: false
	});

	/* menu et mini menu */
	$('#miniMenuItemHome').click(function() {
		$.fn.fullpage.moveTo(1);
	});

	$('#menuItemAbout').click(function() {
		$.fn.fullpage.moveTo(2);
	});

	$('#miniMenuItemAbout').click(function() {
		$.fn.fullpage.moveTo(2);
	});

	$('#menuItemCv').click(function() {
		$.fn.fullpage.moveTo(3);
	});

	$('#miniMenuItemCv').click(function() {
		$.fn.fullpage.moveTo(3);
	});

	$('#menuItemProjects').click(function() {
		$.fn.fullpage.moveTo(4);
	});

	$('#miniMenuItemProjects').click(function() {
		$.fn.fullpage.moveTo(4);
	});


});