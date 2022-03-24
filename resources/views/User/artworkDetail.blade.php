<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork Details | TrueArt</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/artworkdetail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/btn.css') }}">

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

    <!--our artwork detail section starts-->
    <div>
        <section class="section2" id="artist">
            <!--heading text and quote-->

            <div class="section-head1 col-sm-12">

            <div class="section-head2 col-sm-12" id="expert">

                <h2 data-aos="fade-right"><span> Exclusive </span> Artwork</h2>
                <p> Discover the creative universe of our artists.</p>
            </div>

                <!-- Auction-1 -->
                <section class="live" id="artwork">
                    <div class="max-width">
                        <div class="live-content">
                        @foreach($paintingInfo as $item)
                            <div class="column left" style="margin-bottom: 40px;">
                            <img src="../artwork/{{ $item->painting_path }}" /> 
                            </div>
                            <div class="column right" style="margin-bottom: 40px;">
                                <div class="text painting-name">{{ $item->painting_name }}</div>
                                <div class="text artist"> By {{ $item->artist_name }}</div>
                                <div class="text price">&#8377 {{ $item->price }}</div>
                                
                                <div class="text details">Details</div>
                                <div class="text size">Size: {{ $item->size }} Inches</div>
                                <div class="text size">Orientation: {{ $item->orientation }}</div>
                                <div class="text size">Category: {{ $item->category }}</div>
                                <div class="text size">Uploaded on: {{ $item->created_at }}</div>
                                
                                <div class="text description">Description</div>
                                <p>{{ $item->description }}</p>
                                <!-- <p>The artwork is inspired by deepest meaning of true love and spiritual bond of Goddess Radha and Lord Krishna. They are inseparable, one cannot be without other.</p>  -->
                                @if(Session::has('login'))
                                <form action="/cart" method="POST">
                                    @csrf
                                    <input type="hidden" name="artist_id" value="{{ $item->artist_id }}">
                                    <input type="hidden" name="painting_id" value="{{ $item->id }}">
                                    <div class="button" style="margin-left: 1px;">
                                        <input type="submit" value="Add to Cart">
                                    </div>
                                </form>
                                @else
                                @endif
                            </div>  
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <!--our artwork detail section starts-->


    @include("partials.footer")
    <!-- <script>
        $('.selection.dropdown')
            .dropdown();
        $('.checkbox')
            .checkbox();
    </script> -->

</body>

</html>