<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
   public function up() 
   {
	   Schema::create('posts', function(Blueprint $table) { //posts라는 table을 만든다
		   $table->increments('id');
		   $table->string('title');
		   $table->text('body');
		   $table->timestamps(); //created_at과 updated_at 타임스탬프 열을 만든다. (도우미 메서드)
	   });
   }
	
	public function down() 
	{
		Schema::dropIfExists('posts');
	}
}
