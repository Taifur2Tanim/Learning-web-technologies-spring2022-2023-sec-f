<?php
$amount = 1000; 
$vat = 0.15; // VAT rate is 15%

$vat_amount = $amount * $vat;
$total_amount = $amount + $vat_amount;

echo "Amount: " . $amount . "\n";
echo "VAT: " . $vat_amount . "\n";
echo "Total Amount: " . $total_amount . "\n";
?>
