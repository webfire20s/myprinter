<?php
// opcache_reset();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Printer Setup Portal</title>
  <!-- <link rel="icon" type="image/x-icon" href="new-hp-logo.png"> -->
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style type="text/css">
    /* ⭐ Modal glitch fix */
    .modal-dialog {
      margin-top: 40px !important;
      transform: none !important;
      transition: none !important;
    }

    /* ⭐ Scroll adjustment fix */
    body.modal-open {
      padding-right: 0 !important;
    }


    b.tvd {
      color: white;
    }

    ul.mack li {
      font-size: 15px;
      font-weight: 100;
    }

    button.my-btn.navbar-btn {
      background: #0095ed;
      border: none;
      border-radius: 7px;
      padding: 6px;
      color: white;
    }

    #myform {
      border: 0px solid;
    }

    #myform input {
      margin: 5px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #555;
      background-color: #fff;
      background-image: none;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #myform button {
      margin: 10px;
      padding: 6px 30px 6px 30px;
      border: 0px;
      background-color: #0096d6;
      color: #fff;
    }


    #my-bnt {
      padding: 6px 30px 6px 30px;
      border: 0px;
      background-color: #0096d6;
      color: #fff;
      margin-top: 15px;
    }

    .loading {
      font-size: 18px;
      text-align: left;
    }

    a.nav-link {
      font-size: 13px !important;
    }

    .spinner {
      display: inline-block;
      width: 12px;
      height: 12px;
      margin-left: 4px;
      border: 2px solid #333;
      border-top: 2px solid transparent;
      border-radius: 50%;
      animation: spin 1s infinite linear;
    }

    .hp_footer {
      background: black;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    /* //button */
    .dropdown {
      position: absolute;
      right: 80px;
      border: 1px solid #0096D6;
      border-radius: 59px !important;
      background: #0096D6;
      padding: 1px 4px 1px 4px;
    }

    .dropdown li a.heading {
      color: white !important;
    }

    
    /* =========================
   GLOBAL PREMIUM BASE
========================= */
    body {
      background: #f4f7fb;
      font-family: 'Poppins', sans-serif;
      color: #1a1a1a;
    }

    /* =========================
      NAVBAR (CLEAN + PREMIUM)
    ========================= */
    .navbar {
      background: rgba(255,255,255,0.95) !important;
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(0,0,0,0.05);
      padding: 5px 10;
    }

    .navbar-nav .nav-link {
      color: #333 !important;
      font-weight: 500;
      margin: 0 14px;
      transition: 0.25s;
    }

    .navbar-nav .nav-link:hover {
      color: #007bff !important;
    }

    /* Support Button */
    .dropdown {
      right: 0 !important;
      border-radius: 60px !important;
      padding: 3px 6px !important;
      background: linear-gradient(135deg, #043e57, #70a7ff);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      border: none;
    }

    /* =========================
      HERO SECTION (MAIN FOCUS)
    ========================= */
    .hero-section {
      position: relative;
      background: linear-gradient(135deg, rgba(10,76,125,0.9), rgba(15,125,184,0.85)),
                  url('new-top_background_image.png');
      background-size: cover;
      background-position: center;
      border-radius: 0 0 40px 40px;
      overflow: hidden;
    }

    /* subtle glow overlay */
    .hero-section::after {
      content: "";
      position: absolute;
      top: -50%;
      right: -20%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(255,255,255,0.15), transparent);
      filter: blur(60px);
    }

    /* Hero Text */
    .hero-section h3 {
      font-weight: 600;
      font-size: 32px;
    }

    .hero-section ul {
      opacity: 0.9;
    }

    /* Download Button */
    .downloadBtn {
      background: linear-gradient(135deg, #00c6ff, #0072ff) !important;
      border-radius: 50px !important;
      padding: 10px 32px !important;
      font-weight: 500;
      box-shadow: 0 5px 15px rgba(0,114,255,0.3);
      transition: 0.3s;
    }

    .downloadBtn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,114,255,0.4);
    }

    /* Hero Image */
    .hero-section img {
      max-width: 90%;
      filter: drop-shadow(0 10px 25px rgba(0,0,0,0.25));
      transition: 0.3s;
    }

    /* =========================
      FORM CARD (PREMIUM)
    ========================= */
    form {
      background: #ffffff;
      border-radius: 16px;
      padding: 25px !important;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    input.form-control {
      border-radius: 10px;
      padding: 12px;
      border: 1px solid #ddd;
      transition: 0.2s;
    }

    input.form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 2px rgba(0,123,255,0.15);
    }

    /* Start Setup Button */
    #my-bnt {
      border-radius: 8px;
      font-weight: 500;
      background: linear-gradient(135deg, #0096d6, #005bea);
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      transition: 0.2s;
    }

    #my-bnt:hover {
      transform: translateY(-2px);
    }

    /* =========================
      RIGHT SIDE IMAGE
    ========================= */
    #findmodelimg {
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }

    /* =========================
      FOOTER (PREMIUM DARK)
    ========================= */
    .hp_footer {
      background: linear-gradient(135deg, #0a0a0a, #111);
      padding: 40px 0;
      text-align: center;
    }

    /* Footer image fix */
    .hp_footer {
      background: #212121;
      padding: 0px 0;
      width:100%;
    }

    .hp_footer img {
      opacity: 1;
    }

    /* subtle divider line */
    .hp_footer::before {
      content: "";
      display: block;
      height: 0px;
      background: rgba(255,255,255,0.08);
      margin-bottom: 0px;
    }

    /* =========================================
    PREMIUM INNER PAGES FINAL
    ========================================= */

    .premium-hero{
        position: relative;
        padding: 90px 0 80px;
        background:
            linear-gradient(
                135de   g,
                rgba(10,76,125,.96),
                rgba(0,114,255,.90)
            ),
            url('new-top_background_image.png');

        background-size: cover;
        background-position: center;
        overflow: hidden;
        text-align: center;
        color: #fff;
    }

    .premium-hero::before{
        content:'';
        position:absolute;
        top:-120px;
        right:-120px;
        width:420px;
        height:420px;
        background:rgba(255,255,255,.08);
        border-radius:50%;
        filter:blur(40px);
    }

    .hero-badge{
        display:inline-block;
        padding:8px 18px;
        border-radius:50px;
        background:rgba(255,255,255,.12);
        border:1px solid rgba(255,255,255,.18);
        margin-bottom:22px;
        font-size:14px;
        color:#fff;
        backdrop-filter:blur(10px);
    }

    .premium-hero h1{
        font-size:58px;
        font-weight:700;
        margin-bottom:20px;
        color:#fff;
    }

    .premium-hero p{
        max-width:850px;
        margin:auto;
        font-size:18px;
        line-height:1.9;
        color:rgba(255,255,255,.92);
    }

    /* =========================================
    MAIN SECTION
    ========================================= */

    .premium-section{
        position:relative;
        padding:80px 0;
        background:#f4f7fb;
    }

    /* =========================================
    MAIN CARD
    ========================================= */

    .premium-card{
        background:#fff;
        border-radius:24px;
        padding:50px;
        margin-bottom:35px;

        box-shadow:
            0 10px 40px rgba(0,0,0,.06);

        border:1px solid rgba(0,0,0,.04);
    }

    .premium-card h2{
        font-size:42px;
        font-weight:700;
        margin-bottom:18px;
        color:#0a2540;
    }

    .intro-text{
        font-size:17px;
        color:#5b6472;
        line-height:1.9;
        margin-bottom:35px;
    }

    /* =========================================
    FEATURE BOXES
    ========================================= */

    .feature-box{
        background:#fff;
        border-radius:20px;
        padding:32px;
        height:100%;

        border:1px solid #edf1f7;

        box-shadow:
            0 6px 24px rgba(0,0,0,.05);

        transition:all .3s ease;
    }

    .feature-box:hover{
        transform:translateY(-6px);

        box-shadow:
            0 14px 40px rgba(0,0,0,.10);
    }

    .feature-icon{
        width:68px;
        height:68px;
        border-radius:18px;

        background:
            linear-gradient(135deg,#0096d6,#005bea);

        display:flex;
        align-items:center;
        justify-content:center;

        margin-bottom:22px;

        box-shadow:
            0 8px 20px rgba(0,114,255,.20);
    }

    .feature-icon i{
        color:#fff;
        font-size:28px;
    }

    .feature-box h4{
        font-size:24px;
        font-weight:600;
        margin-bottom:14px;
        color:#111827;
    }

    .feature-box p{
        font-size:15px;
        line-height:1.9;
        color:#5b6472;
        margin-bottom:0;
    }

    /* =========================================
    MOBILE
    ========================================= */

    @media(max-width:768px){

        .premium-hero{
            padding:70px 0 60px;
        }

        .premium-hero h1{
            font-size:38px;
        }

        .premium-card{
            padding:30px;
        }

        .premium-card h2{
            font-size:30px;
        }
        .feature-box p{
        font-size:12px;
        
    }

    }
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
        font-size: 18px;
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
        .feature-box p {
            font-size: 13px;
            
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
    .info-highlight{
    margin-top:20px;
    background:#f2f8ff;
    border-left:4px solid #0096d6;
    padding:14px 18px;
    border-radius:10px;
    display:flex;
    align-items:center;
    gap:12px;
}

.info-highlight i{
    color:#0096d6;
    font-size:22px;
}

.policy-list{
    margin-top:10px;
    padding-left:20px;
}

.policy-list li{
    margin-bottom:10px;
}

  /* CONTACT CARDS */
.contact-card {
    height: 100%;

    background: #fff;

    border-radius: 22px;

    padding: 35px 28px;

    text-align: center;

    border: 1px solid rgba(0,0,0,0.06);

    box-shadow:
        0 10px 30px rgba(0,0,0,0.05);

    transition: all .3s ease;
}

.contact-card:hover {
    transform: translateY(-6px);

    box-shadow:
        0 20px 40px rgba(0,0,0,0.08);
}

.contact-card .feature-icon {
    width: 72px;
    height: 72px;

    margin: 0 auto 24px;

    border-radius: 20px;

    display: flex;
    align-items: center;
    justify-content: center;

    background:
        linear-gradient(135deg,#0096d6,#005bea);

    color: #fff;

    font-size: 28px;

    box-shadow:
        0 8px 20px rgba(0,91,234,.25);
}

.contact-card h4 {
    font-size: 24px;
    font-weight: 600;

    margin-bottom: 14px;

    color: #111;
}

.contact-card p {
    margin: 0;

    font-size: 16px;

    line-height: 1.8;

    color: #666;

    word-break: break-word;
}
    .contact-card {
    position: relative;
    overflow: hidden;
}

.contact-card::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 4px;

    background:
        linear-gradient(
            90deg,
            #0096d6,
            #005bea
        );
}
  </style>
</head>

<body style=" font-family: 'Poppins'; background-color:#f6f6f6">
  <div class="container-fluid" style=" background-color: #f6f6f6; ">
    <div class="row" style="background-color: #fff;">
      <div class="col-12" style="border: 0px solid;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="./">
              <!-- <img src="new-hp-logo.png" style="width: 55px;"> -->
               <span style=" width: 55px; font-weight: 800px;">Printers</span>
            </a>
            <button id="nab" class="navbar-toggler " type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="privacy-policy.php">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="refund-policy.php">Refund Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="terms-conditions.php">Terms & Conditions</a>
                </li>
                <!-- //dropdown button -->
                <!-- <div class="dropdown">
                  <li class="nav-item">
                    <a class="nav-link heading dropdown-toggle" href="#" id="dropdownMenuButton">
                      Get Support
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item nav-link" href="ms-windows-store://pdp?&productid=9p7bp5vnwkx5/">
                          &nbsp;Quick Assist
                        </a>
                      </li>
                      <li><a class="dropdown-item nav-link"
                          href="https://www.ultraviewer.net/en/UltraViewer_setup_6.6_en.exe">
                          &nbsp;Ultraviewer
                        </a>
                      </li>
                      <li><a class="dropdown-item nav-link" href="https://assist.zoho.com/install-customer-plugin">
                          &nbsp;Zoho Assist
                        </a>
                      </li>
                      <li><a class="dropdown-item nav-link"
                          href="https://download.teamviewer.com/download/TeamViewer_Setup_x64.exe">
                          &nbsp;Team Viewer
                        </a>
                      </li>
                      <li><a class="dropdown-item nav-link" href="https://dl.anyviewer.com/AnyViewerSetup.exe">
                          &nbsp;Any Viewer
                        </a>
                      </li>
                    </ul>
                  </li>
                </div> -->


              </ul>

            </div>
          </div>
        </nav>
      </div>

    </div>