<?php
    $titlePage = "Login";
    include "include/init.php";
    include "include/header.php";
    include "include/nav.php";
    
if(isset($_SESSION['AdminId'])){
  Redirect("index.php");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST["password"];
    $password = md5($password);

    $result = $connect->prepare("SELECT * FROM admin WHERE email = ? OR username = ? AND password = ?");
    $result->execute([$username, $username, $password]);
    $userInfo = $result->fetch();
    if($result->rowCount() > 0){
        $_SESSION['AdminId'] = $userInfo['id'];
        header('location:index.php');
    }else{
      $_SESSION['message'] = "error";
    }
  }
?>
<form action="" method="POST" class="login-form">
  <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span>Map Login</h2>
  <button class="submit" name="login"><span class="entypo-lock"><i class="fa fa-lock"></i></span></button>
  <span class="entypo-user inputUserIcon">
    <i class="fa fa-user"></i>
  </span>
  <input type="text" class="user" name="username" placeholder="ursername"/>
  <span class="entypo-key inputPassIcon">
    <i class="fa fa-key"></i>
  </span>
  <input type="password" class="pass" name="password" placeholder="password"/>
</form>

<?php include "include/footer.php"; ?>
