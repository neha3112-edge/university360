<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
</head>
<body>

<div id="myModalplacementreport" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeplacementreport()" id="closeButton">&times;</span>
		<div class="splz-form-container">
            <div id="form">
				<div class="frm-heading" style="border-left: 2px solid #ff6600;">
					<h5><strong><span class="sp-text">&nbsp;&nbsp;Download Placement Report </span><br></strong></h5>
				</div><br>

				<form action="https://university360.co/mail.php" method="post" name="form" id="enquiry-form">
					<input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Name" required>

					<input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>

					<input type="tel" name="phone" id="phone" pattern="[0-9]{10}" maxlength="10" class="form-control" placeholder="Enter 10-digit Mobile Number" required>

					<select name="course" class="form-control" id="course" required>
						<option value="" hidden>Select Your Course</option>
						<option value="MBA">MBA</option>
						<option value="MCA">MCA</option>
						<option value="MCOM">MCOM</option>
						<option value="MSC">MSC</option>
						<option value="MA">MA</option>
						<option value="MSW">MSW</option>
						<option value="MJMC">MJMC</option>
						<option value="MLIS">MLIS</option>
						<option value="BBA">BBA</option>
						<option value="BCA">BCA</option>
						<option value="BCOM">BCOM</option>
						<option value="BSC">BSC</option>
						<option value="BA">BA</option>
						<option value="BSW">BSW</option>
						<option value="BJMC">BJMC</option>
						<option value="BLIS">BLIS</option>
					</select>

					<select name="state" class="form-control" id="state" required>
						<option value="" hidden>Select Your State</option>
						<option value="Andhra Pradesh">Andhra Pradesh</option>
						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
						<option value="Assam">Assam</option>
						<option value="Bihar">Bihar </option>
						<option value="Chhattisgarh">Chhattisgarh</option>
						<option value="Delhi">Delhi</option>
						<option value="Goa">Goa</option>
						<option value="Gujarat">Gujarat </option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jharkhand">Jharkhand </option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Madhya Pradesh">Madhya Pradesh </option>
						<option value="Maharashtra">Maharashtra</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya </option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Odisha">Odisha </option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim </option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Telangana">Telangana</option>
						<option value="Tripura">Tripura </option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="Uttarakhand">Uttarakhand </option>
						<option value="West Bengal">West Bengal </option>
						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
            			<option value="Puducherry">Puducherry</option>
            			<option value="Lakshadweep">Lakshadweep</option>
            			<option value="Ladakh">Ladakh</option>
            			<option value="Chandigarh">Chandigarh</option>
            			<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            			<option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
					</select>

					<input type="hidden" name="source" id="source" value="DES_IN" required>
					<input type="hidden" name="form_name" id="form_name" value="Placement Report">
					<input type="hidden" name="sub_source" id="sub_source" value="">
					<input type="hidden" name="utm_source" id="utm_source" value="">
					<input type="hidden" name="utm_campaign" id="utm_campaign" value="">
					<input type="hidden" name="utm_medium" id="utm_medium" value="">
					<input type="hidden" name="utm_term" id="utm_term" value="">
					<input type="hidden" name="utm_content" id="utm_content" value="">
					<input type="hidden" name="page_url" id="page_url" value="">

					<button type="submit" name="submit" value="send" class="sub-btn" id="downloadplacementreport">Submit</button>
				</form>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" onclick="closePopup()" id="closeButton">&times;</span>
		<?php include "form.php"; ?>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById('myModal').style.display = 'block';
    }
    function closePopup() {
        document.getElementById('myModal').style.display = 'none';
    }

    function openplacementreport() {
        document.getElementById('myModalplacementreport').style.display = 'block';
    }
    function closeplacementreport() {
        document.getElementById('myModalplacementreport').style.display = 'none';
    }

	document.getElementById('downloadplacementreport').addEventListener('click', function() {
        var pdfURL = 'https://university360.co/images/Placement-report-with-linking_compressed.pdf';
        window.open(pdfURL, '_blank');
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const currentUrl = window.location.href;

    // Sab forms me page_url fill karega
    document.querySelectorAll('input[name="page_url"]').forEach(input => {
        input.value = currentUrl;
    });
});
</script>

</body>
</html>