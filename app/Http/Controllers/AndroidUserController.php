<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordold;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AndroidUserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    public function resetPassword(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', '=', $email)->first();
        if ( isset($user) ) {
            $newPassword = str_random(8);
            $send = Mail::to($email)->send(new ResetPasswordold($newPassword));
            if (Mail::failures()) {
                return json_encode(array(
                    "error" => true,
                    "message" => "Email was not sent"
                ));
            }

            $user->password = Hash::make($newPassword);
            $user->save();

            return json_encode(array(
                "error" => false,
                "message" => "Message has been sent"
            ));
        }

        return json_encode(array(
            "error" => true,
            "message" => "Email not found"
        ));

    }

    public function getUserForAndroid($user){
        $birth_date = $user->birth_date;
        $pregnancy_start = $user->pregnancy_start_at;
        $user->birth_date = date("Y-m-d", strtotime($birth_date));
        $user->pregnancy_start_at = date("Y-m-d", strtotime($pregnancy_start));
        return $user;
    }

    public function signUp(Request $request)
    {
        $email = $request->input('email');
        $userExist = User::where('email', $email)->first();
        if ($userExist instanceof User) {
            return response()->json(array(
                'error' => false,
                'message' => 'You are already SignUp'
            ));
        }
        $user = new User();
        $gmail_id = $request->input('gmail_id');
        $fb_id = $request->input('fb_id');
        $user->gmail_id = ($gmail_id)?$gmail_id:NULL;
        $user->fb_id = ($fb_id)?$fb_id:NULL;
        $user->first_name = $request->input("first_name");
        $user->last_name = $request->input("last_name");
        $user->email = $email;
        $user->password = Hash::make($request->input("password"));

        try{
            $save = $user->save();
            if ($save) {
                return response()->json(array(
                    'error' => false,
                    'message'=> 'You signed up successfully',
                ));
            }else{
                return response()->json(array(
                    'error' => true,
                    'message'=> 'Sign up failed',
                ));
            }
        }catch(\Exception $e){
            return response()->json(array(
                'error' => true,
                'message'=> $e->getMessage(),
            ));
        }

    }

}
