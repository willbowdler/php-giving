// Create an instance of the card Element.

// Add an instance of the card Element into the `card-element` <div>.
var stripe = Stripe(
  'pk_test_51MnT1VFH0qT0hAfcG0kMKO7edFEeftOUHzZluIYz2ICiF74LCENGyfLLbk5IxA2r6cpZUTdFOjsqA31arIAexZDt00sUbH05ao'
)
var elements = stripe.elements()

// Create an instance of the card Element.
var card = elements.create('card')
// Custom styling can be passed to options when creating an Element.
const style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
  },
}

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element', { style })

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function (event) {
  var displayError = document.getElementById('card-errors')
  if (event.error) {
    displayError.textContent = event.error.message
  } else {
    displayError.textContent = ''
  }
})

// Handle form submission.
var form = document.getElementById('payment-form')
form.addEventListener('submit', function (event) {
  event.preventDefault()

  // Disable the submit button to prevent multiple clicks.
  form.querySelector('button').disabled = true

  // Collect the customer's payment information and create a token.
  stripe.createToken(card).then(function (result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors')
      errorElement.textContent = result.error.message

      // Re-enable the submit button.
      form.querySelector('button').disabled = false
    } else {
      // Send the token to your server for processing.
      stripeTokenHandler(result.token)
    }
  })
})

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server.
  var form = document.getElementById('payment-form')
  var hiddenInput = document.createElement('input')
  hiddenInput.setAttribute('type', 'hidden')
  hiddenInput.setAttribute('name', 'stripeToken')
  hiddenInput.setAttribute('value', token.id)
  form.appendChild(hiddenInput)

  // Submit the form.
  form.submit()
}
