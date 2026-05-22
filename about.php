<?php include 'includes/header.php'; ?>

<style>
/* =========================
   PREMIUM PAGE STYLE
========================= */

.page-hero {
  position: relative;
  background:
    linear-gradient(rgba(7,44,74,0.88), rgba(0,102,204,0.82)),
    url('new-top_background_image.png');

  background-size: cover;
  background-position: center;

  padding: 110px 20px 90px;
  border-radius: 0 0 40px 40px;
  overflow: hidden;
}

.page-hero::after{
  content:'';
  position:absolute;
  width:500px;
  height:500px;
  background: radial-gradient(circle, rgba(255,255,255,0.12), transparent);
  top:-180px;
  right:-120px;
  filter: blur(40px);
}

.page-hero h1{
  color:#fff;
  font-weight:700;
  font-size:48px;
  margin-bottom:15px;
}

.page-hero p{
  color:rgba(255,255,255,0.88);
  font-size:18px;
}

.about-wrapper{
  margin-top:-40px;
  position:relative;
  z-index:10;
}

.about-card{
  background:#fff;
  border-radius:24px;
  padding:45px;
  box-shadow:0 10px 40px rgba(0,0,0,0.08);
}

.about-card h2{
  font-weight:700;
  margin-bottom:20px;
  color:#111;
}

.about-card p{
  color:#666;
  line-height:1.9;
  font-size:15px;
}

.service-grid{
  margin-top:35px;
}

.service-box{
  background:linear-gradient(135deg,#ffffff,#f7fbff);
  border:1px solid rgba(0,123,255,0.08);
  border-radius:18px;
  padding:30px;
  height:100%;
  transition:0.3s;
  box-shadow:0 4px 20px rgba(0,0,0,0.04);
}

.service-box:hover{
  transform:translateY(-6px);
  box-shadow:0 12px 30px rgba(0,0,0,0.08);
}

.service-box h4{
  font-size:20px;
  font-weight:600;
  margin-bottom:15px;
  color:#0b5ed7;
}

.service-box p{
  font-size:14px;
  color:#555;
  margin-bottom:0;
  line-height:1.8;
}

.section-title{
  font-weight:700;
  margin-top:50px;
  margin-bottom:25px;
  color:#111;
}

@media(max-width:768px){

  .page-hero{
    padding:80px 20px 70px;
  }

  .page-hero h1{
    font-size:34px;
  }

  .about-card{
    padding:25px;
  }

}
</style>

<!-- HERO -->
<section class="page-hero text-center">

  <div class="container">

    <h1>About Us</h1>

    <p>
      Dedicated printer setup assistance, troubleshooting
      and customer support solutions.
    </p>

  </div>

</section>

<!-- CONTENT -->
<section class="about-wrapper">

  <div class="container">

    <div class="about-card">

      <h2>Who We Are</h2>

      <p>
        We specialize in helping users simplify printer installation,
        setup, troubleshooting and connectivity management through
        guided support experiences and advanced technical assistance.
      </p>

      <p>
        Our platform focuses on creating seamless support workflows
        that improve setup efficiency, reduce downtime and deliver
        reliable customer assistance across multiple printer environments.
      </p>

      <h2 class="section-title">Service Area</h2>

      <div class="row service-grid">

        <div class="col-md-6 col-lg-4 mb-4">

          <div class="service-box">

            <h4>Focus Value Proposition Development</h4>

            <p>
              We build the tools you need.
            </p>

          </div>

        </div>

        <div class="col-md-6 col-lg-4 mb-4">

          <div class="service-box">

            <h4>Cloud / Infrastructure Scalability</h4>

            <p>
              We make sure your technology grows with your business.
            </p>

          </div>

        </div>

        <div class="col-md-6 col-lg-4 mb-4">

          <div class="service-box">

            <h4>Security Protection</h4>

            <p>
              We help keep your data, systems and reputation protected.
            </p>

          </div>

        </div>

        <div class="col-md-6 col-lg-6 mb-4">

          <div class="service-box">

            <h4>Managed Services Efficiency</h4>

            <p>
              We handle the technology so you can focus on business operations.
            </p>

          </div>

        </div>

        <div class="col-md-6 col-lg-6 mb-4">

          <div class="service-box">

            <h4>AI & Data Insight</h4>

            <p>
              We help organizations make smarter and faster decisions using data-driven strategies.
            </p>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<?php include 'includes/footer.php'; ?>