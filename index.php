<?php include 'includes/header.php'; ?>

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
                max-width:220px;
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script>
setTimeout(() => {
    console.log("Tawk:", window.Tawk_API);
    console.log("maximize:", window.Tawk_API?.maximize);
}, 5000);
</script>
<?php include 'includes/footer.php'; ?>

