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

         <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_taital">Request A Call Back</h1>
          <div class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Email" name="Email">
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
             </div>
             <button type="submit" class="send_btn"><a href="#">SEND</a></button>
          </div>
        </div>
      </div>
        
      <!-- footer section -->
        @include('home.footer')

      <!-- Javascript files-->         
      @include('home.script')
</body>
</html>