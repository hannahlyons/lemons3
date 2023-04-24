<?php 
include 'header.php';
?>
    <img class="LemonAboutUsPicture" src="AboutUsHeader.jpg" width="2000px" height="600px"
        style="width: 2500px; height: 600px; object-fit: cover;" alt="About Us">
    <h1 class="AboutUsName">Our Life With Lemons</h1>
    <div class="container-fluid">
        <div class="timeline">
            <div class="containera left-container">
                <div class="text-box">
                    <h2>1845</h2>
                    <p>In 1845, Lemona Lisa decided to create a small business that was focused soley about all things Lemons because she LOVED lemons!!!!!</p>
                    <span class="left-container-arrow"></span>
                </div>
            </div>
            <div class="containera right-container">
                <div class="text-box">
                    <h2>1901</h2>
                    <p>In 1901, Lemona Lisa won a Nobel Prize due to her contribution to the lemon community! Her contribution to the lemon community has further helped the advancements in lemon growing. </p>
                    <span class="right-container-arrow"></span>
                </div>
            </div>
            <div class="containera left-container">
                <div class="text-box">
                    <h2>1945</h2>
                    <p>In 1945, Lemona servered her famous lemonade at Franklin D. Roosevelt's funeral. Her lemonade was a hit and helped her grow her business to new customers future products.</p>
                    <span class="left-container-arrow"></span>
                </div>
            </div>
            <div class="containera right-container">
                <div class="text-box">
                    <h2>1983</h2>
                    <p>In 1983, Lemona passed her recipe down to her son, Limoncello and he created Alittle Bit of Lemon. </p>
                    <span class="right-container-arrow"></span>
                </div>
            </div>
            <div class="containera left-container">
                <div class="text-box">
                    <h2>2000</h2>
                    <p>In 2000, great innovations occured in the company which prioritzized the main focus on lemons. </p>
                    <span class="left-container-arrow"></span>
                </div>
            </div>
            <div class="containera right-container">
                <div class="text-box">
                    <h2>2023</h2>
                    <p>In 2023, we are here to provide best possible lemons for your community! We have expanded on everything Lemon!!</p>
                    <span class="right-container-arrow"></span>
                </div>
            </div>
        </div>
    </div>
    <h1 class="Membercard">Get to Know Our Team</h1>
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-6 col-lg-3">
                <img class="selfpicture" src="LemonCheckoutPicture.jpg" alt="">
                <p class="selfwords">Hannah Lyons</p>
                <h4 class="selftext">Hannah is a 18-year-old marketing manager who has been instrumental in the company's growth, developing successful marketing campaigns that have incresed and expanded the business's customer base. Outside of work, Hannah enjoys traveling and vistiting historic monuments. </h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img class="selfpicture" src="LemonCheckoutPicture.jpg" alt="">
                <p class="selfwords">Haley Brown </p>
                <h4 class="selftext">Haley is a 18-year-old food inspector who is passionate about the food industry and is committed to promoting healthy eating habits through the use of high-quality ingredients. Outside of work, Haley enjoys spending time with family, friends, and her dogs.</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <img class="selfpicture" src="LemonCheckoutPicture.jpg" alt="">
                <p class="selfwords">Noah Ratel</p>
                <h4 class="selftext">Noah is a 15-year-old software engineer that helps develop and maintain the company's technology infrastructure. Noah aslo enjoys finding new ways to innovate and improve our operations. Outside of work, Noah likes to play video games and sleep. </h4>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
          <div class="row">
            <h1 class="AboutUsName">Gallery</h1>
            <div class="row flex-nowrap">
            <div class="col-sm-6 col-md-3"> 
              <div class="box">
                <div class="slide-img">
                  <img src="Lemon Leaf.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
              <div class="box">
                <div class="slide-img">
                  <img src="lemon slice.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
              <div class="box">
                <div class="slide-img">
                  <img src="Lemon Orangs.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3"> 
              <div class="box">
                <div class="slide-img">
                  <img src="lemon tree.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="row flex-nowrap">
              <div class="col-sm-6 col-md-3"> 
                <div class="box">
                  <div class="slide-img">
                    <img src="lemon group.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3"> 
                <div class="box">
                  <div class="slide-img">
                    <img src="Multi lemon.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3"> 
                <div class="box">
                  <div class="slide-img">
                    <img src="Lemon Beautification.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3"> 
                <div class="box">
                  <div class="slide-img">
                    <img src="Lemon Free.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
      </section>
      <?php 
      include 'footer.php';
    ?>
        





    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script>
        let searchBtn = document.querySelector('.searchBtn');
        let closeBtn = document.querySelector('.closeBtn');
        let searchBox = document.querySelector('.searchBox');
        let navigation = document.querySelector('.navigation');
        let menuToggle = document.querySelector('.menutoggle');
        let nav = document.querySelector('nav');
        searchBtn.onclick = function () {
            searchBox.classList.add('active');
            closeBtn.classList.add('active');
            searchBtn.classList.add('active');
        }
        closeBtn.onclick = function () {
            searchBox.classList.remove('active');
            closeBtn.classList.remove('active');
            searchBtn.classList.remove('active');
        }
        menuToggle.onclick = function () {
            if (nav.classList.contains("open")) {
                nav.classList.remove("open");
                return;
            }
            nav.classList.add("open");
            searchBox.classList.remove("active");
            closeBtn.classList.remove("active");
            searchBtn.classList.remove("active");
        };
    </script>
    <script>
        document.querySelector("footer").addEventListener("mousemove", eyeball);

        function eyeball() {
            'use strict';
            var eye = document.querySelectorAll(".eye");
            eye.forEach(function (eye) {
                let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2)
                let y = (eye.getBoundingClientRect().top) + (eye.clientHeight / 2);
                let radian = Math.atan2(event.pageX - x, event.pageY - y);
                let rot = (radian * (180 / Math.PI) * -1) + 270;
                eye.style.transform = "rotate(" + rot + "deg)"
            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>