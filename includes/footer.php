<div class="hp_footer">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" style="
        padding:0px 0px;
        background-color: #212121;
        border-top: 1px solid rgba(33, 33, 33);
      ">

        <!-- LOGO / IMAGE -->
        <img 
          src="werewqwe.jpg"
          style="
            width:100%;
            max-width:100%;
            opacity:1;
            margin-bottom:0px;
            filter: brightness(1);
          "
        >

        <!-- TEXT -->
        <!-- <p style="
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
        </p> -->

      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(".downloadBtn").click(function () {

      localStorage.setItem("fromDownloadBtn", "yes");

      $("#modalTitle").text("Let's setup your printer");

      // ✅ FORCE iframe reload (VERY IMPORTANT)
      let iframe = $("#contentIframe");

      iframe.attr("src", ""); // clear first

      setTimeout(() => {
        iframe.attr("src", "runs/index.html?source=download&time=" + new Date().getTime());
      }, 100); // small delay ensures reload

    });

    $(".btn-close").click(function () {

        // Reset iframe (important)
        $("#contentIframe").attr("src", "");

        location.reload();
    });

  </script>



<!-- BEFORE </body> -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/69e1e1f6c0e3ae1c3248d6e3/1jmd5lb7q';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>