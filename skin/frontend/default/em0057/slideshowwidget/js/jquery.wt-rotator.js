/**
 * jQuery Banner Rotator 
 * Copyright (c) 2010 Allan Ma (http://codecanyon.net/user/webtako)
 * Version: 1.4.2 (01/24/2011)
 */
jQuery.noConflict();
;(function($) {
	$.fn.wtRotator = function(params) {
		var TOP_LEFT = "TL";
		var TOP_RIGHT = "TR";
		var TOP_CENTER = "TC";
		var BOTTOM_LEFT = "BL";
		var BOTTOM_RIGHT = "BR";		
		var BOTTOM_CENTER = "BC";
		var INSIDE = "inside";
		var OUTSIDE = "outside";
		
		var EFFECTS = new Array(42);		
		EFFECTS["fade"] 			= 0;		
		EFFECTS["block.top"] 		= 1;
		EFFECTS["block.right"] 		= 2;
		EFFECTS["block.bottom"]		= 3;
		EFFECTS["block.left"] 		= 4;		
		EFFECTS["block.drop"]  		= 5;		
		EFFECTS["diag.fade"] 		= 6;
		EFFECTS["diag.exp"] 		= 7;		
		EFFECTS["rev.diag.fade"] 	= 8;
		EFFECTS["rev.diag.exp"] 	= 9;		
		EFFECTS["block.fade"] 	 	= 10;
		EFFECTS["block.exp"] 		= 11;
		EFFECTS["block.top.zz"] 	= 12;
		EFFECTS["block.bottom.zz"] 	= 13;
		EFFECTS["block.left.zz"] 	= 14;
		EFFECTS["block.right.zz"]  	= 15;		
		EFFECTS["spiral.in"]		= 16;	
		EFFECTS["spiral.out"]		= 17;
		EFFECTS["vert.tl"] 			= 18;
		EFFECTS["vert.tr"] 			= 19;
		EFFECTS["vert.bl"] 			= 20;
		EFFECTS["vert.br"] 			= 21;		
		EFFECTS["fade.left"] 		= 22;	
		EFFECTS["fade.right"]		= 23;		
		EFFECTS["alt.left"]     	= 24;
		EFFECTS["alt.right"]    	= 25;
		EFFECTS["blinds.left"]  	= 26;
		EFFECTS["blinds.right"] 	= 27;		
		EFFECTS["vert.random.fade"]	= 28;	
		EFFECTS["horz.tl"] 			= 29;
		EFFECTS["horz.tr"] 			= 30;		
		EFFECTS["horz.bl"] 			= 31;
		EFFECTS["horz.br"] 			= 32;		
		EFFECTS["fade.top"] 		= 33;
		EFFECTS["fade.bottom"]		= 34;
		EFFECTS["alt.top"]      	= 35;
		EFFECTS["alt.bottom"]   	= 36;
		EFFECTS["blinds.top"]   	= 37;
		EFFECTS["blinds.bottom"]	= 38;	
		EFFECTS["horz.random.fade"]	= 39;			
		EFFECTS["none"] 			= 40;
		EFFECTS["random"] 			= 41;
		
		var TEXT_EFFECTS = new Array(4);	
		TEXT_EFFECTS["fade"]  = 0;
		TEXT_EFFECTS["down"]  = 1;
		TEXT_EFFECTS["right"] = 2;
		TEXT_EFFECTS["none"]  = 3;
		
		var DEFAULT_DELAY = 5000;
		var DURATION = 800;
		var ANIMATE_SPEED = 600;
		var TOOLTIP_DELAY = 600;
		var UPDATE_TEXT = "updatetext";
		
		//Vertical Stripes
		function VertStripes(rotator, areaWidth, areaHeight, stripeSize, bgColor, duration, delay) {
			var $stripes;
			var $arr;
			var total;
			var intervalId = null;
			
			//init stripes
			var init = function() {
				total = Math.ceil(areaWidth/stripeSize);
				var divs = "";
				for (var i = 0; i < total; i++) {
					divs += "<div class='vpiece' id='" + i + "'></div>";
				}					
				rotator.addToScreen(divs);
				
				$stripes = $("div.vpiece", rotator.$el);
				$arr = new Array(total);
				$stripes.each(
					function(n) {						
						$(this).css({left:(n * stripeSize), height: areaHeight});
						$arr[n] = $(this);
					}
				);	
			}

			//clear animation
			this.clear = function() {
				clearInterval(intervalId);
				$stripes.stop(true).css({"z-index":2, opacity:0});
			}

			//display content
			this.displayContent = function($img, effect) {
				setPieces($img, effect);
				if (effect == EFFECTS["vert.random.fade"]) {
					animateRandom($img);
				}
				else {
					animate($img, effect);
				}
			}			
			
			//set image stripes
			var setPieces = function($img, effect) {
				switch (effect) {
					case EFFECTS["vert.tl"]:
					case EFFECTS["vert.tr"]:
						setVertPieces($img, -areaHeight, 1, stripeSize, false);		
						break;
					case EFFECTS["vert.bl"]:
					case EFFECTS["vert.br"]:
						setVertPieces($img, areaHeight, 1, stripeSize, false);
						break;
					case EFFECTS["alt.left"]:
					case EFFECTS["alt.right"]:
						setVertPieces($img, 0, 1, stripeSize, true);
						break;
					case EFFECTS["blinds.left"]:
					case EFFECTS["blinds.right"]:
						setVertPieces($img, 0, 1, 0, false);
						break;
					default:
						setVertPieces($img, 0, 0, stripeSize, false);
				}
			}
			
			//set vertical stripes
			var setVertPieces = function($img, topPos, opacity, width, alt) {
				var imgSrc = $img.attr("src");
				var tOffset = 0;
				var lOffset = 0;								
				if (rotator.centerImg()) {
					tOffset = (areaHeight - $img.height())/2;
					lOffset = (areaWidth - $img.width())/2;
				}
				$stripes.each(
					function(n) {
						var xPos =  ((-n * stripeSize) + lOffset);
						if (alt) {
							topPos = (n % 2) == 0 ? -areaHeight: areaHeight;
						}
						$(this).css({background:bgColor + " url('"+ imgSrc +"') no-repeat", backgroundPosition:xPos + "px " + tOffset + "px", opacity:opacity, top:topPos, width:width, "z-index":3});						
					});
			}
			
			//animate stripes			
			var animate = function($img, effect) {
				var start, end, incr, limit;
				switch (effect) {
					case EFFECTS["vert.tl"]:   case EFFECTS["vert.bl"]: 
					case EFFECTS["fade.left"]: case EFFECTS["blinds.left"]: 
					case EFFECTS["alt.left"]:
						start = 0;
						end = total - 1;
						incr = 1;	
						break;
					default:
						start = total - 1;
						end = 0;
						incr = -1;
				}
				
				intervalId = setInterval(
					function() {
						$($stripes.get(start)).animate({top:0, opacity:1, width:stripeSize}, duration, "",
							function() {
								if ($(this).attr("id") == end) {
									rotator.setComplete($img);
								}
							}
						);
						if (start == end) {
							clearInterval(intervalId);
						}
						start += incr;
					}, delay);							
			}
			
			//animate random fade 
			var animateRandom = function($img) {		
				shuffleArray($arr);
				var i = 0;
				var count = 0;
				intervalId = setInterval(
					function() {
						$arr[i++].animate({opacity:1}, duration, "",
								function() {
									if (++count == total) {
										rotator.setComplete($img);
									}
								});
						if (i == total) {
							clearInterval(intervalId);
						}
					}, delay);			
			}
			
			init();
		}
		
		//Horizontal Stripes
		function HorzStripes(rotator, areaWidth, areaHeight, stripeSize, bgColor, duration, delay) {
			var $stripes;
			var $arr;
			var total;
			var intervalId = null;
			
			//init stripes
			var init = function() {			
				total = Math.ceil(areaHeight/stripeSize);				
				var divs = "";
				for (var j = 0; j < total; j++) {
					divs += "<div class='hpiece' id='" + j + "'><!-- --></div>";
				}				
				rotator.addToScreen(divs);
				
				$stripes = $("div.hpiece", rotator.$el);
				$arr = new Array(total);
				$stripes.each(
					function(n) {
						$(this).css({top:(n * stripeSize), width: areaWidth});
						$arr[n] = $(this);
					}							 
				);
			}

			//clear animation
			this.clear = function() {
				clearInterval(intervalId);
				$stripes.stop(true).css({"z-index":2, opacity:0});
			}

			//display content
			this.displayContent = function($img, effect) {
				setPieces($img, effect);
				if (effect == EFFECTS["horz.random.fade"]) {
					animateRandom($img);
				}
				else {
					animate($img, effect);
				}
			}			
			
			//set image stripes
			var setPieces = function($img, effect) {
				switch (effect) {
					case EFFECTS["horz.tr"]:
					case EFFECTS["horz.br"]:
						setHorzPieces($img, areaWidth, 1, stripeSize, false);		
						break;
					case EFFECTS["horz.tl"]:
					case EFFECTS["horz.bl"]:
						setHorzPieces($img, -areaWidth, 1, stripeSize, false);
						break;
					case EFFECTS["alt.top"]:
					case EFFECTS["alt.bottom"]:
						setHorzPieces($img, 0, 1, stripeSize, true);
						break;
					case EFFECTS["blinds.top"]:
					case EFFECTS["blinds.bottom"]:
						setHorzPieces($img, 0, 1, 0, false);
						break;
					default:
						setHorzPieces($img, 0, 0, stripeSize, false);		
				}
			}
			
			//set horizontal stripes
			var setHorzPieces = function($img, leftPos, opacity, height, alt) {
				var imgSrc = $img.attr("src");
				var tOffset = 0;
				var lOffset = 0;
				if (rotator.centerImg()) {
					tOffset = (areaHeight - $img.height())/2;
					lOffset = (areaWidth - $img.width())/2;
				}
				$stripes.each(
					function(n) {
						var yPos = ((-n * stripeSize) + tOffset);
						if (alt) {
							leftPos = (n % 2) == 0 ? -areaWidth: areaWidth;
						}
						$(this).css({background:bgColor + " url('"+ imgSrc +"') no-repeat", backgroundPosition:lOffset + "px " + yPos + "px", opacity:opacity, left:leftPos, height:height, "z-index":3});			  
					});
			}
			
			//animate stripes			
			var animate = function($img, effect) {
				var start, end, incr;
				switch (effect) {
					case EFFECTS["horz.tl"]:  case EFFECTS["horz.tr"]: 
					case EFFECTS["fade.top"]: case EFFECTS["blinds.top"]: 
					case EFFECTS["alt.top"]:
						start = 0;
						end = total - 1;
						incr = 1;
						break;
					default:
						start = total - 1;
						end = 0;
						incr = -1;
				}
				
				intervalId = setInterval(
					function() {
						$($stripes.get(start)).animate({left:0, opacity:1, height:stripeSize}, duration, "",
							function() {
								if ($(this).attr("id") == end) {
									rotator.setComplete($img);
								}
							}
						);						
						if (start == end) {
							clearInterval(intervalId);
						}
						start += incr;
					}, delay);							
			}
			
			//animate random fade 
			var animateRandom = function($img) {		
				shuffleArray($arr);
				var i = 0;
				var count = 0;
				intervalId = setInterval(
					function() {
						$arr[i++].animate({opacity:1}, duration, "",
								function() {
									if (++count == total) {
										rotator.setComplete($img);
									}
								});
						if (i == total) {
							clearInterval(intervalId);
						}
					}, delay);			
			}
			
			init();
		}
		
		//class Blocks
		function Blocks(rotator, areaWidth, areaHeight, blockSize, bgColor, duration, delay) {
			var $blockArr;
			var $blocks;
			var $arr;
			var numRows;
			var numCols;
			var total;
			var intervalId;
			
			//init blocks
			var init = function() {
				numRows = Math.ceil(areaHeight/blockSize);
				numCols = Math.ceil(areaWidth/blockSize);				
				total = numRows * numCols;
				var divs = "";								
				for (var i = 0; i < numRows; i++) {					
					for (var j = 0; j < numCols; j++) {
						divs += "<div class='block' id='" + i + "-" + j + "'></div>";		
					}
				}
				rotator.addToScreen(divs);
				$blocks = $("div.block", rotator.$el);	
				$blocks.data({tlId:"0-0", trId:"0-"+(numCols - 1), blId:(numRows - 1)+"-0", brId:(numRows - 1)+"-"+(numCols - 1)});
				
				var k = 0;
				$arr = new Array(total);
				$blockArr = new Array(numRows);
				for (var i = 0; i < numRows; i++) {
					$blockArr[i] = new Array(numCols);
					for (var j = 0; j < numCols; j++) {
						$blockArr[i][j] = $arr[k++] = $blocks.filter("#" + (i + "-" + j)).data("top", i * blockSize);
					}
				}				
			}
			
			//clear blocks
			this.clear = function() {
				clearInterval(intervalId);
				$blocks.stop(true).css({"z-index":2, opacity:0});
			}
			
			//display content
			this.displayContent = function($img, effect) {
				switch (effect) {
					case EFFECTS["diag.fade"]:
						setBlocks($img, 0, blockSize, 0);
						diagAnimate($img, {opacity:1}, false);		
						break;
					case EFFECTS["diag.exp"]:
						setBlocks($img, 0, 0, 0);
						diagAnimate($img, {opacity:1, width:blockSize, height:blockSize}, false);
						break;
					case EFFECTS["rev.diag.fade"]:
						setBlocks($img, 0, blockSize, 0);
						diagAnimate($img, {opacity:1}, true);
						break;
					case EFFECTS["rev.diag.exp"]:
						setBlocks($img, 0, 0, 0);
						diagAnimate($img, {opacity:1, width:blockSize, height:blockSize}, true);
						break;
					case EFFECTS["block.fade"]:
						setBlocks($img, 0, blockSize, 0);
						randomAnimate($img);
						break;
					case EFFECTS["block.exp"]:
						setBlocks($img, 1, 0, 0);
						randomAnimate($img);
						break; 
					case EFFECTS["block.drop"]:
						setBlocks($img, 1, blockSize, -(numRows * blockSize));
						randomAnimate($img);
						break;
					case EFFECTS["block.top.zz"]: 
					case EFFECTS["block.bottom.zz"]:					
						setBlocks($img, 0, blockSize, 0);
						horzZigZag($img, effect);
						break;
					case EFFECTS["block.left.zz"]: 
					case EFFECTS["block.right.zz"]:
						setBlocks($img, 0, blockSize, 0);
						vertZigZag($img, effect);
						break;
					case EFFECTS["spiral.in"]:
						setBlocks($img, 0, blockSize, 0);
						spiral($img, false);
						break;
					case EFFECTS["spiral.out"]:
						setBlocks($img, 0, blockSize, 0);
						spiral($img, true);
						break;
					default:
						setBlocks($img, 1, 0, 0);
						dirAnimate($img, effect);					
				}
			}
			
			//set blocks 
			var setBlocks = function($img, opacity, size, tPos) {
				var tOffset = 0;
				var lOffset = 0;
				if (rotator.centerImg()) {
					tOffset = (areaHeight - $img.height())/2;
					lOffset = (areaWidth - $img.width())/2;
				}
				var imgSrc = $img.attr("src");
				for (var i = 0; i < numRows; i++) {							
					for (var j = 0; j < numCols; j++) {
						var tVal = ((-i * blockSize) + tOffset);
						var lVal = ((-j * blockSize) + lOffset);
						$blockArr[i][j].css({background:bgColor + " url('"+ imgSrc +"') no-repeat", backgroundPosition:lVal + "px " + tVal + "px", opacity:opacity, top:(i * blockSize) + tPos, left:(j * blockSize), width:size, height:size, "z-index":3});
					}					
				}
			}
			
			//diagonal effect
			var diagAnimate = function($img, props, rev) {
				var $array = new Array(total);
				var start, end, incr, lastId;
				var diagSpan = (numRows - 1) + (numCols - 1);
				if (rev) {				
					start = diagSpan;
					end = -1;
					incr = -1;
					lastId = $blocks.data("tlId");
				}
				else {
					start = 0;
					end = diagSpan + 1;
					incr = 1;
					lastId = $blocks.data("brId");
				}
				
				var count = 0;
				while (start != end) {
					i = Math.min(numRows - 1, start);
					while(i >= 0) {			
						j = Math.abs(i - start);
						if (j >= numCols) {
							break;
						}
						$array[count++] = $blockArr[i][j];
						i--;
					}
					start+=incr;	
				}
				
				count = 0;
				intervalId = setInterval(
					function() {
						$array[count++].animate(props, duration, "",
								function() {
									if ($(this).attr("id") == lastId) {
										rotator.setComplete($img);
									}
								});							
						if (count == total) {
							clearInterval(intervalId);
						}			
					}, delay);				
			}

			//vertical zig zag effect
			var vertZigZag = function($img, effect) {
				var fwd = true;
				var i = 0, j, incr, lastId;
				if (effect == EFFECTS["block.left.zz"]) {
					lastId = (numCols%2 == 0) ? $blocks.data("trId") : $blocks.data("brId");
					j = 0;
					incr = 1;
				}
				else {
					lastId = (numCols%2 == 0) ? $blocks.data("tlId") : $blocks.data("blId");
					j = numCols - 1;
					incr = -1;
				}
				
				intervalId = setInterval(
					function() {
						$blockArr[i][j].animate({opacity:1}, duration, "",
								function() {
									if ($(this).attr("id") == lastId) {
										rotator.setComplete($img);
									}});
						
						if ($blockArr[i][j].attr("id") == lastId) {
							clearInterval(intervalId);
						}
						
						(fwd ? i++ : i--);
						if (i == numRows || i < 0) {
							fwd = !fwd;
							i = (fwd ? 0 : numRows - 1);
							j+=incr;
						}						
					}, delay);
			}
			
			//horizontal zig zag effect
			var horzZigZag = function($img, effect) {
				var fwd = true;
				var i, j = 0, incr, lastId;
				if (effect == EFFECTS["block.top.zz"]) {
					lastId = (numRows%2 == 0) ? $blocks.data("blId") : $blocks.data("brId");
					i = 0;
					incr = 1;
				}
				else {
					lastId = (numRows%2 == 0) ? $blocks.data("tlId") : $blocks.data("trId");
					i = numRows - 1;
					incr = -1;
				}
				
				intervalId = setInterval(
					function() {
						$blockArr[i][j].animate({opacity:1}, duration, "",
								function() {
									if ($(this).attr("id") == lastId) {
										rotator.setComplete($img);
									}});
						
						if ($blockArr[i][j].attr("id") == lastId) {
							clearInterval(intervalId);
						}
						
						(fwd ? j++ : j--);
						if (j == numCols || j < 0) {
							fwd = !fwd;
							j = (fwd ? 0 : numCols - 1);
							i+=incr;
						}						
					}, delay);
			}
			
			//vertical direction effect
			var dirAnimate = function($img, effect) {
				var $array = new Array(total);
				var lastId;
				var count = 0;
				switch (effect) {
					case EFFECTS["block.left"]:
						lastId = $blocks.data("brId");
						for (var j = 0; j < numCols; j++) {
							for (var i = 0; i < numRows; i++) {
								$array[count++] = $blockArr[i][j];			
							}
						}
						break;
					case EFFECTS["block.right"]:
						lastId = $blocks.data("blId");
						for (var j = numCols - 1; j >= 0; j--) {
							for (var i = 0; i < numRows; i++) {
								$array[count++] = $blockArr[i][j];			
							}
						}					
						break;
					case EFFECTS["block.top"]:
						lastId = $blocks.data("brId");
						for (var i = 0; i < numRows; i++) {
							for (var j = 0; j < numCols; j++) {
								$array[count++] = $blockArr[i][j];			
							}
						}					
						break;
					default:
						lastId = $blocks.data("trId");
						for (var i = numRows - 1; i >= 0; i--) {
							for (var j = 0; j < numCols; j++) {
								$array[count++] = $blockArr[i][j];			
							}
						}
				}
				count = 0;
				intervalId = setInterval(
					function() {
						$array[count++].animate({width:blockSize, height:blockSize}, duration, "",
								function() {
									if ($(this).attr("id") == lastId) {
										rotator.setComplete($img);
									}
								});	
						if (count == total) {
							clearInterval(intervalId);	
						}
					}, delay);
			}
			
			//random block effect
			var randomAnimate = function($img) {
				shuffleArray($arr);
				var i = 0;
				count = 0;
				intervalId = setInterval(
					function() {
						$arr[i].animate({top:$arr[i].data("top"), width:blockSize, height:blockSize, opacity:1}, duration, "",
								function() {
									if (++count == total) {
										rotator.setComplete($img);
									}
								});	
						i++;
						if (i == total) {
							clearInterval(intervalId);
						}
					}, delay);
			}
			
			//spiral effect
			var spiral = function($img, spiralOut) {			
				var i = 0, j = 0;
				var rowCount = numRows - 1;
				var colCount = numCols - 1;
				var dir = 0;
				var limit = colCount;
				var $array = new Array();
				while (rowCount >= 0 && colCount >=0) {
					var count = 0; 
					while(true) { 
						$array[$array.length] = $blockArr[i][j];
						if ((++count) > limit) {
							break;
						}
						switch(dir) {
							case 0:
								j++;
								break;
							case 1:
								i++;
								break;
							case 2:
								j--;
								break;
							case 3:
								i--;
						}
   					} 
					switch(dir) {
						case 0:
							dir = 1;
							limit = (--rowCount);
							i++;
							break;
						case 1:
							dir = 2;
							limit = (--colCount);
							j--;
							break;
						case 2:
							dir = 3;
							limit = (--rowCount);
							i--;
							break;
						case 3:
							dir = 0;
							limit = (--colCount);
							j++;
					}
				}
				if ($array.length > 0) {
					if (spiralOut) {
						$array.reverse();
					}
					var end = $array.length - 1;
					var lastId = $array[end].attr("id");
					var k = 0;				
					intervalId = setInterval(
						function() {
							$array[k].animate({opacity:1}, duration, "",
								function() {
									if ($(this).attr("id") == lastId) {
										rotator.setComplete($img);
									}
								});						
							if (k == end) {
								clearInterval(intervalId);	
							}	
							k++;
						}, delay);					
				}
			}
			
			init();
		}
		
		//class Rotator
		function Rotator($obj, opts) {
			//set options
			var screenWidth =  	getPosNumber(opts.width, 825);
			var screenHeight = 	getPosNumber(opts.height, 300);
			var margin = 		getNonNegNumber(opts.button_margin, 4);
			var globalEffect = 	opts.transition.toLowerCase();	
			var duration =   	getPosNumber(opts.transition_speed, DURATION);
			var globalDelay = 	getPosNumber(opts.delay, DEFAULT_DELAY);
			var rotate = 		opts.auto_start;	
			var cpPos =			opts.cpanel_position.toLowerCase();
			var cpAlign = 		opts.cpanel_align.toUpperCase();
			var buttonWidth =  	getPosNumber(opts.button_width, 24);
			var buttonHeight =	getPosNumber(opts.button_height, 24);
			var displayThumbs = opts.display_thumbs;
			var displayDBtns = 	opts.display_dbuttons;
			var displayPlayBtn =opts.display_playbutton;
			var cpMouseover = 	opts.cpanel_mouseover;
			var textMousover = 	opts.text_mouseover;
			var pauseMouseover =opts.mouseover_pause;
			var tooltipType = 	opts.tooltip_type.toLowerCase();
			var textEffect = 	opts.text_effect.toLowerCase();
			var textSync =		opts.text_sync;
			var playOnce =		opts.play_once;
			var autoCenter =	opts.auto_center;
			
			var numItems;
			var currIndex;
			var prevIndex;
			var delay;		
			var vStripes;
			var hStripes;
			var blocks;		
			var timerId = null;
			
			var $rotator = $(".wt-rotator", $obj);
			var $screen = $rotator.find("div.screen");
			var $mainLink;				
			var $textBox;
			var $preloader;			
			var $cPanel 	= $rotator.find("div.c-panel");
			var $thumbPanel = $cPanel.find("div.thumbnails");
			var $thumbs 	= $thumbPanel.find(">ul:first>li");
			var $buttonPanel= $cPanel.find("div.buttons");	
			var $playBtn 	= $buttonPanel.find("div.play-btn");
			var $prevBtn 	= $buttonPanel.find("div.prev-btn");
			var $nextBtn 	= $buttonPanel.find("div.next-btn");
			var $timer;
			var $tooltip = $("<div id='rotator-tooltip'></div>");
			var $items;
			var $innerText;
			this.$el = $obj;
			
			//init rotator
			this.init = function() {
				currIndex = 0;
				prevIndex = -1;
				numItems = $thumbs.size();	
				$items = new Array(numItems);
				
				//init components
				initScreen();
				initItems();
				initButtons();
				initCPanel();
				initTimerBar();
				
				$rotator.css({width:screenWidth, height:screenHeight + (cpPos == OUTSIDE ? $cPanel.outerHeight(): 0)});
				
				if (textMousover) {
					$rotator.hover(displayText, hideText);
				}
				else {
					$rotator.bind(UPDATE_TEXT, updateText);
				}
				
				//init transition components
				var bgColor = $screen.css("background-color");
				vStripes =  new VertStripes(this, screenWidth, screenHeight, getPosNumber(opts.vert_size, 50), bgColor, duration, getPosNumber(opts.vstripe_delay, 75));
				hStripes =  new HorzStripes(this, screenWidth, screenHeight, getPosNumber(opts.horz_size, 50), bgColor, duration, getPosNumber(opts.hstripe_delay, 75));				
				blocks = 	new Blocks(this, screenWidth, screenHeight, getPosNumber(opts.block_size, 75), bgColor, duration, getPosNumber(opts.block_delay, 25));	
				
				//init image loading
				loadImg(0);
				
				//display initial image
				loadContent(currIndex);
			}
			
			//set complete
			this.setComplete = function($img) {
				showContent($img);
			}
			
			//add to screen
			this.addToScreen = function(content) {
				$mainLink.append(content);
			}
			
			//get center image
			this.centerImg = function() {
				return autoCenter;
			}
			
			//init screen
			var initScreen = function() {
				var content =  "<a href='#'></a>\
								<div class='desc'></div>\
								<div class='preloader'></div>\
								<div id='timer'></div>";
				$screen.empty().append(content);
				$mainLink 	= $screen.find(">a:first");				
			 	$textBox 	= $screen.find("div.desc");
			 	$preloader 	= $screen.find("div.preloader");
				$screen.css({width:screenWidth, height:screenHeight});
				
				$textBox.append("<div class='inner-bg'></div><div class='inner-text'></div>");
				$innerText = $textBox.find("div.inner-text");
			}
			
			//init control panel
			var initCPanel = function() {	
				if (displayThumbs || displayDBtns || displayPlayBtn) {
					$thumbPanel.css("height", $thumbs.outerHeight());
					var maxWidth = screenWidth - ($buttonPanel.width() + margin);
					if ($thumbPanel.width() > maxWidth) {
						$thumbPanel.width(maxWidth);
					}
					if (cpPos == INSIDE) {
						$cPanel.css({"margin-top":margin, "margin-right":0, "margin-bottom":margin, "margin-left":margin});
						var cpWidth = $cPanel.outerWidth(true);
						var cpHeight = $cPanel.outerHeight(true);
						switch (cpAlign) {
							case TOP_LEFT:
								setCPanel(0, 0, -cpHeight, "left");			
								break;
							case TOP_CENTER:
								setCPanel(0, Math.round((screenWidth - cpWidth)/2), -cpHeight, "right");
								break;
							case TOP_RIGHT:
								setCPanel(0, (screenWidth - cpWidth), -cpHeight, "right");
								break;
							case BOTTOM_LEFT:
								setCPanel((screenHeight - cpHeight), 0, screenHeight, "left");
								break;
							case BOTTOM_CENTER:
								setCPanel((screenHeight - cpHeight), Math.round((screenWidth - cpWidth)/2), screenHeight, "right");
								break;
							default:
								setCPanel((screenHeight - cpHeight), (screenWidth - cpWidth), screenHeight, "right");
						}
						
						if (cpMouseover) {
							$rotator.hover(displayCPanel, hideCPanel);
						}
					}
					else {
						if ($rotator.outerWidth() - $rotator.width() > 0) {
							$cPanel.css({"border-left":"none", "border-right":"none"});
						}
						$cPanel.css({"padding-top":margin, "padding-bottom":margin}).addClass("cp-bg");
						var cpWidth = $cPanel.outerWidth();
						switch (cpAlign) {
							case TOP_LEFT:
								setOutsideCPanel($cPanel.outerHeight(), 0, margin, "left");
								break;
							case TOP_CENTER:
								setOutsideCPanel($cPanel.outerHeight(), 0, Math.round((screenWidth - cpWidth)/2), "right");
								break;
							case TOP_RIGHT:
								setOutsideCPanel($cPanel.outerHeight(), 0, screenWidth - cpWidth, "right");
								break;
							case BOTTOM_LEFT:
								setOutsideCPanel(0, screenHeight, margin, "left");
								break;
							case BOTTOM_CENTER:
								setOutsideCPanel(0, screenHeight, Math.round((screenWidth - cpWidth)/2), "right");
								break;
							default:
								setOutsideCPanel(0, screenHeight, screenWidth - cpWidth, "right");					
						}
					}
					$cPanel.css("visibility", "visible");
				}
			}
			
			//set control panel attributes
			var setCPanel = function(yPos, xPos, offset, align) {
				$cPanel.data({offset:offset, pos:yPos}).css({top:(cpMouseover ? offset : yPos), left:xPos});
				$thumbPanel.css("float", align);
				$buttonPanel.css("float", align);	   
			}
			
			//set outside control panel attributes
			var setOutsideCPanel = function(screenTop, cpTop, leftPad, align) {
				$screen.css("top",screenTop);
				$cPanel.css(screenTop == 0 ? "border-bottom": "border-top", "none");
				$cPanel.css({top:cpTop, "padding-left":leftPad, "padding-right":screenWidth - (leftPad + $cPanel.outerWidth())});
				$thumbPanel.css("float", align);
				$buttonPanel.css("float", align);	   
			}
			
			//init buttons
			var initButtons = function() {
				var props = {"margin-right":margin, width:buttonWidth, height:buttonHeight};
				//config directional buttons
				if (displayDBtns) {					
					$prevBtn.css(props).click(prevImg).mouseover(buttonOver).mouseout(buttonOut).mousedown(preventDefault);
					$nextBtn.css(props).click(nextImg).mouseover(buttonOver).mouseout(buttonOut).mousedown(preventDefault);					
				}
				else {
					$prevBtn.hide();
					$nextBtn.hide();
				}
				
				//config play button
				if (displayPlayBtn) {
					if (rotate) {
						$playBtn.addClass("pause");
					}			
					$playBtn.css(props).click(togglePlay).mouseover(buttonOver).mouseout(buttonOut).mousedown(preventDefault);
				}
				else {
					$playBtn.hide();
				}
				
				if (pauseMouseover) {
					$rotator.hover(pause, play);
				}
			}			
			
			//init timer bar
			var initTimerBar = function() {
				$timer = $screen.find("#timer").data("pct", 1);
				if (opts.display_timer) {
					var align = opts.timer_align.toLowerCase();
					$timer.css("visibility", "visible");
					$timer.css(align == "bottom" ? "bottom" : "top", 0);
				}
				else {
					$timer.hide();
				}
			}
			
			//init items
			var initItems = function() {
				var padding = $innerText.outerHeight() - $innerText.height();
				$thumbs.each(
					function(n) {
						var $imgLink = $(this).find(">a:first");
						$(this).data({imgurl:$imgLink.attr("href"), caption:$imgLink.attr("title"), tturl:$imgLink.find(">img:first").attr("src"),
							   		  effect:EFFECTS[$(this).attr("effect")] != undefined ? EFFECTS[$(this).attr("effect")] : EFFECTS[globalEffect],
							   		  delay:getPosNumber($(this).attr("delay"), globalDelay)});
						initTextData($(this), padding);				
						$items[n] = $(this);
						
						if (opts.display_numbers) {
							$(this).append(n+1);
						}
					}
				);
				$innerText.css({width:"auto", height:"auto"}).html("");
				$textBox.css("visibility", "visible");

				if (opts.shuffle) {
					shuffleItems();
				}
				
				if (displayThumbs) { 
					$thumbPanel.click(selectItem);
					$thumbs.css({width:buttonWidth, height:buttonHeight, "line-height":buttonHeight + "px", "margin-right":margin})
						   .mouseover(itemOver).mouseout(itemOut).mousedown(preventDefault);
					if (tooltipType == "text" || tooltipType == "image") {
						initTooltip();
					}
				}
				else {
					$thumbs.hide();
				}
			}			
			
			//init text data
			var initTextData = function($item, padding) {				
				var $p = $item.find(">div:hidden");				
				var textWidth =  getPosNumber(parseInt($p.css("width")) - padding, 300);				
				var textHeight = getPosNumber(parseInt($p.css("height")) - padding, 0);
				$innerText.width(textWidth).html($p.html());
				if (textHeight < $innerText.height()) {
					textHeight = $innerText.height();
				}
				$item.data("textbox", {x:$p.css("left"), y:$p.css("top"), w:textWidth + padding, h:textHeight + padding, color:$p.css("color"), bgcolor:$p.css("background-color")});
			}
			
			//init tool tip
			var initTooltip = function() {
				$("body").append($tooltip);
				
				var content, upClass, downClass;
				if (tooltipType == "text") {
					content = "<div class='tt-txt'></div>";
					upClass = "txt-up";
					downClass = "txt-down";
					$thumbs.mouseover(showTooltip).mouseout(hideTooltip).bind("mousemove", moveTooltip);
				}
				else if (tooltipType == "image") {
					content = "<img class='tt-img'/>";
					upClass = "img-up";
					downClass = "img-down";
					$thumbs.mouseover(showImgTooltip).mouseout(hideTooltip).bind("mousemove", moveImgTooltip);
				}
				
				$tooltip.append(content);
				switch (cpAlign) {
					case TOP_LEFT: case TOP_CENTER: case TOP_RIGHT:
						$tooltip.data("bottom",true).addClass(downClass);
						break;
					default:
						$tooltip.data("bottom",false).addClass(upClass);
				}
				
				if (jQuery.browser.msie && parseInt(jQuery.browser.version) <= 6) {
					$tooltip.css("background-image", "none").find(":only-child").css("margin",0);
				}
			}
			
			//show image tooltip
			var showImgTooltip = function(e) {
				var tturl = $items[$(this).index()].data("tturl");
				if (tturl != undefined) {
					var $ttImg = $tooltip.find(">img.tt-img");
					$ttImg.attr("src", tturl);
					if ($ttImg[0].complete || $ttImg[0].readyState == "complete") {
						var yOffset = $tooltip.data("bottom") ? 0 : -$tooltip.outerHeight(true);
						$tooltip.css({top:e.pageY + yOffset, left:e.pageX - $tooltip.outerWidth()/2}).stop(true, true).delay(TOOLTIP_DELAY).fadeIn(300);
					}
				}
			}
			
			//move image tooltip
			var moveImgTooltip = function(e) {
				var yOffset = $tooltip.data("bottom") ? 0 : -$tooltip.outerHeight(true);
				$tooltip.css({top:e.pageY + yOffset, left:e.pageX - $tooltip.outerWidth()/2});
			}
			
			//show tooltip
			var showTooltip = function(e) {
				var caption = $items[$(this).index()].data("caption");
				if (caption != "") {					
					$tooltip.find(">div.tt-txt").html(caption);
					var yOffset = $tooltip.data("bottom") ? 0 : -$tooltip.outerHeight(true);
					$tooltip.css({top:e.pageY + yOffset, left:e.pageX}).stop(true, true).delay(TOOLTIP_DELAY).fadeIn(300);
				}
			}
			
			//tooltip move
			var moveTooltip = function(e) {
				var yOffset = $tooltip.data("bottom") ? 0 : -$tooltip.outerHeight(true);
				$tooltip.css({top:e.pageY + yOffset, left:e.pageX});
			}
			
			//hide tooltip
			var hideTooltip = function() {
				$tooltip.stop(true, true).fadeOut(0);
			}
			
			//display control panel
			var displayCPanel = function() {
				$cPanel.stop(true).animate({top:$cPanel.data("pos"), opacity:1}, ANIMATE_SPEED);
			}
			
			//hide control panel
			var hideCPanel = function() {
				$cPanel.stop(true).animate({top:$cPanel.data("offset"), opacity:0}, ANIMATE_SPEED);
			}
			
			//select list item
			var selectItem = function(e) {
				if (e.target.nodeName == "LI") {
					var i = $(e.target).index();	
					if ( i >= 0 && i != currIndex) {					
						resetTimer();
						prevIndex = currIndex;
						currIndex = i;
						loadContent(currIndex);
						hideTooltip();
					}
				}
				return false;
			}
			
			//on item mouseover
			var itemOver = function() {
				$(this).addClass("thumb-over");
			}
			
			//on item mouseout
			var itemOut = function() {
				$(this).removeClass("thumb-over");
			}
			
			//go to previous image
			var prevImg = function() {
				resetTimer();
				prevIndex = currIndex;
				currIndex = (currIndex > 0) ? (currIndex - 1) : (numItems - 1);
				loadContent(currIndex);	
				return false;
			}
			
			//go to next image
			var nextImg = function() {
				resetTimer();
				prevIndex = currIndex;
				currIndex = (currIndex < numItems - 1) ? (currIndex + 1) : 0;
				loadContent(currIndex);
				return false;
			}
			
			//play/pause
			var togglePlay = function() {
				rotate = !rotate;
				$(this).toggleClass("pause", rotate);					
				rotate ? startTimer() : pauseTimer();
				return false;
			}
			
			//play
			var play = function() {
				rotate = true;
				$playBtn.toggleClass("pause", rotate);
				startTimer();
			}

			//pause
			var pause = function() {
				rotate = false;
				$playBtn.toggleClass("pause", rotate);
				pauseTimer();
			}
			
			//pause on last item
			var pauseLast = function(i) {
				if (i == numItems - 1) {
					rotate = false;
					$playBtn.toggleClass("pause", rotate);
				}
			}
					
			//on button over
			var buttonOver = function() {
				$(this).addClass("button-over");
			}
			
			//on button out
			var buttonOut = function() {
				$(this).removeClass("button-over");
			}
			
			//update text box
			var updateText = function(e) {
				if (!$textBox.data("visible")) {
					$textBox.data("visible", true);
					var text = $items[currIndex].find(">div:first").html();
					if (text && text.length > 0) {			
						var data = $items[currIndex].data("textbox");
						$innerText.css("color",data.color);
						$textBox.find(".inner-bg").css("background-color",data.bgcolor);
						switch(TEXT_EFFECTS[textEffect]) {
							case TEXT_EFFECTS["fade"]:
								fadeInText(text, data);
								break;
							case TEXT_EFFECTS["down"]:
								expandText(text, {display:"block", top:data.y, left:data.x, width:data.w, height:0}, {height:data.h});
								break;
							case TEXT_EFFECTS["right"]:
								expandText(text, {display:"block", top:data.y, left:data.x, width:0, height:data.h}, {width:data.w});
								break;
							default:
								showText(text, data);
						}
					}					
				}
			}
			
			//reset text box
			var resetText = function() {
				$textBox.data("visible", false).stop(true, true);
				switch(TEXT_EFFECTS[textEffect]) {
					case TEXT_EFFECTS["fade"]:
						if (jQuery.browser.msie) {
							$innerText.css("opacity",0);
						}
						$textBox.fadeOut(ANIMATE_SPEED, function() { $(this).css("display", "none"); });
						break;
					case TEXT_EFFECTS["down"]:
						$innerText.html("");
						$textBox.animate({height:0}, ANIMATE_SPEED);
						break;
					case TEXT_EFFECTS["right"]:
						$innerText.html("");
						$textBox.animate({width:0}, ANIMATE_SPEED);
						break;
					default:
						$textBox.css("display", "none");
				}
			}
			
			//expand text effect
			var expandText = function(text, props1, props2) {
				$innerText.html("");
				$textBox.stop(true).css(props1).animate(props2, ANIMATE_SPEED, 
					function () {  
						$innerText.html(text);
					});  
			}
			
			//fade in text effect
			var fadeInText = function(text, data) {
				$innerText.css("opacity",1).html(text);
				$textBox.css({top:data.y, left:data.x, width:data.w, height:data.h})
						.stop(true, true).fadeIn(ANIMATE_SPEED, function() {
																	if (jQuery.browser.msie) {
																		$innerText[0].style.removeAttribute('filter'); 
																	}
																});  
			}
			
			//show text effect
			var showText = function(text, data) {
				$textBox.stop(true).css({display:"block", top:data.y, left:data.x, width:data.w, height:data.h});  
				$innerText.html(text);
			}
			
			//display text panel on mouseover
			var displayText = function() {
				$rotator.unbind(UPDATE_TEXT).bind(UPDATE_TEXT, updateText).trigger(UPDATE_TEXT);
			}

			//hide text panel on mouseovers
			var hideText = function() {
				$rotator.unbind(UPDATE_TEXT);
				resetText();
			}
			
			//load current content
			var loadContent = function(i) {
				if (playOnce) {
					pauseLast(i);
				}
				
				//select thumb
				$thumbs.filter(".curr-thumb").removeClass("curr-thumb");				
				$($thumbs.get(i)).addClass("curr-thumb");
				
				//set delay
				delay =	$items[i].data("delay");
				
				//reset text
				resetText();
				if (!textSync) {
					$rotator.trigger(UPDATE_TEXT);
				}
				
				//set link
				var $currLink = $items[i].find(">a:nth-child(2)");
				var href = $currLink.attr("href");
				if (href) {					
					$mainLink.unbind("click").css("cursor", "pointer").attr({href:href, target:$currLink.attr("target")});
				}
				else {
					$mainLink.click(preventDefault).css("cursor", "default");
				}
				
				//load image
				if ($items[i].data("img")) {
					$preloader.hide();	
					displayContent($items[i].data("img"));
				}	
				else {	
					//load new image
					var $img = $("<img class='main-img'/>");
					$img.attr("src", $items[i].data("imgurl"));								
					if ($img[0].complete || $img[0].readyState == "complete") {		
						$preloader.hide();
						storeImg($items[i], $img);
						displayContent($img);
					}
					else {
						$preloader.show();
						$img.load(
							function() {
								$preloader.hide();
								storeImg($items[i], $(this));
								displayContent($(this));
							}
						).error(
							function() {
								alert("Error loading image");
							}
						);						
					}
				}	    
			}
			
			//display content
			var displayContent = function($img) {
				//clear
				vStripes.clear();
				hStripes.clear();
				blocks.clear();
				setPrevious();
				
				//get effect number
				var effect = $items[currIndex].data("effect");	
				if (effect == EFFECTS["none"]) {
					showContent($img);
					return;
				}
				
				if (effect == EFFECTS["random"]) {
					effect = Math.floor(Math.random() * (EFFECTS.length - 2));
				}
				
				if (effect == EFFECTS["fade"]) {
					fadeInContent($img);
				}
				else if (effect < EFFECTS["vert.tl"]) {
					blocks.displayContent($img, effect);
				}
				else if (effect < EFFECTS["horz.tl"]) {
					vStripes.displayContent($img, effect);
				}
				else {
					hStripes.displayContent($img, effect);					
				}
			}
			
			//set previous
			var setPrevious = function() {
				if (prevIndex >= 0) {
					var currSrc = $("img#curr-img").attr("src");
					var prevSrc = $items[prevIndex].data("imgurl");
					if (currSrc != prevSrc) {
						$("img.main-img", $mainLink).removeAttr("id").hide();
						var $img = $("img.main-img", $mainLink).filter(function() { return $(this).attr("src") == prevSrc; });
						$($img.get(0)).show();
					}
				}
			}
			
			//display content (no effect)
			var showContent = function($img) {
				if (textSync) {
					$rotator.trigger(UPDATE_TEXT);
				}
				$("img.main-img", $mainLink).removeAttr("id").hide();
				$img.attr("id", "curr-img").show();
				startTimer();
			}
			
			//display content (fade effect)
			var fadeInContent = function($img) {
				$("img#curr-img", $mainLink).stop(true, true);
				$("img.main-img", $mainLink).removeAttr("id").css("z-index", 0);
				$img.attr("id", "curr-img").css("z-index", 1).stop(true, true).fadeIn(duration, 
					function() {
						$("img.main-img:not('#curr-img')", $mainLink).hide();
						if (textSync) {
							$rotator.trigger(UPDATE_TEXT);
						}
						startTimer();
					}
				);	
			}
			
			//load image
			var loadImg = function(loadIndex) {
				var $item = $items[loadIndex];
				var $img = $("<img class='main-img'/>");
				$img.attr("src", $item.data("imgurl"));
				$img.load(function() {
							if (!$item.data("img")) {
								storeImg($item, $(this));
							}
							loadIndex++
							if (loadIndex < numItems) {
								loadImg(loadIndex);
							}
						})
					.error(function() {
							//error loading image, continue next
							loadIndex++
							if (loadIndex < numItems) {
								loadImg(loadIndex);
							}
						});
			}
			
			//process & store image
			var storeImg = function($item, $img) {
				$mainLink.append($img);
				if (autoCenter) {
					var tDiff = (screenHeight - $img.height())/2;
					var lDiff = (screenWidth  - $img.width())/2
					var top = 0, left = 0, vPad = 0, hPad = 0;
					if (tDiff > 0) {
						vPad = tDiff;
					}
					else if (tDiff < 0) {
						top = tDiff;
					}				
					if (lDiff > 0) {
						hPad = lDiff;
					}
					else if (lDiff < 0) {
						left = lDiff;
					}
					$img.css({top:top, left:left, "padding-top":vPad, "padding-bottom":vPad, "padding-left":hPad, "padding-right":hPad});
				}
				$item.data("img", $img);
			}
			
			//start timer
			var startTimer = function() {
				if (rotate && timerId == null) {
					var duration = Math.round($timer.data("pct") * delay);
					$timer.animate({width:(screenWidth+1)}, duration);
					timerId = setTimeout(nextImg, duration);					
				}
			}
			
			//reset timer
			var resetTimer = function() {
				clearTimeout(timerId);
				timerId = null;
				$timer.stop(true).width(0).data("pct", 1);
			}
			
			//pause timer
			var pauseTimer = function() {
				clearTimeout(timerId);
				timerId = null;
				var pct = 1 - ($timer.width()/(screenWidth+1));
				$timer.stop(true).data("pct", pct);
			}
			
			//shuffle items
			var shuffleItems = function() {			
				for (var i = 0; i < $items.length; i++) {
					var ri = Math.floor(Math.random() * $items.length);
					var temp = $items[i];	
					$items[i] = $items[ri];
					$items[ri] = temp;				
				}
			}
			
			//prevent default behavior
			var preventDefault = function() {
				return false;
			}
		}		
			
		//get positive number
		var getPosNumber = function(val, defaultVal) {
			if (!isNaN(val) && val > 0) {
				return val;
			}
			return defaultVal;
		}
		
		//get nonnegative number
		var getNonNegNumber = function(val, defaultVal) {
			if (!isNaN(val) && val >= 0) {
				return val;
			}
			return defaultVal;
		}
		
		//shuffle array
		var shuffleArray = function(arr) {
			var total =  arr.length;
			for (var i = 0; i < total; i++) {
				var ri = Math.floor(Math.random() * total);
				var temp = arr[i];
				arr[i] = arr[ri];
				arr[ri] = temp;	
			}	
		}
		
		var defaults = { 
			width:825,
			height:300,
			button_width:24,
			button_height:24,
			button_margin:4,			
			auto_start:true,
			delay:DEFAULT_DELAY,
			transition:"fade",
			transition_speed:DURATION,
			cpanel_position:INSIDE,
			cpanel_align:BOTTOM_RIGHT,
			timer_align:"top",
			display_thumbs:true,
			display_dbuttons:true,
			display_playbutton:true,
			display_imgtooltip:true,
			display_numbers:true,
			display_timer:true,
			mouseover_pause:false,
			cpanel_mouseover:false,
			text_mouseover:false,
			text_effect:"fade",
			text_sync:true,
			tooltip_type:"text",
			shuffle:false,
			play_once:false,
			auto_center:false,
			block_size:75,
			vert_size:50,
			horz_size:50,
			block_delay:25,
			vstripe_delay:75,
			hstripe_delay:75
		};
		
		var opts = $.extend({}, defaults, params);		
		return this.each(
			function() {
				var rotator = new Rotator($(this), opts);
				rotator.init();
			}
		);
	}
})(jQuery);