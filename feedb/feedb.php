  <?php

  include 'config.php';
  
  error_reporting(0);
  
  session_start();
  
  if (isset($_SESSION['username'])) {
      header("Location: feedb.php");
  }
  
  if (isset($_POST['submit'])) {
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $message = ($_POST['message']);
  
                {
              $sql = "INSERT INTO feedb (fullname, email, message)
                      VALUES ('$fullname', '$email', '$message')";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                  echo "<script>alert('Wow! Feedback send successfully.')</script>";
                  
              }
            }
          
        }
  
  ?>
  

  <!DOCTYPE html>
  <html>
      <head>
      <title>Feedback-motospares</title>
      <link rel="stylesheet" type="text/css" href="feedb.css">
      <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    </head>
    <body>
    <section></section>
  
        <div class="container">
           <form action="feedb.php" method="POST" >
               <h1>Give your Feedback</h1>&nbsp;
               <div class="id">
                   <input name="fullname" type="text" placeholder="Full name" required>
               </div>
               <div class="id">
                <input name="email" type="email" placeholder="Email" required>
            </div>
            <textarea name="message" cols="15" rows="5" placeholder="Enter your opinions here.." required></textarea>
            <button name="submit" class="btn">SEND</button>
           </form>  
        </div>
    </body>
  </html>
