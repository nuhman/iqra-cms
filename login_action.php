<?php
require_once("static/includes/sessions.php");
require_once("static/includes/functions.php");
require_once("static/includes/dbsetup.php");
if(isset($_POST["submit"])){
   $username1 = mysqli_real_escape_string($conn,$_POST["username_"]);
   $password = mysqli_real_escape_string($conn,$_POST["password_"]);
   $password = sha1($password);
   $query = "SELECT * FROM admins WHERE username = '".$username1."'";
   $result = mysqli_query($conn,$query);
   //echo(mysqli_num_rows($result));
   if(mysqli_num_rows($result) > 0){
     $user = mysqli_fetch_assoc($result);
     if($user["password"] === $password){
       $_SESSION["username"] = $username1;
       redirect_to('admin.php');
       }
       else{
        redirect_to('login.php');
       }
     }
    else{
      redirect_to('login.php');
    }
}

else{
  redirect_to('login.php');
}
?>
