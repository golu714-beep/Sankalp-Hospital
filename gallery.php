<?php
$pageTitle = "Image Gallery | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Explore the world-class infrastructure, modern operation theatres, patient wards, and advanced medical facilities at Sankalp Hospital, Ambikapur.";

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="images/hero6.png" alt="Sankalp Hospital Gallery">
  </div>
  <div class="subpage-hero-overlay"></div>

  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-images me-1"></i> Our Facility</span>
        <h1 class="text-white display-4 fw-bold">Image Gallery</h1>
        <p class="lead text-white-50 mb-0">Take a visual tour of Sankalp Hospital's world-class infrastructure, advanced medical equipment, and patient-friendly environment.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY SECTION -->
<section class="py-5 bg-white">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-5">
      <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-hospital me-1"></i> Hospital Infrastructure</span>
      <h2 class="fw-bold text-dark">Our World-Class Facilities</h2>
      <p class="text-muted mx-auto" style="max-width: 600px;">Sankalp Hospital is equipped with state-of-the-art medical technology and patient-centric infrastructure designed for optimal care and comfort.</p>
    </div>

    <!-- Gallery Grid -->
    <div class="row g-4">
      <!-- Card 1: Hospital Reception -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/hero1.png" alt="Hospital Reception & Waiting Lobby" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/hero1.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Reception & Waiting Lobby</h5>
            <p>Spacious, air-conditioned, and sanitized lobby designed for patient comfort.</p>
          </div>
        </div>
      </div>

      <!-- Card 2: Operation Theatre -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/hero2.png" alt="Modular Operation Theatre" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/hero2.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Modular Operation Theatre</h5>
            <p>Equipped with modern anesthesia systems and laminar air flow technology.</p>
          </div>
        </div>
      </div>

      <!-- Card 3: Consultation Suites -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/hero4.png" alt="Specialist Consultation Rooms" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/hero4.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Consultation Suites</h5>
            <p>Private counseling chambers for in-depth clinical discussions.</p>
          </div>
        </div>
      </div>

      <!-- Card 4: Pathology Lab -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/hero5.png" alt="Pathology Laboratory" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/hero5.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Pathology Laboratory</h5>
            <p>Fully automated analyzers for rapid and precise diagnostic results.</p>
          </div>
        </div>
      </div>

      <!-- Card 5: Ultrasound Room -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/ultrasound.png" alt="Ultrasound Diagnostic Room" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/ultrasound.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Ultrasound Diagnostic Room</h5>
            <p>Advanced ultrasound imaging for pregnancy scans and diagnostics.</p>
          </div>
        </div>
      </div>

      <!-- Card 6: Pediatric Ward -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/pediatric.png" alt="Pediatric Care Ward" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/pediatric.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Pediatric Care Ward</h5>
            <p>Child-friendly ward settings ensuring young patients feel safe and comfortable.</p>
          </div>
        </div>
      </div>

      <!-- Card 7: Ophthalmology -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/ophthalmology.png" alt="Ophthalmology Department" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/ophthalmology.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Ophthalmology Department</h5>
            <p>Advanced eye care facility with modern cataract and LASIK equipment.</p>
          </div>
        </div>
      </div>

      <!-- Card 8: Emergency & Trauma -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/emergency.png" alt="Emergency & Trauma Center" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/emergency.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Emergency & Trauma Center</h5>
            <p>24/7 fully-equipped emergency unit with rapid response capabilities.</p>
          </div>
        </div>
      </div>

      <!-- Card 9: IVF Unit -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/ivf.png" alt="Assisted Fertility IVF Unit" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/ivf.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Assisted Fertility (IVF) Unit</h5>
            <p>State-of-the-art IVF lab with advanced reproductive technology.</p>
          </div>
        </div>
      </div>

      <!-- Card 10: Orthopedics -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/orthopedics.png" alt="Orthopaedics Department" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/orthopedics.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Orthopaedics Department</h5>
            <p>Specialized unit for joint replacement, sports trauma, and spinal surgeries.</p>
          </div>
        </div>
      </div>

      <!-- Card 11: Oncology -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/oncology.png" alt="Onco Surgery Department" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/oncology.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Onco Surgery Department</h5>
            <p>Comprehensive cancer care with modern surgical and chemotherapy facilities.</p>
          </div>
        </div>
      </div>

      <!-- Card 12: Hospital Overview -->
      <div class="col-lg-4 col-md-6">
        <div class="gallery-card">
          <div class="gallery-img-wrapper">
            <img src="images/hero3.png" alt="Sankalp Hospital Overview" class="gallery-img">
            <div class="gallery-overlay">
              <a href="images/hero3.png" class="gallery-lightbox" data-gallery="hospital"><i class="fas fa-expand"></i></a>
            </div>
          </div>
          <div class="gallery-info">
            <h5>Hospital Overview</h5>
            <p>Complete multi-specialty healthcare facility serving the Surguja region.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LIGHTBOX MODAL -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 p-0">
        <button type="button" class="btn-close btn-close-white ms-auto m-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0 text-center">
        <img src="" id="lightboxImg" class="img-fluid rounded" alt="Gallery Image">
      </div>
      <div class="modal-footer border-0 justify-content-center">
        <button class="btn btn-light btn-sm rounded-pill me-2" id="prevBtn"><i class="fas fa-arrow-left me-1"></i> Prev</button>
        <button class="btn btn-light btn-sm rounded-pill" id="nextBtn">Next <i class="fas fa-arrow-right ms-1"></i></button>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>

<!-- Gallery Lightbox Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const lightboxes = document.querySelectorAll('.gallery-lightbox');
  const modal = new bootstrap.Modal(document.getElementById('galleryModal'));
  const modalImg = document.getElementById('lightboxImg');
  let currentIndex = 0;
  const images = [];

  lightboxes.forEach(function(link, index) {
    images.push({
      src: link.getAttribute('href'),
      alt: link.closest('.gallery-card').querySelector('.gallery-img').alt
    });

    link.addEventListener('click', function(e) {
      e.preventDefault();
      currentIndex = index;
      showModalImage();
      modal.show();
    });
  });

  function showModalImage() {
    modalImg.src = images[currentIndex].src;
    modalImg.alt = images[currentIndex].alt;
  }

  document.getElementById('prevBtn').addEventListener('click', function() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showModalImage();
  });

  document.getElementById('nextBtn').addEventListener('click', function() {
    currentIndex = (currentIndex + 1) % images.length;
    showModalImage();
  });
});
</script>
