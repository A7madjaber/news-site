
<section class="layout_7">
    <div class="container">
        <div class="layout-header">
            <h3 class="header-link link-8"> <a href="">  رياضة</a></h3>
        </div>
        <div class="layout-body">
            <div class="slider-2 owl-carousel owl-theme">

                <?php $news=news('رياضة',8)?>

               @foreach($news as $new)
                <div class="entry-box  box-2">
                    <div class="thumb"><a href="{{route('new',[@$new->slug])}}">
                            <picture>
                                <source media="(max-width: 768px)" srcset="{{image_url(@$new->image,'225x188')}}"/>
                                <source media="(max-width: 992px)" srcset="{{image_url(@$new->image,'225x188')}}"/>
                                <img src="{{image_url(@$new->image,'225x188')}}" alt=""/>
                            </picture></a></div>
                    <div class="entry-body p-3">
                        <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                    </div>
                </div>
@endforeach

            </div>
        </div>
    </div>
</section>
