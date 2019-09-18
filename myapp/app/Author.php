<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	public $timestamps = false;
	protected $fillable = ['email','password']; //프로퍼티를 이용하여 허용목록 방식 (비밀번호 해시)
}

