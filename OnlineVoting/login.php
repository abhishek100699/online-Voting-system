<?php
session_start();
include("includes/header.php");
?>
<?php
require("includes/db.php");
$error = "";
$success = "";
if(isset($_POST['login'])){
      $user_email = $_POST['email'];
      $user_password = $_POST['password'];

    $select = "select *from users_db where user_email = '$user_email' and user_password = '$user_password'" ;
    $run = $conn->query($select);
    if($run->num_rows > 0 ){
        while($row = $run->fetch_array()) {
            $_SESSION['user_name'] = $user_name = $row['user_name'];
            $_SESSION['user_email'] = $user_email = $row['user_email'];
            // $success = "Login Successfully !! ";
            echo "<script> window.location.href='welcome.php' </script>" ;
            $success = "Login Successfully !! ";
        }
    }
    else{
        $error = "Invalid Email or Password! Try Again";
    }
    
}
?>


<br>
<hr>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 alert alert-success">
            <form  method="post" action="">
                <h3 class = "text text-center bg-primary alert" style="color:white;">User Login Area</h3>
                <h5 class= "text text-center text-danger">
                <?php
                    if($error!=""){
                        echo $error;
                    }
                    if($success !=""){
                        echo $success ;
                    }
                ?> 
                </h5>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>

              
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include("includes/footer.php");
?>