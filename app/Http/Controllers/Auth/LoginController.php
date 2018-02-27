<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Mockery\Exception;
use App\User;
use App\SocialProvaider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }




    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }




    public function handleProviderCallback()
    {
        try{
            $userinfo = Socialite::driver('google')->stateless()->user();

        }catch (Exception $e){
            return redirect('/');

          }

   $socialprovaider=SocialProvaider::where('provaider_id',$userinfo->getId())->first();
        if(!$socialprovaider){
            $user=User::firstOrcreate(

                ['email'=>$userinfo->getEmail()],
                ['name'=>$userinfo->getName()]

            );

            $user->SocialProvaider()->create([
                'provaider_id'=>$userinfo->getId(),
                'provaider'=>'goole'
            ]);
        }else
            $user=$socialprovaider->user;
              Auth::login($user);
             return Redirect::to('/home');









    }



}
