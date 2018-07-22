<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destination extends Model
{
    protected $table = 'destination';

    public function getDestinationWithFavouriteStatus($userId)
    {
        $destination = DB::select("SELECT d.*, if (f.user_id, 1, 0) as favourite FROM destination as d
                                LEFT JOIN (
                                    SELECT * FROM favourites WHERE user_id = $userId
                                ) as f ON d.id = f.destination_id");
        return $destination;
    }

    public function getFavouriteDestination($userId)
    {
        $destination = DB::select("SELECT d.*, if (f.user_id, 1, 0) as favourite FROM destination as d
                                   LEFT JOIN favourites as f ON d.id = f.destination_id
                                   WHERE f.user_id = $userId");
        return $destination;
    }
}
