<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destination extends Model
{
    protected $table = 'destination';

    public function getDestinationWithFavouriteStatus($userId)
    {
        $destination = DB::select("SELECT d.*, if (f.user_id, 1, 0) as favourite, c.status FROM destination as d
                                LEFT JOIN (
                                    SELECT * FROM favourites WHERE user_id = $userId
                                ) as f ON d.id = f.destination_id
                                LEFT JOIN contributions as c ON d.id = c.destination_id");
        return $destination;
    }

    public function getFavouriteDestination($userId)
    {
        $destination = DB::select("SELECT d.*, if (f.user_id, 1, 0) as favourite FROM destination as d
                                   LEFT JOIN favourites as f ON d.id = f.destination_id
                                   WHERE f.user_id = $userId");
        return $destination;
    }

    public function getContributedDestination($userId)
    {
        $destination = DB::select("SELECT d.*, c.user_id, u.first_name, u.last_name, c.status FROM destination as d
                                   LEFT JOIN contributions as c ON d.id = c.destination_id
                                   LEFT JOIN users as u ON c.user_id = u.id
                                   WHERE c.user_id = $userId");
        return $destination;
    }

    public function getCountDestinations()
    {
        $count = DB::select("SELECT COUNT(d.id) as total FROM destination as d");
        $count = $count[0]->total;
        return $count;
    }

}
