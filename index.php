<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['usertype'] )){
    header("Location: dashboard.php");
}
?>
<html>
<head>
    <link href="assets/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="assets/jquery-3.2.1.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <title>PHP AUTH</title>
    <link href="assets/main.css" rel="stylesheet" id="">
</head>
<body>

<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">


    <div class="card card-container">

       <div class="img_cont" style="text-align: center"><img id="profile-img" align="center" class="profile-img-card" style="height: 120px;text-align: center" src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-128.png" />
       </div>

            <?php
            if(isset($_GET['pwInvalid'])){
                echo '  <div class="alert alert-danger">Password is Invalid </div>';
            }
            ?>

        <p id="profile-name" class="profile-name-card"></p>
<h4> Page Uses a Secure Password Mechanism </h4>
        <a href="index_ins.php">Use Page with Insecure Password Handling</a>
        <form class="form-signin" action="php/login.php" method="post">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" name="username" class="form-control" placeholder="Username" required >
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div id="remember" class="checkbox">

            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form><!-- /form -->

    </div><!-- /card-container -->

    </div>
    <div class="col-md-4"></div>

</div><!-- /container -->

</body>
</html>
