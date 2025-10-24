<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'CallLedger' }}</title> <!-- Dynamic title support -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/welcome.css') }}" rel="stylesheet" />

    <!-- Optional: Additional meta tags -->
    <meta name="description" content="CallLedger Partner Program">
    <meta name="author" content="CallLedger">

  <style>











    /* Button Styles */
    .btn-become-partner {
      position: relative;
      display: inline-block;
      background: linear-gradient(45deg, #ff6ec4, #7873f5, #fda085);
      /* Purple-Pink-Orange */
      color: #fff;
      border-radius: 50px;
      padding: 15px 45px;
      font-weight: 600;
      font-size: 1.2rem;
      text-decoration: none;
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .btn-become-partner:hover {
      transform: translateY(-3px) scale(1.05);
      color: #fff;

      box-shadow: 0 10px 25px rgba(255, 110, 196, 0.4), 0 10px 25px rgba(120, 115, 245, 0.4);
    }

    /* Icon after text */
    .btn-icon {
      margin-left: 10px;
      display: inline-block;
      animation: icon-move 1.5s infinite alternate ease-in-out;
    }

    /* Animate the icon slightly */
    @keyframes icon-move {
      0% {
        transform: translateY(0) rotate(0deg);
      }

      50% {
        transform: translateY(-3px) rotate(15deg);
      }

      100% {
        transform: translateY(0) rotate(0deg);
      }
    }

    /* Elegant Orange Gradient Text */
    .callledger-gradient {
      background: linear-gradient(90deg, #ff8c00, #ffa500, #ffcc70);
      background-size: 200% auto;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 800;
      animation: smoothShine 4s linear infinite;
    }

    /* Smooth flowing gradient */
    @keyframes smoothShine {
      0% {
        background-position: 0% center;
      }

      100% {
        background-position: 200% center;
      }
    }

    /* Simple underline animation */
    .underline-orange {
      display: block;
      width: 0;
      height: 4px;
      margin-top: 8px;
      background: linear-gradient(90deg, #ff8c00, #ffa500, #ffcc70);
      border-radius: 2px;
      animation: underlineGrow 1.2s ease-out forwards 1.5s;
    }

    @keyframes underlineGrow {
      from {
        width: 0;
      }

      to {
        width: 120px;
      }
    }




footer {
  font-family: 'Poppins', sans-serif;
  color: #fff;
}

footer .widget-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #ff8c00; /* Orange highlight */
  margin-bottom: 1rem;
}

footer p {
  color: #ccc;
}

footer a {
  color: #ccc;
  text-decoration: none;
  transition: 0.3s;
}

footer a:hover {
  color: #ff8c00;
  text-decoration: none;
}

/* Social Icons */
footer .social a {
  display: inline-block;
  margin-right: 10px;
  width: 38px;
  height: 38px;
  line-height: 38px;
  text-align: center;
  border-radius: 50%;
  background: #333;
  color: #fff;
  transition: 0.3s;
}

footer .social a:hover {
  background: #ff8c00;
  transform: translateY(-3px);
}

/* Footer links */
footer .footer-links li {
  margin-bottom: 8px;
}

footer .contact-info li {
  margin-bottom: 8px;
  color: #ccc;
}

/* Footer bottom */
footer .footer-bottom {
  color: #999;
  font-size: 0.9rem;
}
  </style>
</head>

<body>

   
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top" id="home">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <h3>CallLedger</h3>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
        </ul>

        <div class="nav-btn d-flex">
          <a href="partner-login" class="btn-login">Login</a>
          <a href="signup" class="btn-signup">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Optional Hero Section -->
  <!-- Hero Section -->
  <section class="hero-section py-5" id="home"> 
    <div class="container">
      <div class="row align-items-center">

        <!-- Left content -->
        <div class="col-lg-6 col-md-6 animate-fade-in">
          <h1 class="fw-bold mb-3 hero-title">
            Partner with <span class="callledger-gradient">CallLedger</span>
            <span class="underline-orange"></span>
          </h1>


          <p class="lead text-muted mb-4 animate-slide-up">
            Join the <strong>CallLedger Partner Program</strong> and earn up to
            <strong>15% commission</strong> on every successful referral!
            Help businesses manage clients and settlements effortlessly — while you grow your income.
          </p>
          <a href="signup" class="btn-get-started pulse-glow">
            Get Started 🚀
            <span class="shine"></span>
          </a>
        </div>

        <!-- Right image -->
        <div class="col-lg-6 col-md-6 text-center mt-5 mt-md-0 position-relative">
          <div class="dashboard-image-wrapper animate-zoom-in">
            <img src="{{asset('images/12.jpg')}}" alt="Dashboard Preview" class="img-fluid dashboard-image" />
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Steps Section -->
  <section class="steps-section py-5">
    <div class="container">
      <h2 class="text-center mb-5">Enroll in Three Easy Steps</h2>
      <div class="row g-4 mb-4">
        <div class="col-md-4">
          <div class="step-card p-4 text-center rounded shadow-sm">
            <div class="step-number">1</div>
            <h4 class="mt-3">Sign Up</h4>
            <p>Fill out our easy affiliate sign-up form. Our team will review your application and approve it promptly.
              Once approved, you'll become a valued partner.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-card p-4 text-center rounded shadow-sm">
            <div class="step-number">2</div>
            <h4 class="mt-3">Share the Qualified Lead</h4>
            <p>Provide detailed information about the referred lead to ensure a smooth process.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="step-card p-4 text-center rounded shadow-sm">
            <div class="step-number">3</div>
            <h4 class="mt-3">Get Paid & Grow</h4>
            <p>Once the lead converts successfully, you'll receive your commission. Continue referring to grow your
              earnings.</p>
          </div>
        </div>
      </div>

      <!-- Call to Action Button -->
      <div class="text-center mt-4">
        <a href="signup" class="btn-become-partner btn btn-lg">
          Become a Partner
          <span class="btn-icon">🚀</span> </a>
      </div>

    </div>
  </section>




  <!-- FAQ Section -->
  <section id="faq" class="faq-area default-padding-bottom py-5">
    <div class="container">
      <div class="row align-items-center">

        <!-- Image -->
        <div class="col-lg-6 mb-4 mb-lg-0 text-center">
          <img decoding="async" src="{{asset('images/20-1.png')}}" alt="FAQ Illustration" class="img-fluid">
        </div>

        <!-- Accordion -->
        <div class="col-lg-6">
          <div class="faq-content">
            <div class="accordion" id="faqAccordion">

              <!-- FAQ 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    How can I start using the software ?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="faqOne"
                  data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Sign up with your email and start managing your workflow in under 5 minutes — no technical skills
                    needed!
                  </div>
                </div>
              </div>


              <!-- FAQ 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How to become affiliated with CallLedger ? </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo"
                  data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Fill up the form and submit your application. Our team will review and approve it. </div>
                </div>
              </div>

              <!-- FAQ 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What is the commission rate ? </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree"
                  data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    You earn upto 15% commission on converted leads, recurring quarterly. </div>
                </div>
              </div>

             
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Do I need to be a client to join? </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive"
                  data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    No, signup is free and open to all.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Features Section -->
  <section class="features-section py-5" id="features">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold hero-title">
        Amazing <span class="text-gradient text-white">Features</span> for Partners
      </h2>

      <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-md-4">
          <div class="feature-card text-center p-4 rounded shadow-sm animate-slide-up">
            <div class="feature-icon mb-3">
              <i class="fa-solid fa-chart-line fa-2x"></i>
            </div>
            <h5 class="fw-bold mb-2">Dashboard Overview</h5>
            <p class="text-muted">Quick analytics of your leads, clients, and earnings at a glance.</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
          <div class="feature-card text-center p-4 rounded shadow-sm animate-slide-up" style="animation-delay: 0.1s;">
            <div class="feature-icon mb-3">
              <i class="fa-solid fa-users fa-2x"></i>
            </div>
            <h5 class="fw-bold mb-2">Lead Management</h5>
            <p class="text-muted">Add, track, and manage leads efficiently with real-time updates.</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
          <div class="feature-card text-center p-4 rounded shadow-sm animate-slide-up" style="animation-delay: 0.2s;">
            <div class="feature-icon mb-3">
              <i class="fa-solid fa-wallet fa-2x text-gradient"></i>
            </div>
            <h5 class="fw-bold mb-2">Commission Tracking</h5>
            <p class="text-muted">Track your earned, pending, and approved commissions easily.</p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="col-md-4">
          <div class="feature-card text-center p-4 rounded shadow-sm animate-slide-up" style="animation-delay: 0.3s;">
            <div class="feature-icon mb-3">
              <i class="fa-solid fa-bell fa-2x text-gradient"></i>
            </div>
            <h5 class="fw-bold mb-2">Notifications & Alerts</h5>
            <p class="text-muted">Get instant alerts for lead conversions and pending actions.</p>
          </div>
        </div>



        <!-- Feature 6 -->
        <div class="col-md-4">
          <div class="feature-card text-center p-4 rounded shadow-sm animate-slide-up" style="animation-delay: 0.5s;">
            <div class="feature-icon mb-3">
              <i class="fa-solid fa-lock fa-2x text-gradient"></i>
            </div>
            <h5 class="fw-bold mb-2">Secure Login & Profile</h5>
            <p class="text-muted">Secure partner login and easy profile management.</p>
          </div>
        </div>
      </div>
    </div>
  </section>








  <footer class="bg-dark text-light pt-5 position-relative" style="
    background: #0e2258 none repeat scroll 0 0 !important;" c>
  <div class="container">
    <div class="row">

      <!-- About CallLedger -->
      <div class="col-lg-5 col-md-6 mb-4">
        <h4 class="widget-title">About CallLedger</h4>
        <p>
          CallLedger is a powerful call tracking and lead management solution for businesses and teams to monitor calls, manage leads, analyze reports, and boost productivity. Trusted by 10,000+ businesses across India.
        </p>
        <div class="social mt-3">
          <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Company Links -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h4 class="widget-title">Company</h4>
        <ul class="footer-links list-unstyled">
          <li><a href="refund-policy.html">Refund Policy</a></li>
          <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
          <li><a href="privacy-policies.html">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h4 class="widget-title">Contact Us</h4>
        <ul class="contact-info list-unstyled">
          <li><strong>Address:</strong> Palghar, Mumbai, Maharashtra, India</li>
          <li><strong>Email:</strong> support@callledger.in</li>
          <li><strong>Phone:</strong> +91-7066683038</li>
        </ul>
      </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom text-center mt-4 pt-3 border-top border-secondary">
      <p class="mb-0">&copy; 2025 CallLedger. All Rights Reserved.</p>
    </div>
  </div>
</footer>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
     const navbarLinks = document.querySelectorAll('.navbar .nav-link');

  navbarLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId.startsWith('#')) {
        e.preventDefault();

        const targetSection = document.querySelector(targetId);
        const navbarHeight = document.querySelector('.navbar').offsetHeight;

        if (targetSection) {
          const sectionTop = targetSection.offsetTop - navbarHeight - 10;
          window.scrollTo({
            top: sectionTop,
            behavior: 'smooth'
          });
        }
      }
    });
  });

      // Optional: make accordion open/close manually, only one at a time
      const accordionItems = document.querySelectorAll('#faqAccordion .accordion-item');

      accordionItems.forEach(item => {
        const button = item.querySelector('.accordion-button');
        const collapse = item.querySelector('.accordion-collapse');

        button.addEventListener('click', function () {
          if (collapse.classList.contains('show')) {
            bootstrap.Collapse.getInstance(collapse)?.hide();
          } else {
            // Close others
            document.querySelectorAll('#faqAccordion .accordion-collapse.show').forEach(open => {
              bootstrap.Collapse.getInstance(open)?.hide();
            });
            bootstrap.Collapse.getOrCreateInstance(collapse).show();
          }
        });
      });
    });
  </script>

</body>

</html>