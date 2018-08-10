<?php

namespace App\Http\Controllers\Auth;

use App\Auth\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Mockery\Exception;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    
    public function redirectToProvider()
    {
        return \Laravel\Socialite\Facades\Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        try{
            $user = \Laravel\Socialite\Facades\Socialite::driver('facebook')->user();
        }catch (Exception $e)
        {
            return redirect('auth/facebook');
        }
//        dd($user);
        $authUser = $this->friendOrCreateUser($user);
//        dd($authUser);
//        Auth::login($authUser, true);
        auth()->login($authUser);
        return redirect()->route('home');
    }

    public function friendOrCreateUser($facebookUser)
    {
        $authUser = User::where('facebook_id', $facebookUser->id)->first();
        if($authUser)
        {
            return $authUser;
        }
        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook_id' => $facebookUser->id,
            'avatar' => $facebookUser->avatar
        ]);
    }


    public function redirectToGoogle()
    {
        return \Laravel\Socialite\Facades\Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try{
            $user = \Laravel\Socialite\Facades\Socialite::driver('google')->user();
        }catch (Exception $e)
        {
            return redirect('auth/google');
        }
//        dd($user);
        $authUser = $this->GoogleOrCreateUser($user);
//        dd($authUser);
//        Auth::login($authUser, true);
        auth()->login($authUser);
        return redirect()->route('home');
    }

    public function GoogleOrCreateUser($googleUser)
    {
        $authUser = User::where('google_id', $googleUser->id)->first();
        if($authUser)
        {
            return $authUser;
        }
        return User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_id' => $googleUser->id,
            'avatar' => $googleUser->avatar
        ]);
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
