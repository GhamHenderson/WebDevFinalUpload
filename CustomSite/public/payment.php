<?php include "../templates/header.php"; ?>

    <div class="mainarea">
        <h4>Status: You are logged in <?php echo $_SESSION['Username'];?> </h4>
        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    </div>

    <div class="container text-center">
        <h1>Payment Successful, Thank You <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span></i></h1><br>
        <h2><p class="lead">Thank you <?php echo $_SESSION['Username'];?> </p><br></h2>
        <p class="lead">Your Reference Number is <?php echo session_id() ?> </p>
        <img class="img-responsive img-circle center-block" src="images/service.jpg" alt="">
    </div><!--/.container-->


