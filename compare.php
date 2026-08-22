<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Compare Top Universities for MBA</title>
		<!-- Add this line to include Font Awesome CSS -->
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link href='https://mba.distanceeducationschool.com/bootstrap-5.0.2-dist/comparestyle.css' rel='stylesheet'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<link href="testseema/style1.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			@media only screen and (max-width: 480px)
				#universityA, #universityB, #universityC {
					padding: 3px 3px 3px 2px;
					width: 100%!important;
					margin: 1px;
					background: transparent;
					color: #000;
					border-style: none;
					text-align: center;
					font-size: 10px;
					/* word-wrap: break-word; */
					/* overflow-wrap: break-word; */
			}
		</style>

		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->

		<script>
			document.addEventListener("DOMContentLoaded", function () {
				const universityASelect = document.getElementById("universityA");
				const universityBSelect = document.getElementById("universityB");
				const universityCSelect = document.getElementById("universityC");

				universityASelect.value = "";

				universityASelect.addEventListener("change", function () {
					handleUniversitySelection(universityASelect, universityBSelect, universityCSelect);
				});

				universityBSelect.addEventListener("change", function () {
					handleUniversitySelection(universityBSelect, universityASelect, universityCSelect);
				});

				universityCSelect.addEventListener("change", function () {
					handleUniversitySelection(universityCSelect, universityASelect, universityBSelect);
				});
			});

			function handleUniversitySelection(selected, other1, other2) {
				const selectedUniversity = selected.value;

				if (selectedUniversity === "") {
					// Reset the other dropdowns
					other1.value = "";
					other2.value = "";
				} else {
					// Hide the selected university in the other dropdowns
					other1.querySelector(`option[value="${selectedUniversity}"]`).style.display = "none";
					other2.querySelector(`option[value="${selectedUniversity}"]`).style.display = "none";
				}
			}

			courseSelect.addEventListener("change", function () {
				// Refresh the university selection area when the course changes
				populateUniversityDropdowns();
				populateComparisonTable();
			});

		</script>

	</head>
	<body>
		<?php include "header.php"; ?>
		<?php include "navbar.php"; ?>
		<br>
		<div class="s1">
			<div class="row">
				<h1>Compare universities to make <br>the best decision<span class="sp-compare"> for your fututre</span></h1>
				<!-- <p>Here is the best way to make an informed decision about your future. And <br>Find the best university for your needs and budget without having to visit anywhere.</p> -->
			</div>
		</div>


		<div class="seema">
			<div class="sticky">

		<select id="course" disabled>
    <option value="mba" selected>MBA - Master of Business Administration</option>
</select>

				<div class="section1">

					<div class="select-area">
						<label for="universityA"></label>
						<center> <div id="universityAImageContainer"></div></center> 
						<select id="universityA" onchange="updateUniversityImage('universityA')">

							<!-- University options will be added dynamically -->
						</select>

					</div>



					<div class="select-area">
						<label for="universityB"></label>
						<center> <div id="universityBImageContainer"></div></center> 
						<select id="universityB" onchange="updateUniversityImage('universityB')">

							<!-- University options will be added dynamically -->
						</select>

					</div>



					<div class="select-area">
						<label for="universityC"></label>
						<center> <div id="universityCImageContainer"></div></center> 
						<select id="universityC" onchange="updateUniversityImage('universityC')">
						<!-- University options will be added dynamically -->
						</select>

					</div>


				</div>
			</div>  

			<br>
			<div class="d-block d-sm-block d-lg-none">
				<center><button id="compareNowBtnMobile" class="compare-now-btn" onclick="showCompareTable()">Compare Now</button></center>
			</div>

			<div class="d-none d-lg-block">
				<center><button id="compareNowBtn" class="compare-now-btn" onclick="showCompareTable()">Compare Now</button></center>
			</div><br>
			<div id="tbl-area">
				<table id="comparison-table" style="display:none;">
					<tbody>

					</tbody>
				</table><br>

			</div>
		</div>
		<div id="resultMessage"></div>
		<script>
			document.addEventListener("DOMContentLoaded", function () {

				const compareNowBtn = document.getElementById("compareNowBtn");
				compareNowBtn.addEventListener("click", function () {
					populateComparisonTable();
				});
			});

			const universitiesData = {


				mba: {
				    Ignou: { 
						Name:"IGNOU",
						Location:"Maidan Garhi, New Delhi",
						Approvals:"UGC-DEB | NAAC A++",
						Image: "https://mba.distanceeducationschool.com/images/IGNOUlogo.webp",
						Eligibility: "Graduation with 50% from any University",
						"Fees": "15,500/- Semester",
						"Specialization": "Marketing Management,Finance Management, Human Resource Management, International Trade Management, Business Management, Information Technology Management, Supply Chain Management, Business Analytics, Rural Management, Retail Management, Project Management, Hospital Management, Operation Management",
						"Education Mode": "Distance / Online",
						"Examination Mode": "Online",
						"Placement Assistance": "Yes",
						"EMI Available": "No",
						// "Webstie URL": "https://mba.distanceeducationschool.com/",
						"Online Classes": "No",
						"Learning Features": "LMS, E-Books, Live & Recorded lectures",

					},

					Jain: { Name:"Online Jain",
						   Location:"Bangalore, Karnataka",
						   Approvals:"UGC-DEB | NAAC A++ | 68th NIRF Rank",
						   Image: "https://mba.distanceeducationschool.com/images/jain11-1.webp",
						   Eligibility: "Graduation with 50% from any University",
						   "Fees": "37,500 Per Semester",
						   "Specialization": "Human Resource Management, Finance, Marketing, General Management, Systems and Operations Management, Logistics and Supply Chain Management, Finance and Marketing, Information Technology Management, Marketing and Human Resource Management, Healthcare Management, Human Resource Management and Finance, Project Management, Entrepreneurship and Leadership, International Finance (Syllabus Integrated and Accredited by ACCA, UK), Business Intelligence and Analytics (Accredited by IoA, UK)",
						   "Education Mode": "Online",
						   "Examination Mode": "Online",
						   "Placement Assistance": "Yes",
						   "EMI Available": "Yes",
						   // "Webstie URL": "https://mba.distanceeducationschool.com/",
						   "Online Classes": "Yes",
						   "Learning Features": "LMS, E-Books, Live & Recorded lectures",

						  },

					Manipal: { Name:"Online Manipal",
							  Location:"Jaipur, Rajasthan",
							  Approvals:"UGC | NAAC A+",
							  Image: "https://mba.distanceeducationschool.com/images/manipal-mba-comapre-logo.webp",
							  Eligibility: "Graduation with 50% from any University",
							  "Fees": "41,500 Per Semester",
							  "Specialization": "Finance, Marketing, Analytics & Data Science, Operations Management, Banking, Financial Services and Insurance, Human resource management, Retail Management, IT & FinTech",
							  "Education Mode": "Online",
							  "Examination Mode": "Online",
							  "Placement Assistance": "Yes",
							  "EMI Available": "Yes",
							  // "Webstie URL": "https://mba.distanceeducationschool.com/",
							  "Online Classes": "Yes",
							  "Learning Features": "LMS, E-Books, Live & Recorded lectures",

							 },

					LPU: {
						Name:"Lovely Professional University",
						Location:"Phagwara, Punjab",
						Approvals:"UGC-DEB | NAAC A++ | 38th NIRF Rank",
						Image: "https://mba.distanceeducationschool.com/images/LPU11-1.webp",
						Eligibility: "Graduation with 50% from any University",
						"Fees": "40,000 Per Semester",
						"Specialization": "Finance, Business Analytics, Digital Marketing, Information Technology, International Business, Operations Management, Human Resource Management, Data Science, Marketing",
						"Education Mode": "Online",
						"Examination Mode": "Online",
						"Placement Assistance": "Yes",
						"EMI Available": "Yes",
						// "Webstie URL": "https://distanceeducationschool.com/lpu-distance-education-at-lovely-professional-university/",
						"Online Classes": "Yes",
						"Learning Features": "LMS, E-Books, Live & Recorded lectures",
					},

					UPES: {
						Name:"UPES University",
						Location:"Dehradun, Uttarakhand",
						Approvals:"UGC-DEB | NAAC A | 65th NIRF Rank",
						Image: "https://mba.distanceeducationschool.com/images/UPES-mba-compare-logo.webp",
						Eligibility: "Graduation with 50% from any University",
						"Fees": "37,500 Per Semester",
						"Specialization": "Digital Business, Marketing, Human Resource Management, Finance, Opreations, Business Analytics, International Business, Infrastructure Management, Logistics and Supply Chain Management, Oil and Gas Management, Power Management",
						"Education Mode": "Online",
						"Examination Mode": "Online",
						"Placement Assistance": "Yes",
						"EMI Available": "No",
						// "Webstie URL": "https://distanceeducationschool.com/uttaranchal-university/",
						"Online Classes": "Yes",
						"Learning Features": "LMS, E-Books, Live & Recorded lectures",
					},

					uttaranchal: {
						Name:"Uttaranchal University",
						Location:"Dehradun, Uttarakhand",
						Approvals:"UGC-DEB | NAAC A+",
						Image: "https://mba.distanceeducationschool.com/images/uttranchal-mba-compare-logo.webp",
						Eligibility: "Graduation with 50% from any University",
						"Fees": "17,000 Per Semester",
						"Specialization": "Marketing Managment, Financial Management, Human Resource Management, Business Analytics",
						"Education Mode": "Online",
						"Examination Mode": "Online",
						"Placement Assistance": "Yes",
						"EMI Available": "No",
						// "Webstie URL": "https://distanceeducationschool.com/uttaranchal-university/",
						"Online Classes": "Yes",
						"Learning Features": "LMS, E-Books, Live & Recorded lectures",
					},

					vignan: {
						Name:"Vignan University",
						Location:"Guntur, Andhra Pradesh",
						Approvals:"UGC | NAAC A+ | 75th NIRF",
						Image: "https://mba.distanceeducationschool.com/images/vignan-mba-compare-logo.webp",
						Eligibility: "Graduation with 50% from any University",
						"Fees": "25,000 Per Semester",
						"Specialization": "Finance, Human Resource, Marketing Management, Healthcare & Hospital Management, Business Analytics, Finance and Human Resource, Banking and FinTech, Digital Marketing, Information Technology, Logistics and Supply Chain Management, Marketing and Human Resource, Opreations Management",
						"Education Mode": "Online",
						"Examination Mode": "Online",
						"Placement Assistance": "Yes",
						"EMI Available": "Yes",
						// "Webstie URL": "https://distanceeducationschool.com/vignan-university/",
						"Online Classes": "Yes",
						"Learning Features": "LMS, E-Books, Live & Recorded lectures",
					},
					Mangalayatan: {
						Name:"Mangalayatan University",
						Location:"Aligarh, Uttar Pradesh",
						Approvals:"UGC-DEB | NAAC A+",
						Image: "https://mba.distanceeducationschool.com/images/Mangalayatan-logo-compare.webp",
						Eligibility: "Graduation with 50% from any University",
						"Fees": "15,000 Per Semester",
						"Specialization": "Human Resource Management, Marketing, Finance, International Business",
						"Education Mode": "Online",
						"Examination Mode": "Online",
						"Placement Assistance": "No",
						"EMI Available": "No",
						// "Webstie URL": "https://distanceeducationschool.com/mangalayatan-university/",
						"Online Classes": "No",
						"Learning Features":"LMS, E-Books, Live & Recorded lectures",
					},

					Chandigarh: {
						Name:"Chandigarh University",
						Location:"Mohali, Punjab",
						Approvals:"UGC-DEB | NAAC A+ | 27th NIRF Rank",
						Image: "https://mba.distanceeducationschool.com/images/Chandigarh-logo-compare.webp",
						Eligibility: "Graduation with 50% from any University",
						"Fees": "16,340 Per Semester",
						"Specialization": "Human Resource, Marketing, International Business, Entrepreneurship, Finance, Information Technology, Logistics & Supply Chain Management",
						"Education Mode": "Online/ Distance",
						"Examination Mode": "Online",
						"Placement Assistance": "Yes",
						"EMI Available": "Yes",
						// "Webstie URL": "https://distanceeducationschool.com/chandigarh-university/",
						"Online Classes": "Yes",
						"Learning Features": "LMS, E-Books, Live & Recorded lectures",
					},

				},

				// Data for other courses...
			};




			// Event listener for the initial course selection
			document.addEventListener("DOMContentLoaded", function () {
				const courseSelect = document.getElementById("course");
				const defaultCourse = "mba"; // Set your default course here
				courseSelect.value = defaultCourse;

				// Call the function to populate university dropdowns with the default course
				populateUniversityDropdowns();

				// Event listener for all university select dropdowns
				document.getElementById("universityA").addEventListener("change", handleUniversitySelection);
				document.getElementById("universityB").addEventListener("change", handleUniversitySelection);
				document.getElementById("universityC").addEventListener("change", handleUniversitySelection);
			});

			// Function to populate the university dropdowns based on the selected course
			function populateUniversityDropdowns() {
				const courseSelect = document.getElementById("course");
				const universityASelect = document.getElementById("universityA");
				const universityBSelect = document.getElementById("universityB");
				const universityCSelect = document.getElementById("universityC");
				const table = document.getElementById("comparison-table");

				// Clear existing options, except the placeholder option
				universityASelect.innerHTML = '<option value="" disabled>Select university</option>';
				universityBSelect.innerHTML = '<option value="" disabled>Select university</option>';
				universityCSelect.innerHTML = '<option value="" disabled>Select university</option>';

				document.getElementById("universityAImageContainer").innerHTML = "";
				document.getElementById("universityBImageContainer").innerHTML = "";
				document.getElementById("universityCImageContainer").innerHTML = "";
				courseSelect.addEventListener("change", function () {
					// Refresh the university selection area when the course changes
					populateUniversityDropdowns();
					populateComparisonTable();



				});

				// Get the selected course
				const selectedCourse = courseSelect.value;

				// <!--start this code use for mba bydefault-->
				document.addEventListener("DOMContentLoaded", function () {
					const courseSelect = document.getElementById("course");
					const defaultCourse = "mba"; // Set your default course here
					courseSelect.value = defaultCourse;


					// Call the function to populate university dropdowns with the default course
					populateUniversityDropdowns();

					// Event listener for all university select dropdowns


					document.getElementById("universityA").addEventListener("change", handleUniversitySelection);
					document.getElementById("universityB").addEventListener("change", handleUniversitySelection);
					document.getElementById("universityC").addEventListener("change", handleUniversitySelection);

				});

				// Create an array to keep track of selected universities


				const selectedUniversities = [];

				// Populate university dropdowns based on the selected course
				for (const university in universitiesData[selectedCourse]) {
					const option = document.createElement("option");
					option.value = university;
					option.textContent = universitiesData[selectedCourse][university].Name;
					option.setAttribute("data-image-url", universitiesData[selectedCourse][university].Image);



					// start thsi code for ignou select by default Check if the university is already selected in another dropdown

					if (!selectedUniversities.includes(university)) {

				 	//	if (universityASelect === "Ignou") {
			 	//		option.selected = true;
			 	//	}



						// Clear University B and C dropdowns
							universityASelect.innerHTML = '<option value="" selected disabled>Select University</option>';
						universityBSelect.innerHTML = '<option value="" selected disabled>Select University</option>';
						universityCSelect.innerHTML = '<option value="" selected disabled>Select University</option>';

						// Populate University B and C dropdowns with all available universities, including images
						for (const u in universitiesData[selectedCourse]) {
							const opt = document.createElement("option");
							opt.value = u;
							opt.textContent = universitiesData[selectedCourse][u].Name;

							// Set the data-image-url attribute for the option
							opt.setAttribute("data-image-url", universitiesData[selectedCourse][u].Image);
universityASelect.appendChild(opt.cloneNode(true));
							universityBSelect.appendChild(opt);
							universityCSelect.appendChild(opt.cloneNode(true));


						}

						// Clear the data table
						const table = document.getElementById("comparison-table");
						table.querySelector("tbody").innerHTML = "";
						universityASelect.appendChild(option);
						// universityBSelect.appendChild(option.cloneNode(true));
						// universityCSelect.appendChild(option.cloneNode(true));
						selectedUniversities.push(university);
					}
				}

			//	universityASelect.dispatchEvent(new Event("change"));



			}

			// Function to populate the comparison table based on selected universities
			function populateComparisonTable() {
				const courseSelect = document.getElementById("course");
				const universityASelect = document.getElementById("universityA");
				const universityBSelect = document.getElementById("universityB");
				const universityCSelect = document.getElementById("universityC");
				const table = document.getElementById("comparison-table");
				const tbody = table.querySelector("tbody");

				// Clear existing rows
				tbody.innerHTML = "";

				// Get the selected course and universities
				const selectedCourse = courseSelect.value;
				const selectedUniversityA = universityASelect.value;
				const selectedUniversityB = universityBSelect.value;
				const selectedUniversityC = universityCSelect.value;

				// Define icons for specific aspects
				const aspectIcons = {
					Name: "fa fa-university",
					Location: "fa fa-map-marker",
					Approvals: "fa fa-award",
					Eligibility: "fa fa-check-square",
					Fees: "fa fa-rupee",
					Specialization:"fa fa-pencil-square",
					"Examination Mode": "fa fa-pencil-square",
					"Education Mode": "fa fa-pencil-square",
					"Placement Assistance": "fa fa-street-view",
					"EMI Available": "fa fa-calculator",
					"Online Classes": "fa fa-laptop",
					"Learning Features": "fa-graduation-cap",

					// Add more aspect-icon pairs as needed
				};

				// Create a row for university images before the loop that populates the aspects
				const rowImages = document.createElement("tr");

				// Create image cells for each university and add them to the image row
				for (const universitySelect of [universityASelect, universityBSelect, universityCSelect]) {
					const imageCell = document.createElement("td");
					const selectedUniversity = universitySelect.value;
					const universityData = universitiesData[selectedCourse][selectedUniversity];
					if (universityData.Image) {
						const image = document.createElement("img");
						image.src = universityData.Image;
						image.alt = `${universityData.Name} Image`;
						imageCell.appendChild(image);
					}
					rowImages.appendChild(imageCell);
				}


				// Now, continue with the loop that populates the aspects as before
				for (const aspect in universitiesData[selectedCourse][selectedUniversityA]) {
					if (aspect === "Image") {
						// Skip the Image aspect
						continue;
					}

					const rowAspect = document.createElement("tr");
					const aspectCell = document.createElement("th");

					// Create a span element for the FontAwesome icon
					const iconSpan = document.createElement("span");
					const iconClass = aspectIcons[aspect]; // Get the icon class based on the aspect
					iconSpan.className = `fas ${iconClass}`;

					// Set the text content for the aspect heading
					aspectCell.innerHTML = `<span class="fas ${iconClass}"></span> ${aspect}`;


					// Append the icon span to the aspectCell
					// aspectCell.appendChild(iconSpan);

					// Set the colspan attribute to make the heading span the full width
					aspectCell.setAttribute("colspan", "4");
					aspectCell.style.textAlign = "left";
					aspectCell.style.padding = "6px 13px";
					aspectCell.style.fontWeight = 600;
					aspectCell.style.color = "#00415D";

					rowAspect.appendChild(aspectCell);

					tbody.appendChild(rowAspect);

					const rowData = document.createElement("tr");
					const cellA = document.createElement("td");
					const cellB = document.createElement("td");
					const cellC = document.createElement("td");

					cellA.textContent = universitiesData[selectedCourse][selectedUniversityA][aspect];
					cellB.textContent = universitiesData[selectedCourse][selectedUniversityB][aspect];
					cellC.textContent = universitiesData[selectedCourse][selectedUniversityC][aspect];

					rowData.appendChild(cellA);
					rowData.appendChild(cellB);
					rowData.appendChild(cellC);

					tbody.appendChild(rowData);

				}
			}

			// Event listeners for course and university dropdown changes
			const courseSelect = document.getElementById("course");
			const universityASelect = document.getElementById("universityA");
			const universityBSelect = document.getElementById("universityB");
			const universityCSelect = document.getElementById("universityC");

			courseSelect.addEventListener("change", () => {
				populateUniversityDropdowns();
				populateComparisonTable();

			});


			universityASelect.addEventListener("change", populateComparisonTable);
			universityBSelect.addEventListener("change", populateComparisonTable);
			universityCSelect.addEventListener("change", populateComparisonTable);

			// Call the functions to populate dropdowns initially
			populateUniversityDropdowns();
			populateComparisonTable();

		</script>

		<script>course
			// Function to update the university image based on the selected option
			function updateUniversityImage(selectId) {

				const select = document.getElementById(selectId);
				const selectedOption = select.options[select.selectedIndex];

				const imageUrl = selectedOption.getAttribute("data-image-url"); // Retrieve the image URL

				// Check if an image URL is available
				if (imageUrl) {
					const imageContainer = document.getElementById(selectId + "ImageContainer"); // Assuming your image containers have IDs like "universityAImageContainer"
					const image = document.createElement("img");
					image.src = imageUrl; // Set the image source
					image.alt = `${selectedOption.textContent} Image`;

					// Clear the existing content and append the image
					imageContainer.innerHTML = "";
					imageContainer.appendChild(image);
				} else {
					// Clear the image container if no image URL is available
					const imageContainer = document.getElementById(selectId + "ImageContainer");
					imageContainer.innerHTML = "";
				}


			}


			// Function to update the university image based on the selected option
			function updateUniversityImage(selectId) {

				const select = document.getElementById(selectId);
				const selectedOption = select.options[select.selectedIndex];

				const imageUrl = selectedOption.getAttribute("data-image-url"); // Retrieve the image URL

				// Check if an image URL is available
				if (imageUrl) {
					const imageContainer = document.getElementById(selectId + "ImageContainer"); // Assuming your image containers have IDs like "universityAImageContainer"
					const image = document.createElement("img");
					image.src = imageUrl; // Set the image source
					image.alt = `${selectedOption.textContent} Image`;

					// Clear the existing content and append the image
					imageContainer.innerHTML = "";
					imageContainer.appendChild(image);
				} else {
					// Clear the image container if no image URL is available
					const imageContainer = document.getElementById(selectId + "ImageContainer");
					imageContainer.innerHTML = "";
				}


			}




		</script>
			function showCompareTable() {
				$("#comparison-table").show();
				$("#compareNowBtn, #compareNowBtnMobile").hide();
			}
		</script>


		<?php include "footer.php"; ?>
		<?php include "popup.php"; ?>
	
		 <?php include "PopupBrochure.php"; ?>

	</body>
</html>