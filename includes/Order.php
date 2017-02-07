<?php

include 'Items.php';

echo '<table><tr><th>Food</th><th>Price</th><th>Description</th><th>Amount Ordered</th>';
foreach ($menu as $menuItem) {
    echo '<tr>';
    echo '<td>' . $menuItem->{Name} . '</td>';
    echo '<td>' . $menuItem->{Price} . '</td>';
    echo '<td>' . $menuItem->{Description} . '</td>';
    echo '<td>' . $_POST[$menuItem->{Name}] . '</td>';
    echo '</tr>';
}

$total = 0;

foreach ($menu as $menuItem) {
$total = $total + ($menuItem->{Price} * $_POST[$menuItem->{Name}]);

}


echo '</table>';

echo 'Your total is $' . $total .'.';


