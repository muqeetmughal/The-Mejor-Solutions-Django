<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('frontend.services');
    }

    public function detail($slug){

        $filedata = file_get_contents(base_path().'/services/services.json');
        $services = json_decode($filedata);

        // array_filter($services, function($v, $k) use ($search){
        //     return $v['slug'] == $search;
        // })

        foreach ($services as $elm){
            if ($elm->slug ==$slug){

                $service = $elm;
            }
        }

        $htmlcontent = file_get_contents(base_path().'/services/'.$service->slug.'.html');


        return view('frontend.service-detail',['service'=>$service, "content"=>$htmlcontent]);
    }
}
