<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: group_chat.php?user_id=454454545");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="main_wrapper">
  <div class="wrapper">
    <section class="image_section">
      <div class="image">
        <img src="images/login.jpg">
      </div>
    </section>
    <section class="form login">
      <header>Welcome back!</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="input_area">
        <div class="field input">
          <label>User name</label>
          <input type="text" name="email" placeholder="@dairy_queen" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="as24s!#ciq@" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
