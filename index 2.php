<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 6 November 2007), see www.w3.org" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=1024" />
<!--<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">-->
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9" />
<meta http-equiv="pragma" content="no-cache" />
<title>Ruder Finn</title>
<!--<link rel="stylesheet" type="text/css" href="css/home.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
<link rel="stylesheet" type="text/css" href="css/popups.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />-->
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link rel="stylesheet" type="text/css" href="css/popups.css" />
<!-- styles needed by jScrollPane -->
<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>

<?php
include 'include/Mobile_Detect.php';
$detect = new Mobile_Detect();

if($detect->isMobile()){
    // Any tablet device.
	echo "<script>var isMobile = true</script>";
}
else {
	echo "<script>var isMobile = false</script>";
}
?>

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.address-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/view.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
<script type="text/javascript" src="js/modernizr-2.6.1.js"></script>
<script type="text/javascript" src="js/main.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<!--[if lt IE 8]>
<![endif]-->

</head>
<body>
<div id="debugWindow" style="border-bottom:1px solid #999; display:none"></div>
<div id="outerDiv">
	 <div id='share'>
     	<a href="http://www.linkedin.com/company/ruder-finn" target="_blank"><img id='linkedin' class='shareThumb' alt="Bookmark and Share" src="images/linkedin.jpg" /></a>
        <a href="http://twitter.com/ruderfinn" target="_blank"><img id='twitter' class='shareThumb' alt="Bookmark and Share" src="images/twitter.jpg" /></a>
        <a href="http://www.facebook.com/ruderfinn" target="_blank"><img id='facebook' class='shareThumb' alt="Bookmark and Share" src="images/facebook.jpg" /></a>
        <a href="http://www.youtube.com/ruderfinn" target="_blank"><img id='youtube' class='shareThumb' alt="Bookmark and Share" src="images/youtube.jpg" /></a>
    	<div id='shareRollovers'>
        	<img id='linkedinrollover' src="images/linkedinRollover.jpg" />
            <img id='youtuberollover' src="images/youtubeRollover.jpg" />
            <img id='facebookrollover' src="images/facebookRollover.jpg" />
            <img id='twitterrollover' src="images/twitterRollover.jpg" />
        </div>
        <div class="clear"></div>
    </div>
    <div id="header">
    	<div id="headerBg"></div>
        <div id="headerArea">
        	<div id="headerContentWrapper">
            	<div id="headerContent" class="content">
                	<div class="tab">
                    	<div id="headerMenu" class="menu">
                            <div id="menu">
                                <div class="menu-list1">
                                    <div class='spacer'></div>
                                    <a id="practice_main" class="mainNav weirdDivIssue"><img src="images/nav/practice_s1.jpg" alt="practice"/></a>
                                    <div id="practice_sub" class="menu-list2">
                                        <div class="weirdDivIssue"><a>health & wellness</a></div>
                                        <div class="weirdDivIssue"><a>technology <br/>& innovation</a></div>
                                        <div class="weirdDivIssue"><a>corporate <br/>& public trust</a></div>
                                        <div class="weirdDivIssue"><a>consumer<br/>connections</a></div>
                                    </div>
                                 </div>
                                 <div class="menu-list1">
                                    <a id="edge_main" class="mainNav weirdDivIssue"><img src="images/nav/edge_s1.jpg" alt="edge"/></a>
                                    <div id="edge_sub" class="menu-list2">
                                        <div class="weirdDivIssue"><a>digital</a></div>
                                        <div class="weirdDivIssue"><a>social media</a></div>
                                        <div class="weirdDivIssue"><a>broadcast</a></div>
                                        <div class="weirdDivIssue"><a>design</a></div>
                                        <div class="weirdDivIssue"><a>insights</a></div>
                                    </div>
                                 </div>
                                 <div class="menu-list1">
                                    <a id="about_main" class="mainNav weirdDivIssue"><img src="images/nav/about_s1.jpg" alt="about"/></a>
                                    <div id="about_sub" class="menu-list2">
                                        <div class="weirdDivIssue"><a>vision</a></div>
                                        <div class="weirdDivIssue"><a>legacy</a></div>
                                        <div class="weirdDivIssue"><a>leadership</a></div>
                                        <div class="weirdDivIssue"><a>offices</a></div>
                                        <div class="weirdDivIssue"><a>awards</a></div>
                                    </div>
                                    <div class='spacer weirdDivIssue'></div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="centerContent" id="headerCenter">
                    	 <div id='logo'>
                            <a id='logolink' href="#/home">
                                <img class='s' src="images/logo_Xlarge.jpg"/>
                               <!-- <img class='m' src="images/logo_Medium.jpg"/>
                                <img class='l' src="images/logo_Large.jpg"/>
                                <img class='xl' src="images/logo_Xlarge.jpg"/>-->
                            </a>
                  		</div>
                        <div id='contact'>
                            <div id="contactWrapper">
                                <p id='util'>
                                    <a href="#/home">HOME</a>
                                    |
                                    <a href="#/about/offices">CONTACT</a>
                                    |
                                    <a href="http://www.ruderfinn.com/careers/">CAREERS</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--practice-->
    <div id="practice" class="weirdDivIssue">
    	<div class="Bg"></div>
        <div id="practiceArea">
        	<div id="practiceContentWrapper">
            	<div id="practiceContent">
            		<div id="practiceCenter" class="centerContent">  
                    	<div id="practiceContentStrip" class="contentStrip">
                        	<div id='practice_home' class='hiddenContentArea'>
                                <div class="landing">
                                    <div class="columns4">
                                        <div class="col4">
                                            <p><a href="#/practice/health_and_wellness"><img class="lazyload" image-link="images/health-wellness.jpg" style="width:100%;" alt="" /></a></p>
                                            <p><strong>HEALTH &amp; WELLNESS</strong></p>
                                            <p>Ruder Finn knows how to drive understanding and demand among consumers, patients, healthcare professionals and decision makers, for products, services and technological advances that lead to longer, healthier lives.</p>
                                        </div>
                                        <div class="col4">
                                
                                            <p><a href="#/practice/technology_innovation"><img class="lazyload" image-link="images/global-connectivity.jpg" style="width:100%;" alt="" /></a></p>
                                            <p><strong>TECHNOLOGY &amp; INNOVATION</strong></p>
                                            <p>Ruder Finn is paving the way for virtual and real-world technologies, products and services that serve to connect individuals, businesses and societies across networks, communities and borders.</p>
                                        </div>
                                        <div class="col4">
                                            <p><a href="#/practice/corporate_and_public_trust"><img class="lazyload" image-link="images/corporate-public-trust.jpg"  style="width:100%;" alt="" /></a></p>
                                
                                            <p><strong>CORPORATE &amp; PUBLIC TRUST</strong></p>
                                            <p>Ruder Finn builds corporate reputation, brand-loyalty and trust for corporations, brands and institutions among their most important stakeholders, consumers and constituents.</p>
                                        </div>
                                        <div class="col4 last">
                                            <p><a href="#/practice/consumer_connections"><img class="lazyload" image-link="images/life-style.jpg" style="width:100%;" alt="" /></a></p>
                                            <p><strong>CONSUMER CONNECTIONS</strong></p>
                                
                                            <p>Ruder Finn adds passion to your brand and results to your bottom line. We believe in the power of brands and everything that they represent. Speaking with a consistent voice, we build interest and anticipation for both new and existing products.</p>
                                        </div>
                                        <div class="clearit">&nbsp;</div>
                                        <div class="col4">
                                            <p class="more">&#8250; <a href="#/practice/health_and_wellness">Read more</a></p>
                                        </div>
                                        <div class="col4">
                                            <p class="more">&#8250; <a href="#/practice/technology_innovation">Read more</a></p>
                                        </div>
                                        <div class="col4">
                                            <p class="more">&#8250; <a href="#/practice/corporate_and_public_trust">Read more</a></p>
                                        </div>
                                        <div class="col4 last">
                                            <p class="more">&#8250; <a href="#/practice/consumer_connections">Read more</a></p>
                                        </div>
                                        <div class="clearit">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            <div id='health_wellness' class='hiddenContentArea'>
                            	<div class="landing2">
                                    <h2>HEALTH &amp; WELLNESS</h2>
                                    <div class="img"><img class="lazyload" image-link="images/health-wellness-big.jpg" alt="" /></div>
                                    <div class="content-r">
                                        <p>Ruder Finn's Health &amp; Wellness practice drives understanding and demand among consumers, patients, healthcare professionals and decision makers, for products, services and technological advances that lead to longer, healthier lives.</p>
                                        <p>RF Health &amp; Wellness expertise serves:</p>
                                        <ul>
                                            <li>Pharma</li>
                        
                                            <li>Biotech </li>
                                            <li>Consumer Health</li>
                                            <li>Public Health</li>
                                            <li>eHealth</li>
                                            <li>Nutrition</li>
                                            <li>Fitness</li>
                        
                                        </ul>
                                        <p class="orange-more"><a href="mailto:goldsteins@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                            </div>
                             <div id='technology_innovation' class='hiddenContentArea'>
                                <div class="landing2">
                                    <h2>TECHNOLOGY &amp; INNOVATION</h2>
                                    <div class="img"><img class="lazyload" image-link="images/global-connectivity-big.jpg" alt="" /></div>
                                    <div class="content-r">
                                        <p>Ruder Finn believes that innovation fuels every company. Whether you're powering the cloud, connecting people to real-time information or paving the way for entirely new computing models, our team of passionate storytellers are committed to helping innovative companies develop and tell their stories through digital and traditional media</p>
                                		<p>Ruder Finn has experience developing strategic communications programs for companies large and small, from enterprise to consumer. Wherever you are in your company lifecycle, we can help with:</p>
                                        <ul>
                                            <li>Corporate messaging and positioning</li>
                                            <li>Traditional and digital media relations</li>
                        
                                            <li>Web site design and social media strategy </li>
                                            <li>Product launches</li>
                                            <li>Thought leadership</li>
                                            <li>Executive visibility</li>
                                        </ul>
                                        <p class="orange-more"><a href="mailto:guttmans@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                            </div>
                            <div id='corporate_and_public_trust' class='hiddenContentArea'>
                                <div class="landing2">
                                    <h2>CORPORATE &amp; PUBLIC TRUST</h2>
                                    <div class="img"><img class="lazyload" image-link="images/corporate-public-trust-big.jpg" alt="" /></div>
                                    <div class="content-r">
                                        <p>Ruder Finn builds corporate reputation, brand loyalty and trust between our clients and their most important stakeholders, consumers and constituents.</p>
                                		<p>Ruder Finn Corporate & Public Trust expertise includes:</p>
                                        <ul>
                                            <li>Corporate reputation</li>
                        
                                            <li>Executive thought leadership</li>
                                            <li>Employee engagement</li>
                                            <li>Change management</li>
                                            <li>Public affairs</li>
                                            <li>Investor relations</li>
                                            <li>Crisis and issues communications</li>
                        
                                            <li>Diversity and Inclusion</li>
                                            <li>CSR and Citizenship</li>
                                            <li>Internal Communications</li>
                                        </ul>
                                        <p class="orange-more"><a href="mailto:spielmanr@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                            </div>
                            <div id='consumer_connections' class='hiddenContentArea'>
                                <div class="landing2">
                                    <h2>CONSUMER CONNECTIONS</h2>
                                    <div class="img"><img class="lazyload" image-link="images/life-style-big.jpg" alt="" /></div>
                                    <div class="content-r">
                                        <p>Ruder Finn's Consumer Connections practice builds interest in new and existing products, and helps our clients create, connect and get a head start on today's trends.</p>
                               			<p>Ruder Finn's areas of expertise include the following industries:</p>
                                        <ul>
                                            <li>Food and Beverage</li>
                                            <li>Entertainment and sports marketing</li>
                        
                                            <li>Travel and Economic Development</li>
                                            <li>Multicultural and image marketing</li>
                                            <li>Automotive</li>
                                            <li>Fashion Beauty Retail</li>
                                            <li>Luxury goods services</li>
                                        </ul>
                                        <p class="orange-more"><a href="mailto:guttmans@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--edge-->
    <div id="edge" class="weirdDivIssue">
    	<div class="Bg"></div>
        <div id="edgeArea">
        	<div id="edgeContentWrapper">
            	<div id="edgeContent">
            		<div id="edgeCenter" class="centerContent">  
                    	<div id="edgeContentStrip" class="contentStrip">
                        	<div id='edge_home' class='hiddenContentArea'>
                            	
                                <div id='creative_home' class='hiddenContentArea'>
                                    <div class="landing3">
                                        <div class="columns5">
                            
                                            <div class="col5">
                                                <p><a href="#/edge/digital"><img class="lazyload" image-link="images/digital.jpg" style="width:100%" alt="" /></a></p>
                                                <p><strong>DIGITAL</strong></p>
                                                <p>RFI Studios brings a strategic and integrated approach to every project, leveraging the full strength and reach of one of the world's largest and most respected public relations firms - Ruder Finn.</p>
                                            </div>
                                            <div class="col5">
                                                <p><a href="#/edge/social"><img class="lazyload" image-link="images/social-media.jpg" style="width:100%" alt="" /></a></p>
                                                <p><strong>SOCIAL MEDIA</strong></p>
                            
                                                <p>Two-way conversation is where Ruder Finn shines. It's in our DNA to communicate, not just dictate. Our understanding of messaging, audience intent and platforms intersect to best engage specific audiences through various channels, creating an integrated approach to your social media activities.</p>
                                            </div>
                                            <div class="col5">
                                                <p><a href="#/edge/broadcast"><img class="lazyload" image-link="images/broadcast.jpg" style="width:100%" alt="" /></a></p>
                                                <p><strong>BROADCAST</strong></p>
                                                <p>RFI Studios' broadcast and animation capability integrates content with converging technologies and a staff of producers and project managers that create nationally recognized, award-winning features in a variety of formats.</p>
                                            </div>
                            
                                            <div class="col5">
                                                <p><a href="#/edge/design"><img class="lazyload" image-link="images/design.jpg" style="width:100%" alt="" /></a></p>
                                                <p><strong>DESIGN</strong></p>
                                                <p>Today, the design discipline is moving from the aesthetic to the strategic and Ruder Finn Design is at the forefront of this change, creating successful branding campaigns for a range of companies.</p>
                                            </div>
                                            <div class="col5 last">
                                                <p><a href="#/edge/insights"><img class="lazyload" image-link="images/insights.jpg" style="width:100%" alt="" /></a></p>
                                                <p><strong>INSIGHTS</strong></p>
                            
                                                <p>As a creative agency, we know that ideas, innovation and beautiful design are integral to Internet success. As a professional agency, we recognize that ensuring the success of a website means more than just fantastic design; as we set out to deliver our clients' creative…</p>
                                            </div>
                                            <div class="clearit">&nbsp;</div>
                                            <div class="col5">
                                                <p class="more">&#8250; <a href="#/edge/digital">Read more</a></p>
                                            </div>
                                            <div class="col5">
                            
                                                <p class="more">&#8250; <a href="#/edge/social">Read more</a></p>
                                            </div>
                                            <div class="col5">
                                                <p class="more">&#8250; <a href="#/edge/broadcast">Read more</a></p>
                                            </div>
                                            <div class="col5">
                                                <p class="more">&#8250; <a href="#/edge/design">Read more</a></p>
                            
                                            </div>
                                            <div class="col5 last">
                                                <p class="more">&#8250; <a href="#/edge/insights">Read more</a></p>
                                            </div>
                                            <div class="clearit">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div id='digital' class='hiddenContentArea'>
                            	
                                <div class="landing3">
                                    <h2>DIGITAL</h2>
                                    <div class="img-edge">
                                        <a onclick="loadVideo('digital-video.html')"><img class="lazyload" id="rfiStudios_videoCover" image-link="images/rfiStudios_videoCover.jpg" style="width:100%;" /></a>
                                        <!--<video height="303" id="player" poster="videos/video1.jpg" src="videos/video1.mp4" width="538"></video>-->
                                        <!--<script type="text/javascript">
                                            jQuery('#player').jwplayer({
                                              flashplayer:'swf/player.swf',
                                              skin:'swf/five/five.xml'
                                            });
                                        </script>-->
                                        <!--<video src="videos/video1.mp4" height="303" id="container" width="538" poster="images/digital-big.jpg" controls="controls">
                                        </video>
                                       <script type="text/javascript"> jwplayer("container").setup({
                                        flashplayer: "jwplayer/player.swf",
                                        skin:'swf/five/five.xml',
                                        });
                                        </script>-->
                                        
                                        <!--<div id="mediaplayer">JW Player goes here</div>
                                        <script type="text/javascript">
                                            jwplayer("mediaplayer").setup({
                                                flashplayer: "jwplayer/player.swf",
                                                file: "images/creative_and_digital/video.mp4",
                                                image: "images/digital-big.jpg",
                                                width:538,
                                                height: 303
                                            });
                                        </script>-->
                                    </div>
                                    <div class="content-r-edge">
                                        <p>RFI Studios brings a strategic and integrated approach to every project, leveraging the full strength and reach of one of the world's largest and most respected public relations firms - Ruder Finn.</p>
                                        <p>RFI Studios has substantial experience in building:</p>
                                        <ul>
                                            <li>Best in class websites</li>
                                            <li>Thriving online communities</li>
                        
                                            <li>Clean, intuitive user interfaces and navigational systems</li>
                                            <li>Large and small intranets</li>
                                            <li>Easy to use and customized extranets</li>
                                            <li>Custom content management and archiving systems</li>
                                        </ul>
                                        
                                        <p class="orange-more"><a target="_blank" href="http://www.rfistudios.com/">&#8250; VISIT RFI STUDIOS WEBSITE</a></p>
                        
                                        <p class="clearit">&nbsp;</p>
                                        <p class="orange-more"><a href="mailto:schneiders@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                                        <p class="clearit">&nbsp;</p>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                                
                            </div>
                            <div id='socialmedia' class='hiddenContentArea'>
                            	<div class="landing4">
                                    <h2>SOCIAL MEDIA</h2>
                                    <div class="content-r-edge" style="width:100%">
                                    	<p style="width:68%; float:left">Two-way conversation is where Ruder Finn shines. Our understanding of messaging, audience intent and platforms intersect to best engage specific audiences through various channels, creating an integrated approach to your social media activities.</p>
                                        <div style="float:right">
                                        	<p class="orange-more"><a target="_blank" href="http://www.rfistudios.com/">&#8250; VISIT RFI STUDIOS WEBSITE</a></p>
                                            <p class="clearit">&nbsp;</p>
                                            <p class="orange-more"><a href="mailto:schneiders@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div id="socialmedia_control" class="page-scroll">
                                        <a class='prev'></a><a class='next'></a> 
                                        <div class="num_container"></div>
                                    </div>
                                    <div class="clearit"></div>
                                    <div id="work_wrapper">
                                        <div id="works_container">
                                            <div class="work"><a id="pepsico-btn"><img class="lazyload-socialmedia" image-link="images/pepsico.jpg" alt="" /></a></div>
                                            <div class="work"><a id="matrix-btn"><img class="lazyload-socialmedia" image-link="images/matrix.jpg" alt="" /></a></div>
                                            <div class="work"><a id="rfii-btn"><img class="lazyload-socialmedia" image-link="images/rfindex.jpg" alt="" /></a></div>	
                                            <div class="work"><a id="microsoft-btn"><img class="lazyload-socialmedia" image-link="images/microsoft.jpg" alt="" /></a></div>
                                            <div class="work"><a id="dew-btn"><img class="lazyload-socialmedia" image-link="images/mountain-dew.jpg" alt="" /></a></div>
                                            <div class="work"><a id="sfc-btn"><img class="lazyload-socialmedia" image-link="images/caring.jpg" alt="" /></a></div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div id='broadcast' class='hiddenContentArea'>
                            	<div class="landing3">
                                    <h2>BROADCAST</h2>
                                    <div class="img-edge">
                                    	<a onclick="loadVideo('broadcast-video.html')"><img class="lazyload" id="rfiStudios_videoCover" image-link="images/boardcast_videoCover.jpg" style="width:100%;" /></a>
                                    </div>
                                    <div class="content-r-edge">
                                        <p>RFI Studios' broadcast and animation team provides a full-service package of skills based on outstanding writing, story telling, design, visualization and technology. All projects begin by understanding client needs and then bringing the right creative team, the right tools, and the right strategy to bring a project to a rewarding and effective conclusion. We offer state-of-the-art HD camera packages, non-linear video editing, social media integration, a full suite of design and animation capabilities, all enhanced by a worldwide talent pool. Our highly experienced, award-winning production team is comprised of producers, project managers, camera operators, video editors, graphic artists, and animators who share a common commitment to excellence in the pursuit of imaginative, results-oriented products.</p>
                                        <br/>
                                        <p class="orange-more"><a target="_blank" href="http://www.rfistudios.com/">&#8250; VISIT RFI STUDIOS WEBSITE</a></p>
                                        <p class="clearit">&nbsp;</p>
                                        <p class="orange-more"><a href="mailto:isera@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                        
                                        <div class="clearit">&nbsp;</div>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                                 </div>
                            </div>
                            <div id='design' class='hiddenContentArea'>
                            	<div class="landing4">
                                    <h2>DESIGN</h2>
                                    <div id="design_image_wrapper">
                                        <div id="design_image_container">
                                            <div class="design_image">
                                                <p><img class="lazyload-design" image-link="images/design-big.jpg" alt="" /></p>
                                                <p class="note">New York Theater Workshop: 25th Anniversary Logo and Triennial Report</p>
                                            </div>
                                            <div class="design_image">
                                               <p><img class="lazyload-design" image-link="images/design-big2.jpg" alt="" /></p>
                                               <p class="note">Helicos BioSciences: Branding and Multi-Platform Launch Campaign</p>
                                            </div>
                                            <div class="design_image">
                                                <p><img class="lazyload-design" image-link="images/design-big3.jpg" alt="" /></p>
                                                <p class="note">PepsiCo Dream Machine: Event and Partnership Graphics Introducing the Recycling Program</p>
                                            </div>
                                        </div>
                                        <div class="clearit"></div>
                                        <div id="design_control" class="page-scroll">
                                            <a class='prev'></a><a class='next'></a> 
                                            <div class="num_container"></div>
                                        </div>	
                                    </div>
                                    <div class="content-r-edge">
                                        <p>Ruder Finn Design delivers strategic messages to our clients with clarity, impact, and style. We craft the core visual and verbal elemtns of projects throughout our four award winning practice areas.</p>
                                        <p><strong>BRANDING</strong><br />Ruder Finn Design has created successful branding campaigns for a range of companies: large multi-national corporations looking for a clear and consistent voice across geographies and business units, divisions and acquisitions that need to be brought into the fold in a seamless yet distinct way, and leading-edge smaller companies looking for immediate impact as a bigger player.</p>
                                        <p><strong>ADVERTISING</strong><br />As an award-winning full service agency, Ruder Finn Advertising delivers expertise and excellence at every stage. It's evidenced in the soundness and elegance of our work and in the proven results we generate for our clients.</p>
                                        <p class="orange-more"><a href="mailto:gabbayl@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                            
                                        <div class="clearit">&nbsp;</div>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                            
                                </div>
                            </div>
                            <div id='insights' class='hiddenContentArea'>
                            	<div class="landing3">
                                    <h2>INSIGHTS</h2>
                                    <div class="img-edge">
                                    	<img class="lazyload" id="rfiStudios_videoCover" image-link="images/insights-big2.jpg" style="width:100%;" />
                                    </div>
                                    <div class="content-r-edge">
                                        <p>As a creative agency, we know that ideas, innovation and beautiful design are integral to Internet success. As a professional agency, we recognize that ensuring the success of a website means more than just fantastic design; as we set out to deliver our clients' creative, strategic, and integrated communications programs that yield quantifiable results.</p>
                                        <p>We bring a strategic and integrated approach to every project, leveraging the full strength and reach of one of the world's largest and most respected public relations firms - Ruder Finn. Our world-class network of partners is made up of more than 1500 practice area specialists ranging from healthcare and technology to consumer marketing, travel and global issues.</p>
                                        <br/>
                                        <p class="orange-more"><a href="mailto:RFinsights@ruderfinn.com">&#8250; CONTACT US TO FIND OUT MORE</a></p>
                        
                                        <div class="clearit">&nbsp;</div>
                                    </div>
                                    <div class="clearit">&nbsp;</div>
                                 </div>
                            </div>
                        </div>
            		</div>
                </div>
            </div>
        </div>
    </div>
    <!--about-->
    <div id="about" class="weirdDivIssue">
    	<div class="Bg"></div>
        <div id="aboutArea">
        	<div id="aboutContentWrapper">
            	<div id="aboutContent">
            		<div id="aboutCenter" class="centerContent">  
                    	
                        <div id="aboutContentStrip" class="contentStrip">
                        	<div id='about_home' class='hiddenContentArea'>
                            	<div class="landing3">
                                    <div>
                                        <div class="col5">
                                            <h3><a href="#/about/vision">VISION</a> &#8250;</h3>
                                            <p><a href="#/about/vision"><img class="lazyload" image-link="images/kate.jpg" style="width:100%"  alt="" /></a></p>
                                            <p>Creative Edge. It transcends geographies. It drives innovation. It has a singular impact on customers and stakeholders, while optimizing resources in a global economy.</p>
                                        </div>
                                        <div class="col5">
                                            <h3><a href="#/about/legacy">LEGACY</a> &#8250;</h3>
                        
                                            <p><a href="#/about/legacy"><img class="lazyload" image-link="images/david.jpg" style="width:100%" alt="" /></a></p>
                                            <p>I once described PR as "an old method of advocacy and salesmanship updated to meet the conditions of a mass society," but that description now seems too simplistic.</p>
                                        </div>
                                        <div class="col5">
                                            <h3><a href="#/about/leadership">LEADERSHIP</a> &#8250;</h3>
                                            <p><a href="#/about/leadership"><img class="lazyload" image-link="images/leadership.jpg"  style="width:100%" alt="" /></a></p>
                                            <p>The integrity of independence allows us to concentrate on creating innovative solutions for our clients, not short-term gains for shareholders. Our autonomy means senior management spend their time building client relationships not battling bureaucracy.</p>
                        
                                        </div>
                                        <div class="col5">
                                            <h3><a href="#/about/offices">OFFICES</a> &#8250;</h3>
                                            <p><a href="#/about/offices"><img class="lazyload" image-link="images/offices.jpg"  style="width:100%" alt="" /></a></p>
                                            <p>Ruder Finn, Inc. is one of the largest independent integrated communication firms in the world. Through offices and affiliates worldwide, the agency serves the global and local communication needs of more than 250 corporations, governments and nonprofit organizations.</p>
                                        </div>
                                        <div class="col5 last">
                        
                                            <h3><a href="#/about/awards">AWARDS</a> &#8250;</h3>
                                            <p><a href="#/about/awards"><img class="lazyload" image-link="images/awards.jpg"  style="width:100%" alt="" /></a></p>
                                            <p>Creative edge and team collaboration allow innovative ideas to flourish, resulting in breakthrough campaigns celebrated within the industry for their excellence. Here are a few of our most recent awards.</p>
                                        </div>
                                        <div class="clearit">&nbsp;</div>
                                    </div>
                                    <br/>
                                    <p class="dotted-line">&nbsp;</p>
                        
                                    <p style="width:97%"><strong>ABOUT RUDER FINN, INC</strong><br />Ruder Finn, Inc. is a leading independent communications agency with more than 65 years experience. Maintaining offices in New York, San Francisco, London, Beijing, Hong Kong, Shanghai, Singapore, Guangzhou and India, the agency employs over 400 of the leading public relations professionals in the world. Ruder Finn is organized around four strategic pillars that reflect its key areas of leadership: Health & Wellness, Corporate & Public Trust, Technology & Innovation and Consumer Connections. Expertise includes corporate reputation management, branding, cultural and social issues, and intent-driven social media through its full-service digital agency, RFI Studios.</p>
                        
                                </div>
                            </div>
                            <div id='vision' class='hiddenContentArea'>
                            	<div class="landing">
                                    <h2>VISION</h2>
                                    <div class="img-about" >
                                        <p><img class="lazyload" image-link="images/vision-big.jpg" style="width:100%" alt="" /></p>
                                        <p><strong>Kathy Bloomgarden</strong> Chief Executive Officer</p>
                                    </div>
                                    <div class="about_r_content">
                                    	<div class="scroll-pane">
                                            <p>Creative Edge.</p>
                                            <p>It transcends geographies. It drives innovation. It has a singular impact on customers and stakeholders, while optimizing resources in a global economy. At Ruder Finn, creative edge embodies the way we think and the way we work. We seek to bring that creative edge to our clients and their business.</p>
                            
                                            <p>In today's borderless world, investment, technology and information flow instantaneously and unimpeded through a variety of new channels. Globalization and continual technological advancements have transformed society and the practice of public relations. Social media has redefined traditional relationships between customers and corporations, brand owners and brand creators and consumers and producers. In today's web-connected world, it's no longer just about consuming information but curating conversations. Intent has replaced age, gender, race, income, and geography as the new demographic. The immediacy of the 24/7 news cycle and the power of social networks require unprecedented levels of transparency and accountability.</p>
                                            <p>The business landscape and the rules of engagement continue to change. But the values that have underpinned our firm's growth for more than six decades remain constant and increasingly relevant. As one of the world's largest independent agencies, we can focus on what we do best; service our clients' needs. We believe in building long-term relationships, which is one reason why our senior management spends the majority of their time proactively engaging with clients. Our autonomy frees us to think outside the box to bring clients the tailored and actionable insights and strategies today's competitive market demands.</p>
                                            <p>Delivering the breakthrough work our clients deserve and expect depends on collaboration.</p>
                                            <p>So although we have grown into a full-service global agency with all the scale, infrastructure and experience that entails, we have never lost sight of our entrepreneurial heritage. Bureaucracy inhibits innovation. If you want to ignite creative edge, you need to build a talented and self-motivated team, establish an environment that empowers them and then, as Jack Welsh likes to say, get out of the way.</p>
                                        </div>
                                        <br/>
                                        <p class="orange-more"><a href="#/about/abouthome">&#8249; RETURN TO ABOUT</a></p>
                        			</div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                            </div>
                            <div id='legacy' class='hiddenContentArea'>
                            	<div class="landing">
                                    <h2>LEGACY</h2>
                                    <div class="img-about" >
                                        <p><img class="lazyload" image-link="images/legacy-big.jpg" style="width:100%" alt="" /></p>
                                        <p><strong>David Finn</strong> Chairman, Ruder Finn, Inc.</p>
                                    </div>
                                    <h3 class="about">Looking At the Past and Into the Future: <br /><span>A Message From David Finn</span></h3>
                                    <div class="legacy_r_content">
                                    	<div class="scroll-pane">
                                            <p>I once described PR as  &quot;an old method of advocacy and salesmanship updated to meet the conditions of a mass society, &quot; but that description now seems too simplistic. Now I feel we need a new and more mature description of what PR is all about.</p>
                
                            <p>After almost sixty years in the business, it seems to me that the practice of PR is not simply a form of advocacy and salesmanship, but rather an effort to help people get along with each other in a complicated world. We practitioners also try to help enrich people's lives with meaningful insights and valuable information about matters that can be important to them.</p>
                            <p>Now that PR has established itself as a valuable resource for so many different kinds of people, organizations, institutions, governments, our goal should be to train our successors to be as knowledgeable, sensitive, thoughtful, imaginative and creative as they can possibly be.</p>
                            <p>I believe there will be an increasingly significant role for PR in the future. With the sound advice PR people may give, and the effective means of communications they are good at, they should have resources to help make a better world.</p>
                            <p>In the year 2000, Kofi Annan, the great Secretary General of the United Nations and a dear friend of mine, pointed out that the 20th century was the most devastating century in history, and he hoped the 21st century would be much different. It would be a significant contribution if the people in the PR business could play a significant role in achieving that goal.</p>
                                        </div>
                                        <br/>
                                        <br/>
                                        <p class="orange-more"><a href="#/about/abouthome">&#8249; RETURN TO ABOUT</a></p>
                        			</div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                            </div>
                            <div id='leadership' class='hiddenContentArea'>
                            	
                                <div class="landing4">
                                    <h2>LEADERSHIP</h2>
                                    <div id="leadership_control" class="page-scroll">
                                        <a class='prev'></a><a class='next'></a> 
                                        <div class="num_container"></div>
                                    </div>	
                                    <!--line-->
                                     <div id="leadership_wrapper">
                                            <div id="leadership_container">
                                                <div class="leadership_page">
                                                    <div class="columns5-dotted cols-leaders">
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/david1.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>David Finn</strong><br />Chairman</p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/kathy.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Kathy Bloomgarden</strong><br />Chief Executive Officer</p>
                                                        </div>
                                        
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/michael.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Michael Schubert</strong><br />Chief Innovation Officer</p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/louise.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Louise Harris</strong><br />Chief Global Strategist</p>
                                        
                                                        </div>
                                                        <div class="col6 last">
                                                            <p><img class="lazyload-leadership" image-link="images/jean.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Jean-Michel Dumont</strong><br />Chairman, Asia</p>
                                                        </div>
                                                        <div class="clearit">&nbsp;</div>
                                                    </div>
                                                    <div class="clearit">&nbsp;</div>
                                        
                                                    <p class="h-line">&nbsp;</p>
                                                    <div class="columns5-dotted cols-leaders">
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/scott.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Scott Schneider</strong><br />Chief Digital Officer</p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/susan.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Susan Goldstein</strong><br />Global Head of Health & Wellness</p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/rachel.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Rachel Spielman</strong><br />Global Head of Corporate Communications</p>
                                                        </div>
                                                        <div class="col6">
                                        					<p><img class="lazyload-leadership" image-link="images/nick.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Nick Leonard</strong><br />Managing Director, Ruder Finn London</p>
                                                        </div>
                                                        <div class="col6 last">
                                                            <p><img class="lazyload-leadership" image-link="images/emmanuel.jpg" style="width:100% "alt="" /></p>
                                                            <p><strong>Emmanuel Tchividjian</strong><br />Chief Ethics Officer</p>
                                                        </div>
                                                        <div class="clearit">&nbsp;</div>
                                                    </div>
                                                    <div class="clearit">&nbsp;</div>
                                               </div>
                                               <div class="leadership_page">
                                                    <div class="columns5-dotted cols-leaders">
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/trina.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Trina Chiara</strong><br />EVP, Healthcare Strategy</p>
                                                        </div>
                                                        <div class="col6">
                                        
                                                            <p><img class="lazyload-leadership" image-link="images/susan_S.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Susan Smirnoff</strong><br />EVP, Global Health & Wellness</p>
                                                        </div>
                                                         <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/john.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>John McInerney</strong><br />Director of Consumer</p>
                                        
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/jen.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Jen Long</strong><br />Director of Technology & Innovation</p>
                                                        </div>
                                                        <div class="col6 last">
                                                            <p><img class="lazyload-leadership" image-link="images/Dushka.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Dushka Zapata</strong><br />Managing Director West Coast</p>
                                                        </div>
                                                        <div class="clearit">&nbsp;</div>
                                                    </div>
                                                    <div class="clearit">&nbsp;</div>
                                        
                                                    <p class="h-line">&nbsp;</p>
                                                    <div class="columns5-dotted cols-leaders">
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/heather.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Heather Gartman</strong><br />Director, DC Healthcare</p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/fiona.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Fiona Phillips</strong><br />SVP, Healthcare</p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/sarah.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Sarah Coles</strong><br />Director of CSR</p>
                                                        </div>
                                                        <div class="col6">
                                       						<p><img class="lazyload-leadership" image-link="images/elan.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Elan Shou</strong><br />SVP & Managing Director, China</p>
                                                        </div>
                                                        <div class="col6 last">
                                                            <p><img class="lazyload-leadership" image-link="images/mai.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Mai Tran</strong><br />Executive Vice President, Health & Wellness, Asia</p>
                                        
                                                        </div>
                                                        <div class="clearit">&nbsp;</div>
                                                    </div>
                                                    <div class="clearit">&nbsp;</div>
                                               </div>
                                               <div class="leadership_page">
                                                   <div class="columns5-dotted cols-leaders">
                                                   		 <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/gao.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Gao Ming</strong><br />SVP & General Manager, Shanghai </p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/yu.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Poh Leng Yu</strong><br />VP & General Manager, Singapore</p>
                                                        </div>
                                        
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/paul.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Paul Yang</strong><br />General Manager, Beijing</p>
                                                        </div>
                                                        <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/sharon.jpg" style="width:100% "alt="" /></p>
                                                            <p><strong>Sharon Liao</strong><br />SVP & General Manager, Guangzhou</p>
                                                        </div>
                                                        <div class="col6 last">
                                                            <p><img class="lazyload-leadership" image-link="images/elsie.jpg" style="width:100% "alt="" /></p>
                                                            <p><strong>Elsie Leung</strong><br />Deputy General Manager, Hong Kong</p>
                                        
                                                        </div>
                                                    </div>
                                                    <div class="clearit">&nbsp;</div>
                                                    <p class="h-line">&nbsp;</p>
                                                    <div class="columns5-dotted cols-leaders">
                                                   		 <div class="col6">
                                                            <p><img class="lazyload-leadership" image-link="images/radha.jpg" style="width:100%" alt="" /></p>
                                                            <p><strong>Radha Roy</strong><br />Country Head, India</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearit">&nbsp;</div>
                                               </div>
                                        </div>
                                    </div>
                                    <!--line-->
                                </div>
                                
                            </div>
                            <div id='offices' class='hiddenContentArea'>
                            	<div class="landing4">
                                    <h2>OFFICES & CONTACT</h2>
                                    <p>For all business inquiries, contact the Business Development team at <a class="green email" href="mailto:info@ruderfinn.com">info@ruderfinn.com</a><br />For all other inquiries, send an email to <a class="green email" href="mailto:info@ruderfinn.com">info@ruderfinn.com</a>
                                    </p>
                                    <p class="dotted-line">&nbsp;</p>
                                    <div id="offices">
                                    	<p>
                                        	<a>
                                        		<img src="images/arrow-open.jpg" alt=""/>
                                         		Find regional contacts and addresses
                                        	</a>
                                        </p>
                                      <div class="location-outer">
                                       	<div class="offices-list">
												<div class="heading">
                                                	offices
                                                </div>
                                                <ul>
                                                	<li><a href="#/about/offices/NewYork">New York</a></li>
                                                    <li><a href="#/about/offices/SanFrancisco">San Francisco</a></li>
                                                    <li><a href="#/about/offices/London">London</a></li>
                                                    <li><a href="#/about/offices/Shanghai">Shanghai</a></li>
                                                    <li><a href="#/about/offices/Singapore">Singapore</a></li>
                                                    <li><a href="#/about/offices/HongKong">Hong Kong</a></li>
                                                    <li><a href="#/about/offices/Guangzhou">Guangzhou</a></li>
                                                    <li><a href="#/about/offices/Beijing">Beijing</a></li>
                                                    <li><a href="#/about/offices/India">India</a></li>
    											</ul>
                                            </div>
											<div class="hub-list">
                                            	<div class="heading">
                                                	hubs
                                                </div>
                                                <ul>
                                                	<li><a href="#/about/offices/WashingtonDC">Washington DC</a></li>
                                                    <li><a href="#/about/offices/Boston">Boston</a></li>
                                                    <li><a href="#/about/offices/Basel">Basel</a></li>
                                                </ul>
                                            </div>
                                            <div class="location-map">
                                        
                                            	<img class="lazyload" image-link="images/offices-map.jpg" style="width:100%; position:absolute;"/>
                                                <a  href="#/about/offices/SanFrancisco"><div class="office-point" style="top:37.5%; left:12.5%"></div></a>
                                                <a  href="#/about/offices/WashingtonDC"><div class="office-point" style="top:39%; left:26%"></div></a>
                                                <a  href="#/about/offices/NewYork"><div class="office-point" style="top:34.5%; left:26.5%"></div></a>
                                                <a  href="#/about/offices/Boston"><div class="office-point" style="top:34.3%; left:28.7%"></div></a>
                                                <a  href="#/about/offices/London"><div class="office-point" style="top:30.3%; left:45.3%"></div></a>
                                                <a  href="#/about/offices/Basel"><div class="office-point" style="top:32.6%; left:48.3%"></div></a>
                                                <a  href="#/about/offices/India"><div class="office-point" style="top:52.5%; left:66.4%"></div></a>
                                                <a  href="#/about/offices/India"><div class="office-point" style="top:47.9%; left:67.6%"></div></a>
                                                <a  href="#/about/offices/Singapore"><div class="office-point" style="top:59.8%; left:72.8%"></div></a>
                                                <a  href="#/about/offices/HongKong"><div class="office-point" style="top:49.8%; left:75%"></div></a>
                                                <a  href="#/about/offices/Guangzhou"><div class="office-point" style="top:47.5%; left:77%"></div></a>
                                                <a  href="#/about/offices/Shanghai"><div class="office-point" style="top:43.5%; left:77.3%"></div></a>
                                                <a  href="#/about/offices/Beijing"><div class="office-point" style="top:38.7%; left:78%"></div></a>
                                                
                                        	</div>
                                            <div class="address-outer offices">
                                            	<div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn San Francisco</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Dushka Zapata</strong><br />
                                                        Managing Director West Coast<br />
                                                        415 223 8290<br />
                                                        <a class="green email" href="mailto:zapatad@ruderfinn.com">zapatad@ruderfinn.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>220 Montgomery Street Suite 269<br />San Francisco, CA 94104<br/><a class="green email" target="_blank" href="https://maps.google.com/maps?q=220+Montgomery+Street+Suite+969+San+Francisco,+CA+94104&hl=en&sll=37.0625,-95.677068&sspn=60.158465,135.263672&hnear=220+Montgomery+St+%23969,+San+Francisco,+California+94104&t=m&z=17">View Map</a></p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Washington DC</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Heather Gartman</strong><br />
                                                        <a class="green email" href="mailto:gartmanh@ruderfinn.com">gartmanh@ruderfinn.com</a>
                                                    </p>
                                                    
                                                </div>
                                                <div class="address-block" style="position:absolute; display:block">
                                                    <div class="add-title">Ruder Finn New York</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Rachel Spielman</strong><br />
                                                        Global Head of Corporate Communications<br />
                                                        212 593 6400<br />
                                                        <a class="green email" href="mailto:spielmanr@ruderfinn.com">spielmanr@ruderfinn.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>301 East 57th Street, New York, NY 10022<br/><a class="green email" target="_blank" href="https://maps.google.com/maps?q=301+East+57th+Street,+3rd+Floor,+New+York,+NY+10022">View Map</a></p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Boston</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Sarah Coles</strong><br />
                                                        <a class="green email" href="mailto:coless@ruderfinn.com">coless@ruderfinn.com</a>
                                                    </p>
                                                    
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn London</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Nick Leonard</strong><br />
                                                        Managing Director<br />
                                                        44 207 462 8900, fax: 44 207 462 8999<br />
                                                        <a class="green email" href="mailto:nleonard@ruderfinn.co.uk">nleonard@ruderfinn.co.uk</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>1 Bedford Street London WC2E 9HG<br /><a class="green email" target="_blank" href="https://maps.google.com/maps?q=1+Bedford+Street+London+WC2E+9HG&hl=en&ll=51.509798,-0.123596&spn=0.011218,0.023518&sll=51.516902,-0.12733&sspn=0.011216,0.023518&hnear=1+Bedford+St,+City+of+Westminster,+London+WC2E,+United+Kingdom&t=m&z=16">View Map</a></p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Basel</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Mary Beth Lickteig</strong><br />
                                                        <a class="green email" href="mailto:lickteigm@ruderfinn.com">lickteigm@ruderfinn.com</a>
                                                    </p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn India<br/><span style="font-size:80%">Mumbai | New Delhi</span></div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Radha Roy</strong><br />
                                                        Country Head<br />
                                                        91 124 4696767<br />
                                                        <a class="green email" href="mailto:royr@RuderFinnAsia.com">royr@RuderFinnAsia.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>The Executive Centre, Tower A Building No 5, 18th Floor DLF Cyber City, Phase III, Gurgaon – 122002 Haryana, India<br /><a class="green email" target="_blank" href="https://maps.google.com/maps?q=Tower+A,+Building+No+5,+DLF+Cyber+City,+Phase+III,+Gurgaon,+122002+Haryana,+India&hl=en&sll=28.48925,77.091966&sspn=0.007921,0.011759&hnear=DLF+Bldg+No.+5+Tower+C,+Gurgaon,+Haryana,+India&t=m&z=17">View Map</a></p>
                                                </div>
                                               
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Singapore</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Yu Poh Leng</strong><br />
                                                        Vice President and General Manager<br />
                                                        65 6235 4495, fax: 65 6235 7796<br />
                                                        <a class="green email" href="mailto:yupl@ruderfinnasia.com">yupl@ruderfinnasia.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>1 Coleman St., #08-11, The Adelphi, Singapore 179803<br /><a class="green email" target="_blank" href="https://maps.google.com/maps?q=1+Coleman+St,+%2308-11,+The+Adelphi,+Singapore+179803&hl=en&ll=1.271563,103.886547&spn=0.14416,0.188141&sll=40.927,-74.003179&sspn=0.013618,0.023518&hq=1+Coleman+St,+%2308-11,+The+Adelphi,+Singapore+179803&t=m&z=13">View Map</a></p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Hong Kong</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Elsie Leung</strong><br />
                                                        Deputy General Manager<br />
                                                        852 2521 0800, fax: 852 2521 7088<br />
                                                        <a class="green email" href="mailto:leunge@ruderfinnasia.com">leunge@ruderfinnasia.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>Units C-E 24/F Neich Tower, 128 Gloucester Road, Hong Kong<br /><a class="green email" target="_blank" href="https://maps.google.com/maps?q=128+Gloucester+Road,+Hong+Kong&hl=en&sll=51.509798,-0.123596&sspn=0.011218,0.023518&hnear=128+Gloucester+Rd,+Hong+Kong&t=m&z=17">View Map</a></p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Guangzhou</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Sharon Liao</strong><br />
                                                        Senior Vice President and General Manager<br />
                                                        86 20 8349 5783, fax: 86 20 8359 9685<br />
                                                        <a class="green email" href="mailto:liaos@ruderfinnasia.com">liaos@ruderfinnasia.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>2/F, No. 10th, Peace Road, Overseas Chinese Village, Guangzhou, 510095 PRC<br /><a class="green email" target="_blank" href="https://maps.google.com/maps?q=2/F,+No.+10th,+Peace+Road,+Overseas+Chinese+Village,+Guangzhou,+510095+PRC">View Map</a></p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Shanghai</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Gao Ming</strong><br />
                                                        SVP & General Manager, Shanghai <br />
                                                        86 21 53883 1188, fax: 86 21 6248 3176<br />
                                                        <a class="green email" href="mailto:gaom@ruderfinnasia.com">gaom@ruderfinnasia.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>2nd flr. Block 7, 789 Huang Pi Nan Road, Shanghai 200025, PRC<br /><a class="green email" target="_blank" href="https://maps.google.com/maps?q=2nd+flr.,+Block+7,+789+Huang+Pi+Nan+Road,+Shanghai+200025,+PRC">View Map</a></p>
                                                </div>
                                                <div class="address-block" style="position:absolute; display:none">
                                                    <div class="add-title">Ruder Finn Beijing</div>
                                                    <p class="title-contact">CONTACT</p>
                                                    <p>
                                                        <strong>Paul Yang</strong><br />
                                                        General Manager<br />
                                                        86 10 6462 7321 26, fax: 86 10 6462 7327<br />
                                                        <a class="green email" href="mailto:yangp@ruderfinnasia.com">yangp@ruderfinnasia.com</a>
                                                    </p>
                                                    <p class="title-contact">ADDRESS</p>
                                                    <p>E101, East Lake Villas, 35 Dongzhimenwai Main St., Dongcheng District, Beijing 100027 PRC<br /><a class="green email" target="_blank" href="https://maps.google.com/maps?q=E101,+East+Lake+Villas,+35+Dongzhimenwai+Main+St.,+Dongcheng+District,+Beijing+100027+PRC">View Map</a></p>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div id="offices">
                                    	<p>
                                        	<a href="#/about/careers">
                                        		<img src="images/arrow-close.jpg" alt=""/>
                                         		 Find information about working at Ruder Finn and career opportunities
                                        	</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id='awards' class='hiddenContentArea'>
                            	<div class="landing4">
                                	<h2>AWARDS</h2>
                                    <div id="threeAwards">
                                    	<div class="awards-big"><a href="#/about/awards/webby"><img class="lazyload-awards" image-link="images/webby-award.jpg" /></a><p><b>WINNER</b> / RFI Studios</p></div>
                                        <div class="awards-big"><a href="#/about/awards/anvil"><img class="lazyload-awards" image-link="images/silver-anvil-award.jpg" /></a><p><b>SILVER ANVILS</b> / RF Healthcare</p></div>
                                        <div class="awards-big last"><a href="#/about/awards/sabre"><img class="lazyload-awards" image-link="images/sabre-award.jpg" /></a><p><b>WINNER</b> / RF Corporate Communications</p></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div id="awards_control" class="page-scroll">
                                        <a class='prev'></a><a class='next'></a> 
                                        <div class="num_container"></div>
                                    </div>	
                                    <div id="awards_wrapper">
                                        <div id="awards_container">
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/sabre-award-t.jpg" />
                                                    <p><b>GOLD SABRE</b><br/>RF Corporate Communications Group</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/prsa-new-york-award-t.jpg" />
                                                    <p><b>THE BEST OF THE BEST</b><br/>Financial/Investor Relations Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/webby-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RFI Studios - Activism Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/CIPRA-award-t.jpg" />
                                                    <p><b>GOLDEN AWARD</b><br/>Ruder Finn Asia - Environmental Protection</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/PRSA-award-t.jpg" />
                                                    <p><b>BRONZE ANVIL</b><br/>RF Corporate Communications Group - AWARD OF COMMENDATION</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/davey-award-t.jpg" />
                                                    <p><b>SILVER WINNER</b><br/>RFI Studios - Activism Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/w-web-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RFI Studios - Sports Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/communique-award-t.jpg" />
                                                    <p><b>FINALIST</b><br/>Ruder Finn UK - Best User of International Media Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/pr-sourcecode-award-t.jpg" />
                                                    <p><b>BEST OF THE BEST</b><br/>Corporate Communications Group - IT in PR Category</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/sabre-award-t.jpg" />
                                                    <p><b>GOLD SABRE</b><br/>Corporate Communications Group - Executive Leadership Category</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/webby-award-t.jpg" />
                                                    <p><b>NOMINEE</b><br/>RFI Studios - Corporate Communications Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/prsa-new-york-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>Corporate Communications - Use of Internal Video Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/sabre-award-t.jpg" />
                                                    <p><b>SILVER SABRE</b><br/>RF Healthcare - Pharmaceutical: RX Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/china-award-t.jpg" />
                                                    <p><b>WINNERS</b><br/>Ruder Finn China - Creative Excellence</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/w-web-award-t.jpg" />
                                                    <p><b>WINNERS</b><br/>RFI Studios - Pharmaceuticals Category</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/PRSA-award-t.jpg" />
                                                    <p><b>BRONZE ANVIL</b><br/>RF Healthcare -AWARD OF COMMENDATION: Healthcare Education Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/prsa-new-york-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RF Healthcare - Internal Communications Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/CIPRA-award-t.jpg" />
                                                    <p><b>SILVER AWARD</b><br/>Ruder Finn Asia - Corporate Social Responsibility Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/int-business-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RFI Studios - Overall Design of Website</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/PRSA-award-t.jpg" />
                                                    <p><b>WINNERS</b><br/>RF Corporate Communications - Feature, News Articles or Op-Eds Category</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/davey-award-t.jpg" />
                                                    <p><b>SILVER WINNER</b><br/>RFI Studios -Healthcare Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/sabre-award-t.jpg" />
                                                    <p><b>BRONZE SABRE</b><br/>RF Healthcare - Employee Publication Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/PR-Week-award-t.jpg" />
                                                    <p><b>CERTIFICATE OF EXCELLENCE</b><br/>Ruder Finn China - Green Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/gold-standard-award-t.jpg" />
                                                    <p><b>FINALIST</b><br/>Ruder Finn Asia - Public Affairs (Consultancy) Category</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/webby-award-t.jpg" />
                                                    <p><b>NOMINEE</b><br/>RFI Studios - Pharmaceuticals Category</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/prsa-new-york-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RF Corporate Communication - Corporate Social Responsibility Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/int-business-award-t.jpg" />
                                                    <p><b>FINALIST</b><br/>RFI Studios - Brand Building Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/CIPRA-award-t.jpg" />
                                                    <p><b>GOLDEN AWARD</b><br/>Ruder Finn Asia - Long Term CSM Campaign Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/PR-Week-award-t.jpg" />
                                                    <p><b>HONORABLE MENTION</b><br/>RF Corporate Communications - Reputation Management Category</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/davey-award-t.jpg" />
                                                    <p><b>SILVER AWARD</b><br/>RFI Studios Out-of-the-box Thinking Category</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/w-web-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RFI Studios - Non-Profit Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/prsa-new-york-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RF Healthcare - Community Relations Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/sabre-award-t.jpg" />
                                                    <p><b>WINNERS</b><br/>RF Corporate Communications - Corporate Social Responsibility Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/PRSA-award-t.jpg" />
                                                    <p><b>SILVER ANVIL</b><br/>RF Corporate Communications - Investor Relations Category</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/creative-int-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RF Corporate Communications - Branding Campaign Category</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="awards_page">
                                            	<div class="awards-block first">
                                                	<img class="lazyload-awards" image-link="images/w-web-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RFI Studios -Education Category</p>
                                                </div>
                                                <div class="awards-block">
                                                	<img class="lazyload-awards" image-link="images/PR-Week-award-t.jpg" />
                                                    <p><b>HONORABLE MENTION</b><br/>RF Corporate Communications - Entertainment & Media Campaign Category</p>
                                                </div>
                                                <div class="awards-block last">
                                                	<img class="lazyload-awards" image-link="images/prsa-new-york-award-t.jpg" />
                                                    <p><b>WINNER</b><br/>RF Corporate Communications - Marketing Communications Category</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="awards-detail" id="awards-detail-1">
                                    	<div class="awards-big-images"><img class="lazyload-awards" image-link="images/webby-award-big.jpg" /></div>
                                        <div class="awards-r-detail">
                                        	<h3>WINNER / RFI Studios</h3>
                                            <p>RFI Studios won a Webby Award in the Activism category for its work creating the <a href="http://www.loveisrespect.org/" target="_blank">Love Is Respect</a> website.  This award honors the site that best "empowers and educates people and facilitates civic participation."  RFI continues to enjoy several Webby nominations, including becoming finalist honorees for their work with the Palo Alto Research Center (PARC) in the Corporate Communications category, as well as their work with <a href="http://www.loveisrespect.org/" target="_blank">ReadWriteThink.org</a> in the Education category.</p>
                                            <br/>
                                            <p class="orange-more"><a href="#/about/awards">&#8250; RETURN TO AWARDS</a></p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="awards-detail" id="awards-detail-2">
                                    	<div class="awards-big-images"><img class="lazyload-awards" image-link="images/silver-anvil-award-big.jpg" /></div>
                                        <div class="awards-r-detail">
                                        	<h3>SILVER ANVILS / RF Healthcare</h3>
                                            <p>Three Ruder Finn campaigns received Awards of Excellence at the <a href="http://www.prsa.org/awards/silveranvil" target="_blank">2010 Silver Anvils</a> , and Ruder Finn's Healthcare group received a Bronze Anvil for its Health Reporting Handbook for client Bristol-Myer Squibb.  The Bronze Anvil-winning BMS campaign "Raising Awareness of Chronic Hepatitis B Among Asian-Americans" centered on a Health Reporting Handbook initiative to promote awareness of the disease. In addition to the BMS campaign, Ruder Finn's reputation-building work for Quallion LLC and a Novartis Corporate Reputation campaign received Awards of Excellence at the Silver Anvil Ceremony.</p>
                                            <br/>
                                            <p class="orange-more"><a href="#/about/awards">&#8250; RETURN TO AWARDS</a></p>
                                        </div>
                                        <div class="clear"></div>	
                                    </div>
                                    <div class="awards-detail" id="awards-detail-3">
                                    	<div class="awards-big-images"><img class="lazyload-awards" image-link="images/sabre-award-big.jpg" /></div>
                                        <div class="awards-r-detail">
                                        	<h3>WINNER / RF Corporate Communications</h3>
                                            <p>Ruder Finn has had the honor of winning many Sabre Awards throughout the years.  Most recently, Abbott and Ruder Finn were awarded the 2011 PRSA-NY Big Apple Award in the Marketing Consumer Services: Healthcare category for the CFCareForward Scholarship program.   Ruder Finn is proud to support Abbott further extend its nearly 25-year-commitment of helping people with cystic fibrosis (CF) manage their health.  In 2010, the Ruder Finn Corporate Communications Group won a Gold Sabre for their work with Novartis CEO Leverages Leadership: Navigating Choppy Waters and Weathering Worst Economic Environment in Decades, as well as a Silver Sabre for their work with Alvin Ailey American Dance Theater: Celebrating the Spirit.</p>
                                            <br/>
                                            <p class="orange-more"><a href="#/about/awards">&#8250; RETURN TO AWARDS</a></p>
                                        </div>
                                        <div class="clear"></div>	
                                    </div>
                                </div>
                            </div>
                            <div id='career' class='hiddenContentArea'>
                            	<div class="landing">
                                    <h2>CAREER</h2>
                                    <div class="img-careers" >
                                        <p><img class="lazyload" image-link="images/careers-photo.jpg" style="width:100%" alt="" /></p>
                                    </div>
                                    <h3 class="about">Let us tell you about a career at Ruder Finn</span></h3>
                                    <div class="careers_r_content">
                                    	<div class="scroll-pane">
                                            <p>Who we are:</p>
<p>We are one of the world's largest privately-held agencies. We're a dynamic and energetic group of communications professionals who place a high priority on using problem-solving skills, ingenuity and imagination to help clients achieve real business results.</p>

<p>INDEPENDENCE is a core value. In what has become an acquisition-oriented industry, Ruder Finn has the freedom to chart our own course and listen to our own conscience as we keep clients front and center.</p>

<p>DIVERSITY—of people and opinions—helps us enlarge our worldview in a complex world. We believe creativity thrives in an open environment where every voice counts and dialogue is a valued currency.</p>

<p>INNOVATION reflects our reverence for creativity. There is no cookie-cutter "Ruder Finn way" of churning out communications programs; we're always on the lookout for new ideas. We strive to provide a supportive environment where people count on.</p>

<p>Meaningful work. Great clients. Excellent teams. Collaborative atmosphere. Room to advance.</p>

<p>We're committed to delivering something special to attract outstanding talent...like you!</p>
                                        </div>
                                        <br/>
                                        <br/>
                                        <p class="orange-more"><a href="http://www.ruderfinn.com/careers/">&#8249; VISIT RUDERFINN CAREER SITE</a></p>
                        			</div>
                                    <div class="clearit">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                         
            		</div>
                </div>
            </div>
        </div>
    </div>
    <!-- news -->
    <div id="news" class="weirdDivIssue close">
        <div id="newsBg"></div>
        <div id="newsArea">
        	<div id="newsContentWrapper">
            	<div id="newsContent">
                    <div class="tab" id="newsTab"><img src="images/highlightstab.gif" alt="highlights"/></div>
                    <div id="newsCenter" class="centerContent">
                    	
                        <div class="horiz_line"></div>
                        <div class="news_block first" id="news1" style="margin-top: 30px;">
                            <a class="fancy-trigger" href="#/highlights/citi-past-future-box">
                            	<h1 class="news_title">RF and Citi Win PRWeek Award for Employee Communications Campaign of the Year</h1>
                            	<img src="images/citiPastFuture.jpg" />
                            </a>
                        </div>
                        <div class="news_block" id="news2" style="margin-top: 30px;">
                            <a class="fancy-trigger" href="#/highlights/citi-past-future-box">
                            	<h1 class="news_title">RF and Citi Win PRWeek Award for Employee Communications Campaign of the Year</h1>
                            	<img src="images/citiPastFuture.jpg" />
                            </a>
                        </div>
                        <div class="news_block" id="news3" style="margin-top: 30px;">
                        	<a class="fancy-trigger" href="#/highlights/mhealth-box">	
                            	<h1 class="news_title">RF Launches Health IT Offering and Release mHealth Report</h1>
                            	<img src="images/mHealth_thumb.jpg" />
                            </a>
                        </div>
                    
                        <div class="clear"></div>
                        <div class="horiz_line" style="margin-top:20px;"></div>
                        <div class="clear"></div>
                        <!--<div class="news_block first" id="news4" style="margin-top: 30px;">
                        	<a class="fancy-trigger" href="#/highlights/wannabewell-box">
                            	<h1 class="news_title">RF and the Council for Responsible Nutrition Foundation Launch WannaBeWell App</h1>
                            	<img src="images/wannabewell_thumb.jpg" />
                            </a>
                        </div>-->
                         <div class="news_block first" id="news4" style="margin-top: 30px;">
                            <a class="fancy-trigger" href="#/highlights/citi200-box">
                            	<h1 class="news_title">Citi Celebrates 200 Years</h1>
                            	<img src="images/citi200-thumb.jpg" />
                            </a>
                        </div>
                        <div class="news_block" id="news5" style="margin-top: 30px;">
                        	<a class="fancy-trigger" href="#/highlights/mjf-box">
                            	<h1 class="news_title">RF Supports the Michael J. Fox Foundation in Driving Clinical Trial Participation</h1>
                            	<img src="images/MJFF_thumb.jpg" />
                            </a>
                        </div>
                        <div class="news_block" id="news6" style="margin-top: 30px;">
                        	<a class="fancy-trigger" href="#/highlights/fourseasons-box">
                            	<h1 class="news_title">RF Sister Agency Thunder Communications Selected by Four Seasons as AOR in China</h1>
                            	<img src="images/fourseasons-box-thumb.jpg" />
                            </a>
                        </div>
                        <div class="clear"></div>
                        <div id="viewall"><div style="margin-left:auto; margin-right:auto; width:73px;" ><img src="images/viewall.jpg" /></div></div>
                        <div id="all-highlights-container">
                            <h5 style="float:left;">ALL HIGHLIGHTS</h5>
                            <div id="highlights_control" class="page-scroll">
                                <a class='prev'></a><a class='next'></a> 
                                <div class="num_container"></div>
                            </div>
                            <div class="clear"></div>
                            <div id="highlights_wrapper">
                                <div id="highlights_container">
                                    <div class="highlights_page">
                                        <div class="highlights_block_col">
                                        	<!--<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/wannabewell-box"><p>RF and Council for Responsible Nutrition Foundation Launch WannaBeWell App</p></a></div>-->
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/parsons-box"><p>Ruder Finn Supports PPR's "Empowering Imagination" Design Competition for Parsons Students</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/bronze-box"><p>Ruder Finn Celebrates 2012 Bronze Anvil Wins</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/AUA-box"><p>AUA Foundation Launches Campaign Addressing Stigma of Overactive Bladder</p></a></div>
                                            
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/gala-box"><p>The Economist chooses Ruder Finn as official PR Agency for The World in 2013 events in</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/supplemental-box"><p>Council for Responsible Nutrition Launches the Supplemental blog</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/miyanmar-box"><p>Ruder Finn Supports Non-Profit Organization's Fight Against AIDs</p></a></div>
                                            
    
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/knowyourstats-box"><p>RF Supports the NFL & AUA Foundation's "Know Your Stats" Campaign</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/bulldog-box"><p>RF Wins Gold Bulldog Digital/Social PR Awards for Mountain Dew Throwback Shack</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/caribou-box"><p>RF and Caribou Coffee to Partner on Brand-Building PR and Social Media Programming</p></a></div>
                                            
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="highlights_page">
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/india-box"><p>RF Announces Its First Office in India</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/parkinsons-box"><p>Activating Awareness and Driving Progress Towards a Parkinson's Cure</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/cfcf-box"><p>Big Apple Award Win in the Marketing Consumer Services</p></a></div>
                                            
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/fandewmonium-box"><p>FanDEWmonium</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/guangzhou-box"><p>Unveiling of the Guangzhou Opera House</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/lyovel-box"><p>RF Helps Lyovel Build a Better Coffee Break</p></a></div>
                                            
    
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/matrix-box"><p>Shear Excitement Over L'Oreal Matrix Site</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/ILSI-box"><p>i20 Summit:Institute for Large Scale Innovation</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/WHCC-box"><p>The 8th Annual World Health Care Congress</p></a></div>
                                        </div>
                                    </div>
                                    <div class="highlights_page">
                                        <div class="highlights_block_col">
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/kathy-box"><p>CEO Kathy Bloomgarden on How Social Media Helped PR</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/rfcharity-box"><p>RF Launches "Ruder Finn Cares" Charity Drive</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/rfii-box"><p>The Reason You Go Online</p></a></div>
                                        </div>
                                        <div class="highlights_block_col">
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/reinvention-box"><p>The Reinvention of Chinese Brands: SVP Elan Shou in CNN</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/dewmo-box"><p>Launching Mountain Dew White Out Charity Drive</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/senior-box"><p>Senior Appointments Strengthen Asian Footprint</p></a></div>
                                        </div>
                                        <div class="highlights_block_col">
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/emmy-box"><p>Emmy Award-nominated Television Producer Moves to Ruder Finn</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/callofduty-box"><p>RF Promotes the Return of Mountain Dew Game Fuel and its partnership with Call of Duty</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/kerry-box"><p>Former Bloomberg BusinessWeek Senior Correspondent Kerry Capell Joins RF as SVP</p></a></div>
                                        </div>
                                    </div>
                                    <div class="highlights_page">
                                        <div class="highlights_block_col">
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/prsa-box"><p>RF Recognized at the PRSA's 2010 Silver Anvils</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/solvay-box"><p>RF Celebrates Big Apple Honors for Novartis, Solvay Campaigns</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/webby-box"><p>2010 Webby Awards Recognize RFI Studios' Campaigns for Verizon Foundation, PARC</p></a></div>
                                            
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/internet-box"><p>RF's New Study Reveals "Intent" Behind Mobile Internet Use</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/teens-box"><p>Study Shows Teens are the New Digital influencers, Driving Moms Online</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/kpa-box"><p>RF Wins King Pharmaceuticals Account</p></a></div>
                                            
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/kaj-box"><p>RF Launches Educational Campaign with Kareem Abdul-Jabbar</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/pepsi-box"><p>RF Raises Awareness of Pepsi's Longstanding Commitment to Workplace Equality</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/rachel-box"><p>RF EVP Rachel Spielman Talks Creativity in PR Week Op-Ed</p></a></div>
                                            
                                        </div>
                                    </div>
                                    <div class="highlights_page">
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/blogs-box"><p>Kathy Bloomgarden Blogs for Harvard Business Review</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/confidence-box"><p>RF Asia Studies Reveal Confidence High Among Chinese Luxury Consumers</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/online-box"><p>RF's New Study of Online Behavior Focuses On User Intent</p></a></div>
                                            
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/parc-box"><p>RFI Launches New Website Redesign for PARC (Palo Alto Research Center, Inc., a Xerox company)</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/hk-box"><p>Ruder Finn Social Media Practice Expands to Hong Kong</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/fight-box"><p>RF Asia Joins Fight Against Human Trafficking</p></a></div>
                                        </div>
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/scott-box"><p>RF's Scott Schneider Speaks at the UN Web Conference</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/lir-box"><p>NY Times Brings Attention to www.loveisrespect.com</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/david-box"><p>David Finn Honored as a Founding Father of Public Relations</p></a></div>
                                        </div>
                                    </div>
                                    <div class="highlights_page">
                                        <div class="highlights_block_col">
                                        	<div class="highlights_block"><a class="fancy-trigger" href="#/highlights/women-box"><p>RF Among Top 25 Women-Run Companies in New York</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/alvin-box"><p>CBS Evening News Features RF Client Alvin Ailey American Dance Theater</p></a></div>
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/smokeybear-box"><p>RFI Relaunches Smokeybear.com</p></a></div>
                                        </div>
                                        <div class="highlights_block_col">
                                            <div class="highlights_block"><a class="fancy-trigger" href="#/highlights/nick-box"><p>RF Diversifies UK Offering with New MD Nick Leonard</p></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    	</div>
                        <div id="collapse"><div style="margin-left:auto; margin-right:auto; width:73px;" ><img src="images/collapse.jpg" /></div></div>
                	</div>
            	</div>
        	</div>
   		</div>
	</div>
    <div id="voices" class="weirdDivIssue open">
        <div id="voicesBg"></div>
        <div id="voicesArea">
            <div id="voicesContentWrapper">
                <div id="voicesContent">
                    <div class="tab" id="newsTab"><img src="images/forumtab.gif" alt="voices" /></div>
                    <div id="voicesCenter" class="centerContent">
                        <div class="horiz_line"></div>
                        <div id="section1">
                            <div style="height:80%; border-right:1px solid #E0E0E0; margin-top:44px">
                                <a href="http://www.rfistudios.com/blog/" target="_blank"><div class="voices-title"><font color="#8CB204">RFI Studios</font> <font color="#FF9900">Blog</font></div></a>
                                <p class="voicesDescription" id="section1Description" style="margin: 0px 25px 0px 0px">The RFI Studios blog puts the digital world under a microscope, discovering what's new, overlooked, or downright interesting.</p>
                            </div>
                        </div>
                        <div id="section2">
                            <div class='sections' style="height:80%; border-right:1px solid #E0E0E0; margin-left:25px; margin-top:44px">
                                <a href="http://www.ruderfinn.com/blogs/ethics/" target="_blank"><div class="voices-title"><font color="#FF9900">Ethics</font> Blog</div></a>
                                <p class="voicesDescription" id="section2Description" style="margin: 0px 25px 0px 0px">Read Ruder Finn Ethics Officer Emmanuel Tchividjian's weekly posts discussing ethics through the lens of current events.</p>
                            </div>
                        </div>
                        <div id="section3">
                            <div class='sections' style="height:80%; border-right:0px solid #E0E0E0; margin-left:25px; margin-top:44px">
                                <a href="http://www.ruderfinn.co.uk/blogs/" target="_blank"><div class="voices-title"><font color="#FF9900">Dot Comms</font><font face="Times New Roman, Times, serif" color="#E0E0E0"> | </font> <font color="#8CB204">Dot Gov</font></div></a>
                                <p class="voicesDescription" id="section3Description" style="margin: 0px 25px 0px 0px">Dot Comms includes thoughts, comment and opinion on communications with a sprinkle of things that inspire us. Dot Gov is backbench banter – global political thought and opinion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
   <div id="footer"><div style="float:right; margin-top:10px;"><b>Ruder-Finn</b><div class="vertical_dotted_line" style="display:inline"> </div>Public Relations. Copyright 2013. All rights reserved.</div></div>
</div>
<!------------------------citi-past-future--------------------------------------------->
<div style="position:absolute; top:0px; left:-3000px;">
	<div class="popups" id="citi-past-future-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/citi_PastFuture_bg.jpg" /></div>
        <div class="popup-cnt">
            <h2>RF and the Council for Responsible Nutrition Foundation Launch WannaBeWell App&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
            <script src="//s7.addthis.com/js/250/addthis_widget.js"></script>
            
            <p class="h-line" style="margin-top:10px"></p>
            
            <div class="scrollable scroll scroll-on-white">
                <p>On Thursday, March 7, Ruder Finn won the prestigious PRWeek Award in the Employee Communications Campaign of the Year category for our work with Citi around their 200th anniversary.<br/><br/>

In the midst of the financial environment, Citi's 200th anniversary presented a unique opportunity to reignite passion in the company, celebrate a rich history of progress and growth and demonstrate a renewed appreciation for its employees, the heart of the organization. To achieve this, Ruder Finn and Citi developed the 200 Years Citi campaign, a yearlong series of creative initiatives to engage employees globally.<br/><br/>

Together, we launched creative programs such as Citi Music – a virtual orchestra and music video of 1,100 employees around the world signing the song Proud. We also created the Photo Challenge – a platform that allowed employees to submit their own photos around the core principles. The goal of the program was to reinforce Citi's new principles, and ended up receiving participation from more than 40 percent of employees with intranet access. We even involved children of Citi employees when we asked them to design the company's New Year's Card, which was distributed worldwide to clients, customers and employees. To commemorate the actual anniversary date, more than 110,000 employees around the world volunteered for their local communities on June 16, 2012 for Citi's Global Community Day.<br/><br/>

The award entry, titled "200 Years Citi: Igniting Employee Pride with a Global Celebration" outlines all of the great work we collaborated on with Citi over the past two years. It also shows how these initiatives, among many others we created, allowed Citi to generate awareness of the anniversary, drive global engagement and celebrate the 200th anniversary in a bold and innovative way with its 260,000 employees around the world.<br/><br/>

"This program was authentic, sincere, and genius in celebrating the diversity of its people and also humanizing the brand," noted a PRWeek judge.<br/><br/>

Citi and Ruder Finn competed against Employee Communications programs at AECOM, Fannie Mae, Chobani and Xerox.<br/><br/>

The 200 Years Citi program has received multiple awards from various outlets, including a Gold Stevie American Business Award in the employee communications video category, a PRSA Bronze Anvil Award for internal video programs, three Bronze Telly Awards for non-broadcast productions, and a Videographer Award of Excellence for music videos.</p>
            </div>			
            <p class="h-line"></p>
            <div class="clearit">&nbsp;</div>
        </div>
    </div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">
	<!------------------------citi200--------------------------------------------->
	<div class="popups" id="citi200-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/citi200.png" /></div>
        <div class="popup-cnt">
            <h2>Citi Celebrates 200 Years&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
            <script src="//s7.addthis.com/js/250/addthis_widget.js"></script>
            
            <p class="h-line"></p>
            
            <div class="scrollable scroll scroll-on-white">
                <p>On Saturday, June 16th, Citi will celebrate an important milestone - the company's 200th anniversary. From their beginnings in New York in 1812 to their current status as America's global bank, Citi has a rich history that has touched people all over the globe.  To commemorate the day, Citi is hosting their annual Global Community Day, which is an event that encourages employees around the world to sign up for various volunteer activities, such as teaching financial literacy, cleaning up parks, building new homes and delivering meals to those in need. RF is helping Citi to spread the word to employees and make this Citi's biggest year of participation ever.  We will also join the Citi team in giving back to the community in New York.  </p>
            </div>			
            <p class="h-line"></p>
            <div class="clearit">&nbsp;</div>
        </div>
    </div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">
    <!------------------------wannabewell--------------------------------------------->
	<div class="popups" id="wannabewell-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/wanna-be-well.jpg" /></div>
        <div class="popup-cnt">
            <h2>RF and the Council for Responsible Nutrition Foundation Launch WannaBeWell App&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
            <script src="//s7.addthis.com/js/250/addthis_widget.js"></script>
            
            <p class="h-line" style="margin-top:100px"></p>
            
            <div class="scrollable scroll scroll-on-white">
                <p>RFI Studios and the Council for Responsible Nutrition (CRN) Foundation created the WannaBeWell app as part of the Life…supplemented campaign. The app is a wellness resource that promotes healthier lifestyles with such features as a customizable Coach to educate and encourage users, a reward system for accomplishing wellness tasks, and reminders for users to take and restock supplements. It is available for free download to iPad and iPhone users. For each app download, a $1 donation (up to $13,500) will be made to Vitamin Angels to help reduce child mortality worldwide.</p>
            </div>			
            <p class="h-line"></p>
            <div class="clearit">&nbsp;</div>
        </div>
    </div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">
    <!------------------------fourseasons--------------------------------------------->
    <div class="popups" id="fourseasons-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/FourSeasons.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF Sister Agency Thunder Communications Selected by Four Seasons as AOR in China &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Four Seasons Hotels and Resorts has selected Thunder Communications, sister company of Ruder Finn, as its Agency of Record in China. Thunder will focus on building brand awareness, key message development and strategic PR projects,including new openings and campaign support for Four Seasons.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------mjf---------------------------------------------->
    <div class="popups" id="mjf-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/MJFF.png" /></div> 
		<div class="popup-cnt">
			<h2>RF Supports the Michael J. Fox Foundation in Driving Clinical Trial Participation&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Diane Sawyer held an exclusive sit down interview with Michael J. Fox and Debi Brooks, co-founder of the Michael J. Fox Foundation, for the ABC News/Yahoo! News "Newsmakers" series to discuss their progress towards finding a cure, the urgent need for patients to get involved in Parkinson's research, and Fox Trial Finder, the Fox Foundation's new online tool to help better match Parkinson's patients with clinical trials. In addition, Diane Sawyer profiled Michael J. Fox as "Person of the Week" on ABC News "World News with Diane Sawyer." To see the interview, visit <a href="http://abcnews.go.com/blogs/health/2012/05/18/michael-j-fox-looks-past-stem-cells-in-search-for-parkinsons-cure/" target="_blank">ABC News Site</a>.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">
    <!-----------------------parsons---------------------------------------------->
    
    <div class="popups" id="parsons-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/work6_parsons.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Ruder Finn Supports PPR's "Empowering Imagination" Design Competition for Parsons Students&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			<div class="scrollable scroll">
                <p>Ruder Finn is supporting PPR's partnership and design competition with Parsons The New School for Design and TheFancy.com. This unique competition will give two Parsons students the opportunity to have an internship within one of PPR's 16 luxury and sport & lifestyle brands including Gucci, Yves Saint Laurent, Alexander McQueen, Stella McCartney, PUMA, and Volcom. The internships can take place in any of PPR's global offices which include: Paris, New York, London, Rome, Milan, Boston, or Costa Mesa.</p>
				<p>The students' work will be featured on TheFancy.com – a website which is part magazine, part e-commerce and part social media site. The two winners of the competition will be showcased at Barneys New York's Madison Avenue store. The top candidates will present their work to a panel of fashion industry insiders, including Laurent Claquin (PPR), Simon Collins (Parsons), Joseph Einhorn (The Fancy), Dennis Freedman (Barneys New York), Candy Pratts Price (Vogue.com), Dree Hemingway (actress/model), and Vanessa Friedman (Financial Times). The partnership will be celebrated with a private event hosted by TheFancy during Fashion's Night Out in New York this September.</p>
				<p>Ruder Finn will support PPR to increase the awareness of this competition, and highlight how PPR is "Empowering Imagination", nurturing new talent, and committed to discovering the next generation of fashion designers.</p>
            </div>			
            
			<p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">
    <!-----------------------mhealth---------------------------------------------->
    <div class="popups" id="mhealth-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/mHealth.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF Launches Health IT Offering and Releases&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:95px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>On March 4, 2013, Ruder Finn, Inc. announced the launch of a new worldwide Health IT specialty offering. Combining the agency's deep understanding and widespread experience in the healthcare and technology markets, the aim of this new offering will be to help clients leverage emerging technologies to  improve care and meaningfully engage with stakeholders. As part of this launch, <a href="http://www.ruderfinn.com/pdf/Ruder%20Finn%20US%20mHealth%20report%20FINAL.pdf" target="_blank">Ruder Finn commissioned a survey</a> to gain insights on how U.S. consumers are using mobile devices to manage their health, as well as how technology platforms for healthcare services, specifically mobile apps, could be designed to better meet consumers' needs as users and patients moving forward.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">
    <!-----------------------bronze---------------------------------------------->
    <div class="popups" id="bronze-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/Anvil_awards.png" /></div> 
		<div class="popup-cnt">
			<h2>Ruder Finn Celebrates 2012 Bronze Anvil Wins&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn's work on behalf of Novartis, L'Oreal Matrix, and Citigroup won four prestigious Bronze Anvil awards from the PRSA.  In the Creative Tactics category, Novartis and Ruder Finn won for Turbo and Scott, the Tuberous Sclerosis Complex (TSC) eBook Program. In the category of Internal/Intranets, Citigroup and Ruder Finn won for the Celebrating 200 Years of Citi Employee Intranet site. Citigroup and Ruder Finn also won a Bronze Anvil for an Internal Video Program/Corporate Organization Feature for their work on Citi Music-Igniting Employee Pride Through Global Music Video. Additionally, Ruder Finn received a Bronze Anvil Award of Commendation in the Internal/Intranet category for L'Oreal Matrix Social Networking.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">    
    <!-----------------------AUA---------------------------------------------->
    <div class="popups" id="AUA-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/AUA_Foundation.jpg" /></div> 
		<div class="popup-cnt">
			<h2>AUA Foundation Launches Campaign Addressing Stigma of Overactive Bladder&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>On the heels of the fourth annual World Continence Week, the American Urological Association (AUA) Foundation has launched "It's Time to Talk About OAB," a nationwide education campaign designed to elevate awareness of Overactive Bladder</p>

				<p>In tandem with the campaign launch, the AUA Foundation has also kicked-off its official call-for-entries for the Voices of OAB contest. As part of the contest, the AUA Foundation is seeking first-hand stories from patients living with OAB. To enter the Voices of OAB contest, patients should visit the dedicated <a href="http://www.facebook.com/voicesofoab" target="_blank">Facebook page</a> to share an audio testimonial about how OAB impacts their daily life. Official contest rules, resources and news of interest are all available on the page. The entry period will run through August 31, 2012 and official winners will be announced later this fall. Winners of the Voices of OAB contest will receive tablets loaded with applications and OAB management tools, such as the Bladder Pal, which helps patients track their bladder function.</p>

				<p>OAB is a group of urinary symptoms that include a strong, uncontrollable urge to urinate at unexpected times, which may result in urine leakage (incontinence) and/or frequent urination during the day and night. Not all patients with OAB suffer from incontinence. The symptoms of OAB can occur if the muscles in a patient's bladder contract involuntarily when it isn't yet filled with urine. Sometimes the nerve signals between the brain and bladder go awry, sending messages to empty the bladder at unexpected times. This creates a strong urge to urinate before the bladder is full. Though not life-threatening, OAB can cause a significant impact on a patient's quality of life. Because people may be too embarrassed to share their symptoms or seek treatment, there are likely many more that suffer unnecessarily from OAB.</p>

				<p>"We know all too well that people with OAB often keep quiet about their symptoms," said Kathleen Kobashi, MD, Head of the Section of Urology and Renal Transplantation at Virginia Mason Medical Center; Co-Director of the Pelvic Floor Center; Director of the clinical fellowship in Pelvic Floor Medicine; Associate Clinical Professor of Urology at the University of Washington in Seattle, WA and member of the AUA Foundation's OAB Expert Bladder Panel. "We want men and women to know that they have options; there is no need to endure the discomfort of OAB alone or in silence. The condition is manageable, but people need to take the first step and speak up about their OAB."</p>

				<p>Mike Sheppard, Executive Director of the AUA Foundation added: "We are extremely optimistic about the impact of this hallmark education initiative, which will offer patients the help they need to take control of their OAB symptoms. It is our hope that by fostering open dialogue, especially through our Voices of OABcontest and physician interaction tips, we will have a positive impact on the health of Americans living with OAB."</p>

				<p>In addition to the Voices of OAB contest and Facebook presence, "It's Time to Talk About OAB" is anchored by a dedicated website, <a href="http://www.itstimetotalkaboutoab.org/" target="_blank">www.<wbr>ItsTimeToTalkAboutOAB.org</a>, which features helpful disease information, a monthly expert blog and patient-focused education materials. The AUA Foundation has also set-up a private discussion forum on <a href="http://www.Inspire.com" target="_blank">www.Inspire.com</a>, a leading provider of health and wellness communities.</p>

				<p>For more information about "It's Time to Talk About OAB" or the Voices of OABcontest, visit <a href="http://www.itstimetotalkaboutoab.org/" target="_blank">www.<wbr>ItsTimeToTalkAboutOAB.org</a>. The campaign was developed by the AUA Foundation with support from Astellas Pharma US, Inc.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">
    <!-----------------------gala---------------------------------------------->
    <div class="popups" id="gala-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/gala.jpg" /></div> 
		<div class="popup-cnt">
			<h2>The Economist chooses Ruder Finn as official PR Agency for The World in 2013 events in Singapore and Hong Kong &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>The Economist has chosen Ruder Finn as its 'Official PR Agency' for the exclusive and highly-anticipated The World in 2013 Gala Dinner in Singapore and Hong Kong. This is the first time The Economist is engaging a PR partner for the event, entering its fourth year in Hong Kong and now launching in Singapore.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!------------------------supplemental--------------------------------------------->
    <div class="popups" id="supplemental-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/supplemental.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Council for Responsible Nutrition Launches the Supplemental blog &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn congratulates CRN's launch of the Supplemental blog as part of the CRN Foundation's "<b>Life...supplemented</b>" consumer wellness campaign. The blog will educate and inform consumers on the subject of combining healthy diet, supplements and exercise to optimize one's health and wellbeing.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!------------------------miyanmar--------------------------------------------->
    <div class="popups" id="miyanmar-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/miyanmar.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Ruder Finn Supports Non-Profit Organization's Fight Against AIDs &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn supported Albina du Boisrouvray, the founder of non-profit organization FXB International, on a rare trip to Myanmar and India in February, where she witnessed first-hand how her projects are helping fight AIDS and poverty in developing countries. Albina du Boisrouvray has donated $100 million dollars, three quarters of her own personal assets, to focus full time on the rehabilitation of orphans and women with AIDS. During her successful trip to Southeast Asia, Albina traveled to Myanmar where she met with Aung San Suu Kyi, General Secretary of the National League for Democracy. She also traveled to Naypyitaw, the new capital of Myanmar, to discuss FXB's intent to help open the road to democracy, freedom, justice and equal opportunities. During her successful trip through Asia, the Countess visited sites such as FXB's vocational training for children and adults in Yangon and the Irrawaddy Delta, where FXB helped rebuild 335 houses after the cyclone Nargis. FXB's mission is to fight poverty and AIDS and support the world's orphans and vulnerable children by advocating for their needs and providing direct support to the families and communities that care for them. To learn more about FXB, visit <a href="http://www.fxb.org" target="_blank">www.fxb.org</a>. <br/><br/>A French Countess by birth and a former journalist, Albina's life changed forever in 1986 when her only son Francois Xavier Bagnoud, died from a helicopter crash during a rescue mission to Mali. He was only 24. Albina was shattered but she saw it as a mission to carry on her son's work - a rescue pilot who had flown over 300 missions. Albina decided to take on the job of rescuing people in her own way. By founding FXB 20 years ago, she was determined that her beloved son's legacy lived on. She saw an immediate need to address the AIDS epidemic in Myanmar, especially along the Thai border where many illegal brothels exist. She was one of the FIRST philanthropists in Burma and set up programs not only to help women with AIDS get access to healthcare, but also train them to make a living on their own. The RF team conducted proactive media outreach surrounding Albina's travels to India, Thailand and Myanmar to illuminate the work that is improving communities by providing access to education, medical services, health education, and entrepreneurial opportunities for women. <br/><br/>Albina du Boisrouvray is the recipient of numerous awards for her work as an activist and social entrepreneur including the Chevalier de la Legion d'Honneur (French equivalent of Knighthood) and the Lifetime Achievement Award by the 4th International Conference on AIDS. She believes that "everybody has a lobby, but not the children."</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------knowyourstats---------------------------------------------->
    <div class="popups" id="knowyourstats-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/know-your-stats.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Touchdown for Ruder Finn as the NFL and AUA Foundation Task Firm with Refreshing Know Your Stats Campaign&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:30px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>With the kick-off of the pro football season, RF launches season 3 of the "Know Your Stats" campaign, a joint initiative from the American Urological Association (AUA) Foundation and the National Football League (NFL) to educate men about prostate health and to stay in the game for life.  With the support of an increasing number of NFL greats and prostate cancer survivors, the national campaign is focused on turning awareness into action by encouraging men to know their risks and get tested.  The campaign continues to connect thousands of men, empowering them to take action to prevent prostate cancer – and exceeding expectations by generating more than 280 million media impressions.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
    <!------------------------bulldog--------------------------------------------->
    <div class="popups" id="bulldog-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/bulldog.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF Wins Gold Bulldog Digital/Social PR Award for<br/> Mountain Dew Throwback Shack &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>RFI Studios' "Mountain Dew Throwback Shack" received a Gold award in the in Best Microsite or Specialized Website category for the 2011 Bulldog Digital/Social PR Awards for Outstanding Achievement by Agencies and Individuals in PR and Corporate Communications. <br/><br/>The Bulldog Digital/Social PR Awards recognize the most outstanding achievements in corporate communications and publicity using online and social media tools and techniques. The awards are judged by journalists, who determined the winning entries from among hundreds of applicants. <br/><br/>The Throwback Shack is a digital experience designed to drive buzz around the return of Mountain Dew Throwback (the drink's original recipe) to the market as a permanent flavor. The richly detailed site brings users inside of Throwback Willy's abode, composed of various elaborately decorated rooms, and allows visitors to like and win retro-themed prizes.<br/><br/>RFI's work on the Throwback Shack and the other winning campaigns will be featured in the Bulldog Awards Digital/Social Awards Hall of Fame magazine and the Bulldog Reporter's Daily Dog online trade journal.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!------------------------caribou--------------------------------------------->
    <div class="popups" id="caribou-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/caribou.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF and Caribou Coffee to Partner on Brand-Building PR and Social Media Programming &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>RF will help the company expand brand awareness as it grows in current markets and expands to new ones, in addition to supporting the company's social media efforts with insights and strategy. The agency will boost consumer knowledge of "the Caribou experience," from its consumer packaged goods and food services to the brand's retail business.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
     <!------------------------india--------------------------------------------->
    <div class="popups" id="india-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/india.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF Announces Its First Office in India &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Demonstrating a commitment to securing a larger role in the fast growing South Asian economy, Ruder Finn has opened its first office in India. India is the fastest growing global economy after China and has recorded consistently high rates of growth since 2003, with limited downside even during the global economic crisis. Located in the capital city of New Delhi, the office will significantly extend RF's presence in the Asia-Pacific region.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
     <!------------------------parkinsons--------------------------------------------->
    <div class="popups" id="parkinsons-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/parkinsons.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Activating Awareness and Driving Progress Toward a Parkinson's Cure: The Michael J. Fox Foundation &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn is supporting <a href="http://www.michaeljfox.org" target="_blank">The Michael J. Fox Foundation (MJFF)</a> with both traditional PR and digital services to help them better reach and engage their diverse audiences about the important scientific initiatives MJFF is leading and how they are transforming the state of Parkinson's research today. MJFF is dedicated to finding a cure for Parkinson's Disease and supporting the development of improved therapies for Parkinson's patients.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	    
     <!------------------------cfcf--------------------------------------------->
    <div class="popups" id="cfcf-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/cfcf.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Big Apple Award Win in the Marketing Consumer Services: Healthcare Catergory &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<br/>
			<div class="scrollable scroll scroll-on-white">
                <p>Congratulations to Abbot and Ruder Finn, for being awarded the 2011 PRSA-NY Big Apple Award in the Marketing Consumer Services: Healthcare category for the CFCareForward Scholarship program. Ruder Finn is proud to support Abbot further extend its nearly 25-year-commitment of helping people with cystic fibrosis (CF) manage their health. The CFCareForward program expands this tradition, offering comprehensive support to CF families through nutritional, educational and financial resources. Recognizing the financial burdens that exist for many CF families, the CFCareForward Scholarship honors young adults with CF as they pursue their goals of higher education.</p>
            </div>			
			<div class="clearit">&nbsp;</div>
			<p class="h-line">&nbsp;</p>
			<p class="orange-more"><a target="_blank" href="http://www.cfcareforwardscholarship.com/">&#8250; VISIT CF CARE FORWARD SCHOLARSHIP</a></p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	    
    <!------------------------fandewmonium--------------------------------------------->
    <div class="popups" id="fandewmonium-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/fandewmonium.jpg" /></div> 
		<div class="popup-cnt">
			<h2>FanDEWmonium &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>PepsiCo's Mountain Dew launched FanDEWmonium, an online contest that taps the collective intelligence of Diet Mountain Dew's most passionate fans to choose the brand's newest flavor. Popular ESPN presenters Kenny Mayne and Erin Andrews faced off Facebook with a short video calling on consumers to vote their favourite flavor. To futher build buzz, Mayne crashed a radio row at the Superbowl, managing to secure more than fifteen radio and three placements, while Andrews embarked on a national radio tour during March Maddness.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
            <p class="orange-more"><a target="_blank" href="http://www.dietdewchallenge.com/">&#8250; VISIT DIET MOUNTAIN DEW FANDEWMONIUM SITE</a></p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!------------------------guangzhou--------------------------------------------->
    <div class="popups" id="guangzhou-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/guangzhou.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Unveiling of the Guangzhou Opera House &nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>The world's most celebrated architect, Zaha Hadid, recently unveiled the remarkable Guangzhou OperaHouse, a unique 70,000 sq meter creation that blends Chinese cultural traditions with innovative structural and acoustic engineering. Ruder Finn provided a successful nationwide media communications for Zaha Hadid which included one-on-one interviews with CNN, Vogue and Bazaar Art. Thunder Communications, Ruder Finn's newly acquired company was responsible for the 3-day event, beginning with a cocktail reception at the Opera House for nearly 2,000 guests.</p><p>"This event is another step in Ruder Finn's tradition of working with visionaries in the Arts, Culture and Design areas who today help shape our world of tomorrow." said Jean-Michel Dumont, Chairman, Ruder Finn Asia. "We feel privileged to be part of Ms Zaha Hadid's amazing and dynamic achievement in China!"</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
		</div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!------------------------lyovel--------------------------------------------->
    <div class="popups" id="lyovel-box" style="width:938px; height: 548px">
    	<div class="popup-bgImage"><img image-link="images/popups/lyovel.jpg" /></div> 
		<div class="popup-cnt">
			<h2><a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Lyovel, a popular French vending machine supplier, has worked for 10 years to make coffee break areas a more environment-friendly and health-concerned zone for the benefit of everyone</p>
			</div>			
			<div class="clearit">&nbsp;</div>
		</div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------matrix---------------------------------------------->
    <div class="popups" id="matrix-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/matrix.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Shear Excitement Over L'Oreal Matrix Site&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:30px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>When L'Oreal Matrix, a leading professional hair care and coloring company in the United States, needed an online platform to connect their extensive community of passionate stylists, RFI came to the rescue. Working closely with the Matrix team, RFI created <a href="http://www.mymatrixfamily.com" target="_blank">MyMatrixFamily.com</a>, a customized social networking site for salon owners and stylists. The fresh, lively and contemporary site puts the utmost importance on its community, elevating users' personal stories and photos and integrating them with hot topics of conversation.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
            <p class="orange-more"><a target="_blank" href="http://www.mymatrixfamily.com/">&#8250; VISIT MYMATRIXFAMILY.COM</a></p>
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------ILSI---------------------------------------------->
    <div class="popups" id="ILSI-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/ILSI.png" /></div> 
		<div class="popup-cnt">
			<h2>i20 Summit: Institute for Large Scale Innovation&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:30px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Innovation leaders from twenty-two developed and emerging economies across six continents who are part of the non-governmental group the "i20" (including Ruder Finnís Chief Innovation Officer Michael Schubert) recently came together to exchange case studies, share best practices, and discuss how innovation capacities can be mobilized to address pressing global issues such as climate change, disease, poverty, and security.</p><br/>
<p>"This Summit marked a turning point in harnessing the collective intelligence and experience of so many innovation leaders, not for the benefit of any single enterprise or country, but to help address major problems facing global society,I said Dr. John Kao, founder and chairman of <a href="http://www.largescaleinnovation.com/" target="_blank">Institute for Large-Scale Innovation (ILSI)</a> that supports the i20.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------WHCC---------------------------------------------->
    <div class="popups" id="WHCC-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/WHCC.jpg" /></div> 
		<div class="popup-cnt">
			<h2>The 8th Annual World Health Care Congress&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:30px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>As the official public relations partner of the 8th <a href="http://www.worldhealthtalks.com/interviews.php" target="_blank">Annual World Health Care</a> Congress that took place in Washington, DC April 4-6th, Ruder Finn developed and implemented a media strategy to obtain coverage from top tier journalists; as well as coordinating speaking invitations for some of todayís foremost healthcare and corporate leaders. This year, the WHCC brought together over 1,800 CEOs and senior leaders from the largest providers, payers, employers and high-ranking government officials for a pan-industry discussion of the latest trends and best practices for improving the quality of care while reducing costs. Topics addressed included health reform, intersection of business and healthcare, chronic care, health IT summit, employer & HR/benefits, health plans, hospitals and physician practice.</p><br/>
<p>A new highlight this year was <a href="http://www.worldcongress.com/events/HR11000/" target="_blank">The World Health Innovation Summit</a>, a three-day program focused on how innovations are improving the quality of care in developing counties, and how these innovations could be applied to the developed world. As part of this effort The Global Medical Travel Forum convened stakeholders to discuss the many challenges and opportunities in the global health care market.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    	<!-----------------------kathy---------------------------------------------->
    <div class="popups" id="kathy-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/kathy-bg.jpg" /></div> 
		<div class="popup-cnt">
			<h2>CEO Kathy Bloomgarden on How Social Media Helped PR&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<br/>
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn CEO Kathy Bloomgarden talked to <a href="http://www.odwyerpr.com/blog/index.php?/archives/2112-Rankings-Social-Media-Helps-Boom-Times-Return.html" target="_blank">O'Dwyer's</a> on how social media has helped boom times return to PR.</p><br/><p>"Social and digital media are now part of almost all of our PR programs. Online channels have changed conversation and engagement with all stakeholder groups.</p><br/><p>"Ruder Finn Innovation Studios is a critical partner in helping us to create integrated campaigns with social media expertise deeply embedded in all of our practices. This has created more robust programs with larger budgets. Activism and market uncertainty have reinforced corporate reputation efforts and issues management plans."</p><br/><p>Read the full interview with Kathy <font color="#ff9201"><a href="http://www.odwyerpr.com/blog/index.php?/archives/2112-Rankings-Social-Media-Helps-Boom-Times-Return.html" target="_blank">here</a></font></p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
    <!-----------------------rfcharity---------------------------------------------->
    <div class="popups" id="rfcharity-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/RFCharityBox.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF Launches "Ruder Finn Cares" Charity Drive&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:30px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>When Ruder Finn launched the first-ever "Ruder Finn Cares" charity drive just before the Thanksgiving holiday this year, nearly all of the agency's 200 New York-based staffers jumped into action - donating canned food, toiletries, toys, and even old prom dresses, to the cause.<br/><br/>
As part of the effort, Ruder Finn staff members are donating goods on behalf of seven local non-profit organizations, all of which connect daily with thousands of New Yorkers in need. Ruder Finn staff members at all levels are participating, and not just by making donations - several staffers volunteered to serve as "charity leads" - organizing collections, promoting the charities internally and liaising directly with each charity to ensure their needs are met.<br/><br/>
"This holiday we wanted to do something to give back to our fellow New Yorkers in a way we never have before," said Kathy Bloomgarden, Ruder Finn's CEO. "I continue to be so impressed by our staff's eagerness to participate and their willingness to give. I hope this will be the start of a great holiday tradition at Ruder Finn."</p>
			</div>	
            <p class="h-line">&nbsp;</p>		
			<div class="clearit">&nbsp;</div>
            
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------rfii---------------------------------------------->
    <div class="popups" id="rfii-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/rfii-bg.jpg" /></div> 
		<div class="popup-cnt">
			<h2>The Reason You Go Online&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:30px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>The Ruder Finn Intent Index was developed to better understand the consumer motivations for going online, identifying intent as the key driver of social media. This online ongoing research study reveals seven core intents: socialize, have fun, learn, express yourself, advocate, do business, and shop. With the capability of being narrowed down for specific industries, the Intent Index helps businesses improve the context and utility of their online marketing content.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
            <p class="orange-more"><a target="_blank" href="http://www.intentindex.com/">&#8250; VISIT INTENT INDEX</a></p>
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------reinvention---------------------------------------------->
    <div class="popups general-box" id="reinvention-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>The Reinvention of Chinese Brands: SVP Elan Shou in CNN&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn Beijing SVP Elan Chou was recently quoted in a CNN GO article about the reinvention of Chinese brands. In the piece, Elan specifically touches on how nostalgia has become a powerful marketing tool in Chinese branding.</p><p>"With all these brands, some factors are similar -- blending the old and new to create a unique style. So far it's still a niche market, although the fans are growing,"</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------dewmo---------------------------------------------->
    <div class="popups general-box" id="dewmo-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>Launching Mountain Dew White Out&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>To generate excitement around the 2010 launch of Mountain Dew White Out. PepsiCo and Ruder Finn launched a series of viral videos featuring Curb Your Enthusiasm star JB Smoove, In addition, YouTube All-Stars were engaged to create their own white out-themed videos. For example, YouTube star Tobuscus' created "Trapped in a Studio (Featuring Interactive Whiteness)", which received nearly 1 million views during its first week online, making it the third most viewed video on YouTube that week.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------senior---------------------------------------------->
    <div class="popups general-box" id="senior-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>Senior Appointments Strengthen Asian Footprint&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Coming off a decade of dynamic double-digit growth in China, Ruder Finn continues to strengthen ourbusiness within Asia's fastest growing economic centers. Newly appointed Senior Vice President Elan Shou will oversee and consolidate the work of three of the offices in China, while continuing to maintain the business' double-digit growth. As the former head of Ruder Finn Shanghai, a position she held until 2008, Elan was responsible for growing the business from an office of 10 into a 50 person-strong operation renowned for its innovative and strategic work.<br/><br/>
Overseeing the Singapore office is Yu Poh Leng, who was recently promoted to General Manager Ruder Finn Singapore. Poh Leng brings more than 20 years of high-level public relations experience, most recently as the Executive Director of the Corporate and Marketing Communications team at Citigate.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------emmy---------------------------------------------->
    <div class="popups general-box" id="emmy-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>Emmy Award-nominated Television Producer Moves to Ruder Finn&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<br/>
			<div class="scrollable scroll scroll-on-white">
                <p>Adding to an already impressive list of former executive level journalists on their team, Ruder Finn today announced that Maryam Ayromlou has joined the agency's New York office as Senior Vice President. Ayromlou comes to Ruder Finn from CBS News/The Early Show, where she was the supervising producer, overseeing the planning of all interview-driven segments and garnering herself an Emmy nomination.<br/><br/>
Utilizing her broadcast journalism experience of more than 16 years, Ayromlou will provide unique insight into how the broadcast media can help Ruder Finn's clients raise their profile and increase sales. Ms. Ayromlou has worked at some of the top networks including MSNBC, Fox News Channel, and CBS News. She has had an extensive and gripping career, from working with Tom Brokaw on assignment in Iran, to producing MSNBC's 2004 election coverage and presidential debates.<br/><br/>
"We are pleased to add someone of Maryam's caliber to our firm," says Kathy Bloomgarden, CEO. "Her expertise in knowing how the media thinks and operates, her experience in crafting stories that build credibility, and her long list of media contacts will serve our clients for years to come."<br/><br/>
Ayromlou spent close to eight years at MSNBC as primetime senior producer, where she worked on a number of programs including "Countdown with Keith Olbermann." She was on loan to NBC News and traveled to Iraq for the start of the war in 2003 where she was field producing spots for Nightly News and the Today Show. She also worked on "On Location with Ashleigh Banfield", where she traveled on the road for the search for Elizabeth Smart among other top news stories. She traveled to Iran on a half dozen occasions for NBC News, and covered the Presidential elections in Iran with Tom Brokaw during Mahmoud Ahmadinejad's rise to office. Ayromlou worked as a senior producer on MSNBC's documentaries and specials unit where she worked on prestigious programs like "Silicon Summit" hosted by Tom Brokaw as well as the network's coverage on the Presidential Inauguration and President Reagan's funeral. At Fox News Channel, Ms. Ayromlou was one of the senior producers who helped launch "Happening Now" a fast-paced live two-hour daytime news program on the number one cable news network.<br/><br/>
"Ruder Finn is a company which I have long respected. As a global company, their leadership in corporate and public trust sets them apart, and I'm greatly looking forward to joining the team. My position demonstrates the agency's commitment to seeking new and innovative approaches to servicing its clients," said Ayromlou.<br/><br/>
Ayromlou is a graduate of Cornell University and holds an MBA degree from New York University. She lives in New York City with her husband and two children.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
    <!-----------------------callofduty---------------------------------------------->
    <div class="popups" id="callofduty-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/callofduty.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF Promotes the Return of Mountain Dew Game Fuel and its partnership with Call of Duty&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<p class="h-line" style="margin-top:30px">&nbsp;</p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>RF recently generated national awareness around a strategic partnership between Mountain Dew® (DEW) and Activision for the launches of Mtn Dew Game Fuel® and Call of Duty®: Modern Warfare® 3 (COD: MW3), the latest installment in Activision's 
top-selling video game franchise. Through this partnership, DEW is celebrating the return of the original Mtn Dew Game Fuel—a citrus cherry flavor—and the debut of a brand-new, tropical flavor of Mtn Dew Game Fuel that was developed with Activision especially for COD: MW3.</p>
			</div>			
            <p class="h-line">&nbsp;</p>
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------kerry---------------------------------------------->
    <div class="popups general-box" id="kerry-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>Former Bloomberg BusinessWeek Senior Correspondent Kerry Capell Joins RF as SVP Focusing on Global Multinational Accounts&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn, one of the world's largest, independent public relations agencies, has named former Bloomberg BusinessWeek London senior correspondent Kerry Capell as a Senior Vice President. She will co tinue to be based in Europe.<br/><br/>
With fifteen years of reporting experience covering global economic and corporate trends, innovation and strategic initiatives across all industry sectors, Capell will provide senior level counsel for Ruder Finn's multinational clients.<br/><br/>
Capell will report to Kathy Bloomgarden, Co-CEO of Ruder Finn, Inc.<br/><br/>
"In a landscape where large businesses are more and more under scrutiny from the public and the media, someone with the perspective of one of the world's leading business publications is a critical asset for us and for our clients," said Bloomgarden.<br/><br/>
Capell joined Bloomberg BusinessWeek in 1995 and assumed the position as London senior correspondent in 1999. Prior to this role, she was an international finance editor and a staff editor in the Personal Business section. Before Capell joined BusinessWeek, she was the managing editor of Financial Planning magazine.<br/><br/>
"I'm excited to join Ruder Finn, especially at a time when companies are often on the defensive in the wake of the global economic crisis and deflated public trust," said Capell. "Conveying the value companies are adding and the good they're doing is more important than ever, especially in the current fragmented media environment."<br/><br/>
"We're very pleased Kerry is joining us," Bloomgarden added. "Her addition to the Ruder Finn team represents our continuing commitment to understanding and responding to the changing media environment."</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------prsa---------------------------------------------->
    <div class="popups general-box" id="prsa-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Recieves 3 Silver Anvil Nominations&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn has received three Silver Anvil Nominations from the PRSA. The nominations, for Quallion, BMS and Novartis campaigns, are among only 134 out of 823 entries.<br/><br/>
The Silver Anvil award ceremony will be held on June 3 in New York City.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------solvay---------------------------------------------->
    <div class="popups general-box" id="solvay-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Celebrates Big Apple Honors for Novartis, Solvay Campaigns&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>RF's Healthcare group received dual honors at the 23rd Annual Big Apple Awards on May 27th, winning a Big Apple award for "Hit your CML Target with Kareem Abdul-Jabbar", while the SolvayCARES Scholarship campaign garnered an Honorable Mention.<br/><br/>
For the Novartis campaign, RF Healthcare and RFI developed a Facebook Page for Chronic Myeloid Leukemia (CML) patient and advocate Kareem Abdul-Jabbar that helped spread the word that CML is a manageable disease with treatment. The campaign drove traffic to <a href="http://www.cmlearth.com/" target="_blank" style="color:#F90">CML Earth</a>, where patients can connect with each other and share their personal stories.<br/><br/>
RF Healthcare and RFI also worked together on the Solvay Pharmaceuticals SolvayCARES Scholarship campaign to highlight the creativity and positive spirit of 40 students with Cystic Fibrosis, a terminal inherited illness.<br/><br/>
32 Big Apple Awards and 20 Honorable Mentions were presented at the ceremony dinner at the Hudson Theatre, Millennium Broadway Hotel. The awards are presented annually by the New York Chapter of the Public Relations Society of America <a href="http://www.prsany.org/" target="_blank" style="color:#F90">(PRSA-NY)</a> and recognize excellence in public relations.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------webby---------------------------------------------->
    <div class="popups" id="webby-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/webby-bg.jpg" /></div> 
		<div class="popup-cnt">
			<h2>2010 Webby Awards Recognize RFI Studios' Campaigns for Verizon Foundation and PARC&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<br/>
            <p class="h-line">&nbsp;</p>
			<div class="scrollable scroll scroll-on-white">
                <p>The 14th Annual <a href="http://www.webbyawards.com/" target="_blank">Webby Awards</a> has chosen RFI Studios campaigns for readwritethink.org and PARC.com as Official Honorees.<br/><br/>
<a href="http://www.readwritethink.org/" target="_blank">Read Write Think</a> is an Honoree in the Education category. It is a leading site for literary educators, and a member of the Thinkfinity online educational consortium sponsored by the Verizon Foundation. <a href="http://www.parc.com/" target="_blank">The PARC</a> site is an Honoree in the Corporate Communications Category. PARC, or the Palo Alto Research Center is a leading technology and innovation center.<br/><br/>
The Webby Awards gives the distinction of Official Honoree to the top 15% of all work entered that exhibits remarkable achievements. For the 2010 awards, the Webbys received 10,000 entries from all 50 states and over 60 countries.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
    <!-----------------------internet---------------------------------------------->
    <div class="popups" id="internet-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/internet-bg.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF's New Study Reveals 'Intent' Behind Mobile Internet Use&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
			<p class="h-line">&nbsp;</p>
			<div class="scrollable scroll scroll-on-white">
                <p>According to a new survey announced today by Ruder Finn, one of the world's largest, independent public relations agencies, Americans are spending an average of 2.7 hours per day on the mobile Internet – connecting socially, managing their personal finances, and even as a means for advocacy. Ruder Finn's first-ever <a href="http://www.intentindex.com/mobile/" target="_blank"><i>Mobile Intent Index</i></a> studies mobile phone user habits and explores the underlying reasons – or intent – people have for accessing the mobile Internet.
</p><p>According to the <i>Mobile Intent Index</i>, mobile phone users do not access the mobile Internet for educational purposes or for creative expression, as the transitory nature of mobile intent goes against spending time to engage in discussions about personal issues. As expected, usage by gender and age differ – with men accessing the mobile Internet 'to escape,' and women making others laugh.
</p><p>"Mobile phones have become the way people organize their lives—managing finances, connecting with friends, purchasing products—and this trend will only accelerate," said Kathy Bloomgarden, Ruder Finn co-CEO. "The mobile phone is becoming the most powerful online device, and the faster businesses can adapt their services to harness consumer mobile <i>intent</i>, the more rapidly they can capitalize on understanding their customers to drive growth."
</p><p>The <i>Mobile Intent Index</i> asked respondents how frequently they use their mobile phones to go online for 295 reasons.  The results show that immediacy is the primary factor driving behavior.
</p><p>"Mobile phone use goes beyond instant gratification," said Marty McGough, director, Ruder Finn Insights. "Our survey data shows that people use their mobile phones out of necessity for instant access to the Web whether it's to conduct business with the most recent information or advocate on the spot on issues of pressing concern and breaking news."
</p><p>Additionally, the data underscores the rise of phone applications.  Three in five (61%) respondents download applications at least once per month while 36 percent of users download applications from social networking sites at least once per month.
</p><p>Michael Schubert, Chief Innovation Officer overseeing digital strategy at Ruder Finn added, "Mobile technology means that people no longer have to wait until they're in front of their computers to do their work. And people are taking advantage of that; using mobile devices to do their core work while using desktops to navigate longer format and higher bandwidth content and tools. This is resulting in huge changes – and opportunities – across industries, making mobile an essential channel in keeping businesses competitive."
</p><p>The <i>Mobile Intent Index</i> follows Ruder Finn's earlier launch of its <i>Intent Index</i>, which provides a new view on why people go online and redefines how we look at demographics.
</p><p><b><i>Mobile Intent Index</i> Survey Results</b>
</p><p>Mobile phones are a social connector.  91% of mobile users go online to socialize, compared to only 79% of traditional users.  They are using their mobile phones "at the moment" to connect with others.  The top socialize intents are:
<ul>
<li>Instant message – 62%</li>
<li>Forward e-mails (58%), content (40%) and photos (38%)</li>
<li>Post comments on social networking sites – 45%</li>
<li>Connect to people on social networking sites – 43%</li>
</ul>
</p><p><b>Mobile phones are a personal finance tool.</b>  Mobile phone users (60%) are 1.3 times more likely to go online to do business compared to traditional users (45%).  In fact, they are 1.6 times more likely to manage finances (62% versus 39%).  Mobile phones offer users the chance to conduct business in real time, and this is the major reason that business-related intents are so high.  The top business intents are:
<ul>
<li>Online banking – 46%</li>
<li>Check bill/credit card status – 40%</li>
<li>Read business blogs – 33%</li>
</ul>
</p><p><b>Mobile phones are used for advocacy.</b>  Nearly half of mobile users (49%) go online to advocate compared to only 41% of traditional users.  In fact, they (67%) are 1.4 times more likely than traditional users (47%) to activate support.  Mobile phones offer users the chance to immediately respond to breaking news, whether it is a new piece of legislation or even the latest ongoing development of a corporation or politician under siege.  The top advocacy intents are:
<ul>
<li>Activate support for a cause or position – 67%</li>
<li>Post opinions on social networking sites – 45%</li>
<li>Forward content on a cause – 40%</li>
</ul>
</p><p><b>Mobile phones are not a learning tool.</b>  Mobile users (76%) are much less likely than all users (92%) to go online to learn.  Learning requires time and patience, something mobile phone users are in short supply of.  
<ul>
<li>They (64%) are 1.5 times less likely than the traditional user (96%) to go online to educate themselves</li>
<li>They (64%) are 1.4 times less likely than the traditional user (94%) to go online to research.</li>
<li>They (95%) are more likely than the traditional user (86%) to go online to keep informed.</li>
</ul>
</p><p><b>Mobile phones aren't used for creative expression.</b>  Mobile users are 1.3 times less likely to personally express themselves online (42%) compared to traditional users (54%).  The transitory nature of their intents speaks against spending the time to engage in discussions about personal issues while using their mobile phones.
<ul>
<li>They (41%) are 1.7 times less likely than the traditional user (70%) to go online to opine.</li>
<li>They (24%) are 1.8 times less likely than the traditional user (44%) to go online to be creative.</li>
</ul>
</p><p><b>Intent of Mobile Phone Users Differ by Gender and Age</b>
<ul>
<li>Men look at prices but women buy.  When shopping, men are more likely than women to compare prices (47% vs. 30%), but women are more likely to purchase (40% vs. 30%).</li>
<li>Women express themselves while men do business.  Women are much more likely than men to personally express themselves (49% vs. 35%) but men are much more likely to do business (62% vs. 57%).</li>
<li>Men want to get away.  Men (79%) are much more likely than women (61%) to use their mobile phone to simply "escape."</li>
<li>Women want to make others laugh.  Many more women (70%) than men (58%) go online using their mobile devices to entertain others.</li>
<li>Youth are the target for retailers. Youth (44%) are more likely to shop over their mobile phones than the average mobile user (35%).</li>
<li>Seniors want to learn. Seniors (82%) are much more likely than the traditional user (64%) to use their mobile phones to educate themselves.</li>
</ul>
</p><p><b>About the <i>Mobile Intent Index</i></b> <a href="http://intentindex.com/mobile" target="_blank">(http://intentindex.com/mobile)</a>
</p><p>Ruder Finn's <i>Mobile Intent Index</i> is the first study of its kind to examine the underlying motivations or reasons – intents – people have for using their mobile phones.  The representative and Census-balanced online study of 500 American adults 18 years of age and older who "use their mobile device to go online or to access the Internet" was conducted in November 2009 by RF Insights among respondents who belong to Western Wats'  large consumer panel, Opinion Outpost.  The margin of error is +/- 4.4% (95th confidence interval).</p>
			</div>	
            <p class="h-line">&nbsp;</p>		
			<div class="clearit">&nbsp;</div>
            <p class="orange-more"><a target="_blank" href="http://www.intentindex.com/">&#8250; VISIT INTENT INDEX</a></p>
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
 </div>
<div style="position:absolute; top:0px; left:-3000px;">	   
    <!-----------------------teens---------------------------------------------->
    <div class="popups" id="teens-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/teens-bg.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Study Shows Teens are the New Digital influencers, Driving Moms Online&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<br/>
            <p class="h-line">&nbsp;</p>
			<div class="scrollable scroll scroll-on-white">
                 <p>Ruder Finn, one of the world's largest, independent public relations agencies, announced results of a new study of mothers, which found that teenagers, as "digital mavens," are strongly influencing their mothers to join online social networks.
</p><br/><p>In a study conducted by a Ruder Finn employee in pursuit of her Master's degree, mothers were encouraged in part by their teenage children and these online social networks have established a new space for the two demographics to engage.
</p><p>"Understanding why mothers engage in online social networks can help frame a more meaningful dialogue across the full spectrum of digital platforms," said Michael Schubert, Chief Innovation Officer overseeing digital strategy at Ruder Finn.
</p><br/><p>Results from a nationally representative, Census-balanced survey of 473 mothers with teenage children living in the home found that:
</p><br/><p><b>Mothers were driven by their children's online behavior to join social networking sites</b>
<ul>
<li>61% of mothers were influenced to join social networking sites right away – less than one month after an initial conversation with their teenager</li>
<li>73% are thankful that their child introduced them to social networking sites</li>
<li>71% of mothers want to make sure that content is not harmful to their teenagers</li>
</ul>
</p><br/><p>"Teenagers are often early adopters of new technology, with mothers following closely behind," said Stephanie Waters, Senior Account Supervisor at Ruder Finn and Master's recipient. "I sought to determine whether children exerted an influence over their mothers' initial decisions to join a social network and how the two interact in the online space."
</p><br/><p>The study, titled "Mothers & Original Motivations for Joining Online Social Networking Sites: Research Underscores Children's Influence in Process" also showed that:
</p><br/><p><b>Mothers and teens are also connected through online social networking sites and it is driving off-line conversation between the two</b>
<ul>
<li>91% of mothers have had discussions with their children about online social networking sites and their child's behavior online</li>
<li>57% of mothers are "friends" on the same social networking sites as their children</li>
<li>78% of mothers reported that their children did not resist their request to connect online</li>
</ul>
</p><br/><p>"Research on social networking site usage and implications on society are still very new with minimal available data," said Marty McGough, Director of Ruder Finn Insights. "This niche study of mother's intentions for joining online social networks adds to the current body and sets the stage for follow up research to more deeply understand its implications."
</p><br/><p>About the Survey
</p><br/><p>The survey is based on a cross-sectional, nationally-representative and Census balanced sample of 473 women with Internet access who have teenage children, ages 13-18, living at home. The margin of error is +/- 5% at the 95th confidence interval level and standard deviation of 2.0 across all demographic measures. Results from the survey were cut to gauge any differences between women with older teenagers (16-18) versus those with younger teenagers (13-18). Following the survey, in-depth-interviews were conducted with mothers who fit the demographic profile to gather anecdotal insights.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
 </div>
<div style="position:absolute; top:0px; left:-3000px;">	   
    <!-----------------------kpa---------------------------------------------->
    <div class="popups general-box" id="kpa-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Wins King Pharmaceuticals Account&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn's work for the Bristol, TN-based drug company will be comprised of branding and corporate communications supporting King's pain brands.<br/><br/>
RF was one of three agencies that pitched to King in the final round.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	    
    <!-----------------------kaj---------------------------------------------->
    <div class="popups" id="kaj-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/kaj-bg.jpg" /></div> 
		<div class="popup-cnt">
			<h2>Kareem Abdul-Jabbar<br /><span>CML Patient and Advocate</span>&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2>
            <p class="h-line">&nbsp;</p>
			<div class="scrollable scroll scroll-on-white">
                 <p>Ruder Finn New York, working on behalf of Novartis Oncology, has launched a new patient education campaign with the announcement that basketball legend Kareem Abdul-Jabbar has chronic myeloid leukemia (CML). By beginning a public dialogue, Abdul-Jabbar hopes to raise awareness about the disease and encourage fellow patients to work with their doctors for the best possible outcomes. A series of high profile one-on-one embargoed interviews were conducted at the RF offices on November 9, including reporters from the Associated Press, <i>The New York Times, People,</i> CNN, <i>Los Angeles Times</i> and "Good Morning America."</p><p>Today, we've seen a significant volume of press coverage of the announcement. The story is also buzzing across social networks as a "top trend" on Twitter and with the launch of a new <a href="http://www.facebook.com/KareemCML?ref=ts" target="_blank">Facebook fan page</a>. Abdul-Jabbar is also encouraging others to visit <a href="http://www.cmlalliance.com/index.jsp?usertrack.filter_applied=true&NovaId=2935376878977625571" target="_blank">CMLAlliance</a> and <a href="http://www.cmlearth.com/index.jsp" target="_blank">CML Earth</a>, Ruder Finn and Novartis's groundbreaking online network connecting the CML community where he is now a featured member.</p>
			</div>	
             <p class="h-line">&nbsp;</p>
            <p class="orange-more"><a target="_blank" href="http://www.facebook.com/KareemCML?ref=ts">&#8250; VISIT KAREEM'S FACEBOOK FAN</a></p>		
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------pepsi---------------------------------------------->
    <div class="popups general-box" id="pepsi-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Raises Awareness of Pepsi's Longstanding Commitment to Workplace Equality&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>RFI Studios and PepsiCo Inc.are pleased to announce the launch of <a href="http://www.realpepsichallenge.com/" target="_blank">www.realpepsichallenge.com</a>, a site that chronicles Pepsi's unique choice to employ African-Americans during 1940-1951, well before the Civil Rights movement made workplace equality a prominent issue in America.<br/><br/>
Pepsi-Cola initially hired 12 black salesmen in 1940 to boost profits, but over the following decade and beyond, the extraordinary sales team also advanced the notion of workforce diversity and revolutionized the image of African-Americans in advertising, portraying them as typical middle-class consumers -- a revelation at the time.
Even as the team eventually was dispersed in the early 1950s, its legacy was evident, as African-American professionals started to join corporations in increasing numbers and the clout of the black consumer finally was recognized.<br/><br/>
<a href="http://www.realpepsichallenge.com/" target="_blank">www.realpepsichallenge.com</a> includes an interactive timeline, an archive of newspaper clippings of the team, advertisements, and quotes from the team's members. The site begins with a visually rich flash intro, and a high level of design is maintained throughout the site, highlighting the impact of this moment in Pepsi and America's history.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
    <!-----------------------rachel---------------------------------------------->
    <div class="popups general-box" id="rachel-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF EVP Rachel Spielman Talks Creativity in PR Week Op-Ed&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Rachel Spielman's PR Week op-ed articulates how creativity can enrich a company's culture. The piece is available at <a href="http://www.prweekus.com/pages/login.aspx?returl=/the-strongest-culture-is-built-when-everyone-gets-creative/article/147366/&pagetypeid=28&articleid=147366&accesslevel=2&expireddays=0&accessAndPrice=0" target="_blank">prweek.com</a></p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------blogs---------------------------------------------->
    <div class="popups general-box" id="blogs-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>Kathy Bloomgarden Blogs for Harvard Business Review&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Kathy Bloomgarden discusses intent and Twitter in a recent HBR's Conversation Starter blog post. The post appears below and on HBR's <a href="http://blogs.hbr.org/cs/2009/08/the_difference_between_barry_d.html" target="_blank">site</a></p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------confidence---------------------------------------------->
    <div class="popups general-box" id="confidence-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Asia Studies Reveal Confidence High Among Chinese Luxury Consumers&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p><b>Ruder Finn Asia</b>, part of Ruder Finn's international network, one of the world's largest independent public relations firms, together with <b>Albatross Global Solutions</b>, one of the leading market research companies on the luxury industry segment throughout Asia, today jointly released their <a href="http://www.ruderfinn.com/files/china-luxury-forecast-200909.pdf" target="_blank">2009 China Luxury Forecast</a>. The report shows that theglobal economic downturn has had limited impact on Chinese luxury consumption and that there is widespread confidence in the future among Chinese luxury consumers.</p><p>The <b>2009 China Luxury Forecast</b> interviewed 1,000 luxury consumers with an average annual income of RMB 240,000, from a total of 21 cities including Beijing, Shanghai, Guangzhou, Hong Kong and 17 tier-2 cities in East, South, West and North China. The survey was conducted during April and May this year. By analyzing consumer confidence and purchasing power, purchasing behavior and intention as well as the information channels that influence decision making, the report aims to help marketers better understand the prevailing behaviors among Chinese consumers and foreseeable trends in luxury consumption over the next year.</p><p>In Greater China as a whole, more than half (50.3%) of respondents claimed they will not let the global economic downturn affect their purchases of luxury goods; nearly nine out of ten (89.3%) of respondents said they will not change their preferred categories during the crisis. Tier-1 cities showcase their strong sense of consumer optimism, with 58.9% of respondents claiming that price has little impact on their purchasing plans, against54.6% in tier-2 cities, which is only slightly behind. Beijing expressed the highest optimism among all the surveyed cities, with 44.8% respondents feeling "confident" to "very confident" about their future purchasing power. However, in Hong Kong, luxury consumption and consumer confidence are most affected and consumers maintain a cautious approach compared to mainlandcities. Only one out of ten respondents from Hong Kong was confident that his/her purchasing power would likely increase over the next year whilenearly half said they would maintain a cautious attitude. The remaining 40%expressed pessimism about the future.
</p><p><b>Other highlights of the report:</b></p>
<ul>
<li>The gap between tier 1 and tier 2 luxury markets is smaller than anticipated. Consumers in tier 2 cities are becoming more mature in areas such as consumer perceptions, behaviors and the use of information channels</li>
<li>Traditional media remains an essential communication tool for the Chinese luxury market but the increasing use of internet technology is changing the rules. How to leverage various internet applications to strengthen the "word-of-mouth" effect to enhance and maintain brand reputation has become one of the crucial considerations for decision makers in luxury brands.</li>
<li>International luxury brands such as LOUIS VUITTON, CARTIER that tapped into the Mainland Chinese market as early as the 90's, remain in the top positions today despite facing a more competitive market. They have benefited from their long-term, localized and mature marketing events and promotions. The tables below show the preferred brands of respondents in different cities:</li>
<li>While Hong Kong remains the main luxury hub in China, with 43.2% of respondents selecting the Special Administrative Region as their favorite destination to purchase luxury items, Shanghai is becoming a luxury hub in its own right. This is especially true in East China, where the city is chosen by 33.3% of tier-2 cities respondents. Because of the strong purchasing power of consumers in this region, we anticipate that Shanghai's position as a hub for luxury consumption in Mainland China will only increase in the future.</li>
</ul>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------online---------------------------------------------->
    <div class="popups" id="online-box" style="width:938px; height: 548px"> 
    	<div class="popup-bgImage"><img image-link="images/popups/online-bg.jpg" /></div> 
		<div class="popup-cnt">
			<h2>RF's New Study of Online Behavior Focuses On User Intent&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			<br/>
            <p class="h-line">&nbsp;</p>
			<div class="scrollable scroll scroll-on-white">
                 <p>According to the Ruder Finn Intent Index, more than 4 in 5 people (80%) go online to socialize, which is twice as many as those who go online to shop or do business.  Online business isn't dead but marketers who can't connect with their consumers' intent do so at their own peril. 
</p><p>"Intent is the new demographic," said Kathy Bloomgarden, Ruder Finn co-CEO.  "Delving deeper into the underlying motivations of online behavior is critical to developing proactive strategies. Just being online is not enough to leverage digital channels to drive business imperatives. Audiences must be targeted based upon their intent."
</p><p>Ruder Finn, one of the world's largest public relations agencies, unveiled its Intent Index today, an online tool that provides a new view on why people go online and redefines how we look at demographics: <a href="http://www.ruderfinn.com/intent" target="_blank">www.ruderfinn.com/intent</a>.
</p><p>"The Intent Index shows a congruency and similarity among Internet users regardless of traditional demographics," said Marty McGough, Director of Ruder Finn Insights. "This marks a real paradigm shift in how we use online communications tools."
</p><p>Based on a study among Internet users that asks respondents how frequently they go online for 295 reasons, the Intent Index shows that a person's intent may be a better indicator for how to develop a communications campaign than demographic formulas.
</p><p>Michael Schubert, Chief Innovation Officer overseeing digital strategy at Ruder Finn said, "The way the Internet has allowed us to share knowledge laterally instead of up the chain of command requires a new way of thinking about our online communications. The Intent Index underscores the importance of knowing what people seek, and how we, as communicators, can intersect with what they're looking for."
</p><p>The Intent Index shows how critical it is, when communicating on the web, to gain deep insight into user intent, and how the right message, at the right place, at the right time is more important than ever.  Updated quarterly and with the capability of being narrowed down for specific industries, the Intent Index will help businesses improve the context and utility of their online marketing content.
</p><p>Intent Index Survey Results
</p><p>Socialize
<ul>
<li>More than twice as many people go online to socialize (81%) than to do business (39%) or shop (31%).</li>
<li>72% of people go online just to become part of a community.</li>
<li>Seniors are going online today for the same reasons younger people are; to have fun (82%) and to socialize (80%).</li>
<li> More people go online to connect via a social networking site (41%) than to post comments or opinions (34%).</li>
</ul>
</p><p>Learn/Have Fun
<ul>
<li>More people go online to be entertained (82%) than entertain others (48%).</li>
<li>People seek education and entertainment: most people go online both to learn (88%) and have fun (83%).</li>
<li>Almost half of people (47%) go online to learn to improve themselves and nearly one-third (31%) to find self-help experts or books.</li>
<li>The desire to learn drives people to the Internet; top areas are new subjects (68%), the world (65%), a disease or condition (61%), eating healthier (55%) and managing finances (37%).</li>
</ul>
</p><p>Shop/Engage in Commerce
<ul>
<li>Three times as many people go online to compare prices (66%) rather than people via dating sites (21%).</li>
<li>E-commerce isn't dead -- one-third of people (34%) go online to purchase an item; tops are household items (49%), electronics (45%); music (35%), movies (29%), and school/work supplies (29%).</li>
<li>More men (42%) than women (36%) go online to do business.</li>
</ul>
</p><p>Express
<ul>
<li>Women comment, men read: 55% of women go online to find venues for personal expression compared to only 43% of men.</li>
<li>The age of blogs: 44% of people go online to create or update blogs and 42% of people go online to read other people's blogs.</li>
</ul>
</p><p>Escape
<ul>
<li>The Internet offers young people the escape through anonymity they seek out: nearly half (48%) go online to be invisible on instant messaging, 29% to create an avatar and 28% to be somewhat different.</li>
</ul>
</p><p>Advocate
<ul>
<li>Women (48%) are much more likely than men (39%) to go online to advocate for an issue or position.</li></ul>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------parc---------------------------------------------->
    <div class="popups general-box" id="parc-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RFI Launches New Website Redesign for PARC (Palo Alto Research Center, Inc., a Xerox company)&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>RFI Studios has launched the new website for the  Palo Alto Research Center, a leading technology and innovation center.</p><p>PARC, famous for such creations as laser printing, GUI (graphical user interface), and ubiquitous computing, tasked RFI Studios with creating an accessible digital presence to feature PARC's history, expertise, and capabilities. The result is an open architecture web platform where PARC will engage business partners and the scientific research community.</p><p>To view the new site, visit <a href="http://www.parc.com/" target="_blank">www.PARC.com</a>.  To read more about the site's creation, visit RF's Left Brain <a href="http://intra.rfistudios.com/blogs/left-brain/2009/05/rfi-studios-launches-the-new-website-redesign-for-parc-palo-alto-research-center.html" target="_blank">blog</a>.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
    <!-----------------------hk---------------------------------------------->
    <div class="popups general-box" id="hk-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>Ruder Finn Social Media Practice Expands to Hong Kong&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn Asia has expanded its Social Media Influence practice to Hong Kong, the latest step in the phased expansion of Ruder Finn's RF Relate social media program. The Hong Kong practice group's first director will be Vickie Ho, who will report to Carine Senft, interactive director for Ruder Finn Asia. This will make RF Hong Kong Ruder Finn's fourth Asian office with dedicated social media services, following the three mainland China offices in Beijing, Guangzhou, and Shanghai. Ruder Finn's Singapore office will follow suit this summer, completing the integration of RF Relate social media services within Ruder Finn Asia.</p>
<p>Audi, CWS Boco, Michelin, and the National Cotton Council are among the Ruder Finn clients working with the new Hong Kong social media practice.</p>
<p>Read more at <a target="_blank" href="http://www.campaignasia.com/Article/209367,ruder-finn-expands-interactive-unit-in-hk.aspx"><em>Brand Republic</em></a>.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>	
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------fight---------------------------------------------->
    <div class="popups general-box" id="fight-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Asia Joins Fight Against Human Trafficking&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Joining forces with MTV EXIT, Ruder Finn Asia is helping to spread the message on human trafficking and exploitation in Asia by supporting a launch of a hard-hitting animé feature, Intersection.</p>
				<p>Simon Goff, Campaign Director, MTV EXIT said: &quot;MTV EXIT is committed to raising awareness about and preventing human trafficking, and we are delighted to have Ruder Finn working with us on the launch of Intersection. It is great to be working with an agency that not only shares our passion for the cause but which has demonstrated knowledge of this issue as well as a clear understanding of what we need.&quot;</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
     <!-----------------------scott---------------------------------------------->
    <div class="popups general-box" id="scott-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF's Scott Schneider Speaks at the UN Web Conference&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Scott Schneider, EVP Director of RFI Studios, spoke at the United Nations organized annual Web4Development Conference on Wednesday February 11th. The conference took place at the UN headquarters in New York City. The organizers invited thought leaders from the UN, academia, and private sectors to share case studies, strategies, and latest trends with the overall goal of helping to achieve the Millennium Development Goals.</p>
				<p>Scott spoke about the role that digital and social media strategy plays within the overall communications mix. Additional panel speakers included managers from MyGlobalFund.org, Product (RED) Campaign, UNICEF, and the Obama campaign.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------lir---------------------------------------------->
    <div class="popups general-box" id="lir-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>NY Times Brings Attention to www.loveisrespect.com&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>An article in the New York Times highlights the recently increased efforts being made to reduce dating violence among teenagers. The article references the National Teen Dating Abuse Hotline's website<a href="http://www.loveisrespect.org/" target="_blank">www.loveisrespect.com</a> as a source of help for those in need.</p><p>The Love is Respect website was created by RF Innovation Studios in September 2007 and won a Webby in 2008.</p><p>To read the NY Times article in full, <a href="http://www.nytimes.com/2009/01/04/us/04abuse.html?scp=1&sq=dating%20abuse&st=cse" target="_blank">click here</a>.</p><p>Fore more information about RF Innovation Studios, <a href="http://www.rfistudios.com/" target="_blank">click here.</a></p>

			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
     <!-----------------------david---------------------------------------------->
    <div class="popups general-box" id="david-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>David Finn Honored as a Founding Father of Public Relations&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>David Finn was of four &quot;PR Forefathers&quot; interviewed recently by PR Week EIC Keith O'Brien in honor of the magazine's 10th Anniversary. Finn and the other PR legends (Burson-Marsteller's Harold Burson, Edelman's Daniel J. Edelman, and GolinHarris' Al Golin) reflected on their careers and gave their thoughts on the future of the industry.</p>

				<p>To read the interview in full, <a href="http://media.haymarketmedia.com/Archives/1/p06%2007%2009_888.pdf">click here</a>.</p>


			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------women---------------------------------------------->
    <div class="popups general-box" id="women-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Among Top 25 Women-Run Companies in New York&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn, Inc has been recognized as a successful women-owned business by Crain?s in their recently released rankings of New York?s top 25 women-owned companies.</p>

				<p>?We are honored to be recognized as one of the largest women-owned businesses in New York. The New York metro area is one of our key markets as it is the headquarter location for many of our clients, as well as a source of talented and creative professionals whom we are proud to have working with us,? says Kathy Bloomgarden, Co-CEO of Ruder Finn.</p>

				<p>To qualify for the annually published list, companies must be privately held, 51% (or more) of the business? ownership must be female, and they must be headquartered in the greater New York metro area.</p>

			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------alvin---------------------------------------------->
    <div class="popups general-box" id="alvin-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>CBS Evening News Features RF Client Alvin Ailey American Dance Theater&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>On August 13, RF secured a placement on CBS Evening News for the Alvin Ailey American Dance Theater, which is in the midst of celebrating its 50th anniversary.</p>

				<p>Ruder Finn will continue to support the AAADT during its entire 18-month Golden Anniversary celebration, which officially launched on March 27, 2008.</p>

				<p>To read more about RF's Branding Team, <a target="_blank" href="http://www.ruderfinn.com/corporate-public-trust/branding.html">click here</a>.</p>
			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">		
    <!-----------------------smokeybear---------------------------------------------->
    <div class="popups general-box" id="smokeybear-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RFI Relaunches Smokeybear.com&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>RFI Studios has announced the re-launch of <a target="_blank" href="http://www.smokeybear.com/">www.smokeybear.com</a>, the longest running Public Service Campaign in US History.</p>

				<p>The new smokeybear.com contains a National Get Your Smokey on Pledge (with real-time Google mash-up voter tally map), a special Outdoor safety guide, as well as a map of every wildfire currently burning in the US, which is dynamically updated every day via the US Forest Service. Visitors of smokeybear.com can also view daily wildfire information on Google Maps.</p>

				<p>To learn more about RFI Studios, please visit <a target="_blank" href="http://www.rfistudios.com/index.html">rfinteractive.com</a>.</p>

			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>
</div>
<div style="position:absolute; top:0px; left:-3000px;">	
    <!-----------------------nick---------------------------------------------->
    <div class="popups general-box" id="nick-box" style="width:938px; height: 548px"> 
		<div class="popup-cnt">
			<h2>RF Diversifies UK Offering with New MD Nick Leonard&nbsp;&nbsp;<a class="add_this_share_button" href="http://www.addthis.com/bookmark.php?v=250" onmouseover="return addthis_open(this, '', '[URL]', '[TITLE]')" onmouseout="addthis_close()" onclick="return addthis_sendto()"><img src="images/share2.png" width="58" height="21" alt="share" /></a></h2><p></p>
			
			<div class="scrollable scroll scroll-on-white">
                <p>Ruder Finn has appointed Nick Leonard as UK managing director to lead the agency into its new phase of growth. Nick brings a wealth of experience from his eleven years in corporate, technology, and consumer PR, and is ideally positioned to lead the London office to expand across the agency's full suite of core capabilities.</p>

				<p>For more information, please visit the <a href="http://www.ruderfinn.co.uk/">RFUK site</a>.</p>

			</div>			
			<div class="clearit">&nbsp;</div>
        </div>
	</div>																																											
</div>
<!--------------------------------------------------------------------->
</body>
</html>
