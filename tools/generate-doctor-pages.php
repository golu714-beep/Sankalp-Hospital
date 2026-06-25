<?php
/**
 * One-time generator: builds 21 fully self-contained doctors/dr-<slug>.php
 * files using the data from doctors/_registry.php plus the per-doctor
 * bio/long_bio/expertise inlined directly. Run from project root:
 *
 *     php tools/generate-doctor-pages.php
 *
 * After this runs, the per-doctor files are completely standalone — no
 * require of _template.php, no shared rendering logic.
 */

declare(strict_types=1);

$projectRoot = dirname(__DIR__);
require $projectRoot . '/doctors/_registry.php';

// Full data for each doctor (was previously in the per-doctor file's $doc).
// Pulled from the original $doctors array. Each per-doctor file will get its
// own self-contained page that includes the long_bio + expertise.
$fullDocs = [
    'dr-lata-goyal' => [
        'bio' => 'Dr. Lata Goyal is a renowned Gynecologist and Infertility Specialist based in Ambikapur. With over 15 years of experience, she has pioneered assisted reproductive technologies (ART) in the Surguja district. She is known for her compassionate care and high success rates in IVF and normal deliveries.',
        'long_bio' => 'Dr. Lata Goyal has been serving the community of Chhattisgarh for over a decade. Her commitment to bringing advanced medical technology to rural areas led to the establishment of the first IVF center in Ambikapur. She is a member of several prestigious medical associations and regularly participates in national health conferences.',
        'expertise' => ['High-risk Pregnancy', 'IVF & Infertility', 'Laparoscopic Gynaec Surgery', 'PCOS Management', 'Prenatal Care'],
    ],
    'dr-tanay-goyal' => [
        'bio' => 'Dr. Tanay Goyal is a highly skilled Orthopedic Surgeon at Sankalp Hospital. He is an expert in joint replacement and sports injuries, having performed hundreds of successful knee and hip surgeries. He is dedicated to restoring mobility for his patients in the Surguja region.',
        'long_bio' => 'Dr. Tanay is known for his precision in surgery and his dedicated post-operative care. He specializes in advanced procedures like knee and hip replacement, helping senior citizens regain their independence. He also provides emergency trauma care for accident victims 24/7 at Sankalp Hospital.',
        'expertise' => ['Joint Replacement', 'ACL & Sports Injury', 'Fracture Management', 'Spine Surgery', 'Arthroscopy'],
    ],
    'dr-suneedh-gupta' => [
        'bio' => 'Dr. Suneedh Gupta is a highly skilled Oral & Maxillofacial Surgeon at Sankalp Hospital. He specializes in surgeries of the face, mouth, and jaws, including facial trauma management, oral pathology, and complex tooth extractions. He is dedicated to restoring facial function and aesthetics for his patients.',
        'long_bio' => 'Dr. Suneedh is known for his surgical precision in treating facial fractures and performing complex jaw surgeries. He works closely with other specialists at Sankalp Hospital to provide comprehensive care for trauma victims and patients with oral diseases.',
        'expertise' => ['Facial Trauma Surgery', 'Jaw Realignment', 'Oral Cancer Screening', 'Complex Extractions', 'Dental Implants'],
    ],
    'dr-himanshu-gupta' => [
        'bio' => 'Cancer & Chemotherapy Specialist coordinating tumor chemotherapies and cancer screening packages.',
        'long_bio' => 'Dr. Himanshu Gupta is the Oncology and Cancer Care Specialist at Sankalp Hospital. He manages chemotherapy protocols, coordinates multi-specialty cancer treatments, and leads cancer screening packages. He is committed to providing empathetic, patient-centered care and advanced cancer therapy.',
        'expertise' => ['Chemotherapy Administration', 'Targeted Immunotherapy', 'Cancer Screening & Diagnosis', 'Tumor Triage', 'Palliative & Supportive Care'],
    ],
    'dr-chandra-mukesh-dhawde' => [
        'bio' => 'Expert in laparoscopic keyhole surgery, hernia treatment, and general abdominal surgeries.',
        'long_bio' => 'Dr. Chandra Mukesh Dhawde is an expert Laparoscopic and General Surgeon at Sankalp Hospital. He specializes in minimally invasive keyhole procedures, abdominal wall reconstructions, and hernia repairs. He focuses on modern surgical methods that reduce post-operative recovery times and pain.',
        'expertise' => ['Laparoscopic Keyhole Surgery', 'Hernia Reconstructions', 'Appendectomy & Cholecystectomy', 'Abdominal Trauma Care', 'Thyroid & Breast Surgeries'],
    ],
    'dr-sanjay-goyal' => [
        'bio' => 'Dr. Sanjay Goyal is the founder of Sankalp Hospital and a pioneer of modern ophthalmology in the Surguja region. With over 25 years of experience, he has performed thousands of successful eye surgeries and is dedicated to providing world-class vision care to the community.',
        'long_bio' => 'Dr. Sanjay\'s vision for Sankalp Hospital was to provide world-class healthcare facilities to the people of Ambikapur at affordable costs. His expertise in complex ocular trauma and advanced cataract surgery makes him the most sought-after ophthalmologist in the region.',
        'expertise' => ['Micro-Incision Cataract Surgery', 'Laser Eye Treatment', 'Ocular Trauma', 'Corneal Diseases', 'Comprehensive Eye Care'],
    ],
    'dr-manoj-bharti' => [
        'bio' => 'Experienced Dentist providing comprehensive dental care, root canals, and cosmetic dental treatments.',
        'long_bio' => 'Dr. Manoj Bharti is an experienced Consultant Dentist at Sankalp Hospital. He provides a wide range of dental care services, from preventative dental checks and restorative fillings to root canals, crowns, bridges, and cosmetic smile designs, ensuring beautiful and healthy smiles.',
        'expertise' => ['Root Canal Treatment (RCT)', 'Dental Crowns & Bridges', 'Cosmetic Dentistry', 'Teeth Scaling & Whitening', 'Preventative Dental Care'],
    ],
    'dr-nilesh-goyal' => [
        'bio' => 'Dr. Nilesh Goyal is an expert General and Laparoscopic Surgeon at Sankalp Hospital. He specializes in minimally invasive surgeries, helping patients recover faster with less pain. He has extensive experience in performing complex abdominal surgeries and trauma management.',
        'long_bio' => 'Dr. Nilesh is committed to providing high-quality surgical treatment with a focus on patient safety and comfort. His expertise in laparoscopic surgery ensures smaller incisions, less post-operative pain, and a quicker return to daily activities for his patients.',
        'expertise' => ['Laparoscopic Gallbladder Surgery', 'Hernia Repair', 'Appendectomy', 'Abdominal Surgery', 'Trauma Surgery'],
    ],
    'dr-ankit-sharma' => [
        'bio' => 'Dr. Ankit Sharma is a compassionate Psychiatrist at Sankalp Hospital, dedicated to providing comprehensive mental health care. He specializes in treating a wide range of psychological conditions and is committed to helping his patients achieve mental well-being and resilience.',
        'long_bio' => 'Dr. Ankit believes in a holistic approach to mental health, combining medication management with evidence-based psychotherapy. He treats conditions like anxiety disorders, depression, bipolar disorder, and addiction with the utmost confidentiality and professionalism.',
        'expertise' => ['Depression & Anxiety', 'Stress Management', 'De-addiction', 'Child & Adolescent Psychiatry', 'Counseling'],
    ],
    'dr-ankita-bansal-goyal' => [
        'bio' => 'Dr. Ankita Bansal Goyal is a gold-medalist from PGIMER Chandigarh and a pioneer in 3D Laparoscopic Surgery in Ambikapur. She specializes in minimally invasive gynecological procedures, including laparoscopic hysterectomy and myomectomy, providing advanced surgical care for women.',
        'long_bio' => 'Dr. Ankita\'s training at PGIMER Chandigarh and her fellowship in minimal access surgery allow her to perform complex surgeries with minimal scarring and faster recovery. She is dedicated to improving women\'s quality of life through advanced medical and surgical interventions for conditions like endometriosis, uterine fibroids, and heavy menstrual bleeding.',
        'expertise' => ['3D Laparoscopic Surgery', 'Laparoscopic Hysterectomy', 'PCOS Specialist', 'High-risk Pregnancy', 'Infertility Care'],
    ],
    'dr-shailesh-gupta' => [
        'bio' => 'Dr. Shailesh Gupta is a highly experienced Physician and Cardiologist at Sankalp Hospital. With over 15 years of clinical practice, he specializes in managing complex medical conditions, particularly heart disease, hypertension, and metabolic disorders like diabetes.',
        'long_bio' => 'Dr. Shailesh provides comprehensive care for heart patients, including management of stable angina, heart failure, and complex arrhythmias. He also manages chronic lifestyle diseases like hypertension and diabetes, ensuring his patients live long and healthy lives.',
        'expertise' => ['Heart Disease', 'Hypertension', 'Diabetes Management', 'General Medicine', 'Preventive Cardiology'],
    ],
    'dr-usha-armo' => [
        'bio' => 'Dr. Usha Armo is a dedicated ENT Specialist at Sankalp Hospital with over 12 years of clinical experience. She is highly proficient in managing both medical and surgical conditions of the ear, nose, and throat. Her expertise in endoscopy and microsurgery has helped many patients find relief from chronic ENT problems.',
        'long_bio' => 'Dr. Usha is known for her accurate diagnosis and personalized treatment plans. She utilizes advanced diagnostic tools like video endoscopy to provide the best care for chronic sinusitis, hearing impairment, and throat disorders. Her patient-friendly approach makes her the most trusted ENT specialist in the Surguja region.',
        'expertise' => ['Sinusitis Treatment', 'Tympanoplasty', 'Hearing Loss', 'Tonsillectomy', 'Nasal Endoscopy'],
    ],
    'dr-sukirti-chauhan' => [
        'bio' => 'Specialist Gynecologist expert in maternal health screenings, prenatal checks, and deliveries.',
        'long_bio' => 'Dr. Sukirti Chauhan is a Specialist Gynecologist at Sankalp Hospital. She focuses on outpatient consultations, preventative maternal health screenings, prenatal checks, family planning, and handling both normal and assisted deliveries with extreme care.',
        'expertise' => ['Prenatal Diagnostics', 'Maternal Screening Panels', 'Normal Deliveries', 'Outpatient Gynaecology', 'Adolescent Gynae Counselling'],
    ],
    'dr-megha-goyal' => [
        'bio' => 'Dr. Megha Goyal is a dedicated Neonatologist at Sankalp Hospital, specializing in the care of newborns and premature infants. Her expertise in the Neonatal Intensive Care Unit (NICU) has saved many lives, providing the highest standard of care for the most vulnerable patients.',
        'long_bio' => 'Dr. Megha\'s dedication to neonatal health ensures that every baby born at Sankalp Hospital has immediate access to expert care if complications arise. She also provides regular pediatric consultations, guiding parents through the crucial early years of their child\'s development.',
        'expertise' => ['Newborn Care', 'NICU Specialist', 'Premature Baby Care', 'Pediatric Emergencies', 'Childhood Immunization'],
    ],
    'dr-akshaya-goyal' => [
        'bio' => 'Dr. Akshaya Goyal is a skilled Eye Specialist at Sankalp Hospital, dedicated to providing advanced eye care services. He specializes in modern cataract surgery and managing complex eye conditions, ensuring clear vision for his patients in Ambikapur.',
        'long_bio' => 'Dr. Akshaya is committed to preventing blindness and restoring vision. He utilizes the latest Phacoemulsification technology for cataract surgery, allowing for stitch-less and painless recovery. He also specializes in managing glaucoma and diabetic retinopathy to protect your long-term eye health.',
        'expertise' => ['Phaco Cataract Surgery', 'Glaucoma Management', 'Diabetic Retinopathy', 'Refractive Errors', 'Eye Trauma'],
    ],
    'dr-akshay-gupta' => [
        'bio' => 'Dr. Akshay Gupta is a Consultant Physician and Rheumatologist with expertise in Internal Medicine, autoimmune diseases, arthritis, and complex medical disorders. He completed his MBBS from Vardhman Mahavir Medical College & Safdarjung Hospital and MD (Medicine) from Dr. Ram Manohar Lohia Hospital, New Delhi. He is recognized as the first and only rheumatology specialist serving the Surguja region.',
        'long_bio' => 'Dr. Akshay Gupta is a Consultant Physician and Rheumatologist at Sankalp Hospital. He completed his MBBS from Vardhman Mahavir Medical College & Safdarjung Hospital and MD from RML Hospital, New Delhi. He is recognized as the first and only rheumatology specialist serving the Surguja region.',
        'expertise' => ['Rheumatology', 'Rheumatoid Arthritis', 'Ankylosing Spondylitis', 'Lupus (SLE)', 'Psoriatic Arthritis', 'Gout', 'Vasculitis', 'Osteoporosis', 'Diabetes & Hypertension', 'General Internal Medicine'],
    ],
    'dr-ankit-gupta' => [
        'bio' => 'Dr. Ankit Gupta is a highly regarded Pediatrician in Ambikapur, known for his excellence in child healthcare. He provides comprehensive care for infants, children, and adolescents, specializing in growth monitoring, nutrition, and infectious diseases.',
        'long_bio' => 'From routine checkups to managing complex childhood illnesses, Dr. Ankit\'s expertise ensures that your child\'s health is in safe hands. He is a strong advocate for vaccination and preventive healthcare, helping parents raise healthy and happy children.',
        'expertise' => ['Child Vaccination', 'Neonatal Care', 'Pediatric Nutrition', 'Child Growth Monitoring', 'Infectious Diseases'],
    ],
];

// Category resolution (mirrors _template.php logic)
$catMap = [
    'ophthalmology' => 'clinical',
    'urology'       => 'clinical',
    'ent'           => 'clinical',
    'anesthesia'    => 'clinical',
    'psychiatry'    => 'clinical',
    'surgery'       => 'surgical',
    'orthopedics'   => 'surgical',
    'oncology'      => 'surgical',
    'gynecology'    => 'surgical',
    'emergency'     => 'critical',
    'ivf'           => 'family',
    'pediatrics'    => 'family',
];
$customCatMap = [
    'dentistry' => 'clinical',
    'medicine'  => 'clinical',
    'nutrition' => 'clinical',
];

// Compute the "dept slug" used by the booking form (first word of specialty, lowercased, with & stripped).
function bookingDept(string $specialty): string {
    $first = strtolower(explode(' ', str_replace('&', '', $specialty))[0]);
    return htmlspecialchars($first, ENT_QUOTES, 'UTF-8');
}

// Resolve the per-doctor theme class (e.g. "dp-theme-surgical") from the
// registry's filter slug. The actual colors live in /css/doctor-profile.css
// so all 21 pages share one stylesheet.
function resolveThemeClass(array $filters, array $catMap, array $customCatMap): string {
    $primary = $filters[0] ?? 'clinical';
    $cat = $customCatMap[$primary] ?? ($catMap[$primary] ?? 'clinical');
    return 'dp-theme-' . $cat;
}

function html(?string $s): string {
    return htmlspecialchars((string)($s ?? ''), ENT_QUOTES, 'UTF-8');
}

$generated = 0;
foreach ($doctorRegistry as $slug => $reg) {
    $longBio = $fullDocs[$slug]['long_bio'] ?? '';
    $bio     = $fullDocs[$slug]['bio'] ?? ($reg['bio'] ?? '');
    $expertise = $fullDocs[$slug]['expertise'] ?? [];

    $themeClass = resolveThemeClass($reg['filters'], $catMap, $customCatMap);

    $pageTitle = "{$reg['name']} | Best {$reg['specialty']} Specialist in Ambikapur | Sankalp Hospital";
    $pageDesc  = "Consult {$reg['name']}, {$reg['degrees']} at Sankalp Hospital in Ambikapur. {$bio}";

    $deptHidden = bookingDept($reg['specialty']);

    // Split degrees into qualifications + designation
    $degreeParts = explode('|', $reg['degrees']);
    $qualsStr = trim($degreeParts[0] ?? '');
    $designation = isset($degreeParts[1]) ? trim($degreeParts[1]) : '';
    $quals = array_filter(array_map('trim', explode(',', $qualsStr)), fn($q) => $q !== '');

    $qualsHtml = '';
    foreach ($quals as $q) $qualsHtml .= '                <li>' . html($q) . "</li>\n";
    if ($designation !== '') $qualsHtml .= '                <li>' . html($designation) . "</li>\n";

    $expertiseHtml = '';
    foreach ($expertise as $exp) {
        $expertiseHtml .= '            <span class="dp-exp-pill"><i class="fas fa-check-circle"></i> ' . html($exp) . "</span>\n";
    }

    $name = html($reg['name']);
    $specialty = html($reg['specialty']);
    $degrees = html($reg['degrees']);
    $experience = html($reg['experience']);
    $img = html($reg['img']);
    $bio = html($bio);
    $longBioHtml = html($longBio);

    $out = <<<PHP
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{$pageTitle}</title>
  <meta name="description" content="{$pageDesc}">

  <!-- CSS CDNs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/css/doctor-profile.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#scroll-spy" data-bs-offset="90">
<div class="page-wrapper">

PHP;

    $out .= file_get_contents($projectRoot . '/includes/navbar.php');

    $out .= <<<PHP



<!-- HERO BANNER -->
<div class="dp-page {$themeClass}">
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
        <span class="current">{$name}</span>
      </div>
    </div>

    <div class="row align-items-center g-4 g-lg-5 mt-2">
      <!-- Doctor Photo -->
      <div class="col-lg-4 col-md-5">
        <div class="dp-photo-wrapper">
          <div class="dp-photo-card">
            <img src="/images/{$img}" alt="{$name}" onerror="this.src='/images/doc1.png'">
            <span class="dp-photo-badge"><i class="fas fa-award"></i> {$experience} Exp</span>
          </div>
        </div>
      </div>

      <!-- Doctor Info -->
      <div class="col-lg-8 col-md-7">
        <div class="dp-hero-content">
          <span class="dp-specialty-tag">
            <i class="fas fa-stethoscope"></i> {$specialty}
          </span>
          <h1 class="dp-hero-name">{$name}</h1>
          <p class="dp-hero-degrees">{$degrees}</p>
          <p class="dp-hero-bio">{$bio}</p>

          <div class="dp-stats-row">
            <div class="dp-stat-chip">
              <div class="chip-icon icon-exp"><i class="fas fa-award"></i></div>
              <div class="chip-text">
                <strong>{$experience}</strong>
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
          <h2 class="dp-section-title">About {$name}</h2>
          <p class="dp-profile-text">{$longBioHtml}</p>

          <div class="dp-divider"></div>

          <!-- Clinical Expertise -->
          <span class="dp-section-label"><i class="fas fa-circle"></i> Clinical Expertise</span>
          <h2 class="dp-section-title">Specializations & Services</h2>
          <div class="dp-expertise-grid">
{$expertiseHtml}          </div>

          <!-- Credentials & Qualifications -->
          <div class="dp-qual-box">
            <div class="dp-qual-title-row">
              <div class="dp-qual-icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <h3 class="mb-0" style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark);">Credentials & Certifications</h3>
            </div>
            <ul class="dp-qual-list">
{$qualsHtml}            </ul>
          </div>
        </div>
      </div>

      <!-- RIGHT: Booking Sidebar -->
      <div class="col-lg-5">
        <div class="dp-sticky-sidebar">
          <!-- Booking Form -->
          <div class="dp-book-card">
            <h3><i class="far fa-calendar-check me-2"></i> Request a Callback</h3>
            <p class="dp-book-sub">Schedule a consultation with {$name}. Our coordinator will reach out to confirm.</p>
            <form id="detailed-booking-form" class="appointment-form">
              <input type="hidden" id="book-dept" value="{$deptHidden}">
              <input type="hidden" id="book-doc" value="{$name}">
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
</div><!-- /.dp-page -->

PHP;

    $out .= file_get_contents($projectRoot . '/includes/footer.php');

    $outPath = $projectRoot . '/doctors/' . $slug . '.php';
    file_put_contents($outPath, $out);
    $generated++;
}

echo "Generated {$generated} self-contained doctor page(s) in doctors/\n";
