
    <link rel="stylesheet" type="text/css" href="cartStyle.css">
<?php

if (!empty($_SESSION['cart'])) {
  $item_ids = implode(",", array_keys($_SESSION['cart']));
  $sql = "SELECT * FROM items WHERE id IN ($item_ids)";
  $result = mysqli_query($conn, $sql);

  echo "<h2>Shopping Cart</h2>";
  echo "<form method=\"post\" action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\">";
  echo "<table>";
  echo "<tr><th>Name</th><th>Price</th><th>Quantity</th><th>Total</th><th>Remove</th></tr>";
  $total = 0;
  while ($row = mysqli_fetch_assoc($result)) {
      $item_id = $row['id'];
      $item_name = $row['name'];
      $item_price = $row['price'];
      $item_quantity = $_SESSION['cart'][$item_id];
      $item_total = $item_price * $item_quantity;
      $total += $item_total;

      echo "<tr>";
      echo "<td>$item_name</td>";
      echo "<td>$item_price</td>";
      echo "<td><input type=\"number\" name=\"quantity[$item_id]\" value=\"$item_quantity\" min=\"1\"></td>";
      echo "<td>$item_total</td>";
      echo "<td><button class=\"remove-button\" name=\"remove\" value=\"$item_id\">Remove</button></td>";
      echo "</tr>";
  }
  echo "</table>";
  echo "<p>Total: $total</p>";
  echo "<button class=\"update-button\" type=\"submit\" name=\"update_cart\">Update Cart</button>";
  echo "<button class=\"remove-button\" type=\"submit\" name=\"clear_cart\">Clear Cart</button>";
  echo "</form>";
} else {
  echo "<p>Your shopping cart is empty.</p>";
}

if (isset($_POST['remove'])) {
  $item_id = $_POST['remove'];
  unset($_SESSION['cart'][$item_id]);


  header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"]));
  exit();
}

if (isset($_POST['clear_cart'])) {
  if (!empty($_SESSION['cart'])) {

  

    echo "<form method=\"post\" action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\">";
    echo "<button class=\"update-button\" type=\"submit\" name=\"clear_cart\">Clear Cart</button>";
    echo "</form>";
    if (isset($_POST['clear_cart'])) {
      unset($_SESSION['cart']);
   
      header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"]));
      exit();
    }
  }
  
}


mysqli_close($conn);
?>
