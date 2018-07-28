<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * show admin dashboard
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $admins = Admin::all();
        return view('admin.index')->with(['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password1'));
        $admin->birth_date = $request->input('birth_date');
        $admin->address = $request->input('address');
        $admin->created_at = date('Y-m-d H:i:s');
        $admin->updated_at = NULL;
        if ($request->hasFile('photo')) {
            $path = Storage::putFile('public/images/admin', $request->file('photo'));
            $url = Storage::url($path);
            $admin->photo = $url;
            $admin->photo_mime = $request->file('photo')->getClientMimeType();
        }
        $save = $admin->save();

        return redirect()->route('admin.create');
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
        $admin = Admin::find($id);
        return view('admin.edit')->with(['admin' => $admin]);
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
        $admin = Admin::find($id);
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->email = $request->input('email');
        if ($request->input('password') != "") {
            $admin->password = Hash::make($request->input('password1'));
        }
        $admin->birth_date = $request->input('birth_date');
        $admin->address = $request->input('address');
        $admin->created_at = date('Y-m-d H:i:s');
        $admin->updated_at = NULL;
        if ($request->hasFile('photo')) {
            $path = Storage::putFile('public/images/admin', $request->file('photo'));
            $url = Storage::url($path);
            $admin->photo = $url;
            $admin->photo_mime = $request->file('photo')->getClientMimeType();
        }
        $save = $admin->save();

        return redirect()->route('admin.edit', ['admin' => $admin->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admin.index');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function saveProfile(Request $request)
    {
        $admin = Admin::find($request->input('id'));
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->email = $request->input('email');
        if ($request->input('password') != "") {
            $admin->password = Hash::make($request->input('password1'));
        }
        $admin->birth_date =  date('Y-m-d', strtotime($request->input('birth_date')));
        $admin->address = $request->input('address');
        $admin->updated_at = date('Y-m-d H:i:s');
        if ($request->hasFile('photo')) {
            $path = Storage::putFile('public/images/admin', $request->file('photo'));
            $url = Storage::url($path);
            $admin->photo = $url;
            $admin->photo_mime = $request->file('photo')->getClientMimeType();
        }
        $save = $admin->save();

        return redirect()->route('profile', ['admin' => $admin->id]);
    }

}
