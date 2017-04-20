<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [];
    protected $primarykey = 'rest_id';
    public $timestamps = false;
}
