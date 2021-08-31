<?php
namespace App\Library\Services\Contracts;
use Illuminate\Http\Request;
  
Interface SocialGoogleServiceInterface
{
    public function redirectToProvider();

    public function handleProviderCallback(Request $request);
}