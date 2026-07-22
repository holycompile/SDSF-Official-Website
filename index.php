<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- App / mobile -->
  <meta name="theme-color" content="#162b57">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <title>SDSF | School of Data Science and Forecasting</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- font styles importing -->
     <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>


        <!--Popup -->
        <!-- POPUP OVERLAY -->
            <div id="popup-overlay">

            <div class="popup-box">

                <button id="close-popup">&times;</button>

                <img src="photoes/adm-pop-up.png" alt="Admission Poster">

            </div>

            </div>
        <!-- popup section: this block controls the admission poster overlay  -->
  
  <!-- ===== Header / Navbar ===== -->

        <?php include("header.php"); ?>

 
  <!-- ===== Hero Section (Image Slider) ===== -->
<section class="hero-slider">
  <div class="slide fade">
    <img src="photoes/indexhero4.jpg" alt="Slide 1">
    <div class="hero-text">
      <p class="tagline">Empowering Through Analytics</p>
          <h1 class="code-colored">
            <span class="c1">Creative</span><br>
            <span class="c2">& Logical</span><br>
            <span class="c3">Thinking Ahead.</span>
          </h1>

      
    </div>
  </div>

  <div class="slide fade">
    <img src="photoes/indexhero1.jpg" alt="Slide 2">
    <div class="hero-text">
      <p class="tagline">Decode. Analyze. Predict.</p>
      <h1 class="code-colored">
            <span class="c1">Turning </span><br>
            <span class="c2">Complex Code</span><br>
            <span class="c3">into Clarity</span>
          </h1>

    </div>
  </div>

  <div class="slide fade">
    <img src="photoes/indexhero0.jpg" alt="Slide 3">
    <div class="hero-text">
      <p class="tagline">Data is Power</p>
       <h1 class="code-colored">
            <span class="c1">Where  </span><br>
            <span class="c2">Number Speaks </span><br>
            <span class="c3">& Code Creates</span>
          </h1>
    </div>
  </div>

  <div class="slide fade">
    <img src="photoes/indexhero2.jpg" alt="Slide 4">
    <div class="hero-text">
      <p class="tagline">Learning Beyond Limits</p>
       <h1 class="code-colored">
            <span class="c1">Empopwering</span><br>
            <span class="c2">Innovators of</span><br>
            <span class="c3">the Future</span>
          </h1>
    </div>
  </div>
  <div class="slide fade">
    <img src="photoes/indexhero3.jpg" alt="Slide 4">
    <div class="hero-text">
      <p class="tagline">Dream. Create. Inspire.</p>
       <h1 class="code-colored">
            <span class="c1">Unleashing</span><br>
            <span class="c2">Creativity</span><br>
            <span class="c3">Without Bounds</span>
          </h1>
    </div>
  </div>

    <!-- Arrow Buttons -->
  <a class="prev" onClick="plusSlides(0)">&#10094;</a>
  <a class="next" onClick="plusSlides(0)">&#10095;</a>

  <!-- Dots for manual control -->
  <div class="dots">
    <span class="dot" onClick="currentSlide(1)"></span>
    <span class="dot" onClick="currentSlide(2)"></span>
    <span class="dot" onClick="currentSlide(3)"></span>
    <span class="dot" onClick="currentSlide(4)"></span>
    <span class="dot" onClick="currentSlide(5)"></span>
  </div>
</section>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let slides = document.getElementsByClassName("slide");
      let dots = document.getElementsByClassName("dot");

      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }

      for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }

      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 10000);
    }

    function currentSlide(n) {
      slideIndex = n - 1;
      showSlides();
    }


        function plusSlides(n) {
      slideIndex += n;
      showSlides();
    }

  </script>






  <!-- ===== Notice and News Section ===== -->
                        <section class="notice-section">
                  <h2 class="notice-heading">Latest News & Notices</h2>

                  <div class="notice-list">
                      
                        <!-- Item 1 -->
                        <div class="notice-item">
                          <div class="notice-text">
                              <a href="Second Round Admission of M.Tech. (Data Science) M.Tech. (Data Science) For Working Executive Batch-(2026-2028).pdf" target="_blank">● Second Round Admission of M.Tech. (Data Science)/M.Tech. (Data Science) For Working Executive Batch-(2026-2028)</a>
                          </div>
                        </div>
                  
                        <!-- Item 2 -->
                        <div class="notice-item">
                          <div class="notice-text">
                              <a href="Second Round Admission of M.Sc. (Data Science and Analytics).pdf" target="_blank">● Second Round Admission of M.Sc. (Data Science and Analytics) at School of Data Science and Forecasting</a>
                          </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="notice-item">
                          <div class="notice-text">
                              <a href="admission.php">● Admission 2026</a>
                          </div>
                        </div>

                      


                      


                  </div>
              </section>




               <?php include("footer.php"); ?>



                <!-- this scirpt for the timetbale part under the noitice section-->
               <script>
                document.querySelectorAll(".dropdown").forEach(function(drop){
                    drop.addEventListener("click", function() {
                        const content = this.nextElementSibling;
                        content.style.display =
                            (content.style.display === "block") ? "none" : "block";
                    });
                });
                </script>


               




<script>
    function openContributorModal(event) {
        event.preventDefault(); 
        document.getElementById('menu-toggle').checked = false;
        const modal = document.getElementById('contributorModal');
        modal.style.display = "block";
        document.body.style.overflow = "hidden"; 
    }

    function closeContributorModal() {
        const modal = document.getElementById('contributorModal');
        modal.style.display = "none";
        document.body.style.overflow = "auto"; 
    }

    window.onclick = function(event) {
        const modal = document.getElementById('contributorModal');
        if (event.target === modal) {
            closeContributorModal();
        }
    }
</script>

<!--Placement script -->
<script>
document.addEventListener("click", (e) => {
    const btn = e.target.closest(".ts-btn");
    if (!btn) return;

    e.preventDefault();

    const wrapper = btn.closest(".ts-wrapper");

    // Close if already open
    if (wrapper.classList.contains("open")) {
        wrapper.classList.remove("open");
        return;
    }

    // Close others
    document.querySelectorAll(".ts-wrapper").forEach(w => w.classList.remove("open"));

    // Open this one
    wrapper.classList.add("open");
});
</script>
                           
                <!--popup closing sequence-->
                <script>

                const popup = document.getElementById("popup-overlay");
                const closeBtn = document.getElementById("close-popup");

                closeBtn.addEventListener("click", () => {
                    popup.style.display = "none";
                });

                </script>

</body>
</html>
