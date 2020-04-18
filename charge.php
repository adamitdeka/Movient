<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_Dj1M5b633r0K1e7I8yBiZ9E700RpBsuiV0');
$token = $_POST['stripeToken'];
// This is a $20.00 charge in US Dollar.
$charge = \Stripe\Charge::create(
    array(
        'amount' => 2000,
        'currency' => 'usd',
        'source' => $token
    )
);
print_r($charge);
?>
