<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function show($id)
    {
        return view('posts.show', [
            'post' => Post::findOrFail($id)
        ]);
    }
}
