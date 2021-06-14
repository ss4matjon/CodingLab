
   <section class="section products">
    <div class="products-layout container">
      <div class="col-1-of-4">
        <div>
          <div class="block-title">
            <h3>Category</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Shoes</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Bags</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Clothings</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div>

      </div>
      <div class="col-3-of-4">
        <div class="product-layout">

      <?php 

$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);
 
  while($row = mysqli_fetch_assoc($result)) {
    

    ?>
         
          <div class="product">
            <div class="img-container">
              <img src="images/<?php echo $row["image"] ?>" alt="" />
              <div class="addCart">
                <span><a href="productDetails.php?id=<?php echo $row['id'] ?> "><i class="fas fa-shopping-cart"></a></i></span>
              </div>

              <ul class="side-icons">
                <span><a href="productDetails.php?id=<?php echo $row['id'] ?> "><i class="fas fa-search"></a></i></span>
                <span><a href="productDetails.php?id=<?php echo $row['id'] ?> "><i class="far fa-heart"></a></i></span>
                <span><a href="productDetails.php?id=<?php echo $row['id'] ?> "><i class="fas fa-sliders-h"></a></i></span>
              </ul>
            </div>
            <div class="bottom">
              <a href="productDetails.php?id=<?php echo $row['id'] ?> "><?php echo $row["name"] ?></a>
              <div class="price">
                <span><?php echo $row["price"] ?></span>
              </div>
            </div>
          </div>

       <?php 
            }
            ?>
        </div>

        <ul class="pagination">
          <a href="products.php"><span>1</span></a>
          <a href="products.php"><span class="icon">››</span></a>
          <a href="products.php"><span class="last">Last »</span></a>
        </ul>
      </div>
    </div>
  </section>
