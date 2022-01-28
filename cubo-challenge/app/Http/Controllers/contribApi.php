<?php

namespace App\Http\Controllers;

use App\Models\contributors;
use Illuminate\Http\Request;

class contribApi extends Controller
{
    function createContrib(Request $req){
        $cont = new contributors();
        $cont->firstName = $req->firstName;
        $cont->lastName = $req->lastName;
        $cont->contrib = $req->contrib;
        $cont->save();

        return response()->json([
            "message" => "Contribuente inserido com sucesso"
        ], 201);
    }

    function listContrib(){
        return contributors::all();
    }

    function delContrib($id){
        if ($cont = contributors::findOrFail($id)) {
            $cont->delete();

            return response()->json([
                "message" => "Excluido com sucesso"
            ], 200);
        }else {
            return 404;
        }

    }

    function updContrib(Request $req, $id){
        $cont = contributors::findOrFail($id);
        $cont->firstName = is_null($req->firstName) ? $cont->firstName : $req->firstName;
        $cont->lastName = is_null($req->lastName) ? $cont->lastName : $req->lastName;
        $cont->contrib = is_null($req->contrib) ? $cont->contrib : $req->contrib;
        $cont->save();

        return response()->json([
            "message" => "Contribuente Atualizado com sucesso"
        ], 200);
    }
    //
}
