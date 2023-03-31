<?php require base_path('/views/partials/head.php'); ?>

<form action='' method="post" id="payment-form" class="payment-form ">
  <h1>Login</h1>
  <div class="register-inputs">

    <label for="email">Email</label>
    <input name='email' class="payment-input" type="text">

    <label for="password">Password</label>
    <input name='password' class="payment-input" type="password">

  </div>

  <button class="payment-button">Login</button>
</form>


<?php require base_path('/views/partials/footer.php'); ?>