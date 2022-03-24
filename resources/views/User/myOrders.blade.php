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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/cart.css') }}">

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
                <div class="live-heading">My Orders</div>
            </div>
        </div>
    </section>

    <div>
        <!--cart section starts-->
        <section class="section2" id="artist">
            <!--heading text and quote-->

            <div class="section-head1 col-sm-12">

                <div class="section-head1 col-sm-12" id="expert">

                    <h2 data-aos="fade-right"><span> My </span> Orders</h2>
                    <!-- <p> Discover the creative universe of our artists.</p> -->
                </div>

                <!-- Table start -->
                <div class="cart-container cart">
                    <table>
                        <tr>
                            <th>Painting</th>
                            <th>Description</th>
                        </tr>
                        @foreach($orders as $item)
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="../artwork/{{ $item->painting_path }}" alt="">   
                                </div>
                            </td>
                            <td> 
                                <div>
                                <p style="text-align: left; color: crimson;">{{ $item->painting_name }}</p>
                                <span>{{ $item->description }}</span>
                                <p style="text-align: left;"> &#8377 {{ $item->price }}</p>
                                <span>Delivery Status: {{ $item->status }}</span>
                                <br/>
                                <span>Payment Status: {{ $item->payment_status }}</span>
                                <br/>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    </div>
                </div>
                <!-- Table End -->

                <div class="viewAll_btn" style="margin-right: 875px;">
                    <a href="/cart">Go Back</a>
                </div>

        </section>

    </div>
    </section>
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