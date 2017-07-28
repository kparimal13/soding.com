<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
class tasks extends Authenticatable
{
    use Notifiable;
public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $table = 'tasks';
  

}
