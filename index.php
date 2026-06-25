<?php
// Dynamic request routing for clean URLs and sub-pages
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$route = basename($requestPath);

// Mapping for clinical department pages to the unified detail template
$departmentRoutes = [
    'ophthalmology-hospital-in-ambikapur' => 'ophthalmology',
    'emergency-hospital-in-ambikapur' => 'emergency',
    'gynecology-hospital-in-ambikapur' => 'gynecology',
    'ivf-treatment-in-ambikapur' => 'ivf',
    'laparoscopic-surgery-hospital-in-ambikapur' => 'surgery',
    'pediatric-hospital-in-ambikapur' => 'pediatrics',
    'orthopedic-hospital-in-ambikapur' => 'orthopedics',
    'urology-hospital-in-ambikapur' => 'urology',
    'chemotherapy-hospital-in-ambikapur' => 'oncology',
    'anesthesia-services-in-ambikapur' => 'anesthesia',
    'maxillofacial-surgery-hospital-in-ambikapur' => 'surgery',
    'ent-hospital-in-ambikapur' => 'ent',
    'ophthalmology' => 'ophthalmology',
    'ophthalmology.php' => 'ophthalmology',
    'emergency' => 'emergency',
    'emergency.php' => 'emergency',
    'emergency-trauma' => 'emergency',
    'emergency-trauma.php' => 'emergency',
    'gynecology' => 'gynecology',
    'gynecology.php' => 'gynecology',
    'obstetrics-gynecology' => 'gynecology',
    'obstetrics-gynecology.php' => 'gynecology',
    'ivf' => 'ivf',
    'ivf.php' => 'ivf',
    'assisted-fertility' => 'ivf',
    'assisted-fertility.php' => 'ivf',
    'surgery' => 'surgery',
    'surgery.php' => 'surgery',
    'general-surgery' => 'surgery',
    'general-surgery.php' => 'surgery',
    'laparoscopic-surgery' => 'surgery',
    'laparoscopic-surgery.php' => 'surgery',
    'pediatrics' => 'pediatrics',
    'pediatrics.php' => 'pediatrics',
    'neonatology' => 'pediatrics',
    'neonatology.php' => 'pediatrics',
    'orthopedics' => 'orthopedics',
    'orthopedics.php' => 'orthopedics',
    'orthopaedics' => 'orthopedics',
    'orthopaedics.php' => 'orthopedics',
    'urology' => 'urology',
    'urology.php' => 'urology',
    'psychiatry' => 'psychiatry',
    'psychiatry.php' => 'psychiatry',
    'ent' => 'ent',
    'ent.php' => 'ent',
    'anesthesiology' => 'anesthesia',
    'anesthesiology.php' => 'anesthesia',
    'anesthesia' => 'anesthesia',
    'anesthesia.php' => 'anesthesia',
    'oncology' => 'oncology',
    'oncology.php' => 'oncology',
    'onco-surgery' => 'oncology',
    'onco-surgery.php' => 'oncology',
];

// Doctor pages are now real files in doctors/dr-<slug>.php — they are
// served directly by the static-file pass-through in local_router.php
// (dev) and the /doctors/(.*) route in vercel.json (prod). No PHP-level
// routing is needed here.

if (isset($departmentRoutes[$route])) {
    $deptKey = $departmentRoutes[$route];
    include __DIR__ . '/department-detail.php';
    exit;
}

if ($route === 'about' || $route === 'about.php') {
    include __DIR__ . '/about.php';
    exit;
} elseif ($route === 'departments' || $route === 'departments.php') {
    include __DIR__ . '/departments.php';
    exit;
} elseif ($route === 'doctors' || $route === 'doctors.php' || $route === 'experts' || $route === 'experts.php') {
    include __DIR__ . '/doctors.php';
    exit;
} elseif ($route === 'empanelments' || $route === 'empanelments.php') {
    include __DIR__ . '/empanelments.php';
    exit;
} elseif ($route === 'faq' || $route === 'faq.php') {
    include __DIR__ . '/faq.php';
    exit;
} elseif ($route === 'myths-facts' || $route === 'myths-facts.php') {
    include __DIR__ . '/myths-facts.php';
    exit;
} elseif ($route === 'glossary' || $route === 'glossary.php') {
    include __DIR__ . '/glossary.php';
    exit;
}

// Dynamic page configuration
$pageTitle = "Sankalp Hospital | Best Multi-Specialty Hospital In Ambikapur";
$pageDesc = "Sankalp Hospital is a premier multi-specialist healthcare facility in Ambikapur. We provide advanced IVF treatments, Urology, Gynecology, 24/7 emergency care, and world-class medical infrastructure.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
  <!-- HERO SECTION WITH QUICK APPOINTMENT WIDGET -->
  <section id="home" class="hero-slider">
    <div id="heroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/hero1.png" alt="Hospital Lobby Banner">
        </div>
        <div class="carousel-item">
          <img src="images/hero2.png" alt="Advanced Operation Theatre">
        </div>
        <div class="carousel-item">
          <img src="images/hero3.png" alt="Healthcare Staff and Care">
        </div>
        <div class="carousel-item">
          <img src="images/hero4.png" alt="Modern Clinical Consult">
        </div>
        <div class="carousel-item">
          <img src="images/hero5.png" alt="Advanced Laboratory Setup">
        </div>
        <div class="carousel-item">
          <img src="images/hero6.png" alt="Modern Hospital Building Facade">
        </div>
      </div>
    </div>

    <!-- Floating Overlay Booker Widget -->
    <div class="hero-overlay-content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 hero-text-block">
            <h1>Advanced Medical Care, <span>Close to You</span></h1>
            <p>Sankalp Hospital is Ambikapur's leading multi-specialty healthcare provider, delivering world-class infrastructure, advanced surgical care, and expert medical treatments.</p>
            <div class="d-flex flex-wrap gap-3">
              <a href="#departments" class="btn btn-secondary py-3 px-4"><i class="fas fa-stethoscope"></i> OUR SERVICES</a>
              <a href="tel:+919584889068" class="btn btn-outline-light py-3 px-4 border-2"><i class="fas fa-headset"></i> INQUIRE NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NEWS TICKER -->
  <section class="news-ticker">
    <div class="container">
      <div class="ticker-wrap d-flex align-items-center">
        <span class="ticker-label"><i class="fas fa-bullhorn"></i> Announcement</span>
        <div class="ticker-content flex-grow-1">
          <ul>
            <li>24 Hours Emergency and Critical Care Trauma Services are operational 24x7.</li>
            <li>In-house Advanced Dialysis unit provides cashless support for CGHS and Ayushman patients.</li>
            <li>Sankalp Assisted Fertility IVF Center has hit a milestone of 1,500+ successful IVF babies.</li>
            <li>OPD bookings are open daily from 9:00 AM to 6:00 PM. Book online to reserve.</li>
          </ul>
        </div>
        <div class="ticker-controls d-none d-md-block">
          <button aria-label="prev"><i class="fas fa-chevron-left"></i></button>
          <button aria-label="pause"><i class="fas fa-pause"></i></button>
          <button aria-label="next"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section id="about" class="about-section">
    <div class="about-decor-bg"></div>
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <span class="about-badge">Welcome to Sankalp Hospital</span>
          <h2>A Heritage of Trust and <span>Advanced Healing</span></h2>
          <p class="lead text-muted mb-4">Located at the heart of Ambikapur, Sankalp Hospital has spent over 15 years providing top-tier clinical diagnostics, patient care, and cutting-edge treatments across diverse medical fields.</p>
          <p class="mb-4">We are dedicated to establishing patient-centered medical excellence. Our state-of-the-art diagnostic imaging, high-success IVF clinics, modular operation theatres, and dedicated pediatric divisions ensure you and your loved ones receive comprehensive clinical support.</p>
          
          <div class="about-feat-grid">
            <div class="about-feat-card">
              <div class="about-feat-icon-box"><i class="fas fa-shield-alt"></i></div>
              <h5>Patient Safety First</h5>
              <p>Advanced sanitization, ICU monitoring, and expert trauma handling.</p>
            </div>
            <div class="about-feat-card">
              <div class="about-feat-icon-box"><i class="fas fa-certificate"></i></div>
              <h5>Awarded Clinicians</h5>
              <p>Our senior doctors carry decades of medical expertise in critical fields.</p>
            </div>
            <div class="about-feat-card">
              <div class="about-feat-icon-box"><i class="fas fa-microscope"></i></div>
              <h5>Advanced Diagnostics</h5>
              <p>High-resolution pathology labs and modular surgical suites.</p>
            </div>
            <div class="about-feat-card">
              <div class="about-feat-icon-box"><i class="fas fa-heartbeat"></i></div>
              <h5>Holistic Wellness</h5>
              <p>Personalized post-surgery protocols and dedicated support staff.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="about-collage-container">
            <div class="about-collage-bg-wrap">
              <img src="images/hero6.png" alt="Sankalp Hospital Facade" class="about-collage-img-bg w-100">
            </div>
            <div class="about-collage-fg-wrap">
              <img src="images/hero4.png" alt="Doctor consulting patient" class="about-collage-img-fg w-100">
            </div>
            <div class="about-img-experience">
              <h3>15+</h3>
              <p>Years of Caring</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DYNAMIC STATISTICS SECTION -->
  <section class="stats-section py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Left Side: Milestones info -->
        <div class="col-lg-5">
          <div class="section-title text-start mb-4">
            <span>Our Milestones</span>
            <h2 class="mb-3">Our Journey of Care in Numbers</h2>
            <p class="lead text-muted mb-4">Over a decade of dedicated clinical excellence, delivering reliable diagnostics, high-success treatments, and advanced surgical care to the community of Ambikapur.</p>
          </div>
          <div class="stats-badges d-flex flex-wrap gap-2">
            <span class="badge bg-light text-primary border px-3 py-2 rounded-pill"><i class="fas fa-award me-1"></i> CGHS Cashless</span>
            <span class="badge bg-light text-primary border px-3 py-2 rounded-pill"><i class="fas fa-check-circle me-1"></i> Ayushman Bharat</span>
            <span class="badge bg-light text-primary border px-3 py-2 rounded-pill"><i class="fas fa-shield-alt me-1"></i> ISO Accredited</span>
          </div>
        </div>
        
        <!-- Right Side: 2x2 Grid of Stat Cards -->
        <div class="col-lg-7">
          <div class="row g-4">
            <div class="col-sm-6">
              <div class="stat-card stat-surgeries">
                <div class="stat-icon-wrapper"><i class="fas fa-procedures"></i></div>
                <div class="stat-number" data-count="15000">0+</div>
                <div class="stat-label">Successful Surgeries</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="stat-card stat-dialysis">
                <div class="stat-icon-wrapper"><i class="fas fa-tint"></i></div>
                <div class="stat-number" data-count="50000">0+</div>
                <div class="stat-label">Dialysis Treatments</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="stat-card stat-babies">
                <div class="stat-icon-wrapper"><i class="fas fa-baby"></i></div>
                <div class="stat-number" data-count="1500">0+</div>
                <div class="stat-label">IVF Babies Born</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="stat-card stat-specialists">
                <div class="stat-icon-wrapper"><i class="fas fa-user-md"></i></div>
                <div class="stat-number" data-count="150">0+</div>
                <div class="stat-label">Medical Specialists</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SPECIALTIES / DEPARTMENTS SECTION -->
  <section id="departments" class="specialties-section">
    <div class="container">
      <div class="section-title">
        <span>Clinical Excellence</span>
        <h2>Interactive Specialties Hub</h2>
        <p>Explore our advanced departments, expert medical teams, and specialised clinical procedures at Sankalp Hospital.</p>
      </div>

      <div class="row g-4">
        <!-- Sidebar Navigation (12 cols on mobile, 4 cols on desktop) -->
        <div class="col-lg-4">
          <div class="specialty-sidebar-card">
            <h5 class="sidebar-title"><i class="fas fa-hand-holding-medical"></i> Select Department</h5>
            <div class="nav flex-column nav-pills specialty-nav-list" id="specialty-tabs" role="tablist" aria-orientation="vertical">
              <!-- Item 1: Ophthalmology -->
              <button class="nav-link active specialty-tab-btn" id="tab-ophthalmology" data-bs-toggle="pill" data-bs-target="#panel-ophthalmology" type="button" role="tab" aria-controls="panel-ophthalmology" aria-selected="true">
                <span class="btn-icon-title">
                  <i class="fas fa-eye"></i>
                  <span>Ophthalmology</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 2: Emergency & Trauma -->
              <button class="nav-link specialty-tab-btn" id="tab-emergency" data-bs-toggle="pill" data-bs-target="#panel-emergency" type="button" role="tab" aria-controls="panel-emergency" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-ambulance"></i>
                  <span>Emergency & Trauma</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 3: Obstetrics & Gynecology -->
              <button class="nav-link specialty-tab-btn" id="tab-gynecology" data-bs-toggle="pill" data-bs-target="#panel-gynecology" type="button" role="tab" aria-controls="panel-gynecology" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-female"></i>
                  <span>Obstetrics & Gynecology</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 4: Assisted Fertility (IVF) -->
              <button class="nav-link specialty-tab-btn" id="tab-ivf" data-bs-toggle="pill" data-bs-target="#panel-ivf" type="button" role="tab" aria-controls="panel-ivf" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-baby"></i>
                  <span>Assisted Fertility (IVF)</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 5: General & Laparoscopic Surgery -->
              <button class="nav-link specialty-tab-btn" id="tab-surgery" data-bs-toggle="pill" data-bs-target="#panel-surgery" type="button" role="tab" aria-controls="panel-surgery" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-procedures"></i>
                  <span>General & Laparoscopic</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 6: Pediatrics -->
              <button class="nav-link specialty-tab-btn" id="tab-pediatrics" data-bs-toggle="pill" data-bs-target="#panel-pediatrics" type="button" role="tab" aria-controls="panel-pediatrics" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-child"></i>
                  <span>Pediatrics</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 7: Orthopaedics Surgery -->
              <button class="nav-link specialty-tab-btn" id="tab-orthopedics" data-bs-toggle="pill" data-bs-target="#panel-orthopedics" type="button" role="tab" aria-controls="panel-orthopedics" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-bone"></i>
                  <span>Orthopaedics Surgery</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 8: Urology -->
              <button class="nav-link specialty-tab-btn" id="tab-urology" data-bs-toggle="pill" data-bs-target="#panel-urology" type="button" role="tab" aria-controls="panel-urology" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-user-md"></i>
                  <span>Urology</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 9: Psychiatry -->
              <button class="nav-link specialty-tab-btn" id="tab-psychiatry" data-bs-toggle="pill" data-bs-target="#panel-psychiatry" type="button" role="tab" aria-controls="panel-psychiatry" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-brain"></i>
                  <span>Psychiatry</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 10: ENT -->
              <button class="nav-link specialty-tab-btn" id="tab-ent" data-bs-toggle="pill" data-bs-target="#panel-ent" type="button" role="tab" aria-controls="panel-ent" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-head-side-cough"></i>
                  <span>ENT</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 11: Anesthesia -->
              <button class="nav-link specialty-tab-btn" id="tab-anesthesia" data-bs-toggle="pill" data-bs-target="#panel-anesthesia" type="button" role="tab" aria-controls="panel-anesthesia" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-syringe"></i>
                  <span>Anesthesia</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>

              <!-- Item 12: Onco Surgery -->
              <button class="nav-link specialty-tab-btn" id="tab-oncology" data-bs-toggle="pill" data-bs-target="#panel-oncology" type="button" role="tab" aria-controls="panel-oncology" aria-selected="false">
                <span class="btn-icon-title">
                  <i class="fas fa-hand-holding-medical"></i>
                  <span>Onco Surgery</span>
                </span>
                <i class="fas fa-chevron-right arrow-indicator"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Detail Display Card (12 cols on mobile, 8 cols on desktop) -->
        <div class="col-lg-8">
          <div class="tab-content specialty-details-container" id="specialty-panels">
            
            <!-- Panel 1: Ophthalmology -->
            <div class="tab-pane fade show active specialty-detail-panel" id="panel-ophthalmology" role="tabpanel" aria-labelledby="tab-ophthalmology">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-eye"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Specialized Consultation</span>
                  <h3 class="panel-title">Ophthalmology (Eye Care)</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Sankalp Hospital's Ophthalmology Department provides comprehensive diagnostic, surgical, and therapeutic eye care. Our advanced clinical wing handles vision impairments, cataract surgeries, and specialized ocular conditions with precision.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Phacoemulsification for Cataracts</li>
                      <li><i class="fas fa-check-circle"></i> Computerized Eye Testing</li>
                      <li><i class="fas fa-check-circle"></i> Glaucoma Detection & Therapy</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Pediatric Vision Screening</li>
                      <li><i class="fas fa-check-circle"></i> Dry Eye Diagnostic Clinics</li>
                      <li><i class="fas fa-check-circle"></i> Diabetic Retinopathy Management</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="ophthalmology"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 2: Emergency & Trauma -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-emergency" role="tabpanel" aria-labelledby="tab-emergency">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon bg-danger-subtle text-danger"><i class="fas fa-ambulance"></i></div>
                <div>
                  <span class="panel-tag text-uppercase text-danger">Surgical & Critical Care</span>
                  <h3 class="panel-title">24 Hours Emergency & Trauma</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Our emergency department is operational 24/7, providing immediate triage, life-saving resuscitation, and surgical interventions. Backed by dedicated trauma surgeons and advanced imaging, we handle acute medical crises round-the-clock.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Advanced Cardiac Life Support (ACLS)</li>
                      <li><i class="fas fa-check-circle"></i> Trauma & Accident Resuscitation</li>
                      <li><i class="fas fa-check-circle"></i> Acute Poisoning & Burn Care</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Ventilator & ICU Critical Stabilization</li>
                      <li><i class="fas fa-check-circle"></i> 24/7 Ambulance & Retrieval Services</li>
                      <li><i class="fas fa-check-circle"></i> Bedside Emergency Ultrasound</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-emergency btn-book-specialty" data-dept="emergency"><i class="fas fa-ambulance"></i> Contact Emergency</button>
              </div>
            </div>

            <!-- Panel 3: Obstetrics & Gynecology -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-gynecology" role="tabpanel" aria-labelledby="tab-gynecology">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-female"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Reproductive & Family Health</span>
                  <h3 class="panel-title">Obstetrics & Gynecology</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Dedicated to women's health through all stages of life. We provide comprehensive maternal care, high-risk pregnancy monitoring, painless labor suites, and advanced keyhole surgeries for gynecological disorders.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> High-Risk Pregnancy Management</li>
                      <li><i class="fas fa-check-circle"></i> Painless Delivery (Epidural Analgesia)</li>
                      <li><i class="fas fa-check-circle"></i> Laparoscopic Hysterectomy</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Ovarian Cyst & Fibroid Surgeries</li>
                      <li><i class="fas fa-check-circle"></i> Menopause Clinic & Hormonal Testing</li>
                      <li><i class="fas fa-check-circle"></i> Adolescent Gynecology Consultations</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="gynecology"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 4: Assisted Fertility (IVF) -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-ivf" role="tabpanel" aria-labelledby="tab-ivf">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-baby"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Reproductive & Family Health</span>
                  <h3 class="panel-title">Assisted Fertility (IVF/ICSI/IUI)</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Sankalp Assisted Fertility (IVF) Center is a premier center of reproductive medicine. With state-of-the-art embryology labs and advanced incubation systems, we support couples on their journey to parenthood with empathy and high success rates.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> In Vitro Fertilization (IVF)</li>
                      <li><i class="fas fa-check-circle"></i> Intracytoplasmic Sperm Injection (ICSI)</li>
                      <li><i class="fas fa-check-circle"></i> Intrauterine Insemination (IUI)</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Egg & Sperm Cryopreservation</li>
                      <li><i class="fas fa-check-circle"></i> Blastocyst Culture & Embryo Transfer</li>
                      <li><i class="fas fa-check-circle"></i> Male Infertility Diagnostics</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="gynecology"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 5: General & Laparoscopic Surgery -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-surgery" role="tabpanel" aria-labelledby="tab-surgery">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-procedures"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                  <h3 class="panel-title">General & Laparoscopic Surgery</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Our surgical unit specializes in minimally invasive laparoscopic procedures. By utilizing keyhole entries, patients benefit from smaller incisions, reduced post-operative pain, shorter hospital stays, and quicker recovery times.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Laparoscopic Gallbladder Removal</li>
                      <li><i class="fas fa-check-circle"></i> Hernia Repair (Inguinal/Umbilical)</li>
                      <li><i class="fas fa-check-circle"></i> Laparoscopic Appendectomy</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Diabetic Foot Wound Management</li>
                      <li><i class="fas fa-check-circle"></i> Laser Surgery for Piles & Fissures</li>
                      <li><i class="fas fa-check-circle"></i> Major & Minor Soft Tissue Excisions</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="surgery"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 6: Pediatrics -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-pediatrics" role="tabpanel" aria-labelledby="tab-pediatrics">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-child"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Reproductive & Family Health</span>
                  <h3 class="panel-title">Pediatrics & Neonatology</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Comprehensive healthcare for infants, toddlers, and adolescents. Our state-of-the-art Neonatal ICU (NICU) provides critical incubator care for premature babies, managed by expert pediatricians.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Level-III Neonatal ICU (NICU)</li>
                      <li><i class="fas fa-check-circle"></i> Pediatric Vaccination & Immunization</li>
                      <li><i class="fas fa-check-circle"></i> Growth & Development Assessment</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Pediatric Asthma & Allergy Care</li>
                      <li><i class="fas fa-check-circle"></i> Pediatric Emergency Stabilization</li>
                      <li><i class="fas fa-check-circle"></i> Childhood Nutrition & Diet Counseling</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="pediatrics"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 7: Orthopaedics Surgery -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-orthopedics" role="tabpanel" aria-labelledby="tab-orthopedics">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-bone"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                  <h3 class="panel-title">Orthopaedics & Joint Surgery</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Providing advanced orthopedic care for joint, bone, and muscular conditions. From complex joint replacements to sport trauma management and fracture healing, our surgeons employ the latest techniques.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Total Hip & Knee Joint Replacements</li>
                      <li><i class="fas fa-check-circle"></i> Arthroscopic Ligament Repairs (ACL/MCL)</li>
                      <li><i class="fas fa-check-circle"></i> Complex Fracture & Trauma Fixations</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Spine Decompression & Fusions</li>
                      <li><i class="fas fa-check-circle"></i> Osteoporosis & Arthritis Management</li>
                      <li><i class="fas fa-check-circle"></i> Specialized Post-Surgical Rehab</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="orthopedics"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 8: Urology -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-urology" role="tabpanel" aria-labelledby="tab-urology">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-user-md"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Specialized Consultation</span>
                  <h3 class="panel-title">Urology & Kidney Care</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Advanced kidney, bladder, and prostate care. The urology department offers minimally invasive keyhole laser options for kidney stones and comprehensive treatments for urogenital conditions.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Laser Kidney Stone Removal (PCNL/URSL)</li>
                      <li><i class="fas fa-check-circle"></i> Laser Surgery for Prostate (TURP)</li>
                      <li><i class="fas fa-check-circle"></i> Urinary Incontinence Treatments</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Pediatric Urology Conditions</li>
                      <li><i class="fas fa-check-circle"></i> Recurrent UTI Diagnostic Management</li>
                      <li><i class="fas fa-check-circle"></i> Urogenital Reconstruction Surgery</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="urology"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 9: Psychiatry -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-psychiatry" role="tabpanel" aria-labelledby="tab-psychiatry">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-brain"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Specialized Consultation</span>
                  <h3 class="panel-title">Psychiatry & Mental Health</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Compassionate mental wellness care designed to restore balance and emotional health. We provide clinical evaluations, cognitive therapies, and counseling for stress, anxiety, and neuro-behavioral disorders.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Cognitive Behavioral Therapy (CBT)</li>
                      <li><i class="fas fa-check-circle"></i> Anxiety & Depression Counseling</li>
                      <li><i class="fas fa-check-circle"></i> Clinical Mood Disorder Management</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Pediatric Behavior Evaluations</li>
                      <li><i class="fas fa-check-circle"></i> Sleep & Stress Management Plans</li>
                      <li><i class="fas fa-check-circle"></i> Family & Marriage Counseling Sessions</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="psychiatry"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 10: ENT -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-ent" role="tabpanel" aria-labelledby="tab-ent">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-head-side-cough"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Specialized Consultation</span>
                  <h3 class="panel-title">ENT (Ear, Nose, Throat)</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Comprehensive diagnostic and surgical solutions for ear, nose, throat, head, and neck conditions. Our specialists provide pediatric hearing screens, sinus treatments, and tonsillectomies using modern endoscopic equipment.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Endoscopic Sinus Surgery (FESS)</li>
                      <li><i class="fas fa-check-circle"></i> Tonsillectomy & Adenoidectomy</li>
                      <li><i class="fas fa-check-circle"></i> Tympanoplasty (Eardrum Repair)</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Hearing Impairment Diagnostics</li>
                      <li><i class="fas fa-check-circle"></i> Snoring & Sleep Apnea Care</li>
                      <li><i class="fas fa-check-circle"></i> Salivary Gland & Thyroid Consults</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="ent"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 11: Department of Anesthesia -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-anesthesia" role="tabpanel" aria-labelledby="tab-anesthesia">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-syringe"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                  <h3 class="panel-title">Department of Anesthesia</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Playing a critical role in patient safety during surgeries. Our anesthesiologists deliver customized general, regional, and local anesthesia, along with comprehensive post-operative pain relief protocols.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> General & Regional Anesthesia</li>
                      <li><i class="fas fa-check-circle"></i> Epidural & Painless Labor Support</li>
                      <li><i class="fas fa-check-circle"></i> Pre-Anesthetic Health Profiling</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Chronic & Acute Pain Relief Plans</li>
                      <li><i class="fas fa-check-circle"></i> ICU Life Support Management</li>
                      <li><i class="fas fa-check-circle"></i> Post-Surgical Sedation Protocols</li>
                    </ul>
                  </div>
                </div>


              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="anesthesia"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

            <!-- Panel 12: Onco Surgery -->
            <div class="tab-pane fade specialty-detail-panel" id="panel-oncology" role="tabpanel" aria-labelledby="tab-oncology">
              <div class="panel-header d-flex align-items-center gap-3">
                <div class="panel-icon"><i class="fas fa-hand-holding-medical"></i></div>
                <div>
                  <span class="panel-tag text-uppercase">Surgical & Critical Care</span>
                  <h3 class="panel-title">Onco Surgery (Cancer Care)</h3>
                </div>
              </div>
              <div class="panel-body mt-4">
                <p class="panel-desc">Providing high-precision surgical treatment for cancer. Our oncological surgeons specialize in tumor resections, biopsies, and organ-preserving surgeries, working closely with medical oncology for comprehensive cancer therapies.</p>
                
                <h5 class="procedures-title"><i class="fas fa-stethoscope"></i> Key Clinical Procedures</h5>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Solid Tumor Resection & Biopsy</li>
                      <li><i class="fas fa-check-circle"></i> Breast Cancer Sparing Surgeries</li>
                      <li><i class="fas fa-check-circle"></i> Gastrointestinal Oncology Surgeries</li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="procedure-list">
                      <li><i class="fas fa-check-circle"></i> Sentinel Lymph Node Evaluation</li>
                      <li><i class="fas fa-check-circle"></i> Cancer Screening & Diagnostics</li>
                      <li><i class="fas fa-check-circle"></i> Chemotherapy Port Placements</li>
                    </ul>
                  </div>
                </div>

              </div>
              <div class="panel-footer mt-4 pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-book-specialty" data-dept="oncology"><i class="far fa-calendar-check"></i> Book Consultation</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MEET OUR EXPERTS SECTION -->
  <section id="doctors" class="doctors-section">
    <div class="container">
      <div class="section-title">
        <span>Our Specialists</span>
        <h2>Meet Our Medical Experts</h2>
        <p>Decades of collective experience, academic credentials, and dedication to patients' well-being.</p>
      </div>

      <!-- Custom Doctors Slider -->
      <div class="doctors-slider-container position-relative">
        <div class="doctors-track">
          
          <!-- Dr. Lata Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-lata-goyal"><img src="images/lata-goyal.jpg" alt="Dr. Lata Goyal"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Gynecology & IVF</span>
                <h4><a href="doctors/dr-lata-goyal" class="text-decoration-none text-dark">Dr. Lata Goyal</a></h4>
                <p class="doc-degrees">MBBS, MS - Obs & Gynaecology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>
          
          <!-- Dr. Ankita Bansal Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-ankita-bansal-goyal"><img src="images/ankita-goyal.jpg" alt="Dr. Ankita Bansal Goyal"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Gynaecology & Surgery</span>
                <h4><a href="doctors/dr-ankita-bansal-goyal" class="text-decoration-none text-dark">Dr. Ankita Bansal Goyal</a></h4>
                <p class="doc-degrees">MD (Obs & Gynae) - FMAS</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Sukirti Chauhan -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-sukirti-chauhan"><img src="images/sukirti-chauhan.jpg" alt="Dr. Sukirti Chauhan"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Gynecology</span>
                <h4><a href="doctors/dr-sukirti-chauhan" class="text-decoration-none text-dark">Dr. Sukirti Chauhan</a></h4>
                <p class="doc-degrees">MBBS, MS - Obs & Gynaecology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>



          <!-- Dr. Tanay Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-tanay-goyal"><img src="images/tanay-goyal.jpg" alt="Dr. Tanay Goyal"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Orthopaedics & Trauma</span>
                <h4><a href="doctors/dr-tanay-goyal" class="text-decoration-none text-dark">Dr. Tanay Goyal</a></h4>
                <p class="doc-degrees">MBBS, MS - Orthopaedics</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Sanjay Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-sanjay-goyal"><img src="images/sanjay-goyal.jpg" alt="Dr. Sanjay Goyal"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Ophthalmology · Founder</span>
                <h4><a href="doctors/dr-sanjay-goyal" class="text-decoration-none text-dark">Dr. Sanjay Goyal</a></h4>
                <p class="doc-degrees">MBBS, MS - Ophthalmology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Akshaya Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-akshaya-goyal"><img src="images/akshaya-goyal.jpg" alt="Dr. Akshaya Goyal"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Ophthalmology</span>
                <h4><a href="doctors/dr-akshaya-goyal" class="text-decoration-none text-dark">Dr. Akshaya Goyal</a></h4>
                <p class="doc-degrees">MBBS, MS - Ophthalmology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Ankit Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-ankit-gupta"><img src="images/ankit-gupta.jpg" alt="Dr. Ankit Gupta"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Pediatrics</span>
                <h4><a href="doctors/dr-ankit-gupta" class="text-decoration-none text-dark">Dr. Ankit Gupta</a></h4>
                <p class="doc-degrees">MBBS, DCH - Pediatrician</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Megha Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-megha-goyal"><img src="images/megha-goyal.jpg" alt="Dr. Megha Goyal"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Neonatology & Pediatrics</span>
                <h4><a href="doctors/dr-megha-goyal" class="text-decoration-none text-dark">Dr. Megha Goyal</a></h4>
                <p class="doc-degrees">MBBS, MD - Pediatrics</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>



          <!-- Dr. Nilesh Goyal -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-nilesh-goyal"><img src="images/nilesh-goyal.jpg" alt="Dr. Nilesh Goyal"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">General Surgery</span>
                <h4><a href="doctors/dr-nilesh-goyal" class="text-decoration-none text-dark">Dr. Nilesh Goyal</a></h4>
                <p class="doc-degrees">MBBS, MS - General Surgery</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Chandra Mukesh Dhawde -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-chandra-mukesh-dhawde"><img src="images/chandra-dhawde.jpg" alt="Dr. Chandra Mukesh Dhawde"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Laparoscopic Surgery</span>
                <h4><a href="doctors/dr-chandra-mukesh-dhawde" class="text-decoration-none text-dark">Dr. Chandra Mukesh Dhawde</a></h4>
                <p class="doc-degrees">MBBS, MS - Laparoscopic Surgeon</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Suneedh Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-suneedh-gupta"><img src="images/suneedh-gupta.jpg" alt="Dr. Suneedh Gupta"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Dentistry & Maxillofacial</span>
                <h4><a href="doctors/dr-suneedh-gupta" class="text-decoration-none text-dark">Dr. Suneedh Gupta</a></h4>
                <p class="doc-degrees">BDS, MDS - Oral & Maxillofacial Surgery</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Himanshu Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-himanshu-gupta"><img src="images/himanshu-gupta.jpg" alt="Dr. Himanshu Gupta"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Oncology</span>
                <h4><a href="doctors/dr-himanshu-gupta" class="text-decoration-none text-dark">Dr. Himanshu Gupta</a></h4>
                <p class="doc-degrees">MBBS, MD / DNB - Medical Oncology</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Shailesh Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-shailesh-gupta"><img src="images/shailesh-gupta.jpg" alt="Dr. Shailesh Gupta"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Internal Medicine & Cardiology</span>
                <h4><a href="doctors/dr-shailesh-gupta" class="text-decoration-none text-dark">Dr. Shailesh Gupta</a></h4>
                <p class="doc-degrees">MBBS, MD - Medicine</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Akshay Gupta -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-akshay-gupta"><img src="images/akshay-gupta.jpg" alt="Dr. Akshay Gupta"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Rheumatology & Medicine</span>
                <h4><a href="doctors/dr-akshay-gupta" class="text-decoration-none text-dark">Dr. Akshay Gupta</a></h4>
                <p class="doc-degrees">MD - Medicine</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Usha Armo -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-usha-armo"><img src="images/usha-armo.jpg" alt="Dr. Usha Armo"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">ENT (Otolaryngology)</span>
                <h4><a href="doctors/dr-usha-armo" class="text-decoration-none text-dark">Dr. Usha Armo</a></h4>
                <p class="doc-degrees">MBBS, MS - ENT</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

          <!-- Dr. Ankit Sharma -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-ankit-sharma"><img src="images/ankit-sharma.jpg" alt="Dr. Ankit Sharma"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Psychiatry</span>
                <h4><a href="doctors/dr-ankit-sharma" class="text-decoration-none text-dark">Dr. Ankit Sharma</a></h4>
                <p class="doc-degrees">MBBS, MD - Psychiatry</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>


          <!-- Dr. Manoj Bharti -->
          <div class="doctor-card-wrapper">
            <div class="doctor-card">
              <div class="doctor-img-container">
                <a href="doctors/dr-manoj-bharti"><img src="images/manoj-bharti.jpg" alt="Dr. Manoj Bharti"></a>
                <span class="doc-badge-status"><i class="fas fa-check-circle text-success me-1"></i> Available Today</span>
                <div class="doctor-glass-socials">
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
                </div>
              </div>
              <div class="doctor-info">
                <span class="doc-dept-badge">Dentistry & Oral Surgery</span>
                <h4><a href="doctors/dr-manoj-bharti" class="text-decoration-none text-dark">Dr. Manoj Bharti</a></h4>
                <p class="doc-degrees">BDS - Consultant Dentist</p>
                <a href="#appointment" class="doc-btn">Book Appointment</a>
              </div>
            </div>
          </div>

        </div>

        <!-- Slider Controls -->
        <button class="doc-control-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
        <button class="doc-control-next" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <!-- CLINICAL GALLERY SECTION (Facility Carousel Slider) -->
  <section id="gallery" class="py-5 bg-white border-top">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Left Side: Heading & Features -->
        <div class="col-lg-4">
          <div class="section-title text-start mb-4">
            <span>Our Facility</span>
            <h2 class="mb-3">World-Class Infrastructure</h2>
            <p>Sankalp Hospital is equipped with state-of-the-art medical technology, clean-air systems, and patient comfort designs.</p>
          </div>
          
          <div class="facility-features mb-4">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="facility-feat-icon"><i class="fas fa-wind"></i></div>
              <div>
                <h6 class="mb-0 fw-bold">Laminar Air Flow</h6>
                <small class="text-muted">Zero bacteria OT environments</small>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="facility-feat-icon"><i class="fas fa-bed"></i></div>
              <div>
                <h6 class="mb-0 fw-bold">Deluxe Private Wards</h6>
                <small class="text-muted">Designed for fast healing and privacy</small>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="facility-feat-icon"><i class="fas fa-shield-virus"></i></div>
              <div>
                <h6 class="mb-0 fw-bold">Strict Sterile Protocols</h6>
                <small class="text-muted">24/7 disinfection schedule</small>
              </div>
            </div>
          </div>

          <!-- Custom Slider Controls -->
          <div class="carousel-custom-controls d-flex gap-2">
            <button class="btn btn-slider-control" type="button" data-bs-target="#facilityCarousel" data-bs-slide="prev" aria-label="Previous">
              <i class="fas fa-arrow-left"></i>
            </button>
            <button class="btn btn-slider-control" type="button" data-bs-target="#facilityCarousel" data-bs-slide="next" aria-label="Next">
              <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>

        <!-- Right Side: The Slider -->
        <div class="col-lg-8">
          <div class="facility-slider-frame">
            <!-- Carousel Slider -->
            <div id="facilityCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel" data-bs-interval="4000">
              <!-- Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#facilityCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
              </div>

              <!-- Inner Slides -->
              <div class="carousel-inner rounded-4 overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                  <img src="images/hero1.png" class="d-block w-100 facility-img" alt="Hospital Reception Lobby">
                  <div class="carousel-caption">
                    <h5>Hospital Reception & Waiting Lobby</h5>
                    <p>A spacious, fully-airconditioned, and sanitized lobby designed for patient comfort.</p>
                  </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                  <img src="images/hero2.png" class="d-block w-100 facility-img" alt="Advanced Operation Theatre">
                  <div class="carousel-caption">
                    <h5>Modular Operation Theatre</h5>
                    <p>Equipped with modern anesthesia and clean air-laminar flows.</p>
                  </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                  <img src="images/hero4.png" class="d-block w-100 facility-img" alt="Specialist Consultation Room">
                  <div class="carousel-caption">
                    <h5>Consultation Suites</h5>
                    <p>Private counseling chambers for in-depth clinical discussions.</p>
                  </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                  <img src="images/pediatric.png" class="d-block w-100 facility-img" alt="Pediatric Ward">
                  <div class="carousel-caption">
                    <h5>Pediatric Care Ward</h5>
                    <p>Child-friendly clinical ward settings designed to ensure pediatric patients feel safe.</p>
                  </div>
                </div>
                <!-- Slide 5 -->
                <div class="carousel-item">
                  <img src="images/hero5.png" class="d-block w-100 facility-img" alt="Pathology Lab">
                  <div class="carousel-caption">
                    <h5>High-Tech Pathology Laboratory</h5>
                    <p>Fully automated analyzer machines for delivering rapid, precise diagnostic test results.</p>
                  </div>
                </div>
                <!-- Slide 6 -->
                <div class="carousel-item">
                  <img src="images/ultrasound.png" class="d-block w-100 facility-img" alt="Diagnostic Ultrasound Room">
                  <div class="carousel-caption">
                    <h5>Advanced Ultrasound Diagnostic Room</h5>
                    <p>Armed with advanced ultrasound imaging machines for pregnancy scans.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- APPOINTMENT SECTION -->
  <section id="appointment" class="booking-section">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 booking-text">
          <h2>Schedule Your Consult Online</h2>
          <p>Book your outpatient consultations with our top medical experts. Fill out the details, and our front office will call you to secure a convenient timing.</p>
          
          <div class="features-list">
            <div class="feat-row">
              <div class="feat-row-icon"><i class="fas fa-clock"></i></div>
              <div>
                <h4>Saves Waiting Time</h4>
                <p>Get a priority consultation slot and minimize hospital lobby waiting.</p>
              </div>
            </div>
            <div class="feat-row">
              <div class="feat-row-icon"><i class="fas fa-shield-virus"></i></div>
              <div>
                <h4>Safe & Maintained Environment</h4>
                <p>Clinics are thoroughly sanitized under strict safety protocols.</p>
              </div>
            </div>
            <div class="feat-row">
              <div class="feat-row-icon"><i class="fas fa-phone-volume"></i></div>
              <div>
                <h4>24/7 Telephone Confirmation</h4>
                <p>Speak to our staff immediately if any schedule adjustments occur.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="booking-card-wrapper">
            <h3>Consultation Request</h3>
            <form id="detailed-booking-form" class="appointment-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="book-name">Patient Name</label>
                  <input type="text" id="book-name" placeholder="Full Name" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="book-phone">Contact Number</label>
                  <input type="tel" id="book-phone" placeholder="Mobile Number" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="book-dept">Select Specialty</label>
                  <select id="book-dept" required>
                    <option value="">Select Specialty</option>
                    <option value="ophthalmology">Ophthalmology</option>
                    <option value="emergency">24 Hours Emergency & Trauma</option>
                    <option value="gynecology">Obstetrics & Gynecology</option>
                    <option value="gynecology">Assisted Fertility (IVF/ICSI/IUI)</option>
                    <option value="surgery">General & Laparoscopic Surgery</option>
                    <option value="pediatrics">Pediatrics</option>
                    <option value="orthopedics">Orthopaedics Surgery</option>
                    <option value="urology">Urology</option>
                    <option value="psychiatry">Psychiatry</option>
                    <option value="ent">ENT</option>
                    <option value="anesthesia">Department of Anesthesia</option>
                    <option value="oncology">Onco Surgery</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="book-doc">Consulting Doctor</label>
                  <select id="book-doc" disabled required>
                    <option value="">Select Specialist</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="book-date">Preferred Appointment Date</label>
                <input type="date" id="book-date" required>
              </div>
              <div class="form-group">
                <label for="book-msg">Brief Health Concerns (Optional)</label>
                <textarea id="book-msg" placeholder="Any details or symptoms you would like to mention..."></textarea>
              </div>
              <button type="submit" class="btn-book-submit"><i class="fas fa-check-circle"></i> REQUEST Slot NOW</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INSURANCE & TPAs (EMPANELMENTS) -->
  <section class="empanelments-section">
    <div class="container-fluid px-0">
      <h5 class="text-center text-uppercase text-muted fs-6 tracking-wide mb-4">Our Empanelments & Cashless Partners</h5>
      <div class="empanelments-slider">
        <div class="empanelments-track">
          <!-- First Set -->
          <div class="empanelment-logo"><i class="fas fa-heartbeat"></i> Ayushman Bharat (PMJAY)</div>
          <div class="empanelment-logo"><i class="fas fa-hand-holding-medical"></i> Dr. Khubchand Baghel Yojana</div>
          <div class="empanelment-logo"><i class="fas fa-award"></i> CG State Govt Employees</div>
          <div class="empanelment-logo"><i class="fas fa-check-circle"></i> CGHS Cashless</div>
          <div class="empanelment-logo"><i class="fas fa-hospital"></i> ESIC Panel</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Star Health Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-medkit"></i> HDFC ERGO Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-first-aid"></i> ICICI Lombard</div>
          <div class="empanelment-logo"><i class="fas fa-heart"></i> Bajaj Allianz</div>
          <div class="empanelment-logo"><i class="fas fa-plus-square"></i> SBI General</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Niva Bupa Health</div>
          <div class="empanelment-logo"><i class="fas fa-heartbeat"></i> Care Health Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-award"></i> Aditya Birla Health</div>
          <div class="empanelment-logo"><i class="fas fa-medkit"></i> Medi Assist TPA</div>
          <div class="empanelment-logo"><i class="fas fa-first-aid"></i> Paramount TPA</div>
          <div class="empanelment-logo"><i class="fas fa-plus-square"></i> Vidal Health TPA</div>
          <div class="empanelment-logo"><i class="fas fa-heart"></i> Family Health Plan TPA</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Raksha TPA</div>
          
          <!-- Second Set (Duplicate for Infinite Loop) -->
          <div class="empanelment-logo"><i class="fas fa-heartbeat"></i> Ayushman Bharat (PMJAY)</div>
          <div class="empanelment-logo"><i class="fas fa-hand-holding-medical"></i> Dr. Khubchand Baghel Yojana</div>
          <div class="empanelment-logo"><i class="fas fa-award"></i> CG State Govt Employees</div>
          <div class="empanelment-logo"><i class="fas fa-check-circle"></i> CGHS Cashless</div>
          <div class="empanelment-logo"><i class="fas fa-hospital"></i> ESIC Panel</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Star Health Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-medkit"></i> HDFC ERGO Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-first-aid"></i> ICICI Lombard</div>
          <div class="empanelment-logo"><i class="fas fa-heart"></i> Bajaj Allianz</div>
          <div class="empanelment-logo"><i class="fas fa-plus-square"></i> SBI General</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Niva Bupa Health</div>
          <div class="empanelment-logo"><i class="fas fa-heartbeat"></i> Care Health Insurance</div>
          <div class="empanelment-logo"><i class="fas fa-award"></i> Aditya Birla Health</div>
          <div class="empanelment-logo"><i class="fas fa-medkit"></i> Medi Assist TPA</div>
          <div class="empanelment-logo"><i class="fas fa-first-aid"></i> Paramount TPA</div>
          <div class="empanelment-logo"><i class="fas fa-plus-square"></i> Vidal Health TPA</div>
          <div class="empanelment-logo"><i class="fas fa-heart"></i> Family Health Plan TPA</div>
          <div class="empanelment-logo"><i class="fas fa-shield-alt"></i> Raksha TPA</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQS & MAP SECTION -->
  <section id="faq" class="faq-section">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6">
          <div class="section-title text-start mb-4">
            <span>Support & FAQs</span>
            <h2>Common Questions</h2>
          </div>
          <div class="accordion faq-accordion" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                  What are the visiting hours for inpatients?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  To ensure our patients recover peacefully, visiting hours are from 4:00 PM to 6:00 PM daily. Only one visitor with an attendant pass is permitted at a time.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                  Does the hospital offer cashless treatment options?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. Sankalp Hospital provides cashless hospitalisation services for Ayushman Bharat cardholders, CGHS, ESIC, and all major corporate insurance TPAs. Please connect with our TPA desk at reception during admission.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                  How do I get emergency trauma care?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our emergency and trauma unit is fully staffed and operational 24/7. In case of emergency, immediately contact our helpline at <strong>+91 7774 223344</strong> or arrive directly at our trauma unit near the District Hospital.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" id="contact">
          <div class="map-card">
            <!-- Google Map Embed - Centered on Sankalp Hospital, Ambikapur in Satellite View -->
            <iframe class="map-iframe" src="https://maps.google.com/maps?q=Sankalp+Hospital+Ambikapur&amp;t=k&amp;z=18&amp;output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="map-info">
              <h4>Sankalp Hospital Contact Info</h4>
              <p><i class="fas fa-map-marked-alt text-primary"></i> <span>Near District Hospital, Manipur, Ambikapur, Chhattisgarh - 497001</span></p>
              <p><i class="fas fa-phone-alt text-primary"></i> <span>Reception/OPD: +91 9584 889068</span></p>
              <p><i class="fas fa-ambulance text-danger"></i> <span>Emergency Support: +91 7774 223344</span></p>
              <p><i class="fas fa-envelope text-primary"></i> <span>info.sankalpslms@gmail.com</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
include __DIR__ . '/includes/footer.php';
?>
