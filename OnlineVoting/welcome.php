<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
    header("location:login.php");
}
?>


<div class="container">
    <div class="col-sm-6">
        <h4 class = "text text-center text-info bg-primary alert"> How to Cast Your Vote</h4>
        <ul>
            <li>Firstly Select <b>"ID Generate" </b> From Navigation Bar</li>
            <li>Firstly Select <b>"ID Generate" </b> From Navigation Bar</li>
            <li>Firstly Select <b>"ID Generate" </b> From Navigation Bar</li>
            <li>Firstly Select <b>"ID Generate" </b> From Navigation Bar</li>
            <li>Firstly Select <b>"ID Generate" </b> From Navigation Bar</li>
            <li>Firstly Select <b>"ID Generate" </b> From Navigation Bar</li>
        </ul>
    </div>

    <div class="col-sm-6">
        <img src="img/ballot.jpg" alt="ballot image" srcset="" class = "img img-responsive img-thumbnail">
    </div>


</div>