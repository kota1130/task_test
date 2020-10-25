<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class User extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
}
