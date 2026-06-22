  <!-- FLOATING CAPSULE NAVIGATION -->
  <nav class="navbar navbar-expand-lg floating-nav">
    <div class="container-fluid px-lg-4 d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a class="navbar-brand d-flex align-items-center me-0" href="/index.php">
        <img src="/logo.png" alt="Sankalp Hospital Logo" class="brand-logo">
      </a>
      
      <!-- Centerized Menu Links (Desktop) -->
      <div class="collapse navbar-collapse justify-content-center" id="desktopNavbarMenu">
        <ul class="navbar-nav gap-1">
          <li class="nav-item"><a class="nav-link" href="/index.php">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/about.php" role="button">About</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/about.php"><i class="fas fa-hospital me-2 text-primary"></i> About Us</a></li>
              <li><a class="dropdown-item" href="/about.php#vision"><i class="fas fa-eye me-2 text-primary"></i> Vision & Mission</a></li>
              <li><a class="dropdown-item" href="/about.php#director"><i class="fas fa-user-md me-2 text-primary"></i> Director's Message</a></li>
              <li><a class="dropdown-item" href="/about.php#achievements"><i class="fas fa-trophy me-2 text-primary"></i> Achievements</a></li>
              <li><a class="dropdown-item" href="/about.php#care"><i class="fas fa-heartbeat me-2 text-primary"></i> Patient Care</a></li>
              <li><a class="dropdown-item" href="/faq.php"><i class="fas fa-question-circle me-2 text-primary"></i> FAQs</a></li>
              <li><a class="dropdown-item" href="/myths-facts.php"><i class="fas fa-lightbulb me-2 text-primary"></i> Myths & Facts</a></li>
              <li><a class="dropdown-item" href="/glossary.php"><i class="fas fa-book-medical me-2 text-primary"></i> Glossary of Terms</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/departments.php" role="button">Departments</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/ophthalmology"><i class="fas fa-eye me-2 text-primary"></i> Ophthalmology</a></li>
              <li><a class="dropdown-item" href="/emergency"><i class="fas fa-ambulance me-2 text-primary"></i> Emergency & Trauma</a></li>
              <li><a class="dropdown-item" href="/gynecology"><i class="fas fa-female me-2 text-primary"></i> Obstetrics & Gynecology</a></li>
              <li><a class="dropdown-item" href="/ivf"><i class="fas fa-baby me-2 text-primary"></i> Assisted Fertility (IVF)</a></li>
              <li><a class="dropdown-item" href="/surgery"><i class="fas fa-procedures me-2 text-primary"></i> Laparoscopic Surgery</a></li>
              <li><a class="dropdown-item" href="/pediatrics"><i class="fas fa-child me-2 text-primary"></i> Pediatrics</a></li>
              <li><a class="dropdown-item" href="/orthopedics"><i class="fas fa-bone me-2 text-primary"></i> Orthopaedics Surgery</a></li>
              <li><a class="dropdown-item" href="/urology"><i class="fas fa-user-md me-2 text-primary"></i> Urology</a></li>
              <li><a class="dropdown-item" href="/psychiatry"><i class="fas fa-brain me-2 text-primary"></i> Psychiatry</a></li>
              <li><a class="dropdown-item" href="/ent"><i class="fas fa-head-side-cough me-2 text-primary"></i> ENT</a></li>
              <li><a class="dropdown-item" href="/anesthesiology"><i class="fas fa-syringe me-2 text-primary"></i> Anesthesia</a></li>
              <li><a class="dropdown-item" href="/oncology"><i class="fas fa-hand-holding-medical me-2 text-primary"></i> Onco Surgery</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="/doctors.php">Experts</a></li>
          <li class="nav-item"><a class="nav-link" href="/empanelments.php">Empanelments</a></li>
          <li class="nav-item"><a class="nav-link" href="/faq.php">FAQs</a></li>
          <li class="nav-item"><a class="nav-link" href="/index.php#contact">Contact</a></li>
        </ul>
      </div>

      <!-- Action Buttons (Right) -->
      <div class="d-flex align-items-center gap-2">
        <a href="tel:+917774223344" class="btn btn-emergency-nav d-none d-xl-inline-flex"><i class="fas fa-ambulance"></i> Emergency</a>
        <a href="/index.php#appointment" class="btn btn-primary-nav"><i class="far fa-calendar-check"></i> Book Now</a>
        <button class="navbar-toggler d-lg-none py-1 px-2 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav">
          <i class="fas fa-bars text-primary fs-4"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- MOBILE NAVIGATION DRAWER (OFFCANVAS) -->
  <div class="offcanvas offcanvas-start" id="mobileNav">
    <div class="offcanvas-header border-bottom">
      <img src="/logo.png" alt="Sankalp Logo" class="mobile-brand-logo">
      <button class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="mobile-menu d-flex flex-column gap-3 fs-5">
        <li><a href="/index.php">Home</a></li>
        <li>
          <a class="d-flex justify-content-between align-items-center dropdown-toggle" data-bs-toggle="collapse" href="#mobileAboutSubmenu" role="button" aria-expanded="false" aria-controls="mobileAboutSubmenu">
            About Us
          </a>
          <div class="collapse" id="mobileAboutSubmenu">
            <ul class="list-unstyled ps-3 mt-2 fs-6 d-flex flex-column gap-2 border-start">
              <li><a href="/about.php">About Overview</a></li>
              <li><a href="/about.php#vision">Vision & Mission</a></li>
              <li><a href="/about.php#director">Director's Message</a></li>
              <li><a href="/about.php#achievements">Achievements</a></li>
              <li><a href="/about.php#care">Patient Care</a></li>
              <li><a href="/faq.php">FAQs</a></li>
              <li><a href="/myths-facts.php">Myths & Facts</a></li>
              <li><a href="/glossary.php">Medical Glossary</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a class="d-flex justify-content-between align-items-center dropdown-toggle" data-bs-toggle="collapse" href="#mobileDeptsSubmenu" role="button" aria-expanded="false" aria-controls="mobileDeptsSubmenu">
            Departments
          </a>
          <div class="collapse" id="mobileDeptsSubmenu">
            <ul class="list-unstyled ps-3 mt-2 fs-6 d-flex flex-column gap-2 border-start">
              <li><a href="/departments.php">All Departments</a></li>
              <li><a href="/ophthalmology">Ophthalmology</a></li>
              <li><a href="/emergency">Emergency & Trauma</a></li>
              <li><a href="/gynecology">Obstetrics & Gynecology</a></li>
              <li><a href="/ivf">Assisted Fertility (IVF)</a></li>
              <li><a href="/surgery">Laparoscopic Surgery</a></li>
              <li><a href="/pediatrics">Pediatrics</a></li>
              <li><a href="/orthopedics">Orthopaedics Surgery</a></li>
              <li><a href="/urology">Urology</a></li>
              <li><a href="/psychiatry">Psychiatry</a></li>
              <li><a href="/ent">ENT</a></li>
              <li><a href="/anesthesiology">Anesthesia</a></li>
              <li><a href="/oncology">Onco Surgery</a></li>
            </ul>
          </div>
        </li>
        <li><a href="/doctors.php">Our Experts</a></li>
        <li><a href="/empanelments.php">Empanelments</a></li>
        <li><a href="/faq.php">FAQs</a></li>
        <li><a href="/index.php#contact">Contact Us</a></li>
      </ul>
      <div class="mt-5 pt-4 border-top">
        <h6 class="text-uppercase text-muted mb-3">Emergency Support</h6>
        <a href="tel:+917774223344" class="btn btn-emergency w-100 py-3"><i class="fas fa-ambulance"></i> +91 7774 223344</a>
      </div>
    </div>
  </div>
