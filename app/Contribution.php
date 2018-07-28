<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contribution extends Model
{
    protected $table = "contributions";

    public function getContributions()
    {
        $destinations = DB::select("SELECT d.*, c.id as contribution_id, c.user_id, u.first_name, u.last_name, c.status FROM contributions as c
                                   LEFT JOIN destination as d ON c.destination_id = d.id
                                   LEFT JOIN users as u ON c.user_id = u.id");
        return $destinations;
    }
}
