<?php

$conn = mysqli_connect('localhost','root','','amazon');
$sql = "SELECT * FROM cat";
$res =mysqli_query($conn,$sql);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body >
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
        </div>
        <!-- second nav bar starts -->
        <div class="nav-menu">
            <div class="sec-nav">
                <i class="fa-solid fa-bars"></i>
                All
            </div>
            <div class="nav-opt">
                <p>Today's Deals</p>
                <p>Customer Service</p>
                <p>Registry</p>
                <p>Gift Cards</p>
                <p>Sell</p>
            </div>
            <div class="shop deals">
                <p>Shop deals in Electronics</p>
            </div>

        </div>
    </header>
    <div class="image-part">
        <div class="img_about">
            <p>You are on amazon.com. You can also shop on Amazon India for millions of products with fast local
                delivery. <a>Click here to go to amazon.in</a></p>
  
        </div>
        <div class="shoping_section">
            <?php
         while ($row = mysqli_fetch_assoc($res)) {
             $id = $row['c_id'];
             $name = $row['name'];
             $img = $row['image'];
       

             echo  ' 
             <div class="box1">
             <a href="a_cat.php?catid='.$id.'"> 
             <div class="box-content">
                 <h2>'.$name.'</h2>
                 <div class="box-image1" style="background: url('.$img.')"></div>
                 <p>See more</p>
                </div>
                </a>
             </div>';
          

            }   
            ?>
               <!-- <div class="box2"><div class="box-content">
                 <h2>'.$name.'</h2>
                 <div class="box-image2">'.$img.'</div>
                 <p>See more</p>
                </div>
             </div> -->

<!-- 
            <div class="box3"><div class="box-content">
                <h2>Electronics</h2>
                <div class="box-image3"></div>
                <p>See more</p>
               </div>
            </div>


            <div class="box4"><div class="box-content">
                <h2>Home & Kitchen</h2>
                <div class="box-image4"></div>
                <p>See more</p>
               </div>
            </div>


            <div class="box5">
                <div class="box-content">
                 <h2>Shop Pet supplies</h2>
                 <div class="box-image5"></div>
                 <p>See more</p>
                </div>
             </div>


             <div class="box6"><div class="box-content">
                 <h2>Discover fashion trends</h2>
                 <div class="box-image6"></div>
                 <p>See more</p>
                </div>
             </div>


             <div class="box7"><div class="box-content">
                 <h2>For your Fitness Needs</h2>
                 <div class="box-image7"></div>
                 <p>See more</p>
                </div>
             </div>


             <div class="box8"><div class="box-content">
                 <h2>Kindle E readers</h2>
                 <div class="box-image8"></div>
                 <p>See more</p>
                </div>
             </div> -->
            
            </div>
            <footer>
                <div class="foot-panel">
                    Back to Top
                </div>
                <div class="foot_panel2">
                    <ul>
                        <p><b>Get to know us</b></p>
                        <li>Careers</li>
                        <li>Blog</li>
                        <li>About Amazon</li>
                        <li>Investor Relations</li>
                        <li>Amazon Devices</li>
                        <li>Amazon Science</li>

                    </ul>
                    <ul>
                        	
                        <p><b>Make Money with Us</b></p>
                        <li>Sell products on Amazon</li>
                        <li>Sell on Amazon Business</li>
                        <li>Sell apps on Amazon</li>
                        <li>Become an Affiliate</li>
                        <li>Advertise your Products</li>
                        <li>Self-Publish with Us</li>
                        <li>Host an Amazon Hub</li>
                       <li> See more make money</li>
                       with Us


                    </ul>
                    <ul>
                        <p><b>Amazon Payment Products</b></p>
                        <li>Amazon Business Card</li>
                        <li>Shop with Points</li>
                        <li>Reload Your Balance</li>
                        <li>Amazon Currency Converter</li>
                      
                    </ul>
                    <ul>
                     	
                        <p><b>  Let Us Help You</b></p>
                        <li>Amazon and COVID-19</li>
                        <li>Your Account</li>
                        <li>Your Orders</li>
                        <li>Shipping Rates & Policies</li>
                        <li>Returns & Replacements</li>
                        <li>Manage Your Content and Devices</li>
                        <li>Amazon Assistant</li>
                        <li>Help</li>

                    </ul>
                </div>
                <div class="footer_panel3">
                    <div class="logo">
                        
                    </div>

                </div>
            </footer>
    </div>
    




</body>

</html>