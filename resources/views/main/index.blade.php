<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->

@include('teil.link')
<!-- body -->
</head>
<body class="main-layout">

<div class="wrapper">
    <!-- end loader -->

    <div class="sidebar">
        <!-- Sidebar  -->
    @include('teil.menu')
    </div>

    <div id="content">
        <!-- header -->
        @include('teil.header')
        <!-- start slider section -->
        <div class="slider_section banner_bg">
            <img src="{{asset('assets/heron/images/banner.jpg')}}">
            <div class="container">
                <div class="text_box">
                    <span>Stylish Hair</span>
                    <h1>Cutting<br>
                        for New Look</h1>
                    <a href="{{route('contact')}}">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- end slider section -->

        <!-- about -->
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="about_box">
                            <span>Welcome to Our Shop</span>
                            <h2>About<strong class="white"> Our Salon</strong></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many deskt op publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their</p>
                            <a href="{{route('about')}}">Read more</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="about_img">
                            <figure><img src="{{asset('assets/heron/images/about_img.png')}}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->
        <!-- service -->
        <div id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ourheading">
                            <h2>Our<strong class="white_ll"> service</strong></h2>
                            <span> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis n</span>
                        </div>
                    </div>
                </div>

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser1.png')}}"></figure>
                                                <h3>Clean Shave</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser.png')}}"></figure>
                                                <h3> Haircut Styles</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser3.png')}}"></figure>
                                                <h3>Face Masking</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser1.png')}}"></figure>
                                                <h3>Clean Shave</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser.png')}}"></figure>
                                                <h3> Haircut Styles</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser3.png')}}"></figure>
                                                <h3>Face Masking</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser1.png')}}"></figure>
                                                <h3>Clean Shave</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser.png')}}"></figure>
                                                <h3> Haircut Styles</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="service_box">
                                                <figure><img src="{{asset('assets/heron/images/ser3.png')}}"></figure>
                                                <h3>Face Masking</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- end service -->
        <!-- pricing -->
        <div class="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ourheading">
                            <h2>Pricing<strong class="white"> Table</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mar_bottom">
                        <div class="pricing_img">
                            <figure><img src="{{asset('assets/heron/images/vvv.png')}}" alt="#" />
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pad_left">
                        <div class="pricing_box">
                            <div class="list">
                                <ul>
                                    <li><span class="float-left">Haircuts</span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Skin Fade</span><span class="float-right">$ 40</span></li>
                                    <li><span class="float-left">Buzz Cut</span><span class="float-right">$ 30</span></li>
                                    <li><span class="float-left">Classic Haircut</span><span class="float-right">$ 35</span></li>
                                </ul>
                                <ul>
                                    <li><span class="float-left">Haircuts</span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Stache Trim</span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Beard Trim</span><span class="float-right">$ 35</span></li>
                                    <li><span class="float-left">Colouring</span><span class="float-right">$ 50</span></li>
                                </ul>
                                <a href="{{route('about')}}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="opening">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ourheading">
                                    <h2>Opening<strong class="white"> Times</strong></h2>
                                </div>
                            </div>
                        </div>
                        <div class="opening_bg">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="times">
                                        <ul>
                                            <li><span>Monday</span><span class="float-right">9:00am       <strong class="bbbb">9:00pm</strong></span></li>
                                            <li><span>Tuesday </span><span class="float-right">9:00am       <strong class="bbbb">9:00pm</strong></span></li>
                                            <li><span>Wednesday</span><span class="float-right">9:00am      <strong class="bbbb">9:00pm</strong></span></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="times">
                                        <ul>
                                            <li><span>Thursday </span><span class="float-right">9:00am       <strong class="bbbb">9:00pm</strong></span></li>
                                            <li><span>Friday</span><span class="float-right">9:00am       <strong class="bbbb">9:00pm</strong></span></li>
                                            <li><span>Saturday</span><span class="float-right">9:00am        <strong class="bbbb">9:00pm</strong></span></li>
                                            <li><span>Sunday</span><span class="float-right">Close</span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Pricing -->

            </div>

            <!-- our barbers -->
            <!-- section -->
            <section class="resip_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ourheading">
                                <h2>Our<strong class="white"> Barbers</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">

                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/1.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Jone due</h3>
                                        <h4>Haircutte</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/2.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Jne due</h3>
                                        <h4>Haircutte</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/3.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Jkne due</h3>
                                        <h4>Haircutte</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/1.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Jone due</h3>
                                        <h4>Haircutte</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/2.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Jne due</h3>
                                        <h4>Haircutte</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product_blog_img">
                                        <img src="{{asset('assets/heron/images/3.png')}}" alt="#" />
                                    </div>
                                    <div class="product_blog_cont">
                                        <h3>Jkne due</h3>
                                        <h4>Haircutte</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- end our barbers -->
            <!-- contact -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="title">
                                <h2>Request  A<strong class="white"> Call  Back</strong></h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Your Name" type="text" name="Your Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Phone Number" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name=" Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Date" type="date" name=" Date">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="img-box">
                                <figure><img src="{{asset('assets/heron/images/img.jpg')}}" alt="img" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end contact -->
            @include('teil.footer')
        </div>

        <div class="overlay"></div>
@include('teil.java')
</body>

</html>
