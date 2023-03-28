$(document).ready(function() {
  $("#product").change(function() {
    var product = $(this).val();
    var price;
    
    switch (product) {
      case "apple":
        price = 1.5;
        break;
      case "banana":
        price = 0.75;
        break;
      case "cherry":
        price = 3;
        break;
    }
    
    $("#price").val(price);
    calculateTotal();
  });
  
  $("#quantity").change(function() {
    calculateTotal();
  });
  
  $("#payment-form").submit(function(e) {
    e.preventDefault();
    
    var data = $(this).serialize();
    
    $.ajax({
      type: "POST",
      url: "process-payment.php",
      data: data,
      success: function(response) {
        if (response == "success") {
          alert("Payment successful!");
        } else {
          alert("Payment failed. Please try again.");
        }
      }
    });
  });
  
  function calculateTotal() {
    var price = parseFloat($("#price").val());
    var quantity = parseInt($("#quantity").val());
    var total = price * quantity;
    
    $("#total").val(total);
  }
});