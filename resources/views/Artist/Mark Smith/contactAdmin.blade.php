<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Artist</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/Dashboard/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    @include("Artist.Mark Smith.sideNavbar")

    <div class="main-content">
    @include("Artist.Mark Smith.topNavbar")
        <!-- contact section start -->
        <section class="contact" id="contact">
            <div class="max-width">
                <h2 class="title">Contact Us</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <p>Want to know more about us? We'd love to hear from you. Here's how you can reach us ...</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-phone-alt"></i>
                                <div class="info">
                                    <div class="head">Contact No. :</div>
                                    <div class="sub-title">&nbsp;&nbsp;&nbsp;+91-123-456-7890</div>
                                </div>
                            </div>
                            <div class="row">

                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">&nbsp;Address :</div>
                                    <div class="sub-title">&nbsp;&nbsp;&nbsp;&nbsp;Somewhere On Earth</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email :</div>
                                    <div class="sub-title">&nbsp;&nbsp;&nbsp;abctrueart@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        <div class="text">Message us</div>
                        <form action="#">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="Name" required>
                                </div>
                                <div class="field email">
                                    <input type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Subject" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                            </div>
                            <div class="button-area">
                                <button type="submit">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>

</body>

</html>