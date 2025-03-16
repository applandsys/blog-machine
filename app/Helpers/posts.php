<?php
use App\Models\Post;

if (!function_exists('getPostsPaginated')) {
    function getPostsPaginated($paginate=10)
    {
        return Post::paginate($paginate);
    }
}

if (!function_exists('getPostsLimit')) {
    function getPostsLimit($offset=0,$limit=10)
    {
        return Post::skip($offset)->take($limit)->get();
    }
}

