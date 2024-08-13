<!DOCTYPE html>
<html lang="en">

<head>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- Javascript files-->
<script src="{{asset('assets/heron/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/heron/js/popper.min.js')}}"></script>
<script src="{{asset('assets/heron/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/heron/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/heron/js/custom.js')}}"></script>
<script src="{{asset('assets/heron/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script src="{{asset('assets/heron/js/jquery-3.0.0.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>

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
