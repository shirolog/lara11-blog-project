<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.layout')
</head>
<body>
        <!-- header section start -->
        <div class="header_section">
            @include('home.header')
            <!-- banner section  -->
            @include('home.banner')
        </div>
      
      <!-- services section -->
        @include('home.service')
      <!-- about section -->
        @include('home.about')
        
      <!-- footer section -->
        @include('home.footer')

      <!-- Javascript files-->         
      @include('home.script')
</body>
</html>