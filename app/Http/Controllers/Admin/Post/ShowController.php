<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $category = Category::query()->find($post->category_id);

        return view('admin.post.show', compact('post', 'category'));
    }
}
