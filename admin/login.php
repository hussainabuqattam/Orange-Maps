<?php
    $titlePage = "Admin login";
    include "include/header.php";
    include "include/nav.php";
?>
<form action="" class="login-form">
  <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span>Map Login</h2>
  <button class="submit"><span class="entypo-lock"><i class="fa fa-lock"></i></span></button>
  <span class="entypo-user inputUserIcon">
     <i class="fa fa-user"></i>
   </span>
  <input type="text" class="user" placeholder="ursername"/>
  <span class="entypo-key inputPassIcon">
     <i class="fa fa-key"></i>
   </span>
  <input type="password" class="pass"placeholder="password"/>
</form>

<?php include "include/footer.php"; ?>
