<!DOCTYPE html>
<html>
  <head> 
    @include('admin.layout')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.sidebar')

      <div class="page-content">
        @include('admin.body')

        @include('admin.footer')
      </div>
    </div>
    @include('admin.script')
  </body>
</html>