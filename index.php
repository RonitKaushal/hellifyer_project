<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: group_chat.php?user_id=454454545");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="main_center">
  <div class="wrapper">
  <section class="image_section">
      <div class="image">
        <img src="images/login.jpg">
      </div>
    </section>
    <section class="form signup">
      <header>Welcome to HellyFlyer!</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="on">
        <div class="error-text"></div>
        <div class="name-details">
          <!-- <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name is" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div> -->
        </div>
        <div class="input_area">
        <div class="field input">
          <label>UserName </label>
          <input type="text" name="email" placeholder="@dairy_queen" required>
        </div>
        <div class="field input">
          <label>Password </label>
          <input type="password" name="password" placeholder="as24s!#ciq@" required>
          <i class="fas fa-eye"></i>
        </div>
        <!-- <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
        </div> -->
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      </div>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
</div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>
