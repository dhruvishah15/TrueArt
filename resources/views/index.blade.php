<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>TrueArt | The Painting Website</title>
    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/artwork.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/artist.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/navtop.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/live.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/incr-decr_btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">


    <!-- js link -->
    <link rel="stylesheet" type="text/css" href="{{ url('https://code.jquery.com/jquery-3.5.1.min.js') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"> -->
    <!-- <link rel="stylesheet" type="text/js" href="{{ asset('script.js') }}"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('script.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}"></script>
    
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>


    @include("partials.navbar")
    

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Art is not a hobby,</div>
                <div class="text-2">It is how you live!</div>
                <div class="text-3">It has power to <span class="typing"></span></div>
                <a href="#">Explore More</a>
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
            <div class="container_art">
                <!--card 1starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="artwork\Nature painting by Mira Rai.jpg" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Nature's Beauty<br><span>By Mira Rai</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="/artworks"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 1 ends -->

                <!--card 2 starts-->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="artwork\Ronaldo Sketch by Mira Rai.jpg" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Ronaldo Sketch<br><span>By Mira Rai</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="/artworks"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 2 ends -->

                <!--card 3 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="artwork\Buddha painting by Mira Rai.jpg" width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3>Buddha Painting<br><span>By Mira Rai</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="/artworks"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 3 ends -->

                <!--card 4 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="artwork\Time Apparatus by Mira Rai.jpg" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Time Apparatus<br><span>By Mira Rai</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="/artworks"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 4 ends -->

                <!--card 5 starts-->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="artwork\Abstract Art by Mira Rai.jpg" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Abstract Art<br><span>By Mira Rai</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="/artworks"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 5 ends -->

                <!--card 6 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="artwork\Shooting Star by Mira Rai.jpg" width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3>Shooting Star<br><span>By Mira Rai</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="/artworks"><i class="fas fa-info-circle"></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 6 ends -->

            </div>

            <div class="viewAll_btn">
                <a href="/artworks">View All</a>
            </div>


        </div>
    </section>
    <!--our artwork ends -->

    <!-- Our Assurance start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our Assurance</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-crown"></i>
                        <div class="text">Authentic</div>
                        <p>Sincerity, genuineness of expression, and moral passion of the artist.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <!-- <i class="fas fa-palette"></i> -->
                        <div class="text">Discover Exclusive Art</div>
                        <p>We believe that the work of art is above all an adventure of the mind.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-funnel-dollar"></i>
                        <div class="text">Live Auction</div>
                        <p>A wide-ranging auction portal of creative and innovative work.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Our Assurance end -->

    <!--our artist team starts-->
    <section class="section2" id="artist">
        <!--heading text and quote-->

        <div class="section-head1 col-sm-12">

            <div class="section-head1 col-sm-12" id="expert">

                <h2 data-aos="fade-right"><span> Our </span> Artists</h2>
                <p> Discover the ambitious artist on TrueArt.</p>
            </div>
            <div class="container_expert_team">
                <!--card 1starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3> Mira Rai <br><span>Canvas Artist</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:2">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:3">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:4">
                            <a href="/Artist/Mira Rai/profilePage"><i class="fa fa-user" aria-hidden="true"></i></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 1 ends -->

                <!--card 2 starts-->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://t3.ftcdn.net/jpg/02/22/85/16/360_F_222851624_jfoMGbJxwRi5AWGdPgXKSABMnzCQo9RN.jpg" width="200" height="300"></div>
                        <div class="contentBx">
                            <h3>Mark Smith<br><span>Digital Artist</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:2">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:3">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:4">
                            <a href="/Artist/Mark Smith/profilePage"><i class="fa fa-user" aria-hidden="true"></i></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 2 ends -->

                <!--card 3 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3>Artist Name <br><span>Specialization</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:2">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:3">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:4">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 3 ends -->

                <!--card 4 starts -->
                <div class="card">
                    <div class="content">
                        <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width=" 200" height="300"></div>
                        <div class="contentBx">
                            <h3>Artist Name <br><span>Specialization</span></h3>
                        </div>
                    </div>
                    <ul class="sci">
                        <li style="--i:1">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:2">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:3">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                        </li>
                        <li style="--i:4">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></i></a>
                        </li>
                    </ul>
                </div>
                <!--card 4 ends -->
            </div>

            <div class="viewAll_btn">
                <a href="/artists">View All</a>
            </div>


        </div>
    </section>
    <!--our artist team ends -->



    <!-- live section start -->
    <section class="about" id="artwork">
        <div class="max-width">
            <h2 class="title">Live Events</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="https://images.adsttc.com/media/images/5666/e3dc/e58e/ce20/b400/0634/slideshow/001_(Custom).jpg?1449583570" alt="">
                </div>
                <div class="column right">
                    <div class="text">Live TrueArt </div> 
                    <p>Collecting art is a powerful way of owning something unique and embracing a deep passion for art. Discover your next favourite artwork in online auctions organized by the artists to expand your collection.</p>
                    <a href="/live">Go to Live</a>
                </div>
            </div>

        </div>
    </section>
    <!-- live section end -->

    <hr>

    @include("partials.contactUs")
    @include("partials.footer")

    <!-- <script src="js/searchbar.js"></script> -->
</body>

</html>