<!DOCTYPE HTML>
<html>

<head>
  <title>Niesslein Technology</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    
	<div id="top_split">	
	
	<header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Niesslein<span class="logo_colour">_Technology</span></a></h1>
          <h2>Helping people through technology.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li><a href="page.html">A Page</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="#">Example Drop Down</a>
            <ul>
              <li><a href="#">Drop Down One</a></li>
              <li><a href="#">Drop Down Two</a>
                <ul>
                  <li><a href="#">Sub Drop Down One</a></li>
                  <li><a href="#">Sub Drop Down Two</a></li>
                  <li><a href="#">Sub Drop Down Three</a></li>
                  <li><a href="#">Sub Drop Down Four</a></li>
                  <li><a href="#">Sub Drop Down Five</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down Three</a></li>
              <li><a href="#">Drop Down Four</a></li>
              <li><a href="#">Drop Down Five</a></li>
            </ul>
          </li>
          <li class="selected"><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>

      <ul id="images">
        <li><img src="images/1.jpg" width="600" height="300" alt="gallery_buildings_one" /></li>
        <li><img src="images/2.jpg" width="600" height="300" alt="gallery_buildings_two" /></li>
        <li><img src="images/3.jpg" width="600" height="300" alt="gallery_buildings_three" /></li>
        <li><img src="images/4.jpg" width="600" height="300" alt="gallery_buildings_four" /></li>
        <li><img src="images/5.jpg" width="600" height="300" alt="gallery_buildings_five" /></li>
        <li><img src="images/6.jpg" width="600" height="300" alt="gallery_buildings_six" /></li>
      </ul>	  
	
	</header>

	</div>  
	
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>January 1st, 2014</h5>
          <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
          <h4>20% Discount</h4>
          <h5>December 1st, 2013</h5>
          <p>We are offering a 20% discount to all new customers.<br /><a href="#">Read more</a></p>
        </div>
      </div>
      <div class="content">
        <h1>Contact Us</h1>
        <p>Say hello, using this contact form.</p>
		<form method="post" action="http://www.glamitup2.com/formmail.php" name="Contact">
							    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />

								<!-- STEP 2: Put your email address in the 'recipients' value.
											 Note that you also have to allow this email address in the
											 $TARGET_EMAIL setting within formmail.php!
								-->
								<input type="hidden" name="recipients" value="tara@glamitup2.com" />

								<!-- STEP 3: Specify required fields in the 'required' value - or leave unchanged.
										NOTE: DO NOT put your email address and name here.
										"Your email address" and "Your name" are error messages for your users to see,
										not placeholders for you to replace.
								-->
								<input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name" />

								<!-- STEP 4: Put your subject line in the 'subject' value. -->
								<input type="hidden" name="subject" value="Webpage Order" />

								<!-- ALL DONE! Visit our site for HOW TO guides and more complex features. -->

								<!-- this derives (creates) "email" and "realname" special fields from the input fields -->
								<input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName" />

								<!-- this excludes the "email" and "realname" special fields from the body of the email you receive -->
								<input type="hidden" name="mail_options" value="Exclude=email;realname" />
							<fieldset>
								<div class="clearfix">
									<label for="name"><h4><span>Name:</span></h4></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="FullName" type="text" value="" class="input-xlarge" placeholder="Name">	
								</div>
								
								<div class="clearfix">
									<label for="email"><h4><span>Email:</span></h4></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="EmailAddr" type="text" value="" class="input-xlarge" placeholder="Email Address">	
									</div>
								</div>
								
								<div class="clearfix">
									<label for="phone"><h4><span>Phone:</span></h4></label>
									<div class="input">
										<input tabindex="3" size="25" id="phone" name="Phone" type="text" value="" class="input-xlarge" placeholder="Phone Number">
									</div>
								</div>
								<div class="clearfix">
									<label for="message"><h4><span>Message:</span></h4></label>
									<div class="input">
										<textarea tabindex="14" class="input-xlarge" id="message" name="mesg" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="15" type="submit" value="Submit" class="btn btn-inverse">Send message</button>
									
								</div>
						    </fieldset>
        <?php
          // This PHP Contact Form is offered &quot;as is&quot; without warranty of any kind, either expressed or implied.
          // Andrew Raynor at www.css3templates.co.uk shall not be liable for any loss or damage arising from, or in any way
          // connected with, your use of, or inability to use, the website templates (even where Andrew Raynor has been advised
          // of the possibility of such loss or damage). This includes, without limitation, any damage for loss of profits,
          // loss of information, or any other monetary loss.

          // Set-up these 3 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the subject of the email you will receive, when someone contacts you
          // 3. Enter the text that you would like the user to see once they submit the contact form
  /*        $to = 'mniesslein@gmail.com';
          $subject = 'Enquiry from the website';
          $contact_submitted = 'Your message has been sent.';

	$youremail = $yourname = $yourmessage = '';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            $youremail = trim(htmlspecialchars($_POST['your_email']));
            $yourname = stripslashes(strip_tags($_POST['your_name']));
            $yourmessage = stripslashes(strip_tags($_POST['your_message']));
            $contact_name = "Name: ".$yourname;
            $message_text = "Message: ".$yourmessage;
            $user_answer = trim(htmlspecialchars($_POST['user_answer']));
            $answer = trim(htmlspecialchars($_POST['answer']));
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
            if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
              mail($to,$subject,$message,$headers);
              $yourname = '';
              $youremail = '';
              $yourmessage = '';
              echo '<p style="color: blue;">.'$contact_submitted'.</p>';
            }
            else { echo '<p style="color: red;">Please enter your name, a valid email address, your message and the answer to the simple maths question before sending your message.</p>'; }
          }
          $number_1 = rand(1, 9);
          $number_2 = rand(1, 9);
          $answer = substr(md5($number_1+$number_2),5,10);
        ?>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
            <p style="line-height: 1.7em;">To help prevent spam, please enter the answer to this question:</p>
            <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
          </div>
        </form>
      </div>*/
	  
	  
    </div>
    <footer>
      <p>Copyright &copy; Niesslein Technology | <a href="http://fotogrph.com/">Images</a> | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
