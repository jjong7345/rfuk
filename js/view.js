// JavaScript Document
function HeaderClass(_model, _controller) {
	var _this = this;
	this.model = _model;
	this.controller = _controller;
	
	this.update = function(_e) {
		switch (_e) {
			case "onAddressChange":
				switch(_this.model.getAddress()) {
					case "about":
						break;
					case "work":
						break;
					case "voice":
						 break;
				}
				break;
			case "onWindowResize":
				var h = $("#header").height();
				$("#logolink").find("img").css( {"height":h} );
				break;
		}
	}
}


/*MENU******************************************************************************************************************************************************************/

function MenuClass(_model, _controller) {
	
	var _this = this;
	this.model = _model;
	this.controller = _controller;
	
	var mainMenu; //Array
	var practiceSubMenu; //Array
	var edgeSubMenu; //Array
	var aboutSubMenu; //Array
	var currMain; //String
	var currSub; //String
	var checkElement; //Object
	var checkSubElement; //Object
	var isPracticeActive = true; //Boonlean
	var isEdgeActive = true; //Boonlean
	var isAboutActive = true; //Boonlean
  
	 mainMenu = [$('#practice_main'), $('#egde_main'), $('#about_main')];
  practiceSubMenu = [ $('#practice_sub div:nth-child(1)'), $('#practice_sub div:nth-child(2)'), $('#practice_sub div:nth-child(3)'), $('#practice_sub div:nth-child(4)')];
  edgeSubMenu = [ $('#edge_sub div:nth-child(1)'), $('#edge_sub div:nth-child(2)'), $('#edge_sub div:nth-child(3)'), $('#edge_sub div:nth-child(4)'), $('#edge_sub div:nth-child(5)')];
  aboutSubMenu = [ $('#about_sub div:nth-child(1)'), $('#about_sub div:nth-child(2)'), $('#about_sub div:nth-child(3)'), $('#about_sub div:nth-child(4)'), $('#about_sub div:nth-child(5)')];
	
	var practice_rollout = new Image();
	practice_rollout.src = "images/nav/practice_s1.jpg";
	var practice_rollover = new Image();
	practice_rollover.src = "images/nav/practice_rollover_s1.jpg";
	
	var edge_rollout = new Image();
	edge_rollout.src = "images/nav/edge_s1.jpg";
	var edge_rollover = new Image();
	edge_rollover.src = "images/nav/edge_rollover_s1.jpg";
	
	var about_rollout = new Image();
	about_rollout.src = "images/nav/about_s1.jpg";
	var about_rollover = new Image();
	about_rollover.src = "images/nav/about_rollover_s1.jpg";
	
	$('#practice_main').bind("mouseenter", function() {
		  if (isPracticeActive)  $('#practice_main').find("img").attr({ src:  practice_rollover.src});
	  }
	);
	$('#practice_main').bind("mouseleave", function() {
		  if (isPracticeActive) $('#practice_main').find("img").attr({ src:  practice_rollout.src});
	  }
	);
	$('#edge_main').bind("mouseenter",function() {
		 if (isEdgeActive) $('#edge_main').find("img").attr({ src:  edge_rollover.src});
	  }
	);
	$('#edge_main').bind("mouseleave",function() {
		if (isEdgeActive) $('#edge_main').find("img").attr({ src:  edge_rollout.src});
	  }
	);
	$('#about_main').bind("mouseenter",function() {
		 if (isAboutActive) $('#about_main').find("img").attr({ src:  about_rollover.src});
	  }
	);
	$('#about_main').bind("mouseleave",function() {
		 if (isAboutActive) $('#about_main').find("img").attr({ src:  about_rollout.src});
	  }
	);
	
	for (var i=0; i<practiceSubMenu.length; i++) {
		practiceSubMenu[i].addClass("subMenuActive");
		practiceSubMenu[i].bind('click',{target: practiceSubMenu[i]},
		function(e) {
			_this.onSubMenuClick(e.data.target);
		});	
	}
	for (var i=0; i<edgeSubMenu.length; i++) {
		edgeSubMenu[i].addClass("subMenuActive");
		edgeSubMenu[i].bind('click',{target: edgeSubMenu[i]},
		function(e) {
			_this.onSubMenuClick(e.data.target);
		});	
	}
	for (var i=0; i<aboutSubMenu.length; i++) {
		aboutSubMenu[i].addClass("subMenuActive");
		aboutSubMenu[i].bind('click',{target: aboutSubMenu[i]},
		function(e) {
			_this.onSubMenuClick(e.data.target);
		});	
	}
	
	$('#menu .menu-list2').hide();
	//$('#menu ul:first').show();
	
	$('#menu .menu-list1 a').bind('click',
	function() {
		_this.onMenuClick($(this));
	});
	this.onMenuClick = function(target) {
		checkElement = target;
		switch (checkElement.attr('id')) {
			case 'practice_main':
				App.setAddress("practice/practicehome");
			    break;
			case 'edge_main':
				App.setAddress("edge/edgehome");
			    break;
			case 'about_main':
				App.setAddress("about/abouthome");
				break;
			default:
		}
	}
	this.onSubMenuClick = function(target) {
		switch(target) {
			case practiceSubMenu[0]:
				App.setAddress("practice/health_and_wellness");
				break;
			case practiceSubMenu[1]:
				App.setAddress("practice/technology_innovation");
				break;
			case practiceSubMenu[2]:
				App.setAddress("practice/corporate_and_public_trust");
				break;
			case practiceSubMenu[3]:
				App.setAddress("practice/consumer_connections");
				break;
			case edgeSubMenu[0]:
				App.setAddress("edge/digital");
				break;
			case edgeSubMenu[1]:
				App.setAddress("edge/social");
				break;
			case edgeSubMenu[2]:
				App.setAddress("edge/broadcast");
				break;
			case edgeSubMenu[3]:
				App.setAddress("edge/design");
				break;
			case edgeSubMenu[4]:
				App.setAddress("edge/insights");
				break;
			case aboutSubMenu[0]:
				App.setAddress("about/vision");
				break;
			case aboutSubMenu[1]:
				App.setAddress("about/legacy");
				break;
			case aboutSubMenu[2]:
				App.setAddress("about/leadership");
				break;
			case aboutSubMenu[3]:
				App.setAddress("about/offices");
				break;
			case aboutSubMenu[4]:
				App.setAddress("about/awards");
				break;
			default:
		}
	}
	
	
	this.update = function(_e) {
		var resetSub = function() {
			for (var p=0; p<practiceSubMenu.length; p++) {
				practiceSubMenu[p].removeClass("subMenuDeactive");
				practiceSubMenu[p].addClass("subMenuActive");
			}
			for (var e=0; e<edgeSubMenu.length; e++) {
				edgeSubMenu[e].removeClass("subMenuDeactive");
				edgeSubMenu[e].addClass("subMenuActive");
			}
			for (var a=0; a<aboutSubMenu.length; a++) {
				aboutSubMenu[a].removeClass("subMenuDeactive");
				aboutSubMenu[a].addClass("subMenuActive");
			}
		}
		switch (_e) {
			case "onAddressChange":
				switch (_this.model.getSection()) {
					case 'practice':
						resetSub();
						checkSubElement = $("#practice_sub");
						break;
					case 'edge':
						resetSub();
						checkSubElement = $("#edge_sub");
						break;
					case 'about':
						resetSub();
						checkSubElement = $("#about_sub");
						break;
					case 'home':
						resetSub();
						checkSubElement = null;
						$('#menu .menu-list2:visible').slideUp('normal');
						$('#practice_main').find("img").attr({ src:  practice_rollout.src});
						$('#edge_main').find("img").attr({ src:  edge_rollout.src});
						$('#about_main').find("img").attr({ src:  about_rollout.src});
						isPracticeActive = true;
						isEdgeActive = true;
						isAboutActive = true;
						break;
										
				}
							
				switch (_this.model.getSubSection()) {
					case "health_and_wellness":
						practiceSubMenu[0].removeClass("subMenuActive");
						practiceSubMenu[0].addClass("subMenuDeactive");
						break;
					case "technology_innovation":
						practiceSubMenu[1].removeClass("subMenuActive");
						practiceSubMenu[1].addClass("subMenuDeactive");
						break;
					case "corporate_and_public_trust":
						practiceSubMenu[2].removeClass("subMenuActive");
						practiceSubMenu[2].addClass("subMenuDeactive");
						break;
					case "consumer_connections":
						practiceSubMenu[3].removeClass("subMenuActive");
						practiceSubMenu[3].addClass("subMenuDeactive");
						break;
					case "digital":
						edgeSubMenu[0].removeClass("subMenuActive");
						edgeSubMenu[0].addClass("subMenuDeactive");
						break;
					case "social":
						edgeSubMenu[1].removeClass("subMenuActive");
						edgeSubMenu[1].addClass("subMenuDeactive");
						break;
					case "broadcast":
						edgeSubMenu[2].removeClass("subMenuActive");
						edgeSubMenu[2].addClass("subMenuDeactive");
						break;
					case "design":
						edgeSubMenu[3].removeClass("subMenuActive");
						edgeSubMenu[3].addClass("subMenuDeactive");
						break;
					case "insights":
						edgeSubMenu[4].removeClass("subMenuActive");
						edgeSubMenu[4].addClass("subMenuDeactive");
						break;
					
					case "vision":
						aboutSubMenu[0].removeClass("subMenuActive");
						aboutSubMenu[0].addClass("subMenuDeactive");
						break;
					case "legacy":
						aboutSubMenu[1].removeClass("subMenuActive");
						aboutSubMenu[1].addClass("subMenuDeactive");
						break;
					case "leadership":
						aboutSubMenu[2].removeClass("subMenuActive");
						aboutSubMenu[2].addClass("subMenuDeactive");
						break;
					case "offices":
						aboutSubMenu[3].removeClass("subMenuActive");
						aboutSubMenu[3].addClass("subMenuDeactive");
						break;
					case "awards":
						aboutSubMenu[4].removeClass("subMenuActive");
						aboutSubMenu[4].addClass("subMenuDeactive");
						break;
					default:
				}
				
				try {
					if((checkSubElement.is('.menu-list2')) && (checkSubElement.is(':visible'))) 
					{
						return false;
					}
					if((checkSubElement.is('.menu-list2')) && (!checkSubElement.is(':visible'))) 
					{
						$('#menu .menu-list2:visible').slideUp('normal');
						if ((!$('#practice_sub').is(':visible')) && (!$('#edge_sub').is(':visible')) && (!$('#about_sub').is(':visible'))) {
							checkSubElement.slideDown('normal');
						}
						else {
							setTimeout(function() {
								checkSubElement.slideDown('normal');
							},500);
						}
						//update nav state
						switch (checkSubElement.attr('id')) {
							case 'practice_sub':
								isPracticeActive = false;
								isEdgeActive = true;
								isAboutActive = true;
								$('#practice_main').find("img").attr({ src:  practice_rollover.src});
								$('#edge_main').find("img").attr({ src:  edge_rollout.src});
								$('#about_main').find("img").attr({ src:  about_rollout.src});
								break;
							case 'edge_sub':
								isPracticeActive = true;
								isEdgeActive = false;
								isAboutActive = true;
								$('#edge_main').find("img").attr({ src:  edge_rollover.src});
								$('#practice_main').find("img").attr({ src:  practice_rollout.src});
								$('#about_main').find("img").attr({ src:  about_rollout.src});
								break;
							case 'about_sub':
								isPracticeActive = true;
								isEdgeActive = true;
								isAboutActive = false;
								$('#about_main').find("img").attr({ src:  about_rollover.src});
								$('#edge_main').find("img").attr({ src:  edge_rollout.src});
								$('#practice_main').find("img").attr({ src:  practice_rollout.src});
								break;
							default:
						}
					}
				}
				catch(e){}
				break;
			case "onWindowResize":
				break;
		}
	}
}

/*PRACTICE**********************************************************************************************************************************************************/
function PracticeClass(_model, _controller) {
	var _this = this;
	this.model = _model;
	this.controller = _controller;
	var sections = ["practicehome", "health_and_wellness", "technology_innovation", "corporate_and_public_trust", "consumer_connections" ];
	var xPos;
	
	var touchslider = new App.Touchslider("practiceContentStrip");
	touchslider.init();
	
	this.doSlide = function(/*jQuery*/ elem, /*int*/ x, /*string*/ duration) {
		 elem.css({
			 left: x + 'px',
			 '-webkit-transition-property': 'left',
			 '-webkit-transition-duration': duration,
			 '-webkit-transition-timing-function':'cubic-bezier(0,0,0.25,1)'

		 });
	}
	
	this.update = function(_e) {
		switch (_e) {
			case "onAddressChange":
				switch(_this.model.getSection()) {
					case "practice":
						if (($("#edge").height() > 0) || ($("#about").height() > 0)) {
							$("#practice").delay(400).animate({"height": App.targetOpenHeight() + "px"}, {  duration:400, easing:"easeInOutQuad"});
						}
						else {
							$("#practice").animate({"height": App.targetOpenHeight() + "px"}, { queue:false, duration:400, easing:"easeInOutQuad" });
						}
						
						xPos = -($.inArray(_this.model.getSubSection(), sections)  * App.targetOpenWidth());
						
						if (isMobile) _this.doSlide( $("#practiceContentStrip"), xPos, '0.3s' );  
						else $("#practiceContentStrip").animate({"left":xPos + "px"}, { queue:false, duration:500, easing:"easeInOutQuad" });
						
						touchslider.update();
					
						$("#practice").find(".lazyload").each(function( index ) {
						  	if ($(this).attr("src") != "undefined") {
								$(this).attr({"src":$(this).attr("image-link")});
							}
						});
						
						break;
					case "highlights":
						break;
					default:
						$("#practice").animate({"height": 0 + "px"}, { queue:false, duration:400, easing:"easeInOutQuad" });
				}
				break;
			case "onWindowResize":
				switch(_this.model.getSection()) {
					case "practice":
						$("#practice").height(App.targetOpenHeight());
						break;
					default:
						$("#practice").height(0);	
				}
				
				$("#practiceCenter").height(App.targetOpenHeight());
				$("#practiceCenter").width(App.targetOpenWidth());
				
				$(".hiddenContentArea").height(App.targetOpenHeight());
				$(".hiddenContentArea").width(App.targetOpenWidth());
				
				xPos = -($.inArray(_this.model.getSubSection(), sections)  * App.targetOpenWidth());
				$("#practiceContentStrip").css({"left":xPos + "px"});
				
				break;
		}
	}
}

/*EDGE**********************************************************************************************************************************************************/
function EdgeClass(_model, _controller) {
	var _this = this;
	this.model = _model;
	this.controller = _controller;
	var sections = ["edgehome", "digital", "social", "broadcast", "design", "insights" ];
	var xPos;
	var socialMediaSlider;
	var totalSocialMedia = $("#works_container .work").length;
	var designSlider;
	var totalDesign = $("#design_image_container .design_image").length;
	
	var touchslider = new App.Touchslider("edgeContentStrip");
	touchslider.init();
	
	socialMediaSlider = new App.PageSlider("socialmedia_control","works_container", 0, Math.ceil(totalSocialMedia/3));
	designSlider = new App.PageSlider("design_control", "design_image_container", 0, totalDesign);
	
	
	this.doSlide = function(/*jQuery*/ elem, /*int*/ x, /*string*/ duration) {
		 elem.css({
			 left: x + 'px',
			 '-webkit-transition-property': 'left',
			 '-webkit-transition-duration': duration,
			 '-webkit-transition-timing-function':'cubic-bezier(0,0,0.25,1)'

		 });
	}
	
	this.update = function(_e) {
		switch (_e) {
			case "onAddressChange":
				switch(_this.model.getSection()) {
					case "edge":
						if (($("#practice").height() > 0) || ($("#about").height() > 0)) {
							$("#edge").delay(400).animate({"height": App.targetOpenHeight() + "px"}, {  duration:400, easing:"easeInOutQuad"});
						}
						else {
							$("#edge").animate({"height": App.targetOpenHeight() + "px"}, {  queue:false, duration:400, easing:"easeInOutQuad" });
						}
						
						xPos = -($.inArray(_this.model.getSubSection(), sections)  * App.targetOpenWidth());
						if (isMobile) _this.doSlide( $("#edgeContentStrip"), xPos, '0.3s' );  
						else $("#edgeContentStrip").animate({"left":xPos + "px"}, { queue:false, duration:500, easing:"easeInOutQuad" });
						
						
						touchslider.update();
						
						$("#edge").find(".lazyload").each(function( index ) {
						  	if ($(this).attr("src") != "undefined") {
								$(this).attr({"src":$(this).attr("image-link")});
							}
						});
						
						switch(_this.model.getSubSection()) {
							case "social":
								$("#edge").find(".lazyload-socialmedia").each(function( index ) {
									if ($(this).attr("src") != "undefined") {
										$(this).attr({"src":$(this).attr("image-link")});
									}
								});
								break;
							case "design":
								$("#edge").find(".lazyload-design").each(function( index ) {
									if ($(this).attr("src") != "undefined") {
										$(this).attr({"src":$(this).attr("image-link")});
									}
								});
								break;
						}
						
						
						break;
					case "highlights":
						break;
					default:
						$("#edge").animate({"height": 0 + "px"}, { queue:false, duration:400, easing:"easeInOutQuad" });
				}
				break;
			case "onWindowResize":
				switch(_this.model.getSection()) {
					case "edge":
						$("#edge").height(App.targetOpenHeight());
						break;
					default:
						$("#edge").height(0);	
				}
				$("#edgeCenter").height(App.targetOpenHeight());
				$("#edgeCenter").width(App.targetOpenWidth());
				
				xPos = -($.inArray(_this.model.getSubSection(), sections)  * App.targetOpenWidth());
				$("#edgeContentStrip").css({"left":xPos + "px"});
				
				$("#works_container").css({"width":(Math.ceil(totalSocialMedia/3) * App.targetOpenWidth())+"px"});
				$(".work").css({"width":(App.targetOpenWidth() / 3) + "px"});
				socialMediaSlider.width = App.targetOpenWidth();
				socialMediaSlider.update(0);
				
				$("#design_image_container").css({"width":$("#design_image_wrapper").width() * totalDesign + "px"});
				$(".design_image").css({"width": $("#design_image_wrapper").width() + "px"});
				designSlider.width = $("#design_image_wrapper").width();
				designSlider.update(0);
								
				break;
		}
	}
}
/*ABOUT**********************************************************************************************************************************************************/
function AboutClass(_model, _controller) {
	var _this = this;
	this.model = _model;
	this.controller = _controller;
	var sections = ["abouthome", "vision", "legacy", "leadership", "offices", "awards", "careers" ];
	var offices = ["SanFrancisco", "WashingtonDC", "NewYork", "Boston", "London", "Basel", "India", "Singapore", "HongKong", "Guangzhou", "Shanghai", "Beijing"];
	var offices_contents = [$('.address-outer .address-block:nth-child(1)'), $('.address-outer .address-block:nth-child(2)'), $('.address-outer .address-block:nth-child(3)'), $('.address-outer .address-block:nth-child(4)'), $('.address-outer .address-block:nth-child(5)'), $('.address-outer .address-block:nth-child(6)'), $('.address-outer .address-block:nth-child(7)'), $('.address-outer .address-block:nth-child(8)'), $('.address-outer .address-block:nth-child(9)'), $('.address-outer .address-block:nth-child(10)'), $('.address-outer .address-block:nth-child(11)'), $('.address-outer .address-block:nth-child(12)') ];
	var xPos;
	var leadershipSlider;
	var totalLeaderShipPages = $(".leadership_page").length;
	var awardsSlider;
	var totalAwardsPages = $(".awards_page").length;
	var awardsSubSections = ["webby", "anvil", "sabre"];
	var awardsSubSections_DOM = [$("#awards-detail-1"), $("#awards-detail-2"), $("#awards-detail-3")];
	
	
	var touchslider = new App.Touchslider("aboutContentStrip");
	touchslider.init();
	
	$('.scroll-pane').jScrollPane({showArrows: true});
	
	leadershipSlider = new App.PageSlider("leadership_control","leadership_container", 0, Math.ceil(totalLeaderShipPages));	
	awardsSlider = new App.PageSlider("awards_control","awards_container", 0, Math.ceil(totalAwardsPages));	
	
	this.doSlide = function(/*jQuery*/ elem, /*int*/ x, /*string*/ duration) {
		 elem.css({
			 left: x + 'px',
			 '-webkit-transition-property': 'left',
			 '-webkit-transition-duration': duration,
			 '-webkit-transition-timing-function':'cubic-bezier(0,0,0.25,1)'

		 });
	}
	
	this.update = function(_e) {
		switch (_e) {
			case "onAddressChange":
				switch(_this.model.getSection()) {
					case "about":
						if (($("#practice").height() > 0) || ($("#edge").height() > 0)) {
							$("#about").delay(400).animate({"height": App.targetOpenHeight() + "px"}, {  duration:400, easing:"easeInOutQuad"});
						}
						else {
							$("#about").animate({"height": App.targetOpenHeight() + "px"}, { queue:false, duration:400, easing:"easeInOutQuad" });
						}
						
						xPos = -($.inArray(_this.model.getSubSection(), sections)  * App.targetOpenWidth());
						if (isMobile) _this.doSlide( $("#aboutContentStrip"), xPos, '0.3s' );  
						else $("#aboutContentStrip").animate({"left":xPos + "px"}, { queue:false, duration:500, easing:"easeInOutQuad" });
						
						touchslider.update();
						
						$("#about").find(".lazyload").each(function( index ) {
						  	if ($(this).attr("src") != "undefined") {
								$(this).attr({"src":$(this).attr("image-link")});
							}
						});
						
						switch(_this.model.getSubSection()) {
							case "leadership":
								$("#about").find(".lazyload-leadership").each(function( index ) {
									if ($(this).attr("src") != "undefined") {
										$(this).attr({"src":$(this).attr("image-link")});
									}
								});
								break;
							case "awards":
								$("#about").find(".lazyload-awards").each(function( index ) {
									if ($(this).attr("src") != "undefined") {
										$(this).attr({"src":$(this).attr("image-link")});
									}
								});
								break;
						}
						
						break;
					case "highlights":
						break;
					default:
						$("#about").animate({"height": 0 + "px"}, { queue:false, duration:400, easing:"easeInOutQuad" });
				}
				switch(_this.model.getSubSection()) {
					case "offices":
						var index = $.inArray(_this.model.getSubpagevalue(), offices);
						for (var i=0; i<offices.length; i++) {
							if (i == index) {
								 offices_contents[i].fadeIn(); 
								 offices_contents[i].show();
							}
							else offices_contents[i].hide();
						}
						if (!_this.model.getSubpagevalue()) offices_contents[2].show();
						break;
				}
				switch(_this.model.getSubSection()) {
					case "awards":
						var index = $.inArray(_this.model.getSubpagevalue(), awardsSubSections);
						for (var i=0; i<awardsSubSections.length; i++) {
							if (i == index) {
								 awardsSubSections_DOM[i].fadeIn(); 
							}
							else awardsSubSections_DOM[i].fadeOut();
						}
						break;
				}
				
				break;
			case "onWindowResize":
				switch(_this.model.getSection()) {
					case "about":
						$("#about").height(App.targetOpenHeight());
						break;
					default:
						$("#about").height(0);	
				}
				$("#aboutCenter").height(App.targetOpenHeight());
				$("#aboutCenter").width(App.targetOpenWidth());
				
				xPos = -($.inArray(_this.model.getSubSection(), sections)  * App.targetOpenWidth());
				$("#aboutContentStrip").css({"left":xPos + "px"});
				$('.scroll-pane').jScrollPane({showArrows: true}).data().jsp;
				
				$("#leadership_container").css({"width":$("#leadership_wrapper").width() * totalLeaderShipPages + "px"});
				$(".leadership_page").css({"width": $("#leadership_wrapper").width() + "px"});
				leadershipSlider.width = $("#leadership_wrapper").width();
				leadershipSlider.update(0);
				
				$(".location-map").height( ($(".location-map").width()*246)/496);
				
				$("#awards_container").css({"width":$("#awards_wrapper").width() * totalAwardsPages + "px"});
				$(".awards_page").css({"width": $("#awards_wrapper").width() + "px"});
				awardsSlider.width = $("#awards_wrapper").width();
				awardsSlider.update(0);
				
				break;
		}
	}
}
function NewsClass(_model, _controller) {
	var _this = this;
	this.model = _model;
	this.controller = _controller;
	var highlightsSlider;
	var highlights_blocks = [];
	
	//populate highlights//
	$(".highlights_block").each(function(index, element) {
		highlights_blocks.push($(this));
    });
	
	for (var i=0; i<highlights_blocks.length; i++) {
		var highlights_page; 
		var highlights_block_col;
		if ((i%9) == 0) {
			highlights_page = $("<div class='highlights_page'></div>");
			$("#highlights_container").append(highlights_page);
			trace(highlights_page);
		}
		if ((i%3) == 0) {
			highlights_block_col = $("<div class='highlights_block_col'></div>");
			highlights_page.append(highlights_block_col);
		}
		highlights_block_col.append(highlights_blocks[i]);
	}
	//
	
	var totalHighlightsPages = $(".highlights_page").length;
	highlightsSlider = new App.PageSlider("highlights_control","highlights_container", 0, Math.ceil(totalHighlightsPages));	
	
	$("#viewall").click(function(e){
		
		$("#news").removeClass("close");
		_this.updateViewAll();
	});
	$("#collapse").click(function(e){
		
		$("#news").addClass("close");
		_this.updateViewAll();
	});
	
	this.updateViewAll = function() {
		if ($("#news").hasClass("close")) {
			$("#viewall").find('img').show();
			$("#news").animate({"height": App.targetCloseNewsHeight() + "px"}, { queue:false, duration:400, easing:"easeInOutQuad" });
		}
		else {
			$("#viewall").find('img').hide();
			$("#news").animate({"height": App.targetOpenNewsHeight() + "px"}, { queue:false, duration:400, easing:"easeInOutQuad" });
		}
	}
	
	this.update = function(_e) {
		switch (_e) {
			case "onAddressChange":
				switch(_this.model.getSection()) {
					case "highlights":
						//alert(_this.model.getSubSection());
						App.highlightsPopup("#" + _this.model.getSubSection());
				
						break;
					default:
				}
				
				break;
			case "onWindowResize":
				switch(_this.model.getSection()) {
					case "news":
						break;
					default:
				}
				var _height;
				if ($("#news").hasClass("close")) {
					_height = App.targetCloseNewsHeight();
				}
				else {
					_height = App.targetOpenNewsHeight();
				}
				$("#news").height(_height);
				$("#newsCenter").height(App.targetOpenNewsHeight());
				$("#newsCenter").width(App.targetOpenWidth());
				
				
				$("#highlights_container").css({"width":$("#highlights_wrapper").width() * totalHighlightsPages + "px"});
				$(".highlights_page").css({"width": $("#highlights_wrapper").width() + "px"});
				highlightsSlider.width = $("#highlights_wrapper").width();
				highlightsSlider.update(0);
				
				$("#collapse").css({"top":App.targetOpenNewsHeight()-27});
				
				break;
		}
	}
}

function VoicesClass(_model, _controller) {
	var _this = this;
	this.model = _model;
	this.controller = _controller;
	var highlightsSlider;
	
	this.update = function(_e) {
		switch (_e) {
			case "onWindowResize":
				var _height;
				$("#voices").height(App.targetVoicesHeight());
				//$("#newsCenter").height(App.targetOpenNewsHeight());
				$("#voicesCenter").width(App.targetOpenWidth());
				$("#footer").width(App.targetOpenWidth());
				/*$("#aboutCenter").height(App.targetOpenHeight());
				$("#aboutCenter").width(App.targetOpenWidth());
				
				xPos = -($.inArray(_this.model.getSubSection(), sections)  * App.targetOpenWidth());
				$("#aboutContentStrip").css({"left":xPos + "px"});
				$('.scroll-pane').jScrollPane({showArrows: true}).data().jsp;
				
				$("#leadership_container").css({"width":$("#leadership_wrapper").width() * totalLeaderShipPages + "px"});
				$(".leadership_page").css({"width": $("#leadership_wrapper").width() + "px"});
				leadershipSlider.width = $("#leadership_wrapper").width();
				leadershipSlider.update(0);
				
				$(".location-map").height( ($(".location-map").width()*246)/496);
				
				$("#awards_container").css({"width":$("#awards_wrapper").width() * totalAwardsPages + "px"});
				$(".awards_page").css({"width": $("#awards_wrapper").width() + "px"});
				awardsSlider.width = $("#awards_wrapper").width();
				awardsSlider.update(0);*/
				
				break;
		}
	}
}







