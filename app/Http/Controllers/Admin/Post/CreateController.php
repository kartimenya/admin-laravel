<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.post.create', compact('categories', 'tags'));
    }
}
