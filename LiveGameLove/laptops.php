<html>

<head>
    <title>LiveGameLove</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="CSS/headerandfooter.css">
    <link rel="stylesheet" href="CSS/stylesheet.css">




</head>

<body>
    <div class="header">
        <div class="inner-header">
            <div class="logo-container">
                <h1>Live<span>Game</span>Love</h1>

            </div>
            <ul class="nav">
                <a href="home.php">
                    <li>Home</li>
                </a>
                <a href="inputpage.php">
                    <li>Input Page</li>
                    </a>
                    <a href="dealspage.php">
                    <li>Deals</li>
                </a>
                <a href="#bottom">
                    <li>Contact and Info</li>
                </a>
            </ul>

        </div>

    </div>


<div class="shop">
<?php
include 'db.php';
$query = "SELECT * FROM LAPTOPS ORDER BY PRICE";
if ($result = $mysqli->query($query)) {
    // Don't do anything if successful.
 }
 else
 {
     echo "Error getting cars from the database: " . mysql_error()."<br>";
 }
 while ($result_ar = mysqli_fetch_assoc($result)) {                        //This will make a sepparate thing to hold the information of a row for each row


echo    "<div class='component'>";
echo        "<img src='css/pictures/". $result_ar['PIC_FILE_NAME'] . "' alt='laptop" .$result_ar['ID'] . "' width='500' height='350'>";  //This will pull a picture with the corresponding image file name for the 
echo    "<div class='info'>";
echo        "<a href='#'>Add To Cart</a>";
echo  "<h1>".$result_ar['NAME']."</h1><br>";
echo "<h2>Specifications: </h2><br>";
echo "<div class='.specs'>";
echo "<b>Brand: </b>" . $result_ar['BRAND']."<br>";
echo "<b>Touch Screen: </b>" . $result_ar['TOUCH_SCREEN']."<br>";
echo "<b>Storage: </b>" . $result_ar['STORAGE_IN_GIGABYTES']." Gigabytes<br>";
echo "<b>Ram:</b> " . $result_ar['RAM'] . " Gigabytes<br>";
if(date("l")==$result_ar['DAY_DEAL']){                                         //depending on the day deals will change
    $deal=.9;
    echo"<b>Price Was:</b> $". number_format($result_ar['PRICE'],2). "  ";
    echo "<b><span>Price Now:</b> $" . number_format($result_ar['PRICE']*$deal,2)."</span><br>";                                 
}
else{
    $deal=1;
    echo "<b>Price:</b> $" . number_format($result_ar['PRICE']*$deal,2)."<br>"; 
}
echo "<b>In Stock:</b> ". $result_ar['IN_STOCK']."<br>";
echo"</div>";

echo    "</div>";
echo    "</div>";

 }
?>

</div>
  
    <div class="footer"id= 'bottom'>

        <div class="footer-content">


            <div class="footer-section about">
                <h2>Live<span>Game</span>Love</h2>
                <p class="good"> This is a business where you can purchase or sell computer parts. We have all the latest stuff from the Minecraft 
                    raytracing RTX's all the way to the GTX 001. Our stock is incredible and your computer will be too. Don't worry all our parts a
                    re made in America, so you dont have to risk getting the Corona Virus.</p>
                <div class="contact">
                    <span><i class="fas fa-phone" style="font-size:20px;color:white;"></i> &nbsp; (530)680-8781</span>
                    <span><i class="fas fa-envelope" style="font-size:20px;color:white;"></i> &nbsp;
                        zmanplants@gmail.com</span>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/zackugh/"><i class="fab fa-instagram"
                            style="font-size:30px;color:pink;"></i></a>
                    <a href="https://accounts.snapchat.com/accounts/snapcodes"><i class="fab fa-snapchat"
                            style="font-size:30px;color:yellow;"></i></a>

                </div>
            </div>
            <div class="footer-section link">
                
            </div>
            <div class="footer-section social">

            </div>
            <div class="footer-bottom">
                &copy; LiveGameLove.com | Designed by Zachary Plants
            </div>
        </div>
    </div>

</body>

</html>