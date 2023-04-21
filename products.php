<?php
    include_once '/dbh.inc.php';
    include 'header.php';
?>

    <h1>Hello World!</h1>

    <?php
        $sql = "SELECT * FROM Products;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['price'];
            }
        }
    ?>  

    <footer>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1>Squeeze the Day</h1>
                    <br>
                    <h6>Enjoy more lemon fun with a subscription</h6>
                    <br>
                    <form class="p-4">
                        <input type="Email" placeholder="Email..." required>
                        <button type="submit">
                            <ion-icon name="send-outline"></ion-icon>
                        </button>
                    </form>
                </div>
                <div class="col-sm-6 p-4 d-flex justify-content-center">
                    <div class="face">
                        <div class="eyes">
                            <div class="eye"></div>
                            <div class="eye"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-col-3 p-4">
                <div class="col-sm-4">
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <ion-icon class="footericons" name="chatbox-ellipses-outline"></ion-icon>
                            <p>.....</p>
                            <a href="checkout.html" class="btn btn-outline-secondary">Leave a Review</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="card" style="width: 13rem;">
                        <div class="card-body">
                            <ion-icon class="footericons" name="phone-portrait-outline"></ion-icon>
                            <p>.....</p>
                            <a href="aboutus.html" class="btn btn-outline-secondary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 justify-content-evenly">
                    <h4>Follow Our Socials</h4>
                    <ion-icon class="Socials"  name="logo-instagram"></ion-icon>
                    <ion-icon class="Socials" name="logo-facebook"></ion-icon>
                    <ion-icon class="Socials" name="logo-linkedin"></ion-icon>
                    <ion-icon class="Socials" name="logo-twitter"></ion-icon>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
    <div class="container">
        <div class="card">
            <div class="imgBx">
                <img src="LemonProductPic.webp" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</html>