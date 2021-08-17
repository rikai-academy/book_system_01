<?php
namespace App\Library\Services\Contracts;
  
Interface UploadimageServiceInterface
{
    public function uploadImage($request,$data,$type);
}