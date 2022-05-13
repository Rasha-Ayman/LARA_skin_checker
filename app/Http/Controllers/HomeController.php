<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('clients.home');
    }

    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->is_admin=='0')
            {
                return view('clients.home');
            }
            else 
            { 
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }

    /*public function appointment()
    {
        $data = new appointment;
        $data->name=$request->name; 
        $data->email=$request->email; 
        $data->date=$request->date; 
        $data->time=$request->time; 
        $data->phone=$request->number; 
        $data->message=$request->message; 
        $data->dermatologist=$request->dermatologist; 
        $data->status='In progress'; 
        $data->name=$request->name; 
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id; 
        }
        $data->save();
        return redirect()->back();

    }*/
    

    
}
