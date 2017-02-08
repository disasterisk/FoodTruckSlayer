<?php

include 'Items.php';

echo '<table><tr><th>Food</th><th>Price</th><th>Description</th><th>Amount Ordered</th>';
foreach ($menu as $menuItem) {
    echo '<tr>';
    echo '<td>' . $menuItem->Name . '</td>';
    echo '<td>' . $menuItem->Price . '</td>';
    echo '<td>' . $menuItem->Description . '</td>';
    echo '<td>' . $_POST[$menuItem->Name] . '</td>';
    echo '</tr>';
}

$subTotal = 0;
$taxRate;
$tax = 0;
$total;

foreach ($menu as $menuItem) {
$subTotal = $subTotal + ($menuItem->Price * $_POST[$menuItem->Name]);
$taxRate = 9.5 / 100;
$tax = $taxRate * $subTotal;
$total = $tax + $subTotal;

}


echo '</table>';

echo '<p>Your subtotal: $' . $subTotal . '</p>';
echo '<p>Tax rate of 9%: ' . $tax . '</p>';
echo '<p>Your total is: ' . $total . '</p>';
