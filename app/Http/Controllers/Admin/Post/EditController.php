<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }
}
