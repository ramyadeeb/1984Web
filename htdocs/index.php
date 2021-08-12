<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178383975-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-178383975-1');
  </script>
  <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="1984 Ventures">
  <meta name="description" content="Seed Stage Venture Capital"> 
  
	<link rel="stylesheet" type="text/css" href="font/1709-PNZNKV.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>1984 Ventures</title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script> 
		var winW = $(window).width();

		$(document).ready(function() {
			/* EXTRA WIDE CENTERING */
			if(winW > 1360){
				$("#philosophy").css("left", (winW/2) - 240 + "px");
				$("#portfolio").css("left", (winW/2) - 420 + "px");
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
        $("#archive").addClass("clickable");
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
     		$("#philosophy").css("left", (winW/2) - 240 + "px");
				$("#portfolio").css("left", (winW/2) - 420 + "px");
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
  <div id="wrapper">
	<div id="logo"></div>	
	<div id="philosophy">
		<div class="container">
			<div class="header AtlasTypewriter-Regular-Web">PHILOSOPHY</div>
			<div class="title white">
				No buzzwords. No hype. We invest in founders using software to solve real &#x1f30e; problems.
			</div>
			<div id="pillarContainer">
				<div class="pillars">
					<p>How we invest</p>
          <ol>
				    <li>We focus on seed rounds. It’s what we know and love and where we provide the most value </li>
				    <li>We are drawn to founders with grit, industry insights and a strong engineering culture</li>
            <li>We invest via SAFE or equity, and can lead or participate.</li>
          </ol>
        </div>
				<div class="pillars MID">
          <p>How we operate</p>
          <ol>
            <li>We don't take board seats.  We prefer to be in your speed dial and get the late-night call</li>
            <li>We make intros that matter</li>
            <li>We help with recruiting, fund raising, and founder therapy</li>	    
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

					<!---------------------------->
					<!--- Samit                 -->
					<!---------------------------->
					<div class="SVGcontainer"><div id="samitSVG"></div></div>
					<div class="nameJob">
						<p>Samit Kalra</p>
						<p class="job">Principal</p>
					</div>
					<div class="bio">
Growing up in Sydney, Samit cut his teeth in startups and investment banking, before moving to San Francisco in 2017 to pursue a career in technology. Since then, he has spent time in operating roles at AngelList and as a seed investor at Bain Capital Ventures. While at Bain, Samit ran the firm's early-stage fund program which generated 15 seed investments, including Compound Finance ($3B market cap). He holds a double degree in Business and Law (First Class Honors) from the University of Sydney.
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
          
					<div class="header AtlasTypewriter-Regular-Web" id="partnersHeader">TECHNOLOGY PARTNERS</div>
					<div class="nameJob">
					  <p>Kyle Oppenheim</p>
					  <p class="job">VP of Engineering at Groupon, director of eng at Facebook</p>
					</div>
					<div class="nameJob">
					  <p>Mark Percival</p>
					  <p class="job">First mobile engineer at Twitter, Co-founder and CTO at Snipit, Architect at Yahoo</p>
					</div>
					<div class="nameJob">
					  <p>Karim Wahba</p>
					  <p class="job">Data Science manager at Stitch Fix, Uber and Ginger.io</p>
					</div>



					<div class="header AtlasTypewriter-Regular-Web" id="partnersHeader">VENTURE PARTNERS</div>
					<div class="nameJob">
						<p>Drew Uher</p>
						<p class="job">Founder and CEO at Homelight</p>
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
		<div class="container portfolio_container">
			<div class="header AtlasTypewriter-Regular-Web">PORTFOLIO</div>
			<div class="title">
				Since 2017, we have partnered with outstanding entrepreneurs shaking up many antiquated industries.
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
        <li class='filter-healthcare '>Biocogniv, <span class='opacity'>AI for medical diagnostics</span></li>
        <li class='filter-supplychain filter-saas '>Bluecargo, <span class='opacity'>Optimizing container logistics</span></li>
        <li class='filter-proptech filter-fintech '>Brace, <span class='opacity'>Mortgage servicing for lenders</span></li>
        <li class='filter-proptech filter-saas '>BuildOps, <span class='opacity'>Driving operational efficiency for service contractors</span></li>
        <li class='filter-healthcare '>CareSignal, <span class='opacity'>Patient engagment software</span></li>
        <li class='filter-proptech filter-saas '>Convex, <span class='opacity'>Flexport for commercial contractors</span></li>
        <li class='filter-ecommerce filter-consumer filter-marketplace '>Curtsy, <span class='opacity'>Marketplace for Gen Z to buy and sell clothing</span></li>
        <li class='filter-healthcare '>Deepscribe, <span class='opacity'>Medical note transcription</span></li>
        <li class='filter-fintech filter-consumer '>Dovly, <span class='opacity'>Automated credit repair</span></li>
        <li class='filter-ecommerce filter-consumer '>Duffl, <span class='opacity'>Delivery for college campuses</span></li>
        <li class='filter-fintech filter-saas filter-marketplace'>Fairmarkit, <span class='opacity'>Marketplace for procurement</span></li>
        <li class='filter-ecommerce filter-supplychain filter-marketplace '>Flowspace, <span class='opacity'>Airbnb for warehousing</span></li>
        <li class='filter-ecommerce filter-consumer '>Frey, <span class='opacity'>Clothing and personal care</span></li>
<!--        <li class='filter-supplychain filter-saas '>GetSett, <span class='opacity'>Logistics Enhancment for Fleets</span></li>-->
        <li class='filter-healthcare '>Glidian, <span class='opacity'>Prior authorization software</span></li>
        <li class='filter-healthcare '>Health Note, <span class='opacity'>Automated note taking for healthcare</span></li>
        <li class='filter-staffing '>Heroes Jobs, <span class='opacity'>Video recruiting platform for Gen Z workers</span></li>
        <li class='filter-supplychain filter-consumer '>Kyte, <span class='opacity'>Rental cars on demand</span></li>
        <li class='filter-proptech '>Latchel, <span class='opacity'>Property management solution for landlords</span></li>
        <li class='filter-supplychain filter-consumer '>Nickson, <span class='opacity'>Furniture as a service</span></li>
        <li class='filter-fintech filter-consumer '>Oxygen, <span class='opacity'>Banking for freelancers</span></li>
        <li class='filter-proptech filter-consumer '>Padsplit, <span class='opacity'>Airbnb for affordable housing</span></li>
        <li class='filter-saas '>Posthog, <span class='opacity'>Onprem analytics platform</span></li>
        <li class='filter-ecommerce filter-saas '>PostScript, <span class='opacity'>Ecommerce SMS re-engagement</span></li>
        <li class='filter-proptech filter-consumer '>Properly, <span class='opacity'>Opendoor for Canada</span></li>
        <li class='filter-proptech filter-saas '>Reggora, <span class='opacity'>Real estate appraisal software</span></li>
        <li class='filter-fintech filter-saas '>Routable, <span class='opacity'>Platform for scaling b2b payments</span></li>
        <li class='filter-supplychain filter-marketplace filter-staffing '>Seso, <span class='opacity'>Labor marketplace for the agriculture industry</span></li>
        <li class='filter-supplychain filter-fintech filter-saas filter-marketplace '>Shelf Engine, <span class='opacity'>Marketplace connecting grocery stores with vendors</span></li>
        <li class='filter-healthcare filter-staffing '>Sling Health, <span class='opacity'>Virtual care teams for medical practices</span></li>
        <li class='filter-ecommerce filter-supplychain filter-saas filter-marketplace '>Sourcify, <span class='opacity'>Connecting US merchants with Chinese factories</span></li>
        <li class='filter-proptech filter-marketplace filter-staffing '>Toolbox, <span class='opacity'>Staffing and payroll platform for construction workers</span></li>
        <li class='filter-healthcare filter-marketplace filter-staffing '>Trusted Health, <span class='opacity'>Marketplace for healthcare employment</span></li>
        <li class='filter-supplychain filter-saas '>UnicoAero, <span class='opacity'>Baggage management system for airlines</span></li>
        <li class='filter-supplychain filter-saas '>Unioncrate, <span class='opacity'>Software for supply change management</span></li>
        <li class='filter-saas filter-marketplace'>Vectrix, <span class='opacity'>Cloud security marketplace</span></li>
<!--        <li class='filter-supplychain filter-saas '>Vizion, <span class='opacity'>API for logistics</span></li>-->
        <li class='filter-ecommerce filter-consumer '>Zero, <span class='opacity'>Zero waste groceries</span></li>
			</ul>
		</div>
    <div class="portfolio_footer footer">
      <p>Designed & built by the 1984 team using Emacs (vim users can still apply)</p>
      <p>44 Tehama Street, San Francisco, CA</p>
      <p>Contact us:<br>
      <span class="opacity">team@1984.vc</span></p>
    </div>
	</div>
	<div id="newsletter">
		<div class="newsletter-top-container"> 
			<div class="header AtlasTypewriter-Regular-Web">NEWSLETTER</div>
			<div class="title">
				<span id="newsletter_title">The Monopoly Issue</span><br/>
			  <spn class="white" id="newsletter_date">
          December 2020</span>
      </div>
	    <div class="newsletter-top-right"> 
	    </div> 														
		</div> 															
   <div class="newsletter-bottom-container">      
			<div class="news-intro border-top">
				<div id="newsletter_body">
          <!--
          <div class="text">
					  As the TikTok drama unfolds, it's easy to write off the Trump administration's threat to shut off the video app as yet another episode in the US-China saga. But a deeper look reveals a broader trend. In June, following a border skirmish with next-door China, India retaliated in part by shutting off TikTok along with 58 other Chinese apps. And in July Slack decided to pursue antitrust action against Microsoft over the bundling of its Teams product not in the US, home to both companies, but rather in the European Union where regulators look more harshly on tech giants.
				  </div>
			    <div class="news-item border-top" id="one">
				    <div>
					    <div class="number">1.</div><h1 class="AtlasTypewriter-Regular-Web">India, Jio, and the Four Internets <span class="opacity">– stratechery.com</span></h1>
				    </div>
				    <div class="text">
					    This thoughtful piece from Stratechery articulates the emergence of the four operating models for the interne and the pros and cons for each. The worry is not the US shutting off TikTok, a "response in kind" to China's 23 years of walled off internet. Rather it is the increased splintering in the non-China Internet, particularly the emergence of a European model that is "the worst of all possible outcomes”.
					    <img src="https://media.npr.org/assets/img/2014/01/23/jobs-6a428e3467ddbc01d6d7ec8534d79016b8e0edb2-s800-c85.jpg" class="follow" id="img-one" height="200px"/>
				    </div>
			    </div>
			    <div class="news-item border-top" id="two">
				    <div id="name">
					    <div class="number">2.</div><h1 class="AtlasTypewriter-Regular-Web">The TikTok war <span class="opacity"> - apple.com</span></h1>                        
				    </div>
				    <div class="text">
					    This thoughtful piece from Stratechery articulates the emergence of the four operating models for the internet and the pros and cons for each. The worry is not the US shutting off TikTok, a "response in kind" to China's 23 years of walled off internet. Rather it is the increased splintering in the non-China Internet, particularly the emergence of a European model that is "the worst of all possible outcomes”.
					    <img src="https://cdn.cultofmac.com/wp-content/uploads/2012/09/stevej1.jpg" class="follow" id="img-two" height="200px"/>
				    </div>
			    </div>
			    <div class="news-item border-top" id="three">
				    <div id="name">
					    <div class="number">3.</div><h1 class="AtlasTypewriter-Regular-Web">Fusce eu malesuada est <span class="opacity">– work.co</span></h1>
				    </div>
				    <div class="text">
					    Nam nulla lectus, maximus sed dignissim sed, consequat nec augue. Fusce eu malesuada est, nec molestie quam. Donec at mi quis lectus maximus facilisis quis at neque. Nulla tempus diam sed ullamcorper vehicula. Sed vitae luctus metus. Morbi euismod lectus sem, at pulvinar erat scelerisque vel. Fusce vehicula, orci a rhoncus luctus, ligula dui varius enim, ac feugiat est ex a velit. Mauris a varius orci. Praesent eu mi dui. Nam hendrerit purus libero, id sodales lacus vulputate quis.
					    <img src="https://api.time.com/wp-content/uploads/2011/10/1110171300191.jpg" class="follow" id="img-three" height="200px"/>
				    </div>
			    </div>
			    <div class="news-item border-top" id="four">
				    <div id="name">
					    <div class="number">4.</div><h1 class="AtlasTypewriter-Regular-Web">Nullam ut sagittis <span class="opacity">– reuters.com</span></h1>
				    </div>
				    <div class="text">
					    Integer quis augue fringilla, finibus nibh non, sagittis lorem. Phasellus ullamcorper consectetur sapien, vehicula sagittis purus bibendum nec. Sed consequat eros ac euismod tristique. Nulla tellus leo, fermentum a nibh quis, suscipit auctor urna. Nullam ut sagittis eros, eget posuere magna. Nullam eros libero, rhoncus quis eros eget, vehicula commodo justo.
					    <img src="https://techcrunch.com/wp-content/uploads/2014/11/fg_menuez_001-e1508806005836.jpg" class="follow" id="img-four" height="200px"/>
				    </div>
			    </div>
			    <div class="news-item border-top" id="five">
				    <div id="name">
					    <div class="number">5.</div><h1 class="AtlasTypewriter-Regular-Web">Donec bibendum turpis eget <span class="opacity">– nymag.com</span></h1>
				    </div>
				    <div class="text">
					    In arcu quam, molestie at vestibulum quis, lobortis vel nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec bibendum turpis eget lobortis porta. Curabitur porttitor felis vel dui tristique volutpat. Phasellus ullamcorper semper nibh, vel aliquam lectus sodales et. Integer rutrum at odio volutpat pellentesque.
					    <img src="https://pyxis.nymag.com/v1/imgs/ce6/1f7/32552b811a3a2a25d2a9b2611d59332277-04-steve-jobs.rsquare.w700.jpg" class="follow" id="img-five" height="200px"/>
				    </div>
          </div>
          
          <p class="intro">Dear Investor,</p>
          <p class="intro">  
            The story of entrepreneurship is often reminiscent of David and Goliath: a small and nimble startup rises up to challenge the large, evil incumbent. But with time, David becomes Goliath. Courage is replaced with defenses, and innovation with brute-force. That's why the symbolism of Epic Games' attack on Apple is genius...
  </p>                    
          <p class="intro">  
            In August, Apple removed the popular game Fortnite from the App Store after it introduced a direct payment option that circumvented Apple's 30% revenue cut policy. Immediately after,  Fortnite's maker Epic Games published a parody of the "1984" ad called "Nineteen Eighty-Fortnite." (In the unlikely event you have never heard us talk about the original ad, you can see it here.) In the Fortnite parody, the villain is an apple while the heroine is Fortnite. The parody ends with a call to action: "Apple is blocking Fortnite. Join the fight to stop 2020 from becoming '1984.'"
          </p>                    
          <p class="intro">  
            Despite a $2 trillion market cap, Apple had thus far managed to maintain its David-like image. Epic Games has put a crack in that narrative. How this fight ends remains unclear, but the crack is here to stay. And so is the underlying message: Monopolies are bad for innovation. We tip our hat to Epic Games for its fight (and highly recommend watching the Fortnite commercial below).
  </p>                    
  <p class="intro">  
    Fund News
  </p>                    
  <p class="intro">  
    This month two of our companies announced their Series A rounds. Routable, which provides an API and B2B payment platform, announced a Series A led by Lee Fixel. And PadSplit, which  applies tech to the Gordian Knot of America's affordable housing challenges, announced a Series A led by Core. In other news, our portfolio company Properly has been featured in this front page story in Canada's Financial Times for its innovative solution for homebuying during the current economic crisis. And our startup Fairmarkit was named in CB Insights' list of fastest-growing fintech startups.
  </p>                    
  <p class="intro">  
    Without further ado, here are your must-reads for September
  </p>                    
  <p class="title">1, Epic's Epic 1984 Video </p>
  <p class="desc">
    A brilliant parody. (If you have not seen the original from 1984, you should watch it first here.) 
    <a href="https://www.youtube.com/watch?v=Nvr3rqsQcPY">Read Article &#8594;</a>
  </p>        
  <p class="title">2. Rethinking the App Store  </p>
  <p class="desc">
    In this thoughtful (and slightly philosophical) article, Stratechery's Ben Thompson chronicles the evolution of the App Store and how a 30% take from application revenue by Apple on the iPhone or by Google on Android has become the norm. (Compared with 0% on the desktop.)
    <a href="https://stratechery.com/2020/rethinking-the-app-store/">Read Article &#8594;</a>
  </p>        
  <p class="title">3. Walmart+ will finally launch in September. Can it compete with Amazon Prime? </p>
  <p class="desc">
    Walmart is finally launching a response to Amazon Prime, Walmart+. But will Walmart+'s (we realize it does not roll off the tongue) offer of lower-priced grocery delivery, discount gas and a self-checkout experience at Walmart stores beat Amazon Prime's menu of benefits? It looks like an uphill climb for Walmart. But as we said above, monopolies are bad for innovation. We look forward to seeing how the entry of a new player benefits innovation and consumers.
    <a href="https://www.vox.com/recode/2020/9/1/21409628/walmart-plus-benefits-free-grocery-delivery-amazon-prime-comparison">Read Article &#8594;</a>
  </p>        
  <p class="title">4. Five Things We Learned From the Surge of Cloud Software Filings </p>
  <p class="desc">
    It's a busy month for tech IPO filings, particularly Cloud Software.  This month Snowflake, Asana, Palantir, JFrog and Sumo Logic all filed to go public. This article summarizes some of the learnings from the filings.  Tl;dr: cloud software providers have amazing retention rates (in the case of Snowflake 158%), most have saved money during the pandemic due to the cancelation of business travel and the virtualization of company and sales events, and some cited "political influence" as a potential risk, a subtle reference to the Trump administration's unusual involvement in a recent cloud deal.
    <a href="https://www.theinformation.com/articles/five-things-we-learned-from-the-surge-of-cloud-software-filings">Read Article &#8594;</a>
  </p>        
  <p class="title">5. This startup will teach your dog to talk </p>
  <p class="desc">
    Ever wondered what your dog is thinking? Now you can ask and get an answer - maybe. Check out this startup, and definitely watch the video on the homepage. 		-->
          <?php include("newsletters/dec2020.html"); ?> 
         </div>
      </div> 
   </div>
   
   <div class="news_footer footer">
     <p>Designed & built by the 1984 team using Emacs (vim users can still apply)</p>
     <p>44 Tehama Street, San Francisco, CA</p>
     <p>Contact us:<br>
       <span class="opacity">team@1984.vc</span>
     </p>
   </div>
   </div>
	<div id="archive" class="clickable">
		<div class="archive-top-container">
			<div class="header AtlasTypewriter-Regular-Web">NEWSLETTER ARCHIVE</div>
			<div class="archive-top-right"></div>
		</div>
		<div class="archive-bottom-container">
			<ul>
			  <li src="dec2020.html" title="VC Trends" date="December 2020">VC Trends, December 2020</li>
        
			  <li src="nov2020.html" title="The election issue" date="November 2020">The election issue, November 2020</li>
        
			  <li src="oct2020.html" title="Our Q3 Update" date="October 2020">Our Q3 Update, October 2020</li>
        
			  <li src="sep2020.html" title="The monopoly issue" date="September 2020">The monopoly issue, September 2020</li>
			  <li src="aug2020.html" title="The splintering of the Internet" date="August 2020">The splintering of the Internet, August 2020</li>
			  <li src="jul2020.html" title="Our Q2 Update" date="July 2020">Our Q2 Update, July 2020</li>
			  <li src="jun2020.html" title="How did we get here" date="June 2020">How did we get here, June 2020</li>
			  <li src="may2020.html" title="Operating during a pandemic" date="May 2020">Operating during a pandemic, May 2020</li>
			  <li src="apr2020.html" title="An update from 1984 Ventures" date="April 2020">An update, April 2020</li>
			  <li src="mar2020.html" title="An epidemic of misinformation" date="March 2020">An epidemic of misinformaation, March 2020</li>
			  <li src="feb2020.html" title="The disruption issue" date="February 2020">The disruption issue, February 2020</li>
			  <li src="jan2020.html" title="Our end of year letter" date="January 2020">Our end of year letter</li>
			  <li src="dec2019.html" title="The fake news issue" date="December 2019">The fake news issue, December 2020</li>
			  <li src="nov2019.html" title="The China culture clash" date="November 2019">The China culture clash, November 2019</li>
			  <li src="oct2019.html" title="Q3 Update" date="October 2019">Q3 Update, October 2019</li>
			  <li src="sep2019.html" title="The WeWork debacle" date="September 2019">The WeWork debacle, September 2019</li>
			  <li src="aug2019.html" title="The rise of Shopify" date="August 2019">The rise of Shopify, August 2019</li>
			  <li src="jul2019.html" title="Q2 Update" date="July 2019">Q2 Update, July 2019</li>
<!--			  <li src="jun2019.html" title="" date="">June 2019</li>
			  <li src="may2019.html" title="" date="">May 2019</li>
			  <li src="apr2019.html" title="" date="">April 2019</li>-->

			</ul>
		</div>
	</div>
</div>
	<script>
		/*/////////////////////////////////////////*/
		/*//////////   Z-INDEX CONTROL   //////////*/
		/*/////////////////////////////////////////*/
		var zzz = 0;


    var currTop = "#philosophy";

    $("#philosophy").data("pos",  0);
    $("#portfolio").data("pos", 1);    
    $("#newsletter").data("pos", 2);    

    currTop = "#philosophy";
    function updateMobile(clicked) {
      var mq = window.matchMedia( "(max-width: 700px)");
      if(mq.matches) {
        $(currTop).data("pos", $(clicked ).data("pos"));
        $(clicked).data("pos", 0);
        currTop = clicked;
    
    /*
        if(clicked == "#philosophy") {
          $("#philosophy").data("pos", 0);          
          $("#portfolio").data("pos", 1);              
          $("#newsletter").data("pos", 2);
        } else if(clicked == "#newsletter") {
          $("#philosophy").data("pos", 1);          
          $("#portfolio").data("pos", 2);              
          $("#newsletter").data("pos", 0);
        } else if(clicked == "#portfolio") {
          $("#philosophy").data("pos", 2);          
          $("#portfolio").data("pos", 0);              
          $("#newsletter").data("pos", 1);
     
      }

      if(currTop == "#philosophy" && $(clicked).data("pos") == 2)  {
          (clicked == "#portfolio") ? $("#newsletter").data("pos", 2) : $("#portfolio").data("pos",2);
          $("#philosophy").data("pos", 1);          
       } else {
         $(currTop).data("pos", $(clicked ).data("pos"));
       }

      if($("#portfolio").data("pos") == 0 || $("#portfolio").data("pos") == 1) {
          $("#portfolio").css("transform", "translate(0px,0px)");
        } else {
         $("#portfolio").css("transform", "translate(40px,-40px)");
        }
        if($("#newsletter").data("pos") == 0 || $("#newsletter").data("pos") == 1) {
          $("#newsletter, #archive").css("transform", "translate(-40px,40px)");
        } else {
         $("#newsletter, #archive").css("transform", "translate(0px,0px)");
        }
*/

        $("#philosophy").css("transform", "translate(" + $("#philosophy").data("pos") * 40 + "px," + $("#philosophy").data("pos") * -40 + "px)");
        $("#portfolio").css("transform", "translate(" + (1 - $("#portfolio").data("pos")) * -40 + "px," + (1 - $("#portfolio").data("pos")) * 40 + "px)");    
        $("#newsletter").css("transform", "translate(" + (2 - $("#newsletter").data("pos")) * -40 + "px," + (2 - $("#newsletter").data("pos")) * 40 + "px)");
        $("#archive").css("transform", "translate(" + (2 - $("#newsletter").data("pos")) * -40 + "px," + (2 - $("#newsletter").data("pos")) * 40 + "px)");    

        $("#philosophy").css("z-index", 2 - $("#philosophy").data("pos"));
        $("#portfolio").css("z-index", 2 - $("#portfolio").data("pos"));
        $("#newsletter").css("z-index", 2 - $("#newsletter").data("pos"));
        $("#archive").css("z-index", 2 - $("#newsletter").data("pos"));        
        }
      }
    
    $("#philosophy").click(function(event) {
      updateMobile("#philosophy");
      event.stopPropagation();
    
    });
    $("#portfolio").click(function(event) {
      updateMobile("#portfolio");
      event.stopPropagation();
    });
    $("#newsletter, #archive").click(function(event) {
      updateMobile("#newsletter");
      event.stopPropagation();
    });

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
      $(this).removeClass("clickable");
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
