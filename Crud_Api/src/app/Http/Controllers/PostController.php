<?php
/** @noinspection All */

namespace Nima\Crud_Api\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Nima\Crud_Api\App\Models\Post;
use Nima\Crud_Api\App\Models\User;


class PostController extends Controller {
  private $user;
  
  public function __construct () {
    $this->user = User::find (1)->first ();
  }
  
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index () {
    $posts = Post::all ();
    
    $arr = array ();
    $i = 0;
    foreach ($posts as $key => $post) {
      $arr[$i]['id'] = $post->id;
      $arr[$i]['post_title'] = $post->title;
      $arr[$i]['post_content'] = $post->content;
      $arr[$i]['post_type'] = $post->post_type;
      $arr[$i]['publish'] = $post->published;
      $arr[$i]['comments'] = $post->comments ()->get ();
      $i++;
    }
    
    
    return json_encode ($arr/* , JSON_BIGINT_AS_STRING|JSON_PRETTY_PRINT*/);
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create () {
    
    return view ('CrudApi::app.posts.create');
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store (Request $request) {
    $data = $request->all ();
    $postId = $data['postId'];
    $title = $data['title'];
    $content = $data['content'];
    
    $post = new Post();
    
    $post->post_id = $postId;
    $post->title = $title;
    $post->content = $content;
    
    $post->save ();
    
    $newPostId = $post->id;
    
    return view ("CrudApi::app.app");
  }
  
  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show ($id) {
    $posts = Post::find ($id)->get() ;
//    $comments = $posts->comments ();
    $arr = array ();
    $i = 0;
    foreach ($posts as $key => $post) {
      $arr[$i]['post_id'] = $post->id;
      $arr[$i]['post_comments'] = $post->comments ;
      $i++;
    }
    
//    echo "<pre>";
//    print_r ($arr);
//    echo "</pre>";
    
    return json_encode ($arr , JSON_PRETTY_PRINT|JSON_BIGINT_AS_STRING);
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit ($id) {
    $post = Post::find ($id);

//        $this->middleware('can:update,post') ;
    
    return view ("CrudApi::app.posts.edit" , ["post" => $post]);
    
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update (Request $request , $id) {
    $post = Post::find ($id);
    
    if (Gate::denies ('posApit.update' , $post)) {
      return view ('CrudApi::app.posts.edit');
    }
    
    
    if (Gate::allows ('posApit.update' , $post)) {
      $data = $request->all ();
      
      $postId = $data['postId'];
      $title = $data['title'];
      $content = $data['content'];
      
      $post->post_id = $postId;
      $post->title = $title;
      $post->content = $content;
      
      $post->save ();
      
      return view ("CrudApi::app.app");
    } else {
      return view ('CrudApi::app.posts.edit');
    }
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy ($id) {
//    $post = Post::find ($id);
//    $post->delete ();
    
    Post::destroy ($id);
    
    return view ("CrudApi::app.app");
  }
}
