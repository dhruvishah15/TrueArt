<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | TrueArt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

     <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/orderNow.css') }}">

     <!-- js link -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     <script src="{{asset('script.js')}}"></script>
     <script src="{{asset('js/footer.js')}}"></script>
     <script src="{{asset('js/searchbar.js')}}"></script>

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    @include("partials.navbar")

      <!-- header section start -->
      <section class="live-section" id="artist">
        <div class="max-width">
            <div class="live-content">
                <div class="live-heading">Checkout</div>
            </div>
        </div>
    </section>

    <table class="checkout">
    <tbody>
      <tr>
        <td><div class="heading">Amount</div></td>
        <td><div class="value">&#8377 {{ $total }}</div></td>
      </tr>
      <tr>
        <td><div class="heading">Tax</div></td>
        <td><div class="value">&#8377 {{ 0.1 * $total }}</div></td>
      </tr>
      <tr>
        @if($total > 0)
        <td><div class="heading">Delivery Charges</div></td>
        <td><div class="value">&#8377 100</div></td>
        @else
        <td><div class="heading">Delivery Charges</div></td>
        <td><div class="value">&#8377 0</div></td>
        @endif
      </tr>
      <tr>
        @if($total > 0)
        <td><div class="heading">Total Amount</div></td>
        <td><div class="value">&#8377 {{ $total + (0.1 * $total) + 100 }}</div></td>
        @else
        <td><div class="heading">Total Amount</div></td>
        <td><div class="value">&#8377 {{ $total + (0.1 * $total) + 0 }}</div></td>
        @endif
      </tr>
    </tbody>
    </table>
    <div class="form-order">
        <form action="/placeOrder" class="orderNow" method="POST">
        @csrf
            <div class="field">
            <textarea type="text" name="address" placeholder="Enter Your Address"></textarea>
            </div>
            <div class="field">
            <input type="text" name="phone" placeholder="Enter Your Phone Number">
            </div>
            <div class="payment-details">
              <input type="radio" name="payment" id="dot-1" value="Cash On Delivery">
              <input type="radio" name="payment" id="dot-2" value="Online Payment">
              <span class="payment-title">Select Payment Method</span>
                <div class="category">
                  <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="payment">Cash on Delivery</span>
                  </label>
                  <label for="dot-2">
                      <span class="dot two"></span>
                      <span class="payment">Online Payment</span>
                  </label>
              </div>
            </div>
            <div class="button">
                <input type="submit" value="Place an Order">
            </div>
        </form>
    </div>

    <!--cart section ends -->

    @include("partials.footer")

    <!-- <script>
        $('.selection.dropdown')
            .dropdown();
        $('.checkbox')
            .checkbox();
    </script> -->

</body>

</html>