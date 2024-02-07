<?php
$conn =mysqli_connect('localhost','root','','amazon');
$item = $_GET['item_id'];

$sql = "SELECT * FROM `products` where id = $item";

$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">

            <div class="logo1">
                <img src="img/a1.jpg" alt="amazon logo" />
            </div>
            
            <div class="nav-address">
                <p class="first">Deliver to</p>
                <div class="icone">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="last">India</p>
                </div>
            </div>
            <div class="nav-search">
                <select class="search-select">
                    <option>ALL</option>
                </select>
                <input placeholder="Search Amazon" class="search-input">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="nav-singin">
                <p><span>Hello, sign in</span></p>
                <p class="ss">Account & Lists</p>

            </div>
            <div class="nav-return">
                <p><span>Returns</span></p>
                <p class="ss">& Orders</p>
            </div>
            <div class="nav-cart">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart

            </div>
            
            <!-- nav bar ends -->
          
    </header> 
      <!-- second nav starts here -->
      <div class="white">

      <div class="btn-home">
       <a href="index.php"> <i class="fa-solid fa-arrow-left"></i></a>
       
    </div> 

      </div>
  <!-- second nav ends here -->
  <!-- third section starts here -->
<?php

while ($row = mysqli_fetch_assoc($res)) {
  
    $id = $row['id'];
    $img =$row['image'];
    $des = $row['description'];
    $pp =$row['price'];

    echo ' <div class="last-section">
          <div class="left">
              <div class="image">
                  <img src="'.$img.'"  srcset="">
              </div>
          </div>
          <div class="right">
              <p>'.$des.'</p>
              <p><i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star-half-stroke"></i>    
                 
                <p class="rs"><i class="fa-solid fa-indian-rupee-sign">'.$pp.'</i></p>
                <button>BUY</button>
          </div>
        </div>';
}


?>
