<!DOCTYPE HTML>
<html>
	<head>
		<title>Ticket Booking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script src="js/modernizr.js"></script>
        <script src="js/simplecalendar.js"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/crumbs_style.css"> <!-- Resource style -->
        <link rel="stylesheet" href="css/style_popup.css">
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
		  <div id="header">
		  
		  <!-- Inner -->
						<div class="inner">                
							<header>
								<h1><a href="index.html" id="logo">The Maryville Aquarium</a></h1>
							</header>
                            
                            <div id="sign-up" class="cd-popup1" role="alert">
                              <div class="cd-popup-container1">
                                  <p>
                                  <form>
                                    <p>
                                        <label class="cd-form" for="signup-name">Name</label>
                                        <input class="cd-form" id="signup-name" type="text" placeholder="Name">
                                    </p>
                                    
                                    <p>
                                        <label class="cd-form" for="signup-user">Userame</label>
                                        <input class="cd-form" id="signup-user" type="text" placeholder="Username">
                                    </p>
                
                                    <p>
                                        <label class="cd-form" for="signup-password">Password</label>
                                        <input class="cd-form" id="signup-password" type="password" hidden placeholder="Password">
                                    </p>
                                    
                                   	<p>
                                        <label class="cd-form" for="signup-email">E-mail</label>
                                        <input class="cd-form" id="signup-email" type="email" placeholder="E-mail">
                                    </p>
                
                                    <p >
                                        <a href="index.html"><input class="cd-buttons" type="button" value="Register"></a>
                                    </p>
                                  </form>
                                  </p>
                                  
                                  <a href="#0" class="cd-popup-close1 img-replace"></a>
                              </div> 
                           </div>
                          <div id="sign-in" class="cd-popup2" role="alert">
                              <div class="cd-popup-container2">
                                  <p>
                                  <form>
                                    <p>
                                        <label class="cd-form" for="signin-email">E-mail</label>
                                        <input class="cd-form" id="signin-email" type="email" placeholder="E-mail">
                                    </p>
                
                                    <p >
                                        <label class="cd-form" for="signin-password">Password</label>
                                        <input class="cd-form" id="signin-password" type="password" hidden placeholder="Password">
                                    </p>
                
                                    <p>
                                        <input type="checkbox" id="remember-me-signup" checked>
                                        <label for="remember-me-signup">Remember me</label>
                                    </p>
                
                                    <p >
                                        <a href="index-logout.html"><input class="cd-buttons" type="button" value="Login"></a>
                                    </p>
                                  </form>
                                  </p>
                                  
                                  <a href="#0" class="cd-popup-close2 img-replace">Close</a>
                              </div> <!-- cd-popup-container -->
                          </div> <!-- cd-popup -->                        
                        </div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index-logout.html">Home</a></li>
								<li>
									<a href="#">Special Occasions</a>
									<ul>
										<li><a href="404-logout.html">Birthdays</a></li>
										<li><a href="404-logout.html">School Trips</a></li>
									</ul>
								</li>
                        		<li><a href="#0" class="cd-popup-trigger1">Register</a></li>
                                <li><a href="#0" class="cd-popup-trigger2">My Account</a></li>
                                <li><a href="about-us.html" class="">About Us</a></li>
								<li><a href="" class=""><input id="search-button" placeholder="Search" /></a></li>
								<li><a href="index.html" class="">Logout</a></li>
							</ul>
						</nav>
				</div>
			<div class="wrapper style" style="background-image:url(images/red-fighting-betta-white-background1.jpg); background-repeat:no-repeat; background-size:auto">
				
					<div class="container" >
						<article id="main" class="special">	
                                <section>
                                    <nav>
                                    <ol class="cd-multi-steps text-center custom-icons">
                                        <li id="pg1" class="current"><a href="book-logout.php">Select Tickets</a></li>
                                        <li id="pg2"><a href="book02-logout.html">...And More!</a></li>
                                        <li id="pg3"><a href="book03.html">Pay Up!</a></li>
                                        <li id="pg4"><a href="book04.html">Here you go!</a></li>
                                    </ol>
                                 </nav>
								
                                 <div class="wrapper" style="marin-top:1em;margin-left:2em;">
                                 <div class="visitshow" style="margin-left:18em;">
                                    <h3 style="margin-left:6em;"><span>Choose the show you want to visit:</span></h3>
                                      <br/>
									  
                                      <select id="visit-show" style="margin-left:0em; width:34em;">
                                          <option selected="selected">---Select a show---</option>
                                      <!--    <option>Dolphin Discovery</option>
                                          <option>Jellies Invasion</option>
                                          <option>Living Seashore</option>
                                          <option>Shark Alley</option>                                       
                                          <option>Waterfront Park</option>                                       
                                          <option>Blacktip Reef</option>   -->
										<?php 
										$conn = mysqli_connect("localhost", "root", "", "aquariamdb");
									// Check connection
										if (!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}
										
										$sql = mysqli_query($conn,'SELECT name FROM shows');
										while ($row = mysqli_fetch_array($sql)){
										echo "<option value=".$row['name'].">".$row['name']."</option>";
										}
										mysqli_close($conn);

										?>										  
                                      </select>
                                    </div>      
                                    <br/>
                                 	<div class="visitday">
                                 		<h3 style="margin-left:0px;"><span>Choose the visit date:</span></h3>
                                        <br/>
                                    	<input type="date" id="selectedDate"/>
                                    </div>
                                    <div class="visittime">
                                      <h3 style="margin-left:0px;"><span>Choose the show timings:</span></h3>
                                      <br/>
                                      <select id="visitTime">
                                      <option selected="selected">---Select a slot---</option>
                                          <option value="09:00 am - 10:00 am">09:00 am - 10:00 am</option>
                                          <option value="10:00 am - 11:00 am">10:00 am - 11:00 am</option>
                                          <option value="11:00 am - 12:00 apm">11:00 am - 12:00 pm</option>
                                          <option value="01:00 pm - 02:00 pm">01:00 pm - 02:00 pm</option>                                       
                                          <option value="02:00 pm - 03:00 pm">02:00 pm - 03:00 pm</option>                                       
                                          <option value="03:00 pm - 04:00 pm">03:00 pm - 04:00 pm</option>                                       
                                          <option value="05:00 pm - 05:00 pm">04:00 pm - 05:00 pm</option>                                       
                                          <option value="05:00 pm - 06:00 pm">05:00 pm - 06:00 pm</option>                                       
                                      </select>
                                    </div>
                                    <br/><br/><br/><br/><br/><br/>
                                    <div class="visitadults">
                                      <h3>&emsp;&emsp;&nbsp;&nbsp;&nbsp;&thinsp;Adults:</h3>
                                      <h4>Ages 13-65</h4>
                                      <br/>
                                      <select id="visit-adults">
                                      <option selected="selected">0</option>
                                          <option value="01">01</option>
                                          <option value="02">02</option>
                                          <option value="03">03</option>
                                          <option value="04">04</option>                                       
                                          <option value="05">05</option>                                       
                                          <option value="06">06</option>                                       
                                          <option value="07">07</option>                                       
                                          <option value="08">08</option>                                       
                                          <option value="09">09</option>                                      
                                          <option value="10">10</option>                                        
                                      </select>
                                    </div>
                                    <div class="visitchildren">
                                      <h3><span>&emsp;&emsp;&nbsp;&nbsp;Children:</span></h3>
                                      <h4>Ages 04-12</h4>
                                      <br/>
                                      <select id="visit-children">
                                      <option selected="selected">0</option>
                                         <option value="01">01</option>
                                          <option value="02">02</option>
                                          <option value="03">03</option>
                                          <option value="04">04</option>                                       
                                          <option value="05">05</option>                                       
                                          <option value="06">06</option>                                       
                                          <option value="07">07</option>                                       
                                          <option value="08">08</option>                                       
                                          <option value="09">09</option>                                      
                                          <option value="10">10</option>                                        
                                      </select>
                                    </div>
                                    <div class="visitelder">
                                      <h3><span>&emsp;&emsp;&nbsp;&nbsp;&nbsp;Elderly:</span></h3>
                                      <h4>&thinsp; Ages 65+</h4>
                                      <br/>
                                      <select id="visit-elder">
                                      <option selected="selected" >0</option>
                                          <option value="01">01</option>
                                          <option value="02">02</option>
                                          <option value="03">03</option>
                                          <option value="04">04</option>                                       
                                          <option value="05">05</option>                                       
                                          <option value="06">06</option>                                       
                                          <option value="07">07</option>                                       
                                          <option value="08">08</option>                                       
                                          <option value="09">09</option>                                      
                                          <option value="10">10</option>                                     
                                      </select>
                                    </div>
									
                                 </div><br/><br/>
                                <!-- <div style="margin-left:29em;">
                                 <label class="total-cost" for="total-cost"><h3>&emsp;&emsp;&emsp;Total Cost</h3></label> &emsp;
                                 <input class="total-cost" id="total-cost" type="number" placeholder="Cost" disabled>
                                 </div>
								 
								 -->
                                 
                                 <div class="style1">
                                 	<label class="ticket-form" for="info-book">Visiting for the first time? Select here to get first-time visitor discount!</label> &thinsp; &thinsp;
                                            <input type="checkbox" name="new-visitor" >
									<!--onclick="book02.html"-->
									<a href="book02.html"><button id="next-button" style="margin-left: 10em;" onclick="book02-logout.html" type="submit" value="Next" >Next</button></a>
                                 </div>
								 
                           	</section>
					  </article>
					</div>
					</form>
				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Comments -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-comment circled"><span class="label">Comments</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												"Highly recommend for any age! I loved it as much as my 9 year old."<br/>
												<span class="timestamp">5 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												"I've been to many aquariums in my days, and this one does not dissapoint! There are many 
                                                wings to this aquarium and all are lots of fun!"<br/>
												<span class="timestamp">30 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												"The place was a very educational experience. Since we were deaf, the tour guide was really helpful
                                                in helping us understand the exhibits."<br/>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												"The Jellyfish display was amazing! This is a great place to spend a full day and despite the 
                                                fact it was really well done, the tickets were reasonable."<br/>
												<span class="timestamp">5 hours ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
									</header>
                                    <table>
                                      <tr>
                                          <td>Name: </td>
                                          <td><input id="name" class="contactInput" placeholder="Name" required></td>
                                      </tr>
                                      <tr>
                                      	<td colspan="2">__________________________________________</td>
                                      </tr>
                                      <tr>
                                          <td style="padding-top:15px;">Email: </td>
                                          <td><input id="email" class="contactInput" placeholder="Email address" required></td>
                                      </tr>
                                      <tr>
                                      	<td colspan="2">__________________________________________</td>
                                      </tr>
                                      <tr>
                                          <td style="margin-top:0px">Message: </td>
                                          <td style="padding-top:15px"><textarea id="message" class="contactInput" placeholder=""></textarea></td>
                                      </tr>
                                      <tr>
                                      <td  style="padding-top:35px;" colspan="2"> <button class="submitContactInfo" type="submit" >Submit</button></td>
                                      </tr>
                                  </table>
								</section>

							<!-- Photos -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row 25% no-collapse">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
										</div>
									</div>
									<div class="row 25% no-collapse">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
										</div>
									</div>
									<div class="row 25% no-collapse">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Want to see more?</h3>
										</header>
										<p>Connect with us socially, share on our wall, tweet on our feed or explore more amazing pictures!.</p>
										<ul class="icons">
                                          <li><a href="https://twitter.com/" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                          <li><a href="https://www.facebook.com/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                          <li><a href="https://www.instagram.com/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                          <li><a href="https://www.pinterest.com/" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; All rights reserved.</li><li>The Maryville Aquarium</li>
										</ul>
									</div>
						  </div>
					  </div>
					</div>
		  </div>
	</div>

		<!-- Scripts -->
			<!-- <script src="assets/js/jquery.min.js"></script> -->
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
</body>
</html>