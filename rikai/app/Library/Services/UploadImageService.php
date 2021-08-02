<?php

namespace App\Library\Services;
use Illuminate\Support\Str;

use App\Library\Services\Contracts\UploadImageServiceInterface;

class UploadimageService implements UploadimageServiceInterface {

    public function uploadImage($request,$data,$type)
    {
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $image = Str::random(4)."_".$name;
            switch($type){
                case 'book':
                    while(file_exists("upload/book".$image))
                    {
                        $image = Str::random(4)."_".$name;
                    }
                    $file->move("upload/book",$image);
                    return $data['image'] = $image;
                    break;
                case 'profile':
                    while(file_exists("upload/profile".$image))
                    {
                        $image = Str::random(4)."_".$name;
                    }
                    $file->move("upload/profile",$image);
                    return $data['image'] = $image;
                    break;
                default:
                    return $data['image'] = null; 
            }
        }
        else
        {
            return $data['image'] = null;
        }
    }

}