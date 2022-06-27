
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Online Voting</title>
</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-dafault">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Online Voting System</a>
                </div>
                <ul class="nav navbar-nav">
                    <li > <a href="">Home</a> </li>
                    <li > <a href="">Parties</a> </li>
                    <li > <a href="idgenerate.php">ID Generate</a> </li>
                    <li > <a href="election.php">Election</a> </li>
                    <li > <a href="">Results</a> </li>
                    <li > <a href="vote.php">Vote</a> </li>
                    <li > <a href="logout.php">Logout</a> </li>
                    <li> <a href=""> <?php echo $_SESSION['user_name'] ; ?> </a> </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 img-thumbnail" style="background-color: gray;">
                <img src="img/votes.jpg" alt="vote image" class="img img-responsive" style="height:300px; width:800px;">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>