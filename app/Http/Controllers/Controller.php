<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Post;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(Post $post)
    {
        return $post->get();
    }

}
