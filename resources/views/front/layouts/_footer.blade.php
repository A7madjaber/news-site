<footer class="main-footer">
    <div class="container">
        <?php $categories=categories();?>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <ul class="link">
                    <li href="#"><a href="{{route('category.news',$categories[1]->slug)}}">{{$categories[1]->name}}</a></li>
                    <li href="#"><a href="{{route('category.news', $categories[2]->slug)}}">{{$categories[2]->name}}</a></li>
                    <li href="#"><a href="{{route('category.news',$categories[3]->slug)}}">{{$categories[3]->name}}</a></li


                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <ul class="link">
                    <li href="#"><a href="{{route('category.news', $categories[0]->slug)}}">{{$categories[0]->name}}</a></li>
                    <li> <a href="{{route('videos')}}"> الفيديو</a></li>
                </ul>
            </div>




            <?php $pages=Pages();?>
            <div class="col-lg-3 col-md-6">
                <ul class="link">

                    @foreach($pages as $page)
                    <li> <a href="{{route('page',$page->slug)}}">{{@$page->name}}</a></li>
                        @endforeach
                        <li> <a href="{{route('contact')}}">تواصل معنا</a></li>
                        <li> <a href="{{route('home')}}">الرئيسية</a></li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="logo text-center">
                    <img src="{{image_url(icon())}}"/>
                    <ul class="social mt-3">
                        <li><a href="{{url ( @settings()->youtube ? @settings()->facebook :'' )}}"><i class="icon-face"></i></a></li>
                        <li><a href="{{url ( @settings()->youtube ? @settings()->twitter :'' )}}"><i class="icon-twitter"></i></a></li>
                        <li><a href=" {{url ( @settings()->youtube ? @settings()->instagram :'' )}}"><i class="icon-instagram"></i></a></li>
                        <li><a href="{{url ( @settings()->youtube ? @settings()->youtube :'' )}}"><i class="icon-youtube"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyRight ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 text-right">
                <p>{{@settings()->CopyRight}}</p>
            </div>
            <div class="col-sm-6 text-left"><span>طور بواسطة أرابيك</span>
                <img src="{{asset('images/logo-company.png')}}" alt=""/></div>
        </div>
    </div>
</div>
