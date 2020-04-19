<?php
    require_once('classes/stripe.php');
    require_once('classes/movie.php');
    $movieId = $_GET['id'];
    $movie = new Movie();
    $details = $movie->getMovie($movieId);
    $title = $details['original_title'];
    $stripe = new Stripe();
    $customerName = $_POST['customer-name'];
    $customerEmail = $_POST['customer-email'];
    $token = $_POST['stripeToken'];
    $customer = $stripe->addCustomer($customerName,$customerEmail);
    $stripe->charge($token);
    $invoiceItem = $stripe->createInvoiceItem($customer->id);
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/styles.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>Invoice</title>
    </head>
    <html>
    <div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                    <button class="btn btn-md btn-primary">Save Invoice</button>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-center"><strong>Item Price</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?=$title?></td>
                                    <td class="text-center"><?=($invoiceItem->amount)/100?></td>
                                    <td class="text-center">1</td>
                                    <td class="text-right"><?=($invoiceItem->amount)/100?></td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-right"><?=($invoiceItem->amount)/100?></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-right"><?=($invoiceItem->amount)/100?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>
    </html>
</html>
