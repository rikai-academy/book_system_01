<?php

namespace App\Library\Services;

use App\Library\Services\Contracts\SocialGoogleServiceInterface;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class SocialGoogleService implements SocialGoogleServiceInterface
{
    public function redirectToProvider()
    {
		return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback($request)
    {
        try {
			session()->put('state', $request->input('state'));
			$user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/');
        }

        if(explode("@", $user->email)[1] !== 'gmail.com'){
            return redirect()->to('/')->with('error', 'Please use email ending "gmail".');
        }

        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->save();
			auth()->login($newUser, true);

        }

        return redirect()->to('/');
    }


}
