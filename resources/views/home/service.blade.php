<div class="services_section layout_padding">
    <div class="container" style="max-width: 960px;">
        <h1 class="services_taital">Blog Posts</h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
        <div class="services_section_2">
            <div class="row">
                @if($posts->isNOtEmpty())
                    @foreach($posts as $post)
                    <div class="col-md-4" style="padding: 20px; text-align:center;">
                        <div><img src="{{asset('postimage/'. $post->image)}}" class="services_img"></div>
                        <h4>{{$post->title}}</h4>
                        <p>Post by <b>{{$post->name}}</b></p>
    
                        <div class="btn_main"><a href="{{route('home.detail', $post->id)}}">Read More</a></div>
                    </div>
                    @endforeach
                    <span class="pagination">{!!$posts->links()!!}</span>
                @endif

            </div>
        </div>
    </div>
</div>