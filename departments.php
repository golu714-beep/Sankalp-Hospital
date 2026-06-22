<?php
$pageTitle = "Clinical Departments | Sankalp Hospital Ambikapur";
$pageDesc  = "Explore 12 world-class specialty departments at Sankalp Hospital — IVF, Eye Care, Emergency, Gynecology, Pediatrics and more.";
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
require_once __DIR__ . '/includes/departments-data.php';

$catLabels = [
    'surgical'=>['label'=>'Surgical','icon'=>'fa-procedures','color'=>'#0f5cad'],
    'clinical'=>['label'=>'Clinical','icon'=>'fa-stethoscope','color'=>'#00a385'],
    'critical'=>['label'=>'Critical Care','icon'=>'fa-ambulance','color'=>'#e11d48'],
    'family'  =>['label'=>'Family','icon'=>'fa-baby-carriage','color'=>'#ea580c'],
];

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
?>
<style>
/* =============================================
   SANKALP — DEPARTMENTS LISTING — POLISHED
   Site theme: Blue/Teal, White/Light-Slate bg
   ============================================= */

/* HERO */
.dp-hero {
    position: relative;
    background: linear-gradient(135deg, var(--primary-dark) 0%, #082f5c 40%, var(--primary) 100%);
    padding: 140px 0 0;
    overflow: hidden;
    color: #fff;
}
.dp-hero-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.06);
    top: 50%; left: 50%;
    transform: translate(-50%,-50%);
    animation: ringPulse 8s linear infinite;
}
.dp-hero-ring:nth-child(1){width:600px;height:600px;animation-delay:0s;}
.dp-hero-ring:nth-child(2){width:900px;height:900px;animation-delay:-3s;}
.dp-hero-ring:nth-child(3){width:1200px;height:1200px;animation-delay:-6s;}
@keyframes ringPulse{
    0%{opacity:0.5;transform:translate(-50%,-50%) scale(0.95);}
    50%{opacity:0.15;transform:translate(-50%,-50%) scale(1.02);}
    100%{opacity:0.5;transform:translate(-50%,-50%) scale(0.95);}
}
.dp-hero::before{
    content:'';position:absolute;inset:0;
    background:radial-gradient(circle at 80% 20%,rgba(0,204,167,0.18) 0%,transparent 55%),
               radial-gradient(circle at 10% 70%,rgba(0,204,167,0.08) 0%,transparent 45%);
}
.dp-hero .container{position:relative;z-index:2;}

.dp-hero-badge {
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(0,204,167,0.15);
    border:1px solid rgba(0,204,167,0.3);
    color:var(--secondary);
    font-size:0.7rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;
    padding:7px 18px;border-radius:50px;margin-bottom:24px;
}
.dp-hero-badge .pulse-dot{
    width:7px;height:7px;background:var(--secondary);border-radius:50%;
    animation:pulseDot 2s infinite;
}
@keyframes pulseDot{0%,100%{transform:scale(1);opacity:1;}50%{transform:scale(0.6);opacity:0.4;}}

.dp-hero h1{
    font-size:clamp(2.2rem,5vw,3.8rem);
    font-weight:800;color:#fff;
    line-height:1.1;letter-spacing:-0.04em;
    margin-bottom:18px;
}
.dp-hero h1 span{
    background:linear-gradient(90deg,var(--secondary) 0%,#00f0c8 100%);
    -webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;
}
.dp-hero-sub{
    font-size:1.05rem;color:rgba(255,255,255,0.65);
    line-height:1.75;max-width:480px;margin-bottom:32px;
}
.dp-hero-actions{display:flex;flex-wrap:wrap;gap:12px;margin-bottom:0;}
.dp-btn-white{
    display:inline-flex;align-items:center;gap:9px;
    background:#fff;color:var(--primary);
    font-weight:700;font-size:0.88rem;
    padding:13px 28px;border-radius:50px;text-decoration:none;
    box-shadow:0 8px 24px rgba(0,0,0,0.15);
    transition:all 0.3s cubic-bezier(0.16,1,0.3,1);
}
.dp-btn-white:hover{transform:translateY(-3px) scale(1.02);box-shadow:0 16px 36px rgba(0,0,0,0.2);color:var(--primary);}
.dp-btn-ghost{
    display:inline-flex;align-items:center;gap:9px;
    background:rgba(255,255,255,0.1);
    border:1.5px solid rgba(255,255,255,0.25);
    color:#fff;font-weight:600;font-size:0.88rem;
    padding:13px 26px;border-radius:50px;text-decoration:none;
    backdrop-filter:blur(10px);
    transition:all 0.3s ease;
}
.dp-btn-ghost:hover{background:rgba(255,255,255,0.18);color:#fff;transform:translateY(-2px);}

/* Hero right: big stat display */
.dp-hero-stats-panel{
    display:flex;flex-direction:column;gap:12px;
}
.dp-hero-stat-card{
    background:rgba(255,255,255,0.07);
    border:1px solid rgba(255,255,255,0.12);
    border-radius:18px;
    padding:20px 24px;
    backdrop-filter:blur(12px);
    display:flex;align-items:center;gap:16px;
    transition:transform 0.3s ease,background 0.3s ease;
}
.dp-hero-stat-card:hover{background:rgba(255,255,255,0.12);transform:translateX(-5px);}
.dp-stat-icon{
    width:48px;height:48px;border-radius:14px;
    background:rgba(0,204,167,0.2);
    border:1px solid rgba(0,204,167,0.3);
    display:flex;align-items:center;justify-content:center;
    font-size:1.2rem;color:var(--secondary);flex-shrink:0;
}
.dp-stat-num{font-size:1.8rem;font-weight:800;color:#fff;font-family:var(--font-heading);letter-spacing:-0.04em;line-height:1;}
.dp-stat-label{font-size:0.7rem;font-weight:600;color:rgba(255,255,255,0.45);text-transform:uppercase;letter-spacing:0.1em;margin-top:3px;}

/* Background Slideshow & Overlays */
.dp-hero-bg-slider {
    position: absolute;
    inset: 0;
    z-index: 1;
}
.dp-hero-slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 1.5s ease-in-out;
    z-index: 1;
}
.dp-hero-slide.active {
    opacity: 1;
    z-index: 2;
}
.dp-hero-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.85) contrast(1.05);
}
.dp-hero-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    background: linear-gradient(135deg, rgba(8, 47, 92, 0.75) 0%, rgba(15, 92, 173, 0.55) 50%, rgba(0, 204, 167, 0.25) 100%);
}
.dp-hero-ring {
    z-index: 3;
}

/* Glassmorphic Static Stats Badges */
.dp-hero-stats-panel {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.dp-floating-badge-static {
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
.dp-floating-badge-static:hover {
    background: rgba(255, 255, 255, 0.13);
    transform: translateY(-3px);
}
.dp-floating-badge-static .badge-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: rgba(0, 204, 167, 0.2);
    border: 1px solid rgba(0, 204, 167, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: var(--secondary);
    flex-shrink: 0;
}
.dp-floating-badge-static .num {
    font-size: 1.55rem;
    font-weight: 850;
    line-height: 1;
    font-family: var(--font-heading);
    letter-spacing: -0.02em;
}
.dp-floating-badge-static .lbl {
    font-size: 0.68rem;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.55);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-top: 4px;
    line-height: 1;
}

/* Hero bottom metric bar */
.dp-hero-metrics{
    display:flex;
    border-top:1px solid rgba(255,255,255,0.08);
    background:rgba(0,0,0,0.15);
    backdrop-filter:blur(8px);
    margin-top:48px;
}
.dp-metric{flex:1;padding:20px 24px;border-right:1px solid rgba(255,255,255,0.07);text-align:center;}
.dp-metric:last-child{border-right:none;}
.dp-metric .mn{display:block;font-size:1.55rem;font-weight:800;color:#fff;font-family:var(--font-heading);letter-spacing:-0.04em;line-height:1;margin-bottom:4px;}
.dp-metric .ml{display:block;font-size:0.63rem;font-weight:600;color:rgba(255,255,255,0.35);text-transform:uppercase;letter-spacing:0.12em;}

/* FILTER BAR */
.dp-filter-bar{
    background:#fff;
    border-bottom:1px solid var(--border-color);
    padding:18px 0;
    position:sticky;top:72px;z-index:100;
    box-shadow:0 4px 24px rgba(15,92,173,0.07);
}
.dp-filter-bar .container{display:flex;align-items:center;gap:14px;flex-wrap:wrap;}
.dp-search-wrap{position:relative;flex:1;min-width:200px;max-width:300px;}
.dp-search-wrap i{position:absolute;left:14px;top:50%;transform:translateY(-50%);color:var(--text-muted);font-size:0.88rem;}
.dp-search-input{
    width:100%;padding:11px 14px 11px 40px;
    background:var(--light-bg);border:1.5px solid var(--border-color);
    border-radius:50px;font-size:0.85rem;font-family:var(--font-body);
    color:var(--text-dark);outline:none;transition:var(--transition);
}
.dp-search-input:focus{border-color:var(--primary);background:#fff;box-shadow:0 0 0 4px rgba(15,92,173,0.08);}
.dp-filter-btns{display:flex;gap:8px;flex-wrap:wrap;}
.dp-filter-btn{
    background:var(--light-bg);border:1.5px solid var(--border-color);
    color:var(--text-muted);font-size:0.78rem;font-weight:700;
    padding:9px 18px;border-radius:50px;cursor:pointer;
    font-family:var(--font-body);transition:var(--transition);
    display:inline-flex;align-items:center;justify-content:center;gap:6px;
    white-space:nowrap;
    flex-wrap:nowrap;
    flex-shrink:0;
}
.dp-filter-btn:hover{border-color:var(--primary);color:var(--primary);background:rgba(15,92,173,0.04);}
.dp-filter-btn.active{
    background:linear-gradient(135deg,var(--primary),var(--primary-dark));
    border-color:var(--primary-dark);color:#fff;
    box-shadow:0 4px 14px rgba(15,92,173,0.28);
}
.dp-count-badge{
    background:rgba(255,255,255,0.2);
    border-radius:50px;padding:1px 7px;font-size:0.68rem;
}
.dp-filter-btn.active .dp-count-badge{background:rgba(255,255,255,0.2);}
.dp-filter-btn:not(.active) .dp-count-badge{background:rgba(15,92,173,0.08);color:var(--primary);}

/* DEPARTMENTS GRID */
.dp-grid-section{background:var(--light-bg);padding:64px 0 80px;}
.dp-grid-header{margin-bottom:48px;}
.dp-eyebrow{
    display:inline-flex;align-items:center;gap:8px;
    font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.15em;
    color:var(--primary);margin-bottom:10px;
}
.dp-eyebrow .bar{width:24px;height:2px;background:var(--secondary);border-radius:2px;}
.dp-grid-h2{font-size:clamp(1.6rem,4vw,2.5rem);font-weight:800;color:var(--text-dark);letter-spacing:-0.03em;margin-bottom:10px;}
.dp-grid-sub{font-size:0.95rem;color:var(--text-muted);max-width:500px;line-height:1.7;}

/* Department card */
.dp-dept-card{
    background:#fff;
    border:1px solid var(--border-color);
    border-radius:20px;
    overflow:hidden;
    transition:all 0.38s cubic-bezier(0.4,0,0.2,1);
    height:100%;
    display:flex;flex-direction:column;
    box-shadow:0 2px 8px rgba(15,92,173,0.04);
    position:relative;
}
.dp-dept-card:hover{
    transform:translateY(-7px);
    box-shadow:0 24px 48px rgba(15,92,173,0.13);
    border-color:rgba(15,92,173,0.15);
}
.dp-card-accent-bar{height:3px;width:100%;transition:height 0.25s ease;}
.dp-dept-card:hover .dp-card-accent-bar{height:4px;}

.dp-card-image-wrap {
    width: 100%;
    height: 180px;
    overflow: hidden;
    position: relative;
    background: #e2e8f0;
}
.dp-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.dp-dept-card:hover .dp-card-img {
    transform: scale(1.06);
}

.dp-card-body{padding:26px 24px 20px;flex:1;display:flex;flex-direction:column;}

.dp-card-head{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:16px;}
.dp-card-icon{
    width:52px;height:52px;border-radius:14px;
    display:flex;align-items:center;justify-content:center;
    font-size:1.3rem;border:1px solid transparent;
    transition:var(--transition);
}
.dp-dept-card:hover .dp-card-icon{transform:scale(1.1) rotate(5deg);}

.dp-cat-pill{
    display:inline-flex;align-items:center;gap:5px;
    font-size:0.65rem;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;
    color:var(--text-muted);background:var(--light-bg);
    border:1.5px solid var(--border-color);
    padding:5px 11px;border-radius:50px;
}
.dp-cat-dot{width:6px;height:6px;border-radius:50%;}

.dp-card-title{font-size:1.1rem;font-weight:800;color:var(--text-dark);letter-spacing:-0.02em;margin-bottom:7px;line-height:1.3;}
.dp-card-tagline{font-size:0.82rem;color:var(--text-muted);line-height:1.65;flex:1;margin-bottom:18px;
    display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;}

/* Service chips */
.dp-chips{display:flex;flex-wrap:wrap;gap:5px;margin-bottom:16px;}
.dp-chip{
    font-size:0.68rem;font-weight:600;color:var(--text-muted);
    background:var(--light-bg);border:1px solid var(--border-color);
    padding:3px 10px;border-radius:50px;
    transition:var(--transition);
}
.dp-dept-card:hover .dp-chip{color:var(--primary);border-color:rgba(15,92,173,0.18);background:rgba(15,92,173,0.04);}

/* Stats strip */
.dp-stats-strip{
    display:flex;background:var(--light-bg);
    border:1px solid var(--border-color);border-radius:12px;
    overflow:hidden;margin-bottom:18px;
}
.dp-stat-box{flex:1;padding:11px 8px;text-align:center;border-right:1px solid var(--border-color);}
.dp-stat-box:last-child{border-right:none;}
.dp-stat-box .sn{display:block;font-size:1.0rem;font-weight:800;font-family:var(--font-heading);letter-spacing:-0.02em;line-height:1;margin-bottom:2px;}
.dp-stat-box .sl{display:block;font-size:0.58rem;font-weight:600;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.08em;}

/* Explore link */
.dp-explore-link{
    display:flex;align-items:center;justify-content:space-between;
    padding:12px 16px;border-radius:12px;
    font-size:0.83rem;font-weight:700;
    color:var(--primary);
    background:rgba(15,92,173,0.05);
    border:1.5px solid rgba(15,92,173,0.1);
    text-decoration:none;transition:var(--transition);
}
.dp-explore-link:hover,.dp-dept-card:hover .dp-explore-link{
    background:linear-gradient(135deg,var(--primary),var(--primary-dark));
    color:#fff;border-color:transparent;
    box-shadow:0 8px 20px rgba(15,92,173,0.28);
}
.dp-arrow-wrap{
    width:28px;height:28px;border-radius:50%;
    background:rgba(15,92,173,0.1);
    display:flex;align-items:center;justify-content:center;font-size:0.72rem;
    transition:var(--transition);
}
.dp-explore-link:hover .dp-arrow-wrap,.dp-dept-card:hover .dp-explore-link .dp-arrow-wrap{
    background:rgba(255,255,255,0.2);transform:translateX(3px);
}

/* No results */
.dp-no-results{grid-column:1/-1;text-align:center;padding:60px 20px;color:var(--text-muted);}
.dp-no-results h3{font-size:1.4rem;font-weight:700;color:var(--text-dark);margin-bottom:8px;}

/* Scroll reveal */
.dp-reveal{opacity:0;transform:translateY(32px);transition:opacity 0.65s ease,transform 0.65s cubic-bezier(0.16,1,0.3,1);}
.dp-reveal.visible{opacity:1;transform:none;}

/* BOTTOM CTA */
.dp-cta{
    background:linear-gradient(135deg,rgba(15,92,173,0.94),rgba(11,69,130,0.97)),
              url('images/hero1.png') center/cover;
    padding:76px 0;text-align:center;
    position:relative;overflow:hidden;
}
.dp-cta::before{
    content:'';position:absolute;inset:0;
    background:radial-gradient(circle at 50% 0%,rgba(0,204,167,0.12) 0%,transparent 60%);
}
.dp-cta .container{position:relative;z-index:1;}
.dp-cta h2{font-size:clamp(1.8rem,4vw,2.8rem);font-weight:800;color:#fff;letter-spacing:-0.03em;margin-bottom:12px;}
.dp-cta h2 span{background:linear-gradient(90deg,var(--secondary),#00f0c8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
.dp-cta p{font-size:0.98rem;color:rgba(255,255,255,0.6);line-height:1.75;max-width:480px;margin:0 auto 36px;}

/* Responsive */
@media(max-width:991px){
    .dp-hero-stats-panel{display:none;}
    .dp-hero h1{font-size:2.4rem;}
    
    .dp-filter-bar .container{flex-direction:column;align-items:stretch;gap:12px;}
    .dp-search-wrap{max-width:100%;}
    .dp-filter-btns{
        display: flex !important;
        flex-wrap: nowrap !important;
        overflow-x: auto !important;
        padding-bottom: 6px;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        margin-left: -15px !important;
        margin-right: -15px !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
    }
    .dp-filter-btns::-webkit-scrollbar { display: none; }
}
@media(max-width:767px){
    .dp-hero{padding:100px 0 0;}
    .dp-hero h1{font-size:2.2rem; line-height:1.2;}
    .dp-hero-sub { font-size: 0.95rem; line-height: 1.6; }
    
    .dp-hero-metrics{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .dp-metric{
        border-bottom:1px solid rgba(255,255,255,0.07);
        padding: 16px 10px;
    }
    .dp-metric:nth-child(odd){border-right:1px solid rgba(255,255,255,0.07);}
    .dp-metric:nth-child(even){border-right:none;}
    .dp-metric:last-child {
        grid-column: 1 / -1;
        border-bottom: none;
        border-right: none;
    }
    
    .dp-grid-section { padding: 50px 0; }
    .dp-grid-h2 { font-size: 1.8rem; }
    .dp-dept-card { padding: 22px; }
    
    .dp-cta { padding: 50px 0; }
    .dp-cta h2 { font-size: 2rem; }
}
</style>

<!-- HERO -->
<section class="dp-hero">
    <!-- Background Slideshow -->
    <div class="dp-hero-bg-slider">
        <div class="dp-hero-slide active">
            <img src="images/hero4.png" alt="Clinical Consultations">
        </div>
        <div class="dp-hero-slide">
            <img src="images/hero2.png" alt="Advanced Operation Theatre">
        </div>
        <div class="dp-hero-slide">
            <img src="images/ultrasound.png" alt="Advanced Diagnostics">
        </div>
        <div class="dp-hero-slide">
            <img src="images/pediatric.png" alt="Pediatric Care">
        </div>
    </div>
    
    <!-- Gradient Overlay -->
    <div class="dp-hero-overlay"></div>

    <div class="dp-hero-ring"></div><div class="dp-hero-ring"></div><div class="dp-hero-ring"></div>
    
    <div class="container position-relative" style="z-index: 5;">
        <div class="row g-5 align-items-center">
            <div class="col-lg-8">
                <div class="dp-hero-badge">
                    <span class="pulse-dot"></span>
                    Sankalp Hospital · Ambikapur
                </div>
                <h1>Expert Care Across<br><span>12 Specialities.</span></h1>
                <p class="dp-hero-sub">Advanced multi-specialty clinical care — from critical emergency trauma to precision IVF — delivered with compassion and cutting-edge technology.</p>
                <div class="dp-hero-actions">
                    <a href="index.php#appointment" class="dp-btn-white">
                        <i class="far fa-calendar-check"></i> Book Consultation
                    </a>
                    <a href="tel:+917774223344" class="dp-btn-ghost">
                        <i class="fas fa-phone-alt"></i> Emergency: 7774 223344
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="dp-hero-stats-panel">
                    <!-- Glassmorphic Stat Badges -->
                    <div class="dp-floating-badge-static">
                        <div class="badge-icon"><i class="fas fa-hospital-alt"></i></div>
                        <div>
                            <div class="num">12</div>
                            <div class="lbl">Specialities</div>
                        </div>
                    </div>
                    <div class="dp-floating-badge-static">
                        <div class="badge-icon"><i class="fas fa-check-circle"></i></div>
                        <div>
                            <div class="num">99.8%</div>
                            <div class="lbl">Success Rate</div>
                        </div>
                    </div>
                    <div class="dp-floating-badge-static">
                        <div class="badge-icon"><i class="fas fa-ambulance"></i></div>
                        <div>
                            <div class="num">24/7</div>
                            <div class="lbl">Emergency</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dp-hero-metrics position-relative" style="z-index: 5;">
        <div class="container d-flex p-0">
            <div class="dp-metric"><span class="mn">12</span><span class="ml">Specialities</span></div>
            <div class="dp-metric"><span class="mn">15+</span><span class="ml">Specialists</span></div>
            <div class="dp-metric"><span class="mn">24/7</span><span class="ml">Emergency</span></div>
            <div class="dp-metric"><span class="mn">99.8%</span><span class="ml">Success Rate</span></div>
            <div class="dp-metric"><span class="mn">1,500+</span><span class="ml">IVF Births</span></div>
        </div>
    </div>
</section>

<!-- FILTER BAR -->
<div class="dp-filter-bar">
    <div class="container">
        <div class="dp-search-wrap">
            <i class="fas fa-search"></i>
            <input type="text" id="dp-search" class="dp-search-input" placeholder="Search departments...">
        </div>
        <div class="dp-filter-btns">
            <button class="dp-filter-btn active" data-filter="all">All <span class="dp-count-badge">12</span></button>
            <button class="dp-filter-btn" data-filter="surgical"><i class="fas fa-procedures"></i> Surgical <span class="dp-count-badge">4</span></button>
            <button class="dp-filter-btn" data-filter="clinical"><i class="fas fa-stethoscope"></i> Clinical <span class="dp-count-badge">5</span></button>
            <button class="dp-filter-btn" data-filter="critical"><i class="fas fa-ambulance"></i> Critical <span class="dp-count-badge">1</span></button>
            <button class="dp-filter-btn" data-filter="family"><i class="fas fa-baby-carriage"></i> Family <span class="dp-count-badge">2</span></button>
        </div>
    </div>
</div>

<!-- DEPARTMENTS GRID -->
<section class="dp-grid-section" id="departments-hub">
    <div class="container">
        <div class="dp-grid-header">
            <div class="dp-eyebrow"><div class="bar"></div> Our Care Matrix</div>
            <h2 class="dp-grid-h2">Explore Our Specialty Departments</h2>
            <p class="dp-grid-sub">Choose your specialty below to explore services, our specialist team, and treatment protocols.</p>
        </div>

        <div class="row g-4" id="departments-grid">
            <?php foreach($departments as $key => $dept):
                $cat  = $catMap[$key] ?? 'clinical';
                $col  = $catColors[$cat] ?? $catColors['clinical'];
                $catL = $catLabels[$cat];
                $accent = $col['color'];
                $lightBg = $col['light'];
                $sr = $key==='emergency'?'24/7':($key==='ivf'?'1,500+':'99.8%');
                $srLbl = $key==='emergency'?'Always On':($key==='ivf'?'Babies Born':'Success Rate');
            ?>
            <div class="col-xl-4 col-md-6 dp-grid-item filter-<?php echo $cat; ?> dp-reveal"
                 data-title="<?php echo strtolower($dept['title']); ?>"
                 data-tagline="<?php echo strtolower($dept['tagline']); ?>"
                 data-services="<?php echo strtolower(implode(' ',array_map(fn($s)=>$s['title'],$dept['services']))); ?>">
                <div class="dp-dept-card">
                    <div class="dp-card-accent-bar" style="background:linear-gradient(90deg,<?php echo $accent; ?>,<?php echo $accent; ?>99);"></div>
                    <?php 
                        $cardImg = $deptImages[$key] ?? 'images/hero4.png';
                    ?>
                    <div class="dp-card-image-wrap">
                        <img src="<?php echo $cardImg; ?>" alt="<?php echo $dept['title']; ?>" class="dp-card-img" loading="lazy">
                    </div>
                    <div class="dp-card-body">
                        <div class="dp-card-head">
                            <div class="dp-card-icon" style="background:<?php echo $lightBg; ?>;color:<?php echo $accent; ?>;border-color:<?php echo $lightBg; ?>;">
                                <i class="<?php echo $dept['icon']; ?>"></i>
                            </div>
                            <div class="dp-cat-pill">
                                <span class="dp-cat-dot" style="background:<?php echo $catL['color']; ?>;"></span>
                                <?php echo $catL['label']; ?>
                            </div>
                        </div>

                        <div class="dp-card-title"><?php echo $dept['title']; ?></div>
                        <div class="dp-card-tagline"><?php echo $dept['tagline']; ?></div>

                        <div class="dp-chips">
                            <?php $c=0; foreach($dept['services'] as $s): if($c>=3)break; ?>
                            <span class="dp-chip"><?php echo $s['title']; ?></span>
                            <?php $c++; endforeach; ?>
                        </div>

                        <div class="dp-stats-strip">
                            <div class="dp-stat-box">
                                <span class="sn" style="color:<?php echo $accent; ?>;"><?php echo $sr; ?></span>
                                <span class="sl"><?php echo $srLbl; ?></span>
                            </div>
                            <div class="dp-stat-box">
                                <span class="sn"><?php echo count($dept['services']); ?>+</span>
                                <span class="sl">Services</span>
                            </div>
                            <div class="dp-stat-box">
                                <span class="sn"><?php echo count($dept['procedures']); ?></span>
                                <span class="sl">Procedures</span>
                            </div>
                        </div>

                        <a href="<?php echo $key; ?>" class="dp-explore-link">
                            <span>Explore Department</span>
                            <div class="dp-arrow-wrap"><i class="fas fa-arrow-right"></i></div>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="col-12 dp-no-results" id="dp-no-results" style="display:none;">
                <h3>No departments found</h3>
                <p>Try a different search term or filter.</p>
            </div>
        </div>
    </div>
</section>

<!-- BOTTOM CTA -->
<section class="dp-cta">
    <div class="container">
        <h2>Not Sure Which <span>Department</span> You Need?</h2>
        <p>Our patient care team is available 24/7 to guide you to the right specialist for your condition.</p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="index.php#appointment" class="btn-primary"><i class="far fa-calendar-check"></i> Book Consultation</a>
            <a href="tel:+917774223344" class="btn-secondary"><i class="fas fa-phone-alt"></i> Emergency: 7774 223344</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

<script>
// Scroll reveal
const revEls = document.querySelectorAll('.dp-reveal');
const revObs = new IntersectionObserver(entries => {
    entries.forEach((e,i) => {
        if(e.isIntersecting){
            setTimeout(()=>e.target.classList.add('visible'), i%3 * 80);
        }
    });
},{threshold:0.06});
revEls.forEach(el=>revObs.observe(el));

// Filter + Search
const filterBtns = document.querySelectorAll('.dp-filter-btn');
const cards      = document.querySelectorAll('.dp-grid-item');
const searchEl   = document.getElementById('dp-search');
const noResultEl = document.getElementById('dp-no-results');
let activeFilter = 'all';

function applyFilters(){
    const q = searchEl.value.toLowerCase().trim();
    let vis = 0;
    cards.forEach(card=>{
        const catOk  = activeFilter==='all' || card.classList.contains('filter-'+activeFilter);
        const termOk = q==='' ||
            (card.dataset.title||'').includes(q) ||
            (card.dataset.tagline||'').includes(q) ||
            (card.dataset.services||'').includes(q);
        const show = catOk && termOk;
        card.style.display = show ? '' : 'none';
        if(show) vis++;
    });
    noResultEl.style.display = vis===0 ? '' : 'none';
}
filterBtns.forEach(btn=>{
    btn.addEventListener('click',function(){
        filterBtns.forEach(b=>b.classList.remove('active'));
        this.classList.add('active');
        activeFilter = this.dataset.filter;
        applyFilters();
    });
});
searchEl.addEventListener('input', applyFilters);

// Auto-play Departments Hero Slideshow
const dpSlides = document.querySelectorAll('.dp-hero-slide');
if (dpSlides.length > 0) {
    let dpActiveSlide = 0;
    setInterval(() => {
        dpSlides[dpActiveSlide].classList.remove('active');
        dpActiveSlide = (dpActiveSlide + 1) % dpSlides.length;
        dpSlides[dpActiveSlide].classList.add('active');
    }, 4000);
}
</script>
