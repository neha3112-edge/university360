<nav class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <a href="https://university360.co/"><img src="images/univ360-logo-icon.png" class="logo-img"
          alt="University360 Logo"></a>
      <div class="logo_text">
        <a href="https://university360.co/">
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
    <li><a href="https://university360.co/">Home</a></li>
    <li><a href="https://university360.co/about-us">About Us</a></li>
    <li class="nav-dropdown">
      <a href="#mba-universities" class="dropdown-link" id="univDropdownToggle">
        <span>Universities</span>
        <i class="fa fa-angle-down nav-dropdown-arrow"></i>
      </a>
      <div class="nav-dropdown-menu" id="univDropdownMenu">
        <div class="dropdown-inner-list">
          <a href="https://university360.co/lpu/" class="dropdown-item">
            <span>LPU Online</span>
          </a>
          <a href="https://university360.co/mu/" class="dropdown-item">
            <span>Mangalayatan University</span>
          </a>
          <a href="https://university360.co/uu/" class="dropdown-item">
            <span>Uttaranchal University</span>
          </a>
          <a href="https://university360.co/galgotias/" class="dropdown-item">
            <span>Galgotias University</span>
          </a>
          <a href="https://university360.co/amity/" class="dropdown-item">
            <span>Amity University Online</span>
          </a>
          <a href="https://university360.co/cu/" class="dropdown-item">
            <span>Chandigarh University</span>
          </a>
          <a href="https://university360.co/manipal/" class="dropdown-item">
            <span>Manipal University</span>
          </a>
          <a href="https://university360.co/smu/" class="dropdown-item">
            <span>Sikkim Manipal University</span>
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
      <a href="#" class="dropdown-link" id="GunivDropdownToggle">
        <span>Global Universities</span>
        <i class="fa fa-angle-down nav-dropdown-arrow"></i>
      </a>
      <div class="nav-dropdown-menu" id="GunivDropdownMenu">
        <div class="dropdown-inner-list">
          <a href="https://university360.co/rushford/" class="dropdown-item">
            <span>Rushford Business School</span>
          </a>
          <a href="https://university360.co/ggu/" class="dropdown-item">
            <span>Golden Gate University</span>
          </a>
          <a href="https://university360.co/ssbm" class="dropdown-item">
            <span>Swiss School of Business and <br>Management</span>
          </a>
          <a href="https://university360.co/iiitb/" class="dropdown-item">
            <span>IIIT Bangalore</span>
          </a>
          <a href="https://university360.co/esgci/" class="dropdown-item">
            <span>ESGCI</span>
          </a>
          <a href="https://university360.co/edgewood/" class="dropdown-item">
            <span>Edgewood University</span>
          </a>
          <a href="https://university360.co/liverpool/" class="dropdown-item">
            <span>Liverpool John Moores University</span>
          </a>
          <a href="https://university360.co/iimk/" class="dropdown-item">
            <span>IIM Kozhikode</span>
          </a>
          <a href="https://university360.co/iimb/" class="dropdown-item">
            <span>IIM Bangalore</span>
          </a>
          <a href="https://university360.co/iim-nagpur/" class="dropdown-item">
            <span>IIM Nagpur</span>
          </a>
          <a href="https://university360.co/psb/" class="dropdown-item">
            <span>Paris School of Business</span>
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

    <li><a href="https://university360.co/#mba-specialization">Courses</a></li>
    <li><a href="#approvals">Approvals</a></li>
    <li><a href="https://university360.co/contact-us">Contact Us</a></li>
    <!-- <div class="d-none d-lg-block"><button class="header-btn" onclick="openPopup()">Enquire Now</button></div>
    <li class="d-block d-lg-none mt-2"><button class="header-btn w-100"
        onclick="openPopup(); document.getElementById('nav-check').checked = false;">Enquire Now</button></li> -->
  </ul>
</nav>

<script>
  (function () {
    function initNavDropdown() {
      var dropdownToggle = document.getElementById('univDropdownToggle');
      var GdropdownToggle = document.getElementById('GunivDropdownToggle');
      var navCheck = document.getElementById('nav-check');

      if (dropdownToggle) {
        dropdownToggle.addEventListener('click', function (e) {
          if (window.innerWidth <= 991) {
            e.preventDefault();
            var parentLi = this.closest('.nav-dropdown');
            if (parentLi) {
              parentLi.classList.toggle('active');
            }
          }
        });
      }

      if (GdropdownToggle) {
        GdropdownToggle.addEventListener('click', function (e) {
          if (window.innerWidth <= 991) {
            e.preventDefault();
            var parentLi = this.closest('.nav-dropdown');
            if (parentLi) {
              parentLi.classList.toggle('active');
            }
          }
        });
      }

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