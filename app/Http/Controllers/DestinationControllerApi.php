<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Favourite;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class DestinationControllerApi extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user-api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::all();
        $response = array(
            'destination_list' => $destinations
        );
        return json_encode($response);
    }

    public function addToFavourite(Request $request)
    {
        $favourite = new Favourite();
        $favourite->destination_id = $request->input('destination_id');
        $favourite->user_id = $request->input('user_id');
        $favourite->created_at = date('Y-m-d H:i:s');
        $favourite->updated_at = NULL;

        $save = $favourite->save();

        return response()->json(array(
            'error' => false,
            'message'=> 'Added to favourite',
        ));
    }

    public function getFavourite($userId)
    {
        $favourites = Favourite::where('user_id', $userId)->get();
        return response()->json(
            array(
                'favourites' => $favourites
            )
        );
    }

    public function getDestination($userId)
    {
        $drepo = new Destination();
        $destinations = $drepo->getDestinationWithFavouriteStatus($userId);
        return response()->json($destinations);
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
