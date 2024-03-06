<?php
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher("6f954cb4c88b9536d696", "140ce4e120c109d27dad", "1767273", ['cluster' => 'eu']);

while (true) {
    $bitcoinPrice = rand(40000, 50000); 
    $pusher->trigger('my-channel', 'crypto-update', ['bitcoinPrice' => $bitcoinPrice]);
    sleep(5); 
}
?>

