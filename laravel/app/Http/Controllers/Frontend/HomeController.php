<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $filedata = file_get_contents(base_path().'/services/services.json');
        $services = json_decode($filedata);
        return view('frontend.index', ["services"=>$services]);
    }
}
