<?php
$pageTitle = "Frequently Asked Questions | Sankalp Hospital - Best Hospital in Ambikapur";
$pageDesc = "Find answers to frequently asked questions at Sankalp Hospital. Learn about OPD bookings, cashless insurance, visiting hours, and clinical services.";

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
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-question-circle me-1"></i> Patient Support</span>
        <h1 class="text-white display-4 fw-bold">Frequently Asked Questions</h1>
        <p class="lead text-white-50 mb-0">Find answers to common queries regarding appointment scheduling, cashless claims, visiting regulations, and medical services.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="section-title">
      <span>Support Desk</span>
      <h2>Frequently Asked Questions</h2>
      <p>Click on the categories to filter topics, or click any question to slide open the explanation.</p>
    </div>

    <!-- Category Tabs -->
    <div class="myths-filter-wrap mb-4" id="faq-categories">
      <button class="filter-tab-btn active" data-category="all"><i class="fas fa-list me-1"></i> All FAQs</button>
      <button class="filter-tab-btn" data-category="general"><i class="fas fa-hospital me-1"></i> General & Admission</button>
      <button class="filter-tab-btn" data-category="appointments"><i class="far fa-calendar-check me-1"></i> Appointments</button>
      <button class="filter-tab-btn" data-category="billing"><i class="fas fa-file-invoice-dollar me-1"></i> Billing & Cashless</button>
      <button class="filter-tab-btn" data-category="medical"><i class="fas fa-stethoscope me-1"></i> Medical Specialties</button>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="accordion faq-accordion" id="interactiveFaqAccordion">
          
          <!-- Accordion 1 (General) -->
          <div class="accordion-item faq-panel-node" data-category="general">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true">
                What are the hospital's visiting hours for inpatient wards?
              </button>
            </h2>
            <div id="faq-collapse-1" class="accordion-collapse collapse show" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                To guarantee a quiet, sterile, and restorative atmosphere for all recovering patients, inpatient visiting hours are restricted to <strong>4:00 PM to 6:00 PM daily</strong>. Only one visitor carrying an authorized attendant pass is permitted at the bedside at any given time.
              </div>
            </div>
          </div>

          <!-- Accordion 2 (General) -->
          <div class="accordion-item faq-panel-node" data-category="general">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2">
                Is the emergency trauma department operational 24/7?
              </button>
            </h2>
            <div id="faq-collapse-2" class="accordion-collapse collapse" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                Yes, our Emergency and Trauma Care facility is open <strong>24 hours a day, 365 days a year</strong>. It is equipped with advanced ICU monitoring tools, modular surgical tables, and is staffed around-the-clock by emergency medical officers and trauma care specialists.
              </div>
            </div>
          </div>

          <!-- Accordion 3 (Appointments) -->
          <div class="accordion-item faq-panel-node" data-category="appointments">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3">
                How do I book an OPD consultation slot online?
              </button>
            </h2>
            <div id="faq-collapse-3" class="accordion-collapse collapse" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                You can easily request a priority OPD slot using our consultation request forms on the website, or by calling our helpdesk at <strong>+91 9584 889068</strong>. Our front office staff will check doctor rosters and contact you to confirm a convenient slot.
              </div>
            </div>
          </div>

          <!-- Accordion 4 (Appointments) -->
          <div class="accordion-item faq-panel-node" data-category="appointments">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4">
                Can I cancel or reschedule a booked appointment?
              </button>
            </h2>
            <div id="faq-collapse-4" class="accordion-collapse collapse" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                Yes. If you need to reschedule or cancel your slot, please notify our team at least <strong>4 hours in advance</strong> by calling the reception desk. This allows us to allocate the time to other patients in need.
              </div>
            </div>
          </div>

          <!-- Accordion 5 (Billing) -->
          <div class="accordion-item faq-panel-node" data-category="billing">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5">
                Does the hospital support cashless treatments under government schemes?
              </button>
            </h2>
            <div id="faq-collapse-5" class="accordion-collapse collapse" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                Yes. Sankalp Hospital provides cashless support under the central government's <strong>Ayushman Bharat Yojana (PM-JAY)</strong>, the state's <strong>Khubchand Baghel Swasthya Sahayata Yojana (DKBSSY)</strong>, the <strong>CG State Employees Scheme</strong>, and <strong>CGHS / ESIC panels</strong>. Bring your active scheme card to our TPA helpdesk.
              </div>
            </div>
          </div>

          <!-- Accordion 6 (Billing) -->
          <div class="accordion-item faq-panel-node" data-category="billing">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6">
                What documents are needed for cashless corporate health insurance?
              </button>
            </h2>
            <div id="faq-collapse-6" class="accordion-collapse collapse" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                To initiate corporate cashless authorization, please provide:
                <ul class="mt-2 mb-0 pl-3">
                  <li>Your active health insurance card / TPA card</li>
                  <li>Copy of the insurance policy document</li>
                  <li>A valid government photo ID card (Aadhaar Card, PAN Card, etc.)</li>
                  <li>Doctor's diagnostic report & admission note</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Accordion 7 (Medical) -->
          <div class="accordion-item faq-panel-node" data-category="medical">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7">
                What is the clinical success rate of your IVF Center?
              </button>
            </h2>
            <div id="faq-collapse-7" class="accordion-collapse collapse" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                Our Sankalp Assisted Fertility IVF Center has hit a milestone of <strong>1,500+ successful IVF babies</strong> born. Our clinical success rates for IUI, IVF, and ICSI treatments range from 50% to 65% depending on specific case details, which matches elite global standards.
              </div>
            </div>
          </div>

          <!-- Accordion 8 (Medical) -->
          <div class="accordion-item faq-panel-node" data-category="medical">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8">
                What are the benefits of laparoscopic keyhole surgery?
              </button>
            </h2>
            <div id="faq-collapse-8" class="accordion-collapse collapse" data-bs-parent="#interactiveFaqAccordion">
              <div class="accordion-body">
                Unlike open surgeries that require long skin incisions, laparoscopic surgery uses tiny 0.5-1 cm incisions. This minimally invasive technique provides patients with <strong>significantly less pain, reduced risk of infection, minimal scarring, shorter hospital stays, and much faster recovery</strong> to daily life.
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
