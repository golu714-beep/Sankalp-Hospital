<?php
$pageTitle = "Medical Myths & Facts | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Sankalp Hospital debunking common medical myths with scientific facts. Learn about IVF, spine surgery, C-sections, and dialysis reality.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <!-- Background Visual -->
  <div class="subpage-hero-bg">
    <img src="images/hero4.png" alt="Sankalp Clinical Consult">
  </div>
  <div class="subpage-hero-overlay"></div>

  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-lightbulb me-1"></i> Patient Education</span>
        <h1 class="text-white display-4 fw-bold">Medical Myths & Facts</h1>
        <p class="lead text-white-50 mb-0">Debunking common misconceptions and spreading verified medical knowledge from our leading clinicians to keep you informed.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- MYTHS & FACTS CONTAINER -->
<section class="myths-section">
  <div class="container">
    <div class="section-title">
      <span>Patient Education Corner</span>
      <h2>Health Misconceptions vs. Scientific Facts</h2>
      <p>Click on any card to reveal the medical reality. Use the filters to find topic-specific facts.</p>
    </div>

    <!-- Category Filter Tabs -->
    <div class="myths-filter-wrap">
      <button class="filter-tab-btn active" data-filter="all">All Topics</button>
      <button class="filter-tab-btn" data-filter="gynecology">Gynecology & IVF</button>
      <button class="filter-tab-btn" data-filter="orthopedics">Orthopaedics & Spine</button>
      <button class="filter-tab-btn" data-filter="general">General & Renal Care</button>
    </div>

    <!-- Myth Grid -->
    <div class="row">
      <!-- Card 1 -->
      <div class="col-lg-6 col-md-6 myth-item filter-gynecology">
        <div class="myth-card-container">
          <div class="card-flipper">
            <!-- Front (Myth) -->
            <div class="card-front">
              <div>
                <span class="card-indicator">Myth</span>
                <div class="card-title-box">
                  <i class="fas fa-times-circle"></i>
                  <h4>IVF-conceived babies are not normal or healthy.</h4>
                </div>
                <div class="card-desc-box">
                  Many believe that "test-tube babies" suffer from developmental issues, birth defects, or are weak compared to naturally conceived infants.
                </div>
              </div>
              <div class="card-action-hint">
                <span>REVEAL FACT</span>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
            <!-- Back (Fact) -->
            <div class="card-back">
              <div>
                <span class="card-indicator">Fact</span>
                <div class="card-title-box">
                  <i class="fas fa-check-circle"></i>
                  <h4>IVF babies are just as healthy and normal.</h4>
                </div>
                <div class="card-desc-box">
                  Millions of children worldwide have been born via IVF and grow up fully healthy. Scientifically, they carry no higher risk of genetic abnormalities or developmental issues than naturally conceived babies.
                </div>
              </div>
              <div class="card-action-hint">
                <span class="text-muted">TAP TO RESET</span>
                <i class="fas fa-undo text-muted"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-6 col-md-6 myth-item filter-orthopedics">
        <div class="myth-card-container">
          <div class="card-flipper">
            <!-- Front (Myth) -->
            <div class="card-front">
              <div>
                <span class="card-indicator">Myth</span>
                <div class="card-title-box">
                  <i class="fas fa-times-circle"></i>
                  <h4>Spine surgery is highly dangerous and always causes paralysis.</h4>
                </div>
                <div class="card-desc-box">
                  People often suffer from debilitating back pain for years, fearing that undergoing a surgical procedure will permanently bind them to a wheelchair.
                </div>
              </div>
              <div class="card-action-hint">
                <span>REVEAL FACT</span>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
            <!-- Back (Fact) -->
            <div class="card-back">
              <div>
                <span class="card-indicator">Fact</span>
                <div class="card-title-box">
                  <i class="fas fa-check-circle"></i>
                  <h4>Modern spine surgery is highly safe and precise.</h4>
                </div>
                <div class="card-desc-box">
                  With high-resolution navigation systems, microscopic operating tools, and minimally invasive (keyhole) procedures, spine surgeries have a success rate of over 95% today, with patients walking the next morning.
                </div>
              </div>
              <div class="card-action-hint">
                <span class="text-muted">TAP TO RESET</span>
                <i class="fas fa-undo text-muted"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-6 col-md-6 myth-item filter-general">
        <div class="myth-card-container">
          <div class="card-flipper">
            <!-- Front (Myth) -->
            <div class="card-front">
              <div>
                <span class="card-indicator">Myth</span>
                <div class="card-title-box">
                  <i class="fas fa-times-circle"></i>
                  <h4>Dialysis is a permanent treatment and cures kidney disease.</h4>
                </div>
                <div class="card-desc-box">
                  Patients assume that dialysis is a cure for failing kidneys and once started, they must remain on it forever, with no options for recovery.
                </div>
              </div>
              <div class="card-action-hint">
                <span>REVEAL FACT</span>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
            <!-- Back (Fact) -->
            <div class="card-back">
              <div>
                <span class="card-indicator">Fact</span>
                <div class="card-title-box">
                  <i class="fas fa-check-circle"></i>
                  <h4>Dialysis sustains life; transplant is the permanent option.</h4>
                </div>
                <div class="card-desc-box">
                  Dialysis filters metabolic waste when kidneys cannot function. It sustains health but is not a biological cure. Many patients with acute renal injuries recover and stop dialysis. For chronic failure, kidney transplant is the cure.
                </div>
              </div>
              <div class="card-action-hint">
                <span class="text-muted">TAP TO RESET</span>
                <i class="fas fa-undo text-muted"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-6 col-md-6 myth-item filter-gynecology">
        <div class="myth-card-container">
          <div class="card-flipper">
            <!-- Front (Myth) -->
            <div class="card-front">
              <div>
                <span class="card-indicator">Myth</span>
                <div class="card-title-box">
                  <i class="fas fa-times-circle"></i>
                  <h4>A woman cannot have a normal delivery after a C-section.</h4>
                </div>
                <div class="card-desc-box">
                  The phrase "once a cesarean, always a cesarean" is widely accepted, leading women to believe they must go through major surgery for all future births.
                </div>
              </div>
              <div class="card-action-hint">
                <span>REVEAL FACT</span>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
            <!-- Back (Fact) -->
            <div class="card-back">
              <div>
                <span class="card-indicator">Fact</span>
                <div class="card-title-box">
                  <i class="fas fa-check-circle"></i>
                  <h4>VBAC is highly successful under expert care.</h4>
                </div>
                <div class="card-desc-box">
                  Vaginal Birth After Cesarean (VBAC) is a safe and medically approved option for many women. Success rates are between 60-80% under proper obstetric monitoring, provided there are no contraindications.
                </div>
              </div>
              <div class="card-action-hint">
                <span class="text-muted">TAP TO RESET</span>
                <i class="fas fa-undo text-muted"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-lg-6 col-md-6 myth-item filter-general">
        <div class="myth-card-container">
          <div class="card-flipper">
            <!-- Front (Myth) -->
            <div class="card-front">
              <div>
                <span class="card-indicator">Myth</span>
                <div class="card-title-box">
                  <i class="fas fa-times-circle"></i>
                  <h4>Eye drops and diet can cure or reverse cataracts.</h4>
                </div>
                <div class="card-desc-box">
                  Many believe that regular usage of herbal eye drops, exercises, or dietary supplements can dissolve the cloudy lens of a cataract.
                </div>
              </div>
              <div class="card-action-hint">
                <span>REVEAL FACT</span>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
            <!-- Back (Fact) -->
            <div class="card-back">
              <div>
                <span class="card-indicator">Fact</span>
                <div class="card-title-box">
                  <i class="fas fa-check-circle"></i>
                  <h4>Surgery is the only clinical cure for cataracts.</h4>
                </div>
                <div class="card-desc-box">
                  A cataract is a physical clouding of the eye's natural lens proteins. No drop or medication can reverse this changes. Phacoemulsification surgery with a custom Intraocular Lens (IOL) implant is the only proven cure.
                </div>
              </div>
              <div class="card-action-hint">
                <span class="text-muted">TAP TO RESET</span>
                <i class="fas fa-undo text-muted"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-lg-6 col-md-6 myth-item filter-gynecology">
        <div class="myth-card-container">
          <div class="card-flipper">
            <!-- Front (Myth) -->
            <div class="card-front">
              <div>
                <span class="card-indicator">Myth</span>
                <div class="card-title-box">
                  <i class="fas fa-times-circle"></i>
                  <h4>IVF is only successful for young couples.</h4>
                </div>
                <div class="card-desc-box">
                  Couples over 35 often assume that assisted reproduction techniques will not work for them, causing them to delay consulting a fertility specialist.
                </div>
              </div>
              <div class="card-action-hint">
                <span>REVEAL FACT</span>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
            <!-- Back (Fact) -->
            <div class="card-back">
              <div>
                <span class="card-indicator">Fact</span>
                <div class="card-title-box">
                  <i class="fas fa-check-circle"></i>
                  <h4>IVF helps couples across different age groups.</h4>
                </div>
                <div class="card-desc-box">
                  While age influences fertility, advanced labs, ICSI, and donor programs enable successful pregnancies for couples in their late 30s and 40s. Consultation with an embryologist can clarify individual options.
                </div>
              </div>
              <div class="card-action-hint">
                <span class="text-muted">TAP TO RESET</span>
                <i class="fas fa-undo text-muted"></i>
              </div>
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
