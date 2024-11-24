<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.layout')
</head>
<body>
        <!-- header section start -->
        <div class="header_section">
            @include('home.header')
        </div>

          <!-- blog section start -->
        <div class="blog_section layout_padding margin_top_90">
            <div class="container">
                <h1 class="blog_taital">See Our  Video</h1>
                <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
                <div class="play_icon_main">
                <div class="play_icon"><a href="#"><img src="{{asset('images/play-icon.png')}}"></a></div>
                </div>
            </div>
        </div>
        
      <!-- footer section -->
        @include('home.footer')

      <!-- Javascript files-->         
      @include('home.script')
</body>
</html>