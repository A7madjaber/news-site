<header class="main-header background-gray-1">
    <div class="container">
        <div class="d-lg-flex d-md-block align-items-center">
            <div class=" d-block d-sm-flex text-center-xs align-items-center ml-auto">
                <div class="logo ml-sm-5"><a href="#"><img src="{{image_url(icon())}}" alt="logo"/></a></div>
                <ul class="social-media ml-auto">
                    <li><a href="{{url ( @settings()->youtube ? @settings()->facebook :'' )}}"><i class="icon-face"></i></a></li>
                    <li><a href="{{url ( @settings()->youtube ? @settings()->twitter :'' )}}"><i class="icon-twitter"></i></a></li>
                    <li><a href=" {{url ( @settings()->youtube ? @settings()->instagram :'' )}}"><i class="icon-instagram"></i></a></li>
                    <li><a href="{{url ( @settings()->youtube ? @settings()->youtube :'' )}}"><i class="icon-youtube"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
</header>
