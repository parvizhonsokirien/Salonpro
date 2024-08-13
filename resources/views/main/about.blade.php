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
<!-- loader  -->

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
                            <h2>About</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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

        <!-- footer -->
        @include('teil.footer')

    </div>

    <div class="overlay"></div>
@include('teil.java')

</body>

</html>
