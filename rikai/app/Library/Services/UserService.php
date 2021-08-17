<?php

namespace App\Library\Services;

use App\Library\Services\Contracts\UserServiceInterface;
use App\Models\User;

class UserService implements UserServiceInterface
{
    public function changeImage($request,$id)
    {
        $destinationPath = storage_path('public/upload/user');
        $file = $request->file('image');
        $fileName = $id . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);
        return $fileName;
    }

    public function searchBy($search, $search_by)
    {
        $users = User::where($search_by,'like','%'.$search.'%')->paginate(5);
        return $users;
    }
}
