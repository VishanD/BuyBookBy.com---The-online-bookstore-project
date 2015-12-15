<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script type="text/javascript" src="javascripts/loginpopup.js"></script>

		<title>	BuyBookBy.com | Terms &amp; Conditions	</title>
		<link rel="shortcut icon" href="images/logo.jpg" /> <!--Icon displayed with the title-->
		
		<style type="text/css">
			div.content
			{
				position: absolute;
				top: 25%;
				left: 10%;
				width: 80%;
			}
			
			 .bag
				{
					margin-left:86%;
					margin-top:-20px;
					
				}
				
			.shop
				{
					margin-top:-5px;
					margin-left:87%;
				}
			
		</style>
	</head>
	
	<body>
		<div class="header">
			<div class="topnavigationBar" align="center">
				<nav>
					<?php 
			session_start();
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]))	{		
		
			echo 	'<a class="link2" href="sign_in.php">Sign In</a>|';
			echo    '<a class="link2" href="sign_up.php">Sign Up</a>|';
		}
		elseif($_SESSION["userlevel"] == 2) {
			echo '<a class="link2" href="check_logout.php">Sign out</a>|';
			echo'<a class="link2" href="myaccount.php">My Account</a>|';
			echo '<a class="link2" href="orderstatus.php">Order Status</a>|';
			
		}
		else {
			{
				echo '<a class="link2" href="check_logout.php">Sign out</a>|';
				echo '<a class="link2" href="admin_panel.php">Admin Panel</a>|';
				
			}
		}
		
		
		
		?>
					<a class="link2" href="privacy_policy.php">Privacy Policy</a>|
					<a class="link2" href="terms_&_conditions.php">Terms &amp; Conditions</a>|
					<a class="link2" href="site_map.php">Sitemap</a>
				</nav>
				
				
						<?php 
		
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]) || $_SESSION["userlevel"] == 2)	{		
		
		echo	'<a href="view_cart.php"><img class="bag"src="images/shopping_bag.jpg" height="85" width="85"</a>
				<p class="shop">Shopping Bag</p>';
		}
		
		
		
		?>
				
				
			</div>
	 		
	 			<img src="images/logo.jpg" width="10%" height="10%"> 	<!--can't add an anchor tag here. something appears on the page-->
	 		<a href="home.php">	
	 			<img src="images/LOGO FINAL.jpg" width="25%" height="30%"> 
	 		</a>
		</div>
		
		<div class="navigationBar1">
			<nav class="navBar1">
			<a class="link1" href="home.php">Home  </a>
			<a class="link1" href="about_us.php">About us </a>
	<?php 
		
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]) || $_SESSION["userlevel"] == 2)	{		
		
		echo	'<a class="link1" href="categories.php">Categories </a>';
		}
		
		
		
		?>
			
			
			<a class="link1" href="FAQ.php">FAQ </a>
			<?php 
		
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]) || $_SESSION["userlevel"] == 2)	{		
		
		echo	'<a class="link1" href="feedback.php">Feedback </a>';
		}
		
		
		
		?>
			<a class="link1" href="Contact-us2.php">Contact Us</a>			
			</nav>
		</div>
		
		<div>
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			         Search your book here!"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		</div>
		
		<div style="position: absolute;	top: 461%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
		<div class="content">
							
			 <h3>Terms & Conditions</h3>

          	 <h4>Introduction</h4>
          	 <p>The Website Owner, including subsidiaries and affiliates ("Website" or "Website Owner" or "we" or "us" or "our") provides the information contained on this website or any of the pages comprising the website ("website") to visitors ("visitors") (cumulatively referred to as "you" or "your" hereinafter) subject to the terms and conditions set out in these website terms and conditions, the privacy policy and any other relevant terms and conditions, policies and notices which may be applicable to a specific section or module of this website.</p>
           	 <h4>Information on the Website</h4>
          	 <p>Whilst every effort is made to update the information contained on this website, neither the Website Owner nor any third party or data or content provider make any representations or warranties, whether express, implied in law or residual, as to the sequence, accuracy, completeness or reliability of information, opinions, any share price information, research information, data and/or content contained on the website (including but not limited to any information which may be provided by any third party or data or content providers) ("information") and shall not be bound in any manner by any information contained on the website. the Website Owner reserves the right at any time to change or discontinue without notice, any aspect or feature of this website. No information shall be construed as advice and information is offered for information purposes only and is not intended for trading purposes. You and your company rely on the information contained on this website at your own risk. If you find a			                n 			error or omission at this site, please let us know.</p>
           	 <h4>Trade Marks</h4>
          	 <p>The trade marks, names, logos and service marks (collectively "trade marks") displayed on this website are registered and unregistered trade marks of the Website Owner. Nothing contained on this website should be construed as granting any licence or right to use any trade mark without the prior written permission of the Website Owner.</p>
           	 <h4>External Links</h4>
          	 <p>External links may be provided for your convenience, but they are beyond the control of the Website Owner and no representation is made as to their content. Use or reliance on any external links and the content thereon provided is at your own risk. When visiting external links you must refer to that external websites terms and conditions of use. No hypertext links shall be created from any website controlled by you or otherwise to this website without the express prior written permission of the Website Owner. Please contact us if you would like to link to this website or would like to request a link to your website.</p>
         	 <h4>Public Forums and User Submissions</h4>
          	 <p>
           		The Website Owner is not responsible for any material submitted to the public areas by you (which include bulletin boards, hosted pages, chat rooms, or any other public area found on the website. Any material (whether submitted by you or any other user) is not endorsed, reviewed or approved by the Website Owner. The Website Owner reserves the right to remove any material submitted or posted by you in the public areas, without notice to you, if it becomes aware and determines, in its sole and absolute discretion that you are or there is the likelihood that you may, including but not limited to -
          	 </p>
          	 <p>a. defame, abuse, harass, stalk, threaten or otherwise violate the rights of other users or any third parties;</p>
           	 <p>b. publish, post, distribute or disseminate any defamatory, obscene, indecent or unlawful material or information;</p>
          	 <p>c. post or upload files that contain viruses, corrupted files or any other similar software or programmes that may damage the operation of the Website Owner's and/or a third party's computer system and/or network;</p>
          	 <p>d. violate any copyright, trade mark, other applicable Sri Lanka or international laws or intellectual property rights of the Website Owner or any other third party;</p>
           	 <p>e. submit contents containing marketing or promotional material which is intended to solicit business.</p>
          	 <h4>Specific Use</h4>
          	 <p>You further agree not to use the website to send or post any message or material that is unlawful, harassing, defamatory, abusive, indecent, threatening, harmful, vulgar, obscene, sexually orientated, racially offensive, profane, pornographic or violates any applicable law and you hereby indemnify the Website Owner against any loss, liability, damage or expense of whatever nature which the Website Owner or any third party may suffer which is caused by or attributable to, whether directly or indirectly, your use of the website to send or post any such message or material.</p>
          	 <h4>Warranties</h4>
          	 <p>The Website Owner makes no warranties, representations, statements or guarantees (whether express, implied in law or residual) regarding the website, the information contained on the website, your or your company's personal information or material and information transmitted over our system.</p>
           	 <h4>Disclaimer of Liability</h4>
          	 <p>The Website Owner shall not be responsible for and disclaims all liability for any loss, liability, damage (whether direct, indirect or consequential), personal injury or expense of any nature whatsoever which may be suffered by you or any third party (including your company), as a result of or which may be attributable, directly or indirectly, to your access and use of the website, any information contained on the website, your or your company's personal information or material and information transmitted over our system. In particular, neither the Website Owner nor any third party or data or content provider shall be liable in any way to you or to any other person, firm or corporation whatsoever for any loss, liability, damage (whether direct or consequential), personal injury or expense of any nature whatsoever arising from any delays, inaccuracies, errors in, or omission of any share price information or the transmission thereof, or for any actions taken in reliance thereon or occasioned th				ereby or by reason of non-performance or interruption, or termination thereof.</p>
          	 <h4>Use of the Website</h4>
          	 <p>The Website Owner does not make any warranty or representation that information on the website is appropriate for use in any jurisdiction (other than Great Britain ). By accessing the website, you warrant and represent to the Website Owner that you are legally entitled to do so and to make use of information made available via the website.</p>
          	 <h4>General</h4>
          	 <h4>a. Entire Agreement</h4>
         	 <p>These website terms and conditions constitute the sole record of the agreement between you and the Website Owner in relation to your use of the website. Neither you nor the Website Owner shall be bound by any express tacit or implied representation, warranty, promise or the like not recorded herein. Unless otherwise specifically stated these website terms and conditions supersede and replace all prior commitments, undertakings or representations, whether written or oral, between you and the Website Owner in respect of your use of the website.</p>
          	 <h4>b. Alteration</h4>
          	 <p>the Website Owner may at any time modify any relevant terms and conditions, policies or notices. You acknowledge that by visiting the website from time to time, you shall become bound to the current version of the relevant terms and conditions (the "current version") and, unless stated in the current version, all previous versions shall be superseded by the current version. You shall be responsible for reviewing the then current version each time you visit the website.</p>
          	 <h4>c. Conflict</h4>
         	 <p>Where any conflict or contradiction appears between the provisions of these website terms and conditions and any other relevant terms and conditions, policies or notices, the other relevant terms and conditions, policies or notices which relate specifically to a particular section or module of the website shall prevail in respect of your use of the relevant section or module of the website.</p>
         	 <h4>d. Waiver</h4>
         	 <p>No indulgence or extension of time which either you or the Website Owner may grant to the other will constitute a waiver of or, whether by estoppel or otherwise, limit any of the existing or future rights of the grantor in terms hereof, save in the event or to the extent that the grantor has signed a written document expressly waiving or limiting such rights.</p>
         	 <h4>e. Cession</h4>
          	 <p>The Website Owner shall be entitled to cede, assign and delegate all or any of its rights and obligations in terms of any relevant terms and conditions, policies and notices to any third party.</p>
          	 <h4>f. Severability</h4>
         	 <p>All provisions of any relevant terms and conditions, policies and notices are, notwithstanding the manner in which they have been grouped together or linked grammatically, severable from each other. Any provision of any relevant terms and conditions, policies and notices, which is or becomes unenforceable in any jurisdiction, whether due to voidness, invalidity, illegality, unlawfulness or for any reason whatever, shall, in such jurisdiction only and only to the extent that it is so unenforceable, be treated as pro non scripto and the remaining provisions of any relevant terms and conditions, policies and notices shall remain in full force and effect.</p>
         	 <h4>g. Applicable laws</h4>
          	 <p>Any relevant terms and conditions, policies and notices shall be governed by and construed in accordance with the laws of Sri Lanka without giving effect to any principles of conflict of law. You hereby consent to the exclusive jurisdiction of the High Court of Sri Lanka in respect of any disputes arising in connection with the website, or any relevant terms and conditions, policies and notices or any matter related to or in connection therewith.</p>
         	 <h4>h. Comments or Questions</h4>
          	 <p>If you have any questions, comments or concerns arising from the website, the <a target="_blank" href="privacy_policy.html">privacy policy</a> or any other relevant terms and conditions, policies and notices or the way in which we are handling your personal information please <a href="#">contact us</a>.
          	 </p>
          	 <!--target="_blank" opens the link in a new tab/window (depends on the browser)-->		
		</div>

		<div style="position: absolute;	top: 470%; left: 30%";>
		
		<footer "style= text-align:center">
		
		
			
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
				
		</div>
			
		<div style="position: absolute;	top: 470%; left: 1%";>
				
			<p>&copy; Copyright 2014 BuyBookBy.com</p>			
				
		</div>
				
		</footer>
		
	</body>
	
</html>

