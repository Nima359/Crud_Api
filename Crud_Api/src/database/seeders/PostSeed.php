<?php

namespace Nima\Crud_Api\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Nima\Crud_Api\App\Models\Post;


class PostSeed extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run () {

//    Post::truncate();
    
    $posts = [
      [
        'post_id' => 1 ,
        'title' => 'post title 1' ,
        'content' => 'post content 1' ,
        'user_id' => 1 ,
        'post_type' => 1 ,
        'published' => 1 ,
        'created_at' => '2021-10-20 18:54:28' ,
        'updated_at' => '2021-10-20 18:54:28' ,
      ] ,
      [
        'post_id' => 2 ,
        'title' => 'post title 2' ,
        'content' => 'post content 2' ,
        'user_id' => 1 ,
        'post_type' => 1 ,
        'published' => 1 ,
        'created_at' => '2021-10-20 18:54:28' ,
        'updated_at' => '2021-10-20 18:54:28' ,
      ] ,
      [
        'post_id' => 3 ,
        'title' => 'post title 3' ,
        'content' => 'post content 3' ,
        'user_id' => 1 ,
        'post_type' => 1 ,
        'published' => 1 ,
        'created_at' => '2021-10-20 18:54:28' ,
        'updated_at' => '2021-10-20 18:54:28' ,
      ] ,
      [
        'post_id' => 4 ,
        'title' => 'post title 4' ,
        'content' => 'post content 4' ,
        'user_id' => 1 ,
        'post_type' => 1 ,
        'published' => 1 ,
        'created_at' => '2021-10-20 18:54:28' ,
        'updated_at' => '2021-10-20 18:54:28' ,
      ] ,
      [
        'post_id' => 5 ,
        'title' => 'post title 5' ,
        'content' => 'post content 5' ,
        'user_id' => 1 ,
        'post_type' => 1 ,
        'published' => 1 ,
        'created_at' => '2021-10-20 18:54:28' ,
        'updated_at' => '2021-10-20 18:54:28' ,
      ] ,
      [
        'post_id' => 6 ,
        'title' => 'post title 6' ,
        'content' => 'post content 6' ,
        'user_id' => 1 ,
        'post_type' => 1 ,
        'published' => 1 ,
        'created_at' => '2021-10-20 18:54:28' ,
        'updated_at' => '2021-10-20 18:54:28' ,
      ] ,
      [
        'post_id' => 7 ,
        'title' => 'post title 7' ,
        'content' => 'post content 7' ,
        'user_id' => 1 ,
        'post_type' => 1 ,
        'published' => 1 ,
        'created_at' => '2021-10-20 18:54:28' ,
        'updated_at' => '2021-10-20 18:54:28' ,
      ]
    
    ];
    
    foreach ($posts as $post) {
      Post::create ([
        'post_id' => $post['post_id'] ,
        'title' => $post['title'] ,
        'content' => $post['content'] ,
        'user_id' => $post['user_id'] ,
        'post_type' => $post['post_type'] ,
        'published' => $post['published'] ,
        'created_at' => $post['created_at'] ,
        'updated_at' => $post['updated_at'] ,
      ]);
    }
    
  }
}
