<form action="payment.php" method="post">
  <div class="form-group">
    <label for="product">Product:</label>
    <select id="product" name="product">
      <option value="apple">Apple</option>
      <option value="banana">Banana</option>
      <option value="cherry">Cherry</option>
    </select>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" value="1">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" id="price" name="price" readonly>
  </div>
  <div class="form-group">
    <label for="total">Total:</label>
    <input type="text" id="total" name="total" readonly>
  </div>
  <input type="hidden" name="action" value="process_payment">
  <button type="submit">Submit</button>
</form>
<?php

// Check if the form has been submitted
if (isset($_POST["action"]) && $_POST["action"] == "process_payment") {
  $product = $_POST["product"];
  $quantity = $_POST["quantity"];
  $total = $_POST["total"];
  
  switch ($product) {
    case "apple":
      $price = 1.5;
      break;
    case "banana":
      $price = 0.75;
      break;
    case "cherry":
      $price = 3;
      break;
  }
  
  $total = $price * $quantity;
  
  // Your payment processing code here
  
  echo "Payment successful!";
}

?>