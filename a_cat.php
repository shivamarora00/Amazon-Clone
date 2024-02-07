<?php
$conn = mysqli_connect('localhost','root','','amazon');
$cat = $_GET['catid'];

$sql ="SELECT * FROM `products` where c_id = $cat";
$res = mysqli_query($conn, $sql);

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

    while($row = mysqli_fetch_assoc($res)) {
        $id=$row['id'];
        $des=$row['description'];
        $img=$row['image'];
        $pp=$row['price'];
        
    echo    '<a href="a_item.php?item_id='.$id.'">
    <div class="third-section"> 
          <div class="left">
              <div class="image">
                  <img src="'.$img.'" >
              </div>
          </div>
          <div class="right">
              <p>'.$des.'</p>
              <p><i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i></p>
                  <p class="rs"><i class="fa-solid fa-indian-rupee-sign">'.$pp.'</i></p>
          </div>
        </div>
        </a> ';
    }
        
    ?>
      <!-- <div class="third-section">
        <div class="left">
            <div class="image">
                <img src="toy02.jpg"  srcset="">
            </div>
        </div>
        <div class="right">
            <p>Rubik’s Cube, The Original 3x3 Color-Matching Puzzle Classic Problem-Solving Challenging Brain Teaser Fidget Toy, for Adults & Kids Ages 8 and up</p>
            <p><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i></p>
                <p class="rs"><i class="fa-solid fa-indian-rupee-sign">450.00</i></p> 
        </div>
      </div>
      <div class="third-section">
        <div class="left">
            <div class="image">
                <img src="toy03.jpg"  srcset="">
            </div>
        </div>
        <div class="right">
            <p>Mattel Games UNO Show ‘em No Mercy Card Game in Storage & Travel Tin for Kids, Adults & Family Night with Extra Cards, Special Rules & Tougher Penalties (Amazon Exclusive)</p>
            <p><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i></p>
                <p class="rs"><i class="fa-solid fa-indian-rupee-sign">250.00</i></p>
        </div>
      </div>
      <div class="third-section">
        <div class="left">
            <div class="image">
                <img src="toy04.jpg"  srcset="">
            </div>
        </div>
        <div class="right">
            <p>PairPear Wooden Family Car for Dolls,Wooden Toys Dollhouese Furniture Accessories Playset,Kids Pretend Preschool Play Vehicle Toys Gift for Toddler 3 Years and Up</p>
            <p><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>    
               
              <p class="rs"><i class="fa-solid fa-indian-rupee-sign">982.00</i></p>
        </div>
      </div> -->

  <!-- third section ends here -->

</body>
</html>

