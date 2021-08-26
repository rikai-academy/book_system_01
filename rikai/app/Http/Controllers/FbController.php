<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Illuminate\Support\Facades\Auth;
use App\Library\Services\Contracts\SocialFacebookServiceInterface;

class FbController extends Controller
{
    protected $socialFaceBookService;

    public function __construct(SocialFacebookServiceInterface $socialFacebookServiceInterface)
    {
        $this->redirectTo = url()->previous();
        $this->middleware('guest')->except('logout');
        $this->socialFaceBookService = $socialFacebookServiceInterface;
    }

    public function redirectToFacebook()
    {
        return $this->socialFaceBookService->redirectToFacebook();
    }

    public function facebookSignin()
    {
        $result = $this->socialFaceBookService->facebookSignin();
        return $result;
    }
}
