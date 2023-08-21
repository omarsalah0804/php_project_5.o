<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
   


<div class="heading">
   <h3>contact us</h3>
   <p><a href="index.html">Home</a> <span> / Contact</span></p>
</div>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="./img/A1HtSUkzYzL.webp" alt="">
      </div>

      <form action="" method="post">
         <h3>tell us something!</h3>
         <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
         <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="enter your number" required maxlength="10">
         <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
         <textarea name="msg" class="box" required placeholder="enter your message" maxlength="500" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<footer class = "footer container">
      <div class = "footer-item">
        <h2 class = "brand-name">
          Harmony  <span>HomeStyles</span>
        </h2>
        <p>social media accounts</p>
        <ul class = "footer-icons">
          <li>
            <a href = "#"><i class = "fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "fab fa-twitter"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "fab fa-instagram"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "fab fa-linkedin"></i></a>
          </li>
          <li>
            <a href = "#"><i class = "fab fa-google-plus-g"></i></a>
          </li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>links</h3>
        <ul>
          <li><a href = "#">home</a></li>
          <li><a href = "#">download</a></li>
          <li><a href = "#">pricing</a></li>
          <li><a href = "about.html">about us</a></li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>products</h3>
        <ul>
          <li><a href = "#">chair</a></li>
          <li><a href = "#">sofa</a></li>
          <li><a href = "#">pillow</a></li>
          <li><a href = "#">cushion</a></li>
        </ul>
      </div>

      <div class = "footer-item">
        <h3>support</h3>
        <ul>
          <!-- <li><a href = "#">FAQ</a></li>
          <li><a href = "#">how it works</a></li>
          <li><a href = "#">features</a></li> -->
          <li><a href = "#">contact</a></li>
        </ul>
      </div>
    </footer>


















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>