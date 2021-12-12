<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends ApiResponseController
{

    public function category(Category $category)
    {
        return $this->succesResponse($category->posts);
    }

    public function url_clean(String $url_clean)
    {
        $post = Post::where('url_clean',$url_clean)->get();
        return $this->succesResponse($post);
    }


}
