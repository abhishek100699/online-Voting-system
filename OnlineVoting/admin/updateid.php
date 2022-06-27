<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Update ID Request</title>
</head>
<body>
        <div class="container">
            <div class="col-sm-6">
            <?php
                    $postfix = "";
                    $prefix = "";
                    $id_generator = "";
                    $conn = new mysqli("localhost","root","","votingsystem_db");
                    $id = $_GET['id'];
                    $select = "select * from id_request_tbl where id='$id'";
                    $run = $conn->query($select);
                    if($run->num_rows > 0){
                        while($row = $run->fetch_array()){
                            $user_email = $row['user_email'];
                            $user_province = $row['user_province'];

                        }
                        switch ($user_province) {
                            case 'punjab':
                                $prefix = "pun";
                                $rand = rand(9999999,1234567);
                                $postfix = "xyz";
                                $id_generator = $prefix.$rand.$postfix;
                                break;
                            case 'Bangalore':
                                $prefix = "blr";
                                $rand = rand(9999999,1234567);
                                $postfix = "xyz";
                                $id_generator = $prefix.$rand.$postfix;

                                break;    
                            
                            default:
                                # code...
                                break;
                        }
                            ?>
                        
                        

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="Email">User Email</label>
                                <input type="email" name="user_email" class="form-control" placeholder="Enter Email" required  readonly value = "<?php echo $user_email; ?>" >
                            </div>

                            <div class="form-group">
                                <label for="Email">User Province</label>
                                <input type="text" name="user_province" class="form-control" placeholder="Enter Province" required  readonly value = "<?php echo $user_email; ?>" >
                            </div>

                            <div class="form-group">
                                <label for="Email">User ID Generate By System</label>
                                <input type="text" name="user_id_generated" class="form-control" placeholder="Enter Province" required  readonly value="<?php echo strtoupper($id_generator); ?>" >
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update" value="Updata User ID" class= "form-control btn btn-success">
                            </div>

                        </form>


                            <?php
                        
                    }
                    else{
                        echo "<h1>Record Not Found</h1>";
                    }
                    ?>
         
            </div>
            <div class="col-sm-6">

            </div>
        </div>
</body>

</html>



<?php
    if(isset($_POST['update'])){
        $user_email = $_POST['user_email'];
        $user_id_generated = $_POST['user_id_generated'];
        $update = "update users_db set user_id_generated = '$user_id_generated' where user_email = '$user_email' ";
        $run = $conn->query($update);
        if($run){
            $delete = "delete from id_request_tbl where user_email = '$user_email' ";
            $del = $conn->query($delete);
            if($del){
                echo "<script> alert('Update Successfully!')</script>";
                echo "<script>window.location.href='idrequest.php'</script>";
            }
        }
        else{
            echo "<script> alert('Error!')</script>";
        }
    }
?>
