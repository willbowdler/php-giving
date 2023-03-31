<?php require base_path('/views/partials/head.php'); ?>


<form action='stripe.php' method="post" id="payment-form" class="payment-form ">
  <h1>Give to Example Org</h1>
  <div>
    $<input type="text" class='currency-input' placeholder="0.00">
  </div>
  <div id='card-element' class="card-element payment-input">
  </div>


  <button class="payment-button">Submit Payment</button>
</form>

<?php require base_path('/views/partials/footer.php'); ?>