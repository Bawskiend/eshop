<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Users extends Model
{
    public function post()
    {
        $result = $this->hasOne(Post::class);
        return view('test',['result' => $result]);
    }
    use HasFactory;

}
