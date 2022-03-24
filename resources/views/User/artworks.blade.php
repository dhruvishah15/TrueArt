<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork | TrueArt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/artwork.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/artist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/filter.css') }}">

     <!-- js link -->
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
    <section class="artist-section" id="artist">
        <div class="max-width">
            <div class="artist-content">
                <div class="artist-heading">Exclusive Artwork</div>
            </div>
        </div>
    </section>

    <!--our artwork starts-->
    <section class="section1" id="artwork">
        <!--heading text and quote-->

        <div class="section-head2 col-sm-12">

            <div class="section-head2 col-sm-12" id="expert">

                <h2 data-aos="fade-right"><span> Exclusive </span> Artwork</h2>
                <p> Discover the creative universe of our artists.</p>
            </div>

            <!-- import filter assets -->
            
                @include("partials.filter_artwork")
            

            <div class="container_art">
                <!--card 1 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://wallpaperaccess.com/full/206378.jpg" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3> SThomas Crane <br><span>Chartered Accountant</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="/TrueArt-Website/User/artworkDetail.php"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 1 ends -->

                <!--card 2 starts-->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://images.unsplash.com/photo-1579965342575-16428a7c8881?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGFpbnRpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Miranda Shaffer<br><span>Investment Banker</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 2 ends -->

                <!--card 3 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://files.oyebesmartest.com/uploads/preview/insta-106200893-12gj1peib.jpeg
                        " width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3>Bradyn Kramer<br><span>Retail Manager</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 3 ends -->

                <!--card 4 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://wallpaperaccess.com/full/206378.jpg" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3> SThomas Crane <br><span>Chartered Accountant</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 4 ends -->

                <!--card 5 starts-->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://images.unsplash.com/photo-1579965342575-16428a7c8881?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGFpbnRpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Miranda Shaffer<br><span>Investment Banker</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 5 ends -->

                <!--card 6 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://files.oyebesmartest.com/uploads/preview/insta-106200893-12gj1peib.jpeg
                        " width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3>Bradyn Kramer<br><span>Retail Manager</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 6 ends -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://images.unsplash.com/photo-1579965342575-16428a7c8881?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGFpbnRpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Miranda Shaffer<br><span>Investment Banker</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 6 ends -->

                <!--card 7 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://files.oyebesmartest.com/uploads/preview/insta-106200893-12gj1peib.jpeg
                        " width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3>Bradyn Kramer<br><span>Retail Manager</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 7 ends -->

                <!--card 8 start -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://images.unsplash.com/photo-1579965342575-16428a7c8881?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGFpbnRpbmd8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Miranda Shaffer<br><span>Investment Banker</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 8 ends -->
            </div>
        </div>
    </section>
    <!--our artwork ends -->

    @include("partials.footer")

    <script>
        $('.selection.dropdown')
            .dropdown();
        $('.checkbox')
            .checkbox();
    </script>
</body>

</html>