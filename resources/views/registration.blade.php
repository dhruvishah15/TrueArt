<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page | TrueArt</title>
    
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/searchbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sideNavbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navtop.css') }}">
    
    <!-- js link -->
    <script src="{{asset('script.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>
    <script src="{{asset('js/searchbar.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    @include("partials.navbar")

    <div class="body">
        <div class="wrapper" style="margin-top: 200px;">

        @include("flash-message")
            <div class="title-text">
            <div class="title signup">
                    Signup Form</div>
                <div class="title login">
                    Login Form</div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login">
                    <input type="radio" name="slide" id="signup" checked>
                    <label for="login"  class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab">
                    </div>
                </div>
                <div class="form-inner">
                    <form action="/registration" method="POST" class="signup" id="sign-up">
                    @csrf
                        <div class="field">
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="field">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password"  name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <input type="password" id="confirm_password" placeholder="Confirm password" onchange='check_pass();' required>
                        </div>
                        <span id='message'></span>
                        <div class="field btn">
                            <div class="btn-layer">
                            </div>
                            <input type="submit" id="submit" value="Signup">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>



    @include("partials.footer")

    <script>
        function check_pass() {
            if (document.getElementById('password').value != document.getElementById('confirm_password').value) {
                alert("Passwords do not match");
                document.getElementById('sign-up').reset();
            }else{
                document.getElementById('submit').disabled = false;
            }
        }
        const loginText = document.querySelector(".title-text .signup");
        const loginForm = document.querySelector("form.login-link a");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup");

        document.querySelector("label.login").onclick = function () {
            location.href = "http://127.0.0.1:8000/login";
        };

    </script>
</body>

</html>