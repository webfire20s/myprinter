// =============================
// STEP NAVIGATION
// =============================

// STEP 1 → STEP 2
$(document).on("click", ".step-btn", function () {
  $(".step").hide();
  $("#step2").show();
});

// STEP 2 → STEP 3
$(document).on("click", ".step2-btn", function () {
  $(".step").hide();
  $("#step3").show();
  startFlow(); // 🔥 start full sequence
});

// =============================
// FLOW CONTROLLER
// =============================

const progressBar = document.getElementById("progressBar");
const statusText = document.getElementById("statusText");
const title = document.getElementById("modalTitle");

// MASTER FLOW
function startFlow() {

  // STEP 3 → DEVICE DETECTION
  title.innerText = "Searching for printers...";
  statusText.innerText = "Scanning devices...";

  setTimeout(() => {
    statusText.innerText = "HP LaserJet 22992 detected ✅";
  }, 1500);

  setTimeout(() => {
    $(".step").hide();
    $("#step4").show();
  }, 3000);

  // STEP 4 → COMPATIBILITY
  setTimeout(() => {
    $(".step").hide();
    $("#step5").show();
    runInstall();
  }, 5000);
}

// =============================
// INSTALLATION PROGRESS
// =============================

function runInstall() {
  let progress = 0;

  const messages = [
    "Downloading drivers...",
    "Installing package...",
    "Configuring device...",
    "Optimizing performance..."
  ];

  let i = 0;

  let interval = setInterval(() => {
    progress += 10;

    if (progressBar) progressBar.style.width = progress + "%";
    if (statusText) statusText.innerText = messages[i % messages.length];

    i++;

    if (progress >= 100) {
      clearInterval(interval);

      // STEP 6 → FINALIZING
      setTimeout(() => {
        $(".step").hide();
        $("#step6").show();
      }, 800);

      // STEP 7 → DRIVER READY
      setTimeout(() => {
        $(".step").hide();
        $("#step7").show();
      }, 2500);

      // STEP 8 → SUPPORT MESSAGE
      setTimeout(() => {
        $(".step").hide();
        $("#step8").show();
      }, 5000);
    }

  }, 400);
}

// =============================
// DOWNLOAD BUTTON (RESET FLOW)
// =============================

$(document).on("click", ".downloadBtn", function () {
  $("#modalTitle").text("Let's setup your scanner");

  $(".step").hide();
  $("#step1").show();

  // Reset progress
  if (progressBar) progressBar.style.width = "0%";
  if (statusText) statusText.innerText = "Initializing...";
});

// =============================
// CLOSE MODAL RESET
// =============================

$(document).on("click", ".btn-close", function () {
  $(".step").hide();
  $("#step1").show();

  if (progressBar) progressBar.style.width = "0%";
});