<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $requers, Post $post)
    {
        $data = $requers->validated();

        $post->update($data);

        return redirect()->route('admin.post.show', compact('post'));
    }
}
