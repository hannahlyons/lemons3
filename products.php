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
</body>
</html>