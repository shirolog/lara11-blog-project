<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">

        .title-deg{
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white;
        }

        .des-deg{
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            color: whitesmoke;
        }

        .img_deg{
            height: 200px;
            width: 300px;
            padding: 30px;
            object-fit: contain;
            margin: auto;
        }

        .grid-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, 23rem);
            gap: 1.5rem;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
        }

        .grid-container .box{
            text-align: center;
            padding: 20px;
            background: skyblue;
            border-radius: 20px;
        }

        .pagination{
        margin: auto;
      }

      .pagination nav div:nth-child(2){
        justify-content: center !important;
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

            <div class="grid-container">
                @if($posts->isNotEmpty())
                    @foreach($posts as $post)
                            <div class="box">
                                @if(!empty($post->image))
                                    <img src="{{asset('postimage/'. $post->image)}}" class="img_deg" alt="">
                                @else
                                    <span style="font-size: 16px;">No image available</span>
                                @endif
                                <h4 class="title-deg">{{$post->title}}</h4>
                                <p class="des-deg">{{$post->description}}</p>
                                <a href="javascript:void(0);" class="btn btn-danger delete-btn" data-id="{{$post->id}}">Delete</a>
                                <a href="{{route('home.post_update_page', $post->id)}}" class="btn btn-primary">Update</a>
                            </div>
                    @endforeach
                    @else
                        <span style="text-align: center; font-size:50px;">Not found Posts!</span>    
                    @endif

                </div>
                @if($posts->isNotEmpty())
                    <span class="pagination">{!!$posts->links()!!}</span>
                @endif
        </div>
      <!-- footer section -->
        @include('home.footer')

      <!-- Javascript files-->         
      @include('home.script')
            
    <!-- sweetalert js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script type="text/javascript">
        $(document).on('click', '.delete-btn', function(e){
            e.preventDefault();

            const postId = $(this).data('id');


            if(confirm('Are you sure you want to delete?')){
                deletePost(postId);
            }
        });

        function deletePost(postId){
            $.ajax({
                url:"{{route('home.my_post_del', ':id')}}".replace(':id', postId),
                type: "DELETE",
                headers:{
                    'X-CSRF-TOKEN': "{{csrf_token()}}" 
                },
                success: function(response){
                    if(response.status){
                        swal("Delete!", response.message, "success").then(() => {

                            window.location.href = "{{route('home.my_post')}}"
                        })
                    }
                }
            });
        }
      </script>

</body>
</html>