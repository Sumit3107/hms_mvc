<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class login extends Controller
{
    public function check(Request $request){
        $user=$request->get('userid')->toArray();
        $pass=$request->get('pass')->toArray();
        $data=DB::select("select * from stafflogin where id='$user'");
        if($user==($data->id) && $pass=($data->pass))
        {
            echo "yes";
        }
        else{
            echo "no";
        }
        // if($user==($data->id) && $pass=($data->pass))
        // {
        //     return view('staff');
        // }
        // else{
        //     return redirect()->back() ->with('alert', 'Wrong id and password!');
        // }
    }
}
