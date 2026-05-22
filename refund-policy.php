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
      Secure Billing Standards
    </span>

    <h1>Refund & Payment Policy</h1>

    <p class="hero-subtext">
      Transparent billing practices, payment standards, and software service policies designed to maintain clarity, compliance, and customer trust.
    </p>

  </div>
</section>
<!-- MAIN CONTENT -->
<section class="premium-section">
  <div class="container">

    <!-- INTRO CARD -->
    <div class="premium-card mb-4">

      <h2>U.S. Software & IT Payment Standards</h2>

      <p class="intro-text">
        In the United States, software and IT service agreements are generally
        governed by industry-standard operational frameworks such as:
      </p>

      <div class="row g-4 mt-2">

        <div class="col-md-4">
          <div class="feature-box text-center">
            <div class="feature-icon mx-auto">
              <i class="bi bi-file-earmark-text"></i>
            </div>

            <h4>MSAs</h4>

            <p>
              Master Service Agreements define long-term service relationships
              and responsibilities.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box text-center">
            <div class="feature-icon mx-auto">
              <i class="bi bi-journal-check"></i>
            </div>

            <h4>SOWs</h4>

            <p>
              Statements of Work establish project scope, milestones,
              and deliverables.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box text-center">
            <div class="feature-icon mx-auto">
              <i class="bi bi-shield-lock"></i>
            </div>

            <h4>EULAs</h4>

            <p>
              End User License Agreements define software usage terms
              and legal protections.
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- PAYMENT TIMING -->
    <div class="premium-card mb-4">

      <h2>1. Common Payment Timing</h2>

      <p class="intro-text">
        U.S. businesses commonly follow structured invoice cycles known as
        “Net Terms.”
      </p>

      <div class="row g-4">

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-calendar-check"></i>
            </div>

            <h4>Net 30</h4>

            <p>
              The industry standard where invoices are due within
              30 days of issue.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-clock-history"></i>
            </div>

            <h4>Flexible Cycles</h4>

            <p>
              Net 15, Net 45, and Net 60 terms are commonly used
              depending on organization size.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-diagram-3"></i>
            </div>

            <h4>Milestone Billing</h4>

            <p>
              IT projects often use phased payments tied to project
              delivery milestones.
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- PRICING MODELS -->
    <div class="premium-card mb-4">

      <h2>2. Pricing Models</h2>

      <div class="row g-4">

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-cash-stack"></i>
            </div>

            <h4>Fixed Fee</h4>

            <p>
              A predetermined project cost for clearly defined scopes
              and deliverables.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-hourglass-split"></i>
            </div>

            <h4>Time & Materials</h4>

            <p>
              Billing based on hours worked and actual resources
              utilized during execution.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-arrow-repeat"></i>
            </div>

            <h4>Subscription Plans</h4>

            <p>
              Monthly or annual recurring service models commonly
              used for SaaS platforms.
            </p>
          </div>
        </div>

      </div>
    </div>

    <!-- PAYMENT METHODS -->
    <div class="premium-card">

      <h2>3. Payment Methods & Fees</h2>

      <div class="row g-4">

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-bank"></i>
            </div>

            <h4>ACH / Wire Transfer</h4>

            <p>
              Preferred for secure business transactions and reduced
              processing fees.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-credit-card"></i>
            </div>

            <h4>Credit Cards</h4>

            <p>
              Commonly accepted for smaller invoices and recurring
              subscription payments.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="feature-box">
            <div class="feature-icon">
              <i class="bi bi-exclamation-circle"></i>
            </div>

            <h4>Late Fees</h4>

            <p>
              Overdue balances may incur standard monthly interest
              charges depending on agreement terms.
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>