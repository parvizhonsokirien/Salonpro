<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->

@include('teil.link')
<!-- body -->
</head><!-- body -->

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
                            <h2>Contact</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
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

                        <form class="main_form" action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Имя" type="text" name="name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Номер телефона" type="text" name="phone">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Описание" type="text" name="description"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input type="submit" value="Отправить" class="btn btn-primary form-control">

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
        <!-- footer -->
    @include('teil.footer')
        <!-- end footer -->

    </div>

    <div class="overlay"></div>
@include('teil.java')

</body>

</html>
