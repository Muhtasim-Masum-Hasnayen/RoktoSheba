<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <title>RoktoSheba – Ek Drop Rokto, Ekta Notun Jibon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- FontAwesome for icons -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    rel="stylesheet"
  />

  <!-- Typed.js -->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <style>
    /* Reset & base */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #222;
      margin: 0;
      padding: 0;
    }
    a {
      text-decoration: none;
    }

    /* Topbar */
    .topbar {
      background-color: #b71c1c;
      color: #fff;
      font-weight: 500;
      font-size: 0.85rem;
      letter-spacing: 0.05em;
      user-select: none;
    }

    /* Navbar */
    nav.navbar {
      background: #fff;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
      font-weight: 600;
      letter-spacing: 0.02em;
      transition: background-color 0.3s ease;
    }
    nav.navbar .navbar-brand {
      font-size: 1.8rem;
      color: #b71c1c;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }
    nav.navbar .nav-link {
      color: #555;
      font-weight: 500;
      transition: color 0.3s ease;
    }
    nav.navbar .nav-link:hover,
    nav.navbar .nav-link.active {
      color: #b71c1c;
      font-weight: 700;
    }

    /* Hero Section */
    .hero-section {
      background:
        linear-gradient(to bottom right, rgba(183, 28, 28, 0.95), rgba(127, 0, 0, 0.95)),
        url('https://images.unsplash.com/photo-1611809011158-3e936a0d695a?auto=format&fit=crop&w=1470&q=80') no-repeat center center / cover;
      height: 90vh;
      padding: 60px 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
      position: relative;
      z-index: 1;
      overflow: hidden;
      border-radius: 0 0 40px 40px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
    }


    /* Floating animation for heading */
    @keyframes floatText {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .hero-section h1 {
      font-size: 4rem;
      font-weight: 800;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      animation: floatText 6s ease-in-out infinite;
      margin-bottom: 0.5rem;
      text-shadow: 0 8px 12px rgba(0,0,0,0.7);
    }
    .hero-section #tagline {
      font-weight: 600;
      font-size: 1.8rem;
      margin-bottom: 1rem;
      min-height: 40px; /* reserve space so typed text won't jump */
      text-shadow: 0 4px 6px rgba(0,0,0,0.5);
    }
    .hero-section p {
      font-size: 1.25rem;
      font-weight: 400;
      max-width: 650px;
      margin: 0 auto 2rem auto;
      text-shadow: 0 4px 10px rgba(0,0,0,0.4);
      opacity: 0;
      animation: fadeInUp 1s ease forwards;
      animation-delay: 1.5s;
    }
    .hero-section .btn-outline-light {
      font-weight: 600;
      font-size: 1.1rem;
      border-width: 2px;
      padding: 0.65rem 2.5rem;
      opacity: 0;
      animation: fadeInUp 1s ease forwards;
      animation-delay: 2.2s;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .hero-section .btn-outline-light:hover {
      background-color: #b71c1c;
      color: white;
      box-shadow: 0 8px 15px rgba(183, 28, 28, 0.7);
    }

    /* Fade in up */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Wave SVG Separator */
    .wave-separator {
      margin-top: -5px;
    }

    /* Features Section */
    section.features {
      padding: 4rem 0 6rem;
      background-color: #fff;
      text-align: center;
    }
    section.features h5 {
      color: #b71c1c;
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 0.75rem;
    }
    section.features p {
      max-width: 280px;
      margin: 0 auto;
      font-weight: 500;
      color: #444;
    }
    section.features .col-md-4 {
      margin-bottom: 3rem;
    }

    /* Footer */
    footer {
      background-color: #b71c1c;
      color: #fff;
      padding: 1.5rem 0;
      font-weight: 500;
      letter-spacing: 0.05em;
      text-align: center;
      font-size: 0.9rem;
      user-select: none;
      box-shadow: 0 -3px 8px rgb(183 28 28 / 0.7);
    }
    footer i {
      margin-right: 0.5rem;
      color: #fff3f3;
    }
  </style>
</head>
<body>

<!-- 🔝 Topbar -->
<div class="topbar">
  <small><i class="fas fa-phone"></i> Hotline: +8801730202960 &nbsp;&nbsp;|&nbsp;&nbsp; <i class="fas fa-envelope"></i> Email: mhmasum@roktosheba.org</small>
</div>

<!-- 🔻 Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="assets/img/logo.png" alt="RoktoSheba Logo" height="50" class="me-2" />
      <span>RoktoSheba</span>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navContent"
      aria-controls="navContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="donor_list.php">Find Donor</a></li>
        <li class="nav-item"><a class="nav-link" href="reg.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- 🎯 Hero Section -->
<!-- 🎯 Hero Section -->
<section class="hero-section ">
  <div class="container">
    <div class="text-center">
      <!-- Logo + Title -->
      <div class="d-flex justify-content-center align-items-center mb-3">
        <img src="assets/img/Rlogo.png" alt="RoktoSheba Logo" style="height: 250px; width: 300px;" class="me-2 rounded" />

      </div>
    <h1 class="m-0">RoktoSheba</h1>
      <!-- Tagline + Text -->
      <h3 id="tagline" class="mb-2"></h3>
      <p class="lead mb-4">Connecting lives with one drop of blood.</p>

      <!-- Call to Action -->
      <a href="donor_list.php" class="btn btn-outline-light btn-lg px-4">Find Donor</a>
    </div>
  </div>
</section>

<!-- SVG Wave Separator -->
<div class="wave-separator">
  <svg
    viewBox="0 0 1440 100"
    preserveAspectRatio="none"
    style="display: block; width: 100%; height: 100px"
  >
    <path
      fill="#fff"
      d="M0,80 C360,140 1080,20 1440,80 L1440,0 L0,0 Z"
    ></path>
  </svg>
</div>

<!-- 🧩 Features Section -->
<section class="features container">
  <div class="row text-center">
    <div class="col-md-4">
      <h5>🔍 Filter by Location</h5>
      <p>Search donors near you by district or area in real-time.</p>
    </div>
    <div class="col-md-4">
      <h5>🩸 Filter by Blood Group</h5>
      <p>Need A+, B− or rare types? Use smart filters instantly.</p>
    </div>
    <div class="col-md-4">
      <h5>📞 Contact & Gender Filter</h5>
      <p>Contact directly. Use gender & age preferences for safety.</p>
    </div>
  </div>
</section>

<!-- 👣 Footer -->
<footer>
  <p><i class="fas fa-heart"></i> © 2025 RoktoSheba | Ek Drop Rokto, Ekta Notun Jibon</p>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Typed.js Animation -->
<script>
  var typed = new Typed("#tagline", {
    strings: [
      "Ek Drop Rokto, Ekta Notun Jibon",
      "One Drop of Blood, A New Life Begins",
      "Donate Blood, Save Lives",
      "Join Us to Make a Difference"
    ],
    typeSpeed: 50,
    backSpeed: 40,
    backDelay: 1800,
    loop: true,
  });

  // Fade in paragraph and button after Typed starts
  window.addEventListener('load', () => {
    const p = document.querySelector('.hero-section p');
    const btn = document.querySelector('.hero-section .btn-outline-light');
    setTimeout(() => {
      p.style.opacity = '1';
      btn.style.opacity = '1';
    }, 1500);
  });
</script>
</body>
</html>