<?php 
include 'header.php';
?>
    <section>
        <h1 class="LemonCheckoutPictureText">Check-out</h1>
        <img class="LemonCheckoutPicture" src="LemonCheckoutPicture.jpg" alt="">
    </section>
    <footer class="bg-secondary text-white">
        <div class="container p-4">
          <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
              <div class="col">
                <div class="face">
                  <div class="eyes">
                    <div class="eye"></div>
                    <div class="eye"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
              <h1 class="text-uppercase">Squeeze the Day</h1>
              <br>
              <h6>Enjoy more lemon fun with a subscription</h6>
              <br>
              <form class="p-4">
                <div class="form-group">
                  <input type="Email" class="form-control" placeholder="Email..." required>
                </div>
                <button type="submit" class="btn btn-primary">
                  <ion-icon name="send-outline"></ion-icon>
                </button>
              </form>
              <div class="d-flex justify-content-center">
                <ion-icon class="logo-socials p-4" name="logo-instagram"></ion-icon>
                <ion-icon class="logo-socials p-4" name="logo-facebook"></ion-icon>
                <ion-icon class="logo-socials p-4" name="logo-linkedin"></ion-icon>
                <ion-icon class="logo-socials p-4" name="logo-youtube"></ion-icon>
                <ion-icon class="logo-socials p-4" name="logo-snapchat"></ion-icon>
                <ion-icon class="logo-socials p-4" name="logo-pinterest"></ion-icon>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">
          <p class="m-0">
            © 2023 <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>. All rights reserved.
          </p>
        </div>
      </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
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
            nav.classList.toggle('open');
        }
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
</body>

</html>