<?php include 'includes/header.php'; ?>
<style>
       /* ========================================
   INNER HERO SECTION (ALL INNER PAGES)
======================================== */

.inner-hero {
    position: relative;
    overflow: hidden;

    padding: 90px 20px 70px;

    background:
        linear-gradient(
            135deg,
            rgba(0, 102, 204, 0.92),
            rgba(0, 150, 214, 0.88)
        ),
        url('new-top_background_image.png');

    background-size: cover;
    background-position: center;

    border-radius: 0 0 40px 40px;

    color: white;

    margin-bottom: 60px;
}

/* glow effect */
.inner-hero::before {
    content: "";

    position: absolute;

    width: 500px;
    height: 500px;

    top: -180px;
    right: -120px;

    background: radial-gradient(
        circle,
        rgba(255,255,255,0.18),
        transparent
    );

    filter: blur(40px);
}

/* HERO SMALL BADGE */
.hero-badge {
    display: inline-block;

    padding: 8px 18px;

    background: rgba(255,255,255,0.15);

    border: 1px solid rgba(255,255,255,0.25);

    border-radius: 50px;

    font-size: 13px;
    font-weight: 500;

    margin-bottom: 22px;

    backdrop-filter: blur(8px);
}

/* HERO TITLE */
.inner-hero h1 {
    font-size: 58px;
    font-weight: 700;

    margin-bottom: 18px;

    letter-spacing: -1px;
}

/* HERO SUBTEXT */
.hero-subtext,
.inner-hero p {
    max-width: 900px;

    margin: auto;

    font-size: 18px;
    line-height: 1.8;

    color: rgba(255,255,255,0.92);
}

/* ========================================
   CONTENT SECTION
======================================== */

.content-section {
    padding-bottom: 80px;
}

/* ========================================
   PREMIUM POLICY CARD
======================================== */

.policy-card {
    background: white;

    border-radius: 24px;

    padding: 45px;

    margin-bottom: 35px;

    box-shadow:
        0 10px 35px rgba(0,0,0,0.06);

    border: 1px solid rgba(0,0,0,0.04);
}

.policy-card h2 {
    font-size: 42px;
    font-weight: 700;

    margin-bottom: 18px;
}

.policy-card h3 {
    font-size: 34px;
    font-weight: 600;

    margin-bottom: 25px;
}

.policy-card p,
.policy-card li {
    font-size: 17px;
    line-height: 1.9;
    color: #555;
}

/* ========================================
   FEATURE BOXES
======================================== */

.feature-box {
    background: #fff;

    border-radius: 22px;

    padding: 32px;

    height: 100%;

    border: 1px solid #ececec;

    transition: 0.3s ease;

    box-shadow:
        0 6px 20px rgba(0,0,0,0.04);
}

.feature-box:hover {
    transform: translateY(-6px);

    box-shadow:
        0 15px 35px rgba(0,0,0,0.08);
}

/* ICON */
.feature-icon {
    width: 68px;
    height: 68px;

    border-radius: 18px;

    background:
        linear-gradient(135deg, #0096d6, #005bea);

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 24px;

    color: white;

    font-size: 28px;

    box-shadow:
        0 8px 20px rgba(0,91,234,0.25);
}

/* TITLES */
.feature-box h4 {
    font-size: 30px;
    font-weight: 600;

    margin-bottom: 18px;
}

/* TEXT */
.feature-box p {
    font-size: 17px;
    line-height: 1.8;
    color: #666;
}

/* ========================================
   POLICY ITEM
======================================== */

.policy-item {
    margin-top: 28px;
}

.policy-item h4 {
    font-size: 24px;
    font-weight: 600;

    margin-bottom: 12px;
}

/* ========================================
   RESPONSIVE
======================================== */

@media(max-width:768px){

    .inner-hero {
        padding: 70px 20px 60px;
    }

    .inner-hero h1 {
        font-size: 38px;
    }

    .hero-subtext {
        font-size: 16px;
    }

    .policy-card {
        padding: 28px;
    }

    .policy-card h2 {
        font-size: 30px;
    }

    .policy-card h3 {
        font-size: 26px;
    }

    .feature-box h4 {
        font-size: 24px;
    }

}
    /* ========================================
    HERO TEXT VISIBILITY FIX
    ======================================== */

    .inner-hero .container {
        position: relative;
        z-index: 5;
    }

    .inner-hero::after {
        content: "";

        position: absolute;

        inset: 0;

        background:
        linear-gradient(
            135deg,
            rgba(0, 66, 130, 0.82),
            rgba(0, 120, 215, 0.72)
        );

        z-index: 1;
    }

    /* FORCE TEXT VISIBILITY */
    .inner-hero h1,
    .inner-hero p,
    .inner-hero .hero-badge {
        position: relative;
        z-index: 10;
    }

    /* TITLE */
    .inner-hero h1 {
        color: #ffffff !important;

        text-shadow:
        0 2px 12px rgba(0,0,0,0.25);
    }

    /* SUBTEXT */
    .inner-hero p,
    .hero-subtext {
        color: rgba(255,255,255,0.94) !important;
    }

    /* BADGE */
    .hero-badge {
        color: white !important;

        background: rgba(255,255,255,0.14);

        border: 1px solid rgba(255,255,255,0.18);
    }
</style>
<!-- PREMIUM HERO -->
<section class="inner-hero">
  <div class="container text-center">

    <span class="hero-badge">
      Refund & Cancellation Policy
    </span>

    <h1>Refund & Payment Policy</h1>

    <p class="hero-subtext">
      Learn about refund eligibility, cancellation procedures, billing disputes, and processing timelines for digital services provided by Printer Setup.
    </p>

  </div>
</section>
<!-- MAIN CONTENT -->
<section class="premium-section">
  <div class="container">

    <!-- INTRO CARD -->

    <!-- INTRO -->
    <div class="policy-card">

      <h2>Digital Services Policy</h2>

      <p>
        Due to the specialized nature of custom software development, remote technical assistance, website configuration services, and digital deployment solutions, refund requests are reviewed individually to ensure fairness and transparency for all parties involved.
      </p>

    </div>

    <!-- ELIGIBILITY -->
    <div class="policy-card mt-4">

      <h3>2. Eligibility Criteria</h3>

      <p>
        Refund requests may be considered under the following circumstances:
      </p>

      <div class="row g-4 mt-2">

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-x-circle"></i>
            </div>

            <h4>Service Not Delivered</h4>

            <p>
              The contracted service was not delivered, deployed, or completed as agreed.
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-arrow-repeat"></i>
            </div>

            <h4>Duplicate Payment</h4>

            <p>
              A verified duplicate transaction or billing error has occurred.
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-exclamation-triangle"></i>
            </div>

            <h4>Technical Barrier</h4>

            <p>
              An unresolvable technical issue completely prevented service completion.
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-headset"></i>
            </div>

            <h4>Customer Satisfaction Review</h4>

            <p>
              Concerns regarding delivered services must be reported within 30 days of project completion.
            </p>
          </div>
        </div>

      </div>

    </div>

    <!-- NON REFUNDABLE -->
    <div class="policy-card mt-4">

      <h3>3. Non-Refundable Situations</h3>

      <div class="row g-4">

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-person-x"></i>
            </div>

            <h4>Change of Mind</h4>

            <p>
              Refunds are generally not available once software deployment or design implementation has commenced.
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-clock-history"></i>
            </div>

            <h4>Customer Delays</h4>

            <p>
              Project delays caused by lack of communication, unavailable resources, or customer inactivity do not qualify for refunds.
            </p>
          </div>
        </div>

      </div>

    </div>

    <!-- CANCELLATION -->
    <div class="policy-card mt-4">

      <h3>4. Cancellation</h3>

      <p>
        Customers may request project cancellation before development, programming, deployment, or diagnostic work has officially commenced. Once active implementation begins, cancellation eligibility may be limited.
      </p>

    </div>

    <!-- CHARGEBACKS -->
    <div class="policy-card mt-4">

      <h3>5. Chargebacks</h3>

      <p>
        Customers agree to contact our support team before initiating chargebacks, payment disputes, or banking claims. We are committed to resolving billing concerns quickly and professionally whenever possible.
      </p>

    </div>

    <!-- PROCESSING -->
    <div class="policy-card mt-4">

      <h3>6. Processing Time</h3>

      <div class="feature-box">

        <div class="feature-icon">
          <i class="bi bi-bank"></i>
        </div>

        <h4>Refund Timeline</h4>

        <p>
          Approved refunds are returned to the original payment method. Processing generally requires 5–10 business days depending on banking institutions and payment providers.
        </p>

      </div>

    </div>

    <!-- CONTACT -->
    <div class="policy-card mt-4">

      <h3>7. Contact Support</h3>

      <div class="feature-box">

        <div class="feature-icon">
          <i class="bi bi-envelope-paper"></i>
        </div>

        <h4>Printer Setup</h4>

        <p>
          For refund requests, cancellations, or billing inquiries, please contact:
        </p>

        <p>
          care@the123hp.com.com
        </p>

      </div>

    </div>


  </div>
</section>

<?php include 'includes/footer.php'; ?>