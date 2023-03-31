<?php

require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_51MnT1VFH0qT0hAfcyqaW7fLZA797BGwMYcGpQFInk4LR6VsFwD5U2dmoVD0AwLxebtXLWQnSSYaxbgKDny1GBi5200pNHkpZHt');

$POST = filter_var_array($_POST, FILTER_SANITIZE_SPECIAL_CHARS);

echo $POST['stripeToken'];
