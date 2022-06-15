<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        $role = Auth::user()->role;
        if($role == '2'){
            return view('admin');
        }
        elseif($role == '1'){
            return view('boarding');
        }
        else{
            return view('dashboard');
        }
    }
    public function addcheckin(Request $request){

        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role = '1';
        $data->save();
        return redirect()->back();

    }
}
