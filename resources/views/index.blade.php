<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="favicon_igospel.png">
    <!-- all additional css -->
    <link rel="stylesheet" href="{{ asset('theme') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/elements.css">
    <link rel="stylesheet" href="{{ asset('theme/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme') }}/css/responsive.css">

    <!--    Toaster -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!-- modernizr js -->
    <script src="{{ asset('theme') }}/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '166507494996075');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=166507494996075&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <!-- prelaoder start -->
    <div id="preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- prelaoder end -->
    <!-- page wrapper start -->
    <div id="page-top" class="wrapper">
        <!-- header area start -->
        <header>
            <nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="1">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('theme') }}/apple-icon-57x57.png" alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#page-top" style="color: #fff !important;">Home</a></li>
                            <li><a href="#contact-area" class="btn btn-bordered" id="btn-reg">Register for Webinar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- header area end -->
        <!-- slider area start -->
        <section id="slider-area" class="home-style-1 blue-grad-bg">
            <div class="slider-wrapper">
                <div class="slide">
                    <div class="container" >
                        <div class="slider-text" >
                            <h1 data-animation="fadeInDown" data-delay="0.3s" >The Smart Church</h1>
{{--                            <p data-animation="fadeInDown" data-delay="0.8s" style="color: #039541 !important;">The Smart Church is a timely and unique--}}
{{--                                initiative to expose ministers and church--}}
{{--                                leaders to the dynamics of church management in line with meeting the--}}
{{--                                global demands of the twenty-first-century church.</p>--}}
                            <p data-animation="fadeInDown" data-delay="0.8s" >
                                ...where technology meets ministry
                            </p>
                            <div id="btn-reg-slide" class="button-group" data-animation="fadeInDown" data-delay="1.3s">
                                <a href="#contact-area" class="btn btn-bordered-white" >Register</a>
{{--                                <button type="button" onclick="window.location.href='#contact-area';" class="btn" >Register</button>--}}

                            </div>
                        </div>
                        <div class="slider-image" data-animation="fadeInRight" data-delay=".3s">
                            <img src="{{ asset('theme') }}/img/mockups/phone.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-icon text-center">
                <a href="#contact-area" class="wow fadeInDown infinite" data-wow-duration="2s"><i class="icofont icofont-scroll-long-down"></i></a>
            </div>
        </section>
        <!-- slider area end -->

        <section id="contact-area">

            <div class="contact-box">
                <div class="container mt-110">
                    <div class="contact-box-inner animated wow bounceIn" data-wow-duration="2s">
                        <div class="row">
                            <div class="col-sm-12">


                                <div class="get-in-touch p-100"  >
                                    <h2 id="form_h2" style="color: #1CD0F9 !important;">Register for {{ config('app.name') }}</h2>
                                    <form action="{{ route('webinar.store') }}" method="POST" >
                                        @csrf
                                        <div class="form-group">
                                            <input value="{{ old('title') }}"  type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Your Title eg. Rev., Pastor">
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('title')}}</strong>
                                            </span>
                                            <div class="form-grad-border"></div>
                                        </div>
                                        <div class="form-group">
                                            <input value="{{ old('first_name') }}" type="text" name="first_name" class="form-control @error('title') is-invalid @enderror" id="first_name" placeholder="First Name*" required>
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('first_name')}}</strong>
                                            </span>
                                            <div class="form-grad-border"></div>
                                        </div>
                                        <div class="form-group">
                                            <input value="{{ old('last_name') }}" type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name*" required>
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('last_name')}}</strong>
                                            </span>
                                            <div class="form-grad-border"></div>
                                        </div>
                                        <div class="form-group">
                                            <input value="{{ old('email') }}" type="email" name="email" class="form-control" id="email" placeholder="Email Address*" required>
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('email')}}</strong>
                                            </span>
                                            <div class="form-grad-border"></div>
                                        </div>
                                        <div class="form-group">
                                            <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" id="phone" placeholder="Phone no*" required>
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('phone')}}</strong>
                                            </span>
                                            <div class="form-grad-border"></div>
                                        </div>
                                        <div class="form-group">
                                            <input value="{{ old('church_name') }}" type="text" name="church_name" class="form-control" placeholder="Church Name*">
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('church_name')}}</strong>
                                            </span>
                                            <div class="form-grad-border"></div>
                                        </div>

                                        <h4 style="color: #1CD0F9 !important;" class="text-center font-weight-bold">Day and Session for the {{ config('app.name') }}</h4>
                                        <div class="form-group col-md-6">
                                            <select class="form-control @error('day') is-invalid @enderror" name="day" id="day" required>
                                                <option value="">Choose your preferred Day</option>
                                                @foreach($days as $day)
                                                <option value="{{ $day->id }}">{{ $day->day }}</option>
                                                @endforeach
                                            </select>
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('day')}}</strong>
                                            </span>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select class="form-control @error('session') is-invalid @enderror" name="session" id="session" required>
                                                <option value="">Choose your preferred Session</option>
                                                @foreach($sessions as $session)
                                                    <option value="{{ $session->id }}">{{ $session->session }}</option>
                                                @endforeach
                                            </select>
                                            <span role="alert" class="invalid-feedback text-danger">
                                                <strong>{{$errors->first('session')}}</strong>
                                            </span>
                                        </div>

                                        <div class="reg-submit">
                                            <button type="submit" class="btn ">Register</button>

                                        </div>
                                        <p class="appai-form-send-message"></p>



                                        <p class="appai-form-send-message"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- map area end -->
        <!-- footer area start -->
        <div id="map"></div>
        <footer id="footer-area">
            <div class="container">
                <ul class="social list-inline text-center">
                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                    <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                </ul>
                <div class="copyright text-center">
                    <p>Copyright @ 2020 <a href="https://sawtraxltd.com/" target="_blank">Sawtrax Ltd</a> All right reserved.</p>
                </div>
            </div>
        </footer>
        <!-- footer area end -->
    </div>
    <!-- page wrapper end -->
    <!-- All Js files-->
    <script src="{{ asset('theme') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/jquery.ripples.js') }}"></script>



    <script src="{{ asset('theme') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('theme') }}/js/slick.min.js"></script>
    <script src="{{ asset('theme') }}/js/plugins.js"></script>
    <script src="{{ asset('theme') }}/js/ajax-mail.js"></script>
    <script src="{{ asset('theme') }}/js/ajax-subscribe.js"></script>
    <!-- map js -->
    <script src="#"></script>
    <script src="{{ asset('theme') }}/js/appai.map.js"></script>
    <script src="{{ asset('theme') }}/js/main.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        // $("#slider-area").ripples({
        //     dropRadius: 15,
        //     perturbance: 5.02
        // });

        $('#slider-area').ripples({
            resolution: 512,
            dropRadius: 20,
            perturbance: 0.04
        });

        // Automatic drops
        setInterval(function () {
            var $el = $('#slider-area');
            var x = Math.random() * $el.outerWidth();
            var y = Math.random() * $el.outerHeight();
            var dropRadius = 20;
            var strength = 0.08 + Math.random() * 0.04;

            $el.ripples('drop', x, y, dropRadius, strength);
        }, 400);
    </script>
    <script>
        @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>
</body>

</html>
