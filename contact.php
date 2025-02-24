<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contact.css">
    <title>Contact Us</title>
    <!--Icons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>      
</head>
<body>
   <section class="contact">
      <div class="content">
         <h2>Contact Us</h2>
         <p>We are at your Service</p>
      </div>
      <div class="container">
         <div class="contactInfo">
            <div class="box">
               <div class="icon"><i class="ri-map-pin-line"></i></div>
               <div class="text">
                  <h3>Address</h3>
                  <p>Bamenda <br> Regional Hospital</p>
               </div>
            </div>
            <div class="box">
               <div class="icon"><i class="ri-phone-fill"></i></div>
               <div class="text">
                  <h3>Phone</h3>
                  <p>+237-681-258-055</p>
               </div>
            </div>
            <div class="box">
               <div class="icon"><i class="ri-mail-line"></i></div>
               <div class="text">
                  <h3>Email</h3>
                  <p>lumndele@gmail.com</p>
               </div>
            </div>
         </div>
         <div class="contactForm">
            <form method="POST" action="php/user/message.php">
            <?php  if(isset($_SESSION['success'])){ ?>
                     <code style="color:green;"><?php echo($_SESSION['success']) ?></code>
                  <?php unset($_SESSION['success']); 
               } ?>             
               <h2>Send Us a Message</h2>
               <div class="inputBox">
                  <input type="text" name="name" required="required">
                  <span>Full Name</span>
               </div>
               <div class="inputBox">
                  <input type="text" name="email" required="required">
                  <span>Email</span>
                 <?php  if(isset($_SESSION['error'])){ ?>
                     <code style="color:red;"><?php echo($_SESSION['error']) ?></code>
                  <?php unset($_SESSION['error']); 
               } ?>
               </div>
               <div class="inputBox">
                  <textarea name="message" required="required"></textarea>
                  <span>Type your message...</span>
               </div>
               <div class="inputBox">
                  <input type="submit" name="" value="Send">
               </div>
            </form>
         </div>
      </div>
   </section>
</body>
</html>
