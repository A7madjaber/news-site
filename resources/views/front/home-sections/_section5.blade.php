
<section class="layout_5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="layout-header">
                    <h3 class="header-link-2 "> <a>ميديا</a></h3>
                </div>

                <?php $videos=videos(5)?>
                @foreach($videos as $key=>$video)
                    @if($key==0 )


                    <div class="layout-body">
                    <div class="entry-box box-1 video-2">
                        <div class="thumb"><a href="{{@$videos[0]->url}}" data-fancybox="data-fancybox">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="{{image_url(@$videos[0]->image,'500x395')}}"/>
                                    <source media="(max-width: 992px)" srcset="{{image_url(@$videos[0]->image,'500x395')}}"/>
                                    <img src="{{image_url(@$videos[0]->image,'500x395')}}" alt=""/>
                                </picture></a></div>
                        <div class="entry-body pt-2">
                            <h3 class="title font-size-16 font-size-md-20">
                                <a href="{{@$videos[0]->url}}" data-fancybox="data-fancybox">{{@$videos[0]->name}}</a></h3>
                        </div>
                    </div>
                </div>

                    @endif
            @endforeach
            </div>



            <div class="col-lg-6">
                <div class="layout-header text-left">
                    <h3 class="header-link-2 "> <a href="{{route('videos')}}"> <span>المزيد </span><i class="icon-arrow-left font-size-12"></i></a></h3>
                </div>
                <div class="row">


                    @for ($i = 1; $i <= 4; $i++)


                    <div class="col-sm-6">
                        <div class="entry-box box-1 video-2">
                            <div class="thumb"><a href="{{@$videos[$i]->url}}" data-fancybox="data-fancybox">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{image_url(@$videos[$i]->image,'270x160')}}"/>
                                        <source media="(max-width: 992px)" srcset="{{image_url(@$videos[$i]->image,'270x160')}}"/>
                                        <img src="{{image_url(@$videos[$i]->image,'270x160')}}" alt=""/>
                                    </picture></a></div>
                            <div class="entry-body pt-2">
                                <h3 class="title font-size-16 font-size-md-16 ">
                                    <a href="{{@$videos[$i]->url}}" data-fancybox="data-fancybox">
                                      {{@$videos[$i]->name}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    @endfor

                </div>
            </div>
        </div>
    </div>
</section>
