<?php
function calculateDiscount($amount, $customerType) {
    $discount = 0.0;

    // Determine discount based on customer type
    if ($customerType == "regular") {
        if ($amount < 50) {
            $discount = 0.05; // 5% discount
        } elseif ($amount <= 100) {
            $discount = 0.10; // 10% discount
        } else {
            $discount = 0.15; // 15% discount
        }
    } elseif ($customerType == "member") {
        if ($amount < 50) {
            $discount = 0.10; // 10% discount
        } elseif ($amount <= 100) {
            $discount = 0.15; // 15% discount
        } else {
            $discount = 0.20; // 20% discount
        }
    } elseif ($customerType == "vip") {
        if ($amount < 50) {
            $discount = 0.20; // 20% discount
        } elseif ($amount <= 100) {
            $discount = 0.25; // 25% discount
        } else {
            $discount = 0.30; // 30% discount
        }
    } else {
        // No discount for unknown customer types
        $discount = 0.0;
    }

    // Calculate the final amount after applying the discount
    $finalAmount = $amount - ($amount * $discount);
    return $finalAmount;
}

// Example usage:
$purchaseAmount = 120;
$customerType = "vip";

$finalPrice = calculateDiscount($purchaseAmount, $customerType);
echo "The final amount after discount is: $" . number_format($finalPrice, 2); // Outputs the discounted price
?>
