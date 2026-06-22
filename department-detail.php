<?php
if(!isset($deptKey)){$deptKey=$_GET['dept']??'ophthalmology';}
require_once __DIR__.'/includes/departments-data.php';
if(!isset($departments[$deptKey])){$deptKey='ophthalmology';}
$dept=$departments[$deptKey];

$doctorsList=[
    'gynecology'  =>[
        ['name'=>'Dr. Lata Goyal','degrees'=>'MBBS, MS - Obs & Gynaecology','bio'=>'Senior Consultant & IVF Specialist with 15+ years of care in high-risk obstetrics and reproductive endocrinology.','img'=>'lata-goyal.jpg'],
        ['name'=>'Dr. Ankita Bansal Goyal','degrees'=>'MD (Obs & Gynae) - PGIMER CHD, FMAS','bio'=>'Gold-medalist Gynaecologist and pioneer of 3D laparoscopic keyhole surgery in Ambikapur.','img'=>'doc2.png'],
        ['name'=>'Dr. Sukirti Chauhan','degrees'=>'MBBS, MS - Obs & Gynaecology','bio'=>'Specialist Gynecologist expert in maternal health screenings, prenatal checks, and deliveries.','img'=>'doc2.png'],
        ['name'=>'Dr. Vijaya Singh','degrees'=>'MBBS, DGO - Gynecology','bio'=>'Dedicated Gynecologist offering general maternity checkups, out-patient screenings, and normal deliveries.','img'=>'doc1.png']
    ],
    'ivf'         =>[
        ['name'=>'Dr. Lata Goyal','degrees'=>'MBBS, MS - Obs & Gynaecology','bio'=>'Lead reproductive endocrinologist with extensive expertise in IVF stimulation and ART treatments.','img'=>'lata-goyal.jpg'],
        ['name'=>'Dr. Ankita Bansal Goyal','degrees'=>'MD (Obs & Gynae) - PGIMER CHD, FMAS','bio'=>'Clinical embryologist and surgeon specializing in advanced IVF and fertility procedures.','img'=>'doc2.png']
    ],
    'orthopedics' =>[
        ['name'=>'Dr. Tanay Goyal','degrees'=>'MBBS, MS - Orthopaedics','bio'=>'Senior Orthopedic Surgeon specializing in joint replacement, sports trauma, and spinal surgeries.','img'=>'tanay-goyal.jpg']
    ],
    'urology'     =>[
        ['name'=>'On-Call Urology Specialists','degrees'=>'Consultant Urosurgeons','bio'=>'Visiting urologists available for laser kidney stone removal and urinary tract reconstructions.','img'=>'dp']
    ],
    'ophthalmology'=>[
        ['name'=>'Dr. Sanjay Goyal','degrees'=>'MBBS, MS - Ophthalmology','bio'=>'Founder & Senior Eye Surgeon with 25+ years of experience pioneering advanced cataract and LASIK surgeries.','img'=>'doc4.png'],
        ['name'=>'Dr. Akshaya Goyal','degrees'=>'MBBS, MS - Ophthalmology','bio'=>'Consultant Ophthalmologist specializing in modern cataract surgeries and glaucoma therapies.','img'=>'doc2.png']
    ],
    'pediatrics'  =>[
        ['name'=>'Dr. Ankit Gupta','degrees'=>'MBBS, DCH - Pediatrician','bio'=>'Senior Consultant Pediatrician providing comprehensive outpatient child care and NICU support.','img'=>'doc4.png'],
        ['name'=>'Dr. Megha Goyal','degrees'=>'MBBS, MD - Pediatrics','bio'=>'Consultant Neonatologist specialized in level-III NICU care for premature newborns and babies.','img'=>'doc1.png'],
        ['name'=>'Dr. Yuvan Prasannaa','degrees'=>'MBBS, MD - Pediatrics','bio'=>'Consultant Pediatrician providing general pediatric consultations and child growth tracking.','img'=>'doc2.png']
    ],
    'psychiatry'  =>[
        ['name'=>'Dr. Ankit Sharma','degrees'=>'MBBS, MD - Psychiatry','bio'=>'Consultant Psychiatrist providing professional counseling and therapy for stress, anxiety, and depression.','img'=>'doc3.png']
    ],
    'oncology'    =>[
        ['name'=>'Dr. Himanshu Gupta','degrees'=>'MBBS, MD / DNB - Medical Oncology','bio'=>'Cancer & Chemotherapy Specialist coordinating tumor chemotherapies and cancer screening packages.','img'=>'himanshu-gupta.jpg']
    ],
    'surgery'     =>[
        ['name'=>'Dr. Nilesh Goyal','degrees'=>'MBBS, MS - General Surgery','bio'=>'Consultant General and Laparoscopic Surgeon specializing in minimally invasive keyhole procedures.','img'=>'doc3.png'],
        ['name'=>'Dr. Chandra Mukesh Dhawde','degrees'=>'MBBS, MS - Laparoscopic Surgeon','bio'=>'Expert in laparoscopic keyhole surgery, hernia treatment, and general abdominal surgeries.','img'=>'chandra-dhawde.jpg']
    ],
    'emergency'   =>[
        ['name'=>'On-Duty Emergency Team','degrees'=>'Emergency Medical Officers','bio'=>'Qualified trauma nurses and emergency physicians staffed round-the-clock for critical triage.','img'=>'dp']
    ],
    'ent'         =>[
        ['name'=>'Dr. Usha Armo','degrees'=>'MBBS, MS - ENT','bio'=>'Senior ENT Consultant proficient in endoscopic sinus surgeries and micro-ear treatments.','img'=>'doc2.png']
    ],
    'anesthesia'  =>[
        ['name'=>'Dr. Nagaraj G Naik','degrees'=>'DA, DNB - Anaesthesiology','bio'=>'Consultant Anaesthetist and Intensivist coordinating surgical sedation and painless labor protocols.','img'=>'nagaraj-naik.jpg']
    ],
];
$deptDocs=$doctorsList[$deptKey]??[];

$deptImages = [
    'ophthalmology' => 'images/ophthalmology.png',
    'emergency'     => 'images/emergency.png',
    'gynecology'    => 'images/ultrasound.png',
    'ivf'           => 'images/ivf.png',
    'surgery'       => 'images/hero2.png',
    'pediatrics'    => 'images/pediatric.png',
    'orthopedics'   => 'images/orthopedics.png',
    'urology'       => 'images/urology.png',
    'psychiatry'    => 'images/psychiatry.png',
    'ent'           => 'images/ent.png',
    'anesthesia'    => 'images/anesthesia.png',
    'oncology'      => 'images/oncology.png',
];
$deptImage = $deptImages[$deptKey] ?? 'images/hero4.png';

// Dynamic color assignment from category
$cat = $catMap[$deptKey] ?? 'clinical';
$a = $catColors[$cat] ?? $catColors['clinical'];
$ac = $a['color'];
$rgb = $a['rgb'];
$grad = $a['grad'];
$light = $a['light'];
$border = $a['border'];

$sr   = $deptKey==='emergency'?'99.9%':($deptKey==='ivf'?'1,500+':'99.8%');
$srLbl= $deptKey==='emergency'?'Survival Rate':($deptKey==='ivf'?'IVF Babies':'Success Rate');
$odp  = $deptKey==='emergency'?'24/7 Open':($deptKey==='urology'||$deptKey==='psychiatry'?'On-Call':'Daily OPD');

$pageTitle="{$dept['title']} | Sankalp Hospital Ambikapur";
$pageDesc="Sankalp Hospital's {$dept['title']} department – ".substr($dept['overview'],0,150)."...";
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/navbar.php';
?>
<style>
/* ============================================
   SANKALP — DEPT DETAIL — POLISHED THEMED
   Blue/Teal palette · White/Light-Slate bg
   ============================================ */

/* ---- HERO ---- */
.dd-hero{
    position:relative;
    padding:130px 0 0;overflow:hidden;
}
.dd-hero::before{
    content:'';position:absolute;inset:0;
    background:radial-gradient(circle at 80% 20%,rgba(<?php echo $rgb;?>,0.22) 0%,transparent 55%),
               radial-gradient(circle at 10% 75%,rgba(0,204,167,0.12) 0%,transparent 45%);
    z-index: 3;
}
/* Animated ring */
.dd-hero-ring{
    position:absolute;border-radius:50%;
    border:1px solid rgba(255,255,255,0.05);
    top:50%;right:-20%;
    transform:translate(50%,-50%);
    animation:ddRing 10s linear infinite;
}
.dd-hero-ring:nth-child(1){width:500px;height:500px;animation-delay:0s;}
.dd-hero-ring:nth-child(2){width:750px;height:750px;animation-delay:-4s;}
.dd-hero-ring:nth-child(3){width:1000px;height:1000px;animation-delay:-8s;}
@keyframes ddRing{0%,100%{transform:translate(50%,-50%) scale(0.97);opacity:0.4;}50%{transform:translate(50%,-50%) scale(1.03);opacity:0.15;}}

.dd-hero .container{position:relative;z-index:2;}

.dd-breadcrumb{
    display:flex;align-items:center;gap:8px;
    font-size:0.72rem;font-weight:600;
    color:rgba(255,255,255,0.45);
    margin-bottom:20px;
}
.dd-breadcrumb a{color:rgba(255,255,255,0.55);text-decoration:none;transition:color 0.2s;}
.dd-breadcrumb a:hover{color:#fff;}
.dd-breadcrumb i{font-size:0.6rem;}

.dd-dept-badge{
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(<?php echo $rgb;?>,0.2);
    border:1px solid rgba(<?php echo $rgb;?>,0.35);
    color:#fff;font-size:0.7rem;font-weight:700;
    letter-spacing:0.15em;text-transform:uppercase;
    padding:7px 16px;border-radius:50px;margin-bottom:18px;
}
.dd-dept-badge .badge-icon{
    width:20px;height:20px;border-radius:50%;
    background:rgba(<?php echo $rgb;?>,0.3);
    display:flex;align-items:center;justify-content:center;
    font-size:0.65rem;
}

.dd-hero h1{
    font-size:clamp(2rem,5vw,3.6rem);
    font-weight:800;color:#fff;
    letter-spacing:-0.04em;line-height:1.1;
    margin-bottom:14px;
}
.dd-hero-tagline{
    font-size:1.0rem;color:rgba(255,255,255,0.65);
    line-height:1.75;max-width:520px;margin-bottom:30px;
}
.dd-hero-btn{
    display:inline-flex;align-items:center;gap:9px;
    background:#fff;color:var(--primary-dark);
    font-weight:800;font-size:0.88rem;
    padding:13px 28px;border-radius:50px;text-decoration:none;
    box-shadow:0 10px 30px rgba(0,0,0,0.18);
    transition:all 0.35s cubic-bezier(0.16,1,0.3,1);
    margin-right:12px;
}
.dd-hero-btn:hover{transform:translateY(-3px) scale(1.02);box-shadow:0 18px 40px rgba(0,0,0,0.24);color:var(--primary-dark);}
.dd-hero-btn-ghost{
    display:inline-flex;align-items:center;gap:9px;
    background:rgba(255,255,255,0.1);
    border:1.5px solid rgba(255,255,255,0.22);
    color:rgba(255,255,255,0.85);font-weight:600;font-size:0.88rem;
    padding:13px 24px;border-radius:50px;text-decoration:none;
    backdrop-filter:blur(10px);transition:all 0.3s ease;
}
.dd-hero-btn-ghost:hover{background:rgba(255,255,255,0.18);color:#fff;transform:translateY(-2px);}

/* Background Image & Overlay */
.dd-hero-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
}
.dd-hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.85) contrast(1.05);
}
.dd-hero-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    background: linear-gradient(135deg, rgba(8, 47, 92, 0.75) 0%, rgba(15, 92, 173, 0.55) 50%, rgba(<?php echo $rgb;?>, 0.25) 100%);
}
.dd-hero-ring {
    z-index: 3;
}

/* Glassmorphic Static Stats Badges */
.dd-hero-stats-panel {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.dd-floating-badge-static {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 18px;
    padding: 18px 24px;
    display: flex;
    align-items: center;
    gap: 16px;
    color: #fff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}
.dd-floating-badge-static:hover {
    background: rgba(255, 255, 255, 0.13);
    transform: translateY(-3px);
}
.dd-floating-badge-static .badge-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(<?php echo $rgb;?>, 0.25);
    border: 1px solid rgba(<?php echo $rgb;?>, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: #fff;
    flex-shrink: 0;
}
.dd-floating-badge-static .num {
    font-size: 1.55rem;
    font-weight: 850;
    line-height: 1;
    font-family: var(--font-heading);
    letter-spacing: -0.02em;
}
.dd-floating-badge-static .lbl {
    font-size: 0.68rem;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.55);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-top: 4px;
    line-height: 1;
}

/* Hero metric bar */
.dd-hero-bar{
    display:flex;
    border-top:1px solid rgba(255,255,255,0.08);
    background:rgba(0,0,0,0.18);backdrop-filter:blur(8px);
    margin-top:48px;
}
.dd-bar-item{
    flex:1;padding:18px 20px;border-right:1px solid rgba(255,255,255,0.07);
    text-align:center;transition:background 0.25s;cursor:default;
}
.dd-bar-item:hover{background:rgba(255,255,255,0.04);}
.dd-bar-item:last-child{border-right:none;}
.dd-bar-item .n{display:block;font-size:1.4rem;font-weight:800;color:#fff;font-family:var(--font-heading);letter-spacing:-0.04em;line-height:1;margin-bottom:3px;}
.dd-bar-item .l{display:block;font-size:0.6rem;font-weight:600;color:rgba(255,255,255,0.35);text-transform:uppercase;letter-spacing:0.12em;}

/* ---- STICKY SUB-NAV ---- */
.dd-nav{
    background:rgba(255,255,255,0.95);
    backdrop-filter:blur(20px);
    border-bottom:1px solid var(--border-color);
    position:sticky;top:72px;z-index:200;
    box-shadow:0 4px 20px rgba(15,92,173,0.07);
}
.dd-nav ul{display:flex;list-style:none;margin:0;padding:0;overflow-x:auto;scrollbar-width:none;}
.dd-nav ul::-webkit-scrollbar{display:none;}
.dd-nav ul li a{
    display:block;color:var(--text-muted);
    font-size:0.78rem;font-weight:700;letter-spacing:0.04em;text-transform:uppercase;
    padding:16px 22px;text-decoration:none;white-space:nowrap;
    transition:var(--transition);border-bottom:2px solid transparent;
}
.dd-nav ul li a:hover,.dd-nav ul li a.active{color:<?php echo $ac;?>;border-bottom-color:<?php echo $ac;?>;}

/* ---- SECTION COMMON ---- */
.dd-section{padding:72px 0;}
.dd-bg-white{background:#fff;}
.dd-bg-light{background:var(--light-bg);}

.dd-eyebrow{
    display:inline-flex;align-items:center;gap:8px;
    font-size:0.7rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;
    color:<?php echo $ac;?>;margin-bottom:10px;
}
.dd-eyebrow .bar{width:22px;height:2px;background:var(--secondary);border-radius:2px;}
.dd-h2{font-size:clamp(1.6rem,4vw,2.5rem);font-weight:800;color:var(--text-dark);letter-spacing:-0.03em;margin-bottom:12px;}
.dd-sub{font-size:0.95rem;color:var(--text-muted);line-height:1.75;max-width:520px;}

/* Scroll reveal */
.dd-reveal{opacity:0;transform:translateY(36px);transition:opacity 0.7s ease,transform 0.7s cubic-bezier(0.16,1,0.3,1);}
.dd-reveal.in{opacity:1;transform:none;}
.dd-d1{transition-delay:0.1s;}.dd-d2{transition-delay:0.2s;}.dd-d3{transition-delay:0.3s;}

/* ---- OVERVIEW ---- */
.dd-overview-text{font-size:1.0rem;color:var(--text-muted);line-height:1.85;margin-bottom:32px;}
.dd-features{display:flex;flex-direction:column;gap:14px;}
.dd-feat{
    display:flex;gap:16px;align-items:flex-start;
    padding:18px 20px;
    background:#fff;border:1px solid var(--border-color);
    border-radius:14px;transition:all 0.3s ease;
}
.dd-feat:hover{
    border-color:<?php echo $border;?>;
    box-shadow:0 8px 24px <?php echo $light;?>;
    transform:translateX(5px);
}
.dd-feat-ico{
    width:44px;height:44px;border-radius:12px;
    background:<?php echo $light;?>;color:<?php echo $ac;?>;
    border:1px solid <?php echo $border;?>;
    display:flex;align-items:center;justify-content:center;
    font-size:1.1rem;flex-shrink:0;transition:all 0.3s ease;
}
.dd-feat:hover .dd-feat-ico{background:<?php echo $grad;?>;color:#fff;border-color:transparent;transform:rotate(5deg) scale(1.05);}
.dd-feat h5{font-size:0.94rem;font-weight:700;color:var(--text-dark);margin-bottom:3px;}
.dd-feat p{font-size:0.82rem;color:var(--text-muted);line-height:1.6;margin:0;}

/* Contact card (sidebar) */
.dd-contact-card{
    background:<?php echo $grad;?>;border-radius:20px;
    padding:32px;color:#fff;
    box-shadow:0 20px 48px <?php echo str_replace(')',',0.25)',$light);?>;
    position:relative;overflow:hidden;
}
.dd-contact-card::after{
    content:'';position:absolute;
    width:200px;height:200px;border-radius:50%;
    background:rgba(255,255,255,0.07);
    top:-60px;right:-60px;
}
.dd-contact-card h4{font-size:1.2rem;font-weight:800;color:#fff;margin-bottom:10px;position:relative;}
.dd-contact-card p{font-size:0.85rem;color:rgba(255,255,255,0.7);line-height:1.65;margin-bottom:22px;position:relative;}
.dd-contact-tel{
    display:flex;align-items:center;gap:10px;
    color:#fff;font-size:1.3rem;font-weight:900;
    text-decoration:none;margin-bottom:18px;
    position:relative;transition:transform 0.25s ease;
}
.dd-contact-tel:hover{color:#fff;transform:translateX(4px);}
.dd-contact-cta{
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(255,255,255,0.15);border:1.5px solid rgba(255,255,255,0.25);
    color:#fff;font-weight:700;font-size:0.82rem;
    padding:12px 22px;border-radius:50px;text-decoration:none;
    backdrop-filter:blur(8px);position:relative;transition:all 0.3s ease;
}
.dd-contact-cta:hover{background:rgba(255,255,255,0.24);color:#fff;transform:translateY(-2px);}

/* Mini stat cards */
.dd-mini-stats{display:flex;flex-direction:column;gap:10px;margin-top:14px;}
.dd-mini-stat{
    display:flex;align-items:center;gap:14px;
    background:#fff;border:1px solid var(--border-color);
    border-radius:14px;padding:14px 18px;
    box-shadow:var(--shadow-sm);transition:var(--transition);
}
.dd-mini-stat:hover{box-shadow:var(--shadow-md);border-color:<?php echo $border;?>;}
.dd-mini-stat .ico{
    width:40px;height:40px;border-radius:11px;
    background:<?php echo $light;?>;color:<?php echo $ac;?>;
    border:1px solid <?php echo $border;?>;
    display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;
}
.dd-mini-stat .val{font-size:1.15rem;font-weight:800;color:var(--text-dark);font-family:var(--font-heading);letter-spacing:-0.02em;line-height:1;display:block;}
.dd-mini-stat .lbl{font-size:0.68rem;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.08em;}

/* ---- SERVICES ---- */
.dd-services-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;margin-top:40px;}
.dd-svc-card{
    background:#fff;border:1px solid var(--border-color);
    border-radius:16px;padding:28px;
    transition:all 0.35s cubic-bezier(0.4,0,0.2,1);
    position:relative;overflow:hidden;
}
.dd-svc-card::after{
    content:'';position:absolute;
    bottom:0;left:0;right:0;height:2px;
    background:<?php echo $grad;?>;
    transform:scaleX(0);transform-origin:left;transition:transform 0.3s ease;
}
.dd-svc-card:hover{transform:translateY(-5px);box-shadow:0 20px 40px <?php echo $light;?>;border-color:<?php echo $border;?>;}
.dd-svc-card:hover::after{transform:scaleX(1);}
.dd-svc-num{
    font-size:2.5rem;font-weight:900;color:var(--border-color);
    font-family:var(--font-heading);letter-spacing:-0.05em;line-height:1;
    margin-bottom:14px;transition:color 0.3s;
}
.dd-svc-card:hover .dd-svc-num{color:<?php echo $light;?>;}
.dd-svc-title{font-size:1.0rem;font-weight:800;color:var(--text-dark);margin-bottom:10px;letter-spacing:-0.02em;}
.dd-svc-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.65;margin:0;}

/* ---- PROCEDURES ---- */
.dd-proc-split{
    display:grid;grid-template-columns:1fr 1fr;
    border:1px solid var(--border-color);border-radius:20px;overflow:hidden;
    margin-top:40px;
}
.dd-proc-left{background:#fff;padding:36px;border-right:1px solid var(--border-color);}
.dd-proc-right{background:var(--light-bg);padding:36px;}
.dd-proc-header{font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:0.14em;color:var(--text-muted);margin-bottom:18px;}
.dd-proc-item{
    display:flex;align-items:center;gap:12px;
    padding:13px 0;border-bottom:1px solid var(--border-color);
    transition:all 0.25s ease;cursor:default;
}
.dd-proc-item:last-child{border-bottom:none;}
.dd-proc-item:hover{padding-left:6px;}
.dd-proc-idx{font-size:0.6rem;font-weight:800;color:var(--text-muted);min-width:24px;font-family:var(--font-heading);}
.dd-proc-name{font-size:0.88rem;font-weight:600;color:var(--text-dark);flex:1;}
.dd-proc-check{
    width:22px;height:22px;border-radius:50%;
    background:<?php echo $light;?>;color:<?php echo $ac;?>;
    border:1px solid <?php echo $border;?>;
    display:flex;align-items:center;justify-content:center;font-size:0.6rem;flex-shrink:0;
}
.dd-journey-step{padding:20px 0;border-bottom:1px solid var(--border-color);}
.dd-journey-step:last-child{border-bottom:none;}
.dd-js-step-label{
    font-size:0.62rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em;
    color:<?php echo $ac;?>;margin-bottom:7px;display:flex;align-items:center;gap:8px;
}
.dd-js-step-label::before{
    content:'';display:inline-block;width:16px;height:2px;
    background:<?php echo $grad;?>;border-radius:2px;
}
.dd-js-title{font-size:1.0rem;font-weight:800;color:var(--text-dark);letter-spacing:-0.02em;margin-bottom:7px;}
.dd-js-desc{font-size:0.82rem;color:var(--text-muted);line-height:1.65;margin:0;}

/* ---- WHY CHOOSE US ---- */
.dd-why-left-box{
    background:<?php echo $grad;?>;border-radius:22px;
    padding:38px;height:100%;display:flex;flex-direction:column;justify-content:space-between;
    box-shadow:0 24px 50px <?php echo str_replace(')',',0.22)',$light);?>;
    position:relative;overflow:hidden;
}
.dd-why-left-box::before{
    content:'';position:absolute;
    width:240px;height:240px;border-radius:50%;
    background:rgba(255,255,255,0.07);bottom:-60px;right:-60px;
}
.dd-why-h{font-size:1.7rem;font-weight:800;color:#fff;letter-spacing:-0.04em;line-height:1.2;position:relative;margin-bottom:16px;}
.dd-why-p{font-size:0.88rem;color:rgba(255,255,255,0.65);line-height:1.7;position:relative;margin-bottom:0;}
.dd-why-big-stats{display:flex;gap:22px;position:relative;}
.dd-wbs .n{display:block;font-size:2rem;font-weight:900;color:#fff;font-family:var(--font-heading);letter-spacing:-0.04em;line-height:1;}
.dd-wbs .l{font-size:0.62rem;font-weight:600;color:rgba(255,255,255,0.5);text-transform:uppercase;letter-spacing:0.12em;margin-top:3px;display:block;}

.dd-why-items{display:flex;flex-direction:column;gap:12px;}
.dd-why-item{
    display:flex;align-items:flex-start;gap:14px;
    padding:16px 20px;background:#fff;
    border:1px solid var(--border-color);border-radius:14px;
    transition:all 0.3s ease;
}
.dd-why-item:hover{border-color:<?php echo $border;?>;box-shadow:0 8px 24px <?php echo $light;?>;transform:translateX(4px);}
.dd-why-ico{
    width:34px;height:34px;border-radius:10px;flex-shrink:0;
    background:<?php echo $light;?>;color:<?php echo $ac;?>;
    border:1px solid <?php echo $border;?>;
    display:flex;align-items:center;justify-content:center;font-size:0.88rem;
    transition:all 0.3s ease;
}
.dd-why-item:hover .dd-why-ico{background:<?php echo $grad;?>;color:#fff;border-color:transparent;}
.dd-why-txt{font-size:0.88rem;font-weight:600;color:var(--text-dark);line-height:1.55;}

/* ---- DOCTORS ---- */
.dd-doc-card{
    background:#fff;border:1px solid var(--border-color);
    border-radius:18px;overflow:hidden;
    transition:all 0.38s cubic-bezier(0.4,0,0.2,1);
    height:100%;display:flex;flex-direction:column;
    box-shadow:var(--shadow-sm);
}
.dd-doc-card:hover{transform:translateY(-7px);box-shadow:0 24px 50px rgba(15,92,173,0.12);border-color:<?php echo $border;?>;}
.dd-doc-img-wrap{
    height:250px;position:relative;overflow:hidden;
    background:<?php echo $light;?>;
}
.dd-doc-img-wrap img{width:100%;height:100%;object-fit:cover;object-position:top;transition:transform 0.4s ease;}
.dd-doc-card:hover .dd-doc-img-wrap img{transform:scale(1.05);}
.dd-doc-placeholder{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:3.5rem;color:<?php echo $border;?>;}
.dd-doc-status{
    position:absolute;top:12px;left:12px;
    background:rgba(34,197,94,0.92);
    backdrop-filter:blur(8px);color:#fff;
    font-size:0.62rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;
    padding:5px 12px;border-radius:50px;display:flex;align-items:center;gap:5px;
}
.dd-doc-status span{width:5px;height:5px;background:#fff;border-radius:50%;animation:pulseDot 2s infinite;}
.dd-doc-overlay{
    position:absolute;bottom:-50px;left:0;right:0;
    padding:14px;
    background:linear-gradient(0deg,rgba(<?php echo $rgb;?>,0.92) 0%,transparent 100%);
    display:flex;justify-content:center;gap:10px;
    transition:bottom 0.35s ease;
}
.dd-doc-card:hover .dd-doc-overlay{bottom:0;}
.dd-doc-overlay a{
    width:34px;height:34px;border-radius:50%;
    background:rgba(255,255,255,0.2);border:1px solid rgba(255,255,255,0.3);
    color:#fff;font-size:0.85rem;
    display:flex;align-items:center;justify-content:center;
    transition:var(--transition);
}
.dd-doc-overlay a:hover{background:rgba(255,255,255,0.35);transform:translateY(-2px);}
.dd-doc-info{padding:20px;flex:1;display:flex;flex-direction:column;}
.dd-doc-dept{font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:0.12em;color:<?php echo $ac;?>;margin-bottom:5px;}
.dd-doc-name{font-size:1.05rem;font-weight:800;color:var(--text-dark);letter-spacing:-0.02em;margin-bottom:3px;}
.dd-doc-deg{font-size:0.76rem;color:var(--text-muted);margin-bottom:10px;}
.dd-doc-bio{font-size:0.8rem;color:var(--text-muted);line-height:1.6;flex:1;margin-bottom:16px;}
.dd-doc-btn{
    display:flex;align-items:center;justify-content:center;gap:8px;
    padding:10px 18px;border-radius:50px;
    background:<?php echo $light;?>;color:<?php echo $ac;?>;
    font-size:0.8rem;font-weight:700;text-decoration:none;
    border:1.5px solid <?php echo $border;?>;
    transition:all 0.3s cubic-bezier(0.16,1,0.3,1);
}
.dd-doc-btn:hover,.dd-doc-card:hover .dd-doc-btn{
    background:<?php echo $grad;?>;color:#fff;border-color:transparent;
    box-shadow:0 8px 20px <?php echo str_replace(')',',0.28)',$light);?>;
}

/* ---- FAQS ---- */
.dd-faq-item{
    background:#fff;border:1px solid var(--border-color);
    border-radius:14px;overflow:hidden;margin-bottom:10px;
    transition:border-color 0.3s,box-shadow 0.3s;
}
.dd-faq-item.open{border-color:<?php echo $border;?>;box-shadow:0 8px 24px <?php echo $light;?>;}
.dd-faq-btn{
    width:100%;background:none;border:none;
    padding:18px 22px;
    display:flex;align-items:center;gap:12px;
    font-family:var(--font-body);font-size:0.93rem;font-weight:700;
    color:var(--text-dark);cursor:pointer;text-align:left;
    transition:var(--transition);
}
.dd-faq-ico{
    width:30px;height:30px;border-radius:50%;
    background:<?php echo $light;?>;color:<?php echo $ac;?>;
    border:1px solid <?php echo $border;?>;
    display:flex;align-items:center;justify-content:center;font-size:0.75rem;flex-shrink:0;
    transition:all 0.3s ease;
}
.dd-faq-item.open .dd-faq-ico{background:<?php echo $grad;?>;color:#fff;border-color:transparent;transform:rotate(45deg);}
.dd-faq-chev{
    margin-left:auto;width:28px;height:28px;border-radius:50%;
    background:var(--light-bg);border:1px solid var(--border-color);
    color:var(--text-muted);font-size:0.75rem;
    display:flex;align-items:center;justify-content:center;
    flex-shrink:0;transition:all 0.3s ease;
}
.dd-faq-item.open .dd-faq-chev{transform:rotate(180deg);background:<?php echo $light;?>;color:<?php echo $ac;?>;border-color:<?php echo $border;?>;}
.dd-faq-body{
    display:none;padding:0 22px 20px 64px;
    font-size:0.9rem;color:var(--text-muted);line-height:1.8;
    border-top:1px solid var(--border-color);padding-top:16px;
}
.dd-faq-item.open .dd-faq-body{display:block;}

/* ---- APPOINTMENT ---- */
.dd-appt{
    background:linear-gradient(135deg,rgba(15,92,173,0.93),rgba(11,69,130,0.97)),
              url('images/hero1.png') center/cover;
    padding:76px 0;position:relative;overflow:hidden;
}
.dd-appt::before{
    content:'';position:absolute;inset:0;
    background:radial-gradient(circle at 50% 0%,rgba(0,204,167,0.12) 0%,transparent 60%);
}
.dd-appt .container{position:relative;z-index:1;}
.dd-appt-label{font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:0.18em;color:rgba(255,255,255,0.4);margin-bottom:12px;}
.dd-appt-title{font-size:clamp(1.8rem,4vw,2.8rem);font-weight:800;color:#fff;letter-spacing:-0.04em;line-height:1.1;margin-bottom:12px;}
.dd-appt-sub{font-size:0.95rem;color:rgba(255,255,255,0.6);line-height:1.75;margin-bottom:28px;}
.dd-appt-contact{display:flex;align-items:center;gap:14px;margin-bottom:14px;}
.dd-appt-ci{
    width:42px;height:42px;border-radius:50%;
    background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);
    display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,0.65);font-size:0.95rem;flex-shrink:0;
    transition:all 0.25s;
}
.dd-appt-contact:hover .dd-appt-ci{background:rgba(<?php echo $rgb;?>,0.3);border-color:rgba(<?php echo $rgb;?>,0.4);color:#fff;}
.dd-appt-contact .info small{font-size:0.6rem;font-weight:700;text-transform:uppercase;letter-spacing:0.14em;color:rgba(255,255,255,0.35);display:block;}
.dd-appt-contact .info a{font-size:0.95rem;font-weight:800;color:rgba(255,255,255,0.8);text-decoration:none;display:block;transition:color 0.2s;}
.dd-appt-contact .info a:hover{color:#fff;}

/* Form */
.dd-form-box{
    background:rgba(255,255,255,0.96);
    backdrop-filter:blur(20px);
    border:1px solid rgba(255,255,255,0.5);
    border-radius:20px;padding:34px;
    box-shadow:0 30px 60px rgba(0,0,0,0.18);
    color:var(--text-dark);
}
.dd-form-box h4{font-size:1.2rem;font-weight:800;color:var(--text-dark);letter-spacing:-0.02em;margin-bottom:22px;}
.dd-form-lbl{font-size:0.67rem;font-weight:700;text-transform:uppercase;letter-spacing:0.12em;color:var(--text-muted);display:block;margin-bottom:7px;}
.dd-form-ctrl{
    width:100%;padding:13px 16px;
    background:var(--light-bg);border:1.5px solid var(--border-color);
    border-radius:12px;color:var(--text-dark);
    font-size:0.9rem;font-family:var(--font-body);outline:none;
    transition:all 0.3s cubic-bezier(0.16,1,0.3,1);margin-bottom:14px;
}
.dd-form-ctrl:focus{border-color:<?php echo $ac;?>;background:#fff;box-shadow:0 0 0 4px <?php echo $light;?>;}
.dd-form-row{display:grid;grid-template-columns:1fr 1fr;gap:12px;}
.dd-submit{
    width:100%;padding:14px 24px;border-radius:50px;border:none;
    background:<?php echo $grad;?>;color:#fff;
    font-weight:800;font-size:0.9rem;font-family:var(--font-body);
    cursor:pointer;display:flex;align-items:center;justify-content:center;gap:9px;
    box-shadow:0 10px 28px <?php echo str_replace(')',',0.3)',$light);?>;
    transition:all 0.35s cubic-bezier(0.16,1,0.3,1);margin-top:4px;letter-spacing:0.02em;
}
.dd-submit:hover{transform:translateY(-3px) scale(1.02);box-shadow:0 18px 40px <?php echo str_replace(')',',0.42)',$light);?>;}

/* Responsive */
@media(max-width:991px){
    .dd-hero-right{display:none;}
    .dd-services-grid{grid-template-columns:1fr;}
    .dd-proc-split{grid-template-columns:1fr;}
    .dd-proc-left{border-right:none;border-bottom:1px solid var(--border-color);}
    .dd-form-row{grid-template-columns:1fr;}
}
@media(max-width:767px){
    .dd-hero{padding:100px 0 0;}
    .dd-hero h1{font-size:2.2rem; line-height:1.2;}
    .dd-hero-tagline{font-size: 0.95rem; line-height: 1.6;}
    
    .dd-hero-bar{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .dd-bar-item{
        border-bottom:1px solid rgba(255,255,255,0.07);
        padding: 16px 10px;
    }
    .dd-bar-item:nth-child(odd){border-right:1px solid rgba(255,255,255,0.07);}
    .dd-bar-item:nth-child(even){border-right:none;}
    .dd-bar-item:last-child {
        grid-column: 1 / -1;
        border-bottom: none;
        border-right: none;
    }
    
    .dd-nav ul {
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }
    .dd-nav ul::-webkit-scrollbar { display: none; }
    
    .dd-section{padding:50px 0;}
    .dd-h2 { font-size: 1.8rem; }
    .dd-form-box{padding:24px;}
    .dd-doc-img-wrap{height:250px;}
}
</style>

<!-- HERO -->
<section class="dd-hero" id="top">
    <!-- Background Department Image -->
    <div class="dd-hero-bg">
        <img src="<?php echo $deptImage; ?>" alt="<?php echo $dept['title']; ?>">
    </div>
    
    <!-- Gradient Overlay -->
    <div class="dd-hero-overlay"></div>

    <div class="dd-hero-ring"></div><div class="dd-hero-ring"></div><div class="dd-hero-ring"></div>
    
    <div class="container position-relative" style="z-index: 5;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-8">
                <div class="dd-breadcrumb">
                    <a href="index.php">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="departments">Departments</a>
                    <i class="fas fa-chevron-right"></i>
                    <span><?php echo $dept['title']; ?></span>
                </div>
                <div class="dd-dept-badge">
                    <div class="badge-icon"><i class="<?php echo $dept['icon']; ?>"></i></div>
                    Sankalp Hospital · Speciality
                </div>
                <h1><?php echo $dept['title']; ?></h1>
                <p class="dd-hero-tagline"><?php echo $dept['tagline']; ?></p>
                <div class="d-flex flex-wrap gap-3 mb-0">
                    <a href="#appointment" class="dd-hero-btn">
                        <i class="far fa-calendar-check"></i> Book Consultation
                    </a>
                    <a href="tel:+917774223344" class="dd-hero-btn-ghost">
                        <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="dd-hero-stats-panel">
                    <!-- Glassmorphic Stat Badges -->
                    <div class="dd-floating-badge-static">
                        <div class="badge-icon"><i class="fas fa-check-double"></i></div>
                        <div>
                            <div class="num"><?php echo $sr; ?></div>
                            <div class="lbl"><?php echo $srLbl; ?></div>
                        </div>
                    </div>
                    <div class="dd-floating-badge-static">
                        <div class="badge-icon"><i class="fas fa-stethoscope"></i></div>
                        <div>
                            <div class="num"><?php echo count($dept['services']); ?></div>
                            <div class="lbl">Services</div>
                        </div>
                    </div>
                    <div class="dd-floating-badge-static">
                        <div class="badge-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <div class="num"><?php echo $odp; ?></div>
                            <div class="lbl">OPD Status</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dd-hero-bar">
        <div class="container d-flex p-0">
            <div class="dd-bar-item"><span class="n"><?php echo $sr; ?></span><span class="l"><?php echo $srLbl; ?></span></div>
            <div class="dd-bar-item"><span class="n"><?php echo $odp; ?></span><span class="l">OPD Status</span></div>
            <div class="dd-bar-item"><span class="n"><?php echo count($deptDocs)>0?count($deptDocs).'+':'24/7'; ?></span><span class="l">Specialists</span></div>
            <div class="dd-bar-item"><span class="n"><?php echo count($dept['services']); ?>+</span><span class="l">Services</span></div>
            <div class="dd-bar-item"><span class="n"><?php echo count($dept['procedures']); ?></span><span class="l">Procedures</span></div>
        </div>
    </div>
</section>

<!-- STICKY NAV -->
<nav class="dd-nav">
    <ul>
        <li><a href="#overview">Overview</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#procedures">Procedures</a></li>
        <li><a href="#why-choose">Why Us</a></li>
        <li><a href="#doctors">Doctors</a></li>
        <li><a href="#faqs">FAQs</a></li>
        <li><a href="#appointment">Appointment</a></li>
    </ul>
</nav>

<!-- OVERVIEW -->
<section class="dd-section dd-bg-white" id="overview">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-7 dd-reveal">
                <div class="dd-eyebrow"><div class="bar"></div> Clinical Overview</div>
                <h2 class="dd-h2">About <?php echo $dept['title']; ?></h2>
                <p class="dd-overview-text"><?php echo $dept['overview']; ?></p>
                <div class="dd-features">
                    <?php foreach($dept['features'] as $feat): ?>
                    <div class="dd-feat">
                        <div class="dd-feat-ico"><i class="<?php echo $feat['icon']; ?>"></i></div>
                        <div>
                            <h5><?php echo $feat['title']; ?></h5>
                            <p><?php echo $feat['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5 dd-reveal dd-d1">
                <div class="dd-contact-card">
                    <h4>OPD Pre-Registration</h4>
                    <p>Skip the queue — pre-register online and confirm your consultation slot instantly.</p>
                    <a href="tel:+917774223344" class="dd-contact-tel">
                        <i class="fas fa-phone-alt" style="opacity:0.7;font-size:0.95rem;"></i>
                        +91 7774 223344
                    </a>
                    <a href="#appointment" class="dd-contact-cta">
                        <i class="far fa-calendar-check"></i> Register Now
                    </a>
                </div>
                <div class="dd-mini-stats">
                    <div class="dd-mini-stat">
                        <div class="ico"><i class="fas fa-stethoscope"></i></div>
                        <div><span class="val"><?php echo count($dept['services']); ?> Services</span><span class="lbl">Available in department</span></div>
                    </div>
                    <div class="dd-mini-stat">
                        <div class="ico"><i class="fas fa-microscope"></i></div>
                        <div><span class="val"><?php echo count($dept['procedures']); ?> Procedures</span><span class="lbl">Clinical procedures offered</span></div>
                    </div>
                    <div class="dd-mini-stat">
                        <div class="ico"><i class="fas fa-user-md"></i></div>
                        <div><span class="val"><?php echo count($deptDocs)>0?count($deptDocs).'+':'24/7'; ?> Specialists</span><span class="lbl">Expert doctors assigned</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="dd-section dd-bg-light" id="services">
    <div class="container">
        <div class="row mb-2 align-items-end">
            <div class="col-lg-6 dd-reveal">
                <div class="dd-eyebrow"><div class="bar"></div> Our Offerings</div>
                <h2 class="dd-h2">Specialized Medical Services</h2>
            </div>
            <div class="col-lg-6 dd-reveal dd-d1">
                <p class="dd-sub">Comprehensive services tailored for every patient seeking <?php echo $dept['title']; ?> care.</p>
            </div>
        </div>
        <div class="dd-services-grid">
            <?php foreach($dept['services'] as $idx=>$srv): ?>
            <div class="dd-svc-card dd-reveal" style="transition-delay:<?php echo $idx*0.08;?>s;">
                <div class="dd-svc-num">0<?php echo $idx+1; ?></div>
                <div class="dd-svc-title"><?php echo $srv['title']; ?></div>
                <p class="dd-svc-desc"><?php echo $srv['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PROCEDURES -->
<section class="dd-section dd-bg-white" id="procedures">
    <div class="container">
        <div class="row mb-2 align-items-end">
            <div class="col-lg-6 dd-reveal">
                <div class="dd-eyebrow"><div class="bar"></div> Patient Pathway</div>
                <h2 class="dd-h2">Procedures &amp; Clinical Journey</h2>
            </div>
            <div class="col-lg-6 dd-reveal dd-d1">
                <p class="dd-sub">From precise diagnostics to advanced treatment and holistic recovery.</p>
            </div>
        </div>
        <div class="dd-proc-split dd-reveal">
            <div class="dd-proc-left">
                <div class="dd-proc-header">Clinical Procedures Offered</div>
                <?php foreach($dept['procedures'] as $pi=>$proc): ?>
                <div class="dd-proc-item">
                    <span class="dd-proc-idx"><?php echo str_pad($pi+1,2,'0',STR_PAD_LEFT);?></span>
                    <span class="dd-proc-name"><?php echo $proc; ?></span>
                    <div class="dd-proc-check"><i class="fas fa-check"></i></div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="dd-proc-right">
                <div class="dd-proc-header">Your Care Journey</div>
                <div class="dd-journey-step">
                    <div class="dd-js-step-label">Step 01</div>
                    <div class="dd-js-title">Precision Diagnostics</div>
                    <p class="dd-js-desc">Comprehensive assessments, high-resolution scans, and pre-treatment profiling to ensure maximum patient safety and a customized care plan tailored to your needs.</p>
                </div>
                <div class="dd-journey-step">
                    <div class="dd-js-step-label">Step 02</div>
                    <div class="dd-js-title">Advanced Treatment</div>
                    <p class="dd-js-desc">Treatments performed in our Class 10,000 sterile modular OTs with laparoscopy, precision lasers, and state-of-the-art micro-surgical instruments.</p>
                </div>
                <div class="dd-journey-step">
                    <div class="dd-js-step-label">Step 03</div>
                    <div class="dd-js-title">Recovery &amp; Follow-up</div>
                    <p class="dd-js-desc">Structured rehabilitation, pain management, nutritional guidance, and regular follow-up consultations to ensure complete, lasting recovery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="dd-section dd-bg-light" id="why-choose">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-4 dd-reveal">
                <div class="dd-why-left-box">
                    <div>
                        <div class="dd-eyebrow" style="color:rgba(255,255,255,0.55);"><div class="bar" style="background:rgba(255,255,255,0.3);"></div> Why Sankalp</div>
                        <div class="dd-why-h">Why Thousands Trust Sankalp</div>
                        <p class="dd-why-p">Combining advanced technology with compassionate clinical care for outcomes that matter most to you and your family.</p>
                    </div>
                    <div class="dd-why-big-stats">
                        <div class="dd-wbs"><span class="n">15+</span><span class="l">Years</span></div>
                        <div class="dd-wbs"><span class="n">15K+</span><span class="l">Surgeries</span></div>
                        <div class="dd-wbs"><span class="n">99.8%</span><span class="l">Success</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 dd-reveal dd-d1">
                <div class="dd-eyebrow"><div class="bar"></div> Key Advantages</div>
                <h2 class="dd-h2">What Sets Us Apart</h2>
                <div class="dd-why-items mt-4">
                    <?php foreach($dept['why_choose_us'] as $pt): ?>
                    <div class="dd-why-item">
                        <div class="dd-why-ico"><i class="fas fa-check"></i></div>
                        <span class="dd-why-txt"><?php echo $pt; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DOCTORS -->
<section class="dd-section dd-bg-white" id="doctors">
    <div class="container">
        <div class="row mb-2 align-items-end">
            <div class="col-lg-6 dd-reveal">
                <div class="dd-eyebrow"><div class="bar"></div> Our Specialists</div>
                <h2 class="dd-h2">Meet the Medical Experts</h2>
            </div>
            <div class="col-lg-6 dd-reveal dd-d1">
                <p class="dd-sub">Experienced clinicians dedicated to the highest standard of <?php echo $dept['title']; ?> care.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center mt-2">
            <?php foreach($deptDocs as $di=>$doc): ?>
            <div class="col-lg-4 col-md-6 dd-reveal" style="transition-delay:<?php echo $di*0.1;?>s;">
                <div class="dd-doc-card">
                    <div class="dd-doc-img-wrap">
                        <?php if($doc['img']==='dp'): ?>
                        <div class="dd-doc-placeholder"><i class="fas fa-hospital-user"></i></div>
                        <?php else: ?>
                        <img src="images/<?php echo $doc['img'];?>" alt="<?php echo $doc['name'];?>">
                        <?php endif; ?>
                        <div class="dd-doc-status"><span></span> Available Today</div>
                        <div class="dd-doc-overlay">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="mailto:info.sankalpslms@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="dd-doc-info">
                        <div class="dd-doc-dept"><?php echo $dept['title'];?></div>
                        <div class="dd-doc-name"><?php echo $doc['name'];?></div>
                        <div class="dd-doc-deg"><?php echo $doc['degrees'];?></div>
                        <p class="dd-doc-bio"><?php echo $doc['bio'];?></p>
                        <a href="#appointment" class="dd-doc-btn">
                            <i class="far fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQS -->
<section class="dd-section dd-bg-light" id="faqs">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 dd-reveal">
                <div class="dd-eyebrow"><div class="bar"></div> FAQs</div>
                <h2 class="dd-h2">Frequently Asked Questions</h2>
                <p class="dd-sub">Common questions about our <?php echo $dept['title'];?> protocols, answered clearly.</p>
                <div class="mt-4 p-4" style="background:<?php echo $light;?>;border:1px solid <?php echo $border;?>;border-radius:16px;">
                    <div class="dd-eyebrow" style="margin-bottom:8px;"><div class="bar"></div> Need More Help?</div>
                    <p style="font-size:0.85rem;color:var(--text-muted);margin-bottom:14px;line-height:1.65;">Our clinical coordinators are happy to answer any questions not covered here.</p>
                    <a href="#appointment" style="display:inline-flex;align-items:center;gap:7px;font-size:0.82rem;font-weight:700;color:<?php echo $ac;?>;text-decoration:none;">
                        <i class="fas fa-arrow-right"></i> Register a Query
                    </a>
                </div>
            </div>
            <div class="col-lg-8 dd-reveal dd-d1">
                <?php foreach($dept['faqs'] as $fi=>$faq): ?>
                <div class="dd-faq-item<?php echo $fi===0?' open':'';?>">
                    <button class="dd-faq-btn" onclick="ddFaq(this.parentElement)">
                        <div class="dd-faq-ico"><i class="fas fa-plus"></i></div>
                        <span><?php echo $faq['q'];?></span>
                        <div class="dd-faq-chev"><i class="fas fa-chevron-down"></i></div>
                    </button>
                    <div class="dd-faq-body"><?php echo $faq['a'];?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- APPOINTMENT -->
<section class="dd-appt" id="appointment">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 dd-reveal">
                <div class="dd-appt-label"><i class="far fa-calendar-check me-1"></i> Book Now</div>
                <h2 class="dd-appt-title">Schedule Your Appointment</h2>
                <p class="dd-appt-sub">Our team confirms your slot in minutes. Pre-register now and skip the queue.</p>
                <div class="dd-appt-contact">
                    <div class="dd-appt-ci"><i class="fas fa-headset"></i></div>
                    <div class="info"><small>OPD Registration Desk</small><a href="tel:+919584889068">+91 95848 89068</a></div>
                </div>
                <div class="dd-appt-contact">
                    <div class="dd-appt-ci"><i class="fas fa-envelope"></i></div>
                    <div class="info"><small>Email Support</small><a href="mailto:info.sankalpslms@gmail.com">info.sankalpslms@gmail.com</a></div>
                </div>
                <div class="dd-appt-contact">
                    <div class="dd-appt-ci"><i class="fas fa-ambulance"></i></div>
                    <div class="info"><small>Emergency 24/7</small><a href="tel:+917774223344">+91 7774 223344</a></div>
                </div>
            </div>
            <div class="col-lg-7 dd-reveal dd-d1">
                <div class="dd-form-box">
                    <h4><i class="far fa-calendar-check me-2" style="color:<?php echo $ac;?>;"></i> Consultation Pre-Registration</h4>
                    <form id="dd-booking-form">
                        <label class="dd-form-lbl">Target Specialty</label>
                        <select class="dd-form-ctrl" required>
                            <option value="<?php echo $deptKey;?>" selected><?php echo $dept['title'];?></option>
                            <option>Ophthalmology (Eye Care)</option>
                            <option>Emergency &amp; Trauma</option>
                            <option>Obstetrics &amp; Gynecology</option>
                            <option>Assisted Fertility (IVF)</option>
                            <option>General &amp; Laparoscopic Surgery</option>
                            <option>Pediatrics &amp; Neonatology</option>
                            <option>Orthopaedics &amp; Joint Surgery</option>
                            <option>Urology &amp; Kidney Care</option>
                            <option>Psychiatry &amp; Mental Health</option>
                            <option>ENT (Ear, Nose, Throat)</option>
                            <option>Department of Anesthesia</option>
                            <option>Onco Surgery (Cancer Care)</option>
                        </select>
                        <label class="dd-form-lbl">Consultant Doctor</label>
                        <select class="dd-form-ctrl" required>
                            <option value="">Select Specialist</option>
                            <?php foreach($deptDocs as $d): ?>
                            <option><?php echo $d['name'];?> (<?php echo explode(' – ',$d['degrees'])[0];?>)</option>
                            <?php endforeach; ?>
                        </select>
                        <div class="dd-form-row">
                            <div>
                                <label class="dd-form-lbl">Patient Name</label>
                                <input type="text" class="dd-form-ctrl" placeholder="Full name" required>
                            </div>
                            <div>
                                <label class="dd-form-lbl">Mobile Number</label>
                                <input type="tel" class="dd-form-ctrl" placeholder="10-digit number" required>
                            </div>
                        </div>
                        <button type="submit" class="dd-submit">
                            <i class="far fa-calendar-check"></i> Register Appointment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>
<script>
// Scroll reveal
const revEls=document.querySelectorAll('.dd-reveal');
const revObs=new IntersectionObserver(entries=>{
    entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('in');});
},{threshold:0.07});
revEls.forEach(el=>revObs.observe(el));

// Sticky nav
const navLinks=document.querySelectorAll('.dd-nav a');
const secObs=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
        if(e.isIntersecting){
            navLinks.forEach(a=>a.classList.remove('active'));
            const l=document.querySelector(`.dd-nav a[href="#${e.target.id}"]`);
            if(l)l.classList.add('active');
        }
    });
},{threshold:0.25});
document.querySelectorAll('section[id]').forEach(s=>secObs.observe(s));

// FAQ
function ddFaq(item){
    const open=item.classList.contains('open');
    document.querySelectorAll('.dd-faq-item.open').forEach(i=>i.classList.remove('open'));
    if(!open)item.classList.add('open');
}

// Form submit
document.getElementById('dd-booking-form').addEventListener('submit',function(e){
    e.preventDefault();
    const btn=this.querySelector('.dd-submit');
    const orig=btn.innerHTML;
    btn.innerHTML='<i class="fas fa-check-circle"></i> Appointment Registered!';
    btn.style.background='linear-gradient(135deg,#22c55e,#16a34a)';
    btn.style.boxShadow='0 10px 28px rgba(34,197,94,0.35)';
    setTimeout(()=>{btn.innerHTML=orig;btn.style.background='';btn.style.boxShadow='';this.reset();},3500);
});
</script>
