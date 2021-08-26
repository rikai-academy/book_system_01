<?php
namespace App\Library\Services\Contracts;
  
Interface SocialFacebookServiceInterface
{
    public function redirectToFacebook();

    public function facebookSignin();
}