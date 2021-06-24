<!DOCTYPE html>
<html lang="en">
<?php include('_head.php');?>
<body>
<!-- Preloader -->
<?php include('_preloader.php');?>
<div class="container">
	<!-- Header -->
	<?php include('_header.php');?>
	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Started -->
		<div class="section started">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="started-content">
						<div class="h-title glitch-effect" data-text="Contact">Contact</div>
						<div class="h-subtitle typing-bread">
							<p><a href="/">Home</a> / <a href="/contact">Contact</a></p>
						</div>
						<span class="typed-bread"></span>
					</div>
				</div>
			</div>
			<a href="#" class="mouse_btn"><span class="ion ion-mouse"></span></a>
		</div>
    <!-- Contacts Info -->
    <div class="section contacts">
      <div class="content">
        <div class="title">
          <div class="title_inner">Get In Touch</div>
        </div>
        <p>
          I am always looking for opportunities to learn and collaborate with others. Please, feel free to reach out to me.
          I'll do my best to get back to you.
        </p>
        <div class="service-items">
          <div class="service-item">
            <div class="icon"><span class="ion ion-android-phone-portrait"></span></div>
            <div class="name">Phone</div>
            <p>+234(0)909 600 0024</p>
          </div>
          <div class="service-item">
            <div class="icon"><span class="ion ion-email"></span></div>
            <div class="name">Email</div>
            <p><a href="mailto:mail@cjamanambu.com">mail@cjamanambu.com</a></p>
          </div>
          <div class="service-item">
            <div class="icon"><span class="ion ion-ios-location"></span></div>
            <div class="name">Address</div>
            <p>Abuja, Nigeria</p>
          </div>
        </div>
        <div class="contact_form">
          <form id="cform" method="post">
            <div class="group-val">
              <input type="text" name="name" placeholder="Name" />
            </div>
            <div class="group-val">
              <input type="text" name="email" placeholder="Email" />
            </div>
            <div class="group-val ct-gr">
              <textarea name="message" placeholder="Message"></textarea>
            </div>
            <a href="#" class="btn" onclick="$('#cform').submit(); return false;" data-text="Send Message">Send Message</a>
          </form>
          <div class="alert-success">
            <p>
              Thanks, your message is sent successfully. We will contact you shortly!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
	<!-- Footer -->
	<?php include('_footer.php');?>
	<!-- Lines -->
	<?php include('_lines.php');?>
</div>
<?php include('_scripts.php');?>
</body>
</html>