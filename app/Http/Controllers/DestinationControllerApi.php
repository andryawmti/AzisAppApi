<?php

namespace App\Http\Controllers;

use App\Contribution;
use App\Destination;
use App\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function getFavourite($userId)
    {
        $drepo = new Destination();
        $favourites = $drepo->getFavouriteDestination($userId);
        return response()->json(
            array(
                'favourite_list' => $favourites
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

    public function addContribution(Request $request)
    {
        $destination = new Destination();
        $destination->title = $request->input('title');
        $destination->latitude = $request->input('latitude');
        $destination->longitude = $request->input('longitude');
        $destination->description = $request->input('description');
        $destination->created_at = date("Y-m-d H:i:s");
        $destination->updated_at = NULL;

        $destination->save();

        $contribution = new Contribution();
        $contribution->user_id = $request->input('user_id');
        $contribution->destination_id = $destination->id;
        $contribution->created_at = date("Y-m-d H:i:s");
        $contribution->updated_at = NULL;

        $contribution->save();

        $message = "Contribution Added";

        return response()->json(array(
            'error' => false,
            'message' => $message,
            'destination_id' => $destination->id
        ));

    }

    public function uploadDestinationPicture(Request $request, $id)
    {
        $destination = Destination::find($id);

        if ($request->hasFile('picture')) {
            $path = Storage::putFile('public/images/destination', $request->file('picture'));
            $url = Storage::url($path);
            $destination->picture = $url;
        }

        $destination->save();

        $message = "Contribution Spot added";

        return response()->json(array(
            'error' => false,
            'message' => $message,
        ));
    }

    public function getContributed($userId)
    {
        $drepo = new Destination();
        $favourites = $drepo->getContributedDestination($userId);
        return response()->json(
            array(
                'contribution_list' => $favourites
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
