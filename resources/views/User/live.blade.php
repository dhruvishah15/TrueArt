<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live | TrueArt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/live.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/filter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/bidAmountBtn.css') }}">
    <!-- <link rel="stylesheet" href="css/bidAmountBtn.css"> -->

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
                <div class="live-heading">"Art enables us to find ourselves and lose ourselves at the same time"</div>
            </div>
        </div>
    </section>

    <div>
        <!--Live starts-->
        <section class="section2" id="artist">
            <!--heading text and quote-->

            <div class="section-head1 col-sm-12">

                <div class="section-head1 col-sm-12" id="expert">

                    <h2 data-aos="fade-right"><span> Live </span> Event</h2>
                    <p> Discover the creative universe of our artists.</p>
                </div>

                <!-- Auction-1 -->
                <section class="live" id="artwork">
                    <div class="max-width">
                        <div class="live-content">
                            <div class="column left">
                                <img src="https://www.teahub.io/photos/full/9-98883_pretty-painting-wallpaper.jpg" alt="">
                            </div>
                            <div class="column right">
                                <div class="text">Painting Name</div>
                                <div class="text">Artist Name</div>
                                <div class="text">Painting Type</div>
                                <div class="text">Size</div>
                                <div class="text">Painting Description</div>
                                <p>Exclusive sales, auctions, and flash sales. Explore all of our current, past, and future events.</p>
                                <div class="text">Base Price</div>
                                <div class="text">Highest Bid</div>
                                @if(Session::has('login'))
                                <div class="block">
                                    <input type="number" class="input-res" placeholder="Enter Your Amount for bidding">
                                </div>
                                <a href="#" class="link">Place a Bid</a>
                                @else
                                @endif
                            </div>
                        </div>

                    </div>
                </section>
                <hr>
                <!-- Auction-2 -->
                <section class="live" id="artwork">
                    <div class="max-width">
                        <div class="live-content">
                            <div class="column left">
                                <img src="https://www.teahub.io/photos/full/9-98883_pretty-painting-wallpaper.jpg" alt="">
                            </div>
                            <div class="column right">
                                <div class="text">Painting Name</div>
                                <div class="text">Artist Name</div>
                                <div class="text">Painting Type</div>
                                <div class="text">Size</div>
                                <div class="text">Painting Description</div>
                                <p>Exclusive sales, auctions, and flash sales. Explore all of our current, past, and future events.</p>
                                <div class="text">Base Price</div>
                                <div class="text">Highest Bid</div>
                                @if(Session::has('login'))
                                <div class="block">
                                    <input type="number" class="input-res" placeholder="Enter Your Amount for bidding">
                                </div>
                                <a href="#" class="link">Place a Bid</a>
                                @else
                                @endif
                            </div>
                        </div>

                    </div>

                </section>

                <div class="viewAll_btn">
                    <a href="/winnersOfPreviousEvents">Winners of Previous Events</a>
                </div>
            </div>
        </section>
    </div>
    <!--Live section ends -->





    @include("partials.footer")

    <!-- <script>
        $('.selection.dropdown')
            .dropdown();
        $('.checkbox')
            .checkbox();
    </script> -->

</body>

</html>