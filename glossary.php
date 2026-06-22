<?php
$pageTitle = "Medical Glossary | Sankalp Hospital - Healthcare Terms Explained";
$pageDesc = "Understand complex medical terminologies in plain language. Read explanations for IVF, Laparoscopy, PCNL, Dialysis, and more.";

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
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-book-medical me-1"></i> Medical Glossary</span>
        <h1 class="text-white display-4 fw-bold">Medical Glossary</h1>
        <p class="lead text-white-50 mb-0">A comprehensive, searchable index explaining clinical terminologies, procedures, and terms in plain language.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- GLOSSARY SECTION -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="section-title">
      <span>Patient Information Desk</span>
      <h2>Healthcare Terms Explained</h2>
      <p>Use the live search box or click a letter in the A-Z bar to filter medical terms instantly.</p>
    </div>

    <!-- Search Input Bar -->
    <div class="glossary-search-wrapper">
      <i class="fas fa-search"></i>
      <input type="text" id="glossary-search" class="glossary-search-box" placeholder="Search medical terms (e.g. IVF, Dialysis, PCNL)..." aria-label="Search medical terms">
    </div>

    <!-- A-Z Alphabet bar -->
    <div class="az-nav-bar" id="az-navigation">
      <button class="az-letter-btn active" data-letter="all">All</button>
      <button class="az-letter-btn" data-letter="a">A</button>
      <button class="az-letter-btn" data-letter="b">B</button>
      <button class="az-letter-btn" data-letter="c">C</button>
      <button class="az-letter-btn" data-letter="d">D</button>
      <button class="az-letter-btn" data-letter="e">E</button>
      <button class="az-letter-btn" data-letter="f" disabled>F</button>
      <button class="az-letter-btn" data-letter="g" disabled>G</button>
      <button class="az-letter-btn" data-letter="h" disabled>H</button>
      <button class="az-letter-btn" data-letter="i">I</button>
      <button class="az-letter-btn" data-letter="j" disabled>J</button>
      <button class="az-letter-btn" data-letter="k" disabled>K</button>
      <button class="az-letter-btn" data-letter="l">L</button>
      <button class="az-letter-btn" data-letter="m" disabled>M</button>
      <button class="az-letter-btn" data-letter="n">N</button>
      <button class="az-letter-btn" data-letter="o">O</button>
      <button class="az-letter-btn" data-letter="p">P</button>
      <button class="az-letter-btn" data-letter="q" disabled>Q</button>
      <button class="az-letter-btn" data-letter="r" disabled>R</button>
      <button class="az-letter-btn" data-letter="s" disabled>S</button>
      <button class="az-letter-btn" data-letter="t" disabled>T</button>
      <button class="az-letter-btn" data-letter="u">U</button>
      <button class="az-letter-btn" data-letter="v" disabled>V</button>
      <button class="az-letter-btn" data-letter="w" disabled>W</button>
      <button class="az-letter-btn" data-letter="x" disabled>X</button>
      <button class="az-letter-btn" data-letter="y" disabled>Y</button>
      <button class="az-letter-btn" data-letter="z" disabled>Z</button>
    </div>

    <!-- Glossary List Grid -->
    <div class="row g-4" id="glossary-items-container">
      
      <!-- Term: Amniocentesis -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="a">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">A</span>
          <h4>Amniocentesis</h4>
          <p>A specialized prenatal testing procedure in which a small sample of amniotic fluid is extracted from the uterus for clinical genetic screening and diagnostic checks.</p>
        </div>
      </div>

      <!-- Term: Anesthesia -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="a">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">A</span>
          <h4>Anesthesia</h4>
          <p>The clinical administration of gases or drugs (anesthetics) to temporarily block pain and sensory awareness during major or minor surgical operations.</p>
        </div>
      </div>

      <!-- Term: Blastocyst -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="b">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">B</span>
          <h4>Blastocyst</h4>
          <p>An embryo that has developed in the laboratory incubator for 5 to 6 days after egg fertilization. It displays a highly complex cellular form optimized for successful implantation.</p>
        </div>
      </div>

      <!-- Term: Cataract -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="c">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">C</span>
          <h4>Cataract</h4>
          <p>A gradual clouding of the eye's natural internal crystalline lens behind the iris, which blocks light and results in blurred or degraded visual perception.</p>
        </div>
      </div>

      <!-- Term: Chemotherapy -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="c">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">C</span>
          <h4>Chemotherapy</h4>
          <p>Specialized oncology treatment utilizing powerful chemical agents or drugs to halt, kill, and suppress rapidly growing cancer cells in the body.</p>
        </div>
      </div>

      <!-- Term: Dialysis -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="d">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">D</span>
          <h4>Dialysis</h4>
          <p>A life-sustaining mechanical filtration process that cleans waste products, excess salt, and fluid accumulations from the blood when the kidneys have lost functioning capacity.</p>
        </div>
      </div>

      <!-- Term: Endoscopy -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="e">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">E</span>
          <h4>Endoscopy</h4>
          <p>A diagnostic visual procedure where a physician inserts a thin, flexible tube with a high-resolution camera to view inside hollow organs (like the stomach or colon).</p>
        </div>
      </div>

      <!-- Term: ICSI -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="i">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">I</span>
          <h4>ICSI (Intracytoplasmic Sperm Injection)</h4>
          <p>An advanced micro-fertilization laboratory technique where a embryologist selects a single healthy sperm and injects it directly into a mature female egg.</p>
        </div>
      </div>

      <!-- Term: IUI -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="i">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">I</span>
          <h4>IUI (Intrauterine Insemination)</h4>
          <p>A primary fertility support treatment where processed, concentrated sperm are inserted directly into the uterus using a fine catheter during ovulation.</p>
        </div>
      </div>

      <!-- Term: IVF -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="i">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">I</span>
          <h4>IVF (In Vitro Fertilization)</h4>
          <p>An assisted reproduction technique where eggs are extracted, fertilized by sperm in the laboratory embryology incubator, and the resulting embryos are placed in the uterus.</p>
        </div>
      </div>

      <!-- Term: Laparoscopy -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="l">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">L</span>
          <h4>Laparoscopy (Keyhole Surgery)</h4>
          <p>A modern minimally invasive surgical option where specialized camera tools and thin instruments are inserted through small 0.5-1 cm incisions in the abdomen.</p>
        </div>
      </div>

      <!-- Term: Lithotripsy -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="l">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">L</span>
          <h4>Lithotripsy</h4>
          <p>A non-invasive treatment utilizing high-energy shock waves directed from outside the body to crush kidney or ureter stones into tiny sand-like fragments.</p>
        </div>
      </div>

      <!-- Term: Neonatology -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="n">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">N</span>
          <h4>Neonatology</h4>
          <p>A sub-specialty of pediatrics focused on the clinical management of premature, low birth weight, or critically ill newborn babies in incubator care (NICU).</p>
        </div>
      </div>

      <!-- Term: Ophthalmology -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="o">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">O</span>
          <h4>Ophthalmology</h4>
          <p>The specialized medical and surgical branch of care involving the complete diagnosis, visual rehabilitation, and clinical treatment of ocular and eye disorders.</p>
        </div>
      </div>

      <!-- Term: Phacoemulsification -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="p">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">P</span>
          <h4>Phacoemulsification</h4>
          <p>The standard modern cataract surgery procedure where high-frequency ultrasound breaks up the cloudy lens, which is then suctioned out and replaced with an IOL lens.</p>
        </div>
      </div>

      <!-- Term: PCNL -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="p">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">P</span>
          <h4>PCNL (Percutaneous Nephrolithotomy)</h4>
          <p>A minimally invasive keyhole urological surgery used to remove large kidney stones (usually larger than 2 cm) through a small incision in the patient's back.</p>
        </div>
      </div>

      <!-- Term: Urology -->
      <div class="col-lg-4 col-md-6 glossary-item" data-letter="u">
        <div class="glossary-term-card">
          <span class="glossary-term-letter">U</span>
          <h4>Urology</h4>
          <p>The clinical field of medicine dealing with surgical and medical diseases of the kidneys, ureters, urinary bladder, and the male reproductive system.</p>
        </div>
      </div>

    </div>

    <!-- Empty State for Search -->
    <div id="glossary-no-results" class="text-center py-5 d-none">
      <i class="fas fa-search-minus text-muted fs-1 mb-3"></i>
      <h5 class="text-muted">No terms matching your search criteria.</h5>
      <p class="text-muted fs-8">Try searching for other terms like 'IVF', 'ICSI', 'Laparoscopy', or 'PCNL'.</p>
    </div>
  </div>
</section>

<?php
include __DIR__ . '/includes/footer.php';
?>
