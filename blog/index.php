<?php
$pageTitle = "Health Blog | Sankalp Hospital - Best Multi-Specialty Hospital in Ambikapur";
$pageDesc = "Read the latest health tips, medical insights, and wellness articles from the expert doctors at Sankalp Hospital, Ambikapur.";

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <div class="subpage-hero-bg">
    <img src="/images/hero5.png" alt="Sankalp Hospital Blog">
  </div>
  <div class="subpage-hero-overlay"></div>
  <div class="container text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <span class="badge bg-white-20 text-white px-3 py-2 rounded-pill text-uppercase mb-3"><i class="fas fa-book-medical me-1"></i> Health Blog</span>
        <h1 class="text-white display-4 fw-bold">Our Health Blog</h1>
        <p class="lead text-white-50 mb-0">Stay informed with the latest health tips, medical insights, and wellness articles from our expert doctors.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <a href="/index.php#appointment" class="btn btn-light btn-lg px-4 py-3 border-0 rounded-pill shadow-lg text-primary fw-bold fs-6"><i class="far fa-calendar-check me-2"></i> Book Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- BLOG CARDS SECTION -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4">

      <?php
      $blogs = [
        [
          'slug' => 'understanding-cataract-surgery',
          'title' => 'Understanding Cataract Surgery: What You Need to Know',
          'excerpt' => 'Cataract surgery is one of the most common and successful procedures performed worldwide. Learn about the signs, treatment options, and recovery process.',
          'category' => 'Ophthalmology',
          'date' => 'June 20, 2026',
          'img' => '/images/ophthalmology.png',
          'icon' => 'fa-eye'
        ],
        [
          'slug' => 'ivf-success-tips',
          'title' => '5 Tips to Improve Your IVF Success Rate',
          'excerpt' => 'Going through IVF can be emotionally and physically demanding. Here are expert-backed tips to maximize your chances of a successful pregnancy.',
          'category' => 'IVF & Fertility',
          'date' => 'June 15, 2026',
          'img' => '/images/ivf.png',
          'icon' => 'fa-baby'
        ],
        [
          'slug' => 'child-vaccination-schedule',
          'title' => 'Complete Child Vaccination Schedule for Parents',
          'excerpt' => 'Vaccination is crucial for protecting your child from life-threatening diseases. Here is the recommended immunization schedule from birth to adolescence.',
          'category' => 'Pediatrics',
          'date' => 'June 10, 2026',
          'img' => '/images/pediatric.png',
          'icon' => 'fa-child'
        ],
        [
          'slug' => 'knee-replacement-recovery',
          'title' => 'Knee Replacement Recovery: Timeline and Tips',
          'excerpt' => 'Recovering from knee replacement surgery requires patience and proper care. Learn about the recovery timeline and exercises for faster healing.',
          'category' => 'Orthopaedics',
          'date' => 'June 5, 2026',
          'img' => '/images/orthopedics.png',
          'icon' => 'fa-bone'
        ],
        [
          'slug' => 'emergency-first-aid',
          'title' => 'Emergency First Aid: What to Do Before the Ambulance Arrives',
          'excerpt' => 'Knowing basic first aid can save lives in critical situations. Learn essential emergency response techniques everyone should know.',
          'category' => 'Emergency Care',
          'date' => 'May 28, 2026',
          'img' => '/images/emergency.png',
          'icon' => 'fa-ambulance'
        ],
        [
          'slug' => 'mental-health-awareness',
          'title' => 'Breaking the Stigma: Why Mental Health Matters',
          'excerpt' => 'Mental health is just as important as physical health. Understand the signs of common mental health conditions and when to seek professional help.',
          'category' => 'Psychiatry',
          'date' => 'May 20, 2026',
          'img' => '/images/psychiatry.png',
          'icon' => 'fa-brain'
        ],
        [
          'slug' => 'diabetic-eye-care',
          'title' => 'Diabetic Eye Care: Preventing Vision Loss',
          'excerpt' => 'Diabetes can significantly impact your eye health. Learn about diabetic retinopathy and how regular eye checkups can prevent vision loss.',
          'category' => 'Ophthalmology',
          'date' => 'May 15, 2026',
          'img' => '/images/ophthalmology.png',
          'icon' => 'fa-eye'
        ],
        [
          'slug' => 'painless-delivery-options',
          'title' => 'Painless Delivery Options: Epidural and Beyond',
          'excerpt' => 'Modern obstetrics offers several pain management options during labor. Understand the benefits and safety of epidural and other techniques.',
          'category' => 'Gynecology',
          'date' => 'May 10, 2026',
          'img' => '/images/ultrasound.png',
          'icon' => 'fa-female'
        ],
        [
          'slug' => 'kidney-stone-prevention',
          'title' => 'Kidney Stones: Prevention, Symptoms, and Treatment',
          'excerpt' => 'Kidney stones are a common urological condition. Learn about the causes, symptoms, and advanced laser treatment options available today.',
          'category' => 'Urology',
          'date' => 'May 5, 2026',
          'img' => '/images/urology.png',
          'icon' => 'fa-user-md'
        ]
      ];
      ?>

      <?php foreach ($blogs as $index => $blog): ?>
      <div class="col-lg-4 col-md-6">
        <a href="/blog/<?php echo $blog['slug']; ?>" class="text-decoration-none">
          <div class="blog-card h-100">
            <div class="blog-img-wrapper">
              <img src="<?php echo $blog['img']; ?>" alt="<?php echo $blog['title']; ?>" class="blog-img">
              <span class="blog-category"><i class="fas <?php echo $blog['icon']; ?> me-1"></i> <?php echo $blog['category']; ?></span>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="far fa-calendar-alt me-1"></i> <?php echo $blog['date']; ?></span>
              </div>
              <h5 class="blog-title"><?php echo $blog['title']; ?></h5>
              <p class="blog-excerpt"><?php echo $blog['excerpt']; ?></p>
              <span class="blog-read-more">Read More <i class="fas fa-arrow-right ms-1"></i></span>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
