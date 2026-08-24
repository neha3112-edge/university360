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
<!-- Scholarship Coupon Code Modal -->
<div id="myModalScholarship" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeScholarshipPopup()">&times;</span>
        <div class="splz-form-container">
            <div id="form">
                <div class="frm-heading" style="border-left: 3px solid #fbcb12; padding-left: 10px;">
                    <h5><strong><span class="sp-text" style="color: #002B5C;">Get Scholarship Coupon Code</span></strong></h5>
                    <p style="font-size: 12px; color: #666; margin: 2px 0 0 0;">Academic Experts will assist you with up to 100% Scholarship!</p>
                </div>
                <hr style="margin: 10px 0 15px 0;">

                <form action="<?= $base_url ?>mail.php" method="post" name="scholarship_form" id="scholarship-form">
                    <input type="text" name="full_name" id="scholarship_full_name" class="form-control" placeholder="Enter Your Name" required>

                    <input type="email" name="email" id="scholarship_email" class="form-control" placeholder="Enter Your Email" required>

                    <input type="tel" name="phone" id="scholarship_phone" pattern="[0-9]{10}" maxlength="10" class="form-control" placeholder="Enter 10-digit Mobile Number" required>

                    <select name="course" class="form-control" id="scholarship_course" required>
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

                    <select name="state" class="form-control" id="scholarship_state" required>
                        <option value="" hidden>Select Your State</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Ladakh">Ladakh</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                    </select>

                    <input type="hidden" name="source" id="scholarship_source" value="UNIV360" required>
                    <input type="hidden" name="form_name" id="scholarship_form_name" value="Scholarship Form">
                    <input type="hidden" name="sub_source" id="scholarship_sub_source" value="">
                    <input type="hidden" name="utm_source" id="scholarship_utm_source" value="">
                    <input type="hidden" name="utm_campaign" id="scholarship_utm_campaign" value="">
                    <input type="hidden" name="utm_medium" id="scholarship_utm_medium" value="">
                    <input type="hidden" name="utm_term" id="scholarship_utm_term" value="">
                    <input type="hidden" name="utm_content" id="scholarship_utm_content" value="">
                    <input type="hidden" name="page_url" id="scholarship_page_url" value="">

                    <button type="submit" name="submit" value="send" class="sub-btn">Claim Scholarship Code</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function openScholarshipPopup() {
        var modal = document.getElementById('myModalScholarship');
        if (modal) {
            modal.style.display = 'block';
        }
        if (typeof confetti === 'function') {
            var myCanvas = document.createElement('canvas');
            myCanvas.style.position = 'fixed';
            myCanvas.style.top = '0';
            myCanvas.style.left = '0';
            myCanvas.style.width = '100%';
            myCanvas.style.height = '100%';
            myCanvas.style.pointerEvents = 'none';
            myCanvas.style.zIndex = '999999';
            document.body.appendChild(myCanvas);

            var myConfetti = confetti.create(myCanvas, { resize: true, useWorker: true });
            myConfetti({
                particleCount: 160,
                spread: 100,
                startVelocity: 45,
                origin: { y: 0.6 },
                colors: ['#fbcb12', '#ff6600', '#002B5C', '#28a745', '#e60073']
            });

            setTimeout(function () {
                myCanvas.remove();
            }, 2500);
        }
    }
    function closeScholarshipPopup() {
        var modal = document.getElementById('myModalScholarship');
        if (modal) {
            modal.style.display = 'none';
        }
    }
</script>
