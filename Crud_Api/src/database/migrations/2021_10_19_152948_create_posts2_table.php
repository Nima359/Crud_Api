<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePosts2Table extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up () {
    Schema::create ('posts2' , function (Blueprint $table) {
      $table->engine = "InnoDB";
      $table->charset = "utf8";
      $table->collation = "utf8_persian_ci";
      
      $table->id ();
      $table->integer ("post_id");//->unsigned ()->unique ();
      $table->string ("title" , 255);
      $table->longText ("content");
      $table->bigInteger ("user_id")->unsigned () ;
      $table->tinyInteger ("post_type");//->default (1);
      $table->tinyInteger ("published");//->default (0);
      $table->timestamps ();
      
//      $table->foreign ('user_id')->references ('id')->on ('users')->restrictOnDelete ();
//      $table->foreign ('user_id')->references ('id')->on ('users')->onDelete ('restrict')->onUpdate ('restrict');
    });
  }
  
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down () {
//    $table = new Blueprint('posts2');
//    $table->dropForeign ('posts2_user_id_foreign');
    
    Schema::dropIfExists ('posts2');
  }
}
