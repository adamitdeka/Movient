<?php
    $movieId = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<!-- The Styling File -->
<link rel="stylesheet" href="css/styles.css"/>
</head>
<body>
    <div class="container">
        <div class="credit-container">
            <ul>
                <li>Rented movie will expire after 48 hours</li>
                <li>Every movie price is 20 dollars</li>
            </ul>
            <form action="charge.php?id=<?=$movieId?>" method="post" id="payment-form">
                <div class="form-group">
                    <label>Full Name</label>
                    <input id=customer-name name="customer-name" class="form-control" placeholder="Enter your name here">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input id=customer-name name="customer-email" class="form-control" placeholder="Enter your email here">
                </div>
                <div class="form-row form-group">
                    <label for="card-element" class="lead">Credit or debit card</label>
                    <div id="card-element">
                    <!-- a Stripe Element will be inserted here. -->
                    </div>
                    <!-- Used to display form errors -->
                    <div id="card-errors"></div>
                </div>
                <button>Submit Payment</button>
            </form>
        </div>
    </div>
    <!-- The needed JS files -->
    <!-- JQUERY File -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Stripe JS -->
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Your JS File -->
    <script src="js/client.js"></script>
</body>
</html>