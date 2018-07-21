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
public function addToFavourite(Request $request)
    {
        $userId = $request->input('user_id');
        $desId = $request->input('destination_id');
        $is_favourited = 1;
        $message = "";
        if ($this->isFavourited($userId, $desId)) {
            $result = Favourite::where([['user_id', $userId],['destination_id', $desId]])->delete();
            $is_favourited = 0;
            $message = "Removed from favourite";
        } else {
            $favourite = new Favourite();
            $favourite->destination_id = $request->input('destination_id');
            $favourite->user_id = $request->input('user_id');
            $favourite->created_at = date('Y-m-d H:i:s');
            $favourite->updated_at = NULL;
            $result = $favourite->save();
            $is_favourited = 1;
            $message = "Added to favourite";
        }

        return response()->json(array(
            'error' => false,
            'message' => $message,
            'is_favourited' => $is_favourited
        ));
    }

    public function getFavourites($userId)
    {
        $favourites = Favourite::where('user_id', $userId)->get();
        return response()->json(
            array(
                'favourites' => $favourites
            )
        );
    }

    public function isFavourited($userId, $desId)
    {
        $count = Favourite::where([['user_id', $userId],['destination_id', $desId]])->count();
        return $count;
    }

    public function getDestination($userId)
    {
        $drepo = new Destination();
        $destinations = $drepo->getDestinationWithFavouriteStatus($userId);
        return response()->json(
            array(
                'destination_list' => $destinations
            )
        );
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
