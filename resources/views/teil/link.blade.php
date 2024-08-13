<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>heron</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/heron/css/bootstrap.min.css')}}">
    <!-- owl css -->
    <link rel="stylesheet" href="{{asset('assets/heron/css/owl.carousel.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/heron/css/style.css')}}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{asset('assets/heron/css/responsive.css')}}">

</head>

<style>
    #owl-demo .item {
        margin: 3px;
    }

    #owl-demo .item img {
        display: block;
        width: 100%;
        height: auto;
    }
</style>

<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

</html>
