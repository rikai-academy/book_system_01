<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use App\Services\SocialFacebookAccountService;
use App\Library\Services\Contracts\SocialGoogleServiceInterface;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    protected $socialGoogleService;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SocialGoogleServiceInterface $socialGoogleServiceInterface)
    {
        $this->redirectTo = url()->previous();
        $this->middleware('guest')->except('logout');
        $this->socialGoogleService = $socialGoogleServiceInterface;
    }

    public function showLoginForm()
    {
        $view = property_exists($this, 'loginView') ? $this->loginView : 'auth.authenticate';

        if (view()->exists($view)) {
            return view($view);
        }
        return back()->with('message', __('message.needLogin'));
    }

    public function redirectToProvider()
    {
        return $this->socialGoogleService->redirectToProvider();
    }

    public function handleProviderCallback(Request $request)
    {
        $result = $this->socialGoogleService->handleProviderCallback($request);
        return $result;

    }
}
