<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
    header("location:login.php");
}
?>


<div class="container">
    <div class="col-md-6 col-md-offset-3">
    <form  method="post" action="">
              

                <div class="form-group">
                    <label for="Email">Your ID</label>
                    <input type="text" name="user_id" class="form-control"  placeholder="Enter Your ID" required>
                </div>

              
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="user_password" class="form-control" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-success btn-block" name="login">Enter Voting Area</button>
                </div>
            </form>
    </div>
</div>
<?php
    require("includes/db.php");
    if(isset($_POST['login'])){
        $user_id = $_POST['user_id'];
        $user_password = $_POST['user_password'];
        $select = "select * from users_db where user_password = '$user_password' and user_id_generated = '$user_id'" ;
        $run = $conn->query($select);
        if($run->num_rows > 0){
            while($row= $run->fetch_array()){
                $_SESSION['user_id_generated'] = $user_id_generated = $row['user_id_generated'];
            }
            header('location:vote.php');
            

        }
        else{
            echo "Error! Your ID Or Password is Invalid" ;
        }
    }

?>