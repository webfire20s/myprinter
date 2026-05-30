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
    $("#step6Text").text(messages[i]);
    i++;

    if (i >= messages.length) {
      clearInterval(interval);

      setTimeout(() => {
        showFinalError(); // ✅ USE THIS
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

  $("#finalMessage").hide(); // 🔥 important
});

// =============================
// SUPPORT FORM SUBMIT
// =============================

// $(document).on("submit", "#supportForm", function (e) {
//   e.preventDefault();

//   let formData = $(this).serialize();

//   $.ajax({
//     url: "send_mail.php",
//     type: "POST",
//     data: formData,
//     success: function (response) {
//       $("#supportForm").hide();
//       $("#formSuccessMsg").fadeIn();
//     },
//     error: function () {
//       alert("Something went wrong. Please try again.");
//     }
//   });
// });


// inside runs/script.js
function showFinalError() {

  $(".step").hide();

  // Show support options screen
  $("#finalMessage").fadeIn();
}

// =============================
// OPEN LIVE CHAT
// =============================
$(document).on("click", "#openLiveChat", function () {

  try {

    // close modal safely
    if (window.parent) {

      let modalElement =
        window.parent.document.getElementById("myModal");

      if (modalElement) {

        modalElement.classList.remove("show");
        modalElement.style.display = "none";

        let backdrop =
          window.parent.document.querySelector(".modal-backdrop");

        if (backdrop) {
          backdrop.remove();
        }

        window.parent.document.body.classList.remove("modal-open");
      }

    }

  } catch(e) {
    console.log(e);
  }

  // open tawk
  if (
    window.parent &&
    window.parent.Tawk_API &&
    typeof window.parent.Tawk_API.maximize === "function"
  ) {

    setTimeout(function () {
      window.parent.Tawk_API.maximize();
    }, 300);

  } else {

    alert("Live chat is loading. Please try again.");

  }

});