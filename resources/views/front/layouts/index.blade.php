
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> أخباركم |  {{@$title}} </title>
    <meta name="robots" content="noodp,noydir"/>
    <meta name="robots" content="index,follow"/>
    <meta name="robots" content="ALL"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="أخباركم"/>
    <meta property="og:description" content="{{@$description ? $description: @settings()->description}}"/>
    <meta property="og:image" content="{{asset('images/a5barkm.jpg')}}"/>
    <meta property="og:image:width" content="830"/>
    <meta property="og:image:height" content="506"/>
    <meta property="og:url" content="{{route('home')}}"/>
    <meta property="og:site_name" content="{{@settings()->title}}"/>
    <meta property="og:ttl" content="604800"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:domain" content="{{route('home')}}"/>
    <meta name="twitter:site" content="@a5barkm"/>
    <meta name="twitter:creator" content="@a5barkm"/>
    <meta name="twitter:image:src" content="{{asset('images/a5barkm.jpg')}}"/>
    <meta name="twitter:description" content="{{@$description ? $description: @settings()->description}}"/>
    <meta name="twitter:title"content="{{@$title ? $title: @settings()->title}}"/>
    <meta name="twitter:url" content="{{route('home')}}"/>
    <meta name="description" content="{{@$description ? $description: @settings()->description}}"/>
    <meta name="keywords" content="{{@$tags ? $tags: @settings()->tags}}"/>
    <meta name="rating" content="General"/>
    <meta name="copyright" content="{{@settings()->CopyRight}}"/>
    <link rel="icon" href="{{image_url(icon())}}"/>

    @include('front.layouts._css')
</head>


<body>
<div class="mobile-menu-overlay active"></div>
<div class="menu-mobile scroll"><i class="icon-clear-button"></i>
    <ul class="menu">
        <li href="{{route('home')}}"><a href="{{route('home')}}">الرئيسية</a></li>


         @foreach( categories() as $category)
        <li href="#"><a href="{{route('category.news',$category->slug)}}">{{$category->name}}</a></li>
        @endforeach


        <li href="#"><a href="{{route('videos')}}"> الفيديو</a></li>
    </ul>
</div>

<div class="main-wrapper">
   @include('front.layouts._header')


    <div class="main-navigation">
        <div class="container">

            <div class="d-flex align-items-center">
                <ul class="main-menu d-none d-lg-block">
                    <li><a class="active" href="{{route('home')}}">الرئيسية</a></li>

                    @foreach(categories() as $category)
                        <li href="#"><a href="{{route('category.news',$category->slug)}}">{{$category->name}}</a></li>
                    @endforeach

                    <li><a href="{{route('videos')}}">الفيديو</a></li>
                </ul>
                <form method="POST" action="{{route('search')}}" class="formSearch mr-lg-auto" accept-charset="UTF-8">
                    @csrf
                    <div class="form-group position-relative mb-0">
                        <input type="text" name="search"placeholder="ابحث..."/><i class="icon-search"></i>
                    </div>
                </form>
            </div>
            <a class="d-block d-lg-none" href="#menu" id="toggle"><span> <span></span></span></a>
        </div>


    </div>

    @include('dashboard.partials.success')

    @yield('content')

</div>


@include('front.layouts._footer')
@include('front.layouts._js')
</body>
</html>
