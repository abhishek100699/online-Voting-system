<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_id_generated']){
    header("location:election.php");
}
?>
<br>


<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="" method="post">
            <label>Election Name</label>
            <select name="election_name" class="form-control" id="">
                
            </select>
        </form>
    </div>
</div>
