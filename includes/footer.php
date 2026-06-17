<style>
  .hp_footer {
    background: #212121;
    padding: 40px 0;
    border-top: 1px solid rgba(255,255,255,0.08);
}

.footer-content {
    max-width: 900px;
    margin: auto;
}

.copyright-text {
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    margin-bottom: 10px;
}

.footer-description {
    color: #bdbdbd;
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 15px;
}

.footer-disclaimer {
    color: #d6d6d6;
    font-size: 13px;
    line-height: 1.8;
    padding-top: 15px;
    border-top: 1px solid rgba(255,255,255,0.08);
    margin-bottom: 0;
}

.footer-disclaimer strong {
    color: #ffffff;
}
</style>
<div class="hp_footer">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10 text-center">

                <div class="footer-content">

                    <p class="copyright-text">
                        © <?php echo date('Y'); ?> Printer Setup Portal. All Rights Reserved.
                    </p>

                    <p class="footer-description">
                        Support available for printer installation, setup assistance,
                        troubleshooting, driver downloads, and technical guidance.
                    </p>

                    <p class="footer-disclaimer">
                        <strong>Disclaimer:</strong>
                        We are an independent third party service providers and are not associated with any brand.
                    </p>

                </div>

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
    s1.src='https://embed.tawk.to/69fb05a1d1b9df1c3bc818be/1jnu8s0ea';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>