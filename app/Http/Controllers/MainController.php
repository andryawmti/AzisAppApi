<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Contribution;
use App\Destination;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * MainController constructor.
     */
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
        $d_repo = new Destination();
        $c_repo = new Contribution();
        $u_repo = new User();
        $a_repo = new Admin();

        $lastAddedDestination = Destination::orderBy('id','desc')->limit('5')->get();
        $lastUser = User::orderBy('id', 'desc')->limit('5')->get();

        $params = [
            'dtotal' => $d_repo->getCountDestinations(),
            'ctotal' => $c_repo->getCountAllContribution(),
            'utotal' => $u_repo->getCountUser(),
            'atotal' => $a_repo->getCountAdmin(),
            'lastdes' => $lastAddedDestination,
            'lastuser' => $lastUser,
        ];



        return view('dashboardv2')->with(['params'=>(object)$params]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
