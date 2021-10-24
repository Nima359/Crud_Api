<div id="content" class="{{--col-8--}}">
    <style>
        * {
            text-decoration: none;
            list-style: none;
        }
        
        table {
            border-collapse: collapse;
        }
        
        th {
            background-color: #0a58ca;
            color: white;
        }
        
        td, th {
            border: 1px solid gray;
            padding: 6px 9px;
            text-align: center;
        }
    </style>
    
    <script src="{{ asset ("assets/front/js/jquery-3.6.0.js") }}" type="application/javascript"></script>
    <script>
        $(function () {
            $.ajax({
                type : 'GET' ,
                url : 'http://localhost:8000/post-json/v2/posts' ,
                
                success : function (data) {
                    var posts_html = '';
                    $.each(data , function (index , post) {
                        posts_html += '<a href="' + post.link + '"><h3>' + post.title.rendred + '</h3></a>';
                        posts_html += '<p>' + post.excerpt.rendred + '</p>';
                    });
                    
                    $("#posts").html(posts_html);
                } ,
                
                error : function (request , status , error) {
                    alert(error);
                }
                
            });
            
        });
    
    </script>
    <h4>Show Post Page</h4>
    
    <div id="post">
        <table>
            <tr>
                <th>table</th>
                <th>Post ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td><a href="/postApi/<?= $post->post_id?>">{{ $post->table }}</a></td>
                    <td><a href="/postApi/<?= $post->post_id?>">{{ $post->post_id }}</a></td>
                    <td><a href="/postApi/<?= $post->post_id?>">{{ $post->title }}</a></td>
                    <td><a href="/postApi/<?= $post->post_id?>">{{ $post->content }}</a></td>
                    <td><a href="/postApi/{{$post->id}}/edit">Edit</a></td>
                    <td>
                        <form method="post" action="/postApi/">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token () }}" />
                            <input type="hidden" name="_method" value="DELETE" />
                            <input type="submit" value="DELETE" />
                        </form>
                    </td>
                </tr>
            
            @endforeach
        </table>
        
        {{--@dd($posts)--}}
    </div>
    
    <div class="clear"></div>
</div>


