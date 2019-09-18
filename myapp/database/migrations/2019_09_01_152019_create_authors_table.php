<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
   public function up() 
   {
	   Schema::create('authors', function (Blueprint $table) { // authors라는 테이블을 만든다.
		   $table->increments('id');
		   $table->string('email', 255);
		   $table->string('password', 60);
		   $table->timestamps();
	   });
   }
	
	public function down() {
		Schema::dropIfExists('authors'); // 테이블을 지운다
	}
}
