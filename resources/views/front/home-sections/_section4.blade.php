<section class="layout_4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="layout-header">
                    <h3 class="header-link link-5"> <a href="">أخبار محلية</a></h3>
                </div>
                <div class="layout-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <?php $news=news('محلية',9);?>

                            @foreach($news as $key=>$new )
                                @if($key==0)

                            <div class="entry-box overlay-box box-3 box-shadow">
                                <div class="thumb"><a href="{{route('new',[$new->slug])}}">
                                        <picture>
                                            <source media="(max-width: 768px)" srcset="{{image_url(@$new->image,'730x237')}}"/>
                                            <source media="(max-width: 992px)" srcset="{{image_url(@$new->image,'730x237')}}"/>
                                            <img src="{{image_url(@$new->image,'730x237')}}" alt=""/>
                                        </picture></a>
                                    <div class="details">
                                        <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                                    </div>
                                </div>
                                <div class="entry-body p-3">
                                    <p class="info">{{@$new->description}}</p>
                                </div>
                            </div>

                                    @endif
                                @endforeach

                        </div>




                        @for ($i = 1; $i <=8 ; $i++)



                        <div class="col-lg-6">
                            <div class="entry-box overlay-box box-3 box-shadow">
                                <div class="thumb"><a href="{{route('new',[@$news[$i]->slug])}}">
                                        <picture>
                                            <source media="(max-width: 768px)" srcset="{{image_url(@$news[$i]->image,'350x217')}}"/>
                                            <source media="(max-width: 992px)" srcset="{{image_url(@$news[$i]->image,'350x217')}}"/><img src="{{image_url($news[$i]->image,'350x217')}}" alt=""/>
                                        </picture></a>
                                    <div class="details">
                                        <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$news[$i]->slug])}}">{{@$news[$i]->title}}</a></h3>
                                    </div>
                                </div>
                                <div class="entry-body p-3">
                                    <p class="info">{{@$news[$i]->description}}</p>
                                </div>
                            </div>
                        </div>

                        @endfor

                    </div>
                </div>
            </div>


        @include('front.layouts._mostViews_nav')
        </div>
    </div>
</section>
