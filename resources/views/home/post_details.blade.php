<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('home.layout')
</head>
<body>
        <!-- header section start -->
        <div class="header_section">
            @include('home.header')
            <!-- banner section  -->
        </div>


        <div class="col-md-12" style="text-align: center; display:flex; flex-flow:column; align-items:center; padding:20px; overflow:hidden;">
            @if($post->image)
              <div style="height: 450px; width:550px"><img src="{{asset('postimage/'. $post->image)}}" class="services_img" style="margin:auto; height:100%; width:100%; padding:20px; object-fit:cover;"></div>
            @else  
              <div style="height: 450px; width:550px"><img src="https://placehold.co/910x1400?text=No Image" class="services_img" style="margin:auto; height:100%; width:100%; padding:20px; object-fit:cover;"></div>
            @endif
            <h3><strong>{{$post->title}}</strong></h3>
            <h4 style="padding-top: 20px;">{{$post->description}}</h4>
            <p style="padding-top: 20px;">Post by <b>{{$post->name}}</b></p>

        </div>

        
      <!-- footer section -->
        @include('home.footer')

      <!-- Javascript files-->         
      @include('home.script')
</body>
</html>