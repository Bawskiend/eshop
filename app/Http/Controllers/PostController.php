<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function show($value)
    {
        $user = User::find(1);
        dump($user->post);
    }
}
?>
