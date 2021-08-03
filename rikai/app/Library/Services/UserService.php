<?php

namespace App\Library\Services;

use App\Library\Services\Contracts\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function changeImage($request)
    {
        $destinationPath = storage_path('app/public/image');
        $file = $request->file('image');
        $fileName = auth()->user()->id . '.' . $file->clientExtension();
        $file->move($destinationPath, $fileName);
        return $fileName;
    }
}
