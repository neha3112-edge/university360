<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <title>Contact Us - UNIVERSITY 360</title>
    <meta name="description"
        content="Get in touch with UNIVERSITY 360 for expert online higher education counselling, course guidance, and admission support." />
</head>

<body class="legal-page-body">

    <?php include "navbar.php"; ?>

    <div class="legal-hero">
        <div class="hero-badge-pill">
            <i class="fa fa-headphones"></i> Student Support & Guidance Desk
        </div>
        <h1>Contact Us</h1>
        <p class="hero-subtitle">We're Here to Help You Take the Next Step</p>
        <div class="legal-breadcrumb">
            <a href="index.php">Home</a> &nbsp;/&nbsp; Contact Us
        </div>
    </div>

    <div class="legal-main-wrapper">
        <div class="legal-container">

            <div class="contact-grid">

                <!-- Left Column: Unified Contact Hub Card -->
                <div class="contact-hub-card">

                    <div class="contact-hub-header">
                        <h3><i class="fa fa-comments" style="color: #ff6600;"></i> Get in Touch</h3>
                        <p>Have questions about online degree programs, distance education courses, admissions, or
                            university selection? The University360 team is here to help. Whether you need expert career
                            counselling or want to learn more about our partner universities, our education experts are
                            ready to assist you.</p>
                    </div>

                    <!-- 2x2 Grid of Contact Channels -->
                    <div class="contact-channels-grid">

                        <!-- Office Address Item -->
                        <div class="contact-channel-item">
                            <div class="contact-channel-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-channel-details">
                                <h4>Office Address</h4>
                                <p>B-63, Sector-2, Noida, Gautam Buddha Nagar, Uttar Pradesh, India, 201301</p>
                            </div>
                        </div>

                        <!-- Phone Item -->
                        <div class="contact-channel-item">
                            <div class="contact-channel-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-channel-details">
                                <h4>Phone Number</h4>
                                <p><a href="tel:+919218082995">+91 92180 82995</a></p>
                            </div>
                        </div>

                        <!-- Email Item -->
                        <div class="contact-channel-item">
                            <div class="contact-channel-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="contact-channel-details">
                                <h4>Email Address</h4>
                                <p><a href="mailto:mail@university360.co">mail@university360.co</a></p>

                            </div>
                        </div>



                    </div>

                    <!-- Why Contact University360 Box -->
                    <div class="contact-reasons-box">
                        <h4><i class="fa fa-star" style="color: #ff6600;"></i> Why Contact University360?</h4>
                        <div class="contact-reasons-grid">
                            <div class="contact-reason-item"><i class="fa fa-check-circle"></i> Expert Career
                                Counselling</div>
                            <div class="contact-reason-item"><i class="fa fa-check-circle"></i> Guidance on Online &
                                Distance Ed</div>
                            <div class="contact-reason-item"><i class="fa fa-check-circle"></i> University & Course
                                Comparison</div>
                            <div class="contact-reason-item"><i class="fa fa-check-circle"></i> Admission & Eligibility
                                Support</div>
                            <div class="contact-reason-item"><i class="fa fa-check-circle"></i> Personalized
                                Recommendations</div>
                            <div class="contact-reason-item"><i class="fa fa-check-circle"></i> Quick Response from
                                Experts</div>
                        </div>
                    </div>

                    <!-- Connect With Us Bar -->
                    <!-- <div class="contact-social-bar">
                        <span><i class="fa fa-share-alt" style="color: #ff6600; margin-right: 6px;"></i> Connect With Us:</span>
                        <div class="contact-social-pills">
                            <a href="#" class="social-pill fb"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#" class="social-pill ig"><i class="fa fa-instagram"></i> Instagram</a>
                            <a href="#" class="social-pill li"><i class="fa fa-linkedin"></i> LinkedIn</a>
                            <a href="#" class="social-pill yt"><i class="fa fa-youtube-play"></i> YouTube</a>
                        </div>
                    </div> -->

                </div>

                <!-- Right Column: Enquiry Form Card -->
                <div class="contact-form-wrapper">
                    <div style="margin-bottom: 18px; border-bottom: 2px solid #edf2f7; padding-bottom: 12px;">
                        <h3
                            style="color: #0f385f; font-weight: 800; font-size: 22px; margin-bottom: 4px; display: flex; align-items: center; gap: 8px;">
                            <i class="fa fa-paper-plane" style="color: #ff6600;"></i> Send Us a Message
                        </h3>
                        <p
                            style="color: #64748b !important; font-size: 13.5px !important; margin: 0 !important; font-weight: 400 !important;">
                            Fill out the enquiry form below, and one of our education counsellors will get in touch with
                            you shortly.</p>
                    </div>
                    <?php include "form.php"; ?>
                </div>

            </div>

            <!-- Need Immediate Assistance Banner -->
            <div class="goal-banner"
                style="margin-top: 40px; padding: 28px 28px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; text-align: left; border-radius: 16px;">
                <div style="max-width: 750px;">
                    <h3
                        style="color: #ffffff; font-size: 21px; font-weight: 800; margin-bottom: 6px; display: flex; align-items: center; gap: 8px;">
                        <i class="fa fa-bolt" style="color: #ffcc00;"></i> Need Immediate Assistance?
                    </h3>
                    <p
                        style="color: rgba(255,255,255,0.92) !important; font-size: 14.5px !important; margin: 0 !important; line-height: 1.6 !important; font-weight: 400 !important;">
                        Our counsellors are just a call or message away. Contact us today and take the first step toward
                        choosing the right university and building a successful future.</p>
                </div>
                <div>
                    <button onclick="openPopup()"
                        style="background: linear-gradient(135deg, #ff6600 0%, #e65c00 100%); color: #ffffff; border: none; padding: 14px 28px; border-radius: 30px; font-weight: 700; font-size: 14.5px; cursor: pointer; box-shadow: 0 6px 20px rgba(255,102,0,0.35); transition: all 0.25s ease;">
                        Talk to an Expert Today &rarr;
                    </button>
                </div>
            </div>

        </div>
    </div>

    <?php include "footer.php"; ?>
    <?php include "popup.php"; ?>

</body>

</html>