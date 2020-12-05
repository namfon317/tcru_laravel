<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\material;
class MaterialController extends Controller
{

    public function getMaterial()
    {
        $getall = material::all();
        return response()->json($getall,200); 
    }
    public function addMaterial(Request $request)
    {
        $new = new material;
        $new ->  metarial_id = $request ->input('metarial_id');
        $new ->  quantity = $request ->input('quantity');
        $new ->  material_name = $request ->input('material_name');
        $new ->  weight = $request ->input('weight');
        $new ->  remain = $request ->input('remain');
        $new ->  production_id = $request ->input('production_id');
        $new ->  capacity_id = $request ->input('capacity_id');
        $new -> save();
        return response()->json(['newitem'=>$new],201);
    }


}