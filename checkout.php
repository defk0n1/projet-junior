<?php
$totalPrice = $_POST['total_price'];
echo($totalPrice);
$totalPriceInCents = $totalPrice * 100; // Convert total price to cents
error_log("Received total price: $totalPrice");
error_log("Total price in cents: $totalPriceInCents");

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51OiJmBBekC1GqsqDhiCNI47RWZDNlLOY3Q6I1RVRizCtmG9nrxJZCNr9A6P27x0eELBxvqp5SloncxDwyPibDO2w00UsiQVX4b";



\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/php/projet_junior1/success.php",
    "cancel_url" => "http://localhost/php/projet_junior1/cancel.php",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => $totalPriceInCents,
                "product_data" => [
                    "name" => "Total"
                ]
            ]
        ]
                
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);