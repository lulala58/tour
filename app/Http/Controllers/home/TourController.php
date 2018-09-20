<?php

namespace App\Http\Controllers\home;
use App\type;
use App\tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    //旅游路线
    public  function line(){
        $types = type::all();
        $tours = tour::all();
        return view('tour/line',compact('types','tours'));
    }

    public function guid($id){

        $types = type::all();
        $tours = tour::where('type_id',$id)->get();


        return view('tour/guid',compact('tours','id'));
    }


    //旅游攻略
    public  function strategy(){
        $types = type::all();
        $tours = tour::all();
        return view('tour/strategy',compact('types','tours'));
    }
    public  function type($id){
        $types = type::all();
        $tours = tour::where('type_id',$id)->get();

        return view('tour/type',compact('tours','id'));
    }
    public function detail($id){
        $tour = tour::find($id);

        return view('tour/detail',compact('tour'));
    }
    public function content($id){
        $tour = tour::find($id);

        return view('tour/content',compact('tour'));
    }

}
