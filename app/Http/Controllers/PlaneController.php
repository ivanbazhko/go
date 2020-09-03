<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlaneRequest;
use App\Plane;

class PlaneController extends Controller
{
    public function adding(PlaneRequest $req) {

        $sendplane = new Plane;
        $sendplane->name = $req->input('name');
        $sendplane->manufacture = $req->input('manufacture');
        $sendplane->image = $req->input('image');
        $sendplane->price = $req->input('price');
        $sendplane->capacity = $req->input('capacity');
        $sendplane->fuselage = $req->input('fuselage');
        $sendplane->range = $req->input('range');
        $sendplane->description = $req->input('description');

        $sendplane->save();

        return redirect()->route('admin')->with('success', 'Самолёт добавлен');

    }
    
    public function filteredPlanes(Request $req) {
        $pricefrom = $req->input('pricefrom');

        $planes = Plane::all();

        if(isset($pricefrom)){
           $planes = Plane::Pricef($pricefrom)->get();
        }


        return view('store', ['dataPlanes' => $planes]);
    }
}