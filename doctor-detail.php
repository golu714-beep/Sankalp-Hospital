<?php
if (!isset($doctorSlug)) {
    $doctorSlug = $_GET['doctor'] ?? 'dr-lata-goyal';
}

require_once __DIR__ . '/includes/doctors-data.php';
require_once __DIR__ . '/includes/departments-data.php';

if (!isset($doctors[$doctorSlug])) {
    header('Location: /doctors.php');
    exit;
}

$doc = $doctors[$doctorSlug];

// Determine the primary department/filter to fetch theme color
$primaryFilter = 'clinical';
if (isset($doc['filters']) && is_array($doc['filters']) && count($doc['filters']) > 0) {
    $primaryFilter = $doc['filters'][0];
}

$customCatMap = array_merge($catMap, [
    'dentistry' => 'clinical',
    'medicine' => 'clinical',
    'nutrition' => 'clinical'
]);

$cat = $customCatMap[$primaryFilter] ?? 'clinical';
$a = $catColors[$cat] ?? $catColors['clinical'];
$ac = $a['color'];
$rgb = $a['rgb'];
$grad = $a['grad'];
$light = $a['light'];
$border = $a['border'];

$pageTitle = "{$doc['name']} | Best {$doc['specialty']} Specialist in Ambikapur | Sankalp Hospital";
$pageDesc = "Consult {$doc['name']}, {$doc['degrees']} at Sankalp Hospital in Ambikapur. {$doc['bio']}";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<style>
/* ============================================
   DOCTOR PROFILE PAGE — PREMIUM REDESIGN
   ============================================ */

/* --- HERO BANNER --- */
.dp-hero {
  position: relative;
  min-height: 520px;
  overflow: hidden;
  display: flex;
  align-items: center;
  padding-top: 140px;
  padding-bottom: 60px;
  background: #0b1a30; /* Fallback brand dark */
}

/* Background Image & Overlay matching subpage theme */
.dp-hero-bg {
  position: absolute;
  inset: 0;
  z-index: 1;
}
.dp-hero-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.35) contrast(1.1) saturate(0.85);
}
.dp-hero-overlay {
  position: absolute;
  inset: 0;
  z-index: 2;
  background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 92, 173, 0.7) 50%, rgba(<?php echo $rgb; ?>, 0.35) 100%);
}

/* Animated decorative background rings */
.dp-hero-ring {
  position: absolute;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.04);
  top: 50%;
  right: -10%;
  transform: translate(50%, -50%);
  animation: dpRing 12s linear infinite;
  z-index: 3;
  pointer-events: none;
}
.dp-hero-ring:nth-child(1) { width: 400px; height: 400px; animation-delay: 0s; }
.dp-hero-ring:nth-child(2) { width: 650px; height: 650px; animation-delay: -4s; }
.dp-hero-ring:nth-child(3) { width: 900px; height: 900px; animation-delay: -8s; }

@keyframes dpRing {
  0%, 100% { transform: translate(50%, -50%) scale(0.96); opacity: 0.3; }
  50% { transform: translate(50%, -50%) scale(1.04); opacity: 0.1; }
}

/* Subtle grid pattern overlay */
.dp-hero-pattern {
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.015) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.015) 1px, transparent 1px);
  background-size: 40px 40px;
  z-index: 4;
  pointer-events: none;
}

.dp-hero .container {
  position: relative;
  z-index: 10;
}

/* --- PHOTO CARD --- */
.dp-photo-wrapper {
  position: relative;
  margin-bottom: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
}

.dp-photo-card {
  width: 100%;
  max-width: 320px;
  border-radius: 28px;
  overflow: hidden;
  border: 5px solid rgba(255,255,255,0.15);
  box-shadow:
    0 30px 60px -15px rgba(0, 0, 0, 0.5),
    0 0 0 1px rgba(255,255,255,0.05);
  background: <?php echo $grad; ?>;
  transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease, border-color 0.3s ease;
  position: relative;
}

.dp-photo-card:hover {
  transform: translateY(-6px);
  box-shadow:
    0 40px 80px -15px rgba(0, 0, 0, 0.55),
    0 0 30px rgba(<?php echo $rgb; ?>, 0.35);
  border-color: rgba(255, 255, 255, 0.25);
}

.dp-photo-card img {
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 3/4;
  object-fit: cover;
  object-position: top;
}

/* Status Badge directly overlaying the Photo Card */
.dp-photo-badge {
  position: absolute;
  bottom: 18px;
  left: 18px;
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.4);
  color: var(--text-dark, #0f172a);
  font-weight: 750;
  font-size: 0.72rem;
  padding: 6px 14px;
  border-radius: 50px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  display: flex;
  align-items: center;
  gap: 6px;
  z-index: 10;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.dp-photo-badge i {
  color: <?php echo $ac; ?>;
}

/* --- HERO TEXT --- */
.dp-hero-content {
  color: #fff;
  padding-bottom: 60px;
}

.dp-specialty-tag {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(<?php echo $rgb; ?>, 0.22);
  border: 1px solid rgba(<?php echo $rgb; ?>, 0.4);
  color: #fff;
  font-weight: 700;
  font-size: 0.78rem;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  padding: 8px 20px;
  border-radius: 50px;
  margin-bottom: 20px;
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
.dp-specialty-tag i {
  color: #fff;
}

.dp-hero-name {
  font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
  font-size: clamp(2rem, 5vw, 3.2rem);
  font-weight: 850;
  color: #fff;
  letter-spacing: -0.03em;
  line-height: 1.15;
  margin-bottom: 12px;
}

.dp-hero-degrees {
  font-size: 1.05rem;
  font-weight: 500;
  color: rgba(255,255,255,0.75);
  margin-bottom: 20px;
  line-height: 1.5;
}

.dp-hero-bio {
  font-size: 1rem;
  color: rgba(255,255,255,0.6);
  line-height: 1.75;
  max-width: 600px;
}

/* --- STATS CHIPS (Glassmorphic) --- */
.dp-stats-row {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  margin-top: 28px;
}

.dp-stat-chip {
  display: flex;
  align-items: center;
  gap: 12px;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 20px;
  padding: 12px 22px;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  transition: all 0.3s ease;
}

.dp-stat-chip:hover {
  background: rgba(255, 255, 255, 0.14);
  border-color: rgba(<?php echo $rgb; ?>, 0.45);
  transform: translateY(-2px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.dp-stat-chip .chip-icon {
  width: 42px;
  height: 42px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.05rem;
  flex-shrink: 0;
  color: #fff;
}

.dp-stat-chip .chip-icon.icon-exp {
  background: rgba(<?php echo $rgb; ?>, 0.3);
  border: 1px solid rgba(<?php echo $rgb; ?>, 0.4);
}

.dp-stat-chip .chip-icon.icon-patients {
  background: rgba(15, 92, 173, 0.3);
  border: 1px solid rgba(15, 92, 173, 0.4);
}

.dp-stat-chip .chip-icon.icon-avail {
  background: rgba(<?php echo $rgb; ?>, 0.3);
  border: 1px solid rgba(<?php echo $rgb; ?>, 0.4);
}

.dp-stat-chip .chip-text strong {
  display: block;
  font-size: 1.1rem;
  font-weight: 800;
  color: #fff;
  line-height: 1.2;
}

.dp-stat-chip .chip-text span {
  font-size: 0.75rem;
  color: rgba(255,255,255,0.5);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

/* --- MAIN CONTENT AREA --- */
.dp-content-area {
  padding: 60px 0 80px;
  background: var(--light-bg, #f8fafc);
  position: relative;
}

/* --- PROFILE CARD --- */
.dp-profile-card {
  background: #fff;
  border-radius: 28px;
  border: 1px solid var(--border-color, #e2e8f0);
  box-shadow: 0 10px 30px rgba(15, 92, 173, 0.04);
  padding: 48px 40px;
  transition: box-shadow 0.3s ease;
}

.dp-profile-card:hover {
  box-shadow: 0 20px 50px rgba(15, 92, 173, 0.08);
}

.dp-section-label {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 0.72rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.15em;
  color: <?php echo $ac; ?>;
  margin-bottom: 14px;
}

.dp-section-label i {
  font-size: 0.65rem;
}

.dp-section-title {
  font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
  font-size: 1.65rem;
  font-weight: 800;
  color: var(--text-dark, #0f172a);
  margin-bottom: 24px;
  letter-spacing: -0.025em;
}

.dp-profile-text {
  font-size: 1.02rem;
  color: var(--text-muted, #64748b);
  line-height: 1.85;
  margin-bottom: 0;
}

/* Divider */
.dp-divider {
  height: 1px;
  background: linear-gradient(90deg, transparent 0%, var(--border-color, #e2e8f0) 20%, var(--border-color, #e2e8f0) 80%, transparent 100%);
  margin: 36px 0;
}

/* --- EXPERTISE PILLS --- */
.dp-expertise-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.dp-exp-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 20px;
  border-radius: 50px;
  font-size: 0.88rem;
  font-weight: 600;
  color: var(--text-dark, #0f172a);
  background: var(--light-bg, #f8fafc);
  border: 1.5px solid var(--border-color, #e2e8f0);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  cursor: default;
}

.dp-exp-pill i {
  color: <?php echo $ac; ?>;
  font-size: 0.8rem;
}

.dp-exp-pill:hover {
  background: <?php echo $ac; ?>;
  color: #fff;
  border-color: <?php echo $ac; ?>;
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(<?php echo $rgb; ?>, 0.2);
}

.dp-exp-pill:hover i {
  color: #fff;
}

/* --- QUALIFICATIONS SECTION --- */
.dp-qual-box {
  background: var(--light-bg, #f8fafc);
  border: 1.5px solid var(--border-color, #e2e8f0);
  border-radius: 20px;
  padding: 24px;
  margin-top: 28px;
}
.dp-qual-title-row {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 18px;
}
.dp-qual-icon {
  width: 38px;
  height: 38px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.05rem;
  background: <?php echo $light; ?>;
  color: <?php echo $ac; ?>;
  border: 1px solid <?php echo $border; ?>;
}
.dp-qual-list {
  margin-bottom: 0;
  padding-left: 0;
}
.dp-qual-list li {
  position: relative;
  padding-left: 24px;
  margin-bottom: 10px;
  font-size: 0.92rem;
  font-weight: 600;
  color: var(--text-dark, #0f172a);
  list-style-type: none;
}
.dp-qual-list li::before {
  content: '\f058';
  font-family: 'Font Awesome 6 Free';
  font-weight: 900;
  position: absolute;
  left: 0;
  top: 1px;
  color: <?php echo $ac; ?>;
  font-size: 0.9rem;
}
.dp-qual-list li:last-child {
  margin-bottom: 0;
}

/* --- SIDEBAR BOOKING CARD --- */
.dp-book-card {
  background: #fff;
  border-radius: 28px;
  border: 1px solid var(--border-color, #e2e8f0);
  box-shadow: 0 10px 30px rgba(15, 92, 173, 0.04);
  padding: 36px 32px;
  overflow: hidden;
  position: relative;
}

.dp-book-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: <?php echo $grad; ?>;
}

.dp-book-card h3 {
  font-family: var(--font-heading, 'Plus Jakarta Sans', sans-serif);
  font-weight: 800;
  font-size: 1.3rem;
  color: var(--text-dark, #0f172a);
  margin-bottom: 6px;
  letter-spacing: -0.02em;
}

.dp-book-card .dp-book-sub {
  font-size: 0.88rem;
  color: var(--text-muted, #64748b);
  margin-bottom: 28px;
  line-height: 1.5;
}

.dp-book-card .form-label {
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--text-muted, #64748b);
  margin-bottom: 6px;
}

.dp-book-card .input-group-text {
  background: var(--light-bg, #f8fafc);
  border: 1.5px solid var(--border-color, #e2e8f0);
  border-right: none;
  border-radius: 14px 0 0 14px;
  color: var(--text-muted, #64748b);
  padding: 0 16px;
  font-size: 0.95rem;
  transition: all 0.3s ease;
}

.dp-book-card .form-control {
  border-radius: 0 14px 14px 0;
  border-left: none;
  background: var(--light-bg, #f8fafc);
  padding: 13px 18px;
  border: 1.5px solid var(--border-color, #e2e8f0);
  font-size: 0.92rem;
  transition: all 0.3s ease;
}

.dp-book-card .input-group:focus-within .input-group-text {
  background: #fff;
  border-color: <?php echo $ac; ?>;
  color: <?php echo $ac; ?>;
}

.dp-book-card .input-group:focus-within .form-control {
  background: #fff;
  border-color: <?php echo $ac; ?>;
}

.dp-btn-submit {
  width: 100%;
  padding: 15px;
  border: none;
  border-radius: 50px;
  font-weight: 700;
  font-size: 0.95rem;
  color: #fff;
  background: <?php echo $grad; ?>;
  box-shadow: 0 10px 25px -5px rgba(<?php echo $rgb; ?>, 0.35);
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.dp-btn-submit:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 15px 35px -5px rgba(<?php echo $rgb; ?>, 0.45);
}

.dp-btn-submit:active {
  transform: translateY(-1px) scale(0.98);
}

/* --- CONTACT INFO BAR --- */
.dp-contact-bar {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 16px 20px;
  background: var(--light-bg, #f8fafc);
  border-radius: 16px;
  margin-top: 24px;
  border: 1px solid var(--border-color, #e2e8f0);
}

.dp-contact-bar i {
  font-size: 1.2rem;
  color: <?php echo $ac; ?>;
}

.dp-contact-bar .contact-info strong {
  display: block;
  font-size: 0.78rem;
  font-weight: 700;
  color: var(--text-muted, #64748b);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

.dp-contact-bar .contact-info span {
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--text-dark, #0f172a);
}

/* --- OPD TIMINGS CARD --- */
.dp-timings-card {
  background: #fff;
  border-radius: 28px;
  border: 1px solid var(--border-color, #e2e8f0);
  box-shadow: 0 10px 30px rgba(15, 92, 173, 0.03);
  padding: 28px 24px;
  margin-top: 24px;
  position: relative;
  overflow: hidden;
}

.dp-timings-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: <?php echo $grad; ?>;
}

.dp-timings-icon {
  width: 40px;
  height: 40px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.1rem;
  background: <?php echo $light; ?>;
  color: <?php echo $ac; ?>;
  border: 1px solid <?php echo $border; ?>;
}

.dp-timings-list {
  margin-top: 18px;
}

.dp-timing-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.9rem;
}

.dp-timing-row span {
  color: var(--text-muted, #64748b);
  font-weight: 600;
}

.dp-timing-row strong {
  color: var(--text-dark, #0f172a);
  font-weight: 700;
}

/* --- BREADCRUMB STRIP --- */
.dp-breadcrumb {
  position: relative;
  z-index: 12;
  padding: 18px 0 0;
}

.dp-breadcrumb-list {
  display: flex;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}

.dp-breadcrumb-list a,
.dp-breadcrumb-list span {
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.02em;
}

.dp-breadcrumb-list a {
  color: rgba(255,255,255,0.55);
  transition: color 0.3s ease;
}

.dp-breadcrumb-list a:hover {
  color: #fff;
}

.dp-breadcrumb-list .sep {
  color: rgba(255,255,255,0.3);
  font-size: 0.65rem;
}

.dp-breadcrumb-list .current {
  color: rgba(255,255,255,0.85);
}

/* --- RESPONSIVE --- */
@media (max-width: 991px) {
  .dp-hero {
    min-height: auto;
    padding-bottom: 30px;
    padding-top: 90px;
  }
  .dp-photo-wrapper {
    margin-bottom: 0;
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  .dp-photo-card {
    max-width: 260px;
  }
  .dp-hero-content {
    text-align: center;
    padding-bottom: 30px;
  }
  .dp-hero-bio {
    margin-left: auto;
    margin-right: auto;
  }
  .dp-stats-row {
    justify-content: center;
  }
  .dp-content-area {
    padding-top: 50px;
  }
  .dp-profile-card {
    padding: 32px 24px;
  }
}

@media (max-width: 575px) {
  .dp-stats-row {
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
  }
  .dp-stat-chip {
    flex: 1 1 calc(50% - 8px);
    justify-content: center;
    padding: 10px 14px;
  }
  .dp-stats-row .dp-stat-chip:nth-child(3) {
    flex: 1 1 100%;
  }
  .dp-photo-card {
    max-width: 220px;
  }
  .dp-profile-card {
    padding: 28px 20px;
  }
  .dp-book-card {
    padding: 28px 20px;
  }
}
@media (min-width: 992px) {
  .dp-sticky-sidebar {
    position: sticky;
    top: 100px;
    z-index: 5;
  }
}
</style>

<!-- HERO BANNER -->
<section class="dp-hero">
  <!-- Background Image & Overlay -->
  <div class="dp-hero-bg">
    <img src="/images/hero4.png" alt="Clinical Consult Background">
  </div>
  <div class="dp-hero-overlay"></div>
  <div class="dp-hero-ring"></div>
  <div class="dp-hero-ring"></div>
  <div class="dp-hero-ring"></div>
  <div class="dp-hero-pattern"></div>
  
  <div class="container">
    <!-- Breadcrumb -->
    <div class="dp-breadcrumb">
      <div class="dp-breadcrumb-list">
        <a href="/index.php">Home</a>
        <span class="sep"><i class="fas fa-chevron-right"></i></span>
        <a href="/doctors.php">Our Experts</a>
        <span class="sep"><i class="fas fa-chevron-right"></i></span>
        <span class="current"><?php echo $doc['name']; ?></span>
      </div>
    </div>

    <div class="row align-items-center g-4 g-lg-5 mt-2">
      <!-- Doctor Photo -->
      <div class="col-lg-4 col-md-5">
        <div class="dp-photo-wrapper">
          <div class="dp-photo-card">
            <img src="/images/<?php echo $doc['img']; ?>" alt="<?php echo $doc['name']; ?>" onerror="this.src='/images/doc1.png'">
            <span class="dp-photo-badge"><i class="fas fa-award"></i> <?php echo $doc['experience']; ?> Exp</span>
          </div>
        </div>
      </div>

      <!-- Doctor Info -->
      <div class="col-lg-8 col-md-7">
        <div class="dp-hero-content">
          <span class="dp-specialty-tag">
            <i class="fas fa-stethoscope"></i> <?php echo $doc['specialty']; ?>
          </span>
          <h1 class="dp-hero-name"><?php echo $doc['name']; ?></h1>
          <p class="dp-hero-degrees"><?php echo $doc['degrees']; ?></p>
          <p class="dp-hero-bio"><?php echo $doc['bio']; ?></p>

          <div class="dp-stats-row">
            <div class="dp-stat-chip">
              <div class="chip-icon icon-exp"><i class="fas fa-award"></i></div>
              <div class="chip-text">
                <strong><?php echo $doc['experience']; ?></strong>
                <span>Experience</span>
              </div>
            </div>
            <div class="dp-stat-chip">
              <div class="chip-icon icon-patients"><i class="fas fa-users"></i></div>
              <div class="chip-text">
                <strong>5000+</strong>
                <span>Happy Patients</span>
              </div>
            </div>
            <div class="dp-stat-chip">
              <div class="chip-icon icon-avail"><i class="fas fa-clock"></i></div>
              <div class="chip-text">
                <strong>24/7</strong>
                <span>Available</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<section class="dp-content-area">
  <div class="container">
    <div class="row g-4 g-lg-5">

      <!-- LEFT: Profile & Expertise -->
      <div class="col-lg-7">
        <div class="dp-profile-card">
          <!-- Professional Profile -->
          <span class="dp-section-label"><i class="fas fa-circle"></i> Professional Profile</span>
          <h2 class="dp-section-title">About <?php echo $doc['name']; ?></h2>
          <p class="dp-profile-text"><?php echo $doc['long_bio']; ?></p>

          <div class="dp-divider"></div>

          <!-- Clinical Expertise -->
          <span class="dp-section-label"><i class="fas fa-circle"></i> Clinical Expertise</span>
          <h2 class="dp-section-title">Specializations & Services</h2>
          <div class="dp-expertise-grid">
            <?php foreach ($doc['expertise'] as $exp): ?>
              <span class="dp-exp-pill"><i class="fas fa-check-circle"></i> <?php echo $exp; ?></span>
            <?php endforeach; ?>
          </div>

          <!-- Credentials & Qualifications -->
          <?php
          $degreeStr = $doc['degrees'];
          $parts = explode('|', $degreeStr);
          $qualsStr = trim($parts[0]);
          $designation = isset($parts[1]) ? trim($parts[1]) : '';
          $quals = explode(',', $qualsStr);
          ?>
          <?php if (!empty($quals)): ?>
            <div class="dp-qual-box">
              <div class="dp-qual-title-row">
                <div class="dp-qual-icon">
                  <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="mb-0" style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark);">Credentials & Certifications</h3>
              </div>
              <ul class="dp-qual-list">
                <?php foreach ($quals as $qual): ?>
                  <?php if (trim($qual) !== ''): ?>
                    <li><?php echo htmlspecialchars(trim($qual)); ?></li>
                  <?php endif; ?>
                <?php endforeach; ?>
                <?php if ($designation !== ''): ?>
                  <li><?php echo htmlspecialchars($designation); ?></li>
                <?php endif; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- RIGHT: Booking Sidebar -->
      <div class="col-lg-5">
        <div class="dp-sticky-sidebar">
          <!-- Booking Form -->
          <div class="dp-book-card">
            <h3><i class="far fa-calendar-check me-2" style="color: <?php echo $ac; ?>;"></i> Request a Callback</h3>
            <p class="dp-book-sub">Schedule a consultation with <?php echo $doc['name']; ?>. Our coordinator will reach out to confirm.</p>
            <form id="detailed-booking-form" class="appointment-form">
              <input type="hidden" id="book-dept" value="<?php echo strtolower(explode(' ', str_replace('&', '', $doc['specialty']))[0]); ?>">
              <input type="hidden" id="book-doc" value="<?php echo $doc['name']; ?>">
              <div class="mb-3">
                <label for="book-name" class="form-label">Patient Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" id="book-name" class="form-control" placeholder="Enter your full name" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="book-phone" class="form-label">Contact Number</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  <input type="tel" id="book-phone" class="form-control" placeholder="Mobile number" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="book-date" class="form-label">Preferred Date</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  <input type="date" id="book-date" class="form-control" required>
                </div>
              </div>
              <div class="mb-4">
                <label for="book-msg" class="form-label">Health Concerns <span style="font-weight:400;text-transform:none;letter-spacing:0;font-size:0.82rem;color:#94a3b8">(Optional)</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-notes-medical"></i></span>
                  <textarea id="book-msg" class="form-control" rows="3" placeholder="Describe your symptoms or concerns..."></textarea>
                </div>
              </div>
              <button type="submit" class="dp-btn-submit"><i class="fas fa-paper-plane"></i> Submit Request</button>
            </form>
          </div>

          <!-- Timings Card -->
          <div class="dp-timings-card">
            <div class="d-flex align-items-center gap-3">
              <div class="dp-timings-icon">
                <i class="far fa-clock"></i>
              </div>
              <h4 class="mb-0" style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark);">OPD Schedule</h4>
            </div>
            <div class="dp-timings-list">
              <div class="dp-timing-row">
                <span>Mon - Sat</span>
                <strong>09:00 AM - 06:00 PM</strong>
              </div>
              <div class="dp-timing-row border-top pt-2 mt-2">
                <span>Emergency Care</span>
                <strong style="color: var(--emergency, #e11d48);"><i class="fas fa-circle-notch fa-spin me-1 text-danger"></i> 24/7 Available</strong>
              </div>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="dp-contact-bar">
            <i class="fas fa-phone-alt"></i>
            <div class="contact-info">
              <strong>Emergency Helpline</strong>
              <span>+91 9584 889068</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
