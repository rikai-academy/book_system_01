<?php

namespace App\Library\Services;
use Illuminate\Support\Str;

use App\Library\Services\Contracts\UploadImageServiceInterface;

class UploadImageService implements UploadImageServiceInterface {

    public function uploadImageController($request,$data)
    {
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $Image = Str::random(4)."_".$name;
            while(file_exists("upload/book".$Image))
            {
                $Image = Str::random(4)."_".$name;
            }
            $file->move("upload/book",$Image);
            return $data['image'] = $Image;
        }
        else
        {
            return $data['image'] = null;
        }
    }
}