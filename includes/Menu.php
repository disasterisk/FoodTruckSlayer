<?php

include 'Items.php';

echo '<form action="Order.php" method="post">';
echo '<table><tr><th>Food</th><th>Price</th><th>Description</th><th>Amount</th>';

foreach ($menu as $menuItem) {
    echo '<tr>';
    echo '<td>'. $menuItem -> {Name} . '</td>';
    echo '<td>' . $menuItem -> {Price} . '</td>';
    echo '<td>' . $menuItem -> {Description} . '</td>';
    echo '<td> <input type="number"  value="0" name="' . $menuItem -> {Name} . '" /></td>';
    echo '</tr>';
}
echo '</table><input type="submit" name="submit" value="Submit" /></form>';


