<?php
include "layouts/header.php" ?>
<style>

	
	.main_btm {
		/* background: #dddddd; */
		background-image: url("images/c2.jpg");

	}

	.contact {
		color: white;
	}

	.company_address {
		color: dark-black;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function () {
		$("#uploadForm").on('submit', function (e) {
			e.preventDefault();
			console.log("Form submitted"); // Log message to ensure the form submission event is triggered
			$.ajax({
				type: 'POST',
				url: 'contactb.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (response) {
					console.log("Response received:", response); // Log the response received from the server
					if (response.trim() === 'ok') { // Trim the response to remove any whitespace
						alert("hello world");
						}
				}
			});
		});
	});

</script>

<div class="main_btm">
	<div class="wrap">
		<div class="main">
			<div class="contact">
				<div class="section group">
					<div class="col span_1_of_2">
						<div class="contact_info">
							<h2>Find Us Here</h2>
							<div class="map">
								<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0"
									marginwidth="0"
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578.8393989158765!2d80.89468069273917!3d26.929093331953887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399956564d730943%3A0xa3f27afc8ce7218b!2sKhwaja%20Moinuddin%20Chishti%20Language%20University!5e0!3m2!1sen!2sin!4v1696244925070!5m2!1sen!2sin"
									width="600" height="450" style="border:0;"
									allowfullscreen></iframe></iframe><br><small><a
										href=" https://maps.app.goo.gl/BMScTbbpPcvce58J9"
										style="color: #575757;text-align:left;font-size:13px">View Larger
										Map></a></small>

							</div>
						</div>
						<div class="company_address" style="color:black;">
							<h2>College Address </h2>
							<p>Khwaja Moinuddin Chishti Language University,</p>
							<p>Sitapur, Hardoi Bypass Rd, Lucknow, Uttar Pradesh 226013</p>
							<p>India</p>
							<p>Phone:0522 277 4041</p>
							<p>Email: <a href="kmc@gmail.com"></a></p>
							<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>

						</div>
						<div class="clear"></div>
					</div>
					<div class="col span_2_of_4">
						<div class="contact-form">
							<h2 class="style">Contact Us</h2>
							<form id="uploadForm" enctype="multipart/form-data">
								<div>
									<span><label>NAME</label></span>
									<span><input name="userName" type="text" class="textbox" style="height"></span>
								</div>
								<div>
									<span><label>E-MAIL</label></span>
									<span><input name="userEmail" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>MOBILE</label></span>
									<span><input name="userPhone" type="text" class="textbox"></span>
								</div>
								<div>
									<span><label>SUBJECT</label></span>
									<span><textarea name="userMsg"> </textarea></span>
								</div>
								<div>
									<span><button type="submit">submit me</button></span>
								</div>
							</form>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include "layouts/footer.php" ?>
