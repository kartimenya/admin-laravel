<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $requers, User $user)
    {
        $data = $requers->validated();
        $user->update($data);

        return redirect()->route('admin.user.show', compact('user'));
    }
}
