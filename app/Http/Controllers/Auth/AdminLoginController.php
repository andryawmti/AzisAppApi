<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest:admin', ['except'=>['adminLogout']]);
    }

    /**
     * Show login form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.loginv2');
    }

    /**
     * Login
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // validate the form data
        $this->validate($request, array(
            'email' => 'required|email',
            'password' => 'required|min:6'
        ));

        $credentials = array(
            'email' => $request->email,
            'password' => $request->password
        );

        // attempt to log the user in
        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('dashboard'));
        }

        $params = [
            'email' => $request->input('email'),
            'remember' => $request->input('remember'),
            'message' => "You email or password is incorrect"
        ];

        // if unsuccessful, then redirect back to login with the form data
        return redirect()->back()->withInput($params);
    }

    /**
     * Logout
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }


}
