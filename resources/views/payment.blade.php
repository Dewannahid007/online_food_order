@extends('layouts.main')
@section('content')

<section class="container mt-2 my-3 py-3">
<div class="container mt-2 text-center">
    <h4>Payment</h4>
    @if(Session::has('total') && Session::get('total') != null)
    @if(Session::has('order_id') && Session::get('order_id') != null)

    <h4 style="color:blue" class="my-5"  > Total: BDT {{Session::get('total')}} </h4>
    <div id="paypal-button-container"></div>

    @endif
    @endif
</div>
</section>

    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=AWh0YMo35vU6ZLPqSP5K1tdZW1ZnUCDKVXoBNIU8JZeKHrGW01Rfsi7g_ZrpjsvpUpQA12T0XM5xk2oT&currency=USD"></script>
    <!-- Set up a container element for the button -->
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77.44' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

            window.location.href = "/verify_payment/"+transaction.id;
            
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>

@endsection