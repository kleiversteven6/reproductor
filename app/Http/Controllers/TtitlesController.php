<?php

namespace App\Http\Controllers;

use App\Models\Ttitles;
use Illuminate\Http\Request;
use Validator;
class TtitlesController extends Controller
{
    public function save(Request $request) //

    {
        ini_set('memory_limit','10240M');
        /* $modelCab= new Ttitles;
        $modelCab['TTITLES_Name'] = $request->nombre;
        $modelCab['TTITLES_Pista'] = 3;
        $modelCab['TTITLES_Status'] = 1;
        $modelCab->save();*/
        
        if ($request->file()) {
            $file = $request->file('file')->getClientOriginalName();

            $request->file('file')->storeAs("public/music", $file);
        }

    }
}