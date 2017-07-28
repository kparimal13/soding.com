<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class user_addresses extends Authenticatable
{
    use Notifiable;
public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $table = 'user_addresses';
  

}
