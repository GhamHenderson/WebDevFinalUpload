<?php include "../templates/header.php"; ?>
    <div class="mainarea">
        <h4>Status: You are logged in <?php echo $_SESSION['Username'];?> </h4>
        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    </div>


    <div class="container text-center">
        <h1>Welcome to Checkout <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></i></h1>
        <p class="lead">Basket </p>
        <img class="img-responsive img-circle center-block" src="images/service.jpg" alt="">
    </div><!--/.container-->

    <div class="container text-center">

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>

            </tr>
            <tr>
                <td>Rocket League</td>
                <td>35.00 Euro</td>
            </tr>
            <tr>
                <td>Fifa 21</td>
                <td>70.00 Euro</td>

            </tr>

        </table>




    </div>

    <div class="container text-center">
        <br>
        <br>
        <br>
        <button onclick="document.location='payment.php'" type="button" class="btn btn-success btn-lg">Pay Now</button>
        <button onclick="document.location='index.php'" type="button" class="btn btn-primary btn-lg">Continue Shopping</button>
    </div>



<?php include "../templates/footer.php"; ?>