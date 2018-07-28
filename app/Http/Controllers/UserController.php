<?php

namespace App\Http\Controllers;

use App\Destination;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password1'));
        $user->birth_date = $request->input('birth_date');
        $user->address = $request->input('address');
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = NULL;
        if ($request->hasFile('photo')) {
            $path = Storage::putFile('public/images/user', $request->file('photo'));
            $url = Storage::url($path);
            $user->photo = $url;
            $user->photo_mime = $request->file('photo')->getClientMimeType();
        }
        $save = $user->save();

        return redirect()->route('user.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->birth_date = $request->input('birth_date');
        $user->address = $request->input('address');
        $user->updated_at = date('Y-m-d H:i:s');
        if ($request->hasFile('photo')) {
            $path = Storage::putFile('public/images/user', $request->file('photo'));
            $url = Storage::url($path);
            $user->photo = $url;
            $user->photo_mime = $request->file('photo')->getClientMimeType();
        }

        $save = $user->save();

        return redirect()->route('user.edit', ['user' => $user->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
