<?php
    include 'lemons3/dbh.inc.php';
    include 'header.php';
?>
<body>


    <section class="hero">
        <h2>Super Value Deals</h2>
        <h1>On All Products</h1>
        <p>save more with coupons that are up to 70% off!</p>
        <button>Shop Now</button>
    </section>
    <section>
  <div class="container">
    <div class="row ">
      <h2 class="animated-h1 p-5">New Arrivials</h2>
      <div class="row flex-nowrap">
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Yellow Lemons</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Green Lemons</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Orange Lemons</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="4.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">John Lemon</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row ">
      <h2 class="animated-h1 p-5">New Arrivials</h2>
      <div class="row flex-nowrap">
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Water Lemon</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Lululemon</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Entire Lemon Tree</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="4.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Lemon Car</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row ">
      <h2 class="animated-h1 p-5">New Arrivials</h2>
      <div class="row flex-nowrap">
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Single Glass* of Lemonade</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Single Glass* of Green Lemonade</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Single Glass* of Orange Lemonade</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="box">
            <div class="slide-img">
              <img src="4.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="#">Lemon Candle</a>
                <span>New Arrivals</span>
              </div>
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <main>   
<?php
// Select all data from the Products table
$sql = "SELECT * FROM Products";
$result = mysqli_query($conn, $sql);

// Check if any data is returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product Name: " . $row["product_name"]. "<br>";
        echo "Product Price: " . $row["product_price"]. "<br>";
        echo "Product Description: " . $row["product_description"]. "<br>";
    }
} 


?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["product_image"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
               </p>
               <p class="product_name"><?php echo $row["product_name"];  ?></p>
               <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
               <p class="discount"><b><del>$<?php echo $row["discount"]; ?></del></b></p>
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add to cart</button>
       </div>
       <?php
     ?>
   </main>
<?php 
      include 'footer.php';
    ?>
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
    <script>
  const form = document.querySelector('#subscribe-form');
  const emailInput = document.querySelector('#email-input');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = emailInput.value;
    // Here you can add code to submit the email to a server/database
    alert(`Thank you for subscribing, ${email}!`);
    emailInput.value = '';
  });
</script>

</body>
</html>