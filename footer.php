<?php
if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    $projectRoot = ($scriptDir === '/' || $scriptDir === '.' || $scriptDir === '') ? '/' : rtrim($scriptDir, '/') . '/';
    if (strpos($host, 'university360.co') !== false) {
        define('BASE_URL', 'https://university360.co/');
    } else {
        define('BASE_URL', $protocol . $host . $projectRoot);
    }
}
$base_url = BASE_URL;
?>
<!-- Start Footer Section -->

<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4" id="footer-b1">
				<div class="footer-logo-wrap mb-3">
					<!-- <a href="index">
						<img src="images/univ360-logo.png" alt="University 360 Logo"
							style="width: 250px; max-width: 100%; height: auto;">
					</a> -->

					<div class="nav-title">
						<a href="<?= $base_url ?>"><img src="images/univ360-logo-icon.png" class="logo-img"
								alt="University360 Logo"></a>
						<div class="logo_text">
							<a href="<?= $base_url ?>">
								<h2>UNIVERSITY<span class="logo_text_black">360°</span></h2>
							</a>
							<p>Authorised Information and Guidance Partner</p>
						</div>
					</div>
				</div>
				<ul class="footer-simple-contact-list">
					<li>
						<i class="fa fa-map-marker" style="color: #ffffff; font-size: 17px; margin-right: 10px;"></i>
						<span><strong>Address:</strong> B-63, Sector-2, Noida, Gautam Buddha Nagar, Noida, Uttar
							Pradesh, India, 201301</span>
					</li>
					<li>
						<i class="fa fa-phone" style="color: #ffffff; font-size: 16px; margin-right: 10px;"></i>
						<span><strong>Call Support:</strong> <a href="tel:+919218082995"> +91 92180 82995</a></span>
					</li>
					<li>
						<i class="fa fa-envelope" style="color: #ffffff; font-size: 15px; margin-right: 10px;"></i>
						<span><strong>Email:</strong> <a
								href="mailto:mail@university360.co">mail@university360.co</a></span>
					</li>
				</ul>
			</div>


			<div class="col-md-4" id="footer-b1">
				<h3>Top Online Degree Programs</h3>
				<hr>
				<p>
					Online MBA<br>
					Online MCA<br>
					Online M.Com<br>
					Online MA<br>
					Online M.Sc<br>
					Online BBA<br>
					Online BCA<br>
					Online B.Com<br>
					Online BA<br>
				</p>
			</div>


			<div class="col-md-4" id="footer-b1">
				<h3 class="footer-h">Top Online &amp; Distance Universities</h3>
				<hr>
				<ul class="footer-univ-links">
					<li><a href="<?= $base_url ?>lpu">Lovely Professional University</a></li>
					<li><a href="<?= $base_url ?>mu">Mangalayatan University</a></li>
					<li><a href="<?= $base_url ?>uu">Uttaranchal University</a></li>
					<li><a href="<?= $base_url ?>galgotias">Galgotias University</a></li>
					<li><a href="<?= $base_url ?>amity">Amity University Online</a></li>
					<li><a href="<?= $base_url ?>cu">Chandigarh University</a></li>
					<li><a href="<?= $base_url ?>manipal">Manipal University</a></li>
					<li><a href="<?= $base_url ?>smu">Sikkim Manipal University</a></li>
					<li><a href="<?= $base_url ?>bdu">Bharathidasan University</a></li>
					<li><a href="<?= $base_url ?>aju">Arka JAIN University</a></li>
				</ul>
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 footer-bottom">
		<p>University360 is an independent education guidance and counselling platform. Our partner universities have
			authorized us to share information about their programs. We do not award degrees and act only as a
			counselling partner. All admissions, approvals, and course policies are governed by the respective
			universities.

			<br><br>
			<a href="<?= $base_url ?>about-us">About Us</a> | <a
				href="<?= $base_url ?>contact-us">Contact
				Us</a> | <a href="<?= $base_url ?>disclaimer">Disclaimer</a> | <a
				href="<?= $base_url ?>terms-and-conditions">Terms &amp; Conditions</a> | <a
				href="<?= $base_url ?>privacy-policy">Privacy Policy</a>
		</p>
	</div>
</div>

<div id="footer-bottom-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Copyright © 2026 UNIVERSITY 360, All Rights Reserved</p>
			</div>
		</div>
	</div>
</div>


<!-- Disclaimer Popup -->
<div id="disclaimerPopup" class="custom-modal">
	<div class="custom-modal-content">
		<span class="close-btn" data-close="disclaimerPopup">&times;</span>

		<h2 style="text-align:center;">Disclaimer</h2>
		<hr>

		<p>
			This information is provided by university360.co, under the legal entity of UNIVERSITY 360, providing
			information, guidance, and
			counselling services about UGC-DEB-approved universities. We do not act as a university or an admission
			authority.
		</p>

		<h5>Essential Points</h5>
		<ul>
			<li>All university names, logos, and trademarks used are for informational purposes only.</li>
			<li>Our role is to provide updates, information, and guidance on universities regarding their distance or
				online education programs.</li>
			<li>We do not charge students any fees for counselling or guidance on university applications.</li>
			<li>We do not issue degrees, mark sheets, or certificates in the name of any university.</li>
			<li>Our aim is to offer free and unbiased counselling to help students choose the right path.</li>
			<li>We respect the integrity and reputation of all listed universities and do not engage in any activity
				that damages their credibility.</li>
			<li>Users are encouraged to verify information from official university portals before making decisions.
			</li>
			<li>Our services are transparent, legal, and purely for student support. </li>
		</ul>
	</div>
</div>

<!-- Terms Popup -->
<div id="termsPopup" class="custom-modal">
	<div class="custom-modal-content">
		<span class="close-btn" data-close="termsPopup">&times;</span>
		<h2 style="text-align:center;">Terms and Conditions</h2>

		<hr>

		<p>This page outlines the terms and conditions that apply when you access or use services provided on this
			platform, operated by UNIVERSITY 360 under university360.co.</p>

		<br>

		<p>We help students and working professionals explore distance and online education options offered by
			UGC-DEB-approved universities. These terms outline how we support the process, particularly when payments
			and third-party tools are involved.</p>

		<h5>1. Our Role</h5>
		<p>We provide information and counselling services only. We are not a university and do not collect any
			university fees directly. All academic or admission-related payments must be made to the respective
			university.</p>

		<h5>2. Unauthorised Use or Fraud</h5>
		<p>If you suspect any unauthorised transaction linked to a service on our platform, report it immediately. We
			will coordinate with the respective payment partner for further action.</p>

		<h5>3. Updates to These Terms</h5>
		<p>These terms may be updated as services evolve. Continued use of this platform implies your agreement to the
			latest version of these terms. </p>

		<h5>4. Contact Us</h5>
		<p>For support, email us at: mail@university360.co</p>
	</div>
</div>



<!-- Privacy Popup -->
<div id="privacyPopup" class="custom-modal">
	<div class="custom-modal-content">
		<span class="close-btn" data-close="privacyPopup">&times;</span>
		<h2 style="text-align:center;">Privacy Policy</h2>

		<hr>

		<p>All information on this platform is provided by university360.co, under the legal name of UNIVERSITY 360. We
			are an educational counselling platform that helps students find trusted distance and online courses from
			UGC-DEB-approved universities. Our goal is to provide accurate information and personalised support to help
			you choose the right program.</p>

		<h5>1. No Personal Data Collected by Default</h5>
		<p>You can freely browse our website without sharing any personal information. We do not collect your name,
			phone number, or email address unless you choose to fill out a form or contact us directly.</p>

		<h5>2. How We Use It</h5>
		<p>Your information is used to:</p>
		<ul>
			<li>Guide you in choosing the right university or course</li>
			<li>Provide counselling support</li>
			<li>Share admission-related updates</li>
		</ul>
		<p>We may send you important updates (like admission deadlines or university alerts) via WhatsApp and email. You
			can opt out anytime.</p>

		<h5>3. Scope</h5>
		<p>This privacy policy applies to visitors who access this specific platform operated under university360.co by
			UNIVERSITY 360. It covers how we collect, use, and protect data when you explore course information, compare
			universities, or fill out enquiry forms on this platform. This policy applies only to the information
			collected through this platform and does not cover any data collected on the main website or other external
			sites.</p>

		<h5>4. Data Sharing</h5>
		<p>We share your details only with trusted university partners, and only for the purpose of counselling or
			admission. We do not sell or share data with third-party advertisers.</p>

		<h5>5. External Links</h5>
		<p>Our website may include links to official university portals. We are not responsible for the content or
			privacy policies of those external sites. We recommend visiting the official university website for new
			updates.</p>

		<h5>6. Cookies and Analytics</h5>
		<p>Our website uses cookies to improve the user experience. These help us understand how visitors use our site
			(e.g., most viewed pages, time spent, etc.). These cookies do not identify you personally.</p>
	</div>
</div>


<!-- end footer section -->

<script>
	document.getElementById("openTermsBtn").onclick = function () {
		document.getElementById("termsPopup").style.display = "block";
	};

	document.getElementById("openPrivacyBtn").onclick = function () {
		document.getElementById("privacyPopup").style.display = "block";
	};

	document.getElementById("openDisclaimerBtn").onclick = function () {
		document.getElementById("disclaimerPopup").style.display = "block";
	};

	// Close when clicking X
	document.querySelectorAll(".close-btn").forEach(btn => {
		btn.onclick = function () {
			document.getElementById(this.dataset.close).style.display = "none";
		};
	});

	// Close when clicking outside
	window.onclick = function (event) {
		document.querySelectorAll(".custom-modal, .modal").forEach(modal => {
			if (event.target === modal) {
				modal.style.display = "none";
			}
		});
	};
</script>

<script>
	const items = document.querySelectorAll('.accordion button');

	function toggleAccordion() {
		const itemToggle = this.getAttribute('aria-expanded');

		for (i = 0; i < items.length; i++) {
			items[i].setAttribute('aria-expanded', 'false');
		}

		if (itemToggle == 'false') {
			this.setAttribute('aria-expanded', 'true');
		}
	}

	items.forEach((item) => item.addEventListener('click', toggleAccordion));

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

<script>

	// Initialize Slider 2 (Universities)
	$(".slider2").owlCarousel({
		items: 3,
		loop: true,
		autoplay: true,
		autoplayTimeout: 4500,
		dots: false,
		nav: true,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
		margin: 20,
		responsive: {
			0: {
				items: 1,
				margin: 10,
				nav: true
			},
			768: {
				items: 2,
				margin: 15,
				nav: true
			},
			1024: {
				items: 3,
				margin: 20,
				nav: true
			}
		},
		autoplayHoverPause: true
	});


</script>
<script>
	$(".slider").owlCarousel({
		items: 4, // Number of items to show
		loop: true,
		autoplay: true, // Autoplay
		autoplayTimeout: 3000, // Autoplay interval in milliseconds
		dots: true,
		navigation: true, // Enable navigation
		pagination: true,
		margin: 0, // Show dot navigation
		// Other configuration options
		responsive: {
			0: {
				items: 3
			},
			600: {
				items: 3
			},
			1000: {
				items: 3
			}
		},
		autoplayHoverPause: true
	});
</script>

<script async>
	function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
			document.getElementByclassName("icon").display = block;
		}

		else {
			x.className = "topnav";
		}
	}


</script>

<script>
	function openPopupbroucher() {
		document.getElementById('myModal2').style.display = 'block';
	}

	// Function to close the popup
	function closePopupbroucher() {
		document.getElementById('myModal2').style.display = 'none';
	}
</script>



<script>
	document.addEventListener("DOMContentLoaded", function () {
		const searchParams = new URLSearchParams(window.location.search);

		// Extract params from hash if present
		let hashParams = {};
		if (window.location.hash.includes('?')) {
			const hashQuery = window.location.hash.split('?')[1];
			hashParams = new URLSearchParams(hashQuery);
		}

		const currentUrl = window.location.href;
		const forms = document.querySelectorAll('form');

		forms.forEach(form => {
			const pageUrlInput = form.querySelector('input[name="page_url"]');
			if (pageUrlInput) pageUrlInput.value = currentUrl;

			['utm_source', 'utm_campaign', 'utm_medium', 'utm_term', 'utm_content'].forEach(param => {
				const input = form.querySelector(`input[name="${param}"]`);

				if (input) {
					// Priority: search params → hash params
					const value = searchParams.get(param) || hashParams.get(param);
					if (value) input.value = value;
				}
			});
		});
	});
</script>

<!-- Global Bottom-Right Floating Buttons -->
<div class="global-floating-buttons-wrap">
	<a class="floating-btn-call" href="tel:+919218082995" title="Call Academic Counselor">
		<img src="images/call_icon.gif" alt="Call Support">
	</a>
	<button type="button" class="floating-btn-gift" onclick="openScholarshipPopup()" title="Scholarship Coupon Code">
		<img src="images/gift.gif" alt="Scholarship Coupon">
	</button>
</div>

<!-- Scholarship Popup Modal -->
<?php include_once __DIR__ . "/scholarship-popup.php"; ?>

<!-- Canvas Confetti Library -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<!-- Half Scroll Scholarship Popup Trigger -->
<script>
	let scholarshipScrollTriggered = false;
	window.addEventListener('scroll', function () {
		if (!scholarshipScrollTriggered) {
			var scrollTop = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
			var docHeight = document.documentElement.scrollHeight - window.innerHeight;
			if (docHeight > 0 && (scrollTop / docHeight) >= 0.5) {
				scholarshipScrollTriggered = true;
				if (typeof openScholarshipPopup === 'function') {
					openScholarshipPopup();
				}
			}
		}
	});
</script>

</body>

</html>