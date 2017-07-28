<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use DB;
use App\user_details;
class PaginationController extends Controller
{
    public function pagination(Request $r)
	{
		
		
		
		$user_details = DB::table('tasks')->paginate(4);
		
		return view('user.pagination',compact('user_details'));
	}
	
	
}
