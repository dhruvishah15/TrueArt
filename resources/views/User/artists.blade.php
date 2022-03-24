<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist | TrueArt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>

    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/searchbar.css') }}">
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
                <div class="artist-heading">"Art enables us to find ourselves and lose ourselves at the same time"</div>
            </div>
        </div>
    </section>

    <div>

        <!--our artist team starts-->
        <section class="section2" id="artist">
            <!--heading text and quote-->

            <div class="section-head1 col-sm-12">

                <div class="section-head1 col-sm-12" id="expert">

                    <h2 data-aos="fade-right"><span> Our </span> Artists</h2>
                    <p> Discover the creative universe of our artists.</p>
                </div>

                <div class="container_expert_team">
                    <!--card 1starts -->
                    <div class="card">
                        <div class="content">
                            <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width=" 200" height="300"></div>
                            <div class="contentBx">
                                <h3>Mira Rai <br><span>Canvas Artist</span></h3>
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
                                <h3>Artist 3<br><span>Specialization</span></h3>
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
                                <h3>Artist4<br><span>Specialization</span></h3>
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

                    <!--card 5 starts -->
                    <div class="card">
                        <div class="content">
                            <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width=" 200" height="300"></div>
                            <div class="contentBx">
                                <h3> Artist1 <br><span>Specialization</span></h3>
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
                    <!--card 5 ends -->

                    <!--card 6 starts-->
                    <div class="card">
                        <div class="content">
                            <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width="200" height="300"></div>
                            <div class="contentBx">
                                <h3>Artist2<br><span>Specialization</span></h3>
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
                    <!--card 6 ends -->

                    <!--card 7 starts -->
                    <div class="card">
                        <div class="content">
                            <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width=" 200" height="300"></div>
                            <div class="contentBx">
                                <h3>Artist3<br><span>Specialization</span></h3>
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
                    <!--card 7 ends -->

                    <!--card 8 starts -->
                    <div class="card">
                        <div class="content">
                            <div class="imgBx"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" width=" 200" height="300"></div>
                            <div class="contentBx">
                                <h3>Artist4<br><span>Specialization</span></h3>
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
                    <!--card 8 ends -->

                   
                </div>
            </div>
        </section>
        <!--our artist team ends -->



        @include("partials.footer")


        <script>
            $('.selection.dropdown')
                .dropdown();
            $('.checkbox')
                .checkbox();
        </script>
</body>

</html>