
<?php 
if(isset($_GET['id'])){
    $product_id = $_GET['id'];
   $sql = "SELECT * FROM products  WHERE id='$product_id'";
   $result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
    
$product_name  = $row['name'];
$price  = $row['price'];
$image  = $row['image'];
    $description = $row['description'];
}
?>
   

   <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
          <img src="images/<?php echo $image?>" alt="" />
        </div>
        <div class="thumbnails">
          <div class="thumbnail">
            <img src="./images/product2.jpg" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/AJ1.png" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/product4.jpg" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/product5.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="right">
        <span>Home/T-shirt</span>
        <h1><?php echo $product_name?></h1>
        <div class="price"><?php echo $price?></div>
        <form>
          <div>
            <select>
              <option value="Select Size" selected disabled>
                Select Size
              </option>
              <option value="1">32</option>
              <option value="2">42</option>
              <option value="3">52</option>
              <option value="4">62</option>
            </select>
            <span><i class="fas fa-chevron-down"></i></span>
          </div>
        </form>

        <form class="form">
          <input type="text" placeholder="1" />
          <a href="cart/index.php" class="addCart">Add To Cart</a>
        </form>
        <h3>Product Detail</h3>
        <p>
            <?php echo $description ?>
        </p>
      </div>
    </div>
  </section>