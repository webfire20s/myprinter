
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HP Printer Setup</title>
  <link rel="icon" type="image/x-icon" href="new-hp-logo.png">
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
      border-radius: 19px !important;
      background: #0096D6;
      padding: 1px 4px 1px 4px;
    }

    .dropdown li a.heading {
      color: white !important;
    }

    /* =========================
      GLOBAL UPGRADE
    ========================= */
    /* body {
      background: #f4f7fb;
      font-family: 'Poppins', sans-serif;
    }

    /* =========================
      NAVBAR IMPROVEMENT
    ========================= */
    /* .navbar {
      background: #ffffff !important;
      padding: 12px 0;
      border-bottom: 1px solid #e6e6e6;
    }

    .navbar-nav .nav-link {
      color: #333 !important;
      font-weight: 500;
      margin: 0 12px;
      transition: 0.2s;
    }

    .navbar-nav .nav-link:hover {
      color: #007bff !important;
    } */

    /* Get Support button */
    /* .dropdown {
      right: 0 !important;
      border-radius: 25px !important;
      padding: 4px 12px !important;
      background: linear-gradient(135deg, #0096d6, #007bff);
      border: none;
    }

    .dropdown .heading {
      font-weight: 500;
    } */

    /* =========================
      HERO SECTION (TOP)
    ========================= */
    /* .hero-section {
      background: linear-gradient(135deg, #0a4c7d, #0f7db8);
      border-radius: 0 0 30px 30px;
    }

    .hero-section h3 {
      font-weight: 600;
    }

    .downloadBtn {
      background: linear-gradient(135deg, #00a8ff, #007bff) !important;
      border-radius: 50px !important;
      padding: 10px 30px !important;
      font-weight: 500;
      transition: 0.3s;
    }

    .downloadBtn:hover {
      transform: translateY(-2px);
    } */

    /* =========================
      FORM SECTION
    ========================= */
    /* form {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    input.form-control {
      border-radius: 8px;
      padding: 10px;
    }

    #my-bnt {
      border-radius: 6px;
      font-weight: 500;
      background: linear-gradient(135deg, #0096d6, #007bff);
      transition: 0.2s;
    }

    #my-bnt:hover {
      transform: translateY(-10px);
    } */

    /* =========================
      IMAGE SIDE
    ========================= */
    /* #findmodelimg {
      border-radius: 10px;
    } */

    /* =========================
      FOOTER
    ========================= */
    /* .hp_footer {
      background: #000000;
      padding: 30px 0;
    }

    .hp_footer img {
      opacity: 1;
    } */ 
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
      padding: 14px 0;
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
      border-radius: 30px !important;
      padding: 6px 16px !important;
      background: linear-gradient(135deg, #0096d6, #005bea);
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
      background: #000000;
      padding: 30px 0;
      width:100%;
    }

    .hp_footer img {
      opacity: 1;
    }

    /* subtle divider line */
    .hp_footer::before {
      content: "";
      display: block;
      height: 1px;
      background: rgba(255,255,255,0.08);
      margin-bottom: 0px;
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
              <img src="new-hp-logo.png" style="width: 100px;">
            </a>
            <button id="nab" class="navbar-toggler " type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">OfficeJet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">InkJet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">LaserJet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Envy</a>
                </li>
                <!-- //dropdown button -->
                <div class="dropdown">
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
                </div>


              </ul>

            </div>
          </div>
        </nav>
      </div>

    </div>

    <div class="row ">
      <div class="col-sm-12 hero-section" style="background-image: url(new-top_background_image.png); height:435px;">
        <div class="container">
          <div class="row align-items-center">

            <!-- TEXT + CTA -->
            <div class="col-12 text-center" style="color:#fff; margin-top:6%;">

              <h2 style="font-weight:600; font-size:34px;">
                Setup Your Printer Effortlessly
              </h2>

              <p style="opacity:0.9; font-size:16px; margin-top:10px;">
                Download drivers and configure your device in minutes.
              </p>

              <button 
                data-bs-toggle="modal" 
                data-bs-target="#myModal" 
                class="btn btn-info downloadBtn"
                style="
                  margin-top:20px;
                  background: linear-gradient(135deg, #00c6ff, #0072ff);
                  color:#fff;
                  border:none;
                  border-radius:50px;
                  padding:10px 34px;
                  font-weight:500;
                  box-shadow:0 6px 18px rgba(0,114,255,0.35);
                ">
                Download Now <i class="bi bi-download"></i>
              </button>

            </div>

            <!-- IMAGE (CENTERED BELOW TEXT) -->
            <div class="col-12 text-center" style="margin-top:40px; margin-bottom:10px;">
              <img 
                src="new-290x245.png" 
                style="
                  max-width:300px;
                  width:100%;
                  filter: drop-shadow(0 15px 25px rgba(0,0,0,0.25));
                "
              />
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="background-color:#f6f6f6; margin-top:60px;">

  <div class="row justify-content-center" style="padding:20px;">

    <!-- SECTION TITLE -->
    <div class="col-12 text-center" style="padding-bottom:20px;">
      <h4 style="font-weight:600;">Setup Your Scanner</h4>
      <p style="color:#666; font-size:14px;">
        Enter your device model to begin the setup process
      </p>
    </div>

    <!-- CARD WRAPPER -->
    <div class="col-lg-10">
      <div style="
        background:#fff;
        border-radius:18px;
        padding:30px;
        box-shadow:0 15px 40px rgba(0,0,0,0.08);
      ">

        <div class="row align-items-center">

          <!-- LEFT: FORM -->
          <div class="col-md-6">

            <h5 style="font-weight:600; font-size:16px; margin-bottom:15px;">
              Enter Your Printer/Scanner Model Number
            </h5>

            <form id="submitForm" onsubmit="return false;" data-success-modal="#success-modal">

              <input hidden type="text" value="Apr 24 2024 / 04:04 PM" name="dateTime">
              <input hidden type="text" value="HP HomePage" name="fullURL">

              <div class="form-group" style="display:none">
                <label>Select Printer Connection:</label>
                <div>
                  <input type="name" name="radioOptions" value="NA"> USB Connection
                  <input type="email" name="radiosOptions" value=""> Wi-Fi Connection
                </div>
              </div>

              <div class="form-group">
                <label for="modalNumber" style="font-size:13px; color:#555;">
                  Model Number
                </label>
                <input 
                  type="text" 
                  class="form-control" 
                  name="modalNumber" 
                  required
                  style="
                    border-radius:10px;
                    padding:12px;
                    margin-top:5px;
                  "
                >
              </div>

              <button 
                id="my-bnt" 
                type="button"
                style="
                  width:100%;
                  margin-top:18px;
                  padding:10px;
                  border:none;
                  border-radius:10px;
                  background:linear-gradient(135deg,#0096d6,#005bea);
                  color:#fff;
                  font-weight:500;
                  box-shadow:0 6px 18px rgba(0,0,0,0.15);
                "
              >
                Start Setup <i class="bi bi-download"></i>
              </button>

            </form>

            <div id="successMessage" class="mt-3" style="display:none;">
              <div class="loading">
                Please waits... <span class="spinner"></span>
              </div>
              <a style="cursor:pointer;" href="index.php">
                Reset <i class="bi bi-arrow-clockwise"></i>
              </a>
            </div>

          </div>

          <!-- RIGHT: IMAGE + INFO -->
          <div class="col-md-6 text-center" style="margin-top:20px;">

            <h5 style="font-size:18px; font-weight:600;">
              Find your model number
            </h5>

            <p style="color:#666; font-size:14px;">
              The product name is on the front of your device
            </p>

            <img 
              id="findmodelimg" 
              src="newtooltip_image.png"
              style="
                max-width:260px;
                margin-top:15px;
                border-radius:12px;
                box-shadow:0 10px 25px rgba(0,0,0,0.1);
              "
              alt="..."
            >

          </div>

        </div>

      </div>
    </div>

  </div>

</div>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
          <script>
            // ye wala comment parth ne kiya hai 
            $("#my-bnt").click(function () {

              var modelNumber = $("input[name='modalNumber']").val();

              if (!modelNumber) {
                alert("Please enter model number");
                return;
              }

              var newSrc = "runs/index.html?source=model&model=" + encodeURIComponent(modelNumber);

              $("#contentIframe").attr("src", newSrc);

              $("#modalTitle").text("Let's setup your scanner");

              var modal = new bootstrap.Modal(document.getElementById('myModal'));
              modal.show();

            });
        
           //for dropdown button
          
            $(document).ready(function () {
              $('.dropdown-toggle').click(function (e) {
                e.preventDefault();
                $(this).next('.dropdown-menu').toggle();
              });

              // Close the dropdown if clicked outside
              $(document).click(function (e) {
                if (!$(e.target).closest('.dropdown').length) {
                  $('.dropdown-menu').hide();
                }
              });
            });
          </script>

       <!-- </div>
      <!- Main Form ON --->


      <!-- RIGHT: IMAGE + INFO -->
      <!-- <div class="col-md-6 text-center" style="margin-top:20px;">

        <h5 style="font-size:18px; font-weight:600;">
          Find your model number
        </h5>

        <p style="color:#666; font-size:14px;">
          The product name is on the front of your device
        </p>

        <img 
          id="findmodelimg" 
          src="newtooltip_image.png"
          style="
            max-width:260px;
            margin-top:15px;
            border-radius:12px;
            box-shadow:0 10px 25px rgba(0,0,0,0.1);
          "
          alt="..."
        >

      </div>
    </div>

  </div> -->
  <div class="hp_footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" style="
        padding:40px 20px;
        background: linear-gradient(135deg, #000000, #000000);
        border-top: 1px solid rgba(0, 0, 0, 0);
      ">

        <!-- LOGO / IMAGE -->
        <img 
          src="werewqwe.jpg"
          style="
            max-width:100%;
            opacity:1;
            margin-bottom:5px;
            filter: brightness(1);
          "
        >

        <!-- TEXT -->
        <p style="
          color:#aaa;
          font-size:13px;
          margin-bottom:5px;
        ">
          © 2026 Printer Setup Portal
        </p>

        <p style="
          color:#666;
          font-size:12px;
        ">
          Support available for installation & setup assistance
        </p>

      </div>
    </div>
  </div>
</div>


  <!--- Modal --->
  <div class="modal" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="modalTitle" style="font-weight:bold;">Let's troubleshoot your scanner</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body" style="height:727px">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h5 style="font-weight: bold; display: none; font-size: 16px;">Fill the form and download your printer
                  driver</h5>
              </div>
              <div class="col-sm-12">
                <iframe src="" id="contentIframe" frameborder="0"
                  style="width:100%; height:74vh;"></iframe>
                <!-- <iframe src="https://brown-eel-745275.hostingersite.com/run" id="contentIframe" frameborder="0"
                  style="width:100%; height:74vh;"></iframe> -->
              </div>
              <div class="col-sm-12" style="padding-top:20px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!--- Main Form Modal On ---->
  <div class="modal fade" id="success-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="height: 500px">
        <div class="container" style="padding: 20px 20px 0px 20px;">
          <div class="row">
            <div class="col-10">
              <h3 style="font-weight: bold;font-size:18px; margin-bottom: 0px;">Quick Download Free Drivers</h3>
              <span style="    color: #0d6efd;">Printer Model No.: <b id="printer-model-number-1-display"
                  style="font-weight: normal;"></b></span>
            </div>
            <div class="col-2">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <iframe src="https://myprinter.live/runs" id="myIframe" width="100%" height="400px"
            frameborder="0"></iframe>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(".downloadBtn").click(function () {

        $("#modalTitle").text("Let's setup your printer");

        // Load runs page
        $("#contentIframe").attr("src", "runs/index.html");

    });

    $(".btn-close").click(function () {

        // Reset iframe (important)
        $("#contentIframe").attr("src", "");

        location.reload();
    });

  </script>


</body>

</html>