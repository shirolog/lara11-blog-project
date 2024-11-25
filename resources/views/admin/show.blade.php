<!DOCTYPE html>
<html>
  <head> 
    @include('admin.layout')

    <style type="text/css">
        .title_deg{
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
        }

        .table_deg{
            text-align: center;
            width: 80%;
            border: 1px solid white;
            margin-left: 70px;
            margin: auto;
        }

        .th_deg{
            background: skyblue;
        }

        .img_deg{
            height: 100px;
            width: 150px;
            padding: 10px;
        }

        .img_deg .img{
            width: 100%;
            height: 100%;
            object-fit: scale-down;
        }
        .img_deg .empty{
            width: 100%;
            height: 100%;
        }

        .page-content{
            flex-grow: 1;
            overflow-x: auto;
            padding: 20px;
          
        }

        th:not(:last-child){
            padding-right: 20px;
        }
        td:not(:last-child){
            padding-right: 20px;
        }

        .pagination nav{
            width: 100%;
            margin: 30px 0;
            
        }

        .pagination nav div:nth-child(2){
            display: flex;
            align-items: center;
            gap: 40px;
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
        
        <h1 class="title_deg">All Post</h1>

        <table class="table_deg mb-5">
            <tr class="th_deg">
                <th>Post Title</th>
                <th>Description</th>
                <th>Post By</th>
                <th>Post Status</th>
                <th>Usertype</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Status Accept</th>
                <th>Status Reject</th>
            </tr>

            @if($posts->isNotEmpty())
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->name}}</td>
                        <td>{{$post->post_status}}</td>
                        <td>{{$post->usertype}}</td>
                        <td>
                            <div class="img_deg">

                                @if(!empty($post->image))
                                <img class="img" src="{{asset('postimage/'. $post->image)}}" alt="">
                                @else
                                <img class="img" src="https://placehold.co/910x1400?text=No Image" alt=""> 
                                @endif
                            </div>
                        </td>

                        <td><a href="javascript:void(0);" class="btn btn-danger delete-btn" data-id="{{$post->id}}" role="button">Delete</a></td>
                        <td><a href="{{route('admin.edit', $post->id)}}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{route('admin.accept', $post->id)}}" class="btn btn-outline-secondary">Accept</a></td>
                        <td><a href="{{route('admin.reject', $post->id)}}" class="btn  btn-primary" 
                        onclick="return confirm('are you sure to reject this post?');">Reject</a></td>
                    </tr>
                @endforeach
                @else
                    <tr>

                        <td colspan="7"><span style="font-size: 30px;">Not found Item</span></td>
                    </tr>
            @endif
        </table>
        @if($posts->isNotEmpty())
            <span class="pagination">{!!$posts->links()!!}</span>
        @endif
        @include('admin.footer')
      </div>
    </div>

    @include('admin.script')

    <!-- sweetalert js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $(document).on('click', '.delete-btn', function(e){
        e.preventDefault();
        const postId = $(this).data('id');

        swal({
            title: "Are you sure to delete this?",
            text: "You won't be able to revert this delete",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                deletePost(postId);
            }
        });
    });

        function deletePost(postId){
            $.ajax({
                url: '{{ route("admin.destroy", ":id") }}'.replace(':id', postId),
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response){
                    if(response.status){
                        window.location.href = '{{ route("admin.show") }}';
                    }
                }
            });
        }




    </script>

  </body>
</html>