<?php

require "Coin.php";
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => "mysql",
    'host' => "localhost",
    'database' => "payment",
    'username' => "root",
    'password' => ""
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

require "Payment.php";
$coin = new CoinPaymentsAPI();
$coin->Setup("e11E219Cb0ed6a16cA601afEe112eC38a3e5449710e72613e87f152606b4E01d",
            "5f59327507474d8ccd78dcc32ef3f459c8fd0e637f88eb215ed7d68f485bd460");
    