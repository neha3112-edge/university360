<?php
// EdgeWood Online University Landing Page - University360
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <script>
        window.PAGE_COURSES = [
            { "value": "DBA", "label": "DBA in Finance" },
            { "value": "DBA", "label": "DBA in Leadership" },
            { "value": "MBA+DBA", "label": "MBA + DBA in Finance" },
            { "value": "MBA+DBA", "label": "MBA + DBA in Leadership" }
        ];
    </script>


    <title>EdgeWood Online University DBA & MBA+DBA Programs Fees & Admissions Open 2026</title>
    <meta name="description"
        content="EdgeWood Online University DBA and MBA+DBA Programs Fees & Admissions Open 2026. Explore various specializations and advance your career globally." />
    <meta name="keywords"
        content="EdgeWood Online University DBA, Edgewood DBA Program, Doctor of Business Administration Online">
    <link rel="canonical" href="https://university360.co/edgewood.php">

    <!-- Open Graph & Social Meta Tags -->
    <meta property="og:title" content="EdgeWood Online University DBA Program Fees &amp; Admissions Open 2026" />
    <meta property="og:description"
        content="EdgeWood Online University DBA Programs 2026. Doctor of Business Administration with 9 specializations. Globally Recognized." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://university360.co/edgewood.php" />
    <meta property="og:image" content="https://university360.co/images/edgewood-banner.png" />
    <meta property="og:site_name" content="University360" />

    <!-- Schema Code -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollegeOrUniversity",
      "name": "EdgeWood Online University",
      "url": "https://university360.co/edgewood.php",
      "logo": "https://university360.co/images/edgewood-logo.png",
      "slogan": "Where Business Meets Excellence",
      "description": "EdgeWood Online University offers globally recognized Doctor of Business Administration (DBA) programs with specializations across various management domains.",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "Geneva",
        "addressCountry": "CH"
      }
    }
    </script>
</head>

<body>

    <?php include "navbar.php"; ?>

    <!-- Banner / Hero Section -->
    <section class="amity-banner-section" id="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column on Desktop / Top Content on Mobile -->
                <div class="col-lg-5 col-md-12">
                    <div class="amity-banner-content-wrap">
                        <div class="d-none d-lg-block">
                            <img src="images/edgewood-logo.png" alt="EdgeWood Online University"
                                class="amity-banner-logo">
                        </div>

                        <h2 class="amity-sub-lead">Get Guidance From University360 for</h2>
                        <h1 class="amity-main-title">EdgeWood Online University</h1>
                        <p class="amity-slogan">Turn Business Knowledge into <br> Strategic Leadership</p>

                        <div class="amity-pill-box">
                            <span class="amity-pill-badge">Dual Degree Programs</span>
                            <p class="amity-pill-courses">
                                <strong>DBA | MBA + DBA</strong>
                            </p>
                        </div>

                        <div class="d-none d-lg-block">
                            <button class="amity-download-brochure-btn"
                                onclick="openBrochurePopup('brochures/edgewood_main_brochure.pdf', 'DBA General')">
                                <span>Download Brochure</span>
                                <i class="fa fa-download"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Center Visual (Logo + Student Cutout) -->
                    <div class="amity-mobile-center-visual">
                        <img src="images/edgewood-logo.png" alt="EdgeWood Online University"
                            class="amity-mobile-logo"><br>
                        <img src="images/new-mobile-v1.webp" alt="EdgeWood Online University Student"
                            class="amity-mobile-student">
                    </div>
                </div>

                <!-- Center Spacing on Desktop -->
                <div class="col-lg-3 d-none d-lg-block">
                </div>

                <!-- Right Column on Desktop -->
                <div class="col-lg-4 col-md-12">
                </div>
            </div>
        </div>
    </section>


    <!-- Programmes / Course Cards Section -->
    <section class="amity-programmes-section" id="programmes">
        <div class="container">
            <h2>DBA Programs at EdgeWood Online University</h2>

            <div class="owl-carousel amity-program-carousel">
                <!-- DBA in General -->
                <div class="item">
                    <div class="amity-course-card">
                        <span class="amity-course-badge">Doctorate</span>
                        <img src="images/Edgewood DBA in General.webp" alt="DBA in General" class="amity-course-img">
                        <div class="amity-course-body">
                            <h3>DBA in General</h3>
                            <h4>Doctor of Business Administration</h4>
                            <p>Advance your career and deepen your expertise with our comprehensive DBA in General
                                program, designed for global leaders.</p>
                            <div class="amity-course-footer">
                                <button class="get-brochure-btn"
                                    onclick="openBrochurePopup('brochures/edgewood_dba.pdf', 'DBA in General')">
                                    <span>Get Brochure</span> <i class="fa fa-download"></i>
                                </button>
                                <span class="duration-info"><i class="fa fa-hourglass-half"></i> 36 Months</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DBA in Leadership -->
                <div class="item">
                    <div class="amity-course-card">
                        <span class="amity-course-badge">Doctorate</span>
                        <img src="images/Edgewood DBA in Leadership.webp" alt="DBA in Leadership"
                            class="amity-course-img">
                        <div class="amity-course-body">
                            <h3>DBA in Leadership</h3>
                            <h4>Doctor of Business Administration</h4>
                            <p>Advance your career and deepen your expertise with our comprehensive DBA in Leadership
                                program, designed for global leaders.</p>
                            <div class="amity-course-footer">
                                <button class="get-brochure-btn"
                                    onclick="openBrochurePopup('brochures/edgewood_dba.pdf', 'DBA in Leadership')">
                                    <span>Get Brochure</span> <i class="fa fa-download"></i>
                                </button>
                                <span class="duration-info"><i class="fa fa-hourglass-half"></i> 36 Months</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DBA in Finance -->
                <div class="item">
                    <div class="amity-course-card">
                        <span class="amity-course-badge">Doctorate</span>
                        <img src="images/Edgewood DBA in Finance.webp" alt="DBA in Finance" class="amity-course-img">
                        <div class="amity-course-body">
                            <h3>DBA in Finance</h3>
                            <h4>Doctor of Business Administration</h4>
                            <p>Advance your career and deepen your expertise with our comprehensive DBA in Finance
                                program, designed for global leaders.</p>
                            <div class="amity-course-footer">
                                <button class="get-brochure-btn"
                                    onclick="openBrochurePopup('brochures/edgewood_dba.pdf', 'DBA in Finance')">
                                    <span>Get Brochure</span> <i class="fa fa-download"></i>
                                </button>
                                <span class="duration-info"><i class="fa fa-hourglass-half"></i> 36 Months</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MBA + DBA in General -->
                <div class="item">
                    <div class="amity-course-card">
                        <span class="amity-course-badge">Dual Degree</span>
                        <img src="images/Edgewood MBA + DBA in General.webp" alt="MBA + DBA in General"
                            class="amity-course-img">
                        <div class="amity-course-body">
                            <h3>MBA + DBA in General</h3>
                            <h4>Doctor of Business Administration</h4>
                            <p>Advance your career and deepen your expertise with our comprehensive MBA + DBA in General
                                program, designed for global leaders.</p>
                            <div class="amity-course-footer">
                                <button class="get-brochure-btn"
                                    onclick="openBrochurePopup('brochures/edgewood_mba+dba.pdf', 'MBA + DBA in General')">
                                    <span>Get Brochure</span> <i class="fa fa-download"></i>
                                </button>
                                <span class="duration-info"><i class="fa fa-hourglass-half"></i> 48 Months</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MBA + DBA in Leadership -->
                <div class="item">
                    <div class="amity-course-card">
                        <span class="amity-course-badge">Dual Degree</span>
                        <img src="images/Edgewood MBA + DBA in Leadership.webp" alt="MBA + DBA in Leadership"
                            class="amity-course-img">
                        <div class="amity-course-body">
                            <h3>MBA + DBA in Leadership</h3>
                            <h4>Doctor of Business Administration</h4>
                            <p>Advance your career and deepen your expertise with our comprehensive MBA + DBA in
                                Leadership program, designed for global leaders.</p>
                            <div class="amity-course-footer">
                                <button class="get-brochure-btn"
                                    onclick="openBrochurePopup('brochures/edgewood_mba+dba.pdf', 'MBA + DBA in Leadership')">
                                    <span>Get Brochure</span> <i class="fa fa-download"></i>
                                </button>
                                <span class="duration-info"><i class="fa fa-hourglass-half"></i> 48 Months</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MBA + DBA in Finance -->
                <div class="item">
                    <div class="amity-course-card">
                        <span class="amity-course-badge">Dual Degree</span>
                        <img src="images/Edgewood MBA + DBA in Finance.webp" alt="MBA + DBA in Finance"
                            class="amity-course-img">
                        <div class="amity-course-body">
                            <h3>MBA + DBA in Finance</h3>
                            <h4>Doctor of Business Administration</h4>
                            <p>Advance your career and deepen your expertise with our comprehensive MBA + DBA in Finance
                                program, designed for global leaders.</p>
                            <div class="amity-course-footer">
                                <button class="get-brochure-btn"
                                    onclick="openBrochurePopup('brochures/edgewood_mba+dba.pdf', 'MBA + DBA in Finance')">
                                    <span>Get Brochure</span> <i class="fa fa-download"></i>
                                </button>
                                <span class="duration-info"><i class="fa fa-hourglass-half"></i> 48 Months</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Approvals & Recognition Section -->
    <section class="amity-approvals-section" id="approvals">
        <div class="container">
            <h2 class="approvals-main-heading text-center">Accreditation and Approvals of EdgeWood Online University
            </h2>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="amity-approval-card">
                        <div class="approval-icon"><img src="images/hlc.webp" alt="UGC Approved"></div>
                        <h4>HLC</h4>
                        <p>HLC is an institutional accreditor that grades universities and colleges awarding students
                            with advanced degrees.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="amity-approval-card">
                        <div class="approval-icon"><img src="images/ggu_wes.svg" alt="UGC-DEB Recognized">
                        </div>
                        <h4>WES Accreditation</h4>
                        <p>WES Accreditation is one of the most widely accepted and respected forms of recognition for a
                            degree.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Highlights Section -->
    <!-- <section class="amity-highlights-section" id="achievment">
        <div class="container">
            <h2>Our Key Highlights UNIVERSITY 360</h2>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="amity-highlight-card">
                        <img src="images/Number-1-amity.png" alt="10+ Years">
                        <div>
                            <h3>10+</h3>
                            <p>Years of Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="amity-highlight-card">
                        <img src="images/Number-2-amity.png" alt="50+ Universities">
                        <div>
                            <h3>50+</h3>
                            <p>Top Universities</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="amity-highlight-card">
                        <img src="images/Number-3-amity.png" alt="82K+ Learners">
                        <div>
                            <h3>82K+</h3>
                            <p>Online Learners</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="amity-highlight-card">
                        <img src="images/Number-4-amity.png" alt="9+ Specializations">
                        <div>
                            <h3>9+</h3>
                            <p>DBA Specializations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="achievment">
        <div class="container">
            <div id="facts" style="margin-bottom: 0px !important;">
                <div class="row">
                    <div class="col-md-3" id="fact-box">

                        <img src="images/student-enrolled.webp">
                        <h4>30K+</h4>
                        <p>Students <br>Counselled</p>

                    </div>


                    <div class="col-md-3" id="fact-box">

                        <img src="images/counseling-experts.webp">
                        <h4>100+</h4>
                        <p>Education <br>Experts</p>
                    </div>


                    <div class="col-md-3" id="fact-box">

                        <img src="images/specialisation.webp">
                        <h4>25+</h4>
                        <p>Online &amp; Distance <br>Programs</p>

                    </div>


                    <div class="col-md-3" id="fact-box">

                        <img src="images/university.webp">
                        <h4>20+</h4>
                        <p>Recognized <br>Universities</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Apply Steps Section -->
        <section class="amity-steps-section">
        <div class="container">
            <h2>How to Apply for International University Online Programs?</h2>
            <p class="section-desc">Select the right course based on your education and career goals. We help you understand the admission requirements and assist you with the application process.</p>

            <div class="row">
                <!-- Step 1 -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <div class="amity-step-card amity-step-1">
                        <div class="amity-step-number">1</div>
                        <h4>Submit Enquiry</h4>
                        <p>Share your basic details so our counsellors can understand your academic background and career goals.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <div class="amity-step-card amity-step-2">
                        <div class="amity-step-number">2</div>
                        <h4>Get Expert Counselling</h4>
                        <p>Connect with our Education Counsellors to learn about eligibility, fees, scholarships, placement support and available programs.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <div class="amity-step-card amity-step-3">
                        <div class="amity-step-number">3</div>
                        <h4>Choose the Right Program</h4>
                        <p>Select the university and course that best match your education, interests, budget, and future career plans.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <div class="amity-step-card amity-step-4">
                        <div class="amity-step-number">4</div>
                        <h4>Complete the Application</h4>
                        <p>Fill out the admission application accurately and submit it through the official admission portal of the selected institution.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <div class="amity-step-card amity-step-5">
                        <div class="amity-step-number">5</div>
                        <h4>Upload Required Documents</h4>
                        <p>Submit all necessary academic, identity, and supporting documents as required by the selected institution or university.</p>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
                    <div class="amity-step-card amity-step-6">
                        <div class="amity-step-number">6</div>
                        <h4>Admission Confirmation</h4>
                        <p>Receive application updates, complete the required admission formalities, and get confirmation of your admission along with the next steps.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
        <section class="amity-whychoose-section" id="whychoose">
        <div class="container">
            <h2 class="amity-whychoose-heading">Why Choose University 360 for International Programs?</h2>
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="amity-why-item">
                                <h3><span class="amity-why-arrow">&#10132;</span> Explore &amp; Compare Programs</h3>
                                <p>Explore programs from universities, IITs, IIMs, and leading global institutions. Compare fees, eligibility, duration, learning modes, and admission details in one place.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="amity-why-item">
                                <h3><span class="amity-why-arrow">&#10132;</span> Flexible Online Learning</h3>
                                <p>Explore online courses designed for working professionals and flexible learners, with details on study options, learning resources, and student support.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="amity-why-item">
                                <h3><span class="amity-why-arrow">&#10132;</span> Get Personalised Counselling</h3>
                                <p>Connect with our education counsellors for guidance on program selection, eligibility, fees, admission requirements, and the application process.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="amity-why-item">
                                <h3><span class="amity-why-arrow">&#10132;</span> Get Admission Support</h3>
                                <p>Get help with application steps, document requirements, deadlines, entrance exams, and other admission-related information for your selected program.</p>
                            </div>
                        </div>
                    </div>
                    <div class="amity-why-action">
                        <button class="amity-btn-apply-now" onclick="openPopup()">Apply Now <span class="btn-arrow">&#10132;</span></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-center mt-4 mt-md-0">
                    <img src="images/new-boy.webp" alt="University 360 Student" class="amity-why-student-img img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Top Online Universities for Admission 2026 Section -->
    <section class="top-universities-section" id="top-universities">
        <div class="container">
            <div class="section-title-wrap text-center mb-4">
                <h2 class="top-univ-title">Check Out Top Online Universities for Admission 2026</h2>
                <p class="top-univ-subtitle">Compare UGC-DEB recognized universities, accreditations, key advantages
                    &amp; apply instantly.</p>
            </div>

            <div class="top-univ-table-card">
                <div class="table-responsive">
                    <table class="top-univ-table">
                        <thead>
                            <tr>
                                <th style="width: 26%;">University</th>
                                <th style="width: 20%;">Location</th>
                                <th style="width: 18%;">Accreditation</th>
                                <th style="width: 22%;">Advantage</th>
                                <th style="width: 14%; text-align: center;">Action</th>
                            </tr>
                        </thead>
                                                <tbody>
                            <!-- 1. Rushford Business School -->
                            <tr>
                                <td>
                                    <div class="univ-name-cell"><i class="fa fa-graduation-cap"></i><span>Rushford
                                            Business School</span></div>
                                </td>
                                <td><span class="univ-loc-cell"><i class="fa fa-map-marker"></i> Geneva,
                                        Switzerland</span></td>
                                <td><span class="univ-accred-badge">QS, ACBSP, BGA, IACBE</span></td>
                                <td><span class="univ-adv-cell"><i class="fa fa-check-circle"></i> 9K+ Alumni</span>
                                </td>
                                <td class="text-center"><button type="button" class="univ-apply-btn"
                                        onclick="openPopup()"><i class="fa fa-paper-plane"></i> Apply Now</button></td>
                            </tr>
                            <!-- 2. Golden Gate University -->
                            <tr>
                                <td>
                                    <div class="univ-name-cell"><i class="fa fa-graduation-cap"></i><span>Golden Gate
                                            University</span></div>
                                </td>
                                <td><span class="univ-loc-cell"><i class="fa fa-map-marker"></i> San Francisco,
                                        California</span></td>
                                <td><span class="univ-accred-badge">QS, WASC</span></td>
                                <td><span class="univ-adv-cell"><i class="fa fa-check-circle"></i> 100% program
                                        integrated with AI</span></td>
                                <td class="text-center"><button type="button" class="univ-apply-btn"
                                        onclick="openPopup()"><i class="fa fa-paper-plane"></i> Apply Now</button></td>
                            </tr>
                            <!-- 3. Swiss School of Business and Management -->
                            <tr>
                                <td>
                                    <div class="univ-name-cell"><i class="fa fa-graduation-cap"></i><span>Swiss School
                                            of Business and Management</span></div>
                                </td>
                                <td><span class="univ-loc-cell"><i class="fa fa-map-marker"></i> Switzerland</span></td>
                                <td><span class="univ-accred-badge">ACBSP, BAC</span></td>
                                <td><span class="univ-adv-cell"><i class="fa fa-check-circle"></i> 7k Alumni</span></td>
                                <td class="text-center"><button type="button" class="univ-apply-btn"
                                        onclick="openPopup()"><i class="fa fa-paper-plane"></i> Apply Now</button></td>
                            </tr>
                            <!-- 4. ESGCI -->
                            <tr>
                                <td>
                                    <div class="univ-name-cell"><i class="fa fa-graduation-cap"></i><span>ESGCI</span>
                                    </div>
                                </td>
                                <td><span class="univ-loc-cell"><i class="fa fa-map-marker"></i> Paris, France</span>
                                </td>
                                <td><span class="univ-accred-badge">ACBSP</span></td>
                                <td><span class="univ-adv-cell"><i class="fa fa-check-circle"></i> World-recognised
                                        degree</span></td>
                                <td class="text-center"><button type="button" class="univ-apply-btn"
                                        onclick="openPopup()"><i class="fa fa-paper-plane"></i> Apply Now</button></td>
                            </tr>
                            <!-- 5. Edgewood University -->
                            <tr>
                                <td>
                                    <div class="univ-name-cell"><i class="fa fa-graduation-cap"></i><span>Edgewood
                                            University</span></div>
                                </td>
                                <td><span class="univ-loc-cell"><i class="fa fa-map-marker"></i> Madison,
                                        Wisconsin</span></td>
                                <td><span class="univ-accred-badge">CHEA, WES</span></td>
                                <td><span class="univ-adv-cell"><i class="fa fa-check-circle"></i> Scholarships</span>
                                </td>
                                <td class="text-center"><button type="button" class="univ-apply-btn"
                                        onclick="openPopup()"><i class="fa fa-paper-plane"></i> Apply Now</button></td>
                            </tr>
                            <!-- 6. Liverpool John Moores University -->
                            <tr>
                                <td>
                                    <div class="univ-name-cell"><i class="fa fa-graduation-cap"></i><span>Liverpool John
                                            Moores University</span></div>
                                </td>
                                <td><span class="univ-loc-cell"><i class="fa fa-map-marker"></i> United Kingdom</span>
                                </td>
                                <td><span class="univ-accred-badge">Privy Council & WES</span></td>
                                <td><span class="univ-adv-cell"><i class="fa fa-check-circle"></i> Global
                                        opportunities</span></td>
                                <td class="text-center"><button type="button" class="univ-apply-btn"
                                        onclick="openPopup()"><i class="fa fa-paper-plane"></i> Apply Now</button></td>
                            </tr>
                            <!-- 7. Paris School of Business -->
                            <tr>
                                <td>
                                    <div class="univ-name-cell"><i class="fa fa-graduation-cap"></i><span>Paris School
                                            of Business</span></div>
                                </td>
                                <td><span class="univ-loc-cell"><i class="fa fa-map-marker"></i> Paris, France</span>
                                </td>
                                <td><span class="univ-accred-badge">EQUIS, AACSB, and AMBA</span></td>
                                <td><span class="univ-adv-cell"><i class="fa fa-check-circle"></i> Career
                                        services</span></td>
                                <td class="text-center"><button type="button" class="univ-apply-btn"
                                        onclick="openPopup()"><i class="fa fa-paper-plane"></i> Apply Now</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <!-- <section class="amity-about-section" id="sode_about">
        <div class="container">
            <h2 class="amity-section-heading">About UNIVERSITY 360</h2>
            <h3 class="amity-section-subheading">Your Guide to Global Business Education &amp; Higher Education</h3>

            <p class="amity-about-text"><strong>University 360</strong> is a trusted education guidance and career
                counselling platform dedicated to helping professionals make informed decisions about their advanced
                education. We connect ambitious leaders with globally recognized institutions offering doctoral business
                programs while providing expert guidance at every stage of their academic journey.</p>

            <p class="amity-about-text">Whether you're a senior executive looking to advance your career, a business
                leader seeking academic credentials, or an aspiring researcher, we help you find a DBA program that
                aligns with your professional goals and aspirations.</p>

            <div class="amity-about-actions">
                <button class="amity-btn-get-help" onclick="openPopup()">Get Help</button>
                <a href="#programmes" class="amity-btn-explore-courses">Explore Programs</a>
            </div>
        </div>
    </section> -->

    <section id="about-u360" class="about-u360-section">
        <div class="container about-u360-container">
            <h2 class="about-u360-title">About UNIVERSITY 360</h2>

            <p class="about-u360-text">
                University 360 is your trusted partner in achieving your higher education goals. We guide students in
                choosing the right online degree courses and distance education courses through expert career
                counselling and personalized guidance. Our platform offers accurate information on UGC-approved
                universities, accredited online degree programs, admissions, eligibility, fees, and career
                opportunities, helping students make confident decisions.
            </p>

            <p class="about-u360-text">
                Whether you're exploring online degree courses after 12th, an MBA, a computer science program, or a
                diploma course, University 360 connects you with the best options based on your career aspirations. With
                reliable university insights, expert support, and student-focused services, we empower learners across
                India to choose the right course, build the right skills, and create a successful future with
                confidence.
            </p>

            <div class="about-u360-btns">
                <button class="about-btn-yellow" onclick="openPopup()">Get Help</button>
                <button class="about-btn-blue"><a href="#programmes">Explore Courses</a></button>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="amity-faqs-section" id="faqs">
        <div class="container">
            <h2>FAQs | Frequently Asked Questions</h2>
            <div class="amity-accordion-wrapper">
                <!-- Q1 -->
                <div class="amity-accordion-item open">
                    <h3 class="amity-accordion-heading">
                        <span>Q1. How can UNIVERSITY 360 help with EdgeWood Online University DBA programs?</span>
                    </h3>
                    <div class="amity-accordion-content">
                        <p>UNIVERSITY 360 provides program information, counselling, course comparison, and admission
                            guidance for business professionals exploring EdgeWood Online University DBA programs.</p>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="amity-accordion-item">
                    <h3 class="amity-accordion-heading">
                        <span>Q2. What is the eligibility for a DBA program at EdgeWood Online University?</span>
                    </h3>
                    <div class="amity-accordion-content">
                        <p>Typically, candidates with a Master's degree (MBA or equivalent) and significant
                            professional experience are eligible for the DBA program. Please download the brochure or
                            contact our counsellors for exact eligibility criteria.</p>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="amity-accordion-item">
                    <h3 class="amity-accordion-heading">
                        <span>Q3. What is the duration of the DBA program at EdgeWood Online University?</span>
                    </h3>
                    <div class="amity-accordion-content">
                        <p>The EdgeWood Online University DBA program is typically completed in 36 months (3 years).
                            The program is designed for working professionals and can be pursued alongside a full-time
                            career.</p>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="amity-accordion-item">
                    <h3 class="amity-accordion-heading">
                        <span>Q4. Is the DBA from EdgeWood Online University globally recognized?</span>
                    </h3>
                    <div class="amity-accordion-content">
                        <p>EdgeWood Online University is an internationally recognized business school. The DBA degree
                            is designed to meet global academic and professional standards. For specific recognition
                            details, please refer to the official brochure or contact our counsellors.</p>
                    </div>
                </div>

                <!-- Q5 -->
                <div class="amity-accordion-item">
                    <h3 class="amity-accordion-heading">
                        <span>Q5. Can UNIVERSITY 360 help me compare DBA programs and doctoral options?</span>
                    </h3>
                    <div class="amity-accordion-content">
                        <p>Yes. UNIVERSITY 360 helps learners compare DBA programs based on factors such as
                            eligibility, specialization, curriculum, duration, and other available program
                            information.</p>
                    </div>
                </div>

                <!-- Q6 -->
                <div class="amity-accordion-item">
                    <h3 class="amity-accordion-heading">
                        <span>Q6. Can I pursue the DBA program online while working full-time?</span>
                    </h3>
                    <div class="amity-accordion-content">
                        <p>Yes. The Edgewood DBA program is specifically structured for working professionals, offering
                            flexible online learning with live and recorded sessions, so you can balance your career
                            and doctoral studies effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pre-Footer Expert Counseling Bar -->
    <section id="expert-counseling" style="margin:0px; padding: 0px;">
        <div id="footer-frm-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3><span class="yellow-span">Have Doubts?</span> Talk to Experts</h3>
                        <p>Get 100% Free Counselling on EdgeWood Online University DBA Programs</p>
                    </div>
                    <div class="col-md-6 text-md-end text-center mt-3 mt-md-0">
                        <button class="ftr-btn" onclick="openPopup()">
                            <i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Book FREE 1 : 1 Counseling
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Edgewood Mobile Fixed Bottom Action Bar (Mobile View Only) -->
    <div class="amity-mobile-sticky-footer">
        <button type="button" class="amity-mobile-btn-brochure"
            onclick="openBrochurePopup('brochures/edgewood_main_brochure.pdf', '')">
            <span>Get Brochure</span> <i class="fa fa-download"></i>
        </button>
        <button type="button" class="amity-mobile-btn-apply" onclick="openPopup()">
            <span>Apply Now</span> <i class="fa fa-angle-double-right"></i>
        </button>
    </div>

    <?php include "footer.php"; ?>
    <?php include "popup.php"; ?>
    <?php include "PopupBrochure.php"; ?>

    <script>
        // Inject Edgewood tracking values into all forms
        function setEdgewoodTrackingValues() {
            document.querySelectorAll('input[name="sub_source"]').forEach(function (el) {
                el.value = 'Edgewood_Organic';
            });
            document.querySelectorAll('input[name="utm_medium"]').forEach(function (el) {
                if (!el.value) el.value = 'Edgewood_Organic';
            });
            document.querySelectorAll('input[name="page_url"]').forEach(function (el) {
                el.value = window.location.href;
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            setEdgewoodTrackingValues();

            var _origOpenPopup = window.openPopup;
            window.openPopup = function () {
                if (_origOpenPopup) _origOpenPopup.apply(this, arguments);
                setTimeout(setEdgewoodTrackingValues, 10);
            };
        });

        function initEdgewoodCarousel() {
            if (window.jQuery && jQuery.fn && jQuery.fn.owlCarousel) {
                var $carousel = jQuery(".amity-program-carousel");
                if ($carousel.length && !$carousel.hasClass('owl-loaded')) {
                    $carousel.owlCarousel({
                        loop: true,
                        autoplay: true,
                        margin: 20,
                        autoplayTimeout: 3500,
                        autoplayHoverPause: true,
                        dots: false,
                        nav: true,
                        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        responsive: {
                            0: { items: 1, nav: true },
                            768: { items: 2, nav: true },
                            1024: { items: 3, nav: true }
                        }
                    });
                }
            } else {
                setTimeout(initEdgewoodCarousel, 50);
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initEdgewoodCarousel);
        } else {
            initEdgewoodCarousel();
        }

        // FAQ Accordion Toggle
        document.querySelectorAll('.amity-accordion-heading').forEach(function (heading) {
            heading.addEventListener('click', function () {
                var item = this.parentElement;
                var isOpen = item.classList.contains('open');
                document.querySelectorAll('.amity-accordion-item').forEach(function (el) {
                    el.classList.remove('open');
                });
                if (!isOpen) {
                    item.classList.add('open');
                }
            });
        });
    </script>
</body>

</html>