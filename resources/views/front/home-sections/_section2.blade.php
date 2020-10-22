<section class="layout_2">
    <div class="container">
        <div class="row">

            <?php $news=news('سياسة',6);?>

            <div class="col-lg-8">
                <div class="layout-header">
                    <h3 class="header-link link-1"> <a href="">سياسة </a></h3>
                </div>

                <div class="layout-body row">


                    @foreach($news as $key=>$new )


                        <div class="col-md-4 col-sm-6">
                        <div class="entry-box overlay-box box-2">
                            <div class="thumb"><a href="{{route('new',[@$new->slug])}}">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{image_url(@$new->image,'230x230')}}"/>
                                        <source media="(max-width: 992px)" srcset="{{image_url(@$new->image,'230x230')}}"/>
                                        <img src="{{image_url(@$new->image,'230x230')}}" alt=""/>
                                    </picture></a></div>
                            <div class="details">
                                <h3 class="title font-size-16 font-size-md-18">
                                    <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>


                <?php $lasts_news=lastNews(7)?>

            <div class="col-lg-4">
                <div class="layout-header">
                    <h3 class="header-link link-2"> <a>أخر التحديثات</a></h3>
                </div>

                <div class="layout-body box-shadow ">
                    <div class="layout-body box-shadow"></div>
                    @foreach($lasts_news as $new)
                    <article class="d-flex align-items-center last-news">
                        <a href="{{route('new',[@$new->slug])}}"><h3 class="title"><i class="icon-double-left-chevron">
                                </i><span>{{@$new->description}}</span></h3></a>
                    </article>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
