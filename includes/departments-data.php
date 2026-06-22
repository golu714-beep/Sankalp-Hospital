<?php
// Shared Clinical Departments Data Matrix
$departments = [
    'ophthalmology' => [
        'title' => 'Ophthalmology (Eye Care)',
        'tagline' => 'Advanced diagnostic, therapeutic, and micro-surgical ocular care for clear vision.',
        'icon' => 'fas fa-eye',
        'theme_color' => 'var(--primary)',
        'gradient' => 'clinical',
        'overview' => 'Sankalp Hospital’s Ophthalmology Department provides comprehensive eye care services, ranging from routine vision tests to complex micro-surgeries. Utilizing state-of-the-art diagnostic imaging and surgical systems, our specialist ophthalmologists treat cataracts, glaucoma, corneal diseases, and diabetic retinopathy with high precision. We are committed to preserving and restoring your vision in a safe, caring, and modern clinical environment.',
        'features' => [
            ['icon' => 'fas fa-microscope', 'title' => 'Modular Ophthalmic OT', 'desc' => 'Equipped with precision microscopes and advanced phacoemulsification systems for sutureless surgery.'],
            ['icon' => 'fas fa-desktop', 'title' => 'Computerized Diagnostics', 'desc' => 'High-resolution OCT scanning, digital perimetry, and auto-refraction for early detection.'],
            ['icon' => 'fas fa-user-shield', 'title' => 'Pediatric Vision Care', 'desc' => 'Specialized screenings and therapies for children to prevent long-term vision impairments.']
        ],
        'services' => [
            ['title' => 'Phacoemulsification (Cataract)', 'desc' => 'Sutureless, micro-incision cataract extraction with premium intraocular lens (IOL) implantation.'],
            ['title' => 'Glaucoma Management', 'desc' => 'Early screening, computerized visual fields, intraocular pressure monitoring, and advanced therapies.'],
            ['title' => 'Diabetic Retinopathy', 'desc' => 'Fundus photography, laser photocoagulation, and intravitreal injections to prevent vision loss.'],
            ['title' => 'Refraction & Vision correction', 'desc' => 'Accurate computerized testing for prescription glasses, contact lenses, and refractive counseling.']
        ],
        'procedures' => [
            'Micro-incision Cataract Surgery (MICS)',
            'YAG Laser Capsulotomy & Iridotomy',
            'Intravitreal Anti-VEGF Injections',
            'Applanation Tonometry & Gonioscopy',
            'Computerized Visual Field Analysis (Perimetry)',
            'Corneal Topography & Pachymetry'
        ],
        'why_choose_us' => [
            'Led by senior eye surgeons carrying decades of clinical experience.',
            'Equipped with advanced diagnostic machines matching global optical standards.',
            '98.7% successful outcomes in routine and complex cataract surgeries.',
            'Holistic post-procedure follow-ups and patient counseling.'
        ],
        'faqs' => [
            ['q' => 'What is Phacoemulsification cataract surgery?', 'a' => 'Phacoemulsification is a modern, sutureless surgical procedure where the eye’s natural cloudy lens is broken up using ultrasound waves and gently vacuumed out. A premium artificial folder lens (IOL) is then inserted through a tiny self-healing incision.'],
            ['q' => 'Is eye surgery painful?', 'a' => 'No. Most ophthalmic surgeries, including cataract removals, are performed under local topical anesthesia (numbing eye drops). You may feel mild pressure but no pain during the procedure.'],
            ['q' => 'How often should I get my eyes checked?', 'a' => 'Adults under 40 should have an eye exam every 2 years. Individuals over 40, diabetics, or those with a family history of glaucoma should undergo comprehensive eye screenings annually.'],
            ['q' => 'What are the early warning signs of glaucoma?', 'a' => 'Glaucoma is often called the "silent thief of sight" because it progresses without pain or warning signs in its early stages. Gradual loss of peripheral vision, halos around lights, or blurred vision require immediate screening.'],
            ['q' => 'Can diabetic retinopathy be cured?', 'a' => 'While damage cannot always be reversed, diabetic retinopathy can be successfully managed and stabilized using lasers, injections, and strict blood sugar control to prevent further vision loss.']
        ]
    ],
    'emergency' => [
        'title' => '24 Hours Emergency & Trauma Care',
        'tagline' => 'State-of-the-art critical care stabilization and rapid surgical response round-the-clock.',
        'icon' => 'fas fa-ambulance',
        'theme_color' => 'var(--emergency)',
        'gradient' => 'emergency',
        'overview' => 'Our Emergency and Trauma Department is a specialized, fully integrated clinical unit functioning 24x7. We provide immediate medical triage, life-saving resuscitation, and emergency surgeries for acute trauma, cardiac arrests, respiratory failures, poisonings, and environmental accidents. Backed by dedicated critical care surgeons, anesthesiologists, and an in-house fleet of cardiac ambulances, we stand ready to handle every medical crisis.',
        'features' => [
            ['icon' => 'fas fa-tachometer-alt', 'title' => 'Zero-Delay Triage', 'desc' => 'Immediate clinical assessment by emergency medical officers upon arrival without administrative delay.'],
            ['icon' => 'fas fa-procedures', 'title' => 'Red-Zone Resuscitation', 'desc' => 'Equipped with defibrillators, mechanical ventilators, and crash carts for instant life support.'],
            ['icon' => 'fas fa-truck-medical', 'title' => 'Advanced Life Support Ambulance', 'desc' => 'Equipped with transport ventilators, oxygen support, and telemetry monitors for transit stabilization.']
        ],
        'services' => [
            ['title' => 'Trauma & Accident Resuscitation', 'desc' => 'Comprehensive management of multi-system trauma, head injuries, orthopaedic fractures, and severe burns.'],
            ['title' => 'Cardiac Emergency Care', 'desc' => 'Rapid stabilization of myocardial infarction (heart attack), severe arrhythmia, and cardiogenic shock.'],
            ['title' => 'Stroke Care & Thrombolysis', 'desc' => '24/7 scanning and thrombolysis services for acute ischemic strokes within the golden window period.'],
            ['title' => 'Poisoning & Toxicology', 'desc' => 'Immediate gastric lavage, administration of specific antidotes, and intensive systemic monitoring.']
        ],
        'procedures' => [
            'Endotracheal Intubation & Emergency Airway Management',
            'Cardiopulmonary Resuscitation (CPR) & Defibrillation',
            'Tube Thoracostomy (Chest Tube Insertion)',
            'Central Venous Line & Intraosseous Access',
            'FAST (Focused Assessment with Sonography for Trauma)',
            'Emergency Surgical Debridement & Hemostasis'
        ],
        'why_choose_us' => [
            'Operational 24 hours a day, 365 days a year with on-duty emergency physicians.',
            'Directly linked with our modular ICU, dialysis units, and emergency operation theatres.',
            'Adherence to international triage protocols (Red, Yellow, Green zone system).',
            'Advanced imaging and lab services operating 24/7 for swift diagnosis.'
        ],
        'faqs' => [
            ['q' => 'What should I do during a stroke or heart attack emergency?', 'a' => 'Call our emergency hotline at +91 7774 223344 immediately. Do not give the patient food or water. Keep them comfortable, loose-clothed, and wait for our life-support ambulance.'],
            ['q' => 'How does the triage system work?', 'a' => 'Triage prioritizes patients based on the severity of their condition. Critically ill or injured patients (e.g., severe trauma or cardiac arrest) are treated immediately in the Red Zone, while stable conditions may experience brief waits.'],
            ['q' => 'Is an emergency doctor always present?', 'a' => 'Yes. Qualified Emergency Medical Officers and trauma nurses are physically present in the department 24/7.'],
            ['q' => 'Are your ambulances equipped with oxygen and ventilators?', 'a' => 'Yes. Our Advanced Life Support (ALS) ambulances are mobile ICUs equipped with transport ventilators, oxygen cylinders, multipara monitors, and emergency medications.'],
            ['q' => 'Do you coordinate with government health schemes for emergency care?', 'a' => 'Yes. Sankalp Hospital is empanelled with Ayushman Bharat and CGHS, allowing cashless emergency stabilization and surgeries for eligible patients.']
        ]
    ],
    'gynecology' => [
        'title' => 'Obstetrics & Gynecology',
        'tagline' => 'Comprehensive maternal health, painless deliveries, and advanced keyhole surgeries.',
        'icon' => 'fas fa-female',
        'theme_color' => 'var(--secondary-dark)',
        'gradient' => 'family-care',
        'overview' => 'The Obstetrics & Gynecology Department at Sankalp Hospital is dedicated to women’s health throughout every stage of life. From adolescent counseling and prenatal care to high-risk obstetric monitoring, painless deliveries, and advanced minimally invasive laparoscopic surgeries, we ensure comprehensive clinical support. Our compassionate medical team provides a safe, nurturing, and private space for mothers and infants.',
        'features' => [
            ['icon' => 'fas fa-baby-carriage', 'title' => 'Painless Labor Suites', 'desc' => 'Equipped with continuous fetal monitoring systems and epidural analgesia support.'],
            ['icon' => 'fas fa-procedures', 'title' => 'Laparoscopic Gynecology', 'desc' => 'Advanced keyhole surgeries for ovarian cysts, fibroids, and hysterectomy with minimal scarring.'],
            ['icon' => 'fas fa-heartbeat', 'title' => 'High-Risk Pregnancy Unit', 'desc' => 'Dedicated maternal-fetal monitoring for conditions like gestational diabetes and pre-eclampsia.']
        ],
        'services' => [
            ['title' => 'Antenatal & Postnatal Care', 'desc' => 'Comprehensive pregnancy monitoring, routine ultrasounds, nutritional counseling, and post-delivery lactation support.'],
            ['title' => 'Painless Labor & Delivery', 'desc' => 'Epidural services administered by senior anesthesiologists to ensure a comfortable childbirth experience.'],
            ['title' => 'Laparoscopic Surgery', 'desc' => 'Minimally invasive removal of ovarian cysts, uterine fibroids, ectopic pregnancy management, and hysterectomy.'],
            ['title' => 'Menopause & Geriatric Gynecology', 'desc' => 'Hormone replacement therapies, screening for osteoporosis, and preventive gynecological cancer screenings.']
        ],
        'procedures' => [
            'Normal & Assisted Vaginal Delivery',
            'Cesarean Section (C-Section)',
            'Laparoscopic Hysterectomy (TLH)',
            'Laparoscopic Myomectomy (Fibroid Removal)',
            'Diagnostic Hysteroscopy & Laparoscopy',
            'Colposcopy & Pap Smear Screenings'
        ],
        'why_choose_us' => [
            'Headed by highly experienced senior female gynecologists.',
            '24/7 availability for obstetric emergencies, labor care, and emergency C-sections.',
            'Seamless integration with a level-III Neonatal Intensive Care Unit (NICU).',
            'State-of-the-art labor rooms designed for patient comfort and family support.'
        ],
        'faqs' => [
            ['q' => 'What is a high-risk pregnancy?', 'a' => 'A pregnancy is considered high-risk if there are pre-existing health conditions (like diabetes or hypertension), maternal age factors, multiple gestations, or complications that develop during pregnancy requiring close maternal-fetal monitoring.'],
            ['q' => 'Are laparoscopic gynecological surgeries safe?', 'a' => 'Yes. Laparoscopic (keyhole) surgeries are highly safe and preferred. They involve tiny incisions, resulting in significantly less blood loss, minimal post-operative pain, and much faster recovery times than open surgeries.'],
            ['q' => 'What is epidural analgesia (painless delivery)?', 'a' => 'An epidural is a local anesthetic injected into the lower back region near the spinal nerves. It blocks pain pathways during labor while allowing the mother to remain fully awake, active, and push during delivery.'],
            ['q' => 'How often should I get a Pap smear?', 'a' => 'Women aged 21 to 65 are generally recommended to undergo a Pap smear test every 3 years to screen for cervical cancer and pre-cancerous cell changes.'],
            ['q' => 'Do you provide neonatal support after birth?', 'a' => 'Yes. A pediatrician is present at every delivery. For premature or critically ill infants, we have an in-house Level-III Neonatal ICU (NICU) with advanced life support systems.']
        ]
    ],
    'ivf' => [
        'title' => 'Assisted Fertility (IVF Center)',
        'tagline' => 'Advanced reproductive medicine and high-success embryology matching global standards.',
        'icon' => 'fas fa-baby',
        'theme_color' => 'var(--secondary-dark)',
        'gradient' => 'family-care',
        'overview' => 'Sankalp Assisted Fertility (IVF) Center is Ambikapur’s premier facility for reproductive medicine. We offer compassionate, state-of-the-art fertility solutions including IVF, ICSI, IUI, and embryo freezing. Our modular embryology labs feature advanced tri-gas incubators, micromanipulators, and strict cleanroom protocols. We carry a proven track record of over 1,500+ successful IVF births, helping couples realize their dream of parenthood.',
        'features' => [
            ['icon' => 'fas fa-vial', 'title' => 'State-of-the-art Embryo Lab', 'desc' => 'Class 10,000 cleanroom design with high-efficiency particulate air (HEPA) filters for optimal cell culture.'],
            ['icon' => 'fas fa-percentage', 'title' => 'High Success Rates', 'desc' => 'Consistent success rates matching international standards, achieved through personalized treatment protocols.'],
            ['icon' => 'fas fa-heart', 'title' => 'Compassionate Counseling', 'desc' => 'Comprehensive psychological and physical support to guide couples through every step of their fertility journey.']
        ],
        'services' => [
            ['title' => 'In Vitro Fertilization (IVF)', 'desc' => 'Ovarian stimulation, egg retrieval, laboratory fertilization, and precise embryo transfer into the uterus.'],
            ['title' => 'Intracytoplasmic Sperm Injection (ICSI)', 'desc' => 'Micro-manipulation procedure injecting a single high-quality sperm directly into a mature egg for fertilization.'],
            ['title' => 'Intrauterine Insemination (IUI)', 'desc' => 'A less invasive procedure where processed active sperm are placed directly inside the uterus during ovulation.'],
            ['title' => 'Cryopreservation (Freezing)', 'desc' => 'Advanced vitrification techniques to preserve eggs, sperm, and excess embryos for future use.']
        ],
        'procedures' => [
            'Controlled Ovarian Stimulation (COH)',
            'Transvaginal Ultrasound-Guided Egg Retrieval (OPU)',
            'Intracytoplasmic Sperm Injection (ICSI)',
            'Laser-Assisted Hatching of Embryos',
            'Blastocyst Culture (Day-5 Embryo Development)',
            'Frozen Embryo Transfer (FET)'
        ],
        'why_choose_us' => [
            'Over 1,500 successful IVF babies delivered safely under our specialized fertility care.',
            'Employs senior embryologists and reproductive endocrinologists trained in advanced international centers.',
            'Modular, contamination-free embryology labs operating under 24/7 backup.',
            'Complete transparency in clinical procedures, treatment plans, and costing.'
        ],
        'faqs' => [
            ['q' => 'What is the success rate of IVF at Sankalp?', 'a' => 'Our clinical success rate ranges between 55% to 65% per cycle depending on maternal age, medical history, and reproductive factors. This matches the success standards of premier metro city clinics.'],
            ['q' => 'Is IVF treatment physically painful?', 'a' => 'Egg retrieval is performed under light sedation, making it entirely pain-free. Daily hormone injections are administered using thin, user-friendly pens that cause minimal discomfort.'],
            ['q' => 'What is the difference between IVF and ICSI?', 'a' => 'In conventional IVF, thousands of sperm are placed near the egg in a dish to fertilize naturally. In ICSI, a specialist embryologist uses a high-power microscope and micromanipulator to inject one selected healthy sperm directly into the egg.'],
            ['q' => 'How long does one complete IVF cycle take?', 'a' => 'One standard IVF cycle, from the start of ovarian stimulation to embryo transfer, takes approximately 4 to 6 weeks. Additional testing or frozen embryo transfers can modify this duration.'],
            ['q' => 'Can we freeze embryos for future pregnancies?', 'a' => 'Yes. We use advanced vitrification (ultra-rapid cooling) to freeze healthy excess embryos. They can be safely stored for years and thawed for subsequent pregnancy attempts without repeating egg retrieval.']
        ]
    ],
    'surgery' => [
        'title' => 'General & Laparoscopic Surgery',
        'tagline' => 'Minimally invasive keyhole surgical techniques for rapid healing and minimal scarring.',
        'icon' => 'fas fa-procedures',
        'theme_color' => 'var(--primary)',
        'gradient' => 'clinical',
        'overview' => 'Sankalp Hospital’s Surgical Department is a center of excellence for laparoscopic (keyhole) and general surgical procedures. Minimally invasive surgery utilizes small incisions, advanced HD camera systems, and specialized instruments. This translates to reduced blood loss, significantly less post-operative pain, shorter hospital stays, and rapid return to daily work. Our expert surgical team handles a vast range of abdominal and soft-tissue surgeries.',
        'features' => [
            ['icon' => 'fas fa-video', 'title' => 'Ultra-HD Laparoscopic Towers', 'desc' => 'High-resolution visualization of internal abdominal organs for precise surgical dissections.'],
            ['icon' => 'fas fa-door-open', 'title' => 'Day Care Surgery Options', 'desc' => 'Certain minor laparoscopic surgeries allow patients to be admitted, operated on, and discharged on the same day.'],
            ['icon' => 'fas fa-heartbeat', 'title' => 'Modular Operation Theatres', 'desc' => 'Equipped with laminar airflows, absolute HEPA filters, and high-end sterilization to eliminate infection risks.']
        ],
        'services' => [
            ['title' => 'Laparoscopic Cholecystectomy', 'desc' => 'Keyhole removal of the gallbladder for patients suffering from gallstones and acute cholecystitis.'],
            ['title' => 'Hernia Repair (Laparoscopic)', 'desc' => 'Tension-free repair of inguinal, umbilical, and incisional hernias using advanced synthetic meshes.'],
            ['title' => 'Laser Surgery for Proctology', 'desc' => 'Pain-free, bloodless laser treatments for hemorrhoids (piles), anal fissures, and complex fistulas.'],
            ['title' => 'Diabetic Foot & Wound Care', 'desc' => 'Advanced wound debridement, vacuum-assisted dressings, and surgical care for diabetic ulcers.']
        ],
        'procedures' => [
            'Laparoscopic Gallbladder Removal (Cholecystectomy)',
            'Laparoscopic Hernioplasty (TAPP/TEP Meshing)',
            'Laparoscopic Appendectomy (Keyhole Appendix Removal)',
            'Laser Hemorrhoidectomy & Fissurectomy',
            'Surgical Drainage of Deep Tissue Abscesses',
            'Excision of Lipomas, Sebaceous Cysts, and Ganglions'
        ],
        'why_choose_us' => [
            'Led by qualified board-certified MS general and laparoscopic surgeons.',
            'Over 15,000 successful surgeries performed with negligible infection rates.',
            'Equipped with state-of-the-art harmonic scalpels and vessel-sealing instruments.',
            'Provides 24/7 support for acute surgical emergencies like bowel obstructions and appendicitis.'
        ],
        'faqs' => [
            ['q' => 'What is the main benefit of Laparoscopic Surgery?', 'a' => 'Laparoscopic surgery uses small keyhole cuts (5-10mm) instead of a large open incision. This leads to far less tissue damage, reduced pain, minimal scarring, lower risk of wound infections, and recovery in days rather than weeks.'],
            ['q' => 'How long is the hospital stay after keyhole surgery?', 'a' => 'Most laparoscopic patients are discharged within 24 to 48 hours post-operation, compared to 5 to 7 days for traditional open surgeries.'],
            ['q' => 'What are gallstones and is surgery necessary?', 'a' => 'Gallstones are hardened deposits of digestive fluid that form in the gallbladder. If they cause pain, inflammation, or block bile ducts, surgical removal of the gallbladder (cholecystectomy) is the standard and definitive treatment.'],
            ['q' => 'Is laser treatment for piles painful?', 'a' => 'No. Laser proctology procedures are minimally invasive, outpatient treatments performed under sedation or anesthesia. There are no surgical incisions, resulting in very minimal post-op pain and recovery within 24-48 hours.'],
            ['q' => 'Do I need to fast before undergoing a surgery?', 'a' => 'Yes. For any surgery requiring general or regional anesthesia, you must remain completely fasting (nil by mouth, including water) for at least 6 to 8 hours prior to the procedure to prevent anesthetic complications.']
        ]
    ],
    'pediatrics' => [
        'title' => 'Pediatrics & Neonatology',
        'tagline' => 'Dedicated neonatal intensive care and child wellness from infancy to adolescence.',
        'icon' => 'fas fa-child',
        'theme_color' => 'var(--secondary-dark)',
        'gradient' => 'family-care',
        'overview' => 'Sankalp Hospital’s Pediatrics and Neonatology Department offers comprehensive clinical care for infants, children, and teenagers. Our specialized Neonatal ICU (NICU) provides Level-III intensive care for premature babies, low birth weight infants, and critical neonatal conditions. Managed by expert pediatricians and neonatal nurses, we provide immunizations, developmental screenings, pediatric asthma management, and nutritional support in a child-friendly environment.',
        'features' => [
            ['icon' => 'fas fa-baby', 'title' => 'Level-III NICU Support', 'desc' => 'Equipped with advanced incubators, neonatal ventilators, phototherapy units, and surfactant therapies.'],
            ['icon' => 'fas fa-shield-virus', 'title' => 'Immunization Clinics', 'desc' => 'Strict adherence to national and international pediatric vaccination schedules for complete child immunity.'],
            ['icon' => 'fas fa-stethoscope', 'title' => 'Pediatric Emergency Care', 'desc' => '24/7 stabilization of childhood seizures, acute respiratory distress, severe dehydration, and high fevers.']
        ],
        'services' => [
            ['title' => 'Neonatal Intensive Care', 'desc' => 'Round-the-clock care for premature babies (born as early as 28 weeks), respiratory distress, and neonatal jaundice.'],
            ['title' => 'Growth & Development Screening', 'desc' => 'Comprehensive physical, cognitive, and sensory milestones tracking to diagnose developmental delays early.'],
            ['title' => 'Pediatric Asthma & Allergies', 'desc' => 'Pulmonary function assessments, nebulization therapies, and personalized long-term asthma control plans.'],
            ['title' => 'Childhood Nutrition Counseling', 'desc' => 'Dietary planning for childhood obesity, picky eaters, food allergies, and malnutrition disorders.']
        ],
        'procedures' => [
            'Neonatal Mechanical Ventilation & CPAP Support',
            'Surfactant Replacement Therapy for Premature Lungs',
            'Double Volume Exchange Transfusion for Jaundice',
            'Arterial & Venous Cannulation & Umbilical Catheterization',
            'Pediatric Nebulization & Oxygen Administration',
            'Developmental Screening Surveys & Milestone Tracking'
        ],
        'why_choose_us' => [
            'Ambikapur’s leading Level-III NICU facility managed by expert pediatricians.',
            'On-duty pediatric nursing staff trained specifically in handling delicate newborns.',
            'Warm, welcoming, and child-friendly outpatient waiting areas to ease clinic anxiety.',
            'Complete vaccination inventory stored under strict cold-chain compliance.'
        ],
        'faqs' => [
            ['q' => 'What does Level-III NICU mean?', 'a' => 'A Level-III Neonatal Intensive Care Unit (NICU) is an advanced nursery capable of providing continuous life support for extremely premature, low birth weight, and critically ill babies. This includes mechanical ventilation, minor surgeries, and constant vital monitoring.'],
            ['q' => 'Why is post-birth vaccination critical?', 'a' => 'Vaccinations protect children from life-threatening diseases like polio, hepatitis, tuberculosis, measles, and tetanus by safely training their immune system to fight off these infections.'],
            ['q' => 'My child is a very picky eater. When should I consult a pediatrician?', 'a' => 'You should consult a pediatrician if your child’s picky eating is accompanied by poor weight gain, lethargy, frequent illnesses, developmental delays, or if they refuse entire food groups.'],
            ['q' => 'How do I handle high fever in my child at home?', 'a' => 'Keep the child hydrated, sponge them with lukewarm water (never cold water), and give paracetamol drops based strictly on their weight as prescribed by their doctor. Avoid self-medicating and consult a pediatrician immediately if the fever persists or is accompanied by lethargy or vomiting.'],
            ['q' => 'Do you provide neonatal screening after delivery?', 'a' => 'Yes. We conduct comprehensive screenings for all newborns, including tests for congenital hypothyroidism, metabolic disorders, hearing screens, and congenital heart defects.']
        ]
    ],
    'orthopedics' => [
        'title' => 'Orthopaedics & Joint Surgery',
        'tagline' => 'Advanced joint replacements, keyhole arthroscopies, and specialized bone trauma care.',
        'icon' => 'fas fa-bone',
        'theme_color' => 'var(--primary)',
        'gradient' => 'clinical',
        'overview' => 'The Orthopaedics Department at Sankalp Hospital is a premier center for bone, joint, and musculoskeletal care. We specialize in total joint replacements (hip and knee), arthroscopic keyhole ligament repairs (ACL/MCL), spinal surgeries, and complex trauma management. Backed by state-of-the-art modular operation theatres, modern implant technologies, and a dedicated team of physiotherapists, we help patients regain active, pain-free mobility.',
        'features' => [
            ['icon' => 'fas fa-link', 'title' => 'Advanced Joint Replacements', 'desc' => 'High-precision primary and revision knee and hip replacements using imported, bio-compatible implants.'],
            ['icon' => 'fas fa-running', 'title' => 'Sports Medicine & Arthroscopy', 'desc' => 'Keyhole joint surgeries for ligament tears, meniscus injuries, and shoulder instabilities.'],
            ['icon' => 'fas fa-walking', 'title' => 'Specialized Rehabilitation', 'desc' => 'In-house physiotherapy center providing customized post-surgical mobilization protocols.']
        ],
        'services' => [
            ['title' => 'Total Knee Arthroplasty (TKA)', 'desc' => 'Surgical replacement of severely arthritic knee joints to restore movement and eliminate chronic pain.'],
            ['title' => 'Total Hip Arthroplasty (THA)', 'desc' => 'Advanced replacement of damaged hip joints caused by osteoarthritis or avascular necrosis.'],
            ['title' => 'Arthroscopic Ligament Reconstruction', 'desc' => 'Minimally invasive keyhole repair of sports injuries like ACL, PCL, and meniscus tears.'],
            ['title' => 'Complex Trauma & Fractures', 'desc' => '24/7 surgical management of open fractures, joint dislocations, and pelvic-acetabular injuries.']
        ],
        'procedures' => [
            'Total Knee & Hip Replacement Surgeries',
            'Arthroscopic Anterior Cruciate Ligament (ACL) Reconstruction',
            'Closed Reduction & Internal Fixation (CRIF) with Nails/Plates',
            'Spine Lumbar Decompression & Microdiscectomy',
            'Intra-Articular Platelet-Rich Plasma (PRP) Injections',
            'Joint Aspiration & Diagnostic Synovial Fluid Analysis'
        ],
        'why_choose_us' => [
            'Led by orthopedic surgeons carrying over 25+ years of cumulative operating experience.',
            'Equipped with advanced modular orthopedic OTs containing absolute sterile laminar airflows.',
            'Dedicated physical therapy team aiding immediate post-op walking protocols.',
            'Uses top-tier FDA-approved joint implants with long durability.'
        ],
        'faqs' => [
            ['q' => 'How long does a replaced knee joint last?', 'a' => 'Modern knee and hip implants are highly durable. With proper surgical alignment and patient care, over 90% of joint replacements function exceptionally well for 15 to 20 years.'],
            ['q' => 'What is Arthroscopic surgery?', 'a' => 'Arthroscopy is a keyhole surgical technique where an orthopedic surgeon inserts a tiny pencil-sized HD camera (arthroscope) inside a joint through a small incision to diagnose and repair ligament tears, meniscus injuries, or joint wear.'],
            ['q' => 'When is joint replacement surgery recommended?', 'a' => 'It is recommended for patients with advanced joint arthritis who experience severe chronic pain, joint stiffness, and restricted mobility that does not respond to medications, physical therapy, or joint injections.'],
            ['q' => 'How soon can I walk after a total knee replacement?', 'a' => 'Under our advanced recovery protocols, patients are typically helped to stand and take their first steps with a walker under physiotherapist guidance within 24 hours of surgery.'],
            ['q' => 'What is PRP therapy and is it helpful?', 'a' => 'Platelet-Rich Plasma (PRP) therapy uses concentrated platelets from the patient’s own blood. Injected directly into joints, it helps accelerate healing in chronic tendon injuries and mild-to-moderate osteoarthritis.']
        ]
    ],
    'urology' => [
        'title' => 'Urology & Kidney Care',
        'tagline' => 'Advanced laser lithotripsy, prostate surgeries, and specialized renal care.',
        'icon' => 'fas fa-user-md',
        'theme_color' => 'var(--primary)',
        'gradient' => 'clinical',
        'overview' => 'Sankalp Hospital’s Urology and Kidney Care Department is equipped with cutting-edge endourological technologies to treat kidney stones, prostate conditions, and urogenital tract disorders. Our surgical team specializes in minimally invasive laser surgeries (such as PCNL, URSL, and Holmium Laser Prostatectomies) that eliminate the need for large skin cuts. We are dedicated to providing painless, highly effective, and rapid-recovery urosurgical care.',
        'features' => [
            ['icon' => 'fas fa-bolt', 'title' => 'Holmium Laser Stone Removal', 'desc' => 'High-power lasers to pulverize large kidney and bladder stones into dust without surgical incisions.'],
            ['icon' => 'fas fa-procedures', 'title' => 'Laser Prostate Surgery', 'desc' => 'Minimally invasive TURP and laser options for Benign Prostatic Hyperplasia (BPH) with minimal stay.'],
            ['icon' => 'fas fa-tint', 'title' => 'Dialysis Integration', 'desc' => 'Directly linked with our advanced in-house dialysis unit for patients with renal failure.']
        ],
        'services' => [
            ['title' => 'Laser Lithotripsy (PCNL / URSL)', 'desc' => 'Visual endoscopic insertion of thin scopes to break up and remove kidney and ureteric stones using laser energy.'],
            ['title' => 'Prostate Care (TURP)', 'desc' => 'Endoscopic resection of the enlarged prostate gland to restore normal urinary flow in older males.'],
            ['title' => 'Pediatric Urology', 'desc' => 'Surgical correction of congenital urogenital abnormalities in children, such as undescended testes or hypospadias.'],
            ['title' => 'UTI & Incontinence Clinics', 'desc' => 'Comprehensive evaluation and medical therapies for recurrent urinary tract infections and urinary leakage.']
        ],
        'procedures' => [
            'Percutaneous Nephrolithotomy (PCNL) for Large Stones',
            'Ureteroscopic Lithotripsy (URSL) for Ureteric Stones',
            'Transurethral Resection of the Prostate (TURP)',
            'DJ Stent Placement & Cystoscopic Removal',
            'Uroflowmetry & Urodynamic Evaluations',
            'Cystourethroscopy & Bladder Biopsy'
        ],
        'why_choose_us' => [
            'Led by qualified board-certified MCh Urosurgeons.',
            'Equipped with advanced endourology scopes and imported Holmium Laser systems.',
            'Cashless treatments available for Ayushman Bharat and major TPA panels.',
            'Excellent post-operative infection-control protocols.'
        ],
        'faqs' => [
            ['q' => 'What is Laser Lithotripsy (URSL/PCNL)?', 'a' => 'It is a minimally invasive procedure where a thin fiber-optic scope is passed through the natural urinary tract to reach the stone. A laser fiber is then used to blast the stone into tiny sand-like particles that wash out naturally.'],
            ['q' => 'What is Benign Prostatic Hyperplasia (BPH)?', 'a' => 'BPH is a non-cancerous enlargement of the prostate gland common in aging men. It compresses the urethra, causing symptoms like slow urine stream, frequent urination, and difficulty emptying the bladder.'],
            ['q' => 'Is urological laser surgery safe for elderly patients?', 'a' => 'Yes. Laser surgeries (like TURP or URSL) are highly preferred for elderly patients because they involve minimal blood loss, avoid large open cuts, require shorter anesthesia duration, and have rapid recovery.'],
            ['q' => 'What causes recurrent kidney stones?', 'a' => 'Dehydration, diet high in sodium and animal protein, family history, metabolic disorders, and recurrent UTIs are primary causes of kidney stones. Staying well-hydrated is the single best preventive measure.'],
            ['q' => 'Do you provide in-house dialysis support?', 'a' => 'Yes. We operate a modern, sterile dialysis unit with advanced hemodialysis machines, providing cashless support for CGHS and Ayushman patients.']
        ]
    ],
    'psychiatry' => [
        'title' => 'Psychiatry & Mental Health',
        'tagline' => 'Compassionate psychological counseling and medical mental wellness therapies.',
        'icon' => 'fas fa-brain',
        'theme_color' => 'var(--secondary-dark)',
        'gradient' => 'family-care',
        'overview' => 'Sankalp Hospital’s Psychiatry Department provides empathetic, evidence-based mental healthcare. We offer comprehensive evaluations, medical therapies, and clinical counseling for a wide array of mental health concerns, including clinical depression, anxiety disorders, bipolar disorders, and substance addictions. We prioritize absolute patient confidentiality and coordinate with families to support holistic recovery.',
        'features' => [
            ['icon' => 'fas fa-user-shield', 'title' => 'Absolute Confidentiality', 'desc' => 'All evaluations, therapies, and clinical consultations are kept strictly private.'],
            ['icon' => 'fas fa-users', 'title' => 'Family Counseling', 'desc' => 'Specialized therapy sessions involving family members to create supportive recovery environments.'],
            ['icon' => 'fas fa-child', 'title' => 'Pediatric Mental Health', 'desc' => 'Clinical support for childhood ADHD, autism spectrum disorders, and adolescent behavior issues.']
        ],
        'services' => [
            ['title' => 'Anxiety & Depression Therapy', 'desc' => 'Clinical evaluation, psychotherapy, and pharmacological management of mood disorders.'],
            ['title' => 'De-Addiction Support', 'desc' => 'Medically supervised detoxification and counseling for alcohol, nicotine, and drug dependencies.'],
            ['title' => 'Cognitive Behavioral Therapy (CBT)', 'desc' => 'Structured counseling to help patients identify and modify negative thought patterns and behaviors.'],
            ['title' => 'Stress & Sleep Management', 'desc' => 'Specialized therapeutic protocols to treat chronic insomnia, burnouts, and anxiety-driven sleep disorders.']
        ],
        'procedures' => [
            'Psychiatric Diagnostic Profiling',
            'Cognitive Behavioral Therapy (CBT) Sessions',
            'Medical Management of Neurotransmitter Imbalances',
            'Adolescent Behavioral Guidance Counseling',
            'Stress Management & Mindfulness Training Programs',
            'De-Addiction Rehabilitation Counseling'
        ],
        'why_choose_us' => [
            'Led by qualified senior MD psychiatrists with extensive counseling experience.',
            'Integrates medical therapies with psychotherapy for complete mental wellness.',
            'Compassionate, stigma-free environment focusing on restoring patient dignity.',
            'Supportive post-therapy follow-ups to prevent relapses.'
        ],
        'faqs' => [
            ['q' => 'What is the difference between a Psychiatrist and a Psychologist?', 'a' => 'A Psychiatrist is a medical doctor (MD) who can diagnose mental illnesses, prescribe medications, and provide therapies. A Psychologist provides psychotherapy, counseling, and behavioral testing but cannot prescribe medicines.'],
            ['q' => 'Will my mental health treatment be kept confidential?', 'a' => 'Yes. Patient confidentiality is our highest ethical priority. No medical records or details of counseling sessions are shared with anyone without the patient’s explicit consent.'],
            ['q' => 'Are psychiatric medications addictive?', 'a' => 'No. Most modern psychiatric medications (like antidepressants) are non-addictive. Only certain short-term anti-anxiety medicines require careful medical supervision, and our doctors prescribe them under strict guidelines.'],
            ['q' => 'How can I recognize depression in a family member?', 'a' => 'Key signs include persistent sadness, loss of interest in daily activities, changes in appetite or sleep, constant fatigue, social withdrawal, feelings of worthlessness, and difficulty concentrating for over 2 weeks.'],
            ['q' => 'Do you handle behavioral issues in children?', 'a' => 'Yes. We provide clinical evaluations and counseling for pediatric behavioral issues like ADHD, learning disabilities, temper tantrums, and screen addictions.']
        ]
    ],
    'ent' => [
        'title' => 'ENT (Ear, Nose, Throat)',
        'tagline' => 'Specialized endoscopic diagnostics and micro-surgical head & neck care.',
        'icon' => 'fas fa-head-side-cough',
        'theme_color' => 'var(--primary)',
        'gradient' => 'clinical',
        'overview' => 'Sankalp Hospital’s ENT Department provides comprehensive medical and surgical care for disorders of the ear, nose, throat, head, and neck. Utilizing high-resolution diagnostic endoscopes and surgical microscopes, our specialists perform delicate procedures like tonsillectomies, sinus surgeries (FESS), and eardrum repairs. We cater to patients of all ages, helping resolve hearing losses, chronic sinus issues, and swallowing difficulties.',
        'features' => [
            ['icon' => 'fas fa-video', 'title' => 'Endoscopic Diagnostics', 'desc' => 'High-resolution visualization of nasal passages and vocal cords for precise pathology detection.'],
            ['icon' => 'fas fa-microscope', 'title' => 'Micro-Ear Surgeries', 'desc' => 'Precision microsurgery for eardrum repairs and middle ear reconstructions under high magnification.'],
            ['icon' => 'fas fa-baby', 'title' => 'Pediatric ENT Care', 'desc' => 'Gentle clinical management of enlarged tonsils, adenoids, and middle ear fluid accumulations in children.']
        ],
        'services' => [
            ['title' => 'Sinus Management (FESS)', 'desc' => 'Functional Endoscopic Sinus Surgery to treat chronic sinusitis, polyps, and nasal airway obstructions.'],
            ['title' => 'Tonsils & Adenoids Surgery', 'desc' => 'Surgical removal of chronically infected tonsils and adenoids in pediatric and adult patients.'],
            ['title' => 'Hearing Loss Diagnostics', 'desc' => 'Audiometry screenings and clinical management of middle ear infections (otitis media).'],
            ['title' => 'Voice & Swallowing Clinic', 'desc' => 'Evaluation of hoarseness, vocal cord nodules, and swallowing disorders using flexible laryngoscopes.']
        ],
        'procedures' => [
            'Functional Endoscopic Sinus Surgery (FESS)',
            'Tympanoplasty (Eardrum Repair)',
            'Tonsillectomy & Adenoidectomy',
            'Myringotomy & Grommet Insertion (Fluid Drainage)',
            'Flexible Fiberoptic Laryngoscopy (FOL)',
            'Diagnostic Pure Tone Audiometry'
        ],
        'why_choose_us' => [
            'Equipped with modern diagnostic endoscopes and micro-debrider systems.',
            'Performs delicate head and neck surgeries with rapid post-op healing.',
            'Comprehensive post-surgery care and follow-up management.',
            'Collaborative approach with our pediatrics and surgery wings.'
        ],
        'faqs' => [
            ['q' => 'What is FESS surgery?', 'a' => 'Functional Endoscopic Sinus Surgery (FESS) is a minimally invasive surgical procedure that uses thin endoscopes to open up clogged nasal passages and sinus cavities, removing diseased tissue or polyps without external cuts.'],
            ['q' => 'When should tonsils be surgically removed?', 'a' => 'Tonsillectomy is recommended if a child suffers from frequent, recurrent tonsil infections (more than 5-6 times a year), severe breathing difficulty during sleep (sleep apnea), or persistent difficulty swallowing.'],
            ['q' => 'What causes glue ear in children?', 'a' => 'Glue ear occurs when fluid builds up inside the middle ear behind the eardrum, usually due to cold allergies or blocked Eustachian tubes. It causes temporary hearing loss and is treated with medicines or grommet insertion.'],
            ['q' => 'Is snoring dangerous?', 'a' => 'Chronic loud snoring can be a sign of Obstructive Sleep Apnea (OSA), a condition where breathing stops and starts repeatedly during sleep. It causes daytime sleepiness, high blood pressure, and cardiovascular strain, requiring ENT evaluation.'],
            ['q' => 'How is a perforated eardrum treated?', 'a' => 'Small eardrum holes often heal on their own. Larger or chronic perforations require a microscopic surgical repair called Tympanoplasty to prevent recurrent infections and restore hearing.']
        ]
    ],
    'anesthesia' => [
        'title' => 'Department of Anesthesiology',
        'tagline' => 'High-safety peri-operative care, painless labor, and advanced critical pain management.',
        'icon' => 'fas fa-syringe',
        'theme_color' => 'var(--primary)',
        'gradient' => 'clinical',
        'overview' => 'The Department of Anesthesiology at Sankalp Hospital is the foundation of our surgical and critical care services. Our anesthesiologists deliver customized general, regional, and local anesthesia, along with comprehensive post-operative pain relief protocols. We ensure patient safety during complex surgeries by adhering to strict international protocols and real-time vital parameter monitoring.',
        'features' => [
            ['icon' => 'fas fa-heartbeat', 'title' => 'Vitals Monitoring', 'desc' => 'High-end multi-para monitors tracking ECG, blood pressure, oxygenation, and gas delivery in real-time.'],
            ['icon' => 'fas fa-baby', 'title' => 'Painless Labor Support', 'desc' => 'Administers epidural analgesia to make natural childbirth comfortable and stress-free for mothers.'],
            ['icon' => 'fas fa-shield-alt', 'title' => 'Pre-Anesthetic Screenings', 'desc' => 'Detailed profiling (PAC) of every patient prior to surgery to minimize surgical risks.']
        ],
        'services' => [
            ['title' => 'General Anesthesia', 'desc' => 'Delivering complete unconsciousness and pain blocks for major cardiac, neuro, and abdominal surgeries.'],
            ['title' => 'Regional & Spinal Blocks', 'desc' => 'Numbing specific body regions (spinal or nerve blocks) for orthopaedic, urological, and C-section deliveries.'],
            ['title' => 'Chronic Pain Management', 'desc' => 'Specialized clinic providing interventional block therapies for chronic joint pains, sciatica, and cancer pains.'],
            ['title' => 'Monitored Anesthesia Care (MAC)', 'desc' => 'Deep sedation and monitoring during minor diagnostic procedures like endoscopies and biopsies.']
        ],
        'procedures' => [
            'Endotracheal Intubation & General Anesthesia Induction',
            'Subarachnoid Block (Spinal Anesthesia)',
            'Epidural Catheter Placement for Painless Labor',
            'Ultrasound-Guided Regional Nerve Blocks',
            'Intravenous Patient-Controlled Analgesia (PCA) Setup',
            'Pre-Anesthetic Medical Clearance Evaluation'
        ],
        'why_choose_us' => [
            'Led by qualified board-certified MD Anesthesiologists available 24/7.',
            'Equipped with modern anesthesia workstations integrated with ventilators.',
            'Adheres to WHO surgical safety checklists to ensure patient safety.',
            'Maintains a dedicated Acute Pain Service (APS) team for post-op comfort.'
        ],
        'faqs' => [
            ['q' => 'Is anesthesia safe?', 'a' => 'Yes. Modern anesthesia is highly safe due to major advancements in drug safety, monitoring technologies, and training. Our anesthesiologists monitor your vital parameters second-by-second during surgery.'],
            ['q' => 'What is a Pre-Anesthetic Checkup (PAC)?', 'a' => 'A PAC is a medical evaluation performed before surgery. The anesthesiologist reviews your medical history, current medicines, conducts blood tests/ECG, and discusses the best anesthesia option to minimize risks.'],
            ['q' => 'Why must I fast (Nil by Mouth) before anesthesia?', 'a' => 'Anesthesia relaxes your stomach muscles, increasing the risk of stomach contents entering your lungs (aspiration). Fasting for 6 to 8 hours ensures your stomach is empty, ensuring a safe procedure.'],
            ['q' => 'What is the difference between General and Regional Anesthesia?', 'a' => 'General anesthesia makes you completely unconscious and requires breathing support. Regional anesthesia (like spinal blocks) numbs only a specific part of your body (e.g., lower body), allowing you to remain awake and comfortable.'],
            ['q' => 'How is post-operative pain controlled?', 'a' => 'We control pain using a multi-modal approach: nerve blocks, intravenous pain medications, and Patient-Controlled Analgesia (PCA) pumps, where patients can safely self-administer pre-set pain relief doses.']
        ]
    ],
    'oncology' => [
        'title' => 'Onco Surgery & Cancer Care',
        'tagline' => 'Precision tumor resections, biopsies, and comprehensive multidisciplinary cancer therapies.',
        'icon' => 'fas fa-hand-holding-medical',
        'theme_color' => 'var(--primary)',
        'gradient' => 'clinical',
        'overview' => 'Sankalp Hospital’s Onco Surgery and Cancer Care Department provides comprehensive surgical treatment for solid tumors. Our oncological surgeons specialize in precise tumor removals, diagnostic biopsies, and breast-conserving surgeries. We work closely with medical oncologists to coordinate chemotherapy, port placements, and post-surgery rehabilitation, ensuring compassionate, high-quality cancer care.',
        'features' => [
            ['icon' => 'fas fa-shield-alt', 'title' => 'Precise Tumor Resections', 'desc' => 'High-precision surgeries aiming for clear margin removals while preserving healthy organ functions.'],
            ['icon' => 'fas fa-vial', 'title' => 'Advanced Biopsies', 'desc' => 'High-accuracy core needle and excision biopsies to identify exact cancer cell types.'],
            ['icon' => 'fas fa-heartbeat', 'title' => 'Multi-Disciplinary Board', 'desc' => 'Collaborative case discussions between surgeons, oncologists, and pathologists for customized therapy plans.']
        ],
        'services' => [
            ['title' => 'Solid Tumor Resection', 'desc' => 'Surgical removal of malignant tumors in the breast, thyroid, gastrointestinal tract, and soft tissues.'],
            ['title' => 'Chemotherapy Port Placement', 'desc' => 'Surgical insertion of subcutaneous chemo ports to ensure safe, pain-free chemotherapy deliveries.'],
            ['title' => 'Breast Cancer Sparing Surgery', 'desc' => 'Lumpectomies and sentinel lymph node evaluations to treat breast cancer while preserving breast tissues.'],
            ['title' => 'Cancer Screening & Prevention', 'desc' => 'Comprehensive screening packages including mammographies, Pap smears, tumor markers, and biopsies.']
        ],
        'procedures' => [
            'Surgical Excision of Solid Malignant Tumors',
            'Subcutaneous Chemoport Implantation',
            'Sentinel Lymph Node Biopsy (SLNB)',
            'Mastectomy & Breast Reconstruction Counseling',
            'Tru-Cut & Core Needle Diagnostic Biopsies',
            'Palliative Surgical Debulking for Pain Relief'
        ],
        'why_choose_us' => [
            'Qualified board-certified surgical oncology experts coordinating care.',
            'State-of-the-art modular theatres to minimize infection risks during major procedures.',
            'Empanelled with Ayushman Bharat and major TPAs for cashless cancer care.',
            'Compassionate counseling and supportive care for cancer survivors.'
        ],
        'faqs' => [
            ['q' => 'What is the role of surgery in cancer treatment?', 'a' => 'Surgery is often the primary treatment to physically remove localized solid tumors. It is also used to diagnose cancer (biopsy), determine cancer stage, and provide palliative relief from tumor-related pain or obstruction.'],
            ['q' => 'What is a chemotherapy port (chemoport)?', 'a' => 'A chemoport is a small device surgically placed under the skin of the chest. It connects to a large vein, allowing nurses to administer chemotherapy medications and draw blood samples painlessly without repeatedly poking arm veins.'],
            ['q' => 'Does tumor removal surgery cause cancer to spread?', 'a' => 'No. This is a common myth. Surgeons follow strict surgical guidelines and tumor margin principles to ensure the tumor is removed cleanly without breaking or spreading cancer cells.'],
            ['q' => 'What is sentinel lymph node biopsy?', 'a' => 'It is a procedure where the surgeon identifies and removes the first few lymph nodes (sentinel nodes) to which cancer cells are likely to spread from a primary tumor, helping determine if cancer has spread.'],
            ['q' => 'Do you provide chemotherapy services in-house?', 'a' => 'Yes. We coordinate with medical oncologists to provide chemotherapy administration, hydration therapies, and supportive medication management in our dedicated day-care oncology ward.']
        ]
    ]
];

// Category mappings for clinical departments
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

// Color palette config by category (Surgical: Blue, Clinical: Teal, Critical Care: Crimson, Family: Orange)
$catColors = [
    'surgical' => [
        'color' => '#0f5cad',
        'rgb' => '15,92,173',
        'grad' => 'linear-gradient(135deg,#0f5cad,#0b4582)',
        'light' => 'rgba(15,92,173,0.07)',
        'border' => 'rgba(15,92,173,0.15)'
    ],
    'clinical' => [
        'color' => '#00a385',
        'rgb' => '0,163,133',
        'grad' => 'linear-gradient(135deg,#00cca7,#00a385)',
        'light' => 'rgba(0,163,133,0.07)',
        'border' => 'rgba(0,163,133,0.18)'
    ],
    'critical' => [
        'color' => '#e11d48',
        'rgb' => '225,29,72',
        'grad' => 'linear-gradient(135deg,#e11d48,#be123c)',
        'light' => 'rgba(225,29,72,0.07)',
        'border' => 'rgba(225,29,72,0.18)'
    ],
    'family' => [
        'color' => '#ea580c',
        'rgb' => '234,88,12',
        'grad' => 'linear-gradient(135deg,#ea580c,#c2410c)',
        'light' => 'rgba(234,88,12,0.07)',
        'border' => 'rgba(234,88,12,0.18)'
    ],
];
?>