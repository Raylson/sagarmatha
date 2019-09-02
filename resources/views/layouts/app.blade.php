<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', setting('site.title'))</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="@yield('meta_keywords', setting('site.title'))">
    <meta name="description" content="@yield('meta_description', setting('site.title'))">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/slicknav.js') }}"></script>

    <script>
        $(function(){
            $('#menu').slicknav();
        });
    </script>
</head>
<body>
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="logo"><a href="/"><img src="{{ Voyager::image(setting('site.logo')) }}" alt=""></a></div>
                <nav id="mainnav">
                    {{ menu('frontend') }}
                    <ul class="socials">
                        <li><a class="social-media facebook" href="{{ setting('site.facebook_link') }}"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a class="social-media instagram" href="{{ setting('site.instagram_link') }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="social-media linkedin" href="{{ setting('site.linkedin_link') }}"><i class="fab fa-linkedin"></i></a></li>
                        <li><a class="social-media youtube" href="{{ setting('site.youtube_link') }}"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')

        <aside class="aside-footer">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo"><a href="/"><img src="{{ Voyager::image(setting('site.footer_logo')) }}" alt=""></a></div>
                <nav class="footernav">
                    {{ menu('frontend') }}
                </nav>
            </div>
            <div class="container">
                <footer id="footer">
                    <p>{{ setting('site.title') }}. All Rights Reserved. Powered By <a href="#">Admin One Pvt. Ltd.</a></p>
                </footer>
            </div>
        </aside>

        <script src="{{ asset('js/glide.min.js') }}"></script>
        <script>
            new Glide('.home-slider', {
                type: 'carousel',
                startAt: 0,
                perView: 1,
                gap: 0,
                autoplay: 4000,
                animationDuration: 1000
            }).mount(),

            new Glide('.testimony-slider', {
                type: 'carousel',
                startAt: 0,
                perView: 1,
                gap: 0,
                autoplay: 3000,
                animationDuration: 500
            }).mount()

            $(document).ready(function(){
                $('#mainnav ul:first').addClass('menu').attr('id', 'menu');
            });

        </script>
        <script src="{{ asset('js/lightbox.js') }}"></script>
    </div>
</body>
</html>