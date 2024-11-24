<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
      .pagination{
        margin: auto;
      }

      @media screen and (max-width:768px) {
            
            .pagination nav div:nth-child(1){
                display: none;
            }

            .pagination nav div:nth-child(2){
                margin: auto;
            }
        }
    </style>
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