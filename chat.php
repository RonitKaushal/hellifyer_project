<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="border: 3px solid red;">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to HellyFlyer</title>
    Style sheets import
    <link rel="stylesheet" href="style.css">
    Scripts import 
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head> -->
<body>
    <div class="qr_code_section close">
        <div class="qr_code_container">
            <button class="qr_code_container_close_btn"><ion-icon name="close"></ion-icon></button>
            <div class="textarea">
                <p class="red">Hello hellyflyers!</p>
                <p><span class="red">Hellyflyer</span> is a user-friendly website that values free speech. 
                    You can openly <span class="green">share your thoughts</span> with everyone or have private 
                    conversations with individual users. </p>
                <p>It's a <span class="green">safe place</span> to express 
                    yourself without <span class="red">fear</span>. Whether you want to speak your mind publicly 
                    or connect privately with someone,</p>
                <p><span class="red">Hellyflyer</span> makes it <span class="green">easy and 
                    enjoyable.</span> So, feel free to use this platform to communicate openly 
                    and <span class="purple">connect with others</span> without any worries!</p>
            </div>
            <div class="image">
                <img src="images/qr-code.png">
            </div>
        </div>
    </div>
    <!-- main_navbar_desktop start -->
    <nav class="main_navbar_desktop">
        <div class="logo_area">

        </div>
        <div class="search_area">
            <div class="logoImage">
                <img src="images/main_logo.png">
            </div>
        </div>
        <div class="icon_area">
            <div class="icons">
                <div class="icon qr_code"><ion-icon name="qr-code"></ion-icon></div>
                <div class="icon chat"><ion-icon name="chatbox"></ion-icon></div>               
                <div class="icon setting"><ion-icon name="cog"></ion-icon></div>
                <div class="icon delete"><ion-icon name="trash"></ion-icon></div>
            </div>
        </div>
    </nav>
    <!-- main_navbar_desktop end -->
    <!-- Main section start -->
    <div class="main_section">
        <div class="firstPart">
                <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
            <div class="private_message_section">
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <div class="searchArea">
            <div class="search Bar">
                <input type="text" placeholder="find people here!">
                <button><ion-icon name="search"></ion-icon></button>
            </div>
            </div>
                <div class="users-list">

                </div>
            </div>
        </div>
        <div class="secondPart">
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
            <div class="chat_section chat-box">
                
            </div>
            <!-- <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form> -->

            <form class="chat_input_section typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" class="chat_input_field input-field" name="message" placeholder="express your emotions FREELY!!">
                <button class="send_btn"><ion-icon name="rocket"></ion-icon></button>
        </form>
        </div>
        <div class="thirdPart">
            <div class="image">
            <script data-cfasync="false" type="text/javascript" src="//dexpredict.com/a/display.php?r=7495078"></script>
            </div>
            <div class="image">
                <img src="images/ad_banner_square.png">
            </div>
            <div class="image">
                <img src="images/ad_banner_square.png">
            </div>
            <div class="image">
                <img src="images/ad_banner_square.png">
            </div>
        </div>
    </div>
    <!-- Main section end -->
    <script>
        $(".qr_code_container_close_btn").click(function(){
  $(".qr_code_section").addClass("close");
});

$(".icon.qr_code").click(function(){
  $(".qr_code_section").removeClass("close");
});
    </script>
      <script src="javascript/users.js"></script>
      <script src="javascript/chat.js"></script>

</body>
</html>