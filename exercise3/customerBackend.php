<?php
  //Reference: https://www.includehelp.com/php/Invoice-Example.aspx
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $username = $_POST['username'];
  $password = $_POST['password'];
  $tulips = $_POST['tulips'];
  $roses = $_POST['roses'];
  $sunflowers = $_POST['sunflowers'];

  $shippingOption = $_POST['shippingOptions'];
  $shipping = "";

  if($shippingOption == 0) {
    $shipping = "Free Shipping";
  }
  else if($shippingOption == 50) {
    $shipping = "Overnight Express";
  }
  else if($shippingOption == 5) {
    $shipping = "3-day Shipping";
  }

  echo "<script type='text/javascript'>alert('Welcome, $username. Your password is $password');</script>";

  echo "<table border=1 width=30% style='margin: 0px auto; margin-top: 150px; text-align: center; background-color: #7FFFD4;'>";

  echo "<tr>";
  echo "<td></td>";
  echo "<th>Quantity</th>";
  echo "<th>Cost Per Item</th>";
  echo "<th>Sub Total</th>";
  echo "</tr>";

  echo "<tr>";
  echo "<th> Tulips </th>";
  echo "<td style= 'background-color: #DA70D6;'>" . $tulips . "</td>";
  echo "<td style= 'background-color: #DA70D6;'> $2 </td>";
  echo "<td style= 'background-color: #DA70D6;'> $" . $tulips * 2 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th> Roses </th>";
  echo "<td style= 'background-color: #DA70D6;'>" . $roses . "</td>";
  echo "<td style= 'background-color: #DA70D6;'> $5 </td>";
  echo "<td style= 'background-color: #DA70D6;'> $" . $roses * 5 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th> Sunflowers </th>";
  echo "<td style= 'background-color: #DA70D6;'>" . $sunflowers . "</td>";
  echo "<td style= 'background-color: #DA70D6;'> $3 </td>";
  echo "<td style= 'background-color: #DA70D6;'> $" . $sunflowers * 3 . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th> Shipping </th>";
  echo "<td colspan=2 style= 'background-color: #DA70D6;'>" . $shipping . "</td>";
  echo "<td style= 'background-color: #DA70D6;'> $" . $shippingOption . "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th colspan=3> Total Cost </th>";
  echo "<th> $" . (($tulips * 2) + ($roses * 5) + ($sunflowers * 3) + $shippingOption) . "</th>";
  echo "</tr>";

  echo "</table>";


 ?>
