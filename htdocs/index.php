<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" type="text/css" href="font/1709-PNZNKV.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>1984 Ventures</title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script> 
		var winW = $(window).width();

		$(document).ready(function() {
			/* EXTRA WIDE CENTERING */
			if(winW > 1360){
				$("#philosophy").css("left", (winW/2) - 420 + "px");
				$("#portfolio").css("left", (winW/2) - 240 + "px");
				$("#newsletter").css("left", (winW/2) - 600 + "px");
				$("#archive").css("left", (winW/2) - 640 + "px");
			} else {
				$("#philosophy").css("left", "");
				$("#portfolio").css("left", "");
				$("#newsletter").css("left", "");
				$("#archive").css("left", "");
			}
			/* ARCHIVE TOGGLE */
			$(".newsletter-top-right").click(function() {
				$("#newsletter").hide();
				$("#archive").show();
			});
			$(".archive-top-right").click(function() {
				$("#newsletter").show();
				$("#archive").hide();
		  });
      /* Load Newsletter */
      $("li").click(function(event) {
        /* Load the file from the src attribute of the li into the Newsletter tab */
        $("#newsletter_title")[0].innerHTML = this.getAttribute("title");
        $("#newsletter_date")[0].innerHTML = this.getAttribute("date");   
        $("#newsletter_body").load("/newsletters/" + this.getAttribute("src"));
        var mq = window.matchMedia( "(min-width: 1160px)");
 		    if(mq.matches) {
       		zzz = zzz+10;    
 	        $("#newsletter").css("z-index", zzz);
 	        $("#archive").css("z-index", zzz - 5);
         } else {
           $("#newsletter").show();
           $("#archive").hide();
          }
        event.stopPropagation();
      });
		});
		$(window).resize(function() {
			var winW 	= $(window).width();
			/* EXTRA WIDE CENTERING */
			if(winW > 1360){
     		$("#philosophy").css("left", (winW/2) - 420 + "px");
				$("#portfolio").css("left", (winW/2) - 240 + "px");
				$("#newsletter").css("left", (winW/2) - 600 + "px");
				$("#archive").css("left", (winW/2) - 640 + "px");
			} else {
				$("#philosophy").css("left", "");
				$("#portfolio").css("left", "");
				$("#newsletter").css("left", "");
				$("#archive").css("left", "");
			}
			/* ARCHIVE TOGGLE */
			if(winW > 1200){
				$("#newsletter").show();
				$("#archive").show();
			}
		});
	</script>
</head>
<body class="AtlasTypewriter-Light-Web">
	<div id="logo"></div>	
	<div id="philosophy">
		<div class="container">
			<div class="header AtlasTypewriter-Regular-Web">PHILOSOPHY</div>
			<div class="title white">
				No buzzwords. No hype. We invest in founders using software to solve real world problems.
			</div>
			<div id="pillarContainer">
				<div class="pillars">
					<p>How we invest</p>
          <ol>
				    <li>We focus on early-seed rounds. It’s what we know and love and where we provide the most value </li>
				    <li>We are drawn to responsiveness and grit and always prefer a founding team with a CTO</li>
            <li>We are quick with our decisions and are flexible on whether we lead or participate in a round</li>
          </ol>
        </div>
				<div class="pillars MID">
          <p>How we operate</p>
          <ol>
            <li>We don't take board seats.  We prefer to be in your speed dial and get the late-night call</li>
            <li>We help you recruit an A+ team </li>
            <li>We make intros that matter, particularly when it comes to fund raising</li>
          </ol>
        </div>
			</div>
			<div id="teamContainer">
				<div id="teamInvest">
					<div class="header AtlasTypewriter-Regular-Web"  id="investHeader">INVESTMENT TEAM</div>
					<!---------------------------->
					<!------ RAMY RAMY RAMY ------>
					<!---------------------------->
					<div class="SVGcontainer"><div id="ramySVG"></div></div>
					<div class="nameJob">
						<p>Ramy Adeeb</p>
						<p class="job">General Partner</p>
					</div>
					<div class="bio">
						An entrepreneur and investor, Ramy is founder and CEO of Snip.it (Acquired by Yahoo, where he served as a product executive) and one of the earliest engineers at Tellme Networks (Acquired by Microsoft). Ramy started his investing career at Khosla Venture where he worked with investors Vinod Khosla and Pierre Lamond on many investments including Groupme (acquired by Skype), Square (NASDAQ:SQ), and Storify (acquired by LiveFyre). He holds a BA and MS in Computer Science from Harvard and an MBA from Stanford.
					</div>
					<!--------------------------->
					<!---- AARON AARON AARON ---->
					<!--------------------------->
					<div class="SVGcontainer"><div id="aaronSVG"></div></div>
					<div class="nameJob">
						<p>Aaron Michel</p>
						<p class="job">Partner</p>
					</div>
					<div class="bio">
						Named to venture capital’s 40 Under 40 by VC Journal in 2020, Aaron is the co-founder of PathSource, an edtech startup that rose to be the top career app in the App Store until its acquisition in 2017. Aaron also created the online game Fantasy Politics for the 2012 election. Inducted into the annual Innovation Rockstar list by the Boston Business Journal, Aaron has written for Entrepreneur Magazine, Fast Company and a range of business outlets. He holds an MBA from Harvard Business School and an MPA from Harvard Kennedy School of Government.
					</div>
					<!---------------------------->
					<!--- FARZAD FARZAD FARZAD --->
					<!---------------------------->
					<div class="SVGcontainer"><div id="farzadSVG"></div></div>
					<div class="nameJob">
						<p>Farzad Soleimani</p>
						<p class="job">Healthcare Partner</p>
					</div>
					<div class="bio">
						A VC by day and an ER physician by night, Farzad has over 15 years of experience at the intersection of healthcare and entrepreneurship. He is the founder of eTherapi, a pioneering telemedicine company, and the founding co-director of the Texas Medical Center Biodesign Innovation Program. Farzad started his investing career at Mohr Davidow Ventures, completed his residency training at Baylor and earned his MBA, MD, MS, and BS from Stanford University. He is on faculty at Baylor Medical School, Rice Business School, and Rice Bioengineering Department.
					</div>
				</div>
				<div id="teamPartners">
					<div class="header AtlasTypewriter-Regular-Web" id="advisorsHeader">SENIOR ADVISORS</div>
					<div class="nameJob">
						<p>Andy Rachleff</p>
						<p class="job">Founder of Benchmark Capital</p>
					</div>
					<div class="nameJob">
						<p>Michael Smith</p>
						<p class="job">Dean of the Faculty of Arts and Sciences at Harvard University</p>
					</div>
					<div class="nameJob">
						<p>Jim Messina</p>
						<p class="job">Chief of staff for operations under President Obama</p>
					</div>
					<div class="nameJob">
						<p>Mohammed Mansour</p>
						<p class="job">Chairman of Mansour Group, a global conglomerate and GM's largest distributor globally</p>
					</div>
          
					<div class="header AtlasTypewriter-Regular-Web" id="partnersHeader">VENTURE PARTNERS</div>
					<div class="nameJob">
						<p>Drew Uher</p>
						<p class="job">Founder and CEO at Homelight</p>
					</div>
					<div class="nameJob">
						<p>Kyle Oppenheim</p>
						<p class="job">VP of Engineering at Groupon and Director of eng at Facebook</p>
					</div>
					<div class="nameJob">
						<p>Jennifer Pollock</p>
						<p class="job">Head of content Marketing at Square</p>
					</div>
					<div class="nameJob">
						<p>Greg Pal</p>
						<p class="job">Founder and CBO at Automat.ai and VP at Nuance</p>
					</div>
					<div class="nameJobLast">
						<p>Daniele Codega</p>
						<p class="job">Partner at Work & Co. Previously Head of Design at Reuters, Creative Director at HuffPost</p>
					</div>
				</div>
			</div>
    </div>
	</div>
	<div id="portfolio">
		<div class="container">
			<div class="header AtlasTypewriter-Regular-Web">PORTFOLIO</div>
			<div class="title">
				Since 2017, we have partnered with outstanding entreperneurs shaking up large, antiquated industries.
			</div>
      <!--
      <div class="custom-radios">
        <div>
          <input type="radio" id="color-3" name="color" value="color-3">
          <label for="color-3">
            <span>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
            </span>
          </label>
        </div>

        <div>
          <input type="radio" id="color-4" name="color" value="color-4">
          <label for="color-4">
            <span>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
            </span>
          </label>
        </div>
      </div>
      -->

   		<div id="filters">
				<label class="filter-label"><input type="radio" name="radio" checked="checked" id="all"><span class="first checkmark"></span>All</label>
				<label class="filter-label"><input type="radio" name="radio" id="ecommerce"><span class="checkmark"></span>eCommerce</label>
				<label class="filter-label"><input type="radio" name="radio" id="supplychain"><span class="checkmark"></span>Supply Chain</label>
				<label class="filter-label"><input type="radio" name="radio" id="proptech"><span class="checkmark"></span>Proptech</label>
				<label class="filter-label"><input type="radio" name="radio" id="fintech"><span class="checkmark"></span>Fintech</label>                        
				<label class="filter-label"><input type="radio" name="radio" id="healthcare"><span class="checkmark"></span>Healthcare</label>                                
				<label class="filter-label"><input type="radio" name="radio" id="saas"><span class="checkmark"></span>SaaS</label>
				<label class="filter-label"><input type="radio" name="radio" id="consumer"><span class="checkmark"></span>Consumer</label>
				<label class="filter-label"><input type="radio" name="radio" id="marketplace"><span class="checkmark"></span>Marketplace</label>
				<label class="filter-label"><input type="radio" name="radio" id="staffing"><span class="checkmark"></span>Staffing</label>	                  
			</div>
			<ul>
        <li class='filter-ecommerce filter-consumer '>Because Market, <span class='opacity'>Ecommerce site selling diapers to seniors</span></li>
        <li class='filter-supplychain filter-saas '>Blue Cargo, <span class='opacity'>Predictive algorithms for port operations</span></li>
        <li class='filter-proptech filter-fintech '>Brace, <span class='opacity'>Mortgage servicing for lenders</span></li>
        <li class='filter-proptech filter-saas '>BuildOps, <span class='opacity'>House Service</span></li>
        <li class='filter-healthcare '>Care Signal, <span class='opacity'>Patient engagment software</span></li>
        <li class='filter-proptech filter-saas '>Convex, <span class='opacity'>Flexport for Commercial Contractors</span></li>
        <li class='filter-ecommerce filter-consumer filter-marketplace '>Curtsy, <span class='opacity'>Buy & Sell cloth for Gen Z</span></li>
        <li class='filter-healthcare '>Deepscribe, <span class='opacity'>Medical note transcription</span></li>
        <li class='filter-fintech filter-consumer '>Dovly, <span class='opacity'>Automated credit repair</span></li>
        <li class='filter-ecommerce filter-consumer '>Duffl, <span class='opacity'>Delivery for college campuses</span></li>
        <li class='filter-fintech filter-saas '>FairMarkIT, <span class='opacity'>Marketplace for tail spend procurement</span></li>
        <li class='filter-ecommerce filter-supplychain filter-marketplace '>Flowspace, <span class='opacity'>Airbnb for warehousing</span></li>
        <li class='filter-ecommerce filter-consumer '>Frey, <span class='opacity'>Clothing and personal care</span></li>
<!--        <li class='filter-supplychain filter-saas '>GetSett, <span class='opacity'>Logistics Enhancment for Fleets</span></li>-->
        <li class='filter-healthcare '>Glidian, <span class='opacity'>Prior authorization software</span></li>
        <li class='filter-healthcare '>Health Note, <span class='opacity'>Automated note taking for healthcare</span></li>
        <li class='filter-staffing '>Heroes Jobs, <span class='opacity'>Video recruiting platform for gen-z workers</span></li>
        <li class='filter-supplychain filter-consumer '>Kyte, <span class='opacity'>Rental cars on demand</span></li>
        <li class='filter-proptech '>Latchel, <span class='opacity'>Property management solution for landlords</span></li>
        <li class='filter-supplychain filter-consumer '>Nickson, <span class='opacity'>Furniture as a service</span></li>
        <li class='filter-fintech filter-consumer '>Oxygen, <span class='opacity'>Banking for freelancers</span></li>
        <li class='filter-proptech filter-consumer '>Padsplit, <span class='opacity'>Airbnb for affordable housing</span></li>
        <li class='filter-saas '>Posthog, <span class='opacity'>Onprem analytics platform</span></li>
        <li class='filter-ecommerce filter-saas '>PostScript, <span class='opacity'>eCommerce SMS re-engagement</span></li>
        <li class='filter-proptech filter-consumer '>Properly, <span class='opacity'>Opendoor for Canada</span></li>
        <li class='filter-proptech filter-saas '>Reggora, <span class='opacity'>Real estate appraisal software</span></li>
        <li class='filter-fintech filter-saas '>Routable, <span class='opacity'>Platform for scaling b2b payments</span></li>
        <li class='filter-supplychain filter-marketplace filter-staffing '>Seso, <span class='opacity'>Labor marketplace for the agriculture industry</span></li>
        <li class='filter-supplychain filter-fintech filter-saas filter-marketplace '>Shelf Engine, <span class='opacity'>Marketplace connecting grocery stores with vendors</span></li>
        <li class='filter-healthcare filter-staffing '>Sling Health, <span class='opacity'>Virtual care teams for medical practices</span></li>
        <li class='filter-ecommerce filter-supplychain filter-saas filter-marketplace '>Sourcify, <span class='opacity'>Connecting US merchants with Chinese factories</span></li>
        <li class='filter-proptech filter-marketplace filter-staffing '>Toolbox, <span class='opacity'>Staffing and payroll platform for construction workers</span></li>
        <li class='filter-healthcare filter-marketplace filter-staffing '>Trusted Health, <span class='opacity'>Marketplace for healthcare employment</span></li>
        <li class='filter-supplychain filter-saas '>UnicoAero, <span class='opacity'>Baggage Management System for Airlines</span></li>
        <li class='filter-supplychain filter-saas '>Union Crate, <span class='opacity'>Software for supply change management</span></li>
        <li class='filter-saas filter-marketplace'>Vectrix, <span class='opacity'>Cloud security marketplace</span></li>
        <li class='filter-supplychain filter-saas '>Vizion, <span class='opacity'>API for logistics</span></li>
        <li class='filter-ecommerce filter-consumer '>Zero, <span class='opacity'>Zero waste groceries</span></li>
			</ul>
		</div>
	</div>
	<div id="newsletter">
		<div class="newsletter-top-container"> 
			<div class="header AtlasTypewriter-Regular-Web">NEWSLETTER</div>
			<div class="title">
				<span id="newsletter_title">The Monopoly Issue</span><br/>
			  <spn class="white" id="newsletter_date">
          September 2020</span>
      </div>
	    <div class="newsletter-top-right"> 
	    </div> 														
		</div> 															
   <div class="newsletter-bottom-container">      
			<div class="news-intro border-top">
				<div id="newsletter_body">
          <?php include("newsletters/sep2020.html"); ?> 
         </div>
        </div> 
     </div>

    <div class="news_footer footer">
      1984 Ventures<br>
      44 Tehama Street <br>
      San Francisco, CA<br>
      <br><br>
      Contact us:<br>
      <span class="opacity">team@1984.vc</span>
    </div>
  </div>
	<div id="archive">
		<div class="archive-top-container">
			<div class="header AtlasTypewriter-Regular-Web">NEWSLETTER ARCHIVE</div>
			<div class="archive-top-right"></div>
		</div>
		<div class="archive-bottom-container">
			<ul>
			  <li src="sep2020.html" title="The monopoly issue" date="September 2020">The monopoly issue, September 2020</li>
			  <li src="aug2020.html" title="The splintering of the Internet" date="August 2020">The splintering of the Internet, August 2020</li>
			  <li src="jul2020.html" title="Our Q2 Update" date="July 2020">Our Q2 Update, July 2020</li>
			  <li src="jun2020.html" title="How did we get here" date="June 2020">How did we get here, June 2020</li>
			  <li src="may2020.html" title="Operating during a pandemic" date="May 2020">Operating during a pandemic, May 2020</li>
			  <li src="apr2020.html" title="An update from 1984 Ventures" date="April 2020">An update, April 2020</li>
			  <li src="mar2020.html" title="An epidemic of misinformataion" date="March 2020">An epidemic of misinformaation, March 2020</li>
			  <li src="feb2020.html" title="The disruption issue" date="February 2020">The disruption issue, February 2020</li>
			  <li src="jan2020.html" title="Our end of yeara letter" date="January 2020">Our end of year letter</li>
			  <li src="dec2019.html" title="The fake news issue" date="December 2019">The fake news issue, December 2020</li>
			  <li src="nov2019.html" title="The China culture clash" date="November 2019">The China culture clash, November 2019</li>
			  <li src="oct2019.html" title="Q3 Update" date="October 2019">Q3 Update, October 2019</li>
			  <li src="sep2019.html" title="The WeWork debacle" date="September 2019">The WeWork debacle, September 2019</li>
			  <li src="aug2019.html" title="The rise of Shopify" date="August 2019">The rise of Shopify, August 2019</li>
			  <li src="jul2019.html" title="Q2 Update" date="July 2019">Q2 Updatae, July 2019</li>
<!--			  <li src="jun2019.html" title="" date="">June 2019</li>
			  <li src="may2019.html" title="" date="">May 2019</li>
			  <li src="apr2019.html" title="" date="">April 2019</li>-->

			</ul>
		</div>
	</div>
	
	<script>
		/*/////////////////////////////////////////*/
		/*//////////   Z-INDEX CONTROL   //////////*/
		/*/////////////////////////////////////////*/
		var zzz = 0;
		$("#philosophy").hover(function() {
			zzz = zzz+10;
			$(this).css('z-index', zzz);
		});
		$("#portfolio").hover(function() {
			zzz = zzz+10;
			$(this).css('z-index', zzz);
		});
		$("#newsletter, #archive").hover(function() {
  		zzz = zzz+10;
			$("#archive").css('z-index', zzz-5);    
			$("#newsletter").css('z-index', zzz);
		});
		$("#archive").click(function() {
			$(this).css('z-index', zzz+2);
			$("#newsletter").css('z-index', zzz);
		});
		
		
		/*/////////////////////////////////////////*/
		/*/////////   PORTFOLIO FILTERS   /////////*/
		/*/////////////////////////////////////////*/
    filters_list = ["ecommerce", "supplychain", "proptech", "fintech", "healthcare", "saas", "consumer", "marketplace", "staffing"]
		$("#all").click(function() {
		  if ($(this).is(':checked')) {
        for (let i = 0; i <filters_list.length; i++) {
  		     $(".filter-" + filters_list[i]).show();
        }
		  }
		});
    // Iterate through all the filters.  When one is clicked, hide all and show it
    for (let i = 0;  i < filters_list.length; i++) {
  	  $("#" + filters_list[i]).click(function() {
		 	  if ($(this).is(':checked')) {
          for (let j = 0; j <filters_list.length; j++) {
    		    $(".filter-" + filters_list[j]).hide();
          }
	 		  $(".filter-" + filters_list[i]).show();
		   }
		  });
    }
		
		
		/*/////////////////////////////////////////*/
		/*/////////   NEWSLETTER IMAGES   /////////*/
		/*/////////////////////////////////////////*/
		$("#one").mouseover(function(e){
			$("#one").mousemove(function(e){
				$("#img-one").show();
				$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
			 }); 
		});
		$("#one").mouseout(function(e){
			$("#img-one").hide();
			$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
		});
		
		$("#two").mouseover(function(e){
			$("#two").mousemove(function(e){
				$("#img-two").show();
				$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
			 }); 
		});
		$("#two").mouseout(function(e){
			$("#img-two").hide();
			$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
		});
		
		$("#three").mouseover(function(e){
			$("#three").mousemove(function(e){
				$("#img-three").show();
				$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
			 }); 
		});
		$("#three").mouseout(function(e){
			$("#img-three").hide();
			$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
		});
		
		$("#four").mouseover(function(e){
			$("#four").mousemove(function(e){
				$("#img-four").show();
				$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
			 }); 
		});
		$("#four").mouseout(function(e){
			$("#img-four").hide();
			$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
		});
		
		$("#five").mouseover(function(e){
			$("#five").mousemove(function(e){
				$("#img-five").show();
				$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
			 }); 
		});
		$("#five").mouseout(function(e){
			$("#img-five").hide();
			$(".follow").css({'top': e.clientY + 16, 'left': e.clientX + 16});
		});
	</script>
</body>
</html>
