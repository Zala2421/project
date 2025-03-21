<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="shortcut icon" type="x-icon" href="images\favicon for website.png">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BetweenArt</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="index.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.JPG" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>we're passionate about empowering artists to create stunning resin art pieces. As suppliers of high-quality resin art materials, we're dedicated to providing our customers with the best products and exceptional service. Our team is comprised of art enthusiasts who understand the importance of reliable materials and expert advice. We strive to build long-lasting relationships with our customers and support the growth of the resin art community.

         </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/profileimage1.jpg" alt="">
         <p>Your creating an amazing art works the beauty and uniqueness of resin art pieces.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya Pandey</h3>
      </div>

      <div class="box">
         <img src="images/profileimage1.jpg" alt="">
         <p>I received the tray today and it far exceeded my expectations. The quality is impeccable. It is simply gorgeous. I am looking forward to showing it off to all my friends. Will definitely be a repeat customer..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>kiara </h3>
      </div>

      <div class="box">
         <img src="images/profileimage1.jpg" alt="">
         <p>So beautifully done
         These coasters are a stand-out addition to our table. People immediately notice them and comment how unique and beautiful they are..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>jonny kohli</h3>
      </div>

      <div class="box">
         <img src="images/profileimage1.jpg" alt="">
         <p>This is more than amazing.. can I give more than 5 stars? this artist has do much talent!!! I bought this as a Christmas give, but may keep it because I fell in love with it!!! Absolutely gorgeous. Way exceeded my expectations.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sneha Sharma</h3>
      </div>

      <div class="box">
         <img src="images/profileimage1.jpg" alt="">
         <p>Beautiful necklace!
         I love my necklace, Lauren did such a good job making it! The colors are so vibrant in person and it goes well with so many outfits :) She also gave me the option of changing out the chain to be shorter which was so sweet!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Riya Roy</h3>
      </div>

      <div class="box">
         <img src="images/profileimage1.jpg" alt="">
         <p>your producst are very amazing and quality is very nice and beautiful crafted we personal love your collections.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dhoni</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>