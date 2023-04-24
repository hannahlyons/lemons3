<?php 
include 'header.php';
?>
    <section>
        <h1 class="LemonCheckoutPictureText">Check-out</h1>
        <img class="LemonCheckoutPicture" src="LemonCheckoutPicture.jpg" alt="">
    </section>
    <?php 
      include 'footer.php';
    ?>
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