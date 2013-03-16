/**
 * Javascript library for template ExtremeMagento
 * @copyright 2007 Quick Solution LTD. All rights reserved.
 * @author Giao L. Trinh <giao.trinh@quicksolutiongroup.com>
 */

(function() {
	
// EM.tools {{{
	
if (typeof BLANK_IMG == 'undefined') 
	var BLANK_IMG = '';

// declare namespace() method
String.prototype.namespace = function(separator) {
  this.split(separator || '.').inject(window, function(parent, child) {
    var o = parent[child] = { }; return o;
  });
};


'EM.tools'.namespace();


// EM0057 {{{

function menu()
{
	var Width_ul=670;
	var Width_li=0;
	var Width_before=0;
	var Width_div=0;
	var Width=0;
	
	$$("#nav").each(function(elem) {
	elem.childElements().each(function(li) {
		li.addClassName('submenu');
	});
		
	});
	
	
    $$(".menu").each(function(elem) {
		elem.childElements().each(function(li) {
			li.addClassName('submenu');
            Width_li=li.getWidth();
			Width=Width_ul-Width_before;
			Width_before+=Width_li;
			$div=li.select('div')[0];
			if(typeof $div != 'undefined'){
				Width_div=$div.getWidth();
				sub=Width_div-Width;
				if(sub>0){
					$div.addClassName(' position-right')
					li.addClassName('position-right-li')
				}
			}
        });
		
	});
}


function resetTinyScrollbarWhenMoved() {
	var $ = jQuery;
	$('#scrollbar1, #scrollbar2').each(function() {
		var sb = this;
		var last_parent = $(sb).parents();
		$(sb).mouseup(function() {
			setTimeout(function() {
				var current_parent = $(sb).parents();
				
				if (last_parent.length == current_parent.length) {
					for (var i = 0; i < last_parent.length; i++)
						if (last_parent[i] != current_parent[i]) {
							reset();
							break;
						}
				}
				else 
					reset();
			}, 500);
		});
		
		function reset() {
			$(sb).tinyscrollbar({ axis: 'x', scroll: true,size:'auto',sizethumb: "auto"});
			last_parent = $(sb).parents();
		}
	});
}

function jsHead() {
	var $ = jQuery;
	
	$('#topcartlink')
		.bind('mouseover', showMenu)
		.bind('click', showMenu)
		.bind('mouseout', hideMenu);
	$('#block-cart')
		.bind('mouseover', showMenu)
		.bind('click', showMenu)
		.bind('mouseout', hideMenu);
	var timeout = null;

	function hideMenu() {
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(function () {
			timeout = null;
			$('#block-cart').slideUp();
			$('#topcartlink').removeClass('over');
		}, 200);
	}

	function showMenu() {
		$('#div_search').css('display', 'none');
		$('#top-links').css('display', 'none');
		if (timeout) clearTimeout(timeout);
		timeout = setTimeout(function () {
			timeout = null;
			$('#block-cart').slideDown();
			$('#topcartlink').addClass('over');
		}, 200);
	}

	/*****************  My Account on Top  **************************/

	$('#top-links')
		.bind('mouseover', showLinks)
		.bind('click', showLinks)
		.bind('mouseout', hideLinks);

	$('#link-account')
		.bind('mouseover', showLinks)
		.bind('click', showLinks)
		.bind('mouseout', hideLinks);

	var timeout1 = null;

	function hideLinks() {
		if (timeout1) clearTimeout(timeout1);
		timeout1 = setTimeout(function () {
			timeout1 = null;
			$('#top-links').slideUp();
			$('#link-account').removeClass('over');
		}, 200);
	}

	function showLinks() {
		$('#div_search').css('display', 'none');
		$('#block-cart').css('display', 'none');
		if (timeout1) clearTimeout(timeout1);
		timeout1 = setTimeout(function () {
			timeout1 = null;
			$('#top-links').slideDown();
			$('#link-account').addClass('over');
		}, 200);
	}

	/********************** Top Search *********************/
	$('#search_link')
		.bind('mouseover', showSearch)
		.bind('click', showSearch)
		.bind('mouseout', hideSearch);

	$('#div_search')
		.bind('mouseover', showSearch)
		.bind('click', showSearch)
		.bind('mouseout', hideSearch);

	$('#search_autocomplete')
		.bind('mouseover', showSearch)
		.bind('click', showSearch);

	var timeout1 = null;

	function hideSearch() {
		if (timeout1) clearTimeout(timeout1);
		timeout1 = setTimeout(function () {
			timeout1 = null;
			if ($('#search_autocomplete').css('display') == 'none') {
				$('#div_search').slideUp();
				$('#search_link').removeClass('over');
			}
		}, 200);
	}

	function showSearch() {
		$('#top-links').css('display', 'none');
		$('#block-cart').css('display', 'none');
		if (timeout1) clearTimeout(timeout1);
		timeout1 = setTimeout(function () {
			timeout1 = null;
			$('#div_search').slideDown();
			$('#search_link').addClass('over');
		}, 200);
	}

	$('#checkout-review-submit .agreement-content').hide();
	$('#terms_link').bind('click', showTerms);

	function showTerms() {
		$('#checkout-review-submit .agreement-content').toggle();
	}
}

function hideAutoComplete() {
	var $ = jQuery;
	var timeout = null;
	
	// hide autocomplete when mouse out
	$('#search_autocomplete, .form-search').mouseleave(function () {
		clearTimeout(timeout);
		timeout = setTimeout(function () {
			$('#search_autocomplete').hide();
		}, 1000);
	});
	
	$('#div_search').mouseleave(function () {
		$('#div_search').slideUp();
	});
}

function initSlider($select, $auto, $vertical, $paging){
	var $ = jQuery;

	if ($($select).size() < 1) return;
	var containerWidth = $($select).parent().width();
	var itemWidth = $($select + '>li').outerWidth(true);
	var itemCount = $($select + '>li').size();
	var itemPerPage = Math.ceil(containerWidth/itemWidth);
	var pageCount = Math.ceil(itemCount/itemPerPage);

	// exit if container's width larger than content
	if (containerWidth>itemWidth*itemCount) return;

	var carouselCallBack = function (carousel) {
		// disable autoscrolling if the user clicks the prev or next button.
		carousel.buttonNext.bind('click', function() {
			carousel.startAuto(0);
		});
		carousel.buttonPrev.bind('click', function() {
			carousel.startAuto(0);
		});

		// pause autoscrolling if the user moves with the cursor over the clip.
		carousel.clip.hover(function() {
			carousel.stopAuto();
		}, function() {
			carousel.startAuto();
		});
	};
	
	// init jcarousel slider
	$($select).jcarousel({
		wrap: 'circular',
		buttonNextHTML:'<a class="next" href="javascript:void(0);" disabled="false">Next</a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);" disabled="false">Pre</a>',
		scroll: 1,
		animation: 1000,
		auto: ($auto==true)? 1: 0,
		vertical: ($vertical==true)? true: false,
		initCallback: carouselCallBack
	});
	
	// paging navigation: only use for horizontal slider
	if ($paging != undefined && pageCount > 1) {
		// disable default autoscrolling
		$($select).data('jcarousel').startAuto(0);
		var autoSliding = $auto;
		
		// insert nav tag
		var navTag = '<ul class="navigation">';
		for(var i = 1; i <= pageCount; i++)
			navTag += '<li><a href="javascript:void(0)">' + i + '</a></li>';
		navTag += '</ul>';
		$($select).parent().after(navTag);
		
		// move to page index (1 => n)
		function moveTo($pageIndex) {
			var realId = $pageIndex - 1;
			$($select).data('jcarousel').scroll($.jcarousel.intval(realId*itemPerPage+1));
			$($select).parent().parent().find('ul.navigation>li>a').removeClass('active');
			$($select).parent().parent().find('ul.navigation>li>a:eq(' + realId + ')').addClass('active');
		}
		
		// bind onclick event on navigation A element
		$($select).parent().parent().find('ul.navigation>li>a').click(function (e) { 
			moveTo($(this).text());
			autoSliding = false;	// stop auto sliding
		});

		// pause autoscrolling if the user moves with the cursor over the clip.
		$($select).hover(function() {
			clearTimeout(timer);
		}, function() {
			timer = setTimeout(doSliding, 3000);
		});
		
		// move to first page
		moveTo(1);
		
		// auto start slideshow
		var curPage = 1;
		var timer;
		function doSliding() {
			if (autoSliding) {
				moveTo(curPage);
				curPage = (curPage < pageCount)? curPage+1: 1;
				timer = setTimeout(doSliding, 3000);
			}
		}
		doSliding();
	}
}

document.observe("dom:loaded", function() {
	menu();
	resetTinyScrollbarWhenMoved();
	jsHead();
	hideAutoComplete();

	initSlider('#slideshow_featured_category > div > ul');
	initSlider('#slideshow_new_products > div > ul');
	initSlider('#slideshow_featured_products > div > ul');
	initSlider('#slideshow_moreview > div > ul');
	/*
	jQuery('#slideshow_featured_category > div > ul').jcarousel({
		wrap: 'circular',
		auto:0,
		buttonNextHTML:'<a class="next" href="javascript:void(0);">Next</a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);">Pre</a>',
		scroll:1,
		animation:'slow'
	});
	
	jQuery('#slideshow_new_products > div > ul').jcarousel({
		wrap: 'circular',
		auto:0,
		buttonNextHTML:'<a class="next" href="javascript:void(0);">Next</a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);">Pre</a>',
		scroll:1,
		animation:'slow'
	});

	jQuery('#slideshow_featured_products > div > ul').jcarousel({
		wrap: 'circular',
		auto:0,
		buttonNextHTML:'<a class="next" href="javascript:void(0);">Next</a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);">Pre</a>',
		scroll:1,
		animation:'slow'
	});

	jQuery('#slideshow_moreview > div > ul').jcarousel({
		wrap: 'circular',
		auto:0,
		buttonNextHTML:'<a class="next" href="javascript:void(0);">Next</a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);">Pre</a>',
		scroll:1,
		animation:'slow'
	});
	*/
	// fix bug dropdown cart not hiding in firefox
	jQuery('#block-cart').click(function () {
		setTimeout(function () {
			jQuery('#block-cart').slideUp();
		}, 1000);
	});
});

// }}}

})();