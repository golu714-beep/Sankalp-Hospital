<?php
$pageTitle = "Our Medical Experts | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Meet our team of highly qualified medical experts at Sankalp Hospital in Ambikapur, specializing in IVF, Orthopaedics, Pediatrics, Gynecology, Urology, Surgery, and more.";

require_once __DIR__ . '/doctors/_registry.php';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<style>
/* ==========================================================================
   DOCTORS DIRECTORY — PREMIUM STYLING
   ========================================================================== */

/* Search Bar Wrapper */
.search-bar-wrapper {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  margin-bottom: 25px;
}

.search-bar-wrapper .form-control {
  border-radius: 50px;
  padding: 15px 25px 15px 55px;
  border: 1px solid var(--border-color);
  background: rgba(255, 255, 255, 0.85);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  font-size: 0.95rem;
  color: var(--text-dark);
  box-shadow: 0 8px 30px rgba(15, 92, 173, 0.03);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  width: 100%;
}

.search-bar-wrapper .form-control:focus {
  border-color: var(--primary);
  box-shadow: 0 15px 35px rgba(15, 92, 173, 0.08);
  background: #ffffff;
  outline: none;
}

.search-bar-wrapper .search-icon {
  position: absolute;
  left: 22px;
  color: var(--primary);
  font-size: 1.15rem;
  pointer-events: none;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
}

.search-bar-wrapper .search-clear-btn {
  position: absolute;
  right: 20px;
  color: var(--text-muted);
  cursor: pointer;
  font-size: 1rem;
  transition: var(--transition);
  display: flex;
  align-items: center;
  justify-content: center;
  width: 26px;
  height: 26px;
  border-radius: 50%;
  background: transparent;
  border: none;
}

.search-bar-wrapper .search-clear-btn:hover {
  color: var(--emergency);
  background-color: var(--emergency-light);
}

/* Card Improvements for Directory */
.doctor-directory-grid .doctor-card {
  box-shadow: 0 10px 30px rgba(15, 92, 173, 0.02) !important;
  border: 1px solid var(--border-color) !important;
  background: var(--white) !important;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
}

.doctor-directory-grid .doctor-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
  transform: scaleX(0);
  transform-origin: left;
  transition: var(--transition);
}

.doctor-directory-grid .doctor-card:hover {
  transform: translateY(-8px) !important;
  box-shadow: 0 25px 50px -12px rgba(15, 92, 173, 0.12) !important;
  border-color: rgba(15, 92, 173, 0.1) !important;
}

.doctor-directory-grid .doctor-card:hover::after {
  transform: scaleX(1);
}

.doctor-directory-grid .doctor-info {
  display: flex;
  flex-direction: column;
  height: 100%;
  padding: 25px 20px !important;
  text-align: center;
  align-items: center;
}

.doctor-directory-grid .doc-dept-badge {
  align-self: center !important;
  text-align: center;
}

.doctor-directory-grid .doctor-info h4 {
  text-align: center;
  width: 100%;
}

.doctor-directory-grid .doc-degrees {
  font-size: 0.82rem !important;
  font-weight: 600;
  color: var(--primary-dark);
  margin-bottom: 12px !important;
}

.doctor-directory-grid .doc-bio {
  font-size: 0.85rem;
  line-height: 1.6;
  color: var(--text-muted);
  margin-bottom: 20px;
  flex-grow: 1;
}

/* No results state styling */
.search-no-results {
  text-align: center;
  padding: 80px 20px;
  background: var(--white);
  border-radius: 20px;
  border: 1px solid var(--border-color);
  box-shadow: var(--shadow-sm);
  margin-top: 20px;
}

.search-no-results i {
  font-size: 3.5rem;
  color: var(--text-muted);
  margin-bottom: 20px;
}

.search-no-results h3 {
  font-size: 1.5rem;
  font-weight: 800;
  color: var(--text-dark);
  margin-bottom: 8px;
}

.search-no-results p {
  color: var(--text-muted);
  font-size: 0.95rem;
  max-width: 450px;
  margin: 0 auto;
}
</style>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <!-- Background Visual -->
  <div class="subpage-hero-bg">
    <img src="images/hero3.png" alt="Sankalp Specialists and Staff">
  </div>
  <div class="subpage-hero-overlay"></div>

  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-user-md me-1"></i> Medical Specialists</span>
        <h1 class="text-white display-4 fw-bold">Our Medical Specialists</h1>
        <p class="lead text-white-50 mb-0">Decades of collective clinical experience, advanced academic credentials, and dedication to patients' well-being in Ambikapur.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- DOCTOR GRID SECTION WITH FILTERING -->
<section class="py-5 bg-light">
  <div class="container">
    
    <!-- Real-time Search Box -->
    <div class="row justify-content-center mb-4">
      <div class="col-lg-6 col-md-8">
        <div class="search-bar-wrapper">
          <span class="search-icon"><i class="fas fa-search"></i></span>
          <input type="text" id="doctor-search" class="form-control" placeholder="Search by name, specialty, or credentials..." autocomplete="off">
          <button class="search-clear-btn" id="search-clear" style="display: none;" aria-label="Clear Search"><i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
    
    <!-- Filter Tabs -->
    <div class="filter-tabs-container">
      <button class="filter-tab-btn active" data-filter="all">All Experts</button>
      <button class="filter-tab-btn" data-filter="gynecology">Gynecology & IVF</button>
      <button class="filter-tab-btn" data-filter="orthopedics">Orthopaedics</button>
      <button class="filter-tab-btn" data-filter="ophthalmology">Ophthalmology</button>
      <button class="filter-tab-btn" data-filter="pediatrics">Pediatrics & Neonatology</button>
      <button class="filter-tab-btn" data-filter="surgery">Surgery</button>
      <button class="filter-tab-btn" data-filter="ent">ENT</button>
      <button class="filter-tab-btn" data-filter="dentistry">Dentistry</button>
      <button class="filter-tab-btn" data-filter="medicine">Medicine & Cardiology</button>
      <button class="filter-tab-btn" data-filter="oncology">Oncology</button>
      <button class="filter-tab-btn" data-filter="psychiatry">Psychiatry</button>
      <button class="filter-tab-btn" data-filter="anesthesia">Anesthesia</button>
      <button class="filter-tab-btn" data-filter="nutrition">Nutrition & Dietetics</button>
    </div>

    <!-- Doctor Directory Grid -->
    <div class="row g-4 doctor-directory-grid">
      
      <?php foreach ($doctorRegistry as $slug => $doc
      ): 
        // Build the filter class string, e.g. "filter-gynecology filter-surgery"
        $filterClasses = '';
        if (isset($doc['filters']) && is_array($doc['filters'])) {
            foreach ($doc['filters'] as $filter) {
                $filterClasses .= ' filter-' . htmlspecialchars($filter);
            }
        }
        
        // Build direct booking link department parameter
        $bookingDept = 'all';
        if (isset($doc['filters']) && count($doc['filters']) > 0) {
            $bookingDept = htmlspecialchars($doc['filters'][0]);
        }
      ?>
      <div class="col-xl-3 col-lg-4 col-sm-6 doctor-item<?php echo $filterClasses; ?>">
        <div class="doctor-card">
          <div class="doctor-img-container">
            <a href="doctors/<?php echo htmlspecialchars($slug); ?>">
              <img src="images/<?php echo htmlspecialchars($doc['img']); ?>" alt="<?php echo htmlspecialchars($doc['name']); ?>" onerror="this.src='images/doc1.png'">
            </a>
            <span class="doc-badge-status"><i class="fas fa-award text-success me-1"></i> <?php echo htmlspecialchars($doc['experience']); ?> Exp</span>
            <div class="doctor-glass-socials">
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              <a href="mailto:info.sankalpslms@gmail.com" aria-label="Mail"><i class="fas fa-envelope"></i></a>
            </div>
          </div>
          <div class="doctor-info">
            <span class="doc-dept-badge"><?php echo htmlspecialchars($doc['specialty']); ?></span>
            <h4><a href="doctors/<?php echo htmlspecialchars($slug); ?>" class="text-decoration-none text-dark"><?php echo htmlspecialchars($doc['name']); ?></a></h4>
            <p class="doc-degrees"><?php echo htmlspecialchars($doc['degrees']); ?></p>
            <a href="index.php?dept=<?php echo $bookingDept; ?>#appointment" class="doc-cta-btn">Book Appointment</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
