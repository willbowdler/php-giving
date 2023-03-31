<?php require base_path('/views/partials/head.php'); ?>

<form action='' method="post" id="payment-form" class="payment-form ">
  <h1>Register</h1>
  <div class="register-name-inputs">
    <div class="payment-input-flex-item">
      <label for="first_name">First Name</label>
      <input name='first_name' class="payment-input" type="text">
    </div>
    <div class="payment-input-flex-item">
      <label for="last_name">Last Name</label>
      <input name='last_name' class="payment-input" type="text">
    </div>
  </div>
  <div class="register-inputs">
    <label for="email">Email</label>
    <input name='email' class="payment-input" type="text">
  </div>
  <div class="register-inputs">
    <label for="username">Password</label>
    <input name='username' class="payment-input" type="password" name="" id="">
  </div>
  <div class="register-inputs">
    <label for="username_confirmed">Reenter Password</label>
    <input name='username_confirmed' class="payment-input" type="password" name="" id="">
  </div>

  <button class="payment-button">Register</button>
</form>


<?php require base_path('/views/partials/footer.php'); ?>