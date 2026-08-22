<?php
session_start();
$brochure_pdf = $_SESSION['brochure_pdf'] ?? '';
unset($_SESSION['brochure_pdf']); // prevents opening again on refresh
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include "header.php"; ?>

		<title>Top Distance Education Universities Approved by UGC in India – Admissions Open 2026</title>
		<meta name="description" content="Get Enrolled in Top Distance Education Universities Approved by UGC in India. Apply for Online MBA, MCA, BBA, BCA, MA, BCom, BA, BSc, MCom, MSc, & Diploma Programs Now!">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
        <!-- Event snippet for University360 lp conversion page -->
        <script>
          gtag('event', 'conversion', {'send_to': 'AW-18369291448/3_ILCL2SpdscELjJlLdE'});
        </script>
	</head>
	<body>
		<?php include "navbar.php"; ?>
		<script>if (typeof fbq === 'function') { fbq('track', 'Lead'); }</script>
		
		<?php if (!empty($brochure_pdf)) : ?>
		<script>
			window.addEventListener('load', function () {
				window.open("<?php echo htmlspecialchars($brochure_pdf); ?>", "_blank");
			});
		</script>
		<?php endif; ?>
		
		
		<div class="thanku">
			<br>
			<div class="container">
				<div class="header">

					<br>
					<center>
						<img src="images/submission.gif" class="img-responsive">
					</center>
					<center><h1 style="color:#000;"><strong>THANK YOU !</strong></h1></center>
					<center><h4><strong>Your Submission has been Received!</strong></h4></center>
					<br>
					<div class="button">
						<a href="https://university360.co/"><center>	<button type="button" style="padding: 10px; border: 1px solid black; background-color:#002B5C; color: #fff; font-weight:bold;">For More Information Kindly Visit Here</button></center></a>
					</div><!--end of card-->
				</div><!--end of container-->
				<br>
			</div>
		</div><!--end of thanku-->
		<?php include "footer.php"; ?>
	</body>
</html>