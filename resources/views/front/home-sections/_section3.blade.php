<section class="layout_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="layout-header">
                    <h3 class="header-link link-3"><a href=""> اقتصاد</a></h3>
                </div>




                <div class="layout-body pb-3 background-gray-5">
                    <?php $news=news('اقتصاد',4);?>
                    @foreach($news as $key=>$new )
                        @if($key== 0)

                                <div class="entry-box overlay-box box-2">
                                    <div class="thumb"><a href="{{route('new',[@$new->slug])}}">
                                            <picture>
                                                <source media="(max-width: 768px)" srcset="{{image_url(@$new->image,'540x303')}}"/>
                                                <source media="(max-width: 992px)" srcset="{{image_url(@$new->image,'540x303')}}"/>
                                                <img src="{{image_url(@$new->image,'540x303')}}" alt=""/>
                                            </picture></a></div>
                                    <div class="details">
                                        <h3 class="title font-size-16 font-size-md-24"> <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                                    </div>
                                </div>


                            @endif
                        @endforeach


                        @for ($i = 1; $i <=3 ; $i++)

                            <div class="entry-box entry-box-2 d-flex align-items-center no-gutters box-1 pr-3">
                                <div class="thumb col-auto"><a href="{{route('new',[@$news[$i]->slug])}}">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{image_url(@$news[$i]->image,'150x100')}}"/><img src="{{image_url($news[$i]->image,'150x100')}}" alt=""/>
                                        </picture></a></div>
                                <div class="entry-title col p-3">
                                    <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$news[$i]->slug])}}">{{@$news[$i]->title}}</a></h3>
                                </div>
                            </div>
                        @endfor


                </div>
            </div>



            <div class="col-lg-6">
                <div class="layout-header">
                    <h3 class="header-link link-3"><a href=""> تكنولوجيا</a></h3>
                </div>

                <div class="layout-body pb-3 background-gray-5">
                    <?php $news=news('تكنولجيا',4);?>

                    @foreach($news as $key=>$new )
                        @if($key== 0)

                    <div class="entry-box overlay-box box-2">
                        <div class="thumb"><a href="{{route('new',[@$new->slug])}}">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="{{image_url(@$new->image,'540x303')}}"/>
                                    <source media="(max-width: 992px)" srcset="{{image_url(@$new->image,'540x303')}}"/>
                                    <img src="{{image_url(@$new->image,'540x303')}}" alt=""/>
                                </picture></a></div>
                        <div class="details">
                            <h3 class="title font-size-16 font-size-md-24"> <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                        </div>
                    </div>


                            @endif
                        @endforeach


                   @for ($i = 1; $i <=3 ; $i++)

                    <div class="entry-box entry-box-2 d-flex align-items-center no-gutters box-1 pr-3">
                        <div class="thumb col-auto"><a href="{{route('new',[@$news[$i]->slug])}}">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="{{image_url(@$news[$i]->image,'150x100')}}"/>
                                    <img src="{{image_url(@$news[$i]->image,'150x100')}}" alt=""/>
                                </picture></a></div>
                        <div class="entry-title col p-3">
                            <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$news[$i]->slug])}}">{{@$news[$i]->title}}</a></h3>
                        </div>
                    </div>
                        @endfor
                </div>

            </div>




        </div>
    </div>



</section>
