// JavaScript Document
var App = (function() {
	var model;
	var controller;
	var baseURL;
	var header;
	var menu;
	var practice;
	var about;
	var edge;
	var news;
	var voices;
	var smallBrowser = 1024;
	var mediumBrowser = 1250;
	var largeBrowser = 1350;
	var oversizedBrowser = 1600;
	var currWinWidthState;
	var currWinHeightState;
	var targetOpenWidth;
	var targetOpenHeight = 490;
	var targetCloseNewsHeight;
	var targetOpenNewsHeight;
	var targetVoicesHeight;
	var useBrowserHistoryBack = true;

	/* Model, Controller Class ************************************/
	function Model() {
		this.onAddressChange = new Event(this);
		var address;
		
		this.setAddress = function(_val) {
			address = _val;
			this.onAddressChange.notify("onAddressChange");
		}
		this.getAddress = function() {
			return address;
		}
		
		this.getSection = function() {
			return address.split("/")[1];
		};
		this.getSubSection = function() {
			return address.split("/")[2];
		};
		this.getSubpagevalue = function() {
			return address.split("/")[3];
		};
		
		this.onWindowResize = new Event(this);
		this.setWindowResize = function() {
			this.onWindowResize.notify("onWindowResize");
		}
	}
	
	function Controller(_model) {
		var model = _model;
		this.setAddressHandler = function(_val) {
			model.setAddress(_val);
		}
		this.setWindowResizeHandler = function() {
			model.setWindowResize();
		}
		
	}
	//Event is a simple class for implementing the Observer pattern:
	function Event(sender) {
		this._sender = sender;
		this._listeners = [];
	}
	
	/* jQuery address handlers ************************************/
	function handleAddressChange() {
		baseURL = $.address.baseURL();
		//unloadVideo();
		controller.setAddressHandler($.address.value());
		/*if (section) {
			switch (section) {
				case "home":
					openHome();
					break;
				case "highlights":
					break;
				default:
					openPage(section, subSection, subpagevalue);
					break;
			}
		}*/
	}
	
	function handleAddressInit() {
		var addressValue = $.address.value();
		var section = addressValue.split("/")[1];
		if (section) {
			
			//controller.setAddressHandler($.address.value()); 
			//openPage(section, subSection, subpagevalue);
			if (section == "highlights") useBrowserHistoryBack = false;
		}
		else {
			trace("fresh start");
		}
		
		$.address.change(function(event) {
			if ($(window).width() <= smallBrowser ) {
				targetOpenHeight = 490;
				targetOpenWidth = 830;
				targetOpenNewsHeight = 684;
				targetCloseNewsHeight = 492; 
			} 
			else if (($(window).width()) && ($(window).width() <= mediumBrowser)) {
				targetOpenHeight = 510;
				targetOpenWidth = 950;
				targetOpenNewsHeight = 770;
				targetCloseNewsHeight = 540; 
			}
			else if (($(window).width() > mediumBrowser) && ($(window).width() <= largeBrowser)) {
				targetOpenHeight = 550;
				targetOpenWidth = 1060;
				targetOpenNewsHeight = 856;
				targetCloseNewsHeight = 589; 
			}
			else if (($(window).width() > largeBrowser) && ($(window).width() <= oversizedBrowser)) {
				targetOpenHeight = 590;
				targetOpenWidth = 1142;
				targetOpenNewsHeight = 915;
				targetCloseNewsHeight = 622; 
			}
			else if ($(window).width() > oversizedBrowser) {
				targetOpenHeight = 590;
				targetOpenWidth = 1142;
				targetOpenNewsHeight = 915;
				targetCloseNewsHeight = 622; 
			}
			handleAddressChange();
			$(window).resize();
		});
	}
	
	function setAddress(_pageName)
	{
		if (_pageName != $.address.value().split("/")[1]) 
		{
			$.address.value(_pageName);
		}
	}
	function highlightsPopup(_val) {
		var poopupHeight = 548;
		
		var onComplete = function() {
			var src = $("#fancybox-content .popup-bgImage img").attr("image-link");
			$("#fancybox-content").find(".popup-bgImage img").attr({"src":src});
			trace("loading " + src);
		}
		
		var onClosed = function() {
			
			(function() {
				if (!useBrowserHistoryBack) {
					setAddress("home");
					useBrowserHistoryBack = true;
				}
				else {
					window.history.back();
				}
			})();
		
		}
		 popupHeight = 548;
	  
		$.fancybox({
			'titlePosition'		: 'inside',
			'overlayColor'  	: '#000000',
			'transitionIn'		: 'fade',
			'transitionOut'		: 'none',
			'type'				: 'inline',
			'width'				: 938,
			'height'			: 548,
			'autoScale'			: false,
			'padding'			: 0,
			'margin'			: 0,
			'scrolling'		    : 'no',
			'overlayOpacity'	: 0.6,
			'onComplete'		: onComplete,
			'href'              : _val,
			'onClosed'           : onClosed
		});
		
	}
	
	function PageSlider(_control/*string*/, _target/*string*/, _gap/*number*/, _totalPages/*number*/)
	{
		var currIndex = 0;
		var totalPages = _totalPages;
		this.width = 0;
		var target = $("#"+_target);
		var control = $("#"+_control);
		var nums = new Array();/*array*/;
		var prev = control.children(".prev");
		var next = control.children(".next");;
		var THIS = this;
		
		for (i=0; i<totalPages; i++)
		{
			control.children(".num_container").append("<a>" + (i+1) + "</a>");
		}
		control.children(".num_container").find('a').each(function()
		{
			nums.push($(this));
			//trace($(this).text());
		});
		$.each(nums, function(index, value)
		{
			//trace(index+":"+value.text());
			//trace($(this).text())
			$(this).bind('click',function()
			{
				currIndex = index;
				THIS.update(500);
			})
			
		});
		prev.bind('click',function()
		{
			THIS.stepBackwards();
		});
		next.bind('click', function()
		{
			THIS.stepForward();
		});
		
		
		
		this.stepForward = function()
		{
			if (currIndex < totalPages - 1)
			{
				currIndex++;
			}
			else
			{
				currIndex = totalPages - 1;
			}
			THIS.update(500);
		}
		this.stepBackwards = function()
		{
			if (currIndex > 0)
			{
				currIndex--;
			}
			else
			{
				currIndex = 0;
			}
			THIS.update(500);
		}
		this.slide = function(_speed)
		{
			target.stop();
			target.animate({"left": -(THIS.width + _gap)*currIndex + "px"}, { queue:false, easing:"easeInOutQuad", duration:_speed });
			//target.css({"left": -(width + _gap)*currIndex + "px"});
		}
		
		this.update = function(_speed)
		{
			//if (targetOpenWidth) width = targetOpenWidth;
			//else  width = 0;
			
			
			/**
			*Update the slide position and the nav state by currIndex value
			*/
			
			THIS.slide(_speed);
			if (currIndex == totalPages-1)
			{
				next.removeClass("next").addClass("next-off");
				prev.removeClass("prev-off").addClass("prev");
			}
			else if (currIndex == 0)
			{
				next.removeClass("next-off").addClass("next");
				prev.removeClass("prev").addClass("prev-off");
			}
			else
			{
				next.removeClass("next-off").addClass("next");
				prev.removeClass("prev-off").addClass("prev");
			}
			$.each(nums, function(index, value)
			{
				if (index == currIndex)
				{
					$(this).addClass("selected");
				}
				else
				{
					$(this).removeClass("selected");
				}
				
			});
		}
		/*initialize*/
		this.update();
	}
	//************ thouch screen devices ********************//
	/**
	 * This function just binds the touch functions for the grid.
	 * It is very important to stop the default, stop the
	 * propagation, and return false.  If we don't then the touch
	 * events might cause the regular browser behavior for touches
	 * and the screen will start sliding around.
	 */
	function Touchslider(_id/*string*/)
	{
		var THIS = this;
		this.panels = [];
		switch (_id)
		{
			case "practiceContentStrip":
				this.panels = ['practicehome','heathcare','technology', 'public_affairs','consumer'];
				break;
			case "edgeContentStrip":
				this.panels = ['edgehome','strategy', 'insights', 'content_prod','digital','social'];
				break;
			case "aboutContentStrip":
				this.panels = ['abouthome','vision','legacy', 'leadership','awards','offices', 'careers', 'clients'];
				break;
		}
		this.currPanel = 0;
		this.output = function(/*string*/ msg) {
			if (console) {
				console.info(msg);
			}
		}
		/* Set number of panels(sections) to scroll */
		this.numPanel = this.panels.length;
		this.init = function()
		{
			 /*
			   Many of the mobile browsers resize the screen and therefore
			   don't give accurate information about the size of the window.
			   We need to save this information so we can use it later when
			   we're sliding the grid.
			 */
			THIS.width = 830*THIS.numPanel;
			///touchslider.colWidth = cellWidth + padding;
			
			try {
				document.createEvent('TouchEvent');
				/*
				   Now that we've finished the layout we'll make our panel respond
				   to all of the touch events.
				 */
				THIS.makeTouchable('#' + _id);
			} catch (e) {
				/*
				 * Then we aren't on a device that supports touch
				 */
				/*jQuery(this).css({
					'height': '385px',
					'overflow': 'auto'
				});*/
			}
		}
		
		this.makeTouchable = function(/*string*/ gridid) {
			 $(gridid).each(function() {
				this.ontouchstart = function(e) {
					//touchslider.output("touch start");
					THIS.touchStart($(this), e);
					//e.preventDefault();
					//e.stopPropagation();
					return true;
				};
				
				this.ontouchend = function(e) {
					//touchslider.output("touch end");
					e.preventDefault();
					e.stopPropagation();
					
					if (THIS.sliding) {
						THIS.sliding = false;
						THIS.touchEnd($(this), e);
						return false;
					} else {
						/*
						   We never slid so we can just return true
						   and perform the default touch end
						 */
						return true;
					}
				};
				
				this.ontouchmove = function(e) {
					//touchslider.output("touch move");
					THIS.touchMove($(this), e);
					//e.preventDefault();
					//e.stopPropagation();
					//return false;
				};
			});
		}
		 /**
		 * A little helper to parse off the 'px' at the end of the left
		 * CSS attribute and parse it as a number.
		 */
		this.getLeft = function(/*JQuery*/ elem) {
			//return parseInt(elem.css('left').substring(0, elem.css('left').length - 2), 10);
			 return parseInt(elem.css('left'));
		}
		/**
		 * When the touch starts we add our sliding class a record a few
		 * variables about where the touch started.  We also record the
		 * start time so we can do momentum.
		 */
		this.touchStart = function(/*JQuery*/ elem, /*event*/ e) {
			THIS.output("touch start");
			touchTrigger = true;
			 elem.css({
				 '-webkit-transition-duration': '0'
			 });
			 
			 
			 THIS.startX = e.targetTouches[0].clientX;
			 THIS.startY = e.targetTouches[0].clientY;
			 THIS.startLeft = THIS.getLeft(elem);
			 THIS.touchStartTime = new Date().getTime();
			 //touchslider.output("startX:" + touchslider.startX);
			 //touchslider.output(touchslider.startLeft);
			 
		}
		 /**
		 * When the touch ends we need to adjust the grid for momentum
		 * and to snap to the grid.  We also need to make sure they
		 * didn't drag farther than the end of the list in either
		 * direction.
		 */
		this.touchEnd = function(/*JQuery*/ elem, /*event*/ e) {
			//alert(THIS.getLeft(elem) + elem.parent().width() +":"+ THIS.width);
			 if (THIS.getLeft(elem) > 0) {
				 /*
				  * This means they dragged to the right past the first item
				  */
				 THIS.doSlide(elem, 0, '0.2s');
				 
				 elem.parent().removeClass('sliding');
				 THIS.startX = null;
				 THIS.startY = null;
				 //touchslider.output("left llimit");
			 } else if ((Math.abs(THIS.getLeft(elem)) + elem.parent().width()) > THIS.width) {
				 /*
				  * This means they dragged to the left past the last item
				  */
				 THIS.doSlide(elem, '-' + (THIS.width - (elem.parent().width() + 10)), '0.2s');
				 
				 elem.parent().removeClass('sliding');
				 THIS.startX = null;
				 THIS.startY = null;
				  //touchslider.output("right limit");
			 } else {
				 /*
					This means they were just dragging within the bounds of the grid
					and we just need to handle the momentum and snap to the grid.
				  */
				 //touchslider.slideMomentum(elem, e);
				 THIS.slidePanel(elem, e);
			 }
		}
		/**
		 *if the user drag a certain number of pixels from the startX,
		 *slide the panel to the next or previous snap position depending on 
		 *the direction of the user drag
		 */
		 this.slidePanel = function(/*jQuery*/ elem, /*event*/ e)
		 {
			 var slideTriggerIndex = 50;
			 
			 if (Math.abs(THIS.startX - THIS.endX) > slideTriggerIndex)
			 {
				 if (THIS.slidingLeft)
				 {
					 THIS.currPanel++;
				 }
				 else 
				 {
					 THIS.currPanel--;
				 }
				 //alert(THIS.currPanel);
				 //setAddress(model.getSection()+"/"+THIS.panels[THIS.currPanel]); 
				 setAddress(model.getSection()+"/"+THIS.panels[THIS.currPanel]);
			 }
			 else
			 {
				 THIS.doSlide(elem, '-' + (830 * THIS.currPanel), '0.3s'); 
			 }
		 }
		
		this.doSlide = function(/*jQuery*/ elem, /*int*/ x, /*string*/ duration) {
			 elem.css({
				 left: x + 'px',
				 '-webkit-transition-property': 'left',
				 '-webkit-transition-duration': duration,
				 '-webkit-transition-timing-function':'cubic-bezier(0,0,0.25,1)'
	
			 });
		}
		/**
		 * While they are actively dragging we just need to adjust the
		 * position of the grid using the place they started and the
		 * amount they've moved.
		 */
		this.touchMove = function(/*JQuery*/ elem, /*event*/ e) {
			
			 if (!THIS.sliding) {
				 elem.parent().addClass('sliding');
			 }
			 
			 THIS.sliding = true;
			 
			 if (THIS.startX > e.targetTouches[0].clientX) {
				 /*
				  * Sliding to the left
				  */
				 elem.css('left', '-' + (THIS.startX - e.targetTouches[0].clientX - THIS.startLeft) + 'px');
				 THIS.slidingLeft = true;
			 } else {
				 /*
				  * Sliding to the right
				  */
				 var left = (e.targetTouches[0].clientX - THIS.startX + THIS.startLeft);
				 elem.css('left', left + 'px');
				 THIS.slidingLeft = false;
			 }
			 
			 var absDistX = Math.abs(e.targetTouches[0].clientX - THIS.startX);
			 var absDistY= Math.abs(e.targetTouches[0].clientY - THIS.startY);
			 if (absDistX > absDistY)
			 {
				e.preventDefault();
				e.stopPropagation();
				
			 }
			 THIS.endX = e.targetTouches[0].clientX;
		}
		this.update = function()
		{
			try
			{
				if (model.getSubSection() != 'undefined')
				{
					THIS.currPanel = THIS.panels.indexOf(model.getSubSection());
				}
				else
				{
					THIS.currPanel = 0;
				}
			}
			catch(e)
			{
				
			}
		}
	}
	
	
	//make variables public 
	function getTargetOpenHeight() {
		return targetOpenHeight;
	}
	
	function getTargetOpenWidth() {
		return targetOpenWidth;
	}
	function getTargetOpenNewsHeight() {
		return targetOpenNewsHeight;
	}
	
	function getTargetCloseNewsHeight() {
		return targetCloseNewsHeight;
	}
	function getTargetVoicesHeight() {
		return targetVoicesHeight;
	}
	
	return {
		init : function(){
			$.address.init(function(event) {
				handleAddressInit();
		});
		
		/*$.address.init(function(event) {  
			handleAddressInit();
		}); */
	
		if(!$.browser.msie) {
			
			$("#outerDiv").fadeIn(1000);
		}
		else {
			$("#outerDiv").show();
		}
		
		if (Modernizr.cssanimations) {
			trace("css Animation available");
		}
		else {
		}
		
		//Observer pattern
		Event.prototype = {
			attach : function (listener, func) {
				this._listeners.push(listener);
				this._func = func;
			},
			notify : function (args) {
				for (var i = 0; i < this._listeners.length; i++) {
					
					this._listeners[i][this._func](args);
				}
			}
		};
		
		model = new Model();
		controller = new Controller(model);
		menu = new MenuClass(model, controller);
		header = new HeaderClass(model, controller);
		practice = new PracticeClass(model, controller);
		edge = new EdgeClass(model, controller);
		about = new AboutClass(model, controller);
		news =  new NewsClass(model, controller);
		voices =  new VoicesClass(model, controller);
		
		model.onAddressChange.attach(menu, "update");
		model.onAddressChange.attach(header, "update");
		model.onAddressChange.attach(practice, "update");
		model.onAddressChange.attach(edge, "update");
		model.onAddressChange.attach(about, "update");
		model.onAddressChange.attach(news, "update");
		model.onWindowResize.attach(menu, "update");
		model.onWindowResize.attach(header, "update");
		model.onWindowResize.attach(practice, "update");
		model.onWindowResize.attach(edge, "update");
		model.onWindowResize.attach(about, "update");
		model.onWindowResize.attach(news, "update");
		model.onWindowResize.attach(voices, "update");
		
		$(window).resize(function() {
			//New height and width
			var winNewWidth = $(window).width();
			var winNewHeight = $(window).height();
			
			if (winNewWidth <= smallBrowser ) {
				targetOpenHeight = 490;
				targetOpenWidth = 830;
				targetOpenNewsHeight = 684;
				targetCloseNewsHeight = 492; 
				targetVoicesHeight = 200;
				$("#footer").css({"left":(90+44)+"px"});
				$(".centerContent").css({"left":"90px", "font-size":"100%"});
				$("#header").css({"height":"151px"});
				
				if (currWinWidthState != "smallBrowser") controller.setWindowResizeHandler();
				currWinWidthState = "smallBrowser";
				
			} 
			else if ((winNewWidth > smallBrowser) && (winNewWidth <= mediumBrowser)) {
				targetOpenHeight = 510;
				targetOpenWidth = 950;
				targetOpenNewsHeight = 770;
				targetCloseNewsHeight = 540; 
				targetVoicesHeight = 200;
				$("#footer").css({"left":(90+44)+"px"});
				$(".centerContent").css({"left":"90px","font-size":"110%"});
				$("#header").css({"height":"157px"});
				
				if (currWinWidthState != "mediumBrowser") controller.setWindowResizeHandler();
				currWinWidthState = "mediumBrowser";
				
				
			}
			else if ((winNewWidth > mediumBrowser) && (winNewWidth <= largeBrowser)) {
				targetOpenHeight = 550;
				targetOpenWidth = 1060;
				targetOpenNewsHeight = 856;
				targetCloseNewsHeight = 589;
				targetVoicesHeight = 200; 
				$("#footer").css({"left":(90+44)+"px"});
				$(".centerContent").css({"left":"90px","font-size":"120%"});
				$("#header").css({"height":"169px"});
				
				if (currWinWidthState != "largeBrowser") controller.setWindowResizeHandler();
				currWinWidthState = "largeBrowser";
				
				
			}
			else if ((winNewWidth > largeBrowser) && (winNewWidth <= oversizedBrowser)) {
				targetOpenHeight = 590;
				targetOpenWidth = 1142;
				targetOpenNewsHeight = 915;
				targetCloseNewsHeight = 622; 
				targetVoicesHeight = 200;
				$("#footer").css({"left":(170+44)+"px"});
				$(".centerContent").css({"left":"170px","font-size":"125%"});
				$("#header").css({"height":"183px"});
				
				if (currWinWidthState != "oversizedBrowser") controller.setWindowResizeHandler();
				currWinWidthState = "oversizedBrowser";
				
				
			}
			else if (winNewWidth > oversizedBrowser) {
				targetOpenHeight = 590;
				targetOpenWidth = 1142;
				targetOpenNewsHeight = 915;
				targetCloseNewsHeight = 622;
				targetVoicesHeight = 200; 
				$("#footer").css({"left":(170+44)+"px"});
				$(".centerContent").css({"left":"170px","font-size":"125%"});
				$("#header").css({"height":"183px"});
				
				if (currWinWidthState != "oversizedBrowser") controller.setWindowResizeHandler();
				currWinWidthState = "oversizedBrowser";
			}
		});
		
		},
		
		setAddress : setAddress,
		
		targetOpenHeight : getTargetOpenHeight,
		
		targetOpenWidth : getTargetOpenWidth,
		
		targetOpenNewsHeight : getTargetOpenNewsHeight,
		
		targetCloseNewsHeight : getTargetCloseNewsHeight,
		
		targetVoicesHeight : getTargetVoicesHeight,
		
		PageSlider : PageSlider,
		
		Touchslider: Touchslider,
		
		highlightsPopup : highlightsPopup
	}
})();

$(document).ready(function() {
	Modernizr.load([ {
		test : Modernizr.cssanimations,
		complete : function () {
		 	trace(isMobile);
			/*var poopupHeight;
			var onComplete = function() {
				var src = $("#fancybox-content .popup-bgImage img").attr("image-link");
				$("#fancybox-content").find(".popup-bgImage img").attr({"src":src});
				trace("loading " + src);
			}
			 popupHeight = 548;
		  
		  	$(".fancy-trigger").fancybox({
				'titlePosition'		: 'inside',
				'overlayColor'  	: '#000000',
				'transitionIn'		: 'fade',
				'transitionOut'		: 'none',
				'type'				: 'inline',
				'width'				: 938,
				'height'			: 548,
				'autoScale'			: false,
				'padding'			: 0,
				'margin'			: 0,
				'scrolling'		    : 'no',
				'overlayOpacity'	: 0.6,
				'onComplete'		: onComplete
		  	});*/
			
			
			
			
			
			$('.scroll').jScrollPane({
				showArrows:true
			});
			
			//$('#outerDiv').hide();
			$('outerDiv').fadeIn();
			App.init();
			
		}
	  },
	]);
	/*
	SHARE ROLLOVER
	*/
	$('#youtube').bind('mouseenter', function(){ $('#youtuberollover').show(); });
	$('#youtube').bind('mouseleave', function(){ $('#youtuberollover').hide(); });
	$('#facebook').bind('mouseenter', function(){ $('#facebookrollover').show(); });
	$('#facebook').bind('mouseleave', function(){ $('#facebookrollover').hide(); });
	$('#twitter').bind('mouseenter', function(){ $('#twitterrollover').show(); });
	$('#twitter').bind('mouseleave', function(){ $('#twitterrollover').hide(); });
	$('#linkedin').bind('mouseenter', function(){ $('#linkedinrollover').show(); });
	$('#linkedin').bind('mouseleave', function(){ $('#linkedinrollover').hide(); });
	
	//SWFAddress.addEventListener(SWFAddressEvent.CHANGE, introHandleChange);
});

function loadVideo(_path/*string*/) {
	var onComplete = function() {
		$("#fancybox-close").css({"z-index":10000});
	}
	var showCloseButton = true;
	if (isMobile) showCloseButton = false;
	
	$.fancybox({
		'titlePosition'		: 'inside',
		'overlayColor'  	: '#000000',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'none',
		'type'				: 'iframe',
		'width'				: 720,
		'height'			: 408,
		'autoScale'			: false,
		'padding'			: 0,
		'margin'			: 0,
		'scrolling'		    : 'no',
		'overlayOpacity'	: 0.8,
		'href'				: _path,
		'showCloseButton'	: true,
		'onComplete'        : onComplete,
		'showCloseButton' 	: showCloseButton
	});
	
	/*jQuery.fancybox({
				'width': width,
  				'height': height,
				'padding':0,
				'margin': 0,
				'scrolling	':'no',
				'overlayOpacity'	:	0.6,
				'overlayColor'		:'#000',
				'autoScale'			: false,
				'type'				: type,
				'href'			: pageurl,

				'onClosed': function() {
											history.back();
   											//clickHandler("home");
 									   },
				'showCloseButton'	: false
			});*/
}
function unloadVideo() {
	
}

function trace(_message)
{
	try {
		if (console) {
			console.info(_message);
		}
	} catch(e){};
	$("#debugWindow").append(" : "+_message);
}





                                       


