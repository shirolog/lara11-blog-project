<!DOCTYPE html>
<html>
  <head> 
    @include('admin.layout')

    <style type="text/css">
        .post_title{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .div_center{
            text-align: center;
            padding: 30px;
        }

        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.sidebar')

      <div class="page-content">
        @if(Session::has('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{Session::get('success')}}
          </div>
        @endif
        <h1 class="post_title">Add Post</h1>

        <div>
            <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="div_center">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" id="title">
                </div>

                <div class="div_center">
                    <label for="description">Post Description</label>
                    <textarea name="description" id="description"></textarea>
                </div>

                <div class="div_center">
                    <label for="image">Add Image</label>
                    <input type="file" name="image" id="image" accept="image/jpg, image/png, image/jpeg">
                </div>

                <div class="div_center">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            </form>
        </div>

        @include('admin.footer')
      </>
    </div>
    @include('admin.script')
  </body>
</html>