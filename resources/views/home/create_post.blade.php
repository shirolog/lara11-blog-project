<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        .div-deg{

            text-align: center;
        }

        .title-deg{
            font-size: 30px;
            font-weight: bold;
            color: white;
        }

        label{
            font-size: 18px;
            color: white;
            font-weight: bold;
            width: 200px;
            display: inline-block;
        }

        form{
            padding: 20px;
        }

        .field-deg{
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
        }

        [type=file]{
            width: 200px;
        }
    </style>

    @include('home.layout')

</head>
<body>
        <!-- header section start -->
        <div class="header_section">
            @include('home.header')

            <div class="div-deg">
                <h3 class="title-deg">Add Post</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="field-deg">
                        <label for="title">Title</label> 
                        <input type="text" name="title">
                    </div>

                    <div class="field-deg">
                        <label for="description">Description</label> 
                        <textarea value="" name="description" id="description"></textarea>
                    </div>

                    <div class="field-deg">
                        <label for="image">Add Image</label> 
                        <input type="file" name="image" id="image">
                    </div>

                    <div class="field-deg">
                        <input type="submit" class="btn btn-outline-secondary" value="Add Post">
                    </div>
                </form>
            </div>
        </div>
      <!-- footer section -->
        @include('home.footer')

      <!-- Javascript files-->         
      @include('home.script')
</body>
</html>