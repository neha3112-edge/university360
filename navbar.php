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
<nav class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <a href="<?= $base_url ?>"><img src="images/univ360-logo-icon.png" class="logo-img" alt="University360 Logo"></a>
      <div class="logo_text">
        <a href="<?= $base_url ?>">
          <h2>UNIVERSITY<span class="logo_text_black">360°</span></h2>
        </a>
        <p>Authorised Information and Guidance Partner</p>
      </div>
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>

  <ul class="nav-list">
    <li class="nav-dropdown">
      <a href="#mba-universities" class="dropdown-link" id="univDropdownToggle">
        <span>Universities</span>
        <i class="fa fa-angle-down nav-dropdown-arrow"></i>
      </a>
      <div class="nav-dropdown-menu" id="univDropdownMenu">
        <div class="dropdown-inner-list">
          <a href="<?= $base_url ?>lpu" class="dropdown-item">
            <span>LPU Online</span>
          </a>
          <a href="<?= $base_url ?>mu" class="dropdown-item">
            <span>Mangalayatan University</span>
          </a>
          <a href="<?= $base_url ?>uu" class="dropdown-item">
            <span>Uttaranchal University</span>
          </a>
          <a href="<?= $base_url ?>galgotias" class="dropdown-item">
            <span>Galgotias University</span>
          </a>
          <a href="<?= $base_url ?>amity" class="dropdown-item">
            <span>Amity University Online</span>
          </a>
          <a href="<?= $base_url ?>cu" class="dropdown-item">
            <span>Chandigarh University</span>
          </a>
          <a href="<?= $base_url ?>manipal" class="dropdown-item">
            <span>Manipal University</span>
          </a>
          <a href="<?= $base_url ?>smu" class="dropdown-item">
            <span>Sikkim Manipal University</span>
          </a>
          <a href="<?= $base_url ?>bdu" class="dropdown-item">
            <span>Bharathidasan University</span>
          </a>
          <a href="<?= $base_url ?>aju" class="dropdown-item">
            <span>Arka JAIN University</span>
          </a>
          <a href="<?= $base_url ?>dsu" class="dropdown-item">
            <span>Dayananda Sagar University</span>
          </a>
        </div>

        <!-- <div class="dropdown-footer">
          <a href="/#mba-universities" class="dropdown-all-btn">
            <span>Explore Partner Universities</span>
            <i class="fa fa-arrow-right"></i>
          </a>
        </div> -->
      </div>
    </li>
    <li class="nav-dropdown">
      <a href="#" class="dropdown-link" id="globalUnivDropdownToggle">
        <span>Global Universities</span>
        <i class="fa fa-angle-down nav-dropdown-arrow"></i>
      </a>
      <div class="nav-dropdown-menu" id="globalUnivDropdownMenu">
        <div class="dropdown-inner-list">
          <a href="<?= $base_url ?>rushford" class="dropdown-item">
            <span>Rushford Business School</span>
          </a>
          <a href="<?= $base_url ?>ggu" class="dropdown-item">
            <span>Golden Gate University</span>
          </a>
          <a href="<?= $base_url ?>ssbm" class="dropdown-item">
            <span>Swiss School of Business and <br>Management</span>
          </a>
          <a href="<?= $base_url ?>esgci" class="dropdown-item">
            <span>ESGCI</span>
          </a>
          <a href="<?= $base_url ?>edgewood" class="dropdown-item">
            <span>Edgewood University</span>
          </a>
          <a href="<?= $base_url ?>liverpool" class="dropdown-item">
            <span>Liverpool John Moores University</span>
          </a>
          <a href="<?= $base_url ?>psb" class="dropdown-item">
            <span>Paris School of Business</span>
          </a>
        </div>
      </div>
    </li>

    <li class="nav-dropdown">
      <a href="#" class="dropdown-link" id="iitDropdownToggle">
        <span>IITs</span>
        <i class="fa fa-angle-down nav-dropdown-arrow"></i>
      </a>
      <div class="nav-dropdown-menu" id="iitDropdownMenu">
        <div class="dropdown-inner-list">
          <a href="<?= $base_url ?>iiitb" class="dropdown-item">
            <span>IIIT Bangalore</span>
          </a>
        </div>
      </div>
    </li>

    <li class="nav-dropdown">
      <a href="#" class="dropdown-link" id="iimDropdownToggle">
        <span>IIMs</span>
        <i class="fa fa-angle-down nav-dropdown-arrow"></i>
      </a>
      <div class="nav-dropdown-menu" id="iimDropdownMenu">
        <div class="dropdown-inner-list">
          <a href="<?= $base_url ?>iimk" class="dropdown-item">
            <span>IIM Kozhikode</span>
          </a>
          <a href="<?= $base_url ?>iimb" class="dropdown-item">
            <span>IIM Bangalore</span>
          </a>
          <a href="<?= $base_url ?>iim-nagpur" class="dropdown-item">
            <span>IIM Nagpur</span>
          </a>
        </div>
      </div>
    </li>

    <li><a href="<?= $base_url ?>about-us">About Us</a></li>
    <li><a href="<?= $base_url ?>contact-us">Contact Us</a></li>
  </ul>
</nav>

<script>
  (function () {
    function initNavDropdown() {
      var dropdownToggles = document.querySelectorAll('.nav-dropdown .dropdown-link');
      var navCheck = document.getElementById('nav-check');

      dropdownToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
          if (window.innerWidth <= 991) {
            e.preventDefault();
            var parentLi = this.closest('.nav-dropdown');
            if (parentLi) {
              var wasActive = parentLi.classList.contains('active');
              // Close other open dropdowns for a clean accordion experience
              document.querySelectorAll('.nav-dropdown').forEach(function (li) {
                if (li !== parentLi) {
                  li.classList.remove('active');
                }
              });
              if (!wasActive) {
                parentLi.classList.add('active');
              } else {
                parentLi.classList.remove('active');
              }
            }
          }
        });
      });

      var navLinks = document.querySelectorAll('.nav-list a, .nav-dropdown-menu a');
      navLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
          if (window.innerWidth <= 991 && !this.classList.contains('dropdown-link')) {
            if (navCheck) {
              navCheck.checked = false;
            }
          }
        });
      });
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initNavDropdown);
    } else {
      initNavDropdown();
    }
  })();
</script>