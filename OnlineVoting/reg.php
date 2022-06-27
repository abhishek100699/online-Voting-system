<?php
include("includes/header.php");
?>
<?php
require("includes/db.php");
if(isset($_POST['register'])){
     $user_name = $_POST['fullname'];
     $user_email = $_POST['email'];
     $user_gender = $_POST['gender'];
     $user_province = $_POST['province'];
     $user_password = $_POST['password'];
     

     $insert = "insert into users_db(user_name,user_email,user_gender,user_province,user_password) values ('$user_name' , '$user_email', '$user_gender', '$user_province', '$user_password')" ;


     $run = $conn->query($insert);
     if($run){
        echo "success";
     }
     else{
        echo "Error";
     }
}
?>


<br>
<hr>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 alert alert-success">
            <form  method="post" action="">
                <h3 class = "text text-center bg-primary alert" style="color:white;">Registration</h3>
                <div class="form-group">
                    <label for="Username">Full Name</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Enter Full Name" required>
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>

                <div class="form-group">
                    <label for="Gender">Gender</label>
                    <!-- <input type="text" name="fullname" class="form-control"> -->
                    <select name="gender" class="form-control">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="province">Province</label>
                    <!-- <input type="text" name="fullname" class="form-control"> -->
                    <select name="province" class="form-control">
                        <option value="">Select</option>
                        <option value="punjab">Punjab</option>
                        <option value="Mysore">Mysore</option>
                        <option value="Bangalore">Bangalore</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-success btn-block" name="register"> Submit</button>
                </div>


               

            </form>
        </div>
    </div>
</div>



<?php
include("includes/footer.php");
?>