{{-- BCS3453 [PROJECT]-SEMESTER 2324/1
Student ID: CF22004
Student Name: Gan Shay Rie--}}

@extends('layouts.app')

@section('content')
    <style>
        /* Slideshow container */
        .slideshow-container {
            max-width: 1500px;
            position: relative;
            margin: auto;
        }

        /* The dots/bullets/indicators of slideshow*/
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.2s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 4s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* Footer */
        /* Main Footer */
        footer .main-footer {
            padding: 20px 0;
            background: #252525;
        }

        footer ul {
            padding-left: 0;
            list-style: none;
        }

        /* Copy Right Footer */
        .footer-copyright {
            background: #222;
            padding: 5px 0;
        }

        .footer-copyright .logo {
            display: inherit;
        }

        .footer-copyright nav {
            float: right;
            margin-top: 5px;
        }

        .footer-copyright nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-copyright nav ul li {
            border-left: 1px solid #505050;
            display: inline-block;
            line-height: 12px;
            margin: 0;
            padding: 0 8px;
        }

        .footer-copyright nav ul li a {
            color: #969696;
        }

        .footer-copyright nav ul li:first-child {
            border: medium none;
            padding-left: 0;
        }

        .footer-copyright p {
            color: #969696;
            margin: 2px 0 0;
        }

        /* Footer Top */
        .footer-top {
            background: #252525;
            padding-bottom: 30px;
            margin-bottom: 30px;
            border-bottom: 3px solid #222;
        }

        /* Footer transparent */
        footer.transparent .footer-top,
        footer.transparent .main-footer {
            background: transparent;
        }

        footer.transparent .footer-copyright {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3);
        }

        /* Footer light */
        footer.light .footer-top {
            background: #f9f9f9;
        }

        footer.light .main-footer {
            background: #f9f9f9;
        }

        footer.light .footer-copyright {
            background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3);
        }

        /* Footer 4 */
        .footer- .logo {
            display: inline-block;
        }

        /*====================
                Widgets
                ====================== */
        .widget {
            padding: 20px;
            margin-bottom: 40px;
        }

        .widget.widget-last {
            margin-bottom: 0px;
        }

        .widget.no-box {
            padding: 0;
            background-color: transparent;
            margin-bottom: 40px;
            box-shadow: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
        }

        .widget.subscribe p {
            margin-bottom: 18px;
        }

        .widget li a {
            color: #fff;
        }

        .widget li a:hover {
            color: #aaa;
            text-decoration: none;
        }

        .widget-title {
            margin-bottom: 20px;
        }

        .widget-title span {
            background: #839FAD none repeat scroll 0 0;
            display: block;
            height: 1px;
            margin-top: 25px;
            position: relative;
            width: 20%;
        }

        .widget-title span::after {
            background: inherit;
            content: "";
            height: inherit;
            position: absolute;
            top: -4px;
            width: 50%;
        }

        .widget-title.text-center span,
        .widget-title.text-center span::after {
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
        }

        .widget .badge {
            float: right;
            background: #7f7f7f;
        }

        .typo-light h1,
        .typo-light h2,
        .typo-light h3,
        .typo-light h4,
        .typo-light h5,
        .typo-light h6,
        .typo-light p,
        .typo-light div,
        .typo-light span,
        .typo-light small {
            color: #fff;
        }

        ul.social-footer2 {
            margin: 0;
            padding: 0;
            width: auto;
        }

        ul.social-footer2 li {
            display: inline-block;
            padding: 0;
        }

        ul.social-footer2 li a:hover {
            background-color: #ff8d1e;
        }

        ul.social-footer2 li a {
            display: block;
            height: 30px;
            width: 30px;
            text-align: center;
        }

        .btn {
            background-color: #ff8d1e;
            color: #fff;
        }

        .btn:hover,
        .btn:focus,
        .btn.active {
            background: #4b92dc;
            color: #fff;
            -webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            -webkit-transition: all 250ms ease-in-out 0s;
            -moz-transition: all 250ms ease-in-out 0s;
            -ms-transition: all 250ms ease-in-out 0s;
            -o-transition: all 250ms ease-in-out 0s;
            transition: all 250ms ease-in-out 0s;

        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            background-color: #3e3e3e;
            color: #fff;
            padding: 9px;
            border-radius: 5px;
        }

        #subscribe-box .emailfield {
            margin: auto;
        }

        input[type="text"] {
            background: rgba(255, 255, 255, 0.075);
            padding: 10px 15px;
            color: #aaa;
            border: 3px solid rgba(0, 0, 0, 0.1);
            font-size: 14px;
            margin-bottom: 16px;
            border-radius: 5px;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            transition-delay: 0.2s;
            text-align: center;
            width: 100%;
        }

        input.submitbutton.ripplelink {
            background: #e67e22;
            border: 3px solid rgba(0, 0, 0, 0.1);
            color: #fff;
            border-color: #e67e22;
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);
            transition-delay: 0s;
            width: 100%;
            font-size: 14px;
            /* font-weight: 700; */
            border: 0px solid;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 10px 15px;
            margin-bottom: 16px;
            border-radius: 5px;
        }

        .thumb-content ::before {
            content: "\f190";
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            text-decoration: inherit;
            margin-left: 5px;
            color: ##ffffff;
        }
    </style>

    {{-- Slideshow --}}
    <div class="slideshow-container" style="padding-bottom:60px;">
        <div class="mySlides fade">
            <img src="https://www.minuteschool.com/wp-content/uploads/2019/08/entrepreneur.jpg" alt="Company Logo"
                style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGkd26p59M0IPuNfdioN5FrKWIT4pW6fkRdg&usqp=CAU"
                alt="Company Logo" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="https://www.shutterstock.com/image-photo/teacher-adult-students-class-600nw-2275940331.jpg"
                alt="Company Logo" style="width:100%">
        </div>

        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </div>

    {{-- Next section --}}
    <div
        style="padding-left:20px; padding-right:20px; margin-top:70px; margin-bottom:100px; background-color:#B4CFEC; color:black; border-radius:5px">
        <h3 style="padding-top:25px;">Your one-stop shop for campus life!</h3>
        <h5 style="padding-top:10px; padding-bottom:25px;">Skip the queue lines, ditch the delivery fees. Support
            your fellow students and snag amazing deals at Shers Campus Marketplace.</h5>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="https://i.ebayimg.com/images/g/emUAAOSwRbtkNtJ0/s-l1600.jpg" alt="Slide 1"
                    style="object-fit:fill; display:block; margin-left:auto; margin-right:auto; opacity:0.3;">
                <div class="carousel-caption top-0 mt-4">
                    <!-- <p class="mt-5 fs-3 text-uppercase">Discover the hidden world</p> -->
                    <div class="center"
                        style="position:absolute; top:40%; width:100%; text-align:center; font-size:18px; color:white;">
                        <h4>Samyang Ramen</h4>
                        <p><a href="/gotoproduct" class="btn btn-primary px-4 py-2 fs-5 mt-5"
                                style="margin-top:150px;">Explore More Products!</a></p>
                    </div>

                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="https://images.deliveryhero.io/image/darkstores/MY/mondelez/July/8934680114806.jpg?height=480"
                    alt="Slide 2"
                    style="object-fit:fill; display:block; margin-left:auto; margin-right:auto; opacity:0.3;">
                <div class="center"
                    style="position:absolute; top:40%; width:100%; text-align:center; font-size:18px; color:white;">
                    <h4>Jacobs Baked Crisps</h4>
                    <p><a href="/gotoproduct" class="btn btn-primary px-4 py-2 fs-5 mt-5">Explore More Products!</a>
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    {{-- Footer --}}
    <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
            <div class="container">
                <div class="row">
                    {{-- Column 1 --}}
                    <div class="col-sm-4">
                        <div class="widget subscribe no-box">
                            <h5 class="widget-title" style="font-size:19px; padding-right:90px;">Shers Campus
                                Marketplace<span></span></h5>
                            <p style="font-size:14.5px;">52, Jalan Sambathun 1/10,<br>
                                Sambathun Jaya Asia,<br>
                                Klang, Selangor.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="widget no-box">
                            <h5 class="widget-title" style="font-size:19px;">Follow up<span></span></h5>
                            <a href="#"> <i class="fa fa-facebook"> </i> </a>
                            <a href="#"> <i class="fa fa-twitter"> </i> </a>
                            <a href="#"> <i class="fa fa-youtube"> </i> </a>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="col-sm-5">
                        <div class="widget no-box">
                            <h5 class="widget-title" style="font-size:19px; padding-left:50px;">Contact
                                Us<span></span></h5>
                            <p style="font-size:16px; padding-left:50px;">Your Email</p>
                            <div class="emailfield" style="padding-left:50px;">
                                <input type="text" name="email" value="Email" placeholder="Your Email"
                                    style="font-size:13px;">
                                <input name="uri" type="hidden" value="arabiantheme">
                                <input name="loc" type="hidden" value="en_US">
                                <input class="submitbutton ripplelink" type="submit" value="Subscribe"
                                    style="font-size:13px;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <center>
                                <p style="font-size:14px;">Copyright Shers Campus Marketplace © 2023. All rights
                                    reserved.</p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
@endsection
