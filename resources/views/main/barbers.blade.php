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
    <!-- end header -->
        <div class="yellow_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Our Barbers</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our barbers -->
        <!-- section -->
        <section class="resip_section">
            <div class="container">

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

        <!-- footer -->
    @include('teil.footer')
        <!-- end footer -->

    </div>

    <div class="overlay"></div>
@include('teil.java')

</body>

</html>
