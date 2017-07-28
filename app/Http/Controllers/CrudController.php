<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use DB;
use Session;
class CrudController extends Controller
{
    public function getInsert()
	{
		
		return view('user.getInsert');
	}
	
	
	
	
	public function postInsert( Request $r)
	{
		
		if( strlen($r->name) == 0 || strlen($r->description) == 0 )
			return redirect('getInsert')->with('status', 'All fields are mandatory');
		else if (!preg_match("/^[a-zA-Z ]*$/",$r->name)) {
			
			return redirect('getInsert')->with('status', 'Only letters and white space allowed in Name.');
		}
		
	
	
		DB::table('tasks')->insert(
			['name' => $r->name,
			'description'=>$r->description,
			'dateUpdated'=>date("Y-m-d H:i:s")]);
			
			
			
			return redirect('pagination');

	}
	
	
	
	public function getEditDashboard($id,Request $r)
	{
		
			$user_details = DB::table('tasks')->where([
    ['id', '=', $id]
])->first();/* DB::table('user_details')->where('id', $id)->first(); */
			
			return view('user.getEditDashboard',compact('user_details'));
	}
	
	
	public function postUpdateDashboard( Request $r,$id)
	{
		
		
		
		
		
		
		
		
		DB::table('tasks')->where('id', $r->id)->update(['name' => $r->name , 'description' => $r->description , 'dateUpdated' => date('Y-m-d H:i:s') ]);
		
		
		
		return redirect('pagination');
	}
	
	
	public function postDeletePagination( Request $r, $id  )
	{
		
		

		
		
		
		DB::table('tasks')->where('id','=', $id)->delete();
		
		return redirect('pagination');
	}
	
	
	
}
